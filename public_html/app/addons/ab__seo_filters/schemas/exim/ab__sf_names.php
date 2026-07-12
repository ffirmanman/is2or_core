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
use Tygh\Registry;
include_once(Registry::get('config.dir.addons') . 'ab__seo_filters/schemas/exim/ab__sf_names.functions.php');
$schema = [
'section' => 'ab__seo_filters',
'pattern_id' => 'ab__sf_names',
'name' => __('ab__seo_filters'),
'key' => ['sf_id'],
'table' => 'ab__sf_names',
'order_by' => 'ab__sf_names.sf_id, ab__sf_name_descriptions.lang_code',
'permissions' => [
'import' => 'ab__sf.manage',
'export' => 'ab__sf.manage',
],
'condition' => [
'use_company_condition' => true,
],
'references' => [
'ab__sf_name_descriptions' => [
'reference_fields' => ['sf_id' => '#key', 'lang_code' => '#lang_code'],
'join_type' => 'INNER',
],
'companies' => [
'reference_fields' => ['company_id' => '&company_id'],
'join_type' => 'LEFT',
'import_skip_db_processing' => true,
],
],
'export_fields' => [
'Language' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'lang_code',
'type' => 'languages',
'required' => true,
'multilang' => true,
],
'Category (ID)' => [
'db_field' => 'category_id',
'required' => true,
'alt_key' => true,
],
'Features Hash of the filter' => [
'db_field' => 'features_hash',
'process_get' => ['fn_exim_absf_get_features_hash', '#key'],
'process_put' => ['fn_exim_absf_set_features_hash', '#key', '#this'],
'export_only' => false,
'linked' => false,
'alt_key' => true,
],
'SEO link' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'name',
'multilang' => true,
'required' => true,
],
'Status of SEO page' => [
'db_field' => 'fixed',
'required' => true,
],
'H1 of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'tag_h1',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Title of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'page_title',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'SEO description of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'description',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Short SEO description of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'short_description',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Meta keywords of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'meta_keywords',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Meta description of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'meta_description',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Breadcrumbs of the page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'breadcrumb',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Breadcrumbs of the product page' => [
'table' => 'ab__sf_name_descriptions',
'db_field' => 'product_breadcrumb',
'multilang' => true,
'convert_put' => ['fn_exim_absf_is_empty', '#this'],
],
'Displayed in product breadcrumbs' => [
'db_field' => 'show_in_breadcrumbs',
'required' => true,
],
'*Total products' => [
'process_get' => ['fn_exim_absf_total_products', '#key', '#lang_code'],
'export_only' => true,
'linked' => false,
],
'*Tag H1' => [
'process_get' => ['fn_exim_absf_h1', '#key', '#lang_code'],
'multilang' => true,
'linked' => false,
],
'*URL' => [
'process_get' => ['fn_exim_absf_get_url', '#key', '#lang_code'],
'multilang' => true,
'linked' => false,
],
'*Category Name' => [
'process_get' => ['fn_exim_absf_get_category_name', '#key', '#lang_code'],
'multilang' => true,
'linked' => false,
],
'*Filter Name' => [
'process_get' => ['fn_exim_absf_get_filter_name', '#key', '#lang_code'],
'multilang' => true,
'linked' => false,
],
'*Variant list' => [
'process_get' => ['fn_exim_absf_get_variants', '#key', '#lang_code'],
'multilang' => true,
'linked' => false,
],
],
'range_options' => [
'selector_url' => 'ab__sf_names.manage',
'object_name' => __('ab__sf.names'),
],
'options' => [
'lang_code' => [
'title' => 'language',
'type' => 'languages',
'default_value' => [DEFAULT_LANGUAGE],
],
],
];
if (fn_allowed_for('ULTIMATE')) {
$schema['export_fields']['Store'] = [
'table' => 'companies',
'db_field' => 'company',
'process_put' => ['fn_exim_absf_set_name_company', '#key', '#this'],
'required' => true,
];
}
return $schema;
