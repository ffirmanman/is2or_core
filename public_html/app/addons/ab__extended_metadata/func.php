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
use Tygh\Registry;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
foreach (glob(Registry::get('config.dir.addons') . '/ab__extended_metadata/ab__functions/fn.*.php') as $functions) {
require_once $functions;
}

function fn_ab__extended_metadata_dispatch_before_display()
{
if (AREA === 'C' && !empty($_REQUEST['dispatch'])) {
$dispatch = $_REQUEST['dispatch'];
$meta_tags_list = [
'page_title',
'meta_description',
'meta_keywords',
];
$schema = fn_get_schema('ab__extended_metadata', 'placeholders');
if (!empty($schema[$dispatch])) {
$view = Tygh::$app['view'];
$settings = fn_ab__emd_get_settings();
$used_custom_pattern = Registry::get('ab__extended_metadata.used_custom_pattern');
foreach ($meta_tags_list as $meta_tag) {
$value = $view->getTemplateVars($meta_tag);
if (!empty($settings[$dispatch])
&& empty($used_custom_pattern)
&& (!isset($settings[$dispatch][$meta_tag.'_status']) || $settings[$dispatch][$meta_tag.'_status'] === 'Y')
&& ($settings[$dispatch]['action'] == 'override_all' || ($settings[$dispatch]['action'] == 'override_empty' && empty($value)))) {
$value = $settings[$dispatch][$meta_tag];
}
$view->assign($meta_tag, fn_ab__emd_replace_placeholders($value, $dispatch));
}
}
}
}

function fn_ab__emd_replace_placeholders($string, $dispatch)
{
static $replacements = [];
static $schema = null;
if ($schema === null) {
$main_schema = fn_get_schema('ab__extended_metadata', 'placeholders');
$schema = empty($main_schema[$dispatch]) ? [] : $main_schema[$dispatch];
}
if (empty($schema) || empty($string)) {
return $string;
}
foreach ($schema as $placeholder => $ph_data) {
if (!empty($replacements[$placeholder])) {
continue;
}
$_pattern = '/\\' . substr($placeholder, 0, -1) . '\]/';
if (!empty($ph_data['multi_case'])) {
$_pattern = str_replace('\]/', '(?:_lower|_first_lower)?\]' . '/i', $_pattern);
}
if ($ph_data['type'] === 'price') {
$_pattern = str_replace('\]/', '(?:_noseparate)?(?:_nocurrency)?\]' . '/i', $_pattern);
}

fn_set_hook('ab__emd_replace_placeholders_pattern', $string, $dispatch, $_pattern, $placeholder, $ph_data);
if (preg_match_all($_pattern, $string, $m, PREG_SET_ORDER)) {
$value = '';
if ($ph_data['type'] === 'field') {
$value = fn_ab__emd_get_object_field_value($ph_data['object'], $ph_data['field']);
if (empty($value) && !empty($ph_data['default_field'])) {
$value = fn_ab__emd_get_object_field_value($ph_data['object'], $ph_data['default_field']);
}
if (!empty($value) && !empty($ph_data['modify_function']) && is_callable($ph_data['modify_function'])) {
$value = call_user_func($ph_data['modify_function'], $value);
}
} elseif ($ph_data['type'] === 'function') {
if (!empty($ph_data['function'])) {
if (is_array($ph_data['function'])) {
$function = array_shift($ph_data['function']);
$args = $ph_data['function'];
} else {
$function = $ph_data['function'];
$args = [];
}
if (is_callable($function)) {
$value = call_user_func_array($function, $args);
}
}
} elseif ($ph_data['type'] === 'product_feature') {
$features = fn_ab__emd_get_product_features();
foreach ($m as $match) {
if (empty($match[2])) {
continue;
}
$value = '';
if (!empty($features[$match[2]]) && !empty($features[$match[2]][$match[1]])) {
$value = $features[$match[2]][$match[1]];
}
$replacements[$match[0]] = empty($value) ? '' : str_replace('{f' . $match[1] . '_' . $match[2] . '}', $value, mb_substr($match[0], 1, -1));
}
} elseif ($ph_data['type'] === 'price') {
$price = fn_ab__emd_get_object_field_value($ph_data['object'], $ph_data['field']);
if (empty($price)) {
$replacements[$placeholder] = '';
$_tmp = str_replace(']', '_prefix]', $placeholder);
$replacements[$_tmp] = '';
$_tmp = str_replace(']', '_suffix]', $placeholder);
$replacements[$_tmp] = '';
$_tmp = str_replace(']', '_noseparate]', $placeholder);
$replacements[$_tmp] = '';
$_tmp = str_replace(']', '_nocurrency]', $placeholder);
$replacements[$_tmp] = '';
$_tmp = str_replace(']', '_noseparate_nocurrency]', $placeholder);
$replacements[$_tmp] = '';
} else {
$currency = Registry::get('currencies.' . CART_SECONDARY_CURRENCY);
if (CART_PRIMARY_CURRENCY !== CART_SECONDARY_CURRENCY) {
$price = fn_format_price_by_currency($price, CART_PRIMARY_CURRENCY, CART_SECONDARY_CURRENCY);
}
$_tmp = str_replace(']', '_prefix]', $placeholder);
$replacements[$_tmp] = __('ab__em.' . substr($placeholder, 1, -1) . '_prefix');
$_tmp = str_replace(']', '_suffix]', $placeholder);
$replacements[$_tmp] = __('ab__em.' . substr($placeholder, 1, -1) . '_suffix');
$no_currency = str_replace(']', '_nocurrency]', $placeholder);
$replacements[$no_currency] = fn_format_rate_value($price, 'F', $currency['decimals'], $currency['decimals_separator'], $currency['thousands_separator']);
$no_separate_no_currency = str_replace(']', '_noseparate_nocurrency]', $placeholder);
$replacements[$no_separate_no_currency] = fn_format_rate_value($price, 'F', $currency['decimals'], $currency['decimals_separator'], '');
if (!empty($currency['after']) && $currency['after'] == 'Y') {
$value = $replacements[$no_currency] . $currency['symbol'];
$_tmp = str_replace(']', '_noseparate]', $placeholder);
$replacements[$_tmp] = $replacements[$no_separate_no_currency] . $currency['symbol'];
} else {
$value = $currency['symbol'] . $replacements[$no_currency];
$_tmp = str_replace(']', '_noseparate]', $placeholder);
$replacements[$_tmp] = $currency['symbol'] . $replacements[$no_separate_no_currency];
}
}
} else {

fn_set_hook('ab__emd_replace_placeholders_custom_type', $string, $dispatch, $value, $m, $placeholder, $ph_data);
}
if (is_array($value)) {
$value = '';
}
if ($ph_data['type'] !== 'product_feature') {
$replacements[$placeholder] = $value;
}
if (!empty($ph_data['multi_case'])) {
$_tmp = str_replace(']', '_lower]', $placeholder);
$replacements[$_tmp] = mb_strtolower($value);
$_tmp = strtoupper($placeholder);
$replacements[$_tmp] = mb_strtoupper($value);
$_tmp = strtoupper(fn_substr($placeholder, 0, 2)) . strtolower(fn_substr($placeholder, 2));
$replacements[$_tmp] = mb_strtoupper(fn_substr($value, 0, 1)) . mb_strtolower(fn_substr($value, 1));
$_tmp = str_replace(']', '_first_lower]', $placeholder);
$replacements[$_tmp] = mb_strtolower(fn_substr($value, 0, 1)) . fn_substr($value, 1);
}
}
}
$result = strtr($string, $replacements);
$result = preg_replace('/\s+/', ' ', $result);
$result = html_entity_decode($result, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');
return $result;
}

function fn_ab__emd_get_active_company_id()
{
if (fn_allowed_for('ULTIMATE')) {
$company_id = fn_get_runtime_company_id();
} else {
$company_id = Tygh::$app['storefront']->storefront_id;
}
return $company_id;
}

function fn_ab__extended_metadata_get_products(&$params, $fields, $sortings, $condition, $join, $sorting, $group_by, $lang_code, $having)
{
if (AREA === 'C' && strpos($join, ' prices ') !== false) {
$schema = fn_get_schema('ab__extended_metadata', 'settings');
$allowed_dispatches = array_keys($schema);
if (!empty($params['dispatch']) && in_array($params['dispatch'], $allowed_dispatches)) {
$prices = db_get_row('SELECT MIN(prices.price) as ab__min_price, MAX(prices.price) as ab__max_price FROM ?:products as products ?p WHERE prices.price > 0 ?p', $join, $condition);
$params = $params + $prices;
}
}
}
function fn_ab__extended_metadata_ab__sf_category_preparing_data_post(&$category_data, &$ab__sf_data, $show_description, $lang_code, &$ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1, $fields)
{
foreach ($fields as $item) {
list($var, $field) = explode(':', $item);
$$var[$field] = fn_ab__emd_replace_placeholders($$var[$field], 'categories.view');
}
}

function fn_ab__emd_generate_tooltip($placeholder, $schema)
{
if (!empty($schema['multi_case'])) {
$cases_tooltips = [];
$replacements = [
'[placeholder]' => $placeholder,
'[field]' => fn_is_lang_var_exists('ab__emd.placeholders.tooltip.' . $placeholder) ? __('ab__emd.placeholders.tooltip.' . $placeholder) : '',
];
$cases_tooltips[] = __('ab__emd.placeholders.tooltip.original', $replacements);
$replacements['[placeholder]'] = str_replace(']', '_lower]', $placeholder);
$cases_tooltips[] = __('ab__emd.placeholders.tooltip.lowercase', $replacements);
$replacements['[placeholder]'] = strtoupper($placeholder);
$cases_tooltips[] = __('ab__emd.placeholders.tooltip.uppercase', $replacements);
$replacements['[placeholder]'] = strtoupper(fn_substr($placeholder, 0, 2)) . strtolower(fn_substr($placeholder, 2));
$cases_tooltips[] = __('ab__emd.placeholders.tooltip.first_upper_case', $replacements);
$replacements['[placeholder]'] = str_replace(']', '_first_lower]', $placeholder);
$cases_tooltips[] = __('ab__emd.placeholders.tooltip.first_lower_case', $replacements);
$tooltip = implode('<br />', $cases_tooltips);
} else {
$tooltip = $placeholder;
}
return $tooltip;
}
