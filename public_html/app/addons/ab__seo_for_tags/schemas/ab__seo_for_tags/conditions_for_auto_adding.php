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
$schema = [
'price' => [
'operators' => ['eq', 'neq', 'lte', 'gte', 'lt', 'gt'],
'type' => 'input',
'format_function' => 'fn_format_price',
],
'feature' => [
'operators' => ['eq', 'neq', 'lte', 'gte', 'lt', 'gt', 'in', 'nin'],
'type' => 'chained',
'chained_options' => [
'parent_url' => 'product_features.get_features_list',
],
],
'category' => [
'operators' => ['in', 'nin'],
'type' => 'picker',
'picker_props' => [
'picker' => 'pickers/categories/picker.tpl',
'params' => [
'multiple' => true,
'use_keys' => 'N',
'view_mode' => 'table',
],
],
],
'amount' => [
'operators' => ['eq', 'neq', 'lte', 'gte', 'lt', 'gt'],
'type' => 'input',
'field' => 'amount',
'additional_classes' => 'cm-value-integer',
],
'popularity' => [
'operators' => ['eq', 'neq', 'lte', 'gte', 'lt', 'gt'],
'type' => 'input',
'additional_classes' => 'cm-value-integer',
],
'weight' => [
'operators' => ['eq', 'neq', 'lte', 'gte', 'lt', 'gt'],
'type' => 'input',
'additional_classes' => 'cm-value-decimal',
'decimal_format' => '%.3f',
],
];
return $schema;
