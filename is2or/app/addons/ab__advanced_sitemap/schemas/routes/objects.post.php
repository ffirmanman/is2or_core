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
use Tygh\Enum\ObjectStatuses;
use Tygh\Registry;
defined('BOOTSTRAP') or die('Access denied');
$additional_dir = Registry::get('addons.ab__advanced_sitemap.xml_sitemap_directory');
$additional_dir = fn_ab__as_normalize_sitemap_additional_dir($additional_dir);
$schema[$additional_dir . 'sitemap.xml'] = [
'dispatch' => 'ab__advanced_sitemap.sitemap',
];
$schema[$additional_dir . 'products[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.products',
];
$schema[$additional_dir . 'categories[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.categories',
];
$schema[$additional_dir . 'feature_variants[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.feature_variants',
];
$schema[$additional_dir . 'pages[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.pages',
];
$schema[$additional_dir . 'custom_links[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.custom_links',
];
$schema[$additional_dir . 'other_links[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.other_links',
];
$schema[$additional_dir . 'companies[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.companies',
];
$schema[$additional_dir . 'images[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.sitemap_image',
];
if (Registry::get('addons.blog.status') == ObjectStatuses::ACTIVE) {
$schema[$additional_dir . 'blog[i:page]?.xml'] = [
'dispatch' => 'ab__advanced_sitemap.blog',
];
}
return $schema;
