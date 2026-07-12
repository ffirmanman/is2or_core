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
use Tygh\Enum\YesNo;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return [CONTROLLER_STATUS_OK];
}
if ($mode == 'compare') {

$service = Tygh::$app['addons.ab__extended_comparison_wishlist.service'];

$repository = Tygh::$app['addons.ab__extended_comparison_wishlist.repository'];

$view = Tygh::$app['view'];

$comparison_data = $view->getTemplateVars('comparison_data');
if ($service->getSettings('group_comparison_lists') === YesNo::YES) {

$grouper = $service->getGrouper();

foreach ($grouper->getComparisonLists() as $key => $comparisonList) {
if ($comparisonList->isActive()) {
$view->assign('ab__ecw_active_comparison_list', $comparisonList);
fn_add_breadcrumb($comparisonList->getTitle());
fn_ab__extended_comparison_wishlist_change_breadcrumb();
}
foreach ($comparisonList->getProductList() as $product_id) {
foreach ($comparisonList->getProductList() as $compared_product_id) {
if ($product_id != $compared_product_id && in_array($product_id, Tygh::$app['session']['comparison_list'])) {
$repository->updateComparison($product_id, $compared_product_id, $key);
}
}
}
}
}
if (!empty(Tygh::$app['session']['ab__ecw_original_comparison'])) {
Tygh::$app['session']['comparison_list'] = Tygh::$app['session']['ab__ecw_original_comparison'];
unset(Tygh::$app['session']['ab__ecw_original_comparison']);
}
}
