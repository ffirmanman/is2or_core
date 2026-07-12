<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
use Tygh\Enum\YesNo;
use Tygh\Enum\SettingTypes;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return [CONTROLLER_STATUS_OK];
}

$view = Tygh::$app['view'];
if ($mode == 'manage') {
$selected_fields = $view->getTemplateVars('selected_fields');
$selected_fields[] = [
'name' => '[ab__so_ntp][noindex]',
'text' => __('ab__so_noindex_tech_pages') . ': ' . __('ab__so_ntp.form.noindex'),
];
$view->assign('selected_fields', $selected_fields);
} elseif ($mode == 'm_update') {
$selected_fields = Tygh::$app['session']['selected_fields'];
if (!empty($selected_fields['ab__so_ntp']['noindex']) && $selected_fields['ab__so_ntp']['noindex'] == YesNo::YES) {
$product_ids = Tygh::$app['session']['product_ids'];
$indexes_data = fn_ab__so_ntp_get_indexes_data($product_ids, 'product');

$products_data = $view->getTemplateVars('products_data');
foreach ($products_data as $id => &$product_data) {
$key = $id . 'product';
if (!empty($indexes_data[$key])) {
$product_data['ab__so_ntp_noindex'] = $indexes_data[$key]['noindex']['value'];
}
}
$field_groups = $view->getTemplateVars('field_groups');
$filled_groups = $view->getTemplateVars('filled_groups');
$field_groups[SettingTypes::CHECKBOX]['ab__so_ntp_noindex'] = 'products_data';
$filled_groups[SettingTypes::CHECKBOX]['ab__so_ntp_noindex'] = __('ab__so_noindex_tech_pages') . ': ' . __('ab__so_ntp.form.noindex');
$view->assign([
'field_groups' => $field_groups,
'filled_groups' => $filled_groups,
'products_data' => $products_data,
]);
}
}
