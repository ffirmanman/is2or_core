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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
use Tygh\ABSF;
use Tygh\Enum\ABSFConfigs;
use Tygh\Registry;
if ($mode == 'view') {
$show_description = true;
unset( $_SESSION['absf_page_id']);
if (!empty($_REQUEST['page']) && intval($_REQUEST['page']) > 1
|| (!isset($_SESSION['ab__seo_data']) && Registry::get('addons.ab__seo_filters.hide_description_on_hashs_pages') == 'Y' && !empty($_REQUEST['features_hash']))
) {
$show_description = false;
}
if (!$show_description) {
$category_data = Registry::get('view')->getTemplateVars('category_data');
$category_data['description'] = '';
unset($category_data['ab__mcd_descs']);
Registry::get('view')->assign('category_data', $category_data);
}
Tygh::$app['view']->assign('ab__sf_pages_as_subcategories', fn_ab__sf_pages_as_subcategories($_REQUEST['category_id']));
if (Registry::get('addons.ab__seo_filters.hide_subcategories_block_when_active_any_filter') == 'Y'
&& !empty($_REQUEST['features_hash'])) {
Tygh::$app['view']->assign('subcategories', false)->assign('ab__sf_pages_as_subcategories', false);
}
if (defined('AJAX_REQUEST')) {
if (isset($_REQUEST['category_id'])) {
$lang_code = !empty($_REQUEST['sl']) ? $_REQUEST['sl'] : (defined('CART_LANGUAGE') ? CART_LANGUAGE : Registry::get('settings.Appearance.frontend_default_language'));
$ab__seo_name = ABSF::get_name($_REQUEST['category_id'], isset($_REQUEST['features_hash']) ? $_REQUEST['features_hash'] : '', $lang_code, true, ABSFConfigs::get_active_page_states());
$category_data = Registry::get('view')->getTemplateVars('category_data');
if($ab__seo_name && (empty($_REQUEST['page']) || intval($_REQUEST['page']) === 1)){
$show_description = true;
}
$ab__sf_data = [
'tag_h1' => trim($category_data['category']),
'description' => $show_description ? '<div class="ty-wysiwyg-content ty-mb-s">' . trim($category_data['description']) . '</div>' : '',
'page_title' => Registry::get('view')->getTemplateVars('page_title'),
'replace_page_title' => 'N',
];
fn_set_hook('ab__sf_category_preparing_data_pre', $category_data, $ab__sf_data, $show_description, $lang_code);
if (is_array($ab__seo_name) && !empty($ab__seo_name)) {
$_SESSION['absf_page_id'] = $ab__seo_name['sf_id'];
$category = $category_data['category'];
$variant = ABSF::get_variant_list($ab__seo_name['features_hash'], $lang_code, ' ');
$filter = ABSF::get_filter_list($_REQUEST['features_hash'], $lang_code, ' ', true);
$ab__custom_category_h1 = '';
fn_set_hook('ab__sf_category_preparing_data', $category_data, $ab__sf_data, $show_description, $lang_code, $ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1);
$ab__sf_data['short_description'] = ($show_description && !empty($ab__seo_name['short_description'])) ? '<div class="ty-wysiwyg-content ty-mb-s ab__sf_short_desc" style="order: ' . (ABSF_NEW_VERSION_UT2 ? -1 : 1) . ';">' . ABSF::str_replace($ab__seo_name['short_description'], $category, $filter, $variant, $ab__custom_category_h1) . '</div>' : '';
$ab__sf_data['tag_h1'] = ABSF::str_replace($ab__seo_name['tag_h1'], $category, $filter, $variant, $ab__custom_category_h1);
$ab__sf_data['description'] = ($show_description && !empty($ab__seo_name['description'])) ? '<div class="ty-wysiwyg-content ty-mb-s">' . ABSF::str_replace($ab__seo_name['description'], $category, $filter, $variant, $ab__custom_category_h1) . '</div>' : '';
$ab__sf_data['page_title'] = ABSF::str_replace($ab__seo_name['page_title'], $category, $filter, $variant, $ab__custom_category_h1);
$ab__sf_data['breadcrumb'] = ABSF::str_replace($ab__seo_name['breadcrumb'], $category, $filter, $variant, $ab__custom_category_h1);
$category_data['category'] = $ab__sf_data['tag_h1'];

$fields = ['ab__sf_data:tag_h1', 'ab__sf_data:description', 'ab__sf_data:short_description', 'ab__sf_data:page_title', 'ab__sf_data:breadcrumb'];
fn_set_hook('ab__sf_category_preparing_data_post', $category_data, $ab__sf_data, $show_description, $lang_code, $ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1, $fields);
fn_add_breadcrumb($ab__sf_data['breadcrumb'], '');
$ab__sf_data['replace_page_title'] = 'Y';
}
Registry::get('ajax')->assign('ab__sf_data', $ab__sf_data);
}
} elseif (isset($_SESSION['ab__seo_data']) && is_array($_SESSION['ab__seo_data'])) {
$ab__seo_data = $_SESSION['ab__seo_data'];
unset($_SESSION['ab__seo_data']);
$lang_code = $ab__seo_data['lang_code'];
list($ab__seo_name) = ABSF::get_names(['sf_id' => (array) $ab__seo_data['sf_id']], 0, $lang_code);
$ab__seo_name = $ab__seo_name[$ab__seo_data['sf_id']];
$_SESSION['absf_page_id'] = $ab__seo_name['sf_id'];;
$category_data = Registry::get('view')->getTemplateVars('category_data');
$ab__sf_data = [];
$category = $category_data['category'];
$variant = ABSF::get_variant_list($ab__seo_data['features_hash'], $lang_code, ' ');
$filter = ABSF::get_filter_list($_REQUEST['features_hash'], $lang_code, ' ', true);
$ab__custom_category_h1 = '';
fn_set_hook('ab__sf_category_preparing_data', $category_data, $ab__sf_data, $show_description, $lang_code, $ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1);
$category_data['category'] = ABSF::str_replace($ab__seo_name['tag_h1'], $category, $filter, $variant, $ab__custom_category_h1);
$category_data['description'] = $show_description ? ABSF::str_replace($ab__seo_name['description'], $category, $filter, $variant, $ab__custom_category_h1) : '';
$category_data['short_description'] = $show_description ? ABSF::str_replace($ab__seo_name['short_description'], $category, $filter, $variant, $ab__custom_category_h1) : '';
Registry::get('view')->assign('page_title', ABSF::str_replace($ab__seo_name['page_title'], $category, $filter, $variant, $ab__custom_category_h1));
Registry::get('view')->assign('meta_keywords', ABSF::str_replace($ab__seo_name['meta_keywords'], $category, $filter, $variant, $ab__custom_category_h1));
Registry::get('view')->assign('meta_description', ABSF::str_replace($ab__seo_name['meta_description'], $category, $filter, $variant, $ab__custom_category_h1));

Registry::set('ab__extended_metadata.used_custom_pattern', true);
$fields = ['category_data:category', 'category_data:description', 'ab__seo_name:breadcrumb', 'category_data:short_description'];
fn_set_hook('ab__sf_category_preparing_data_post', $category_data, $ab__sf_data, $show_description, $lang_code, $ab__seo_name, $category, $variant, $filter, $ab__custom_category_h1, $fields);
fn_add_breadcrumb(ABSF::str_replace($ab__seo_name['breadcrumb'], $category, $filter, $variant, $ab__custom_category_h1), '');
Registry::get('view')->assign('category_data', $category_data);
$seo_canonical = [];
$search = Registry::get('view')->getTemplateVars('search');
$seo_url = 'categories.view&category_id=' . $_REQUEST['category_id'] . '&features_hash=' . $ab__seo_data['features_hash'];
if ($search['total_items'] > $search['items_per_page']) {
$pagination = fn_generate_pagination($search);
if (!empty($pagination['prev_page'])) {
$seo_canonical['prev'] = fn_url($seo_url . ABSF::canonical_url_page($pagination['prev_page']), 'C', fn_get_storefront_protocol());
}
if (!empty($pagination['next_page'])) {
$seo_canonical['next'] = fn_url($seo_url . ABSF::canonical_url_page($pagination['next_page']), 'C', fn_get_storefront_protocol());
}
}
$seo_canonical['base_url'] = fn_url($seo_url, 'C', fn_get_storefront_protocol());
if($ab__seo_name['canonical_id'] && $ab__seo_data['sf_id'] != $ab__seo_name['canonical_id']){
list($_ab__seo_name) = ABSF::get_names(['sf_id' => (array) $ab__seo_name['canonical_id']], 0, $lang_code);
$_ab__seo_name = $_ab__seo_name[$ab__seo_name['canonical_id']];
$seo_url = 'categories.view&category_id=' . $_ab__seo_name['category_id'] . '&features_hash=' . $_ab__seo_name['features_hash'];
}
$seo_canonical['current'] = fn_url( $seo_url . ABSF::canonical_url_page($search['page']), 'C', fn_get_storefront_protocol());
$seo_canonical['noindex_nofollow'] = ($ab__seo_name['fixed'] == ABSFConfigs::PAGE_STATE_HIDDEN || $ab__seo_name['is_noindex'] == 'Y') ? 'Y' : 'N';
Registry::get('view')->assign('ab__sf_data', $ab__seo_name);
Registry::get('view')->assign('ab__sf_seo_page', 'Y');
Registry::get('view')->assign('ab__sf_seo_canonical', $seo_canonical);
} elseif (!empty($_REQUEST['features_hash'])) {
$seo_filter = ABSF::get_name($_REQUEST['category_id'], $_REQUEST['features_hash'], CART_LANGUAGE, false, ABSFConfigs::get_active_page_states());
if ($seo_filter) {
fn_redirect("categories.view&category_id={$_REQUEST['category_id']}&features_hash={$seo_filter['features_hash']}", false, true);
}
}
}
