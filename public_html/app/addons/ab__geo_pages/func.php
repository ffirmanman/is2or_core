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
use Tygh\Addons\Ab_geoPages\Placeholders;
use Tygh\Enum\SiteArea;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\ABSF;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
foreach (glob(Registry::get('config.dir.addons') . '/ab__geo_pages/functions/fn.ab__gp_*.php') as $functions) {
require_once $functions;
}

function fn_ab__gp_update_location(array $location_data, $location_id = 0, $lang_code = DESCR_SL)
{
if(empty($location_data['seo_name'])){
$location_data['seo_name'] = fn_ab__gp_generate_seo_name($location_data['location']);
}
if ($location_id) {
$location_update_data = [
'status' => $location_data['status'],
'link_type' => $location_data['link_type'],
];
$old_seo_name = db_get_field('SELECT seo_name FROM ?:ab__gp_location_descriptions WHERE location_id = ?i AND lang_code = ?s', $location_id, $lang_code);
if($old_seo_name != $location_data['seo_name']){
$location_data['seo_name'] = fn_ab__gp_normalize_seo_name($location_data['seo_name'], $lang_code);
}
db_query('UPDATE ?:ab__gp_locations SET ?u WHERE location_id = ?i', $location_update_data, $location_id);
$location_data['lang_code'] = $lang_code;
$location_data['location_id'] = $location_id;
db_replace_into('ab__gp_location_descriptions', $location_data);
} else {
$location_insert_data = [
'company_id' => fn_get_runtime_company_id(),
'status' => $location_data['status'],
'link_type' => $location_data['link_type'],
];
$location_id = db_query('INSERT INTO ?:ab__gp_locations ?e', $location_insert_data);
$location_data['location_id'] = $location_id;
foreach ($location_data as $field_name => &$value) {
if (strpos($field_name, 'location_form_') !== false && empty($value)) {
$value = $location_data['location'];
}
}
fn_create_description('ab__gp_location_descriptions', 'location_id', $location_id, $location_data);
foreach (Languages::getAll() as $_lang_code => $v) {
if($_lang_code == $lang_code){
continue;
}
$seo_name = $location_data['seo_name'] . SEO_DELIMITER . $_lang_code;
$seo_name = fn_ab__gp_normalize_seo_name($seo_name);
db_query('UPDATE ?:ab__gp_location_descriptions SET seo_name = ?s WHERE location_id = ?i AND lang_code = ?s', $seo_name, $location_id, $_lang_code);
}
}
return $location_id;
}
function fn_ab__gp_generate_seo_name($name){
$name = fn_generate_name(strtolower($name), $object_type = '', $object_id = 0);
return fn_ab__gp_normalize_seo_name($name);
}

function fn_ab__gp_get_locations($params = [], $lang_code = DESCR_SL, $company_id = ''): array
{
$params = array_merge([
'without_descriptions' => false,
], $params);
$join = db_quote('LEFT JOIN ?:ab__gp_location_descriptions ON ?:ab__gp_locations.location_id = ?:ab__gp_location_descriptions.location_id');
$fields = [
'?:ab__gp_locations.*',
];
if (!$params['without_descriptions']) {
$join .= db_quote(' AND ?:ab__gp_location_descriptions.lang_code = ?s', $lang_code);
$fields[] = '?:ab__gp_location_descriptions.*';
}else{
$fields[] = '?:ab__gp_location_descriptions.seo_name';
}
$condition = fn_get_company_condition('?:ab__gp_locations.company_id', true, $company_id);
if (isset($params['id'])) {
$condition .= db_quote(' AND ?:ab__gp_locations.location_id = ?i', $params['id']);
}
if (isset($params['seo_name'])) {
$condition .= db_quote(' AND ?:ab__gp_location_descriptions.seo_name = ?s', $params['seo_name']);
}
if (isset($params['exclude_by_seo_name']) && $params['exclude_by_seo_name']) {
$condition .= db_quote(' AND ?:ab__gp_location_descriptions.seo_name != ?s', $params['exclude_by_seo_name']);
}
if (!empty($params['status'])) {
$condition .= db_quote(' AND ?:ab__gp_locations.status = ?s', $params['status']);
}
if (AREA == 'C') {
$condition .= ' AND ?:ab__gp_locations.status = \'A\'';
}
$locations = db_get_hash_array('SELECT ?p FROM ?:ab__gp_locations ?p WHERE 1 ?p', 'location_id', implode(',', $fields), $join, $condition);
return [$locations, $params];
}

function fn_ab__gp_get_location($location_id, $lang_code = DESCR_SL)
{
static $location_storage = [];
$storage_key = $location_id . $lang_code;
if (!isset($location_storage[$storage_key])) {
list($location_data) = fn_ab__gp_get_locations(['id' => $location_id], $lang_code);
$location_storage[$storage_key] = $location_data[$location_id] ?? false;
}
return $location_storage[$storage_key];
}

function fb_ab__gp_get_location_id($location_seo_name)
{
$params = ['seo_name' => $location_seo_name, 'without_descriptions' => true];
list($locations) = fn_ab__gp_get_locations($params, '', fn_get_runtime_company_id());
$location_data = reset($locations);
return $location_data['location_id'] ?? false;
}

function fn_ab__gp_delete_location($location_id)
{
db_query('DELETE FROM ?:ab__gp_locations WHERE location_id = ?i', $location_id);
db_query('DELETE FROM ?:ab__gp_location_descriptions WHERE location_id = ?i', $location_id);
}

function fn_ab__gp_normalize_seo_name($seo_name, $lang_code = '', $index = 0)
{
$exist_name = db_get_field('SELECT name FROM ?:seo_names WHERE name = ?s', $seo_name);
$condition = db_quote(' AND seo_name = ?s', $seo_name);
if(!empty($lang_code)){
}
$exist_location = db_get_field('SELECT seo_name FROM ?:ab__gp_location_descriptions WHERE 1 ?p', $condition);
if ($exist_name || $exist_location) {
$index++;
if ($index == 1) {
$suffix = !empty($lang_code) ? $lang_code : 'location';
$seo_name = $seo_name . SEO_DELIMITER . $suffix;
} else {
$seo_name = preg_replace("/-\d+$/", '', $seo_name) . SEO_DELIMITER . $index;
}
$seo_name = fn_ab__gp_normalize_seo_name($seo_name, $lang_code, $index);
}
return $seo_name;
}

function fn_ab__gp_process_uri(){
$location_id = null;
$uri = fn_get_request_uri($_SERVER['REQUEST_URI']);
$language_in_uri = fn_seo_get_language_from_uri($uri);
if (!empty($uri)) {
$prefix = '/';
if ($language_in_uri) {
$prefix .= $language_in_uri . '/';
}
if (substr($uri, 0, strlen($prefix)) == $prefix) {
$uri = substr($uri, strlen($prefix));
}
$end_pos = strpos($uri, '/') ?: strlen($uri);
$location = substr($uri, 0, $end_pos);
$location_id = fb_ab__gp_get_location_id($location);
if ($location_id) {
$forwarding_slash = substr_count($_SERVER['REQUEST_URI'], '/') >= 2 ? '/' : '';
$_SERVER['REQUEST_URI'] = str_replace($forwarding_slash . $location, '', $_SERVER['REQUEST_URI']);
}
}
return $location_id;
}

function fn_ab__gp_init_uri(){
if($location_id = fn_ab__gp_process_uri()){
Tygh::$app['session']['ab__gp_location_id'] = $location_id;
}else{
unset(Tygh::$app['session']['ab__gp_location_id']);
}
}

function fn_ab__geo_pages_get_route(array $req, array $result, $area, $is_allowed_url)
{
if ($area === 'C') {
if($location_id = fn_ab__gp_process_uri()){
Tygh::$app['session']['ab__gp_location_id'] = $location_id;
}
}
}

function fn_ab__geo_pages_url_post(&$_url, $area, $url, $protocol, $company_id_in_url, $lang_code, $locations, $storefront_id)
{
if ($area === 'C') {
static $base_url = [];
$is_generating_base_urls = Registry::ifGet('ab__gp_generating_base_url', false);
if ($is_generating_base_urls) {
return;
}
if (empty($base_url)) {
Registry::set('ab__gp_generating_base_url', true);
foreach (\Tygh\Languages\Languages::getSimpleLanguages() as $k => $item) {
$base_url[$k] = fn_url('', $area, 'current', $k);
}
Registry::set('ab__gp_generating_base_url', false);
}
static $seo_settings = null;
static $addon_settings = null;
if (is_null($seo_settings)) {
$seo_settings = Registry::get('addons.seo');
$addon_settings = Registry::get('addons.ab__geo_pages');
}
$location_available_for_object = true;
static $location_data = null;
static $is_ab__seo_filters_enabled = null;
if (is_null($is_ab__seo_filters_enabled)) {
$is_ab__seo_filters_enabled = Registry::get('addons.ab__seo_filters.status') === 'A';
}
$url = str_replace('?', '&', $url);
parse_str($url, $_parsed_query);
if(isset($_parsed_query['ab__gp_location_id'])
&&
((count($_parsed_query) == 1) || isset($_parsed_query['index_php'])))
{
$url = 'index.php';
}
$location_id = $_parsed_query['ab__gp_location_id'] ?? fn_ab__gp_is_location_page();
if (!empty($_parsed_query['sl'])) {
$selected_language = $_parsed_query['sl'];
} elseif (defined('CART_LANGUAGE')) {
$selected_language = CART_LANGUAGE;
} else {
$selected_language = $lang_code;
}
if (
(isset($_parsed_query['dispatch']) && $_parsed_query['dispatch'] == 'categories.view')
||
isset($_parsed_query['categories_view'])
||
$url == 'index.php'
) {
if ($addon_settings['single_url'] == 'Y' ) {
$lang_code = Registry::get('settings.Appearance.frontend_default_language');
}else{
$lang_code = $selected_language;
}
if (isset($_parsed_query['category_id'])) {
$object_id = $_parsed_query['category_id'];
$object_type = 'category';
if ($is_ab__seo_filters_enabled && $object_id && isset($_parsed_query['features_hash'])) {
$features_hash = $_parsed_query['features_hash'];
$cache_lang_key = $lang_code;
if ($seo_settings['single_url'] == 'Y') {
$cache_lang_key = Registry::get('settings.Appearance.frontend_default_language');
}
$cache_name = '_c' . $object_id;
$key = $features_hash . '__' . $cache_lang_key;
$seo_name_cache = Registry::get($cache_name . '.' . $key);
if (!empty($seo_name_cache['sf_id'])) {
$object_type = 'ab__seo_filter';
$object_id = $seo_name_cache['sf_id'];
}
}
if(!$location_id || !$object_id){
$_url = fn_query_remove($_url, 'ab__gp_location_id');
return;
}
$location_available_for_object = fn_ab__gp_is_location_available_for_object($location_id, $object_id, $object_type, $lang_code);
}
$location_data = fn_ab__gp_get_location($location_id, $lang_code);
if (empty($location_data)) {
$location_data['seo_name'] = '';
} else {
$location_data['seo_name'] .= '/';
}
if ($location_available_for_object || $url == 'index.php') {
$_url = str_replace($base_url[$selected_language], $base_url[$selected_language] . $location_data['seo_name'], $_url);
}
$_url = fn_query_remove($_url, 'ab__gp_location_id');
}
}
}
function fn_ab__gp_is_dispatch_allowed(string $dispatch){
$allowed_dispatches = [
'categories.view',
'index.index'
];
return in_array($dispatch,$allowed_dispatches);
}

function fn_ab__geo_pages_dispatch_before_display()
{
if (AREA === 'C'
&& !empty($_REQUEST['dispatch'])
&& fn_ab__gp_is_dispatch_allowed($_REQUEST['dispatch'])
&& Registry::get('runtime.controller_status') != CONTROLLER_STATUS_NO_PAGE
&& $location_id = fn_ab__gp_is_location_page()
) {
$location_data = fn_ab__gp_get_location($location_id);
if (!$location_data) {
return;
}

$view = Tygh::$app['view'];
$dispatch = $_REQUEST['dispatch'];
$show_descripton = empty($_REQUEST['page']) || $_REQUEST['page'] == 1;
switch ($dispatch) {
case 'categories.view':
$category_data = $view->getTemplateVars('category_data');
$object_id = $category_data['category_id'];
$object_type = 'category';
if (!empty($_SESSION['absf_page_id'])) {
$object_id = $_SESSION['absf_page_id'];
$object_type = 'ab__seo_filter';
}
$placeholders = Placeholders::instance($object_id, $object_type, $location_id);
$placeholders->setPlaceholders(['[name]' => $category_data['category']]);
$page_title = $view->getTemplateVars('page_title');
$meta_description = $view->getTemplateVars('meta_description');
$original_name = $category_data['category'];
$category_data['category'] = $placeholders->processName($category_data['category']);
$page_title = $placeholders->processTitle($page_title);
if($show_descripton){
$category_data['description'] = $placeholders->processDescription($category_data['description']);
}else{
$category_data['description'] = '';
}
$meta_description = $placeholders->processMetaDescription($meta_description);
unset($category_data['ab__mcd_descs']);

if (defined('AJAX_REQUEST')) {
$assigned_vars = Tygh::$app['ajax']->getAssignedVars();
if (!empty($assigned_vars['ab__sf_data']['tag_h1'])) {
$ab__sf_data = $assigned_vars['ab__sf_data'];
$ab__sf_data['tag_h1'] = $placeholders->processName($ab__sf_data['tag_h1']);
$ab__sf_data['page_title'] = $placeholders->processTitle($ab__sf_data['page_title']);
Tygh::$app['ajax']->assign('ab__sf_data', $ab__sf_data);
}
}
$view
->assign('category_data', $category_data)
->assign('page_title', $page_title)
->assign('meta_description', $meta_description)
->assign('ab__gp_original_name', $original_name);
$_location_settings = fn_ab__gp_get_object_location_settings(['object_id' => $object_id, 'object_type' => $object_type, 'location_id'=>$location_id]);
if(isset($_location_settings[$location_id]['is_noindex'])){
$location_settings = $_location_settings[$location_id];
if($location_settings['is_noindex'] === 'Y' || !empty($location_settings['canonical_id'])){
$ab__sf_seo_canonical = $view->getTemplateVars('ab__sf_seo_canonical');
if($location_settings['is_noindex'] == 'Y'){
$ab__sf_seo_canonical['noindex_nofollow'] = 'Y';
}
if(!empty($location_settings['canonical_id'])){
$ab__sf_seo_canonical['base_url'] = $ab__sf_seo_canonical['current'] = fn_url('categories.view?category_id='.$location_settings['canonical_id']);
}
$view->assign('ab__sf_seo_canonical',$ab__sf_seo_canonical);
}
}
break;
case 'index.index':
$index_template_id = Registry::get('addons.ab__geo_pages.index_page_template_id');
$placeholders = Placeholders::instance(0, '', $location_id, $index_template_id);
$placeholders->setPlaceholders(['[name]' => '']);
$page_title = $view->getTemplateVars('page_title');
$meta_description = $view->getTemplateVars('meta_description');
$view->assign('page_title',$placeholders->processTitle($page_title))
->assign('meta_description', $placeholders->processMetaDescription($meta_description));
break;
}
}
}
function fn_ab__geo_pages_ab__sf_category_preparing_data_post(&$category_data, &$ab__sf_data, $show_description, $lang_code, &$ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1){
if($show_description && $location_id = fn_ab__gp_is_location_page()){
$location_data = fn_ab__gp_get_location($location_id);
$object_id = $category_data['category_id'];
$object_type = 'category';
if(!empty($ab__seo_name['sf_id'])){
$object_id = $ab__seo_name['sf_id'];
$object_type = 'ab__seo_filter';
}
if (!$location_data) {
return;
}
$placeholders = Placeholders::instance($object_id, $object_type, $location_id);
$name = $ab__sf_data['tag_h1'] ?? $category_data['category'];
$placeholders->setPlaceholders(['[name]' => $name]);
$ab__seo_name['description'] = $placeholders->processDescription(ABSF::str_replace($ab__seo_name['description'], $category, $filter, $variant, $ab__custom_category_h1));
if(isset($ab__sf_data['description'])){
$ab__sf_data['description'] = '<div class="ty-wysiwyg-content ty-mb-s">'.$ab__seo_name['description'].'</div>';
}
}
}
function fn_ab__geo_pages_ab__sf_category_preparing_data_pre(&$category_data, &$ab__sf_data, $show_description, $lang_code){
if($show_description && $location_id = fn_ab__gp_is_location_page()){
$object_id = $category_data['category_id'];
$object_type = 'category';
$placeholders = Placeholders::instance($object_id, $object_type, $location_id);
$placeholders->setPlaceholders(['[name]' => $category_data['category']]);
$category_data['description'] = $placeholders->processDescription($category_data['description']);
if(!empty($ab__sf_data['tag_h1'])){
$placeholders->setPlaceholders(['[name]' => $ab__sf_data['tag_h1']]);
$ab__sf_data['description'] = $placeholders->processDescription($ab__sf_data['description']);
}
if(!empty($category_data['ab__mcd_descs'][0]['main'])){
$category_data['ab__mcd_descs'][0]['description'] = $category_data['description'];
}
}
}

function fn_ab__gp_is_location_page()
{
return Tygh::$app['session']['ab__gp_location_id'] ?? false;
}

function fn_ab__gp_is_location_available_for_object(int $location_id, int $object_id, string $object_type, $lang_code = CART_LANGUAGE)
{
$retval = true;
$location_data = fn_ab__gp_get_location($location_id, $lang_code);
static $availability = [];
$availability_key = $location_id . $object_id . $object_type;
if (!isset($availability[$availability_key])) {
if (!isset($location_data['link_type'])) {
$retval = false;
}
if (isset($location_data['link_type']) && $location_data['link_type'] === 'S') {
$enable = db_get_field('SELECT enable FROM ?:ab__gp_object_location_settings WHERE object_id = ?i AND object_type = ?s AND location_id = ?i', $object_id, $object_type, $location_id);
$retval = $enable === 'Y';
}
$availability[$availability_key] = $retval;
}
return $availability[$availability_key];
}
function fn_ab__gp_is_indexation_allowed(int $location_id, int $object_id, string $object_type){
$indexation_rules = db_get_row('SELECT is_noindex, canonical_id FROM ?:ab__gp_object_location_settings WHERE object_id = ?i AND object_type = ?s AND location_id = ?i', $object_id, $object_type, $location_id);
return (!isset($indexation_rules['is_noindex']) || $indexation_rules['is_noindex'] != 'Y') && empty($indexation_rules['canonical_id']);
}

function fn_ab__advanced_sitemap_sitemap_link($link, $object_type, $value, $languages, &$links)
{
static $locations = null;
$allow_add_url = false;
$values = [];
if (is_null($locations)) {
list($locations) = fn_ab__gp_get_locations(['status' => 'A']);
}
if ($object_type === 'ab__seo_filter' || $object_type === 'category') {
if ($object_type === 'ab__seo_filter') {
$check_object_type = 'seo_filter';
$check_object_id = $value['sf_id'];
} else {
$check_object_type = 'category';
$check_object_id = $value;
}
foreach ($locations as $location) {
if (fn_ab__gp_is_location_available_for_object($location['location_id'], $check_object_id, $check_object_type, DESCR_SL)
&& fn_ab__gp_is_indexation_allowed($location['location_id'], $check_object_id, $check_object_type)
) {
$values[] = $link . '&ab__gp_location_id=' . $location['location_id'];
$allow_add_url = true;
}
}
if($values){
Registry::set('ab__gp_sitemap_links', $values, true);
}
}
if($object_type === 'ab__geo_pages' || (defined('AB__GP_AS_LEGACY') && $allow_add_url)){
if(!defined('AB__GP_AS_LEGACY')){
$values = [$value];
}
foreach ($values as $_value) {
foreach ($languages as $language) {
if(!defined('AB__GP_AS_LEGACY')) {
$links[$language] = fn_url($_value . '&sl=' . $language, SiteArea::STOREFRONT, fn_get_storefront_protocol(), $language);
}else{
$links[] = fn_url($_value . '&sl=' . $language, SiteArea::STOREFRONT, fn_get_storefront_protocol(), $language);
}
}
}
}
}
function fn_ab__advanced_sitemap_ab__as_write_links_to_file_pre($object_type, $value, $lang_code, $that)
{
$geo_pages = Registry::ifGet('ab__gp_sitemap_links', false);
if($geo_pages) {
Registry::del('ab__gp_sitemap_links');
foreach ($geo_pages as $geo_page) {
$that->writeLinksToFile('ab__geo_pages', $geo_page);
}
}
}
function fn_ab__advanced_sitemap_ab__as_get_settings_object_from_object_type($object_type, $that, &$settings_var){
if($object_type === 'ab__geo_pages'){
$settings_var = 'categories';
}
}
function fn_ab__geo_pages_get_route_runtime($req, $area, $result, $is_allowed_url, $controller, $mode, $action, $dispatch_extra, $current_url_params, &$current_url){
$dispatch = $controller . '.' . $mode;
if(fn_ab__gp_is_dispatch_allowed($dispatch) && $location_id = fn_ab__gp_is_location_page()){
$current_url = fn_link_attach($current_url,'ab__gp_location_id='.$location_id);
}
}
