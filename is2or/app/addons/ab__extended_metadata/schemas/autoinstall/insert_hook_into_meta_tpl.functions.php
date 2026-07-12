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
use Tygh\Registry;
function fn_ab__emd_insert_hook_into_meta_tpl()
{
if (!is_ab_theme()) {
$file_path = fn_get_theme_path('[themes]/' . Registry::get('config.base_theme') . '/templates/meta.tpl', 'C');
$replaces = [
$file_path => [
[
'from' => '<meta name="keywords" content="{$meta_keywords|default:$location_data.meta_keywords}" />',
'to' => '{hook name="index:meta_keywords"}<meta name="keywords" content="{$meta_keywords|default:$location_data.meta_keywords}" />{/hook}',
],
],
];
replace_in_files($replaces);
}
return __('ab__emd.autoinstall.insert_hook_into_meta_tpl', ['[file_path]' => $file_path]);
}
