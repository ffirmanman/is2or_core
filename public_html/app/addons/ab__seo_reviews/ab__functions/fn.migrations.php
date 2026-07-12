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
use Tygh\BlockManager\Layout;
use Tygh\BlockManager\Location;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__seo_reviews_install()
{
fn_ab__sw_install_layouts();
}

function fn_ab__sw_install_layouts()
{
$schema = fn_get_schema('ab__layouts', 'ab__seo_reviews','php',true);
foreach ($schema as $dispatch => $data) {
fn_ab__sw_add_layouts($dispatch, $data['file_name']);
}
}

function fn_ab__sw_add_layouts($dispatch, $file_name, $layout_id = 0)
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
Exim::instance($layout['storefront_id'], $layout['layout_id'])->importFromFile(fn_ab__sw_get_full_layout_path($file_name, $layout['theme_name']));
}
}
}

function fn_ab__sw_get_full_layout_path($file_name, $theme_name)
{
static $path = 'var/ab__data/ab__seo_reviews/layouts';
$theme = file_exists($path . '/' . $theme_name . '/' . $file_name) ? $theme_name : 'responsive';
return $path . '/' . $theme . '/' . $file_name;
}

function fn_ab__seo_reviews_uninstall()
{
$installed_themes = fn_get_installed_themes();
$design_dir = fn_get_theme_path('[themes]/', 'C');
foreach ($installed_themes as $theme_name) {
$path = $design_dir . $theme_name . '/layouts/addons/ab__seo_reviews';
if (is_dir($path)) {
fn_rm($path);
}
}
}
