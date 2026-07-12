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
use Tygh\ABSF;
use Tygh\Registry;
function fn_exim_absf_get_category_name($key, $lang_code)
{
return fn_get_category_name(db_get_field('SELECT IFNULL(category_id, 0) FROM ?:ab__sf_names WHERE sf_id = ?i', $key), $lang_code);
}
function fn_exim_absf_get_filter_name($key, $lang_code)
{
$hash = db_get_field(
'SELECT IFNULL(GROUP_CONCAT(feature_value ORDER BY position SEPARATOR \'_\'), \'\') ' .
'FROM ?:ab__sf_features ' .
'WHERE sf_id = ?i',
$key
);
return ABSF::get_filter_list($hash, $lang_code, ' + ');
}
function fn_exim_absf_get_variants($key, $lang_code)
{
$hash = db_get_field(
'SELECT IFNULL(GROUP_CONCAT(feature_value ORDER BY position SEPARATOR \'_\'), \'\') ' .
'FROM ?:ab__sf_features ' .
'WHERE sf_id = ?i',
$key
);
$variant = ABSF::get_variant_list($hash, $lang_code, ' + ');
return $variant;
}
function fn_exim_absf_is_empty($that)
{
if (strlen(trim($that))) {
return trim($that);
}
return '';
}
function fn_exim_absf_set_name_company($id, $company_name)
{
return fn_exim_set_company('ab__sf_names', 'sf_id', $id, $company_name);
}
function fn_exim_absf_get_url($key, $lang_code)
{
$data = db_get_row(
'SELECT
GROUP_CONCAT(f.feature_value ORDER BY f.position SEPARATOR \'' . ABSF_HASH_SEPARATE . '\') AS features_hash,
n.category_id,
n.company_id
FROM ?:ab__sf_names AS n
LEFT JOIN ?:ab__sf_features AS f ON n.sf_id = f.sf_id
WHERE n.sf_id = ?i
GROUP BY n.sf_id',
$key
);
$company = '';
if (fn_allowed_for('ULTIMATE') && !Registry::get('runtime.simple_ultimate') && !Registry::get('runtime.company_id')) {
$company = '&company_id=' . $data['company_id'];
}
$url = fn_url('categories.view&category_id=' . $data['category_id'] . '&features_hash=' . $data['features_hash'] . $company, 'C', 'current', $lang_code);
return $url;
}
function fn_exim_absf_total_products($id, $lang_code)
{
static $data;
if (!isset($data['ab__seo_name'][$id])) {
$data['ab__seo_name'][$id] = ABSF::get_names(['sf_id' => [$id]], 0, $lang_code)[0][$id];
}
$_auth = Tygh::$app['session']['auth'];
Tygh::$app['session']['auth']['usergroup_ids'] = [0, 1];
list(, $search) = fn_get_products([
'area' => 'C',
'cid' => $data['ab__seo_name'][$id]['category_id'],
'features_hash' => $data['ab__seo_name'][$id]['features_hash'],
'load_products_extra_data' => false,
'subcats' => true,
]);
Tygh::$app['session']['auth'] = $_auth;
return isset($search['total_items']) ? $search['total_items'] : '';
}
function fn_exim_absf_h1($key, $lang_code)
{
static $data;
if (!isset($data['ab__seo_name'][$key])) {
$data['ab__seo_name'][$key] = ABSF::get_names(['sf_id' => (array) $key], 0, $lang_code)[0][$key];
}
$ab__seo_name = $data['ab__seo_name'][$key];
if (!isset($data['category'][$key])) {
$data['category'][$key] = fn_get_category_data($ab__seo_name['category_id'], $lang_code, '', false)['category'];
}
$category = $data['category'][$key];
if (!isset($data['variant'][$key])) {
$data['variant'][$key] = ABSF::get_variant_list($ab__seo_name['features_hash'], $lang_code, ' ');
}
$variant = $data['variant'][$key];
if (!isset($data['filter'][$key])) {
$data['filter'][$key] = ABSF::get_filter_list($ab__seo_name['features_hash'], $lang_code, ' ', true);
}
$filter = $data['filter'][$key];
$ab__custom_category_h1 = '';
return ABSF::str_replace($ab__seo_name['tag_h1'], $category, $filter, $variant, $ab__custom_category_h1);
}
function fn_exim_absf_get_features_hash($sf_id)
{
return db_get_field("
SELECT GROUP_CONCAT(DISTINCT f.feature_value ORDER BY f.position SEPARATOR '_')
FROM ?:ab__sf_features AS f
WHERE f.sf_id = ?i
GROUP BY f.sf_id
HAVING COUNT(DISTINCT f.feature_value) = (
SELECT feature_count FROM ?:ab__sf_names WHERE sf_id = ?i
)
", $sf_id, $sf_id);
}
function fn_exim_absf_set_features_hash($sf_id, $features_hash)
{
if (empty($sf_id) || empty($features_hash)) {
return false;
}
$data_update = [];
$position = 0;
$features = explode(ABSF_HASH_SEPARATE, $features_hash);
foreach ($features as $feature_value) {
$data_update[] = [
'sf_id' => $sf_id,
'feature_value' => $feature_value,
'position' => $position++,
];
}
if (!empty($data_update)) {
db_query('DELETE FROM ?:ab__sf_features WHERE sf_id = ?i', $sf_id);
db_query('INSERT INTO ?:ab__sf_features ?m', $data_update);
db_query('UPDATE ?:ab__sf_names SET feature_count = ?i WHERE sf_id = ?i', count($features), $sf_id);
}
return true;
}
