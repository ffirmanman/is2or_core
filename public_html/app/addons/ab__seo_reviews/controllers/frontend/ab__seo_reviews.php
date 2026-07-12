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
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
exit;
}
if ($mode === 'view_category') {
if (!empty($_REQUEST['category_id'])) {

$category_id = $_REQUEST['category_id'];
$category_data = fn_get_category_data($category_id);
Tygh::$app['view']->assign('category_data', $category_data);

$reviews_page = fn_ab__sr_get_reviews_page($category_id, 'category', CART_LANGUAGE);
if (empty($reviews_page['status']) || $reviews_page['status'] !== 'A') {
return [CONTROLLER_STATUS_NO_PAGE];
}

$params = $_REQUEST;
if (!empty($_REQUEST['ab__sr_product_id'])) {
$params['pid'] = $_REQUEST['ab__sr_product_id'];
} else {
$params['cid'] = $category_id;
$params['subcats'] = 'Y';
$params['sort_by'] = 'ab__sr_review_timestamp';
$params['sort_order'] = 'desc';
}
list($products, $search) = fn_get_products($params, 5);
if (!empty($products)) {
fn_gather_additional_products_data($products, [
'get_icon' => true,
'get_detailed' => true,
'get_additional' => true,
'get_options' => true,
'get_discounts' => true,
'get_features' => false,
'ab__sr_get_reviews' => true,
'ab__sr_posts_page' => empty($params['ab__sr_posts_page']) ? 1 : $params['ab__sr_posts_page'],
]);
}
Tygh::$app['view']->assign('products', $products);
Tygh::$app['view']->assign('search', $search);

$replacements = [
'[category]' => $category_data['category'],
'[category_lower]' => mb_strtolower($category_data['category']),
'[CATEGORY]' => mb_strtoupper($category_data['category']),
'[Category]' => mb_strtoupper(fn_substr($category_data['category'], 0, 1)) . mb_strtolower(fn_substr($category_data['category'], 1)),
];
$fields_for_subst = [
'h1',
'description',
'page_title',
'meta_description',
'meta_keywords',
];
foreach ($fields_for_subst as $field) {
$reviews_page[$field] = strtr($reviews_page[$field], $replacements);

if (function_exists('fn_ab__emd_replace_placeholders')) {
$reviews_page[$field] = fn_ab__emd_replace_placeholders($reviews_page[$field], 'ab__seo_reviews.view_category');
}
}
Tygh::$app['view']->assign('reviews_page', $reviews_page);

if (!empty($reviews_page['page_title'])) {
Tygh::$app['view']->assign('page_title', $reviews_page['page_title']);
}
if (!empty($reviews_page['meta_description']) || !empty($reviews_page['meta_keywords'])) {
Tygh::$app['view']->assign('meta_description', $reviews_page['meta_description']);
Tygh::$app['view']->assign('meta_keywords', $reviews_page['meta_keywords']);
}

$category_parent_ids = fn_explode('/', $category_data['id_path']);
$cats = fn_get_category_name($category_parent_ids);
foreach ($category_parent_ids as $c_id) {
fn_add_breadcrumb($cats[$c_id], "categories.view?category_id=$c_id");
}
fn_add_breadcrumb($reviews_page['h1']);
}
}