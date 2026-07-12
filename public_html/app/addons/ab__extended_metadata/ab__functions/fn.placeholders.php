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
use Tygh\Enum\ProductFeatures;
use Tygh\Registry;

function fn_ab__emd_get_object_field_value($object_name, $field)
{
$object = Tygh::$app['view']->getTemplateVars($object_name);
return empty($object[$field]) ? '' : $object[$field];
}

function fn_ab__emd_get_breadcrumbs_path($object, $use_reverse, $case = 'regular')
{
$breadcrumbs = Tygh::$app['view']->getTemplateVars('breadcrumbs');
$glue = __('ab__emd.' . $object . '_path_delimiter');
$items_count = count($breadcrumbs);
if (!empty($breadcrumbs) && $items_count > 1) {
unset($breadcrumbs[0], $breadcrumbs[$items_count - 1]);
$path = [];
foreach ($breadcrumbs as $breadcrumb) {
if ($case === 'regular') {
$path[] = trim($breadcrumb['title']);
} elseif ($case === 'uppercase') {
$path[] = trim(mb_convert_case($breadcrumb['title'], MB_CASE_UPPER));
} elseif ($case === 'lowercase') {
$path[] = trim(mb_convert_case($breadcrumb['title'], MB_CASE_LOWER));
} elseif ($case === 'ucfirst') {
$path[] = trim(mb_convert_case(fn_substr($breadcrumb['title'], 0, 1), MB_CASE_UPPER) . mb_convert_case(fn_substr($breadcrumb['title'], 1), MB_CASE_LOWER));
} elseif ($case === 'first_lower') {
$path[] = trim(mb_convert_case(fn_substr($breadcrumb['title'], 0, 1), MB_CASE_LOWER) . fn_substr($breadcrumb['title'], 1));
}
}
}
if (empty($path)) {
return '';
}
if ($use_reverse && count($path) > 1) {
$path = array_reverse($path);
}
return implode($glue, $path);
}

function fn_ab__emd_get_product_brand($product_id)
{
$brand_id = Registry::get('addons.ab__extended_metadata.brand_id');
if (empty($brand_id)) {
return '';
}
return db_get_field('SELECT variant_descriptions.variant FROM ?:product_features_values AS v
LEFT JOIN ?:product_feature_variant_descriptions AS variant_descriptions ON variant_descriptions.variant_id = v.variant_id
WHERE v.product_id = ?i AND v.feature_id = ?i', $product_id, $brand_id);
}

function fn_ab__emd_get_storefront_name()
{
return Tygh::$app['storefront']->name;
}

function fn_ab__emd_get_product_features()
{
$features = [];
$product = Tygh::$app['view']->getTemplateVars('product');
if (!empty($product['header_features'])) {
$features = fn_ab__emd_get_features($product['header_features']);
}
if (!empty($product['product_features'])) {
$features = empty($features) ? fn_ab__emd_get_features($product['product_features']) : array_replace($features, fn_ab__emd_get_features($product['product_features']));
}
return $features;
}

function fn_ab__emd_get_features($features)
{
$return = [];
foreach ($features as $feature) {
if ($feature['feature_type'] == ProductFeatures::GROUP && !empty($feature['subfeatures'])) {
$return = array_replace($return, fn_ab__emd_get_features($feature['subfeatures']));
} elseif ($feature['feature_type'] == ProductFeatures::SINGLE_CHECKBOX) {
if ($feature['value'] == 'Y') {
$return[$feature['feature_id']]['name'] = $feature['description'];
$return[$feature['feature_id']]['value'] = $feature['value'];
}
} elseif ($feature['feature_type'] == ProductFeatures::DATE) {
$return[$feature['feature_id']]['name'] = $feature['description'];
$return[$feature['feature_id']]['value'] = fn_date_format($feature['value_int'], Registry::get('settings.Appearance.date_format'));
} elseif ($feature['feature_type'] == ProductFeatures::MULTIPLE_CHECKBOX) {
$values = [];
foreach ($feature['variants'] as $variant) {
if (!empty($variant['selected'])) {
$values[] = $variant['variant'];
}
}
$return[$feature['feature_id']]['name'] = $feature['description'];
$return[$feature['feature_id']]['value'] = implode(__('ab__emd.features_variants_delimiter'), $values);
} elseif (in_array($feature['feature_type'], [ProductFeatures::TEXT_SELECTBOX, ProductFeatures::EXTENDED, ProductFeatures::NUMBER_SELECTBOX])) {
$return[$feature['feature_id']]['name'] = $feature['description'];
$return[$feature['feature_id']]['value'] = empty($feature['variant']) ? '' : $feature['variant'];
foreach ($feature['variants'] as $variant) {
if (!empty($variant['selected'])) {
$return[$feature['feature_id']]['value'] = $variant['variant'];
}
}
} elseif ($feature['feature_type'] == ProductFeatures::NUMBER_FIELD) {
$return[$feature['feature_id']]['name'] = $feature['description'];
$feature['value_int'] = floatval($feature['value_int']);
$return[$feature['feature_id']]['value'] = empty($feature['value_int']) ? '-' : $feature['value_int'];
} else {
$return[$feature['feature_id']]['name'] = $feature['description'];
$return[$feature['feature_id']]['value'] = empty($feature['value']) ? '-' : $feature['value'];
}
if (!empty($feature['yml2_variants_unit'])) {
$return[$feature['feature_id']]['value'] .= ' ' .$feature['yml2_variants_unit'];
}
}
return $return;
}

function fn_ab__emd_get_currency($no_html = false)
{
$currency = Registry::get('currencies.' . CART_SECONDARY_CURRENCY);
if ($no_html) {
$currency['symbol'] = strip_tags($currency['symbol']);
}
return $currency['symbol'];
}
