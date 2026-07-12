<?php
/*
 * © 2023 Hungryweb  
 */

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($mode == 'feedback' && defined('AJAX_REQUEST')){
        fn_hw_infocenter_send_notification([
           'page_id' => $_REQUEST['id'] ?? 0, 
           'name' => $_REQUEST['type'] ?? '',
           'message' => $_REQUEST['message'] ?? '',   
           'company_id' => Registry::get('runtime.company_id')
        ]);
        exit(0);
    }
    return;
}

if ($mode == 'search'){

    $q = $_REQUEST['q'] ?? '';

    if(empty($q)){
        $infocenter_page_id = db_get_field("SELECT `page_id` FROM ?:pages WHERE `page_type` = ?s AND `parent_id` = ?i", PAGE_TYPE_INFOCENTER, 0);
        return [ CONTROLLER_STATUS_REDIRECT, fn_url('pages.view?page_id=' . $infocenter_page_id) ];
    }

    list($pages, $search) = fn_get_pages([
        'q' => $q,
        'page_type' => PAGE_TYPE_INFOCENTER,
        'get_image' => true,
        'status' => 'A',
        'sort_by' => 'timestamp',
        'sort_order' => 'desc'
    ], Registry::get('settings.Appearance.elements_per_page'));    

    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('pages', $pages);

    $extra_classes = Tygh::$app['view']->getTemplateVars('extra_classes');
    $extra_classes .= ' hw-infocenter';
    $extra_classes .= ' hw-infocenter__sub';

    Tygh::$app['view']->assign('extra_classes',  $extra_classes); 
}