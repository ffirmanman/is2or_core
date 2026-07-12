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
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($mode == 'view') {
$category_data = Tygh::$app['view']->getTemplateVars('category_data');
if (!empty($category_data['ab__emd__category_pattern_id'])) {
$pattern = fn_ab__emd_get_patterns(['pattern_id' => $category_data['ab__emd__category_pattern_id']]);
if (!empty($pattern)) {
Tygh::$app['view']->assign([
'page_title' => $pattern['page_title'],
'meta_description' => $pattern['meta_description'],
'meta_keywords' => $pattern['meta_keywords'],
]);
Registry::set('ab__extended_metadata.used_custom_pattern', true);
}
}
}
