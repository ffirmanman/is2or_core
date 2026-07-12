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
use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($mode === 'update' && fn_check_view_permissions('ab__gp.data.manage','POST')) {
if (!empty($_REQUEST['category_data']['ab__gp_object_location_settings'])) {
$object_location_settings=$_REQUEST['category_data']['ab__gp_object_location_settings'];$object_id=$_REQUEST['category_id'];$object_type='category';fn_ab__gp_update_object_location_settings($object_location_settings,$object_id,$object_type);}}
return;}
if ($mode == call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\137","\137\137\x5f"]),call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145","\144\156\106\154\x59\156\126\155"))) {
if (!empty($_REQUEST[call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\137\137"]),call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145","\x61\155\65\170\142\130\x42\154\132\147\75\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\144\110\x56\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\116\124\x64\155\144\107\112\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\144\110\x56\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\132\155\x56\167\132\107\132\154\x59\101\75\75")))]),call_user_func("\141\142\137\137\x5f\137\137","\132\63\107\61\133\x58\145\167\144\157\155\147\142\x58\122\76"))]) && fn_check_view_permissions('ab__gp.data.manage','GET')) {
Registry::set( 'navigation.tabs.ab__gp_tab',[
'title'=>__('ab__gp.tab'),'js'=>true,
]);list($locations)=fn_ab__gp_get_locations();list($templates)=fn_ab__gp_get_templates();$params=[
'object_id'=>$_REQUEST[call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\137\137"]),call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145","\x61\155\65\170\142\130\x42\154\132\147\75\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\144\110\x56\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\116\124\x64\155\144\107\112\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\144\110\x56\172\143\62\132\63")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\142\137\137","\x5f\137\137"]),call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145","\132\155\x56\167\132\107\132\154\x59\101\75\75")))]),call_user_func("\141\142\137\137\x5f\137\137","\132\63\107\61\133\x58\145\167\144\157\155\147\142\x58\122\76"))],
'object_type'=>'category'
];$object_location_settings=fn_ab__gp_get_object_location_settings($params);Tygh::$app['view']
->assign('locations',$locations)
->assign('templates',$templates)
->assign('object_location_settings',$object_location_settings);}}
