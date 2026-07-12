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
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$schema['central']['ab__addons']['items']['ab__images_seo'] = array(
'attrs' => array('class'=>'is-addon'),
'href' => 'ab__is.manage_attrs',
'position' => 100,
'subitems' => array(
'ab__is.settings' => array(
'href' => 'addons.update&addon=ab__images_seo',
'position' => 0,
),
'ab__is.manage_attrs' => array(
'href' => 'ab__is.manage_attrs',
'position' => 10,
),
'ab__is.help' => array(
'href' => 'ab__is.help',
'position' => 60
),
),
);
return $schema;
