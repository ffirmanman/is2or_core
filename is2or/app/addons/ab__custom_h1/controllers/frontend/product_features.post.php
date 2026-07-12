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
$variant_data = Tygh::$app['view']->getTemplateVars('variant_data');
if (strlen(trim($variant_data['ab__custom_feature_variant_h1']))) {
if (is_callable('fn_ab__emd_replace_placeholders')) {
$variant_data['ab__custom_feature_variant_h1'] = fn_ab__emd_replace_placeholders($variant_data['ab__custom_feature_variant_h1'], "{$controller}.{$mode}");
}
$variant_data['ab__ch1_origin_variant'] = $variant_data['variant'];
$variant_data['variant'] = trim($variant_data['ab__custom_feature_variant_h1']);
Tygh::$app['view']->assign('variant_data', $variant_data);
if (defined('AJAX_REQUEST')) {
if (!empty($_REQUEST['page']) && $_REQUEST['page'] > 1) {
Tygh::$app['ajax']->assign('ab__ch1', $variant_data['variant'] . __('ab__ch1.page_no', ['[page]' => $_REQUEST['page']]));
} else {
Tygh::$app['ajax']->assign('ab__ch1', $variant_data['variant']);
}
}
}
}
