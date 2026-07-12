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
use Tygh\BlockManager\Exim;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Settings;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__seo_for_tags_install()
{
fn_ab__sft_install_layouts();
fn_ab__sft_install_add_db_fields();
if (Registry::get('addons.seo.status') === 'A') {
fn_ab__sft_add_seo_name_for_tags_list_page();
}
}

function fn_ab__sft_install_layouts()
{
$schema = fn_get_schema('ab__layouts', 'ab__seo_for_tags', 'php', true);
foreach ($schema as $dispatch => $data) {
fn_ab__sft_add_layouts($dispatch, $data['file_name']);
}
}

function fn_ab__sft_add_layouts($dispatch, $file_name, $layout_id = 0)
{
$condition = '';
if ($layout_id > 0) {
$condition .= db_quote(' AND layout.layout_id = ?i', $layout_id);
}
$target_layouts = db_get_array('SELECT layout.layout_id, layout.theme_name, layout.storefront_id FROM ?:bm_layouts AS layout'
. ' LEFT JOIN ?:bm_locations AS location ON location.layout_id = layout.layout_id AND location.dispatch = ?s'
. ' WHERE location.location_id IS NULL ?p', $dispatch, $condition);
if (!empty($target_layouts)) {
foreach ($target_layouts as $layout) {
Exim::instance($layout['storefront_id'], $layout['layout_id'])->importFromFile(fn_ab__sft_get_full_layout_path($file_name, $layout['theme_name']));
}
}
}

function fn_ab__sft_add_seo_name_for_tags_list_page()
{
$existing_seo_names = db_get_hash_multi_array('SELECT name, company_id, lang_code FROM ?:seo_names WHERE dispatch = ?s', ['company_id', 'lang_code'], 'tags.list');
$repository = Tygh::$app['storefront.repository'];
list($storefronts) = $repository->find();
$langs = Languages::getAll();
foreach ($storefronts as $storefront) {
foreach ($langs as $lang_code => $v) {
if (empty($existing_seo_names[$storefront->storefront_id][$lang_code])) {
fn_create_seo_name(0, 's', 'tags', 0, 'tags.list', $storefront->storefront_id, $lang_code, false, 'C');
}
}
}
}

function fn_ab__sft_get_full_layout_path($file_name, $theme_name)
{
static $path = 'var/ab__data/ab__seo_for_tags/layouts';
$theme = file_exists($path . '/' . $theme_name . '/' . $file_name) ? $theme_name : 'responsive';
return $path . '/' . $theme . '/' . $file_name;
}

function fn_ab__sft_install_add_db_fields()
{
$objects = [
[
'table' => '?:tags',
'field' => 'ab__sft_conditions',
'sql' => 'ALTER TABLE ?:tags ADD ab__sft_conditions mediumtext',
],
[
'table' => '?:tags',
'field' => 'ab__sft_generate_by_cron',
'sql' => 'ALTER TABLE ?:tags ADD ab__sft_generate_by_cron char(1) DEFAULT \'N\'',
'add_sql' => [
'ALTER TABLE ?:tags ADD INDEX ab__sft_generate_by_cron (ab__sft_generate_by_cron)'
]
],
];
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $object) {
$fields = db_get_fields('DESCRIBE ' . $object['table']);
if (!empty($fields) && is_array($fields)) {
$is_present_field = false;
foreach ($fields as $f) {
if ($f == $object['field']) {
$is_present_field = true;
break;
}
}
if (!$is_present_field) {
db_query($object['sql']);
if (!empty($object['add_sql'])) {
foreach ($object['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
}
}
