<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fn_trusted_vars('section_data');
    $suffix = '';
    if ($mode == 'update') {
        if (!empty($_REQUEST['redirect_url'])) {
            $_REQUEST['redirect_url'] = 'cp_faq_addon.manage';
        }
        if (!empty($_REQUEST['section_data'])) {
            $faq_section_id = fn_cp_faq_addon_update_faq_section_data($_REQUEST['section_data'], $_REQUEST['faq_section_id'], DESCR_SL);
            if (fn_allowed_for('ULTIMATE') && !empty($_REQUEST['share_objects']) && !empty($_REQUEST['share_objects']['faq_sections'])) {
                fn_cp_faq_addon_check_shared_prod_sections($faq_section_id);
            }
            $suffix = ".update?faq_section_id={$faq_section_id}";
        } else {
            $suffix = '.manage';
        }
    }
    if ($mode == 'm_delete_sections') {
        if (!empty($_REQUEST['faq_section_ids'])) {
            fn_cp_faq_addon_delete_faq_section($_REQUEST['faq_section_ids']);
        }
        $suffix = '.manage';
    }
    if ($mode == 'm_update_faq_sections') {
        if (!empty($_REQUEST['faq_sections'])) {
            fn_cp_faq_addon_update_faq_sections($_REQUEST['faq_sections']);
        }
        $suffix = '.manage';
    }
    if ($mode == 'add_question') {
        if (!empty($_REQUEST['section_data']['faq_questions']['new'])) {
            if (!empty($_REQUEST['section_data']['faq_questions']['new']['faq_question']) && !empty($_REQUEST['section_data']['faq_questions']['new']['faq_answer'])) {
                $faq_section_id = $_REQUEST['section_data']['faq_questions']['new']['faq_section_id'];
                fn_cp_faq_addon_update_product_question($_REQUEST['section_data']['faq_questions']);
                $suffix = ".update?faq_section_id={$faq_section_id}";
            } else {
                fn_set_notification('W', __('warning'), __('please_enter_faq_question_and_answer'));
                $faq_section_id = $_REQUEST['section_data']['faq_questions']['new']['faq_section_id'];
                $suffix = ".update?faq_section_id={$faq_section_id}";
                if (empty($_REQUEST['section_data']['faq_questions']['new']['faq_question'])) {
                    $suffix .= '&empty_quest=Y';
                }
                if (empty($_REQUEST['section_data']['faq_questions']['new']['faq_answer'])) {
                    $suffix .= '&empty_answer=Y';
                }
            }
        } else {
            $suffix = '.manage';
        }
    }
    if ($mode == 'delete_question') {
        if (!empty($_REQUEST['faq_section_id']) && !empty($_REQUEST['faq_question_id'])) {
            $faq_section_id = $_REQUEST['faq_section_id'];
            fn_cp_faq_addon_delete_faq_question($_REQUEST['faq_question_id']);
            $suffix = ".update?faq_section_id={$faq_section_id}";
        }
    }
    return [CONTROLLER_STATUS_OK, "cp_faq_addon{$suffix}"];
}

if ($mode == 'update') {
    if (!empty($_REQUEST['faq_section_id'])) {
        $section_data = fn_cp_faq_addon_get_faq_section_data($_REQUEST['faq_section_id']);
        if (empty($section_data)) {
            return [CONTROLLER_STATUS_NO_PAGE];
        }
    } else {
        $section_data = [];
    }
    Registry::set(
        'navigation.tabs', [
            'general' => [
                'title' => __('general'),
                'js' => true,
            ],
            'cp_sect_quest' => [
                'title' => __('cp_faq_questions'),
                'js' => true,
            ],
        ]
    );
    if (!empty($_REQUEST['empty_quest'])) {
        $section_data['empty_quest'] = 'Y';
    }
    if (!empty($_REQUEST['empty_answer'])) {
        $section_data['empty_answer'] = 'Y';
    }
    if (Registry::get('addons.seo.status') == 'A') {
        if (empty($section_data['seo_name']) && !empty($section_data['faq_section_id'])) {
            $section_data['seo_name'] = fn_seo_get_name('q', $section_data['faq_section_id'], '', null, DESCR_SL);
        }
    }
    if (defined('AJAX_REQUEST')) {
        Registry::get('view')->assign('section_data', $section_data);
        Registry::get('view')->display('addons/cp_faq_addon/views/cp_faq_addon/update.tpl');
        exit;
    }
    Registry::get('view')->assign('section_data', $section_data);
} elseif ($mode == 'manage' || $mode == 'section_picker') {
    $cpv1 = 'settings.Appearance.admin_elements_per_page';
    $cpv2 = 'runtime.company_id';
    $params = $_REQUEST;
    if ($mode == 'manage') {
        $params['sect_manage'] = true;
    }
    list($faq_sections, $search) = fn_cp_faq_addon_get_faq_sections($params, Registry::get($cpv1), DESCR_SL);
    if (fn_allowed_for('MULTIVENDOR')) {
        $comp_id = Registry::get($cpv2);
        if (empty($comp_id)) {
            $cp_allow_save = true;
        } else {
            $cp_allow_save = false;
        }
    } else {
        $cp_allow_save = true;
    }
    Registry::get('view')->assign('cp_allow_save', $cp_allow_save);
    Registry::get('view')->assign('search', $search);
    Registry::get('view')->assign('faq_sections', $faq_sections);
} elseif ($mode == 'section_delete') {
    if (!empty($_REQUEST['faq_section_id'])) {
        fn_cp_faq_addon_delete_faq_section($_REQUEST['faq_section_id']);
    }
    return [CONTROLLER_STATUS_REDIRECT, 'cp_faq_addon.manage'];
}
if ($mode == 'question_picker') {
    list($faq_questions, $search) = fn_cp_faq_addon_get_faq_questions($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);

    Registry::get('view')->assign('faq_questions', $faq_questions);
    Registry::get('view')->assign('search', $search);
    Registry::get('view')->display('addons/cp_faq_addon/pickers/question_picker/picker_contents.tpl');

    exit;
}

if ($mode == 'section_picker') {
    list($all_faq_sections, $search) = fn_cp_faq_addon_get_all_faq_sections_data($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);

    Registry::get('view')->assign('faq_sections', $all_faq_sections);
    Registry::get('view')->assign('search', $search);
    Registry::get('view')->display('addons/cp_faq_addon/pickers/section_picker/picker_contents.tpl');

    exit;
}
if ($mode == 'edit_prod_sect') {
    $prod_section_data = [];
    if (!empty($_REQUEST['faq_section_id'])) {
        $prod_section_data = fn_cp_faq_addon_get_faq_section_data($_REQUEST['faq_section_id']);
        $sect_id = $_REQUEST['faq_section_id'];
    } else {
        //get sections for select at add section on product
        if (!empty($_REQUEST['company_id']) && fn_allowed_for('ULTIMATE')) {
            $get_shared_sect_comp = db_get_fields('SELECT share_object_id FROM ?:ult_objects_sharing WHERE share_company_id = ?i AND share_object_type = ?s', $_REQUEST['company_id'], 'faq_sections');
            $cp_faq_prod_sec_selector = db_get_array(
                'SELECT ?:faq_sections.*, ?:faq_sections_descr.faq_section_name FROM ?:faq_sections 
                LEFT JOIN ?:faq_sections_descr ON ?:faq_sections_descr.faq_section_id = ?:faq_sections.faq_section_id 
                WHERE NOT EXISTS (SELECT * FROM ?:faq_sections_products WHERE ?:faq_sections_products.faq_section_id = ?:faq_sections.faq_section_id AND ?:faq_sections_products.product_id = ?i) AND (?:faq_sections.company_id = ?i OR ?:faq_sections.faq_section_id IN (?n)) AND ?:faq_sections.status = ?s AND ?:faq_sections.for_product = ?s AND ?:faq_sections_descr.lang_code = ?s', $_REQUEST['product_id'], $_REQUEST['company_id'], $get_shared_sect_comp, 'A', 'N', DESCR_SL
            );
        } else {
            $cp_faq_prod_sec_selector = db_get_array(
                'SELECT ?:faq_sections.*, ?:faq_sections_descr.faq_section_name FROM ?:faq_sections 
                LEFT JOIN ?:faq_sections_descr ON ?:faq_sections_descr.faq_section_id = ?:faq_sections.faq_section_id 
                WHERE NOT EXISTS (SELECT * FROM ?:faq_sections_products WHERE ?:faq_sections_products.faq_section_id = ?:faq_sections.faq_section_id AND ?:faq_sections_products.product_id = ?i) AND ?:faq_sections.status = ?s AND ?:faq_sections.for_product = ?s AND ?:faq_sections_descr.lang_code = ?s', $_REQUEST['product_id'], 'A', 'N', DESCR_SL
            );
        }
        if (!empty($cp_faq_prod_sec_selector)) {
            usort($cp_faq_prod_sec_selector, 'fn_cp_faq_addon_sorting_sections_by_name');
        }
        Registry::get('view')->assign('cp_faq_prod_sec_selector', $cp_faq_prod_sec_selector);
        Registry::get('view')->assign('add_new_sec', 'Y');
        $sect_id = 0;
    }
    Registry::get('view')->assign('sect_id', $sect_id);
    Registry::get('view')->assign('add_new_quest', 'N');

    if (!empty($_REQUEST['product_id'])) {
        Registry::get('view')->assign('cp_index_faq', $_REQUEST['product_id']);
    }
    $prod_question_data = [];
    Registry::get('view')->assign('back_comp_id', $_REQUEST['company_id']);
    Registry::get('view')->assign('prod_question_data', $prod_question_data);
    Registry::get('view')->assign('prod_section_data', $prod_section_data);
} elseif ($mode == 'edit_prod_quest') {
    $prod_question_data = [];
    if (!empty($_REQUEST['faq_question_id'])) {
        $quest_params = [];
        $quest_params['faq_question_id'] = $_REQUEST['faq_question_id'];
        list($prod_question_data) = fn_cp_faq_addon_get_faq_questions($quest_params);

        $quest_id = $_REQUEST['faq_question_id'];

        if (!empty($_REQUEST['faq_section_id'])) {
            $sect_id = $_REQUEST['faq_section_id'];
        } else {
            $sect_id = 0;
        }
    } else {
        //get questions for select at add question on product
        if (!empty($_REQUEST['company_id']) && fn_allowed_for('ULTIMATE')) {
            $get_shared_sect_comp = db_get_fields('SELECT share_object_id FROM ?:ult_objects_sharing WHERE share_company_id = ?i AND share_object_type = ?s', $_REQUEST['company_id'], 'faq_sections');
            $cp_faq_prod_question_selector = db_get_array(
                'SELECT ?:faq_questions_cp.*, ?:faq_questions_descr.faq_question FROM ?:faq_questions_cp 
                LEFT JOIN ?:faq_questions_descr ON ?:faq_questions_descr.faq_question_id = ?:faq_questions_cp.faq_question_id 
                WHERE NOT EXISTS (SELECT * FROM ?:faq_questions_products WHERE ?:faq_questions_products.faq_question_id = ?:faq_questions_cp.faq_question_id AND ?:faq_questions_products.product_id = ?i) AND (?:faq_questions_cp.company_id = ?i OR ?:faq_questions_cp.faq_section_id IN (?n)) AND ?:faq_questions_cp.status = ?s AND ?:faq_questions_cp.for_product = ?s AND ?:faq_questions_descr.lang_code = ?s', $_REQUEST['product_id'], $_REQUEST['company_id'], $get_shared_sect_comp, 'A', 'N', DESCR_SL
            );
        } else {
            $cp_faq_prod_question_selector = db_get_array(
                'SELECT ?:faq_questions_cp.*, ?:faq_questions_descr.faq_question FROM ?:faq_questions_cp  
                LEFT JOIN ?:faq_questions_descr ON ?:faq_questions_descr.faq_question_id = ?:faq_questions_cp.faq_question_id 
                    WHERE NOT EXISTS (SELECT * FROM ?:faq_questions_products WHERE ?:faq_questions_products.faq_question_id = ?:faq_questions_cp.faq_question_id AND ?:faq_questions_products.product_id = ?i) AND ?:faq_questions_cp.status = ?s AND ?:faq_questions_cp.for_product = ?s AND ?:faq_questions_descr.lang_code = ?s', $_REQUEST['product_id'], 'A', 'N', DESCR_SL
            );
        }
        if (!empty($cp_faq_prod_question_selector)) {
            usort($cp_faq_prod_question_selector, 'fn_cp_faq_addon_sorting_questions_by_name');
        }
        Registry::get('view')->assign('cp_faq_prod_question_selector', $cp_faq_prod_question_selector);
        Registry::get('view')->assign('add_new_quest', 'Y');
        $quest_id = 0;
        if (!empty($_REQUEST['faq_section_id'])) {
            $sect_id = $_REQUEST['faq_section_id'];
        } else {
            $sect_id = 0;
        }
    }
    Registry::get('view')->assign('quest_id', $quest_id);
    Registry::get('view')->assign('sect_id', $sect_id);
    Registry::get('view')->assign('prod_section_data', $prod_section_data = []);
    Registry::get('view')->assign('add_new_sec', 'N');

    if (!empty($_REQUEST['faq_section_id'])) {
        Registry::get('view')->assign('cp_faq_sec_id', $_REQUEST['faq_section_id']);
    } else {
        Registry::get('view')->assign('cp_faq_sec_id', 0);
    }
    if (!empty($_REQUEST['product_id'])) {
        Registry::get('view')->assign('cp_index_faq', $_REQUEST['product_id']);
    }

    Registry::get('view')->assign('back_comp_id', $_REQUEST['company_id']);
    Registry::get('view')->assign('prod_question_data', $prod_question_data);
} elseif ($mode == 'delete_question') {
    if (!empty($_REQUEST['faq_section_id']) && !empty($_REQUEST['faq_question_id'])) {
        $faq_section_id = $_REQUEST['faq_section_id'];
        fn_cp_faq_addon_delete_faq_question($_REQUEST['faq_question_id']);
        $suffix = ".update?faq_section_id={$faq_section_id}";
        return [CONTROLLER_STATUS_REDIRECT, 'cp_faq_addon' . $suffix];
    }
    return [CONTROLLER_STATUS_REDIRECT, 'cp_faq_addon.manage'];
} elseif ($mode == 'generate_anchor') {
    if (!empty($_REQUEST['q_name'])) {
        $trimed_name = trim($_REQUEST['q_name']);
        if (!empty($trimed_name)) {
            $acnhor = fn_cp_faq_addon_generate_anchor($trimed_name, $_REQUEST['id']);
            Registry::get('ajax')->assign('anchor', $acnhor);
        }
    }
    exit;
}
