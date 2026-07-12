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
use Tygh\Registry;
function fn_ab__emd_update_patterns($data, $company_id = 0, $lang_code = DESCR_SL)
{
if (empty($data)) {
return false;
}
foreach ($data as $object => $patterns) {
$old_patterns = db_get_hash_array('SELECT pattern_id FROM ?:ab__emd_patterns WHERE object = ?s AND company_id = ?i', 'pattern_id', $object, $company_id);
foreach ($patterns as $pattern_id => $pattern) {
if (empty($pattern['name'])) {
continue;
}
if (!empty($old_patterns[$pattern_id])) {
db_query('UPDATE ?:ab__emd_patterns_descriptions SET ?u WHERE pattern_id = ?i AND lang_code = ?s', $pattern, $pattern_id, $lang_code);
unset($old_patterns[$pattern_id]);
} else {
$pattern['object'] = $object;
$pattern['company_id'] = $company_id;
$pattern['pattern_id'] = db_query('REPLACE INTO ?:ab__emd_patterns ?e', $pattern);
foreach (Languages::getAll() as $pattern['lang_code'] => $v) {
db_query('REPLACE INTO ?:ab__emd_patterns_descriptions ?e', $pattern);
}
}
}
$old_ids = array_keys($old_patterns);
db_query('DELETE FROM ?:ab__emd_patterns WHERE pattern_id IN (?n)', $old_ids);
db_query('DELETE FROM ?:ab__emd_patterns_descriptions WHERE pattern_id IN (?n)', $old_ids);
}
return true;
}
function fn_ab__emd_get_patterns($params = [], $lang_code = CART_LANGUAGE)
{
$company_id = fn_ab__emd_get_active_company_id();
$condition = '';
if (!empty($params['object'])) {
$condition .= db_quote(' AND p.object = ?s', $params['object']);
}
if (!empty($params['pattern_id'])) {
$condition .= db_quote(' AND p.pattern_id = ?i', $params['pattern_id']);
}
$patterns = db_get_hash_multi_array('SELECT p.*, pd.* FROM ?:ab__emd_patterns AS p
INNER JOIN ?:ab__emd_patterns_descriptions AS pd ON p.pattern_id = pd.pattern_id AND pd.lang_code = ?s
WHERE p.company_id = ?i ?p', ['object', 'pattern_id'], $lang_code, $company_id, $condition);
if (empty($patterns)) {
return [];
}
if (!empty($params['object'])) {
return $patterns[$params['object']];
}
if (!empty($params['pattern_id'])) {
$patterns = reset($patterns);
return $patterns[$params['pattern_id']];
}
return $patterns;
}
function fn_ab__extended_metadata_update_category_post($category_data, $category_id, $lang_code)
{
if (!fn_check_view_permissions('ab__emd.update', 'POST')) {
return;
}
if (isset($category_data['ab__emd__category_pattern_id']) && isset($category_data['ab__emd__products_pattern_id'])) {
db_replace_into('ab__emd_categories_patterns', [
'category_id' => $category_id,
'category_pattern_id' => $category_data['ab__emd__category_pattern_id'],
'products_pattern_id' => $category_data['ab__emd__products_pattern_id'],
]);
}
}
function fn_ab__extended_metadata_get_category_data($category_id, &$field_list, &$join, $lang_code, $conditions)
{
$field_list .= ', IFNULL(ab__emd_cp.category_pattern_id, 0) as ab__emd__category_pattern_id';
$field_list .= ', IFNULL(ab__emd_cp.products_pattern_id, 0) as ab__emd__products_pattern_id';
$join .= ' LEFT JOIN ?:ab__emd_categories_patterns AS ab__emd_cp ON ab__emd_cp.category_id = ?:categories.category_id';
}
function fn_ab__extended_metadata_delete_category_post($category_id, $recurse, $category_ids)
{
db_query('DELETE FROM ?:ab__emd_categories_patterns WHERE category_id IN (?n)', $category_ids);
}
