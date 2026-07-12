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
namespace Tygh;use DateTime;use Tygh\Enum\ABSFConfigs;use Tygh\Enum\ProductFeatures;use Tygh\Languages\Languages;use Tygh\Storefront\Storefront;use Tygh\Enum\ObjectStatuses;if (!defined('BOOTSTRAP')) {
die('Access denied');}
class ABSF{
public static $feature_types=[ProductFeatures::SINGLE_CHECKBOX,
ProductFeatures::MULTIPLE_CHECKBOX,
ProductFeatures::TEXT_SELECTBOX,
ProductFeatures::NUMBER_SELECTBOX,
ProductFeatures::EXTENDED,
ProductFeatures::NUMBER_FIELD,
ProductFeatures::DATE,];public static $feature_rules=[ProductFeatures::SINGLE_CHECKBOX,
ProductFeatures::MULTIPLE_CHECKBOX,
ProductFeatures::EXTENDED,
ProductFeatures::TEXT_SELECTBOX,];public static function get_hash_separate(){
static $hash_separate='';if (empty($hash_separate)) {
$hash_separate='.';if (version_compare(PRODUCT_VERSION,'4.3.5') >= 0) {
$hash_separate='_';}}
return $hash_separate;}
private static function get_max_filters(){
return Registry::ifGet('addons.ab__seo_filters.max_filters',4);}
private static function get_max_variants(){
return Registry::ifGet('addons.ab__seo_filters.max_variants',3);}
public static function str_replace($str='',$category='',$filter='',$variant='',$ab__custom_category_h1=''){
static $data=[];$str=trim($str);$category=trim($category);$variant=trim(is_string($variant)?$variant:'');$filter=trim($filter);$ab__custom_category_h1=trim($ab__custom_category_h1);$key=md5($category.$filter.$variant.$ab__custom_category_h1);if (empty($data[$key])) {
$placeholders=[
'%category%'=>$category,
'%category_lower%'=>mb_convert_case($category,MB_CASE_LOWER),'%Category%'=>mb_convert_case(fn_substr($category,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($category,1),MB_CASE_LOWER),'%CATEGORY%'=>mb_convert_case($category,MB_CASE_UPPER),'%filter%'=>$filter,
'%filter_lower%'=>mb_convert_case($filter,MB_CASE_LOWER),'%Filter%'=>mb_convert_case(fn_substr($filter,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($filter,1),MB_CASE_LOWER),'%FILTER%'=>mb_convert_case($filter,MB_CASE_UPPER),'%variant%'=>$variant,
'%variant_lower%'=>mb_convert_case($variant,MB_CASE_LOWER),'%Variant%'=>mb_convert_case(fn_substr($variant,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($variant,1),MB_CASE_LOWER),'%VARIANT%'=>mb_convert_case($variant,MB_CASE_UPPER),'[category]'=>$category,
'[category_lower]'=>mb_convert_case($category,MB_CASE_LOWER),'[Category]'=>mb_convert_case(fn_substr($category,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($category,1),MB_CASE_LOWER),'[CATEGORY]'=>mb_convert_case($category,MB_CASE_UPPER),'[filter]'=>$filter,
'[filter_lower]'=>mb_convert_case($filter,MB_CASE_LOWER),'[Filter]'=>mb_convert_case(fn_substr($filter,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($filter,1),MB_CASE_LOWER),'[FILTER]'=>mb_convert_case($filter,MB_CASE_UPPER),'[variant]'=>$variant,
'[variant_lower]'=>mb_convert_case($variant,MB_CASE_LOWER),'[Variant]'=>mb_convert_case(fn_substr($variant,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($variant,1),MB_CASE_LOWER),'[VARIANT]'=>mb_convert_case($variant,MB_CASE_UPPER),];$placeholders['%custom_category_h1%']=$placeholders['%category%'];$placeholders['%custom_category_h1_lower%']=$placeholders['%category_lower%'];$placeholders['%Custom_category_h1%']=$placeholders['%Category%'];$placeholders['%CUSTOM_CATEGORY_H1%']=$placeholders['%CATEGORY%'];$placeholders['[custom_category_h1]']=$placeholders['[category]'];$placeholders['[custom_category_h1_lower]']=$placeholders['[category_lower]'];$placeholders['[Custom_category_h1]']=$placeholders['[Category]'];$placeholders['[CUSTOM_CATEGORY_H1]']=$placeholders['[CATEGORY]'];if (!empty($ab__custom_category_h1)) {
$placeholders['[custom_category_h1]']=$placeholders['%custom_category_h1%']=$ab__custom_category_h1;$placeholders['[custom_category_h1_lower]']=$placeholders['%custom_category_h1_lower%']=mb_convert_case($ab__custom_category_h1,MB_CASE_LOWER);$placeholders['[Custom_category_h1]']=$placeholders['%Custom_category_h1%']=mb_convert_case(fn_substr($ab__custom_category_h1,0,1),MB_CASE_UPPER).mb_convert_case(fn_substr($ab__custom_category_h1,1),MB_CASE_LOWER);$placeholders['[CUSTOM_CATEGORY_H1]']=$placeholders['%CUSTOM_CATEGORY_H1%']=mb_convert_case($ab__custom_category_h1,MB_CASE_UPPER);}
$data[$key]=[$placeholders,Registry::ifGet('ab.ab__seo_filters.additional_replacements',[])];}
list($main_replacements,$additional_replacements)=$data[$key];if (!empty($additional_replacements)) {
foreach ($additional_replacements as $r) {
$str=strtr($str,$r);}}
$str=str_replace(array_keys($main_replacements),array_values($main_replacements),$str);return $str;}
public static function get_rules($params,$items_per_page=0,$lang_code=CART_LANGUAGE){
$default_params=['rule_id'=>[],
'feature_id'=>[],
'category_id'=>0,
'page'=>1,
'items_per_page'=>$items_per_page,
'limit'=>0,
'autogenerate'=>'N',
'status'=>[ObjectStatuses::ACTIVE,ObjectStatuses::DISABLED],
];$params=array_merge($default_params,$params);$fields=['r.rule_id',
'r.feature_id',
'r.categories',
'r.subcats',
'r.position',
'r.status',
'r.generated_categories',
'r.fixed',
'r.show_in_breadcrumbs',
'r.link_pattern',
'r.autogenerate',
'rd.lang_code',
'rd.description',
'rd.short_description',
'rd.meta_keywords',
'rd.meta_description',
'rd.page_title',
'rd.tag_h1',
'rd.breadcrumb',
'rd.product_breadcrumb',];$sortings=['status_position_rule'=>['r.status',
'r.position',
'r.rule_id',]];$join=$cond=$limit='';$cond.=db_quote(' AND r.status in (?a) ',$params['status']);if (!empty($params['rule_id']) && is_array($params['rule_id'])) {
$cond.=db_quote(' AND r.rule_id in (?n) ',$params['rule_id']);}
if ($params['autogenerate'] == 'Y') {
$cond.=db_quote(' AND r.autogenerate=?s ','Y');}
if (!empty($params['feature_id']) && is_array($params['feature_id'])) {
$find_in_set=[];foreach ($params['feature_id'] as $f) {
$find_in_set[]=db_quote(' FIND_IN_SET(?i,feature_id) > 0 ',$f);}
$cond.=db_quote(' AND (?p) ',implode(' AND ',$find_in_set));}
if (!empty($params['cid']) && intval($params['cid'])) {
$cond.=db_quote('AND FIND_IN_SET(?i,r.categories)',intval($params['cid']));}
$cond.=static::get_company_condition('r.company_id');$join.=db_quote('LEFT JOIN ?:ab__sf_rule_descriptions AS rd ON (rd.rule_id=r.rule_id AND rd.lang_code=?s)',$lang_code);$sorting=db_sort($params,$sortings,'status_position_rule','asc');$limit='';if (!empty($params['items_per_page'])) {
$params['total_items']=db_get_field("SELECT COUNT(DISTINCT(r.rule_id)) FROM ?:ab__sf_rules AS r {$join} WHERE 1 ?p ",$cond);$limit=db_paginate($params['page'],$params['items_per_page'],$params['total_items']);}
$data=db_get_hash_array('SELECT '.implode(',',$fields)." FROM ?:ab__sf_rules AS r {$join} WHERE 1 ?p ?p ?p",'rule_id',$cond,$sorting,$limit);if (empty($data) || !is_array($data)) {
return [false,$params];}
foreach ($data as $k=>$v) {
$data[$k]['feature_id']=explode(',',$v['feature_id']);}
if (!empty($params['get_categories_description'])) {
foreach ($data as $k=>$v) {
$d=[];$data[$k]['categories_description']=fn_array_merge($d,fn_get_categories_list($v['categories'],$lang_code),false);}}
if (!empty($params['get_feature_name'])) {
foreach ($data as $k=>$v) {
foreach ($v['feature_id'] as $f) {
$data[$k]['feature_name'][$f]=fn_get_feature_name($f,$lang_code);}}}
if (!empty($params['get_desc_by_langs'])) {
foreach ($data as $k=>$v) {
$data[$k]['desc_by_langs']=db_get_hash_array('SELECT lang_code,description,short_description,meta_keywords,meta_description,page_title,tag_h1,breadcrumb,product_breadcrumb FROM ?:ab__sf_rule_descriptions WHERE rule_id=?i ORDER BY lang_code','lang_code',$k);}}
return [$data,$params];}
public static function update_rule($data,$id=0,$lang_code=CART_LANGUAGE){
if (is_array($data) && !empty($data)) {
if (empty($data[ 'sequence_features'])) {
fn_set_notification( 'E',__( 'error'),__( 'ab__sf.errors.feature_is_empty'));return false;}
if (!isset($data[ 'categories']) || !strlen($data[ 'categories'])) {
fn_set_notification( 'E',__( 'error'),__( 'ab__sf.errors.categories_is_empty'));return false;}
$d=['feature_id'=>implode(',',array_slice((array) explode(',',$data['sequence_features']),0,static::get_max_filters())),'company_id'=>fn_get_runtime_company_id(),'categories'=>$data['categories'],
'subcats'=>$data['subcats'],
'fixed'=>in_array($data['fixed'],ABSFConfigs::get_page_states())?$data['fixed']:ABSFConfigs::PAGE_STATE_UNFIXED,
'description'=>trim($data['description']),'short_description'=>trim($data['short_description']),'meta_keywords'=>trim($data['meta_keywords']),'meta_description'=>trim($data['meta_description']),'page_title'=>trim($data['page_title']),'tag_h1'=>trim($data['tag_h1']),'breadcrumb'=>trim($data['breadcrumb']),'product_breadcrumb'=>trim($data['product_breadcrumb']),'show_in_breadcrumbs'=>$data['show_in_breadcrumbs'],
'link_pattern'=>$data['link_pattern'],
'position'=>intval(trim($data['position'])),'generated_categories'=>$data['generated_categories'],
'status'=>$data['status'],
'autogenerate'=>$data['autogenerate']
];if (intval($id)) {
db_query( 'UPDATE ?:ab__sf_rules SET ?u WHERE rule_id=?i',$d,$id);db_query( 'UPDATE ?:ab__sf_rule_descriptions SET ?u WHERE rule_id=?i AND lang_code=?s',$d,$id,$lang_code);} else {
$id=$d[
'rule_id']=db_query( 'REPLACE INTO ?:ab__sf_rules ?e',$d);foreach (Languages::getAll() as $d[ 'lang_code']=>$v) {
db_query( 'REPLACE INTO ?:ab__sf_rule_descriptions ?e',$d);}}
return $id;}
return false;}
public static function delete_rules($id){
$id=(array) $id;if (!empty($id) && is_array($id)) {

db_query( 'DELETE FROM ?:ab__sf_rules WHERE rule_id in (?n)',$id);
db_query( 'DELETE FROM ?:ab__sf_rule_descriptions WHERE rule_id in (?n)',$id);}}
public static function get_name($category_id,$features_hash,$lang_code,$full=true,$fixed=[ABSFConfigs::PAGE_STATE_FIXED,ABSFConfigs::PAGE_STATE_UNFIXED,ABSFConfigs::PAGE_STATE_HIDDEN],$only_show_in_breadcrumbs=false){
if (intval($category_id) > 0 && strlen(trim($features_hash)) && strlen(trim($lang_code))) {
$fields=[
'nd.sf_id',
'nd.name',
'n.features_hash'
];$conditions='';$having='';if ($full) {
$fields[]='nd.description';$fields[]='nd.short_description';$fields[]='nd.meta_keywords';$fields[]='nd.meta_description';$fields[]='nd.page_title';$fields[]='nd.tag_h1';$fields[]='nd.breadcrumb';$fields[]='nd.product_breadcrumb';}
$conditions.=db_quote(' AND n.category_id=?i',$category_id);$conditions.=static::get_company_condition('n.company_id');if ($only_show_in_breadcrumbs) {
$conditions.=db_quote(' AND n.show_in_breadcrumbs=?s','Y');}
if (!empty($fixed)) {
$conditions.=db_quote(' AND n.fixed in (?a)',$fixed);}
[$combos_condition,$having]=static::_get_hash_combos_condition($features_hash);$conditions.='AND '.$combos_condition;if (!empty($having)) {
$having='HAVING'.$having;}
$data=db_get_row(
'SELECT ?p ' .
'FROM ?:ab__sf_names AS n ' .
'INNER JOIN ?:ab__sf_name_descriptions AS nd ON (n.sf_id=nd.sf_id AND nd.lang_code=?s) ' .
'INNER JOIN ?:ab__sf_features AS f ON f.sf_id=n.sf_id ' .
'WHERE 1 ?p ' .
'GROUP BY nd.sf_id ' .
'?p',
implode(',',$fields),$lang_code,
$conditions,
$having
);if (!empty($data['sf_id'])) {
$feature_value=db_get_fields(
'SELECT feature_value FROM ?:ab__sf_features WHERE sf_id=?i ORDER BY position ASC',
$data['sf_id']
);if (!empty($feature_value)) {
$data['features_hash']=implode(ABSF_HASH_SEPARATE,$feature_value);}}
if (!empty($data)) {
return $data;}}
return false;}
private static function _get_hash_combos_condition($features_hash){
$conditions='';$having='';$combos=[];$hashes=(array) explode(ABSF_HASH_SEPARATE,$features_hash);$hashes=array_slice($hashes,0,static::get_max_filters());foreach ($hashes as $hash) {
if (!empty($hash)) {
if (strpos($hash,'-',strpos($hash,'-') + 1) === false) {
$combos[]=$hash;}
list($filter_id,$hs)=explode('-',$hash,2);
if (db_get_field('SELECT IFNULL(field_type,0) FROM ?:product_filters WHERE filter_id=?i',$filter_id)) {
$combos[]=$hash;} else {
$cs=static::_get_array_combos(array_unique(explode('-',$hs)));foreach ($cs as $c) {
$combos[]=$filter_id.'-'.$c;}}}}
if (!empty($combos)) {
$conditions=db_quote('n.feature_count=?i',count($hashes));$conditions.=db_quote(' AND f.feature_value IN (?a)',array_unique($combos));$having=db_quote(' COUNT(DISTINCT f.feature_value)=?i',count($hashes));}
$conditions=(!empty($conditions)?$conditions:false);$having=(!empty($having)?$having:false);return [$conditions,$having];}
private static function _get_array_combos($arr,$glue='-',$slice=true){
if ($slice) {
$arr=array_slice((array) $arr,0,static::get_max_variants());}
$combinations=[];$words=sizeof($arr);$combos=1;if (count(array_unique($arr)) != 1) {
for ($i=$words; $i > 0; $i--) {
$combos *= $i;}}
while (sizeof($combinations) < $combos) {
shuffle($arr);$combo=implode($glue,$arr);if (!in_array($combo,$combinations)) {
$combinations[]=$combo;}}
return $combinations;}
public static function get_features_hash($name,$category_id,$lang_code){
if (strlen(trim($name)) && intval($category_id) && strlen(trim($lang_code))) {
return db_get_row(
'SELECT ' .
'n.sf_id,' .
'GROUP_CONCAT(f.feature_value ORDER BY f.position SEPARATOR "'.ABSF_HASH_SEPARATE .'") AS features_hash ' .
'FROM ?:ab__sf_names AS n ' .
'INNER JOIN ?:ab__sf_name_descriptions AS nd ON n.sf_id=nd.sf_id ' .
'LEFT JOIN ?:ab__sf_features AS f ON n.sf_id=f.sf_id ' .
'WHERE nd.name=?s AND n.category_id=?i AND nd.lang_code=?s',
$name,
$category_id,
$lang_code
);}
return false;}
public static function get_names($params,$items_per_page=0,$lang_code=CART_LANGUAGE){

fn_set_hook('ab__sf_get_names_pre',$params,$items_per_page,$lang_code);$default_params=['name_id'=>[],
'category_id'=>0,
'feature_id'=>0,
'name'=>'',
'features_hash'=>'',
'fixed'=>ABSFConfigs::get_page_states(),'page'=>1,
'items_per_page'=>$items_per_page,
'limit'=>0,
'get_all_companies'=>false,];$params=array_merge($default_params,$params);$fields=[
'n.sf_id',
'n.category_id ',
"GROUP_CONCAT(f.feature_value ORDER BY f.position SEPARATOR '".ABSF_HASH_SEPARATE."') AS features_hash",
'n.fixed',
'n.show_in_breadcrumbs',
'n.show_in_subcategory_block',
'n.is_noindex',
'n.position_in_subcategory_block',
'n.canonical_id',
'nd.lang_code',
'nd.name',
'nd.name_in_subcategory_block',
'nd.description',
'nd.short_description',
'nd.meta_keywords',
'nd.meta_description',
'nd.page_title',
'nd.tag_h1',
'nd.breadcrumb',
'nd.product_breadcrumb',
];$sortings=['name'=>'nd.name','category'=>'cd.category','features_hash'=>'n.features_hash','fixed'=>'n.fixed','is_noindex'=>'n.is_noindex'];$join=$cond=$group_by=$limit='';if (!empty($params['sf_id']) && is_array($params['sf_id'])) {
$cond.=db_quote(' AND n.sf_id in (?n) ',$params['sf_id']);}
if (!empty($params['category_id']) && intval($params['category_id'])) {
if (!empty($params['subcats']) && $params['subcats'] == 'Y') {
$categories=static::_get_categories_and_subcategories($params['category_id']);if ($categories) {
$cond.=db_quote(' AND n.category_id in (?n) ',$categories);}} else {
$cond.=db_quote(' AND n.category_id=?i ',$params['category_id']);}}
if (!empty($params['name']) && strlen(trim($params['name']))) {
$cond.=db_quote(' AND nd.name like ?l ',trim($params['name']));}
if (!empty($params['fixed']) && is_array($params['fixed'])) {
$cond.=db_quote(' AND n.fixed in (?a) ',$params['fixed']);}
if (!empty($params['show_in_breadcrumbs']) && in_array($params['show_in_breadcrumbs'],['Y','N'])) {
$cond.=db_quote(' AND n.show_in_breadcrumbs=?s ',$params['show_in_breadcrumbs']);}
$features_cond=[];if (!empty($params['features_hash']) && strlen(trim($params['features_hash']))) {
$feature_values=explode(ABSF_HASH_SEPARATE,$params['features_hash']);$feature_values=array_filter($feature_values);if (!empty($feature_values)) {
$features_cond[]=db_quote(
'n.sf_id IN (
SELECT sf_id
FROM ?:ab__sf_features
WHERE feature_value IN (?a)
GROUP BY sf_id
HAVING COUNT(DISTINCT feature_value) >= ?i)',
$feature_values,
count($feature_values)
);}}
if (!empty($params['feature_id']) && is_array($params['feature_id'])) {
$spliter='-';$filter_ids=static::_get_filter_by_feature($params['feature_id']);if (empty($filter_ids) && !empty($params['feature_id'])) {
unset($params['total_items']);return [false,$params];}
$filter_ids=array_keys(fn_array_value_to_key($filter_ids,'filter_id'));if (!empty($filter_ids)) {
$_cond=[];$_having=[];foreach ($filter_ids as $filter_id) {
$_cond[]=db_quote('fc_f.feature_value REGEXP \'^?i-([0-9Y]+-?)+$\'',$filter_id);$_having[]=db_quote('SUM(fc_f.feature_value REGEXP \'^?i-([0-9Y]+-?)+$\') > 0',$filter_id);}
$features_cond[]=db_quote(
'n.sf_id IN (
SELECT fc_n.sf_id
FROM ?:ab__sf_features AS fc_f
INNER JOIN ?:ab__sf_names AS fc_n ON fc_n.sf_id=fc_f.sf_id AND fc_n.feature_count >= ?i
WHERE ?p
GROUP BY fc_f.sf_id
HAVING ?p)',
count($_cond),implode(' OR ',$_cond),implode(' AND ',$_having)
);}}
if (!empty($features_cond)) {
$cond.=db_quote(' AND (?p)',implode(' AND ',$features_cond));}
$join.=db_quote(' LEFT JOIN ?:ab__sf_name_descriptions AS nd ON (nd.sf_id=n.sf_id AND nd.lang_code=?s) ',$lang_code);$join.=db_quote(' LEFT JOIN ?:category_descriptions AS cd ON (cd.category_id=n.category_id AND cd.lang_code=?s) ',$lang_code);$join.=db_quote(' LEFT JOIN ?:ab__sf_features AS f ON n.sf_id=f.sf_id ');if (!$params['get_all_companies']) {
$cond.=static::get_company_condition('n.company_id');} else {
$skip_sharing_selection=Registry::ifGet('runtime.skip_sharing_selection',false);Registry::set('runtime.skip_sharing_selection',true);$fields[]='n.company_id';}

fn_set_hook('ab__sf_get_names',$params,$join,$fields,$cond,$sortings,$lang_code);$group_by=db_quote(' GROUP BY n.sf_id ');$sorting=db_sort($params,$sortings,'name','asc');$limit='';if (!empty($params['items_per_page'])) {
$params['total_items']=db_get_field("SELECT COUNT(DISTINCT(n.sf_id)) FROM ?:ab__sf_names AS n {$join} WHERE 1 ?p ",$cond);$limit=db_paginate($params['page'],$params['items_per_page'],$params['total_items']);}
$data=db_get_hash_array('SELECT '.implode(',',$fields)." FROM ?:ab__sf_names AS n {$join} WHERE 1 ?p ?p ?p ?p",'sf_id',$cond,$group_by,$sorting,$limit);if (!is_array($data) || empty($data)) {
return [false,$params];}
if (!empty($params['show_hash_tooltip'])) {
foreach ($data as $k=>$d) {
$data[$k]['tooltip']=static::get_variant_list($d['features_hash'],$lang_code,' ',true);}}
if ($params['get_all_companies']) {
Registry::set('runtime.skip_sharing_selection',$skip_sharing_selection);}

fn_set_hook('ab__sf_get_names_post',$data,$params,$lang_code);return [$data,$params];}
public static function update_name($data,$id=0,$lang_code=DESCR_SL){
if (is_array($data) && !empty($data)) {
if (!isset($data['category_id']) || !intval($data['category_id'])) {
fn_set_notification( 'E',__( 'error'),__( 'ab__sf.errors.category_id_is_empty'));return false;}
if (!isset($data['features_hash']) || !strlen(trim($data['features_hash']))) {
fn_set_notification( 'E',__( 'error'),__( 'ab__sf.errors.features_hash_is_empty'));return false;}
if (!isset($data['name']) || !strlen(trim($data['name']))) {
fn_set_notification( 'E',__( 'error'),__( 'ab__sf.errors.name_is_empty'));return false;}
Registry::set( 'ab__sf.include_hidden',true);$old_url=fn_url( 'categories.view&category_id='.intval($data['category_id']).'&features_hash='.trim($data['features_hash']),'C',fn_get_storefront_protocol(),$lang_code);$seo_settings=fn_get_seo_settings(fn_get_runtime_company_id());$non_latin_symbols=$seo_settings['non_latin_symbols'];$d=['category_id'=>intval($data['category_id']),'company_id'=>fn_get_runtime_company_id(),'fixed'=>(in_array($data['fixed'],ABSFConfigs::get_page_states()))?$data['fixed']:ABSFConfigs::PAGE_STATE_UNFIXED,
'show_in_breadcrumbs'=>$data['show_in_breadcrumbs'],
'show_in_subcategory_block'=>$data['show_in_subcategory_block'],
'is_noindex'=>$data['is_noindex'],
'position_in_subcategory_block'=>intval($data['position_in_subcategory_block']),'name'=>trim(fn_generate_name($data['name'],'',0,($non_latin_symbols == 'Y'))),'name_in_subcategory_block'=>trim($data['name_in_subcategory_block']),'description'=>trim($data['description']),'short_description'=>trim($data['short_description']),'meta_keywords'=>trim($data['meta_keywords']),'meta_description'=>trim($data['meta_description']),'page_title'=>trim($data['page_title']),'tag_h1'=>trim($data['tag_h1']),'breadcrumb'=>trim($data['breadcrumb']),'product_breadcrumb'=>trim($data['product_breadcrumb']),'canonical_id'=>intval($data['canonical_id']),];if (intval($id)) {
$create=false;db_query('UPDATE ?:ab__sf_names SET ?u WHERE sf_id=?i',$d,$id);db_query('UPDATE ?:ab__sf_name_descriptions SET ?u WHERE sf_id=?i AND lang_code=?s',$d,$id,$lang_code);if ($data['seo_create_redirect'] == 'Y') {
$new_url=fn_url('categories.view&category_id='.intval($data['category_id']).'&features_hash='.trim($data['features_hash']),'C',fn_get_storefront_protocol(),$lang_code);if ($old_url != $new_url) {
$domain=trim(fn_url('','C',fn_get_storefront_protocol()),'/');$add_slash=(Registry::ifGet('addons.ab__seo_filters.add_slash','N') == 'Y') ?: false;$dest=str_replace($domain,'',$new_url).($add_slash?'/':'');$d=[
'src'=>str_replace($domain,'',$old_url),'type'=>'s',
'dest'=>$dest,
'lang_code'=>$lang_code,
'ab__seo_filter_id'=>$id,
];fn_seo_update_redirect($d,0);db_query('UPDATE ?:seo_redirects SET dest=?s WHERE ab__seo_filter_id=?i and lang_code=?s ?p',$dest,$id,$lang_code,fn_get_company_condition());db_query('DELETE FROM ?:seo_redirects WHERE ab__seo_filter_id=?i and lang_code=?s AND src=?s ?p',$id,$lang_code,rtrim($dest,'/'),fn_get_company_condition());Registry::set('ab__sf.include_hidden',false);}}} else {
$create=true;$id=$d['sf_id']=db_query('REPLACE INTO ?:ab__sf_names ?e',$d);foreach (Languages::getAll() as $d['lang_code']=>$v) {
db_query('REPLACE INTO ?:ab__sf_name_descriptions ?e',$d);}}
if (!empty($data['features_hash'])) {
static::_update_features_hash($id,$data['features_hash']);}
fn_attach_image_pairs('ab__sf_icon','ab__sf_icon',$id);
fn_set_hook('ab__sf_update_name_post',$data,$id,$lang_code,$create);return $id;}
return false;}
private static function mark_for_update($params,$fixed=''){
$join='';$cond=static::build_delete_condition($params,$fixed);if (!empty($params['filter_id'])) {
$join=db_quote('INNER JOIN ?:ab__sf_features ON ?:ab__sf_names.sf_id=?:ab__sf_features.sf_id ');}
if (!empty($cond)) {
db_query('UPDATE ?:ab__sf_names ?p SET edit_mark=?s
WHERE ?p',$join,'Y',implode(' AND ',$cond));db_query('DELETE ?:ab__sf_name_descriptions FROM ?:ab__sf_name_descriptions
INNER JOIN ?:ab__sf_names ON (?:ab__sf_names.sf_id=?:ab__sf_name_descriptions.sf_id) ?p
WHERE ?p',$join,implode(' AND ',$cond));}}
public static function delete_names($params,$fixed=''){
$join='';$cond=static::build_delete_condition($params,$fixed);if (!empty($params['filter_id'])) {
$join=db_quote('LEFT JOIN ?:ab__sf_features ON ?:ab__sf_names.sf_id=?:ab__sf_features.sf_id ');}
if (!empty($cond)) {
$sf_ids=db_get_fields('SELECT ?:ab__sf_names.sf_id FROM ?:ab__sf_names ?p WHERE ?p',$join,implode(' AND ',$cond));db_query('DELETE FROM ?:ab__sf_names WHERE sf_id IN (?n)',$sf_ids);db_query('DELETE FROM ?:ab__sf_name_descriptions WHERE sf_id IN (?n)',$sf_ids);db_query('DELETE FROM ?:ab__sf_features WHERE sf_id IN (?n)',$sf_ids);fn_set_hook('delete_ab__sf_name',$sf_ids);}}

private static function build_delete_condition($params,$fixed=''){
$cond=[];$spliter='-';if (!empty($params) && is_array($params)) {
if (!empty($params[ 'sf_id'])) {
$cond[]=db_quote( '?:ab__sf_names.sf_id IN (?n)',(array) $params['sf_id']);}
if (!empty($params[ 'category_id'])) {
$cond[]=db_quote( '?:ab__sf_names.category_id IN (?n)',(array) $params['category_id']);}
if (!empty($params[ 'filter_id'])) {
$filter_conditions=[];$filter_ids=array_keys(fn_array_value_to_key($params['filter_id'],'filter_id'));if (!empty($filter_ids)) {
foreach ($filter_ids as $filter_id) {
$filter_conditions[]=db_quote('?:ab__sf_features.feature_value LIKE ?l',$filter_id.'-%');}
$cond[]=db_quote(' (?p) ',implode(' OR ',$filter_conditions));}}
if(!empty($params[ 'marked']) && $params[ 'marked']){
$cond[]=db_quote('?:ab__sf_names.edit_mark=?s','Y');}
if (!empty($fixed) && in_array($fixed,ABSFConfigs::get_page_states())) {
$cond[]=db_quote('?:ab__sf_names.fixed=?s',$fixed);}
if (static::get_company_condition('?:ab__sf_names.company_id',false)) {
$cond[]=static::get_company_condition('?:ab__sf_names.company_id',false);}}
return $cond;}
public static function fix_names($id){
$id=(array) $id;if (is_array($id) && !empty($id)) {
db_query( 'UPDATE ?:ab__sf_names SET fixed=?s WHERE sf_id in (?n)',ABSFConfigs::PAGE_STATE_FIXED,$id);}}
public static function unfix_names($id){
$id=(array) $id;if (is_array($id) && !empty($id)) {
db_query( 'UPDATE ?:ab__sf_names SET fixed=?s WHERE sf_id in (?n)',ABSFConfigs::PAGE_STATE_UNFIXED,$id);}}
public static function do_noindexed_names($id){
$id=(array) $id;if (is_array($id) && !empty($id)) {
db_query( 'UPDATE ?:ab__sf_names SET is_noindex=?s WHERE sf_id in (?n)','Y',$id);}}
public static function do_indexed_names($id){
$id=(array) $id;if (is_array($id) && !empty($id)) {
db_query( 'UPDATE ?:ab__sf_names SET is_noindex=?s WHERE sf_id in (?n)','N',$id);}}
public static function hide_names($id){
$id=(array) $id;if (is_array($id) && !empty($id)) {
db_query( 'UPDATE ?:ab__sf_names SET fixed=?s WHERE sf_id in (?n)',ABSFConfigs::PAGE_STATE_HIDDEN,$id);}}
public static function generate_names($rules){
$result=[];$p=['get_desc_by_langs'=>true];if (!empty($rules) && is_array($rules)) {
$p['rule_id']=$rules;}else{
$p['autogenerate']='Y';}
list($rules)=static::get_rules($p);if(!$rules){
return false;}
foreach ($rules as $rule) {
$result[$rule['rule_id']]['status']=true;if($rule['status'] == ObjectStatuses::DISABLED){
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.rule_is_disabled');continue;}
$features=static::_get_active_features($rule['feature_id']);if (count($features) != count($rule['feature_id'])) {
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.not_all_features_are_active');continue;}
$filters=static::_get_filter_by_feature($rule['feature_id']);if (empty($filters)) {
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.no_active_filters_by_selected_features');continue;} elseif (count($filters) != count($rule['feature_id'])) {
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.not_all_features_exist_active_filters');continue;}
$categories=static::_get_categories_by_rule($rule,$filters);if (empty($categories)) {
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.there_are_no_active_categories');continue;}
if ($rule['generated_categories'] == 'by_non_empty_filter_categories') {
$categories=static::_check_empty_categories($categories,$filters);}
if (empty($categories)) {
$result[$rule['rule_id']]['status']=false;$result[$rule['rule_id']]['text']=__('ab__sf.errors.no_active_products_for_categories');continue;}
static::mark_for_update(['category_id'=>$categories,'filter_id'=>$filters],ABSFConfigs::PAGE_STATE_UNFIXED);$langs=array_keys(fn_get_translation_languages());foreach ($categories as $category) {
static::_generate_seo_by_category($category,$langs,$filters,$rule);}
static::delete_names(['category_id'=>$categories,'filter_id'=>$filters,'marked'=>true],ABSFConfigs::PAGE_STATE_UNFIXED);}
fn_clear_cache('all');return $result;}
private static function _generate_seo_by_category($category_id,$langs,$filters,$rule){
$all_hashs=$variants_info=[];foreach ($filters as $feature_id=>$filter) {
$feature_type=db_get_field('SELECT IFNULL(feature_type,0) FROM ?:product_features WHERE feature_id=?i',$feature_id);switch ($feature_type) {
case ProductFeatures::SINGLE_CHECKBOX:
foreach ($langs as $l) {
$feature_name=db_get_field('SELECT description FROM ?:product_features_descriptions WHERE feature_id=?i and lang_code=?s',$feature_id,$l);$variants_info['Y'][$l]=['variant'=>$feature_name.' '.__('ab__sf.checkbox_set',[],$l)];}
$all_hashs[$feature_id][]=$filter['filter_id'].'-Y';break;case ProductFeatures::MULTIPLE_CHECKBOX:
case ProductFeatures::EXTENDED:
case ProductFeatures::TEXT_SELECTBOX:
$variants=db_get_fields('SELECT DISTINCT pf.variant_id
FROM ?:product_features_values pf
INNER JOIN ?:products_categories pc ON (pc.product_id=pf.product_id)
WHERE pf.feature_id=?i AND pc.category_id in (?n)',$feature_id,(Registry::get('settings.General.show_products_from_subcategories') == 'Y')?static::_get_categories_and_subcategories($category_id):(array) $category_id);if (!empty($variants) && is_array($variants)) {
foreach ($variants as $v) {
$all_hashs[$feature_id][]=$filter['filter_id'].'-'.$v;}}
break;}}
if (empty($all_hashs) || count($all_hashs) != count($filters)) {
return;}
$group_combo_all_hashs=static::_generate_variant_combinations(array_values($all_hashs));if (count($all_hashs) == 1) {
$group_combo_all_hashs=array_shift($all_hashs);}
if (!empty($group_combo_all_hashs) && is_array($group_combo_all_hashs)) {
foreach ($group_combo_all_hashs as $group) {

[$combos_condition,$having]=static::_get_hash_combos_condition(implode(ABSF_HASH_SEPARATE,(array) $group));if (!empty($combos_condition)) {
$combos_condition='AND ('.$combos_condition.')';}
if (!empty($having)) {
$having='HAVING'.$having;}
$old_sf_data=db_get_row(
'SELECT ' .
'IFNULL(n.sf_id,0) as sf_id,' .
'IFNULL(n.edit_mark,?s) as edit_mark ' .
'FROM ?:ab__sf_names AS n ' .
'INNER JOIN ?:ab__sf_features AS f ON f.sf_id=n.sf_id ' .
'WHERE n.category_id=?i ?p ?p ' .
'GROUP BY n.sf_id,n.edit_mark ' .
'?p',
'N',
$category_id,
$combos_condition,
static::get_company_condition('n.company_id'),$having
);if($old_sf_data && $old_sf_data['edit_mark'] == 'N'){
continue;}
$old_sf_id=isset($old_sf_data['sf_id'])?$old_sf_data['sf_id']:0;$cond=[];foreach ((array) $group as $h) {
list($f,$v)=explode('-',$h);$cond[]=db_quote('(pf.filter_id=?s AND pfv.?p=?s)',$f,(intval($v)?'variant_id':'value'),$v);}
$company_join='';$runtime_company_id=fn_get_runtime_company_id();$company_cond=static::get_company_condition('c.company_id');if (!empty($company_cond)) {
$company_join=db_quote('INNER JOIN ?:categories AS c ON(pc.category_id=c.category_id)');}
$pp=[
'cid'=>(Registry::get('settings.General.show_products_from_subcategories') == 'Y')?static::_get_categories_and_subcategories($category_id):(array) $category_id,
'subcats'=>'Y',
'only_short_fields'=>true,
'status'=>ObjectStatuses::ACTIVE,
'sort_by'=>'null',
'features_hash'=>implode(ABSF_HASH_SEPARATE,(array) $group),'get_query'=>true,
];$amount=db_get_field(str_replace('SELECT products.product_id FROM','SELECT count(products.product_id) FROM',fn_get_products($pp)));if (empty($amount)) {
continue;}
$hash=[];foreach ($filters as $filter) {
foreach ((array) $group as $h) {
if (substr($h,0,strlen($filter['filter_id'].'-')) == $filter['filter_id'].'-') {
$hash[]=$h;}}}
$hash_string=implode(ABSF_HASH_SEPARATE,$hash);$nd=[];$sf_name=[
'show_in_breadcrumbs'=>$rule['show_in_breadcrumbs'],
'category_id'=>$category_id,
'fixed'=>in_array($rule['fixed'],[ABSFConfigs::PAGE_STATE_UNFIXED,ABSFConfigs::PAGE_STATE_HIDDEN])?$rule['fixed']:ABSFConfigs::PAGE_STATE_UNFIXED,
'company_id'=>$runtime_company_id,
'edit_mark'=>'N'
];if($old_sf_id){
$sf_name['sf_id']=$old_sf_id;}
$sf_id=db_query('REPLACE INTO ?:ab__sf_names ?e',$sf_name);static::_update_features_hash($sf_id,$hash_string);foreach ($langs as $lang) {
$nd[]=['sf_id'=>$sf_id,
'lang_code'=>$lang,
'name'=>static::_generate_seo_variant_name($category_id,$hash_string,$lang,$rule),'description'=>trim($rule['desc_by_langs'][$lang]['description']),'short_description'=>trim($rule['desc_by_langs'][$lang]['short_description']),'meta_keywords'=>trim($rule['desc_by_langs'][$lang]['meta_keywords']),'meta_description'=>trim($rule['desc_by_langs'][$lang]['meta_description']),'page_title'=>trim($rule['desc_by_langs'][$lang]['page_title']),'tag_h1'=>trim($rule['desc_by_langs'][$lang]['tag_h1']),'breadcrumb'=>trim($rule['desc_by_langs'][$lang]['breadcrumb']),'product_breadcrumb'=>trim($rule['desc_by_langs'][$lang]['product_breadcrumb']),];}
db_query('REPLACE INTO ?:ab__sf_name_descriptions ?m',$nd);if ($rule['generated_categories'] == 'by_all_filter_categories' && Registry::get('settings.General.show_products_from_subcategories')) {
$category_path=db_get_field('SELECT id_path FROM ?:categories WHERE category_id=?i',$category_id);if (!empty($category_path)) {
$categories=db_get_fields('SELECT category_id FROM ?:categories WHERE status=?s AND category_id != ?i AND category_id in (?n)',ObjectStatuses::ACTIVE,$category_id,(array) explode('/',$category_path));if (!empty($categories) && is_array($categories)) {
foreach ($categories as $c) {
$show_filters_into_category=true;foreach ($filters as $filter) {
if (!empty($filter['categories_path']) && !in_array($c,(array) explode(',',$filter['categories_path']))) {
$show_filters_into_category=false;break;}}
if ($show_filters_into_category) {
$isset_sf_id=db_get_field(
'SELECT n.sf_id ' .
'FROM ?:ab__sf_names AS n ' .
'LEFT JOIN ?:ab__sf_features AS f ON n.sf_id=f.sf_id ' .
'WHERE n.category_id=?i ' .
'AND f.feature_value IN (?n) ?p',
$c,
$hash,
static::get_company_condition('n.company_id')
);if (empty($isset_sf_id)) {
$nd=[];$sf_id=db_query('INSERT INTO ?:ab__sf_names ?e',['show_in_breadcrumbs'=>$rule['show_in_breadcrumbs'],'category_id'=>$c,'fixed'=>in_array($rule['fixed'],[ABSFConfigs::PAGE_STATE_UNFIXED,ABSFConfigs::PAGE_STATE_HIDDEN])?$rule['fixed']:ABSFConfigs::PAGE_STATE_UNFIXED,'company_id'=>$runtime_company_id]);static::_update_features_hash($sf_id,$hash_string);foreach ($langs as $lang) {
$nd[]=['sf_id'=>$sf_id,
'lang_code'=>$lang,
'name'=>static::_generate_seo_variant_name($c,$hash_string,$lang,$rule),'description'=>trim($rule['desc_by_langs'][$lang]['description']),'short_description'=>trim($rule['desc_by_langs'][$lang]['short_description']),'meta_keywords'=>trim($rule['desc_by_langs'][$lang]['meta_keywords']),'meta_description'=>trim($rule['desc_by_langs'][$lang]['meta_description']),'page_title'=>trim($rule['desc_by_langs'][$lang]['page_title']),'tag_h1'=>trim($rule['desc_by_langs'][$lang]['tag_h1']),'breadcrumb'=>trim($rule['desc_by_langs'][$lang]['breadcrumb']),'product_breadcrumb'=>trim($rule['desc_by_langs'][$lang]['product_breadcrumb']),];}
db_query('INSERT INTO ?:ab__sf_name_descriptions ?m',$nd);}}}}}}}}
return true;}
private static function _update_features_hash($sf_id,$data){
if (empty($sf_id) || empty($data)) {
return false;}
if (!is_array($data)) {
$data=trim($data);$data=explode(ABSF_HASH_SEPARATE,$data);$data=array_filter($data);}
db_query('DELETE FROM ?:ab__sf_features WHERE sf_id=?i',$sf_id);if (db_get_field('SELECT sf_id FROM ?:ab__sf_names WHERE sf_id=?i',$sf_id)) {
db_query('UPDATE ?:ab__sf_names SET ?u WHERE sf_id=?i',['feature_count'=>count($data)],$sf_id);}
$replace_data=[];foreach ($data as $position=>$feature_value) {
$replace_data[]=[
'sf_id'=>$sf_id,
'feature_value'=>trim($feature_value),'position'=>$position,
];}
if (!empty($replace_data)) {
db_query('REPLACE INTO ?:ab__sf_features ?m',$replace_data);}}
private static function _generate_seo_variant_name($category_id,$hash_string,$lang_code,$rule){
$seo_settings=fn_get_seo_settings(fn_get_runtime_company_id());$non_latin_symbols=$seo_settings['non_latin_symbols'];$name=fn_generate_name(static::get_variant_list($hash_string,$lang_code,'-',false,$rule['link_pattern'],$category_id),'',0,($non_latin_symbols == 'Y'));$sf_id=db_get_fields('SELECT n.sf_id
FROM ?:ab__sf_names as n
INNER JOIN ?:ab__sf_name_descriptions as nd ON (n.sf_id=nd.sf_id)
WHERE nd.lang_code=?s AND n.category_id=?i AND nd.name=?s AND n.fixed != ?s',$lang_code,$category_id,$name,ABSFConfigs::PAGE_STATE_HIDDEN);if (!empty($sf_id)) {
$name.='-absf-dublicate-'.$lang_code.'-'.$hash_string;}
return $name;}
private static function _generate_variant_combinations($arrays,$i=0){
if (!isset($arrays[$i])) {
return [];}
if ($i == count($arrays) - 1) {
return $arrays[$i];}
$tmp=static::_generate_variant_combinations($arrays,$i + 1);$result=[];foreach ($arrays[$i] as $v) {
foreach ($tmp as $t) {
$result[]=is_array($t) ?
array_merge([$v],$t) :
[$v,$t];}}
return $result;}
private static function _check_empty_categories($categories,$filters=[]){
$result=false;if (!empty($categories) && is_array($categories)) {
$no_empty_categories=db_get_fields('SELECT pc.category_id
FROM ?:products_categories AS pc
INNER JOIN ?:products AS p ON (p.product_id=pc.product_id)
WHERE pc.category_id IN (?n) AND p.status=?s
GROUP BY pc.category_id HAVING count(pc.product_id) > 0',$categories,ObjectStatuses::ACTIVE);if (is_array($no_empty_categories) && !empty($no_empty_categories)) {
$result=$no_empty_categories;$empty_categories=array_diff($categories,$no_empty_categories);if (!empty($empty_categories) && is_array($empty_categories)) {
static::delete_names(['category_id'=>$empty_categories,'filter_id'=>$filters],ABSFConfigs::PAGE_STATE_UNFIXED);}}}
return $result;}
private static function _get_filter_by_feature($feature=0){
if (!empty($feature)) {
$data=db_get_hash_array('SELECT filter_id,categories_path,feature_id FROM ?:product_filters WHERE status=?s AND feature_id in (?n)','feature_id',ObjectStatuses::ACTIVE,$feature);if (!empty($data) && is_array($data)) {
$result=[];foreach ($feature as $f) {
if (!empty($data[$f])) {
$result[$f]=$data[$f];}}
return $result;}}
return false;}
private static function _get_active_features($feature=0){
if (!empty($feature)) {
return db_get_fields('SELECT feature_id FROM ?:product_features WHERE status=?s AND feature_type in (?a) AND feature_id in (?n)',ObjectStatuses::ACTIVE,static::$feature_rules,(array) $feature);}
return false;}
private static function _get_categories_by_rule($r,$filters){
if (!isset($r['categories']) || !strlen(trim($r['categories']))) {
return false;}
$rule_categories=[];foreach ((array) explode(',',$r['categories']) as $category_id) {
if ($r['subcats'] == 'Y') {
$cats=static::_get_categories_and_subcategories($category_id);} else {
$cats=[$category_id];}
if (is_array($cats) && !empty($cats)) {
$rule_categories=array_merge($rule_categories,$cats);}}
$rule_categories=array_unique($rule_categories);$filters_categories=[];foreach ($filters as $f) {
if (strlen($f['categories_path'])) {
$filters_categories=array_merge($filters_categories,(array) explode(',',$f['categories_path']));}}
$filters_categories=array_unique($filters_categories);if (is_array($filters_categories) && !empty($filters_categories)) {
return array_intersect($filters_categories,$rule_categories);}
return $rule_categories;}
private static function _consider_parent_categories($rule){
$result=false;if (!empty($rule['generated_categories'])
&& $rule['generated_categories'] == 'by_all_filter_categories'
&& Registry::get('settings.General.show_products_from_subcategories') == 'Y') {
$result=true;}
return $result;}
private static function _get_categories_and_subcategories($category_id){
if (intval($category_id)) {
$cond_a=static::get_company_condition('a.company_id');$cond_c=static::get_company_condition('c.company_id');return db_get_fields("SELECT a.category_id
FROM ?:categories AS a
LEFT JOIN ?:categories AS b ON (b.category_id=?i and b.status=?s)
WHERE a.id_path LIKE CONCAT( b.id_path,'/%' ) {$cond_a}
UNION
SELECT c.category_id
FROM ?:categories AS c
WHERE c.category_id=?i AND c.status=?s {$cond_c}",$category_id,ObjectStatuses::ACTIVE,$category_id,ObjectStatuses::ACTIVE);}
return false;}
public static function parse_native_seo_name($uri,$o){
$req['sl']='';if (!empty($o['object_name']) && strlen($o['object_name'])) {
$search='/'.$o['object_name'];$pos=strrpos($uri,$search);if ($pos !== false) {
$uri=substr_replace($uri,'',$pos,strlen($search));}}
if (!empty($uri)) {
$rewrite_rules=fn_get_rewrite_rules();foreach ($rewrite_rules as $pattern=>$query) {
if (preg_match($pattern,$uri,$matches) || preg_match($pattern,urldecode($query),$matches)) {
$_query=preg_replace("!^.+\?!",'',$query);parse_str($_query,$objects);$result_values='matches';$url_query='';foreach ($objects as $key=>$value) {
preg_match('!^.+\[([0-9])+\]$!',$value,$_id);$objects[$key]=(substr($value,0,1) == '$')?${$result_values}[$_id[1]]:$value;}
if (!empty($objects) && !empty($objects['object_name'])) {
if (Registry::get('addons.seo.single_url') == 'Y') {
$objects['sl']=(Registry::get('addons.seo.seo_language') == 'Y')?$objects['sl']:'';$objects['sl']=!empty($req['sl'])?$req['sl']:$objects['sl'];}
$lang_cond=db_quote('AND lang_code=?s',!empty($objects['sl'])?$objects['sl']:Registry::get('settings.Appearance.frontend_default_language'));$object_type=db_get_field('SELECT type FROM ?:seo_names WHERE name=?s ?p',$objects['object_name'],fn_get_seo_company_condition('?:seo_names.company_id'));$_seo=db_get_array('SELECT * FROM ?:seo_names WHERE name=?s ?p ?p',$objects['object_name'],fn_get_seo_company_condition('?:seo_names.company_id',$object_type),$lang_cond);if (empty($_seo)) {
$_seo=db_get_array('SELECT * FROM ?:seo_names WHERE name=?s ?p',$objects['object_name'],fn_get_seo_company_condition('?:seo_names.company_id'));}
if (empty($_seo) && !empty($objects['extension'])) {
$_seo=db_get_array('SELECT * FROM ?:seo_names WHERE name=?s ?p ?p',$objects['object_name'].'.'.$objects['extension'],fn_get_seo_company_condition('?:seo_names.company_id'),$lang_cond);if (empty($_seo)) {
$_seo=db_get_array('SELECT * FROM ?:seo_names WHERE name=?s ?p',$objects['object_name'].'.'.$objects['extension'],fn_get_seo_company_condition('?:seo_names.company_id',$object_type));}}
if (!empty($_seo)) {
$_seo_valid=false;foreach ($_seo as $__seo) {
$_objects=$objects;if (Registry::get('addons.seo.single_url') != 'Y' && empty($_objects['sl'])) {
$_objects['sl']=$__seo['lang_code'];}
if (fn_seo_validate_object($__seo,$uri,$_objects) == true) {
$_seo_valid=true;$_seo=$__seo;$objects=$_objects;break;}}
if ($_seo_valid == true) {
$req['sl']=$objects['sl'];$_seo_vars=fn_get_seo_vars($_seo['type']);if ($_seo['type'] == 's') {
$url_query=$_seo['dispatch'];$req['dispatch']=$_seo['dispatch'];} else {
$page_suffix=(!empty($objects['page']))?('&page='.$objects['page']):'';$url_query=$_seo_vars['dispatch'].'?'.$_seo_vars['item'].'='.$_seo['object_id'].$page_suffix;$req['dispatch']=$_seo_vars['dispatch'];}
if (!empty($_seo['object_id'])) {
$req[$_seo_vars['item']]=$_seo['object_id'];}
if (!empty($objects['page'])) {
$req['page']=$objects['page'];}
$is_allowed_url=true;}}
if (empty($_seo) || empty($is_allowed_url)) {
$query_string=[];if (!empty($_SERVER['QUERY_STRING'])) {
parse_str($_SERVER['QUERY_STRING'],$query_string);}
if (preg_match('/\/page-(\d+)\/?$/',$uri,$m)) {
$query_string['page']=$m[1];$uri=preg_replace('/\/page-\d+\/?$/','',$uri);}
$condition=fn_get_seo_company_condition('?:seo_redirects.company_id');$redirect_data=db_get_row('SELECT type,object_id,dest,lang_code FROM ?:seo_redirects WHERE src=?s ?p',$uri,$condition);if (!empty($redirect_data) && $redirect_data['type'] == 'c') {
fn_define('CART_LANGUAGE',$redirect_data['lang_code']);$redirect_uri=fn_url('categories.view&category_id='.$redirect_data['object_id'],'C',fn_get_storefront_protocol(),$redirect_data['lang_code']);if (!empty($redirect_uri)) {
if (substr($redirect_uri,-5) == '.html') {
$redirect_uri=substr($redirect_uri,0,-5);$redirect_uri.='/'.$o['object_name'].'.html';} elseif (substr($redirect_uri,-1) == '/') {
$redirect_uri.=$o['object_name'].'/';}}
fn_redirect($redirect_uri,false,empty($is_allowed_url));}}
if (!empty($is_allowed_url)) {
$req['lang_code']=empty($objects['sl'])?Registry::get('settings.Appearance.frontend_default_language'):$objects['sl'];if (empty($req['sl'])) {
unset($req['sl']);}
return $req;}}}}}}
public static function get_variant_list($features_hash,$lang_code,$glue=' ',$group_by_filter=false,$link_pattern='variant',$category_id=0){
$res=[];if (strlen($features_hash)) {
$hashs=(array) explode(ABSF_HASH_SEPARATE,$features_hash);$variants=[];foreach ($hashs as $h) {
list($filter_id)=explode('-',$h);$variants[$filter_id]=(array) explode('-',substr($h,strpos($h,'-') + 1));}
if (is_array($variants) && !empty($variants)) {
foreach ($variants as $filter_id=>$v) {
$feature=static::_get_feature_by_filter($lang_code,$filter_id);if (!empty($feature) && is_array($feature)) {
switch ($feature['feature_type']) {
case ProductFeatures::SINGLE_CHECKBOX:
if ($v[0] == 'Y') {
$res[$filter_id][]=(trim($feature['description']))
. __('ab__sf.variant_glue',[],$lang_code)
. __('ab__sf.checkbox_set',[],$lang_code);}
break;case ProductFeatures::MULTIPLE_CHECKBOX:
case ProductFeatures::TEXT_SELECTBOX:
case ProductFeatures::EXTENDED:
$variant_name=db_get_hash_array('SELECT variant_id,variant,ab__sf_seo_variant FROM ?:product_feature_variant_descriptions WHERE variant_id in (?n) AND lang_code=?s','variant_id',$v,$lang_code);if (is_array($variant_name) && !empty($variant_name)) {
foreach ($v as $i) {
$res[$filter_id][]=(!empty($feature['prefix'])?$feature['prefix']:'').(!empty($variant_name[$i]['ab__sf_seo_variant'])?$variant_name[$i]['ab__sf_seo_variant']:$variant_name[$i]['variant']).(!empty($feature['suffix'])?$feature['suffix']:'');}}
break;case ProductFeatures::NUMBER_SELECTBOX:
case ProductFeatures::NUMBER_FIELD:
case ProductFeatures::DATE:
$res[$filter_id][]=(!empty($feature['prefix'])?$feature['prefix']:'')
. (!empty($v[0])?(__('ab__sf.from',[],$lang_code).' '.$v[0].' '):'')
. (!empty($v[1])?(__('ab__sf.to',[],$lang_code).' '.$v[1].' '): '')
. (!empty($feature['suffix'])?$feature['suffix']:'');break;}} else {
if (isset($v[0]) && isset($v[1])) {
$res[$filter_id][]=(!empty($v[0])?(__('ab__sf.from',[],$lang_code).' '.$v[0].' '):'')
. __('ab__sf.to',[],$lang_code).' '.$v[1].' ';}}}
$variant_list=[];if (!empty($res)) {
if (!$group_by_filter) {
foreach ($res as $filter_id=>$v) {
$prefix='';switch ($link_pattern) {
case 'feature_and_variant':
$prefix=db_get_field('SELECT description FROM ?:product_features_descriptions WHERE feature_id=(SELECT feature_id FROM ?:product_filters WHERE filter_id=?i) AND lang_code=?s',$filter_id,$lang_code);break;case 'filter_and_variant':
$prefix=db_get_field('SELECT filter FROM ?:product_filter_descriptions WHERE filter_id=?i AND lang_code=?s',$filter_id,$lang_code);break;case 'category_and_variant':
if($category_id > 0){
$prefix=db_get_field('SELECT category FROM ?:category_descriptions WHERE category_id=?i AND lang_code=?s',$category_id,$lang_code);}
break;}
if (!empty($prefix)) {
$v[0]=$prefix.$glue.$v[0];}
$variant_list=array_merge($variant_list,$v);}
$res=implode($glue,$variant_list);} else {
$filter_info=db_get_hash_array('SELECT filter_id,filter FROM ?:product_filter_descriptions WHERE filter_id in (?n) AND lang_code=?s','filter_id',array_keys($res),$lang_code);foreach ($res as $filter_id=>$v) {
if (!empty($filter_info[$filter_id]['filter'])) {
$variant_list[$filter_info[$filter_id]['filter']]=$v;}}
$res=$variant_list;}}}}
return $res;}
public static function get_filter_list($features_hash,$lang_code,$glue=' ',$only_first=false){
$res='';if (strlen($features_hash)) {
$hashs=(array) explode(ABSF_HASH_SEPARATE,$features_hash);$filters=[];foreach ($hashs as $h) {
list($filter)=explode('-',$h);$filters[$filter]=db_get_field('SELECT filter FROM ?:product_filter_descriptions WHERE filter_id=?i and lang_code=?s',$filter,$lang_code);if ($only_first) {
break;}}
$res=implode($glue,$filters);}
return $res;}
private static function _get_feature_by_filter($lang_code,$filter_id=0){
$res=false;if (!empty($filter_id) && intval($filter_id)) {
$res=db_get_row('SELECT
f.field_type as filter_type
,pf.feature_id
,pf.feature_type
,pfd.description
,pfd.prefix
,pfd.suffix
FROM ?:product_features as pf
LEFT JOIN ?:product_filters as f ON (f.feature_id=pf.feature_id)
LEFT JOIN ?:product_features_descriptions as pfd ON (pf.feature_id=pfd.feature_id)
WHERE f.filter_id=?i AND pfd.lang_code=?s
',$filter_id,$lang_code,$lang_code);}
return $res;}
public static function generate_sitemap($params){
$time=microtime(true);$location=fn_url('','C');$objDateTime=new DateTime('NOW');$lmod=$objDateTime->format(DateTime::W3C);$head =
'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';$foot='
</urlset>';$body="
<url>
<loc>$location</loc>
<lastmod>$lmod</lastmod>
<changefreq>daily</changefreq>
<priority>0.5</priority>
</url>
";$names=ABSF::_get_names_for_sitemap($params);$count_names=0;if (is_array($names) && !empty($names)) {
$count_names=count($names);$sitemap_langs=Registry::get('settings.Appearance.frontend_default_language');if (empty($params['lang']) || $params['lang'] == 'all') {
if (Registry::get('addons.seo.single_url') == 'Y' && Registry::get('addons.seo.seo_language') == 'N') {
$sitemap_langs=Registry::get('settings.Appearance.frontend_default_language');} else {
$langs=Languages::getSimpleLanguages();$sitemap_langs=array_keys($langs);}} elseif (strlen($params['lang']) == 2) {
$sitemap_langs=$params['lang'];}
$sitemap_langs=(array) $sitemap_langs;$count_names *= count($sitemap_langs);foreach ($sitemap_langs as $sitemap_lang) {
foreach ($names as $name) {
$url=fn_url("categories.view&category_id={$name['category_id']}&features_hash={$name['features_hash']}",'C','current',$sitemap_lang);$body.="
<url>
<loc>$url</loc>
<lastmod>$lmod</lastmod>
<changefreq>daily</changefreq>
<priority>0.5</priority>
</url>
";}}}
return [$head.$body.$foot,$count_names,microtime(true) - $time];}
public static function _get_names_for_sitemap($params){
$cond='';if (!empty($params['fixed']) && in_array($params['fixed'],ABSFConfigs::get_page_states())) {
$cond.=db_quote('AND n.fixed=?s',$params['fixed']);} else {
$cond.=db_quote('AND n.fixed in (?a)',[ABSFConfigs::PAGE_STATE_FIXED,ABSFConfigs::PAGE_STATE_UNFIXED]);}
if (fn_allowed_for('ULTIMATE')) {
$cond.=fn_get_company_condition('c.company_id');}
$names=db_get_hash_array(
'SELECT
DISTINCT n.sf_id,
n.category_id,
n.fixed,
n.feature_count,
GROUP_CONCAT(DISTINCT f.feature_value ORDER BY f.position SEPARATOR \'_\') AS features_hash
FROM ?:ab__sf_names n
INNER JOIN ?:ab__sf_name_descriptions nd ON n.sf_id=nd.sf_id
INNER JOIN ?:categories c ON c.category_id=n.category_id
INNER JOIN ?:ab__sf_features AS f ON f.sf_id=n.sf_id
WHERE 1 AND c.status=?s ?p ?p
GROUP BY n.sf_id,n.category_id,n.fixed,n.feature_count
HAVING COUNT(DISTINCT f.feature_value)=n.feature_count
ORDER BY n.category_id ASC,f.sf_id ASC',
'sf_id',
ObjectStatuses::ACTIVE,
$cond,
fn_get_company_condition('n.company_id')
);if ((is_array($names) && !empty($names))) {
$names=fn_ab__sf_filter_seo_pages_without_prods($names);}
return (!empty($names))?$names:false;}
public static function get_patterns($params,$items_per_page=0,$lang_code=CART_LANGUAGE){
$default_params=['pattern'=>[],
'page'=>1,
'items_per_page'=>$items_per_page,
'limit'=>0,
];$params=array_merge($default_params,$params);$fields=[
'pattern',
'lang_code',
'value',
];$sortings=['pattern'=>['pattern']];$join=$cond=$limit='';$patterns=fn_get_schema('patterns','objects');$cond.=db_quote(' AND pattern in (?a) ',array_keys($patterns));$cond.=db_quote(' AND lang_code=?s ',$lang_code);$cond.=static::get_company_condition('p.company_id');$sorting=db_sort($params,$sortings,'pattern','asc');$limit='';if (!empty($params['items_per_page'])) {
$params['total_items']=db_get_field("SELECT COUNT(DISTINCT(pattern)) FROM ?:ab__sf_patterns AS p {$join} WHERE 1 ?p ",$cond);$limit=db_paginate($params['page'],$params['items_per_page'],$params['total_items']);}
$data=db_get_hash_array('SELECT '.implode(',',$fields)." FROM ?:ab__sf_patterns AS p {$join} WHERE 1 ?p ?p ?p",'pattern',$cond,$sorting,$limit);foreach ($patterns as $pattern=>$pattern_data) {
if (!empty($data[$pattern]['value'])) {
$patterns[$pattern]['value']=$data[$pattern]['value'];}}
return [$patterns,$params];}
public static function update_pattern($data,$pattern=0,$lang_code=CART_LANGUAGE){
$d=[

'pattern'=>$pattern,

'lang_code'=>$lang_code,

'value'=>
trim( $data[ 'value']),
'company_id'=>
fn_get_runtime_company_id(),
];
db_query( 'REPLACE INTO ?:ab__sf_patterns ?e',$d);return true;}
public static function get_active_filters(){
return db_get_fields('SELECT ?:product_filters.feature_id
FROM ?:product_filters
INNER JOIN ?:product_features ON (?:product_features.feature_id=?:product_filters.feature_id)
WHERE ?:product_filters.status=?s and ?:product_features.status=?s and ?:product_features.feature_type in (?a)',ObjectStatuses::ACTIVE,ObjectStatuses::ACTIVE,static::$feature_rules);}
public static function canonical_url_page($page=1){
if ($page > 1) {
return '&page='.$page;}
return '';}

public static function get_seo_page_link_info($category_id=0,$product_id=0,$feature_id=0,$variant_id=0,$variant='',$lang_code=CART_LANGUAGE,Storefront $storefront=null){
$res=false;if (!empty($category_id) && !empty($variant_id) && !empty($variant)) {
$filter_id=db_get_field('SELECT IFNULL(filter_id,0)
FROM ?:product_filters
WHERE status=?s AND feature_id=?i AND (categories_path =\'\' OR FIND_IN_SET (?s,categories_path)) ',ObjectStatuses::ACTIVE,$feature_id,$category_id);if (!empty($filter_id)) {
$features_hash=$filter_id.'-'.$variant_id;$name=ABSF::get_name($category_id,$features_hash,$lang_code,true,[ABSFConfigs::PAGE_STATE_FIXED,ABSFConfigs::PAGE_STATE_UNFIXED]);if (!empty($name) && is_array($name)) {
$filter=ABSF::get_filter_list($features_hash,$lang_code,' ',true);$title=$variant;$ab__sf_seo_variant=db_get_field('SELECT ab__sf_seo_variant FROM ?:product_feature_variant_descriptions WHERE variant_id=?i AND lang_code=?s',$variant_id,$lang_code);if (!empty($ab__sf_seo_variant)) {
$title=trim($ab__sf_seo_variant);}
$title=strlen($name['tag_h1'])?ABSF::str_replace($name['tag_h1'],fn_get_category_name($category_id,$lang_code),$filter,$title):$title;$storefront_param=$storefront == null?'':'&storefront_id='.$storefront->storefront_id;$res=[
'title'=>$title,
'link'=>fn_url('categories.view&category_id='.$category_id.'&features_hash='.$features_hash.$storefront_param,'C',fn_get_storefront_protocol()),];}}}
return $res;}
public static function get_company_condition($field,$add_and=true){
if (fn_allowed_for('ULTIMATE')) {
return fn_get_company_condition($field,$add_and);}
return '';}
public static function check_out_new_version_ut2(){
static $is_new=false;$state=1;$old_version=explode('.','4.18.4.a');$ov_count=count($old_version);$addon_data=db_get_row('SELECT version,status FROM ?:addons WHERE addon=?s','abt__unitheme2');if (!empty($addon_data['version']) && $addon_data['status'] == 'A') {
$version=explode('.',$addon_data['version']);$v_count=count($version);foreach ($old_version as $k=>$v) {
if (!isset($version[$k]) || ($version[$k] < $old_version[$k])) {
$state=0;break;} elseif ($version[$k] > $old_version[$k]) {
$state=2;break;}}
if (($state == 1 && $v_count > $ov_count) || $state == 2) {
$is_new=true;}}
return $is_new;}}
