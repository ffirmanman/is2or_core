<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           https://www.cs-commerce.com/license-agreement.html               *
*                                                                            *
*/

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
$schema = [
    'clsm.general' => [
        'clsm_title' => [
            'type' => 'title',
        ],
        'clsm_status' => [
            'type' => 'hidden',
            'default' => '0',
        ],
        'clsm_motivation_text_' . DESCR_SL => [
            'type' => 'template',
            'template' => 'addons/csc_live_search/views/csc_live_search/components/search_motivation_field.tpl',
            'tooltip' => true,
        ],
    ],
];
if (!empty($_REQUEST['s_storefront'])) {
    unset($schema['clsm.general']['clsm_motivation_text_' . DESCR_SL]);
    $schema['clsm.general']['clsm_motivation_text_' . DESCR_SL . '_' . $_REQUEST['s_storefront']] = [
        'type' => 'template',
        'template' => 'addons/csc_live_search/views/csc_live_search/components/search_motivation_field.tpl',
        'tooltip' => true,
        'alt_field_name' => 'clsm_motivation_text_' . DESCR_SL,
    ];
}

return $schema;
