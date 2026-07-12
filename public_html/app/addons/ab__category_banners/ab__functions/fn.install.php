<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
use Tygh\Settings;
use Tygh\Languages\Languages;
function fn_ab__cb_install()
{
fn_ab__cb_install_db_fields();
fn_ab__cb_install_cron_key();
fn_ab__cb_migrate_banners_to_companies();
fn_ab__cb_migrate_banners_to_layout_table();
}
function fn_ab__cb_install_db_fields()
{
$objects = array(
array(
'table' => '?:ab__category_banners',
'field' => 'position',
'sql' => 'ALTER TABLE ?:ab__category_banners ADD position VARCHAR(255) NOT NULL DEFAULT \'\'',
),
array(
'table' => '?:ab__category_banners',
'field' => 'include_subcategories',
'sql' => 'ALTER TABLE ?:ab__category_banners ADD include_subcategories CHAR(1) NOT NULL DEFAULT \'N\'',
),
array(
'table' => '?:ab__category_banners',
'field' => 'nofollow',
'sql' => 'ALTER TABLE ?:ab__category_banners ADD nofollow CHAR(1) NOT NULL DEFAULT \'N\'',
),
array(
'table' => '?:ab__category_banners',
'field' => 'company_id',
'sql' => 'ALTER TABLE ?:ab__category_banners ADD company_id INT(11) UNSIGNED NOT NULL DEFAULT 0',
),
);
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
function fn_ab__cb_install_cron_key()
{
$new_cron_key = fn_generate_password(15);
Settings::instance()->updateValue('cron_key', $new_cron_key, 'ab__category_banners');
}
function fn_ab__cb_migrate_banners_to_companies(){
if (fn_allowed_for('ULTIMATE')) {
[$banners] = fn_ab__get_category_banners(['company_id' => 0]);
$_auth = [];
[$companies] = fn_get_companies([], $_auth);
$languages = Languages::getAll();
foreach ($banners as $banner) {
$banners_data = [];
foreach ($companies as $company_data) {
$last_created_banner_id = 0;
foreach ($languages as $lang_code => $dummy) {
$banners_data = fn_ab__get_category_banner_data($banner['category_banner_id'], $lang_code, ['ignore_company_condition' => true]);
$prev_image_id = $banners_data['category_banner_image_id'];
unset($banners_data['category_banner_id'],$banners_data['category_banner_image_id']);
$banners_data['company_id'] = $company_data['company_id'];
$last_created_banner_id = fn_ab__update_category_banner($banners_data, $last_created_banner_id, $lang_code);
$category_banner_image_id = db_get_field('SELECT category_banner_image_id FROM ?:ab__category_banner_images_and_descr WHERE category_banner_id = ?i AND lang_code = ?s', $last_created_banner_id, $lang_code);
fn_clone_image_pairs($category_banner_image_id, $prev_image_id, 'category_banner', $lang_code);
}
}
fn_ab__delete_category_banner($banner['category_banner_id']);
}
}
}
function fn_ab__cb_migrate_banners_to_layout_table(){

$existent_banners = db_get_fields('SELECT category_banner_id FROM ?:ab__category_banners');
$existent_layouts = db_get_field('SELECT count(*) FROM ?:ab__category_banners_layout_data');
if(!empty($existent_banners) && count($existent_banners) > $existent_layouts){
$banners_layout_data = [];
foreach ($existent_banners as $existent_banner) {
$banners_layout_data[] = [
'category_banner_id' => $existent_banner,
'products_multicolumns_type' => 'I',
'products_without_options_type' => 'I',
'short_list_type' => 'I',
];
}
db_query('INSERT IGNORE INTO ?:ab__category_banners_layout_data ?m',$banners_layout_data);
}
}
