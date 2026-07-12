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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
use Tygh\Registry;
function fn_ab__mcd_export_cat_descr($categories)
{
$data = [];
$path_part = 'ab__data/ab__multiple_cat_descriptions/demodata/descriptions';
$path = Registry::get('config.dir.var') . $path_part;
fn_rm($path);
fn_mkdir($path);
foreach ($categories as $category) {
$p = [
'object_id' => $category,
'object_type' => 'category',
'status' => 'A',
'get_object_info' => true,
];
list($descs) = fn_ab__mcd_get_descs($p, 'en');
$object = [
'object_type' => 'category',
'header_tag' => 'div',
'type' => 'multidescriptions',
];
foreach ($descs as $desc_en) {
$mdi_id = $desc_en['mdi_id'];
$desc = [
'status' => $desc_en['status'],
'position' => $desc_en['position'],
'is_open' => $desc_en['is_open'],
'tag' => $desc_en['tag'],
'title' => $desc_en['title'],
'description' => $desc_en['description'],
];
$object['items'][] = $desc;
}
$data[] = $object;
}
fn_put_contents("{$path}/data.json", json_encode($data, JSON_PRETTY_PRINT));
$categories = implode(', ', $categories);
fn_set_notification('N', __('notice'), "Categories {$categories} descriptions was exported successfully!");
}
