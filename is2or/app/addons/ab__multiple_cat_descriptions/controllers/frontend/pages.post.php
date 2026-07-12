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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
return;
}
if ($mode == 'view') {
$var = Tygh::$app['view']->getTemplateVars('page');
$page_id = $var['page_id'];
$search['total_items'] = 0;
list($elements, $headers) = fn_ab__mcd_get_items(['object_id' => $page_id,
'object_type' => 'page',
'status' => 'A',
'group_by_type' => true,
'search_products' => $search,
], CART_LANGUAGE);
$var['ab__mcd_descs'] = $elements;
$var['ab__mcd_object'] = reset($headers);
if (function_exists('fn_ab__emd_replace_placeholders')) {
foreach (['title', 'description'] as $field) {
foreach ($var['ab__mcd_descs'] as &$ab__mcd_desc) {
if (!empty($ab__mcd_desc[$field])) {
$ab__mcd_desc[$field] = fn_ab__emd_replace_placeholders($ab__mcd_desc[$field], 'pages.view');
}
}
}
if (!empty($var['ab__mcd_object']['title'])) {
$var['ab__mcd_object']['title'] = fn_ab__emd_replace_placeholders($var['ab__mcd_object']['title'], 'pages.view');
}
}
if (!empty($var) && !empty($var['ab__mcd_descs'])) {
if (strlen(trim($var['description']))) {
array_unshift($var['ab__mcd_descs'], [
'main' => true,
'title' => __('ab__mcd.first_tab'),
'description' => trim($var['description']),
]);
}
$var['description'] = \Tygh\Registry::get('view')->assign('category_data', $var)->fetch('addons/ab__multiple_cat_descriptions/views/categories/components/ab__mcd_view_description.tpl');
Tygh::$app['view']->assign('page', $var);
}
}
