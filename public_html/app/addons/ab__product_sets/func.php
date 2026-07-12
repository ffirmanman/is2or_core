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
use Tygh\Addons\ProductVariations\ServiceProvider;
use Tygh\Registry;
use Tygh\Languages\Languages;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
function fn_ab__ps_delete_set($set_id)
{
if (!empty($set_id)) {
db_query('DELETE FROM ?:ab__product_sets WHERE set_id = ?i', $set_id);
db_query('DELETE FROM ?:ab__product_sets_descriptions WHERE set_id = ?i', $set_id);
db_query('DELETE FROM ?:ab__product_sets_products WHERE set_id = ?i', $set_id);
}
}
function fn_ab__ps_update_set($set, $set_id, $lang_code = DESCR_SL)
{
if (!empty($set_id)) {
$set['lang_code'] = $lang_code;
db_replace_into('ab__product_sets', $set);
db_replace_into('ab__product_sets_descriptions', $set);
} else {
$set_id = $set['set_id'] = db_query('INSERT INTO ?:ab__product_sets ?e', $set);
foreach (Languages::getAll() as $set['lang_code'] => $language) {
db_query('INSERT INTO ?:ab__product_sets_descriptions ?e', $set);
}
}
if (!empty($set['products'])) {
$values = [];
$products = explode(',', $set['products']);
foreach ($products as $key => $product_id) {
if ($product_id == $set['product_id']) {
unset($products[$key]);
continue;
}
$values[] = "({$set_id},{$product_id})";
}
if (!empty($products)) {
db_query('DELETE FROM ?:ab__product_sets_products WHERE set_id = ?i', $set_id);
db_query('INSERT INTO ?:ab__product_sets_products (set_id, product_id) VALUES ?p', implode(',', $values));
}
}
return $set_id;
}
function fn_ab__ps_get_sets($product_id, $lang_code = CART_LANGUAGE)
{
if (empty($product_id)) {
return false;
}
$fields = [
'?:ab__product_sets.set_id',
'?:ab__product_sets.product_id',
'?:ab__product_sets.status',
'?:ab__product_sets.pos',
'?:ab__product_sets_descriptions.set',
'GROUP_CONCAT(?:ab__product_sets_products.product_id) as products',
];
$condition = db_quote('?:ab__product_sets.product_id = ?i', $product_id);
if (AREA == 'C') {
$condition .= ' AND ?:ab__product_sets.status = "A"';
}
$sets = db_get_array('SELECT ' . implode(',', $fields) . ' FROM ?:ab__product_sets
LEFT JOIN ?:ab__product_sets_descriptions ON ?:ab__product_sets_descriptions.set_id = ?:ab__product_sets.set_id AND ?:ab__product_sets_descriptions.lang_code = ?s
LEFT JOIN ?:ab__product_sets_products ON ?:ab__product_sets_products.set_id = ?:ab__product_sets.set_id
WHERE ?p GROUP BY ?:ab__product_sets.set_id ORDER BY ?:ab__product_sets.pos ASC', $lang_code, $condition);
if (AREA == 'C') {
$pattern = Registry::ifGet('addons.ab__product_sets.pattern', '%product%, %price%');
foreach ($sets as $k => &$set) {
if (empty($set['products'])) {
continue;
}
list($set['products']) = fn_get_products([
'pid' => explode(',', $set['products']),
]);
if (empty($set['products'])) {
unset($sets[$k]);
continue;
}
if (Registry::get('addons.product_variations.status') == 'A') {
$repository = ServiceProvider::getProductRepository();
$set['products'] = $repository->loadProductsGroupInfo($set['products']);
$set['products'] = $repository->loadProductsVariationName($set['products']);
}
foreach ($set['products'] as &$product) {
if (!empty($product['variation_name'])) {
$product['product'] = $product['variation_name'];
}
if (!empty(Tygh::$app['view'])) {
Tygh::$app['view']->assign('value', $product['price']);
$price_html = Tygh::$app['view']->fetch('common/price.tpl');
} else {
$price_html = $product['price'];
}
$product['ab__pos_label'] = str_replace(['%product%', '%price%'], [$product['product'], $price_html], $pattern);
fn_promotion_apply('catalog', $product, $auth);
}
}
}
return $sets;
}
function fn_ab__product_sets_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
$product_id = empty($product_data['parent_product_id']) ? $product_data['product_id'] : $product_data['parent_product_id'];
$product_data['ab__product_sets'] = fn_ab__ps_get_sets($product_id, $lang_code);
}
function fn_ab__product_sets_delete_product_post($product_id, $product_deleted)
{
if ($product_deleted) {
$set_ids = db_get_fields('SELECT set_id FROM ?:ab__product_sets WHERE product_id = ?i', $product_id);
if (!empty($set_ids)) {
foreach ($set_ids as $set_id) {
fn_ab__ps_delete_set($set_id);
}
}
}
}
function fn_ab__product_sets_update_product_post($product_data, $product_id, $lang_code, $create)
{
if (isset($product_data['ab__product_sets'])) {
$old_set_ids = db_get_fields('SELECT set_id FROM ?:ab__product_sets WHERE product_id = ?i', $product_id);
$new_set_ids = fn_array_column($product_data['ab__product_sets'], 'set_id');
$deleted_ids = array_diff($old_set_ids, $new_set_ids);
foreach ($deleted_ids as $set_id) {
fn_ab__ps_delete_set($set_id);
}
if (!empty($product_data['ab__product_sets'])) {
fn_ab__product_sets_check_products($product_data, $product_id);
foreach ($product_data['ab__product_sets'] as $key => $set) {
if (isset($set['set_id'])) {
$set['product_id'] = $product_id;
fn_ab__ps_update_set($set, $set['set_id'], $lang_code);
}
}
}
}
}
function fn_ab__product_sets_check_products(&$product_data, $product_id)
{
$ab__product_sets = $product_data['ab__product_sets'];
foreach ($ab__product_sets as $k => $ab__product_set) {
if (empty($ab__product_set['products'])) {
unset($ab__product_sets[$k]);
break;
}
$product_ids = explode(',', $ab__product_set['products']);
$product_ids = array_flip($product_ids);
unset($product_ids[$product_id]);
if (empty($product_ids)) {
unset($ab__product_sets[$k]);
break;
}
$product_ids = array_flip($product_ids);
$product_ids = implode(',', $product_ids);
$ab__product_sets[$k]['products'] = $product_ids;
}
$product_data['ab__product_sets'] = $ab__product_sets;
}
function fn_ab__product_sets_clone_product($product_id, $pid)
{
$sets = db_get_array('SELECT * FROM ?:ab__product_sets WHERE product_id = ?i', $product_id);
if (!empty($sets)) {
foreach ($sets as $set) {
$set['product_id'] = $pid;
$old_set_id = $set['set_id'];
unset($set['set_id']);
$set_id = db_query('INSERT INTO ?:ab__product_sets ?e', $set);
$data = db_get_array('SELECT * FROM ?:ab__product_sets_descriptions WHERE set_id = ?i', $old_set_id);
foreach ($data as $v) {
$v['set_id'] = $set_id;
db_query('INSERT INTO ?:ab__product_sets_descriptions ?e', $v);
}
$data = db_get_array('SELECT * FROM ?:ab__product_sets_products WHERE set_id = ?i', $old_set_id);
foreach ($data as $v) {
$v['set_id'] = $set_id;
db_query('INSERT INTO ?:ab__product_sets_products ?e', $v);
}
}
}
}
function fn_ab__product_sets_before_dispatch($controller, $mode, $action, &$dispatch_extra, $area)
{
if (!empty($_REQUEST['ab__ps_active'])) {
$dispatch_extra = null;
}
}
function fn_ab__ps_check_current_user_access($product_id)
{
$allowed = true;
if (PRODUCT_EDITION == 'MULTIVENDOR') {
$auth = Tygh::$app['session']['auth'];
if ($auth['user_id'] == 1) {
if (Registry::get('addons.master_products.status') == 'A') {
$product_data = fn_get_product_data($product_id, $auth);
if ($product_data['company_id'] == 0) {
$allowed = false;
}
}
}
}
return $allowed;
}