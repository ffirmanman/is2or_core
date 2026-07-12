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
namespace Tygh\Addons\Ab_geoPages;
use Tygh\Registry;
class Placeholders
{
private $locationData;
private $templateData;
private static $instances = [];
private $placeholders = [];
private function __construct($object_id, $object_type, $location_id, $template_id = 0)
{
$object_location_settings = fn_ab__gp_get_object_location_settings(['object_id' => $object_id, 'object_type' => $object_type, 'location_id' => $location_id]);
if(!$template_id){
$template_id = (isset($object_location_settings[$location_id]['template_id']) && $object_location_settings[$location_id]['template_id'])
? $object_location_settings[$location_id]['template_id']
: Registry::get('addons.ab__geo_pages.default_template_id');
}
list($templates) = fn_ab__gp_get_templates(['template_id' => $template_id]);
$this->templateData = $templates[$template_id];
$this->locationData = fn_ab__gp_get_location($location_id, CART_LANGUAGE);
$this->initPlaceholders();
}
public function processName($original_value)
{
return $this->processPlaceholders($this->templateData['name'], $original_value);
}
public function processTitle($original_value)
{
return $this->processPlaceholders($this->templateData['title'], $original_value);
}
public function processDescription($original_value)
{
return $this->processPlaceholders($this->templateData['description'], $original_value);
}
public function processMetaDescription($original_value)
{
return $this->processPlaceholders($this->templateData['meta_description'], $original_value);
}
private function processPlaceholders($template, $original_value)
{
if (empty($template)) {
return $original_value;
}
$this->setPlaceholders(['[original_value]'=>$original_value]);
$placeholders = $this->getPlaceholders();
$processed_data = str_replace(array_keys($placeholders), array_values($placeholders), $template);
if (function_exists('fn_ab__emd_replace_placeholders')) {
$processed_data = fn_ab__emd_replace_placeholders($processed_data, 'categories.view');
}
return $processed_data;
}
private function getPlaceholders(){
return $this->placeholders;
}
public function setPlaceholders($placeholders){
$this->placeholders = array_merge($this->placeholders,$placeholders);
}
private function initPlaceholders(){
$this->placeholders = [
'[original_value]' => '',
'[name]' => '',
'[location]' => $this->locationData['location'],
'[location_form_1]' => $this->locationData['location_form_1'],
'[location_form_2]' => $this->locationData['location_form_2'],
'[location_form_3]' => $this->locationData['location_form_3'],
'[location_form_4]' => $this->locationData['location_form_4'],
'[location_form_5]' => $this->locationData['location_form_5'],
'[location_form_6]' => $this->locationData['location_form_6'],
'[location_form_7]' => $this->locationData['location_form_7'],
];
}
public static function instance($object_id = 0, $object_type = 'category', $location_id = 0, $template_id = 0)
{
$instance_key = $object_id.$object_type.$location_id.$template_id;
if(!isset( self::$instances[$instance_key])){
self::$instances[$instance_key] = new Placeholders($object_id, $object_type, $location_id, $template_id);
}
return self::$instances[$instance_key];
}
}