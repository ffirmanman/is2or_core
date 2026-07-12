<?php

// RF_OB_TRUE

use Symfony\Component\Process\PhpExecutableFinder;
use Tygh\Registry;
use Tygh\Navigation\LastView;
use Tygh\RfStockParser\Helpers\FilesHelper;
use Tygh\RfStockParser\Process\Execute;
use Tygh\Settings;
use Tygh\RfStockParser\Price;
use Tygh\Languages\Languages;
use Tygh\Enum\ProductFeatures;
use Tygh\RfStockParser\Import;
use Tygh\Addons\ProductVariations\Product\FeaturePurposes;
use Tygh\Storage;
use Tygh\RfStockParser\Currencies\Sources\Cart;
use Tygh\RfStockParser\Currencies\Sources\Cbr;
use Tygh\RfStockParser\Currencies\Sources\Ecb;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

/**
 * Update supplier data.
 *
 * @param int   $my_supplier_id
 * @param array $supplier_data
 *
 * @return int Supplier id
 */
function fn_update_my_supplier($my_supplier_id, $supplier_data)
{
    $errors = [];
    if (empty($supplier_data['supplier_name'])) {
        $errors[] = 'name';
    }

    $serialize = [
        'column_settings',
        'new_pos',
        'cron',
        'price_round',
        'wh_clear',
    ];

    $columnTo = &$supplier_data['column_settings']['column_map']['to'];
    $columnFrom = &$supplier_data['column_settings']['column_map']['from'];
    $columnAttr = &$supplier_data['column_settings']['column_map']['attr'];
    $columnOrder = &$supplier_data['column_settings']['column_map']['order'];
    $columnInName = &$supplier_data['column_settings']['column_map']['in_name'];
    $busyColumn = [];

    if (!empty($columnTo)) {
        foreach ($columnTo as $k => $column) {
            if (empty($column) || empty($columnFrom[$k]) || in_array($columnFrom[$k] . '_' . ($columnAttr[$k] ?? null), $busyColumn)) {
                unset($columnFrom[$k], $columnTo[$k], $columnOrder[$k], $columnInName[$k], $columnAttr[$k]);
            } else {
                $busyColumn[] = $columnFrom[$k] . '_' . ($columnAttr[$k] ?? null);
                $columnOrder[$k] = $columnOrder[$k] === '' ? 0 : $columnOrder[$k];
            }
        }

        $columnFrom = array_values($columnFrom);
        $columnTo = array_values($columnTo);
    }
    unset($columnFrom, $columnTo);

    $additional = &$supplier_data['column_settings']['additional'];
    $busyAdditionalFeatureId = [];

    if (!empty($additional)) {
        foreach ($additional as $k => &$column) {
            $column['order'] = $column['order'] === '' ? 0 : $column['order'];

            if (
                empty($column['from'])
                || ($column['type'] === 'feature' && empty($column['value']))
                || ($column['type'] === 'feature' && in_array($column['value'], $busyAdditionalFeatureId))
                || empty($column['type'])
            ) {
                unset($additional[$k]);
            } elseif ($column['type'] == 'feature') {
                $busyAdditionalFeatureId[] = $column['value'];
            }
        }
        unset($column);
    }
    unset($additional);

    $communicationCategories = &$supplier_data['column_settings']['categories'];
    if (!empty($communicationCategories)) {
        foreach ($communicationCategories as $k => $category) {
            if (empty($category['name']) || empty($category['value'])) {
                unset($communicationCategories[$k]);
            }
        }
    }
    unset($communicationCategories);

    if (!in_array($supplier_data['avail_strategy_not_in'], [Price::STRATEGY_OUT_DISABLE, Price::STRATEGY_OUT_SET_ZERO])) {
        $supplier_data['wh_clear'] = [];
    }

    foreach ($serialize as $ser) {
        $supplier_data[$ser] = serialize($supplier_data[$ser] ?? []);
    }

    if (!empty($supplier_data['extra_charge_custom'])) {
        foreach ($supplier_data['extra_charge_custom'] as $k => &$extraChargeCustomCategory) {
            foreach ($extraChargeCustomCategory['custom'] as $kk => &$extraChargeCustom) {
                $name = trim($extraChargeCustom['name']);
                $value = trim($extraChargeCustom['value']);

                if ($name === '' || $value === '' || !is_numeric($name) || !is_numeric($value) || ($name == 0 && $value == 0)) {
                    unset($supplier_data['extra_charge_custom'][$k]['custom'][$kk]);
                } else {
                    $extraChargeCustom['name'] = $name;
                    $extraChargeCustom['value'] = (float) $value;
                }
            }

            $extraChargeCustomCategory['custom'] = array_values($extraChargeCustomCategory['custom']);
        }
        unset($extraChargeCustomCategory, $extraChargeCustom);

        $supplier_data['extra_charge_custom'] = serialize($supplier_data['extra_charge_custom']);
    }

    if (is_array($supplier_data)) {
        foreach ($supplier_data as &$datum) {
            if (!is_array($datum)) {
                $datum = trim($datum);
            }
        }
        unset($datum);
    }

    if (!isset($supplier_data['filter_attributes'])) {
        $supplier_data['filter_attributes'] = null;
    }

    if (!isset($supplier_data['custom_node_name'])) {
        $supplier_data['custom_node_name'] = null;
    }

    $synonyms = [
        'amount_synonyms',
        'price_synonyms',
        'features_synonyms',
    ];

    foreach ($synonyms as $synonym) {
        if (!empty($supplier_data[$synonym])) {
            foreach ($supplier_data[$synonym] as $k => &$amount_synonyms) {
                if (trim($amount_synonyms['name']) === '' || trim($amount_synonyms['value']) === '') {
                    unset($supplier_data[$synonym][$k]);
                } else {
                    $amount_synonyms['name'] = trim($amount_synonyms['name']);
                    $amount_synonyms['value'] = trim($amount_synonyms['value']);
                }
            }
            unset($amount_synonyms);

            $supplier_data[$synonym] = serialize($supplier_data[$synonym]);
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            fn_set_notification('E', __('error'), __($error));
        }

        return false;
    }

    if (empty($my_supplier_id)) {
        $supplier_data['timestamp'] = TIME;

        $my_supplier_id = db_query('INSERT INTO ?:rf_stock_parser ?e', $supplier_data);
    } else {
        db_query('UPDATE ?:rf_stock_parser SET ?u WHERE my_supplier_id = ?i', $supplier_data, $my_supplier_id);
        db_query('DELETE FROM ?:rf_stock_parser_brands WHERE my_supplier_id = ?i', $my_supplier_id);
    }

    if ($my_supplier_id && !empty($supplier_data['brands'])) {
        $brands = [];
        foreach ($supplier_data['brands'] as $brandId) {
            $brands[] = [
                'my_supplier_id' => $my_supplier_id,
                'brand_id' => $brandId,
            ];
        }

        db_query('INSERT INTO ?:rf_stock_parser_brands ?m', $brands);
    }

    if ($my_supplier_id && fn_allowed_for('ULTIMATE')) {
        db_query('UPDATE ?:ult_objects_sharing SET share_company_id = ?i WHERE share_object_id = ?i AND share_object_type = "my_suppliers"', $supplier_data['company_id'], $my_supplier_id);
    }

    Import::clearParserCache($my_supplier_id);

    if (!empty($_SESSION['constructor_ids_for_delete'])) {
        db_query('
            DELETE n FROM ?:rf_stock_parser_xml_nodes as n
            LEFT JOIN ?:rf_stock_parser as s ON s.constructor_id = n.constructor_id
            WHERE s.my_supplier_id IS NULL AND n.constructor_id IN (?a)', $_SESSION['constructor_ids_for_delete']);
        unset($_SESSION['constructor_ids_for_delete']);
    }

    return $my_supplier_id;
}

/**
 * Get supplier data.
 *
 * @param array $params
 * @param mixed $items_per_page
 *
 * @return array Found suppliers data
 */
function fn_get_my_suppliers($params = [], $items_per_page = 0)
{
    // Init filter
    $params = LastView::instance()->update('my_suppliers', $params);

    $condition = fn_get_company_condition('?:rf_stock_parser.company_id');
    $join = db_quote(' LEFT JOIN ?:companies ON ?:rf_stock_parser.company_id = ?:companies.company_id');
    $join .= db_quote(' LEFT JOIN ?:rf_stock_parser_logs ON ?:rf_stock_parser_logs.my_supplier_id = ?:rf_stock_parser.my_supplier_id');

    // Set default values to input params
    $default_params = [
        'page' => 1,
        'items_per_page' => $items_per_page,
    ];

    $params = array_merge($default_params, $params);

    // Define fields that should be retrieved
    $fields = [
        '?:rf_stock_parser.my_supplier_id',
        '?:rf_stock_parser.timestamp',
        '?:rf_stock_parser.type',
        '?:rf_stock_parser.status',
        '?:rf_stock_parser.supplier_name',
        '?:rf_stock_parser.company_id',
        '?:rf_stock_parser.cron',
        '?:rf_stock_parser.access_time',
        '?:companies.company as company_name',
        'max(?:rf_stock_parser_logs.date) as last_run',
    ];

    // Define sort fields
    $sortings = [
        'id' => '?:rf_stock_parser.my_supplier_id',
        'name' => '?:rf_stock_parser.supplier_name',
        'date' => '?:rf_stock_parser.timestamp',
        'status' => '?:rf_stock_parser.status',
        'company' => 'company_name',
        'last_run' => 'last_run',
    ];

    $filters = [
        'name' => '?:rf_stock_parser.supplier_name',
        'status' => '?:rf_stock_parser.status',
        'company' => '?:my_companies.company',
    ];

    foreach ($filters as $filter => $field) {
        if (!empty($params[$filter])) {
            $condition .= db_quote(' AND ' . $field . ' LIKE ?l', '%' . trim($params[$filter]) . '%');
        }
    }

    if (!empty($params['my_supplier_id'])) {
        $condition .= db_quote(' AND ?:rf_stock_parser.my_supplier_id IN (?n)', $params['my_supplier_id']);
    }

    $sorting = db_sort($params, $sortings, 'last_run', 'desc');

    // Paginate search results
    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field('SELECT COUNT(DISTINCT(?:rf_stock_parser.my_supplier_id)) FROM ?:rf_stock_parser ?p WHERE 1 ?p', $join, $condition);
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $suppliers = db_get_array('SELECT ?p FROM ?:rf_stock_parser ?p WHERE 1 ?p GROUP BY ?:rf_stock_parser.my_supplier_id ?p ?p', implode(', ', $fields), $join, $condition, $sorting, $limit);

    LastView::instance()->processResults('my_suppliers', $suppliers, $params);

    return [$suppliers, $params];
}

/**
 * Get supplier data.
 *
 * @param int $my_supplier_id
 *
 * @return array|bool Found supplier data and shippings links and products links
 */
function fn_get_my_supplier_data($my_supplier_id)
{
    $supplier = db_get_row('SELECT * FROM ?:rf_stock_parser WHERE my_supplier_id = ?i', $my_supplier_id);

    $serialize = [
        'column_settings',
        'new_pos',
        'extra_charge_custom',
        'amount_synonyms',
        'price_synonyms',
        'features_synonyms',
        'cron',
        'price_round',
        'wh_clear',
    ];

    if (!empty($supplier)) {
        foreach ($serialize as $ser) {
            $supplier[$ser] = unserialize($supplier[$ser]);
        }

        $supplier['filter_attributes'] = explode(',', $supplier['filter_attributes']);
        $supplier['brands'] = db_get_fields('SELECT brand_id FROM ?:rf_stock_parser_brands WHERE my_supplier_id = ?i', $my_supplier_id);

        if (!empty($supplier['extra_charge_custom'])) {
            foreach ($supplier['extra_charge_custom'] as &$item) {
                if (empty($item['custom'])) {
                    continue;
                }

                usort($item['custom'], function ($a, $b) {
                    return $a['name'] <=> $b['name'];
                });
            }
            unset($item);
        }

        if ($supplier['type'] === 'csv') {
            if (empty($supplier['column_settings']['csv_delimiter'])) {
                $supplier['column_settings']['csv_delimiter'] = ',';
            }

            if (empty($supplier['column_settings']['csv_enclosure'])) {
                $supplier['column_settings']['csv_enclosure'] = '"';
            }

            if (empty($supplier['column_settings']['csv_escape'])) {
                $supplier['column_settings']['csv_escape'] = '\\';
            }

            if ($supplier['column_settings']['csv_escape'] == '\\\\') {
                $supplier['column_settings']['csv_escape'] = '\\';
            }
        }
    }

    return !empty($supplier) ? $supplier : false;
}

/**
 * Update supplier status.
 *
 * @param int    $my_supplier_id
 * @param string $new_status
 *
 * @return bool
 */
function fn_update_status_my_supplier($my_supplier_id, $new_status)
{
    if (!empty($my_supplier_id)) {
        $result = db_query('UPDATE ?:rf_stock_parser SET status = ?s WHERE my_supplier_id = ?i', $new_status, $my_supplier_id);
        echo $result;
    }

    return !empty($result) ? true : false;
}

/**
 * Delete supplier data.
 *
 * @param int $my_supplier_id
 *
 * @return bool
 */
function fn_delete_my_supplier($my_supplier_id)
{
    if (!empty($my_supplier_id)) {
        fn_my_suppliers_clear_logs($my_supplier_id, true);
        db_query('DELETE FROM ?:rf_stock_parser_brands WHERE my_supplier_id = ?i', $my_supplier_id);
        db_query('DELETE FROM ?:rf_stock_parser_logs_not_found WHERE my_supplier_id = ?i', $my_supplier_id);

        $constructorId = db_get_field('SELECT constructor_id FROM ?:rf_stock_parser WHERE my_supplier_id = ?i', $my_supplier_id);
        if (!empty($constructorId)) {
            db_query('DELETE FROM ?:rf_stock_parser_xml_nodes WHERE constructor_id = ?i', $constructorId);
        }

        $result = db_query('DELETE FROM ?:rf_stock_parser WHERE my_supplier_id = ?i', $my_supplier_id);
    }

    return !empty($result) ? true : false;
}

/**
 * Get supplier name.
 *
 * @param int $my_supplier_id
 *
 * @return string Found supplier name
 */
function fn_get_my_supplier_name($my_supplier_id)
{
    if (!empty($my_supplier_id)) {
        $supplier_name = db_get_field('SELECT ?:rf_stock_parser.supplier_name FROM ?:rf_stock_parser WHERE ?:rf_stock_parser.my_supplier_id = ?i', $my_supplier_id);
    }

    return !empty($supplier_name) ? $supplier_name : __('none');
}

/**
 * Get supplier data for supplier ID and company ID or get default supplier data for company ID.
 *
 * @param int $my_supplier_id
 * @param int $company_id
 *
 * @return array Found supplier data and shippings links and products links
 */
function fn_if_get_my_supplier($my_supplier_id, $company_id)
{
    if (fn_allowed_for('ULTIMATE')) {
        $condition = ''; // Use sharing instead
    } else {
        $condition = db_quote(' AND ?:rf_stock_parser.company_id = ?i', $company_id);
    }

    $supplier = db_get_row('SELECT * FROM ?:rf_stock_parser WHERE ?:rf_stock_parser.my_supplier_id = ?i ?p', $my_supplier_id, $condition);

    if (empty($supplier)) {
        if (fn_allowed_for('ULTIMATE')) {
            $condition = '';
        } else {
            $condition = db_quote('AND ?:rf_stock_parser.company_id = ?i', $company_id);
        }

        $count = db_get_field('SELECT COUNT(*) FROM ?:rf_stock_parser WHERE status = ?s ?p', 'A', $condition);
        if (!empty($count)) {
            $supplier = ['my_supplier_id' => 0, 'supplier_name' => '-' . __('none') . '-'];
        }
    }

    return !empty($supplier) ? $supplier : false;
}

function fn_rf_stock_parser_update_product_post(&$product_data, &$product_id, &$lang_code, &$create)
{
    if (Registry::isExist('addons.product_variations') && isset($product_data['my_supplier_id']) && $product_data['my_supplier_id'] >= 0) {
        db_query('UPDATE ?:products set my_supplier_id = ?i WHERE product_type = ?s AND parent_product_id = ?i', $product_data['my_supplier_id'], 'V', $product_id);
    }
}

function array_to_csv_download($array, $filename = 'export.csv', $delimiter = ';')
{
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    $f = fopen('php://output', 'w');

    foreach ($array as $k => $line) {
        if (!is_array($line)) {
            $line = [$line];
        }

        foreach ($line as $kk => $vv) {
            if (is_array($vv)) {
                $text = '';
                foreach ($vv as $kkk => $vvv) {
                    $text .= $kkk . ' ' . $vvv . PHP_EOL;
                }

                $line[$kk] = $text;
            }
        }

        fputcsv($f, $line, $delimiter);
    }
}

function fn_rf_stock_parser_get_products(&$params, &$fields, &$sortings, &$condition, &$join, &$sorting, &$group_by, &$lang_code)
{
    if (!empty($params['my_supplier_id'])) {
        $condition .= db_quote(' AND products.my_supplier_id = ?i', $params['my_supplier_id']);
    }

    if (!empty($params['rf_stop_update_price'])) {
        $condition .= " AND products.rf_stop_update_price = 'Y'";
    }

    if (!empty($params['rf_stop_update_amount'])) {
        $condition .= " AND products.rf_stop_update_amount = 'Y'";
    }

    if (!empty($params['rf_stop_update_status'])) {
        $condition .= " AND products.rf_stop_update_status = 'Y'";
    }

    if (!empty($params['manufacturer_code'])) {
        $condition .= db_quote(' AND products.manufacturer_code LIKE ?l', '%' . $params['manufacturer_code'] . '%');
    }

    $fields[] = 'products.rf_stop_update_price';
    $fields[] = 'products.rf_stop_update_amount';
    $fields[] = 'products.rf_stop_update_status';
}

function fn_my_suppliers_get_human_types($type)
{
    $types = [
        Price::DETAILED_TYPE_UPDATED => __('rf_stock_parser_log_status_updated'),
        Price::DETAILED_TYPE_ENABLED => __('rf_stock_parser_log_status_enabled'),
        Price::DETAILED_TYPE_DISABLED => __('rf_stock_parser_log_status_disabled'),
        Price::DETAILED_TYPE_HIDDEN => __('rf_stock_parser_log_status_hidden'),
        Price::DETAILED_TYPE_UPDATED_ONLY_PRICES => __('rf_stock_parser_log_status_updated_only_prices'),
    ];

    $humanTypes = [];

    foreach ($types as $t => $h) {
        if ($type & $t) {
            $humanTypes[] = $h;
        }
    }

    return implode(', ', $humanTypes);
}

function fn_my_suppliers_log($data)
{
    $fp = fopen('vardump.txt', 'a');
    fwrite($fp, var_export($data, true) . PHP_EOL);
    fclose($fp);
}

function fn_my_suppliers_clear_logs($my_supplier_id, $deleteAll = false)
{
    $data = fn_get_my_supplier_data($my_supplier_id);
    if ($data['keep_logs_days'] < 1) {
        $deleteAll = true;
    }

    if (!empty($data)) {
        if (!$deleteAll) {
            $date = date('Y-m-d H:i:s', strtotime('-' . $data['keep_logs_days'] . ' days'));
            $attachments = db_get_fields('SELECT attach_id FROM ?:rf_stock_parser_logs WHERE my_supplier_id = ?i AND `date` < ?s', $my_supplier_id, $date);
        } else {
            $attachments = db_get_fields('SELECT attach_id FROM ?:rf_stock_parser_logs WHERE my_supplier_id = ?i', $my_supplier_id);
        }

        if (!empty($attachments)) {
            fn_delete_attachments($attachments, 'my_supplier_price', $my_supplier_id);
        }

        if (!$deleteAll) {
            $accessCounts = db_get_fields('SELECT DISTINCT access_time FROM ?:rf_stock_parser_logs WHERE my_supplier_id = ?i AND `date` < ?s', $my_supplier_id, $date);
            db_query('DELETE FROM ?:rf_stock_parser_logs WHERE my_supplier_id = ?i AND `date` < ?s', $my_supplier_id, $date);
            if (!empty($accessCounts)) {
                db_query('DELETE FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i AND access_time IN (?a)', $my_supplier_id, $accessCounts);
            }
        } else {
            db_query('DELETE FROM ?:rf_stock_parser_logs WHERE my_supplier_id = ?i', $my_supplier_id);
            db_query('DELETE FROM ?:rf_stock_parser_logs_detailed WHERE my_supplier_id = ?i', $my_supplier_id);
        }
    }
}

function fn_settings_variants_addons_rf_stock_parser_import_to_multiple_stores()
{
    return db_get_hash_single_array(
        '
        SELECT company_id, company
        FROM ?:companies',
        ['company_id', 'company']
    );
}

function fn_settings_variants_addons_rf_stock_parser_brand_feature_id()
{
    $options = [''];

    $join = '';

    if (fn_allowed_for('MULTIVENDOR')) {
        $fields = 'fd.feature_id, fd.description';
    } else {
        $fields = 'fd.feature_id, fd.description, c.company';
        $join = 'JOIN ?:companies as c ON c.company_id = f.company_id';
    }

    $features = db_get_array(
        '
        SELECT ' . $fields . '
        FROM ?:product_features_descriptions as fd
        JOIN ?:product_features as f ON f.feature_id = fd.feature_id
        ' . $join . '
        WHERE fd.lang_code = ?s',
        CART_LANGUAGE
    );

    if (!empty($features)) {
        foreach ($features as $feature) {
            if (fn_allowed_for('MULTIVENDOR')) {
                $options[$feature['feature_id']] = $feature['description'];
            } else {
                $options[$feature['feature_id']] = '[' . $feature['company'] . '] ' . $feature['description'];
            }
        }
    }

    return $options;
}

function fn_settings_variants_addons_rf_stock_parser_get_features(array $ids = [], $showCompany = false, $pattern = null, $start = 0, $limit = 5000, $onlyGroup = false)
{
    $options = [__('none')];
    $where = [];

    if (!empty($ids)) {
        $where[] = db_quote('fd.feature_id IN (?a)', $ids);
    }

    if (!empty($pattern)) {
        $where[] = db_quote('fd.description LIKE ?l', $pattern . '%');
    }

    if (!empty($onlyGroup) && Registry::isExist('addons.product_variations')) {
        $where[] = db_quote('pf.purpose IN (?a)', [
            FeaturePurposes::CREATE_CATALOG_ITEM,
            FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM,
        ]);
    }

    $where[] = db_quote('fd.lang_code = ?s', CART_LANGUAGE);

    $where = implode(' AND ', $where);

    $join = '';
    if (fn_allowed_for('MULTIVENDOR')) {
        $fields = 'fd.feature_id, fd.description';
        $showCompany = false;
    } else {
        $fields = 'fd.feature_id, fd.description, c.company';
        $join = 'JOIN ?:companies as c ON c.company_id = pf.company_id';
    }

    $features = db_get_array(
        '
        SELECT ' . $fields . '
        FROM ?:product_features_descriptions as fd
        JOIN ?:product_features as pf ON pf.feature_id = fd.feature_id
        ' . $join . '
        WHERE ' . $where . '
        ORDER BY fd.description LIMIT ?i, ?i',
        $start,
        $limit
    );

    if (!empty($features)) {
        foreach ($features as $feature) {
            $options[$feature['feature_id']] = ($showCompany ? "[{$feature['company']}] " : '') . $feature['description'];
        }
    }

    return $options;
}

/**
 * @param mixed $withMessage
 *
 * @throws Exception
 */
function fn_rf_stock_parser_before_install($withMessage = true)
{
    $funcs = [
        'exec',
        'shell_exec',
        'proc_open',
    ];

    foreach ($funcs as $func) {
        if (!function_exists($func)) {
            $message = "Function doesn't exist " . $func;
            if ($withMessage) {
                fn_set_notification('E', __('error'), $message);
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', false);
                }
            }
            throw new Exception($message);
        }
    }
}

function fn_rf_stock_parser_install()
{
    fn_rf_stock_parser_set_default_brand_feature_id();

    $productFields = db_get_fields('DESCRIBE ?:products');
    if (!in_array('rf_cost', $productFields)) {
        db_query('alter table ?:products add rf_cost decimal(12,2) unsigned default "0.00" not null');
    }
}

function fn_rf_stock_parser_set_default_brand_feature_id()
{
    $featureStyleExists = db_get_field('SELECT 1 FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ?s AND TABLE_NAME = "' . DEFAULT_TABLE_PREFIX . 'product_features" and COLUMN_NAME="feature_style"', Registry::get('config.db_name'));

    if ($featureStyleExists) {
        $brandFeatureId = db_get_field('SELECT feature_id from ?:product_features where feature_style="brand"');
        $sectionId = db_get_field('SELECT section_id FROM ?:settings_sections WHERE name="rf_stock_parser" AND type="ADDON"');

        if ($brandFeatureId && $sectionId) {
            db_query('UPDATE ?:settings_objects SET value = ?s WHERE section_id = ?i AND name = "brand_feature_id"', $brandFeatureId, $sectionId);
        }
    }
}

function fn_settings_variants_addons_rf_stock_parser_rates_source()
{
    return [
        'cart' => Cart::getName(),
        'ecb' => Ecb::getName(),
        'cbr' => Cbr::getName(),
    ];
}

function fn_rf_stock_get_not_found_category($companyId)
{
    $names = [
        'RETAILFACTORY_STOCK_PARSER' => $companyId,
    ];

    if (fn_allowed_for('MULTIVENDOR')) {
        $names['RETAILFACTORY_STOCK_PARSER_MV'] = 0;
    }

    $categoriesData = db_get_hash_array(
        '
        SELECT c.category_id, cd.category, c.company_id
        FROM ?:categories as c
        JOIN ?:category_descriptions as cd ON c.category_id = cd.category_id
        WHERE cd.category IN (?a) AND c.company_id IN (?a)',
        'category',
        array_keys($names),
        $names
    );

    $categoryIds = array_column($categoriesData, 'category_id');

    foreach ($names as $name => $companyId) {
        if (!isset($categoriesData[$name]) || $categoriesData[$name]['company_id'] != $companyId) {
            $categoryData = [
                'category' => $name,
                'parent_id' => 0,
                'status' => 'H',
                'company_id' => $companyId,
                'usergroup_ids' => 0,
                'timestamp' => date('m/d/Y'),
                'product_details_view' => 'default',
                'use_custom_templates' => 'N',
                'is_op' => 'N',
            ];

            $categoryIds[] = fn_update_category($categoryData);
        }
    }

    return $categoryIds;
}

function fn_rf_stock_parser_get_product_features_pre(&$params, $items_per_page, $lang_code)
{
    if (!empty($_REQUEST['import_not_found'])) {
        $params['category_ids'] = [];
    }
}

function fn_rf_stock_parser_get_path_ids_categories($ids = [])
{
    if (empty($ids)) {
        return [];
    }

    $paths = db_get_fields(
        '
        SELECT id_path
        FROM ?:categories
        WHERE category_id IN (?a)',
        $ids
    );

    $result = [];

    if (!empty($paths)) {
        foreach ($paths as $path) {
            $result = array_merge($result, explode('/', $path));
        }
    }

    return $result;
}

function fn_rf_stock_parser_flat_array(array $array)
{
    $result = [];

    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
    foreach ($iterator as $v) {
        $result[] = $v;
    }

    return $result;
}

/**
 * @param array|int $ids
 *
 * @return array
 */
function fn_rf_stock_parser_get_full_name_categories($ids)
{
    if (empty($ids)) {
        return [];
    }

    if (!is_array($ids)) {
        $ids = [$ids];
    }

    $result = [];

    $pathIds = fn_rf_stock_parser_get_path_ids_categories($ids);
    $idsForQuery = array_merge($ids, $pathIds);

    $categories = db_get_hash_array(
        '
        SELECT c.category_id, c.id_path, cd.category
        FROM ?:categories as c
        JOIN ?:category_descriptions as cd ON cd.category_id = c.category_id AND cd.lang_code = ?s
        WHERE cd.category_id IN (?a)',
        'category_id',
        CART_LANGUAGE,
        $idsForQuery
    );

    foreach ($ids as $id) {
        if (isset($categories[$id])) {
            $paths = explode('/', $categories[$id]['id_path']);
            $categoryPath = [];

            foreach ($paths as $path) {
                $categoryPath[] = $categories[$path]['category'];
            }

            $result[$id] = implode('/', $categoryPath);
        }
    }

    return $result;
}

function fn_rf_stock_parser_update_product_features_value_pre($product_id, &$product_features, &$add_new_variant, $lang_code, $params, $category_ids)
{
    $import = Registry::get('runtime.rf_stock_parser.import');

    if (!$import || empty($add_new_variant)) {
        return false;
    }

    $feature_ids = array_keys($product_features);

    $features = db_get_fields(
        '
        SELECT feature_id
        FROM ?:product_features
        WHERE feature_id IN (?a) and feature_type = ?s',
        $feature_ids,
        ProductFeatures::MULTIPLE_CHECKBOX
    );

    foreach ($features as $feature_id) {
        $values = $add_new_variant[$feature_id]['variant'] ?? [];

        if (empty($values)) {
            continue;
        }

        $oldValues = &$product_features[$feature_id];
        if (empty($oldValues)) {
            $oldValues = [];
        }

        $_params = [
            'category_ids' => $category_ids,
            'feature_id' => $feature_id,
        ];

        list($_feature) = fn_get_product_features($_params);

        if (empty($_feature)) {
            continue;
        }

        foreach ($values as $value) {
            $oldValues[] = fn_add_feature_variant($feature_id, ['variant' => $value]);
        }

        unset($add_new_variant[$feature_id]);
    }
}

function fn_rf_stock_parser_update_product_features_value_post($product_id, $product_features, $add_new_variant, $lang_code, $params, $category_ids)
{
    $import = Registry::get('runtime.rf_stock_parser.import');

    if (!$import) {
        return false;
    }

    $langs = array_keys(Languages::getAll());
    $feature_ids = array_keys($product_features);

    $features = db_get_fields(
        '
        SELECT feature_id
        FROM ?:product_features
        WHERE feature_id IN (?a) and feature_type = ?s',
        $feature_ids,
        ProductFeatures::TEXT_FIELD
    );

    foreach ($features as $feature_id) {
        $value = $product_features[$feature_id];

        if ($value == '') {
            continue;
        }

        $_params = [
            'category_ids' => $category_ids,
            'feature_id' => $feature_id,
        ];

        list($_feature) = fn_get_product_features($_params);

        if (empty($_feature)) {
            continue;
        }

        db_query('DELETE FROM ?:product_features_values WHERE feature_id = ?i AND product_id = ?i AND lang_code IN (?a)', $feature_id, $product_id, $langs);

        $data = [];

        foreach ($langs as $lang) {
            $data[] = [
                'product_id' => $product_id,
                'feature_id' => $feature_id,
                'value' => $value,
                'lang_code' => $lang,
            ];
        }

        db_query('INSERT INTO ?:product_features_values ?m', $data);
    }
}

function fn_rf_stock_parser_update_usergroup($usergroup_data, $usergroup_id, $create)
{
    Registry::registerCache('parserUserGroups', 0, Registry::cacheLevel('time'));
    Registry::set('parserUserGroups', 'empty');
}

function fn_rf_stock_parser_get_categories($params, $join, &$condition, $fields, $group_by, $sortings, $lang_code)
{
    // прячем чужие категории для импорта
    if (fn_allowed_for('MULTIVENDOR')) {
        $vendorId = fn_get_runtime_vendor_id();
        if ($vendorId) {
            $condition .= db_quote(' AND (?:categories.company_id = 0 OR ?:categories.company_id = ?i)', $vendorId);
        }
    }
}

function fn_rf_stock_parser_get_product_fields(&$fields)
{
    $fields[] = [
        'name' => '[data][rf_stop_update_price]',
        'text' => __('rf_stock_parser_stop_update_price'),
    ];

    $fields[] = [
        'name' => '[data][rf_stop_update_amount]',
        'text' => __('rf_stock_parser_stop_update_amount'),
    ];

    $fields[] = [
        'name' => '[data][rf_stop_update_status]',
        'text' => __('rf_stock_parser_stop_update_status'),
    ];
}

if (!function_exists('fn_get_addon_settings_values')) {
    function fn_get_addon_settings_values($addon)
    {
        $setting_values = [];

        if (empty($addon)) {
            return $setting_values;
        }

        $setting_values = Settings::instance()->getValues($addon, Settings::ADDON_SECTION, false);
        $setting_values = !empty($setting_values) ? $setting_values : [];

        foreach ($setting_values as $setting_name => $setting_value) {
            if (is_array($setting_value)) {
                $setting_values[$setting_name] = array_keys($setting_value);
            }
        }

        return $setting_values;
    }
}

function rf_stock_parser_cron_info()
{
    $filesHelper = new FilesHelper();
    $phpPath = $filesHelper->getExecutablePhp();
    $checkVersionCommand = shell_exec($phpPath . ' -r "echo sprintf(\'%d.%d\', PHP_MAJOR_VERSION, PHP_MINOR_VERSION);"');

    $message = __('rf_stock_parser_cron_info', ['[path]' => $phpPath . ' ' . DIR_ROOT . '/' . Registry::get('config.admin_index') . ' --dispatch=rf_stock_parser.cron']);

    if ($checkVersionCommand < Execute::MIN_VERSION) {
        $message .= '<br>' . __('rf_stock_parser_cron_info_php_version', ['[must]' => Execute::MIN_VERSION, '[current]' => $checkVersionCommand]);
    }
    return $message;
}

function rf_stock_parser_mb_ucfirst($str)
{
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc . mb_substr($str, 1);
}

function rf_stock_parser_delete_product_image_pair($paths, $productId)
{
    if (!empty($paths)) {
        $objectType = 'product';

        $images = db_get_array(
            '
            SELECT il.pair_id, i.image_path, i.image_id
            FROM ?:images_links as il
            LEFT JOIN ?:images as i ON i.image_id = il.detailed_id
            WHERE il.object_id = ?i AND il.object_type = ?s AND (i.image_path IN (?a) OR i.rf_original IN (?a))',
            $productId,
            $objectType,
            $paths,
            $paths
        );

        if (!empty($images)) {
            $fileForDelete = [];
            foreach ($images as $image) {
                $image_subdir = fn_get_image_subdir($image['image_id']);
                $fileForDelete[] = 'detailed/' . $image_subdir . '/' . $image['image_path'];
            }

            $storage = Storage::instance('images');
            foreach ($fileForDelete as $file) {
                $storage->delete($file);
                $file = fn_substr($file, 0, strrpos($file, '.'));
                $storage->deleteByPattern('thumbnails/*/*/' . $file . '*');
            }

            $imageIds = array_column($images, 'image_id');
            $pairIds = array_column($images, 'pair_id');

            db_query('DELETE FROM ?:images WHERE image_id IN (?a)', $imageIds);
            db_query('DELETE FROM ?:common_descriptions WHERE object_id IN (?a) AND object_holder = ?s', $imageIds, 'images');
            db_query('DELETE FROM ?:images_links WHERE pair_id IN (?a)', $pairIds);
        }
    }
}

function fn_rf_stock_parser_get_options($companyId, $optionName = null)
{
    if ($companyId === null) {
        $companyId = rf_get_current_company_id();
    }

    static $options = [];
    static $types = [];

    $result = [];
    $addon = basename(__DIR__);

    $parse = function ($value, $force = false) {
        if (strpos($value, '#M#') === 0) {
            $temp = [];

            parse_str(str_replace('#M#', '', $value), $value);
            if (!empty($value)) {
                foreach ($value as $name => $v) {
                    if ($v == 'Y' || $v === true) {
                        $temp[] = $name;
                    }
                }
            }

            $value = $temp;
        } elseif ($force) {
            parse_str($value, $value);
        }

        if (is_array($value) && count($value) == 1 && isset($value['N']) && $value['N'] == '') {
            $value = [];
        }
        return $value;
    };

    if (empty($options)) {
        if (fn_allowed_for('MULTIVENDOR')) {
            $result = fn_get_addon_settings_values($addon);
        } else {
            $options = [];

            $section = Settings::instance()->getSectionByName($addon, Settings::ADDON_SECTION);
            $section_id = !empty($section['section_id']) ? $section['section_id'] : 0;
            $settings = Settings::instance()->getList($section_id, 0, true);

            foreach ($settings as $setting) {
                $types[$setting['name']] = $setting['type'];
                $options[$setting['name']] = Settings::instance()->getAllVendorsValues($setting['name'], $addon);
            }
        }
    }

    if (!fn_allowed_for('MULTIVENDOR')) {
        foreach ($options as $name => $values) {
            $force = $types[$name] == 'N';
            $result[$name] = $parse($values[$companyId], $force);
        }
    }

    if (!empty($optionName)) {
        return $result[$optionName] ?? null;
    }

    return $result;
}

if (!function_exists('rf_get_current_company_id')) {
    function rf_get_current_company_id()
    {
        $companyId = 0;

        if (Registry::get('runtime.company_id')) {
            $companyId = Registry::get('runtime.company_id');
        }

        if (!$companyId && Registry::get('runtime.forced_company_id')) {
            $companyId = Registry::get('runtime.forced_company_id');
        }

        if (!$companyId) {
            $companyId = fn_get_default_company_id();
        }

        return $companyId;
    }
}

function fn_rf_stock_parser_update_image($image_data, $image_id, $image_type, $images_path, &$_data, $mime_type, $is_clone)
{
    $_data['rf_original'] = !empty($image_data['url']) ? $image_data['url'] : $image_data['name'];
}

function fn_rf_stock_parser_update_image_pairs($pair_ids, $icons, $detailed, $pairs_data, $object_id, $object_type, $object_ids, $update_alt_desc, $lang_code)
{
    $process = Registry::get('runtime.rf_stock_parser.process');
    if ($process) {
        Registry::set('runtime.rf_stock_parser.attach_result', $pairs_data);
    }
}
