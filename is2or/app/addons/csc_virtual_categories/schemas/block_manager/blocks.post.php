<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
$schema['product_filters']['cache']['update_handlers'][]='csc_virtual_categories_conditions'; 
$schema['product_filters_home']['cache']['update_handlers'][]='csc_virtual_categories_conditions';
$schema['products']['cache']['update_handlers'][]='csc_virtual_categories_conditions';

$schema['products']['content']['items']['fillings']['csc_virtual_categories'] = array (
    'params' => array (
		'force_virtual' => true,
	)
);
 

return $schema;