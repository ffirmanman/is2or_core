<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			https://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/

use Tygh\Registry;
use Tygh\Mailer;
use Tygh\CscVirtualCategories;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
$base_name = CscVirtualCategories::$base_name;
$lang_prefix = CscVirtualCategories::$lang_prefix;
$_view = CscVirtualCategories::_view();

if ($_SERVER['REQUEST_METHOD']=="POST"){
	if ($mode==$base_name::_('c2V0dGluZ3M=')){			
		if (!empty($_REQUEST[$base_name::_('c2V0dGluZ3M=')])){	
			CscVirtualCategories::_update_option_values($_REQUEST[$base_name::_('c2V0dGluZ3M=')]);
		}
		fn_set_notification('N', __('notice'), __('text_changes_saved'));		
	}
	return array(CONTROLLER_STATUS_OK, $lang_prefix.'.settings');
}

$_view->assign('page_title', __($base_name));

if ($mode==$base_name::_z('p2I0qTyhM3Z=')){
	$submenu = fn_get_schema($base_name, 'submenu');
	$_view->assign('submenu', $submenu);
	$options = CscVirtualCategories::_get_option_values();
	$_view->assign('options', $options);	
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
	
	$_view->assign('addon_base_name', $base_name);
	$_view->assign('addon_short_name', $lang_prefix);
	$_view->assign('allow_separate_storefronts', CscVirtualCategories::_allow_separate_storefronts());

	$_view->assign('subscription', CscVirtualCategories::_get_addon_info($base_name));		
}
if ($mode=='manage'){	
	$params = $_REQUEST;
	$submenu = fn_get_schema($base_name, 'submenu');
	$_view->assign('submenu', $submenu);	
	$options = CscVirtualCategories::_get_option_values();
	$_view->assign('options', $options);	
	$_view->assign('addon_base_name', $base_name);
	$_view->assign('addon_short_name', $lang_prefix);
	$_view->assign('allow_separate_storefronts', CscVirtualCategories::_allow_separate_storefronts());	
	$def_params = array(
		'simple'                   => false,
		'group_by_level'           => false,		 
		'items_per_page'           => 20,                
	);	
	$params = array_merge($def_params, $params);
	list($categories, $search) = fn_get_categories($params);
	$_view->assign('categories', $categories);
	$_view->assign('search', $search);
}

if ($mode=="run_linking"){
	if (!$auth['user_id'] && (empty($_REQUEST['key']) || $_REQUEST['key']!=Registry::get('settings.Security.cron_password'))){
		return array(CONTROLLER_STATUS_DENIED);	
	}
	fn_links_cats($_REQUEST);	
	if (!$auth['user_id']){
		die('done');	
	}
	fn_set_notification('N', __('notice'), __('cvc.linked_success'));		
	if (!empty($_REQUEST['cid'])){
		return array(CONTROLLER_STATUS_OK, 'categories.update?category_id='.$_REQUEST['cid']);	
	}else{
		return array(CONTROLLER_STATUS_OK, 'cvc.settings');	
	}	
}
