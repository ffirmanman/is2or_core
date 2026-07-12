<?php

function fn_cp_faq_get_jld_markup_data($params = [])
{
    $use_markup = Tygh\Registry::get('addons.cp_json_ld.use_markup_for');
    if (empty($use_markup['cp_faq']) || $use_markup['cp_faq'] != 'Y') {
        return [];
    }

    $faq_sections = $extra_questions = [];
    if (!empty($params['product_id'])) {
        $product_data = Tygh::$app['view']->getTemplateVars('product');
        $faq_sections = !empty($product_data['cp_faq_sections']) ? $product_data['cp_faq_sections'] : [];
        $extra_questions = !empty($product_data['cp_faq_questions']) ? $product_data['cp_faq_questions'] : [];
    } elseif (!empty($params['faq_section_id'])) {
        $faq_sections = Tygh::$app['view']->getTemplateVars('all_faq_sections');
    }
    if (empty($faq_sections)) {
        return [];
    }

    $markup_data = [];
    if (!empty($faq_sections)) {
        foreach ($faq_sections as $faq_section) {
            if (empty($faq_section['faq_questions'])) {
                continue;
            }
            foreach ($faq_section['faq_questions'] as $question) {
                $markup_data['questions'][] = [
                    'question' => $question['faq_question'],
                    'answer' => strip_tags($question['faq_answer']),
                ];
            }
        }
    }
    if (!empty($extra_questions)) {
        foreach ($extra_questions as $question) {
            $markup_data['questions'][] = [
                'question' => $question['faq_question'],
                'answer' => strip_tags($question['faq_answer']),
            ];
        }
    }
    return $markup_data;
}
