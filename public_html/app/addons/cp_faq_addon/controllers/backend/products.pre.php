<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

// POST data processing
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        fn_trusted_vars(
            'product_data',
            'override_products_data',
            'product_files_descriptions',
            'add_product_files_descriptions',
            'products_data',
            'product_file',
            'cp_faq_product_data',
            'cp_faq_new_quest'
        );
        if (!empty($_REQUEST['cp_faq_product_data']) && !empty($_REQUEST['cp_faq_product_data']['faq_questions']) && !empty($_REQUEST['product_id'])) {
            fn_cp_faq_addon_update_product_question($_REQUEST['cp_faq_product_data']['faq_questions'], $_REQUEST['product_id']);
        }
    }
}
if ($mode == 'update') {
    if (!empty($_REQUEST['cp_faq_new_quest']) && !empty($_REQUEST['product_id'])) {
        if (!empty($_REQUEST['cp_faq_new_quest']['faq_question']) && !empty($_REQUEST['cp_faq_new_quest']['faq_answer']) && empty($_REQUEST['cp_faq_new_quest']['selected_quest'])) {
            $_REQUEST['cp_faq_new_quest']['product_id'] = $_REQUEST['product_id'];
            $quest_data[$_REQUEST['cp_faq_new_quest']['faq_question_id']] = $_REQUEST['cp_faq_new_quest'];
            $faq_question_id = fn_cp_faq_addon_update_product_question($quest_data, $_REQUEST['product_id']);
        }
        if (!empty($_REQUEST['cp_faq_new_quest']['selected_quest'])) {
            if (!empty($_REQUEST['cp_faq_new_quest']['single']) && $_REQUEST['cp_faq_new_quest']['single'] = 'Y') {
                $single = 'Y';
            } else {
                $single = 'N';
            }
            fn_cp_faq_addon_add_exist_question_to_prod($_REQUEST['cp_faq_new_quest'], $single, $_REQUEST['product_id'], $_REQUEST['cp_faq_new_quest']['question_position']);
        }
    }
    if (!empty($_REQUEST['delete_f_qu']) && $_REQUEST['delete_f_qu'] == 'Y' && !empty($_REQUEST['faq_question_id']) && !empty($_REQUEST['product_id'])) {
        if (!empty($_REQUEST['for_product'])) {
            $for_product = $_REQUEST['for_product'];
        }
        fn_cp_faq_addon_delete_faq_question($_REQUEST['faq_question_id'], $for_product, $_REQUEST['product_id']);
    }

    if (!empty($_REQUEST['delete_f_sec']) && $_REQUEST['delete_f_sec'] == 'Y' && !empty($_REQUEST['faq_section_id']) && !empty($_REQUEST['product_id'])) {
        if (!empty($_REQUEST['for_product'])) {
            $for_product = $_REQUEST['for_product'];
        }
        fn_cp_faq_addon_delete_faq_section($_REQUEST['faq_section_id'], $for_product, $_REQUEST['product_id']);
    }
}
