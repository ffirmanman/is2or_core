<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'faq_search') {
        $params = [];
        $params = $_REQUEST;
        if (!empty($_REQUEST['block_sect_items_ids'])) {
            $params['item_ids'] = $_REQUEST['block_sect_items_ids'];
            $params['section_picker'] = 'Y';
            unset($params['block_sect_items_ids']);
        }
        if (!empty($_REQUEST['is_sec_view']) && !empty($_REQUEST['f_sect_view_id'])) {
            $params['item_ids'] = $_REQUEST['f_sect_view_id'];
        }
        list($all_faq_sections, $params) = fn_cp_faq_addon_get_all_faq_sections_data($params, Registry::get('settings.Appearance.admin_elements_per_page'));
        $faq_search_filter = [];
        if (!empty($all_faq_sections)) {
            $faq_search_filter = fn_cp_faq_addon_filter_search($all_faq_sections, $_REQUEST);
        }
        if (!empty($_REQUEST['faq_request'])) {
            $req_no_hide_questions = 'Y';
            $req_no_hide_answers = 'Y';
            Registry::get('view')->assign('req_no_hide_questions', $req_no_hide_questions);
            Registry::get('view')->assign('req_no_hide_answers', $req_no_hide_answers);
        }
        if (!empty($params['item_ids'])) {
            Registry::get('view')->assign('back_items_ids', $params['item_ids']);
        }
        Registry::get('view')->assign('search', $params);
        Registry::get('view')->assign('no_hide_questions', $_REQUEST['faq_hide_questions']);
        Registry::get('view')->assign('no_hide_answers', $_REQUEST['faq_hide_answers']);
        Registry::get('view')->assign('show_block_searh', $_REQUEST['show_block_searh']);
        Registry::get('view')->assign('search_back', $_REQUEST['faq_request']);
        Registry::get('view')->assign('faq_block_id', $_REQUEST['faq_block_id']);
        Registry::get('view')->assign('all_faq_sections', $faq_search_filter);

        if (!empty($_REQUEST['is_sec_view'])) {
            Registry::get('view')->display('addons/cp_faq_addon/views/cp_faq_addon/view.tpl');
        } else {
            Registry::get('view')->display('addons/cp_faq_addon/views/cp_faq_addon/faq_menu.tpl');
        }
        exit;
    }
    if ($mode == 'faq_quest_search') {
        $params = [];
        $params = $_REQUEST;
        if (!empty($_REQUEST['block_sect_items_ids'])) {
            $params['item_ids'] = $_REQUEST['block_sect_items_ids'];
            $params['question_picker'] = 'Y';
            unset($params['block_sect_items_ids']);
        }
        list($faq_questions, $params) = fn_cp_faq_addon_get_faq_questions($params);
        $faq_search_filter = [];
        if (!empty($faq_questions)) {
            $faq_search_filter = fn_cp_faq_addon_question_filter_search($faq_questions, $_REQUEST);
        }
        if (!empty($_REQUEST['faq_request'])) {
            $req_no_hide_answers = 'Y';
            Registry::get('view')->assign('req_no_hide_answers', $req_no_hide_answers);
        }
        if (!empty($params['item_ids'])) {
            Registry::get('view')->assign('back_items_ids', $params['item_ids']);
        }
        Registry::get('view')->assign('no_hide_answers', $_REQUEST['faq_hide_answers']);
        Registry::get('view')->assign('show_block_searh', $_REQUEST['show_block_searh']);
        Registry::get('view')->assign('search_back', $_REQUEST['faq_request']);
        Registry::get('view')->assign('faq_block_id', $_REQUEST['faq_block_id']);
        Registry::get('view')->assign('faq_questions', $faq_search_filter);
        Registry::get('view')->display('addons/cp_faq_addon/views/cp_faq_addon/faq_menu_questions.tpl');
        exit;
    }
    if ($mode == 'tab_faq_search') {
        $params = [];
        $params = $_REQUEST;
        if (!empty($_REQUEST['block_sect_items_ids'])) {
            $params['item_ids'] = $_REQUEST['block_sect_items_ids'];
            $params['section_picker'] = 'Y';
            $params['for_product'] = 'Y';
            unset($params['block_sect_items_ids']);
            if (!empty($_REQUEST['faq_block_id'])) {
                $params['product_id'] = $_REQUEST['faq_block_id'];
            }
        }
        list($all_faq_sections, $params) = fn_cp_faq_addon_get_all_faq_sections_data($params);
        $faq_search_sect_filter = [];
        if (!empty($all_faq_sections)) {
            $faq_search_sect_filter = fn_cp_faq_addon_filter_search($all_faq_sections, $_REQUEST);
        }
        if (!empty($params['item_ids'])) {
            Registry::get('view')->assign('sect_back_items_ids', $params['item_ids']);
            unset($params['item_ids']);
        }
        if (!empty($_REQUEST['block_quest_items_ids'])) {
            $params['item_ids'] = $_REQUEST['block_quest_items_ids'];
            $params['question_picker'] = 'Y';
            unset($params['block_quest_items_ids']);
        }
        list($faq_questions, $params) = fn_cp_faq_addon_get_faq_questions($params);
        $faq_search_quest_filter = [];
        if (!empty($faq_questions)) {
            $faq_search_quest_filter = fn_cp_faq_addon_question_filter_search($faq_questions, $_REQUEST);
            if (!empty($faq_search_quest_filter)) {
                usort($faq_search_quest_filter, 'fn_cp_faq_addon_sort_questions');
            }
        }
        if (!empty($params['item_ids'])) {
            Registry::get('view')->assign('quest_back_items_ids', $params['item_ids']);
        }
        if (!empty($_REQUEST['faq_request'])) {
            $req_no_hide_questions = 'Y';
            $req_no_hide_answers = 'Y';
            Registry::get('view')->assign('req_no_hide_questions', $req_no_hide_questions);
            Registry::get('view')->assign('req_no_hide_answers', $req_no_hide_answers);
        }
        if (empty($faq_search_sect_filter) && empty($faq_search_quest_filter)) {
            //             fn_set_notification('N', __('notice'), __('text_no_matching_products_found'));
        }

        Registry::get('view')->assign('no_hide_questions', $_REQUEST['faq_hide_questions']);
        Registry::get('view')->assign('no_hide_answers', $_REQUEST['faq_hide_answers']);
        Registry::get('view')->assign('show_block_searh', $_REQUEST['show_block_searh']);
        Registry::get('view')->assign('search_back', $_REQUEST['faq_request']);
        Registry::get('view')->assign('faq_block_id', $_REQUEST['faq_block_id']);
        Registry::get('view')->assign('search_done', 'Y');
        Registry::get('view')->assign('faq_sections', $faq_search_sect_filter);
        Registry::get('view')->assign('faq_questions', $faq_search_quest_filter);
        Registry::get('view')->display('addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl');
        exit;
    }
}
if ($mode == 'faq_menu') {
    $params = [];
    if (!empty($_REQUEST)) {
        $params = $_REQUEST;
    }
    Registry::set('for_main_faq', true);
    list($all_faq_sections, $params) = fn_cp_faq_addon_get_all_faq_sections_data($params, Registry::get('settings.Appearance.admin_elements_per_page'));
    //add page title to setting
    $page_title = Registry::get('addons.cp_faq_addon.meta_title_faq_page');
    $page_title = trim($page_title);
    if (!empty($page_title)) {
        fn_add_breadcrumb(trim($page_title));
    } else {
        fn_add_breadcrumb(__('faq_for_bread'));
    }
    Registry::get('view')->assign('all_faq_sections', $all_faq_sections);
    Registry::get('view')->assign('search', $params);
} elseif ($mode == 'view') {
    if (!empty($_REQUEST['faq_section_id'])) {
        $section_data = fn_cp_faq_addon_get_faq_section_data($_REQUEST['faq_section_id']);
        if (empty($section_data)) {
            return [CONTROLLER_STATUS_NO_PAGE];
        }
        $new_sec_data = [];
        $new_sec_data[] = $section_data;
        fn_add_breadcrumb($section_data['faq_section_name']);

        if (!empty($section_data['meta_description'])) {
            $meta_description = trim($section_data['meta_description']);
            Registry::get('view')->assign('meta_description', $meta_description);
        }
        if (!empty($section_data['meta_keywords'])) {
            $meta_keyw = trim($section_data['meta_keywords']);
            Registry::get('view')->assign('meta_keywords', $meta_keyw);
        }
        if (!empty($section_data['page_title'])) {
            $page_title = trim($section_data['page_title']);
            Registry::get('view')->assign('page_title', $page_title);
        }
        Registry::get('view')->assign('all_faq_sections', $new_sec_data);
        Registry::get('view')->assign('faq_section_id', $_REQUEST['faq_section_id']);
    }
}
