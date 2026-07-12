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
use Tygh\Registry;if($_SERVER['REQUEST_METHOD'] === 'POST'){
if ($mode === 'update' && fn_check_view_permissions('ab__gp.data.manage','POST')) {
if (!empty($_REQUEST['ab__sf_name_data']['ab__gp_object_location_settings'])) {
$object_location_settings=$_REQUEST['ab__sf_name_data']['ab__gp_object_location_settings'];$object_id=$_REQUEST[call_user_func("\142\141\x73\145\66\64\137\x64\145\143\157\144\x65",call_user_func("\141\142\137\137\x5f\137\137","\144\63\133\147\x62\130\122\76"))];$object_type='ab__seo_filter';fn_ab__gp_update_object_location_settings($object_location_settings,$object_id,$object_type);}}}
if($mode === 'update'){
if (!empty($_REQUEST[call_user_func("\142\141\x73\145\66\64\137\x64\145\143\157\144\x65",call_user_func("\141\142\137\137\x5f\137\137","\144\63\133\147\x62\130\122\76"))])) {
Registry::set( 'navigation.tabs.ab__gp_tab',[
'title'=>__('ab__gp.tab'),'js'=>true,
]);list($locations)=fn_ab__gp_get_locations();list($templates)=fn_ab__gp_get_templates();$params=[
'object_id'=>$_REQUEST[call_user_func("\142\141\x73\145\66\64\137\x64\145\143\157\144\x65",call_user_func("\141\142\137\137\x5f\137\137","\144\63\133\147\x62\130\122\76"))],
'object_type'=>'ab__seo_filter'
];$object_location_settings=fn_ab__gp_get_object_location_settings($params);Tygh::$app['view']
->assign('locations',$locations)
->assign('templates',$templates)
->assign('object_location_settings',$object_location_settings);}}