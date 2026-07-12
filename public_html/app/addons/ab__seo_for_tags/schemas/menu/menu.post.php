<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
$schema['central']['ab__addons']['items']['ab__seo_for_tags'] = [
'href' => 'ab__sft.help',
'position' => 1000,
'subitems' => [
'ab__sft.settings' => [
'href' => 'addons.update&addon=ab__seo_for_tags',
'alt' => 'addons.update&addon=ab__seo_for_tags',
'position' => 0,
],
'ab__sft.generating_manage' => [
'href' => 'ab__sft.generating_manage',
'alt' => 'ab__sft.generating_manage',
'position' => 10,
],
'ab__sft.layouts' => [
'href' => 'ab__sft.layouts',
'alt' => 'ab__sft.layouts',
'position' => 30,
],
'ab__sft.help' => [
'href' => 'ab__sft.help',
'alt' => 'ab__sft.help',
'position' => 1000,
],
],
];
if (fn_allowed_for('MULTIVENDOR') && !Registry::get('runtime.company_id') || fn_allowed_for('ULTIMATE')) {
$schema['top']['administration']['items']['export_data']['subitems']['ab__seo_for_tags.export'] = [
'href' => 'exim.export?section=ab__seo_for_tags',
'alt' => 'exim.export?section=ab__seo_for_tags',
'position' => 1,
];
$schema['top']['administration']['items']['import_data']['subitems']['ab__seo_for_tags.import'] = [
'href' => 'exim.import?section=ab__seo_for_tags',
'alt' => 'exim.import?section=ab__seo_for_tags',
'position' => 1,
];
}
return $schema;
