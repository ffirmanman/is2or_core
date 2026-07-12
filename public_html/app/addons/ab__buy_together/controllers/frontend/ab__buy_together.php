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
if ($mode == 'get_combination') {
if (defined('AJAX_REQUEST')) {
$generator_hash = fn_ab__bt_generate_hash($_REQUEST['generator_id'], $_REQUEST['base_product_id'], $_REQUEST['products']);
$inputs = [];
if (isset($_REQUEST['product_data'])) {
foreach ($_REQUEST['products'] as $product) {
if (isset($_REQUEST['product_data'][$product]['product_options'])) {
$inputs[$product]['selected_options'] = $_REQUEST['product_data'][$product]['product_options'];
}
}
}
$chain_id = db_get_field('SELECT chain_id FROM ?:buy_together WHERE generator_hash = ?s AND status = ?s', $generator_hash, 'A');
if ($chain_id) {
$params = [
'chain_id' => $chain_id,
'full_info' => true,
'simple' => true,
'show_all' => true,
'selected_options' => $inputs
];
$chain_data_full = fn_buy_together_get_chains($params);
$chain_data['chain_price'] = Tygh::$app['view']->assign('value', $chain_data_full['chain_price'])->fetch('common/price.tpl');
$chain_data['total_price'] = Tygh::$app['view']->assign('value', $chain_data_full['total_price'])->fetch('common/price.tpl');
$chain_data['chain_id'] = $chain_id;
Tygh::$app['ajax']->assign('chain_data', $chain_data);
}
}
}
