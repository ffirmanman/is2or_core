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

$schema = [
'categories.view' => [
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
'[category_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', false, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.category_path'),
],
'[category_path_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', false, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_lower'),
],
'[Category_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', false, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_ucfirst'),
],
'[CATEGORY_PATH]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', false, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_upper'),
],
'[category_path_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', false, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_first_lower'),
],
'[category_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', true, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_rev'),
],
'[category_path_reverse_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', true, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_rev_lower'),
],
'[Category_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', true, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_rev_ucfirst'),
],
'[CATEGORY_PATH_REVERSE]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', true, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_rev_upper'),
],
'[category_path_reverse_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'category', true, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.category_path_rev_first_lower'),
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
],
'products.view' => [
'[product]' => [
'type' => 'field',
'object' => 'product',
'field' => 'product',
'multi_case' => true,
],
'[alternative_name]' => [
'type' => 'field',
'object' => 'product',
'field' => 'ab__emd_alternative_name',
'multi_case' => true,
],
'[short_description]' => [
'type' => 'field',
'object' => 'product',
'field' => 'short_description',
'modify_function' => 'strip_tags',
'multi_case' => true,
],
'[product_category]' => [
'type' => 'field',
'object' => 'product',
'field' => 'main_category',
'modify_function' => 'fn_get_category_name',
'multi_case' => true,
],
'[product_brand]' => [
'type' => 'field',
'object' => 'product',
'field' => 'product_id',
'modify_function' => 'fn_ab__emd_get_product_brand',
'multi_case' => true,
],
'[product_code]' => [
'type' => 'field',
'object' => 'product',
'field' => 'product_code',
'multi_case' => true,
],
'[product_price]' => [
'type' => 'price',
'object' => 'product',
'field' => 'price',
'admin_tooltip' => __('ab__emd.placeholders.product_price'),
],
'[product_category_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', false, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path'),
],
'[product_category_path_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', false, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_lower'),
],
'[Product_category_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', false, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_ucfirst'),
],
'[PRODUCT_CATEGORY_PATH]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', false, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_upper'),
],
'[product_category_path_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', false, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_first_lower'),
],
'[product_category_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', true, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_rev'),
],
'[product_category_path_reverse_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', true, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_rev_lower'),
],
'[Product_category_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', true, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_rev_ucfirst'),
],
'[PRODUCT_CATEGORY_PATH_REVERSE]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', true, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_rev_upper'),
],
'[product_category_path_reverse_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'product', true, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.product_category_path_rev_first_lower'),
],
'[storefront]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_storefront_name'],
'multi_case' => true,
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
'[[^{\]]*{f(value|name)_([0-9]+)}[^\]]*]' => [
'type' => 'product_feature',
'admin_tooltip' => __('ab__emd.placeholders.product_features'),
],
],
'product_features.view' => [
'[brand]' => [
'type' => 'field',
'object' => 'variant_data',
'field' => 'variant',
'multi_case' => true,
],
'[alternative_name]' => [
'type' => 'field',
'object' => 'variant_data',
'field' => 'ab__emd_alternative_name',
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
],
'pages.view' => [
'[page]' => [
'type' => 'field',
'object' => 'page',
'field' => 'page',
'multi_case' => true,
],
'[alternative_name]' => [
'type' => 'field',
'object' => 'page',
'field' => 'ab__emd_alternative_name',
'multi_case' => true,
],
'[page_parent]' => [
'type' => 'field',
'object' => 'page',
'field' => 'parent_id',
'modify_function' => 'fn_get_page_name',
'multi_case' => true,
],
'[page_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', false, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.page_path'),
],
'[page_path_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', false, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_lower'),
],
'[Page_path]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', false, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_ucfirst'),
],
'[PAGE_PATH]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', false, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_upper'),
],
'[page_path_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', false, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_first_lower'),
],
'[page_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', true, 'regular'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_rev'),
],
'[page_path_reverse_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', true, 'lowercase'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_rev_lower'),
],
'[Page_path_reverse]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', true, 'ucfirst'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_rev_ucfirst'),
],
'[PAGE_PATH_REVERSE]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', true, 'uppercase'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_rev_upper'),
],
'[page_path_reverse_first_lower]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_breadcrumbs_path', 'page', true, 'first_lower'],
'admin_tooltip' => __('ab__emd.placeholders.page_path_rev_first_lower'),
],
'[storefront]' => [
'type' => 'function',
'function' => ['fn_ab__emd_get_storefront_name'],
'multi_case' => true,
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
],
];
if (fn_allowed_for('MULTIVENDOR')) {
$schema['products.view']['[vendor]'] = [
'type' => 'field',
'object' => 'product',
'field' => 'company_id',
'modify_function' => 'fn_get_company_name',
'multi_case' => true,
];
$schema['companies.products'] = [
'[vendor]' => [
'type' => 'field',
'object' => 'search',
'field' => 'company_id',
'modify_function' => 'fn_get_company_name',
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
}
return $schema;
