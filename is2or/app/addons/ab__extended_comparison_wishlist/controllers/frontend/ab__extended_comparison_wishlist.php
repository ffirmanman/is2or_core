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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return [CONTROLLER_STATUS_OK];
}
if ($mode == 'clear_list') {
if (!empty($_REQUEST['product_ids']) && !empty(Tygh::$app['session']['comparison_list'])) {
$request_ids = explode(',', $_REQUEST['product_ids']);
foreach ($request_ids as $product_id) {
if (in_array($product_id, Tygh::$app['session']['comparison_list'])) {
$ind = array_search($product_id, Tygh::$app['session']['comparison_list']);
if ($ind !== false) {
unset(Tygh::$app['session']['comparison_list'][$ind]);
}
}
}
unset(Tygh::$app['session']['ab__ecw_original_comparison']);
if(function_exists('fn_abt__ut2_change_wl_state') && function_exists('fn_abt__ut2_assign_cart_wl_compare_state')){
fn_abt__ut2_change_wl_state();
fn_abt__ut2_assign_cart_wl_compare_state();
}
}
} elseif ($mode == 'compare') {
if (!empty($_REQUEST['add_to_compare'])) {
if (empty(Tygh::$app['session']['comparison_list'])) {
Tygh::$app['session']['comparison_list'] = [];
}
$added_products = [];
foreach (explode(',', $_REQUEST['add_to_compare']) as $p_id) {
if (!in_array($p_id, Tygh::$app['session']['comparison_list'])) {
Tygh::$app['session']['comparison_list'][] = $p_id;
if (isset($_REQUEST['show_notice'])) {
$product_data = fn_get_product_data($p_id, $auth);
fn_gather_additional_product_data($product_data, true, true);
$product_data['amount'] = 1;
$product_data['display_price'] = isset($product_data['price']) ? $product_data['price'] : 0;
$added_products[$p_id] = $product_data;
}
}
}
if (defined('AJAX_REQUEST')) {

$ajax = Tygh::$app['ajax'];
$ajax->assign('ab__ecw_comparison_list', Tygh::$app['session']['comparison_list']);
}
if (isset($_REQUEST['show_notice'])) {
if (empty($added_products)) {
fn_set_notification('W', __('notice'), __('product_in_comparison_list'));
} else {
Tygh::$app['view']->assign('added_products', $added_products);
fn_set_notification(
'I',
__('product_added_to_cl'),
Tygh::$app['view']->fetch('views/product_features/components/product_notification.tpl'),
'I'
);
}
} else {
fn_redirect('product_features.compare');
}
}
return [CONTROLLER_STATUS_REDIRECT];
}
return [CONTROLLER_STATUS_OK];
