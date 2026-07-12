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
$schema['central']['ab__addons']['items']['ab__multiple_cat_descriptions'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__mcd_items.manage',
'position' => 10,
'subitems' => [
'ab__mcd_descs.settings' => [
'href' => 'addons.update&addon=ab__multiple_cat_descriptions',
'position' => 0,
],
'ab__mcd_items.elements.list' => [
'href' => 'ab__mcd_items.manage?item_type=elements',
'position' => 120,
],
'ab__mcd_items.headers.list' => [
'href' => 'ab__mcd_items.manage?item_type=headers',
'position' => 140,
],
'ab__mcd_descs.category.with_mcd' => [
'href' => 'categories.manage&ab__mcd_descs=Y',
'position' => 150,
],
'ab__mcd_descs.category.without_mcd' => [
'href' => 'categories.manage&ab__mcd_descs=N',
'position' => 160,
],
'ab__mcd_descs.demodata' => [
'href' => 'ab__mcd_items.demodata',
'position' => 200,
],
'ab__mcd_descs.help' => [
'href' => 'ab__mcd_items.help',
'position' => 10000,
],

],
];
return $schema;
