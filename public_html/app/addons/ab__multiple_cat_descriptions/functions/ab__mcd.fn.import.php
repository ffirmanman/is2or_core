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
function fn_ab__multiple_cat_descriptions_install_demodata()
{
$answer = [];
foreach (['fn_ab__mcd_install_cat_descr'] as $func) {
if (function_exists($func)) {
$val = $func('A');
if (!$val) {
return false;
}
$answer[$func] = $val;
}
}
return $answer;
}
function fn_ab__mcd_install_cat_descr($status)
{
$path_part = 'ab__data/ab__multiple_cat_descriptions/demodata/descriptions';
$path = Registry::get('config.dir.var') . $path_part;
$langs = \Tygh\Languages\Languages::getSimpleLanguages(true);
$data = fn_get_contents("{$path}/data.json");
if (empty($data)) {
return false;
}
$company = fn_get_runtime_company_id();
$category_id = db_get_field("SELECT cats.category_id,COUNT(pcats.product_id) as t_products FROM ?:categories cats LEFT JOIN ?:products_categories pcats ON pcats.category_id = cats.category_id WHERE status='A' AND is_trash='N' AND company_id={$company} GROUP BY cats.category_id ORDER BY t_products DESC LIMIT 1");
if (!empty($category_id)) {
$descs = json_decode($data, true);
$items = [];
foreach ($descs as $desc) {
$new_item = $desc;
$new_item['description'] = $new_item['descriptions']['default']['description'];
$new_item['title'] = $new_item['descriptions']['default']['title'];
unset($new_item['descriptions']);
$mdi_id = fn_ab__md_update_item($new_item);
$items[] = $mdi_id;
foreach ($langs as $lang => $dummy){
if(isset($desc['descriptions'][$lang])){
fn_ab__md_update_item(array_merge($desc['descriptions'][$lang],['mdi_id'=>$mdi_id]),$mdi_id,$lang);
}
}
}
fn_ab__mcd_update_item_links($category_id, 'category', $items);
$href = fn_url('categories.update&category_id=' . $category_id . '&selected_section=ab__mcd_tab');
fn_set_notification('N', __('notice'), __('ab__mcd.demodata.success', ['[descriptions]' => '', '[href]' => $href]), 'S');
return $category_id;
}
return false;
}
