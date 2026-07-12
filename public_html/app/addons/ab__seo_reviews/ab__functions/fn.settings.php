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
use Tygh\Settings;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__sr_get_settings($setting_name = '')
{
$storefront = Tygh::$app['storefront'];
$company_id = fn_allowed_for('ULTIMATE') ? $storefront->getCompanyIds()[0] : 0;
$settings = Settings::instance([
'company_id' => $company_id,
'storefront_id' => $storefront->storefront_id,
])->getValues('ab__seo_reviews', Settings::ADDON_SECTION, false);
$settings['default_seo_names'] = empty($settings['default_seo_names']) ? [] : unserialize($settings['default_seo_names']);
return empty($setting_name) ? $settings : $settings[$setting_name];
}

function fn_ab__update_default_seo_names($default_seo_names)
{
Settings::instance()->updateValue('default_seo_names', serialize($default_seo_names), 'ab__seo_reviews');
}
