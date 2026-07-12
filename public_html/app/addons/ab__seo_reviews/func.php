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
use Tygh\Addons\ProductReviews\ServiceProvider as ProductReviewsProvider;
use Tygh\Registry;
use Tygh\Tools\SecurityHelper;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if (AREA == 'A') {
foreach (glob(Registry::get('config.dir.addons') . '/ab__seo_reviews/ab__functions/fn.*.php') as $functions) {
require_once $functions;
}
}

function fn_ab__sr_update_reviews_page($reviews_page_data, $object_id, $object_type, $lang_code = DESCR_SL)
{
SecurityHelper::sanitizeObjectData('ab__sr_reviews_page', $reviews_page_data);

$reviews_page_id = db_get_field('SELECT reviews_page_id FROM ?:ab__sr_reviews_pages WHERE object_id = ?i AND object_type = ?s', $object_id, $object_type);
if (empty($reviews_page_id)) {

$reviews_page_data['object_id'] = $object_id;
$reviews_page_data['object_type'] = $object_type;

$reviews_page_data['reviews_page_id'] = db_replace_into('ab__sr_reviews_pages', $reviews_page_data);

$ab__sr_default_seo_names = fn_ab__sr_get_settings('default_seo_names');
foreach (Tygh::$app['languages'] as $reviews_page_data['lang_code'] => $v) {

db_replace_into('ab__sr_reviews_page_descriptions', $reviews_page_data);

if (Registry::get('addons.seo.status') === 'A') {
$seo_name = empty($ab__sr_default_seo_names[$reviews_page_data['lang_code']]) ? 'reviews' : $ab__sr_default_seo_names[$reviews_page_data['lang_code']];
fn_create_seo_name($object_id, 'y', $seo_name, 0, '', '', $reviews_page_data['lang_code']);
}
}
} else {
db_query('UPDATE ?:ab__sr_reviews_pages SET ?u WHERE reviews_page_id = ?i', $reviews_page_data, $reviews_page_id);
db_query('UPDATE ?:ab__sr_reviews_page_descriptions SET ?u WHERE reviews_page_id = ?i AND lang_code = ?s', $reviews_page_data, $reviews_page_id, $lang_code);

if (Registry::get('addons.seo.status') === 'A' && !empty($reviews_page_data['seo_name'])) {
fn_seo_update_object($reviews_page_data, $object_id, 'y', $lang_code);
}
}
}

function fn_ab__sr_get_reviews_page($object_id, $object_type, $lang_code = DESCR_SL)
{
$ab__sr_reviews_page = db_get_row(
'SELECT * FROM ?:ab__sr_reviews_pages AS rp'
.' LEFT JOIN ?:ab__sr_reviews_page_descriptions AS rpd ON rp.reviews_page_id = rpd.reviews_page_id AND rpd.lang_code = ?s'
.' WHERE object_id = ?i AND object_type = ?s', $lang_code, $object_id, $object_type);
if (!empty($ab__sr_reviews_page)) {
$ab__sr_reviews_page['seo_name'] = fn_seo_get_name('y', $object_id, '', '', $lang_code);
}
return $ab__sr_reviews_page;
}

function fn_ab__seo_reviews_get_products($params, $fields, &$sortings, $condition, &$join, $sorting, $group_by, $lang_code, $having)
{
if (!empty($params['sort_by']) && $params['sort_by'] === 'ab__sr_review_timestamp') {
$sortings['ab__sr_review_timestamp'] = 'pr.product_review_timestamp';
$storefront_id = fn_product_reviews_get_storefront_id_by_setting();
$storefront_condition = empty($storefront_id) ? '' : db_quote(' AND pr.storefront_id = ?i', $storefront_id);
$join .= db_quote(' INNER JOIN ?:product_reviews AS pr ON pr.product_id = products.product_id AND pr.status = ?s ?p', 'A', $storefront_condition);
}
}

function fn_ab__seo_reviews_gather_additional_product_data_post(&$product, $auth, $params)
{
static $limit = 3;
if (!empty($params['ab__sr_get_reviews'])) {
$_params = [
'product_id' => (int) $product['product_id'],
'page' => $params['ab__sr_posts_page'],
'status' => 'A',
'items_per_page' => $limit,
'storefront_id' => fn_product_reviews_get_storefront_id_by_setting()
];
$product_reviews_repository = ProductReviewsProvider::getProductReviewRepository();
list($product_reviews, $search) = $product_reviews_repository->find($_params);
$product['ab__sr_posts'] = $product_reviews;
if ($search['total_items'] > $search['page'] * $limit) {
$product['ab__sr_next_posts_page'] = ++$search['page'];
}
}
}

function fn_ab__sr_get_category_average_rate($category_id)
{
$cache_key = 'ab__sr_category_avg_rate_' . $category_id;
$cache_tables = [
'ab__sr_reviews_pages',
'product_reviews',
'categories',
'products',
'products_categories',
'product_prices',
];
Registry::registerCache($cache_key, $cache_tables, Registry::cacheLevel('storefront'));
$is_cached = Registry::isExist($cache_key);
if (!$is_cached) {

$lock_factory = Tygh::$app['lock.factory'];
$lock = $lock_factory->createLock($cache_key);
if (!$lock->acquire() && $lock->wait()) {
$is_cached = Registry::loadFromCache($cache_key);
}
}
if (!$is_cached) {
$storefront_id = fn_product_reviews_get_storefront_id_by_setting();
$get_products_query = fn_get_products([
'cid' => $category_id,
'subcats' => 'Y',
'load_products_extra_data' => false,
'get_query' => true,
]);
$result = db_get_row(
'SELECT AVG (average_rating) AS average_rating, SUM(reviews_count) AS posts_count'
.' FROM ?:product_review_prepared_data'
.' WHERE product_id IN (?p) AND ?:product_review_prepared_data.storefront_id = ?i'
, $get_products_query, $storefront_id
);
Registry::set($cache_key, $result);
}
return Registry::get($cache_key);
}

function fn_ab__seo_reviews_ab__as_other_objects(&$objects, $storefront, $settings)
{
if (Registry::get('addons.ab__seo_reviews.ab__as_add_to_sitemap') === 'Y') {
$categories_ids = fn_ab__as_get_categories_for_sitemap($settings, $storefront);
if (empty($categories_ids)) {
return false;
}
foreach ($categories_ids as $key => $category_id) {
if (fn_ab__as_is_empty_category($category_id, $storefront, $settings)) {
unset($categories_ids[$key]);
}
}
if (empty($categories_ids)) {
return false;
}
$objects['ab__sr_view_category'] = db_get_fields('SELECT object_id FROM ?:ab__sr_reviews_pages WHERE status = ?s AND object_id IN (?n)', 'A', $categories_ids);
}
return true;
}

function fn_ab__seo_reviews_sitemap_link_object(&$link, $object, $value)
{
if ($object == 'ab__sr_view_category') {
$link = "ab__seo_reviews.view_category?category_id={$value}";
}
}
