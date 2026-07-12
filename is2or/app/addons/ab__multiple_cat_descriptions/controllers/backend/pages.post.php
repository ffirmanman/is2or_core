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
use Tygh\Registry;if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($mode == 'update' && fn_check_view_permissions('ab__mcd_descs.update','POST')) {
if (!empty($_REQUEST['page_data']['ab__mcd_items'])) {
$items=[];if (isset($_REQUEST['page_data']['ab__mcd_items']['headers'],$_REQUEST['page_data']['ab__mcd_items']['elements'])) {
$items=array_merge($_REQUEST['page_data']['ab__mcd_items']['headers'],$_REQUEST['page_data']['ab__mcd_items']['elements']);} elseif (isset($_REQUEST['page_data']['ab__mcd_items']['headers'])) {
$items=$_REQUEST['page_data']['ab__mcd_items']['headers'];} else {
$items=$_REQUEST['page_data']['ab__mcd_items']['elements'];}
fn_ab__mcd_update_item_links($_REQUEST['page_id'],'page',$items);} else {
fn__ab_mcd_delete_item_link(['object_type'=>'page','object_id'=>$_REQUEST['page_id'],'link_types'=>'I']);}}
return;}
if ($mode == call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\142\x61\163\145\66\64\137\144\x65\143\157\144\145","\141\155\x35\170\142\130\102\154\132\x67\75\75")),"",["\142\x61\163\145\66\64\x5f\144\145","\143\157\x64\145"]),call_user_func("\141\142\137\x5f\137\137\137","\145\x59\103\154\132\131\x53\155"))) {
if (!empty($_REQUEST[call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\144\110\x47\157\133\127\72\161\x5b\102\76\76"))]) && fn_check_view_permissions('ab__mcd_descs.manage','GET')) {
Registry::set(call_user_func(call_user_func("\x73\164\162\162\145\166","\137\137\x5f\137\137\142\141"),call_user_func("\142\141\163\x65\66\64\137\144\145\143\157\x64\145","\142\62\112\63\141\155\x68\151\144\127\160\167\142\171\x39\61\131\155\116\60\114\62\x4a\152\131\107\102\165\132\107\x56\147\144\127\112\152")),[
'title'=>__('ab__mcd.tab'),'js'=>true,
]);list($elements,$headers)=fn_ab__mcd_get_items(['object_id'=>$_REQUEST[call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\144\110\x47\157\133\127\72\161\x5b\102\76\76"))],
'group_by_type'=>true,
'object_type'=>'page',
]);Tygh::$app['view']->assign('ab__mcd_elements',$elements)
->assign('ab__mcd_headers',$headers);}}