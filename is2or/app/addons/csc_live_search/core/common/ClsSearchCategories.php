<?php

use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
class ClsSearchCategories
{
    public static function _get_categories($params)
    {
        $categories = [];
        $addons = fn_cls_get_active_addons();
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        $join = $condition = $limit = '';
        $fields = [
            '?:category_descriptions.category_id',
            '?:categories.id_path',
            '?:categories.level',
            '?:category_descriptions.category as category',
        ];
        $phrase_conditions = [];
        if ($ls_settings['search_on_category_name'] == 'Y' || $ls_settings['search_on_category_metakeywords'] == 'Y') {
            $q = ClsSearchProducts::_prepare_query($params['q'], $ls_settings);
            $q = explode(' ', $q);
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
        }
        $condition .= db_quote(' AND ?:categories.cls_hide NOT IN (?a)', [1, 3]);

        self::_support_hide_categories_addon($params, $addons, $join, $condition);

        $company_condition = '';
        if ($company_id) {
            $company_condition .= " AND ?:categories.company_id={$company_id}";
        }
        if (version_compare(PRODUCT_VERSION, '4.14.1', '>=') && PRODUCT_EDITION == 'MULTIVENDOR' && $params['runtime_storefront_id']) {
            $company_condition .= db_quote(' AND (?:categories.storefront_id=?i OR ?:categories.storefront_id=?i)', $params['runtime_storefront_id'], 0);
        }
        $condition .= $company_condition;

        if (version_compare(PRODUCT_VERSION, '4.14.1', '>=')) {
            $condition .= db_quote(' AND ?:categories.is_trash=?s', 'N');
        }

        if ($ls_settings['cats_limit']) {
            $limit = "LIMIT {$ls_settings['cats_limit']}";
        }
        if (!empty($phrase_condition)) {
            $condition .= fn_cls_get_usergroups_conditions($params, '?:categories');
            fn_cls_hook_function('hooks_get_categories', $ls_settings, $company_id, $params, $fields, $join, $condition, $phrase_condition, $limit);

            $condition .= " AND {$phrase_condition}";
            if ($ls_settings['cats_sort_by'] == 'position') {
                $sort_by = '?:categories.position';
            } else {
                $sort_by = '?:category_descriptions.category';
            }

            $categories = db_get_array('SELECT ' . implode(',', $fields) . " FROM ?:category_descriptions 
			LEFT JOIN ?:categories ON ?:categories.category_id=?:category_descriptions.category_id {$join} 
			WHERE ?:category_descriptions.lang_code=?s {$condition}  AND ?:categories.status='A' ORDER BY {$sort_by} {$limit}", $params['lang_code']);

            self::_get_ab_sf_categories($categories, $q, $params, $ls_settings, $company_condition);

            if ($ls_settings['show_parent_category'] == 'Y') {
                foreach ($categories as &$cat) {
                    $p_category = '';
                    $parent_id = '';
                    if ($cat['level'] > 1) {
                        $parents = explode('/', $cat['id_path']);
                        if (isset($parents[$ls_settings['clsm_show_parent_level'] - 1]) && $ls_settings['clsm_show_parent_level'] < $cat['level']) {
                            $parent_id = $parents[$ls_settings['clsm_show_parent_level'] - 1];
                        } elseif ($cat['level'] > 1) {
                            $parents = array_reverse($parents);
                            if (!empty($parents[1])) {
                                $parent_id = $parents[1];
                            }
                        }
                        if ($parent_id) {
                            $p_category = db_get_field('SELECT category FROM ?:category_descriptions WHERE category_id=?i AND lang_code=?s', $parent_id, $params['lang_code']);
                        }
                    }
                    if (!empty($p_category)) {
                        $cat['category'] = $p_category . '/' . $cat['category'];
                    }
                }
            }
        }
        return $categories;
    }

    private static function _get_fields_condition($q, $ls_settings)
    {
        $addons = fn_cls_get_active_addons();
        $condition = [];
        if ($ls_settings['search_on_category_name'] == 'Y') {
            $condition[] = db_quote(' ?:category_descriptions.category LIKE ?l', "%{$q}%");
        }
        if ($ls_settings['search_on_category_metakeywords'] == 'Y') {
            $condition[] = db_quote(' ?:category_descriptions.meta_keywords LIKE ?l', "%{$q}%");
        }

        if (!empty($ls_settings['search_categories_on_ab__custom_h1']) && $ls_settings['search_categories_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
            $condition[] = db_quote(' ?:category_descriptions.ab__custom_category_h1 LIKE ?l', "%{$q}%");
        }
        fn_cls_hook_function('hooks_get_categories_fields_condition', $ls_settings, $q, $params, $fields, $condition);
        return '(' . implode(' OR ', $condition) . ')';
    }

    public static function _get_storefront_categories($params)
    {
        $categories = [];
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        $search_storefronts = $ls_settings['allow_storefronts'];
        foreach ([$company_id, ''] as $val) {
            if (($key = array_search($val, $search_storefronts)) !== false) {
                unset($search_storefronts[$key]);
            }
        }
        if ($search_storefronts) {
            $condition = ' AND ?:categories.company_id IN (' . implode(',', $search_storefronts) . ')';
            $categories = db_get_array("SELECT ?:category_descriptions.category_id, 
			?:category_descriptions.category, 
			?:categories.company_id, 
			?:companies.storefront 
			FROM ?:category_descriptions 
			LEFT JOIN ?:categories ON ?:categories.category_id=?:category_descriptions.category_id
			LEFT JOIN ?:companies ON ?:companies.company_id=?:categories.company_id
			WHERE ?:category_descriptions.lang_code=?s {$condition} 
			AND (?:category_descriptions.category LIKE ?l OR ?:category_descriptions.category LIKE ?l) 
			AND ?:categories.status='A' LIMIT {$ls_settings['cats_limit']}", $params['lang_code'], "{$params['q']}%", "% {$params['q']}%");
        }
        foreach ($categories as &$category) {
            $category['url'] = 'http://' . $category['storefront'] . '/index.php?dispatch=categories.view&category_id=' . $category['category_id'];
            unset($category['storefront']);
        }

        return $categories;
    }

    private static function _support_hide_categories_addon(&$params, $addons, &$join, &$condition)
    {
        if (in_array('csc_hide_categories', $addons)) {
            $join_cond = '';
            if (!empty($params['storefront_id'])) {
                $join_cond .= db_quote(' AND ?:csc_hide_categories_statuses.storefront_id=?i', $params['storefront_id']);
            }
            $join .= db_quote(" LEFT JOIN ?:csc_hide_categories_statuses 
				ON ?:csc_hide_categories_statuses.category_id=?:categories.category_id
				{$join_cond}
				");
            $condition .= db_quote(' AND (?:csc_hide_categories_statuses.status IS NULL OR ?:csc_hide_categories_statuses.status!=?s)', 'D');
        }
    }

    private static function _get_ab_sf_categories(&$categories, $q, $params, $ls_settings, $company_condition)
    {
        $addons = fn_cls_get_active_addons();
        if (!empty($ls_settings['search_categories_on_ab__seo_filters']) && $ls_settings['search_categories_on_ab__seo_filters'] == 'Y' && in_array('ab__seo_filters', $addons)) {
            $phrase_conditions = [];
            if ($ls_settings['search_categories_on_ab__seo_filters_ignore_placeholder'] == 'Y') {
                $phrase_conditions[] = db_quote('?:ab__sf_name_descriptions.tag_h1 NOT LIKE ?l', '%[%', '%]%');
            }

            foreach ($q as $part) {
                if (!trim($part)) {
                    continue;
                }
                $phrase_conditions[$part] = [];
                if ($ls_settings['search_on_category_name'] == 'Y') {
                    $phrase_conditions[$part][] = db_quote('?:ab__sf_name_descriptions.tag_h1 LIKE ?l', "%{$part}%");
                }
                if ($ls_settings['search_on_category_metakeywords'] == 'Y') {
                    $phrase_conditions[$part][] = db_quote('?:ab__sf_name_descriptions.meta_keywords LIKE ?l', "%{$part}%");
                }
                $phrase_conditions[$part] = '(' . implode(' OR ', $phrase_conditions[$part]) . ')';
            }
            $phrase_condition = implode(' AND ', $phrase_conditions);
            $limit = '';
            if ($ls_settings['ab__seo_filters_limit']) {
                $limit = "LIMIT {$ls_settings['ab__seo_filters_limit']}";
            }

            $filter_categories = db_get_array("SELECT tag_h1 as category, ?:ab__sf_names.category_id, ?:ab__sf_names.features_hash as fh, ?:categories.level + 1 as level, ?:categories.id_path FROM ?:ab__sf_name_descriptions 
				LEFT JOIN ?:ab__sf_names
				ON ?:ab__sf_names.sf_id=?:ab__sf_name_descriptions.sf_id 
				INNER JOIN ?:categories ON ?:categories.category_id=?:ab__sf_names.category_id
				WHERE ?:ab__sf_name_descriptions.lang_code=?s AND ?:categories.status='A' {$company_condition} AND ?:ab__sf_names.fixed!=?s AND {$phrase_condition} {$limit}", $params['lang_code'], 'H');
        }
        if (!empty($filter_categories)) {
            $categories = array_merge($categories, $filter_categories);
            if ($ls_settings['cats_sort_by'] == 'category') {
                usort($categories, function ($a, $b) {

                    return strcasecmp($a['category'], $b['category']);
                });
            }
        }
    }
}
