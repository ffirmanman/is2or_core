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
$schema = [

'form[name="category_update_form"] input[name="category_data[page_title]"]' => 'categories.view',
'form[name="category_update_form"] textarea[name="category_data[meta_description]"]' => 'categories.view',
'form[name="category_update_form"] textarea[name="category_data[meta_keywords]"]' => 'categories.view',

'form[name="product_update_form"] input[name="product_data[page_title]"]' => 'products.view',
'form[name="product_update_form"] textarea[name="product_data[meta_description]"]' => 'products.view',
'form[name="product_update_form"] textarea[name="product_data[meta_keywords]"]' => 'products.view',

'form[name="page_update_form"] input[name="page_data[page_title]"]' => 'pages.view',
'form[name="page_update_form"] textarea[name="page_data[meta_description]"]' => 'pages.view',
'form[name="page_update_form"] textarea[name="page_data[meta_keywords]"]' => 'pages.view',

'form[name^="update_features_form_"] input[name^="feature_data[variants]["][name$="][page_title]"]' => 'product_features.view',
'form[name^="update_features_form_"] textarea[name^="feature_data[variants]["][name$="][meta_description]"]' => 'product_features.view',
'form[name^="update_features_form_"] textarea[name^="feature_data[variants]["][name$="][meta_keywords]"]' => 'product_features.view',
];
return $schema;