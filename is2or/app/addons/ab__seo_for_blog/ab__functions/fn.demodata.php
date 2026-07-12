<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
use Tygh\BlockManager\Block;use Tygh\Enum\ImagePairTypes;use Tygh\Enum\ObjectStatuses;use Tygh\Addons\Ab_addonsManager\DemoData;defined('BOOTSTRAP') || die('Access denied');function fn_ab__sfb_install_demodata(){}
function fn_ab__sfb_demodata_blog($status=ObjectStatuses::ACTIVE){
$company_id=fn_get_runtime_company_id();$demodata_download_result=DemoData::getFile([
'file'=>'demodata.zip',
'addon'=>'ab__seo_for_blog',
]);if ($demodata_download_result->isSuccess()) {
$data=$demodata_download_result->getData();$path=$data['path'];$blog_path=$path.'/blog/';$authors_path=$path.'/authors/';$posts=
fn_get_contents( "{$blog_path}/data.json");$authors=
fn_get_contents( "{$authors_path}/data.json");if (!empty($posts) && !empty($authors)) {
$posts=json_decode($posts,true);$authors=json_decode($authors,true);$blog_id=db_get_field('SELECT page_id FROM ?:pages WHERE page_type=?s AND status=?s AND parent_id=0 AND company_id=?i',PAGE_TYPE_BLOG,ObjectStatuses::ACTIVE,$company_id);if (empty($blog_id)) {
fn_set_notification('E',__('error'),__('ab__sfb.demodata.errors.no_blog_page'));} else {
$path_part='ab__sfb/blog/';$img_path=fn_get_files_dir_path().$path_part;fn_rm($img_path);fn_mkdir($img_path);fn_copy($blog_path,$img_path);$authors_path_part='ab__sfb/authors/';$authors_img_path=fn_get_files_dir_path().$authors_path_part;fn_rm($authors_img_path);fn_mkdir($authors_img_path);fn_copy($authors_path,$authors_img_path);$created_posts=$created_authors=$authors_map=[];foreach ($authors as $author) {
$author_prev_id=$author['author_id'];unset($author['author_id']);$author['name'].=' ('.__('demo').')';foreach (['rank'=>'author_rank','url'=>'author_url'] as $old_key=>$new_key) {
if(isset($author[$old_key])){
$author[$new_key]=$author[$old_key];unset($author[$old_key]);}}
$authors_map[$author_prev_id]=fn_ab__sfb_update_author($author,0);if (!empty($author['author_image'])) {
$image_str='author_image_image';$image=[
"{$image_str}_data"=>[
[
'pair_id'=>'',
'type'=>ImagePairTypes::MAIN,
'object_id'=>0,
'image_alt'=>$author[
'name'],
],
],
"file_{$image_str}_detailed"=>["{$authors_img_path}/{$author['author_image']}"],
"type_{$image_str}_detailed"=>['server'],
];$_REQUEST=array_merge($_REQUEST,$image);fn_attach_image_pairs('author_image','ab__sfb_author',$authors_map[$author_prev_id]);}
$created_authors[]='<a href="'.fn_url('ab__sfb_authors.update&author_id='.$authors_map[$author_prev_id]).'" target="_blank">'.$author['name'].'</a>';}
foreach ($posts as $key=>$blog_post) {
$blog_post['parent_id']=$blog_id;$blog_post['company_id']=$company_id;$blog_post['lang_code']=CART_LANGUAGE;$blog_post['status']=$status;$blog_post['page'].=' ('.__('demo').')';$blog_post['timestamp']=TIME;$blog_post['author_id']=$authors_map[$blog_post['author_id']] ?? 0;$counter=1;$needle='[products]';while ($pos=strpos($blog_post['description'],$needle)) {
if ($pos === false) {
break;}
$replace='';$block_id=fn_ab__sfb_create_products_block($company_id,10,$counter++);if ($block_id) {
$object_key=fn_encrypt_text($block_id.':0');$replace='<p><b title="'.__('ab__sfb.demo_products',[],DEFAULT_LANGUAGE).'" class="wysiwyg-block-loader cm-block-loader cm-block-loader--'.$object_key.'"></b></p>';}
$blog_post['description']=substr_replace($blog_post['description'],$replace,$pos,strlen($needle));}
$new_page=fn_update_page($blog_post,0);if ($new_page) {
if (!empty($blog_post['blog_image'])) {
$image_str='blog_image_image';$image=[
"{$image_str}_data"=>[
[
'pair_id'=>'',
'type'=>ImagePairTypes::MAIN,
'object_id'=>0,
'image_alt'=>$blog_post[
'page'],
],
],
"file_{$image_str}_icon"=>["{$img_path}/{$blog_post['blog_image']}"],
"type_{$image_str}_icon"=>['server'],
];$_REQUEST=array_merge($_REQUEST,$image);fn_attach_image_pairs('blog_image','blog',$new_page);}
$created_posts[]='<a href="'.fn_url('pages.update&page_id='.$new_page.'&come_from=B').'" target="_blank">'.(CART_LANGUAGE == 'ru'?$blog_post['ru']['page']:$blog_post['page']).'</a>';}}
fn_set_notification('N',__('notice'),__('ab__sfb.demodata.success',['[posts]'=>implode(',',$created_posts),'[authors]'=>implode(',',$created_authors),]),'S');return $created_posts;}} else {
fn_set_notification('E',__('error'),__('ab__sfb.demodata.errors.no_data'));}
return false;}
$demodata_download_result->showNotifications();}
function fn_ab__sfb_create_products_block($company_id,$total_products=10,$page=1){
[$products]=fn_get_products([
'area'=>'C',
'usergroup_ids'=>['0'],
'sort_by'=>'popularity',
'sort_order'=>'desc',
'items_per_page'=>$total_products,
'page'=>$page,
]);if (!$products) {
return false;}
$block=Block::instance();$block_data=[
'type'=>'products',
'properties'=>[
'template'=>'blocks/products/products_scroller.tpl',
'thumbnail_width'=>'200',
'hide_add_to_cart_button'=>'N',
'item_quantity'=>2,
'not_scroll_automatically'=>'Y',
],
'content_data'=>[
'content'=>[
'items'=>[
'filling'=>'manually',
'item_ids'=>implode(',',array_keys($products)),],
],
],
'company_id'=>$company_id,
];$block_description=[
'lang_code'=>DEFAULT_LANGUAGE,
'name'=>__('ab__sfb.demo_products',[],DEFAULT_LANGUAGE),'lang_var'=>'ab__sfb.demo_products',
];return $block->update($block_data,$block_description);}
