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
$schema['addons']['items']['ab__intelligent_accessories'] = [
'is_group' => 'Y',
'position' => 1000,
'items' => [
'display_block' => [
'type' => 'selectbox',
'position' => 10,
'class' => 'span3',
'variants' => [
'pre', 'post', 'do_not_show',
],
'value' => [
'desktop' => 'do_not_show',
'tablet' => 'do_not_show',
'mobile' => 'do_not_show',
],
'is_addon_dependent' => 'Y',
],
'item_quantity' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 100,
'value' => 5,
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
],
'not_scroll_automatically' => [
'type' => 'checkbox',
'position' => 200,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'N',
],
'is_addon_dependent' => 'Y',
],
'speed' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 300,
'is_for_all_devices' => 'Y',
'value' => 400,
'is_addon_dependent' => 'Y',
],
'pause_delay' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 400,
'is_for_all_devices' => 'Y',
'value' => 6,
'is_addon_dependent' => 'Y',
],
'hide_add_to_cart_button' => [
'type' => 'checkbox',
'position' => 500,
'value' => [
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
],
'is_addon_dependent' => 'Y',
],
'show_price' => [
'type' => 'checkbox',
'position' => 600,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
'is_addon_dependent' => 'Y',
],
'thumbnail_width' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 700,
'value' => [
'desktop' => 170,
'tablet' => 150,
'mobile' => 150,
],
'is_addon_dependent' => 'Y',
],
'outside_navigation' => [
'type' => 'checkbox',
'position' => 800,
'value' => [
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'Y',
],
'is_addon_dependent' => 'Y',
],
'enable_quick_view' => [
'type' => 'checkbox',
'position' => 900,
'disabled' => [
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'Y',
],
'value' => [
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
],
'is_addon_dependent' => 'Y',
],
'scroll_per_page' => [
'type' => 'checkbox',
'position' => 1000,
'is_for_all_devices' => 'Y',
'value' => 'N',
'is_addon_dependent' => 'Y',
],
],
];
return $schema;
