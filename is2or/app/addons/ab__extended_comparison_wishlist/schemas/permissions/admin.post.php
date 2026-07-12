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
$schema['ab__extended_comparison_wishlist'] = [
'modes' => [
'update' => [
'permissions' => 'ab__ecw.data.manage',
],
'help' => [
'permissions' => 'ab__ecw.data.manage',
],
'often_compared' => [
'permissions' => 'ab__ecw.data.view',
],
],
'permissions' => [
'GET' => 'ab__ecw.data.view',
'POST' => 'ab__ecw.data.manage',
],
];
$schema['ab__ecw_comparison_pages'] = [
'permissions' => [
'GET' => 'ab__ecw.data.view',
'POST' => 'ab__ecw.data.manage',
],
];
$schema['tools']['modes']['update_status']['param_permissions']['table']['ab__extended_comparison_wishlist_items'] = 'ab__ecw.data.manage';
$schema['tools']['modes']['update_status']['param_permissions']['table']['ab__ecw_comparison_pages'] = 'ab__ecw.data.manage';
return $schema;
