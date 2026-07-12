<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if(AREA === 'C'){
$stack = Registry::get('init_stack');
array_unshift($stack, ['fn_ab__gp_init_uri', []]);
Registry::set('init_stack',$stack );
}
fn_register_hooks(
['get_route', 1]
, 'url_post'
, 'dispatch_before_display'
, ['sitemap_link', '', 'ab__advanced_sitemap']
, ['ab__as_write_links_to_file_pre', '', 'ab__advanced_sitemap']
, ['ab__as_get_settings_object_from_object_type', '', 'ab__advanced_sitemap']
,['ab__sf_category_preparing_data_post',2015]
,['ab__sf_category_preparing_data_pre',2015]
,'get_route_runtime'
);
