<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
use Tygh\Addons\Ab_seoBrands\SmartyEngine\Extensions\AbSeoBrands;
use Tygh\Enum\ProductFeatures;
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if (AREA == 'A') {
foreach (glob(Registry::get('config.dir.addons') . '/ab__seo_brands/ab__functions/fn.*.php') as $functions) {
require_once $functions;
}
}

function fn_ab__seo_brands_get_product_feature_variants(&$fields, &$join, &$condition, $group_by, $sorting, $lang_code, &$limit, &$params)
{
if (!empty($params['dispatch']) && $params['dispatch'] === 'ab__sb_feature_variants.feature_variants_picker') {
if (!empty($params['feature_name'])) {
$condition .= db_quote(' AND pfd.description LIKE ?l', "%{$params['feature_name']}%");
}
if (!empty($params['variant_name'])) {
$condition .= db_quote(' AND ?:product_feature_variant_descriptions.variant LIKE ?l', "%{$params['variant_name']}%");
}
$fields[] = 'pfd.description';
$join .= db_quote(' INNER JOIN ?:product_features_descriptions AS pfd ON pfd.feature_id = ?:product_feature_variants.feature_id AND pfd.lang_code = ?s', $lang_code);
$condition = str_replace(' AND ?:product_feature_variants.feature_id IN (0)', '', $condition);
$join .= ' INNER JOIN ?:product_features AS pf ON pf.feature_id = ?:product_feature_variants.feature_id';
$condition .= db_quote(' AND pf.feature_type = ?s', ProductFeatures::EXTENDED);
$params['total_items'] = db_get_field('SELECT COUNT(*) FROM ?:product_feature_variants ?p WHERE 1 ?p', $join, $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
}

function fn_ab__sb_get_variant_name($variant_id, $lang_code = CART_LANGUAGE)
{
if (!empty($variant_id)) {
if (is_array($variant_id)) {
return db_get_hash_single_array('SELECT variant_id, variant FROM ?:product_feature_variant_descriptions WHERE variant_id IN (?n) AND lang_code = ?s', ['variant_id', 'variant'], $variant_id, $lang_code);
}
return db_get_field('SELECT variant FROM ?:product_feature_variant_descriptions WHERE variant_id = ?i AND lang_code = ?s', $variant_id, $lang_code);
}
return false;
}

function fn_ab__seo_brands_update_product_filter_post($filter_data, $filter_id, $lang_code, $create)
{
if (!empty($filter_data['feature_type']) && $filter_data['feature_type'] === ProductFeatures::EXTENDED) {
if (Registry::get('addons.seo.status') == 'A') {
fn_seo_update_object($filter_data, $filter_id, 'f', $lang_code);
}
}
}

function fn_ab__seo_brands_get_product_filters_post(&$filters, $params, $lang_code)
{
if (AREA === 'C') {
return;
}
foreach ($filters as &$filter) {
if (!empty($filter['feature_type']) && $filter['feature_type'] === ProductFeatures::EXTENDED) {
if (Registry::get('addons.seo.status') == 'A') {
$filter['seo_name'] = fn_seo_get_name('f', $filter['filter_id'], '', null, DESCR_SL);
}
}
}
}

function fn_ab__seo_brands_get_product_filters_before_select(&$fields, $join, $condition, $group_by, $sorting, $limit, $params, $lang_code)
{
$fields .= ', ?:product_filters.ab__sb_variants_template';
$fields .= ', ?:product_filter_descriptions.ab__sb_h1';
$fields .= ', ?:product_filter_descriptions.ab__sb_breadcrumb';
$fields .= ', ?:product_filter_descriptions.ab__sb_description';
$fields .= ', ?:product_filter_descriptions.ab__sb_page_title';
$fields .= ', ?:product_filter_descriptions.ab__sb_meta_description';
$fields .= ', ?:product_filter_descriptions.ab__sb_meta_keywords';
}

function fn_ab__seo_brands_get_products_pre(&$params, $items_per_page, $lang_code)
{
if (!empty($params['block_data']) && !empty($params['ab__sb_variant_id'])) {
$params['variant_id'] = $params['ab__sb_variant_id'];
}
}

function fn_ab__seo_brands_live_editor_update_object_pre(&$params, $updated)
{
if (!empty($params['name']) && strpos($params['name'], ':')) {
list($object, $field, $id) = explode(':', $params['name'], 3);
if ($object === 'filter' && !empty($id)) {
list($filters) = fn_get_product_filters(['filter_id' => $id]);
if (!empty($filters)) {
$params['filter_type'] = 'FF-' . reset($filters)['feature_id'];
}
}
}
}

function fn_ab__seo_brands_get_location_post(&$location, $lang_code)
{
if (!empty($_REQUEST['dispatch']) && $_REQUEST['dispatch'] === 'product_filters.update' && !empty($_REQUEST['filter_id'])) {
$filter = Tygh::$app['view']->getTemplateVars('filter');
if (!empty($filter['feature_type']) && $filter['feature_type'] !== ProductFeatures::EXTENDED) {
$location = [];
}
}
}

function fn_ab__seo_brands_ab__as_other_objects(&$objects)
{
if (Registry::get('addons.ab__seo_brands.ab__as_add_to_sitemap') == 'Y') {
$join = db_quote(' INNER JOIN ?:product_features ON ?:product_filters.feature_id = ?:product_features.feature_id AND ?:product_features.feature_type = ?s', ProductFeatures::EXTENDED);
$condition = db_quote('?:product_filters.status = ?s ?p', 'A', fn_get_company_condition('?:product_features.company_id'));
fn_set_hook('ab__sb_get_filters_for_sitemap', $join, $condition);
$filters_ids = db_get_fields('SELECT ?:product_filters.filter_id FROM ?:product_filters ?p WHERE ?p', $join, $condition);
if (!empty($filters_ids)) {
$objects['filters'] = $filters_ids;
}
}
}

function fn_ab__seo_brands_sitemap_link_object(&$link, $object, $value)
{
if ($object == 'filters') {
$link = "product_features.view_all?filter_id={$value}";
}
}

function fn_ab__sb_add_hook_filter($content, \Smarty_Internal_Template $template)
{
if (strpos($template->template_resource, 'views/product_filters/manage.tpl') !== false) {
$content = str_replace(
'href="product_filters.update?filter_id=`$filter.filter_id`&return_url=$r_url&in_popup"'
, 'href="product_filters.update?filter_id=`$filter.filter_id`&return_url=$r_url" no_popup=true'
, $content
);
}
if (strpos($template->template_resource, 'views/product_filters/update.tpl') !== false) {
$content = preg_replace('/<ul class="nav nav-tabs">(.+)<\/ul>/sU', '<ul class="nav nav-tabs">'.PHP_EOL.'{hook name="product_filters:ab__sf_tabs"}$1{/hook}'.PHP_EOL.'</ul>', $content);
$content = preg_replace('/(<div class="hidden" id="content_tab_categories)/', '{hook name="product_filters:ab__sf_tabs_content"}{/hook}'.PHP_EOL.'$1', $content);
$content = preg_replace('/{capture name="buttons"}(.+){\/capture}/sU', '{capture name="buttons"}'.PHP_EOL.'{hook name="product_filters:ab__sf_buttons"}$1{/hook}'.PHP_EOL.'{/capture}', $content);
}
return $content;
}

function fn_ab__seo_brands_init_templater_post(&$view){
if(AREA === 'A'){
if(version_compare(PRODUCT_VERSION, '4.19', '>=')){
$view->addExtension(new AbSeoBrands());
}else {
$view->registerFilter('pre', 'fn_ab__sb_add_hook_filter');
}
}
}
