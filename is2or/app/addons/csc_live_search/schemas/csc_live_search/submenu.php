<?php

use Tygh\Registry;

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
    'cls.menu' => [
        'cls.settings' => [
            'dispatch' => 'csc_live_search.settings',
        ],
        'cls.styles' => [
            'dispatch' => 'csc_live_search.styles',
        ],
        'cls.search_history' => [
            'dispatch' => 'csc_live_search.history',
            'subitems' => [
                'cls.history_per_request' => [
                    'dispatch' => 'csc_live_search.history.per_request',
                ],
                'cls.history_per_word' => [
                    'dispatch' => 'csc_live_search.history.per_word',
                ],
                'cls.history_per_product' => [
                    'dispatch' => 'csc_live_search.history.per_product',
                ],
                'cls.history_per_user' => [
                    'dispatch' => 'csc_live_search.history.per_user',
                ],
            ],
        ],
        'cls.search_synonyms' => [
            'dispatch' => 'csc_live_search.synonyms',
        ],
        'cls.stop_words' => [
            'dispatch' => 'csc_live_search.stop_words',
        ],
        'cls.search_motivation' => [
            'dispatch' => 'csc_live_search.search_motivation',
        ],
        'cls.search_phrases' => [
            'dispatch' => 'csc_live_search.search_phrases',
        ],
        'cls.search_speedup' => [
            'dispatch' => 'csc_live_search.speedup',
            'subitems' => [
                'cls.search_speedup_settings' => [
                    'dispatch' => 'csc_live_search.speedup.settings',
                ],
                'cls.search_speedup_indexation' => [
                    'dispatch' => 'csc_live_search.speedup.indexation',
                ],
            ],

        ],
    ],
];
if (fn_allowed_for('MULTIVENDOR') && Registry::get('runtime.company_id')) {
    $schema['cls.menu'] = [
        'cls.search_history' => $schema['cls.menu']['cls.search_history'],
    ];
    unset($schema['cls.menu']['cls.search_history']['subitems']['cls.history_per_user']);
}

return $schema;
