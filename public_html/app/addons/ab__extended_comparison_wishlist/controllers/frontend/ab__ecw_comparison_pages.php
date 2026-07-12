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
use Tygh\Registry;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\ProductFeaturesDisplayOn;
use Tygh\Enum\SiteArea;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

$repository = Tygh::$app['addons.ab__ecw_comparison_pages.repository'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$controller_status = CONTROLLER_STATUS_DENIED;
return [$controller_status];
}
$controller_status = CONTROLLER_STATUS_NO_PAGE;
$redirect_url = null;

$view = Tygh::$app['view'];
if ($mode == 'view') {
if (!empty($_REQUEST['page_id'])) {
$page = $repository->findById($_REQUEST['page_id']);
if (!empty($page)) {
fn_add_breadcrumb(__('ab__ecw.comparison_pages.list'), 'ab__ecw_comparison_pages.list');
fn_add_breadcrumb($page['name']);
list($products) = fn_get_products([
'pid' => $page['product_ids'],
]);
fn_gather_additional_products_data($products, [
'get_icon' => true,
'get_detailed' => true,
'get_features' => true,
'get_taxed_prices' => false,
'get_discounts' => true,
'features_display_on' => ProductFeaturesDisplayOn::ALL,
]);
$assign = [
'page' => $page,
'products' => $products,
];
if (empty($page['page_title'])) {
$page['page_title'] = $page['name'];
}
$assign['page_title'] = $page['page_title'];
if (!empty($page['meta_description'])) {
$assign['meta_description'] = $page['meta_description'];
}
if (!empty($page['meta_keywords'])) {
$assign['meta_keywords'] = $page['meta_keywords'];
}
$view->assign($assign);
$controller_status = CONTROLLER_STATUS_OK;
}
}
} elseif ($mode == 'list') {
$params = $_REQUEST;
$params['get_seo_name'] = false;
if (empty($params['items_per_page'])) {
$params['items_per_page'] = Registry::get('settings.Appearance.elements_per_page');
}
list($pages, $search) = $repository->find($params);
$title = __('ab__ecw.comparison_pages.list');
fn_add_breadcrumb($title);
$assign = [
'pages' => $pages,
'search' => $search,
'title' => $title,
'sorting' => $repository->getSorting(),
'sorting_orders' => fn_get_products_sorting_orders(),
];
$view->assign($assign);
$controller_status = CONTROLLER_STATUS_OK;
}
return [$controller_status, $redirect_url];
