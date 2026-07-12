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
use Tygh\Addons\Ab_geoPages\Placeholders;
use Tygh\Registry;
function fn_ab__gp_get_other_locations_block()
{
$controller = Registry::get('runtime.controller');
$object_id = $object_type = 0;
$url_base = '';
switch ($controller) {
case 'categories':
$category_data = Tygh::$app['view']->getTemplateVars('category_data');
$object_id = $category_data['category_id'];
$object_type = 'category';
$url_base = 'categories.view?category_id=' . $object_id;
if (!empty($_SESSION['absf_page_id'])) {
$object_id = $_SESSION['absf_page_id'];
$object_type = 'ab__seo_filter';
$features_hash = db_get_field('SELECT features_hash FROM ?:ab__sf_names WHERE sf_id = ?i', $object_id);
$url_base .= '&features_hash=' . $features_hash;
}
break;
}
list($locations) = fn_ab__gp_get_locations(['status' => 'A']);
if ($controller !== 'index') {
foreach ($locations as $index => $location) {
if (!fn_ab__gp_is_location_available_for_object($location['location_id'], $object_id, $object_type)) {
unset($locations[$index]);
}
}
}
$current_location = fn_ab__gp_is_location_page();
if ($current_location) {
unset($locations[$current_location]);
$general_location = [
'location_id' => 0,
'location' => __('ab__gp.default_location'),
];
$locations[] = $general_location;
}
return ['url_base' => $url_base, 'locations' => $locations];
}
function fn_ab__gp_modify_h1_for_location($text)
{
$location_id = fn_ab__gp_is_location_page();
if ($location_id && $location_data = fn_ab__gp_get_location($location_id)) {
$index_template_id = Registry::get('addons.ab__geo_pages.index_page_template_id');
$placeholders = Placeholders::instance(0, '', $location_id, $index_template_id);
$placeholders->setPlaceholders(['[name]' => '']);
$text = $placeholders->processName($text);
}
return $text;
}
