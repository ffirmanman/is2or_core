<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
if ($mode === 'home') {
if (fn_abt__ut2_mv_is_vendor_store_available()) {
$company_id = fn_abt__ut2_mv_get_vendor_id();
$blocks = fn__abt__ut2_mv_get_company_microstore_homepage_blocks($company_id, ['status' => ObjectStatuses::ACTIVE]);
Tygh::$app['view']
->assign('abt_blocks', $blocks)
->assign('company_id', $company_id);
}
} elseif ($mode == 'reviews') {
if (Registry::get('addons.discussion.status') !== 'A' || !isset($_REQUEST['company_id'])) {
return [CONTROLLER_STATUS_NO_PAGE];
}
$company_id = (int)$_REQUEST['company_id'];
$company_data = fn_get_company_data($company_id);
if (empty($company_data['company_id'])) {
return [CONTROLLER_STATUS_NO_PAGE];
}
fn_add_breadcrumb(__('all_vendors'), 'companies.catalog');
fn_add_breadcrumb($company_data['i18n_company'] ?? $company_data['company'], 'companies.view?company_id=' . $company_id);
fn_add_breadcrumb(__('discussion_title_company'));
Tygh::$app['view']
->assign('company_data', $company_data)
->assign('company_id', $company_data['company_id']);
}
if (in_array($mode, ['view', 'products', 'reviews', 'home'])) {
$company_id = fn_abt__ut2_mv_get_vendor_id();
$company_data = fn_get_company_data($company_id);
if (!empty($company_data)) {
if ($mode == 'view'){
$page = 'about';
} elseif ($mode == 'products') {
$page = 'products';
} elseif ($mode == 'home') {
$page = 'store';
} elseif ($mode == 'reviews') {
$page = 'reviews';
}
list($title, $meta_description, $meta_keywords) = fn_abt__ut2_mv_get_company_meta($company_data, $page);
Tygh::$app['view']->assign('page_title', $title);
Tygh::$app['view']->assign('meta_description', $meta_description);
Tygh::$app['view']->assign('meta_keywords', $meta_keywords);
}
}