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
use Tygh\Enum\ObjectStatuses;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
$schema['central']['ab__addons']['items']['ab__custom_h1'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__ch1.help',
'position' => 100,
'subitems' => [
'ab__ch1.product.list' => [
'href' => 'products.manage&ab__ch1[is_product_filled]=filled',
'position' => 100,
],
'ab__ch1.category.list' => [
'href' => 'categories.manage&ab__ch1[is_category_filled]=filled',
'position' => 200,
],
'ab__ch1.page.list' => [
'href' => 'pages.manage&ab__ch1[is_page_filled]=filled&get_tree=multi_level',
'position' => 300,
],
'ab__ch1.features_list' => [
'href' => 'ab__ch1.features_list',
'position' => 500,
],
'ab__ch1.help' => [
'href' => 'ab__ch1.help',
'position' => 1000,
],
],
];
if (Registry::get('addons.blog.status') == ObjectStatuses::ACTIVE) {
$schema['central']['ab__addons']['items']['ab__custom_h1']['subitems']['ab__ch1.blog.list'] = [
'href' => 'pages.manage&ab__ch1[is_page_filled]=filled&get_tree=multi_level&page_type=' . PAGE_TYPE_BLOG,
'position' => 400,
];
}
return $schema;
