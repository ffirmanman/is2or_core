<?php

use Tygh\Registry;

include_once Registry::get('config.dir.addons') . 'csc_live_search/schemas/exim/common.functions.php';
return [
    'section' => 'csc_live_search',
    'pattern_id' => 'cls_history_per_request',
    'name' => __('cls.history_per_request'),
    'key' => ['rid', 'lang_code'],
    'order' => 2,
    'table' => 'csc_live_search_q_requests',
    'export_only' => true,
    'notes' => [
        'cls.text_exim_import_phrases_note',
    ],
    'permissions' => [
        'import' => 'manage_languages',
        'export' => 'view_languages',
    ],
    'condition' => [
        'conditions' => ['lang_code' => '@lang_code'],
    ],
    'options' => [
        'lang_code' => [
            'title' => 'language',
            'type' => 'languages',
            'default_value' => [DEFAULT_LANGUAGE],
        ],
    ],
    'export_fields' => [
        'Request ID' => [
            'db_field' => 'rid',
            'alt_key' => true,
            'required' => true,
            'multilang' => false,
        ],
        'Company ID' => [
            'db_field' => 'company_id',
        ],
        'Query' => [
            'db_field' => 'qid',
            'process_get' => ['fn_cls_exim_get_query', '#this'],
            'export_only' => true,
        ],
        'Language' => [
            'db_field' => 'lang_code',
            'alt_key' => true,
            'required' => true,
            'multilang' => true,
        ],
        'Date' => [
            'db_field' => 'timestamp',
            'process_get' => ['fn_timestamp_to_date', '#this'],
            'convert_put' => ['fn_date_to_timestamp', '#this'],
            'export_only' => true,
        ],
        'User IP' => [
            'db_field' => 'user_ip',
        ],
        'User ID' => [
            'db_field' => 'user_id',
        ],
        'User Name' => [
            'db_field' => 'user_id',
            'process_get' => ['fn_get_user_name', '#this'],
            'export_only' => true,
        ],
        'Found products' => [
            'db_field' => 'found_products',
        ],

    ],
    'order_by' => 'rid',
];
