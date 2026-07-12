<?php

$schema['q'] = [
    'table' => '?:faq_sections_descr',
    'description' => 'faq_section_name',
    'dispatch' => 'cp_faq_addon.view',
    'item' => 'faq_section_id',
    'condition' => '',
    'name' => 'faq_section_name',
    'html_options' => ['file'],
    'option' => 'seo_other_type',
    'exist_function' => function ($faq_section_id) {
        return db_get_field('SELECT 1 FROM ?:faq_sections WHERE faq_section_id = ?i', $faq_section_id);
    },
];
return $schema;
