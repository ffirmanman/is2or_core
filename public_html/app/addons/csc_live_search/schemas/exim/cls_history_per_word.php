<?php

use Tygh\Registry;

include_once Registry::get('config.dir.addons') . 'csc_live_search/schemas/exim/common.functions.php';
return [
    'section' => 'csc_live_search',
    'pattern_id' => 'cls_history_per_word',
    'name' => __('cls.history_per_word'),
    'key' => ['qid', 'lang_code'],
    'order' => 2,
    'table' => 'csc_live_search_q_base',
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
        'Query ID' => [
            'db_field' => 'qid',
            'alt_key' => true,
            'required' => true,
            'multilang' => false,
        ],
        'Query' => [
            'db_field' => 'q',
        ],
        'Language' => [
            'db_field' => 'lang_code',
            'alt_key' => true,
            'required' => true,
            'multilang' => true,
        ],
        'Count' => [
            'db_field' => 'qid',
            'process_get' => ['fn_cls_exim_count_requests', '#this'],
        ],

    ],
    'order_by' => 'qid',

];
