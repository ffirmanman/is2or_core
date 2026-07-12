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
$default = [
'multi_case' => true,
'type' => 'field',
'modify_function' => 'trim',
];
$schema['categories.view']['[category_custom_h1]'] = array_merge([
'admin_tooltip' => __('ab__ch1.ab__emd.placeholder.category_custom_h1.tooltip'),
'object' => 'category_data',
'field' => 'ab__custom_category_h1',
'default_field' => 'category',
], $default);
$schema['categories.view']['[category]']['field'] = 'ab__ch1_origin_category';
$schema['categories.view']['[category]']['default_field'] = 'category';
$schema['products.view']['[product_custom_h1]'] = array_merge([
'admin_tooltip' => __('ab__ch1.ab__emd.placeholder.product_custom_h1.tooltip'),
'object' => 'product',
'field' => 'ab__custom_product_h1',
'default_field' => 'product',
], $default);
$schema['products.view']['[product]']['field'] = 'ab__ch1_origin_product';
$schema['products.view']['[product]']['default_field'] = 'product';
$schema['pages.view']['[page_custom_h1]'] = array_merge([
'admin_tooltip' => __('ab__ch1.ab__emd.placeholder.page_custom_h1.tooltip'),
'object' => 'page',
'field' => 'ab__custom_page_h1',
'default_field' => 'page',
], $default);
$schema['pages.view']['[page]']['field'] = 'ab__ch1_origin_page';
$schema['pages.view']['[page]']['default_field'] = 'page';
$schema['product_features.view']['[brand_custom_h1]'] = array_merge([
'admin_tooltip' => __('ab__ch1.ab__emd.placeholder.brand_custom_h1.tooltip'),
'object' => 'variant_data',
'field' => 'ab__custom_feature_variant_h1',
'default_field' => 'variant',
], $default);
$schema['product_features.view']['[brand]']['field'] = 'ab__ch1_origin_variant';
$schema['product_features.view']['[brand]']['default_field'] = 'variant';
return $schema;