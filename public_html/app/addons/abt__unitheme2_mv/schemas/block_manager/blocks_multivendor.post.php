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
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\YesNo;
if (fn_abt__ut2_mv_is_vendor_store_available() && isset($schema['banners']['is_managed_by'])) {
$schema['banners']['is_managed_by'] = ['ROOT', 'VENDOR'];
}
if (defined('PAGE_TYPE_BLOG')) {
$schema['vendor_blog']['content']['items']['fillings']['blog.abt_ut2_recent_posts'] = [
'params' => [
'simple' => true,
'sort_by' => 'timestamp',
'sort_order' => 'desc',
'status' => ObjectStatuses::ACTIVE,
'page_type' => PAGE_TYPE_BLOG,
'get_image' => true,
'request' => [
'company_id' => '%COMPANY_ID%',
],
],
'settings' => [
'parent_page_id' => [
'type' => 'picker',
'default_value' => '0',
'picker' => 'pickers/pages/picker.tpl',
'picker_params' => [
'multiple' => false,
'use_keys' => YesNo::NO,
'default_name' => __('root_level'),
'extra_url' => '&page_type=' . PAGE_TYPE_BLOG
],
],
'limit' => [
'type' => 'input',
'default_value' => 7
],
],
];
}
return $schema;
