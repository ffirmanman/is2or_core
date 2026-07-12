<?php

use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
class ClsSearchPages
{
    public static function _get_pages($params, $types = ['B'])
    {
        $pages = [];
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(false, $company_id);
        $limit = '';
        $fields = [
            'page' => '?:page_descriptions.page',
            'page_id' => '?:page_descriptions.page_id',
        ];

        if ($ls_settings['pb_limit']) {
            $limit = "LIMIT {$ls_settings['pb_limit']}";
        }
        $join = db_quote(' LEFT JOIN ?:page_descriptions ON ?:page_descriptions.page_id=?:pages.page_id ');

        if ($ls_settings['pb_ignore_lang_code'] != 'Y') {
            $join .= db_quote(' AND ?:page_descriptions.lang_code=?s', $params['lang_code']);
        } else {
            $join .= db_quote(' LEFT JOIN ?:page_descriptions as pd ON pd.page_id=?:pages.page_id AND pd.lang_code=?s', $params['lang_code']);
            $fields['page'] = 'pd.page';
        }
        $condition = db_quote(' AND ?:pages.status=?s AND ?:pages.page_type IN (?a)', 'A', $types);
        if (version_compare(PRODUCT_VERSION, '4.9.3', '>') && !empty($params['runtime_storefront_id'])) {
            $company_ids = fn_cls_get_storefront_company_ids($params['runtime_storefront_id']);
            if ($company_ids) {
                $condition .= db_quote(' AND (?:pages.company_id IN (?a) OR ?:pages.company_id=0)', $company_ids);
            }
        } elseif ($company_id) {
            $condition .= " AND ?:pages.company_id={$company_id}";
        }

        $q = ClsSearchProducts::_prepare_query($params['q'], $ls_settings);
        $q = explode(' ', $q);
        $phrase_conditions = [];
        foreach ($q as $k => $part) {
            if (!trim($part)) {
                continue;
            }
            $phrase_conditions[$part] = [];
            $phrase_conditions[$part][] = self::_get_fields_condition($part, $ls_settings);
            $synonyms = ClsSynonyms::_get_search_synonyms($part, $ls_settings, $params);
            if ($synonyms) {
                foreach ($synonyms as $synonym) {
                    $phrase_conditions[$part][] = self::_get_fields_condition($synonym, $ls_settings);
                }
            }
            $phrase_conditions[$part] = '(' . implode(' OR ', $phrase_conditions[$part]) . ')';
        }
        $phrase_condition = implode(' AND ', $phrase_conditions);
        fn_cls_hook_function('hooks_get_pages', $ls_settings, $company_id, $params, $join, $condition, $phrase_condition, $limit);

        $condition .= " AND {$phrase_condition}";
        return db_get_array('SELECT ' . implode(', ', $fields) . "  
		FROM  ?:pages 
		{$join}
		WHERE 1 {$condition} GROUP BY ?:pages.page_id {$limit}");
    }

    private static function _get_fields_condition($q, $ls_settings)
    {
        $addons = fn_cls_get_active_addons();
        $condition = [];
        $condition[] = db_quote(' ?:page_descriptions.page LIKE ?l', "%{$q}%");
        if (!empty($ls_settings['search_pages_on_ab__custom_h1']) && $ls_settings['search_pages_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
            $condition[] = db_quote(' ?:page_descriptions.ab__custom_page_h1 LIKE ?l', "%{$q}%");
        }
        fn_cls_hook_function('hooks_get_pages_fields_condition', $ls_settings, $q, $condition);
        return '(' . implode(' OR ', $condition) . ')';
    }
}
