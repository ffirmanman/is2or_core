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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
$schema['central']['ab__addons']['items']['ab__extended_comparison_wishlist'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__extended_comparison_wishlist.help',
'position' => 10,
'subitems' => [
'ab__extended_comparison_wishlist.settings' => [
'href' => 'addons.update&addon=ab__extended_comparison_wishlist&selected_section=settings',
'position' => 0,
],
'ab__ecw_comparison_pages.manage' => [
'href' => 'ab__ecw_comparison_pages.manage',
'position' => 10,
],
'ab__ecw_comparison_pages.demo_data' => [
'href' => 'ab__ecw_comparison_pages.demo_data',
'position' => 9000,
],
'ab__extended_comparison_wishlist.help' => [
'href' => 'ab__extended_comparison_wishlist.help',
'position' => 10000,
],
],
];
return $schema;
