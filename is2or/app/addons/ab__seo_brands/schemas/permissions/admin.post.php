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
$schema['ab__seo_brands'] = [
'modes' => [
'update' => [
'permissions' => 'ab__sb.data.manage',
],
'help' => [
'permissions' => 'ab__sb.data.manage',
],
],
'permissions' => [
'GET' => 'ab__sb.data.view',
'POST' => 'ab__sb.data.manage',
],
];
$schema['ab__sb_feature_variants'] = [
'permissions' => [
'GET' => 'ab__sb.data.view',
'POST' => 'ab__sb.data.manage',
],
];
$schema['tools']['modes']['update_status']['param_permissions']['table']['ab__seo_brands_items'] = 'ab__sb.data.manage';
return $schema;
