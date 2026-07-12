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
use Tygh\Languages\Languages;
use Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes;
use Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_ab__is_migrate_from_v300_to_v301()
{
$storefronts = db_get_fields('SELECT DISTINCT(?:storefronts.storefront_id) FROM ?:storefronts LEFT JOIN ?:ab__is_attributes ON ?:storefronts.storefront_id = ?:ab__is_attributes.storefront_id AND ?:ab__is_attributes.attribute_type = "N" WHERE ?:ab__is_attributes.storefront_id IS NULL');
if (!empty($storefronts)) {
foreach ($storefronts as $storefront) {
$attribute_data = [
'is_id' => 0,
];
foreach (Languages::getAll() as $lang_code => $v) {
$attribute_data['text'] = trim(__('ab__is.image_number.default', [], $lang_code));
$attribute_data['is_id'] = fn_ab__is_update_object_attribute($attribute_data, ObjectTypes::PRODUCT, AttributeTypes::IMAGE_NUMBER, $storefront, $lang_code);
}
}
fn_set_notification('N', __('notice'), __('ab__is.upgrade_notifications.3.0.1', ['[href]' => fn_url('ab__is.manage_attrs')]));
}
}

function fn_ab__is_add_default_placeholders()
{
$storefronts = db_get_fields('SELECT DISTINCT(?:storefronts.storefront_id) FROM ?:storefronts');
foreach (Languages::getAll() as $lang_code => $v) {
foreach ($storefronts as $storefront_id) {
foreach (ObjectTypes::getAll() as $object_type) {
foreach (AttributeTypes::getAll() as $attr_type) {
$is_exist = (bool)db_get_field('SELECT EXISTS(
SELECT 1
FROM ?:ab__is_attributes AS aia
INNER JOIN ?:ab__is_attribute_descriptions AS aiad ON aia.is_id = aiad.is_id AND aiad.lang_code = ?s
WHERE attribute_type = ?s
AND object_type = ?s
AND storefront_id = ?i
LIMIT 1)', $lang_code, $attr_type, $object_type, $storefront_id);
if ($is_exist === false) {
$attribute_data = [
'is_id' => 0,
'prefix' => '',
'suffix' => '',
];
if (in_array($lang_code, ['ru', 'uk', 'en'])) {
$attribute_data['text'] = __('ab__is.text.' . $object_type, [], $lang_code);
} else {
$attribute_data['text'] = __('ab__is.text.' . $object_type, [], 'en');
}
fn_ab__is_update_object_attribute($attribute_data, $object_type, $attr_type, $storefront_id, $lang_code);
}
}
}
}
}
}
