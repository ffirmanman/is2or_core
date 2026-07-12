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
if (AREA == 'C') {
$schema['categories.view']['[ab__mcd_name]'] = [
'type' => 'field',
'object' => 'category_data',
'field' => 'category',
'multi_case' => true,
'admin_tooltip' => __('ab__mcd.placeholders.ab__mcd_name'),
];
$schema['pages.view']['[ab__mcd_name]'] = [
'type' => 'field',
'object' => 'page',
'field' => 'page',
'multi_case' => true,
'admin_tooltip' => __('ab__mcd.placeholders.ab__mcd_name'),
];
$schema['product_features.view']['[ab__mcd_name]'] = [
'type' => 'field',
'object' => 'variant_data',
'field' => 'variant',
'multi_case' => true,
'admin_tooltip' => __('ab__mcd.placeholders.ab__mcd_name'),
];
}
return $schema;
