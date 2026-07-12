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
    'speedup_general' => [
        'general_info' => [
            'type' => 'title',
        ],
        'speedup_general_info' => [
            'type' => 'func_info',
            'value' => 'fn_cls_speedup_speedup_general_info',

        ],
        'clss_status' => [
            'type' => 'hidden',
            'default' => '0',
        ],
        'clss_admin_status' => [
            'type' => 'hidden',
            'default' => '0',
        ],

        'speedup_tech_settings' => [
            'type' => 'title',
        ],
        'speedup_level' => [
            'type' => 'selectbox',
            'default' => 'light',
            'tooltip' => true,
            'variants' => [
                'light' => __('cls.light'),
                'hard' => __('cls.hard'),
            ],
        ],
        'skip_chars' => [
            'type' => 'input',
            'default' => '. , - ; : \' / "',
            'tooltip' => true,
            'variants' => [
                'light' => __('cls.light'),
                'hard' => __('cls.hard'),
            ],
        ],

        'speedup_info' => [
            'type' => 'func_info',
            'value' => 'fn_cls_speedup_run_scan_info',
            'show_when' => ['speedup_level' => ['hard']],
        ],
        'speedup_cluster_size' => [
            'type' => 'selectbox',
            'default' => '2',
            'tooltip' => true,
            'variants' => [
                '1' => '1',
                '2' => '2',
                '3' => '3',
            ],
        ],
        'speedup_exclude_import' => [
            'type' => 'checkbox',
            'default' => 'Y',
            'tooltip' => true,
        ],
        'speedup_cron_key' => [
            'type' => 'input',
            'default' => 'HEL765FW',
            'tooltip' => true,
        ],
    ],
];

return $schema;
