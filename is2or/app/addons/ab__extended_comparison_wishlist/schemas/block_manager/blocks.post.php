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
$schema['ab__ecw_comparison_pages'] = [
'content' => [
'pages' => [
'type' => 'function',
'function' => ['fn_ab__ecw_get_pages'],
],
],
'settings' => [
'items_per_page' => [
'type' => 'input',
'default_value' => Registry::get('settings.Appearance.elements_per_page'),
],
],
'templates' => [
'addons/ab__extended_comparison_wishlist/blocks/ab__ecw_comparison_pages/ab__ecw_pages_extended.tpl' => [
'settings' => [
'ab__ecw_show_short_descr' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
'ab__ecw_show_products_list' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
'ab__ecw_show_date' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
],
],
'addons/ab__extended_comparison_wishlist/blocks/ab__ecw_comparison_pages/ab__ecw_pages_list.tpl' => [],
],
'wrappers' => 'blocks/wrappers',
'cache' => [
'update_handlers' => ['ab__ecw_comparison_pages', 'ab__ecw_comparison_page_descriptions', 'products'],
'request_handlers' => ['product_id', 'category_id'],
'disable_cache_when' => [
'request_handlers' => ['features_hash'],
],
],
];
$schema['products']['content']['items']['fillings']['ab__ecw_often_compared'] = [
'params' => [
'ab__ecw_often_compared' => true,
'sort_by' => 'ab__extended_comparison_wishlist',
'sort_order' => 'desc',
'request' => [
'main_product_id' => '%PRODUCT_ID%',
],
],
];
$schema['products']['cache']['request_handlers'][] = '%PRODUCT_ID%';
return $schema;
