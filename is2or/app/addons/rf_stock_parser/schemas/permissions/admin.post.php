<?php

defined('BOOTSTRAP') || exit('Access denied');

$schema['rf_stock_parser'] = [
    'modes' => [
        'add' => [
            'permissions' => 'manage_rf_stock_parser',
        ],
        'view' => [
            'permissions' => 'view_rf_stock_parser',
        ],
        'update' => [
            'permissions' => 'manage_rf_stock_parser',
        ],
        'delete' => [
            'permissions' => 'manage_rf_stock_parser',
        ],
        'm_delete' => [
            'permissions' => 'manage_rf_stock_parser',
        ],
        'manage' => [
            'permissions' => 'view_rf_stock_parser',
        ],
    ],
    'permissions' => 'manage_rf_stock_parser',
];

return $schema;
