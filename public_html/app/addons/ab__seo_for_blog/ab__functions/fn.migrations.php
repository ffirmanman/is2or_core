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
defined('BOOTSTRAP') || die('Access denied');
function fn_ab__seo_for_brands_install(){
fn_ab__sfb_add_db_fields();
}

function fn_ab__sfb_add_db_fields()
{
$objects = array(
array(
'table' => '?:pages',
'field' => 'author_id',
'sql' => 'ALTER TABLE ?:pages ADD author_id bigint(20) NOT NULL default 0',
),
array(
'table' => '?:pages',
'field' => 'ab__sfb_microdata_schema_type',
'sql' => 'ALTER TABLE ?:pages ADD ab__sfb_microdata_schema_type varchar(32) NOT NULL DEFAULT \'\'',
),
);
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $object) {
$fields = db_get_fields('DESCRIBE ' . $object['table']);
if (!empty($fields) && is_array($fields)) {
$is_present_field = false;
foreach ($fields as $f) {
if ($f == $object['field']) {
$is_present_field = true;
break;
}
}
if (!$is_present_field) {
db_query($object['sql']);
if (!empty($object['add_sql'])) {
foreach ($object['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
}
}