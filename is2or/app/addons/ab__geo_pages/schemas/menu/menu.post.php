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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
$schema['central']['ab__addons']['items']['ab__geo_pages'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__gp.help',
'position' => 10,
'subitems' => [
'ab__gp.settings' => [
'href' => 'addons.update&addon=ab__geo_pages',
'position' => 0,
],
'ab__gp.manage' => [
'href' => 'ab__gp.manage',
'alt' => 'ab__gp.update',
'position' => 10,
],
'ab__gp.templates' => [
'href' => 'ab__gp_templates.manage',
'alt' => 'ab__gp_templates.update,ab__gp_templates.add',
'position' => 20,
],
'ab__gp.help' => [
'href' => 'ab__gp.help',
'position' => 10000,
],
],
];
return $schema;
