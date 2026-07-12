<?php

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return [CONTROLLER_STATUS_OK];
}

if ($mode == 'm_update') {
    $field_groups = Tygh::$app['view']->getTemplateVars('field_groups');
    $filled_groups = Tygh::$app['view']->getTemplateVars('filled_groups');
    $field_names = Tygh::$app['view']->getTemplateVars('field_names');

    $field_groups['C']['rf_stop_update_price'] = 'products_data';
    $filled_groups['C']['rf_stop_update_price'] = __('rf_stock_parser_stop_update_price');

    $field_groups['C']['rf_stop_update_amount'] = 'products_data';
    $filled_groups['C']['rf_stop_update_amount'] = __('rf_stock_parser_stop_update_amount');

    $field_groups['C']['rf_stop_update_status'] = 'products_data';
    $filled_groups['C']['rf_stop_update_status'] = __('rf_stock_parser_stop_update_status');

    if (isset($field_names['rf_stop_update_price'])) {
        unset($field_names['rf_stop_update_price']);
    }

    if (isset($field_names['rf_stop_update_amount'])) {
        unset($field_names['rf_stop_update_amount']);
    }

    if (isset($field_names['rf_stop_update_status'])) {
        unset($field_names['rf_stop_update_status']);
    }

    Tygh::$app['view']->assign('field_groups', $field_groups);
    Tygh::$app['view']->assign('filled_groups', $filled_groups);
    Tygh::$app['view']->assign('field_names', $field_names);
}
