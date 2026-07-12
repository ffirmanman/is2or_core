<?php

$schema['my_suppliers'] = [
    'controller' => 'my_suppliers',
    'mode' => 'update',
    'type' => 'tpl_tabs',
    'params' => [
        'object_id' => '@my_supplier_id',
        'object' => 'my_suppliers',
    ],
    'table' => [
        'name' => 'my_suppliers',
        'key_field' => 'my_supplier_id',
    ],
    'request_object' => 'supplier_data',
    'have_owner' => true,
];

return $schema;
