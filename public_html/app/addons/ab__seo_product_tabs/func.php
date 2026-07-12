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
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\SiteArea;
use Tygh\Enum\YesNo;
use Tygh\Registry;
use Tygh\Tools\SecurityHelper;
defined('BOOTSTRAP') or die('Access denied');
foreach (glob(Registry::get('config.dir.addons') . '/ab__seo_product_tabs/functions/fn.*.php') as $functions) {
require_once $functions;
}
function fn_ab__spt_secure_tab_custom_fields($tab_data)
{
SecurityHelper::sanitizeObjectData('ab__spt', $tab_data);
return $tab_data;
}
function fn_ab__spt_update_tabs($header, $id, $lang_code)
{
db_query('UPDATE ?:product_tabs_descriptions
SET ab__spt_tab_header = ?s
WHERE tab_id = ?i AND lang_code = ?s', $header, $id, $lang_code);
}

function fn_ab__spt_generate_tab_name($params)
{
$product = $params['product'];
$has_opened_color = strpos($params['tab']['ab__spt_tab_header'], '[<]');
$has_closed_color = strpos($params['tab']['ab__spt_tab_header'], '[>]');
if ($has_opened_color === false && $has_closed_color !== false) {
$params['tab']['ab__spt_tab_header'] = str_replace('[>]', '', $params['tab']['ab__spt_tab_header']);
} elseif ($has_opened_color !== false && $has_closed_color === false) {
$params['tab']['ab__spt_tab_header'] .= '[>]';
}
$features = $features_placeholders = [];
preg_match_all('/\[(feature_)[0-9]{1,}\]/', $params['tab']['ab__spt_tab_header'], $features);
foreach ($features[0] as $feature_placeholder) {
$feature_id = (int) explode('_', $feature_placeholder)[1];
$feature = [];
if (!empty($product['header_features'][$feature_id])) {
$feature = $product['header_features'][$feature_id];
} elseif (!empty($product['product_features'][$feature_id]) && empty($product['product_features'][$feature_id]['subfeatures'])) {
$feature = $product['product_features'][$feature_id];
} elseif (!empty($product['product_features'])) {
foreach ($product['product_features'] as $product_feature) {
if (!empty($product_feature['subfeatures']) && !empty($product_feature['subfeatures'][$feature_id])) {
$feature = $product_feature['subfeatures'][$feature_id];
}
}
}
if (!empty($feature['variants'])) {
$feature_val = implode(', ', array_column($feature['variants'], 'variant'));
} elseif (!empty($feature['variant'])) {
$feature_val = $feature['variant'];
} else {
$feature_val = $feature['value'];
}
$features_placeholders[$feature_placeholder] = empty($feature_val) ? '' : $feature_val;
}
$placeholders = array_merge([
'[product]' => !empty($product['ab__spt_short_name']) ? $product['ab__spt_short_name'] : $product['product'],
'[product_code]' => $product['product_code'],
'[tab_name]' => $params['tab']['name'],
'[<]' => '<span class="ab-spt-grayscale">',
'[>]' => '</span>',
], $features_placeholders);
return preg_replace('|\s+|', ' ', str_replace(array_keys($placeholders), $placeholders, $params['tab']['ab__spt_tab_header']));
}

function fn_ab__spt_get_setting_status_str($setting_status = '')
{
return __(in_array($setting_status, [ObjectStatuses::ACTIVE, YesNo::YES]) ? 'active' : 'disabled');
}

function fn_ab__spt_is_allowed_tabs_panel_for_hook($product_id, $hook)
{
$theme_name = fn_get_theme_path('[theme]', SiteArea::STOREFRONT);
$template = Registry::ifGet('runtime.ab__spt.product_details_templates.' . $product_id, '');
if (empty($template)) {
$template = fn_get_product_details_view($product_id);
}
static $places;
if (is_null($places)) {
$places = fn_get_schema('ab__seo_product_tabs', 'hook_places');
}
if (isset($places[$hook][$theme_name][$template]) && is_bool($places[$hook][$theme_name][$template])) {
return $places[$hook][$theme_name][$template];
} elseif (isset($places[$hook][$theme_name]['default'])) {
return $places[$hook][$theme_name]['default'];
} elseif (isset($places[$hook]['default'])) {
return $places[$hook]['default'];
}
return true;
}
