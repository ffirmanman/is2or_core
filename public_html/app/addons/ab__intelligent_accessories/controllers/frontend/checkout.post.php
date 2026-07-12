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
use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($mode == 'add') {
if (!empty(Tygh::$app['session']['notifications'])) {
$ns=&Tygh::$app['session']['notifications'];foreach ($ns as &$n) {
if ($n['type'] == 'I' && $n['message_state'] == 'I' && (in_array($n['title'],[__('products_added_to_cart'),__('product_added_to_cart')]))) {
$n['message_state']='K';}}}}}
if ($mode == 'cart' && Registry::ifGet('addons.ab__intelligent_accessories.show_ia_in_cart','none') == 'for_the_most_expensive_product') {
$cart=Tygh::$app['session']['cart'];$key=0;if (!empty($cart['products'])) {
$price=0;foreach ($cart['products'] as $k=>$p) {
if ($p['price'] > $price) {
$price=$p['price'];$key=$k;}}}
Tygh::$app['view']->assign(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\132\130\113\147\131\x33\155\151\131\63\165\x6d\146\127\72\165\133\x59\102\76")),$key);}
