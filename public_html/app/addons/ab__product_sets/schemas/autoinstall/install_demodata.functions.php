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
use Tygh\Languages\Languages;
function fn_ab__ps_install_demodata($data)
{
$categories = db_get_fields('SELECT category_id FROM ?:categories WHERE level in (3,4) AND status = \'A\' AND is_trash = \'N\' LIMIT 5');
$products = db_get_fields('SELECT product_id FROM ?:products_categories WHERE category_id in (?n)', $categories);
if (!empty($products)) {
$product_list = [];
foreach ($products as $product_id) {
$temp = $products;
unset($temp[array_search($product_id, $temp)]);
$products_lists = array_chunk($temp, floor(count($temp) / count($data)));
foreach ($data as $key => $set) {
if (empty($products_lists[$key])) {
continue;
}
$set['product_id'] = $product_id;
$set['products'] = implode(',', $products_lists[$key]);
$set_id = fn_ab__ps_update_set($set, 0);
if (in_array('ru', array_keys(Languages::getAll()))) {
$set_ru = [];
$set_ru['set'] = $set['ru']['set'];
$set_ru['lang_code'] = 'ru';
$set_ru['set_id'] = $set_id;
fn_ab__ps_update_set($set_ru, $set_id, 'ru');
}
}
$product_list[] = '<a href="' . fn_url('products.view&product_id=' . $product_id, 'C') . '">' . fn_get_product_name($product_id) . '</a>';
}
return __('ab__ps.autoinstall.install_demodata', ['[products]' => implode(', ', $product_list)]);
}
return '';
}
