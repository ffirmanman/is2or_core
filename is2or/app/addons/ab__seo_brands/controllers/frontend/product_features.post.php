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
use Tygh\Enum\ProductFeatures;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
return;
}
if ($mode === 'view_all') {
$params = $_REQUEST;
if (empty($params['filter_id'])) {
return [CONTROLLER_STATUS_NO_PAGE];
}
list($filters) = fn_get_product_filters($params);
if (empty($filters[$params['filter_id']])) {
return [CONTROLLER_STATUS_NO_PAGE];
}
$filter = $filters[$params['filter_id']];
Tygh::$app['view']->assign('breadcrumbs', []);
$breadcrumb = empty($filter['ab__sb_breadcrumb']) ? $filter['filter'] : $filter['ab__sb_breadcrumb'];
fn_add_breadcrumb($breadcrumb);
if (!empty($filter['ab__sb_meta_description']) || !empty($filter['ab__sb_meta_keywords'])) {
Tygh::$app['view']->assign('meta_description', $filter['ab__sb_meta_description']);
Tygh::$app['view']->assign('meta_keywords', $filter['ab__sb_meta_keywords']);
}
if (!empty($filter['ab__sb_page_title'])) {
Tygh::$app['view']->assign('page_title', $filter['ab__sb_page_title']);
}
$variants = Tygh::$app['view']->getTemplateVars('variants');
if (!empty($variants)) {
if ($filter['ab__sb_variants_template'] === 'grid_with_images') {
$variants_ids = $_variants = [];
foreach ($variants as $range) {
foreach ($range as $variant) {
$variants_ids[] = $variant['variant_id'];
$_variants[$variant['variant_id']] = $variant;
}
}
$variants = $_variants;
$images = fn_get_image_pairs($variants_ids, 'feature_variant', 'V', true, true);
foreach ($images as $variant_id => $image) {
if (!empty($variants[$variant_id])) {
$variants[$variant_id]['image_pair'] = reset($image);
}
}
$variants = fn_sort_array_by_key($variants, 'position');
} else {
$special_chars = [
'\'',
'"',
'&',
'?',
' ',
'/',
'(',
')',
'[',
']',
'{',
'}',
'%',
'#',
',',
';',
':',
'@',
'№',
'^',
'-',
'=',
'!',
'+',
'$',
'<',
'>',
'*',
];
foreach ($variants as $index => $range) {
if (is_numeric($index)) {
$new_index = '0-9';
} elseif (in_array($index, $special_chars)) {
$new_index = '';
} else {
$new_index = mb_convert_case($index, MB_CASE_UPPER);
}
if ($index !== $new_index) {
$variants[$new_index] = empty($variants[$new_index]) ? $range : array_merge($variants[$new_index], $range);
usort($variants[$new_index], function ($a,$b) {
return strcasecmp($a['variant'], $b['variant']);
});
unset($variants[$index]);
}
}
ksort($variants);
}
Tygh::$app['view']->assign('variants', $variants);
}
Tygh::$app['view']->assign('filter', $filter);
} elseif ($mode === 'view') {
$variant_data = Tygh::$app['view']->getTemplateVars('variant_data');
if (!empty($variant_data)) {
list($filters) = fn_get_product_filters([
'feature_id' => $variant_data['feature_id'],
], 1);
if (!empty($filters) && reset($filters)['feature_type'] === ProductFeatures::EXTENDED) {
$filter = reset($filters);
Tygh::$app['view']->assign('filter', $filter);
Tygh::$app['view']->assign('breadcrumbs', []);
$breadcrumb = empty($filter['ab__sb_breadcrumb']) ? $filter['filter'] : $filter['ab__sb_breadcrumb'];
fn_add_breadcrumb($breadcrumb, fn_url('product_features.view_all?filter_id=' . $filter['filter_id']));
fn_add_breadcrumb($variant_data['variant']);
}
}
}
