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
$schema['categories.view'] = [
'action' => [
'tooltip' => '',
'type' => 'selectbox',
'position' => 100,
'value' => 'do_not_override',
'variants' => [
'do_not_override',
'override_empty',
'override_all',
],
],
'page_title' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 200,
'value' => '[category]',
'has_status' => true
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[category]',
'has_status' => true
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[category]',
'has_status' => true
],
];
$schema['products.view'] = [
'action' => [
'tooltip' => '',
'type' => 'selectbox',
'position' => 100,
'value' => 'do_not_override',
'variants' => [
'do_not_override',
'override_empty',
'override_all',
],
],
'page_title' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 200,
'value' => '[product]',
'has_status' => true
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[product]',
'has_status' => true
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[product]',
'has_status' => true
],
];
$schema['product_features.view'] = [
'action' => [
'tooltip' => '',
'type' => 'selectbox',
'position' => 100,
'value' => 'do_not_override',
'variants' => [
'do_not_override',
'override_empty',
'override_all',
],
],
'page_title' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 200,
'value' => '[brand]',
'has_status' => true
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[brand]',
'has_status' => true
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[brand]',
'has_status' => true
],
];
$schema['pages.view'] = [
'action' => [
'tooltip' => '',
'type' => 'selectbox',
'position' => 100,
'value' => 'do_not_override',
'variants' => [
'do_not_override',
'override_empty',
'override_all',
],
],
'page_title' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 200,
'value' => '[page]',
'has_status' => true
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[page]',
'has_status' => true
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[page]',
'has_status' => true
],
];
if (fn_allowed_for('MULTIVENDOR')) {
$schema['companies.products'] = [
'action' => [
'tooltip' => '',
'type' => 'selectbox',
'position' => 100,
'value' => 'do_not_override',
'variants' => [
'do_not_override',
'override_empty',
'override_all',
],
],
'page_title' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 200,
'value' => '[vendor]',
'has_status' => true
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[vendor]',
'has_status' => true
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[vendor]',
'has_status' => true
],
];
}
return $schema;
