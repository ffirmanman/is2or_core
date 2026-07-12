<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           https://www.cs-commerce.com/license-agreement.html               *
*                                                                            *
*/

use Tygh\CscLiveSearch;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
$schema = [
    'general' => [
        'ttl_search_elements' => [
            'type' => 'title',
        ],
        'search_products' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'label_class' => 'clsBold',
        ],
        'products_per_page' => [
            'type' => 'input',
            'default' => '10',
            'show_when' => ['search_products' => ['Y']],
        ],
        'out_stock_end' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'show_when' => ['search_products' => ['Y']],
        ],
        'increase_popularity' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'show_when' => ['search_products' => ['Y']],
        ],
        'sort_by' => [
            'type' => 'selectbox',
            'default' => 'cls_rel_pop|asc',
            'variants' => AREA == 'A' ? CscLiveSearch::_get_sort_by() : [],
            'show_when' => ['search_products' => ['Y']],
        ],
        'suggest_products_categories' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'tooltip' => true,
            'show_when' => ['search_products' => ['Y']],
        ],
        'group_by_root_cats' => [
            'type' => 'checkbox',
            'default' => 'N',
            'tooltip' => true,
            'show_when' => ['suggest_products_categories' => ['Y']],
            'label_class' => 'clsLevel2',
        ],
        'suggest_corrections' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'tooltip' => true,
            'show_when' => ['search_products' => ['Y']],
        ],
        /*'suggest_prediction'=>array(
             'type' => 'checkbox',
              'default'=>'N',
                'tooltip'=>true,
               'show_when'=>['search_products'=>['Y']]
           ),
         'prediction_key'=>array(
               'type' => 'input',
             'required'=>true,
              'default'=>'',
             'tooltip'=>true,
               'show_when'=>['suggest_prediction'=>['Y']]
            ),*/
        'show_user_history' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'tooltip' => true,
            'label_class' => 'clsBold',
        ],
        'history_limit' => [
            'type' => 'input',
            'default' => '5',
            'show_when' => ['show_user_history' => ['Y']],
        ],

        'search_categories' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'label_class' => 'clsBold',
        ],
        'cats_limit' => [
            'type' => 'input',
            'default' => '5',
            'show_when' => ['search_categories' => ['Y']],
        ],
        'cats_sort_by' => [
            'type' => 'selectbox',
            'default' => 'category',
            'variants' => [
                'position' => __('position'),
                'category' => __('name'),

            ],
            'show_when' => ['search_categories' => ['Y']],
        ],

        'search_on_category_name' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'show_when' => ['search_categories' => ['Y']],
        ],
        'search_on_category_metakeywords' => [
            'type' => 'checkbox',
            'default' => 'N',
            'show_when' => ['search_categories' => ['Y']],
        ],
        'show_parent_category' => [
            'type' => 'checkbox',
            'default' => 'N',
            'show_when' => ['search_categories' => ['Y']],
        ],
        'clsm_show_parent_level' => [
            'type' => 'input',
            'default' => '1',
            'tooltip' => true,
            'show_when' => ['show_parent_category' => ['Y']],
            'label_class' => 'clsLevel2',
        ],
        'clsm_redirect_category' => [
            'type' => 'checkbox',
            'default' => 'N',
            'tooltip' => true,
            'show_when' => ['search_categories' => ['Y']],
        ],

        'search_brands' => [
            'type' => 'checkbox',
            'label_class' => 'clsBold',
        ],
        'brands_limit' => [
            'type' => 'input',
            'default' => '5',
            'show_when' => ['search_brands' => ['Y']],
        ],

        'brands_feature_id' => [
            'type' => 'selectbox',
            'variants' => AREA == 'A' ? CscLiveSearch::_get_brands() : [],
            'show_when' => ['search_brands' => ['Y']],
        ],

        'search_vendors' => ['type' => 'hidden'],
        'vendors_limit' => ['type' => 'hidden'],
        'search_blog' => [
            'type' => 'checkbox',
            'label_class' => 'clsBold',
        ],
        'search_pages' => [
            'type' => 'checkbox',
            'label_class' => 'clsBold',
        ],
        'pb_limit' => [
            'type' => 'input',
            'default' => '5',
            'show_when' => true,

        ],

        'pb_ignore_lang_code' => [
            'type' => 'checkbox',
            'default' => 'N',
            'tooltip' => true,
            'show_when' => true,
        ],

        /*'ttl_function'=>array(
          'type' => 'title',
        ),*/

        // search phrases hidden settings
        'suggest_phrases' => [
            'type' => 'hidden',
            'default' => '1',
        ],
        'show_phrases_rec_products' => [
            'type' => 'hidden',
            'default' => '1',
        ],
        'use_stop_words' => [
            'type' => 'hidden',
            'default' => '0',
        ],

        // Synonyms

        'use_synonyms' => [
            'type' => 'hidden',
            'default' => '0',
        ],
        'syn_partial_match' => [
            'type' => 'hidden',
            'default' => '0',
        ],

        'enable_history' => [
            'type' => 'hidden',
            'default' => '1',
        ],

    ],
    'search_settings' => [
        'search_on_general_title' => [
            'type' => 'title',
        ],
        'search_on_name' => [
            'type' => 'checkbox',
            'default' => 'Y',
        ],
        'search_on_pcode' => [
            'type' => 'checkbox',
        ],
        'search_on_product_id' => [
            'type' => 'checkbox',
        ],
        'search_on_keywords' => [
            'type' => 'checkbox',
        ],
        'search_on_options' => [
            'type' => 'checkbox',
        ],
        'search_on_features' => [
            'type' => 'checkbox',
        ],
        'search_by_features' => [
            'type' => 'select2',
            'dispatch' => 'product_features.get_features_list',
            'mode' => 'multiple',
            'variants' => AREA == 'A' ? CscLiveSearch::_get_features() : [],
            'show_when' => ['search_on_features' => ['Y']],
            'variant_name_function' => 'fn_get_feature_name',
            'tooltip' => true,
        ],
        'search_on_tags' => [
            'type' => 'hidden',
            'default' => 'N',
        ],

        'search_on_general_title_no_speed' => [
            'type' => 'title',
            'tooltip' => true,
        ],

        'search_on_metakeywords' => [
            'type' => 'checkbox',
        ],
        'search_on_metatitle' => [
            'type' => 'checkbox',
        ],
        'search_on_metadesc' => [
            'type' => 'checkbox',
        ],

        'search_on_description' => [
            'type' => 'checkbox',
        ],
        'search_on_short_description' => [
            'type' => 'checkbox',
        ],

        'search_general_title' => [
            'type' => 'title',
        ],
        'ignore_lang_code' => [
            'type' => 'checkbox',
            'default' => 'N',
            'tooltip' => true,
        ],
        'characters_limit' => [
            'type' => 'input',
            'default' => '3',
            'tooltip' => true,
        ],
        'min_chars_limit' => [
            'type' => 'input',
            'default' => '0',
            'tooltip' => true,
        ],
        'autoredirect' => [
            'type' => 'checkbox',
            'tooltip' => true,
        ],
        'block_enter_press' => [
            'type' => 'checkbox',
            'tooltip' => true,
        ],
        'anti_csrf' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'tooltip' => true,
        ],
    ],
    'turbo_cache' => [
        'turbo_cache' => [
            'type' => 'title',
        ],
        'turbo_cache_info' => [
            'type' => 'template',
            'template' => 'addons/csc_live_search/settings/turbo_cache_info.tpl',
        ],
        'turbo_cache_status_field' => [
            'type' => 'template',
            'template' => 'addons/csc_live_search/settings/turbo_cache_status_field.tpl',
        ],
    ],
];
if (fn_cls_redis_available()) {
    $turbo_settings = [
        'clear_turbo_cache' => [
            'type' => 'link',
            'name' => __('cls.clear_turbo_cache'),
            'url' => 'csc_live_search.clear_turbo_cache',
            'class' => 'cm-ajax btn',
            'label' => true,
            'tooltip' => true,
        ],
        'clear_turbo_cache_when' => [
            'type' => 'selectbox',
            'variants' => [
                'on_create_product' => __('cls.tc_on_create_product'),
                'on_create_and_update' => __('cls.tc_on_create_update_product'),
                'disabled' => __('cls.tc_dont_clear'),
            ],
            'default' => 'on_create_product',
            'tooltip' => true,
        ],
        'turbo_cache_ttl' => [
            'type' => 'input',
            'default' => '48',
            'tooltip' => true,
        ],
        'redis_server_settings' => [
            'type' => 'title',
        ],
        'redis_server' => [
            'type' => 'input',
            'default' => 'localhost',
        ],
        'redis_port' => [
            'type' => 'input',
            'default' => '6379',
        ],
        'need_redis_auth' => [
            'type' => 'checkbox',
            'default' => 'N',
        ],
        'redis_login' => [
            'type' => 'input',
            'default' => '',
            'show_when' => ['need_redis_auth' => ['Y']],
        ],
        'redis_pass' => [
            'type' => 'input',
            'default' => '',
            'show_when' => ['need_redis_auth' => ['Y']],
        ],

        'turbo_cache_cron' => [
            'type' => 'title',
        ],
        'turbo_cache_cron_template' => [
            'type' => 'template',
            'template' => 'addons/csc_live_search/settings/turbo_cache_cron.tpl',
        ],
    ];
    $schema['turbo_cache'] = array_merge($schema['turbo_cache'], $turbo_settings);
}

if (PRODUCT_EDITION == 'ULTIMATE') {
    $schema['storefronts'] = [
        'ttl_serch_on_storefronts' => [
            'type' => 'title',
        ],
        'search_storefront_categories' => [
            'type' => 'checkbox',
            'default' => 'N',
            'tooltip' => true,
        ],
        'allow_storefronts' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => AREA == 'A' ? CscLiveSearch::_get_storefronts() : [],
            'tooltip' => true,
        ],
    ];
}

if (AREA == 'A' && Registry::get('addons.tags.status') == 'A') {
    $schema['search_settings']['search_on_tags'] = [
        'type' => 'checkbox',
        'default' => 'N',
    ];
}

if (AREA == 'A' && Registry::get('addons.product_variations.status') == 'A') {
    $schema['search_settings']['search_variation'] = [
        'type' => 'selectbox',
        'variants' => [
            'N' => __('cls.dont_search_variation'),
            'Y' => __('cls.search_variation_show_main'),
            'A' => __('cls.search_variation_show_all'),
        ],
        'tooltip' => true,
        'default' => 'N',
    ];
}
if (PRODUCT_EDITION == 'MULTIVENDOR') {
    $schema['multivendor']['search_vendors'] = [
        'type' => 'checkbox',
        'label_class' => 'clsBold',
    ];
    $schema['multivendor']['vendors_limit'] = [
        'type' => 'input',
        'default' => '5',
        'show_when' => ['search_vendors' => ['Y']],
    ];

    $schema['multivendor']['vendor_history_access'] = [
        'type' => 'selectbox',
        'default' => 'D',
        'variants' => [
            'D' => __('cls.not_display'),
            'C' => __('cls.display_only_by_clicks'),
            'A' => __('cls.display_all'),
        ],
    ];
}

if (AREA == 'A' && Registry::get('addons.ab__custom_h1.status') == 'A') {
    $schema['third_party_compatibility']['ab__custom_h1'] = [
        'type' => 'title',
        'title' => __('ab__custom_h1'),
    ];
    $schema['third_party_compatibility']['search_products_on_ab__custom_h1'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.search_products_on') . ': ' . __('ab__custom_h1'),
    ];
    $schema['third_party_compatibility']['search_categories_on_ab__custom_h1'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.search_categories_on') . ': ' . __('ab__custom_h1'),
    ];

    $schema['third_party_compatibility']['search_pages_on_ab__custom_h1'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.search_pages_on') . ': ' . __('ab__custom_h1'),
    ];

    $schema['third_party_compatibility']['search_brands_on_ab__custom_h1'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.search_brands_on') . ': ' . __('ab__custom_h1'),
    ];
}

if (AREA == 'A' && Registry::get('addons.ab__seo_filters.status') == 'A') {
    $schema['third_party_compatibility']['ab__seo_filters'] = [
        'type' => 'title',
        'title' => __('ab__seo_filters'),
    ];
    $schema['third_party_compatibility']['search_categories_on_ab__seo_filters'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.search_categories_on') . ': ' . __('ab__seo_filters'),
        'tooltip' => true,
    ];
    $schema['third_party_compatibility']['search_categories_on_ab__seo_filters_ignore_placeholder'] = [
        'type' => 'checkbox',
        'default' => 'N',
        'title' => __('cls.ab__seo_filters_ignore_placeholder'),
        'tooltip' => false,
        'show_when' => ['search_categories_on_ab__seo_filters' => ['Y']],
    ];

    $schema['third_party_compatibility']['ab__seo_filters_limit'] = [
        'type' => 'input',
        'default' => '5',
        'show_when' => ['search_categories_on_ab__seo_filters' => ['Y']],
    ];
}

return $schema;
