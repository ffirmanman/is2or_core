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
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (Registry::get('runtime.mode') === 'update') {
if ($_REQUEST['addon'] === 'ab__seo_reviews') {
if (isset($_REQUEST['ab__sr_default_seo_names'])) {
fn_ab__update_default_seo_names($_REQUEST['ab__sr_default_seo_names']);
}
}
}
}
if (Registry::get('runtime.mode') === 'update') {
if ($_REQUEST['addon'] === 'ab__seo_reviews') {
$settings = fn_ab__sr_get_settings();
Tygh::$app['view']->assign('ab__sr_default_seo_names', $settings['default_seo_names']);
}
}