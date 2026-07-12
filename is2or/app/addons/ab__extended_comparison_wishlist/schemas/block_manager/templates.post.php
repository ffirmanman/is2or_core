<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
use Tygh\Registry;
use Tygh\Enum\YesNo;
use Tygh\Enum\ProductFeaturesDisplayOn;
$settings = [
'settings' => [
'ab__ecw_enable_add_more' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
'item_quantity' => [
'type' => 'input',
'default_value' => 4,
],
'show_price' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
'thumbnail_width' => [
'type' => 'input',
'default_value' => 75,
],
'outside_navigation' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
],
'bulk_modifier' => [
'fn_gather_additional_products_data' => [
'products' => '#this',
'params' => [
'get_icon' => true,
'get_detailed' => true,
'get_features' => true,
'get_taxed_prices' => false,
'get_discounts' => true,
'features_display_on' => ProductFeaturesDisplayOn::ALL,
],
],
],
];
if (Registry::get('settings.Appearance.enable_quick_view') == YesNo::YES) {
$settings['settings']['enable_quick_view'] = [
'type' => 'checkbox',
'default_value' => YesNo::NO,
];
}
if (Registry::get('settings.General.enable_compare_products') == YesNo::YES) {
$settings['settings']['ab__ecw_enable_add_to_compare'] = [
'type' => 'checkbox',
'default_value' => YesNo::YES,
];
}
$schema['addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl'] = empty($schema['addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl']) ? $settings : fn_array_merge($settings, $schema['blocks/products/ab__ecw_list_with_features.tpl'], true);
return $schema;
