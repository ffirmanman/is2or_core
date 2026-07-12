<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
$schema['csc_virtual_categories'] = array (    
    'cid' => array (
        'type' => 'selectbox',
        'values'=>fn_csc_get_virtual_categories(),
		'no_lang'=>true
    ),
	'sort_by' => array(
		  'type' => 'selectbox',
		  'values' => array(
		  	'timestamp'=>'date',
			'product'=>'name',
			'price'=>'price'
		  ),		  
		  'default_value' => 'product'
	  ),
	  'sort_order' => array(
		  'type' => 'selectbox',
		  'values' => array(
		  	'asc'=>'asc',
			'desc'=>'desc'			
		  ),		  
		  'default_value' => 'asc'
	  ),
	  'limit' => array (
        'type' => 'input',
        'default_value' => 5, 
    ),
);


return $schema;
