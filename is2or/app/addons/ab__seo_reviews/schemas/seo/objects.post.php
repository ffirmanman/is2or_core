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
$schema['y'] = [
'tree' => true,
'path_function' => function ($object_id, $company_id = 0) {
return db_get_field(
'SELECT id_path'
. ' FROM ?:categories'
. ' WHERE category_id = ?i ?p',
$object_id,
fn_get_seo_company_condition('company_id', '', $company_id)
);
},
'parent_type' => 'c',
'dispatch' => 'ab__seo_reviews.view_category',
'item' => 'category_id',
'pager' => true,
'tree_options' => ['category', 'category_nohtml'],
'option' => 'seo_category_type',
'html_options' => ['file'],
'exist_function' => function ($object_id) {
return fn_category_exists($object_id);
},
];
return $schema;
