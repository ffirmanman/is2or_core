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
use Tygh\Languages\Languages;
use Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes;
use Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes;
use Tygh\Enum\SiteArea;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if (AREA == SiteArea::ADMIN_PANEL) {
foreach (glob(Registry::get('config.dir.addons') . 'ab__images_seo/functions/ab__is.*.php') as $functions) {
require_once $functions;
}
}
function fn_ab__is_install()
{
fn_ab__is_migrate_from_v300_to_v301();
fn_ab__is_add_default_placeholders();
}

function fn_ab__is_get_image_count($type, $object_id, $image_id)
{
if (empty($image_id)) {
return '';
}
static $data;
$ind = 0;
if (!isset($data[$type][$object_id])) {
$data[$type][$object_id][] = $image_id;
} else {
$search_ind = array_search($image_id, $data[$type][$object_id]);
if ($search_ind === false) {
$data[$type][$object_id][] = $image_id;
$search_ind = array_search($image_id, $data[$type][$object_id]);
}
$ind = $search_ind;
}
return ++$ind;
}

function fn_ab__is_update_object_attribute($attribute_data, $object_type = ObjectTypes::PRODUCT, $attribute_type = AttributeTypes::TITLE, $storefront_id = 0, $lang_code = DESCR_SL)
{
$is_id = $attribute_data['is_id'];

fn_set_hook('ab__is_update_object_attribute_pre', $attribute_data, $is_id, $storefront_id, $lang_code, $exists);
$attribute_data['attribute_type'] = in_array($attribute_type, AttributeTypes::getAll()) ? $attribute_type : AttributeTypes::TITLE;
$attribute_data['object_type'] = in_array($object_type, ObjectTypes::getAll()) ? $object_type : ObjectTypes::PRODUCT;
$attribute_data['storefront_id'] = $storefront_id;
$attribute_data['text'] = trim($attribute_data['text']);
if ($is_id == 0) {
$attribute_data['is_id'] = $is_id = db_query('INSERT INTO ?:ab__is_attributes ?e', $attribute_data);
foreach (Languages::getAll() as $attribute_data['lang_code'] => $v) {
db_query('INSERT INTO ?:ab__is_attribute_descriptions ?e', $attribute_data);
}
} else {
db_query('UPDATE ?:ab__is_attributes SET ?u WHERE is_id = ?i AND storefront_id = ?i', $attribute_data, $is_id, $storefront_id);
db_query('UPDATE ?:ab__is_attribute_descriptions SET ?u WHERE is_id = ?i AND lang_code = ?s', $attribute_data, $is_id, $lang_code);
}
return $is_id;
}

function fn_ab__is_get_object_attributes($params = [], $area = AREA)
{
static $attributes = [];
$default_params = [
'lang_code' => DESCR_SL,
'object_type' => ObjectTypes::getAll(),
];
$params = array_merge($default_params, $params);
if (empty($attributes[$params['lang_code']])) {
$join = db_quote(' LEFT JOIN ?:ab__is_attribute_descriptions as is_descriptions ON ?:ab__is_attributes.is_id = is_descriptions.is_id AND lang_code = ?s', $params['lang_code']);
$where = [
'object_type' => $params['object_type'],
'storefront_id' => Tygh::$app['storefront']->storefront_id,
];
$fields = [
'?:ab__is_attributes.*',
'is_descriptions.*',
];
if ($area == SiteArea::STOREFRONT) {
$fields[] = 'TRIM(CONCAT(is_descriptions.prefix, is_descriptions.text, is_descriptions.suffix)) AS value';
}
$attributes[$params['lang_code']] = db_get_hash_multi_array('SELECT ?p FROM ?:ab__is_attributes ?p WHERE ?w', ['object_type', 'attribute_type'], implode(', ', $fields), $join, $where);
}
return $attributes[$params['lang_code']];
}

function fn_ab__is_generate_text($object_type = ObjectTypes::PRODUCT, $attribute_type = AttributeTypes::TITLE, $text_placeholder = '', $image_number = 1, $product_variation_features = null, $lang_code = DESCR_SL)
{
$attributes = fn_ab__is_get_object_attributes(['lang_code' => $lang_code]);
if ($product_variation_features !== null) {
foreach ($product_variation_features as $feature) {
$text_placeholder .= ", {$feature['description']}: {$feature['variant']}";
}
}
$replaces = [
'[image_num]' => ($image_number > 1 && $object_type == ObjectTypes::PRODUCT) ? str_replace('[n]', $image_number, $attributes[$object_type][AttributeTypes::IMAGE_NUMBER]['value']) : '',
'[text]' => $text_placeholder,
];
return empty($attributes[$object_type][$attribute_type]['value'])
? ''
: strip_tags(str_replace(array_keys($replaces), $replaces, $attributes[$object_type][$attribute_type]['value']));
}
function fn_ab__images_seo_get_image_pairs_post($object_ids, $object_type, $pair_type, $get_icon, $get_detailed, $lang_code, $pairs_data, $detailed_pairs, $icon_pairs)
{
if (AREA == SiteArea::STOREFRONT) {
static $init_cache = false;
$cache_name = 'ab__is_object_types';
$image_object_types = [];
if (!$init_cache) {
$init_cache = true;
Registry::registerCache($cache_name, [], Registry::cacheLevel('static'), true);
} else {
$image_object_types = Registry::get($cache_name);
}
foreach ($icon_pairs as $pair) {
$image_object_types[$pair['pair_id']] = [
'object_id' => empty($pair['object_id']) ? 0 : $pair['object_id'],
'object_type' => empty($object_type) ? '' : $object_type,
];
}
Registry::set($cache_name, $image_object_types);
}
}
function fn_ab__is_get_image_object_type($pair_id)
{
$object_type = '';
if (!empty($pair_id)) {
$cache_name = 'ab__is_object_types';
$icon_objects = Registry::get($cache_name);
$object_type = $icon_objects[$pair_id];
}
return $object_type;
}
function fn_ab__is_get_product_option_variant_text($product, $option_variant_id)
{
static $all_option_variants = [];
if (empty($all_option_variants)) {
foreach ($product['product_options'] as $product_option) {
foreach ($product_option['variants'] as $id => $option_variant) {
$all_option_variants[$id] = $option_variant;
}
}
}
$option_name = $product['product_options'][$all_option_variants[$option_variant_id]['option_id']]['option_name'];
$option_value = $all_option_variants[$option_variant_id]['variant_name'];
return $product['product'] . ', ' . $option_name . ': ' . $option_value;
}
