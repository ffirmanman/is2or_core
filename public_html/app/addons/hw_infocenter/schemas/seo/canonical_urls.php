<?php
/*
 * © 2023 Hungryweb  
 */

$schema['pages']['view'] = array(
    'base_url' => 'pages.view?page_id=[page_id]',
    'request_handlers' => array(
        'page_id' => true
    ),
    'search' => true
);

return $schema;
