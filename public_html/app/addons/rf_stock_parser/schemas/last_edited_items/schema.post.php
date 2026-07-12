<?php

$schema['my_suppliers.update'] = [
    'func' => ['fn_get_my_supplier_name', '@my_supplier_id'],
    'text' => 'my_supplier',
];

return $schema;
