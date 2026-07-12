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
use Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes;
use Tygh\Enum\Addons\Ab_productRecommendations\LinkTypes;
use Tygh\Enum\Addons\Ab_productRecommendations\ObjectTypes;
use Tygh\Enum\SiteArea;
use Tygh\Enum\UserTypes;
use Tygh\Enum\YesNo;
use Tygh\Http;
use Tygh\Models\Company;
use Tygh\Registry;
defined('BOOTSTRAP') || die('Access denied');
function fn_ab__pr_install()
{
$objects = [
['t' => '?:vendor_plans',
'i' => [
['n' => 'ab__pr_allow_recommendations', 'p' => 'int(1) NOT NULL DEFAULT \'0\''],
],
],
];
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $o) {
$table_name = substr($o['t'], 2);
if (!db_has_table($table_name)) {
continue;
}
$fields = db_get_fields('DESCRIBE ' . $o['t']);
if (!empty($fields) && is_array($fields)) {
if (!empty($o['i']) && is_array($o['i'])) {
foreach ($o['i'] as $f) {
if (!in_array($f['n'], $fields)) {
db_query('ALTER TABLE ?p ADD ?p ?p', $o['t'], $f['n'], $f['p']);
if (!empty($f['add_sql']) && is_array($f['add_sql'])) {
foreach ($f['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
if (!empty($o['indexes']) && is_array($o['indexes'])) {
foreach ($o['indexes'] as $index => $keys) {
$existing_indexes = db_get_array('SHOW INDEX FROM ?p WHERE key_name = ?s', $o['t'], $index);
if (empty($existing_indexes) && !empty($keys)) {
db_query('ALTER TABLE ?p ADD INDEX ?p (?p)', $o['t'], $index, $keys);
}
}
}
}
}
}
}

function fn_ab__pr_get_recommendations(array $params): array
{
$conditions = '';
$fields = [
'object_id',
'object_type',
'link_type',
'object_data',
'inherit',
'inherit_if_not_available',
];
if (!empty($params['object_id_and_type'])) {
$id_and_type_conditions = [];
foreach ($params['object_id_and_type'] as $object_id_and_type) {
$id_and_type_conditions[] = db_quote('object_id = ?i AND object_type = ?s', $object_id_and_type['object_id'], $object_id_and_type['object_type']);
}
if ($id_and_type_conditions) {
$conditions .= ' AND (' . implode(' OR ', $id_and_type_conditions) . ')';
}
}
if (!empty($params['object_id'])) {
$conditions .= db_quote(' AND object_id = ?i', $params['object_id']);
}
if (!empty($params['object_type'])) {
$conditions .= db_quote(' AND object_type = ?s', $params['object_type']);
}
if (!empty($params['link_type'])) {
$conditions .= db_quote(' AND link_type = ?s', $params['link_type']);
}
$recommendations = db_get_array('SELECT ?p FROM ?:ab__product_recommendations WHERE 1 ?p', implode(',', $fields), $conditions);
return [$recommendations, $params];
}

function fn_ab__product_recommendations_update_product_post($product_data, $product_id, $lang_code, $create)
{
if (isset($product_data['ab__product_recommendations'])) {
fn_ab__pr_update_recommendations($product_id, ObjectTypes::PRODUCT, LinkTypes::PRODUCTS, $product_data['ab__product_recommendations']);
}
}

function fn_ab__product_recommendations_get_products($params, $fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
if (!empty($params['ab__pr_products_with_personal_recommendations']) && $params['ab__pr_products_with_personal_recommendations'] === YesNo::YES) {
$join .= db_quote(' INNER JOIN ?:ab__product_recommendations ab__pr ON ab__pr.object_id = products.product_id AND ab__pr.object_type = ?s AND ab__pr.link_type = ?s AND ab__pr.object_data <> \'\'', ObjectTypes::PRODUCT, LinkTypes::PRODUCTS);
}
if (!empty($params['ab__pr_products_with_category_recommendations']) && $params['ab__pr_products_with_category_recommendations'] === YesNo::YES) {
$join .= db_quote(' INNER JOIN ?:ab__product_recommendations ab__pr2 ON ab__pr2.object_id = products_categories.category_id AND ab__pr2.object_type = ?s AND products_categories.link_type = ?s AND ab__pr2.object_data <> \'\'', ObjectTypes::CATEGORY, 'M');
}
if(!empty($params['ab__pr_inherit']) || (!empty($params['ab__pr_inherit_if_not_available']) && $params['ab__pr_inherit_if_not_available'] === YesNo::YES)){
$join .= db_quote(' INNER JOIN ?:ab__product_recommendations ab__pr3 ON ab__pr3.object_id = products.product_id AND ab__pr3.object_type = ?s AND ab__pr3.link_type = ?s ', ObjectTypes::PRODUCT, LinkTypes::PRODUCTS);
if(!empty($params['ab__pr_inherit'])){
$condition .= db_quote(' AND ab__pr3.inherit = ?s', $params['ab__pr_inherit']);
}
if(!empty(!empty($params['ab__pr_inherit_if_not_available']) && $params['ab__pr_inherit_if_not_available'] === YesNo::YES)){
$condition .= db_quote(' AND ab__pr3.inherit_if_not_available = ?s', YesNo::YES);
}
}
}

function fn_ab__product_recommendations_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
if (SiteArea::isAdmin(AREA)) {
[$recommendations] = fn_ab__pr_get_recommendations(['object_id' => $product_data['product_id'],
'object_type' => ObjectTypes::PRODUCT,
]);
$recommendations = reset($recommendations);
$product_data['ab__product_recommendations'] = $recommendations;
[$category_recommendations] = fn_ab__pr_get_recommendations(['object_id' => $product_data['main_category'],'object_type' => ObjectTypes::CATEGORY]);
foreach ($category_recommendations as $category_recommendation) {
if(!empty($category_recommendation['object_data'])) {
$product_data['ab__product_recommendations']['category_has_recommendations'] = true;
}
}
} elseif (SiteArea::isStorefront(AREA)) {
[$recommendations] = fn_ab__pr_get_recommendations([
'object_id_and_type' => [
['object_id' => $product_data['product_id'], 'object_type' => ObjectTypes::PRODUCT],
['object_id' => $product_data['main_category'], 'object_type' => ObjectTypes::CATEGORY],
],
]);
$inherit = InheritTypes::ALL;
$inherit_if_not_available = false;
foreach ($recommendations as $recommendation) {
if ($recommendation['object_type'] === ObjectTypes::PRODUCT) {
$inherit = $recommendation['inherit'];
$inherit_if_not_available = YesNo::toBool($recommendation['inherit_if_not_available']);
}
}
$rules = [
InheritTypes::ALL => function ($item) {
return true;
},
InheritTypes::CATEGORY => function ($item) {
return ($item['object_type'] === ObjectTypes::CATEGORY && $item['link_type'] === LinkTypes::PRODUCTS)
|| ($item['object_type'] === ObjectTypes::PRODUCT && $item['link_type'] === LinkTypes::PRODUCTS);
},
InheritTypes::INTELLIGENT => function ($item) {
return ($item['object_type'] === ObjectTypes::CATEGORY && $item['link_type'] === LinkTypes::INTELLIGENT)
|| ($item['object_type'] === ObjectTypes::PRODUCT && $item['link_type'] === LinkTypes::PRODUCTS);
},
InheritTypes::NONE => function ($item) {
return ($item['object_type'] === ObjectTypes::PRODUCT && $item['link_type'] === LinkTypes::PRODUCTS);
},
];
$filterFn = $rules[$inherit] ?? function ($item) {
return true;
};
$recommendations = array_filter($recommendations, static function ($item) use ($filterFn) {
return !empty($item['object_data']) && $filterFn($item);
});
if ($recommendations) {
usort($recommendations, function ($a, $b) {
$priorityA = ($a['object_type'] === ObjectTypes::PRODUCT) ? 1 : (($a['object_type'] === ObjectTypes::CATEGORY && $a['link_type'] === LinkTypes::PRODUCTS) ? 2 : 3);
$priorityB = ($b['object_type'] === ObjectTypes::PRODUCT) ? 1 : (($b['object_type'] === ObjectTypes::CATEGORY && $b['link_type'] === LinkTypes::PRODUCTS) ? 2 : 3);
return $priorityA <=> $priorityB;
});
if (!$inherit_if_not_available) {
$recommendations = [reset($recommendations)];
}
foreach ($recommendations as $selected_recommendation) {
$recommended_product_ids = '';
if ($selected_recommendation['link_type'] === LinkTypes::PRODUCTS) {
$recommended_product_ids = $selected_recommendation['object_data'];
} else {
fn_set_hook('ab__pr_get_product_data_post', $recommended_product_ids, $selected_recommendation, $product_data, $auth, $preview, $lang_code);
}
if ($recommended_product_ids) {
$params = [
'item_ids' => $recommended_product_ids,
];
if (Registry::get('settings.General.inventory_tracking') === YesNo::YES) {
$params['amount_from'] = 1;
}
[$recommended_products] = fn_get_products($params);
if ($recommended_products) {
$key = array_key_first($recommended_products);
$recommended_product = [$key => $recommended_products[$key]];
fn_gather_additional_product_data($recommended_product, true, true, false);
$product_data['ab__product_recommendations'] = $recommended_product;
return;
}
}
}
}
}
}

function fn_ab__product_recommendations_delete_product_post($product_id, $product_deleted)
{
if ($product_deleted) {
fn_ab__pr_delete_recommendations($product_id, ObjectTypes::PRODUCT);
}
}

function fn_ab__product_recommendations_update_category_post($category_data, $category_id, $lang_code, $create)
{
if (isset($category_data['ab__product_recommendations'])) {
fn_ab__pr_update_recommendations($category_id, ObjectTypes::CATEGORY, LinkTypes::PRODUCTS, $category_data['ab__product_recommendations']);
}
fn_set_hook('ab__pr_update_category_post', $category_data, $category_id, $lang_code, $create);
}

function fn_ab__product_recommendations_get_category_data_post($category_id, $field_list, $get_main_pair, $skip_company_condition, $lang_code, &$category_data)
{
if (SiteArea::isAdmin(AREA)) {
[$recomendations] = fn_ab__pr_get_recommendations(['object_id' => $category_id,
'object_type' => ObjectTypes::CATEGORY,
'link_type' => LinkTypes::PRODUCTS,
]);
$category_data['ab__product_recommendations'] = reset($recomendations);
fn_set_hook('ab__pr_get_category_data_post', $category_id, $field_list, $get_main_pair, $skip_company_condition, $lang_code, $category_data);
}
}

function fn_ab__product_recommendations_delete_category_after($category_id)
{
fn_ab__pr_delete_recommendations($category_id, ObjectTypes::CATEGORY);
}

function fn_ab__pr_update_recommendations(int $object_id, string $object_type, string $link_type, $recommendation_data)
{
if(!fn_ab__pr_check_permissions()){
return;
}
if (($link_type === LinkTypes::PRODUCTS) && !empty($recommendation_data['object_data']) && is_array($recommendation_data['object_data'])) {
asort($recommendation_data['object_data']);
$recommendation_data['object_data'] = array_keys($recommendation_data['object_data']);
}
$data = array_merge([
'object_id' => $object_id,
'object_type' => $object_type,
'link_type' => $link_type,
'object_data' => implode(',', (array) $recommendation_data['object_data']),
], array_filter([
'inherit' => $recommendation_data['inherit'] ?? '',
'inherit_if_not_available' => $recommendation_data['inherit_if_not_available'] ?? '',
]));
db_replace_into('ab__product_recommendations', $data);
}

function fn_ab__pr_delete_recommendations(int $object_id, string $object_type)
{
if(!fn_ab__pr_check_permissions()){
return;
}
db_query('DELETE FROM ?:ab__product_recommendations WHERE object_id = ?i AND object_type = ?s', $object_id, $object_type);
}

function fn_ab__intelligent_accessories_ab__pr_update_category_post($category_data, $category_id, $lang_code, $create)
{
if (isset($category_data['ab__product_recommendations_ia'])) {
fn_ab__pr_update_recommendations($category_id, ObjectTypes::CATEGORY, LinkTypes::INTELLIGENT, $category_data['ab__product_recommendations_ia']);
}
}

function fn_ab__intelligent_accessories_ab__pr_get_category_data_post($category_id, $field_list, $get_main_pair, $skip_company_condition, $lang_code, &$category_data)
{
[$recommendations] = fn_ab__pr_get_recommendations(['object_id' => $category_id,
'object_type' => ObjectTypes::CATEGORY,
'link_type' => LinkTypes::INTELLIGENT,
]);
$category_data['ab__product_recommendations_ia'] = reset($recommendations);
}

function fn_ab__intelligent_accessories_ab__pr_get_product_data_post(&$recommended_product_ids, $selected_recommendation, $product_data, $auth, $preview, $lang_code)
{
$recommended_product_ids = implode(',', fn_ab__ia_check_products_by_join($selected_recommendation['object_data'], $product_data['product_id']));
}

function fn_ab__pr_check_permissions($view = false){
static $allowed = null;
if(is_null($allowed)){
$method = $view ? HTTP::GET : HTTP::POST;
$allowed = fn_check_view_permissions('ab__product_recommendations.manage', $method);
if(fn_allowed_for('MULTIVENDOR') && UserTypes::isVendor(Tygh::$app['session']['auth']['user_type']) && Registry::get('addons.vendor_plans.status') === 'A'){
$allowed = Company::model()->find(Tygh::$app['session']['auth']['company_id'])->plan->ab__pr_allow_recommendations;
}
}
return $allowed;
}
