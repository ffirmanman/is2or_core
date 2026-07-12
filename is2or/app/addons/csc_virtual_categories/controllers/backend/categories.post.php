<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD']=="POST"){	
	return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'update' || $mode=="add") {
	Registry::set('navigation.tabs.csc_virtual_categories', array (
        'title' => __('csc_virtual_categories'),
        'js' => true
    ));		
	Tygh::$app['view']->assign('schema', fn_get_schema('csc_virtual_categories', 'conditions'));
}

if ($mode == 'cvc_dynamic') {
    Tygh::$app['view']->assign('schema', fn_get_schema('csc_virtual_categories', 'conditions'));
    
	Tygh::$app['view']->assign('prefix', $_REQUEST['prefix']);
    Tygh::$app['view']->assign('elm_id', $_REQUEST['elm_id']);

    if (!empty($_REQUEST['condition'])) {
        Tygh::$app['view']->assign('condition_data', array('condition' => $_REQUEST['condition']));
    }
}
