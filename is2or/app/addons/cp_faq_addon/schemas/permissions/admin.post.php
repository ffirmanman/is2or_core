<?php

$schema['cp_faq_addon'] = [
    'modes' => [
        'update' => [
            'use_company' => true,
        ],
    ],
    'permissions' => 'manage_cp_faq_addon',
];
$schema['cp_faq_addon'] = [
    'permissions' => ['GET' => 'view_cp_faq_addon', 'POST' => 'manage_cp_faq_addon'],
    'modes' => [
        'delete' => [
            'permissions' => 'manage_cp_faq_addon',
        ],
    ],
];

return $schema;
