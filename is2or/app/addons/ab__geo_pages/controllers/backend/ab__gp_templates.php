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
fn_trusted_vars('template_data');$prefix='ab__gp_templates.manage';if ($mode === 'update') {
$template_data=$_REQUEST['template_data'];$template_id=$_REQUEST['template_data']['template_id'] ?? 0;$template_id=fn_ab__gp_update_template($template_data,$template_id);$prefix='ab__gp_templates.update?template_id='.$template_id;}elseif ($mode === 'delete'){
fn_ab__gp_delete_template($_REQUEST['template_id']);}
return [CONTROLLER_STATUS_OK,$prefix];}
if($mode == 'manage'){
$items_per_page=$_REQUEST[call_user_func(call_user_func(call_user_func("\142\141\163\145\66\64\x5f\144\145\143\157\144\145",call_user_func("\141\142\137\137\137\137\x5f","\x62\130\62\170\143\110\72\x6c\133\122\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\x6f\144\145","\143\127\112\157\132\x6d\102\60\141\156\164\155"))] ?? Registry::get( 'settings.Appearance.admin_elements_per_page');$params=$_REQUEST;$params['is_global']='Y';list($templates_list,$search)=fn_ab__gp_get_templates($params,$items_per_page);Tygh::$app['view']
->assign('templates_list',$templates_list)
->assign('search',$search);}
elseif($mode === 'update'){
$template_id=$_REQUEST['template_id'];list($templates)=fn_ab__gp_get_templates(['template_id'=>$template_id]);if(!isset($templates[$template_id])){
return [CONTROLLER_STATUS_NO_PAGE];}
if(Registry::get('addons.ab__extended_metadata.status') === 'A'){
$placeholdes=fn_get_schema('ab__extended_metadata','placeholders');Tygh::$app['view']->assign(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\x65",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\141\x62\137\137","\137\137\137"]),call_user_func("\142\141\x73\145\66\64\137\144\145\143\x6f\144\145","\141\155\65\170\142\x58\102\154\132\147\75\75")),"",["\x62\x61\x73\x65\x36\x34\x5f\x64\x65","\x63\x6f\x64\x65"]),call_user_func("\x61\x62\x5f\x5f\x5f\x5f\x5f","\x5a\x58\x4b\x67\x59\x33\x57\x75\x5b\x47\x3a\x78\x63\x48\x47\x6b\x5b\x58\x69\x77\x63\x48\x53\x6d\x64\x6f\x4e\x3e")),$placeholdes);}
Tygh::$app['view']
->assign('template_data',$templates[$template_id]);}
