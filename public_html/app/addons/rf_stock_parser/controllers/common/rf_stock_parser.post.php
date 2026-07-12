<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

$params = $_REQUEST;
$pattern = !empty($params['pattern']) ? $params['pattern'] : '';
$start = !empty($params['start']) ? $params['start'] : 0;
$limit = (!empty($params['limit']) ? $params['limit'] : 10) + 1;

// Ajax content
if ($mode == 'get_my_suppliers_list') {
    $condition = '';

    if (AREA == 'C') {
        $condition .= " AND ?:rf_stock_parser.status = 'A' ";
    }

    if (isset($params['exclude_my_supplier_id'])) {
        $condition .= db_quote(' AND ?:rf_stock_parser.my_supplier_id != ?i', (int) $params['exclude_my_supplier_id']);
    }

    if (isset($params['company_id']) || Registry::get('runtime.company_id')) {
        $companyId = isset($params['company_id']) ? (int) ($params['company_id']) : Registry::get('runtime.company_id');
        $condition .= fn_get_company_condition('?:rf_stock_parser.company_id', true, $companyId);
    }

    $suppliers = db_get_hash_array('SELECT ?:rf_stock_parser.my_supplier_id as value, ?:rf_stock_parser.supplier_name as name FROM ?:rf_stock_parser WHERE 1 ?p AND ?:rf_stock_parser.supplier_name LIKE ?l ORDER BY ?:rf_stock_parser.supplier_name LIMIT ?i, ?i', 'value', $condition, $pattern . '%', $start, $limit);

    if (!$start) {
        array_unshift($suppliers, ['value' => 0, 'name' => '-' . __('none') . '-']);
    }

    if (defined('AJAX_REQUEST') && sizeof($suppliers) < $limit) {
        Tygh::$app['ajax']->assign('completed', true);
    } else {
        array_pop($suppliers);
    }

    Tygh::$app['view']->assign('objects', $suppliers);

    if (isset($params['result_ids'])) {
        Tygh::$app['view']->assign('id', $params['result_ids']);
    }

    Tygh::$app['view']->display('common/ajax_select_object.tpl');

    exit;
} elseif ($mode == 'get_features') {
    $onlyGroup = isset($_REQUEST['onlyGroup']);
    $features = fn_settings_variants_addons_rf_stock_parser_get_features([], true, $pattern, $start, $limit, $onlyGroup);
    $features = array_filter($features);

    $result = [];
    foreach ($features as $id => $name) {
        $result[] = [
            'name' => $name,
            'value' => $id,
        ];
    }

    if (defined('AJAX_REQUEST') && sizeof($result) < $limit) {
        Tygh::$app['ajax']->assign('completed', true);
    } else {
        array_pop($result);
    }

    Tygh::$app['view']->assign('objects', $result);
    Tygh::$app['view']->assign('id', $params['result_ids']);
    Tygh::$app['view']->display('addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl');

    exit;
} elseif ($mode == 'get_fields') {
    if (!empty($pattern)) {
        $where[] = db_quote('LIKE ?l', $pattern . '%');
    }

    $where = !empty($where) ? implode(' AND ', $where) : '';
    $fields = db_get_fields('SHOW COLUMNS FROM ?:products ' . $where);
    $fields = array_diff($fields, ['product_id', 'manufacturer_code', 'product_code']);

    sort($fields);
    $fields = array_slice($fields, $start, $limit);

    $result = [];
    foreach ($fields as $name) {
        $result[] = [
            'name' => $name,
            'value' => $name,
        ];
    }

    if (!$start) {
        array_unshift($result, ['value' => 0, 'name' => '-' . __('none') . '-']);
    }

    if (defined('AJAX_REQUEST') && sizeof($result) < $limit) {
        Tygh::$app['ajax']->assign('completed', true);
    } else {
        array_pop($result);
    }

    Tygh::$app['view']->assign('objects', $result);
    Tygh::$app['view']->assign('id', $params['result_ids']);
    Tygh::$app['view']->display('addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl');

    exit;
} elseif ($mode == 'get_categories') {
    $condition = '';

    if (isset($params['company_id']) || Registry::get('runtime.company_id')) {
        $companyId = isset($params['company_id']) ? (int) ($params['company_id']) : Registry::get('runtime.company_id');
        if (fn_allowed_for('MULTIVENDOR')) {
            $condition .= db_quote(' AND (c.company_id = 0 OR c.company_id = ?i)', $companyId);
        } else {
            $condition .= fn_get_company_condition('c.company_id', true, $companyId);
        }
    }

    $categoryIds = db_get_fields(
        '
        SELECT c.category_id
        FROM ?:categories as c
        JOIN ?:category_descriptions as cd ON cd.category_id = c.category_id AND cd.lang_code = ?s
        WHERE 1 ?p AND cd.category LIKE ?l
        ORDER BY cd.category
        LIMIT ?i, ?i',
        CART_LANGUAGE,
        $condition,
        $pattern . '%',
        $start,
        $limit
    );

    $result = [];

    $fullNames = fn_rf_stock_parser_get_full_name_categories($categoryIds);

    foreach ($categoryIds as $categoryId) {
        $result[] = [
            'name' => $fullNames[$categoryId],
            'value' => $categoryId,
        ];
    }

    if (!$start) {
        array_unshift($result, ['value' => 0, 'name' => '-' . __('none') . '-']);
    }

    if (defined('AJAX_REQUEST') && sizeof($result) < $limit) {
        Tygh::$app['ajax']->assign('completed', true);
    } else {
        array_pop($result);
    }

    Tygh::$app['view']->assign('objects', $result);

    if (isset($params['result_ids'])) {
        Tygh::$app['view']->assign('id', $params['result_ids']);
    }

    Tygh::$app['view']->display('addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl');

    exit;
} elseif ($mode == 'get_xml_nodes') {
    $condition = '';

    $nodes = db_get_fields(
        '
        SELECT name
        FROM ?:rf_stock_parser_xml_nodes
        WHERE constructor_id = ?i AND name LIKE ?l
        ORDER BY name
        LIMIT ?i, ?i',
        $params['constructor_id'],
        '%' . $pattern . '%',
        $start,
        $limit
    );

    $result = [];
    foreach ($nodes as $node) {
        $result[] = [
            'name' => str_replace('[not(@*)]', '', $node),
            'value' => $node,
        ];
    }

    if (!$start) {
        array_unshift($result, ['value' => 0, 'name' => '-' . __('none') . '-']);
    }

    if (defined('AJAX_REQUEST') && sizeof($result) < $limit) {
        Tygh::$app['ajax']->assign('completed', true);
    } else {
        array_pop($result);
    }

    Tygh::$app['view']->assign('objects', $result);

    if (isset($params['result_ids'])) {
        Tygh::$app['view']->assign('id', $params['result_ids']);
    }

    Tygh::$app['view']->display('addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl');

    exit;
} elseif ($mode == 'get_pricing_strategy_template') {
    Tygh::$app['view']->assign('priceSubId', $_REQUEST['id']);
    $template = Tygh::$app['view']->fetch('addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_sub_pricing_strategy.tpl');

    Tygh::$app['ajax']->assign('template', $template);
    exit;
}
