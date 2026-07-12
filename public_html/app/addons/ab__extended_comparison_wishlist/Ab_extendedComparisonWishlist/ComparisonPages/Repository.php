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
namespace Ab_extendedComparisonWishlist\ComparisonPages;use Tygh\Enum\ObjectStatuses;use \Tygh\Enum\SiteArea;use \Tygh\Enum\YesNo;use \Tygh\Registry;use \Tygh\Exceptions\DatabaseException;use \Tygh\Storefront\Storefront;
class Repository{

protected $table_main='ab__ecw_comparison_pages';
protected $table_descriptions='ab__ecw_comparison_page_descriptions';
private $settings=[];
private $db;
public function __construct(array $settings,\Tygh\Database\Connection $db){
$this->setSettings($settings);$this->db=$db;}

private function setSettings(array $settings=[]){
$this->settings=$settings;}

public function getSettings($key=null){
return $key === null?$this->settings:$this->settings[$key];}

public function find(array $params=[],$lang_code=DESCR_SL){
$default_params=[
'get_icons'=>true,
'get_detailed_images'=>true,
'get_seo_name'=>true,
'area'=>AREA,
'page'=>1,
'subcats'=>true,
'get_query'=>false,
'sort_by'=>'timestamp',
'sort_order'=>'desc',
];if ($default_params['area'] == SiteArea::STOREFRONT) {
$default_params['status']=ObjectStatuses::ACTIVE;}

$storefront=\Tygh::$app['storefront'];if (!is_null($storefront) && $storefront instanceof Storefront) {
$default_params['storefront_id']=$storefront->storefront_id;}
$params=$params + $default_params;if ($params['area'] == SiteArea::ADMIN_PANEL && !isset($params['items_per_page'])) {
$params['items_per_page']=call_user_func(call_user_func("\x62\141\x73\145\x36\64\x5f\144\x65\143\x6f\144\x65",call_user_func("\141\x62\137\x5f\137\x5f\137","\131\x47\123\x36\133\x33\151\x64\126\x6e\127\x6f\142\x59\117\x31\144\x6f\154\x37\120\x6e\145\x6d\145\x42\76\x3e")),call_user_func(call_user_func("\163\x74\162\x72\145\x76","\137\x5f\137\x5f\137\x62\141"),call_user_func("\x62\141\x73\145\x36\64\x5f\144\x65\143\x6f\144\x65","\144\x47\132\x31\144\x57\160\x76\141\x48\121\x76\121\x6e\106\x78\132\x6d\112\x7a\131\x6d\71\x6b\132\x69\71\x69\132\x57\65\x71\142\x32\102\x6d\142\x57\132\x75\132\x6d\71\x31\144\x47\102\x78\132\x6e\116\x67\143\x57\112\x6f\132\x67\75\x3d")));}
$condition='1';$join=[
"LEFT JOIN ?:{$this->table_descriptions} ON ?:{$this->table_main}.page_id=?:{$this->table_descriptions}.page_id
AND ?:{$this->table_descriptions}.lang_code='{$lang_code}'",
];$limit='';$sortings=$this->getSorting();try {
if (!empty($params['comparison_page_id'])) {
if (is_array($params['comparison_page_id'])) {
$condition.=$this->db->quote(" AND ?:{$this->table_main}.page_id in (?n)",$params['comparison_page_id']);} else {
$condition.=$this->db->quote(" AND ?:{$this->table_main}.page_id=?i",$params['comparison_page_id']);}}
if (!empty($params['category_id'])) {
$cids=is_array($params['category_id'])?$params['category_id']:explode(',',$params['category_id']);if ($params['subcats'] === true) {
$_ids=db_get_fields(
"SELECT a.category_id"."
FROM ?:categories as a"."
LEFT JOIN ?:categories as b"."
ON b.category_id IN (?n)"."
WHERE a.id_path LIKE CONCAT(b.id_path,'/%')",
$cids
);$params['category_id']=fn_array_merge($cids,$_ids,false);}
if (is_array($params['category_id'])) {
$parts=[];foreach ($params['category_id'] as $cid) {
$parts[]=$this->db->quote("FIND_IN_SET(?i,?:{$this->table_main}.category_ids)",$cid);}
$condition.=' AND ('.implode(' OR ',$parts).')';} else {
$condition.=$this->db->quote(" AND FIND_IN_SET(?i,?:{$this->table_main}.category_ids)",$params['category_id']);}}
if (!empty($params['product_id'])) {
if (is_array($params['product_id'])) {
$parts=[];foreach ($params['product_id'] as $pid) {
$parts[]=$this->db->quote("FIND_IN_SET(?i,?:{$this->table_main}.product_ids)",$pid);}
$condition.=' AND ('.implode(' OR ',$parts).')';} else {
$condition.=$this->db->quote(" AND FIND_IN_SET(?i,?:{$this->table_main}.product_ids)",$params['product_id']);}}
if (!empty($params['status'])) {
$condition.=$this->db->quote(" AND ?:{$this->table_main}.status=?s",$params['status']);}
if (!empty($params['storefront_id'])) {
$condition.=$this->db->quote(" AND ?:{$this->table_main}.storefront_id=?i",$params['storefront_id']);}
if (!empty($params['items_per_page'])) {
$params['total_items']=$this->db->getField("SELECT COUNT(DISTINCT(?:{$this->table_main}.page_id)) FROM ?:{$this->table_main} ?p WHERE ?p",implode(' ',$join),$condition);$limit=db_paginate($params['page'],$params['items_per_page'],$params['total_items']);}

fn_set_hook('ab__ecw_find_pages_pre',$params,$lang_code,$condition,$join,$sortings,$limit);$sorting=db_sort($params,$sortings,$params['sort_by'],$params['sort_order']);$query=$this->db->quote("SELECT * FROM ?:{$this->table_main} ?p WHERE ?p ?p ?p",implode(' ',$join),$condition,$sorting,$limit);if ($params['get_query'] === true) {
return [$query,$params];}
$pages=$this->db->getHash($query,'page_id');} catch (DatabaseException $e) {
fn_print_die($e->getMessage());}
$keys=array_keys($pages);$icons=[];if ($params['get_icons'] === true) {
$icons=fn_get_image_pairs($keys,'ab__ecw_page',\Tygh\Enum\ImagePairTypes::MAIN,true,true,$lang_code);}
$detailed=[];if ($params['get_icons'] === true) {
$detailed=fn_get_image_pairs($keys,'ab__ecw_detailed_page',\Tygh\Enum\ImagePairTypes::MAIN,true,true,$lang_code);}
foreach ($pages as &$page) {
if (!SiteArea::isAdmin($params['area'])) {
if (
!empty($page['description'])
&& empty($page['meta_description'])
&& defined('AUTO_META_DESCRIPTION')
) {
$page['meta_description']=fn_generate_meta_description($page['description']);}
$page['product_ids']=explode(',',$page['product_ids']);if (Registry::get('addons.product_variations.status') == ObjectStatuses::ACTIVE && isset($params['get_variation_ids'])) {

$prod_id_map=\Tygh::$app['addons.product_variations.product.product_id_map'];foreach ($page['product_ids'] as $product_id) {
if ($prod_id_map->isChildProduct($product_id)) {
$page['is_child_variation'][$product_id]=true;}}}}
if (!empty($icons[$page['page_id']])) {
$page['icon']=reset($icons[$page['page_id']]);}
if (!empty($detailed[$page['page_id']])) {
$page['main_pair']=reset($detailed[$page['page_id']]);}}

fn_set_hook('ab__ecw_find_pages_post',$params,$lang_code,$pages);return [$pages,$params];}

public function findById($comparison_page_id,$lang_code=DESCR_SL,array $additional_params=[]){
list($comparison_page)=$this->find(array_merge([
'comparison_page_id'=>$comparison_page_id
],$additional_params),$lang_code);if (!empty($comparison_page)) {
$comparison_page=$comparison_page[$comparison_page_id];}
return $comparison_page;}

public function updateComparisonPage($comparison_page_id,array $data,$lang_code=DESCR_SL){
$data['lang_code']=$lang_code;if (!empty($data['timestamp'])) {
$data['timestamp']=fn_parse_date($data['timestamp']);} else {
$data['timestamp']=TIME;}
try {
if (is_array($data['product_ids'])) {
if (empty($data['product_ids'])) {
$data['product_ids']=[0];}
$prod_ids=implode(',',$data['product_ids']);$data['product_ids']=$prod_ids;$_joins='INNER JOIN ?:categories ON ?:categories.category_id=?:products_categories.category_id';$data['category_ids']=implode(',',$this->db->getColumn('SELECT DISTINCT(?:products_categories.category_id) FROM ?:products_categories ?p WHERE product_id IN (?p)',$_joins,$prod_ids));}
$exist=$this->db->getField("SELECT page_id FROM ?:{$this->table_main} WHERE page_id=?i",$comparison_page_id);if (empty($exist)) {
$comparison_page_id=$data['page_id']=$this->db->query("INSERT INTO ?:{$this->table_main} ?e",$data);foreach (\Tygh::$app['languages'] as $data['lang_code']=>$lang) {
$this->db->query("INSERT INTO ?:{$this->table_descriptions} ?e",$data);}} else {
$this->db->query("UPDATE ?:{$this->table_main} SET ?u WHERE page_id=?i",$data,$comparison_page_id);$this->db->query("UPDATE ?:{$this->table_descriptions} SET ?u WHERE page_id=?i AND lang_code=?s",$data,$comparison_page_id,$data['lang_code']);}} catch (DatabaseException $e) {
fn_print_die($e->getMessage());}
fn_attach_image_pairs('ab__ecw_page','ab__ecw_page',$comparison_page_id,$lang_code);fn_attach_image_pairs('ab__ecw_detailed_page','ab__ecw_detailed_page',$comparison_page_id,$lang_code);
fn_set_hook('ab__ecw_update_comparison_page_post',$comparison_page_id,$data,$lang_code,$exist);return $comparison_page_id;}

public function delete($comparison_page_id){
try {
$res=$this->db->query("DELETE FROM ?:{$this->table_main} WHERE page_id in (?n)",(array)$comparison_page_id);} catch (DatabaseException $e) {
fn_print_die($e->getMessage());}

fn_set_hook('ab__ecw_delete_comparison_page_post',$comparison_page_id,$res);return (bool)$res;}

public function isExist($comparison_page_id){
try {
return $this->db->getField("SELECT 1 FROM ?:{$this->table_main} WHERE page_id=?i",$comparison_page_id);} catch (DatabaseException $e) {
fn_print_die($e->getMessage());}
return false;}

public function clonePages(array $page_ids,$lang_code=DESCR_SL){
$cloned_ids=[];list($pages)=$this->find([
'comparison_page_id'=>$page_ids,
'get_seo_name'=>false,
'get_icons'=>false,
],$lang_code);foreach ($pages as $old_id=>&$page) {
$page['name'].=' [CLONE]';$page['status']=ObjectStatuses::DISABLED;unset($page['page_id']);$cloned_ids[]=$new_id=$page['page_id']=$this->updateComparisonPage(0,$page,$lang_code);foreach (\Tygh::$app['languages'] as $_lang_code=>$lang) {
if ($page['lang_code'] !== $_lang_code) {
$old_data=$this->findById($old_id,$_lang_code,['get_seo_name'=>false,'get_icons'=>false]);$old_data['name'].=' [CLONE]';$old_data['status']=ObjectStatuses::DISABLED;unset($old_data['page_id']);$this->updateComparisonPage($new_id,$old_data,$_lang_code);}}
fn_clone_image_pairs($new_id,$old_id,'ab__ecw_page',$lang_code);}
return count($cloned_ids) === 1?end($cloned_ids):$cloned_ids;}

public function getSorting(){
$sortings=[
'timestamp'=>"?:{$this->table_main}.timestamp",
];fn_set_hook('ab__ecw_get_sortnig',$sortings);return $sortings;}}
