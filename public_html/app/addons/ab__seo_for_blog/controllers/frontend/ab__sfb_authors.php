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
use Tygh\Registry;
defined('BOOTSTRAP') || die('Access denied');
$author_id = $_REQUEST['author_id'] ?? 0;
if ($mode === 'view') {
$params = [
'author_id' => $author_id,
'status' => 'A',
];
[$authors] = fn_ab__sfb_get_authors($params, DESCR_SL, Registry::get('settings.Appearance.admin_elements_per_page'));
if(empty($author_id) || empty($authors[$author_id])){
return [CONTROLLER_STATUS_NO_PAGE];
}
$author_data = $authors[$author_id];
$meta_data = [
'page_title' => $author_data['title'] ?: $author_data['name'],
'meta_description' => $author_data['meta_description'],
'meta_keywords' => $author_data['meta_keywords'],
];
fn_add_breadcrumb($author_data['name']);
$include_without_author = $author_id == Registry::ifGet('addons.ab__seo_for_blog.default_author', 0);
list($pages, $search) = fn_get_pages([
'author_id' => $author_id,
'include_without_author' => $include_without_author,
'page' => !empty($_REQUEST['page']) ? $_REQUEST['page'] : 0,
'page_type' => PAGE_TYPE_BLOG,
'get_image' => true,
'status' => 'A',
'sort_by' => 'timestamp',
'sort_order' => 'desc'
], Registry::get('settings.Appearance.elements_per_page'));
Tygh::$app['view']->assign('author_data', $author_data)
->assign('pages', $pages)
->assign('search', $search)
->assign($meta_data);
}
