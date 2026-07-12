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
use Tygh\Enum\ObjectStatuses;
use Tygh\Registry;
defined('BOOTSTRAP') || die('Access denied');
if (AREA == 'A') {
foreach (glob(Registry::get('config.dir.addons') . '/ab__seo_for_blog/ab__functions/fn.*.php') as $functions) {
require_once $functions;
}
}
function fn_ab__sfb_get_authors($params = [], $lang_code = DESCR_SL, $items_per_page = 0)
{
$params = array_merge([
'page' => 1,
'items_per_page' => $items_per_page,
], $params);
$fields = [
'authors.author_id',
'authors.status',
'author_descriptions.name',
'author_descriptions.short_description',
'author_descriptions.full_description',
'author_descriptions.author_rank',
'author_descriptions.appointment',
'author_descriptions.author_url',
'author_descriptions.title',
'author_descriptions.meta_description',
'author_descriptions.meta_keywords',
];
$conditions = $limit = '';
$join = db_quote('LEFT JOIN ?:ab__sfb_author_descriptions author_descriptions ON authors.author_id = author_descriptions.author_id AND author_descriptions.lang_code = ?s', $lang_code);
if (!empty($params['author_id'])) {
if(is_array($params['author_id'])){
$conditions .= db_quote(' AND authors.author_id IN (?n)', $params['author_id']);
}else{
$conditions .= db_quote(' AND authors.author_id = ?i', $params['author_id']);
}
}
if (!empty($params['status'])) {
$conditions .= db_quote(' AND authors.status = ?s', $params['status']);
}
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT COUNT(*) FROM ?:ab__sfb_authors authors ?p WHERE 1 ?p', $join, $conditions);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$authors = db_get_hash_array('SELECT ?p FROM ?:ab__sfb_authors authors ?p WHERE 1 ?p ?p', 'author_id', implode(',', $fields), $join, $conditions, $limit);
if ($authors) {
$images = fn_get_image_pairs(array_keys($authors), 'ab__sfb_author', 'M');
foreach ($authors as $author_id => &$author) {
$author['main_pair'] = reset($images[$author_id]);
}
}
fn_set_hook('ab__sfb_get_authors_post', $params, $authors, $lang_code);
return [$authors, $params];
}
function fn_ab__sfb_authors_get_authors_list()
{
[$authors] = fn_ab__sfb_get_authors();
return $authors;
}
function fn_ab__sfb_update_author($author_data, $author_id = 0, $lang_code = DESCR_SL)
{
if (!$author_id) {
$author_id = db_query('INSERT INTO ?:ab__sfb_authors ?e', ['status' => ObjectStatuses::ACTIVE]);
fn_create_description('ab__sfb_author_descriptions', 'author_id', $author_id, $author_data);
} else {
unset($author_data['author_id']);
db_query('UPDATE ?:ab__sfb_authors SET ?u WHERE author_id = ?i', $author_data, $author_id);
db_query('UPDATE ?:ab__sfb_author_descriptions SET ?u WHERE author_id = ?i AND lang_code = ?s', $author_data, $author_id, $lang_code);
}
fn_set_hook('ab__sfb_update_author_post', $author_data, $author_id, $lang_code);
fn_attach_image_pairs('author_image', 'ab__sfb_author', $author_id, DESCR_SL);
return $author_id;
}
function fn_ab__sfb_delete_author($author_id)
{
db_query('DELETE FROM ?:ab__sfb_authors WHERE author_id = ?i', $author_id);
db_query('DELETE FROM ?:ab__sfb_author_descriptions WHERE author_id = ?i', $author_id);
fn_delete_image_pairs($author_id, 'ab__sfb_author');
db_query('UPDATE ?:pages SET author_id = 0 WHERE author_id = ?i', $author_id);
fn_set_hook('ab__sfb_delete_author_post', $author_id);
}
function fn_ab__sfb_get_headers($node)
{
$headers = [];
foreach ($node->childNodes as $child) {
$matches = [];
if ($child->nodeType === XML_ELEMENT_NODE && preg_match('/^h([1-6])$/i', $child->nodeName, $matches)) {
$headers[] = [
'level' => $matches[1],
'text' => $child->nodeValue,
];
}
if ($child->hasChildNodes()) {
$subHeaders = fn_ab__sfb_get_headers($child);
$headers = array_merge($headers, $subHeaders);
}
}
return $headers;
}
function fn_ab__sfb_mark_headers($html)
{
$headerTags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
$idCounter = 1;
$pattern = '/<(' . implode('|', $headerTags) . ")(.*?)>(.*?)<\/\\1>/i";
$html = preg_replace_callback($pattern, function ($matches) use (&$idCounter) {
$tag = $matches[1];
$id = 'ab-sfb-header-' . $idCounter;
$idCounter++;
return "<$tag id=\"$id\">$matches[3]</$tag>";
}, $html);
return $html;
}
function fn_ab__sfb_build_structure(&$headers, $rec = false)
{
$result = [];
while ($header = array_shift($headers)) {
$next_elem = current($headers);
$last_added = current($result);
if($rec && !empty($last_added['level']) && $last_added['level'] > $header['level']){
array_unshift($headers, $header);
return $result;
}
if (!empty($next_elem) && $next_elem['level'] > $header['level']) {
$header['children'] = fn_ab__sfb_build_structure($headers, true);
}
$result[] = $header;
if ($rec && !empty($next_elem) && $next_elem['level'] < $header['level']) {
return $result;
}
}
return $result;
}
function fn_ab__seo_for_blog_get_page_data(&$page_data, $lang_code, $preview, $area)
{
if ($page_data['page_type'] == PAGE_TYPE_BLOG) {
$author_id = $page_data['author_id'] ?? 0;
$params = [];
if($area === 'C'){
if(!$author_id){
$author_id = Registry::ifGet('addons.ab__seo_for_blog.default_author', 0);
}
$params['status'] = ObjectStatuses::ACTIVE;
}
if ($author_id) {
$params['author_id'] = $author_id;
[$author_data] = fn_ab__sfb_get_authors($params);
if ($author_data) {
$page_data['author_data'] = $author_data[$author_id];
}
}
if ($area === 'C' && $page_data['description']) {
$dom = new DOMDocument();
$dom->loadHTML(mb_convert_encoding($page_data['description'], 'HTML-ENTITIES', 'UTF-8'));
$headers = fn_ab__sfb_get_headers($dom);
$page_data['description'] = fn_ab__sfb_mark_headers($page_data['description']);
$headers = fn_ab__sfb_build_structure($headers);
$page_data['headers'] = $headers;
}
}
}
function fn_ab__seo_for_blog_get_pages($params, $join, &$condition, $fields, $group_by, $sortings, $lang_code)
{
if (!empty($params['author_id'])) {
$_condition = db_quote('?:pages.author_id = ?i',$params['author_id']);
if (!empty($params['include_without_author'])) {
$_condition .= db_quote(' OR ?:pages.author_id = 0');
}
$condition .= db_quote(' AND (?p)', $_condition);
}
}

function fn_seo_ab__sfb_update_author_post($author_data, $author_id, $lang_code)
{
fn_seo_update_object($author_data, $author_id, AB__SFB_AUTHOR_SEO_TYPE, $lang_code);
}

function fn_seo_ab__sfb_get_authors_post($params, &$authors, $lang_code)
{
if (!empty($params['get_seo_name'])) {
foreach ($authors as &$author) {
$author['seo_name'] = fn_seo_get_name(AB__SFB_AUTHOR_SEO_TYPE, $author['author_id'], '', null, $lang_code);
}
}
}

function fn_seo_ab__sfb_delete_author_post($author_id)
{
fn_delete_seo_name($author_id, AB__SFB_AUTHOR_SEO_TYPE, '');
}

function fn_ab__seo_for_blog_ab__as_other_objects(&$objects, $storefront)
{
$condition = db_quote(' AND ?:ab__sfb_authors.status = ?s', ObjectStatuses::ACTIVE);
$join = '';
fn_set_hook('ab__seo_for_blog_ab__as_other_objects', $join, $condition);
$authors = db_get_fields('SELECT ?:ab__sfb_authors.author_id FROM ?:ab__sfb_authors ?p WHERE 1 ?p',$join ,$condition);
if (!empty($authors)) {
$objects['ab__sfb_author'] = $authors;
}
}

function fn_ab__seo_for_blog_sitemap_link_object(&$link, $object, $value)
{
if ($object == 'ab__sfb_author') {
$link = "ab__sfb_authors.view?author_id={$value}";
}
}

function fn_ab__so_noindex_tech_pages_ab__sfb_update_author_post($author_data, $author_id, $lang_code)
{
if (!empty($author_data['ab__so_ntp_index_data'])) {
fn_ab__so_ntp_update_index_data($author_data['ab__so_ntp_index_data'], $author_id, 'ab__sfb_author');
}
}

function fn_ab__so_noindex_tech_pages_ab__sfb_delete_author_post($author_id)
{
fn_ab__so_ntp_delete_index_data($author_id, 'ab__sfb_author');
}

function fn_ab__so_noindex_tech_pages_ab__sfb_get_authors_post($params, $authors, $lang_code)
{
if (AREA === 'C' && !empty($params['author_id']) && is_scalar($params['author_id'])) {
if (empty($authors[$params['author_id']])) {
return;
}
$ab__sf_seo_canonical = [
'noindex_nofollow' => fn_ab__so_ntp_is_object_denied($params['author_id'], 'ab__sfb_author') ? 'Y' : 'N',
];
Tygh::$app['view']->assign('ab__sf_seo_canonical', $ab__sf_seo_canonical);
}
}

function fn_ab__so_noindex_tech_pages_ab__seo_for_blog_ab__as_other_objects(&$join, &$condition){
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages AS ab_ntp_noindex ON ' .
'ab_ntp_noindex.object_type = "ab__sfb_author" AND ' .
'ab_ntp_noindex.var = "noindex" AND ' .
'ab_ntp_noindex.object_id = ?:ab__sfb_authors.author_id ';
$condition .= ' AND (ab_ntp_noindex.value IS NULL OR ab_ntp_noindex.value = "N")';
if (Registry::get('addons.ab__so_noindex_tech_pages.exclude_non_canonical_from_sitemap') === 'Y') {
$join .= ' LEFT JOIN ?:ab__so_noindex_tech_pages AS ab_ntp_canonical ON ' .
'ab_ntp_canonical.object_type = "ab__sfb_author" AND ' .
'ab_ntp_canonical.var = "canonical_id" AND ' .
'ab_ntp_canonical.object_id = ?:ab__sfb_authors.author_id ';
$condition .= ' AND (ab_ntp_canonical.value IS NULL OR ab_ntp_canonical.value = ab_ntp_canonical.object_id)';
}
}
function fn_ab__seo_for_blog_get_pages_after_sql($params, $items_per_page, $lang_code, &$pages){
if(AREA === 'C' && $params['page_type'] === PAGE_TYPE_BLOG && !empty($params['parent_id']) && !empty($pages)){
$author_ids = array_unique(array_filter(array_column($pages,'author_id')));
$default_author_id = Registry::ifGet('addons.ab__seo_for_blog.default_author', 0);
if($default_author_id){
$author_ids[] = $default_author_id;
}
$authors = [];
if($author_ids){
$_params = [
'author_id' => $author_ids,
];
[$authors] = fn_ab__sfb_get_authors($_params, $lang_code);
}
foreach ($pages as &$page) {
$author_data = [];
if(!empty($authors[$page['author_id']])){
if($authors[$page['author_id']]['status'] === ObjectStatuses::ACTIVE){
$author_data = $authors[$page['author_id']];
}
}elseif(!empty($authors[$default_author_id]['status']) && $authors[$default_author_id]['status'] === ObjectStatuses::ACTIVE){
$author_data = $authors[$default_author_id];
}
$page['author_data'] = $author_data;
}
}
}
function fn_ab__sfb_print_page_markup ($page)
{

$formatter = Tygh::$app['formatter'];
$company_name = Registry::get('runtime.company_data.company');
$logos = Tygh::$app['view']->getTemplateVars('logos');
$microdata = [
'@context' => 'http://schema.org',
'@type' => $page['ab__sfb_microdata_schema_type'],
'mainEntityOfPage' => [
'@type' => 'WebPage',
'@id' => fn_url('pages.view?page_id=' . $page['page_id']),
],
'headline' => $page['page'],
'image' => empty($page['main_pair']['icon']['image_path']) ? $logos['theme']['image']['image_path'] : $page['main_pair']['icon']['image_path'],
'datePublished' => $formatter->asDatetime($page['timestamp']),
'dateModified' => $formatter->asDatetime($page['timestamp']),
'author' => [
'@type' => 'Person',
'name' => empty($page['author_data']['name']) ? $company_name : $page['author_data']['name'],
],
"publisher" => [
'@type' => 'Organization',
'name' => $company_name,
'logo' => [
'@type' => 'ImageObject',
'url' => $logos['theme']['image']['image_path'],
],
],
'description' => fn_truncate_chars(strip_tags($page['description']), 380, "..."),
];
$author_additionl_data = ['jobTitle' => 'appointment', 'url' => 'author_url'];
foreach ($author_additionl_data as $elem => $local_key) {
if(!empty($page['author_data'][$local_key])){
$microdata['author'][$elem] = $page['author_data'][$local_key];
}
}
if(empty($microdata['author']['url']) && !empty($page['author_data']['author_id'])){
$microdata['author']['url'] = fn_url('ab__sfb_authors.view?author_id=' . $page['author_data']['author_id'], 'C');
}
return json_encode($microdata);
}
