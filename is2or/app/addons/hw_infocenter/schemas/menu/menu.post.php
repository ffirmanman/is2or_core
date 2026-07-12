<?php
/*
 * © 2023 Hungryweb  
 */

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

$schema['central']['website']['items']['infocenter'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),    
    'href' => 'pages.manage?get_tree=multi_level&page_type=' . PAGE_TYPE_INFOCENTER,
    'alt' => 'pages.update?come_from=' . PAGE_TYPE_INFOCENTER,
    'position' => 1
);

return $schema;