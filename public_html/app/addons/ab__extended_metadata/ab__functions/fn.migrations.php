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

function fn_ab__extended_metadata_install()
{
fn_ab__emd_install_add_db_fields();
fn_ab__emd_from_1_9_to_2_0_0_settings();
fn_ab__emd_from_1_9_to_2_0_0_patterns();
}

function fn_ab__emd_install_add_db_fields()
{
$columns = db_get_fields('DESCRIBE ?:product_descriptions');
if (!in_array('ab__emd_alternative_name', $columns)) {
db_query('ALTER TABLE ?:product_descriptions ADD COLUMN `ab__emd_alternative_name` varchar(255) NOT NULL DEFAULT \'\'');
}
$columns = db_get_fields('DESCRIBE ?:category_descriptions');
if (!in_array('ab__emd_alternative_name', $columns)) {
db_query('ALTER TABLE ?:category_descriptions ADD COLUMN `ab__emd_alternative_name` varchar(255) NOT NULL DEFAULT \'\'');
}
$columns = db_get_fields('DESCRIBE ?:page_descriptions');
if (!in_array('ab__emd_alternative_name', $columns)) {
db_query('ALTER TABLE ?:page_descriptions ADD COLUMN `ab__emd_alternative_name` varchar(255) NOT NULL DEFAULT \'\'');
}
$columns = db_get_fields('DESCRIBE ?:product_feature_variant_descriptions');
if (!in_array('ab__emd_alternative_name', $columns)) {
db_query('ALTER TABLE ?:product_feature_variant_descriptions ADD COLUMN `ab__emd_alternative_name` varchar(255) NOT NULL DEFAULT \'\'');
}
}

function fn_ab__emd_from_1_9_to_2_0_0_settings()
{
$columns = db_get_fields('DESCRIBE ?:ab__emd_settings');
if (!in_array('name', $columns)) {
return;
}
db_query('ALTER TABLE `?:ab__emd_settings` CHANGE `name` `dispatch` varchar(50) NOT NULL');
$settings = db_get_array('SELECT * FROM ?:ab__emd_settings');
if (empty($settings)) {
return;
}
$new_names = [
'action' => 'action',
'title' => 'page_title',
'description' => 'meta_description',
'keywords' => 'meta_keywords',
];
$dispatch_by_object = [
'category' => 'categories.view',
'feature' => 'product_features.view',
'page' => 'pages.view',
'product' => 'products.view',
];
$default_company_id = Tygh::$app['storefront']->storefront_id;
$rebuilt_items = [];
foreach ($settings as $setting) {
list($object, $name) = explode('_', $setting['dispatch']);
if (empty($new_names[$name]) || empty($dispatch_by_object[$object])) {
continue;
}
if (empty($setting['company_id'])) {
$setting['company_id'] = $default_company_id;
}
$rebuilt_items[$setting['company_id']][$setting['lang_code']][$dispatch_by_object[$object]][$new_names[$name]] = $setting['value'];
}
if (!empty($rebuilt_items)) {
db_query('DELETE FROM ?:ab__emd_settings WHERE 1');
foreach ($rebuilt_items as $company_id => $c_data) {
foreach ($c_data as $lang_code => $l_data) {
foreach ($l_data as $dispatch => $settings) {
db_replace_into('ab__emd_settings', [
'dispatch' => $dispatch,
'value' => serialize($settings),
'company_id' => $company_id,
'lang_code' => $lang_code,
]);
}
}
}
}
}

function fn_ab__emd_from_1_9_to_2_0_0_patterns()
{
if (fn_allowed_for('MULTIVENDOR')) {
db_query('UPDATE ?:ab__emd_patterns SET company_id = ?i WHERE company_id = 0', Tygh::$app['storefront']->storefront_id);
}
}