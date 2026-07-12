<?php

use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
class ClsSearchBrands
{
    public static function _get_brands($params)
    {

        $addons = fn_cls_get_active_addons();
        $brands = [];
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        $fields = [
            'v_desc.variant',
            'v_desc.variant_id',
            'f.feature_id ',
        ];
        $sorting = ' ORDER BY v_desc.variant ASC';
        $join = 'LEFT JOIN ?:product_feature_variants as variants ON variants.variant_id=v_desc.variant_id 
			LEFT JOIN ?:product_features as f ON f.feature_id=variants.feature_id ';
        $condition = db_quote('
			AND f.feature_id=?i			
			AND v_desc.lang_code=?s 
			', $ls_settings['brands_feature_id'], $params['lang_code']);
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
                    $phrase_conditions[$part][] = db_quote('v_desc.variant LIKE ?l', "%{$synonym}%");
                }
            }
            $phrase_conditions[$part] = '(' . implode(' OR ', $phrase_conditions[$part]) . ')';
        }
        $phrase_condition = implode(' AND ', $phrase_conditions);
        if ($company_id) {
            $join .= " LEFT JOIN ?:ult_objects_sharing ON ?:ult_objects_sharing.share_object_id=f.feature_id AND ?:ult_objects_sharing.share_object_type='product_features'";
            $condition .= " AND (f.company_id={$company_id} OR ?:ult_objects_sharing.share_company_id={$company_id})";
        }
        $limit = '';
        if ($ls_settings['brands_limit']) {
            $limit = "LIMIT {$ls_settings['brands_limit']}";
        }
        fn_cls_hook_function('hooks_get_brands', $ls_settings, $company_id, $params, $fields, $join, $condition, $phrase_condition, $sorting, $limit);
        $condition .= " AND {$phrase_condition}";

        return db_get_array('SELECT ' . implode(', ', $fields) . "
			FROM ?:product_feature_variant_descriptions as v_desc 
			{$join}			
			WHERE 1 
			{$condition}
			GROUP BY v_desc.variant_id 
			{$sorting}
			{$limit}");
    }

    private static function _get_fields_condition($q, $ls_settings)
    {
        $addons = fn_cls_get_active_addons();
        $condition = [];
        $condition[] = db_quote('v_desc.variant LIKE ?l', "%{$q}%");
        if (!empty($ls_settings['search_brands_on_ab__custom_h1']) && $ls_settings['search_brands_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
            $condition[] = db_quote('v_desc.ab__custom_feature_variant_h1 LIKE ?l', "%{$q}%");
        }
        fn_cls_hook_function('hooks_get_brands_fields_condition', $ls_settings, $q, $condition);
        return '(' . implode(' OR ', $condition) . ')';
    }
}
