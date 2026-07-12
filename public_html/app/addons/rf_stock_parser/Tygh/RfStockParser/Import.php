<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser;

use Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection;
use Tygh\Enum\ProductFeatures;
use Tygh\Registry;
use Tygh\Addons\MasterProducts\ServiceProvider;
use Tygh\Addons\ProductVariations\ServiceProvider as ProductVariationsServiceProvider;
use Tygh\Addons\ProductVariations\Product\Group\Group as ProductVariationsGroup;
use Tygh\RfStockParser\Helpers\FilesHelper;

class Import
{
    private $ids = [];
    private $silence = false;

    public const COUNT = 50;

    /**
     * Import constructor.
     *
     * @param array|int $ids
     * @param bool      $silence
     */
    public function __construct($ids, $silence = false)
    {
        if (!is_array($ids)) {
            $ids = [$ids];
        }

        $this->ids = $ids;
        $this->silence = $silence;
    }

    public function process()
    {
        $offset = 0;

        while ($ids = array_slice($this->ids, $offset, self::COUNT)) {
            $offset += self::COUNT;

            try {
                $notFoundData = db_get_array('SELECT * FROM ?:rf_stock_parser_logs_not_found WHERE id IN (?a)', $ids);
                if (!empty($notFoundData)) {
                    $this->import($notFoundData, $this->silence);
                }
            } catch (\Exception $e) {
                fn_set_notification('E', __('my_supplier_products_created'), $e->getMessage());
            }
        }
    }

    /**
     * @param int   $parserId
     * @param array $data
     * @param bool  $silence
     */
    public static function processOneRealTime($parserId, $data, $silence = false)
    {
        $data['my_supplier_id'] = $parserId;
        return self::import([$data], $silence);
    }

    /**
     * @param array $notFoundData
     * @param bool  $silence
     */
    private static function import($notFoundData, $silence)
    {
        static $taxes = [];

        if (empty($taxes)) {
            $taxesRaw = db_get_array('SELECT tax_id, rate_value FROM ?:tax_rates WHERE rate_type = "P" group by rate_value, tax_id');
            foreach ($taxesRaw as $tax) {
                $rateValue = (int) $tax['rate_value'];
                $taxes[$rateValue][] = $tax['tax_id'];
            }
        }

        $_REQUEST['import_not_found'] = true;
        $success = [];
        $successArticles = [];

        $textFields = [
            ProductFeatures::TEXT_FIELD,
            ProductFeatures::NUMBER_FIELD,
            ProductFeatures::SINGLE_CHECKBOX,
        ];

        $calendarFormat = 'd/m/Y';
        if (Registry::get('settings.Appearance.calendar_date_format') == 'month_first') {
            $calendarFormat = 'm/d/Y';
        }

        $filesHelper = new FilesHelper();

        foreach ($notFoundData as $item) {
            $parserId = $item['my_supplier_id'];
            list($parserData, $moduleOptions, $categoryIds) = self::getParserData($parserId);

            $exists = db_get_hash_array(
                "
                SELECT product_id, company_id
                FROM ?:products
                WHERE {$parserData['manufacturer_field']} = ?s AND company_id IN (?a)",
                'company_id',
                $item['manufacturer_code'],
                [0, $parserData['company_id']]
            );

            if (
                !empty($exists[$parserData['company_id']])
                || (empty($parserData['company_id']) && $exists[$parserData['company_id']] === '0')
            ) {
                if (!empty($item['id'])) {
                    $success[] = $item['id'];
                }
                continue;
            }

            $values = !is_array($item['value']) ? json_decode($item['value'], true) : $item['value'];

            list($prices) = Price::processPrices($parserData, $values);
            $amounts = Price::processAmounts($parserData, $values);

            $warehouseAmounts = [];
            $amount = null;
            foreach ($amounts as $amountId => $amountValue) {
                if (is_numeric($amountId)) {
                    $warehouseAmounts[$amountId] = $amountValue;
                } else {
                    $amount = $amountValue;
                }
            }

            $name = !empty($values['name']) ? $values['name'] : $item['manufacturer_code'];
            $nameOrder = [];

            $featuresSynonyms = [];
            if (!empty($parserData['features_synonyms'])) {
                $featuresSynonyms = array_combine(
                    array_map('mb_strtolower', array_column($parserData['features_synonyms'], 'name')),
                    array_column($parserData['features_synonyms'], 'value')
                );
            }

            if (!empty($values['in_name'])) {
                uasort($values['in_name'], function ($a, $b) {
                    return ($a['order'] <= $b['order']) ? -1 : 1;
                });

                foreach ($values['in_name'] as $inName) {
                    if ($inName['type'] === 'feature') {
                        $nameOrder[] = $values['feature']['m' . $inName['value']];
                    } else {
                        $nameOrder[] = $values[$inName['type']];
                    }
                }
            }

            if (!empty($nameOrder)) {
                $name = implode(' ', $nameOrder);
            }

            $productId = 0;
            $isVendorProduct = false;
            $service = null;
            $masterProductId = null;
            if (
                fn_allowed_for('MULTIVENDOR')
                && Registry::isExist('addons.master_products')
                && Registry::get('addons.master_products.status') != 'D'
                && !empty($exists[0])
                && !empty($parserData['company_id'])
            ) {
                $masterProductId = $exists[0]['product_id'];
                if (!empty($masterProductId)) {
                    $service = ServiceProvider::getService();
                    $result = $service->createVendorProduct($masterProductId, $parserData['company_id']);

                    if ($result->isSuccess()) {
                        $productId = $result->getData('vendor_product_id');
                        $isVendorProduct = true;
                    }
                }
            }

            if (!empty($productId)) {
                $productData = [
                    'amount' => (int) $amount,
                    'price' => $prices[0] ?? 0,
                    'my_supplier_id' => $parserId,
                ];
            } else {
                $descriptions = ['short_description', 'full_description'];
                foreach ($descriptions as $description) {
                    if (!empty($values[$description]) && !empty($values['modifiers'][$description][0])) {
                        $values[$description] = PriceData::getOperationValue($values[$description], $values['modifiers'][$description][0]);
                    }
                }

                $productData = [
                    'product' => $name,
                    'my_supplier_id' => $parserId,
                    'manufacturer_code' => $item['manufacturer_code'],
                    'company_id' => $parserData['company_id'],
                    'price' => $prices[0] ?? 0,
                    'status' => 'A',
                    'product_code' => $item['manufacturer_code'],
                    'list_price' => $values['list_price'] ?? 0,
                    'amount' => (int) $amount,
                    'timestamp' => fn_date_format(time(), Registry::get('settings.Appearance.date_format')),
                    'details_layout' => 'default',
                    'popularity' => 0,
                    'discussion_type' => 'B',
                    'short_description' => $values['short_description'] ?? '',
                    'full_description' => $values['full_description'] ?? '',
                    'promo_text' => $values['promo_text'] ?? '',
                    'avail_since' => isset($values['avail_since']) ? date($calendarFormat, $values['avail_since']) : '',
                    // доставка
                    'weight' => $values['weight'] ?? 0,
                    'shipping_freight' => $values['shipping_freight'] ?? 0,
                    'min_items_in_box' => $values['min_items_in_box'] ?? 0,
                    'max_items_in_box' => $values['max_items_in_box'] ?? 0,
                    'box_length' => $values['box_length'] ?? 0,
                    'box_width' => $values['box_width'] ?? 0,
                    'box_height' => $values['box_height'] ?? 0,
                    // seo
                    'page_title' => $values['page_title'] ?? '',
                    'meta_description' => $values['meta_description'] ?? '',
                    'meta_keywords' => $values['meta_keywords'] ?? '',
                    // seo module
                    'seo_name' => $values['seo_name'] ?? '',
                    // catalog module
                    'buy_now_url' => $values['buy_now_url'] ?? '',
                ];

                if (isset($values['opt_price'])) {
                    $productData['rf_cost'] = $values['opt_price'];
                }

                if (!empty($values['product_field'])) {
                    foreach ($values['product_field'] as $productField) {
                        $productData[$productField['eq']] = $productField['value'];
                    }
                }

                if (empty($productData['min_items_in_box']) && empty($productData['max_items_in_box'])) {
                    unset($productData['box_length'], $productData['box_width'], $productData['box_height']);
                }

                if (!empty($values['category'])) {
                    $productData['category_ids'] = $values['category'];
                } elseif (!empty($item['category_id'])) { // обратная совместимость
                    $productData['category_ids'][0] = $item['category_id'];
                } else {
                    $productData['category_ids'] = $categoryIds;
                }

                if (!empty($values['vat']) && !empty($taxes[$values['vat']])) {
                    $productData['tax_ids'] = $taxes[$values['vat']];
                }

                $getFeatureSynonym = function ($value) use ($featuresSynonyms) {
                    if (empty($featuresSynonyms)) {
                        return $value;
                    }

                    $value = mb_strtolower($value);
                    if (isset($featuresSynonyms[$value])) {
                        $value = $featuresSynonyms[$value];
                    }

                    return $value;
                };

                if (!empty($values['feature'])) {
                    $featureIds = array_keys($values['feature']);

                    $featureIds = array_map(function ($value) {
                        if (strstr($value, 'm') !== false) {
                            return substr($value, 1);
                        }

                        return $value;
                    }, $featureIds);

                    $where = [];
                    $multiCheckBoxValues = [];
                    $dataForQuery = [];

                    $types = db_get_hash_single_array(
                        '
                        SELECT feature_id, feature_type
                        FROM ?:product_features
                        WHERE feature_id IN (?a)',
                        ['feature_id', 'feature_type'],
                        $featureIds
                    );

                    $setFeatureData = function (
                        $featureId,
                        &$value
                    ) use (
                        &$multiCheckBoxValues,
                        $types,
                        &$where,
                        &$dataForQuery,
                        $getFeatureSynonym
                    ) {
                        $value = $getFeatureSynonym($value);
                        if ($types[$featureId] == ProductFeatures::MULTIPLE_CHECKBOX) {
                            $multiCheckBoxValues[$featureId][$value] = true;
                        }
                        $where[] = '(pfv.feature_id = ?i AND LOWER(pfvd.variant) = ?s)';
                        $dataForQuery[] = $featureId;
                        $dataForQuery[] = mb_strtolower($value);
                    };

                    foreach ($featureIds as $f) {
                        $fv = &$values['feature']['m' . $f];

                        $modifier = $values['modifiers'][$f] ?? '';
                        $modValue = PriceData::getOperationValue($fv, $modifier);

                        if (isset($modValue)) {
                            $fv = $modValue;
                            if (is_array($fv)) {
                                foreach ($fv as &$value) {
                                    if (empty($value)) {
                                        continue;
                                    }

                                    $setFeatureData($f, $value);
                                }
                                unset($value);
                            } else {
                                $setFeatureData($f, $fv);
                            }
                        } elseif (!empty($fv)) {
                            $setFeatureData($f, $fv);
                        }

                        unset($fv);
                    }

                    $where = implode(' OR ', $where);

                    $queryWithVariants = '';
                    if (!empty($where)) {
                        $queryWithVariants = '
                            SELECT pfvd.variant_id, pfv.feature_id, pfvd.variant
                            FROM ?:product_feature_variant_descriptions as pfvd
                            JOIN ?:product_feature_variants as pfv ON pfv.variant_id = pfvd.variant_id
                            WHERE ' . $where . '
                            UNION
                        ';
                    }

                    $dataForQuery = array_merge($dataForQuery, [$featureIds], [$textFields]);

                    array_unshift($dataForQuery, $queryWithVariants .
                        'SELECT 0, pf.feature_id, NULL
                        FROM ?:product_features as pf
                        WHERE pf.feature_id IN (?a) AND pf.feature_type IN (?a)');

                    $features = db_get_array(...$dataForQuery);

                    $featureIdsExists = [];
                    if (!empty($features)) {
                        $productData['product_features'] = [];

                        foreach ($features as $feature) {
                            $variantValue = $feature['variant_id'];
                            $featureIdsExists[] = $feature['feature_id'];
                            $type = $types[$feature['feature_id']];

                            if (in_array($type, $textFields)) {
                                if ($type == ProductFeatures::SINGLE_CHECKBOX) {
                                    $variantValue = !empty($variantValue) ? 'Y' : 'N';
                                } else {
                                    $variantValue = $values['feature']['m' . $feature['feature_id']];
                                }
                            } elseif ($type == ProductFeatures::MULTIPLE_CHECKBOX) {
                                unset($multiCheckBoxValues[$feature['feature_id']][$feature['variant']]);

                                $variantValue = [$variantValue];
                                if (isset($productData['product_features'][$feature['feature_id']])) {
                                    $variantValue = array_merge($variantValue, $productData['product_features'][$feature['feature_id']]);
                                }
                            }

                            $productData['product_features'][$feature['feature_id']] = $variantValue;
                        }
                    }

                    $featureNewVariants = array_diff($featureIds, $featureIdsExists);
                    if (!empty($featureNewVariants)) {
                        $productData['add_new_variant'] = [];

                        foreach ($featureNewVariants as $featureId) {
                            if ($types[$featureId] == ProductFeatures::MULTIPLE_CHECKBOX) {
                                continue;
                            }
                            $value = $values['feature']['m' . $featureId];

                            $productData['add_new_variant'][$featureId] = ['variant' => $value];
                            $productData['product_features'][$featureId] = '';
                        }
                    }

                    if (!empty($multiCheckBoxValues)) {
                        foreach ($multiCheckBoxValues as $featureId => $value) {
                            if (empty($value) || !is_array($value)) {
                                continue;
                            }

                            $value = array_keys($value);
                            if (!isset($productData['product_features'][$featureId])) {
                                $productData['product_features'][$featureId] = '';
                            }

                            $addNewVariant = &$productData['add_new_variant'][$featureId]['variant'];
                            if (!$addNewVariant) {
                                $addNewVariant = [];
                            }

                            foreach ($value as $variant) {
                                $addNewVariant[] = $variant;
                            }

                            $addNewVariant = array_unique($addNewVariant);
                            unset($addNewVariant);
                        }
                    }
                }

                if (!empty($values['image'])) {
                    if (!is_array($values['image'])) {
                        $values['image'] = [$values['image']];
                    }

                    $imagesCounter = 0;
                    foreach ($values['image'] as $k => $images) {
                        if (empty($images)) {
                            continue;
                        }

                        $modValue = PriceData::getOperationValue($images, $values['modifiers']['image'][$k] ?? '');
                        if (isset($modValue)) {
                            $images = $modValue;
                        }

                        if (!is_array($images)) {
                            $images = [$images];
                        }

                        $deleteTmpImages = [];
                        foreach ($images as $image) {
                            $imageType = 'url';
                            if (mb_stripos($image, '.php') !== false) {
                                $image = $filesHelper->imageToServer($image);
                                $imageType = 'server';
                                $deleteTmpImages[] = $image;
                            }
                            $imageKey = $imagesCounter === 0 ? 'main' : 'add_additional';

                            $_REQUEST["product_{$imageKey}_image_data"][$imagesCounter] = [
                                'detailed_alt' => '',
                                'type' => $imagesCounter === 0 ? 'M' : 'A',
                                'object_id' => '0',
                                'position' => $imagesCounter,
                                'is_new' => 'Y',
                            ];

                            $_REQUEST["type_product_{$imageKey}_image_detailed"][$imagesCounter] = $imageType;
                            $_REQUEST["file_product_{$imageKey}_image_detailed"][$imagesCounter] = $image;

                            $imagesCounter++;
                        }
                    }
                }

                if (!empty($warehouseAmounts)) {
                    $productData['warehouses'] = $warehouseAmounts;
                }
            }

            if (count($prices) > 1) {
                unset($prices[0]);

                $pricesKey = 0;
                foreach ($prices as $priceUserGroup => $price) {
                    if (!Price::userGroupExists($priceUserGroup)) {
                        continue;
                    }

                    $pricesKey++;
                    $productData['prices'][$pricesKey] = [
                        'lower_limit' => 1,
                        'price' => $price,
                        'type' => 'A',
                        'usergroup_id' => $priceUserGroup,
                    ];
                }
            }

            Registry::set('runtime.rf_stock_parser.import', true);
            $productId = fn_update_product($productData, $productId);

            if (
                !$masterProductId
                && !empty($values['group']['value'])
                && Registry::isExist('addons.product_variations')
                && Registry::get('addons.product_variations.status') != 'D'
            ) {
                $service = ProductVariationsServiceProvider::getService();
                $group_repository = ProductVariationsServiceProvider::getGroupRepository();

                if (!empty($values['modifiers']['group'][0])) {
                    $values['group']['value'] = PriceData::getOperationValue($values['group']['value'], $values['modifiers']['group'][0]);
                }

                $groupId = $group_repository->findGroupIdByCode($values['group']['value']);
                if (empty($groupId)) {
                    $groupFeatures = [];

                    if (!empty($values['group']['eq'])) {
                        $groupFeatures[$values['group']['eq']] = [
                            'feature_id' => $values['group']['eq'],
                        ];
                    }

                    if (!empty($values['group']['eq2'])) {
                        $groupFeatures[$values['group']['eq2']] = [
                            'feature_id' => $values['group']['eq2'],
                        ];
                    }

                    if (!empty($groupFeatures)) {
                        $groupFeaturesData = db_get_hash_array(
                            '
                            SELECT feature_id, purpose
                            FROM ?:product_features
                            WHERE feature_id IN (?a)
                            ORDER BY position ASC',
                            'feature_id',
                            array_keys($groupFeatures)
                        );

                        foreach ($groupFeaturesData as $key => $datum) {
                            $groupFeatures[$key]['purpose'] = $datum['purpose'];
                        }

                        $groupFeatures = GroupFeatureCollection::createFromFeatureList($groupFeatures);

                        $result = $service->createGroup([$productId], $values['group']['value'], $groupFeatures);
                        if ($result->isSuccess()) {
                            /** @var ProductVariationsGroup $groupData */
                            $groupData = $result->getData('group');
                            if (!empty($groupData)) {
                                $groupId = $groupData->getId();
                            }
                        }
                    }
                }

                if (!empty($groupId)) {
                    $groupResult = $service->attachProductsToGroup($groupId, [$productId]);
                    if (!$groupResult->isSuccess()) {
                        $groupErrors = $groupResult->getWarnings();
                        fn_set_notification('E', __('error'), reset($groupErrors));
                    }
                }
            }

            if (!$isVendorProduct) {
                // обновляем поля по языкам
                foreach (Column::getAdditionalColumnsWithLangs(true) as $lang => $fields) {
                    $withLangUpdate = [];

                    foreach ($fields as $field) {
                        if (!empty($values[$field['field']])) {
                            if (!empty(Column::COLUMN_ALIASES[$field['original']])) {
                                $field['original'] = Column::COLUMN_ALIASES[$field['original']];
                            }

                            if (!empty($values[$field['field']]) && !empty($values['modifiers'][$field['field']][0])) {
                                $values[$field['field']] = PriceData::getOperationValue($values[$field['field']], $values['modifiers'][$field['field']][0]);
                            }

                            $withLangUpdate[$field['original']] = $values[$field['field']];
                        }
                    }

                    if (!empty($withLangUpdate)) {
                        $withLangUpdate['lang_code'] = $lang;
                        $withLangUpdate['product_id'] = $productId;

                        db_query(
                            'INSERT INTO ?:product_descriptions ?e ON DUPLICATE KEY UPDATE ?u',
                            $withLangUpdate,
                            $withLangUpdate
                        );
                    }
                }
            }

            Registry::set('runtime.rf_stock_parser.import', false);

            if (!empty($productId)) {
                if (!empty($item['id'])) {
                    $success[] = $item['id'];
                }

                $successArticles[] = $item['manufacturer_code'];
            }

            unset(
                $_REQUEST['product_main_image_data'],
                $_REQUEST['product_add_additional_image_data'],
                $_REQUEST['type_product_main_image_detailed'],
                $_REQUEST['file_product_main_image_detailed'],
                $_REQUEST['type_product_add_additional_image_detailed'],
                $_REQUEST['file_product_add_additional_image_detailed']
            );

            if (!empty($deleteTmpImages)) {
                foreach ($deleteTmpImages as $deleteTmpImage) {
                    try {
                        unlink($deleteTmpImage);
                    } catch (\Throwable $e) {
                    }
                }
            }
        }

        if (!empty($success)) {
            db_query('UPDATE ?:rf_stock_parser_logs_not_found SET added = 1 WHERE id IN (?a)', $success);

            if (!$silence) {
                if (defined('AJAX_REQUEST')) {
                    $ajax = \Tygh::$app['ajax'];
                    $ajax->assign('success', $success);
                }

                fn_set_notification('N', __('my_supplier_products_created'), implode(', ', $successArticles));
            }
        }

        return $successArticles;
    }

    public static function getParserData($parserId): array
    {
        $cacheKey = 'parserData' . $parserId;
        Registry::registerCache($cacheKey, 3600, Registry::cacheLevel('time'));

        if (Registry::isExist($cacheKey) !== false) {
            $parserData = Registry::get($cacheKey);
        }

        if (empty($parserData) || $parserData == 'empty') {
            $parserData = fn_get_my_supplier_data($parserId);
            Registry::set($cacheKey, $parserData);
        }

        $cacheKey = 'parserDataCategoryId' . $parserId;
        Registry::registerCache($cacheKey, 300, Registry::cacheLevel('time'));

        if (Registry::isExist($cacheKey) !== false) {
            $categoryId = Registry::get($cacheKey);
        }

        if (empty($categoryId) || $categoryId == 'empty' || !is_array($categoryId)) {
            $categoryId = fn_rf_stock_get_not_found_category($parserData['company_id']);
            Registry::set($cacheKey, $categoryId);
        }

        $cacheKey = 'parserDataModuleOptions' . $parserId;
        Registry::registerCache($cacheKey, 300, Registry::cacheLevel('time'));

        if (Registry::isExist($cacheKey) !== false) {
            $moduleOptions = Registry::get($cacheKey);
        }

        if (empty($moduleOptions) || $moduleOptions == 'empty') {
            $moduleOptions = fn_rf_stock_parser_get_options($parserData['company_id']);
            Registry::set($cacheKey, $moduleOptions);
        }

        return [$parserData, $moduleOptions, $categoryId];
    }

    public static function clearParserCache($parserId)
    {
        // нормального способа почистить кэш не существует, поэтому просто ставим time 0 и любое значение
        Registry::registerCache('parserData' . $parserId, 0, Registry::cacheLevel('time'));
        Registry::set('parserData' . $parserId, 'empty');
        Registry::del('parserData' . $parserId);

        Registry::registerCache('parserDataCategoryId' . $parserId, 0, Registry::cacheLevel('time'));
        Registry::set('parserDataCategoryId' . $parserId, 'empty');
        Registry::del('parserDataCategoryId' . $parserId);

        Registry::registerCache('parserDataModuleOptions' . $parserId, 0, Registry::cacheLevel('time'));
        Registry::set('parserDataModuleOptions' . $parserId, 'empty');
        Registry::del('parserDataModuleOptions' . $parserId);
    }
}
