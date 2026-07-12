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
use Tygh\Registry;
use Tygh\Enum\YesNo;
use Tygh\Addons\Ab_addonsManager\DemoData;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\ProductFeatures;
use Tygh\Enum\Addons\Discussion\DiscussionTypes;
use Tygh\Enum\Addons\Discussion\DiscussionObjectTypes;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
foreach (glob(Registry::get('config.dir.addons') . 'ab__extended_comparison_wishlist/functions/' . 'fn_ab__ecw*.php') as $functions) {
require_once $functions;
}

function fn_ab__extended_comparison_wishlist_set_notification_pre(&$type, &$title, &$message, &$message_state, $extra, $init_message)
{
if (defined('CART_LANGUAGE') && $title == __('product_added_to_cl')) {

$service = Tygh::$app['addons.ab__extended_comparison_wishlist.service'];
$settings = $service->getSettings();
if ($settings['show_popup_on_adding'] === YesNo::NO) {
$type = NotificationSeverity::NOTICE;
$title = __('notice');
$message = __('product_added_to_cl');
$message_state = '';
}
}
}

function fn_ab__extended_comparison_wishlist_get_comparison_lists()
{

$service = Tygh::$app['addons.ab__extended_comparison_wishlist.service'];
list($comparison_lists) = $service->groupComparisonLists();
return $comparison_lists;
}

function fn_ab__ecw_get_main_category_grouper_limiter()
{
return function ($category_id) {
if (!empty($_REQUEST['category_id'])) {
return $category_id === $_REQUEST['category_id'];
}
return true;
};
}

function fn_ab__ecw_get_products_features_list_to_display(array $products, $lang_code = CART_LANGUAGE)
{
$features = [
0 => [],
];
$load_group_names = $load_full_descriptions = [];
static $full_descriptions = [];
static $group_names = [];
foreach ($products as $product_id => $product_data) {
if (!empty($product_data['product_features'])) {
foreach ($product_data['product_features'] as $k => &$v) {
if (!empty($v['variants'])) {
foreach ($v['variants'] as $key => $variant) {
$product_data['product_features'][$k]['variants'][$key]['selected'] = $variant['variant_id'];
}
}
if ($v['display_on_product'] === YesNo::NO && $v['display_on_catalog'] == YesNo::NO && $v['display_on_header'] == YesNo::NO) {
continue;
}
if ($v['feature_type'] == ProductFeatures::GROUP && empty($v['subfeatures'])) {
continue;
}
$_features = ($v['feature_type'] == ProductFeatures::GROUP) ? $v['subfeatures'] : [$k => $v];
$group_id = ($v['feature_type'] == ProductFeatures::GROUP) ? $k : $v['parent_id'];
foreach ($_features as $_k => $_v) {
if (empty($features[$group_id]['features'][$_k])) {
$features[$group_id]['features'][$_k]['description'] = $_v['description'];
}
}
if ($features[$group_id]['description'] && isset($group_names[$group_id])) {
$features[$group_id]['description'] = $group_names[$group_id];
} elseif ($group_id != 0) {
$load_group_names[$group_id] = null;
}
if (isset($full_descriptions[$group_id])) {
$features[$group_id]['full_description'] = $full_descriptions[$group_id];
} elseif ($group_id != 0) {
$load_full_descriptions[$group_id] = null;
}
if (empty($v['full_description']) && isset($full_descriptions[$k])) {
$v['full_description'] = $full_descriptions[$k];
} else {
$load_full_descriptions[$k] = null;
}
}
}
}
$load_ids = array_keys(fn_array_merge($load_full_descriptions, $load_group_names));
if (!empty($load_ids)) {
$features_additional_info = fn_ab__ecw_load_features_fields([
'fields' => ['description', 'full_description'],
'feature_ids' => $load_ids,
], $lang_code);
foreach ($features as $group_id => &$group) {
if (!empty($group)) {
if ($group_id != 0) {
$group['description'] = $group_names[$group_id] = $features_additional_info[$group_id]['description'];
$group['full_description'] = $full_descriptions[$group_id] = $features_additional_info[$group_id]['full_description'];
}
foreach ($group['features'] as $feature_id => &$feature) {
$feature['full_description'] = $full_descriptions[$feature_id] = $features_additional_info[$feature_id]['full_description'];
}
}
}
}
return $features;
}

function fn_ab__ecw_load_features_fields(array $params, $lang_code = CART_LANGUAGE)
{
return $values = db_get_hash_array('SELECT feature_id, ?p
FROM ?:product_features_descriptions
WHERE feature_id IN (?n)
AND lang_code = ?s', 'feature_id', implode(', ', $params['fields']), $params['feature_ids'], $lang_code);
}

function fn_ab__extended_comparison_wishlist_change_breadcrumb()
{
$breadcrumbs = Tygh::$app['view']->getTemplateVars('breadcrumbs');
$compare_breadcrumb_key = null;
foreach ($breadcrumbs as $key => $breadcrumb) {
if ($breadcrumb['title'] === __('feature_comparison')) {
$compare_breadcrumb_key = $key;
}
}
$breadcrumbs[$compare_breadcrumb_key]['link'] = fn_url('product_features.compare');
Tygh::$app['view']->assign('breadcrumbs', $breadcrumbs);
}

function fn_ab__ecw_gather_additional_data(array $items)
{
if (Registry::get('addons.discussion.status') == \Tygh\Enum\ObjectStatuses::ACTIVE) {
foreach ($items as &$product) {
$product['discussion'] = fn_get_discussion($product['product_id'], DiscussionObjectTypes::PRODUCT, true);
$product['discussion_type'] = empty($product['discussion']) ? DiscussionTypes::TYPE_DISABLED : $product['discussion']['type'];
}
}
return $items;
}

function fn_ab__ecw_get_pages($value, array $block, array $block_scheme)
{

$repository = Tygh::$app['addons.ab__ecw_comparison_pages.repository'];
$params = $_REQUEST;
if ($block['properties']['template'] == 'addons/ab__extended_comparison_wishlist/blocks/ab__ecw_comparison_pages/ab__ecw_pages_extended.tpl') {
$params['get_icons'] = true;
}
$params['items_per_page'] = $block['properties']['items_per_page'];
$params['get_variation_ids'] = true;
list($pages) = $repository->find($params);
return $pages;
}

function fn_ab__ecw_get_product_name($product_id, $lang_code = CART_LANGUAGE, $as_array = false)
{
return @fn_get_product_name($product_id, $lang_code, $as_array);
}

function fn_ab__ecw_install_comparison_pages()
{

$demodata_service = Tygh::$app['addons.ab__ecw_comparison_pages.demodata_service'];

$demodata_download_result = DemoData::getFile([
'file' => 'demodata.zip',
'addon' => 'ab__extended_comparison_wishlist',
]);
if ($demodata_download_result->isSuccess()) {
$data = $demodata_download_result->getData();
$result = $demodata_service->importPages('', $data['path'] . '/');
if ($result->isSuccess()) {
if (defined('AJAX_REQUEST')) {
$result->showNotifications();
} else {
return implode('<br/>', $result->getMessages());
}
}
} else {
$demodata_download_result->showNotifications();
}
return '';
}
