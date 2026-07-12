<?php
/*
 * © 2023 Hungryweb  
 */

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if ($mode == 'view' && !empty($_REQUEST['page_id'])){

    $page = Tygh::$app['view']->getTemplateVars('page');

    if($page['page_type'] == PAGE_TYPE_INFOCENTER){

        $id_path = explode('/', $page['id_path']);
        $level = count($id_path);

        list($pages, $search) = fn_get_pages([
            'parent_id' => $_REQUEST['page_id'],
            'page_type' => PAGE_TYPE_INFOCENTER,
            'get_image' => true,
            'status' => 'A',
        ], 0);

        if(!empty($level) && (int)$level>3){
            $level = 3;
        }
    
        Tygh::$app['view']->assign('search', $search);
        Tygh::$app['view']->assign('pages', $pages);

        $content_tpl = 'addons/hw_infocenter/views/hw_infocenter/components/browse-item.tpl';
        if(!empty($pages)){
            $content_tpl = 'addons/hw_infocenter/views/hw_infocenter/components/browse-level-'.$level.'.tpl';
        }
        Tygh::$app['view']->assign('content_tpl', $content_tpl);        

        
        $extra_classes = Tygh::$app['view']->getTemplateVars('extra_classes');
        $extra_classes .= ' hw-infocenter';
        $extra_classes .= $level > 1 ? ' hw-infocenter__sub': '';

        Tygh::$app['view']->assign('extra_classes',  $extra_classes);

        if(!empty($id_path) && count($id_path) > 1){
            if (count($id_path) < 2) {
                $parent_id = $id_path[1];
            }else{
                $index = count($id_path) - ((count($id_path)==4) ? 3 : 2);
                $parent_id = $id_path[$index];
            }

            if(empty($pages)){
                Tygh::$app['view']->assign('breadcrumbs_hide_last', true);
            }

            list($main_pages, ) = fn_get_pages([
                'parent_id' => $parent_id,
                'page_type' => PAGE_TYPE_INFOCENTER,
                'status' => 'A',
            ], 0);
            Tygh::$app['view']->assign('main_pages', $main_pages);
        }

        Tygh::$app['view']->assign('id_path', $id_path);
    }
}