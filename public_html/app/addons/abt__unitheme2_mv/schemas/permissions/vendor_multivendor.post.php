<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
$schema['controllers']['abt__ut2_mv_blocks'] = [
'permissions' => false,
'modes' => [
'manage' => [
'permissions' => true,
],
'delete' => [
'sub_condition' => [
'function' => 'fn_abt__ut2_check_block_permissions',
],
],
],
];
$schema['controllers']['block_manager']['modes']['update_block']['sub_condition'] = [
'function' => 'fn_abt__ut2_check_block_permissions',
];
$schema['controllers']['tools']['modes']['update_position']['param_permissions']['table']['abt__ut2_mv_vendor_blocks'] = true;
$schema['controllers']['tools']['modes']['update_status']['param_permissions']['table']['abt__ut2_mv_vendor_blocks'] = true;
$schema['controllers']['abt__ut2_mv_banners']['permissions'] = true;
$schema['controllers']['abt__ut2_mv_menus']['permissions'] = true;
$banner_id = $_REQUEST['id'] ?? null;
$schema['controllers']['banners'] = [
'permissions' => false,
'modes' => [
'picker' => [
'permissions' => true,
],
'manage' => [
'permissions' => true,
],
'update' => [
'sub_condition' => [
'function' => 'fn_abt__ut2_check_banner_permissions',
],
],
'delete' => [
'sub_condition' => [
'function' => 'fn_abt__ut2_check_banner_permissions',
],
],
'add' => [
'permissions' => true,
],
'preview' => [
'permissions' => true,
],
'update_group' => [
'permissions' => true,
],
'update_status' => [
'permissions' => true,
],
'm_delete' => [
'permissions' => true,
],
'm_update_statuses' => [
'permissions' => true,
],
'duplicate' => [
'permissions' => true,
],
],
];
$schema['controllers']['tools']['modes']['update_status']['param_permissions']['table']['banners'] = true;
$schema['controllers']['tools']['modes']['update_status']['condition']['table']['banners'] =
[
'operator' => 'and',
'function' => ['fn_abt__ut2_check_banner_permissions', ['banner_id' => $banner_id]],
];
return $schema;
