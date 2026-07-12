<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
$schema['central']['ab__addons']['items']['ab__so_noindex_tech_pages'] = [
'href' => 'ab__so_ntp.help',
'position' => 1000,
'subitems' => [
'ab__so_ntp.settings' => [
'href' => 'addons.update&addon=ab__so_noindex_tech_pages',
'alt' => 'addons.update&addon=ab__so_noindex_tech_pages',
'position' => 0,
],
'ab__so_ntp.help' => [
'href' => 'ab__so_ntp.help',
'alt' => 'ab__so_ntp.help',
'position' => 100,
],
],
];
return $schema;
