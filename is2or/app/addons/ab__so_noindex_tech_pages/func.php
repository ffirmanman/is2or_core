<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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

function fn_ab__so_ntp_get_index_data($object_id, $object_type)
{
static $data = [];
if (!isset($data[$object_id . $object_type])) {
$company_id = fn_get_runtime_company_id();
$data[$object_id . $object_type] = db_get_hash_single_array('SELECT var, value FROM ?:ab__so_noindex_tech_pages WHERE object_id = ?i AND object_type = ?s AND company_id = ?i', ['var', 'value'], $object_id, $object_type, $company_id);
}
return $data[$object_id . $object_type];
}

function fn_ab__so_ntp_get_indexes_data($object_ids, $object_type)
{
static $data = [];
$return = [];
$not_existent = [];
foreach ($object_ids as $object_id) {
if (isset($data[$object_id . $object_type])) {
$return[$object_id . $object_type] = $data[$object_id . $object_type];
} else {
$not_existent[] = $object_id;
}
}
if (!empty($not_existent)) {
$company_id = fn_get_runtime_company_id();
$not_existent = db_get_hash_multi_array('SELECT object_id, var, value FROM ?:ab__so_noindex_tech_pages WHERE object_id IN (?n) AND object_type = ?s AND company_id = ?i', ['object_id', 'var'], $not_existent, $object_type, $company_id);
foreach ($not_existent as $object_id => $val) {
$data[$object_id . $object_type] = $return[$object_id . $object_type] = $val;
}
}
return $return;
}
function fn_ab__so_ntp_update_index_data($data, $object_id, $object_type)
{
$company_id = fn_get_runtime_company_id();
if (!empty($data) && (!empty($company_id) || fn_allowed_for('MULTIVENDOR'))) {
foreach ($data as $var => $value) {
db_replace_into('ab__so_noindex_tech_pages', [
'object_id' => $object_id,
'object_type' => $object_type,
'company_id' => $company_id,
'var' => $var,
'value' => $value,
]);
}
}
}
function fn_ab__so_ntp_delete_index_data($object_id, $object_type)
{
db_query('DELETE FROM ?:ab__so_noindex_tech_pages WHERE object_id = ?i AND object_type = ?s', $object_id, $object_type);
}
function fn_ab__so_ntp_deny_indexation()
{
$denied = false;
$mode = Registry::get('runtime.mode');
$controller = Registry::get('runtime.controller');
if ($mode == 'view') {
$data = [];
if ($controller == 'products' && !empty($_REQUEST['product_id'])) {
$data = fn_ab__so_ntp_get_index_data($_REQUEST['product_id'], 'product');
} elseif ($controller == 'categories' && !empty($_REQUEST['category_id'])) {
$data = fn_ab__so_ntp_get_index_data($_REQUEST['category_id'], 'category');
} elseif ($controller == 'pages' && !empty($_REQUEST['page_id'])) {
$data = fn_ab__so_ntp_get_index_data($_REQUEST['page_id'], 'page');
} elseif ($controller == 'product_features' && !empty($_REQUEST['variant_id'])) {
$data = fn_ab__so_ntp_get_index_data($_REQUEST['variant_id'], 'product_feature');
} elseif ($controller == 'promotions' && !empty($_REQUEST['promotion_id'])) {
$data = fn_ab__so_ntp_get_index_data($_REQUEST['promotion_id'], 'promotion');
}
if (!empty($data['noindex']) && $data['noindex'] == 'Y') {
$denied = true;
}
}
return $denied;
}
function fn_ab__so_noindex_tech_pages_update_page_post($page_data, $page_id)
{
if (empty($page_data['ab__so_ntp_index_data']) || !fn_check_view_permissions('ab__so_noindex_tech_pages.manage')) {
return false;
}
fn_ab__so_ntp_update_index_data($page_data['ab__so_ntp_index_data'], $page_id, 'page');
}
function fn_ab__so_noindex_tech_pages_delete_page($page_id)
{
fn_ab__so_ntp_delete_index_data($page_id, 'page');
}
function fn_ab__so_noindex_tech_pages_clone_page($page_id, $new_page_id)
{
$data = fn_ab__so_ntp_get_index_data($page_id, 'page');
if (Registry::get('addons.ab__so_noindex_tech_pages.copy_canonical_on_clone') === 'Y') {
$data['canonical_id'] = empty($data['canonical_id']) ? $page_id : $data['canonical_id'];
} else {
unset($data['canonical_id']);
}
fn_ab__so_ntp_update_index_data($data, $new_page_id, 'page');
}
function fn_ab__so_noindex_tech_pages_update_product_post($product_data, $product_id)
{
if (!empty($product_data['ab__so_ntp_noindex'])) {
$product_data['ab__so_ntp_index_data']['noindex'] = $product_data['ab__so_ntp_noindex'];
}
if (empty($product_data['ab__so_ntp_index_data']) || !fn_check_view_permissions('ab__so_noindex_tech_pages.manage')) {
return false;
}
fn_ab__so_ntp_update_index_data($product_data['ab__so_ntp_index_data'], $product_id, 'product');
}
function fn_ab__so_noindex_tech_pages_delete_product_post($product_id)
{
fn_ab__so_ntp_delete_index_data($product_id, 'product');
}
function fn_ab__so_noindex_tech_pages_clone_product($product_id, $new_product_id)
{
$data = fn_ab__so_ntp_get_index_data($product_id, 'product');
if (Registry::get('addons.ab__so_noindex_tech_pages.copy_canonical_on_clone') === 'Y') {
$data['canonical_id'] = empty($data['canonical_id']) ? $product_id : $data['canonical_id'];
} else {
unset($data['canonical_id']);
}
fn_ab__so_ntp_update_index_data($data, $new_product_id, 'product');
}
function fn_ab__so_noindex_tech_pages_update_category_post($category_data, $category_id)
{
if (empty($category_data['ab__so_ntp_index_data']) || !fn_check_view_permissions('ab__so_noindex_tech_pages.manage')) {
return false;
}
fn_ab__so_ntp_update_index_data($category_data['ab__so_ntp_index_data'], $category_id, 'category');
}
function fn_ab__so_noindex_tech_pages_delete_category_after($category_id)
{
fn_ab__so_ntp_delete_index_data($category_id, 'category');
}
function fn_ab__so_noindex_tech_pages_update_product_feature_variant_post($feature_id, $feature_type, $variant, $lang_code, $variant_id)
{
if (empty($variant['ab__so_ntp_index_data']) || !fn_check_view_permissions('ab__so_noindex_tech_pages.manage')) {
return false;
}
fn_ab__so_ntp_update_index_data($variant['ab__so_ntp_index_data'], $variant_id, 'product_feature');
}
function fn_ab__so_ntp_get_canonical_base_url($object_type, $id_var_name, $base_url)
{
if (empty($object_type) || empty($base_url) || (!empty($id_var_name) && empty($_REQUEST[$id_var_name]))) {
return false;
}
$data = fn_ab__so_ntp_get_index_data($_REQUEST[$id_var_name], $object_type);
$id = empty($data['canonical_id']) ? $_REQUEST[$id_var_name] : $data['canonical_id'];
$canonical_base_url = str_replace('[id]', $id, $base_url);
Registry::set('runtime.seo.is_creating_canonical_url', true, true);
Tygh::$app['view']->assign('ab__so_ntp_base_url', fn_url($canonical_base_url));
Registry::del('runtime.seo.is_creating_canonical_url');
return $canonical_base_url;
}
function fn_ab__so_noindex_tech_pages_ab__as_get_categories($settings, &$join, &$condition)
{
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "category" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.company_id = ?:categories.company_id AND ' .
'ab_ntp_noindex.object_id = ?:categories.category_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "category" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.company_id = ?:categories.company_id AND ' .
'ab_ntp_canonical.object_id = ?:categories.category_id ';
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__so_noindex_tech_pages_ab__as_get_products($settings, &$join, &$condition)
{
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "product" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.company_id = ?:products.company_id AND ' .
'ab_ntp_noindex.object_id = ?:products.product_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "product" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.object_id = ?:products.product_id ';
if(!fn_allowed_for('MULTIVENDOR')){
$join .=' AND ab_ntp_canonical.company_id = ?:products.company_id ';
}
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__so_noindex_tech_pages_ab__as_get_pages($settings, &$join, &$condition)
{
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "page" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.company_id = ?:pages.company_id AND ' .
'ab_ntp_noindex.object_id = ?:pages.page_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "page" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.company_id = ?:pages.company_id AND ' .
'ab_ntp_canonical.object_id = ?:pages.page_id ';
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__so_noindex_tech_pages_ab__as_get_features_variants($settings, &$join, &$condition)
{
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "product_feature" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.company_id = ?:product_features.company_id AND ' .
'ab_ntp_noindex.object_id = ?:product_feature_variants.variant_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "product_feature" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.company_id = ?:product_features.company_id AND ' .
'ab_ntp_canonical.object_id = ?:product_feature_variants.variant_id ';
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__so_ntp_is_object_denied($object_id, $object_type)
{
static $denied_objects = null;
if ($denied_objects === null) {
$company_id = fn_get_runtime_company_id();
$denied_objects = db_get_hash_multi_array('SELECT * FROM ?:ab__so_noindex_tech_pages WHERE company_id = ?i AND var = ?s AND value = ?s', ['object_type', 'object_id'], $company_id, 'noindex', 'Y');
}
return (!empty($denied_objects[$object_type]) && !empty($denied_objects[$object_type][$object_id]));
}
function fn_ab__so_noindex_tech_pages_update_promotion_post($promotion_data, $promotion_id, $lang_code)
{
if (empty($promotion_data['ab__so_ntp_index_data']) || !fn_check_view_permissions('ab__so_noindex_tech_pages.manage')) {
return false;
}
fn_ab__so_ntp_update_index_data($promotion_data['ab__so_ntp_index_data'], $promotion_id, 'promotion');
}
function fn_ab__so_noindex_tech_pages_delete_promotions_post($promotion_ids)
{
foreach ($promotion_ids as $promotion_id) {
fn_ab__so_ntp_delete_index_data($promotion_id, 'promotion');
}
}
function fn_ab__so_noindex_tech_pages_ab__dotd_get_promotions_for_sitemap(&$join, &$condition)
{
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages AS ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "promotion" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.company_id = ?:promotions.company_id AND ' .
'ab_ntp_noindex.object_id = ?:promotions.promotion_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages AS ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "promotion" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.company_id = ?:promotions.company_id AND ' .
'ab_ntp_canonical.object_id = ?:promotions.promotion_id ';
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__so_noindex_tech_pages_get_route($req, &$result, $area, $is_allowed_url)
{
if ($area == 'C' && !defined('CONSOLE')) {
$redirect = false;
$uri = !empty($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI'];
$addon = Registry::get('addons.ab__so_noindex_tech_pages');
if ($addon['process_extra_url_slashes'] == 'Y' && strpos($uri, '/'.'/') !== false) {
$uri = preg_replace('@([/]+)@', '/', $uri);
$redirect = true;
}
$url_parts = parse_url($uri);
if (!empty($url_parts['path'])) {
if ($addon['process_slash_in_end_of_url'] == 'Y') {
$trailing_slash = (substr($url_parts['path'], -1) == '/');
$ext_exist = preg_match('/\.[a-zA-Z0-9]{2,4}$/', rtrim($url_parts['path'], '/'));
if (!$trailing_slash && !$ext_exist) {
$url_parts['path'] .= '/';
$redirect = true;
}
if ($trailing_slash && $ext_exist) {
$url_parts['path'] = rtrim($url_parts['path'], '/');
$redirect = true;
}
}
if ($addon['cast_url_to_lowercase'] == 'Y') {
$url_parts['path_lowel'] = strtolower($url_parts['path']);
if ($url_parts['path'] != $url_parts['path_lowel']) {
$url_parts['path'] = $url_parts['path_lowel'];
$redirect = true;
}
}
}
if ($redirect) {
$uri = '';
$uri .= empty($url_parts['scheme']) ? '' : $url_parts['scheme'] . '://';
$uri .= empty($url_parts['host']) ? '' : $url_parts['host'];
$uri .= $url_parts['path'];
$uri .= empty($url_parts['query']) ? '' : '?' . $url_parts['query'];
$uri .= empty($url_parts['fragment']) ? '' : '#' . $url_parts['fragment'];
$result = [INIT_STATUS_REDIRECT, $uri, false, true];
}
}
}
function fn_ab__so_ntp_exim_get_product_data($prodoct_id, $var)
{
$data = fn_ab__so_ntp_get_index_data($prodoct_id, 'product');
if ($var == 'noindex') {
$default_value = 'N';
} elseif ($var == 'canonical_id') {
$default_value = $prodoct_id;
} else {
$default_value = '';
}
return empty($data[$var]) ? $default_value : $data[$var];
}
function fn_ab__so_ntp_exim_set_product_data($prodoct_id, $var, $value)
{
if (empty($value)) {
return false;
} elseif ($var == 'noindex' && !in_array($value, ['Y', 'N'])) {
return false;
} elseif ($var == 'canonical_id' && !is_numeric($value)) {
return false;
}
fn_ab__so_ntp_update_index_data([
$var => $value,
], $prodoct_id, 'product');
return true;
}
