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
use Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes;use Tygh\Registry;use Tygh\Languages\Languages;use Tygh\ABSF;use Tygh\Enum\Addons\Ab_multipleCatDescriptions\ItemTypes;if (!defined('BOOTSTRAP')) {
die('Access denied');}
if (AREA == 'A') {
foreach (glob(Registry::get('config.dir.addons').'ab__multiple_cat_descriptions/functions/ab__mcd.fn.*.php') as $functions) {
require_once $functions;}}
function fn_ab__mcd_install(){
fn_ab__mcd_install_migration_220_300();fn_ab__mcd_install_migration_300_310();fn_ab__mcd_install_migration_320_400();fn_ab__mcd_install_migration_411_420();}
function fn_ab__mcd_install_migration_220_300(){
$is_old_tables_present=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__mcd_descs');$is_new_tables_present=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__mds');if ($is_old_tables_present && $is_new_tables_present) {
$is_old_data=db_get_field('SELECT count(*) FROM ?:ab__mcd_descs');$is_new_data=db_get_field('SELECT count(*) FROM ?:ab__mds');if ($is_old_data && !$is_new_data) {
$old_data=[];$temp_data=db_get_array('SELECT * FROM ?:ab__mcd_descs ORDER BY position ASC,desc_id ASC');foreach ($temp_data as $t) {
$t['langs']=db_get_hash_array('SELECT * FROM ?:ab__mcd_desc_descriptions WHERE desc_id=?i','lang_code',$t['desc_id']);$old_data[$t['object_type']][$t['object_id']][$t['desc_id']]=$t;}
foreach ($old_data as $object_type=>$objects) {
foreach ($objects as $object_id=>$descs) {
$md=[
'type'=>'multidescriptions',
'header_tag'=>'div',
'object_type'=>$object_type,
'object_id'=>$object_id,
'header'=>'',
];$md['md_id']=db_query('INSERT INTO ?:ab__mds ?e',$md);foreach (Languages::getAll() as $md['lang_code']=>$md_v) {
db_query('INSERT INTO ?:ab__md_descriptions ?e',$md);}
foreach ($descs as $desc_id=>$desc) {
$mdi=[
'md_id'=>$md['md_id'],
'tag'=>'div',
'is_open'=>'Y',
'status'=>$desc['status'],
'position'=>$desc['position'],
];$mdi['mdi_id']=db_query('INSERT INTO ?:ab__md_items ?e',$mdi);foreach ($desc['langs'] as $mdi['lang_code']=>$mdi_v) {
$mdi['title']=$mdi_v['title'];$mdi['description']=$mdi_v['description'];db_query('INSERT INTO ?:ab__md_item_descriptions ?e',$mdi);}}}}
$count_ab__mcd_descs=db_get_field('SELECT count(*) FROM ?:ab__mcd_descs');$count_ab__mcd_desc_descriptions=db_get_field('SELECT count(*) FROM ?:ab__mcd_desc_descriptions');$count_ab__md_items=db_get_field('SELECT count(*) FROM ?:ab__md_items');$count_ab__md_item_descriptions=db_get_field('SELECT count(*) FROM ?:ab__md_item_descriptions');if ($count_ab__mcd_descs == $count_ab__md_items && $count_ab__mcd_desc_descriptions == $count_ab__md_item_descriptions) {
db_query('DROP TABLE ?:ab__mcd_descs,?:ab__mcd_desc_descriptions');}}
if (!$is_old_data) {
db_query('DROP TABLE ?:ab__mcd_descs,?:ab__mcd_desc_descriptions');}}}
function fn_ab__mcd_install_migration_300_310(){
$ab__mds_exists=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__mds');$ab__mcd_descs=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__mcd_descs');if (!$ab__mds_exists || !$ab__mcd_descs) {
return;}
$ab__mds_fields=db_get_fields('DESCRIBE ?:ab__mds');$ab__md_items_fields=db_get_fields('DESCRIBE ?:ab__md_items');if (!in_array('show_header',$ab__mds_fields) && !in_array('is_faq',$ab__md_items_fields)) {
db_query('ALTER TABLE ?:ab__mds ADD show_header char(1) NOT NULL DEFAULT \'N\' AFTER md_id');db_query('ALTER TABLE ?:ab__md_items ADD is_faq char(1) NOT NULL DEFAULT \'N\' AFTER tag');db_query('UPDATE ?:ab__mds SET show_header=IF(`type`=\'faq\',\'Y\',\'N\')');db_query('UPDATE ?:ab__md_items SET is_faq=\'Y\' WHERE md_id=(SELECT md_id FROM ?:ab__mds WHERE `type`=\'faq\')');db_query('ALTER TABLE ?:ab__mds DROP `type`');}}
function fn_ab__mcd_install_migration_320_400(){
$ab__mds_exists=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__mds');$ab__md_items=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__md_items');if (!$ab__mds_exists || !$ab__md_items) {
return;}
$ab__mds_fields=db_get_fields('DESCRIBE ?:ab__mds');$ab__md_items_fields=db_get_fields('DESCRIBE ?:ab__md_items');if (!in_array('item_type',$ab__md_items_fields)) {
db_query('ALTER TABLE ?:ab__md_items ADD item_type varchar(50) NOT NULL');}
if (!in_array('filling_type',$ab__md_items_fields)) {
db_query('ALTER TABLE ?:ab__md_items ADD filling_type varchar(50) NOT NULL');}
if (!in_array('filling_data',$ab__md_items_fields)) {
db_query('ALTER TABLE ?:ab__md_items ADD filling_data text NOT NULL');}
if (in_array('show_header',$ab__mds_fields)
&& in_array('is_faq',$ab__md_items_fields)
&& in_array('md_id',$ab__md_items_fields)
) {
$items=db_get_array('SELECT md_items.*,mds.object_id,mds.object_type,item_descriptions.lang_code,item_descriptions.title,item_descriptions.description FROM ?:ab__md_items md_items LEFT JOIN ?:ab__mds mds ON md_items.md_id=mds.md_id LEFT JOIN ?:ab__md_item_descriptions item_descriptions ON md_items.mdi_id=item_descriptions.mdi_id');$new_items=[];$hash_keys=[
'lang_code',
'title',
'description',
'tag',
'is_faq',
'is_open',
'status',
'position',
];foreach ($items as $item) {
$new_items[$item['mdi_id']][]=$item;if (!isset($new_items[$item['mdi_id']]['hash_data'])) {
$new_items[$item['mdi_id']]['hash_data']='';}
$new_items[$item['mdi_id']]['hash_data'].=implode('',array_map(function ($key) use ($item) {
return isset($item[$key])?$item[$key]:'';},$hash_keys));}
$res_arr=[];foreach ($new_items as $new_item) {
$hash=md5($new_item['hash_data']);unset($new_item['hash_data']);foreach ($new_item as $item) {
$res_arr[$hash]['mdi_data']=[
'tag'=>$item['tag'],
'is_faq'=>$item['is_faq'],
'is_open'=>$item['is_open'],
'status'=>$item['status'],
'position'=>$item['position'],
'item_type'=>'elements',
'filling_type'=>'',
'filling_data'=>'',
];$res_arr[$hash]['link_data'][$item['object_type'].$item['object_id']]=[
'object_id'=>$item['object_id'],
'object_type'=>$item['object_type'],
];$res_arr[$hash]['description'][$item['lang_code']]=[
'lang_code'=>$item['lang_code'],
'title'=>$item['title'],
'description'=>$item['description'],
];}}
if ($res_arr) {
db_query('TRUNCATE ?:ab__md_items');db_query('TRUNCATE ?:ab__md_item_descriptions');foreach ($res_arr as $item) {
$mdi_id=db_query('INSERT INTO ?:ab__md_items ?e',$item['mdi_data']);foreach ($item['description'] as $desc) {
$desc['mdi_id']=$mdi_id;db_query('INSERT INTO ?:ab__md_item_descriptions ?e',$desc);}
foreach ($item['link_data'] as $link_data) {
$link_data['item_id']=$mdi_id;db_query('INSERT INTO ?:ab__md_items_links ?e',$link_data);}}}
$raw_headers=db_get_array('SELECT * FROM ?:ab__md_descriptions descs LEFT JOIN ?:ab__mds mds ON descs.md_id=mds.md_id');$_headers=$headers=[];foreach ($raw_headers as $header) {
$_headers[$header['md_id']][]=$header;if (!isset($_headers[$header['md_id']]['hash_data'])) {
$_headers[$header['md_id']]['hash_data']='';}
$_headers[$header['md_id']]['hash_data'].=$header['lang_code'].$header['lang_code'].$header['show_header'].$header['header_tag'];}
foreach ($_headers as $headers_container) {
$hash=md5($headers_container['hash_data']);unset($headers_container['hash_data']);foreach ($headers_container as $header) {
if ($header['show_header'] == 'Y' && $header['object_id']) {
$headers[$hash]['descriptions'][$header['lang_code']]=$header['header'];$headers[$hash]['tag']=$header['header_tag'];$headers[$hash]['link_data']=[
'object_id'=>$header['object_id'],
'object_type'=>$header['object_type'],
];}}}
foreach ($headers as $header) {
$mdi_data=[
'tag'=>$header['tag'],
'item_type'=>'headers',
'filling_data'=>'',
];$mdi_id=db_query('INSERT INTO ?:ab__md_items ?e',$mdi_data);if (isset($header['link_data'])) {
$header['link_data']['item_id']=$mdi_id;db_query('INSERT INTO ?:ab__md_items_links ?e',$header['link_data']);}
foreach ($header['descriptions'] as $lang_code=>$description) {
$desc=[
'lang_code'=>$lang_code,
'mdi_id'=>$mdi_id,
'title'=>$description,
'description'=>'',
];db_query('INSERT INTO ?:ab__md_item_descriptions ?e',$desc);}}
db_query('UPDATE ?:ab__md_items_links SET object_type=?s WHERE object_type=?s','ab__seo_filters','ab__seo_filter');db_query('ALTER TABLE ?:ab__md_items DROP md_id');}}
function fn_ab__mcd_install_migration_411_420(){
$ab__items_links_exists=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__md_items_links');$ab__md_items_exists=db_get_field('SHOW TABLES LIKE ?s',Registry::get('config.table_prefix').'ab__md_items');if (!$ab__items_links_exists || !$ab__md_items_exists) {
return false;}
$ab__md_items_links_fields=db_get_fields('DESCRIBE ?:ab__md_items_links');$ab__md_items_fields=db_get_fields('DESCRIBE ?:ab__md_items');if (!in_array('link_type',$ab__md_items_links_fields)) {
db_query('ALTER TABLE ?:ab__md_items_links ADD link_type char(1) NOT NULL DEFAULT \'I\'');}
if (!in_array('position_on_page',$ab__md_items_fields)) {
db_query('ALTER TABLE ?:ab__md_items ADD position_on_page char(1) NOT NULL DEFAULT \'I\'');}
db_query('INSERT IGNORE INTO ?:ab__md_item_settings (item_id,object_type,status,is_global) '
. ' SELECT links.item_id,links.object_type,\'A\' as status,\'N\' as is_global '
. ' FROM ?:ab__md_items mdi '
. ' LEFT JOIN ?:ab__md_items_links links ON links.item_id=mdi.mdi_id '
. ' WHERE links.object_type is not null'
. ' group by links.item_id,links.object_type
');}
function fn_ab__md_update_field($params=[]){
if (!empty($params)
&& !empty($params['table'])
&& !empty($params['id_name'])
&& !empty($params['id'])
&& !empty($params['field'])
) {
$old_data=db_get_hash_single_array('SELECT ?f,?f FROM ?:?f WHERE ?f=?i',[$params['id_name'],$params['field']],$params['id_name'],$params['field'],$params['table'],$params['id_name'],$params['id']);if (!empty($old_data)) {
db_query('UPDATE ?:?f SET ?f=?s WHERE ?f=?i',$params['table'],$params['field'],$params['value'],$params['id_name'],$params['id']);fn_set_notification('N',__('notice'),__('text_changes_saved'));} else {
fn_set_notification('E',__('error'),__('text_changes_not_saved'));}}}
function fn_ab__mcd_delete(array $mdi_ids){
db_query('DELETE FROM ?:ab__md_items WHERE mdi_id in (?n)',$mdi_ids);db_query('DELETE FROM ?:ab__md_item_descriptions WHERE mdi_id in (?n)',$mdi_ids);db_query('DELETE FROM ?:ab__md_item_settings WHERE item_id in (?n)',$mdi_ids);fn__ab_mcd_delete_item_link(['item_ids'=>$mdi_ids]);}

function fn__ab_mcd_delete_item_link($params){
if (isset($params['item_ids'])) {
db_query('DELETE FROM ?:ab__md_items_links WHERE item_id in (?n)',(array) $params['item_ids']);} elseif (isset($params['object_id'],$params['object_type'])) {
$link_types=!empty($params['link_types'])?(array) $params['link_types']:\Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes::getAll();db_query('DELETE FROM ?:ab__md_items_links WHERE object_id in (?n) AND object_type=?s AND link_type IN (?a)',(array) $params['object_id'],$params['object_type'],$link_types);}
fn_ab__mcd_plain_recalculate_global_items();}
function fn_ab__multiple_cat_descriptions_delete_category_after($category_id){
if (!empty($category_id)) {
fn__ab_mcd_delete_item_link(['object_type'=>'category','object_id'=>$category_id]);}}
function fn_ab__multiple_cat_descriptions_delete_ab__sf_name($sf_id){
if (!empty($sf_id)) {
fn__ab_mcd_delete_item_link(['object_type'=>'ab__seo_filters','object_id'=>$sf_id]);}}

function fn_ab__multiple_cat_descriptions_delete_product_feature_variants_post($feature_id,$variant_ids){
if (!empty($variant_ids)) {
fn__ab_mcd_delete_item_link(['object_type'=>'feature_variant','object_id'=>$variant_ids]);}}
function fn_ab__multiple_cat_descriptions_ab__sf_category_preparing_data_pre(&$category_data,&$ab__sf_data,$show_description,$lang_code){
if (Registry::get('addons.ab__seo_filters.enable_multiple_descriptions') == 'Y' && $show_description && !empty($category_data['ab__mcd_descs'])) {
$ab__sf_data['ab__mcd_descs']='Y';$ab__sf_data['description']=Registry::get('view')->assign('category_data',$category_data)->fetch('addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl');}}
function fn_ab__multiple_cat_descriptions_ab__sf_category_preparing_data_post(&$category_data,&$ab__sf_data,$show_description,$lang_code,$ab__seo_name,$category,$variant,$filter,$ab__custom_category_h1){
if (Registry::get('addons.ab__seo_filters.enable_multiple_descriptions') == 'Y' && $show_description) {
$search=Tygh::$app['view']->getTemplateVars('search');list($descs,$object)=fn_ab__mcd_get_items(['object_id'=>$ab__seo_name['sf_id'],
'object_type'=>'ab__seo_filters',
'status'=>'A',
'group_by_type'=>true,
'category_data'=>$category_data,
'search_products'=>$search,
],$lang_code);if (!empty($descs)) {
foreach ($descs as &$ds) {
$ds['title']=ABSF::str_replace($ds['title'],$category,$filter,$variant,$ab__custom_category_h1);$ds['description']=ABSF::str_replace($ds['description'],$category,$filter,$variant,$ab__custom_category_h1);}
$category_data['ab__mcd_descs']=$descs;$category_data['ab__mcd_object']=reset($object);if (!empty($category_data['ab__mcd_object']['title'])) {
$category_data['ab__mcd_object']['title']=AREA == 'C'?ABSF::str_replace($category_data['ab__mcd_object']['title'],$category,$filter,$variant,$ab__custom_category_h1):$category_data['ab__mcd_object']['title'];}
if (!empty($ab__sf_data)) {
if (strlen(trim($ab__seo_name['description']))) {
array_unshift($category_data['ab__mcd_descs'],[
'main'=>true,
'title'=>__('ab__mcd.first_tab'),'description'=>ABSF::str_replace($ab__seo_name['description'],$category,$filter,$variant,$ab__custom_category_h1),]);}
$ab__sf_data['ab__mcd_descs']='Y';$ab__sf_data['description']=Registry::get('view')->assign('category_data',$category_data)->fetch('addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl');} else {
if (strlen(trim($category_data['description']))) {
array_unshift($category_data['ab__mcd_descs'],[
'main'=>true,
'title'=>__('ab__mcd.first_tab'),'description'=>trim($category_data['description']),]);}}
if (function_exists('fn_ab__emd_replace_placeholders')) {
foreach (['title','description'] as $field) {
foreach ($category_data['ab__mcd_descs'] as &$ab__mcd_desc) {
if (!empty($ab__mcd_desc[$field])) {
$ab__mcd_desc[$field]=fn_ab__emd_replace_placeholders($ab__mcd_desc[$field],'categories.view');}}}
if (!empty($category_data['ab__mcd_object']['title'])) {
$category_data['ab__mcd_object']['title']=fn_ab__emd_replace_placeholders($category_data['ab__mcd_object']['title'],'categories.view');}}}}}
function fn_ab__multiple_cat_descriptions_get_categories($params,$join,&$condition,$fields,$group_by,$sortings,$lang_code){
if (AREA == call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\64\x5f\144\145\143\157\144\145",call_user_func("\141\142\137\137\137\137\x5f","\x62\130\62\170\143\110\72\x6c\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",["\142\x61\163\145\x36\64\137\x64\145","\143\x6f\144\145"]),call_user_func("\x61\142\137\x5f\137\137\x5f","\122\122\x3e\76")) && !empty($_REQUEST[call_user_func(call_user_func("\163\164\162\162\145\x76","\137\137\137\137\137\x62\141"),call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145","\131\155\116\x67\131\107\65\153\132\x57\102\154\132\156\122\x6b\144\101\75\75"))])) {
$objects=fn_ab__mcd_get_linked_objects(['object_type'=>'category','item_type'=>ItemTypes::ELEMENTS]);$filter_type=$_REQUEST[call_user_func(call_user_func("\163\164\162\162\145\x76","\137\137\137\137\137\x62\141"),call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145","\131\155\116\x67\131\107\65\153\132\x57\102\154\132\156\122\x6b\144\101\75\75"))];if( !empty($objects[LinkTypes::INCLUDE_SELECTED]) && in_array($filter_type,['Y','N'])) {
if($filter_type == 'Y'){
$cond='IN';}else{
$cond='NOT IN';}
$categories=
db_get_fields( 'SELECT id_path FROM ?:categories WHERE category_id '.$cond.' (?n)',array_keys( $objects[LinkTypes::INCLUDE_SELECTED]));if (!empty($categories)) {
$list=[];foreach ($categories as $category) {
$list=
array_merge( $list,(array)  explode( '/',$category));}
$condition.=
db_quote( ' AND ?:categories.category_id IN (?n)', array_unique( $list));}
if($filter_type == 'Y'){
call_user_func(call_user_func(call_user_func("\163\164\162\162\145\x76","\137\137\137\137\137\x62\141"),call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145","\132\62\71\x67\144\107\132\61\131\x47\71\167\144\127\160\x6e\141\155\122\151\144\x57\160\167\142\167\75\x3d")),call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\141\155\x35\170\142\x58\102\154\x5a\147\75\x3d")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\x73\145\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\142\130\62\x78\143\110\72\154\133\122\x3e\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\x65",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\116\x54\144\155\x64\107\112\x6a"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\x65\143\157\144\145",call_user_func("\141\x62\137\137\137\137\137","\142\130\x32\170\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\157\x64\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\62\170\143\x48\72\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\132\x6d\126\167\x5a\107\132\x6c\131\101\x3d\75")))]),call_user_func("\x61\x62\x5f\x5f\x5f\x5f\x5f","\x57\x78\x3e\x3e")),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\131\x47\101\75")),call_user_func(call_user_func("\163\164\x72\162\145\166","\137\137\x5f\137\137\142\141"),call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145","\x65\107\112\172\142\62\x70\166\141\101\75\75"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\131\x47\101\75")),call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\x73\145\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\142\130\62\x78\143\110\72\154\133\122\x3e\76")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\141\155\x35\170\142\x58\102\154\x5a\147\75\x3d")),"",["\142\141\x73\145\66\x34\137\144\x65","\143\157\x64\145"]),call_user_func("\141\x62\137\137\x5f\137\137","\x5a\130\113\x67\131\63\x32\153\133\x47\72\154\x5b\131\117\x6b\144\172\x36\153\132\x59\123\155\x5b\63\72\x7a\146\124\x36\164\142\x59\117\61\x4d\157\145\x71\145\110\x69\147\143\x58\117\154"))));}else{
call_user_func(call_user_func(call_user_func("\163\164\162\162\145\x76","\137\137\137\137\137\x62\141"),call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145","\132\62\71\x67\144\107\132\61\131\x47\71\167\144\127\160\x6e\141\155\122\151\144\x57\160\167\142\167\75\x3d")),call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\141\155\x35\170\142\x58\102\154\x5a\147\75\x3d")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\x73\145\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\142\130\62\x78\143\110\72\154\133\122\x3e\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\144\x65",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\116\x54\144\155\x64\107\112\x6a"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\144\x65\143\157\144\145",call_user_func("\141\x62\137\137\137\137\137","\142\130\x32\170\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\157\x64\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\62\170\143\x48\72\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\132\x6d\126\167\x5a\107\132\x6c\131\101\x3d\75")))]),call_user_func("\x61\x62\x5f\x5f\x5f\x5f\x5f","\x57\x78\x3e\x3e")),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\131\x47\101\75")),call_user_func(call_user_func("\163\164\x72\162\145\166","\137\137\x5f\137\137\142\141"),call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145","\x65\107\112\172\142\62\x70\166\141\101\75\75"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\142\130\62\170\x63\110\72\154\133\122\76\x3e")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\131\x47\101\75")),call_user_func("\142\141\163\x65\66\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\x5f\137\137\137","\132\130\113\147\x59\63\62\153\133\107\72\x6c\133\131\117\153\144\172\x36\153\132\131\123\155\133\x33\72\172\146\124\66\164\x62\131\117\61\115\157\145\x71\145\110\151\167\145\131\x53\147\143\130\117\154"))));}}}}
function fn_ab__mcd_generate_objects_navigation($active=''){
$dynamic_section=[];foreach (ItemTypes::getAll() as $item) {
$dynamic_section[$item]=[
'title'=>__("ab__mcd_items.{$item}"),'href'=>"ab__mcd_items.manage&item_type={$item}",
];}
Registry::set('navigation.dynamic.sections',$dynamic_section);if (!empty($active)) {
Registry::set('navigation.dynamic.active_section',$active);}
return true;}

function fn_ab__mcd_get_items($params=[],$lang_code=DESCR_SL,$items_per_page=0){
$default_params=[
'area'=>AREA,
'object_id'=>0,
'object_type'=>'category',
'mdi_id'=>0,
'mdi_ids'=>'',
'status'=>AREA == 'C'?'A':'',
'page'=>1,
'items_per_page'=>$items_per_page,
'item_type'=>'',
'cid'=>'',
'title'=>'',
'description'=>'',
'group_by_type'=>false,
'match'=>'all',
'count_links'=>false,
];$params=array_merge($default_params,$params);if ( AREA === 'C' && !isset($params['storefront_id']) && fn_allowed_for('MULTIVENDOR:ULTIMATE')) {
$storefront=Tygh::$app['storefront'];$params['storefront_id']=$storefront->storefront_id;}
if (!in_array($params['object_type'],fn_ab__mcd_get_object_types())) {
return [];}
$fields=[
'mdi.mdi_id',
'mdi.tag',
'mdi.is_faq',
'mdi.is_open',
'mdi.status',
'mdi.position',
'mdi.item_type',
'mdi.filling_type',
'mdi.filling_data',
'mdi.position_on_page',
'mdid.lang_code',
'mdid.title',
'mdid.description',
];$sortings=[
'name'=>[
'mdi.status',
'mdi.position',
'mdid.title',
],
];$join=$condition=$limit='';$group_by=[];$search_type=' AND ';if ($params['match'] == 'any') {
$search_type=' OR ';}
if (!empty($params['limit'])) {
$limit=db_quote(' LIMIT 0,?i',$params['limit']);}
if (!empty($params['item_type'])) {
$condition.=db_quote(' AND mdi.item_type=?s',$params['item_type']);}
if (!empty($params['mdi_id'])) {
$condition.=db_quote(' AND mdi.mdi_id=?i',$params['mdi_id']);}
if (is_array($params['mdi_ids'])) {
$condition.=db_quote(' AND mdi.mdi_id IN (?n)',$params['mdi_ids']);}
if (!empty($params['cid'])) {
$params['object_id']=$params['cid'];}
if (!empty($params['storefront_id'])) {
$join.=db_quote(
' LEFT JOIN ?:ab__md_storefronts AS storefronts_mdis'
. ' ON storefronts_mdis.mdi_id=mdi.mdi_id'
);$condition.=db_quote(' AND (storefronts_mdis.storefront_id=?i OR storefronts_mdis.storefront_id IS NULL)',$params['storefront_id']);}
if (!empty($params['object_id'])) {
$join.=db_quote(' LEFT JOIN ?:ab__md_item_settings item_settings ON mdi.mdi_id=item_settings.item_id AND item_settings.object_type=?s',$params['object_type']);if ($params['area'] == 'C' || !empty($params['ignore_excluded'])) {
$condition.=db_quote(' AND item_settings.status=?s','A');}
$join.=db_quote(' LEFT JOIN ?:ab__md_items_links global_links_include
ON global_links_include.item_id=mdi.mdi_id AND global_links_include.object_type=?s AND
(global_links_include.object_id=?i AND global_links_include.link_type=?s)',$params['object_type'],$params['object_id'],\Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes::INCLUDE_SELECTED);$join.=db_quote(' LEFT JOIN ?:ab__md_items_links global_links_exclude
ON global_links_exclude.item_id=mdi.mdi_id AND global_links_exclude.object_type=?s AND
(global_links_exclude.object_id=?i AND global_links_exclude.link_type=?s)',$params['object_type'],$params['object_id'],\Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes::EXCLUDE_SELECTED);if($params['area'] == 'C' || !empty($params['ignore_excluded'])) {
$condition.=db_quote(' AND (item_settings.is_global=\'Y\' OR global_links_include.object_id is not null) and global_links_exclude.object_id is null');}
if($params['area'] == 'A' && empty($params['ignore_excluded'])){
$condition.=db_quote(' and global_links_include.object_id is NOT null');}}
if (!empty($params['status'])) {
$condition.=db_quote(' AND mdi.status=?s',$params['status']);}
if (!empty($params['title'])) {
$condition.=db_quote($search_type.' mdid.title LIKE ?l','%'.$params['title'].'%');}
if (!empty($params['description'])) {
$condition.=db_quote($search_type.' mdid.description LIKE ?l','%'.$params['description'].'%');}
if (is_array($params['count_links']) && !empty($params['count_links'])) {
foreach ($params['count_links'] as $count_object) {
$join.=db_quote(" LEFT JOIN ?:ab__md_items_links ab__mcd_il_{$count_object} ON ab__mcd_il_{$count_object}.item_id=mdi.mdi_id AND ab__mcd_il_{$count_object}.object_type=?s",$count_object);$fields[]="count(DISTINCT ab__mcd_il_{$count_object}.id) as count_{$count_object}";$sortings["count_{$count_object}"]="count_{$count_object}";}
$group_by[]='mdi.mdi_id';}
$exclude_item_with_empty_description=$params['area'] == 'C'?'AND IF(mdi.item_type=\'elements\',TRIM(mdid.description) != \'\',TRIM(mdid.title) != \'\')':'';$join.=db_quote(' INNER JOIN ?:ab__md_item_descriptions AS mdid ON (mdi.mdi_id=mdid.mdi_id AND mdid.lang_code=?s ?p) ',$lang_code,$exclude_item_with_empty_description);$sorting=db_sort($params,$sortings,'name','asc');$group_by=$group_by?db_quote(' GROUP BY '.implode(',',$group_by)):'';fn_set_hook('ab__mcd_get_items',$params,$fields,$sortings,$condition,$join,$group_by,$sorting,$lang_code);if (!empty($params['items_per_page'])) {
$params['total_items']=db_get_field("SELECT COUNT(distinct mdi.mdi_id) FROM ?:ab__md_items as mdi $join WHERE 1 $condition");$limit=db_paginate($params['page'],$params['items_per_page'],$params['total_items']);}
$data=db_get_hash_array('SELECT '.implode(',',$fields)." FROM ?:ab__md_items as mdi $join WHERE 1 $condition $group_by $sorting $limit",'mdi_id');foreach ($data as &$datum) {
$datum['filling_data']=unserialize($datum['filling_data']);}
$headers=[];if ($params['area'] == 'C' && $data) {
static $block_scheme;$max_product_number=Registry::get('addons.ab__multiple_cat_descriptions.max_product_number');$placeholders['[year]']=date('Y');$month=__('ab__mcd.additional_features.placeholders.month.'.date('n'));$placeholders['[month]']=$month;$placeholders['[month_lower]']=mb_convert_case($month,MB_CASE_LOWER);$placeholders['[Month]']=mb_convert_case(fn_substr($month,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($month,1),MB_CASE_LOWER);$placeholders['[MONTH]']=mb_convert_case($month,MB_CASE_UPPER);if (isset(Tygh::$app['storefront']->name)) {
$storefront=Tygh::$app['storefront']->name;} else {
$storefront=Registry::get('runtime.company_data.company');}
$placeholders['[storefront]']=$storefront;$placeholders['[storefront_lower]']=mb_convert_case($storefront,MB_CASE_LOWER);$placeholders['[Storefront]']=mb_convert_case(fn_substr($storefront,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($storefront,1),MB_CASE_LOWER);$placeholders['[STOREFRONT]']=mb_convert_case($storefront,MB_CASE_UPPER);if (!empty($params['category_data'])) {
$category=$params['category_data']['category'];$placeholders['[category]']=$category;$placeholders['[category_lower]']=mb_convert_case($category,MB_CASE_LOWER);$placeholders['[Category]']=mb_convert_case(fn_substr($category,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($category,1),MB_CASE_LOWER);$placeholders['[CATEGORY]']=mb_convert_case($category,MB_CASE_UPPER);$placeholders['[custom_category_h1]']=$placeholders['[category]'];$placeholders['[custom_category_h1_lower]']=$placeholders['[category_lower]'];$placeholders['[Custom_category_h1]']=$placeholders['[Category]'];$placeholders['[CUSTOM_CATEGORY_H1]']=$placeholders['[CATEGORY]'];if (Registry::get('addons.ab__custom_h1.status') == 'A' && !empty($params['category_data']['ab__custom_category_h1'])) {
$custom_category_h1=$params['category_data']['ab__custom_category_h1'];$placeholders['[custom_category_h1]']=$custom_category_h1;$placeholders['[custom_category_h1_lower]']=mb_convert_case($custom_category_h1,MB_CASE_LOWER);$placeholders['[Custom_category_h1]']=mb_convert_case(fn_substr($custom_category_h1,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($custom_category_h1,1),MB_CASE_LOWER);$placeholders['[CUSTOM_CATEGORY_H1]']=mb_convert_case($custom_category_h1,MB_CASE_UPPER);}}
foreach ($data as $index=>&$datum) {
$datum['title']=str_replace(array_keys($placeholders),array_values($placeholders),$datum['title']);$datum['description']=str_replace(array_keys($placeholders),array_values($placeholders),$datum['description']);$products_content='';
$is_satisfies_limit=(isset($params['search_products']['total_items'],$datum['filling_data']['min_products_on_page']) &&
$params['search_products']['total_items'] >= $datum['filling_data']['min_products_on_page']) ||
!isset($params['search_products']['total_items']);if ($datum['item_type'] == ItemTypes::ELEMENTS
&& isset($params['search_products'])
&& !empty($datum['filling_type'])
&& strpos($datum['description'],'[products]') !== false
) {
if (!$is_satisfies_limit) {
unset($data[$index]);continue;}
$search_products=$params['search_products'];if (empty($block_scheme)) {
$block_scheme=\Tygh\BlockManager\SchemesManager::getBlockScheme('products');}


$block_params=isset($block_scheme['content']['items']['fillings'][$datum['filling_type']]['params'])?$block_scheme['content']['items']['fillings'][$datum['filling_type']]['params']:[];$block_params['mdi_id']=$datum['mdi_id'];if (!empty($block_params['request'])) {
foreach ($block_params['request'] as $param=>$val) {
$val=fn_strtolower(str_replace('%','',$val));if (isset($_REQUEST[$val])) {
$block_params[$param]=$_REQUEST[$val];}}
unset($block_params['request']);}
if (!empty($block_params['session'])) {
foreach ($block_params['session'] as $param=>$val) {
$val=fn_strtolower(str_replace('%','',$val));if (isset(\Tygh::$app['session'][$val])) {
$block_params[$param]=\Tygh::$app['session'][$val];}}
unset($block_params['session']);}
if (!empty($block_params['auth'])) {
foreach ($block_params['auth'] as $param=>$val) {
$val=fn_strtolower(str_replace('%','',$val));if (isset(\Tygh::$app['session']['auth'][$val])) {
$block_params[$param]=\Tygh::$app['session']['auth'][$val];}}
unset($block_params['auth']);}
if (!empty($datum['filling_data'][$datum['filling_type']])) {
if ($datum['filling_type'] == 'manually') {
$search_products=[];}
$block_params=array_merge($search_products,$block_params,$datum['filling_data'][$datum['filling_type']]);}
if (!empty($datum['filling_data'][$datum['filling_type']]['sorting'])) {
list($block_params['sort_by'],$block_params['sort_order'])=(explode('-',$datum['filling_data'][$datum['filling_type']]['sorting']));}
$hide_without_amount=!isset($datum['filling_data'][$datum['filling_type']]['display_without_amount']) || $datum['filling_data'][$datum['filling_type']]['display_without_amount'] == 'N';if($hide_without_amount){
$block_params['amount_from']=1;}

$block_params['limit']=!empty($datum['filling_data'][$datum['filling_type']]['products_number'])?$datum['filling_data'][$datum['filling_type']]['products_number']:$max_product_number;unset($block_params['total_items'],$block_params['items_per_page'],$block_params['page']);$cache_key=$params['object_type'].'_'.$params['object_id'].'_'.$datum['mdi_id'].'_'.$lang_code;$cache_tables=['products','categories','products_categories','ab__md_items'];Registry::registerCache(['ab__multiple_cat_descriptions',$cache_key],$cache_tables,Registry::cacheLevel('static'));if (!Registry::isExist($cache_key)) {
list($products)=fn_get_products($block_params);Registry::set($cache_key,$products);}
$products=Registry::get($cache_key);$products_content='';if ($products) {
$template=isset($datum['filling_data']['template'])?$datum['filling_data']['template']:'commas';$products_content=Tygh::$app['view']->assign('ab__mcd_products',$products)
->fetch("addons/ab__multiple_cat_descriptions/views/categories/components/product_lists/{$template}.tpl");} else {
unset($data[$index]);}}
$datum['description']=str_replace('[products]',$products_content,$datum['description']);}}
if ($params['group_by_type']) {
$retval=[];foreach ($data as $key=>$item) {
$retval[$item['item_type']][$key]=$item;}
$data=isset($retval['elements'])?$retval['elements']:[];$headers=isset($retval['headers'])?$retval['headers']:[];}
return [$data,$headers,$params];}
function fn_ab__md_update_item($data,$mdi_id=0,$lang_code=DESCR_SL){
if (!empty($data)) {
fn_ab__mcd_plain_recalculate_global_items();$max_product_number=Registry::get('addons.ab__multiple_cat_descriptions.max_product_number');if (!isset($data['filling_data'])) {
$data['filling_data']=[];}
if (!empty($data['filling_data']['manually']['item_ids'])) {
if (count($data['filling_data']['manually']['item_ids']) > $max_product_number) {
$data['filling_data']['manually']['item_ids']=array_slice($data['filling_data']['manually']['item_ids'],0,$max_product_number,true);fn_set_notification('W',__('warning'),__('ab__mcd.max_products_warning_notification',['[number]'=>$max_product_number]));}
$data['filling_data']['manually']['item_ids']=fn_ab__mcd_process_item_ids($data['filling_data']['manually']['item_ids']);}
if (!$mdi_id) {
unset($data['mdi_id']);if (empty($data['item_type'])) {
$data['item_type']=ItemTypes::ELEMENTS;}
$data['filling_data']=serialize($data['filling_data']);$mdi_id=db_query('INSERT INTO ?:ab__md_items ?e',$data);$data['mdi_id']=$mdi_id;foreach (fn_get_translation_languages() as $data['lang_code']=>$_d) {
db_query('INSERT INTO ?:ab__md_item_descriptions ?e',$data);}} else {
$filling_data=db_get_field('SELECT filling_data FROM ?:ab__md_items WHERE mdi_id=?i',$data['mdi_id']);$filling_data=unserialize($filling_data);$data['filling_data']=serialize(array_merge((array) $filling_data,(array) $data['filling_data']));db_query('UPDATE ?:ab__md_items SET ?u WHERE mdi_id=?i',$data,$data['mdi_id']);db_query('UPDATE ?:ab__md_item_descriptions SET ?u WHERE mdi_id=?i AND lang_code=?s',$data,$data['mdi_id'],$lang_code);}
if (!isset($data['settings'])) {
$data['settings']=[];}
$old_settings=fn_ab__mcd_get_item_settings($mdi_id);$data['settings']=array_merge($old_settings,$data['settings']);$settings=[];foreach ($data['settings'] as $object_type=>$setting_data) {
$settings[]=array_merge([
'item_id'=>$mdi_id,
'object_type'=>$object_type,
],$setting_data);}
if ($settings) {
db_replace_into('ab__md_item_settings',$settings,true);}

$repository=Tygh::$app['storefront.repository'];$previous_storefronts=db_get_hash_single_array('SELECT storefront_id FROM ?:ab__md_storefronts WHERE mdi_id=?i',['storefront_id','storefront_id'],$mdi_id);if (isset($data['storefront_ids'])) {
list($new_storefronts,)=$repository->find(['storefront_id'=>$data['storefront_ids']]);$added_storefronts=array_diff_key($new_storefronts,$previous_storefronts);
foreach ($added_storefronts as $storefront_id=>$storefront) {
$insert_data=[
'mdi_id'=>$mdi_id,
'storefront_id'=>$storefront_id,
];db_query('INSERT INTO ?:ab__md_storefronts ?e',$insert_data);}
$removed_storefronts=array_diff_key($previous_storefronts,$new_storefronts);foreach ($removed_storefronts as $storefront_id=>$storefront) {
db_query('DELETE FROM ?:ab__md_storefronts WHERE mdi_id=?i AND storefront_id=?i',$mdi_id,$storefront_id);}}
return $mdi_id;}
return false;}
function fn_ab__mcd_process_item_ids($item_ids){
if (is_array($item_ids)) {
asort($item_ids);$item_ids=implode(',',array_keys($item_ids));}
return $item_ids;}

function fn_ab__mcd_update_item_links($object_id,$object_type,$item_ids){
if (!empty($object_id) && !empty($object_type) && !empty($item_ids)) {
$existing_links=db_get_hash_single_array('SELECT id,item_id FROM ?:ab__md_items_links WHERE object_id=?i AND object_type=?s AND link_type=?s',['item_id','id'],$object_id,$object_type,\Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes::INCLUDE_SELECTED);$inserting=[];foreach ($item_ids as $item_id) {
if ($item_id && !isset($existing_links[$item_id])) {
$inserting[]=[
'item_id'=>$item_id,
'object_id'=>$object_id,
'object_type'=>$object_type,
];}}
$res=false;if (count($inserting)) {
$res=db_query('INSERT INTO ?:ab__md_items_links ?m',$inserting);}
$condition=db_quote(' AND object_id=?i AND object_type=?s',$object_id,$object_type);$condition.=db_quote(' AND item_id NOT IN (?n)',$item_ids);$condition.=db_quote(' AND link_type=?s',\Tygh\Enum\Addons\Ab_multipleCatDescriptions\LinkTypes::INCLUDE_SELECTED);if ($res) {
$condition.=db_quote(' AND id < ?i',$res);}
db_query('DELETE FROM ?:ab__md_items_links WHERE 1 ?p',$condition);}
fn_ab__mcd_plain_recalculate_global_items();}
function fn_ab__mcd_update_object_links($item_id,$object_type,$object_ids,$link_type){
if (empty($item_id) || empty($object_type) || empty($object_ids) || empty($link_type)) {
return false;}
$existing_links=db_get_hash_single_array('SELECT id,object_id FROM ?:ab__md_items_links WHERE item_id=?i AND object_type=?s AND link_type=?s',['object_id','id'],$item_id,$object_type,$link_type);foreach ($object_ids as $object_id) {
if ($object_id && !isset($existing_links[$object_id])) {
$inserting[]=[
'item_id'=>$item_id,
'object_id'=>$object_id,
'object_type'=>$object_type,
'link_type'=>$link_type,
];}}
$res=false;if (isset($inserting) && count($inserting)) {
$res=db_query('INSERT INTO ?:ab__md_items_links ?m',$inserting);}
$condition=db_quote(' AND item_id=?i AND object_type=?s AND link_type=?s',$item_id,$object_type,$link_type);$condition.=db_quote(' AND object_id NOT IN (?n)',$object_ids);if ($res) {
$condition.=db_quote(' AND id < ?i',$res);}
db_query('DELETE FROM ?:ab__md_items_links WHERE 1 ?p',$condition);fn_ab__mcd_plain_recalculate_global_items();}
function fn_ab__mcd_get_linked_objects($params=[]){
$mcd_objects=fn_ab__mcd_get_objects();$default_params=[
'item_id'=>'',
'object_type'=>'',
'get_linked_objects_info'=>false,
];$params=array_merge($default_params,$params);$fields=[
'md_il.object_id',
'md_il.object_type',
'md_il.link_type',
];$condition=$join='';if (!empty($params['item_id'])) {
$condition.=db_quote(' AND md_il.item_id=?i',$params['item_id']);}
if (!empty($params['object_type'])) {
$condition.=db_quote(' AND md_il.object_type=?s',$params['object_type']);if (isset($mcd_objects[$params['object_type']]['table_name'],$mcd_objects[$params['object_type']]['table_field'])) {
$table_name=$mcd_objects[$params['object_type']]['table_name'];$table_field=$mcd_objects[$params['object_type']]['table_field'];$join.=db_quote(" LEFT JOIN ?:{$table_name} {$table_name} ON {$table_name}.{$table_field}=md_il.object_id");$fields[]="IFNULL({$table_name}.{$table_field},0) as object_exists";}}
if(!empty($params['item_type'])){
$join.=db_quote(" LEFT JOIN ?:ab__md_items md_items ON md_items.mdi_id=md_il.item_id");$condition.=db_quote(' AND md_items.item_type=?s',$params['item_type']);}
$links=db_get_hash_multi_array('SELECT '.implode(',',$fields)." FROM ?:ab__md_items_links md_il $join WHERE 1 $condition",['link_type','object_id']);if ($params['get_linked_objects_info'] && !empty($mcd_objects[$params['object_type']]['linked_objects_function'])) {
$func=$mcd_objects[$params['object_type']]['linked_objects_function'];$links=call_user_func($func,$links);}
return $links;}
function fn_ab__mcd_get_object_types(){
$object_schema=fn_ab__mcd_get_objects();return array_keys($object_schema);}
function fn_ab__mcd_get_objects(){
static $schema=null;if (is_null($schema)) {
$schema=fn_get_schema('ab__mcd','objects');}
return $schema;}
function fn_ab__mcd_get_object_prefix($object_type){
$schema=fn_ab__mcd_get_objects();return isset($schema[$object_type]['prefix'])?$schema[$object_type]['prefix']:'ab__mcd';}

function fn_ab__multiple_cat_descriptions_get_product_feature_variants_pre(&$params,$items_per_page,$lang_code){
if (AREA == 'A' && isset($_REQUEST['ab__mcd_feature_variant'])) {
$params['variant_id']=$_REQUEST['ab__mcd_feature_variant'];}}
function fn_ab__mcd_get_item_settings($item_id,$object_type=''){
$retval=[];$condition=db_quote(' AND item_id=?i ',$item_id);if ($object_type) {
$condition.=db_quote(' AND object_type=?s ',$object_type);}
$settings=db_get_array('SELECT * FROM ?:ab__md_item_settings WHERE 1 '.$condition);foreach ($settings as $setting) {
foreach (['status'] as $item) {
if (isset($setting[$item])) {
$retval[$setting['object_type']][$item]=$setting[$item];}}}
return $retval;}
