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
use Tygh\Registry;
$schema['ab__sf_when_no_main_products'] = [
'ab__sf_block_info' => [
'type' => 'template',
'template' => 'addons/ab__seo_filters/views/ab__sf/block_info.tpl',
],
'limit' => [
'type' => 'input',
'default_value' => 3,
],
'ab__sf_subcats' => [
'type' => 'checkbox',
'default_value' => 'N',
],
'ab__sf_sort' => [
'type' => 'selectbox',
'values' => fn_ab__sf_get_sortings(),
'default_value' => 'price-asc',
],
];
function fn_ab__sf_get_sortings()
{
$res = ['price-desc' => 'price-desc'];
$sortings = array_keys(Registry::get('settings.Appearance.available_product_list_sortings'));
if (!empty($sortings)) {
foreach ($sortings as $sorting) {
$res[$sorting] = 'sort_by_' . str_replace('-', '_', $sorting);
}
}
return $res;
}
return $schema;
