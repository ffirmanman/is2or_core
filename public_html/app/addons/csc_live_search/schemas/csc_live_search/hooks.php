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
    'developers' => [
        'ttl_other_settings' => [
            'type' => 'title',
        ],
        'replace_with_break' => [
            'type' => 'input',
            'tooltip' => true,
            'default' => ", . : / - \\ \" ' “ ”",
            'class' => 'input-large',
        ],
        'custom_result_ids' => [
            'type' => 'input',
            'tooltip' => true,
            'default' => '',
            'class' => 'input-large',
        ],
        'search_delay' => [
            'type' => 'input',
            'tooltip' => true,
            'default' => '500',
            'class' => 'input-large',
        ],
        'ttl_hooks' => [
            'type' => 'title',
        ],
        'hooks_get_products' => [
            'type' => 'select2',
            'tooltip' => true,
            'mode' => 'multiple',
            'variants' => [
                /* This is example
             '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_joins' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_conditions' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_fields' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_product_phrase_condition' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_speedup_product_data' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_categories' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_categories_fields_condition' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_brands' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_pages' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_get_pages_fields_condition' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],

        'hooks_get_vendors' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
        'hooks_before_response' => [
            'type' => 'select2',
            'mode' => 'multiple',
            'variants' => [
                /* This is example
              '/app/addons/my_changes/file_name_same_as_function_name.php'=>'Display name on settings page'
                */
            ],
        ],
    ],
];
return $schema;
