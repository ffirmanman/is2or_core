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
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\UserTypes;
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
function fn_ab__buy_together_install()
{
$objects = [
['t' => '?:buy_together',
'i' => [
['n' => 'company_id', 'p' => 'int(11)'],
['n' => 'generator_hash', 'p' => 'varchar(255)'],
['n' => 'generator_id', 'p' => 'int(11)'],
],
],
];
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $o) {
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
foreach ($f['indexes'] as $index => $keys) {
$existing_indexes = db_get_array('SHOW INDEX FROM ' . $o['t'] . ' WHERE key_name = ?s', $index);
if (empty($existing_indexes) && !empty($keys)) {
db_query('ALTER TABLE ?p ADD INDEX ?p (?p)', $o['t'], $index, $keys);
}
}
}
}
}
}
db_query('UPDATE ?:buy_together bt, ?:products products SET bt.company_id = products.company_id WHERE products.product_id = bt.product_id');
if (Registry::get('addons.buy_together.status') == 'A') {
db_query('ALTER TABLE ?:buy_together_descriptions MODIFY COLUMN name varchar(255)');
}
require_once Registry::get('config.dir.addons') . 'ab__buy_together/migrations/ab__migrate_ab__bt_200_201.php';
ab__migrate_ab__bt_200_201();
}
function fn_ab__buy_together_get_chains($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
$auth = Tygh::$app['session']['auth'];
$default_params = [
'page' => 1,
'items_per_page' => $items_per_page,
'match' => '',
];
$params = array_merge($default_params, $params);
$sortings = [
'name' => ['?:buy_together_descriptions.name', '?:buy_together.chain_id'],
'status' => '?:buy_together.status',
'generator' => '?:ab__bt_generator_descriptions.name',
];
$sorting = db_sort($params, $sortings, 'name', 'asc');
$condition = $limit = $join = '';
$fields = [
'?:buy_together.chain_id',
'?:buy_together.status',
'?:buy_together_descriptions.name',
'?:ab__bt_generator_descriptions.name as generator',
'?:buy_together.generator_id',
];
if (isset($params['q']) && fn_string_not_empty($params['q'])) {
$params['q'] = trim($params['q']);
if ($params['match'] == 'any') {
$pieces = fn_explode(' ', $params['q']);
$search_type = ' OR ';
} elseif ($params['match'] == 'all') {
$pieces = fn_explode(' ', $params['q']);
$search_type = ' AND ';
} else {
$pieces = [$params['q']];
$search_type = '';
}
$_condition = [];
foreach ($pieces as $piece) {
if (strlen($piece) == 0) {
continue;
}
$_condition[] = db_quote('?:buy_together_descriptions.name LIKE ?l', "%$piece%");
}
if (!empty($_condition)) {
$condition .= ' AND (' . implode($search_type, $_condition) . ')';
}
}
if (!empty($params['generator_id'])) {
$condition .= db_quote(' AND ?:buy_together.generator_id = ?i', $params['generator_id']);
}
if (!empty($params['base_product_id'])) {
$condition .= db_quote(' AND ?:buy_together.product_id = ?i', $params['base_product_id']);
}
if (!empty($params['additional_product_id'])) {
$tmp = 's:10:"product_id";s:' . strlen($params['additional_product_id']) . ':"' . $params['additional_product_id'] . '"';
$condition .= db_quote(' AND ?:buy_together.products LIKE ?l', "%$tmp%");
}
if (empty($params['show_all'])) {
$condition .= db_quote(' AND (?:buy_together.generator_id = \'\' OR ?:buy_together.generator_id IS NULL)');
}
if (fn_allowed_for('MULTIVENDOR') && $auth['user_type'] == UserTypes::VENDOR) {
$condition .= db_quote(' AND ?:buy_together.company_id = ?i', $auth['company_id']);
}else{
$condition .= fn_get_company_condition('?:buy_together.company_id');
}
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT COUNT(DISTINCT(?:buy_together.chain_id)) FROM ?:buy_together
LEFT JOIN ?:buy_together_descriptions ON ?:buy_together_descriptions.chain_id = ?:buy_together.chain_id AND ?:buy_together_descriptions.lang_code = ?s
WHERE 1 ?p', $lang_code, $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$chains = db_get_hash_array('SELECT ?p FROM ?:buy_together
LEFT JOIN ?:buy_together_descriptions ON ?:buy_together_descriptions.chain_id = ?:buy_together.chain_id AND ?:buy_together_descriptions.lang_code = ?s
LEFT JOIN ?:ab__bt_generator_descriptions ON ?:buy_together.generator_id = ?:ab__bt_generator_descriptions.generator_id AND ?:ab__bt_generator_descriptions.lang_code = ?s
?p
WHERE 1 ?p ?p ?p', 'chain_id', implode(', ', $fields), $lang_code, $lang_code, $join, $condition, $sorting, $limit);
return [$chains, $params];
}
function fn_ab__buy_together_buy_together_update_chain_post($item_id, $product_id, $item_data, $auth, $lang_code, $create)
{
if (!$create && !empty($_REQUEST['return_url'])) {
fn_redirect(fn_url($_REQUEST['return_url']));
}
}

function fn_ab__buy_together_buy_together_update_chain_pre($item_id, $product_id, &$item_data, $auth, $lang_code)
{
if(defined('AB__BT_MANAGEMENT')){
if ($auth['user_type'] == UserTypes::VENDOR) {
$item_data['company_id'] = $auth['company_id'];
}elseif (fn_allowed_for('ULTIMATE')){
$item_data['company_id'] = fn_get_runtime_company_id();
}
}
if(empty($item_data['company_id'])){
$item_data['company_id'] = fn_get_runtime_company_id();
}
}
function fn_ab__bt_update_generator($generator_data, $generator_id = 0)
{
$generator_data['base_products'] = serialize(isset($generator_data['base_products']) ? $generator_data['base_products'] : []);
$additional_products = isset($generator_data['products']) ? $generator_data['products'] : [];
foreach ($additional_products as $key => $additional_product) {
if (empty($additional_product['products']) && empty($additional_product['saved_search']) && empty($additional_product['ab__ia_joins'])) {
unset($additional_products[$key]);
}
}
$additional_products = array_values($additional_products);
$generator_data['products'] = serialize($additional_products);
$date_from = !empty($generator_data['date_from']) ? fn_parse_date($generator_data['date_from']) : 0;
$date_to = !empty($generator_data['date_to']) ? fn_parse_date($generator_data['date_to']) : 0;
if ($date_to && $date_to < $date_from) {
$temp_value = $date_from;
$date_from = $date_to;
$date_to = $temp_value;
}
$generator_data['date_from'] = $date_from;
$generator_data['date_to'] = $date_to;
$generator_data['timestamp'] = TIME;
if (fn_allowed_for('ULTIMATE')){
$generator_data['company_id'] = fn_get_runtime_company_id();
}
if (!$generator_id) {
$generator_id = db_query('INSERT INTO ?:ab__bt_generators ?e', $generator_data);
} else {
db_query('UPDATE ?:ab__bt_generators SET ?u WHERE generator_id = ?i', $generator_data, $generator_id);
}
$translates[CART_LANGUAGE] = [
'name' => $generator_data['name'],
'description' => $generator_data['description'],
];
if(!empty($generator_data['status'])){
fn_ab__bt_change_combinations_status($generator_id,$generator_data['status']);
}
if (isset($generator_data['translates'])) {
$translates = array_merge($generator_data['translates'], $translates);
}
foreach ($translates as $lang_code => &$translate) {
$translate['generator_id'] = $generator_id;
$translate['lang_code'] = $lang_code;
if ($lang_code != CART_LANGUAGE) {
$translate['name'] = empty($translate['name']) ? $translates[CART_LANGUAGE]['name'] : $translate['name'];
$translate['description'] = empty($translate['description']) ? $translates[CART_LANGUAGE]['description'] : $translate['description'];
}
}
db_replace_into('ab__bt_generator_descriptions', $translates, true);
return $generator_id;
}

function fn_ab__bt_get_generators_list($params, $auth, $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
$params = array_merge([
'get_products' => false,
'get_translates' => false,
'items_per_page' => $items_per_page,
], $params);
$join = $conditions = $limit = '';
$fields = [
'gen.generator_id',
'gen.type',
'gen.modifier',
'gen.modifier_type',
'gen.date_from',
'gen.date_to',
'gen.display_in_promotions',
'gen.status',
'gen.company_id',
'gendesc.name',
'gendesc.description',
'gen.timestamp',
'gen.last_generation_timestamp',
'gen.total_combinations'
];
$sortings = [
'id' => 'gen.generator_id',
'status' => 'gen.status',
'name' => 'gendesc.name',
'timestamp' => 'gen.timestamp',
'last_generation_timestamp' => 'gen.last_generation_timestamp',
];
if ($params['get_products']) {
$fields[] = 'gen.base_products';
$fields[] = 'gen.products';
}
if (!empty($params['generator_ids'])) {
$generator_ids = (array) $params['generator_ids'];
$conditions .= db_quote(' AND gen.generator_id IN (?n)', implode(',', $generator_ids));
}
if (!empty($params['name'])) {
$conditions .= db_quote(' AND gendesc.name like ?l', '%' . $params['name'] . '%');
}
if (fn_allowed_for('MULTIVENDOR') && $auth['user_type'] == UserTypes::VENDOR) {
$conditions .= db_quote(' AND gen.company_id = ?i', $auth['company_id']);
}else{
$conditions .= fn_get_company_condition('gen.company_id');
}
$join .= db_quote(' LEFT JOIN ?:ab__bt_generator_descriptions gendesc ON gendesc.generator_id = gen.generator_id AND gendesc.lang_code = ?s', $lang_code);
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:ab__bt_generators gen $join WHERE 1 ?p", $conditions);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$sorting = db_sort($params, $sortings, 'id', 'asc');
$generators = db_get_hash_array('SELECT ' . implode(',', $fields) . " FROM ?:ab__bt_generators gen $join WHERE 1 $conditions $sorting $limit", 'generator_id');
if ($params['get_translates'] && $generators) {
$translates = db_get_hash_multi_array('SELECT * FROM ?:ab__bt_generator_descriptions WHERE generator_id IN (?n)', ['generator_id', 'lang_code'], array_keys($generators));
}
foreach ($generators as $generator_id => &$generator) {
if ($params['get_products']) {
$generator['base_products'] = unserialize($generator['base_products']);
$generator['products'] = unserialize($generator['products']);
}
if ($params['get_translates']) {
$generator['translates'] = $translates[$generator_id];
}
}
return [$generators, $params];
}
function fn_ab__bt_get_generator($generator_id, $lang_code = CART_LANGUAGE)
{
$params = [
'generator_ids' => $generator_id,
'get_products' => true,
'get_translates' => true,
];
list($generators) = fn_ab__bt_get_generators_list($params, Tygh::$app['session']['auth']);
$return = isset($generators[$generator_id]) ? $generators[$generator_id] : false;
if(isset($return['type']) && $return['type'] == 'ia' && Registry::ifGet('addons.ab__intelligent_accessories.status','D') == 'D'){
$return = false;
fn_set_notification('E',__('error'),__('ab__bt.no_ia_addon'));
}
return $return;
}
function fn_ab__bt_delete_generator($generator_id)
{
fn_ab__bt_delete_generated_combinations($generator_id);
db_query('DELETE FROM ?:ab__bt_generators WHERE generator_id = ?i', $generator_id);
db_query('DELETE FROM ?:ab__bt_generator_descriptions WHERE generator_id = ?i', $generator_id);
}
function fn_ab__bt_delete_generated_combinations($generator_id)
{
$chain_ids = db_get_fields('SELECT chain_id FROM ?:buy_together WHERE generator_id = ?i', $generator_id);
if ($chain_ids) {
db_query('DELETE FROM ?:buy_together WHERE chain_id IN (?n)', $chain_ids);
db_query('DELETE FROM ?:buy_together_descriptions WHERE chain_id IN (?n)', $chain_ids);
db_query('DELETE FROM ?:ab__bt_generator_products WHERE generator_id = ?i', $generator_id);
return true;
}
return false;
}
function fn_ab__bt_generate_combinations($generator_id, $get_possible_combinations_amount = false)
{
if(!$get_possible_combinations_amount){

$lock_factory = Tygh::$app['lock.factory'];
$lock_key = 'ab__bt_generator_.'.$generator_id;
$lock = $lock_factory->createLock($lock_key, SECONDS_IN_HOUR);
if (!$lock->acquire()) {
return [false, __('ab__bt.generating_in_progress')];
}
}
$auth = Tygh::$app['session']['auth'];
$generator_data = fn_ab__bt_get_generator($generator_id);
if(!$generator_data){
return false;
}
$bt_pattern = $generator_data;
unset($bt_pattern['base_products'],$bt_pattern['products'],$bt_pattern['translates']);
$base_products = [];
fn_set_progress('title', __('ab__bt.progressbar.getting_products'));
if($generator_data['type'] == 'ia'){
$helper_map = [];
foreach ($generator_data['products'] as $position => $item) {
foreach (explode(',',$item['ab__ia_joins']) as $join_id) {
$helper_map[$join_id]['modifiers'] = $item['modifiers']['ab__ia_joins'];
$helper_map[$join_id]['required'] = $item['required'];
$helper_map[$join_id]['position'] = $position;
}
}
$ia_ids = explode(',',implode(',',array_column($generator_data['products'],'ab__ia_joins')));
$ia_data = db_get_array("SELECT * FROM ?:ab__ia_data WHERE join_id IN(?n)",$ia_ids);
$ab_ia_position_products = [];
foreach ($ia_data as $ia_datum) {
if(!isset($ab_ia_position_products[$ia_datum['product_id']])){
$ab_ia_position_products[$ia_datum['product_id']] = [
'additional_products' => []
];
}
$product_structure = [];
foreach (unserialize($ia_datum['list']) as $item) {
$product_structure[$item] = array_merge($helper_map[$ia_datum['join_id']]['modifiers'],['product_id' => $item ]);
if($helper_map[$ia_datum['join_id']]['required'] == 'N'){
$product_structure[0] = ['product_id' => 0];
}
}
$ab_ia_position_products[$ia_datum['product_id']]['additional_products'][$helper_map[$ia_datum['join_id']]['position']] = $product_structure;
}
$_base_products = array_flip(array_flip(array_column($ia_data,'product_id')));
foreach ($_base_products as $key => $base_product) {
$base_products[$base_product] = ['product_id' => $base_product];
}
$_base_products = null;
if (!$base_products) {
return [false, __('ab__bt.no_base_products_ia')];
}
if(!$ab_ia_position_products){
return [false, __('ab__bt.no_additional_products_ia')];
}

}else{
if (!empty($generator_data['base_products']['products'])) {
fn_ab__bt_get_products($base_products, 'products', $generator_data['base_products']['products']);
}
if (!empty($generator_data['base_products']['saved_search'])) {
fn_ab__bt_get_products($base_products, 'saved_search', $generator_data['base_products']['saved_search'], $generator_data['base_products']['modifiers']['saved_search']);
}
if (!empty($generator_data['base_products']['ab__ia_joins'])) {
fn_ab__bt_get_products($base_products, 'ab__ia_joins', $generator_data['base_products']['ab__ia_joins'], $generator_data['base_products']['modifiers']['ab__ia_joins'], true);
}
if (!$base_products) {
return [false, __('ab__bt.no_base_products')];
}
$position_products = [];
foreach ($generator_data['products'] as $position => $position_data) {
foreach ($position_data as $condition_type => $condition_data) {
$modifiers = isset($generator_data['products'][$position]['modifiers'][$condition_type]) ? $generator_data['products'][$position]['modifiers'][$condition_type] : [];
fn_ab__bt_get_products($position_products[$position], $condition_type, $condition_data, $modifiers);
}
if ($position_data['required'] == 'N') {
$position_products[$position][0] = ['product_id' => 0];
}
}
$position_products = array_values($position_products);
$total_positions = max(count($position_products), 1);
fn_set_progress('title', __('ab__bt.progressbar.generating_combinations_intersections'));
$total_combinations = 0;
if($position_products){
$total_combinations = count($base_products);
foreach ($position_products as $position_product) {
$total_combinations *= count($position_product);
}
}
if($get_possible_combinations_amount){
return [true, $total_combinations];
}
if($total_combinations > AB__BT_MAX_COMBINATIONS_NUMBER){
return [false, __('ab__bt.max_combinations_number_exceeded',['[limit]'=>AB__BT_MAX_COMBINATIONS_NUMBER,'[amount]'=>$total_combinations])];
}
$possible_combinations = fn_ab__bt_get_combinations($position_products);
if (!$possible_combinations) {
return [false, __('ab__bt.no_additional_products')];
}
}
fn_ab__bt_delete_generated_combinations($generator_id);
$success = 0;
fn_set_progress('title', __('ab__bt.progressbar.creating_combinations'));
fn_set_progress('parts', count($base_products));
foreach ($base_products as $base_product) {
fn_set_progress('echo');
$product_name = [];
foreach ($generator_data['translates'] as $lang_code => $translate) {
$product_name[$lang_code] = fn_get_product_name($base_product['product_id'], $lang_code);
}
if($generator_data['type'] == 'ia'){
$possible_combinations = fn_ab__bt_get_combinations($ab_ia_position_products[$base_product['product_id']]['additional_products']);
$total_positions = 0;
}
foreach ($possible_combinations as $possible_combination) {
$used_additional_products = [];
$generate_products_maps = true;
if (count($possible_combination) < $total_positions) {
continue;
}
foreach ($possible_combination as $key => $item) {
if ($item['product_id'] == '0') {
$generate_products_maps = false;
unset($possible_combination[$key]);
continue;
}
$temp = explode('_', $key);
$generator_data_key = end($temp);
$possible_combination[$key]['translates'] = $generator_data['products'][$generator_data_key]['translates'];
if ($generator_data['products'][$generator_data_key]['required'] == 'N') {
$possible_combination[$key]['unrequired'] = true;
}
if(isset($used_additional_products[$possible_combination[$key]['product_id']])){
continue 2;
}
$used_additional_products[$possible_combination[$key]['product_id']] = true;
}
if (!$possible_combination) {
continue;
}
$generator_hash = fn_ab__bt_generate_hash($bt_pattern['generator_id'], $base_product['product_id'], array_column($possible_combination, 'product_id'));
$chain_id = fn_ab__bt_generate_chain($bt_pattern, $base_product, $possible_combination, $auth, $generator_hash, $generate_products_maps);
$success++;
$translates = [];
foreach ($generator_data['translates'] as $lang_code => $translate) {
$translates[] = [
'chain_id' => $chain_id,
'lang_code' => $lang_code,
'name' => str_replace('[product]', $product_name[$lang_code], $translate['name']),
'description' => str_replace('[product]', $product_name[$lang_code], $translate['description']),
];
}
if ($translates) {
db_replace_into('buy_together_descriptions', $translates, true);
}
}
}
db_query('UPDATE ?:ab__bt_generators SET last_generation_timestamp = ?i, total_combinations = ?i WHERE generator_id = ?i', time(),$success, $generator_id);
$lock->release();
return [true, __('ab__bt.combinations_generated_successfully',['[total]'=>$success])];
}
function fn_ab__bt_generate_chain($bt_pattern, $base_product, $possible_combination, $auth, $generator_hash, $generate_products_maps = true)
{
$bt_data = array_merge($bt_pattern, $base_product);
$bt_data['products'] = $possible_combination;
$bt_data['generator_hash'] = $generator_hash;
$chain_id = fn_buy_together_update_chain(0, $bt_data['product_id'], $bt_data, $auth);
$generator_products = [];
$pos = 0;
foreach ($possible_combination as $item) {
$generator_products[] = [
'generator_id' => $bt_data['generator_id'],
'base_product_id' => $bt_data['product_id'],
'chain_id' => $chain_id,
'position' => $pos++,
'product_id' => $item['product_id'],
'amount' => $item['amount'],
'modifier_type' => $item['modifier_type'],
'modifier' => $item['modifier'],
'aoc' => empty($item['product_options']) ? 'Y' : 'N',
'options' => isset($item['product_options']) ? serialize($item['product_options']): ''
];
}
if (!empty($generator_products) && $generate_products_maps) {
db_replace_into('ab__bt_generator_products', $generator_products, true);
}
return $chain_id;
}

function fn_ab__bt_get_combinations($arrays, $i = 0)
{
if (!isset($arrays[$i])) {
return [];
}
if ($i == count($arrays) - 1) {
array_walk($arrays[$i], function (&$el, $key) use ($i) {
$el = [$key . '_' . $i => $el];
});
return $arrays[$i];
}
$tmp = fn_ab__bt_get_combinations($arrays, $i + 1);
$result = [];
foreach ($arrays[$i] as $v) {
foreach ($tmp as $t) {
$result[] = is_array($t) && isset($t['product_id']) ?
[$v['product_id'] . '_' . $i => $v] + [$t['product_id'] . '_' . $i => $t] :
[$v['product_id'] . '_' . $i => $v] + $t;
}
}
return $result;
}

function fn_ab__bt_get_products(&$products_list, $type, $products_conditions, $modifiers = [], $is_base_product = false)
{
if (!in_array($type, ['products', 'saved_search', 'ab__ia_joins'])) {
return false;
}
$modifier = [
'amount' => 1,
'modifier_type' => 'by_fixed',
'modifier' => 0,
];
$pids = [];
switch ($type) {
case 'products':
$products_list = array_combine(array_column($products_conditions, 'product_id'), array_values($products_conditions)) + (array) $products_list;
return;
case 'saved_search':
$modifier = array_merge($modifier, $modifiers);
$saved_search = unserialize($products_conditions);
$saved_search['get_query'] = true;
$query = fn_get_products($saved_search);
$pids = db_get_fields($query);
break;
case 'ab__ia_joins':
if (Registry::get('addons.ab__intelligent_accessories.status') === 'A') {
if ($is_base_product) {
$pids = db_get_fields('SELECT DISTINCT product_id FROM ?:ab__ia_data WHERE join_id IN (?n)', explode(',', $products_conditions));
} else {
$serialized_products = db_get_fields('SELECT list FROM ?:ab__ia_data WHERE join_id IN (?n)', explode(',', $products_conditions));
if ($serialized_products) {
$temp_products = [];
foreach ($serialized_products as &$serialized_product) {
$temp_products = array_merge($temp_products, unserialize($serialized_product));
}
$pids = array_keys(array_flip($temp_products));
}
}
}
break;
}
if (!empty($pids)) {
foreach ($pids as $pid) {
$products_list[$pid] = array_merge([
'product_id' => $pid,
], $modifier);
}
}
}

function fn_ab__buy_together_buy_together_get_chains($params, $auth, $lang_code, &$fields, &$conditions, $joins)
{
$fields[] = 'items.generator_id';
if (AREA == 'C') {
if (!empty($params['product_id'])) {
$generated_combinations = db_get_fields('SELECT MIN(chain_id) FROM ?:buy_together WHERE product_id = ?i and generator_id <> \'\' AND status = ?s GROUP BY generator_id', $params['product_id'], 'A');
if ($generated_combinations) {
$conditions['get_first_generated'] = db_quote('(items.generator_id = \'\' or items.generator_id is NULL OR items.chain_id IN (?n))', $generated_combinations);
}
}
} elseif (empty($params['show_all']) && empty($params['simple'])) {
$conditions['get_only_manually_created'] = db_quote('(items.generator_id = \'\' or items.generator_id is NULL)');
}
}

function fn_ab__buy_together_buy_together_get_chains_post($params, $auth, $lang_code, $chains, $fields, $conditions, $joins)
{
if (AREA == 'C' && !empty($params['product_id'])) {
$generators = [];
$generators_products = [];
$generators_position_products = [];
$generators_products_discounts = [];
foreach ($chains as $chain) {
if (!$chain['generator_id']) {
continue;
}
$generators[] = $chain['generator_id'];
$position_counter = 0;
foreach ($chain['products'] as $product) {
$generators_position_products[$position_counter++][] = $product['product_id'];
$generators_products[] = $product['product_id'];
$generators_products_discounts[$chain['generator_id']][] = [
'amount' => $product['amount'],
'modifier_type' => $product['modifier_type'],
'modifier' => $product['modifier'],
];
}
}
if ($generators) {
$raw_positions = db_get_array('SELECT gp.generator_id, gp.position, gp.product_id, gp.amount, gp.modifier_type, gp.modifier, gp.aoc,gp.options FROM ?:ab__bt_generator_products gp LEFT JOIN ?:buy_together bt ON gp.chain_id = bt.chain_id WHERE gp.generator_id IN (?n) and gp.base_product_id = ?i AND bt.status = ?s group by 3 , 2', $generators, $params['product_id'], 'A');
$products_positions = [];
$all_products = array_column($raw_positions, 'product_id');
$pids = array_unique($all_products);
list($products) = fn_get_products([
'pid' => $pids,
]);
fn_gather_additional_products_data($products, [
'get_icon' => true,
'get_detailed' => true,
'get_additional' => false,
'get_options' => true,
'get_discounts' => true,
]);
foreach ($raw_positions as $raw_position) {
if (in_array($raw_position['product_id'], $pids)
&& isset($products[$raw_position['product_id']])
&& !in_array($raw_position['product_id'], $generators_position_products[$raw_position['position']])
) {
$_product = $products[$raw_position['product_id']];
$_product['product_name'] = $_product['product'];
$_product['amount'] = $raw_position['amount'];
if($raw_position['aoc'] == 'Y' && !empty($_product['product_options'])){
$_product['aoc'] = true;
$_product['options'] = $_product['product_options'];
unset($_product['product_options']);
}elseif(!empty($raw_position['options'])){
$selected_options = unserialize($raw_position['options']);
foreach ($selected_options as $option => $value) {
if(isset($_product['product_options'][$option])){
$_product['product_options'][$option]['value'] = $value;
}
}
}
list($_product['discount'], $_product['discounted_price']) = fn_buy_together_calculate_discount($_product['price'], $raw_position['modifier'], $raw_position['modifier_type']);
$products_positions[$raw_position['generator_id']][$raw_position['position']][$raw_position['product_id']] = $_product;
}
}
Tygh::$app['view']->assign('products_positions', $products_positions);
}
}
}

function fn_ab__buy_together_get_products(&$params, &$fields, &$sortings, &$condition, &$join, &$sorting, &$group_by, &$lang_code, &$having)
{
if (AREA == 'A') {
if (!empty($params['ab__bt_generator'])) {
$join .= db_quote(' LEFT JOIN ?:ab__bt_generator_products ab_gen_prod ON products.product_id = ab_gen_prod.base_product_id AND ab_gen_prod.generator_id = ?i', $params['ab__bt_generator']);
$condition .= ' AND ab_gen_prod.generator_id IS NOT NULL';
}
}
}
function fn_ab__buy_together_allow_save_object_post($object_data, $object_type, &$allow)
{
if ($object_type == 'chains') {
$allow = !$object_data['generator_id'];
}
}

function fn_ab__bt_generate_hash($generator_id, $base_product_id, $products)
{
return $generator_id . '_' . $base_product_id . '_' . implode('-', array_values($products));
}

function fn_ab__bt_change_combinations_status($generator_id,$status){
db_query('UPDATE ?:buy_together SET status = ?s WHERE generator_id = ?i',$status,$generator_id);
}

function fn_ab__buy_together_tools_update_status_before_query($params){
if($params['table'] == 'ab__bt_generators'){
fn_ab__bt_change_combinations_status($params['id'],$params['status']);
}
}
function fn_ab__buy_together_get_product_tabs_post(&$tabs, $lang_code){
foreach ($tabs as &$tab) {
if ($tab['addon'] == 'buy_together'){
$tab['show_in_popup'] = 'N';
break;
}
}
}