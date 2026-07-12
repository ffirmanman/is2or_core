<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           https://www.cs-commerce.com/license-agreement.html               *
*                                                                            *
*/

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
$schema = [
    'styles' => [
        'base_styles_settings' => [
            'type' => 'title',
        ],
        'theme' => [
            'type' => 'selectbox',
            'default' => 'csc_live_search/themes/modern.less',
            'class' => 'clsInput',
            'variants' => [
                'csc_live_search/themes/modern.less' => __('cls.modern'),
                'csc_live_search/themes/classic.less' => __('cls.classic'),
            ],
        ],
        'base_text_color' => [
            'type' => 'color',
            'default' => '#2a2c47',
            'class' => 'clsInput',
        ],
        'active_elements_background' => [
            'type' => 'color',
            'default' => '#eaeaed',
            'class' => 'clsInput',
        ],
        'active_elements_color' => [
            'type' => 'color',
            'default' => '#029d52',
            'class' => 'clsInput',
        ],
        'link_color' => [
            'type' => 'color',
            'default' => '#1155bb',
            'class' => 'clsInput',
        ],
        'border_radius' => [
            'type' => 'input',
            'min' => 0,
            'default' => 5,
            'class' => 'clsInput',
        ],
        'desktop_max_width' => [
            'type' => 'input',
            'min' => 0,
            'default' => 700,
            'tooltip' => true,
        ],
        'show_clear_btn' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
            'tooltip' => 0,
        ],

        'category_label' => [
            'type' => 'title',
        ],

        'show_category' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
        ],
        'color_type' => [
            'type' => 'selectbox',
            'default' => 'M',
            'class' => 'clsInput',
            'tooltip' => true,
            'variants' => [
                'M' => __('cls.one_of_ten'),
                'A' => __('cls.rand_every_category'),
                'E' => __('cls.fixed_color'),
            ],
            'show_when' => ['show_category' => ['Y']],

        ],
        'category_e' => [
            'type' => 'color',
            'default' => '#50AFD6',
            'class' => 'clsInput',
            'show_when' => [
                'color_type' => ['E'],
            ],
            'hide_when' => [
                'show_category' => ['undefined'],
            ],
        ],
        'show_category_gradient' => [
            'type' => 'checkbox',
            'default' => 'N',
            'class' => 'clsInput',
            'show_when' => ['show_category' => ['Y']],
        ],

        'elements' => [
            'type' => 'title',
        ],
        'show_price' => [
            'type' => 'selectbox',
            'default' => 'Y',
            'variants' => [
                'Y' => __('cls.display'),
                'D' => __('cls.not_display'),
                'A' => __('cls.display_authed'),
            ],
            'class' => 'clsInput',
        ],
        'show_cart' => [
            'type' => 'selectbox',
            'default' => 'Y',
            'variants' => [
                'Y' => __('cls.display'),
                'D' => __('cls.not_display'),
                'A' => __('cls.display_authed'),
            ],
            'class' => 'clsInput',
        ],
        'show_product_code' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
        ],
        'show_wish' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
        ],
        'show_compare' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
        ],
        'show_quick_view' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'class' => 'clsInput',
        ],

    ],
];
return $schema;
