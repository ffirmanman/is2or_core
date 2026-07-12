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
if ($mode == 'view' && Registry::get('addons.ab__so_noindex_tech_pages.html_sitemap_exclude_denied') == 'Y') {
$sitemap = Tygh::$app['view']->getTemplateVars('sitemap');
if (!empty($sitemap['categories_tree'])) {
foreach ($sitemap['categories_tree'] as $key => $category) {
if (fn_ab__so_ntp_is_object_denied($category['category_id'], 'category')) {
unset($sitemap['categories_tree'][$key]);
}
}
}
if (!empty($sitemap['pages_tree'])) {
foreach ($sitemap['pages_tree'] as $key => $page) {
if (fn_ab__so_ntp_is_object_denied($page['page_id'], 'page')) {
unset($sitemap['pages_tree'][$key]);
}
}
}
if (!empty($sitemap['features_variants'])) {
foreach ($sitemap['features_variants'] as $key_group => $group) {
foreach ($group as $key => $variant) {
if (fn_ab__so_ntp_is_object_denied($variant['variant_id'], 'product_feature')) {
unset($sitemap['features_variants'][$key_group][$key]);
}
}
}
}
Tygh::$app['view']->assign('sitemap', $sitemap);
}
