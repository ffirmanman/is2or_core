<?php

$menu = [
    'attrs' => [
        'class' => 'is-addon',
    ],
    'href' => 'cp_faq_addon.manage',
    'position' => 600,
    'subitems' => [
        'faq_sections' => [
            'href' => 'cp_faq_addon.manage',
            'position' => 1000,
        ],
        'cp_fq_icons_class' => [
            'href' => 'cp_faq_addon.demo_icons',
            'position' => 1001,
        ],
    ],
];
if (isset($schema['central']['cart_power_addons'])) {
    $schema['central']['cart_power_addons']['items']['faq_sections'] = $menu;
} else {
    $schema['central']['website']['items']['faq_sections'] = $menu;
}
return $schema;
