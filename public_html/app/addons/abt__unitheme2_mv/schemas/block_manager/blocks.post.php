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
use Tygh\Enum\YesNo;
$schema['abt__ut2_mv_vendor_subcategories_menu'] = [
'templates' => 'addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl',
'content' => [
'abt__ut2_subcategories' => [
'type' => 'function',
'function' => ['fn_abt__ut2_get_advanced_sub_or_parent_categories'],
],
],
'settings' => [
'abt__ut2_show_parents' => [
'type' => 'checkbox',
'default_value' => YesNo::NO,
],
'abt__ut2_show_siblings' => [
'type' => 'checkbox',
'default_value' => YesNo::NO,
],
'abt__ut2_show_children' => [
'type' => 'checkbox',
'default_value' => YesNo::YES,
],
'abt__ut2_show_products_count' => [
'type' => 'checkbox',
'default_value' => YesNo::NO,
],
'abt__ut2_category_count_level_2' => [
'type' => 'input',
'default_value' => 10,
],
'abt__ut2_category_count_level_3' => [
'type' => 'input',
'default_value' => 10,
],
],
'wrappers' => 'blocks/wrappers',
'cache' => [
'update_handlers' => [
'categories',
'category_descriptions',
],
'request_handlers' => [
'current_category_id' => '%CATEGORY_ID%',
'company_id' => '%COMPANY_ID%',
],
],
'show_on_locations' => ['companies.products'],
];
$schema['vendor_information']['templates'] = array_merge($schema['vendor_information']['templates'], [
'addons/abt__unitheme2_mv/blocks/abt__ut2_mv_vendor_information.tpl' => [],
'addons/abt__unitheme2_mv/blocks/abt__ut2_mv_vendor_information_vertical.tpl' => [],
]);
$schema['vendor_information']['content']['vendor_info']['function'] = ['fn_abt__ut2_mv_blocks_get_vendor_info'];
$schema['banners']['content']['items']['fillings']['abt__ut2_mv_vendor_home_banner'] = [
'params' => [
'request' => [
'abt__ut2_mv_company_id' => '%COMPANY_ID%',
],
],
];
$schema['banners']['cache']['request_handlers'][] = 'company_id';
$schema['products']['cache']['request_handlers'][] = 'company_id';
$schema['abt__ut2_mv_vendor_menu'] = [
'templates' => [
'addons/abt__unitheme2_mv/blocks/vendor_menu.tpl' => [
'name' => __('block_abt__ut2_mv_vendor_menu')
],
],
'content' => [
'items' => [
'remove_indent' => true,
'hide_label' => true,
'type' => 'enum',
'object' => 'categories',
'items_function' => 'fn_abt__ut2_mv_get_vendor_menu',
'fillings' => [
'full_tree_cat' => [
'params' => [
'plain' => false,
'group_by_level' => true,
'max_nesting_level' => 3,
'request' => [
'company_ids' => '%COMPANY_ID%',
],
],
'settings' => [
'home_page' => [
'type' => 'checkbox',
],
'vendor_categories' => [
'type' => 'checkbox',
'option_name' => 'abt__ut2_mv.vendor_categories'
],
'pages' => [
'type' => 'checkbox',
],
'vendor_reviews' => [
'type' => 'checkbox',
'option_name' => 'abt__ut2_mv.reviews'
],
'hide_if_no_vendor_reviews' => [
'type' => 'checkbox',
'option_name' => 'abt__ut2_mv.hide_if_no_vendor_reviews'
],
'about' => [
'type' => 'checkbox',
'option_name' => 'abt__ut2_mv.about_vendor'
],
],
],
],
],
],
'cache' => [
'update_handlers' => ['categories', 'category_descriptions', 'companies', 'category_vendor_product_count'],
'session_handlers' => ['current_category_id'],
'request_handlers' => ['category_id', 'company_id'],
],
];
return $schema;
