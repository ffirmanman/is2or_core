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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
use Tygh\ABSF;
use Tygh\Registry;
use Tygh\Enum\ProductFeatures;
if ($mode == 'view' && !defined('AJAX_REQUEST')) {
$amount_breadcrumbs_in_product = intval(Registry::get('addons.ab__seo_filters.amount_breadcrumbs_in_product'));
if (!empty($_REQUEST['product_id']) && $amount_breadcrumbs_in_product > 0) {
$product = Registry::get('view')->getTemplateVars('product');
$features = fn_ab__sf_get_features_list_from_product_data($product['product_features']);
if (!empty($features)) {
$lang_code = !empty($product['lang_code']) ? $product['lang_code'] : Registry::get('settings.Appearance.frontend_default_language');
$cat_name = fn_get_category_name($product['main_category'], $lang_code);
list($seo_names, $filters) = fn_ab__sf_get_seo_names_from_features($product['main_category'], $features, $lang_code);
if (!empty($seo_names)) {
$seo_name_features = array_keys($seo_names);
$bc = Registry::get('view')->getTemplateVars('breadcrumbs');
$last_element = $bc[count($bc) - 1];
unset($bc[count($bc) - 1]);
$count = 0;
foreach ($filters as $feature_id => $filter) {
if (!empty($filter['features_hashs'])) {
foreach ($filter['features_hashs'] as $variant_id => $filter_features_hash) {
if ($count >= $amount_breadcrumbs_in_product) {
break;
}
if (in_array($filter_features_hash, $seo_name_features) && $seo_names[$filter_features_hash]['show_in_breadcrumbs'] == 'Y') {
$f = $features[$feature_id];
$variant = '';
if ($f['feature_type'] == ProductFeatures::SINGLE_CHECKBOX && $f['value'] == 'Y') {
$variant = $f['description'];
} else {
$variant = strlen(trim($f['variants'][$variant_id]['ab__sf_seo_variant']))
? trim($f['variants'][$variant_id]['ab__sf_seo_variant'])
: $f['variants'][$variant_id]['variant'];
}
$variant = (!empty($f['prefix']) ? $f['prefix'] : '') . $variant . (!empty($f['suffix']) ? $f['suffix'] : '');
$title = strlen($seo_names[$filter_features_hash]['product_breadcrumb'])
? ABSF::str_replace($seo_names[$filter_features_hash]['product_breadcrumb'], $cat_name, $filter['filter'], $variant)
: $variant;
$bc[] = ['title' => $title,
'link' => "categories.view&category_id={$product['main_category']}&features_hash={$filter_features_hash}",
'nofollow' => false,
];
$count++;
}
}
}
}
$bc[] = $last_element;
Registry::get('view')->assign('breadcrumbs', $bc);
}
}
}
}
