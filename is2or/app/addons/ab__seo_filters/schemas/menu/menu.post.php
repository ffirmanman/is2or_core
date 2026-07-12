<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
use Tygh\Registry;
$schema['central']['ab__addons']['items']['ab__seo_filters'] = [
'attrs' => ['class' => 'is-addon'],
'href' => 'ab__sf_rules.manage',
'position' => 2,
'subitems' => [
'ab__sf.settings' => [
'href' => 'addons.update&addon=ab__seo_filters',
'position' => 0,
],
'ab__sf.rules' => [
'href' => 'ab__sf_rules.manage',
'position' => 10,
'alt' => 'ab__sf_rules.update'
],
'ab__sf.names' => [
'href' => 'ab__sf_names.manage',
'position' => 20,
'alt' => 'ab__sf_names.update'
],
'ab__sf.patterns' => [
'href' => 'ab__sf_patterns.manage',
'position' => 25,
],
'ab__sf.sitemap' => [
'href' => 'ab__sf_sitemap.manage',
'position' => 30,
],
'ab__sf.export' => [
'href' => 'exim.export?section=ab__seo_filters',
'position' => 40,
],
'ab__sf.import' => [
'href' => 'exim.import?section=ab__seo_filters',
'position' => 50,
],
'ab__sf.help' => [
'href' => 'ab__sf.help',
'position' => 10000,
],
],
];
if (fn_allowed_for('MULTIVENDOR') && !Registry::get('runtime.company_id') || fn_allowed_for('ULTIMATE')) {
$schema['top']['administration']['items']['export_data']['subitems']['ab__seo_filters'] = [
'href' => 'exim.export?section=ab__seo_filters',
'position' => 1,
];
$schema['top']['administration']['items']['import_data']['subitems']['ab__seo_filters'] = [
'href' => 'exim.import?section=ab__seo_filters',
'position' => 1,
];
}
return $schema;
