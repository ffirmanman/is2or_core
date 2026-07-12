<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
if ($mode == 'view') {
$category_data = Tygh::$app['view']->getTemplateVars('category_data');
if (strlen(trim($category_data['ab__custom_category_h1']))) {
if (is_callable('fn_ab__emd_replace_placeholders')) {
$category_data['ab__custom_category_h1'] = fn_ab__emd_replace_placeholders($category_data['ab__custom_category_h1'], "{$controller}.{$mode}");
}
$category_data['ab__ch1_origin_category'] = $category_data['category'];
$category_data['category'] = trim($category_data['ab__custom_category_h1']);
Tygh::$app['view']->assign('category_data', $category_data);
if (defined('AJAX_REQUEST')) {
if (!empty($_REQUEST['page']) && $_REQUEST['page'] > 1) {
Tygh::$app['ajax']->assign('ab__ch1', $category_data['category'] . __('ab__ch1.page_no', ['[page]' => $_REQUEST['page']]));
Tygh::$app['ajax']->assign('ab__ch1_name', $category_data['category']);
} else {
Tygh::$app['ajax']->assign('ab__ch1', $category_data['category']);
}
}
}
}
