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
function fn_ab__mcd_check_global_items()
{
$global_items = db_get_array('select links.item_id,links.object_type from ?:ab__md_items_links links '
. ' left join ?:ab__md_items_links links_include on links.id = links_include.id and links_include.link_type = \'I\' AND links_include.object_type = links.object_type '
. ' WHERE links_include.item_id is not null group by links.item_id,links.object_type');
$set_global = [];
foreach ($global_items as $item) {
$set_global[] = [
'item_id' => $item['item_id'],
'object_type' => $item['object_type'],
'is_global' => 'N',
];
}
db_query('UPDATE ?:ab__md_item_settings SET is_global = ?s', 'Y');
if($set_global){
db_replace_into('ab__md_item_settings',$set_global,true);
}
}

function fn_ab__mcd_plain_recalculate_global_items(){
if(!defined('AB__MCD_RECALCULATE_GLOBAL')){
define('AB__MCD_RECALCULATE_GLOBAL',true);
register_shutdown_function('fn_ab__mcd_check_global_items');
}
}
