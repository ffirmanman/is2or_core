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
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($mode == 'view' && fn_allowed_for('MULTIVENDOR')) {
$product_data = Registry::get('view')->getTemplateVars('product');
if (!empty($product_data['company_id'])) {
$company_data = !empty($product_data['company_id']) ? fn_get_company_data($product_data['company_id']) : [];
$company_data['logos'] = fn_get_logos($product_data['company_id']);
if(fn_abt__ut2_mv_is_banners_for_product_available()){
$vendor_banners = fn_abt__ut2_mv_get_vendor_banners($product_data['company_id']);
if($vendor_banners){
$bids = implode(',', array_column($vendor_banners, 'banner_id'));
list($banners) = fn_get_banners(['item_ids' => $bids]);
foreach ($banners as $banner) {
foreach ($vendor_banners as &$vendor_banner) {
if($banner['banner_id'] == $vendor_banner['banner_id']){
$vendor_banner = array_merge($vendor_banner, $banner);
}
}
}
$company_data['banners'] = $vendor_banners;
}
}
Tygh::$app['view']->assign('company_data', $company_data);
}
if (Registry::get('addons.master_products.status') == 'A') {
$params = [
'is_vendor_products_list' => true,
'include_child_variations' => true,
'group_child_variations' => false,
'vendor_products_by_product_id' => $_REQUEST['product_id'],
];
list($abt__ut2_mv__vendor_products,) = fn_get_products($params);
if (!empty($abt__ut2_mv__vendor_products)) {
$abt__ut2_mv__vendor_products = fn_master_products_load_products_seller_data($abt__ut2_mv__vendor_products);
fn_gather_additional_products_data($abt__ut2_mv__vendor_products, $params);
usort($abt__ut2_mv__vendor_products, function ($a, $b) {
$ratingA = $a['company']['average_rating'] ?? 0;
$ratingB = $b['company']['average_rating'] ?? 0;
if ($ratingA != $ratingB) {
return $ratingB <=> $ratingA;
}
$priceA = $a['price'] ?? 0;
$priceB = $b['price'] ?? 0;
return $priceA <=> $priceB;
});
$min_vendor_price = min(array_column($abt__ut2_mv__vendor_products, 'price'));
Tygh::$app['view']->assign('min_vendor_price', $min_vendor_price);
}
Tygh::$app['view']->assign('abt__ut2_mv__vendor_products', $abt__ut2_mv__vendor_products);
}
}
