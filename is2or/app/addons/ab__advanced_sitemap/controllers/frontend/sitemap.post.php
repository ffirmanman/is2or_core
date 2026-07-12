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
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\YesNo;
use Tygh\Registry;
defined('BOOTSTRAP') or die('Access denied');
if (Registry::get('runtime.mode') === 'view') {
if (Registry::get('addons.ab__advanced_sitemap.enable_html_sitemap') != 'Y') {
return [CONTROLLER_STATUS_NO_PAGE];
}
$sitemap = Tygh::$app['view']->getTemplateVars('sitemap');
$storefront = Tygh::$app['storefront'];
$settings = Registry::get('addons.ab__advanced_sitemap');
if (!empty($sitemap['categories_tree'])) {
foreach ($sitemap['categories_tree'] as $key => $category) {
if (fn_ab__as_is_empty_category($category['category_id'], $storefront, $settings)) {
unset($sitemap['categories_tree'][$key]);
}
}
}
if (defined('PAGE_TYPE_BLOG')) {
$condition = db_quote('p.page_type = ?s AND p.status = ?s', PAGE_TYPE_BLOG, ObjectStatuses::ACTIVE);
$condition .= db_quote(' AND (p.use_avail_period = ?s OR (p.avail_from_timestamp <= ?i AND (p.avail_till_timestamp = 0 OR p.avail_till_timestamp > ?i)))', YesNo::NO, TIME, TIME);
$join = db_quote('INNER JOIN ?:page_descriptions AS pd ON p.page_id = pd.page_id AND pd.lang_code = ?s', CART_LANGUAGE);
if (fn_allowed_for('MULTIVENDOR')) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = p.company_id';
$condition .= db_quote(' AND (companies.status = ?s OR p.company_id = 0)', ObjectStatuses::ACTIVE);
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$condition .= db_quote(' AND (companies.company_id IN (?n) OR p.company_id = 0)', $company_ids);
}
} else {
$condition .= fn_get_company_condition('p.company_id');
}
$blog_pages = db_get_array('SELECT p.*, IF(pd.page_sitemap = "", pd.page, pd.page_sitemap) AS page FROM ?:pages AS p ?p WHERE ?p ORDER BY p.id_path', $join, $condition);
foreach ($blog_pages as $k => $page) {
$id_path = explode('/', $page['id_path']);
$page['level'] = count($id_path);
$sitemap['blog_tree'][reset($id_path)][] = $page;
}
}
if (defined('PAGE_TYPE_BLOG')) {
if (!empty($sitemap['pages_tree'])) {
foreach ($sitemap['pages_tree'] as $item_id => $page) {
if ($page['page_type'] === PAGE_TYPE_BLOG) {
unset($sitemap['pages_tree'][$item_id]);
}
}
}
}
if (!empty($sitemap['pages_tree'])) {
foreach ($sitemap['pages_tree'] as &$page) {
if (!empty($page['page_sitemap'])) {
$page['page'] = $page['page_sitemap'];
}
}
}
$features_variants = db_get_array('SELECT ?:product_feature_variants.variant_id, ?:product_feature_variant_descriptions.variant FROM ?:product_features
INNER JOIN ?:product_feature_variants ON ?:product_feature_variants.feature_id = ?:product_features.feature_id
LEFT JOIN ?:product_feature_variant_descriptions ON ?:product_feature_variants.variant_id = ?:product_feature_variant_descriptions.variant_id AND lang_code = ?s
WHERE ?:product_features.feature_type = ?s AND ?:product_features.status = "A" ?p ORDER BY TRIM(?:product_feature_variant_descriptions.variant) ASC', CART_LANGUAGE, 'E', fn_get_company_condition('?:product_features.company_id'));
foreach ($features_variants as $key => $variant) {
if (fn_ab__as_is_empty_brand($variant['variant_id'], $storefront, $settings)) {
unset($features_variants[$key]);
} else {
$features_variants[$key]['variant'] = mb_convert_case($variant['variant'], MB_CASE_TITLE);
}
}
if (!empty($features_variants)) {
$items_per_column = ceil(count($features_variants) / 3);
if (!empty($items_per_column)) {
$sitemap['features_variants'] = array_chunk($features_variants, $items_per_column);
}
}
Tygh::$app['view']->assign('sitemap', $sitemap);
}
