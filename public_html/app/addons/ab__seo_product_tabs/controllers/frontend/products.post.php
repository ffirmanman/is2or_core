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
use Tygh\BlockManager\ProductTabs;
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\YesNo;
use Tygh\Registry;
defined('BOOTSTRAP') or die('Access denied');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
return;
}
if ($mode === 'view' || $mode === 'quick_view') {
if (Registry::get('addons.ab__seo_product_tabs.add_tabs_fixed_panel') === YesNo::YES) {
$product_tabs = ProductTabs::instance()->getList(db_quote(' AND ?:product_tabs.status = ?s AND ?:product_tabs.ab__spt_add_tab_to_floating_panel = ?s', ObjectStatuses::ACTIVE, YesNo::YES), $_REQUEST['product_id'], CART_LANGUAGE);
Tygh::$app['view']->assign('ab__spt_tabs', $product_tabs);
}
}
