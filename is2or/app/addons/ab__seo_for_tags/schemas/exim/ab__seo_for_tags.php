<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
$schema = [
'section' => 'ab__seo_for_tags',
'name' => __('ab__seo_for_tags'),
'pattern_id' => 'ab__seo_for_tags',
'key' => ['tag_id'],
'order' => 99,
'table' => 'tags',
'permissions' => [
'import' => 'ab__sft_manage_data',
'export' => 'ab__sft_view_data',
],
'references' => [
'ab__tag_descriptions' => [
'reference_fields' => ['tag_id' => '#key', 'lang_code' => '#lang_code'],
'join_type' => 'LEFT',
],
'companies' => [
'reference_fields' => ['company_id' => '&company_id'],
'join_type' => 'LEFT',
'import_skip_db_processing' => true,
],
],
'range_options' => [
'selector_url' => 'tags.manage',
'object_name' => __('tags'),
],
'options' => [
'lang_code' => [
'title' => 'language',
'type' => 'languages',
'default_value' => [DEFAULT_LANGUAGE],
],
],
'condition' => [
'use_company_condition' => true,
],
'export_fields' => [
'Tag ID' => [
'alt_key' => true,
'required' => true,
'db_field' => 'tag_id',
],
'Tag' => [
'required' => true,
'db_field' => 'tag',
],
'Status' => [
'db_field' => 'status',
],
'Language' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'lang_code',
'process_get' => ['', '#lang_code'],
'type' => 'languages',
'required' => true,
'multilang' => true,
],
'H1 tag' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'h1',
'multilang' => true,
],
'Description' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'description',
'multilang' => true,
],
'Page title' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'page_title',
'multilang' => true,
],
'Meta-description' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'meta_description',
'multilang' => true,
],
'Meta-keywords' => [
'table' => 'ab__tag_descriptions',
'db_field' => 'meta_keywords',
'multilang' => true,
],
'Pages ID' => [
'process_get' => ['fn_ab__sft_exim_get_links', '#key', 'A'],
'process_put' => ['fn_ab__sft_exim_put_links', '#key', 'A', '#this'],
'linked' => false,
],
'Products ID' => [
'process_get' => ['fn_ab__sft_exim_get_links', '#key', 'P'],
'process_put' => ['fn_ab__sft_exim_put_links', '#key', 'P', '#this'],
'linked' => false,
],
],
];
if (fn_allowed_for('ULTIMATE')) {
$schema['export_fields']['Store'] = [
'table' => 'companies',
'db_field' => 'company',
'process_put' => ['fn_exim_set_company', 'tags', 'tag_id', '#key', '#this', '#counter'],
];
$schema['import_process_data']['check_tag_company_id'] = [
'function' => 'fn_import_check_tag_company_id',
'args' => ['$primary_object_id', '$object', '$pattern', '$options', '$processed_data', '$processing_groups', '$skip_record'],
'import_only' => true,
];
}
if (Registry::get('addons.seo.status') === 'A') {
include_once(Registry::get('config.dir.addons') . 'seo/schemas/exim/seo.functions.php');
$schema['references']['seo_names'] = [
'reference_fields' => ['object_id' => '#key', 'type' => 't', 'dispatch' => '', 'lang_code' => '#ab__tag_descriptions.lang_code'],
'join_type' => 'LEFT',
'import_skip_db_processing' => true,
];
if (fn_allowed_for('ULTIMATE')) {
$schema['references']['seo_names']['reference_fields']['company_id'] = '&company_id';
}
$schema['export_fields']['SEO name'] = [
'table' => 'seo_names',
'db_field' => 'name',
'process_put' => ['fn_create_import_seo_name', '#key', 't', '#this', '%Tag%', 0, '', '', '#lang_code', '%Store%'],
];
if (Registry::get('addons.seo.single_url') == 'N') {
$schema['export_fields']['SEO name']['multilang'] = true;
}
}
return $schema;
