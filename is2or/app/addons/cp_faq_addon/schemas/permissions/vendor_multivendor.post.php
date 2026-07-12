<?php

$schema['controllers']['cp_faq_addon'] = [
    'modes' => [
        'edit_prod_sect' => [
            'permissions' => true,
        ],
        'edit_prod_quest' => [
            'permissions' => true,
        ],
        'manage' => [
            'permissions' => true,
        ],
        'update' => [
            'permissions' => true,
        ],
        'generate_anchor' => [
            'permissions' => true,
        ],
    ],
    'permissions' => false,
];
return $schema;
