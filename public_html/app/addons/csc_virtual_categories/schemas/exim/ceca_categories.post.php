<?php
use Tygh\Registry;
$schema['references']['csc_virtual_categories_conditions'] = array (
	'reference_fields' => array (
	  'category_id' => '#key'
	),			
	'join_type' => 'LEFT'		
);

$schema['export_fields']['IsVirtual']= [
	'db_field'  => 'is_virtual',	
    'table' => 'csc_virtual_categories_conditions'
];
$schema['export_fields']['VirtualConditions']=[
	'db_field'  => 'conditions',	
    'table' => 'csc_virtual_categories_conditions'
];
  


return $schema;

 
