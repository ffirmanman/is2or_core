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
use Tygh\Registry;
use Tygh\BlockManager\Block;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (defined('AJAX_REQUEST') && $mode == 'get_join_products') {
Tygh::$app['ajax']->assign('result', 'N');
if (strpos($_REQUEST['block_id'], 'ab__ia_') !== false) {
if (intval($_REQUEST['join_id']) > 0 && intval($_REQUEST['product_id']) > 0) {
$bd['properties']['template']='blocks/products/products_scroller.tpl';
Tygh::$app['view']->assign('block',$bd);
$products = fn_ab__ia_get_products_by_join(['product_id' => intval($_REQUEST['product_id']), 'join_id' => intval($_REQUEST['join_id'])]);
if (!empty($products) && is_array($products)) {
Tygh::$app['ajax']->assign('result', 'Y');
$block = [
'block_id' => $_REQUEST['block_id'] . '_' . TIME,
'properties' => [
'item_quantity' => 5,
'not_scroll_automatically' => 'Y',
'speed' => 400,
'pause_delay' => 6,
'hide_add_to_cart_button' => 'N',
'show_price' => 'Y',
'thumbnail_width' => 150,
'outside_navigation' => 'Y',
'enable_quick_view' => 'N',
'scroll_per_page' => 'N',
],
'settings' => [
'hide_add_to_cart_button' => 'N',
],
];
$theme_name = Registry::get('runtime.layout.theme_name');
$theme_short_name = $theme_name == 'abt__unitheme2' ? 'abt__ut2.addons' : 'abt__yt.addons';
$theme_settings = Registry::get("settings.{$theme_short_name}.ab__intelligent_accessories");
if ($theme_name == 'abt__unitheme2') {
$device = Registry::get('settings.abt__device');
foreach ($theme_settings as $name => $setting) {
if (is_array($setting)) {
$theme_settings[$name] = $setting[$device];
}
}
}
$block['properties'] = array_merge($block['properties'], $theme_settings);
$block['settings']['hide_add_to_cart_button'] = isset($theme_settings['hide_add_to_cart_button']) ? $theme_settings['hide_add_to_cart_button'] : $block['settings']['hide_add_to_cart_button'];
Tygh::$app['ajax']->assign('block', $block);
Tygh::$app['ajax']->assign('quantity', count($products));
Tygh::$app['ajax']->assign('products_scroller', Tygh::$app['view']
->assign('items', $products)
->assign('block', $block)
->assign('redirect_url', fn_url('products.view&product_id=' . $_REQUEST['product_id']))
->fetch('blocks/products/products_scroller.tpl'));
}
}
} else {
if (intval($_REQUEST['block_id']) > 0 && intval($_REQUEST['join_id']) > 0 && intval($_REQUEST['product_id']) > 0) {
$products = fn_ab__ia_get_products_by_join(['product_id' => intval($_REQUEST['product_id']), 'join_id' => intval($_REQUEST['join_id'])]);
if (!empty($products) && is_array($products)) {
$block = Block::instance()->getById(intval($_REQUEST['block_id']));
Tygh::$app['ajax']->assign('block', $block);
Tygh::$app['ajax']->assign('result', 'Y');
$scroller = Tygh::$app['view']
->assign('items', $products)
->assign('block', $block)
->assign('redirect_url', fn_url('products.view&product_id=' . $_REQUEST['product_id']))
->fetch($block['properties']['template']);
Tygh::$app['ajax']->assign('products_scroller', $scroller);
}
}
}
exit;
}
return;
}
