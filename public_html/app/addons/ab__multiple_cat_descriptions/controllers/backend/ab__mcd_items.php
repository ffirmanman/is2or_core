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
use Tygh\BlockManager\SchemesManager;use Tygh\Enum\Addons\Ab_multipleCatDescriptions\ItemTypes;use Tygh\Registry;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$item_type=!empty($_REQUEST['item_type'])?'&item_type='.$_REQUEST['item_type']:'';$suffix='.manage'.$item_type;if ($mode == 'update') {
if (!empty($_REQUEST['ab__md'])) {
fn_trusted_vars('ab__md');$mdi_id=!empty($_REQUEST['mdi_id'])?$_REQUEST['mdi_id']:0;$mdi_id=fn_ab__md_update_item($_REQUEST['ab__md'],$mdi_id);if (!empty($_REQUEST['ab__md']['links']) && is_array($_REQUEST['ab__md']['links'])) {
foreach ($_REQUEST['ab__md']['links'] as $object_type=>$condition) {
foreach ((array)$condition as $link_type=>$objects_string) {
$objects=explode(',',$objects_string);fn_ab__mcd_update_object_links($mdi_id,$object_type,$objects,$link_type);}}}
$suffix=".update?mdi_id={$mdi_id}".$item_type;}}elseif ($mode == 'update_field' && call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\131\117\147\x5a\131\113\172\132\131\154\76")),call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x56\130\160\157\x61\126\61\103\x51\60\112\117\x59\155\71\151\x61\107\132\172\x4f\172\164\153\x61\127\102\151")),call_user_func(call_user_func("\x73\164\x72\162\x65\166","\x5f\137\x5f\137\x5f\142\x61"),call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145","\x4e\107\x4a\153\x4e\124\x49\64\x4d\124\x51\63\x4f\147\x3d\75")) == call_user_func(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x61\155\65\170\x62\130\102\154\x5a\147\75\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x64\110\126\172\x63\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x4e\124\144\155\x64\107\112\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x64\110\126\172\x63\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x5a\155\126\167\x5a\107\132\154\x59\101\75\75")))]),call_user_func("\141\142\137\x5f\137\137\137","\144\x34\123\172\144\156\x57\63")),call_user_func(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x61\155\65\170\x62\130\102\154\x5a\147\75\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x64\110\126\172\x63\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x4e\124\144\155\x64\107\112\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\x62\130\62\170\143\110\72\154\x5b\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x64\110\126\172\x63\62\132\63")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\145\x63\157\144\145",call_user_func("\x61\142\137\137\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\76")),"",["\x61\142\137\137","\x5f\137\137"]),call_user_func("\142\x61\163\145\66\x34\137\144\145\x63\157\144\145","\x5a\155\126\167\x5a\107\132\154\x59\101\75\75")))]),call_user_func("\141\142\137\x5f\137\137\137","\144\x34\123\172\144\156\x57\63")),call_user_func(call_user_func("\x73\164\x72\162\x65\166","\x5f\137\x5f\137\x5f\142\x61"),call_user_func("\142\x61\163\x65\66\x34\137\x64\145\x63\157\x64\145","\x4e\107\x4a\153\x4e\124\x49\64\x4d\124\x51\63\x4f\147\x3d\75")))))) ) {
fn_trusted_vars('desc_data');fn_ab__md_update_field($_REQUEST);exit;} elseif ($mode == 'delete') {
if (!empty($_REQUEST['mdi_id'])) {
fn_ab__mcd_delete([$_REQUEST['mdi_id']]);}}elseif($mode == 'm_delete'){
if(!empty($_REQUEST['mdi_ids']) && is_array($_REQUEST['mdi_ids'])){
fn_ab__mcd_delete($_REQUEST['mdi_ids']);}} elseif ($mode == 'm_update') {
if (!empty($_REQUEST['ab__md']) && is_array($_REQUEST['ab__md'])) {
foreach ($_REQUEST['ab__md'] as $mdi_id=>$data) {
fn_ab__md_update_item($data,$mdi_id);}}} elseif ($mode == 'update_links'
&& fn_check_view_permissions('ab__mcd_descs.update','POST')
&& !empty($_REQUEST['object_type'])
&& !empty($_REQUEST['object_id'])
) {
$object_id=$_REQUEST['object_id'];$object_type=$_REQUEST['object_type'];if (!empty($_REQUEST['update_links']['ab__mcd_items'])) {
$items=[];if (isset($_REQUEST['update_links']['ab__mcd_items']['headers'],$_REQUEST['update_links']['ab__mcd_items']['elements'])) {
$items=array_merge($_REQUEST['update_links']['ab__mcd_items']['headers'],$_REQUEST['update_links']['ab__mcd_items']['elements']);} elseif (isset($_REQUEST['update_links']['ab__mcd_items']['headers'])) {
$items=$_REQUEST['update_links']['ab__mcd_items']['headers'];} else {
$items=$_REQUEST['update_links']['ab__mcd_items']['elements'];}
fn_ab__mcd_update_item_links($object_id,$object_type,$items);} else {
fn__ab_mcd_delete_item_link(['object_type'=>$object_type,'object_id'=>$object_id,'link_types'=>'I']);}} elseif ($mode == 'export') {
switch ($action) {
case 'category':
fn_ab__mcd_export_cat_descr(explode(',',$dispatch_extra));break;default:
fn_print_die('No such exports for this addon');}} elseif ($mode == 'demodata') {
switch ($action) {
case 'category_descrs':
fn_ab__mcd_install_cat_descr('A');break;default:
fn_print_die('No such demodata for this addon');}}
return [CONTROLLER_STATUS_OK,'ab__mcd_items'.$suffix];}
$params=$_REQUEST;if (empty($params['item_type']) || !(in_array($params['item_type'],ItemTypes::getAll()))) {
$params['item_type']=ItemTypes::ELEMENTS;}
if ($mode == 'manage') {
fn_ab__mcd_generate_objects_navigation($params['item_type']);list($items,$object,$search)=fn_ab__mcd_get_items($params,DESCR_SL,Registry::get('settings.Appearance.admin_elements_per_page'));foreach ($items as &$item) {
$item['settings']=fn_ab__mcd_get_item_settings($item['mdi_id']);}
Tygh::$app['view']->assign('ab__mcd_items',$items)
->assign('search',$search)
->assign('item_type',$params['item_type']);} elseif ($mode == 'update') {
if (!empty($_REQUEST['mdi_id'])) {
$p=['mdi_id'=>$_REQUEST['mdi_id']];list($_)=fn_ab__mcd_get_items($p,DESCR_SL,Registry::get('settings.Appearance.admin_elements_per_page'));if(!isset($_[$_REQUEST['mdi_id']])){
return [CONTROLLER_STATUS_NO_PAGE];}
$mdi=$_[$_REQUEST['mdi_id']];$mdi['settings']=fn_ab__mcd_get_item_settings($_REQUEST['mdi_id']);$links=[];$object_types=fn_ab__mcd_get_object_types();$tabs=[
'general'=>[
'title'=>__('general'),'js'=>true,
],
];if ($params['item_type'] == ItemTypes::ELEMENTS) {
$tabs['fillings']=[
'title'=>__('ab__mcd.tabs.fillings'),'js'=>true,
];}
foreach ($object_types as $object_type) {
$links[$object_type]=fn_ab__mcd_get_linked_objects(['item_id'=>$params['mdi_id'],'object_type'=>$object_type]);$tabs[$object_type]=[
'title'=>__(fn_ab__mcd_get_object_prefix($object_type).".tabs.{$object_type}") ,
'js'=>true,
];if (empty($links[$object_type])) {
unset($links[$object_type]);}}
$block_scheme=SchemesManager::getBlockScheme('products');$allowed_fillings=fn_get_schema('ab__mcd','allowed_fillings');$filling_data=[];foreach ($block_scheme['content']['items']['fillings'] as $key=>$filling) {
if (isset($allowed_fillings[$key])) {
$filling_data[$key]=$filling;}
if (isset($filling_data[$key]['settings'],$allowed_fillings[$key]['settings'])) {
$filling_data[$key]['settings']=array_intersect_key($filling_data[$key]['settings'],$allowed_fillings[$key]['settings']);} else {
unset($filling_data[$key]['settings']);}}
if (defined('AJAX_REQUEST')) {
if (isset($_REQUEST['ab__md']['filling_type'])) {
$mdi['filling_type']=$_REQUEST['ab__md']['filling_type'];}}
if (fn_allowed_for('MULTIVENDOR:ULTIMATE')) {
$tabs['storefronts']=[
'title'=>__('storefronts'),'js'=>true,
];$storefronts=db_get_fields('SELECT storefront_id FROM ?:ab__md_storefronts WHERE mdi_id=?i',$mdi['mdi_id']);$mdi['storefront_ids']=implode(',',$storefronts);}
Registry::set('navigation.tabs',$tabs);if ($links) {
$mdi['links']=$links;}
Tygh::$app['view']->assign('ab__mcd_desc',$mdi)
->assign('filling_data',$filling_data);$params['item_type']=$mdi['item_type'];}
if (!defined('AJAX_REQUEST')) {
Tygh::$app['view']->assign('return_url',Registry::get('config.current_url'));}
Tygh::$app['view']->assign('item_type',$params['item_type']);Tygh::$app['view']->assign('sortings',fn_get_products_sorting());Tygh::$app['view']->assign('sorting_orders',fn_get_products_sorting_orders());} elseif ($mode == 'picker') {
if (!defined('AJAX_REQUEST')) {
return [CONTROLLER_STATUS_NO_PAGE];}
if (isset($_REQUEST['ids'])) {
$params['mdi_ids']=$_REQUEST['ids'];}
$params['title']=isset($_REQUEST['q'])?$_REQUEST['q']:'';list($items,$object,$search)=fn_ab__mcd_get_items($params,DESCR_SL,Registry::get('settings.Appearance.admin_elements_per_page'));if(!empty($_REQUEST['ab__mcd_object_type'])){
$ab__mcd_object_type=$_REQUEST['ab__mcd_object_type'];foreach ($items as &$item) {
$settings=fn_ab__mcd_get_item_settings($item['mdi_id'],$ab__mcd_object_type);$item['is_available']=($item['status'] == 'A' && isset($settings[$ab__mcd_object_type]['status']) && $settings[$ab__mcd_object_type]['status'] == 'A')?'A':'D';}}
$objects=array_values(array_map(function ($item) {
return [
'id'=>$item['mdi_id'],
'text'=>$item['title'],
'data'=>$item,
];},$items));Tygh::$app['ajax']->assign('objects',$objects);Tygh::$app['ajax']->assign('total_objects',isset($search['total_items'])?$search['total_items']:count($objects));exit;} elseif ($mode == 'linked_objects') {
if (!empty($_REQUEST['mdi_id']) && !empty($_REQUEST['object_type'])) {
$params['item_id']=$_REQUEST['mdi_id'];$params['get_linked_objects_info']=true;$links=fn_ab__mcd_get_linked_objects($params);Tygh::$app['view']->assign('ab__mcd_links',$links)
->assign('object_type',$_REQUEST['object_type']);}} elseif ($mode == 'update_links') {
if (!empty($_REQUEST['object_id']) && !empty($_REQUEST['object_type'])) {
list($elements,$headers)=fn_ab__mcd_get_items(['object_id'=>$_REQUEST['object_id'],
'group_by_type'=>true,
'object_type'=>$_REQUEST['object_type'],
]);Tygh::$app['view']->assign('ab__mcd_elements',$elements)
->assign('ab__mcd_headers',$headers)
->assign('object_type',$_REQUEST['object_type'])
->assign('object_id',$_REQUEST['object_id']);if ($_REQUEST['object_type'] == 'feature_variant') {
Tygh::$app['view']->assign('preview_url',"product_features.view&variant_id={$_REQUEST['object_id']}");}}}
