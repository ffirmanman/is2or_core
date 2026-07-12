<?php

use Tygh\Registry;

include_once Registry::get('config.dir.addons') . 'csc_live_search/schemas/exim/common.functions.php';
return [
    'section' => 'csc_live_search',
    'pattern_id' => 'phrases',
    'name' => __('cls.phrases'),
    'key' => ['phrase', 'lang_code'],
    'order' => 2,
    'table' => 'csc_live_search_phrases',
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
    'range_options' => [
        'selector_url' => 'csc_live_search.phrases',
        'object_name' => __('cls.phrases'),
    ],
    'options' => [
        'lang_code' => [
            'title' => 'language',
            'type' => 'languages',
            'default_value' => [DEFAULT_LANGUAGE],
        ],
    ],
    'export_fields' => [
        'Phrase' => [
            'db_field' => 'phrase',
            'alt_key' => true,
            'required' => true,
            'multilang' => true,
        ],
        'Priority' => [
            'db_field' => 'priority',
        ],
        'Language' => [
            'db_field' => 'lang_code',
            'alt_key' => true,
            'required' => true,
            'multilang' => true,
        ],
        'Date Added' => [
            'db_field' => 'timestamp',
            'process_get' => ['fn_timestamp_to_date', '#this'],
            'convert_put' => ['fn_date_to_timestamp', '#this'],
            'export_only' => true,
        ],
        'User Added by' => [
            'db_field' => 'user_id',
            'process_get' => ['fn_get_user_name', '#this'],
            'export_only' => true,
        ],
        'Status' => [
            'db_field' => 'status',
        ],
        'Recommended Product IDs' => [
            'db_field' => 'product_ids',
        ],

    ],
    'import_process_data' => [
        'check_lang_code' => [
            'function' => 'fn_cls_check_data',
            'args' => ['$primary_object_id', '$object', '$processed_data', '$skip_record'],
            'import_only' => true,
        ],
    ],
    'order_by' => 'phrase_id',
];
