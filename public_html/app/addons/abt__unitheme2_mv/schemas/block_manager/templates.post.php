<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
$schema['addons/abt__unitheme2_mv/blocks/abt__ut2_mv_vendor_information.tpl'] = [
'settings' => [
'abt__ut2_mv_type' => [
'type' => 'selectbox',
'no_lang' => true,
'values' => [
'f' => __('abt__ut2_mv.vendor_panel_type_f'),
'c' => __('abt__ut2_mv.vendor_panel_type_c'),
],
'default_value' => 'f',
],
'abt__ut2_mv_logo' => [
'type' => 'checkbox',
'default_value' => 'Y',
],
'abt__ut2_mv_name_as_link' => [
'type' => 'checkbox',
'default_value' => 'N',
],
'abt__ut2_mv_vendor_rating' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.vendor_rating_tooltip'),
],
'abt__ut2_mv_description_length' => [
'type' => 'input',
'default_value' => '100',
'tooltip' => __('abt__ut2_mv.description_length_tooltip'),
],
'abt__ut2_mv_motivation' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.motivation_tooltip'),
],
'abt__ut2_mv_contacts' => [
'type' => 'checkbox',
'default_value' => 'Y',
],
'abt__ut2_mv_ask_question' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.ask_question_tooltip'),
],
],
];
$schema['addons/abt__unitheme2_mv/blocks/abt__ut2_mv_vendor_information_vertical.tpl'] = [
'settings' => [
'abt__ut2_mv_logo' => [
'type' => 'checkbox',
'default_value' => 'Y',
],
'abt__ut2_mv_name_as_link' => [
'type' => 'checkbox',
'default_value' => 'N',
],
'abt__ut2_mv_vendor_rating' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.vendor_rating_tooltip'),
],
'abt__ut2_mv_description_length' => [
'type' => 'input',
'default_value' => '100',
'tooltip' => __('abt__ut2_mv.description_length_tooltip'),
],
'abt__ut2_mv_motivation' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.motivation_tooltip'),
],
'abt__ut2_mv_ask_question' => [
'type' => 'checkbox',
'default_value' => 'Y',
'tooltip' => __('abt__ut2_mv.ask_question_tooltip'),
],
],
];
return $schema;
