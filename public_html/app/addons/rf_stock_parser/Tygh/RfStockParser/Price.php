<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser;

use Tygh\Registry;
use Tygh\RfStockParser\AttachmentDownloadType\Factory;
use Tygh\RfStockParser\Currencies\Currency;
use Tygh\Addons\ProductVariations\ServiceProvider;
use Tygh\RfStockParser\Exceptions\EmptyPrice;
use Tygh\RfStockParser\Exceptions\FileNotExists;
use Tygh\RfStockParser\Exceptions\LabelsWrong;
use Tygh\RfStockParser\Exceptions\LicenseWrong;
use Tygh\RfStockParser\Exceptions\ProcessExists;
use Tygh\RfStockParser\Helpers\ExceptionInfo;
use Tygh\RfStockParser\Helpers\MasterProductsHelper;
use Tygh\RfStockParser\Import;
use Tygh\RfStockParser\Helpers\WarehouseHelper;
use Tygh\RfStockParser\Process\Process;
use Tygh\RfStockParser\Process\ProcessFabric;
use Tygh\RfStockParser\Helpers\FilesHelper;

$_error_reporting = error_reporting();
error_reporting($_error_reporting & ~E_NOTICE & ~E_DEPRECATED);

class Price
{
    public const STRATEGY_IN_ENABLE = 0;
    public const STRATEGY_IN_KEEP = 1;
    public const STRATEGY_IN_DISABLE_TRACKING = 2;
    public const STRATEGY_OUT_DISABLE = 0;
    public const STRATEGY_OUT_KEEP = 1;
    public const STRATEGY_OUT_SET_ZERO = 2;
    public const PRICING_STRATEGY_KEEP_OLD_PRICE = 0;
    public const PRICING_STRATEGY_USE_OPT_PRICE = 1;
    public const CRON_HTTP = 'http';
    public const CRON_FTP = 'ftp';
    public const DETAILED_TYPE_UPDATED = 1;
    public const DETAILED_TYPE_ENABLED = 2;
    public const DETAILED_TYPE_DISABLED = 4;
    public const DETAILED_TYPE_HIDDEN = 8;
    public const DETAILED_TYPE_UPDATED_ONLY_PRICES = 16;
    public const EXTRA_CHARGE_TYPE_PERCENT = 0;
    public const EXTRA_CHARGE_TYPE_ABSOLUTE = 1;

    private $parserId;
    private $data;
    private $attachId;

    private $moduleOptions = [];

    /** @var Attachment */
    public $attach;
    /** @var PriceData */
    private $dataProcessor;

    private $sdvMode = false;

    /**
     * @var Process
     */
    private $process;
    /**
     * @var ProcessingData
     */
    private $processingData;

    private $accessTime;
    private array $productIdsOnlyPriceUpdate = [];

    private function __construct() {}

    public static function getInstance($parserId, $manual)
    {
        $obj = new self();
        $obj->data = fn_get_my_supplier_data($parserId);

        if (!empty($obj->data)) {
            $obj->parserId = $parserId;
        } else {
            return null;
        }

        $obj->process = ProcessFabric::getProcess(Process::TYPE_PARSE, $obj->parserId);

        try {
            $obj->initErrorHandler();
            $obj->process->checkRunning();
            $obj->process->saveStatus(true, 1, '', 'start');

            $obj->moduleOptions = fn_rf_stock_parser_get_options($obj->data['company_id']);

            if (Registry::isExist('addons.sd_vendor_products_database')) {
                $obj->sdvMode = true;
            }

            fn_rf_stock_parser_before_install(false);

            $obj->processingData = new ProcessingData();
            $obj->attach = new Attachment($parserId, $obj->data);
            $obj->dataProcessor = new PriceData($parserId, $obj->processingData, $obj->data);

            $obj->processingData['duplicates'] = [];
            $obj->processingData['categories'] = [];

            return $obj;
        } catch (ProcessExists $e) {
            if ($manual) {
                $obj->process->saveError($e->getMessage());
            }

            echo $e->getMessage();
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            $obj->process->saveStatus(0, 0, ExceptionInfo::get($e));
        }
    }

    private function clearNotFound(): void
    {
        db_query('DELETE FROM ?:rf_stock_parser_logs_not_found WHERE my_supplier_id = ?i', $this->parserId);
    }

    public function import($attachId): void
    {
        $notification = new Notification($this->data);

        try {
            echo 'Start cron job id=' . $this->parserId . PHP_EOL;

            if ($attachId) {
                $filePath = $this->attach->get($attachId);
                $this->attachId = $attachId;
            } elseif (!empty($this->data['cron']['http']['url']) || !empty($this->data['cron']['ftp']['url'])) {
                $factoryTypes = new Factory();
                $mode = $this->data['cron']['mode'];
                $attachType = $factoryTypes->getObject($mode);
                $attachType->setPath($this->data['cron'][$mode]['url']);

                list($cronAttachId, $filePath) = $this->attach->download($attachType);
                $this->attachId = $cronAttachId;

                if (empty($filePath) || !file_exists($filePath)) {
                    $notification->sendFileNotExists();
                }
            }

            if (empty($filePath) || !file_exists($filePath)) {
                throw new FileNotExists();
            }

            $this->clearNotFound();

            $init = false;
            $this->accessTime = time();
            $this->data['access_time'] = $this->accessTime; // back compatibility

            foreach ($this->dataProcessor->getData($filePath) as $data) {
                if (!$init) {
                    if (empty($data)) {
                        throw new EmptyPrice();
                    }

                    $init = true;
                    db_query('update ?:rf_stock_parser set access_time = ?i where my_supplier_id = ?i', $this->accessTime, $this->parserId);
                }

                $this->processData($data);
                $this->setProgress('parsing');
                $additionalText = $this->processingData['count'] . '/' . $this->processingData['process']['all_rows_count'];
                echo 'Parsing id=' . $this->parserId . ' ' . $additionalText . PHP_EOL;
            }

            $this->afterProcess();
            $this->process->saveStatus(0, 100, '', 'finish');
            echo 'Done cron job id=' . $this->parserId . PHP_EOL;
        } catch (FileNotExists $e) {
            echo $e->getMessage() . PHP_EOL;
            $this->process->saveStatus(0, 0, $attachId ? $e->getMessage() : '');
        } catch (LabelsWrong $e) {
            echo $e->getMessage() . PHP_EOL;
            $this->process->saveStatus(0, 0, $e->getMessage());
            if (!$attachId) {
                $notification->setLabelsWrong();
            }
        } catch (\Throwable $e) {
            echo $e->getMessage() . PHP_EOL;
            $this->process->saveStatus(0, 0, ExceptionInfo::get($e));
        }

        echo '--------' . PHP_EOL;
    }

    private function afterProcess(): void
    {
        $msg = 'Disable products';
        echo $msg . PHP_EOL;
        $this->process->saveMessage($msg);
        $this->disableProducts();

        $msg = 'Update collections';
        echo $msg . PHP_EOL;
        $this->process->saveMessage($msg);
        $this->updateCollections();

        $msg = 'Save logs';
        echo $msg . PHP_EOL;
        $this->process->saveMessage($msg);
        fn_my_suppliers_clear_logs($this->parserId);
        $this->saveLogs();
    }

    private function processData($data): void
    {
        if (empty($data)) {
            return;
        }

        Registry::set('runtime.rf_stock_parser.process', true);

        $codes = [];
        foreach ($data as $datum) {
            $codes[] = $datum['manufacturer_code'];
        }

        $products = $codesProducts = [];
        if (!empty($codes)) {
            $products = iterator_to_array($this->getProducts([db_quote("p.{$this->data['manufacturer_field']} in (?a)", $codes)]));
            $products = array_replace(...$products);

            foreach ($products as $productId => $product) {
                if (!isset($codesProducts[$product[$this->data['manufacturer_field']]])) {
                    $codesProducts[$product[$this->data['manufacturer_field']]] = [];
                }

                $codesProducts[$product[$this->data['manufacturer_field']]][] = $productId;
            }
        }

        $masterProductsHelper = new MasterProductsHelper();
        $masters = [];
        if ($this->data['attach_to_master'] && !empty($this->data['company_id'])) {
            $masters = $masterProductsHelper->getMasters($codes, $this->data['manufacturer_field']);
        }

        $warehouseAmounts = WarehouseHelper::getAmounts(array_keys($products));

        $notFound = $detailed = $seoDataInsert = [];
        $percent = $this->moduleOptions['large_percent_change'];

        foreach ($data as &$datum) {
            $code = $datum['manufacturer_code'];
            $categories = array_filter($datum['category'] ?? []);

            foreach ($categories as $category) {
                if (!empty($category) && !isset($this->processingData['categories'][$category])) {
                    $this->processingData['categories'][$category] = true;
                }
            }

            if (!empty($datum['manufacturer_code']) && isset($codesProducts[$code])) {
                $currentProducts = $codesProducts[$code];

                if (isset($this->processingData['found'][$datum['manufacturer_code']])) {
                    $this->processingData['duplicates'] = array_merge($this->processingData['duplicates'], $currentProducts);

                    continue;
                }

                $this->processingData['found'][$datum['manufacturer_code']] = true;

                foreach ($currentProducts as $productId) {
                    $update = [];
                    $currentProduct = $products[$productId];
                    $productBrand = $currentProduct['brand'] ?? null;

                    // обновлять только цены!
                    $updateOnlyPrices = $currentProduct['company_id'] !== $this->data['company_id'];

                    if (
                        $this->data['link_to_products'] == Column::LINK_VENDOR_CODE_WITH_BRANDS
                        && (!$productBrand || !in_array($productBrand, $this->data['brands']))
                    ) {
                        continue;
                    }

                    $productCode = $currentProduct['product_code'];
                    $oldAmount = $newAmount = (int) $currentProduct[$this->data['amount_field']];
                    $oldListPrice = $currentProduct['list_price'];
                    $oldMinQty = $currentProduct['min_qty'];
                    $name = $currentProduct['name'];
                    $status = $currentProduct['status'];
                    $prices = $currentProduct['prices'];
                    $ultPrices = $currentProduct['ult_prices'] ?? null;
                    $oldPrice = self::getOldPrice($prices, $ultPrices);

                    $update['supplier_access_time'] = $this->accessTime;
                    $update['updated_timestamp'] = $this->accessTime;

                    list($price_updated, $price_from_price, $percent_price, $percent_list_price, $prices) = $this->updatePrices($currentProduct, $datum, $prices, $ultPrices, $updateOnlyPrices);

                    // ОБНОВЛЯЕМ ТОЛЬКО ЦЕНУ
                    if ($updateOnlyPrices) {
                        $this->productIdsOnlyPriceUpdate[] = $currentProduct['product_id'];

                        $newPrice = $prices[0] ?? $oldPrice;
                        $currentDetailed = [
                            'name' => $name,
                            'old_price' => $oldPrice,
                            'price' => $newPrice,
                            'from_price' => $price_from_price,
                            'product_code' => $productCode,
                            'm_code' => $datum['manufacturer_code'],
                            'old_list_price' => $oldListPrice,
                            'list_price' => $oldListPrice,
                            'p_list_price' => $percent_list_price,
                            'old_amount' => $oldAmount,
                            'amount' => $oldAmount,
                            'status' => $status,
                        ];

                        if ($this->data['keep_logs_days'] > 0) {
                            $detailed[] = db_quote('(?i, ?i, ?i, ?i, ?s, ?i, ?i)', $productId, $this->parserId, $this->accessTime, self::DETAILED_TYPE_UPDATED_ONLY_PRICES, json_encode($currentDetailed), $percent_price, abs($percent_price) >= $percent);
                        }

                        db_query('UPDATE ?:products SET ?u WHERE product_id = ?i and company_id = ?i', $update, $productId, $this->data['company_id']);
                        fn_set_hook('rf_stock_parser_product_post_update', $productId, $currentDetailed);

                        continue;
                    }
                    // \ОБНОВЛЯЕМ ТОЛЬКО ЦЕНУ

                    $setNewAmount = false;
                    if ($currentProduct['rf_stop_update_amount'] != 'Y' && !empty($this->data['company_id'])) {
                        $amounts = self::processAmounts($this->data, $datum);

                        $updateWhData = [];
                        foreach ($amounts as $amountId => $amount) {
                            if (is_numeric($amountId)) {
                                if (!isset($tmpAmount)) {
                                    $tmpAmount = 0;
                                }

                                $updateWhData[$amountId] = [
                                    'warehouse_id' => $amountId,
                                    'amount' => $amount,
                                ];
                            } elseif ($oldAmount != $amount) {
                                $update[$amountId] = $newAmount = $amount;
                            }
                        }

                        if (!empty($updateWhData)) {
                            foreach ($warehouseAmounts[$productId] ?? [] as $amountId => $amount) {
                                if (isset($updateWhData[$amountId])) {
                                    continue;
                                }

                                $updateWhData[$amountId] = [
                                    'warehouse_id' => $amountId,
                                    'amount' => $amount,
                                ];
                            }
                            WarehouseHelper::updateAmounts($productId, $updateWhData);
                            $newAmount = array_sum(array_column($updateWhData, 'amount'));
                        }

                        $setNewAmount = $newAmount != $oldAmount;
                    }

                    if (isset($datum['list_price']) && (float) $oldListPrice != (float) $datum['list_price']) {
                        $update['list_price'] = $datum['list_price'];
                    }

                    if (isset($datum['min_qty']) && $oldMinQty != $datum['min_qty']) {
                        $update['min_qty'] = $datum['min_qty'];
                    }

                    $productOnCheck = fn_allowed_for('MULTIVENDOR') && $currentProduct['status'] == 'R';
                    if ($currentProduct['status'] != 'A' && !$productOnCheck && $currentProduct['rf_stop_update_status'] != 'Y') {
                        if ($this->data['avail_strategy_in'] == self::STRATEGY_IN_ENABLE) {
                            $update['status'] = 'A';
                        } elseif ($this->data['avail_strategy_in'] == self::STRATEGY_IN_DISABLE_TRACKING) {
                            $update['status'] = 'A';
                            $update['tracking'] = 'D';
                        }
                    }

                    $type = ((count($update) > 1 || $price_updated) ? self::DETAILED_TYPE_UPDATED : 0);

                    if (isset($update['status'])) {
                        $type += self::DETAILED_TYPE_ENABLED;
                    }

                    $modifiers = $this->dataProcessor->getAdditionalColumnsModifiers();
                    foreach (Column::getUpdatedColumns() as $typeColumnUpdate => $fields) {
                        switch ($typeColumnUpdate) {
                            case 'product_descriptions':
                                $forUpdate = [];

                                $addForUpdate = function ($field, $langCode, $from = null) use (&$forUpdate, $productId, $datum, $modifiers) {
                                    $originalField = $field;
                                    if (!empty(Column::COLUMN_ALIASES[$field])) {
                                        $field = Column::COLUMN_ALIASES[$field];
                                    }

                                    $from = $from ?? $originalField;
                                    if (isset($datum[$from])) {
                                        $value = $datum[$from];
                                        if (!empty($value) && !empty($modifiers[$from][0])) {
                                            $value = PriceData::getOperationValue($datum[$from], $modifiers[$from][0]);
                                        }

                                        if (!isset($forUpdate[$langCode])) {
                                            $forUpdate[$langCode] = [
                                                'lang_code' => $langCode,
                                                'product_id' => $productId,
                                                $field => $value,
                                            ];
                                        } else {
                                            $forUpdate[$langCode][$field] = $value;
                                        }
                                    }
                                };

                                foreach ($fields as $field) {
                                    if (!in_array($field, $this->data['column_settings']['renewable'] ?? [])) {
                                        continue;
                                    }
                                    $temp = explode('_', $field);
                                    $lang = array_pop($temp);

                                    if (in_array($lang, Column::getLangs())) {
                                        $original = implode('_', $temp);
                                        $addForUpdate($original, $lang, $field);
                                    } else {
                                        foreach (Column::getLangs() as $lang) {
                                            $addForUpdate($field, $lang);
                                        }
                                    }
                                }

                                foreach ($forUpdate as $forU) {
                                    db_query(
                                        'INSERT INTO ?:product_descriptions ?e ON DUPLICATE KEY UPDATE ?u',
                                        $forU,
                                        $forU
                                    );
                                }
                                break;
                            case 'avail_since':
                                if (!in_array('avail_since', $this->data['column_settings']['renewable'] ?? []) || empty($datum['avail_since'])) {
                                    continue 2;
                                }

                                if (!is_numeric($datum['avail_since'])) {
                                    $datum['avail_since'] = strtotime($datum['avail_since']);
                                }

                                if ($currentProduct['avail_since'] != $datum['avail_since']) {
                                    $update['avail_since'] = $datum['avail_since'];
                                }
                                break;
                            case 'image':
                                if (in_array('image', $this->data['column_settings']['renewable'] ?? []) && isset($datum['image'])) {
                                    $filesHelper = new FilesHelper();

                                    $deleteTmpImages = [];
                                    $imagesTypes = [];
                                    $currentImagesPaths = [];
                                    $currentMainPath = null;
                                    $currentState = [];

                                    foreach (array_filter(explode(',', $currentProduct['images'] ?? '')) as $currentImage) {
                                        $temp = explode('RFPARSER', $currentImage);

                                        if (!empty($temp[1])) {
                                            $temp[0] = $temp[1];
                                        }

                                        $currentImagesPaths[] = $temp[0];
                                        if ($temp['2'] == 'M') {
                                            $currentMainPath = $temp[0];
                                        }

                                        $currentState[$temp[0]] = [
                                            'position' => (int) $temp[3],
                                            'type' => $temp[2],
                                        ];
                                    }

                                    $images = [];
                                    foreach ($datum['image'] as $k => $image) {
                                        $modValue = PriceData::getOperationValue($image, $modifiers['image'][$k] ?? '');
                                        if (isset($modValue)) {
                                            $images = array_merge($images, (array) $modValue);
                                        } else {
                                            $images[] = $image;
                                        }
                                    }

                                    foreach ($images as &$tmpImage) {
                                        if (mb_stripos($tmpImage, '.php') !== false) {
                                            $tmpImage = $filesHelper->imageToServer($tmpImage);
                                            $imagesTypes[$tmpImage] = 'server';
                                            $deleteTmpImages[] = $tmpImage;
                                        }
                                    }
                                    unset($tmpImage);

                                    $newImagesPaths = $images;
                                    $imagesToDelete = array_diff($currentImagesPaths, $newImagesPaths);
                                    $imagesToInsert = array_diff($newImagesPaths, $currentImagesPaths);

                                    if (!empty($imagesToDelete)) {
                                        rf_stock_parser_delete_product_image_pair($imagesToDelete, $productId);
                                    }

                                    if (!empty($imagesToInsert)) {
                                        foreach ($imagesToInsert as $k => $imageToInsert) {
                                            $_REQUEST['product_add_additional_image_data'][$k] = [
                                                'detailed_alt' => '',
                                                'type' => 'A',
                                                'object_id' => '0',
                                                'position' => 1,
                                                'is_new' => 'Y',
                                            ];

                                            $_REQUEST['type_product_add_additional_image_detailed'][$k] = $imagesTypes[$images[$k]] ?? 'url';
                                            $_REQUEST['file_product_add_additional_image_detailed'][$k] = $images[$k];
                                        }

                                        fn_attach_image_pairs('product_add_additional', 'product', $productId, CART_LANGUAGE);

                                        unset(
                                            $_REQUEST['product_main_image_data'],
                                            $_REQUEST['product_add_additional_image_data'],
                                            $_REQUEST['type_product_main_image_detailed'],
                                            $_REQUEST['file_product_main_image_detailed'],
                                            $_REQUEST['type_product_add_additional_image_detailed'],
                                            $_REQUEST['file_product_add_additional_image_detailed']
                                        );

                                        $attachResult = Registry::get('runtime.rf_stock_parser.attach_result');

                                        foreach ($attachResult as $k => $res) {
                                            if (empty($res['pair_id'])) {
                                                unset($newImagesPaths[$k]);
                                            }
                                        }
                                    }

                                    // чтоб все-таки не всегда делать запрос
                                    $updateSet = [];
                                    $sqlPositions = '';
                                    $newImagesPaths = array_values($newImagesPaths);

                                    foreach ($newImagesPaths as $imagePosition => $imagePath) {
                                        $currentType = $imagePosition == 0 ? 'M' : 'A';

                                        if (
                                            !isset($updateSet['main'])
                                            && (
                                                ($currentType == 'M' && $currentMainPath != $imagePath)
                                                || (!empty($currentState) && $currentState[$imagePath]['type'] != $currentType)
                                            )
                                        ) {
                                            $updateSet['main'] = db_quote(
                                                '
                                                il.type = CASE
                                                    WHEN i.rf_original = ?s OR (i.rf_original IS NULL AND i.image_path = ?s) THEN "M"
                                                    ELSE "A" END',
                                                $newImagesPaths[0],
                                                $newImagesPaths[0]
                                            );
                                        }

                                        if (empty($currentState) || $currentState[$imagePath]['position'] !== $imagePosition) {
                                            $sqlPositions .= db_quote(
                                                '
                                                WHEN i.rf_original = ?s OR (i.rf_original IS NULL AND i.image_path = ?s) THEN ?i',
                                                $imagePath,
                                                $imagePath,
                                                $imagePosition
                                            );
                                        }
                                    }

                                    if (!empty($sqlPositions)) {
                                        $updateSet[] = 'il.position = CASE ' . $sqlPositions . ' ELSE il.position END';
                                    }

                                    // restore main image and images positions
                                    if (!empty($updateSet)) {
                                        db_query(
                                            '
                                            UPDATE ?:images_links as il
                                            JOIN ?:images as i ON i.image_id = il.detailed_id
                                            SET ' . implode(', ', $updateSet) . '
                                            WHERE il.object_id = ?i AND il.object_type = "product"',
                                            $productId
                                        );
                                    }

                                    foreach ($deleteTmpImages as $deleteTmpImage) {
                                        try {
                                            unlink($deleteTmpImage);
                                        } catch (\Throwable $e) {
                                        }
                                    }
                                }
                                break;
                            case 'category':
                                if (in_array('category', $this->data['column_settings']['renewable'] ?? []) && isset($datum['category'])) {
                                    $newCategories = $this->getCategoryIds($datum['category']);
                                    if (!empty($newCategories)) {
                                        $currentCategories = $currentProduct['categories'];
                                        $equal = array_diff($newCategories, $currentCategories) === array_diff($currentCategories, $newCategories);

                                        if (!$equal) {
                                            db_query('DELETE FROM ?:products_categories WHERE product_id = ?i', $productId);

                                            $newCategoriesInsert = [];
                                            foreach ($newCategories as $k => $newCategory) {
                                                $newCategoriesInsert[] = [
                                                    'category_id' => $newCategory,
                                                    'product_id' => $productId,
                                                    'link_type' => $k > 0 ? 'A' : 'M',
                                                ];
                                            }

                                            db_query('INSERT INTO ?:products_categories ?m', $newCategoriesInsert);
                                        }
                                    }
                                }
                                break;
                            case 'seo_name':
                                if (Registry::isExist('addons.seo') && in_array('seo_name', $this->data['column_settings']['renewable'] ?? [])) {
                                    $seoDataInsert[] = [
                                        'object_id' => $productId,
                                        'company_id' => $this->data['company_id'],
                                        'type' => 'p',
                                        'lang_code' => CART_LANGUAGE,
                                        'path' => '',
                                        'name' => $datum['seo_name'],
                                    ];
                                }
                                break;
                            case 'buy_now_url':
                                if (Registry::isExist('addons.catalog_mode') && in_array('buy_now_url', $this->data['column_settings']['renewable'] ?? [])) {
                                    $update['buy_now_url'] = $datum['buy_now_url'];
                                }
                                break;
                            case 'product_field':
                                if (!empty($datum['product_field'])) {
                                    foreach ($datum['product_field'] as $productField) {
                                        $update[$productField['eq']] = $productField['value'];
                                    }
                                }
                                break;
                        }
                    }

                    if (isset($datum['amount']) && empty($datum['amount'])) {
                        if (isset($datum['opt_price'])) {
                            if ($this->data['update_price_is_out_of_stock'] === 'update') {
                                $update['rf_cost'] = $datum['opt_price'];
                            } elseif ($this->data['update_price_is_out_of_stock'] === 'set_zero') {
                                $update['rf_cost'] = 0;
                            }
                        }
                    } elseif (isset($datum['opt_price'])) {
                        $update['rf_cost'] = $datum['opt_price'];
                    }

                    $currentDetailed = [];
                    $newPrice = $prices[0] ?? $oldPrice;
                    if (count($update) > 1 || $price_updated || $setNewAmount) {
                        $currentDetailed = [
                            'name' => $name,
                            'old_price' => $oldPrice,
                            'price' => $newPrice,
                            'from_price' => $price_from_price,
                            'product_code' => $productCode,
                            'm_code' => $datum['manufacturer_code'],
                            'old_list_price' => $oldListPrice,
                            'list_price' => $datum['list_price'] ?? '',
                            'p_list_price' => $percent_list_price,
                            'old_amount' => $oldAmount,
                            'amount' => $newAmount,
                            'status' => $status,
                        ];

                        if ($this->data['keep_logs_days'] > 0) {
                            $detailed[] = db_quote('(?i, ?i, ?i, ?i, ?s, ?i, ?i)', $productId, $this->parserId, $this->accessTime, $type, json_encode($currentDetailed), $percent_price, abs($percent_price) >= $percent);
                        }
                    }

                    if ($this->sdvMode) {
                        if (isset($update['amount'])) {
                            db_query('UPDATE ?:product_vendor_sell SET amount = ?i WHERE product_id = ?i AND company_id = ?i', $update['amount'], $productId, $this->data['company_id']);
                            unset($update['amount']);
                        }
                    }

                    if (!empty($masters[$datum['manufacturer_code']]) && empty($currentProduct['master_product_id'])) {
                        $update['master_product_id'] = $products[$productId]['master_product_id'] = $masters[$datum['manufacturer_code']]['product_id'];
                        $update['master_product_status'] = $masters[$datum['manufacturer_code']]['master_product_status'];
                    }

                    db_query('UPDATE ?:products SET ?u WHERE product_id = ?i and company_id = ?i', $update, $productId, $this->data['company_id']);
                    fn_set_hook('rf_stock_parser_product_post_update', $productId, $currentDetailed);
                }
            } else {
                $datum['modifiers'] = $this->dataProcessor->getAdditionalColumnsModifiers();
                $datum['in_name'] = $this->dataProcessor->getAdditionalColumnsInName();
                $datum['category'] = $this->getCategoryIds($datum['category'] ?? []);
                if (empty($datum['category'])) {
                    unset($datum['category']);
                }

                $imported = null;

                $values = [
                    'manufacturer_code' => $datum['manufacturer_code'],
                    'brand' => $datum['feature']['m' . $this->moduleOptions['brand_feature_id']] ?? null,
                    'category_id' => !empty($datum['category']) ? reset($datum['category']) : null,
                ];

                $tempManufacturerCode = $datum['manufacturer_code'];

                unset(
                    $datum['my_supplier_id'],
                    $datum['manufacturer_code']
                );

                if ($this->data['autoimport'] && !empty($values['category_id']) || !empty($masters[$tempManufacturerCode])) {
                    try {
                        $restoreNotification = isset($_SESSION['notifications']);

                        if ($restoreNotification) {
                            $originalNotifications = $_SESSION['notifications'];
                        }

                        $values['value'] = $datum;
                        $importedProductCodes = Import::processOneRealTime($this->parserId, $values, true);

                        if ($restoreNotification) {
                            $_SESSION['notifications'] = $originalNotifications;
                        }

                        if (in_array($values['manufacturer_code'], $importedProductCodes)) {
                            $imported = true;
                        }
                    } catch (\Exception $e) {
                    }
                }

                if (!$imported) {
                    if (!empty($datum['avail_since']) && !is_numeric($datum['avail_since'])) {
                        $datum['avail_since'] = strtotime($datum['avail_since']);
                    }

                    $notFoundInsert = json_encode($datum);
                    $notFound[] = db_quote(
                        "({$this->parserId}, ?s, ?s, ?s, ?i)",
                        $values['manufacturer_code'],
                        $notFoundInsert,
                        $values['brand'],
                        $values['category_id']
                    );
                    unset($values);
                }
            }
        }
        unset($datum);

        if (!empty($detailed)) {
            db_query('INSERT INTO ?:rf_stock_parser_logs_detailed (product_id, my_supplier_id, access_time, type, value, p_price, large_percentage) VALUES' . implode(',', $detailed));
        }

        if (!empty($notFound)) {
            db_query('INSERT INTO ?:rf_stock_parser_logs_not_found (my_supplier_id, manufacturer_code, value, brand, category_id) VALUES' . implode(',', $notFound));
        }

        if (!empty($seoDataInsert)) {
            $productIds = array_column($seoDataInsert, 'object_id');
            $categoriesForSeo = db_get_hash_single_array('
                SELECT pc.product_id, c.id_path
                FROM ?:products_categories as pc
                JOIN ?:categories as c ON c.category_id = pc.category_id
                WHERE pc.product_id IN (?a) AND pc.link_type = "M"
            ', ['product_id', 'id_path'], $productIds);

            if (!empty($categoriesForSeo)) {
                foreach ($seoDataInsert as &$item) {
                    if (!empty($categoriesForSeo[$item['object']])) {
                        $item['path'] = $categoriesForSeo[$item['object']];
                    }
                }
                unset($item);

                db_query(
                    'INSERT INTO ?:seo_names ?m ON DUPLICATE KEY UPDATE name = VALUES(name)',
                    $seoDataInsert
                );
            }
        }

        if (!empty($products)) {
            $masterProductsHelper->update($products);
        }

        Registry::set('runtime.rf_stock_parser.process', false);
    }

    public static function processAmounts($supplierData, $datum): array
    {
        $amounts = [];

        foreach ($datum as $keyName => $value) {
            if (strpos($keyName, 'warehouse') !== false) {
                $warehouseId = str_replace('warehouse', '', $keyName);
                $warehouseAmount = self::processAmount($supplierData, $value);

                $amounts[$warehouseId] = $warehouseAmount !== null ? $warehouseAmount : 0;
            }
        }

        if (!empty($amounts)) {
            $amounts[$supplierData['amount_field']] = array_sum($amounts);
        } else {
            $defaultAmount = self::processAmount($supplierData, $datum['amount'] ?? null);

            if ($defaultAmount !== null) {
                $amounts[$supplierData['amount_field']] = $defaultAmount;
            } elseif (!empty($supplierData['amount_field_not_in_schema'])) {
                $defaultAmount = (int) $supplierData['amount_field_not_in_schema_value'];
                if (strpos($supplierData['amount_field_not_in_schema'], 'warehouse') !== false) {
                    $warehouseId = str_replace('warehouse', '', $supplierData['amount_field_not_in_schema']);
                    $amounts[$warehouseId] = $defaultAmount;
                } else {
                    $amounts[$supplierData['amount_field_not_in_schema']] = $defaultAmount;
                }
            }
        }

        return $amounts;
    }

    private static function processAmount($supplierData, $amount = null): ?int
    {
        if (!isset($amount)) {
            return null;
        }

        if (!empty($supplierData['amount_synonyms']) && is_array($supplierData['amount_synonyms'])) {
            foreach ($supplierData['amount_synonyms'] as $amount_synonym) {
                if (
                    (!empty($amount_synonym['partial']) && stripos($amount, $amount_synonym['name']) !== false)
                    || (mb_strtolower($amount) === mb_strtolower($amount_synonym['name']))
                ) {
                    $amount = $amount_synonym['value'];
                    break;
                }
            }
        }

        $newAmount = null;
        if (isset($amount) && is_numeric($amount)) {
            $newAmount = (int) $amount;
        }

        return $newAmount;
    }

    public function updatePrices($currentProduct, $datum, $prices, $ultPrices, $updateOnlyPrices)
    {
        // у нешаренных не должно быть шаренных цен
        if (empty($currentProduct['shared'])) {
            $ultPrices = $prices;
        }

        $price_updated = false;
        list($prices, $pricesChanged, $price_from_price) = self::processPrices($this->data, $datum, $currentProduct['category_id'], $prices, $ultPrices);

        $percent_price = 0;
        $percent_list_price = '';
        if ($currentProduct['rf_stop_update_price'] != 'Y' && !empty($this->data['company_id'])) {
            if (!empty($prices) && $pricesChanged) {
                $price_updated = true;

                if (!isset($prices[0])) {
                    $prices[0] = 0;
                }

                if ($this->sdvMode) {
                    db_query(
                        'DELETE FROM ?:product_prices WHERE product_id = ?i AND company_id = ?i',
                        $currentProduct['product_id'],
                        $this->data['company_id']
                    );

                    foreach ($prices as $priceUserGroup => $price) {
                        if (self::userGroupExists($priceUserGroup)) {
                            db_query(
                                'INSERT INTO ?:product_prices (product_id, price, lower_limit, usergroup_id, company_id) VALUES(?i, ?s, 1, ?i, ?i) ON DUPLICATE KEY UPDATE price = ?s',
                                $currentProduct['product_id'],
                                $price,
                                $priceUserGroup,
                                $this->data['company_id'],
                                $price
                            );
                        }
                    }
                } else {
                    if (!$updateOnlyPrices) {
                        db_query('DELETE FROM ?:product_prices WHERE product_id = ?i', $currentProduct['product_id']);
                    }

                    if (fn_allowed_for('ULTIMATE')) {
                        db_query('DELETE FROM ?:ult_product_prices WHERE product_id = ?i AND company_id = ?i', $currentProduct['product_id'], $this->data['company_id']);
                    }

                    foreach ($prices as $priceUserGroup => $price) {
                        if (self::userGroupExists($priceUserGroup)) {
                            if (!empty($currentProduct['shared'])) {
                                db_query(
                                    'INSERT INTO ?:ult_product_prices (product_id, price, lower_limit, usergroup_id, company_id) VALUES(?i, ?s, 1, ?i, ?i) ON DUPLICATE KEY UPDATE price = ?s',
                                    $currentProduct['product_id'],
                                    $price,
                                    $priceUserGroup,
                                    $this->data['company_id'],
                                    $price
                                );
                            }

                            // не трогаем основную цену
                            if (!$updateOnlyPrices) {
                                db_query(
                                    'INSERT INTO ?:product_prices (product_id, price, lower_limit, usergroup_id) VALUES(?i, ?s, 1, ?i) ON DUPLICATE KEY UPDATE price = ?s',
                                    $currentProduct['product_id'],
                                    $price,
                                    $priceUserGroup,
                                    $price
                                );
                            }
                        }
                    }
                }
            }

            if (!empty($oldPrice) && !empty($prices)) {
                $percent_price = (int) ((($oldPrice - $prices[0]) / $oldPrice) * 100 * -1);
            }

            if (!empty($oldListPrice) && (float) $oldListPrice > 0 && isset($datum['list_price'])) {
                $percent_list_price = (int) ((($oldListPrice - (float) $datum['list_price']) / $oldListPrice) * 100 * -1);
            }

            if (!isset($prices[0])) {
                $prices[0] = '';
            }
        }

        return [
            $price_updated,
            $price_from_price,
            $percent_price,
            $percent_list_price,
            $prices,
        ];
    }

    public static function processPrices($supplierData, $datum, $categoryId = 'default', $productPrices = '', $ultProductPrices = ''): array
    {
        static $currencyObj;

        if (empty($currencyObj)) {
            $currencyObj = new Currency(fn_rf_stock_parser_get_options($supplierData['company_id'], 'rates_source'));
        }

        $prices = [];
        $price_from_price = '';

        foreach ($datum as $keyName => $value) {
            if (strpos($keyName, 'price_usergroup') !== false) {
                $priceUserGroup = str_replace('price_usergroup', '', $keyName);

                if ((float) $value > 0) {
                    $prices[$priceUserGroup] = $value;
                    if ($priceUserGroup == 0) {
                        $price_from_price = $value;
                    }
                } elseif (!empty($supplierData['price_synonyms']) && is_array($supplierData['price_synonyms'])) {
                    foreach ($supplierData['price_synonyms'] as $price_synonym) {
                        if (
                            (!empty($price_synonym['partial']) && stripos($value, $price_synonym['name']) !== false)
                            || (mb_strtolower($value) === mb_strtolower($price_synonym['name']))
                        ) {
                            $prices[$priceUserGroup] = $price_synonym['value'];

                            if ($priceUserGroup == 0) {
                                $price_from_price = $price_synonym['name'];
                            }

                            break;
                        }
                    }
                }
            }
        }

        if (!empty($prices) && isset($datum['vat']) && !empty($datum['vat'])) {
            foreach ($prices as &$price) {
                $price = $price + ($price / 100 * $datum['vat']);
            }
            unset($price);
        }

        if (empty($prices) && $supplierData['pricing_strategy'] == self::PRICING_STRATEGY_USE_OPT_PRICE) {
            if (isset($datum['opt_price']) && (float) $datum['opt_price'] > 0) {
                $price_from_price = $datum['opt_price'];
                $extraChargeCustomApplied = false;

                $extraCharge = $supplierData['extra_charge_custom'][$categoryId] ?? [];
                if (empty($extraCharge)) {
                    $extraCharge = $supplierData['extra_charge_custom']['default'] ?? [];
                }

                if (!empty($extraCharge['custom'])) {
                    $extraCharge['custom'] = array_reverse($extraCharge['custom']);
                    foreach ($extraCharge['custom'] as $extraChargeCustom) {
                        if ($datum['opt_price'] >= $extraChargeCustom['name']) {
                            $extraChargeCustomApplied = true;

                            if (isset($datum['vat']) && !empty($datum['vat'])) {
                                $datum['opt_price'] = $datum['opt_price'] + ($datum['opt_price'] / 100 * $datum['vat']);
                            }

                            if ($extraChargeCustom['type'] == self::EXTRA_CHARGE_TYPE_PERCENT) {
                                $prices[0] = $datum['opt_price'] + ($datum['opt_price'] / 100 * $extraChargeCustom['value']);
                            } else {
                                $prices[0] = $datum['opt_price'] + $extraChargeCustom['value'];
                            }

                            break;
                        }
                    }
                }

                if (!$extraChargeCustomApplied) {
                    if (isset($datum['vat']) && !empty($datum['vat'])) {
                        $datum['opt_price'] = $datum['opt_price'] + ($datum['opt_price'] / 100 * $datum['vat']);
                    }

                    if ($extraCharge['type'] == self::EXTRA_CHARGE_TYPE_PERCENT) {
                        $prices[0] = $datum['opt_price'] + ($datum['opt_price'] / 100 * $extraCharge['charge']);
                    } else {
                        $prices[0] = $datum['opt_price'] + $extraCharge['charge'];
                    }
                }
            } elseif (isset($datum['opt_price']) && !empty($supplierData['price_synonyms']) && is_array($supplierData['price_synonyms'])) {
                foreach ($supplierData['price_synonyms'] as $price_synonym) {
                    if (
                        (!empty($price_synonym['partial']) && stripos($datum['opt_price'], $price_synonym['name']) !== false)
                        || (mb_strtolower($datum['opt_price']) === mb_strtolower($price_synonym['name']))
                    ) {
                        if (isset($datum['vat']) && !empty($datum['vat'])) {
                            $price_synonym['value'] = $price_synonym['value'] + ($price_synonym['value'] / 100 * $datum['vat']);
                        }

                        $prices[0] = $price_synonym['value'];
                        $price_from_price = $price_synonym['name'];
                        break;
                    }
                }
            }
        }

        if (!empty($prices)) {
            foreach ($prices as &$price) {
                // конвертация валют
                if (isset($datum['currency']) && !empty($datum['currency'])) {
                    $price = $currencyObj->convert($price, $datum['currency']);
                }

                if (!empty($supplierData['price_round']['enabled'])) {
                    $mode = !empty($supplierData['price_round']['down']) ? PHP_ROUND_HALF_DOWN : PHP_ROUND_HALF_UP;
                    $precision = (int) $supplierData['price_round']['precision'];

                    $price = round($price / $precision, 0, $mode) * $precision;
                }

                $price = round((float) $price, 2);
            }
            unset($price);
        }

        if (fn_allowed_for('ULTIMATE') && $ultProductPrices != $productPrices) {
            // обновляем в любом случае, ибо какой-то асинхрон с ценами
            $pricesChanged = true;
        } elseif (!empty($productPrices)) {
            $productPricesAr = self::parsePriceString($productPrices);
            $pricesChanged = !empty(array_diff_assoc($prices, $productPricesAr)) || !empty(array_diff_assoc($productPricesAr, $prices));
        } else {
            $pricesChanged = true;
        }

        if (isset($datum['amount']) && empty($datum['amount'])) {
            if (!empty($prices)) {
                if ($supplierData['update_price_is_out_of_stock'] === 'set_zero') {
                    $prices = array_fill_keys(array_keys($prices), 0);
                    $pricesChanged = true;
                } elseif ($supplierData['update_price_is_out_of_stock'] === 'keep') {
                    $pricesChanged = false;
                }
            }
        }

        return [$prices, $pricesChanged, $price_from_price];
    }

    private static function parsePriceString($string): array
    {
        $productPricesAr = [];
        $productPrices = explode(',', $string);
        foreach ($productPrices as $productPrice) {
            if (empty($productPrice)) {
                continue;
            }
            $pr = explode('-', $productPrice);
            $productPricesAr[$pr[0]] = round((float) $pr[1], 2);
        }

        return $productPricesAr;
    }

    private static function getOldPrice($prices, $ultPrices = null): float
    {
        $oldPrices = self::parsePriceString($prices);

        if (!empty($ultPrices)) {
            $oldUltPrices = self::parsePriceString($ultPrices);
            $oldPrice = $oldUltPrices[0] ?? $oldPrices[0] ?? 0;
        } else {
            $oldPrice = $oldPrices[0] ?? 0;
        }

        return round((float) $oldPrice, 2);
    }

    private function setProgress($stage = null)
    {
        $additionalText = '';
        $process = $this->processingData['process'] ?? [];
        if (!empty($process['all_rows_count'])) {
            $progress = (int) ($process['all_rows_count'] == 0 ? 100 : (($this->processingData['count'] / $process['all_rows_count']) * 100));

            if ($stage == 'parsing') {
                $additionalText = $this->processingData['count'] . '/' . $process['all_rows_count'];
            }

            if ($progress == 100) {
                $progress = 99;
            }

            $this->process->saveStatus(1, $progress, '', $additionalText);
        }
    }

    private function getDuplicates(): array
    {
        $duplicates = $this->processingData['duplicates'] ?? [];
        if (!empty($duplicates)) {
            return array_unique($duplicates);
        }

        return [];
    }

    private function getEnabledCount(): string
    {
        return db_get_field('SELECT count(*) FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i AND access_time = ?i AND (type & ' . self::DETAILED_TYPE_ENABLED . ') > 0', $this->parserId, $this->accessTime);
    }

    private function getDisabledCount(): string
    {
        return db_get_field('SELECT count(*) FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i AND access_time = ?i AND ((type & ' . self::DETAILED_TYPE_DISABLED . ') > 0 OR (type & ' . self::DETAILED_TYPE_HIDDEN . ') > 0)', $this->parserId, $this->accessTime);
    }

    public function disableProducts(): bool
    {
        $strategy = $this->data['avail_strategy_not_in'];

        if ($strategy == self::STRATEGY_OUT_KEEP) {
            return false;
        }

        $where = [];
        $where[] = db_quote('p.supplier_access_time < ?i AND p.status IN ("A") AND p.rf_stop_update_status != "Y"', $this->accessTime);

        // нет трогаем продукты, где только цену обновляли
        if (!empty($this->productIdsOnlyPriceUpdate)) {
            $where[] = db_quote('p.product_id NOT IN (?a)', $this->productIdsOnlyPriceUpdate);
        }

        $setStatus = '';
        $status = $type = null;

        if ($this->data['avail_strategy_not_in'] == self::STRATEGY_OUT_SET_ZERO) {
            $type = self::DETAILED_TYPE_UPDATED;
            $tempWhereOr = [];
            if ($this->sdvMode && $this->data['amount_field'] == 'amount') {
                $tempWhereOr[] = 'sdv.amount > 0';
            } else {
                $tempWhereOr[] = "p.{$this->data['amount_field']} > 0";
            }

            if (WarehouseHelper::check()) {
                $tempWhereOr[] = '(SELECT SUM(w.amount) FROM ?:warehouses_products_amount as w WHERE w.product_id = p.product_id) > 0';
            }

            $where[] = '(' . implode(' OR ', $tempWhereOr) . ')';
        } elseif ($this->data['avail_strategy_not_in'] == self::STRATEGY_OUT_DISABLE) {
            $status = 'H';
            $type = self::DETAILED_TYPE_HIDDEN;
            $setStatus = db_quote('p.status = ?s', $status) . ', ';
        }

        if (fn_allowed_for('MULTIVENDOR')) {
            $where[] = 'p.status != "R"';
        }

        $iteration = 1;
        foreach ($this->getProducts($where, 500, true) as $products) {
            if (empty($products)) {
                continue;
            }

            $productIds = array_keys($products);

            if ($this->sdvMode) {
                $updateFieldAmount = $this->data['amount_field'] == 'amount' ? 'sdv.amount' : 'p.' . $this->data['amount_field'];

                db_query("
                    UPDATE ?:products as p
                    INNER JOIN ?:product_vendor_sell as sdv ON sdv.product_id = p.product_id
                    SET {$setStatus}
                        {$updateFieldAmount} = IF(p.rf_stop_update_amount != 'Y', 0, {$updateFieldAmount})
                    where p.product_id IN(?a) and sdv.company_id = ?i", $productIds, $this->data['company_id']);
            } else {
                db_query("UPDATE ?:products as p set {$setStatus} p.{$this->data['amount_field']} = IF(p.rf_stop_update_amount != 'Y', 0, p.{$this->data['amount_field']}) where p.product_id IN (?a)", $productIds);
            }

            $whProductIds = array_filter($products, function ($product) {
                return $product['rf_stop_update_amount'] !== 'Y';
            });
            WarehouseHelper::setToZero($this->data['company_id'], array_keys($whProductIds), $this->data['wh_clear']);

            $this->updateDetailed($products, $type, $status);

            $masterProductsHelper = new MasterProductsHelper();
            $masterProductsHelper->update($products);

            echo 'Disable products id=' . $this->parserId . '. Iteration ' . $iteration . PHP_EOL;
            $iteration++;
        }

        return false;
    }

    private function getProducts($where = [], $limit = null, $limitByBrands = false): \Generator
    {
        $priceSelectCondition = $this->sdvMode ? ' and pr.company_id = p.company_id' : '';

        $select = [
            'DISTINCT p.product_id',
            'p.company_id',
            'p.status',
            'p.' . $this->data['manufacturer_field'],
            'p.product_code',
            'p.' . $this->data['amount_field'],
            'list_price',
            'd.product as name',
            'p.status',
            'p.rf_stop_update_price',
            'p.rf_stop_update_amount',
            'p.rf_stop_update_status',
            'p.min_qty',
            '(SELECT GROUP_CONCAT(CONCAT(pr.usergroup_id, "-", pr.price)) FROM ?:product_prices as pr where pr.product_id = p.product_id and pr.lower_limit = 1 ' . $priceSelectCondition . ') as prices',
            '(SELECT GROUP_CONCAT(CONCAT(pc.category_id, "=", pc.link_type, "=", pcc.company_id))
                FROM ?:products_categories as pc
                left join ?:categories as pcc on pcc.category_id = pc.category_id
                where pc.product_id = p.product_id) as categories',
            '(SELECT GROUP_CONCAT(CONCAT(i.image_path, "RFPARSER", i.rf_original, "RFPARSER", il.type, "RFPARSER", il.position)) FROM ?:images_links as il
                INNER JOIN ?:images as i ON i.image_id = il.detailed_id
                where il.object_id = p.product_id and object_type = "product") as images
            ',
            'p.avail_since',
        ];

        $join = [];

        if ($this->sdvMode) {
            if ($this->data['amount_field'] == 'amount') {
                $select[] = 'sdv.amount as amount';
            }

            $join[] = 'INNER JOIN ?:product_vendor_sell as sdv ON sdv.product_id = p.product_id';
            $where[] = 'sdv.company_id = ' . $this->data['company_id'];
        } else {
            $where[] = db_quote('(p.company_id = ' . $this->data['company_id'] . ' OR cats.company_id = ?i)', $this->data['company_id']);
        }

        if (fn_allowed_for('ULTIMATE')) {
            $select[] = db_quote('(SELECT GROUP_CONCAT(CONCAT(upr.usergroup_id, "-", upr.price)) FROM ?:ult_product_prices as upr where upr.product_id = p.product_id and upr.lower_limit = 1 AND company_id = ?i) as ult_prices', $this->data['company_id']);
        }

        $where[] = "p.{$this->data['manufacturer_field']} != ''";

        switch ($this->data['link_to_products']) {
            case Column::LINK_VENDOR_CODE:
                break;
            case Column::LINK_VENDOR_CODE_WITH_BRANDS:
                if ($limitByBrands) {
                    $join[] = 'JOIN ?:product_features_values as pfv ON pfv.product_id = p.product_id';
                    $where[] = db_quote('pfv.feature_id = ?i', $this->moduleOptions['brand_feature_id']);
                    $where[] = db_quote('pfv.variant_id IN (?a)', $this->data['brands']);
                } else {
                    $join[] = db_quote('LEFT JOIN ?:product_features_values as pfv ON pfv.product_id = p.product_id AND pfv.feature_id = ?i', $this->moduleOptions['brand_feature_id']);
                    $select[] = 'pfv.variant_id as brand';
                }
                break;
            case Column::LINK_VENDOR_CODE_WITH_PARSER:
                $where[] = db_quote('p.my_supplier_id = ?i', $this->parserId);
                break;
        }

        if (Registry::isExist('addons.master_products') && Registry::get('addons.master_products.status') != 'D') {
            $select[] = 'master_product_id';
        }

        $join[] = db_quote('left join ?:product_descriptions as d on d.product_id = p.product_id and d.lang_code = ?s', CART_LANGUAGE);
        $join[] = db_quote('left join ?:products_categories as c on c.product_id = p.product_id');
        $join[] = db_quote('left join ?:categories as cats on cats.category_id = c.category_id');

        $join = !empty($join) ? implode(' ', $join) : '';
        $select = !empty($select) ? implode(', ', $select) : '';

        $queryLimit = '';
        if (!empty($limit)) {
            $queryLimit = ' LIMIT ' . $limit;
        }

        $offset = 0;
        do {
            $doWhere = $where;
            $doWhere[] = db_quote('p.product_id > ?i', $offset);
            $doWhere = 'WHERE ' . implode(' AND ', $doWhere);

            $products = db_get_hash_array(
                "
                    select {$select}
                    from ?:products as p
                    {$join}
                    {$doWhere}
                    order by p.product_id ASC
                    {$queryLimit}
                ",
                'product_id'
            );

            foreach ($products as &$product) {
                $rawCategories = explode(',', $product['categories']);
                $poolProductCompanies = [];
                $product['categories'] = [];

                foreach ($rawCategories as $rawCategory) {
                    $currentRawCategories = explode('=', $rawCategory);
                    $poolProductCompanies[$currentRawCategories[2]] = true;
                    $product['categories'][] = $currentRawCategories[0];

                    if ($currentRawCategories[1] === 'M') {
                        $product['category_id'] = $currentRawCategories[0];
                    }
                }

                $product['company_ids'] = array_keys($poolProductCompanies);
                $product['shared'] = fn_allowed_for('ULTIMATE') && count($poolProductCompanies) > 1;
            }
            unset($product);

            $end = end($products);
            $offset = $end['product_id'] ?? null;
            yield $products;
        } while ($products);
    }

    private function updateDetailed($products, $originalType, $toStatus = null)
    {
        if (!empty($products)) {
            $productIds = array_keys($products);

            $exists = db_get_hash_single_array(
                '
                SELECT product_id, `type`
                FROM ?:rf_stock_parser_logs_detailed
                WHERE my_supplier_id = ?i AND product_id IN (?a)',
                ['product_id', 'type'],
                $this->parserId,
                $this->accessTime,
                $productIds
            );

            $keys = array_keys($exists);
            $new = array_diff($productIds, $keys);

            $detailedNew = [];
            foreach ($new as $productId) {
                $currentDetailed = json_encode(
                    [
                        'name' => $products[$productId]['name'],
                        'old_price' => self::getOldPrice($products[$productId]['prices'], $products[$productId]['ult_prices'] ?? null),
                        'price' => '',
                        'from_price' => '',
                        'product_code' => $products[$productId]['product_code'],
                        'm_code' => $products[$productId][$this->data['manufacturer_field']],
                        'old_list_price' => $products[$productId]['list_price'],
                        'list_price' => '',
                        'p_list_price' => '',
                        'old_amount' => $products[$productId][$this->data['amount_field']],
                        'amount' => $products[$productId]['rf_stop_update_amount'] != 'Y' ? 0 : $products[$productId][$this->data['amount_field']],
                        'status' => $products[$productId]['status'],
                    ]
                );

                $detailedNew[] = db_quote('(?i, ?i, ?i, ?i, ?s)', $productId, $this->parserId, $this->accessTime, $originalType, $currentDetailed);
            }

            if (!empty($detailedNew)) {
                db_query('INSERT INTO ?:rf_stock_parser_logs_detailed (product_id, my_supplier_id, access_time, type, value) VALUES' . implode(',', $detailedNew));
            }

            if (!empty($toStatus)) {
                $old = array_intersect($productIds, $keys);
                if (!empty($old)) {
                    $update = '';

                    foreach ($old as $productId) {
                        $type = $originalType;

                        if ($type != self::DETAILED_TYPE_UPDATED && $exists[$productId] == self::DETAILED_TYPE_UPDATED) {
                            $type = self::DETAILED_TYPE_UPDATED;

                            if ($toStatus == 'A') {
                                $type += self::DETAILED_TYPE_ENABLED;
                            } elseif ($toStatus == 'D') {
                                $type += self::DETAILED_TYPE_DISABLED;
                            } elseif ($toStatus == 'H') {
                                $type += self::DETAILED_TYPE_HIDDEN;
                            }
                        }

                        $update .= 'WHEN ' . $productId . ' THEN ' . $type . ' ';
                    }

                    if (!empty($update)) {
                        $update = 'SET type = (CASE product_id ' . $update . ' END)';
                        db_query('UPDATE ?:rf_stock_parser_logs_detailed ' . $update . ' WHERE my_supplier_id = ?i and access_time = ?i', $this->parserId, $this->accessTime);
                    }
                }
            }
        }
    }

    private function getNotExistsCategories(): array
    {
        $existsCategories = array_column($this->data['column_settings']['categories'], 'name');
        $diff = array_diff(array_keys($this->processingData['categories']), $existsCategories);

        if (!empty($this->processingData['parserCategories'])) {
            foreach ($diff as &$item) {
                if (!empty($this->processingData['parserCategories'][$item])) {
                    $item = 'Id: ' . $item . ' ' . __('name') . ': ' . $this->processingData['parserCategories'][$item];
                }
            }
            unset($item);
        }

        return $diff;
    }

    private function saveLogs()
    {
        $duplicates = $this->getDuplicates();
        if (!empty($duplicates)) {
            $duplicates = json_encode($duplicates, JSON_UNESCAPED_UNICODE);
        } else {
            $duplicates = null;
        }

        $notExistsCategories = $this->getNotExistsCategories();
        if (!empty($notExistsCategories)) {
            $notExistsCategories = json_encode($notExistsCategories, JSON_UNESCAPED_UNICODE);
        } else {
            $notExistsCategories = null;
        }

        if ($this->attach->checkAttachBySize($this->attachId)) {
            fn_delete_attachments([$this->attachId], 'my_supplier_price', $this->parserId);
            $this->attachId = null;
        }

        $data = [
            'my_supplier_id' => $this->parserId,
            'general' => json_encode([
                'count' => $this->processingData['count'] ?? 0,
                'enabled' => $this->getEnabledCount(),
                'disabled' => $this->getDisabledCount(),
            ], JSON_UNESCAPED_UNICODE),
            'duplicates' => $duplicates,
            'categories' => $notExistsCategories,
            'detailed' => db_get_field('SELECT 1 FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i and access_time = ?i LIMIT 1', $this->parserId, $this->accessTime),
            'large_percentage' => db_get_field('SELECT 1 FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i and access_time = ?i AND large_percentage = 1 LIMIT 1', $this->parserId, $this->accessTime),
            'attach_id' => $this->attachId ?? 0,
            'user_id' => $_SESSION['auth']['user_id'],
            'date' => date('Y-m-d H:i:s'),
            'access_time' => $this->accessTime,
        ];

        db_query('insert into ?:rf_stock_parser_logs ?e', $data);

        $notification = new Notification($this->data);
        $notification->sendLargePercent();
    }

    public function updateCollections()
    {
        if (!Registry::isExist('addons.product_variations')) {
            return false;
        }

        $where = $join = [];
        $where[] = 'p.product_type = "P"';
        $where[] = 'p.company_id = ' . $this->data['company_id'];
        $join[] = '?:products as v ON v.parent_product_id = p.product_id and v.status = "A"';

        // нет трогаем продукты, где только цену обновляли
        if (!empty($this->productIdsOnlyPriceUpdate)) {
            $where[] = db_quote('p.product_id NOT IN (?a)', $this->productIdsOnlyPriceUpdate);
        }

        switch ($this->data['link_to_products']) {
            case Column::LINK_VENDOR_CODE:
                break;
            case Column::LINK_VENDOR_CODE_WITH_BRANDS:
                $join[] = '?:product_features_values as pfv ON pfv.product_id = p.product_id';
                $where[] = db_quote('pfv.feature_id = ?i', $this->moduleOptions['brand_feature_id']);
                $where[] = db_quote('pfv.variant_id IN (?a)', $this->data['brands']);
                break;
            case Column::LINK_VENDOR_CODE_WITH_PARSER:
                $where[] = db_quote('p.my_supplier_id = ?i', $this->parserId);
                break;
        }

        $join = !empty($join) ? 'JOIN ' . implode(' JOIN ', $join) : '';
        $where = !empty($where) ? 'WHERE ' . implode(' AND ', $where) : '';

        $hasEnabledVariations = db_get_fields("
            select distinct p.product_id
            from ?:products as p
            {$join}
            {$where}
            group by p.product_id");

        if (!empty($hasEnabledVariations)) {
            foreach ($hasEnabledVariations as $collectionId) {
                $minPriceProductId = db_get_field("select product_id from ?:product_prices where product_id IN (select product_id from ?:products where parent_product_id = ?i and status = 'A' and {$this->data['amount_field']} > 0) and lower_limit = 1 and usergroup_id = 0 order by price limit 1", $collectionId);

                $service = ServiceProvider::getService();
                $group_repository = ServiceProvider::getGroupRepository();
                $group_id = $group_repository->findGroupIdByProductId($minPriceProductId);

                if (!$group_id) {
                    continue;
                }

                $service->setDefaultProduct($group_id, $minPriceProductId);
            }
        }
    }

    private function getCategoryIds($names): ?array
    {
        $categoryIds = [];

        if (empty($names)) {
            if (!empty($this->data['column_settings']['default_category'])) {
                return (array) $this->data['column_settings']['default_category'];
            }
            return null;
        }

        foreach ($this->data['column_settings']['categories'] as $category) {
            if (in_array($category['name'], $names)) {
                $categoryIds[] = $category['value'];

                if (!empty($category['more'])) {
                    $categoryIds = array_merge($categoryIds, $category['more']);
                }

                $names = array_diff($names, [$category['name']]);
            }
        }

        if (!empty($this->data['column_settings']['use_price_category_id']) && !empty($names)) {
            $numeric = array_filter($names, function ($name) {
                return is_numeric($name);
            });

            if (!empty($numeric)) {
                $numericIds = db_get_fields('SELECT DISTINCT category_id FROM ?:category_descriptions WHERE category_id IN (?a) ', $numeric);
                if (!empty($numericIds)) {
                    $categoryIds = array_merge($categoryIds, $numericIds);
                    $names = array_diff($names, $categoryIds);
                }
            }
        }

        if (!empty($names)) {
            $idByNames = db_get_fields('SELECT category_id FROM ?:category_descriptions WHERE category IN (?a)', $names);
            if (!empty($idByNames)) {
                $categoryIds = array_merge($categoryIds, $idByNames);
            }
        }

        if (empty($categoryIds) && !empty($this->data['column_settings']['default_category'])) {
            $categoryIds = (array) $this->data['column_settings']['default_category'];
        }

        return array_unique($categoryIds);
    }

    public static function userGroupExists($groupId): bool
    {
        $cacheKey = 'parserUserGroups';
        Registry::registerCache($cacheKey, 300, Registry::cacheLevel('time'));

        if (Registry::isExist($cacheKey) !== false) {
            $usergroups = Registry::get($cacheKey);
        } else {
            $usergroups = fn_get_usergroups(['type' => 'C', 'status' => 'A'], DESCR_SL);
            $usergroups = array_column($usergroups, 'usergroup_id');
            $usergroups[] = 0;

            Registry::set($cacheKey, $usergroups);
        }

        return in_array($groupId, $usergroups);
    }

    public function initErrorHandler(): self
    {
        // This storage is freed on error (case of allowed memory exhausted)
        $this->memory = new \SplFixedArray(65536);

        register_shutdown_function(function () {
            $this->memory = null;
            if (!is_null($err = error_get_last())) {
                if (mb_strpos($err['message'], 'Allowed memory') !== false) {
                    $this->process->saveStatus(0, 0, 'Increase php memory_limit setting');
                    exit;
                }
            }
        });

        return $this;
    }
}
