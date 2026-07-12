<?php

$schema['faq_sections'] = [
    'controller' => 'cp_faq_addon',
    'mode' => 'update',
    'type' => 'tpl_tabs',
    'params' => [
        'object_id' => '@faq_section_id',
        'object' => 'faq_sections',
    ],
    'table' => [
        'name' => 'faq_sections',
        'key_field' => 'faq_section_id',
    ],
    'request_object' => 'section_data',
    'have_owner' => true,
];

return $schema;
