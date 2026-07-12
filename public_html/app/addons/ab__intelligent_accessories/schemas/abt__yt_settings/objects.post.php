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
use Tygh\Enum\YesNo;
$schema['addons']['items']['ab__intelligent_accessories'] = [
'is_group' => YesNo::YES,
'position' => 10000,
'items' => [
'display_block' => [
'type' => 'selectbox',
'position' => 100,
'class' => 'span3',
'variants' => [
'pre','post', 'do_not_show',
],
'value' => 'pre',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'item_quantity' => [
'type' => 'selectbox',
'class' => 'input-small',
'position' => 200,
'value' => '5',
'variants' => ['1', '2', '3', '4', '5', '6', '7', '8', '9'],
'variants_as_language_variable' => 'N',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'not_scroll_automatically' => [
'type' => 'checkbox',
'position' => 300,
'value' => 'Y',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'speed' => [
'type' => 'input',
'class' => 'input-small',
'position' => 400,
'value' => '400',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'pause_delay' => [
'type' => 'input',
'class' => 'input-small',
'position' => 500,
'value' => '6',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'hide_add_to_cart_button' => [
'type' => 'checkbox',
'position' => 600,
'value' => 'N',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'show_price' => [
'type' => 'checkbox',
'position' => 700,
'value' => 'Y',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'thumbnail_width' => [
'type' => 'input',
'class' => 'input-small',
'position' => 800,
'value' => 150,
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
],
];
return $schema;
