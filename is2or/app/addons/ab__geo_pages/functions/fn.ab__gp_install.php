<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
function fn_ab__geo_pages_install()
{
$total_templates = db_get_field('SELECT COUNT(*) FROM ?:ab__gp_templates');
$total_locations = db_get_field('SELECT COUNT(*) FROM ?:ab__gp_locations');
if (!$total_locations && !$total_templates) {
$template_data = [
'is_global' => 'Y',
'object_id' => 0,
'object_type' => '',
'template_name' => 'AB: Demo template',
'name' => '[original_value] in [location]',
'description' => '<p>[original_value] in [location]</p>',
'title' => '[original_value] in [location]',
'meta_description' => '[original_value] in [location]',
];
$template_id = fn_ab__gp_update_template($template_data);
$settings = Settings::instance();
foreach (['default_template_id', 'index_page_template_id'] as $item) {
$id = $settings->getId($item, 'ab__geo_pages');
$settings->updateValueById($id, $template_id);
$settings->resetAllOverrides($id);
}
}
}
