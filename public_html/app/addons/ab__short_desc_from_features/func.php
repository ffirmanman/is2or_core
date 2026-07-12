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
use Tygh\ABSF;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Storefront\Storefront;
use Tygh\Languages\Languages;
use Tygh\Enum\ProductFeatures;
use Tygh\Enum\YesNo;
use Tygh\Enum\SiteArea;
use Tygh\Enum\ObjectStatuses;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
foreach ( glob(__DIR__ . '/functions/fn_sdff.*.php') as $functions) {
require_once $functions;
}
function fn_ab__sdff_install()
{
fn_ab__sdff_migrate_v13_v12();
fn_ab__sdff_migrate_v190_v180();
}

function fn_ab__short_desc_from_features_update_product_feature_post($feature_data, $feature_id, $deleted_variants, $lang_code)
{
if (!empty($feature_data['ab__sdff__use_for_desc']) && fn_check_view_permissions('ab__short_desc_from_features.manage_features')) {

$db = Tygh::$app['db'];
$db->replaceInto('ab__short_desc_from_features_flags', [
'feature_id' => $feature_id,
'use_for_desc' => $feature_data['ab__sdff__use_for_desc'],
]);
}
}
function fn_ab__short_desc_from_features_delete_feature_post($feature_id, $variant_ids)
{
db_query('DELETE FROM ?:ab__short_desc_from_features_flags WHERE feature_id = ?i', $feature_id);
}
function fn_ab__short_desc_from_features_get_product_feature_data_before_select(&$fields, &$join, $condition, $feature_id, $get_variants, $get_variant_images, $lang_code)
{
$fields[] = db_quote('IFNULL(ab__sdfff.use_for_desc, ?s) as ab__sdff__use_for_desc', YesNo::NO);
$join .= ' LEFT JOIN ?:ab__short_desc_from_features_flags AS ab__sdfff ON ?:product_features.feature_id = ab__sdfff.feature_id';
}
function fn_ab__short_desc_from_features_get_product_features(&$fields, &$join, $condition, $params)
{
if (!empty($params['ab__sdff'])) {
$fields[] = '?:product_filter_descriptions.filter';
$join .= ' LEFT JOIN ?:product_filters ON pf.feature_id = ?:product_filters.feature_id';
$join .= ' LEFT JOIN ?:product_filter_descriptions ON ?:product_filters.filter_id = ?:product_filter_descriptions.filter_id AND ?:product_filter_descriptions.lang_code = ?:product_features_descriptions.lang_code';
$join .= ' RIGHT JOIN ?:ab__short_desc_from_features_flags ON pf.feature_id = ?:ab__short_desc_from_features_flags.feature_id AND ?:ab__short_desc_from_features_flags.use_for_desc = "Y"';
}
}
function fn_ab__short_desc_from_features_update_product_post($product_data, $product_id, $lang_code, $create)
{
fn_ab__sdff_generate_descriptions($product_id, $lang_code);
}

function fn_ab__short_desc_from_features_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
$feature_short_desc = fn_ab__sdff_get_descriptions($product_data['product_id'], $lang_code);
if (!empty($feature_short_desc)) {
$settings = Registry::get('addons.ab__short_desc_from_features');
$feature_short_desc = reset($feature_short_desc);
$edelim = empty($settings['external_delim_prod_page']) ? ': ' : str_replace('\n', '<br>', $settings['external_delim_prod_page']);
$idelim = empty($settings['internal_delim_prod_page']) ? '; ' : $settings['internal_delim_prod_page'];
if ($settings['product_page_output'] == 'text') {
$feature_short_desc = strip_tags($feature_short_desc);
}
$product_data['feature_short_desc'] = str_replace(['[edelim]', '[idelim]'], [$edelim, $idelim], $feature_short_desc);
if (AREA == SiteArea::STOREFRONT && ($settings['insert_type'] == 'override_all' || ($settings['insert_type'] == 'override_empty' && empty($product_data['short_description'])))) {
$product_data['short_description'] = $product_data['feature_short_desc'];
}
}
}
function fn_ab__short_desc_from_features_get_products_post(&$products, $params, $lang_code)
{
if (!empty($products)) {
$products_ids = array_column($products, 'product_id');
$feature_short_desc = fn_ab__sdff_get_descriptions($products_ids, $lang_code);
$settings = Registry::get('addons.ab__short_desc_from_features');
if (empty($feature_short_desc)) {
return false;
}
if (!empty($params['ab__pfe'])) {
$edelim = empty($settings['external_delim_pfe']) ? ': ' : str_replace('\n', '<br>', $settings['external_delim_pfe']);
$idelim = empty($settings['internal_delim_pfe']) ? '; ' : $settings['internal_delim_pfe'];
} else {
$edelim = empty($settings['external_delim_prod_list']) ? ': ' : str_replace('\n', '<br>', $settings['external_delim_prod_list']);
$idelim = empty($settings['internal_delim_prod_list']) ? '; ' : $settings['internal_delim_prod_list'];
}
foreach ($products as &$product) {
if (!empty($feature_short_desc[$product['product_id']])) {
if ($settings['product_lists_output'] == 'text') {
$feature_short_desc[$product['product_id']] = strip_tags($feature_short_desc[$product['product_id']]);
}
$product['feature_short_desc'] = str_replace(['[edelim]', '[idelim]'], [$edelim, $idelim], $feature_short_desc[$product['product_id']]);
if (AREA == SiteArea::STOREFRONT && ($settings['insert_type'] == 'override_all' || ($settings['insert_type'] == 'override_empty' && empty($product['short_description'])))) {
$product['short_description'] = $product['feature_short_desc'];
}
}
}
}
}
function fn_ab__short_desc_from_features_gather_additional_products_data_params($product_ids, $params, &$products, $auth, $products_images, $additional_images, $product_options, $has_product_options, $has_product_options_links)
{
if (!empty($_REQUEST['dispatch']) && $_REQUEST['dispatch'] == 'yml.generate') {
fn_ab__short_desc_from_features_get_products_post($products, [], CART_LANGUAGE);
}
}
function fn_ab__short_desc_from_features_ab__pfe_get_items_post($datafeed, $params, &$products)
{
$params['ab__pfe'] = true;
fn_ab__short_desc_from_features_get_products_post($products, $params, $datafeed['lang_code']);
}
function fn_ab__sdff_get_descriptions($products_ids, $lang_code)
{

$storefront = Tygh::$app['storefront'];
$feature_short_descs = db_get_hash_single_array('SELECT product_id, feature_short_desc FROM ?:ab__short_desc_from_features_values
WHERE product_id IN (?n) AND lang_code = ?s AND storefront_id = ?i ?p', ['product_id', 'feature_short_desc'], $products_ids, $lang_code, $storefront->storefront_id, fn_get_company_condition('?:ab__short_desc_from_features_values.company_id'));
return $feature_short_descs;
}

function fn_ab__sdff_generate_descriptions($products, $lang_code = '')
{
$company_id = fn_get_runtime_company_id();
if (!is_array($products)) {
$products = [$products];
}
$products_ids = array_column($products, 'product_id');

$storefront = Tygh::$app['storefront'];
$settings = fn_ab__sdff_get_storefront_settings();
$categories = db_get_hash_single_array('SELECT product_id, category_id FROM ?:products_categories WHERE link_type = ?s and product_id IN (?n)', ['product_id', 'category_id'], 'M', $products_ids);
if (empty($lang_code)) {

$storefront = Tygh::$app['storefront'];
$languages_conditions = [
'area' => SiteArea::STOREFRONT,
'include_hidden' => false,
'storefront_id' => $storefront->storefront_id,
];
$lang_codes = array_keys(Languages::getAvailable($languages_conditions));
} else {
$lang_codes = [$lang_code];
}
foreach ($lang_codes as $lang_code) {
foreach ($products_ids as $product_id) {
list($features) = fn_get_product_features([
'ab__sdff' => true,
'product_id' => $product_id,
'existent_only' => true,
'statuses' => ObjectStatuses::ACTIVE,
'variants' => true,
'variants_selected_only' => true,
'exclude_group' => true,
], 0, $lang_code);
$feature_strings = [];
if (!empty($features)) {
foreach ($features as $feature) {
$feature['description'] = empty($feature['filter']) ? preg_replace('/\s\([^)]+\)/', '', $feature['description']) : $feature['filter'];
$value = fn_ab__sdff_get_feature_value($feature);
if (!empty($value)) {
$feature_string = ($feature['description'] == $value) ? $value : $feature['description'] . '[idelim]' . $value;

fn_set_hook('ab__sdff_customize_feature_string', $products_ids, $lang_code, $settings, $product_id, $feature, $categories, $value, $feature_string, $storefront);
$feature_strings[] = $feature_string;
}
}
}
$feature_short_desc = empty($feature_strings) ? '' : implode('[edelim]', $feature_strings);

$db = Tygh::$app['db'];
$db->replaceInto('ab__short_desc_from_features_values', [
'product_id' => $product_id,
'feature_short_desc' => $feature_short_desc,
'lang_code' => $lang_code,
'company_id' => $company_id,
'storefront_id' => $storefront->storefront_id,
]);
}
}
}

function fn_ab__sdff_get_feature_value($feature)
{
$value = '';
if ($feature['feature_type'] == ProductFeatures::MULTIPLE_CHECKBOX) {
$prefix = ($feature['prefix']) ? $feature['prefix'] : '';
$suffix = ($feature['suffix']) ? $feature['suffix'] : '';
$variants = [];
foreach ($feature['variants'] as $variant) {
$variants[] = $prefix . (empty($variant['variant']) ? $variant['value'] : $variant['variant']) . $suffix;
}
if (!empty($variants)) {
$value .= implode(', ', $variants);
}
return $value;
}
if ($feature['prefix']) {
$value .= $feature['prefix'];
}
if ($feature['feature_type'] == ProductFeatures::DATE) {

$formatter = Tygh::$app['formatter'];
$value .= $formatter->asDatetime($feature['value_int'], Registry::get('settings.Appearance.date_format'));
} elseif (in_array($feature['feature_type'], [ProductFeatures::TEXT_SELECTBOX, ProductFeatures::NUMBER_SELECTBOX, ProductFeatures::EXTENDED])) {
$variants = [];
foreach ($feature['variants'] as $variant) {
$variants[] = empty($variant['variant']) ? $variant['value'] : $variant['variant'];
}
if (!empty($variants)) {
$value .= implode(', ', $variants);
}
} elseif ($feature['feature_type'] == ProductFeatures::SINGLE_CHECKBOX && $feature['value'] == YesNo::YES) {
$value .= $feature['description'];
} elseif ($feature['feature_type'] == ProductFeatures::NUMBER_FIELD) {
$value .= floatval($feature['value_int']);
} elseif ($feature['feature_type'] == ProductFeatures::TEXT_FIELD) {
$value .= $feature['value'];
} else {
return false;
}
if ($feature['suffix']) {
$value .= $feature['suffix'];
}
return $value;
}

function fn_ab__short_desc_from_features_description_tables_post(&$description_tables)
{
$description_tables[] = 'ab__short_desc_from_features_values';
}

function fn_ab__seo_filters_ab__sdff_customize_feature_string($products_ids, $lang_code, $settings, $product_id, $feature, $categories, $value, &$feature_string, $storefront)
{
if (!empty($feature['variant_id']) && method_exists('Tygh\ABSF', 'get_seo_page_link_info')) {
$links = [];
foreach ($feature['variants'] as $variant) {
$res = ABSF::get_seo_page_link_info($categories[$product_id], $product_id, $feature['feature_id'], $variant['variant_id'], $value, $lang_code, $storefront);
if (!empty($res) && !empty($res['link'])) {
$links[] = "<a target='{$settings['target']}' href='{$res['link']}' title='{$res['title']}'>{$feature['prefix']}{$variant['variant']}{$feature['suffix']}</a>";
} else {
$links[] = "{$feature['prefix']}{$variant['variant']}{$feature['suffix']}";
}
}
$link = implode(', ', $links);
$feature_string = ($feature['description'] == $value) ? $link : $feature['description'] . '[idelim]' . $link;
}
}

function fn_ab__sdff_get_storefront_settings()
{
$storefront = \Tygh::$app['storefront'];
$company_id = fn_allowed_for('ULTIMATE') ? $storefront->getCompanyIds()[0] : 0;
$params = [
'storefront_id' => $storefront->storefront_id,
'company_id' => $company_id,
];
return Settings::instance($params)->getValues('ab__short_desc_from_features', Settings::ADDON_SECTION, false);
}
