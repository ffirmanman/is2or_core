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
$schema['central']['ab__addons']['items']['ab__seo_for_blog'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__seo_for_blog.help',
'position' => 10,
'subitems' => [
'ab__seo_for_blog.settings' => [
'href' => 'addons.update&addon=ab__seo_for_blog',
'position' => 0,
],
'ab__sfb.authors.manage' => [
'href' => 'ab__sfb_authors.manage',
'alt' => 'ab__sfb_authors.update',
'position' => 100,
],
'ab__sfb.demodata' => [
'href' => 'ab__seo_for_blog.demodata',
'alt' => 'ab__seo_for_blog.help',
'position' => 200,
],
'ab__seo_for_blog.help' => [
'href' => 'ab__seo_for_blog.help',
'position' => 10000,
],
],
];
return $schema;
