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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
use Tygh\Registry;
$schema['central']['ab__addons']['items']['ab__intelligent_accessories'] = [
'attrs' => [
'class' => 'is-addon',
],
'href' => 'ab__ia_data.update_cache',
'position' => 100,
'subitems' => [
'ab__ia.settings' => [
'href' => 'addons.update&addon=ab__intelligent_accessories',
'position' => 0,
],
'ab__ia_update_cache' => [
'href' => 'ab__ia_data.update_cache',
'position' => 100,
],
'ab__ia_base_category_list' => [
'href' => 'ab__ia_data.base_category_list',
'position' => 200,
],
'ab__ia.groups_list' => [
'href' => 'ab__ia_groups.manage',
'position' => 250,
],
'ab__ia_help' => [
'href' => 'ab__ia_data.help',
'position' => 300,
],
],
];
if (Registry::get('addons.abt__unitheme2.status') == 'A' && Registry::get('runtime.layout.theme_name') == 'abt__unitheme2') {
$schema['central']['ab__addons']['items']['ab__intelligent_accessories']['subitems']['ab__ia.settings.abt__unitheme2'] = [
'href' => 'abt__ut2.settings&selected_section=addons#addons_ab__intelligent_accessories_group',
'position' => 0,
];
}
if (Registry::get('addons.abt__youpitheme.status') == 'A' && Registry::get('runtime.layout.theme_name') == 'abt__youpitheme') {
$schema['central']['ab__addons']['items']['ab__intelligent_accessories']['subitems']['ab__ia.settings.abt__youpitheme'] = [
'href' => 'abt__yt.settings&selected_section=ab__intelligent_accessories',
'position' => 0,
];
}
return $schema;
