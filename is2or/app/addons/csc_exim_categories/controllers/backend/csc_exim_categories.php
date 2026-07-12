<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/

use Tygh\Registry;
use Tygh\CscEximCategories;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$base_name = CscEximCategories::$base_name;
$lang_prefix = CscEximCategories::$lang_prefix;
$_view = CscEximCategories::_view();


if ($_SERVER['REQUEST_METHOD']=="POST"){
	if ($mode==$base_name::_('c2V0dGluZ3M=')){			
		if (!empty($_REQUEST[$base_name::_('c2V0dGluZ3M=')])){	
			CscEximCategories::_update_option_values($_REQUEST[$base_name::_('c2V0dGluZ3M=')]);
		}
		fn_set_notification('N', __('notice'), __('text_changes_saved'));		
	}
	if ($mode=="generate_codes"){
		$categories = db_get_fields("SELECT category_id FROM ?:categories WHERE category_code=?s", '');
		foreach ($categories as $category_id){
			$exist = db_get_field("SELECT category_id FROM ?:categories WHERE category_code=?s", $category_id);
			if ($exist){				
				$code = chr(rand(65,90)).chr(rand(65,90)).'-'.$category_id;	
			}else{
				$code = $category_id;	
			}
			db_query("UPDATE ?:categories SET category_code=?s WHERE category_id=?i", $code, $category_id);
		}
		
		fn_set_notification('N', __('notice'), __($lang_prefix.'.category_codes_was_set_success'));
		
	}
	
		
	return array(CONTROLLER_STATUS_OK, $base_name.'.settings');
}

$_view->assign('addon_base_name', $base_name);
$_view->assign('lp', $lang_prefix);
$_view->assign('submenu', fn_get_schema($base_name, 'submenu'));
$_view->assign('options', CscEximCategories::_get_option_values());
$_view->assign('page_title', __($base_name));

if ($mode==$base_name::_z('p2I0qTyhM3Z=')){	
	$fields = fn_get_schema($base_name, 'settings');		  
    $_view->assign('fields', $fields);		
	$tabs = array();
    $tabs_codes = array_keys($fields);
    foreach($tabs_codes as $tab_code) {
        $tabs[$tab_code] = array (
            'title' => __($lang_prefix.'.tab_' . $tab_code),
            'js' => true
        );
    }
	Registry::set('navigation.tabs', $tabs);
	$_view->assign('allow_separate_storefronts', CscEximCategories::_allow_separate_storefronts());	
	
	$_view->assign('no_codes', db_get_field("SELECT COUNT(*) FROM ?:categories WHERE category_code=''"));	
	
	$_view->assign('subscription', CscEximCategories::_get_addon_info($base_name));	
	
}




