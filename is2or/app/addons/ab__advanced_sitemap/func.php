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
use Tygh\Addons\Ab_AdvancedSitemap\XmlBuilder;
use Tygh\Addons\ProductVariations\Product\FeaturePurposes;
use Tygh\Addons\ProductVariations\Product\Type\Type;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\SiteArea;
use Tygh\Enum\YesNo;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Storefront\Storefront;
defined('BOOTSTRAP') or die('Access denied');
foreach (glob(Registry::get('config.dir.addons') . '/ab__advanced_sitemap/functions/fn.ab__as.*.php') as $functions) {
require_once $functions;
}

function fn_ab__as_is_empty_category($category_id, Storefront $storefront, array $settings)
{
static $exclude_categories = null;
if ($exclude_categories === null) {
$exclude_categories = $settings['exclude_categories'];
}
if ($exclude_categories == 'none') {
return false;
}
static $children = null;
static $categories_products = null;
if ($children === null || $categories_products === null) {
$children = db_get_hash_array('SELECT parent_id, GROUP_CONCAT(category_id) as subcategories FROM ?:categories WHERE status = ?s ?p AND parent_id != 0 GROUP BY parent_id', 'parent_id', ObjectStatuses::ACTIVE, fn_get_company_condition('?:categories.company_id'));
foreach ($children as &$child) {
$child['subcategories'] = explode(',', $child['subcategories']);
}
$join = 'INNER JOIN ?:products AS p ON p.product_id = pc.product_id AND p.status = "A" INNER JOIN ?:product_prices AS pp ON pp.product_id = p.product_id AND pp.lower_limit = 1';
$join .= ' INNER JOIN ?:categories ON ?:categories.category_id = pc.category_id';
$condition = '';
if ($exclude_categories == 'without_product_amount') {
$condition .= ' AND p.amount > 0';
} elseif ($exclude_categories == 'without_product_price') {
$condition .= ' AND pp.price > 0 ';
} elseif ($exclude_categories == 'without_product_amount_and_price') {
$condition .= ' AND (pp.price > 0 OR p.amount > 0)';
}
if (fn_allowed_for('MULTIVENDOR')) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = p.company_id';
$condition .= db_quote(' AND companies.status = ?s', ObjectStatuses::ACTIVE);
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$condition .= db_quote(' AND companies.company_id IN (?n)', $company_ids);
}
} else {
$condition .= fn_get_company_condition('?:categories.company_id');
}
$categories_products = db_get_hash_single_array('SELECT pc.category_id, COUNT(p.product_id) AS product_count FROM ?:products_categories AS pc ?p WHERE 1 ?p GROUP BY pc.category_id', ['category_id', 'product_count'], $join, $condition);
}
if (empty($categories_products[$category_id]) && empty($children[$category_id])) {
return true;
}
if (!empty($children[$category_id])) {
foreach ($children[$category_id]['subcategories'] as $child_id) {
if (fn_ab__as_is_empty_category($child_id, $storefront, $settings) === false) {
return false;
}
}
return true;
}
return false;
}

function fn_ab__as_is_empty_brand($variant_id, Storefront $storefront, array $settings)
{
static $exclude_brands = null;
if ($exclude_brands === null) {
$exclude_brands = $settings['exclude_brands'];
}
if ($exclude_brands == 'none') {
return false;
}
static $products_count = null;
if ($products_count === null) {
$join = 'INNER JOIN ?:products AS p ON p.product_id = pfv.product_id AND p.status = "A" INNER JOIN ?:product_prices AS pp ON pp.product_id = p.product_id AND pp.lower_limit = 1';
$join .= ' INNER JOIN ?:products_categories AS pc ON pc.product_id = p.product_id';
$join .= db_quote(' INNER JOIN ?:categories ON ?:categories.category_id = pc.category_id AND ?:categories.status = ?s', ObjectStatuses::ACTIVE);
$condition = '';
if ($exclude_brands == 'without_product_amount') {
$condition .= ' AND p.amount > 0';
} elseif ($exclude_brands == 'without_product_price') {
$condition .= ' AND pp.price > 0 ';
} elseif ($exclude_brands == 'without_product_amount_and_price') {
$condition .= ' AND (pp.price > 0 OR p.amount > 0)';
}
if (fn_allowed_for('MULTIVENDOR')) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = p.company_id';
$condition .= db_quote(' AND companies.status = ?s', ObjectStatuses::ACTIVE);
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$condition .= db_quote(' AND companies.company_id IN (?n)', $company_ids);
}
} else {
$condition .= fn_get_company_condition('?:categories.company_id');
}
$products_count = db_get_hash_single_array('SELECT pfv.variant_id, COUNT(p.product_id) AS product_count FROM ?:product_features_values AS pfv ?p WHERE 1 ?p GROUP BY pfv.variant_id', ['variant_id', 'product_count'], $join, $condition);
}
return empty($products_count[$variant_id]);
}

function fn_ab__advanced_sitemap_get_pages($params, $join, $condition, &$fields, $group_by, $sortings, $lang_code)
{
if (!empty($params['simple'])) {
$fields[] = '?:page_descriptions.page_sitemap';
}
}

function fn_ab__as_generate_xml_sitemap(Storefront $storefront, $params = [], $lang_code = '')
{
$default_params = [];
$params = array_merge($default_params, $params);
Registry::set('runtime.ab__as.generation.lang_code', $lang_code);
$settings = fn_ab__as_get_storefront_settings($storefront);
if ($settings['enable_xml_sitemap'] !== YesNo::YES) {
return false;
}
try {
$xml_builder = new XmlBuilder($storefront, $settings);
} catch (Exception $e) {
defined('AJAX_REQUEST') ? fn_set_notification(NotificationSeverity::ERROR, 'error', $e->getMessage()) : fn_print_r($e->getMessage());
return false;
}
$parts = 2;
$parts += (int) ($settings['include_categories'] === YesNo::YES);
$parts += (int) ($settings['include_products'] === YesNo::YES);
$parts += (int) ($settings['include_pages'] === YesNo::YES);
$parts += (int) ($settings['include_blog'] === YesNo::YES);
$parts += (int) ($settings['include_extended'] === YesNo::YES);
if (fn_allowed_for('MULTIVENDOR')) {
$parts += (int) ($settings['include_companies'] === YesNo::YES);
}
$parts += (int) ($settings['enable_xml_images_map'] === YesNo::YES);
fn_set_progress('parts', $parts);
fn_set_progress('echo', __('ab__as.comet.adding_storefront'));
$xml_builder->writeLinksToFile('custom_link', '?');
fn_set_progress('echo', __('ab__as.comet.adding_custom_links'));
list($custom_links) = fn_ab__as_get_links([
'company_id' => Tygh::$app['storefront']->storefront_id,
]);
foreach ($custom_links as $custom_link) {
$xml_builder->writeLinksToFile('custom_link', $custom_link['link']);
}
unset($custom_links);
if ($settings['include_categories'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_categories'));
$categories_ids = fn_ab__as_get_categories_for_sitemap($settings, $storefront);
foreach ($categories_ids as $category_id) {
if (fn_ab__as_is_empty_category($category_id, $storefront, $settings)) {
continue;
}
$xml_builder->writeLinksToFile('category', $category_id);
}
unset($categories_ids, $category_id);
}
if ($settings['include_products'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_products'));
$products_ids = fn_ab__as_get_products_for_sitemap($settings, $storefront);
foreach ($products_ids as $product_id) {
$xml_builder->writeLinksToFile('product', $product_id);
}
unset($products_ids);
}
if ($settings['include_pages'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_pages'));
$page_types = fn_get_page_object_by_type();
unset($page_types[PAGE_TYPE_LINK]);
if (defined('PAGE_TYPE_BLOG')) {
unset($page_types[PAGE_TYPE_BLOG]);
}
$pages_ids = fn_ab__as_get_pages_for_sitemap($page_types, $settings, $storefront);
foreach ($pages_ids as $page_id) {
$xml_builder->writeLinksToFile('page', $page_id);
}
unset($pages_ids);
}
if ($settings['include_blog'] === YesNo::YES && defined('PAGE_TYPE_BLOG')) {
fn_set_progress('echo', __('ab__as.comet.adding_blog'));
$pages_ids = fn_ab__as_get_pages_for_sitemap([PAGE_TYPE_BLOG => []], $settings, $storefront);
foreach ($pages_ids as $page_id) {
$xml_builder->writeLinksToFile('blog', $page_id);
}
unset($pages_ids);
}
if ($settings['include_extended'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_brands'));
$features_variant_ids = fn_ab__as_get_variants_for_sitemap($settings, $storefront);
foreach ($features_variant_ids as $variant_id) {
if (fn_ab__as_is_empty_brand($variant_id, $storefront, $settings)) {
continue;
}
$xml_builder->writeLinksToFile('extended', $variant_id);
}
unset($features_variant_ids);
}
if (fn_allowed_for('MULTIVENDOR') && $settings['include_companies'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_vendors'));
$vendors_ids = fn_ab__as_get_companies_for_sitemap($settings, $storefront);
foreach ($vendors_ids as $vendor_id) {
$xml_builder->writeLinksToFile('companies', $vendor_id);
}
unset($vendors_ids);
}
$objects = [];

fn_set_hook('ab__as_other_objects', $objects, $storefront, $settings);
foreach ($objects as $object => $values) {
foreach ($values as $value) {
$xml_builder->writeLinksToFile($object, $value);
}
}
$additional_sitemaps = [];

fn_set_hook('additional_sitemap_files', $additional_sitemaps, $storefront, $settings);
if (!empty($additional_sitemaps)) {
foreach ($additional_sitemaps as $file) {
$xml_builder->addSitemapFile($file);
}
}
if ($settings['enable_xml_images_map'] === YesNo::YES) {
fn_set_progress('echo', __('ab__as.comet.adding_images'));
$products_ids = fn_ab__as_get_products_for_sitemap($settings, $storefront);
if (!empty($products_ids)) {
$products_ids = array_chunk($products_ids, 300);
foreach ($products_ids as $product_id) {
$images = db_get_hash_multi_array('SELECT ?:images_links.object_id, ?:images.image_path, ?:images.image_id as images_image_id, ?:images_links.object_type'
. ' FROM ?:images_links'
. ' LEFT JOIN ?:images ON ?:images_links.detailed_id = ?:images.image_id'
. ' WHERE ?:images_links.object_type = ?s AND ?:images_links.object_id IN (?p)', ['object_id', 'images_image_id'], 'product', implode(',', $product_id));
if (!empty($images)) {
foreach ($images as $prod => $prod_images) {
$xml_builder->writeImagesLinksToFile($prod_images, $prod);
}
}
}
}
}
$xml_builder->buildIndexSitemap();
return true;
}

function fn_ab__advanced_sitemap_get_image_pairs_pre(&$object_ids, $object_type, $pair_type, $get_icon, $get_detailed, $lang_code)
{
if (empty($object_ids) && $object_type == 'watermark' && Registry::get('runtime.controller') == 'ab__advanced_sitemap') {
$object_ids = Registry::get('runtime.company_id');
}
}

function fn_ab__as_get_sitemap_dir($storefront_id)
{
static $path = null;
if ($path === null) {
$path = fn_get_files_dir_path() . 'ab__advanced_sitemap/';
if (fn_allowed_for('MULTIVENDOR')) {
$path .= $storefront_id . '/';
}
$process_dir = AREA === SiteArea::ADMIN_PANEL;

fn_set_hook('ab__as_get_sitemap_dir', $path, $storefront_id, $process_dir);
if ($process_dir) {
fn_rm($path);
fn_mkdir($path);
}
}
return $path;
}

function fn_ab__as_get_products_for_sitemap($settings, Storefront $storefront)
{
$storefronts = [0, $storefront->storefront_id];
$join = db_quote(' INNER JOIN ?:products_categories ON ?:products_categories.product_id = ?:products.product_id INNER JOIN ?:categories ON ?:categories.category_id = ?:products_categories.category_id AND ?:categories.status IN ("A", "H") AND ?:categories.storefront_id IN (?a)', $storefronts);
$condition = '?:products.status = "A" ';
if ($storefront->storefront_id) {
$condition .= db_quote(' AND (?:categories.storefront_id = 0 OR ?:categories.storefront_id = ?i)', $storefront->storefront_id);
}
if (fn_allowed_for('MULTIVENDOR')) {
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = ?:products.company_id';
$condition .= db_quote(' AND (companies.status = ?s OR ?:products.company_id = 0) AND (companies.company_id IN (?n) OR ?:products.company_id = 0)', ObjectStatuses::ACTIVE, $company_ids);
}
if (Registry::get('addons.master_products.status') === ObjectStatuses::ACTIVE && $settings['add_vendor_offers'] == YesNo::NO) {
$condition .= db_quote(' AND master_product_id = 0');
}
} else {
$condition .= fn_get_company_condition('?:categories.company_id');
}
if ($settings['exclude_products'] == 'without_amount') {
$condition .= ' AND ?:products.amount > 0';
} elseif ($settings['exclude_products'] == 'without_price') {
$join .= ' INNER JOIN ?:product_prices AS pp ON pp.product_id = ?:products.product_id AND pp.lower_limit = 1 AND pp.usergroup_id = 0';
$condition .= ' AND pp.price > 0';
} elseif ($settings['exclude_products'] == 'without_amount_and_price') {
$join .= ' INNER JOIN ?:product_prices AS pp ON pp.product_id = ?:products.product_id AND pp.lower_limit = 1 AND pp.usergroup_id = 0';
$condition .= ' AND (?:products.amount > 0 OR pp.price > 0)';
}
if (Registry::get('addons.product_variations.status') === ObjectStatuses::ACTIVE) {
$join .= db_quote(' LEFT JOIN ?:product_variation_group_products AS pvgp ON ?:products.product_id = pvgp.product_id');
if ($settings['exclude_products_variations'] === YesNo::YES) {
$condition .= db_quote(' AND (pvgp.product_id IS NULL OR ?:products.product_type = ?s)', Type::PRODUCT_TYPE_SIMPLE);
} else {
$condition .= db_quote(' AND ?:products.product_type IN (?a) ', [Type::PRODUCT_TYPE_SIMPLE, Type::PRODUCT_TYPE_VARIATION]);
}
}

fn_set_hook('ab__as_get_products', $settings, $join, $condition, $storefront);
return db_get_fields('SELECT DISTINCT ?:products.product_id FROM ?:products ?p WHERE ?p', $join, $condition);
}

function fn_ab__as_get_categories_for_sitemap($settings, Storefront $storefront)
{
$join = '';
$condition = db_quote('FIND_IN_SET(?i, ?:categories.usergroup_ids) AND ?:categories.status = ?s', USERGROUP_ALL, ObjectStatuses::ACTIVE);
if ($storefront->storefront_id) {
$condition .= db_quote(' AND (?:categories.storefront_id = 0 OR ?:categories.storefront_id = ?i)', $storefront->storefront_id);
}
if (fn_allowed_for('MULTIVENDOR')) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = ?:categories.company_id';
$condition .= db_quote(' AND (?:categories.company_id = 0 OR companies.status = ?s)', ObjectStatuses::ACTIVE);
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$condition .= db_quote(' AND (?:categories.company_id = 0 OR companies.company_id IN (?n))', $company_ids);
}
} else {
$condition .= fn_get_company_condition('?:categories.company_id');
}
if ($storefront->storefront_id) {
$condition .= db_quote(' AND (?:categories.storefront_id = 0 OR ?:categories.storefront_id = ?i)', $storefront->storefront_id);
}

fn_set_hook('ab__as_get_categories', $settings, $join, $condition, $storefront);
return db_get_fields('SELECT ?:categories.category_id FROM ?:categories ?p WHERE ?p', $join, $condition);
}

function fn_ab__as_get_pages_for_sitemap($page_types, $settings, Storefront $storefront)
{
$join = '';
$avail_period_cond = db_quote(' AND (?:pages.use_avail_period = ?s OR (?:pages.avail_from_timestamp <= ?i AND (?:pages.avail_till_timestamp = 0 OR ?:pages.avail_till_timestamp > ?i)))', 'N', TIME, TIME);
$condition = db_quote('?:pages.page_type IN (?a) AND ?:pages.status = ?s ?p', array_keys($page_types), ObjectStatuses::ACTIVE, $avail_period_cond);
if (fn_allowed_for('MULTIVENDOR')) {
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$join .= ' LEFT JOIN ?:companies AS companies ON companies.company_id = ?:pages.company_id';
$condition .= db_quote(' AND (companies.status = ?s OR ?:pages.company_id = 0) AND (companies.company_id IN (?n) OR ?:pages.company_id = 0)', ObjectStatuses::ACTIVE, $company_ids);
}
} else {
$condition .= fn_get_company_condition('?:pages.company_id');
}

fn_set_hook('ab__as_get_pages', $settings, $join, $condition, $storefront);
return db_get_fields('SELECT ?:pages.page_id FROM ?:pages ?p WHERE ?p', $join, $condition);
}

function fn_ab__as_get_variants_for_sitemap($settings, Storefront $storefront)
{
$join = ' INNER JOIN ?:product_feature_variants ON ?:product_feature_variants.feature_id = ?:product_features.feature_id ';
$condition = db_quote('?:product_features.feature_type = ?s AND ?:product_features.status = ?s ?p', 'E', ObjectStatuses::ACTIVE, fn_get_company_condition('?:product_features.company_id'));

fn_set_hook('ab__as_get_features_variants', $settings, $join, $condition, $storefront);
return db_get_fields('SELECT ?:product_feature_variants.variant_id FROM ?:product_features ?p WHERE ?p', $join, $condition);
}

function fn_ab__as_get_companies_for_sitemap($settings, Storefront $storefront)
{
$join = '';
$condition = db_quote('?:companies.status = ?s', ObjectStatuses::ACTIVE);
if ($company_ids = fn_ab__as_get_storefront_company_ids($storefront)) {
$condition .= db_quote(' AND ?:companies.company_id IN (?n)', $company_ids);
}

fn_set_hook('ab__as_get_companies', $settings, $join, $condition, $storefront);
return db_get_fields('SELECT ?:companies.company_id FROM ?:companies ?p WHERE ?p', $join, $condition);
}

function fn_ab__as_get_storefront_settings($storefront)
{
$settings = Settings::instance(['storefront_id' => $storefront->storefront_id])->getValues('ab__advanced_sitemap', Settings::ADDON_SECTION, false);
$languages = fn_ab__as_get_available_languages($storefront);
$languages_locales = fn_ab__as_decode_languages_locales_settings($settings['languages_locales']);
$settings['languages_locales'] = fn_ab__as_get_languages_locales($languages, $languages_locales);
$settings['xml_sitemap_directory'] = fn_ab__as_normalize_sitemap_additional_dir($settings['xml_sitemap_directory']);
return $settings;
}

function fn_ab__as_get_product_features_variants($pid, $lang_code = DEFAULT_LANGUAGE)
{
static $product_features_variants = [];
if (!isset($product_features_variants[$lang_code])) {
$product_features_variants[$lang_code] = db_get_hash_multi_array(
'SELECT product_id, pfv.variant_id, pfvd.variant, pfd.description
FROM ?:product_features_values AS pfv
INNER JOIN ?:product_feature_variant_descriptions AS pfvd ON pfv.variant_id = pfvd.variant_id AND pfvd.lang_code = ?s
INNER JOIN ?:product_features AS pf ON pf.feature_id = pfv.feature_id AND pf.purpose IN (?a)
INNER JOIN ?:product_features_descriptions AS pfd ON pf.feature_id = pfd.feature_id AND pfd.lang_code = ?s
WHERE pfv.lang_code = ?s',
['product_id', 'variant_id'], $lang_code, [FeaturePurposes::CREATE_CATALOG_ITEM, FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM], $lang_code, $lang_code
);
}
return $product_features_variants[$lang_code][$pid] ?? null;
}

function fn_ab__as_get_storefront_company_ids(Storefront $storefront, $add_zero = false)
{
$companies_id = [];
if (fn_allowed_for('MULTIVENDOR')) {
if ($add_zero) {
$companies_id[] = 0;
}
$companies_id = array_unique(array_merge($companies_id, $storefront->getCompanyIds()));
}
return $companies_id;
}

function fn_ab__as_normalize_sitemap_additional_dir($sitemap_dir, $prefix = '/')
{
$sitemap_dir = preg_replace('/[^A-Za-z0-9\/_.~-]/', '', $sitemap_dir);
if ($xml_sitemap_directory_strlen = strlen($sitemap_dir)) {
if (strlen($prefix) && $sitemap_dir[0] !== $prefix) {
$sitemap_dir = $prefix . $sitemap_dir;
}
if ($sitemap_dir[$xml_sitemap_directory_strlen - 1] !== '/') {
$sitemap_dir .= '/';
}
} else {
$sitemap_dir = '/';
}
return $sitemap_dir;
}

function fn_ab__advanced_sitemap_init_settings()
{
$languages_locales = Registry::ifGet('addons.ab__advanced_sitemap.languages_locales', '');
$languages_locales = fn_ab__as_decode_languages_locales_settings($languages_locales);
Registry::set('addons.ab__advanced_sitemap.languages_locales', $languages_locales);
}

function fn_ab__as_decode_languages_locales_settings($settings)
{
$locales = [];
if (is_string($settings) && strlen(trim($settings)) > 0) {
$languages_locales = @json_decode($settings, true);
if (is_array($languages_locales)) {
$locales = $languages_locales;
}
}
return $locales;
}

function fn_ab__as_encode_languages_locales_settings($settings)
{
if (!is_array($settings)) {
$settings = [];
}
$settings = json_encode($settings);
return $settings;
}

function fn_ab__as_get_available_languages($storefront = null, $include_hidden = false)
{
$language_params = [
'include_hidden' => $include_hidden,
];
if ($storefront instanceof Storefront) {
$language_params['area'] = SiteArea::STOREFRONT;
$language_params['storefront_id'] = $storefront->storefront_id;
}
$languages = Languages::getAvailable($language_params);
return $languages;
}

function fn_ab__as_get_languages_locales($languages, $locales = [], $only_exists = false)
{
if ($only_exists) {
foreach ($locales as $lang_code => $locale) {
if (!isset($languages[$lang_code])) {
unset($locales[$lang_code]);
}
}
}
foreach ($locales as $lang_code => $locale) {
if (empty(trim($locale))) {
unset($locales[$lang_code]);
}
}
foreach ($languages as $lang_code => $lang_data) {
if (empty($locales[$lang_code])) {
$locales[$lang_code] = $lang_code . '-' . $lang_data['country_code'];
}
}
return $locales;
}
