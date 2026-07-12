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
defined('BOOTSTRAP') or die('Access denied');
$schema['central']['ab__addons']['items']['ab__advanced_sitemap'] = [
'attrs' => [
'class' => 'is-addon',
],
'href' => 'ab__advanced_sitemap.manage',
'position' => 1000,
'subitems' => [
'ab__as.settings' => [
'href' => 'addons.update&addon=ab__advanced_sitemap',
'position' => 0,
],
'ab__advanced_sitemap.manage' => [
'href' => 'ab__advanced_sitemap.manage',
'position' => 10,
],
'ab__as_links.manage' => [
'href' => 'ab__as_links.manage',
'position' => 15,
],
'ab__advanced_sitemap.help' => [
'href' => 'ab__advanced_sitemap.help',
'position' => 20,
],
],
];
return $schema;
