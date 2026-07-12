<?php

require_once __DIR__ . '/markup_objects.functions.php';

$schema['cp_faq'] = [
    'type' => 'faq',
    'get_function' => 'fn_cp_faq_get_jld_markup_data',
    'extra_setting' => [
        'descr' => __('cp_faq_questions_title_text'),
    ],
];

return $schema;
