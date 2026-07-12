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
use Tygh\BlockManager\Exim;
use Tygh\Languages\Languages;
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
function fn_ab__ecw_install()
{
$objects = [

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
fn_ab__ecw_install_layouts();
fn_ab__ecw_create_seo_names();
fn_ab__ecw_upgrade_v110_v100();
}

function fn_ab__ecw_install_layouts()
{
$schema = fn_get_schema('ab__layouts', 'ab__extended_comparison_wishlist','php',true);
foreach ($schema as $dispatch => $data) {
fn_ab__ecw_add_layouts($dispatch, $data['file_name']);
}
}
function fn_ab__ecw_create_seo_names()
{
if (!empty($_REQUEST['rule_data']) && !empty($_REQUEST['rule_data']['name']) && !empty($_REQUEST['rule_data']['rule_params'])) {
if (Registry::get('addons.seo.single_url') == 'Y') {
$lang_codes = [Registry::get('settings.Appearance.frontend_default_language')];
} else {
$lang_codes = array_keys(Languages::getAll());
}
foreach ($lang_codes as $lang_code) {
$is_exists = db_get_field("SELECT COUNT(*) FROM ?:seo_names WHERE lang_code = ?s AND dispatch = 'ab__ecw_comparison_pages.list'", $lang_code);
if (empty($is_exists)) {
fn_create_seo_name(0, 's', 'comparisons', 0, AB__ECW_PAGES_LIST_DISPATCH, '', $lang_code);
}
}
}
}

function fn_ab__ecw_add_layouts($dispatch, $file_name, $layout_id = 0)
{
$condition = '';
if ($layout_id > 0) {
$condition .= db_quote(' AND layout.layout_id = ?i', $layout_id);
}
$target_layouts = db_get_array(
'SELECT layout.layout_id, layout.theme_name, layout.storefront_id FROM ?:bm_layouts AS layout'
. ' LEFT JOIN ?:bm_locations AS location ON location.layout_id = layout.layout_id AND location.dispatch = ?s'
. ' WHERE location.location_id IS NULL ?p'
, $dispatch, $condition
);
if (!empty($target_layouts)) {
foreach ($target_layouts as $layout) {
Exim::instance($layout['storefront_id'], $layout['layout_id'])->importFromFile(fn_ab__ecw_get_full_layout_path($file_name, $layout['theme_name']));
}
}
}

function fn_ab__ecw_get_full_layout_path($file_name, $theme_name)
{
static $path = 'var/ab__data/ab__extended_comparison_wishlist/layouts';
$theme = file_exists($path . '/' . $theme_name . '/' . $file_name) ? $theme_name : 'responsive';
return $path . '/' . $theme . '/' . $file_name;
}

function fn_ab__ecw_upgrade_v110_v100()
{
db_query('CREATE TABLE IF NOT EXISTS ?:ab__ecw_comparison_pages (
page_id MEDIUMINT(8) unsigned NOT NULL AUTO_INCREMENT,
product_ids MEDIUMTEXT,
status CHAR(1) NOT NULL DEFAULT \'A\',
storefront_id MEDIUMINT(8) unsigned NOT NULL DEFAULT 0,
PRIMARY KEY (page_id)
) DEFAULT CHARSET UTF8;');
db_query('CREATE TABLE IF NOT EXISTS ?:ab__ecw_comparison_page_descriptions (
page_id MEDIUMINT(8) unsigned NOT NULL,
name VARCHAR(256) NOT NULL DEFAULT \'\',
short_description MEDIUMTEXT,
description MEDIUMTEXT,
page_title VARCHAR(256) NOT NULL DEFAULT \'\',
meta_description VARCHAR(512) NOT NULL DEFAULT \'\',
meta_keywords VARCHAR(512) NOT NULL DEFAULT \'\',
lang_code CHAR(2) NOT NULL DEFAULT \'\',
PRIMARY KEY (page_id, lang_code),
FOREIGN KEY (page_id) REFERENCES ?:ab__ecw_comparison_pages (page_id) ON DELETE CASCADE
) DEFAULT CHARSET UTF8;');
}
