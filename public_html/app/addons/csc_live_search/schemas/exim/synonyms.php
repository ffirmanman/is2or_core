<?php

use Tygh\Registry;

include_once Registry::get('config.dir.addons') . 'csc_live_search/schemas/exim/common.functions.php';
return [
    'section' => 'csc_live_search',
    'pattern_id' => 'synonyms',
    'name' => __('cls.synonyms'),
    'key' => ['phrase', 'lang_code'],
    'order' => 1,
    'table' => 'csc_live_search_synonyms',
    'notes' => [
        'cls.text_exim_import_synonyms_note',
    ],
    'permissions' => [
        'import' => 'manage_languages',
        'export' => 'view_languages',
    ],
    'condition' => [
        'conditions' => ['lang_code' => '@lang_code'],
    ],
    'range_options' => [
        'selector_url' => 'csc_live_search.synonyms',
        'object_name' => __('cls.synonyms'),
    ],
    'options' => [
        'lang_code' => [
            'title' => 'language',
            'type' => 'languages',
            'default_value' => [DEFAULT_LANGUAGE],
        ],
        'syn_delimiter' => [
            'title' => 'cls.delimiter',
            'type' => 'input',
            'default_value' => '///',
            'position' => 500,
        ],
    ],
    'export_fields' => [
        'Phrase' => [
            'db_field' => 'phrase',
            'alt_key' => true,
            'required' => true,
            'multilang' => true,
        ],
        'Synonyms' => [
            'db_field' => 'synonyms',
            'process_get' => ['fn_cls_exim_get_synonyms', '#this', '@syn_delimiter'],
            'convert_put' => ['fn_cls_exim_convert_synonyms', '#this', '@syn_delimiter'],
            'required' => true,
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
        'User ID' => [
            'db_field' => 'user_id',
            'process_get' => ['fn_get_user_name', '#this'],
            'export_only' => true,
        ],
        'Status' => [
            'db_field' => 'status',
        ],
    ],
    'import_process_data' => [
        'check_lang_code' => [
            'function' => 'fn_cls_check_data',
            'args' => ['$primary_object_id', '$object', '$processed_data', '$skip_record'],
            'import_only' => true,
        ],
    ],
    'order_by' => 'phrase',
];
