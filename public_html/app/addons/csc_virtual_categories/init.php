<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
	'update_category_post',
	'get_category_data_post',
	'get_products_pre',
	'get_products',
	'get_categories',
	'get_categories_pre',
	'get_categories_after_sql',
	'get_cart_product_data_post_options',
	'gather_additional_product_data_before_discounts',
	'delete_category_after',
	['cvc_get_products_pre', '', 'abt__unitheme2']
	
);
if (version_compare(PRODUCT_VERSION, '4.9.3', '>')){
	fn_register_hooks(
		'get_filters_products_count_pre'
	);
}

