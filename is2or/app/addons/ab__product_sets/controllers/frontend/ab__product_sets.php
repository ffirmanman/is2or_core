<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
if ($mode == 'calculate') {
$cart_copy = [];
if (!empty($_REQUEST['selected_products']) && !empty($_REQUEST['product_id'])) {
Tygh::$app['view']->assign('product_id', $_REQUEST['product_id']);
$auth_copy = $auth;
$product_data = [
$_REQUEST['product_id'] => [
'product_id' => $_REQUEST['product_id'],
'amount' => 1,
],
];
if (!empty($_REQUEST['params'])) {
foreach ($_REQUEST['params'] as $param) {
if (!empty($param['name']) && strpos($param['name'], "product_data[{$_REQUEST['product_id']}][product_options]") !== false) {
parse_str($param['name'], $res);
$product_data[$_REQUEST['product_id']]['product_options'][key($res['product_data'][$_REQUEST['product_id']]['product_options'])] = $param['value'];
}
}
}
$fields = [
'product_id',
];
$products = db_get_array('SELECT ?p FROM ?:products WHERE product_id IN (?n)', implode(',', $fields), $_REQUEST['selected_products']);
foreach ($products as $key => $product) {
$product_data[$product['product_id']] = [
'product_id' => $product['product_id'],
'amount' => 1,
];
}
fn_add_product_to_cart($product_data, $cart_copy, $auth_copy);
fn_calculate_cart_content($cart_copy, $auth_copy, 'S', true, 'F', true);
foreach (fn_get_notifications() as $key => $notification) {
if ($notification['extra'] == 'text_applied_promotions') {
fn_delete_notification($key);
}
}
}
Tygh::$app['view']->assign('cart', $cart_copy);
fn_clear_cart($cart_copy);
Tygh::$app['view']->display('addons/ab__product_sets/components/results.tpl');
exit;
}
