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
use Tygh\Providers\StorefrontProvider;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Storefront\Storefront;
defined('BOOTSTRAP') or die('Access denied');
$addon_name = 'ab__advanced_sitemap';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (
Registry::get('runtime.mode') == 'update'
&& isset($_REQUEST['addon'], $_REQUEST['ab__as_locales'])
&& $_REQUEST['addon'] === $addon_name
) {
$locales = $_REQUEST['ab__as_locales'];
$storefront_id = empty($_REQUEST['storefront_id']) ? 0 : (int) $_REQUEST['storefront_id'];
if (fn_allowed_for('ULTIMATE')) {
$storefront_id = 0;
if (fn_get_runtime_company_id()) {
$storefront_id = StorefrontProvider::getStorefront()->storefront_id;
}
}
$settings_manager = Settings::instance(['storefront_id' => $storefront_id]);
$settings_manager->updateValue('languages_locales', fn_ab__as_encode_languages_locales_settings($locales), $addon_name);
$addon_settings_id = (int) $settings_manager->getId('languages_locales', $addon_name);
if (!empty($_REQUEST['update_all_vendors']['ab__as_locales']) && $addon_settings_id) {
$settings_manager->resetAllOverrides($addon_settings_id);
}
}
return [CONTROLLER_STATUS_OK];
}
if (
Registry::get('runtime.mode') === 'update'
&& isset($_REQUEST['addon'])
&& $_REQUEST['addon'] === $addon_name
) {
$storefront_id = empty($_REQUEST['storefront_id']) ? 0 : (int) $_REQUEST['storefront_id'];
if (fn_allowed_for('ULTIMATE')) {
$storefront_id = 0;
if (fn_get_runtime_company_id()) {
$storefront_id = StorefrontProvider::getStorefront()->storefront_id;
}
}
$storefront = null;
if ($storefront_id) {

$storefront = StorefrontProvider::getRepository()->findById($storefront_id);
}
$settings_manager = Settings::instance(['storefront_id' => $storefront_id]);
$storefront_locales = $settings_manager->getValue('languages_locales', $addon_name);
$storefront_locales = fn_ab__as_decode_languages_locales_settings($storefront_locales);
$languages = fn_ab__as_get_available_languages($storefront);
$locales = fn_ab__as_get_languages_locales($languages, $storefront_locales, true);

$view = Tygh::$app['view'];
$view->assign('ab__as_locales', $locales);
$view->assign('ab__as_languages', $languages);
}
