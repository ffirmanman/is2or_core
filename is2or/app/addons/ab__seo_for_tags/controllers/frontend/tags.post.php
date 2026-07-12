<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($mode === 'view') {
if (!empty($_REQUEST['tag_id'])) {

$tag_data = fn_ab__get_tag_data($_REQUEST['tag_id']);
if (empty($tag_data)) {
return [CONTROLLER_STATUS_NO_PAGE];
}
$fields = ['h1', 'description', 'page_title', 'meta_description', 'meta_keywords'];
foreach ($fields as $field) {
$tag_data[$field] = str_replace('%tag%', $tag_data['tag'], $tag_data[$field]);
}
Tygh::$app['view']->assign('tag_data', $tag_data);

if (!empty($tag_data['page_title'])) {
Tygh::$app['view']->assign('page_title', str_replace('%tag%', $_REQUEST['tag'], $tag_data['page_title']));
}

if (!empty($tag_data['meta_description']) || !empty($tag_data['meta_keywords'])) {
Tygh::$app['view']->assign('meta_description', str_replace('%tag%', $_REQUEST['tag'], $tag_data['meta_description']));
Tygh::$app['view']->assign('meta_keywords', str_replace('%tag%', $_REQUEST['tag'], $tag_data['meta_keywords']));
}

$breadcrumbs = Tygh::$app['view']->getTemplateVars('breadcrumbs');
$breadcrumbs[1] = [
'title' => __('tags'),
'link' => 'tags.list',
];
$breadcrumbs[2]['title'] = $_REQUEST['tag'];
Tygh::$app['view']->assign('breadcrumbs', $breadcrumbs);
}
} elseif ($mode === 'list') {
fn_add_breadcrumb(__('tags'));
list($tags_list, $search) = fn_get_tags($_REQUEST);
$tags = [];
foreach ($tags_list as $tag) {
$tags[fn_substr(mb_strtoupper($tag['tag']), 0, 1)][] = $tag;
}
ksort($tags);
Tygh::$app['view']->assign('tags', $tags);
Tygh::$app['view']->assign('search', $search);
}
