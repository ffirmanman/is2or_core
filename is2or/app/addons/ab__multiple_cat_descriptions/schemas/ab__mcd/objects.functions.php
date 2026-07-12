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
function fn_ab__mcd_get_category_linked_objects($links)
{
$auth = Tygh::$app['session']['auth'];
$existing_categories = db_get_fields('SELECT category_id FROM ?:categories WHERE category_id in (?n)', array_keys($links));
$parents = fn_get_categories_list_with_parents($existing_categories);
foreach ($parents as $key => $parent) {
$links[$key]['admin_url'] = "categories.update&selected_section=ab__mcd_tab&category_id={$key}";
$links[$key]['storefront_url'] = "categories.view?category_id={$key}";
if (fn_allowed_for('ULTIMATE')) {
$links[$key]['storefront_url'] .= "&company_id={$parent['company_id']}";
}
$links[$key]['description'] = implode(' / ', array_map(function ($entry) {
return $entry['category'];
}, array_merge($parent['parents'], [$parent])));
}
return $links;
}
function fn_ab__mcd_get_feature_variant_linked_objects($links)
{
foreach ($links as &$item) {
if ($item['object_exists']) {
$f_v = fn_get_product_feature_variant($item['object_id']);
$item['description'] = $f_v['variant'];
$item['storefront_url'] = 'product_features.view&variant_id=' . $item['object_id'];
$item['admin_url'] = 'product_features.update&feature_id=' . $f_v['feature_id'] . '&ab__mcd_feature_variant=' . $item['object_id'] . '&selected_section=tab_variants_' . $f_v['feature_id'];
}
}
return $links;
}
