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
use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (call_user_func(call_user_func(call_user_func("\x73\x74\x72\x72\x65\x76","\x5f\x5f\x5f\x5f\x5f\x62\x61"),call_user_func("\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65","\x58\x56\x56\x36\x61\x47\x6c\x64\x55\x32\x5a\x6f\x61\x6e\x52\x31\x63\x33\x6f\x37\x4f\x32\x68\x6d\x64\x51\x3d\x3d")),call_user_func(call_user_func(call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145",call_user_func("\x61\142\x5f\137\x5f\137\x5f","\x62\130\x32\170\x63\110\x3a\154\x5b\122\x3e\76")),"",["\141\142\137\137","\137\x5f\137"]),call_user_func("\142\141\163\145\66\64\137\x64\145\143\157\144\145","\143\63\132\x76\144\127\160\165\132\151\71\165\x63\107\126\155"))) == call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145",call_user_func("\x61\142\x5f\137\x5f\137\x5f","\x62\130\x32\170\x63\110\x3a\154\x5b\122\x3e\76")),"",["\x61\142\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\157\x64\145","\141\155\65\170\142\130\102\x6c\132\147\75\75")),"",["\142\141\163\145\x36\64\137\144\145","\x63\157\144\145"]),call_user_func("\141\x62\137\137\137\137\x5f","\145\131\103\154\x5a\131\123\155"))) {
if (!empty($_REQUEST['ab__ecw']['comparison_info'])) {

$repository=Tygh::$app['addons.ab__extended_comparison_wishlist.repository'];$repository->updateComparisonInfo($_REQUEST['ab__ecw']['comparison_info']);}}
return [CONTROLLER_STATUS_OK];}
if (call_user_func(call_user_func(call_user_func("\x73\x74\x72\x72\x65\x76","\x5f\x5f\x5f\x5f\x5f\x62\x61"),call_user_func("\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65","\x58\x56\x56\x36\x61\x47\x6c\x64\x55\x32\x5a\x6f\x61\x6e\x52\x31\x63\x33\x6f\x37\x4f\x32\x68\x6d\x64\x51\x3d\x3d")),call_user_func(call_user_func(call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145",call_user_func("\x61\142\x5f\137\x5f\137\x5f","\x62\130\x32\170\x63\110\x3a\154\x5b\122\x3e\76")),"",["\141\142\137\137","\137\x5f\137"]),call_user_func("\142\141\163\145\66\64\137\x64\145\143\157\144\145","\143\63\132\x76\144\127\160\165\132\151\71\165\x63\107\126\155"))) == call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145",call_user_func("\x61\142\x5f\137\x5f\137\x5f","\x62\130\x32\170\x63\110\x3a\154\x5b\122\x3e\76")),"",["\x61\142\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\157\x64\145","\141\155\65\170\142\130\102\x6c\132\147\75\75")),"",["\142\141\163\145\x36\64\137\144\145","\x63\157\144\145"]),call_user_func("\141\x62\137\137\137\137\x5f","\145\131\103\154\x5a\131\123\155"))) {
if (fn_check_view_permissions('ab__extended_comparison_wishlist.often_compared')) {
Registry::set('navigation.tabs.ab__extended_comparison_wishlist',[
'title'=>__('ab__extended_comparison_wishlist'),'href'=>'ab__extended_comparison_wishlist.often_compared?object_id='.$_REQUEST['product_id'],
'ajax'=>true,
]);}}
