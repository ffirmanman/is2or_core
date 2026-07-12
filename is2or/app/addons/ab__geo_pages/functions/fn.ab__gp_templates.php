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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
function fn_ab__gp_update_template($template_data, $template_id = 0, $lang_code = DESCR_SL)
{
if ($template_id) {
$template_data['template_id'] = $template_id;
db_replace_into('ab__gp_templates', $template_data);
$template_data['lang_code'] = $lang_code;
db_replace_into('ab__gp_template_descriptions', $template_data);
} else {
$insert_data = [
'company_id' => fn_get_runtime_company_id(),
'object_id' => $template_data['object_id'],
'object_type' => $template_data['object_type'],
'is_global' => $template_data['is_global'],
];
$template_id = db_query('INSERT INTO ?:ab__gp_templates ?e', $insert_data);
fn_create_description('ab__gp_template_descriptions', 'template_id', $template_id, $template_data);
}
return $template_id;
}
function fn_ab__gp_get_templates($params = [], $items_per_page = 0, $lang_code = DESCR_SL)
{
$params = array_merge([
'template_id' => '',
'is_global' => '',
'items_per_page' => $items_per_page,
], $params);
$join = $condition = $limit = '';
$fields = [
'templates.template_id',
'templates.object_id',
'templates.object_type',
'templates.company_id',
'templates.is_global',
'td.template_name',
'td.name',
'td.description',
'td.title',
'td.meta_description',
];
if (!empty($params['template_id'])) {
$condition .= db_quote(' AND templates.template_id = ?i', $params['template_id']);
}
if (!empty($params['template_ids'])) {
$condition .= db_quote(' AND templates.template_id IN(?n)', $params['template_ids']);
}
if (!empty($params['is_global'])) {
$condition .= db_quote(' AND templates.is_global = ?s', $params['is_global']);
}
$join .= db_quote(' LEFT JOIN ?:ab__gp_template_descriptions td ON td.template_id = templates.template_id AND td.lang_code = ?s', $lang_code);
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT count(*) FROM ?:ab__gp_templates templates ?p WHERE 1 ?p', $join, $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$templates = db_get_hash_array('SELECT ?p FROM ?:ab__gp_templates templates ?p WHERE 1 ?p ?p', 'template_id', implode(',', $fields), $join, $condition, $limit);
return [$templates, $params];
}
function fn_ab__gp_delete_template($template_id)
{
db_query('DELETE FROM ?:ab__gp_templates WHERE template_id IN(?n)', $template_id);
db_query('DELETE FROM ?:ab__gp_template_descriptions WHERE template_id IN(?n)', $template_id);
}
function fn_ab__gp_get_object_location_settings($params = [])
{
$params = array_merge([
'object_id' => '',
'object_type' => '',
'location_id' => '',
'group_by' => 'location_id',
], $params);
$condition = '';
$condition .= db_quote(' AND object_id = ?i', $params['object_id']);
$condition .= db_quote(' AND object_type = ?s', $params['object_type']);
if (!empty($params['location_id'])) {
$condition .= db_quote(' AND location_id = ?i', $params['location_id']);
}
return db_get_hash_array('SELECT * FROM ?:ab__gp_object_location_settings WHERE 1 ?p', $params['group_by'], $condition);
}
function fn_ab__gp_update_object_location_settings($object_location_settings, $object_id, $object_type)
{
$current_location_settings = fn_ab__gp_get_object_location_settings(['object_id' => $object_id, 'object_type' => $object_type]);
$template_ids = array_column($current_location_settings, 'template_id');
list($current_templates) = fn_ab__gp_get_templates(['template_ids' => $template_ids]);
foreach ($object_location_settings as $location_id => $object_location_settings_data) {
$template_id = (int) $object_location_settings_data['template_id'] ?? 0;
$curent_locaion_template_id = $current_location_settings[$location_id]['template_id'] ?? false;
$curent_locaion_template_data = $current_templates[$curent_locaion_template_id] ?? false;
if ($curent_locaion_template_data && $curent_locaion_template_data['is_global'] === 'N' && $curent_locaion_template_data['template_id'] != $template_id) {
fn_ab__gp_delete_template($curent_locaion_template_data['template_id']);
}
if ($object_location_settings_data['template_id'] === 'custom'
|| (isset($object_location_settings_data['is_global']) && $object_location_settings_data['is_global'] === 'N')
) {
unset($object_location_settings_data['template_id']);
$object_location_settings_data['is_global'] = 'N';
$object_location_settings_data['template_id'] = fn_ab__gp_update_template($object_location_settings_data, $template_id);
}
$update_data = [
'object_id' => $object_id,
'object_type' => $object_type,
'location_id' => $location_id,
'template_id' => $object_location_settings_data['template_id'],
'enable' => $object_location_settings_data['enable'],
];
if(isset($object_location_settings_data['is_noindex'])){
$update_data['is_noindex'] = $object_location_settings_data['is_noindex'];
}
if(isset($object_location_settings_data['canonical_id'])){
$update_data['canonical_id'] = $object_location_settings_data['canonical_id'];
}
db_replace_into('ab__gp_object_location_settings', $update_data);
}
}
