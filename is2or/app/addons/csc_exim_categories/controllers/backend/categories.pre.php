<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD']=="POST"){
	if ($mode == 'export_range') {
        if (!empty($_REQUEST['category_ids'])) {
            if (empty(Tygh::$app['session']['export_ranges'])) {
                Tygh::$app['session']['export_ranges'] = array();
            }
            if (empty(Tygh::$app['session']['export_ranges']['ceca_categories'])) {
                Tygh::$app['session']['export_ranges']['ceca_categories'] = array('pattern_id' => 'ceca_categories');
            }			
            Tygh::$app['session']['export_ranges']['ceca_categories']['data'] = array('category_id' => $_REQUEST['category_ids']);
            unset($_REQUEST['redirect_url']);			
            return array(CONTROLLER_STATUS_REDIRECT, 'exim.export?section=ceca_categories&pattern_id=' . Tygh::$app['session']['export_ranges']['ceca_categories']['pattern_id']);
        }
    }
	if ($mode == 'export_range_products') {
        if (!empty($_REQUEST['category_ids'])) {
			list($products, ) = fn_get_products(['cid' =>  $_REQUEST['category_ids'], 'load_products_extra_data' => false, 'subcats'=>'Y']);
            $product_ids = array_keys($products);
			if (!empty($product_ids)) {
				if (empty(Tygh::$app['session']['export_ranges'])) {
					Tygh::$app['session']['export_ranges'] = [];
				}	
				if (empty(Tygh::$app['session']['export_ranges']['products']['pattern_id'])) {
					Tygh::$app['session']['export_ranges']['products'] = ['pattern_id' => 'products'];
				}	
				Tygh::$app['session']['export_ranges']['products']['data'] = ['product_id' => $product_ids];	
				unset($_REQUEST['redirect_url'], Tygh::$app['session']['export_ranges']['products']['data_provider']);	
				return [
					CONTROLLER_STATUS_REDIRECT,
					'exim.export?section=products&pattern_id=' . Tygh::$app['session']['export_ranges']['products']['pattern_id'],
				];
			}
        }
    }
	
	
	 return array(CONTROLLER_STATUS_OK);
}


