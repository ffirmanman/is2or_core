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
use Tygh\Enum\YesNo;
use Tygh\Registry;
$schema['products']['items']['vendor'] = [
'position' => 199,
'is_group' => 'Y',
'items' => [
'show_name_as_link' => [
'type' => 'checkbox',
'position' => 100,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
],
'show_logo' => [
'type' => 'checkbox',
'position' => 200,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
],
'truncate_short_description' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 300,
'value' => [
'desktop' => 90,
'tablet' => 90,
'mobile' => 90,
],
],
'show_vendor_panel' => [
'type' => 'checkbox',
'position' => 400,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
],
'show_ask_question_link' => [
'type' => 'checkbox',
'position' => 500,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
'is_addon_dependent' => 'Y',
],
'show_vendor_address' => [
'type' => 'checkbox',
'position' => 500,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
],
],
];
if(Registry::get('addons.vendor_rating.status') === 'A'){
$schema['products']['items']['vendor']['items']['show_vendor_rating'] = [
'type' => 'checkbox',
'position' => 600,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
'is_addon_dependent' => 'Y',
];
}
$schema['vendor'] = [
'position' => 11000,
'items' => [
'truncate_short_description' => [
'type' => 'input',
'class' => 'input-small cm-value-integer',
'position' => 100,
'value' => [
'desktop' => 180,
'tablet' => 180,
'mobile' => 180,
],
],
'show_ask_question_link' => [
'type' => 'checkbox',
'position' => 200,
'value' => [
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
],
],
'vendor_about_page_metadata' => [
'is_group' => YesNo::YES,
'position' => 300,
'items' => [
'vendor_about_page_title' => [
'type' => 'textarea',
'position' => 100,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_about_page_description' => [
'type' => 'textarea',
'position' => 200,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_about_page_keywords' => [
'type' => 'textarea',
'position' => 300,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
]
]
],
'vendor_products_page_metadata' => [
'is_group' => YesNo::YES,
'position' => 300,
'items' => [
'vendor_products_page_title' => [
'type' => 'textarea',
'position' => 100,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_products_page_description' => [
'type' => 'textarea',
'position' => 200,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_products_page_keywords' => [
'type' => 'textarea',
'position' => 300,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
]
]
],
'vendor_reviews_page_metadata' => [
'is_group' => YesNo::YES,
'position' => 300,
'items' => [
'vendor_reviews_page_title' => [
'type' => 'textarea',
'position' => 100,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_reviews_page_description' => [
'type' => 'textarea',
'position' => 200,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_reviews_page_keywords' => [
'type' => 'textarea',
'position' => 300,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
]
]
],
'vendor_store_page_metadata' => [
'is_group' => YesNo::YES,
'position' => 300,
'items' => [
'vendor_store_page_title' => [
'type' => 'textarea',
'position' => 100,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_store_page_description' => [
'type' => 'textarea',
'position' => 200,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
],
'vendor_store_page_keywords' => [
'type' => 'textarea',
'position' => 300,
'multilanguage' => YesNo::YES,
'value' => '',
'is_for_all_devices' => YesNo::YES,
]
]
],
],
];
$schema['product_list']['items']['products_multicolumns']['items']['show_vendor_info'] = [
'type' => 'selectbox',
'position' => 110,
'class' => 'input-large',
'value' => [
'desktop' => 'show',
'tablet' => 'show',
'mobile' => 'show',
],
'variants' => [
'none',
'show',
],
];
$schema['product_list']['items']['products_multicolumns']['items']['show_vendor_logo'] = [
'type' => 'checkbox',
'position' => 120,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['products_multicolumns']['items']['show_vendor_address'] = [
'type' => 'checkbox',
'position' => 130,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::NO,
],
];
$schema['product_list']['items']['products_multicolumns']['items']['show_vendor_rating'] = [
'type' => 'checkbox',
'position' => 140,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['products_without_options']['items']['show_vendor_info'] = [
'type' => 'selectbox',
'position' => 110,
'class' => 'input-large',
'value' => [
'desktop' => 'show',
'tablet' => 'show',
'mobile' => 'show',
],
'variants' => [
'none',
'show',
],
];
$schema['product_list']['items']['products_without_options']['items']['show_vendor_logo'] = [
'type' => 'checkbox',
'position' => 120,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['products_without_options']['items']['show_vendor_address'] = [
'type' => 'checkbox',
'position' => 130,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['products_without_options']['items']['show_vendor_rating'] = [
'type' => 'checkbox',
'position' => 140,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['short_list']['items']['show_vendor_info'] = [
'type' => 'selectbox',
'position' => 110,
'class' => 'input-large',
'value' => [
'desktop' => 'show',
'tablet' => 'show',
'mobile' => 'show',
],
'variants' => [
'none',
'show',
],
];
$schema['product_list']['items']['short_list']['items']['show_vendor_logo'] = [
'type' => 'checkbox',
'position' => 110,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['short_list']['items']['show_vendor_address'] = [
'type' => 'checkbox',
'position' => 130,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
$schema['product_list']['items']['short_list']['items']['show_vendor_rating'] = [
'type' => 'checkbox',
'position' => 140,
'value' => [
'desktop' => YesNo::YES,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
];
return $schema;
