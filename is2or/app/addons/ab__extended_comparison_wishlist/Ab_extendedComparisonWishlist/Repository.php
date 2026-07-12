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
namespace Ab_extendedComparisonWishlist;
use Tygh\Tools\ErrorHandler;
use Tygh\Exceptions\DatabaseException;

class Repository
{
const TABLE_COMPARING_INFO = 'ab__ecw_comparison_info';

private $settings = [];

private $db;

public function __construct(array $settings, \Tygh\Database\Connection $db)
{
$this->setSettings($settings);
$this->db = $db;
}

private function setSettings(array $settings = [])
{
$this->settings = $settings;
}

public function getSettings($key = null)
{
return $key === null ? $this->settings : $this->settings[$key];
}

public function updateComparison($product_id, $compared_product_id, $list_id = 0)
{

$service = \Tygh::$app['addons.ab__extended_comparison_wishlist.service'];

$grouper = $service->getGrouper();
$group_by = $grouper->getGroupBy();
$existing_ab__ecw_info = $this->getComparisonInfo($product_id, $compared_product_id, $list_id, $group_by);
$count = 1;
if (!empty($existing_ab__ecw_info)) {
$count += (int) $existing_ab__ecw_info[$compared_product_id]['count'];
}
$data = [
'product_id' => $product_id,
'compared_product_id' => $compared_product_id,
'list_id' => $list_id,
'count' => $count,
'group_by' => $group_by,
];
$this->db->query('INSERT INTO ?:?p ?e ON DUPLICATE KEY UPDATE ?u', static::TABLE_COMPARING_INFO, $data, $data);
}

public function updateComparisonInfo($comparison_info)
{
$_tpm_list = [];
$ind = 0;
foreach ($comparison_info as $comparison_product) {
$_tpm_list[$ind++] = array_merge($comparison_product, [
'product_id' => $comparison_product['compared_product_id'],
'compared_product_id' => $comparison_product['product_id'],
]);
}
$comparison_info = fn_array_merge($comparison_info, $_tpm_list);
try {
$this->db->query('INSERT INTO ?:?p ?m ON DUPLICATE KEY UPDATE count = VALUES(count)', static::TABLE_COMPARING_INFO, $comparison_info);
} catch (DatabaseException $e) {
fn_print_die($e->getMessage());
}
}
public function getComparisonInfo($product_id, $compared_product_id, $list_id, $group_by)
{
list($ab__ecw_info) = $this->find([
'product_id' => $product_id,
'compared_product_id' => $compared_product_id,
'list_id' => $list_id,
'group_by' => $group_by,
]);
return empty($ab__ecw_info[$product_id]) ? [] : $ab__ecw_info[$product_id];
}

public function find(array $params, $items_per_page = 0)
{
$params = array_merge([
'page' => 1,
'items_per_page' => $items_per_page,
'sort_by' => 'count',
'sort_order' => 'desc',
'list_id' => 0,
'group_by' => '',
'limit' => 0,
], $params);
$params = \Tygh\Navigation\LastView::instance()->update('ab__extended_comparison_wishlist', $params);
$join = $limit = '';
$sortings = [
'product_id' => 'ab__ecw_info.product_id',
'compared_product_id' => 'ab__ecw_info.compared_product_id',
'count' => 'ab__ecw_info.count',
];
$sorting = db_sort($params, $sortings, $params['sort_by'], $params['sort_order']);
try {
$condition = $this->db->quote('ab__ecw_info.group_by = ?s', $this->settings['group_by']);
if (!empty($params['product_id'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.product_id IN (?n)', (array)$params['product_id']);
}
if (!empty($params['compared_product_id'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.compared_product_id IN (?n)', (array)$params['compared_product_id']);
}
if (isset($params['min_count'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.count >= ?i', (int)$params['min_count']);
}
if (isset($params['max_count'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.count <= ?i', (int)$params['max_count']);
}
if (isset($params['count'])) {
if (is_array($params['count'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.count IN (?n)', $params['count']);
} else {
$condition .= $this->db->quote(' AND ab__ecw_info.count = ?i', (int)$params['count']);
}
}
if (!empty($params['list_id'])) {
$condition .= $this->db->quote(' AND ab__ecw_info.list_id IN (?n)', (array)$params['list_id']);
}
if (!empty($params['limit'])) {
$limit = db_quote(' LIMIT 0, ?i', $params['limit']);
}
if (!empty($params['items_per_page'])) {
$params['total_items'] = $this->db->getField('SELECT COUNT(DISTINCT(ab__ecw_info.compared_product_id)) FROM ?:?p AS ab__ecw_info ?p WHERE ?p', static::TABLE_COMPARING_INFO, $join, $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}

fn_set_hook('ab__extended_comparison_wishlist_find_query_pre', $params, $join, $condition, $sorting, $limit);
if (!empty($params['get_conditions_for_table'])) {
$join .= $this->db->quote(' ?:?p AS ab__ecw_info ON ab__ecw_info.product_id = ?p.product_id', static::TABLE_COMPARING_INFO, $params['get_conditions_for_table']);
return [$join, $condition];
}
$comparison_info = $this->db->getMultiHash('SELECT * FROM ?:?p AS ab__ecw_info ?p WHERE ?p ?p ?p', ['product_id', 'compared_product_id'], static::TABLE_COMPARING_INFO, $join, $condition, $sorting, $limit);
} catch (DatabaseException $e) {
ErrorHandler::handleException($e);
}

fn_set_hook('ab__extended_comparison_wishlist_find_post', $params, $comparison_info);
return [$comparison_info, $params];
}

public function deleteComparisonInfo(array $comparison_infos)
{
$result = true;
$_tmp_list = [];
$ind = 0;
foreach ($comparison_infos as $key => $info) {
$_tmp_list[$ind] = array_merge($info, [
'product_id' => $info['compared_product_id'],
'compared_product_id' => $info['product_id'],
]);
}
foreach ($_tmp_list as $tmp) {
$comparison_infos[] = $tmp;
}
try {
foreach ($comparison_infos as $info) {
$result &= $this->db->query('DELETE FROM ?:?p WHERE ?w', self::TABLE_COMPARING_INFO, $info);
}
} catch (DatabaseException $e) {
fn_print_die($e->getMessage());
}
return $result;
}
}
