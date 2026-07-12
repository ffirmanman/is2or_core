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
defined('BOOTSTRAP') or die('Access denied');
function fn_settings_variants_addons_ab__advanced_sitemap_products_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_products_priority()
{
return fn_ab__as_get_priority();
}
function fn_settings_variants_addons_ab__advanced_sitemap_categories_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_categories_priority()
{
return fn_ab__as_get_priority();
}
function fn_settings_variants_addons_ab__advanced_sitemap_feature_variants_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_feature_variants_priority()
{
return fn_ab__as_get_priority();
}
function fn_settings_variants_addons_ab__advanced_sitemap_custom_links_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_custom_links_priority()
{
return fn_ab__as_get_priority();
}
function fn_settings_variants_addons_ab__advanced_sitemap_other_links_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_other_links_priority()
{
return fn_ab__as_get_priority();
}
function fn_settings_variants_addons_ab__advanced_sitemap_pages_changefreq()
{
return fn_ab__as_get_frequency();
}
function fn_settings_variants_addons_ab__advanced_sitemap_pages_priority()
{
return fn_ab__as_get_priority();
}

function fn_ab__as_get_frequency()
{
$frequency = [
'do_not_use' => __('do_not_use'),
'always' => __('ab__as.always'),
'hourly' => __('ab__as.hourly'),
'daily' => __('ab__as.daily'),
'weekly' => __('ab__as.weekly'),
'monthly' => __('ab__as.monthly'),
'yearly' => __('ab__as.yearly'),
'never' => __('ab__as.never'),
];
return $frequency;
}

function fn_ab__as_get_priority()
{
$priority = [];
$priority['do_not_use'] = __('do_not_use');
for ($i = 0.1; $i <= 1; $i += 0.1) {
$priority[(string) $i] = (string) $i;
}
return $priority;
}
