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
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Settings;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if (AREA == 'A') {
foreach (glob(Registry::get('config.dir.addons') . '/ab__seo_for_tags/ab__functions/fn.*.php') as $functions) {
require_once $functions;
}
}

function fn_ab__seo_for_tags_get_tags($params, $items_per_page, &$fields, &$joins, &$condition, $group, $sorting)
{
if (!empty($params['ab__sft_get_seo_data'])) {
$fields[] = '?:ab__tag_descriptions.h1';
$fields[] = '?:ab__tag_descriptions.description';
$fields[] = '?:ab__tag_descriptions.page_title';
$fields[] = '?:ab__tag_descriptions.meta_description';
$fields[] = '?:ab__tag_descriptions.meta_keywords';
$fields[] = '?:tags.ab__sft_conditions';
$fields[] = '?:tags.ab__sft_generate_by_cron';
$joins[] = db_quote('LEFT JOIN ?:ab__tag_descriptions ON ?:tags.tag_id = ?:ab__tag_descriptions.tag_id AND ?:ab__tag_descriptions.lang_code = ?s', DESCR_SL);
}
if (!empty($params['tag_id'])) {
$condition .= db_quote(' AND ?:tags.tag_id IN (?n)', (array) $params['tag_id']);
}
if (!empty($params['ab__sft_generate_by_cron'])) {
$condition .= db_quote(' AND ?:tags.ab__sft_generate_by_cron = ?s', $params['ab__sft_generate_by_cron']);
}
}

function fn_ab__seo_for_tags_get_tags_post($params, $items_per_page, &$tags)
{
if (!empty($params['ab__sft_get_seo_data'])) {
$get_seo_name = Registry::get('addons.seo.status') == 'A';
foreach ($tags as $key => $tag_data) {

$get_seo_name && ($tags[$key]['seo_name'] = fn_seo_get_name('t', $tag_data['tag_id'], '', null, DESCR_SL));

$tags[$key]['ab__sft_conditions'] = empty($tag_data['ab__sft_conditions']) ? [] : unserialize($tag_data['ab__sft_conditions']);
}
}
}
function fn_ab__seo_for_tags_delete_tags_post($tag_ids)
{
db_query('DELETE FROM ?:ab__tag_descriptions WHERE tag_id IN (?n)', $tag_ids);
if (Registry::get('addons.seo.status') == 'A') {
db_query('DELETE FROM ?:seo_names WHERE object_id IN (?n) AND type = ?s AND dispatch = ?s ?p', $tag_ids, 't', '', fn_get_seo_company_condition('?:seo_names.company_id'));
}
}
function fn_ab__seo_for_tags_delete_tags_by_params_post($params, $tag_ids, $deleted_tag_ids)
{
if (!empty($deleted_tag_ids)) {
db_query('DELETE FROM ?:ab__tag_descriptions WHERE tag_id IN (?n)', $deleted_tag_ids);
if (Registry::get('addons.seo.status') == 'A') {
db_query('DELETE FROM ?:seo_names WHERE object_id IN (?n) AND type = ?s AND dispatch = ?s ?p', $deleted_tag_ids, 't', '', fn_get_seo_company_condition('?:seo_names.company_id'));
}
}
}
function fn_ab__seo_for_tags_update_tags_post($tags_data, $for_all_companies, $tag_ids)
{
if (!empty($tag_ids)) {
db_query('DELETE t FROM ?:ab__tag_descriptions t LEFT JOIN ?:tag_links tl ON tl.tag_id = t.tag_id WHERE t.tag_id IN (?n) AND tl.tag_id IS NULL', $tag_ids);
if (Registry::get('addons.seo.status') == 'A') {
db_query('DELETE FROM ?:seo_names WHERE object_id IN (?n) AND type = ?s AND dispatch = ?s ?p', $tag_ids, 't', '', fn_get_seo_company_condition('?:seo_names.company_id'));
}
}
}
function fn_ab__get_tag_data($tag_id, $lang_code = CART_LANGUAGE)
{
list($tags) = fn_get_tags([
'ab__sft_get_seo_data' => true,
'tag_id' => $tag_id,
]);
return empty($tags) ? [] : reset($tags);
}
function fn_ab__update_tag_data($tag_data, $tag_id, $lang_code = DESCR_SL)
{
$tag_data['tag_id'] = $tag_id;

if (isset($tag_data['ab__sft_conditions'])) {
if (!empty($tag_data['ab__sft_conditions']['conditions'])) {
foreach ($tag_data['ab__sft_conditions']['conditions'] as $key => $condition) {
if (empty($condition['value'])) {
unset($tag_data['ab__sft_conditions']['conditions'][$key]);
}
}
}
$tag_data['ab__sft_conditions'] = serialize($tag_data['ab__sft_conditions']);
}

db_replace_into('tags', $tag_data);
$is_exist = (bool) db_get_field('SELECT tag_id FROM ?:ab__tag_descriptions WHERE tag_id = ?i', $tag_id);
if ($is_exist) {
$tag_data['lang_code'] = $lang_code;
db_replace_into('ab__tag_descriptions', $tag_data);
} else {
foreach (Languages::getAll() as $tag_data['lang_code'] => $_d) {
db_replace_into('ab__tag_descriptions', $tag_data);
}
}
if (Registry::get('addons.seo.status') == 'A') {
fn_seo_update_object($tag_data, $tag_id, 't', $lang_code);
}
return $tag_id;
}
function fn_ab__seo_for_tags_url_pre(&$url, $area, $protocol, $lang_code, $override_area = '')
{
if ($area == 'C' && strpos($url, 'tags.view') !== false) {
preg_match('/tag=([^&]+)/', $url, $m);
if (!empty($m[1])) {
$tag_id = db_get_field('SELECT tag_id FROM ?:tags WHERE tag = ?s', urldecode($m[1]));
$url = str_replace($m[0], 'tag_id=' . $tag_id, $url);
}
}
}
function fn_ab__seo_for_tags_ab__as_other_objects(&$objects)
{
if (Registry::get('addons.ab__seo_for_tags.index_tag_pages') == 'Y') {
$join = '';
$condition = db_quote('?:tags.status = ?s', 'A');
fn_set_hook('ab__sft_get_tags_for_sitemap', $join, $condition);
$tags = db_get_fields('SELECT tag_id FROM ?:tags ?p WHERE ?p ?p', $join, $condition, fn_get_company_condition('?:tags.company_id'));
if (Registry::get('addons.ab__seo_for_tags.noindex_tag_pages_without_products') == 'Y') {
foreach ($tags as $key => $tag_id) {
if (!fn_ab__sft_has_tag_product($tag_id)) {
unset($tags[$key]);
}
}
}
if (!empty($tags)) {
$objects['tags'] = $tags;
}
$objects['custom_link'][] = 'tags.list';
}
}
function fn_ab__seo_for_tags_sitemap_link_object(&$link, $object, $value)
{
if ($object == 'tags') {
$link = "tags.view?tag_id={$value}";
}
}
function fn_ab__seo_for_tags_seo_is_indexed_page(&$indexed_dispatches)
{
$indexed_dispatches['tags.view'] = (Registry::get('addons.ab__seo_for_tags.index_tag_pages') != 'Y') ? ['noindex' => true] : [
'index' => ['tag_id'],
'noindex' => ['noindex'],
];
}
function fn_ab__sft_exim_get_links($tag_id, $object_type)
{
$object_ids = db_get_fields('SELECT object_id FROM ?:tag_links WHERE tag_id = ?i AND object_type = ?s', $tag_id, $object_type);
return implode(',', $object_ids);
}
function fn_ab__sft_exim_put_links($tag_id, $object_type, $value)
{
$object_ids = explode(',', $value);
$object_ids = array_filter($object_ids);
if (!empty($object_ids)) {
$data = [];
foreach ($object_ids as $object_id) {
$data[$object_id] = [
'tag_id' => $tag_id,
'object_id' => trim($object_id),
'object_type' => $object_type,
];
}
if (!empty($data)) {
db_replace_into('tag_links', $data, true);
}
}
db_query('DELETE FROM ?:tag_links WHERE tag_id = ?i AND object_type = ?s AND object_id NOT IN (?n)', $tag_id, $object_type, $object_ids);
return true;
}
function fn_ab__sft_has_tag_product($tag_id)
{
static $tags_with_products = null;
if ($tags_with_products === null) {
$tags_with_products = db_get_fields(
'SELECT t.tag_id FROM ?:tags AS t'
.' INNER JOIN ?:tag_links AS tl ON t.tag_id = tl.tag_id'
.' INNER JOIN ?:products AS p ON p.product_id = tl.object_id AND tl.object_type = "P" AND p.status = "A"'
.' INNER JOIN ?:products_categories AS pc ON pc.product_id = p.product_id'
.' INNER JOIN ?:categories AS c ON c.category_id = pc.category_id AND c.status = "A"'
.' WHERE t.status = "A" ?p'
, fn_get_company_condition('t.company_id'));
}
return in_array($tag_id, $tags_with_products);
}

function fn_ab__seo_for_tags_get_filters_products_count_pre(&$params, &$cache_params, $cache_tables)
{
if (!empty($params['dispatch']) && $params['dispatch'] == 'tags.view') {
$params['check_location'] = false;
$cache_params[] = 'tag_id';
}
}

function fn_ab__seo_for_tags_get_products($params, $fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
if (!empty($params['block_data']) && !empty($params['block_data']['type']) && $params['block_data']['type'] == 'product_filters' && !empty($params['get_conditions']) && !empty($params['dispatch']) && $params['dispatch'] == 'tags.view') {
$tag_id = empty($_REQUEST['tag_id']) ? 0 : $_REQUEST['tag_id'];
$join .= db_quote(' INNER JOIN ?:tag_links AS tl ON tl.object_id = products.product_id AND tl.object_type = ?s AND tl.tag_id = ?i', 'P', $tag_id);
}
}
function fn_import_check_tag_company_id($primary_object_id, $object, $pattern, $options, &$processed_data, $processing_groups, &$skip_record)
{
if (Registry::get('runtime.company_id')) {
if ($pattern['pattern_id'] == 'ab__seo_for_tags') {
$object['company_id'] = Registry::get('runtime.company_id');
}
if (!empty($primary_object_id)) {
$value = reset($primary_object_id);
$field = key($primary_object_id);
$company_id = db_get_field('SELECT company_id FROM ?:tags WHERE ' . $field . ' = ?s', $value);
if ($company_id != Registry::get('runtime.company_id')) {
$processed_data['S']++;
$skip_record = true;
}
}
}
}

function fn_ab__sft_generate_links($tag_id)
{
$tag_data = fn_ab__get_tag_data($tag_id);
$storefront = Tygh::$app['storefront'];
$result = [
'added_links' => 0,
'removed_links' => 0,
];
if (!empty($tag_data['ab__sft_conditions']['conditions'])) {
list($where, $joins) = fn_ab__sft_build_conditions_query($tag_data['ab__sft_conditions']);

if (fn_allowed_for('MULTIVENDOR')) {
if ($storefront->getCompanyIds()) {
$where .= db_quote(' AND products.company_id IN (?n)', $storefront->getCompanyIds());
}
} else {
$joins['products_categories'] = 'LEFT JOIN ?:products_categories AS ab__products_categories ON ab__products_categories.product_id = products.product_id';
$joins['categories'] = 'LEFT JOIN ?:categories ON ?:categories.category_id = ab__products_categories.category_id';
$where .= db_quote(' AND ?:categories.company_id IN (?n)', $storefront->getCompanyIds());
}

$join_string = implode(' ', $joins);

$result['removed_links'] += db_query(
'DELETE tl FROM ?:tag_links AS tl'
.' WHERE tl.tag_id = ?i AND tl.object_type = ?s AND tl.object_id NOT IN ('
.'SELECT products.product_id FROM ?:products AS products ?p WHERE ?p'
.')'
, $tag_id, 'P', $join_string, $where
);

$result['added_links'] += db_query(
'INSERT IGNORE INTO ?:tag_links (tag_id, object_type, object_id)'
.' SELECT DISTINCT ?i AS tag_id, ?s AS object_type, products.product_id AS object_id'
.' FROM ?:products AS products ?p WHERE ?p'
, $tag_id, 'P', $join_string, $where
);
}
return $result;
}
function fn_ab__sft_build_conditions_query($conditions)
{
$auth = Tygh::$app['session']['auth'];
$usergroup_ids = !empty($auth['usergroup_ids']) ? $auth['usergroup_ids'] : [];
$operators = [
'1' => [
'eq' => '=',
'neq' => '<>',
'lte' => '<=',
'gte' => '>=',
'lt' => '<',
'gt' => '>',
'in' => 'IN',
'nin' => 'NOT IN',
],
'0' => [
'eq' => '<>',
'neq' => '=',
'lte' => '>',
'gte' => '<',
'lt' => '>=',
'gt' => '<=',
'in' => 'NOT IN',
'nin' => 'IN',
],
];
$joins = [];
if (!empty($conditions['set']) && $conditions['set'] == 'all') {
$where = '1';
$and_or = 'AND';
} else {
$where = '0';
$and_or = 'OR';
}
if (!empty($conditions['conditions'])) {
foreach ($conditions['conditions'] as $condition) {
if ($condition['condition'] == 'price') {
$where .= db_quote(' ?p ab__product_prices.price ?p ?d', $and_or, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
$joins['product_prices'] = db_quote('LEFT JOIN ?:product_prices AS ab__product_prices ON ab__product_prices.product_id = products.product_id AND ab__product_prices.lower_limit = 1 AND ab__product_prices.usergroup_id IN (?n)', array_merge([USERGROUP_ALL], $usergroup_ids));
} elseif ($condition['condition'] == 'category') {
$where .= db_quote(' ?p ab__products_categories.category_id ?p (?n)', $and_or, $operators[$conditions['set_value']][$condition['operator']], explode(',', $condition['value']));
$joins['products_categories'] = 'LEFT JOIN ?:products_categories AS ab__products_categories ON ab__products_categories.product_id = products.product_id';
} elseif ($condition['condition'] == 'feature' && !in_array($condition['operator'], ['cont', 'ncont'])) {
$table_id = 'product_features_values_' . $condition['condition_element'];
$condition_query = fn_ab__sft_build_feature_condition($table_id, $operators[$conditions['set_value']][$condition['operator']], $condition['condition_element'], $condition['value']);
if (!empty($condition_query)) {
$where .= db_quote(' ?p ?p', $and_or, $condition_query);
$joins[$table_id] = db_quote("LEFT JOIN ?:product_features_values AS $table_id ON $table_id.product_id = products.product_id AND $table_id.feature_id = ?i", $condition['condition_element']);
}
} elseif ($condition['condition'] == 'amount') {
$where .= db_quote(' ?p products.amount ?p ?i', $and_or, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
} elseif ($condition['condition'] == 'popularity') {
$where .= db_quote(' ?p ab__product_popularity.total ?p ?i', $and_or, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
$joins['popularity'] = 'LEFT JOIN ?:product_popularity as ab__product_popularity ON ab__product_popularity.product_id = products.product_id';
} elseif ($condition['condition'] == 'weight') {
$where .= db_quote(' ?p products.weight ?p ?d', $and_or, $operators[$conditions['set_value']][$condition['operator']], fn_convert_weight($condition['value']));
}

fn_set_hook('ab__sft_build_conditions_query_post', $conditions, $condition, $where, $joins, $operators, $and_or);
}
}
if ($where == '1') {
$where = '0';
}
return [$where, $joins];
}

function fn_ab__sft_build_feature_condition($table_id, $operator, $feature_id, $value)
{
static $feature_types = [];
if (empty($feature_types[$feature_id])) {
$feature_types[$feature_id] = db_get_field('SELECT feature_type FROM ?:product_features WHERE feature_id = ?i', $feature_id);
}
$feature_type = $feature_types[$feature_id];
$query = false;
if (in_array($feature_type, ['E', 'S', 'M', 'N'])) {
if ($operator === 'IN') {
$query = db_quote("$table_id.variant_id IN (?p)", $value);
} elseif ($operator === 'NOT IN') {
$query = db_quote("($table_id.variant_id NOT IN (?p) OR $table_id.variant_id IS NULL)", $value);
} else {
$query = db_quote("$table_id.variant_id ?p ?i", $operator, $value);
}
} elseif (in_array($feature_type, ['C', 'T'])) {
if (in_array($operator, ['IN', 'NOT IN'])) {
$query = db_quote("$table_id.value ?p (?a)", $operator, explode(',', $value));
} else {
$query = db_quote("$table_id.value ?p ?s", $operator, $value);
}
} elseif ($feature_type == 'O') {
if (in_array($operator, ['IN', 'NOT IN'])) {
$query = db_quote("$table_id.value ?p (?a)", $operator, explode(',', $value));
} else {
$query = db_quote("$table_id.value ?p ?d", $operator, $value);
}
}
return $query;
}

function fn_ab__sft_generate_links_for_all($is_ajax = false)
{
if ($is_ajax) {
fn_set_progress('title', __('ab__sft.comet.title'));
fn_set_progress('echo', __('ab__sft.comet.init'));
}
list($tags) = fn_get_tags([
'ab__sft_get_seo_data' => true,
'ab__sft_generate_by_cron' => 'Y',
]);
if (empty($tags)) {
return false;
}
$is_ajax && fn_set_progress('parts', count($tags));
$statistics = [];
foreach ($tags as $tag_data) {
$result = fn_ab__sft_generate_links($tag_data['tag_id']);
foreach ($result as $var => $value) {
if (empty($statistics[$var])) {
$statistics[$var] = (int) $value;
} else {
$statistics[$var] += (int) $value;
}
}
$is_ajax && fn_set_progress('echo', $tag_data['tag']);
}
return $statistics;
}
function fn_ab__sft_notify_results($statistics)
{
if (empty($statistics)) {
$type = 'E';
$title = __('error');
$message = __('ab__sft.generating.error');
} elseif (isset($statistics['added_links']) && isset($statistics['removed_links'])) {
$type = 'N';
$title = __('notice');
$message = __('ab__sft.generating.notification.array', [
'[added]' => $statistics['added_links'],
'[deleted]' => $statistics['removed_links'],
]);
} else {
$type = 'N';
$title = __('notice');
$message = __('ab__sft.generating.notification.string');
}
if (defined('AJAX_REQUEST')) {
fn_set_notification($type, $title, $message);
} else {
fn_echo($message);
}
}