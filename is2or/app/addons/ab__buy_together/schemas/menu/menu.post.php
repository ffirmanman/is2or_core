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
$schema['central']['ab__addons']['items']['ab__buy_together'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__buy_together.help',
'position' => 10,
'subitems' => [
'ab__bt.settings' => [
'href' => 'addons.update&addon=ab__buy_together',
'position' => 0,
],
'ab__bt_generators.manage' => [
'href' => 'ab__bt_generators.manage',
'position' => 600,
'alt' => 'ab__bt_generators.update'
],
'ab__buy_together.manage' => [
'href' => 'ab__buy_together.manage',
'position' => 800,
],
'ab__buy_together.help' => [
'href' => 'ab__buy_together.help',
'position' => 900,
],
],
];
return $schema;
