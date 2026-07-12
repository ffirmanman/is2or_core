<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2022   *
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
use Tygh\Enum\ProductFeatures;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($mode == 'picker') {
list($product_features) = fn_get_product_features([
'feature_types' => ProductFeatures::EXTENDED,
'exclude_group' => true,
]);
$page_number = isset($_REQUEST['page']) ? (int) $_REQUEST['page'] : 1;
$page_size = isset($_REQUEST['page_size']) ? (int) $_REQUEST['page_size'] : 10;
$search_query = isset($_REQUEST['q']) ? $_REQUEST['q'] : null;
$lang_code = isset($_REQUEST['lang_code']) ? $_REQUEST['lang_code'] : CART_LANGUAGE;
$search = [
'page' => $page_number,
'feature_id' => !empty($_REQUEST['feature_id']) ? (array) $_REQUEST['feature_id'] : array_keys($product_features),
'search_query' => $search_query,
'get_images' => false,
'feature_type' => ProductFeatures::EXTENDED,
];
if (isset($_REQUEST['preselected'])) {
$search['variant_id'] = $_REQUEST['preselected'];
}
if (isset($_REQUEST['product_id'])) {
$search['product_id'] = (int) $_REQUEST['product_id'];
}
list($variants, $search) = fn_get_product_feature_variants($search, $page_size, $lang_code);
$objects = array_values(array_map(function ($feature_variant) use ($product_features) {
return [
'id' => $feature_variant['variant_id'],
'text' => $feature_variant['variant'],
'feature' => $product_features[$feature_variant['feature_id']]['description'],
];
}, $variants));
Tygh::$app['view']->assign('feature_variants', $objects)
->assign('search', $search)
->assign('product_features', $product_features);
Tygh::$app['view']->display('addons/ab__multiple_cat_descriptions/feature_variants_picker/picker_contents.tpl');
exit;
}
