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
namespace Ab_extendedComparisonWishlist\Demodata;
use \Tygh\Registry;
use \Tygh\Enum\FileUploadTypes;
use \Tygh\Common\OperationResult;
use \Tygh\Enum\ImagePairTypes;
use \Tygh\Enum\ObjectStatuses;

class DemodataService
{

private $export_path;

private $archiver;
public function __construct()
{
$this->export_path = Registry::get('config.dir.var') . 'ab__data/ab__extended_comparison_wishlist/demodata';
$this->archiver = \Tygh::$app['archiver'];
}

public function importPages($file_path, $extract_path = '')
{
$result = new OperationResult(false);
$hash = crc32($file_path);

$lock_factory = \Tygh::$app['lock.factory'];
$lock = $lock_factory->createLock($hash, SECONDS_IN_HOUR / 2);
if (!$lock->acquire()) {
$result->addError('lock_error', 'Installing demo-data is on progress');
} else {
if (fn_allowed_for('MULTIVENDOR')) {

$storefront = \Tygh::$app['storefront'];
$company_ids = $storefront->getCompanyIds();
if (count($company_ids)) {
$company_id = $company_ids[0];
} else {
$company_id = db_get_field('SELECT company_id FROM ?:companies WHERE status = "A"');
}
} else {
$company_id = fn_get_runtime_company_id();
}
fn_set_progress('parts', 3);
fn_set_progress('echo', __('ab__ecw.demo_data.unpacking_archive'));
$extract_path = empty($extract_path) ? fn_get_files_dir_path() . 'ab__ecw_demodata_path/' : $extract_path;
if (strpos($file_path, '.zip') === false) {
$was_extracted = true;
} else {
try {
$was_extracted = $this->archiver->extractTo($file_path, $extract_path);
} catch (\Exception $e) {
\Tygh\Tools\ErrorHandler::handleException($e);
}
}
if ($was_extracted === true) {
Registry::set('runtime.allow_upload_external_paths', true);

$pages_repo = \Tygh::$app['addons.ab__ecw_comparison_pages.repository'];
$pages_data = json_decode(file_get_contents($extract_path . 'exim.json'), true);
fn_set_progress('echo', __('ab__ecw.demo_data.creating_pages'));
foreach ($pages_data as $old_page_id => $page_data) {
$page_products_files_path = $extract_path . $page_data['products_info'] . '/';
$page_data['storefront_id'] = isset(\Tygh::$app['storefront']) ? \Tygh::$app['storefront']->storefront_id : 1;
$page_data['product_ids'] = $this->importProducts($page_products_files_path, $company_id);
if (file_exists($extract_path . 'pages_images/' . $old_page_id)) {
$images = array_diff(scandir($extract_path . 'pages_images/' . $old_page_id), ['.', '..']);
foreach ($images as &$image) {
$image = $extract_path . 'pages_images/' . $old_page_id . '/' . $image;
}
$this->preparePageImages(end($images));
}
$page_id = $pages_repo->updateComparisonPage(0, $page_data);
$result->setSuccess(true);
$result->addMessage('page_created_' . $page_id, __('ab__ecw.page_created', ['[href]' => fn_url('ab__ecw_comparison_pages.update?page_id=' . $page_id)]));
}
}
fn_set_progress('echo', __('ab__ecw.demo_data.deleting_temp_files'));
fn_rm($extract_path, true);
$lock->release();
}
return $result;
}

private function preparePageImages($image)
{
$_REQUEST['file_ab__ecw_page_image_icon'][] = $image;
$_REQUEST['type_ab__ecw_page_image_icon'][] = FileUploadTypes::SERVER;
$_REQUEST['ab__ecw_page_image_data'][] = [
'pair_id' => 0,
'type' => ImagePairTypes::MAIN,
'object_id' => 0,
'image_alt' => '',
'detailed_alt' => '',
];
}

private function importProducts($page_products_files_path, $company_id)
{
$product_ids = [];
$products_data = json_decode(file_get_contents($page_products_files_path . 'exim.json'), true);
$categories_map = $features_map = $feature_variants_map = [];
$categories = $products_data['categories'];
foreach ($categories as $old_category_id => $category_name) {
$params = [
'category' => $category_name,
'status' => ObjectStatuses::ACTIVE,
'storefront_id' => \Tygh::$app['storefront']->storefront_id,
];
$categories_map[$old_category_id] = fn_update_category($params);
}
$params = [
'description' => implode('|', array_values($categories)),
'categories_path' => implode(',', array_values($categories_map)),
'feature_type' => \Tygh\Enum\ProductFeatures::GROUP,
'company_id' => $company_id,
];
$features_group = fn_update_product_feature($params, NEW_FEATURE_GROUP_ID);
if (fn_allowed_for('ULTIMATE') && function_exists('fn_ult_update_share_object')) {
fn_ult_update_share_object($features_group, 'product_features', $company_id);
}
$features = $products_data['product_features'];
foreach ($features as $feature) {
$feature['parent_id'] = $features_group;
$feature['company_id'] = $company_id;
$variants = isset($feature['variants']) ? $feature['variants'] : [];
$old_feature_id = $feature['feature_id'];
unset($feature['feature_id'],$feature['variants']);
$features_map[$old_feature_id] = fn_update_product_feature($feature, 0);
if (fn_allowed_for('ULTIMATE') && function_exists('fn_ult_share_features')) {
fn_ult_share_features($features_map[$old_feature_id], 'product_features', [$company_id]);
}
if ($variants) {
foreach ($variants as $old_variant_id => $variant) {
$params = [
'variant' => $variant['variant'],
];
$feature_variants_map[$old_variant_id] = fn_add_feature_variant($features_map[$old_feature_id], $params);
}
}
}
$products = $products_data['products'];
foreach ($products as $old_product_id => $product) {
if (file_exists($page_products_files_path . '/product_images/' . $old_product_id)) {
$images = array_diff(scandir($page_products_files_path . '/product_images/' . $old_product_id), ['.', '..']);
foreach ($images as &$image) {
$image = $page_products_files_path . '/product_images/' . $old_product_id . '/' . $image;
}
$this->prepareProductImages($images);
}
$product['company_id'] = $company_id;
$new_category = $categories_map[$product['main_category']];
$product['main_category'] = $new_category;
$product['category_ids'] = [$product['main_category']];
if (empty($product['details_layout'])) {
$product['details_layout'] = 'default';
}
unset($product['product_id'],
$product['usergroup_ids'],
$product['seo_name'],
$product['seo_path']
);
if (isset($product['product_features'])) {
$temp_features = [];
foreach ($product['product_features'] as $feature_id => $feature_data) {
$f_variants = [];
switch ($feature_data['feature_type']) {
case \Tygh\Enum\ProductFeatures::TEXT_SELECTBOX:
case \Tygh\Enum\ProductFeatures::EXTENDED:
$f_variants = [];
if (!empty($feature_data['variants'])) {
reset($feature_data['variants']);
$old_variant_id = key($feature_data['variants']);
$f_variants = $feature_variants_map[$old_variant_id];
}
break;
case \Tygh\Enum\ProductFeatures::MULTIPLE_CHECKBOX:
$f_variants = [];
if (!empty($feature_data['variants'])) {
foreach ($feature_data['variants'] as $variant) {
$f_variants[] = $this->getMappedObjects($feature_variants_map, $variant['variant_id']);
}
}
break;
case \Tygh\Enum\ProductFeatures::TEXT_FIELD:
$f_variants = $feature_data['value'];
break;
}
$temp_features[$features_map[$feature_id]] = $f_variants;
}
$product['product_features'] = $temp_features;
}
$product_ids[] = fn_update_product($product);
}
fn_rm($page_products_files_path, true);
return $product_ids;
}

private function getMappedObjects($map, $object_id, $return = [])
{
if (is_array($object_id)) {
foreach ($object_id as $item) {
$return = array_merge($return, (array)$this->getMappedObjects($map, $item, $return));
}
} elseif (isset($map[$object_id])) {
$return = $map[$object_id];
}
return $return;
}

private function prepareProductImages(array $images)
{
$_REQUEST = [];
$counter = 0;
$_REQUEST['file_product_main_image_icon'] = [];
$_REQUEST['type_product_main_image_icon'] = [];
$_REQUEST['file_product_main_image_detailed'] = [];
$_REQUEST['type_product_main_image_detailed'] = [];
$_REQUEST['product_main_image_data'] = [];
if (count($images) > 1) {
$_REQUEST['file_product_add_additional_image_icon'] = [];
$_REQUEST['type_product_add_additional_image_icon'] = [];
$_REQUEST['file_product_add_additional_image_detailed'] = [];
$_REQUEST['type_product_add_additional_image_detailed'] = [];
$_REQUEST['product_add_additional_image_data'] = [];
}
foreach ($images as $image) {
if ($counter == 0) {
$_REQUEST['file_product_main_image_detailed'][] = $image;
$_REQUEST['type_product_main_image_detailed'][] = FileUploadTypes::SERVER;
$_REQUEST['product_main_image_data'][] = [
'pair_id' => 0,
'type' => ImagePairTypes::MAIN,
'object_id' => 0,
'image_alt' => '',
'detailed_alt' => '',
];
} else {
$_REQUEST['file_product_add_additional_image_detailed'][] = $image;
$_REQUEST['type_product_add_additional_image_detailed'][] = FileUploadTypes::SERVER;
$_REQUEST['product_add_additional_image_data'][] = [
'position' => $counter,
'pair_id' => 0,
'type' => ImagePairTypes::ADDITIONAL,
'object_id' => 0,
'image_alt' => '',
'detailed_alt' => '',
];
}
$counter++;
}
}

public function eximPages(array $page_ids, $lang_code = DEFAULT_LANGUAGE)
{
$result = new OperationResult(false);

$pages_repo = \Tygh::$app['addons.ab__ecw_comparison_pages.repository'];
list($pages) = $pages_repo->find([
'comparison_page_id' => $page_ids,
'get_seo_name' => false,
], $lang_code);
$images = [];
foreach ($pages as &$page) {
if (!empty($page['icon'])) {
$images['pages_images'][$page['page_id']] = [$page['icon']['icon']['absolute_path']];
unset($page['icon']);
}
$this->copyImages($this->export_path, $images);
$page['products_info'] = $this->eximProducts($page['product_ids'], $lang_code);
unset($page['product_ids']);
unset($page['page_id']);
}
fn_put_contents("{$this->export_path}/exim.json", json_encode($pages, JSON_PRETTY_PRINT));
fn_rm($this->export_path . '.zip');
$this->archiver->compress($this->export_path . '.zip', [$this->export_path]);
fn_rm($this->export_path, true);
return $result;
}

private function eximProducts($product_ids, $lang_code = DEFAULT_LANGUAGE)
{
if (!is_string($product_ids)) {
die('Invalid type of params');
}
$exim = [];
$allowed_product_params = [
'product',
'product_type',
'parent_product_id',
'product_code',
'status',
'company_id',
'list_price',
'amount',
'weight',
'length',
'width',
'height',
'shipping_freight',
'low_avail_limit',
'timestamp',
'updated_timestamp',
'is_edp',
'edp_shipping',
'unlimited_download',
'tracking',
'free_shipping',
'zero_price_action',
'is_pbp',
'is_op',
'is_oper',
'is_returnable',
'return_period',
'avail_since',
'out_of_stock_actions',
'localization',
'min_qty',
'max_qty',
'qty_step',
'list_qty_count',
'age_verification',
'age_limit',
'options_type',
'exceptions_type',
'details_layout',
'shipping_params',
'facebook_obj_type',
'buy_now_url',
'price',
'meta_keywords',
'meta_description',
'search_words',
'position',
'average_rating',
'discussion_type',
'main_category',
'options_type_raw',
'exceptions_type_raw',
'tracking_raw',
'zero_price_action_raw',
'discounts',
'product_options',
'has_options',
'product_features',
];
$fname = md5($product_ids) . "_{$lang_code}";
$path = $this->export_path . '/' . $fname;
fn_rm($path);
fn_mkdir($path);
$params = [
'pid' => $product_ids,
];
list($products) = fn_get_products($params);
fn_gather_additional_products_data($products, [
'get_options' => false,
'get_discounts' => false,
'get_detailed' => true,
'get_additional' => true,
'get_features' => true,
'get_taxed_prices' => false,
'features_display_on' => \Tygh\Enum\ProductFeaturesDisplayOn::ALL,
]);
$product_features = [];
$images = [];
foreach ($products as &$product) {
if (isset($product['product_features'])) {
foreach ($product['product_features'] as $feature_id => $product_feature) {
if (!isset($product_features[$feature_id]['variants'])) {
$product_features[$feature_id] = $product_feature;
}
$product_features[$feature_id]['variants'] = empty($product_features[$feature_id]['variants']) ? [] : $product_features[$feature_id]['variants'] + $product_feature['variants'];
}
}
if (isset($product['main_pair'])) {
$images['product_images'][$product['product_id']] = [$product['main_pair']['detailed']['absolute_path']];
if (isset($product['image_pairs'])) {
foreach ($product['image_pairs'] as $image_pair) {
$images['product_images'][$product['product_id']][] = $image_pair['detailed']['absolute_path'];
}
}
}
$this->copyImages($path, $images);
$temp_product = [];
foreach ($allowed_product_params as $allowed_param) {
if (isset($product[$allowed_param])) {
$temp_product[$allowed_param] = $product[$allowed_param];
}
}
$product = $temp_product;
}
$exim['products'] = $products;
$exim['product_features'] = $product_features;
$exim['categories'] = db_get_hash_single_array('SELECT cd.category_id, category FROM ?:category_descriptions AS cd INNER JOIN ?:products_categories AS pc on cd.category_id = pc.category_id WHERE lang_code = ?s AND pc.product_id IN (?p)', ['category_id', 'category'], DESCR_SL, $product_ids);
fn_put_contents("{$path}/exim.json", json_encode($exim, JSON_PRETTY_PRINT));
return $fname;
}

private function copyImages($path, array $images)
{
foreach ($images as $object_type => $objects) {
$object_path = $path . '/' . $object_type;
fn_mkdir($object_path);
$c = 1;
if (is_array($objects)) {
foreach ($objects as $object_id => $object_locations) {
$c = 1;
$multi_object_path = $object_path . '/' . $object_id;
fn_mkdir($multi_object_path);
foreach ((array) $object_locations as $object_location) {
$this->copyImage($object_location, $multi_object_path, $c);
$c++;
}
}
} else {
$this->copyImage($objects, $object_path, $c);
}
}
}

private function copyImage($from, $to, $name)
{
$d_ext = pathinfo($from, PATHINFO_EXTENSION);
fn_copy($from, $to . '/' . $name . '.' . $d_ext);
}
public function getExportPath()
{
return $this->export_path;
}
}
