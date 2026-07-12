<?php

use Tygh\Registry;
use Tygh\Languages\Languages;
use Tygh\BlockManager\ProductTabs;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

//delete faq object if deleting company
function fn_cp_faq_addon_delete_company($company_id, $result)
{
    if (!empty($result) && !empty($company_id)) {
        $company_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE company_id = ?i', $company_id);
        if (!empty($company_sections)) {
            fn_cp_faq_addon_delete_faq_section($company_sections);
        }
    }
}
//share faq section if shared product
function fn_cp_faq_addon_check_and_update_product_sharing($product_id, $shared, $shared_categories_company_ids, $new_categories_company_ids)
{
    if (!empty($shared)) {
        if (!empty($new_categories_company_ids) && $shared_categories_company_ids != $new_categories_company_ids) {
            $existing_prod_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections_products WHERE product_id = ?i', $product_id);
            if (!empty($existing_prod_sections)) {
                $prod_sec_for_delete = db_get_fields('SELECT ?:faq_sections_products.faq_section_id FROM ?:faq_sections_products LEFT JOIN ?:faq_sections ON ?:faq_sections.faq_section_id = ?:faq_sections_products.faq_section_id WHERE ?:faq_sections_products.product_id = ?i AND ?:faq_sections.for_product = ?s', $product_id, 'Y');
                if (!empty($prod_sec_for_delete)) {
                    db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id IN (?n) AND share_object_type = ?s', $prod_sec_for_delete, 'faq_sections');
                }
                foreach ($existing_prod_sections as $sect_id) {
                    foreach ($new_categories_company_ids as $pr_comp_id) {
                        $shar_data = [
                            'share_company_id' => $pr_comp_id,
                            'share_object_id' => $sect_id,
                            'share_object_type' => 'faq_sections',
                        ];
                        db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                    }
                }
            }
        }
    } else {
        if (!empty($new_categories_company_ids)) {
            $existing_prod_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections_products WHERE product_id = ?i', $product_id);
            if (!empty($existing_prod_sections)) {
                $prod_sec_for_delete = db_get_fields('SELECT ?:faq_sections_products.faq_section_id FROM ?:faq_sections_products LEFT JOIN ?:faq_sections ON ?:faq_sections.faq_section_id = ?:faq_sections_products.faq_section_id WHERE ?:faq_sections_products.product_id = ?i AND ?:faq_sections.for_product = ?s', $product_id, 'Y');
                if (!empty($prod_sec_for_delete)) {
                    db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id IN (?n) AND share_object_type = ?s', $prod_sec_for_delete, 'faq_sections');
                }
                foreach ($existing_prod_sections as $sect_id) {
                    foreach ($new_categories_company_ids as $pr_comp_id) {
                        $shar_data = [
                            'share_company_id' => $pr_comp_id,
                            'share_object_id' => $sect_id,
                            'share_object_type' => 'faq_sections',
                        ];
                        db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                    }
                }
            }
        }
    }
}
// check sections on products and check share object
function fn_cp_faq_addon_check_shared_prod_sections($faq_section_id)
{
    if (!empty($faq_section_id)) {
        $check_section_products = db_get_fields('SELECT product_id FROM ?:faq_sections_products WHERE faq_section_id = ?i', $faq_section_id);
        $get_shared_sect_comp = db_get_fields('SELECT share_company_id FROM ?:ult_objects_sharing WHERE share_object_id = ?i AND share_object_type = ?s', $faq_section_id, 'faq_sections');
        if (!empty($check_section_products)) {
            foreach ($check_section_products as $key => $prod_id) {
                $get_shared_com_prod = db_get_fields('SELECT c.company_id FROM ?:products_categories pc LEFT JOIN ?:categories c ON c.category_id = pc.category_id WHERE pc.product_id = ?i', $prod_id);
                if (!empty($get_shared_com_prod)) {
                    foreach ($get_shared_com_prod as $pr_comp_id) {
                        if (!in_array($pr_comp_id, $get_shared_sect_comp)) {
                            $shar_data = [
                                'share_company_id' => $pr_comp_id,
                                'share_object_id' => $faq_section_id,
                                'share_object_type' => 'faq_sections',
                            ];
                            db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                            $comp_name = fn_get_company_name($pr_comp_id);
                            $prod_name = fn_get_product_name($prod_id);
                            fn_set_notification('W', __('warning'), __('you_cant_remove_company') . ' ' . $comp_name . ' ' . __('from_this_faq_section') . ': ' . $prod_name);
                        }
                    }
                }
            }
        }
    }
    return true;
}
//end
function fn_cp_faq_addon_font_awesome_info_icons()
{
    $link = fn_url('cp_faq_addon.demo_icons', 'A');
    return __('cp_you_can_find_icons_here') . ' <a target="_blank" href="' . $link . '">' . __('cp_icons') . '</a>';
}
function fn_cp_faq_addon_faq_page_instructions()
{
    return __('cp_faq_page_instruction_settings');
}
function fn_cp_faq_addon_generate_anchor($name, $id = 0)
{
    $anchor = '';
    if (!empty($name)) {
        $delimiter = '_';
        $name = preg_replace('/ {2,}/', ' ', $name);
        $name = html_entity_decode($name, ENT_QUOTES, 'UTF-8'); // convert html special chars back to original chars
        if (!empty($name)) {
            $literals = "/[^a-z0-9-\.]/";
            $convert_letters = fn_get_schema('literal_converter', 'schema');
            $name = strtr($name, $convert_letters);
            $name = fn_strtolower($name); // only lower letters
            $name = preg_replace($literals, '', $name); // URL can contain latin letters, numbers, dashes and points only
            $name = str_replace('-', $delimiter, $name);
            $anchor = trim($name, '-'); // remove trailing dash if exist
            if (!empty($anchor)) {
                if (!empty($id)) {
                    $check_exists = db_get_fields('SELECT qu_anchor FROM ?:faq_questions_cp WHERE qu_anchor = ?s AND faq_question_id != ?i', $anchor, $id);
                } else {
                    $check_exists = db_get_fields('SELECT qu_anchor FROM ?:faq_questions_cp WHERE qu_anchor = ?s', $anchor);
                }
                if (!empty($check_exists)) {
                    $anchor .= '_' . (count($anchor) + 1);
                }
            }
        }
    }
    return $anchor;
}
function fn_cp_faq_addon_add_sect_to_product($faq_section_id, $product_id, $section_position = 1)
{
    if (!empty($faq_section_id)) {
        $data = [
            'faq_section_id' => $faq_section_id,
            'section_position' => $section_position,
            'product_id' => $product_id,
        ];
        db_query('INSERT INTO ?:faq_sections_products ?e', $data);
        if (fn_allowed_for('ULTIMATE')) {
            $get_shared_com_prod = db_get_fields('SELECT c.company_id FROM ?:products_categories pc LEFT JOIN ?:categories c ON c.category_id = pc.category_id WHERE pc.product_id = ?i', $product_id);
            if (!empty($get_shared_com_prod)) {
                foreach ($get_shared_com_prod as $comp_id) {
                    if (!empty($comp_id)) {
                        $shar_data = [
                            'share_company_id' => $comp_id,
                            'share_object_id' => $faq_section_id,
                            'share_object_type' => 'faq_sections',
                        ];
                        db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                    }
                }
            }
        }
    }
    return true;
}
function fn_cp_faq_addon_delete_product_post($product_id, $product_deleted)
{
    if (!empty($product_id) && !empty($product_deleted)) {
        $all_prod_quest = db_get_fields('SELECT faq_question_id FROM ?:faq_questions_products WHERE product_id = ?i', $product_id);
        if (!empty($all_prod_quest)) {
            db_query('DELETE FROM ?:faq_questions_cp WHERE faq_question_id IN (?n)', $all_prod_quest);
            db_query('DELETE FROM ?:faq_questions_descr WHERE faq_question_id IN (?n)', $all_prod_quest);
            db_query('DELETE FROM ?:faq_questions_products WHERE product_id = ?i', $product_id);
        }
        $prod_sect_ids = db_get_fields('SELECT faq_section_id FROM ?:faq_sections_products WHERE product_id = ?i', $product_id);
        if (!empty($prod_sect_ids)) {
            db_query('DELETE FROM ?:faq_sections WHERE faq_section_id IN (?n)', $prod_sect_ids);
            db_query('DELETE FROM ?:faq_sections_descr WHERE faq_section_id IN (?n)', $prod_sect_ids);
            db_query('DELETE FROM ?:faq_sections_products WHERE product_id = ?i', $product_id);
        }
    }
}
//update free products section
function fn_cp_faq_addon_update_product_section($faq_section, $product_id)
{
    if (!empty($faq_section) && !empty($product_id)) {
        $lang_code = DESCR_SL;
        if (fn_allowed_for('ULTIMATE')) {
            $get_shared_com_prod = db_get_fields('SELECT c.company_id FROM ?:products_categories pc LEFT JOIN ?:categories c ON c.category_id = pc.category_id WHERE pc.product_id = ?i', $product_id);
        }
        foreach ($faq_section as $key => $section) {
            if ($key != 'new') {
                $section['product_id'] = $product_id;
                db_query('UPDATE ?:faq_sections_products SET ?u WHERE faq_section_id = ?i AND product_id = ?i', $section, $section['faq_section_id'], $product_id);
                if ($section['for_product'] == 'N') {
                    unset($section['section_position']);
                }
                db_query('UPDATE ?:faq_sections SET ?u WHERE faq_section_id = ?i', $section, $section['faq_section_id']);
                db_query('UPDATE ?:faq_sections_descr SET ?u WHERE faq_section_id = ?i AND lang_code = ?s', $section, $section['faq_section_id'], $lang_code);
                //add sections to ult
                if (fn_allowed_for('ULTIMATE')) {
                    if (!empty($get_shared_com_prod)) {
                        foreach ($get_shared_com_prod as $comp_id) {
                            $shar_data = [
                                'share_company_id' => $comp_id,
                                'share_object_id' => $section['faq_section_id'],
                                'share_object_type' => 'faq_sections',
                            ];
                            db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                        }
                    }
                }
                if (!empty($section['faq_questions']) && $section['for_product'] == 'Y') {
                    fn_cp_faq_addon_update_product_question($section['faq_questions'], $product_id);
                }
            }
        }
    }
    return true;
}
//update free products question
function fn_cp_faq_addon_update_product_question($faq_questions, $product_id = 0)
{
    if (!empty($faq_questions)) {
        $lang_code = DESCR_SL;
        foreach ($faq_questions as $key => $question) {
            if (!empty($key) && $key != 'new') {
                if (!empty($question['qu_anchor'])) {
                    $check_anhor = db_get_fields('SELECT qu_anchor FROM ?:faq_questions_cp WHERE qu_anchor = ?s AND faq_question_id <> ?i', $question['qu_anchor'], $question['faq_question_id']);
                    if (!empty($check_anhor)) {
                        fn_set_notification('W', __('notice'), __('that_anchor_already_exist') . ' - ' . $question['qu_anchor']);
                        unset($question['qu_anchor']);
                    }
                }
                if (!empty($product_id)) {
                    $question['product_id'] = $product_id;
                    db_query('UPDATE ?:faq_questions_products SET ?u WHERE faq_question_id = ?i AND product_id = ?i', $question, $question['faq_question_id'], $product_id);
                }
                if (!empty($question['for_product']) && $question['for_product'] == 'N') {
                    unset($question['question_position']);
                }
                db_query('UPDATE ?:faq_questions_cp SET ?u WHERE faq_question_id = ?i', $question, $question['faq_question_id']);
                db_query('UPDATE ?:faq_questions_descr SET ?u WHERE faq_question_id = ?i AND lang_code = ?s', $question, $question['faq_question_id'], $lang_code);
            } else {
                if (!empty($question['qu_anchor'])) {
                    $check_anhor = db_get_fields('SELECT qu_anchor FROM ?:faq_questions_cp WHERE qu_anchor = ?s', $question['qu_anchor']);
                    if (!empty($check_anhor)) {
                        fn_set_notification('W', __('notice'), __('that_anchor_already_exist') . ' - ' . $question['qu_anchor']);
                        unset($question['qu_anchor']);
                    }
                }
                $faq_question_id = $question['faq_question_id'] = db_query('REPLACE INTO ?:faq_questions_cp ?e', $question);

                if (!empty($question['for_product']) && $question['for_product'] == 'Y') {
                    if (empty($question['faq_section_id'])) {
                        $question['single'] = 'Y';
                    }
                    db_query('REPLACE INTO ?:faq_questions_products ?e', $question);
                }
                foreach (fn_get_translation_languages() as $question['lang_code'] => $_v) {
                    db_query('REPLACE INTO ?:faq_questions_descr ?e', $question);
                }
                return $faq_question_id;
            }
        }
    }
    return true;
}

//delete mnual product faq question
function fn_cp_faq_addon_delete_faq_product_question($faq_question_id, $product_id)
{
    if (!empty($product_id) && !empty($faq_question_id)) {
        db_query('DELETE FROM ?:faq_questions_cp WHERE faq_question_id = ?i AND product_id = ?i', $faq_question_id, $product_id);
        db_query('DELETE FROM ?:faq_questions_descr WHERE faq_question_id = ?i', $faq_question_id);
        db_query('DELETE FROM ?:faq_questions_products WHERE faq_question_id = ?i AND product_id = ?i', $faq_question_id, $product_id);
    }
    return true;
}
// filter faq result for FAQ questions and product tab
function fn_cp_faq_addon_question_filter_search($faq, $params)
{
    if (!empty($faq) && !empty($params['faq_request'])) {
        $params['faq_request'] = trim($params['faq_request']);
        foreach ($faq as $quest_key => $faq_quest) {
            $chek_quest = preg_match('/' . $params['faq_request'] . '/iu', strip_tags($faq_quest['faq_question']));
            if (!empty($chek_quest)) {
                continue;
            }
            $chek_answ = preg_match('/' . $params['faq_request'] . '/iu', strip_tags($faq_quest['faq_answer']));
            if (!empty($chek_answ)) {
                continue;
            }
            unset($faq[$quest_key]);

            if (empty($faq[$quest_key]['faq_answer'])) {
                unset($faq[$quest_key]);
            }
        }
    }
    return $faq;
}
// filter faq result for FAQ sections
function fn_cp_faq_addon_filter_search($faq, $params)
{
    if (!empty($faq) && !empty($params['faq_request'])) {
        $params['faq_request'] = trim($params['faq_request']);
        foreach ($faq as $sec_key => $faq_sec) {
            if (!empty($faq_sec['faq_questions'])) {
                foreach ($faq_sec['faq_questions'] as $quest_key => $faq_quest) {
                    $chek_quest = preg_match('/' . $params['faq_request'] . '/iu', strip_tags($faq_quest['faq_question']));
                    if (!empty($chek_quest)) {
                        continue;
                    }
                    $chek_answ = preg_match('/' . $params['faq_request'] . '/iu', strip_tags($faq_quest['faq_answer']));
                    if (!empty($chek_answ)) {
                        continue;
                    }
                    unset($faq[$sec_key]['faq_questions'][$quest_key]);
                }
            }
            if (empty($faq[$sec_key]['faq_questions'])) {
                unset($faq[$sec_key]);
            }
        }
    }
    return $faq;
}
//sortin sections by name
function fn_cp_faq_addon_sorting_sections_by_name($a, $b)
{
    $result = strcasecmp($a['faq_section_name'], $b['faq_section_name']);
    if ($result == 0) {
        return 0;
    }
    if ($result < 0) {
        return -1;
    }
    return 1;
}
//sortin questions by name
function fn_cp_faq_addon_sorting_questions_by_name($a, $b)
{
    $result = strcasecmp($a['faq_question'], $b['faq_question']);
    if ($result == 0) {
        return 0;
    }
    if ($result < 0) {
        return -1;
    }
    return 1;
}
function fn_cp_faq_addon_get_product_faq_data($product_id)
{
    $cp_faq_questions = $cp_faq_sections = [];
    if (!empty($product_id)) {
        $check_free_quest = db_get_fields('SELECT faq_question_id FROM ?:faq_questions_products WHERE product_id = ?i AND single = ?s', $product_id, 'Y');
        if (!empty($check_free_quest)) {
            $faq_quest_params['item_ids'] = implode(',', $check_free_quest);
            $faq_quest_params['product_id'] = $product_id;
            $faq_quest_params['question_picker'] = 'Y';
            $faq_quest_params['for_product'] = 'Y';
            list($cp_faq_questions, $params_quest_faq) = fn_cp_faq_addon_get_faq_questions($faq_quest_params);
            if (!empty($cp_faq_questions)) {
                usort($cp_faq_questions, 'fn_cp_faq_addon_sort_questions');
            }
        }
        $check_free_section = db_get_fields('SELECT faq_section_id FROM ?:faq_sections_products WHERE product_id = ?i', $product_id);
        if (!empty($check_free_section)) {
            $faq_sect_params['item_ids'] = implode(',', $check_free_section);
            $faq_sect_params['product_id'] = $product_id;
            $faq_sect_params['section_picker'] = 'Y';
            $faq_sect_params['for_product'] = 'Y';
            list($cp_faq_sections, $params_sect_faq) = fn_cp_faq_addon_get_all_faq_sections_data($faq_sect_params);
            if (!empty($cp_faq_sections)) {
                usort($cp_faq_sections, 'fn_cp_faq_addon_sort_sections');
            }
        }
    }
    return [$cp_faq_questions, $cp_faq_sections];
}
function fn_cp_faq_addon_gather_additional_product_data_post(&$product, $auth, $params)
{
    if (AREA == 'C' && !empty($product['cp_fq_get_in_gather'])) {
        if (!empty($product['variation_parent_product_id']) && !empty($product['variation_group_id'])) {//for variations
            $parent_faq_type = fn_cp_faq_addon_get_parent_faq_type($product['variation_parent_product_id']);
            if (!empty($parent_faq_type) && $parent_faq_type == 'M') {
                list($product['cp_faq_questions'], $product['cp_faq_sections']) = fn_cp_faq_addon_get_product_faq_data($product['variation_parent_product_id']);
            } else {
                list($product['cp_faq_questions'], $product['cp_faq_sections']) = fn_cp_faq_addon_get_product_faq_data($product['product_id']);
            }
        } else {
            list($product['cp_faq_questions'], $product['cp_faq_sections']) = fn_cp_faq_addon_get_product_faq_data($product['product_id']);
        }
    }
}
function fn_cp_faq_addon_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
    if (AREA == 'A') {
        $faq_quest_params['product_id'] = $product_data['product_id'];
        list($product_data['cp_faq_prod_questions'], $params_quest_faq) = fn_cp_faq_addon_get_faq_questions($faq_quest_params);

        $faq_sect_params['product_id'] = $product_data['product_id'];
        list($product_data['cp_faq_prod_section'], $params_sect_faq) = fn_cp_faq_addon_get_all_faq_sections_data($faq_sect_params);
    } else {
        if (Registry::get('addons.product_variations.status') == 'A') {
            $product_data['cp_fq_get_in_gather'] = true;
        } else {
            list($product_data['cp_faq_questions'], $product_data['cp_faq_sections']) = fn_cp_faq_addon_get_product_faq_data($product_data['product_id']);
        }
    }
}

function fn_cp_faq_addon_instal_func()
{
    if (fn_allowed_for('ULTIMATE')) {
        $all_comp = db_get_fields('SELECT company_id FROM ?:companies');
    } else {
        $all_comp = [];
        $all_comp[0] = 0;
    }
    foreach ($all_comp as $company) {
        if (Registry::get('addons.seo.status') == 'A') {
            foreach (fn_get_translation_languages() as $lc => $_v) {
                fn_create_seo_name(0, 's', 'FAQ', 0, 'cp_faq_addon.faq_menu', $company, $lc);
            }
        }
        $data = [
            'tab_type' => 'T',
            'name' => __('faq_for_bread'),
            'block_id' => 0,
            'template' => 'addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl',
            'addon' => 'cp_faq_addon',
            'status' => 'A',
            'is_primary' => 'Y',
            'company_id' => $company,
            'lang_code' => DESCR_SL,
            'position' => ProductTabs::instance()->getMaxPosition() + 1,
        ];
        ProductTabs::instance()->update($data);
    }
    if (version_compare(PRODUCT_VERSION, '4.9.3', '>')) {
        db_query('UPDATE ?:privileges SET group_id = ?s WHERE privilege = ?s', 'cp_fq_privil', 'view_cp_faq_addon');
        db_query('UPDATE ?:privileges SET group_id = ?s WHERE privilege = ?s', 'cp_fq_privil', 'manage_cp_faq_addon');
    }
    return true;
}

function fn_cp_faq_addon_update_faq_sections($faq_sections)
{
    if (!empty($faq_sections)) {
        foreach ($faq_sections as $sec_id => $f_section) {
            if (!empty($f_section)) {
                db_query('UPDATE ?:faq_sections SET ?u WHERE faq_section_id = ?i', $f_section, $sec_id);
            }
        }
    }
    return true;
}
function fn_cp_faq_addon_get_faq_questions($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
    $default_params = [
        'page' => 1,
        'items_per_page' => $items_per_page,
        'get_hidden' => true,
    ];
    $params = array_merge($default_params, $params);
    $fields = [
        '?:faq_sections.company_id',
        '?:faq_questions_cp.*',
        '?:faq_questions_descr.*',
    ];
    if (!empty($params['product_id'])) {
        $fields[] = '?:faq_questions_products.question_position';
    }
    $sortings = [
        'name' => '?:faq_questions_descr.faq_question',
        'status' => '?:faq_questions_cp.status',
        'position' => '?:faq_questions_cp.section_position',
    ];
    $condition = $join = $group = '';
    if (fn_allowed_for('ULTIMATE')) {
        $condition .= fn_get_company_condition('?:faq_sections.company_id');
    }
    $statuses = ['A'];
    if (!empty($params['get_hidden'])) {
        $statuses[] = 'H';
    }
    if (!empty($params['faq_question_id'])) {
        if (!is_array($params['faq_question_id'])) {
            $params['faq_question_id'] = [$params['faq_question_id']];
        }
        $condition .= db_quote(' AND ?:faq_questions_cp.faq_question_id IN (?a)', $params['faq_question_id']);
    }
    if (!empty($params['question_picker']) && $params['question_picker'] == 'Y' && !empty($params['item_ids'])) {
        $params['faq_question_id'] = explode(',', $params['item_ids']);
        if (!empty($params['faq_question_id'])) {
            $condition .= db_quote(' AND ?:faq_questions_cp.faq_question_id IN (?a) AND ?:faq_questions_cp.status = ?s', $params['faq_question_id'], 'A');
        }
    }
    if (!empty($params['product_id'])) {
        $join .= db_quote(' LEFT JOIN ?:faq_questions_products ON ?:faq_questions_products.faq_question_id = ?:faq_questions_cp.faq_question_id');
        $condition .= db_quote(' AND ?:faq_questions_products.product_id = ?i AND ?:faq_questions_products.single = ?s', $params['product_id'], 'Y');
    }
    if (isset($params['picker_for'])) {
        $condition .= db_quote(' AND ?:faq_questions_cp.for_product = ?s', 'N');
    }
    if (!empty($params['search_faq_questions'])) {
        $condition .= db_quote(' AND ?:faq_questions_descr.faq_question LIKE ?l', '%' . $params['search_faq_questions'] . '%');
    }
    if (!empty($params['active'])) {
        $condition .= db_quote(' AND ?:faq_questions_cp.status IN (?a)', $statuses);
    }
    $join .= db_quote(' LEFT JOIN ?:faq_questions_descr ON ?:faq_questions_descr.faq_question_id = ?:faq_questions_cp.faq_question_id AND ?:faq_questions_descr.lang_code = ?s', $lang_code);
    $join .= db_quote(' LEFT JOIN ?:faq_sections ON ?:faq_sections.faq_section_id = ?:faq_questions_cp.faq_section_id');
    if (AREA == 'A') {
        $sorting = db_sort($params, $sortings, 'name', 'desc');
    } else {
        $sorting = '';
    }

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:faq_questions_cp {$join} WHERE 1 {$condition} {$group}");
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }

    $faq_questions = db_get_hash_array('SELECT ' . implode(', ', $fields) . " FROM ?:faq_questions_cp {$join} WHERE 1 {$condition} {$group} {$sorting} {$limit}", 'faq_question_id');

    if (AREA == 'A' && empty($params['not_sorting'])) {
        if (!empty($faq_questions)) {
            usort($faq_questions, 'fn_cp_faq_addon_sort_questions');
        }
    }
    if (!empty($params['item_ids']) && !empty($params['question_picker'])) {
        $items = explode(',', $params['item_ids']);
        foreach ($items as $item) {
            if (!empty($faq_questions[$item])) {
                $new_faq_questions[$item] = $faq_questions[$item];
                $new_faq_questions[$item]['back_items_ids'] = $params['item_ids'];
            }
        }
        if (!empty($new_faq_questions)) {
            $faq_questions = $new_faq_questions;
        }
    }
    return [$faq_questions, $params];
}
function fn_cp_faq_addon_get_parent_faq_type($product_id)
{
    $type = 'M';
    if (!empty($product_id)) {
        $type = db_get_field('SELECT cp_fq_variation_type FROM ?:products WHERE product_id = ?i', $product_id);
    }
    return $type;
}
function fn_cp_faq_addon_get_faq_section_name($faq_sec_id, $lang_code = CART_LANGUAGE)
{
    if (!empty($faq_sec_id)) {
        return db_get_field('SELECT faq_section_name FROM ?:faq_sections_descr WHERE faq_section_id = ?i AND lang_code = ?s', $faq_sec_id, $lang_code);
    }
    return false;
}
function fn_cp_faq_addon_get_faq_question_name($faq_quest_id, $lang_code = CART_LANGUAGE)
{
    if (!empty($faq_quest_id)) {
        return db_get_field('SELECT faq_question FROM ?:faq_questions_descr WHERE faq_question_id = ?i AND lang_code = ?s', $faq_quest_id, $lang_code);
    }
    return false;
}

function fn_cp_faq_addon_get_all_faq_sections_data($params = [], $items_per_page = 0)
{
    $company_id = Registry::get('runtime.company_id');
    if (!empty($params['section_picker']) && $params['section_picker'] == 'Y' || (!empty($params['faq_preview']) && $params['faq_preview'] == 'Y') || !empty($params['is_sec_view'])) {
        if (!empty($params['item_ids'])) {
            $params['faq_section_id'] = explode(',', $params['item_ids']);
        }
        if (!empty($params['faq_section_id'])) {
            if (!empty($company_id)) {
                if (fn_allowed_for('ULTIMATE') && empty($params['product_id'])) {
                    $get_shared_sect_comp = db_get_fields('SELECT share_object_id FROM ?:ult_objects_sharing WHERE share_company_id = ?i AND share_object_type = ?s', $company_id, 'faq_sections');
                    $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND faq_section_id IN (?n) AND (company_id = ?i OR faq_section_id IN (?n)) ORDER BY section_position', 'A', $params['faq_section_id'], $company_id, $get_shared_sect_comp);
                } else {
                    $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND faq_section_id IN (?n) AND company_id IN (?n) ORDER BY section_position', 'A', $params['faq_section_id'], [0, $company_id]);
                }
            } else {
                $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND faq_section_id IN (?n) ORDER BY section_position', 'A', $params['faq_section_id']);
            }
        }
    } elseif (!empty($params['product_id'])) {
        $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections_products WHERE product_id = ?i ORDER BY section_position', $params['product_id']);
    } elseif (isset($params['picker_for'])) {
        $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE for_product = ?s ORDER BY section_position', 'N');
    } else {
        if (!empty($company_id)) {
            if (fn_allowed_for('ULTIMATE')) {
                $get_shared_sect_comp = db_get_fields('SELECT share_object_id FROM ?:ult_objects_sharing WHERE share_company_id = ?i AND share_object_type = ?s', $company_id, 'faq_sections');
                $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND (company_id = ?i OR faq_section_id IN (?n)) AND for_product = ?s ORDER BY section_position', 'A', $company_id, $get_shared_sect_comp, 'N');
            } else {
                $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND company_id = ?i AND for_product = ?s ORDER BY section_position', 'A', $company_id, 'N');
            }
        } else {
            if (AREA == 'A') {
                $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections ORDER BY section_position');
            } else {
                $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE status = ?s AND for_product = ?s ORDER BY section_position', 'A', 'N');
            }
        }
    }
    $all_faq_sections = [];
    if (!empty($all_sections)) {
        $for_main_faq = Registry::get('for_main_faq');
        if (!empty($for_main_faq)) {
            $all_sections = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE faq_section_id IN (?n) AND show_on_main = ?s', $all_sections, 'Y');
        }
        $for_product = 'N';
        if (!empty($params['product_id'])) {
            $for_product = 'Y';
        }
        if (!empty($all_sections)) {
            foreach ($all_sections as $section) {
                $all_faq_sections[$section] = fn_cp_faq_addon_get_faq_section_data($section, $for_product);
            }
        }
    }
    if (!empty($all_faq_sections)) {
        uasort($all_faq_sections, 'fn_cp_faq_addon_sort_sections');
    }
    if (!empty($params['item_ids']) && !empty($params['section_picker'])) {
        $items = explode(',', $params['item_ids']);
        foreach ($items as $item) {
            if (!empty($all_faq_sections[$item]) && !empty($all_faq_sections[$item]['faq_questions'])) {
                $new_faq_section[$item] = $all_faq_sections[$item];
                $new_faq_section[$item]['back_items_ids'] = $params['item_ids'];
            } elseif (!empty($all_faq_sections[$item]) && AREA == 'C') {
                unset($all_faq_sections[$item]);
            }
        }
        if (!empty($new_faq_section)) {
            $all_faq_sections = $new_faq_section;
        }
    }
    return [$all_faq_sections, $params];
}

function fn_cp_faq_addon_sort_sections($a, $b)
{
    if ($a['section_position'] == $b['section_position']) {
        return 0;
    }
    return ($a['section_position'] < $b['section_position']) ? -1 : 1;
}

function fn_cp_faq_addon_delete_faq_question($faq_question_ids, $for_product = 'N', $product_id = 0)
{
    if (!is_array($faq_question_ids)) {
        $faq_question_ids = [$faq_question_ids];
    }
    if (!empty($faq_question_ids)) {
        if ($for_product == 'N') {
            db_query('DELETE FROM ?:faq_questions_cp WHERE faq_question_id IN (?n)', $faq_question_ids);
            db_query('DELETE FROM ?:faq_questions_descr WHERE faq_question_id IN (?n)', $faq_question_ids);
            db_query('DELETE FROM ?:faq_questions_products WHERE faq_question_id IN (?n)', $faq_question_ids);
        } else {
            db_query('DELETE FROM ?:faq_questions_products WHERE faq_question_id IN (?n) AND product_id = ?i', $faq_question_ids, $product_id);
        }
    }
    return true;
}

function fn_cp_faq_addon_add_exist_question_to_prod($quest_data, $single, $product_id, $position = 1)
{
    if (!empty($quest_data['selected_quest']) && !empty($product_id)) {
        $data = [
            'faq_question_id' => $quest_data['selected_quest'],
            'product_id' => $product_id,
            'question_position' => $position,
        ];
        if (!empty($quest_data['faq_section_id'])) {
            $data['faq_section_id'] = $quest_data['faq_section_id'];
        }
        if (!empty($single) && $single == 'Y') {
            $data['single'] = $single;
        }
        db_query('INSERT INTO ?:faq_questions_products ?e', $data);
    }
    return true;
}

function fn_cp_faq_addon_delete_faq_section($faq_section_ids, $for_product = 'N', $product_id = 0)
{
    if (!empty($faq_section_ids)) {
        if (!is_array($faq_section_ids)) {
            $faq_section_ids = [$faq_section_ids];
        }
        if ($for_product == 'N') {
            db_query('DELETE FROM ?:faq_sections WHERE faq_section_id IN (?n)', $faq_section_ids);
            db_query('DELETE FROM ?:faq_sections_descr WHERE faq_section_id IN (?n)', $faq_section_ids);
            db_query('DELETE FROM ?:faq_sections_products WHERE faq_section_id IN (?n)', $faq_section_ids);
            $questions = db_get_fields('SELECT faq_question_id FROM ?:faq_questions_cp WHERE faq_section_id IN (?n)', $faq_section_ids);
            if (!empty($questions)) {
                fn_cp_faq_addon_delete_faq_question($questions);
            }
            if (fn_allowed_for('ULTIMATE')) {
                db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id IN (?n) AND share_object_type = ?s', $faq_section_ids, 'faq_sections');
            }
        } else {
            $check_single = db_get_fields('SELECT faq_section_id FROM ?:faq_sections WHERE faq_section_id IN (?n) AND single = ?s', $faq_section_ids, 'Y');
            if (!empty($check_single)) {
                db_query('DELETE FROM ?:faq_sections WHERE faq_section_id IN (?n)', $check_single);
                db_query('DELETE FROM ?:faq_sections_descr WHERE faq_section_id IN (?n)', $check_single);
                db_query('DELETE FROM ?:faq_sections_products WHERE faq_section_id IN (?n)', $check_single);
                $sing_questions = db_get_fields('SELECT faq_question_id FROM ?:faq_questions_cp WHERE faq_section_id IN (?n)', $check_single);
                if (!empty($sing_questions)) {
                    fn_cp_faq_addon_delete_faq_question($sing_questions);
                }
                if (fn_allowed_for('ULTIMATE')) {
                    db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id IN (?n) AND share_object_type = ?s', $check_single, 'faq_sections');
                }
            }
            db_query('DELETE FROM ?:faq_sections_products WHERE faq_section_id IN (?n) AND product_id = ?i', $faq_section_ids, $product_id);
        }
    }
    return true;
}

function fn_cp_faq_addon_update_faq_section_data($data, $faq_section_id, $lang_code = DESCR_SL)
{
    if (!empty($faq_section_id)) {
        db_query('UPDATE ?:faq_sections SET ?u WHERE faq_section_id = ?i', $data, $faq_section_id);
        db_query('UPDATE ?:faq_sections_descr SET ?u WHERE faq_section_id = ?i AND lang_code = ?s', $data, $faq_section_id, $lang_code);

        if (!empty($data['product_id'])) {
            db_query('UPDATE ?:faq_sections_products SET ?u WHERE faq_section_id = ?i', $data, $faq_section_id);
            if (fn_allowed_for('ULTIMATE')) {
                db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id = ?i AND share_object_type = ?s', $faq_section_id, 'faq_sections');
                $get_shared_com_prod = db_get_fields('SELECT c.company_id FROM ?:products_categories pc LEFT JOIN ?:categories c ON c.category_id = pc.category_id WHERE pc.product_id = ?i', $data['product_id']);

                if (!empty($get_shared_com_prod)) {
                    foreach ($get_shared_com_prod as $comp_id) {
                        if (!empty($comp_id)) {
                            $shar_data = [
                                'share_company_id' => $comp_id,
                                'share_object_id' => $faq_section_id,
                                'share_object_type' => 'faq_sections',
                            ];
                            db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                        }
                    }
                }
            }
        }
        if (!empty($data['faq_questions'])) {
            foreach ($data['faq_questions'] as $question) {
                if (fn_allowed_for('ULTIMATE')) {
                    $question['company_id'] = $data['company_id'];
                } else {
                    $question['company_id'] = 0;
                }
                if (!empty($question['qu_anchor'])) {
                    $check_anhor = db_get_fields('SELECT qu_anchor FROM ?:faq_questions_cp WHERE qu_anchor = ?s AND faq_question_id <> ?i', $question['qu_anchor'], $question['faq_question_id']);
                    if (!empty($check_anhor)) {
                        fn_set_notification('W', __('notice'), __('that_anchor_already_exist') . ' - ' . $question['qu_anchor']);
                        unset($question['qu_anchor']);
                    }
                }
                db_query('UPDATE ?:faq_questions_cp SET ?u WHERE faq_question_id = ?i', $question, $question['faq_question_id']);
                db_query('UPDATE ?:faq_questions_descr SET ?u WHERE faq_question_id = ?i AND lang_code = ?s', $question, $question['faq_question_id'], $lang_code);
            }
        }
        //SEO
        if (Registry::get('addons.seo.status') == 'A') {
            fn_seo_update_object($data, $faq_section_id, 'q', $lang_code);
        }
    } elseif (!empty($data['product_id'])) {
        $faq_section_id = $data['faq_section_id'] = db_query('REPLACE INTO ?:faq_sections ?e', $data);
        foreach (fn_get_translation_languages() as $data['lang_code'] => $_v) {
            db_query('REPLACE INTO ?:faq_sections_descr ?e', $data);
        }
        db_query('REPLACE INTO ?:faq_sections_products ?e', $data);

        if (fn_allowed_for('ULTIMATE')) {
            db_query('DELETE FROM ?:ult_objects_sharing WHERE share_object_id = ?i AND share_object_type = ?s', $faq_section_id, 'faq_sections');
            $get_shared_com_prod = db_get_fields('SELECT c.company_id FROM ?:products_categories pc LEFT JOIN ?:categories c ON c.category_id = pc.category_id WHERE pc.product_id = ?i', $data['product_id']);
            if (!empty($get_shared_com_prod)) {
                foreach ($get_shared_com_prod as $comp_id) {
                    if (!empty($comp_id)) {
                        $shar_data = [
                            'share_company_id' => $comp_id,
                            'share_object_id' => $faq_section_id,
                            'share_object_type' => 'faq_sections',
                        ];
                        db_query('REPLACE INTO ?:ult_objects_sharing ?e', $shar_data);
                    }
                }
            }
        }
    } else {
        $faq_section_id = $data['faq_section_id'] = db_query('REPLACE INTO ?:faq_sections ?e', $data);
        foreach (fn_get_translation_languages() as $data['lang_code'] => $_v) {
            db_query('REPLACE INTO ?:faq_sections_descr ?e', $data);
        }
    }
    return $faq_section_id;
}
function fn_cp_faq_addon_get_faq_section_data($faq_section_id, $for_product = 'N', $lang_code = DESCR_SL)
{
    $fields = $joins = [];
    $condition = '';
    $fields = [
        '?:faq_sections.*',
        '?:faq_sections_descr.*',
    ];
    if (!empty($for_product) && $for_product == 'Y') {
        $fields[] = '?:faq_sections_products.section_position';
    }
    $joins[] = db_quote('LEFT JOIN ?:faq_sections_descr ON ?:faq_sections_descr.faq_section_id = ?:faq_sections.faq_section_id AND ?:faq_sections_descr.lang_code = ?s', $lang_code);
    $joins[] = db_quote('LEFT JOIN ?:faq_sections_products ON ?:faq_sections_products.faq_section_id = ?:faq_sections.faq_section_id');
    $condition = db_quote('WHERE ?:faq_sections.faq_section_id = ?i', $faq_section_id);

    $section_data = db_get_row('SELECT ' . implode(', ', $fields) . ' FROM ?:faq_sections ' . implode(' ', $joins) . " {$condition}");
    if (empty($section_data['faq_section_id'])) {
        if (AREA != 'C') {
            $section_data['faq_section_id'] = $faq_section_id;
        } else {
            return [];
        }
    }

    $question_fields = [
        '?:faq_questions_cp.*',
        '?:faq_questions_descr.*',
    ];
    $is_single = db_get_field('SELECT single FROM ?:faq_sections WHERE faq_section_id = ?i AND single = ?s', $faq_section_id, 'Y');
    if (!empty($for_product) && $for_product == 'Y' && !empty($is_single)) {
        $question_fields[] = '?:faq_questions_products.question_position';
    }
    $quest_condition = $quest_join = '';

    $params = [];
    $statuses = ['A'];
    if (!empty($params['get_hidden'])) {
        $statuses[] = 'H';
    }
    if (AREA == 'C') {
        $quest_condition .= db_quote(' AND ?:faq_questions_cp.status = ?s', 'A');
    }
    $for_main_faq = Registry::get('for_main_faq');
    if (!empty($for_main_faq)) {
        $quest_condition .= db_quote(' AND ?:faq_questions_cp.show_on_main = ?s', 'Y');
    }
    $quest_join .= db_quote(' LEFT JOIN ?:faq_questions_descr ON ?:faq_questions_descr.faq_question_id = ?:faq_questions_cp.faq_question_id AND ?:faq_questions_descr.lang_code = ?s', $lang_code);
    $quest_join .= db_quote(' LEFT JOIN ?:faq_questions_products ON ?:faq_questions_products.faq_question_id = ?:faq_questions_cp.faq_question_id');

    if (!empty($for_product) && $for_product == 'Y') {
        if (AREA == 'C') {
            if (!empty($section_data['for_product']) && $section_data['for_product'] == 'Y') {
                $quest_condition .= db_quote(' AND ?:faq_questions_products.faq_section_id = ?i', $faq_section_id);
            } else {
                $quest_condition .= db_quote(' AND ?:faq_questions_cp.faq_section_id = ?i', $faq_section_id);
            }
        } else {
            $quest_condition .= db_quote(' AND ?:faq_questions_products.faq_section_id = ?i', $faq_section_id);
        }
    } else {
        $quest_condition .= db_quote(' AND ?:faq_questions_cp.faq_section_id = ?i', $faq_section_id);
    }
    $section_data['faq_questions'] = db_get_hash_array('SELECT ' . implode(', ', $question_fields) . " FROM ?:faq_questions_cp {$quest_join} WHERE 1 {$quest_condition}", 'faq_question_id');
    if (!empty($section_data['faq_questions'])) {
        usort($section_data['faq_questions'], 'fn_cp_faq_addon_sort_questions');
    }
    $host = defined('HTTPS') ? 'https' : 'http';

    $section_data['preview_url'] = fn_url("cp_faq_addon.view?faq_section_id={$faq_section_id}", 'C', $host, DESCR_SL);
    return $section_data;
}
function fn_cp_faq_addon_sort_questions($a, $b)
{
    if ($a['question_position'] == $b['question_position']) {
        return 0;
    }
    return ($a['question_position'] < $b['question_position']) ? -1 : 1;
}

function fn_cp_faq_addon_get_faq_sections($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
    $params['faq_section_id'] = 0;
    $default_params = [
        'page' => 1,
        'items_per_page' => $items_per_page,
        'get_hidden' => true,
    ];
    $params = array_merge($default_params, $params);
    $fields = [
        '?:faq_sections.*',
        '?:faq_sections_descr.*',
    ];
    $sortings = [
        'name' => '?:faq_sections_descr.faq_section_name',
        'status' => '?:faq_sections.status',
        'position' => '?:faq_sections.section_position',
        'show_main' => '?:faq_sections.show_on_main',
    ];
    $condition = $join = $group = '';

    $statuses = ['A'];
    if (!empty($params['get_hidden'])) {
        $statuses[] = 'H';
    }

    if (!empty($params['active'])) {
        $condition .= db_quote(' AND status IN (?a)', $statuses);
    }
    if (!empty($params['sect_manage'])) {
        $condition .= db_quote(' AND ?:faq_sections.for_product = ?s', 'N');
    }
    $join .= db_quote(' LEFT JOIN ?:faq_sections_descr ON ?:faq_sections_descr.faq_section_id = ?:faq_sections.faq_section_id AND ?:faq_sections_descr.lang_code = ?s', $lang_code);
    $sorting = db_sort($params, $sortings, 'position', 'asc');

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:faq_sections {$join} WHERE 1 {$condition} {$group}");
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }
    if (!empty($params['simple'])) {
        return db_get_hash_single_array("SELECT ?:faq_sections.faq_section_id, ?:faq_sections_descr.faq_section_name FROM ?:faq_sections {$join} WHERE 1 {$condition} {$group} {$sorting} {$limit}", ['faq_section_id', 'faq_section_name']);
    }
    $faq_sections = db_get_hash_array('SELECT ' . implode(', ', $fields) . " FROM ?:faq_sections {$join} WHERE 1 {$condition} {$group} {$sorting} {$limit}", 'faq_section_id');

    return [$faq_sections, $params];
}
function fn_cp_faq_addon_update_language_post($language_data, $lang_id, $action)
{
    if ($action == 'add') {
        list($faq_sections) = fn_cp_faq_addon_get_faq_sections([], 0, DEFAULT_LANGUAGE);
        $sec_names = db_get_hash_multi_array('SELECT ?:faq_sections.faq_section_id, ?:faq_sections_descr.faq_section_name, ?:faq_sections_descr.lang_code FROM ?:faq_sections LEFT JOIN ?:faq_sections_descr ON ?:faq_sections_descr.faq_section_id = ?:faq_sections.faq_section_id', ['lang_code', 'faq_section_id']);
        if (!empty($sec_names['en'])) {
            foreach ($sec_names['en'] as $sec) {
                $sec['lang_code'] = $language_data['lang_code'];
                db_query('REPLACE INTO ?:faq_sections_descr ?e', $sec);
            }
        }
        $quest_answer = db_get_hash_multi_array('SELECT ?:faq_questions_cp.faq_question_id, ?:faq_questions_descr.faq_question, ?:faq_questions_descr.faq_answer, ?:faq_questions_descr.lang_code FROM ?:faq_questions_cp LEFT JOIN ?:faq_questions_descr ON ?:faq_questions_descr.faq_question_id = ?:faq_questions_cp.faq_question_id', ['lang_code', 'faq_question_id']);
        if (!empty($quest_answer['en'])) {
            foreach ($quest_answer['en'] as $q_a) {
                $q_a['lang_code'] = $language_data['lang_code'];
                db_query('REPLACE INTO ?:faq_questions_descr ?e', $q_a);
            }
        }
    }
}
function fn_cp_faq_addon_delete_languages_post($lang_ids, $lang_codes, $deleted_lang_codes)
{
    foreach ($deleted_lang_codes as $lang_code) {
        db_query('DELETE FROM ?:faq_sections_descr WHERE lang_code = ?s', $lang_code);
        db_query('DELETE FROM ?:faq_questions_descr WHERE lang_code = ?s', $lang_code);
    }
}
function fn_cp_faq_addon_uninstall_func()
{
    $faq_tab = db_get_fields('SELECT tab_id FROM ?:product_tabs WHERE template = ?s', 'addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl');
    if (!empty($faq_tab)) {
        foreach ($faq_tab as $cp_tab) {
            ProductTabs::instance()->delete($cp_tab);
        }
    }
    return true;
}
