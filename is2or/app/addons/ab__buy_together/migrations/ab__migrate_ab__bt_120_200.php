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
use Tygh\Addons\Ab_addonsManager\DatabaseManager\TableManager;
function ab__migrate_ab__bt_120_200(){
$buy_together_tm = new TableManager('buy_together');
$new_columns = [
'generator_id'=> 'int(11) NOT NULL',
'generator_hash'=>'varchar(255) NOT NULL',
];
foreach ($new_columns as $c_name => $c_definition) {
try{
$buy_together_tm->addColumn($c_name, $c_definition);
}catch(Exceptions\ABTMException $d){
}
}
$buy_together_tm = null;
$ab__bt_generators_tm = new TableManager('ab__bt_generators');
if(!$ab__bt_generators_tm->hasTable()){
db_query(
"CREATE TABLE IF NOT EXISTS `?:ab__bt_generators` (
`generator_id` int(11) NOT NULL AUTO_INCREMENT,
`type` varchar(20) NOT NULL,
`modifier` decimal(12,3) NOT NULL,
`modifier_type` varchar(20) NOT NULL,
`date_from` int(11) NOT NULL,
`date_to` int(11) NOT NULL,
`display_in_promotions` char(1) NOT NULL DEFAULT 'Y',
`status` char(1) NOT NULL DEFAULT 'D',
`company_id` int(11) NOT NULL,
`base_products` text NOT NULL,
`products` text NOT NULL COMMENT 'Additional products',
`timestamp` int(11) NOT NULL,
`last_generation_timestamp` int(11) NOT NULL,
PRIMARY KEY (`generator_id`)
) DEFAULT CHARSET=utf8;"
);
}
$ab__bt_generator_descriptions_tm = new TableManager('ab__bt_generator_descriptions');
if(!$ab__bt_generator_descriptions_tm->hasTable()){
db_query(
"CREATE TABLE IF NOT EXISTS `?:ab__bt_generator_descriptions` (
`generator_id` int(11) NOT NULL,
`lang_code` varchar(2) NOT NULL,
`name` varchar(50) NOT NULL,
`description` mediumtext NOT NULL,
PRIMARY KEY (`generator_id`,`lang_code`)
) DEFAULT CHARSET=utf8;"
);
}
$ab__bt_generator_products_tm = new TableManager('ab__bt_generator_products');
if(!$ab__bt_generator_products_tm->hasTable()){
db_query(
"CREATE TABLE IF NOT EXISTS `?:ab__bt_generator_products` (
`generator_id` int(11) NOT NULL,
`base_product_id` int(11) NOT NULL,
`chain_id` int(11) NOT NULL,
`position` int(11) NOT NULL,
`product_id` int(11) NOT NULL,
`amount` int(11) NOT NULL,
`modifier_type` varchar(25) NOT NULL,
`modifier` decimal(12,2) NOT NULL,
`aoc` char(1) NOT NULL,
`options` text NOT NULL,
PRIMARY KEY(generator_id,base_product_id,chain_id,position),
INDEX (generator_id,base_product_id)
) DEFAULT CHARSET=utf8;"
);
}
db_query('UPDATE ?:buy_together bt, ?:products products SET bt.company_id = products.company_id WHERE products.product_id = bt.product_id');
}