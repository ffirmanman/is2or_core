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
use Tygh\Languages\Languages;
use Tygh\Registry;
defined('BOOTSTRAP') or die('Access denied');

function fn_ab__seo_product_tabs_product_tab_updated($tab_id)
{
if (isset($_REQUEST['tab_data']['ab__spt_tab_header'])) {
$_REQUEST['tab_data'] = fn_ab__spt_secure_tab_custom_fields($_POST['tab_data']);
fn_ab__spt_update_tabs($_POST['tab_data']['ab__spt_tab_header'], $tab_id, DESCR_SL);
$tabs_without_ab_spt_header = db_get_fields('SELECT lang_code FROM ?:product_tabs_descriptions WHERE tab_id = ?i AND ab__spt_tab_header = \'\'', $tab_id);
foreach ($tabs_without_ab_spt_header as $lang_code) {
fn_ab__spt_update_tabs($_POST['tab_data']['ab__spt_tab_header'], $tab_id, $lang_code);
}
}
}

function fn_ab__seo_product_tabs_product_tab_created($tab_id)
{
if (isset($_REQUEST['tab_data']['ab__spt_tab_header'])) {
$_REQUEST['tab_data'] = fn_ab__spt_secure_tab_custom_fields($_POST['tab_data']);
foreach (array_keys(Languages::getAll()) as $lang) {
fn_ab__spt_update_tabs($_POST['tab_data']['ab__spt_tab_header'], $tab_id, $lang);
}
}
}

function fn_ab__seo_product_tabs_get_products_before_select($params, $join, &$condition, $u_condition, $inventory_join_cond, $sortings, $total, $items_per_page, $lang_code, $having)
{
if (!empty($params['ab__spt_short_name'])) {
$condition .= db_quote(' AND ab__spt_short_name LIKE ?s', '%' . $params['ab__spt_short_name'] . '%');
}
}

function fn_ab__seo_product_tabs_get_product_details_view_post($result, $product_id)
{
Registry::set('runtime.ab__spt.product_details_templates.' . $product_id, $result);
}
