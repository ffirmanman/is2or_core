<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
use Tygh\Enum\YesNo;
$schema['addons']['items']['ab__extended_comparison_wishlist'] = [
'position' => 100,
'is_group' => YesNo::YES,
'items' => [
'block_background' => [
'is_for_all_devices' => YesNo::YES,
'type' => 'colorpicker',
'position' => 100,
'value' => '#ffffff',
'value_styles' => [
'Black.less' => '#ffffff',
'Blue.less' => '#ffffff',
'Brick.less' => '#ffffff',
'Cobalt.less' => '#ffffff',
'Dark_Blue.less' => '#ffffff',
'Dark_Navy.less' => '#ffffff',
'Default.less' => '#ffffff',
'Fiolent.less' => '#ffffff',
'Flame.less' => '#ffffff',
'Gray.less' => '#ffffff',
'Green.less' => '#ffffff',
'Indigo.less' => '#ffffff',
'Ink.less' => '#ffffff',
'Mint.less' => '#ffffff',
'Original.less' => '#ffffff',
'Powder.less' => '#ffffff',
'Purple.less' => '#ffffff',
'Skyfall.less' => '#ffffff',
'Velvet.less' => '#ffffff',
'White.less' => '#ffffff',
],
],
],
];
return $schema;