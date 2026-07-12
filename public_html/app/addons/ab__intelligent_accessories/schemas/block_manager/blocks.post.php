<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
$templates = [
'blocks/products/products.tpl' => [],
'blocks/products/products_links_thumb.tpl' => [],
'blocks/products/products_multicolumns.tpl' => [],
'blocks/products/products_scroller.tpl' => [],
'blocks/products/products_small_items.tpl' => [],
'blocks/products/products_text_links.tpl' => [],
'blocks/products/short_list.tpl' => [],
];
if ('abt__unitheme2' === Registry::get('runtime.layout.theme_name')) {
$templates = array_merge($templates, [
'blocks/products/products_native_scroller_advanced.tpl' => [
'name' => __('abt__ut2__light_scroller'),
],
'blocks/products/products_scroller_advanced.tpl' => [
'name' => __('abt__ut2__scroller_advanced'),
],
]);
}elseif ('abt__youpitheme' === Registry::get('runtime.layout.theme_name')){
$templates = array_merge($templates, [
'blocks/products/abt__yt_products_multicolumns_with_banners.tpl' => [
'name' => __('abt__yt_products_multicolumns_with_banners'),
],
'blocks/products/abt__yt_products_scroller_advanced_with_banners.tpl' => [
'name' => __('abt__yt_products_scroller_advanced_with_banners'),
],
]);
}
$schema['ab__intelligent_accessories'] = [
'content' => [
'items' => [
'remove_indent' => true,
'hide_label' => true,
'type' => 'enum',
'object' => 'ab__ia',
'items_function' => 'fn_ab__ia_get_join_list_by_product',
'fillings' => [
'ab__ia_from_category_setting' => [
'settings' => [
'links_group' => [
'type' => 'selectbox',
'data_function' => ['fn_ab__ia_get_groups_for_block'],
'option_name' => 'ab__ia_links_group',
'no_lang' => true,
],
],
'params' => [
'request' => [
'product_id' => '%PRODUCT_ID%',
'company_id' => '%COMPANY_ID%',
],
],
],
],
],
],
'templates' => $templates,
'settings' => [
'hide_add_to_cart_button' => [
'type' => 'checkbox',
'default_value' => 'Y',
],
],
'wrappers' => 'blocks/wrappers',
'cache' => [
'update_handlers' => [
'ab__ia_data',
'ab__ia_joins',
'ab__ia_join_descriptions',
'ab__ia_rules',
'products',
'product_prices',
'product_features_values',
'categories',
],
'request_handlers' => ['company_id', 'product_id'],
],
];
return $schema;
