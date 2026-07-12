<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
defined('BOOTSTRAP') or die('Access denied');

function fn_ab__as_update_link($link_data)
{
if (empty($link_data['link'])) {
return false;
}
$link_data['link'] = strtolower($link_data['link']);
if (strpos($link_data['link'], '://') !== false) {
$link_data['link'] = str_replace(fn_ab__as_get_strofront_url($link_data['company_id']), '', $link_data['link']);
ab__as_slash_for_url($link_data['link']);
}
if (empty($link_data['link']) || $link_data['link'] === '/') {
fn_set_notification(NotificationSeverity::ERROR, __('error'), __('ab__as.error_link_empty'));
return false;
}
$full_url = fn_ab__as_get_full_url($link_data['link'], $link_data['company_id']);
$exists = db_get_field('SELECT link FROM ?:ab__as_links WHERE link IN (?a) AND company_id = ?i', [$link_data['link'], $full_url], $link_data['company_id']);
if (!empty($exists)) {
fn_set_notification(NotificationSeverity::ERROR, __('error'), __('ab__as.error_link_exists', [
'[link]' => $exists,
]));
return false;
}
db_replace_into('ab__as_links', $link_data);
return true;
}

function fn_ab__as_get_links($params = [], $items_per_page = 0)
{
$default_params = [
'page' => 1,
'items_per_page' => $items_per_page,
'company_id' => 0,
];
$params = array_merge($default_params, $params);
$fields = [
'?:ab__as_links.*',
];
$sortings = [
'link' => '?:ab__as_links.link',
];
$sorting = db_sort($params, $sortings, 'link', 'asc');
$condition = db_quote(' AND company_id = ?s', $params['company_id']);
if (!empty($params['q'])) {
$condition .= db_quote(' AND ?:ab__as_links.link LIKE ?l', '%' . $params['q'] . '%');
}
$limit = '';
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT COUNT(link) FROM ?:ab__as_links WHERE 1 ?p', $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$links = db_get_array('SELECT ?p FROM ?:ab__as_links WHERE 1 ?p ?p ?p', implode(',', $fields), $condition, $sorting, $limit);
return [$links, $params];
}

function fn_ab__as_delete_link($link, $company_id)
{
if (!empty($link)) {
db_query('DELETE FROM ?:ab__as_links WHERE link LIKE ?l AND company_id', $link, $company_id);
}
}

function ab__as_slash_for_url(&$url)
{
$url = '/' . ltrim($url, '/');
}

function fn_ab__as_get_full_url($link, $company_id)
{
static $company_param_name = null;
if ($company_param_name === null) {
$company_param_name = fn_allowed_for('MULTIVENDOR') ? 'storefront_id' : 'company_id';
}
if (mb_substr($link, 0, 1) === '/') {
$full_url = fn_ab__as_get_strofront_url($company_id) . ltrim($link, '/');
} elseif (strpos($link, '://') === false) {
if (strpos($link, $company_param_name . '=') === false) {
$link .= '&' . $company_param_name . '=' . $company_id;
}
$full_url = fn_url($link, 'C', fn_get_storefront_protocol());
} else {
$full_url = $link;
}
return $full_url;
}

function fn_ab__as_get_strofront_url($company_id)
{
static $url = null;
if ($url === null) {
$company_param_name = fn_allowed_for('MULTIVENDOR') ? 'storefront_id' : 'company_id';
$url = fn_url('?' . $company_param_name . '=' . $company_id, 'C', fn_get_storefront_protocol());
}
return $url;
}
