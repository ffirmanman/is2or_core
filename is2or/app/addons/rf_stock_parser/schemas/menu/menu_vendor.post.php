<?php

defined('BOOTSTRAP') || exit('Access denied');

// @var array $schema

$schema['central']['products']['items']['rf_stock_parser'] = [
    'attrs' => [
        'class' => 'is-addon',
    ],
    'href' => 'rf_stock_parser.manage',
    'position' => 240,
];

return $schema;
