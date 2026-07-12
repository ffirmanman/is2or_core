<?php

$schema['controllers']['rf_stock_parser'] = [
    'permissions' => true,
    'modes' => [
        'cron' => [
            'permissions' => false,
        ],
        'migration_test' => [
            'permissions' => false,
        ],
        'update_settings' => [
            'permissions' => false,
        ],
        'dev_info' => [
            'permissions' => false,
        ],
        'view' => [
            'permissions' => true,
        ],
        'add' => [
            'permissions' => true,
        ],
    ],
];

return $schema;
