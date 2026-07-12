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
$schema['ab__seo_for_blog'] = [
'modes' => [
'update' => [
'permissions' => 'ab__sfb.data.manage',
],
'help' => [
'permissions' => 'ab__sfb.data.manage',
],
],
'permissions' => [
'GET' => 'ab__sfb.data.view',
'POST' => 'ab__sfb.data.manage',
],
];
$schema['ab__sfb_authors'] = [
'modes' => [
'update' => [
'permissions' => 'ab__sfb.data.manage',
],
'delete' => [
'permissions' => 'ab__sfb.data.manage',
],
],
'permissions' => [
'GET' => 'ab__sfb.data.view',
'POST' => 'ab__sfb.data.manage',
],
];
$schema['tools']['modes']['update_status']['param_permissions']['table']['ab__sfb_authors'] = 'ab__sfb.data.manage';
return $schema;
