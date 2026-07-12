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
use Tygh\Registry;
defined('BOOTSTRAP') || die('Access denied');
define('AB__SFB_DATA_EXP_PATH', Registry::get('config.dir.var') . 'ab__data/ab__seo_for_blog/');
function fn_ab__sfb_export_blog()
{
$path = AB__SFB_DATA_EXP_PATH . 'blog/';
fn_rm($path);
fn_mkdir($path);
$authors_path = AB__SFB_DATA_EXP_PATH . 'authors/';
fn_rm($authors_path);
fn_mkdir($authors_path);
$blog_pages = array_shift(fn_get_pages([
'page_type' => 'B',
'get_tree' => 'multilevel',
], 0, 'en')[0])['subpages'];
$images = fn_get_image_pairs(array_keys($blog_pages), 'blog', 'M', true, false);
$arr = [];
$i = 0;
$authors_json = [];
$author_ids = array_filter(array_unique(array_column($blog_pages, 'author_id')));
[$authors] = fn_ab__sfb_get_authors(['author_id' => $author_ids]);
foreach ($authors as $author) {
if(!empty($author['main_pair']['detailed']['absolute_path'])){
$image_name = 'author-image-' . $author['author_id'] . '.' . pathinfo($author['main_pair']['detailed']['absolute_path'], PATHINFO_EXTENSION);
$author['author_image'] = $image_name;
fn_copy($author['main_pair']['detailed']['absolute_path'], "{$authors_path}/{$image_name}");
}
unset($author['main_pair']);
$authors_json[] = $author;
}
fn_put_contents("{$authors_path}/data.json", json_encode($authors_json, JSON_PRETTY_PRINT));
foreach ($blog_pages as $key => $page) {
if ($images[$key]) {
$img = array_shift($images[$key])['icon'];
$image_name = 'blog-image-' . $key . '.' . pathinfo($img['absolute_path'], PATHINFO_EXTENSION);
$page['blog_image'] = $image_name;
fn_copy($img['absolute_path'], "{$path}/{$image_name}");
}
$page['author'] = 'AlexBranding';
$page['position'] = ++$i * 100;
$ru = fn_get_page_data($key, 'ru');
$page['ru'] = [
'lang_code' => 'ru',
'page' => $ru['page'] ? $ru['page'] : '',
'description' => $ru['description'] ? $ru['description'] : '',
];
fn_ab__sfb_unset_blog_page_data($page);
$arr[] = $page;
}
fn_put_contents("{$path}/data.json", json_encode($arr, JSON_PRETTY_PRINT));
fn_set_notification('N', __('notice'), __('ab__sfb.export.success'));
}
function fn_ab__sfb_unset_blog_page_data(&$page)
{
$arr = [
'page_id',
'parent_id',
'id_path',
'company_id',
'lang_code',
'timestamp',
'main_pair',
'meta_keywords',
'meta_description',
'seo_name',
'seo_path',
'page_title',
'status'
];
foreach ($arr as $unset) {
if (isset($page[$unset])) {
unset($page[$unset]);
}
}
}
