<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;
$schema = array(
    'conditions' => array (
        'price' => array (
            'operators' => array ( 'lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
            'type' => 'input'           
            
        ),
		'discount_prc' => array (
            'operators' => array ( 'lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
            'type' => 'input'           
            
        ),
        'categories' => array (
            'operators' => array ('in', 'nin'),
            'type' => 'picker',
            'picker_props' => array (
                'picker' => 'pickers/categories/picker.tpl',
                'params' => array (
                    'multiple' => true,
                    'use_keys' => 'N',
                    'view_mode' => 'table',
                ),
            )        
            
        ),
		'feature' => array (
            'operators' => array ('eq', 'neq', 'lte', 'gte', 'lt', 'gt', 'in', 'nin'),
            'type' => 'chained',
            'chained_options' => array(
                'parent_url' => 'product_features.get_features_list',
            )           
        ),
        'products' => array (
            'operators' => array ('in', 'nin'),
            'type' => 'picker',
            'picker_props' => array (
                'picker' => 'pickers/products/picker.tpl',                
                'params' => array (
                    'type' => 'links',
                ),
            )           
        ),
		'product_weight'=>array(
			'operators' => array ('eq', 'neq', 'lte', 'gte', 'lt', 'gt'),
            'type' => 'input'    
		),
		'product_name'=>array(
			'operators' => array ('like'),
            'type' => 'input'    
		),          
        
		'product_amount'=>array(
			'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
            'type' => 'input'    
		),
		'product_popularity'=>array(
			'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
            'type' => 'input'    
		),
		'product_timestamp'=>array(
			'operators' => array ('lte', 'gte', 'lt', 'gt'),
            'type' => 'date'    
		),
		'product_days'=>array(
			'operators' => array ('lt', 'gt'),
            'type' => 'input'    
		)
    )  
);
if (Registry::get('addons.bestsellers.status')=="A"){
	$schema['conditions']['product_sales'] = array(
        'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
        'type' => 'input'    
    );
}
if (Registry::get('addons.discussion.status')=="A"){
	$schema['conditions']['reviews_count'] = array(
        'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
        'type' => 'input'    
    );
	$schema['conditions']['avg_rating'] = array(
        'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
        'type' => 'select' ,
		'variants'=>range(0, 5),
		'variants_function'=>true  
    );	
	$schema['conditions']['last_review_days'] = array(
        'operators' => array ('lte', 'gte', 'lt', 'gt', 'eq', 'neq'),
        'type' => 'input'
    );	
}

if (fn_allowed_for('MULTIVENDOR') || 1==1){   
    $schema['conditions']['vendor'] = array(
        'operators' => array ('in', 'nin'),
		'type' => 'picker',		
		'picker_props' => array (
			'picker' => 'pickers/companies/picker.tpl',                
			'params' => array (
				'multiple' => true,
				'use_keys' => 'N',
				'view_mode' => 'table',
			),
		)   
    );
}

if (Registry::get('addons.suppliers.status')=="A"){
	$schema['conditions']['supplier'] = array(
        'operators' => array ('in', 'nin'),
		'type' => 'picker',		
		'picker_props' => array (
			'picker' => 'addons/suppliers/views/suppliers/components/picker/picker.tpl',                
			'params' => array (
				'multiple' => true,				
				'input_name_suffix'=>'[]'					
			),
		)    
    );
	
}




return $schema;
