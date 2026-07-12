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
if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return;}
if ($mode == call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\x34\137\144\145\143\x6f\144\145",call_user_func("\141\142\x5f\137\137\137\137","\142\130\x32\170\143\110\72\x6c\133\122\76\76")),"",["\x61\142\x5f\137","\x5f\137\x5f"]),call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145","\x64\62\x70\155\x65\101\x3d\75"))) {
if (empty($_SESSION['ab__seo_data'])) {
$category_data=Tygh::$app['view']->getTemplateVars('category_data');$search=Tygh::$app['view']->getTemplateVars('search');list($elements,$headers)=fn_ab__mcd_get_items([
'object_id'=>$_REQUEST['category_id'],
'object_type'=>'category',
'status'=>'A',
'group_by_type'=>true,
'category_data'=>$category_data,
'search_products'=>$search,
],CART_LANGUAGE);$category_data['ab__mcd_descs']=$elements;$category_data['ab__mcd_object']=reset($headers);if (strlen(trim((string)$category_data['description']))) {
array_unshift($category_data['ab__mcd_descs'],[
'main'=>true,
'title'=>__('ab__mcd.first_tab'),'description'=>trim($category_data['description']),]);}
if (function_exists('fn_ab__emd_replace_placeholders')) {
foreach (['title','description'] as $field) {
foreach ($category_data['ab__mcd_descs'] as &$ab__mcd_desc) {
if (!empty($ab__mcd_desc[$field])) {
$ab__mcd_desc[$field]=fn_ab__emd_replace_placeholders($ab__mcd_desc[$field],'categories.view');}}}
if (!empty($category_data['ab__mcd_object']['title'])) {
$category_data['ab__mcd_object']['title']=fn_ab__emd_replace_placeholders($category_data['ab__mcd_object']['title'],'categories.view');}}
Tygh::$app['view']->assign('category_data',$category_data);}}
