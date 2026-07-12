<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        if (!empty($_REQUEST['cp_faq_product_data']) && !empty($_REQUEST['cp_faq_product_data']['faq_sections']) && !empty($_REQUEST['product_id'])) {
            fn_cp_faq_addon_update_product_section($_REQUEST['cp_faq_product_data']['faq_sections'], $_REQUEST['product_id']);
        }
        if (!empty($_REQUEST['cp_faq_new_sec']) && !empty($_REQUEST['product_id'])) {
            if (!empty($_REQUEST['cp_faq_new_sec']['faq_section_name']) && empty($_REQUEST['cp_faq_new_sec']['selected_sect'])) {
                if (empty($_REQUEST['faq_section_id'])) {
                    $_REQUEST['cp_faq_new_sec']['single'] = 'Y';
                    $faq_section_id = 0;
                } else {
                    $_REQUEST['cp_faq_new_sec']['single'] = 'N';
                    $faq_section_id = $_REQUEST['faq_section_id'];
                }
                $_REQUEST['cp_faq_new_sec']['product_id'] = $_REQUEST['product_id'];
                $faq_section_id = fn_cp_faq_addon_update_faq_section_data($_REQUEST['cp_faq_new_sec'], $faq_section_id, DESCR_SL);
            }
            if (!empty($_REQUEST['cp_faq_new_sec']['selected_sect'])) {
                fn_cp_faq_addon_add_sect_to_product($_REQUEST['cp_faq_new_sec']['selected_sect'], $_REQUEST['product_id'], $_REQUEST['cp_faq_new_sec']['section_position']);
            }
        }
    }
}
if ($mode == 'update') {
    Registry::set(
        'navigation.tabs.faq_questions_picker', [
            'title' => __('cp_fq_faq_tab_text'),
            'js' => true,
        ]
    );
    $comp_id = Registry::get('runtime.company_id');
    Registry::get('view')->assign('back_comp_id', $comp_id);
    if (Registry::get('addons.product_variations.status') == 'A') {
        if (!empty($_REQUEST['product_id'])) {
            $product_data = Tygh::$app['view']->getTemplateVars('product_data');
            if (!empty($product_data) && !empty($product_data['variation_parent_product_id'])) {
                $parent_faq_type = fn_cp_faq_addon_get_parent_faq_type($product_data['variation_parent_product_id']);
                if (!empty($parent_faq_type) && $parent_faq_type == 'C') {
                    Registry::get('view')->assign('cp_fq_custom_var', true);
                }
                Registry::get('view')->assign('cp_fq_variation_text_info', fn_url('products.update?product_id=' . $product_data['variation_parent_product_id'] . '&selected_section=addons#acc_cp_fq_faq_tab_text'));
            }
        }
        Registry::get('view')->assign('cp_variation_active', true);
    }
}
