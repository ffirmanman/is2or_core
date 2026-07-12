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
$schema['f'] = [
'table' => '?:product_filter_descriptions',
'description' => 'filter',
'dispatch' => 'product_features.view_all',
'item' => 'filter_id',
'condition' => '',
'name' => 'filter',
'pager' => false,
'html_options' => ['file', 'category'],
'option' => 'seo_other_type',
'exist_function' => function ($filter_id) {
return db_get_field(
'SELECT 1 FROM ?:product_filters'
. ' INNER JOIN ?:product_features ON ?:product_features.feature_id = ?:product_filters.feature_id AND ?:product_features.feature_type = ?s'
. ' WHERE filter_id = ?i'
, 'E', $filter_id
);
},
];
$schema['e']['pager'] = true;
return $schema;
