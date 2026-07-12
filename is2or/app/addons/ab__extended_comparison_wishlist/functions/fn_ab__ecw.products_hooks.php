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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__extended_comparison_wishlist_products_sorting(&$sorting, $simple_mode)
{
$sorting['ab__extended_comparison_wishlist'] = [
'description' => __('ab__ecw_often_compared'),
'default_order' => 'desc',
];
}

function fn_ab__extended_comparison_wishlist_get_products(&$params, &$fields, &$sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
$sortings['ab__extended_comparison_wishlist'] = [
'ab__ecw_info.count',
];
if (!empty($params['main_product_id'])) {
array_unshift($sortings['ab__extended_comparison_wishlist'], db_quote('products.product_id = ?i', $params['main_product_id']));
}
if (!empty($params['ab__ecw_often_compared']) || !empty($params['ab__ecw_min_compares_count']) || $params['sort_by'] == 'ab__extended_comparison_wishlist') {
$ec_params = [
'get_conditions_for_table' => 'products',
];
if (!empty($params['ab__ecw_often_compared'])) {
$ec_params['compared_product_id'] = $params['main_product_id'];
}
if (!empty($params['ab__ecw_min_compares_count'])) {
$ec_params['min_count'] = $params['ab__ecw_min_compares_count'];
}

$repository = Tygh::$app['addons.ab__extended_comparison_wishlist.repository'];
list($ec_join, $ec_conditions) = $repository->find($ec_params);
if (!empty($ec_join)) {
$join .= ' INNER JOIN ' . $ec_join;
}
if (!empty($ec_conditions)) {
if (!empty($params['ab__ecw_often_compared']) && !empty($params['main_product_id'])) {
$condition .= db_quote(' AND (('. $ec_conditions .') OR ab__ecw_info.product_id = ?i)', $params['main_product_id']);
} else {
$condition .= ' ' . $ec_conditions;
}
}
}
}

function fn_ab__extended_comparison_wishlist_get_products_before_select(&$params, $join, $condition, $u_condition, $inventory_join_cond, $sortings, $total, $items_per_page, $lang_code, $having)
{
if (!empty($params['ab__ecw_similar_in_stock']) && $params['ab__ecw_similar_in_stock'] === YesNo::YES) {
$params['hide_out_of_stock_products'] = true;
}
}

function fn_ab__extended_comparison_wishlist_get_products_post(&$products, $params, $lang_code)
{
if (!empty($params['ab__ecw_often_compared']) && !empty($params['ab__ecw_min_compares_count']) && count($products) == 1) {
$products = [];
}
}
