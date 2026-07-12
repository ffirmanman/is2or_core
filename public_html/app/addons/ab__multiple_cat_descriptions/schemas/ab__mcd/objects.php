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
use Tygh\Registry;
require_once(Registry::get('config.dir.addons') . 'ab__multiple_cat_descriptions/schemas/ab__mcd/objects.functions.php');
$schema = [
'category' => [
'table_name' => 'categories',
'table_field' => 'category_id',
'linked_objects_function' => 'fn_ab__mcd_get_category_linked_objects',
],
'feature_variant' => [
'table_name' => 'product_feature_variants',
'table_field' => 'variant_id',
'linked_objects_function' => 'fn_ab__mcd_get_feature_variant_linked_objects',
],
'page' => [
'table_name' => 'pages',
'table_field' => 'page_id',
],
];
return $schema;
