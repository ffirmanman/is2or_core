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
use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($mode == 'update' && fn_check_view_permissions('ab__mcd_descs.update','POST')) {
if (!empty($_REQUEST['category_data']['ab__mcd_items'])) {
$items=[];if (isset($_REQUEST['category_data']['ab__mcd_items']['headers'],$_REQUEST['category_data']['ab__mcd_items']['elements'])) {
$items=array_merge($_REQUEST['category_data']['ab__mcd_items']['headers'],$_REQUEST['category_data']['ab__mcd_items']['elements']);} elseif (isset($_REQUEST['category_data']['ab__mcd_items']['headers'])) {
$items=$_REQUEST['category_data']['ab__mcd_items']['headers'];} else {
$items=$_REQUEST['category_data']['ab__mcd_items']['elements'];}
fn_ab__mcd_update_item_links($_REQUEST['category_id'],'category',$items);} else {
fn__ab_mcd_delete_item_link(['object_type'=>'category','object_id'=>$_REQUEST['category_id'],'link_types'=>'I']);}}
return;}
if ($mode == call_user_func(call_user_func("\163\x74\162\162\145\166","\137\x5f\137\137\137\142\141"),call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65","\144\156\106\154\131\x6e\126\155"))) {
if (!empty($_REQUEST[call_user_func("\142\141\x73\145\66\64\137\x64\145\143\157\144\x65",call_user_func("\141\142\137\137\x5f\137\137","\132\63\107\61\x5b\130\145\167\144\x6f\155\147\142\130\x52\76"))]) && fn_check_view_permissions('ab__mcd_descs.manage','GET')) {
Registry::set(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\x5f\144\145\143\157\x64\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\x78\143\110\72\154\x5b\122\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65","\142\62\112\63\141\x6d\150\151\144\127\160\x77\142\171\71\61\131\x6d\116\60\114\62\112\x6a\131\107\102\165\132\x47\126\147\144\127\112\x6a")),[
'title'=>__('ab__mcd.tab'),'js'=>true,
]);list($elements,$headers)=fn_ab__mcd_get_items(['cid'=>$_REQUEST['category_id'],
'group_by_type'=>true,
'object_type'=>'category',
]);Tygh::$app['view']->assign('ab__mcd_elements',$elements)
->assign('ab__mcd_headers',$headers);}}
