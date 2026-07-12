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

$schema['ab__seo_reviews.view_category'] = [
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
'value' => '[h1_tag]',
],
'meta_description' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 300,
'value' => '[h1_tag]',
],
'meta_keywords' => [
'tooltip' => '',
'type' => 'textarea',
'position' => 400,
'value' => '[h1_tag]',
],
];
return $schema;
