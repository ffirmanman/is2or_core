<?php

use Tygh\Registry;
use Tygh\RfStockParser\Attachment;
use Tygh\RfStockParser\Helpers\ExceptionInfo;
use Tygh\Storage;
use Tygh\RfStockParser\Price;
use Tygh\UpgradeCenter\Migrations\Migration;
use Tygh\RfStockParser\AttachmentDownloadType as DownloadType;
use Tygh\RfStockParser\Import;
use Tygh\RfStockParser\PriceDataType\Type;
use Tygh\RfStockParser\PriceDataType\Xls;
use Tygh\RfStockParser\Column;
use Tygh\RfStockParser\PriceDataType\XmlPreset\Preset;
use Tygh\RfStockParser\PriceDataType\XmlPreset\PresetDefault;
use Tygh\RfStockParser\Helpers\UrlHelper;
use Tygh\RfStockParser\Helpers\FilesHelper;
use Tygh\RfStockParser\Process\Process;
use Tygh\RfStockParser\Process\Execute;
use Tygh\RfStockParser\Process\ProcessFabric;
use Tygh\RfStockParser\Process\ProcessesCollection;
use Tygh\Http;
use Tygh\RfStockParser\Helpers\WarehouseHelper;
use Tygh\RfStockParser\Process\Processes\Parse;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

fn_trusted_vars('supplier_data');

$_error_reporting = error_reporting();
error_reporting($_error_reporting & ~E_NOTICE & ~E_DEPRECATED);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $suffix = '.manage';

    if ($mode == 'update') {
        $urlHelper = new UrlHelper();
        $requestData = $urlHelper->parseStr($_REQUEST['data']);

        $my_supplier_id = empty($requestData['my_supplier_id']) ? 0 : $requestData['my_supplier_id'];
        if ($requestData['supplier_data']['type'] == 'xml' && empty($requestData['supplier_data']['column_settings']['column_map'])) {
            fn_set_notification('E', __('error'), __('rf_stock_parser.scheme_not_found'));
        } else {
            // RA-85
            if ($requestData['supplier_data']['cron']['mode'] == Price::CRON_HTTP) {
                $requestData['supplier_data']['cron']['http']['url'] = $_REQUEST['cron_url'];
            }
            $my_supplier_id = fn_update_my_supplier($my_supplier_id, $requestData['supplier_data']);
        }

        if ($my_supplier_id) {
            $suffix = '.update?my_supplier_id=' . $my_supplier_id;
        }

        if (defined('AJAX_REQUEST')) {
            $ajax = $view = Tygh::$app['ajax'];

            if (!empty($my_supplier_id)) {
                $ajax->assign('force_redirection', fn_url('rf_stock_parser' . $suffix));
                exit;
            }
        }
    } elseif ($mode == 'processStatus') {
        $ids = $_REQUEST['ids'] ?? [];

        if (empty($ids)) {
            exit;
        }

        $processesCollection = new ProcessesCollection();

        foreach ($_REQUEST['ids'] as $id) {
            $process = ProcessFabric::getProcess($_REQUEST['type'], $id);
            $processesCollection->add($process);
        }

        $data = $processesCollection->getStatuses($_REQUEST['last_change'] ?? null);

        if (!empty($_REQUEST['simple'])) {
            $data = reset($data);
        }

        Tygh::$app['ajax']->assign('status', $data);

        exit;
    } elseif ($mode == 'copy') {
        $parserId = empty($_REQUEST['my_supplier_id']) ? 0 : $_REQUEST['my_supplier_id'];
        $data = db_get_row('SELECT * FROM ?:rf_stock_parser WHERE my_supplier_id = ?i', $parserId);
        unset($data['my_supplier_id']);
        if (!empty($data['constructor_id'])) {
            $oldConstructorId = $data['constructor_id'];
            $constructorId = time();
            $data['constructor_id'] = $constructorId;
        }

        $newId = db_query('INSERT INTO ?:rf_stock_parser ?e', $data);

        if (!empty($oldConstructorId)) {
            db_query("INSERT INTO ?:rf_stock_parser_xml_nodes (constructor_id, name, attrs) SELECT {$constructorId}, name, attrs FROM ?:rf_stock_parser_xml_nodes WHERE constructor_id = ?i", $oldConstructorId);
        }

        return [CONTROLLER_STATUS_REDIRECT, fn_url("rf_stock_parser.update&my_supplier_id={$newId}")];
    } elseif ($mode == 'download_price') {
        $type = $_REQUEST['type_attachment_files'][0];
        $parserId = empty($_REQUEST['my_supplier_id']) ? 0 : $_REQUEST['my_supplier_id'];

        if (!empty($parserId)) {
            try {
                /** @var Parse $process */
                $process = ProcessFabric::getProcess(Process::TYPE_PARSE, $parserId);
                $process->checkRunning();

                if (!empty($type)) {
                    $attachment = new Attachment($parserId, fn_get_my_supplier_data($parserId));
                    $uploadFile = $_REQUEST['file_attachment_files'][0];
                    $typeObj = (new DownloadType\Factory())->getObject($type)->setPath($uploadFile);
                    list($attachId, $filePath) = $attachment->download($typeObj);
                }

                if (!empty($attachId)) {
                    $process->setAttach($attachId);
                    (new Execute())->setProcess($process)->execute();
                }
            } catch (Exception $e) {
                fn_set_notification('E', __('error'), $e->getMessage());
            }

            exit;
        }
    } elseif ($mode == 'm_delete') {
        if (!empty($_REQUEST['my_supplier_ids'])) {
            foreach ($_REQUEST['my_supplier_ids'] as $v) {
                fn_delete_my_supplier($v);
            }
        }

        $suffix = '.manage';
    } elseif ($mode == 'delete') {
        if (!empty($_REQUEST['my_supplier_id'])) {
            $supplier_data = fn_get_my_supplier_data($_REQUEST['my_supplier_id']);
            if (!empty($supplier_data)) {
                $result = fn_delete_my_supplier($supplier_data['my_supplier_id']);
                if ($result) {
                    fn_set_notification('N', __('notice'), __('my_supplier_deleted'));
                }
            }
        }

        $suffix = '.manage';
    } elseif ($mode == 'update_status') {
        $supplier_data = db_get_row('SELECT * FROM ?:rf_stock_parser WHERE my_supplier_id = ?i', $_REQUEST['id']);

        if (!empty($supplier_data)) {
            $result = fn_update_status_my_supplier($supplier_data['my_supplier_id'], $_REQUEST['status']);
            if ($result) {
                fn_set_notification('N', __('notice'), __('status_changed'));
            } else {
                fn_set_notification('E', __('error'), __('error_status_not_changed'));
                Tygh::$app['ajax']->assign('return_status', $supplier_data['status']);
            }
        } else {
            fn_set_notification('E', __('error'), __('no_items_found'));
        }
        exit;
    } elseif ($mode == 'parse_xml') {
        $suffix = empty($_REQUEST['my_supplier_id']) ? '.add.xml' : '.update&my_supplier_id=' . $_REQUEST['my_supplier_id'];
        $strDepth = '....';

        $doNotUnlink = false;
        $pathsWithoutAttr = [];
        if (!empty($_REQUEST['rootNode']) && !empty($_REQUEST['xml_path'])) {
            $filePath = $_REQUEST['xml_path'];
            $elementPath = $_REQUEST['rootNode'];
            $pathsWithoutAttr = !empty($_REQUEST['withoutAttr']) ? $_REQUEST['withoutAttr'] : [];
        } elseif (!empty($_REQUEST['type_preview_files'][0]) && $_REQUEST['type_preview_files'][0] == 'url') {
            $tempFile = fn_create_temp_file();

            Http::get($_REQUEST['file_preview_files'][0], [], [
                'binary_transfer' => true,
                'write_to_file' => $tempFile,
                'connection_timeout' => 3000,
                'execution_timeout' => 3000,
            ]);

            $filePath = $tempFile;
        } elseif (!empty($_REQUEST['type_preview_files'][0]) && $_REQUEST['type_preview_files'][0] == 'server') {
            $filesHelper = new FilesHelper();
            $filePath = $filesHelper->getServerUploadedPath($_REQUEST['file_preview_files'][0]);
            $doNotUnlink = true;
        } else {
            $rebuilt = fn_rebuild_files('file_preview_files');
            $file = reset($rebuilt);
            $file = fn_move_uploaded_file($file);
            $filePath = Storage::instance('custom_files')->getAbsolutePath('') . $file['path'];
        }

        if (empty($elementPath)) {
            $preset = Preset::detect($filePath);
            $elementPath = $preset::getPath();
        } else {
            $preset = new PresetDefault();

            $fixEncode = $_REQUEST['supplier_data']['xml_fix_wrong_encode'] ?? null;

            if ($fixEncode) {
                $file = file_get_contents($filePath);
                $encoding = mb_detect_encoding($file, 'auto', true);
                if (!empty($encoding)) {
                    $file = preg_replace('/encoding=".+?"/i', 'encoding="' . $encoding . '"', $file, 1);
                    file_put_contents($filePath, $file);
                }
            }
        }

        if (!empty($elementPath)) {
            list($structure, $elements, $filterAttributes) = $preset->getElements($filePath, $elementPath, $pathsWithoutAttr);
        }

        $getStructure = empty($elements);

        $constructorId = time();
        $elementsChunks = array_chunk($elements ?? [], 500, true);
        unset($elements); // экономим память

        foreach ($elementsChunks as $elementsChunk) {
            $insert = [];
            foreach ($elementsChunk as $k => $attrs) {
                $insert[$k] = db_quote(
                    '(?i, ?s, ?s)',
                    $constructorId,
                    $k,
                    implode(',', $attrs)
                );

                $tempK = preg_replace('~\[.*?\]~ui', '', $k);
                if ($tempK != $k && isset($insert[$tempK])) {
                    $insert[$tempK] = db_quote(
                        '(?i, ?s, ?s)',
                        $constructorId,
                        $tempK . '[not(@*)]',
                        implode(',', $elementsChunk[$tempK])
                    );
                }
            }

            db_query('INSERT INTO ?:rf_stock_parser_xml_nodes (constructor_id, name, attrs) VALUES' . implode(',', $insert));
        }

        if (!$getStructure) {
            $_SESSION['constructor_id'] = $constructorId;
            $_SESSION['constructor_ids_for_delete'][] = $constructorId;
            $_SESSION['custom_node_name'] = $elementPath;

            if (!empty($filterAttributes)) {
                $_SESSION['filter_attributes'] = implode(',', array_keys($filterAttributes));
            }
        } else {
            $reader = new XMLReader();

            // Нестандартный xml
            $fullStructure = [];
            $counter = [];

            if (!$reader->open($filePath)) {
                fn_set_notification('E', __('error'), 'Failed to open ' . $filePath);
            } else {
                while ($reader->read()) {
                    $depth = $reader->depth;
                    $structure[$depth] = $reader->name;
                    $structure = array_slice($structure, 0, $depth + 1, true);

                    if ($reader->nodeType == XMLReader::ELEMENT && $reader->depth) {
                        $name = implode('/', $structure);
                        if (!isset($fullStructure[$name])) {
                            $fullStructure[$name] = true;
                        }
                        if (!isset($counter[$name])) {
                            $counter[$name] = 0;
                        }
                        $counter[$name]++;
                    }
                }

                $reader->close();
            }

            if (!empty($fullStructure)) {
                $_SESSION['xml_structure'] = [
                    'elements' => array_keys($fullStructure),
                    'path' => $filePath,
                    'counter' => $counter,
                ];
            }
        }

        if (empty($fullStructure) && file_exists($filePath) && !$doNotUnlink) {
            unlink($filePath);
        }

        if (!empty($_REQUEST['reset'])) {
            $suffix .= '&reset=true';
        }
        if (!empty($_REQUEST['soft_reset'])) {
            $suffix .= '&soft_reset=true';
        }
    } elseif ($mode == 'check_cron') {
        $size = null;
        $data = $_REQUEST['supplier_data']['cron'];

        if ($data['mode'] === Price::CRON_FTP) {
            $port = empty($data['ftp']['port']) ? 21 : $data['ftp']['port'];
            $ftpConnection = ftp_connect($data['ftp']['server'], $port);
            ftp_login($ftpConnection, $data['ftp']['login'], $data['ftp']['password']);
            ftp_pasv($ftpConnection, true);
            $size = ftp_size($ftpConnection, $data['ftp']['url']);
            ftp_close($ftpConnection);
        } else {
            $fileContent = file_get_contents($data['http']['url'], false, null, 0, 1000);
            if (!empty($fileContent)) {
                if ($_REQUEST['supplier_data']['type'] == Type::TYPE_XML) {
                    if (strpos($fileContent, '<?xml') === 0) {
                        $size = 1000;
                    }
                } else {
                    $size = 1000;
                }
            }
        }

        if ($size) {
            fn_set_notification('N', __('notice'), 'OK');
        } else {
            fn_set_notification(
                'E',
                __('error'),
                __('object_not_found', ['[object]' => '']),
                '',
                '404'
            );
        }
        exit;
    } elseif ($mode == 'import_not_found') {
        if (!empty($_REQUEST['not_found_ids'])) {
            $importer = new Import($_REQUEST['not_found_ids']);
            $importer->process();
        }
    } elseif ($mode == 'start_export_not_found') {
        $parserId = $_REQUEST['nf_search']['my_supplier_id'];

        if (empty($parserId)) {
            exit;
        }

        try {
            $process = ProcessFabric::getProcess(Process::TYPE_NOT_FOUND_EXPORT, $parserId);
            $process->checkRunning();

            (new Execute())->setProcess($process)->execute();
        } catch (Exception $e) {
            fn_set_notification('E', __('error'), $e->getMessage());
        }

        exit;
    } elseif ($mode == 'get_not_found') {
        goto get_not_found;
    } elseif ($mode == 'get_node_attrs') {
        $ajax = $view = Tygh::$app['ajax'];

        $attrs = db_get_field('SELECT attrs FROM ?:rf_stock_parser_xml_nodes WHERE constructor_id = ?i AND name = ?s', $_REQUEST['constructorId'], $_REQUEST['nodeName']);
        $attrs = array_flip(explode(',', $attrs));

        $translates = Column::getAttrTranslates();
        foreach ($attrs as $k => &$v) {
            if (!empty($translates[$k])) {
                $v = $translates[$k];
            } else {
                $v = $k;
            }
        }
        unset($v);

        $ajax->assign('attrs', $attrs);
        exit;
    }

    return [CONTROLLER_STATUS_OK, fn_url('rf_stock_parser' . $suffix)];
}

if ($mode == 'manage') {
    list($suppliers, $search) = fn_get_my_suppliers($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'));

    $view = Tygh::$app['view'];
    $view->assign('search', $search);
    $view->assign('suppliers', $suppliers);

    $supplierIds = array_column($suppliers, 'my_supplier_id');
    if (!empty($supplierIds)) {
        $processesCollection = new ProcessesCollection();

        foreach ($supplierIds as $id) {
            $process = ProcessFabric::getProcess(Process::TYPE_PARSE, $id);
            $processesCollection->add($process);
        }

        $processing = $processesCollection->getStatuses();
        $view->assign('processing', $processing);
    }
} elseif ($mode == 'update' || $mode == 'add') {
    $supplier = (isset($_REQUEST['my_supplier_id']) && !empty($_REQUEST['my_supplier_id'])) ? fn_get_my_supplier_data($_REQUEST['my_supplier_id']) : [];

    if (isset($_REQUEST['my_supplier_id']) && empty($supplier)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    if (!empty($_REQUEST['reset']) && empty($_REQUEST['soft_reset'])) {
        $supplier['column_settings'] = [];
    }

    if (!empty($supplier['column_settings']['column_map'])) {
        $columnMap = $supplier['column_settings']['column_map'];
    }

    if (isset($_REQUEST['page_data']['company_id'])) {
        $companyId = $_REQUEST['page_data']['company_id'];
    } elseif (isset($supplier['company_id'])) {
        $companyId = $supplier['company_id'];
    } else {
        $companyId = rf_get_current_company_id();
    }

    $type = !empty($supplier['type']) ? $supplier['type'] : $action;
    $defaultColumnMapping = Column::getDefaultColumns($companyId, $type);

    if (!empty($columnMap)) {
        $columnMap = array_combine((array) $columnMap['from'], (array) $columnMap['to']);
        $columnMap = array_filter($columnMap);
        ksort($columnMap);
        unset($columnMap['']);

        $diff = count($defaultColumnMapping) - count($columnMap);
        $defaultColumnMapping = $columnMap;

        if ($diff > 0) {
            while ($diff > 0) {
                $defaultColumnMapping[] = '';
                $diff--;
            }
        }
    } else {
        if ($type != Type::TYPE_XML && $action != Type::TYPE_XML) {
            $supplier['column_settings']['column_map']['from'] = array_keys($defaultColumnMapping);
        }
        $supplier['column_settings']['column_map']['to'] = array_values($defaultColumnMapping);
    }

    $view = Tygh::$app['view'];
    $view->assign('column_mapping', $defaultColumnMapping);
    if (!empty($supplier['my_supplier_id']) && isset($supplier['type']) && $supplier['type'] == Type::TYPE_XML) {
        $fromField = $supplier['column_settings']['column_map']['from'] ?? [];
        $fromField = array_merge($fromField, array_column($supplier['column_settings']['additional'] ?? [], 'from'));

        if (!empty($fromField)) {
            $xmlNodesAttrs = db_get_hash_single_array(
                'SELECT name, attrs
                FROM ?:rf_stock_parser_xml_nodes
                WHERE constructor_id = ?i AND name IN (?a)',
                ['name', 'attrs'],
                $supplier['constructor_id'],
                $fromField
            );

            if (!empty($xmlNodesAttrs)) {
                foreach ($xmlNodesAttrs as &$xmlNodesAttr) {
                    $xmlNodesAttr = explode(',', $xmlNodesAttr);
                }
                unset($xmlNodesAttr);
            }

            $view->assign('xml_nodes_attrs', $xmlNodesAttrs);
        }
    } elseif ($action == Type::TYPE_CSV || (isset($supplier['type']) && $supplier['type'] == Type::TYPE_CSV)) {
        $csvRange = fn_rf_stock_parser_get_options(null, 'csv_fields_range');
        $csvRange = !empty($csvRange) ? (int) $csvRange : 200;
        $view->assign('alphabet', range(1, $csvRange));
    } else {
        $view->assign('alphabet', Xls::getExcelColumnRange());
    }

    $columnTranslates = Column::getColumnTranslates($companyId);
    $additionalColumns = $additionalColumnsFlat = Column::getAdditionalColumns();
    $additionalColumnsSorted = [];

    foreach ($additionalColumns as $column) {
        $columnTranslate = $columnTranslates[$column];
        preg_match('~^\[(.*?)\]~ui', $columnTranslate, $matches);
        $group = !empty($matches[1]) ? $matches[1] : '';

        if (!empty($matches[1])) {
            $columnTranslate = trim(preg_replace('~^\[(.*?)\]~ui', '', $columnTranslate));
        }

        $additionalColumnsSorted[$group][$column] = $columnTranslate;
    }

    $view->assign('columnTranslates', $columnTranslates);
    $view->assign('additionalFields', $additionalColumnsSorted);
    $view->assign('additionalFieldsFlat', $additionalColumnsFlat);
    $view->assign('supplier', $supplier);

    if (($mode == 'add' && $action == 'xml') || !empty($_REQUEST['reset'])) {
        $view->assign('add_xml', true);

        if (!empty($_SESSION['constructor_id'])) {
            $view->assign('constructor_id', $_SESSION['constructor_id']);
            unset($_SESSION['constructor_id']);
        }

        if (!empty($_SESSION['xml_structure'])) {
            $view->assign('xml_structure', $_SESSION['xml_structure']['elements']);
            $view->assign('xml_path', $_SESSION['xml_structure']['path']);
            $view->assign('xml_structure_counter', $_SESSION['xml_structure']['counter']);
            unset($_SESSION['xml_structure']);
        }

        if (!empty($_SESSION['custom_node_name'])) {
            $view->assign('custom_node_name', $_SESSION['custom_node_name']);
            unset($_SESSION['custom_node_name']);
        }

        if (!empty($_SESSION['filter_attributes'])) {
            $view->assign('filter_attributes', $_SESSION['filter_attributes']);
            unset($_SESSION['filter_attributes']);
        }
    }

    $options = fn_rf_stock_parser_get_options($companyId);

    $brandFeatureId = $options['brand_feature_id'];
    if (!empty($brandFeatureId)) {
        $brands = db_get_hash_single_array(
            'SELECT fvd.variant_id, fvd.variant
			FROM ?:product_feature_variants as fv
			JOIN ?:product_feature_variant_descriptions as fvd ON fv.variant_id = fvd.variant_id AND lang_code = ?s
			WHERE fv.feature_id = ?s',
            ['variant_id', 'variant'],
            CART_LANGUAGE,
            $brandFeatureId
        );

        if (!empty($brands)) {
            asort($brands);
            $view->assign('brands', $brands);
        }
    }

    $manufacturerFieldOptions = [];
    $manufacturerFieldData = db_get_fields('DESCRIBE ?:products');
    foreach ($manufacturerFieldData as $val) {
        $manufacturerFieldOptionsGroup = in_array($val, ['product_code', 'manufacturer_code']) ? 'base' : 'custom';
        $manufacturerFieldOptions[$manufacturerFieldOptionsGroup][$val] = $val;
    }

    ksort($manufacturerFieldOptions);

    $view->assign('manufacturerFieldOptions', $manufacturerFieldOptions);
    $view->assign('action', $action);

    $featuresIds = $features = [];
    if (!empty($supplier['column_settings']['additional'])) {
        foreach ($supplier['column_settings']['additional'] as $additional) {
            if (in_array($additional['type'], ['feature', 'group'])) {
                $featuresIds[] = $additional['value'];
                $featuresIds[] = $additional['value2'];
            }
        }

        if (!empty($featuresIds)) {
            $features = fn_settings_variants_addons_rf_stock_parser_get_features(array_unique($featuresIds));
        }
    }

    $view->assign('features', $features);

    $view->assign('encodings', [
        'windows-1251',
    ]);

    $tabs = [
        'general' => [
            'title' => __('general'),
            'js' => true,
        ],
        'amount_synonyms' => [
            'title' => __('my_supplier_amount_synonyms'),
            'js' => true,
        ],
        'price_synonyms' => [
            'title' => __('my_supplier_price_synonyms'),
            'js' => true,
        ],
        'features_synonyms' => [
            'title' => __('my_supplier_features_synonyms'),
            'js' => true,
        ],
        'availability_strategy' => [
            'title' => __('my_supplier_availability_strategy'),
            'js' => true,
        ],
        'pricing_strategy' => [
            'title' => __('my_supplier_pricing_strategy'),
            'js' => true,
        ],
        'schedule' => [
            'title' => __('my_supplier_schedule'),
            'js' => true,
        ],
    ];

    if (!empty($supplier['my_supplier_id'])) {
        $tabs = array_merge($tabs, [
            'not_found' => [
                'title' => __('my_supplier_not_found'),
                'href' => 'rf_stock_parser.get_not_found?nf_search[my_supplier_id]=' . $supplier['my_supplier_id'],
                'ajax' => true,
                'ajax_onclick' => true,
            ],
            'logs' => [
                'title' => __('my_supplier_logs'),
                'href' => 'rf_stock_parser.get_logs?my_supplier_id=' . $supplier['my_supplier_id'],
                'ajax' => true,
                'ajax_onclick' => true,
            ],
        ]);
    }

    $options['import_to_multiple_stores'] = array_diff($options['import_to_multiple_stores'], [$companyId]);
    if (count($options['import_to_multiple_stores'])) {
        $importToMultipleStores = db_get_hash_single_array(
            '
            SELECT company_id, company
            FROM ?:companies
            WHERE company_id IN (?a)',
            ['company_id', 'company'],
            $options['import_to_multiple_stores']
        );

        $view->assign('importToMultipleStores', $importToMultipleStores);
    }

    Registry::set('navigation.tabs', $tabs);
    $view->assign('attr_translates', Column::getAttrTranslates());
    $view->assign('columnsWithModifiers', Column::getColumnsWithModifiers());
    $view->assign('columnsWithFeatures', Column::WITH_FEATURES);
    $view->assign('updatedColumns', Column::getUpdatedColumns(true));

    $view->assign('vendorId', fn_get_runtime_vendor_id());
    $view->assign('warehouses', WarehouseHelper::getWarehouses($companyId, true));

    if (
        Registry::isExist('addons.master_products')
        && Registry::get('addons.master_products.status') != 'D'
    ) {
        $view->assign('zero_company_id_name_lang_var', 'rf_stock_parser.all_vendors_master_product');
    }

    if (isset($_REQUEST['my_supplier_id']) && !empty($supplier)) {
        $process = ProcessFabric::getProcess(Process::TYPE_PARSE, $_REQUEST['my_supplier_id']);
        $processing = $process->getStatus();
        $view->assign('processing', $processing);
    }

    $linkToProducts = [
        Column::LINK_VENDOR_CODE_WITH_BRANDS => __('rf_stock_parser_link_to_products.vendor_code_with_brand'),
        Column::LINK_VENDOR_CODE => __('rf_stock_parser_link_to_products.vendor_code'),
        Column::LINK_VENDOR_CODE_WITH_PARSER => __('rf_stock_parser_link_to_products.vendor_code_with_parser'),
    ];
    $view->assign('linkToProducts', $linkToProducts);

    $tabsSubPricing = $tabsSubPricingKeys = [];
    if (!empty($supplier['extra_charge_custom'])) {
        $tabsSubPricingKeys = array_keys($supplier['extra_charge_custom']);
    }

    $tabsSubPricingCategories = fn_rf_stock_parser_get_full_name_categories($tabsSubPricingKeys);

    foreach ($tabsSubPricingKeys as $key) {
        $tabsSubPricing[$key] = $tabsSubPricingCategories[$key] ?? null;
    }

    unset($tabsSubPricing['default']);
    asort($tabsSubPricing);
    $tabsSubPricing = ['default' => __('default')] + $tabsSubPricing;

    $view->assign('tabsSubPricing', $tabsSubPricing);
} elseif ($mode == 'cron') {
    echo 'Start cron' . PHP_EOL;
    $params = [
        'status' => 'A',
    ];

    $force = isset($_REQUEST['force']);

    if (isset($_REQUEST['parser_id'])) {
        $params['my_supplier_id'] = $_REQUEST['parser_id'];
    }

    list($suppliers, $params) = fn_get_my_suppliers($params);
    $hour = date('G');

    if (!empty($suppliers)) {
        foreach ($suppliers as $supplier) {
            $cronData = unserialize($supplier['cron']);
            $download = false;

            if (!$force) {
                if (strpos($cronData['time'], '*/') !== false) {
                    $step = (int) str_replace('*/', '', $cronData['time']);

                    if ($step > 0 && $hour % $step === 0) {
                        $download = true;
                    }
                } else {
                    $hours = array_map('trim', explode(',', $cronData['time']));
                    if (
                        in_array($hour, $hours)
                        && (empty($supplier['access_time']) || date('YmdG', $supplier['access_time']) != date('YmdG'))
                    ) {
                        $download = true;
                    }
                }
            }

            if ($download || $force) {
                $importer = Price::getInstance($supplier['my_supplier_id'], $_REQUEST['attach'] ?? null);
                $importer->import($_REQUEST['attach'] ?? null);
            }
        }
    }

    echo 'Stop cron' . PHP_EOL;
    exit;
} elseif ($mode == 'get_logs') {
    if (empty($_REQUEST['my_supplier_id'])) {
        return false;
    }

    $params = $_REQUEST;

    if (empty($params['items_per_page'])) {
        $params['items_per_page'] = 20;
    }

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field('SELECT COUNT(id) FROM ?:rf_stock_parser_logs where my_supplier_id = ?i', $_REQUEST['my_supplier_id']);
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $logs = db_get_array(
        "SELECT id, date, user_id, attach_id, general, access_time, detailed, large_percentage,
		IF (duplicates != '' AND duplicates IS NOT NULL, 1, 0) as duplicates,
		IF (categories != '' AND categories IS NOT NULL, 1, 0) as categories
        FROM ?:rf_stock_parser_logs where my_supplier_id = ?i order by id desc "
        . $limit,
        $_REQUEST['my_supplier_id']
    );

    $accessCounts = [];
    if (!empty($logs)) {
        foreach ($logs as &$log) {
            $accessCounts[] = $log['access_time'];
            $log['general'] = json_decode($log['general'], true);
            $log['user'] = fn_get_user_name($log['user_id']);
        }
    }

    $view = Tygh::$app['view'];
    $view->assign('logs', $logs);
    $view->assign('supplierId', $_REQUEST['my_supplier_id']);
    $view->assign('search', $params);

    return [CONTROLLER_STATUS_OK];
} elseif ($mode == 'show_log') {
    $type = $_REQUEST['type'];
    $supplierId = $_REQUEST['my_supplier_id'];
    $logId = $_REQUEST['log_id'];
    $csv = isset($_REQUEST['csv']);

    if (empty($type) || empty($supplierId) || empty($logId)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    $types = [
        'duplicates',
        'categories',
    ];

    if (!in_array($type, $types)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    $log = db_get_row("SELECT {$type}, date FROM ?:rf_stock_parser_logs where my_supplier_id = ?i and id = ?i", $supplierId, $logId);
    $date = $log['date'];

    if (!empty($log)) {
        $log = json_decode($log[$type], true);

        if ($type == 'duplicates' && !empty($log)) {
            $log = db_get_array('
				select p.product_id, p.product_code, p.status, prices.price, d.product
				from ?:products as p
				left join ?:product_descriptions as d ON d.product_id = p.product_id and lang_code = ?s
				left join ?:product_prices as prices ON prices.product_id = p.product_id AND prices.lower_limit = 1 and usergroup_id = 0
				where p.product_id IN (?a)
			', CART_LANGUAGE, $log);
        }
    }

    $supplier = fn_get_my_supplier_data($supplierId);

    if (!empty($csv)) {
        array_to_csv_download($log, $supplier['supplier_name'] . ' ' . $type . ' ' . $date . '.csv');
        exit;
    }

    $view = Tygh::$app['view'];
    $view->assign('items', $log);
    $view->assign('type', $type);
    $view->assign('supplier', $supplier);
    $view->assign('date', $date);
    $view->assign('log_id', $logId);
} elseif ($mode == 'migration_test') {
    $version = $_REQUEST['v'] ?? null;

    if (!$version) {
        fn_print_die('version empty');
    }

    $config = [
        'migration_dir' => realpath('app/addons/rf_stock_parser/upgrades/' . $version . '/migrations/'),
        'package_id' => 'rf_stock_parser',
    ];

    try {
        $migration_exception = null;
        $success = Migration::instance($config)->migrate(false);
        if ($success) {
            fn_print_die('success');
        } else {
            fn_print_die('not success');
        }
    } catch (Exception $e) {
        $migration_exception = $e;
    } catch (Error $e) {
        $migration_exception = $e;
    }

    fn_print_die($migration_exception);
} elseif ($mode == 'get_not_found') {
    get_not_found:

    $params = $_REQUEST;
    $nfSearch = $params['nf_search'];

    if (empty($nfSearch['my_supplier_id'])) {
        return false;
    }

    if (empty($params['items_per_page'])) {
        $params['items_per_page'] = 20;
    }

    $where[] = db_quote('my_supplier_id = ?i', $nfSearch['my_supplier_id']);

    if (!empty($nfSearch['manufacturer_code'])) {
        $where[] = db_quote('manufacturer_code LIKE ?l', '%' . trim($nfSearch['manufacturer_code']) . '%');
    }

    if (!empty($nfSearch['brand'])) {
        $where[] = db_quote('brand LIKE ?l', trim('%' . $nfSearch['brand']) . '%');
    }

    if (!empty($nfSearch['category'])) {
        $where[] = db_quote('category_id IN (SELECT category_id FROM ?:category_descriptions WHERE category LIKE ?l)', '%' . trim($nfSearch['category'] . '%'));
    }

    $where = implode(' AND ', $where);

    $limit = '';

    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field('
            SELECT COUNT(id)
            FROM ?:rf_stock_parser_logs_not_found
            WHERE ' . $where);
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $notFound = db_get_array('
        SELECT *
        FROM ?:rf_stock_parser_logs_not_found
        WHERE ' . $where . ' ORDER BY added ASC, id ASC' . $limit);

    $headers = [];
    $data = [];
    $featureIds = [];
    $categoryIds = [];

    if (!empty($notFound)) {
        foreach ($notFound as $item) {
            $item['value'] = @json_decode($item['value'], true);
            $data[$item['id']] = $item;

            if (!empty($item['category_id'])) {
                $categoryIds[] = $item['category_id'];
            }

            if (!empty($item['value']['category'])) {
                $categoryIds = array_merge($categoryIds, $item['value']['category']);
            }

            if (!empty($item['value']['group']['eq'])) {
                $featureIds[] = $item['value']['group']['eq'];
            }

            if (!empty($item['value']['group']['eq2'])) {
                $featureIds[] = $item['value']['group']['eq2'];
            }

            if (!empty($item['value']['feature'])) {
                foreach ($item['value']['feature'] as $k => $v) {
                    if (strstr($k, 'm') !== false) {
                        $k = substr($k, 1);
                    }
                    $featureIds[] = $k;
                }
            }
        }

        if (!empty($data)) {
            $headers = array_keys(reset($data));
        }
    }

    $notShow = [
        'manufacturer_code',
        'modifiers',
        'added',
        'in_name',
    ];

    $parser = fn_get_my_supplier_data($nfSearch['my_supplier_id']);
    if (!empty($parser['column_settings']['default_category'])) {
        $categoryIds[] = $parser['column_settings']['default_category'];
    }

    $view = Tygh::$app['view'];
    $view->assign('parser', $parser);
    $view->assign('data', $data);
    $view->assign('headers', $headers);
    $view->assign('search', $params);
    $view->assign('notShow', $notShow);
    $view->assign('columnTranslates', Column::getColumnTranslates($parser['company_id']));
    $view->assign('pricesUserGroups', Column::getUserGroups());
    $view->assign('nf_search', $_REQUEST['nf_search']);
    $view->assign('current_url', fn_url('rf_stock_parser.get_not_found&' . http_build_query(['nf_search' => $nfSearch]) . '&items_per_page=' . $params['items_per_page']));

    $features = [];
    if (!empty($featureIds)) {
        $features = fn_settings_variants_addons_rf_stock_parser_get_features(array_unique($featureIds));
    }

    $view->assign('features', $features);

    $view->assign('category_ids', array_unique($categoryIds));

    return [CONTROLLER_STATUS_OK];
} elseif ($mode == 'show_log_detailed') {
    if (empty($_REQUEST['my_supplier_id']) || empty($_REQUEST['log_id'])) {
        return false;
    }

    $params = $_REQUEST;

    $supplier = fn_get_my_supplier_data($params['my_supplier_id']);

    $largePercentCondition = '';
    if (!empty($params['large_percentage'])) {
        $largePercentCondition = ' AND d.large_percentage = 1';
    }

    if (empty($params['items_per_page'])) {
        $params['items_per_page'] = 20;
    }

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field(
            '
            SELECT COUNT(d.id)
            FROM ?:rf_stock_parser_logs_detailed as d
            JOIN ?:rf_stock_parser_logs as l ON l.access_time = d.access_time
            WHERE d.my_supplier_id = ?i AND l.id = ?i ' . $largePercentCondition,
            $params['my_supplier_id'],
            $params['log_id']
        );
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $detailedLogs = db_get_array(
        '
        SELECT d.*, l.date, d.access_time
        FROM ?:rf_stock_parser_logs as l
        JOIN ?:rf_stock_parser_logs_detailed as d ON d.access_time = l.access_time
        WHERE d.my_supplier_id = ?i AND l.id = ?i ' . $largePercentCondition . '
        ORDER BY id ASC' . $limit,
        $params['my_supplier_id'],
        $params['log_id']
    );

    $date = null;
    if (!empty($detailedLogs)) {
        foreach ($detailedLogs as &$detailedLog) {
            $date = $detailedLog['date'];
            $detailedLog['value'] = json_decode($detailedLog['value'], true);
        }
    }

    $type = !empty($params['large_percentage']) ? 'large_percentage' : 'detailed';

    if (!empty($csv)) {
        array_to_csv_download($detailedLogs, $supplier['supplier_name'] . ' ' . $type . ' ' . $date . '.csv');
        exit;
    }

    $view = Tygh::$app['view'];
    $view->assign('items', $detailedLogs);
    $view->assign('type', $type);
    $view->assign('supplier', $supplier);
    $view->assign('date', $date);
    $view->assign('log_id', $params['log_id']);
    $view->assign('search', $params);

    return [CONTROLLER_STATUS_OK];
} elseif ($mode === 'export_not_found') {
    $parserId = $_REQUEST['parser_id'];

    if (empty($parserId)) {
        exit;
    }

    $process = ProcessFabric::getProcess(Process::TYPE_NOT_FOUND_EXPORT, $parserId);

    try {
        $parser = fn_get_my_supplier_data($parserId);
        $lastId = 0;
        $file = fn_create_temp_file();
        $fd = fopen($file, 'a+');
        $processed = 0;

        $all = db_get_field('SELECT count(*) FROM ?:rf_stock_parser_logs_not_found WHERE my_supplier_id = ?i', $parserId);

        $fields = [
            'manufacturer_code',
            'brand',
            'category_id',
        ];

        $wrongFields = [
            'modifiers',
            'in_name',
        ];

        while (true) {
            $data = db_get_array('
            SELECT *
            FROM ?:rf_stock_parser_logs_not_found
            WHERE my_supplier_id = ?i AND id > ?i
            ORDER BY id ASC
            LIMIT 500
        ', $parserId, $lastId);

            if (empty($data)) {
                break;
            }

            foreach ($data as $datum) {
                $datum['value'] = json_decode($datum['value'], true);

                $ar = [];

                if (!$lastId) {
                    $translates = Column::getColumnTranslates($parser['company_id']) + Column::getUserGroups();
                    $featureColumns = [];

                    foreach ($fields as $field) {
                        $ar[] = $translates[$field] ?? $field;
                    }

                    foreach (array_keys($datum['value']) as $key) {
                        if (in_array($key, $wrongFields)) {
                            continue;
                        }

                        if ($key === 'feature') {
                            foreach ($datum['value'][$key] as $f => $ff) {
                                $featureId = substr($f, 1);
                                $ar[] = $featureId;
                                end($ar);
                                $featureColumns[key($ar)] = $featureId;
                            }
                        } else {
                            $ar[] = $translates[$key] ?? $key;
                        }
                    }

                    if (!empty($featureColumns)) {
                        $featureNames = db_get_hash_single_array('
                        SELECT feature_id, description
                        FROM ?:product_features_descriptions
                        WHERE feature_id IN (?a) AND lang_code = ?s
                    ', ['feature_id', 'description'], $featureColumns, CART_LANGUAGE);

                        if (!empty($featureNames)) {
                            foreach ($featureColumns as $fieldKey => $featureColumn) {
                                if (!empty($featureNames[$featureColumn])) {
                                    $ar[$fieldKey] = $featureNames[$featureColumn];
                                }
                            }
                        }
                    }

                    fputcsv($fd, $ar);
                    $ar = [];
                }

                foreach ($fields as $field) {
                    $ar[] = $datum[$field] ?? '';
                }

                foreach ($datum['value'] as $k => $val) {
                    if (in_array($k, $wrongFields)) {
                        continue;
                    }

                    if (is_array($val)) {
                        if ($k === 'feature') {
                            foreach ($val as $f) {
                                $ar[] = $f;
                            }
                        } else {
                            $ar[] = implode(';', $val);
                        }
                    } else {
                        $ar[] = $val;
                    }
                }

                $lastId = $datum['id'];
                fputcsv($fd, $ar);
            }

            $processed += count($data);
            $process->saveStatus(1, $processed / $all * 100, '', "export {$processed}/{$all}");
        }

        fclose($fd);

        $process->saveStatus(0, 100, '', 'finish', '[READFILE]' . $file);
    } catch (Throwable $e) {
        $process->saveStatus(0, 0, ExceptionInfo::get($e));
    }

    exit;
} elseif ($mode == 'read_file') {
    if (mb_stripos($_REQUEST['file'], '/var/cache/misc/tmp') === false) {
        return false;
    }
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="export.csv";');
    readfile($_REQUEST['file']);
    exit;
} elseif ($mode == 'update_settings') {
    $addon_scheme = SchemesManager::getScheme('rf_stock_parser');

    $settings_values = fn_get_addon_settings_values('rf_stock_parser');
    $settings_vendor_values = fn_get_addon_settings_vendor_values('rf_stock_parser');

    fn_update_addon_settings($addon_scheme, true, $settings_values, $settings_vendor_values);
    fn_clear_cache();
    Registry::clearCachedKeyValues();
} elseif ($mode == 'dev_info') {
    $t1 = db_get_array('SELECT * FROM ?:product_prices WHERE product_id = ?i', $_REQUEST['product_id']);
    $t2 = db_get_array('SELECT * FROM ?:ult_product_prices WHERE product_id = ?i', $_REQUEST['product_id']);

    fn_print_r($t1);
    fn_print_die($t2);
} elseif ($mode == 'check_executable') {
    echo 'test';
    exit;
} elseif ($mode == 'delete_products') {
    $parserId = $_REQUEST['parser_id'];

    if (empty($parserId) || $_REQUEST['check'] != 'HJghE') {
        throw new Exception('empty parser_id');
    }

    $productIds = db_get_fields('SELECT product_id FROM ?:products WHERE my_supplier_id = ?i', $parserId);
    foreach ($productIds as $productId) {
        fn_delete_product($productId);
        echo 'deleted ' . $productId . PHP_EOL;
    }
}
