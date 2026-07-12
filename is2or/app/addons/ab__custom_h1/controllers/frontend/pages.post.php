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
$page = Tygh::$app['view']->getTemplateVars('page');
if (strlen(trim($page['ab__custom_page_h1']))) {
if (is_callable('fn_ab__emd_replace_placeholders')) {
$page['ab__custom_page_h1'] = fn_ab__emd_replace_placeholders($page['ab__custom_page_h1'], "{$controller}.{$mode}");
}
$page['ab__ch1_origin_page'] = $page['page'];
$page['page'] = trim($page['ab__custom_page_h1']);
Tygh::$app['view']->assign('page', $page);
if (defined('AJAX_REQUEST')) {
if (!empty($_REQUEST['page']) && $_REQUEST['page'] > 1) {
Tygh::$app['ajax']->assign('ab__ch1', $page['page'] . __('ab__ch1.page_no', ['[page]' => $_REQUEST['page']]));
} else {
Tygh::$app['ajax']->assign('ab__ch1', $page['page']);
}
}
}
}
