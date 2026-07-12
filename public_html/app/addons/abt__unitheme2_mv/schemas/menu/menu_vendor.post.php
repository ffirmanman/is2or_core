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
use Tygh\Registry;
if(fn_abt__ut2_mv_is_vendor_store_available()){
$schema['central']['content']['items']['abt__ut2_mv_home_blocks'] =
[
'href' => 'abt__ut2_mv_blocks.manage',
'position' => 100,
'alt' => 'block_manager.update_block',
'root_title' => __('abt__ut2_mv_vendor_store'),
];
$schema['central']['content']['items']['banners'] = [
'href' => 'banners.manage',
'position' => 200,
];
}
$schema['central']['content']['status'] = ObjectStatuses::ACTIVE;
$schema['central']['content']['items']['pages']['status'] = ObjectStatuses::ACTIVE;
if(Registry::get('addons.blog.status') === 'A'){
$schema['central']['content']['items']['blog']['status'] = ObjectStatuses::ACTIVE;
}
if(Registry::get('addons.discussion.status') === 'A'){
$schema['central']['content']['items']['comments_and_reviews']['status'] = ObjectStatuses::ACTIVE;
}
return $schema;