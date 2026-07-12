<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2022   *
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
$schema['ab__seo_reviews.view_category'] = [
'[h1_tag]' => [
'type' => 'field',
'object' => 'reviews_page',
'field' => 'h1',
'default_field' => 'name',
'multi_case' => true,
],
'[category]' => [
'type' => 'field',
'object' => 'category_data',
'field' => 'category',
'multi_case' => true,
],
'[alternative_name]' => [
'type' => 'field',
'object' => 'category_data',
'field' => 'ab__emd_alternative_name',
'multi_case' => true,
],
'[category_parent_name]' => [
'type' => 'field',
'object' => 'category_data',
'field' => 'parent_id',
'modify_function' => 'fn_get_category_name',
'multi_case' => true,
],
'[min_price]' => [
'type' => 'price',
'object' => 'search',
'field' => 'ab__min_price',
'admin_tooltip' => __('ab__emd.placeholders.min_price'),
],
'[max_price]' => [
'type' => 'price',
'object' => 'search',
'field' => 'ab__max_price',
'admin_tooltip' => __('ab__emd.placeholders.max_price'),
],
'[total_products]' => [
'type' => 'field',
'object' => 'search',
'field' => 'total_items',
'admin_tooltip' => __('ab__emd.placeholders.total_products'),
],
'[storefront]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_storefront_name'],
'multi_case' => true,
'admin_tooltip' => __('ab__emd.placeholders.storefront'),
],
'[currency]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_currency', false],
'admin_tooltip' => __('ab__emd.placeholders.currency'),
],
'[currency_nohtml]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_currency', true],
'admin_tooltip' => __('ab__emd.placeholders.currency_nohtml'),
],
];
return $schema;
