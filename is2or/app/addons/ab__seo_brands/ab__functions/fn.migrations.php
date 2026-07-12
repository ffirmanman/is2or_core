<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2022   *
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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__seo_brands_install()
{
fn_ab__sb_install_layouts();
fn_ab__sb_install_add_db_fields();
}

function fn_ab__sb_install_add_db_fields()
{
$objects = [
['t' => '?:product_filters',
'i' => [
'ab__sb_descr_position' => ['p' => 'enum(\'top\',\'bottom\') NOT NULL DEFAULT \'top\''],
'ab__sb_variants_template' => ['p' => 'varchar(16) NOT NULL DEFAULT \'grid\''],
],
],
['t' => '?:product_filter_descriptions',
'i' => [
'ab__sb_h1' => ['p' => 'varchar(255) NOT NULL DEFAULT \'\''],
'ab__sb_breadcrumb' => ['p' => 'varchar(255) NOT NULL DEFAULT \'\''],
'ab__sb_description' => ['p' => 'mediumtext DEFAULT NULL'],
'ab__sb_page_title' => ['p' => 'varchar(255) NOT NULL DEFAULT \'\''],
'ab__sb_meta_description' => ['p' => 'varchar(255) NOT NULL DEFAULT \'\''],
'ab__sb_meta_keywords' => ['p' => 'varchar(255) NOT NULL DEFAULT \'\''],
],
],
];
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $o) {
$fields = db_get_fields('DESCRIBE ' . $o['t']);
if (!empty($fields) && is_array($fields)) {
if (!empty($o['i']) && is_array($o['i'])) {
foreach ($o['i'] as $f_name => $f) {
if (!in_array($f_name, $fields)) {
db_query('ALTER TABLE ?p ADD ?p ?p', $o['t'], $f_name, $f['p']);
}
}
}
}
}
}
}

function fn_ab__sb_install_layouts()
{
$schema = fn_get_schema('ab__layouts', 'ab__seo_brands', 'php', true);
foreach ($schema as $dispatch => $data) {
fn_ab__sb_add_layouts($dispatch, $data['file_name']);
}
}

function fn_ab__sb_add_layouts($dispatch, $file_name, $layout_id = 0)
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
Exim::instance($layout['storefront_id'], $layout['layout_id'])->importFromFile(fn_ab__sb_get_full_layout_path($file_name, $layout['theme_name']));
}
}
}
function fn_ab__sb_get_full_layout_path($file_name, $theme_name)
{
static $path = 'var/ab__data/ab__seo_brands/layouts';
$theme = file_exists($path . '/' . $theme_name . '/' . $file_name) ? $theme_name : 'responsive';
return $path . '/' . $theme . '/' . $file_name;
}
