<?php

$schema['faq_block_sections'] = [
    'content' => [
        'items' => [
            'remove_indent' => true,
            'hide_label' => true,
            'type' => 'enum',
            'object' => 'faq_sections',
            'items_function' => 'fn_cp_faq_addon_get_all_faq_sections_data',
            'fillings' => [
                'manually' => [
                    'picker' => 'addons/cp_faq_addon/pickers/section_picker/picker.tpl',
                    'picker_params' => [
                        'type' => 'links',
                    ],
                    'params' => [
                        'section_picker' => 'Y',
                    ],
                ],
            ],
        ],
    ],
    'templates' => 'addons/cp_faq_addon/views/cp_faq_addon/faq_menu.tpl',
    'settings' => [
        'faq_show_expanded_sec' => [
            'type' => 'checkbox',
            'default_value' => 'N',
        ],
        'faq_show_expanded_quest' => [
            'type' => 'checkbox',
            'default_value' => 'N',
        ],
        'faq_show_search_form' => [
            'type' => 'checkbox',
            'default_value' => 'N',
        ],
    ],
    'wrappers' => 'blocks/wrappers',
];
if (version_compare(PRODUCT_VERSION, '4.3.3', '>')) {
    $schema['faq_block_sections']['content']['items']['fillings']['manually']['picker_params'] = [
        'type' => 'links',
        'positions' => true,
    ];
}
$schema['faq_block_questions'] = [
    'content' => [
        'items' => [
            'remove_indent' => true,
            'hide_label' => true,
            'type' => 'enum',
            'object' => 'faq_questions',
            'items_function' => 'fn_cp_faq_addon_get_faq_questions',
            'fillings' => [
                'manually' => [
                    'picker' => 'addons/cp_faq_addon/pickers/question_picker/picker.tpl',
                    'picker_params' => [
                        'type' => 'links',
                    ],
                    'params' => [
                        'question_picker' => 'Y',
                    ],
                ],
            ],
        ],
    ],
    'templates' => 'addons/cp_faq_addon/views/cp_faq_addon/faq_menu_questions.tpl',
    'settings' => [
        'faq_show_expanded_quest' => [
            'type' => 'checkbox',
            'default_value' => 'N',
        ],
        'faq_show_search_form' => [
            'type' => 'checkbox',
            'default_value' => 'N',
        ],
    ],
    'wrappers' => 'blocks/wrappers',
];
if (version_compare(PRODUCT_VERSION, '4.3.3', '>')) {
    $schema['faq_block_questions']['content']['items']['fillings']['manually']['picker_params'] = [
        'type' => 'links',
        'positions' => true,
    ];
}
return $schema;
