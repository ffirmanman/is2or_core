<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
$schema['ab__gp_other_locations'] = [
'templates' => 'addons/ab__geo_pages/blocks/other_locations',
'content' => [
'items' => [
'type' => 'function',
'function' => ['fn_ab__gp_get_other_locations_block'],
],
],
'wrappers' => 'blocks/wrappers',
'multilanguage' => false,
'cache' => [
'update_handlers' => ['ab__gp_locations', 'ab__gp_location_descriptions'],
],
'cache_overrides_by_dispatch' => [
'categories.view' => [
'request_handlers' => ['category_id'],
'disable_cache_when' => [
'request_handlers' => ['price_to', 'price_from', 'features_hash', 'subcats'],
],
'update_handlers' => [
'categories',
'category_descriptions',
],
],
'products.view' => [
'request_handlers' => ['product_id'],
'session_handlers' => [
'last_view.lv_products.view_results',
],
'update_handlers' => [
'products',
'product_descriptions',
'products_categories',
'categories',
'category_descriptions',
],
],
],
'show_on_locations' => ['categories.view', 'products.view', 'index.index'],
];
return $schema;
