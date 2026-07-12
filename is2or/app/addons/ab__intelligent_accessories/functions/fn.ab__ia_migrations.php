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
use Tygh\BlockManager\Block;
defined('BOOTSTRAP') || die('Access denied');
function fn_ab__ia_migration_322_400(){
$rules = db_get_hash_array('SELECT rule_id, conditions FROM ?:ab__ia_rules','rule_id');
foreach ($rules as &$rule) {
$rule['conditions'] = unserialize($rule['conditions']);
foreach (['B', 'J'] as $type) {
if(!empty($rule['conditions'][$type]['items'])){
foreach ($rule['conditions'][$type]['items'] as &$item) {
if($item['v'] != 'corresponding-base'){
$item['o'] = 'in';
}
}
}
}
$rule['conditions'] = serialize($rule['conditions']);
}
if($rules){
db_replace_into('ab__ia_rules', $rules, true);
}
$blocks_instance = Block::instance();
list($blocks) = $blocks_instance->find(['type'=> 'ab__intelligent_accessories']);
foreach ($blocks as $block_data) {
$block_data['properties']['template'] = 'blocks/products/products_scroller.tpl';
$blocks_instance->update($block_data);
}
return true;
}