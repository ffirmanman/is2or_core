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
defined('BOOTSTRAP') or die('Access denied');
function fn_ab__spt_install()
{
$objects = [
['t' => '?:product_descriptions',
'i' => [
['n' => 'ab__spt_short_name', 'p' => 'varchar(255) NOT NULL DEFAULT \'\' AFTER `shortname`'],
],
],
['t' => '?:product_tabs',
'i' => [
['n' => 'ab__spt_activate_settings', 'p' => 'char(1) NOT NULL DEFAULT \'N\''],
['n' => 'ab__spt_tab_header_tag', 'p' => 'varchar(10) NOT NULL DEFAULT \'div\''],
['n' => 'ab__spt_add_tab_to_floating_panel', 'p' => 'char(1) NOT NULL DEFAULT \'N\'']
],
],
['t' => '?:product_tabs_descriptions',
'i' => [
['n' => 'ab__spt_tab_header', 'p' => 'varchar(255) NOT NULL DEFAULT \'\''],
],
],
];
if (fn_allowed_for('ULTIMATE')) {
$objects[] = ['t' => '?:ult_product_descriptions',
'i' => [
['n' => 'ab__spt_short_name', 'p' => 'varchar(255) NOT NULL DEFAULT \'\' AFTER `shortname`'],
],
];
}
if (!empty($objects) && is_array($objects)) {
foreach ($objects as $o) {
$fields = db_get_fields('DESCRIBE ' . $o['t']);
if (!empty($fields) && is_array($fields)) {
if (!empty($o['i']) && is_array($o['i'])) {
foreach ($o['i'] as $f) {
if (!in_array($f['n'], $fields)) {
db_query('ALTER TABLE ?p ADD ?p ?p', $o['t'], $f['n'], $f['p']);
if (!empty($f['add_sql']) && is_array($f['add_sql'])) {
foreach ($f['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
}
}
}
}
