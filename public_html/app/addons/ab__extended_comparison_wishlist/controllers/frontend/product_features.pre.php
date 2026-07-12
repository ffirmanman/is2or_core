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
if (!empty(Tygh::$app['session']['comparison_list'])) {

$service = Tygh::$app['addons.ab__extended_comparison_wishlist.service'];
$assign = [];
if ($service->getSettings('group_comparison_lists') === YesNo::YES) {
list($assign['ab__ecw_compare_lists']) = $service->groupComparisonLists(true);
}

$view = Tygh::$app['view'];
$view->assign($assign);
}
} elseif ($mode == 'delete_product' && !empty($_REQUEST['product_id'])) {
if (!empty(Tygh::$app['session']['ab__ecw_original_comparison'])) {
unset(Tygh::$app['session']['ab__ecw_original_comparison']);
}
}
