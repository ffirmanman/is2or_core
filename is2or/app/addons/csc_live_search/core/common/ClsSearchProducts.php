<?php

use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
class ClsSearchProducts
{
    public static function _get_products($params, $items_per_page)
    {
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        list($params['sort_by'], $params['sort_order']) = explode('|', $ls_settings['sort_by']);
        $config = fn_get_config_data();

        if (!empty($params['q'])) {
            if (empty($params['group_by']) && empty($params['current_cid']) && empty($params['cid'])) {
                list($params['rid'], $params['qid']) = self::_save_search_statistic($params, $company_id, $ls_settings);
            }
            $sortings = self::_get_sortings($params);
            $sorting = $sortings[$params['sort_by']] . ' ' . $params['sort_order'];
            // $sorting .= ', products.product_id ASC'; //
        }
        if (!empty($params['pids'])) {
            $sorting = db_quote(' FIELD(products.product_id, ?a)', $params['pids']);
        }
        if (!empty($sorting)) {
            $sorting = 'ORDER BY ' . $sorting;
        }
        $join = $condition = '';
        // Fix issue with a lot of joins
        if (substr_count($params['q'], ' ') > 5) {
            $ls_settings['speedup_level'] = 'light';
        }

        if ($ls_settings['clss_status'] && $ls_settings['speedup_level'] == 'hard') {
            list($_join, $_condition) = ClsSearchSpeedup::_get_search_conditions($params['q'], $ls_settings['speedup_cluster_size'], $ls_settings);
            $join .= $_join;
            $condition .= $_condition;
        }
        $fields = self::_get_fields($ls_settings, $params);
        $join .= self::_get_joins($params, $ls_settings, $company_id);
        $condition .= self::_get_conditions($params, $ls_settings);

        $limit = ' LIMIT ' . (($params['page'] - 1) * $items_per_page) . ', ' . $items_per_page;
        if (!empty($params['group_by']) && $params['group_by'] == 'categories') {
            $categories_condition = db_quote(" AND ?:categories.status='A'
			AND ?:categories.cls_hide NOT IN (?a)", [2, 3]);

            $products_categories = db_get_hash_array("SELECT ?:categories.category_id, ?:categories.id_path, cd.category, '' as cl, COUNT(DISTINCT(products.product_id)) as total FROM ?:products as products {$join} 
			WHERE 1
			{$categories_condition}	
			{$condition}
			GROUP BY ?:categories.category_id
			ORDER BY total DESC", 'category_id');

            $selected_cids = explode(',', $params['current_cid']);
            $count = 0;
            $_products_categories = [];
            foreach ($products_categories as $cid => $data) {
                $count++;
                $suffix = '';
                $root = explode('/', $data['id_path']);
                $root = reset($root);
                $root_name = self::_get_ccategory_name($root, $params['lang_code']);
                if (count($products_categories) > 10 && $count > 6) {
                    $suffix = ' clsHidden';
                }
                $_products_categories[$root]['subcats'][$count] = $data;
                if (in_array($cid, $selected_cids)) {
                    $_products_categories[$root]['subcats'][$count]['cl'] = 'clsChecked' . $suffix;
                } else {
                    $_products_categories[$root]['subcats'][$count]['cl'] = 'clsUnChecked' . $suffix;
                }
                $_products_categories[$root]['root']['cid'] = $root;
                $_products_categories[$root]['root']['name'] = $root_name;
            }
            $_products_categories = array_values($_products_categories);

            // fn_print_r($_products_categories);

            return [$_products_categories, $params];
        }

        $group_by = 'products.product_id';
        $count_field = 'products.product_id';

        fn_cls_hook_function('hooks_get_products', $ls_settings, $company_id, $params, $fields, $join, $condition, $sorting, $limit, $group_by, $count_field);
        $products = [];
        $params['total_items'] = 0;
        if ($items_per_page > 0) {
            $products = db_get_hash_array('SELECT ' . implode(',', $fields) . " FROM ?:products as products {$join} 
				WHERE 1 {$condition} 
				GROUP BY {$group_by}
				{$sorting} {$limit}", 'product_id');
            if ($products) {
                $params['total_items'] = db_get_field("SELECT COUNT(DISTINCT({$count_field})) FROM ?:products as products {$join} WHERE 1 {$condition}");
            }
            self::_save_requests_found_products($params, $ls_settings);
        }

        if ($params['total_items'] > $params['page'] * $items_per_page) {
            $params['next_page'] = $params['page'] + 1;
        } else {
            $params['next_page'] = 0;
        }
        if ($products) {
            $pids = array_keys($products);
            $images = db_get_hash_array('SELECT * FROM  ?:images_links 
			LEFT JOIN ?:images ON ?:images.image_id = ?:images_links.detailed_id WHERE object_id IN (' . implode(',', $pids) . ") AND object_type='product' AND type='M' ORDER BY ?:images_links.pair_id DESC", 'object_id');

            $mc_join = fn_cls_get_usergroups_conditions($params, '?:categories');
            if (PRODUCT_EDITION == 'ULTIMATE') {
                $mc_join .= " AND ?:categories.company_id = {$company_id}";
            }
            $cats_condition = '';
            if (version_compare(PRODUCT_VERSION, '4.14.1', '>=') && PRODUCT_EDITION == 'MULTIVENDOR' && $params['runtime_storefront_id']) {
                $cats_condition = db_quote(' AND (?:categories.storefront_id=?i OR ?:categories.storefront_id=?i)', $params['runtime_storefront_id'], 0);
            }
            $main_categories = db_get_hash_array("SELECT category, ?:categories.category_id, product_id FROM ?:category_descriptions 
			INNER JOIN ?:categories ON ?:categories.category_id = ?:category_descriptions.category_id {$mc_join}			
			INNER JOIN ?:products_categories ON ?:products_categories.category_id=?:categories.category_id
			WHERE 
				?:category_descriptions.lang_code=?s
				AND ?:categories.status IN (?a)
				AND ?:products_categories.product_id IN (?a)
				{$cats_condition}
				ORDER BY ?:products_categories.link_type ASC, ?:categories.status DESC
			", 'product_id', $params['lang_code'], ['A', 'H'], $pids);

            /*$prices = db_get_hash_single_array("SELECT product_id, price FROM ?:product_prices
          WHERE product_id IN (?a) AND lower_limit='1' AND usergroup_id='0'", ['product_id', 'price'], $pids);
             */

            foreach ($images as $pid => $image) {
                $folder = floor($image['image_id'] / MAX_FILES_IN_DIR);
                $img = 'images/detailed/' . $folder . '/' . $image['image_path'];
                $products[$pid]['img'] = self::_get_thumbnail($img, $folder, $pid, 150, 150);
                if ($config['http_path']) {
                    $products[$pid]['img'] = $config['http_path'] . $products[$pid]['img'];
                }
            }
            foreach ($products as &$p) {
                // assign categories
                if (!empty($main_categories[$p['product_id']])) {
                    $p['category'] = $main_categories[$p['product_id']]['category'];
                    $p['category_id'] = $main_categories[$p['product_id']]['category_id'];
                }
                $delete_list_price = false;
                if ($p['list_price'] <= $p['price']) {
                    $delete_list_price = true;
                }
                self::_format_prices($p, $params['currency']);
                if ($delete_list_price) {
                    $p['list_price'] = '';
                }
                $p['labelBg'] = CscLiveSearch::_get_bg_color($p['category_id'], $ls_settings);
                if (empty($p['img'])) {
                    $p['img'] = self::_get_thumbnail('', '', $p['product_id'], 150, 150);
                }
            }
            if ($ls_settings['ignore_lang_code'] == 'Y' && $products) {
                $products = self::_get_product_language_names($products, $params['lang_code']);
            }
        }

        return [array_values($products), $params];
    }

    public static function _get_price_field($table_name = 'shared_prices')
    {
        return 'IF('
            . "{$table_name}.product_id IS NOT NULL, "
            . 'MIN(IF ('
                . "{$table_name}.percentage_discount = 0, "
                . "{$table_name}.price, "
                . "{$table_name}.price - ({$table_name}.price * {$table_name}.percentage_discount) / 100)"
            . '), '
            . 'MIN(IF ('
                . 'prices.percentage_discount = 0, '
                . 'prices.price, '
                . 'prices.price - (prices.price * prices.percentage_discount) / 100)'
            . ')'
        . ')';
    }

    public static function _get_fields($ls_settings, $params)
    {
        $fields = [
            'products.product_id',
            'products.product_code',
            'products.list_price',
            'products.amount',
            'descr1.product',
        ];
        if (PRODUCT_EDITION == 'ULTIMATE') {
            $fields[] = self::_get_price_field() . ' as price';
        } else {
            $fields[] = 'prices.price as price';
        }

        $table_schema = db_get_hash_array('SHOW COLUMNS FROM ?:products', 'Field');
        if (!empty($table_schema['currency'])) {
            $fields[] = 'products.currency';
        }

        fn_cls_hook_function('hooks_get_fields', $ls_settings, $params, $fields);

        return $fields;
    }

    public static function _get_joins($params, $ls_settings, $company_id, $join = '')
    {
        $addons = \fn_cls_get_active_addons();
        $settings = \fn_cls_get_store_settings();
        if (!empty($ls_settings['search_by_features'])) {
            $ls_settings['search_by_features'] = array_filter($ls_settings['search_by_features']);
        }
        if (AREA == 'A' && $ls_settings['clss_admin_status']) {
            $ls_settings['clss_status'] = true;
        }

        if (strpos($join, ' products_categories ') === false) {
            $join .= ' INNER JOIN ?:products_categories as products_categories ON products_categories.product_id=products.product_id';
        }
        if (strpos($join, ' ?:categories ') === false) {
            $join .= " INNER JOIN ?:categories
				ON ?:categories.category_id = products_categories.category_id 
				AND ?:categories.status IN ('A', 'H')			
			";
            if (version_compare(PRODUCT_VERSION, '4.14.1', '>=')) {
                $join .= db_quote(' AND ?:categories.is_trash=?s', 'N');
            }
            $join .= fn_cls_get_usergroups_conditions($params, '?:categories');
            if (PRODUCT_EDITION == 'ULTIMATE') {
                $join .= " AND ?:categories.company_id = {$company_id}";
            }
        }
        if (PRODUCT_EDITION == 'MULTIVENDOR') {
            if (strpos($join, ' companies ') === false) {
                $join .= db_quote(' LEFT JOIN ?:companies as companies ON companies.company_id = products.company_id');
            }
        }
        if (strpos($join, ' cssi ') === false && $ls_settings['clss_status']) {
            $join .= db_quote(' INNER JOIN ?:csc_search_speedup_index as cssi ON products.product_id=cssi.product_id');
            if ($ls_settings['ignore_lang_code'] != 'Y') {
                $join .= db_quote(' AND cssi.lang_code=?s', $params['lang_code']);
            }
        }

        if (strpos($join, ' descr1 ') === false) {
            $join .= ' 
		LEFT JOIN ?:product_descriptions as descr1 ON  descr1.product_id=products.product_id ';
            if ($ls_settings['ignore_lang_code'] != 'Y') {
                $join .= db_quote(' AND descr1.lang_code=?s', $params['lang_code']);
            }
        }
        if (strpos($join, ' prices ') === false) {
            $join .= " 
		    LEFT JOIN ?:product_prices as prices ON prices.product_id = products.product_id AND prices.lower_limit = 1 AND prices.usergroup_id='0'";
            if (PRODUCT_EDITION == 'ULTIMATE' && AREA == 'CLS') {
                $join .= db_quote(" LEFT JOIN ?:ult_product_prices as shared_prices ON shared_prices.product_id = products.product_id AND shared_prices.lower_limit = 1 AND shared_prices.usergroup_id='0' AND shared_prices.company_id = ?i", $company_id);
            }
        }

        if (strpos($join, ' cd ') === false) {
            $join .= " LEFT JOIN ?:category_descriptions as cd 
				ON cd.category_id = ?:categories.category_id AND cd.lang_code='{$params['lang_code']}'";
        }

        if ($ls_settings['search_on_pcode'] == 'Y' && version_compare(PRODUCT_VERSION, '4.12.1', '<')) {
            $join .= db_quote(' LEFT JOIN ?:product_options_inventory as product_options_inventory  ON products.product_id=product_options_inventory.product_id');
        }
        if (($params['sort_by'] == 'cls_rel_pop' || $params['sort_by'] == 'cls_rel') && !empty($params['q']) && !empty($params['qid'])) {
            $join .= db_quote(' LEFT JOIN ?:csc_live_search_popularity as lsp ON lsp.product_id=products.product_id AND qid=?i', $params['qid']);
        }
        if (($params['sort_by'] == 'popularity') && !empty($params['q']) && AREA == 'CLS') {
            $join .= db_quote(' LEFT JOIN ?:product_popularity as popularity ON popularity.product_id=products.product_id', $params['qid']);
        }

        if ($ls_settings['search_on_options'] == 'Y' && !empty($params['q']) && !$ls_settings['clss_status']) {
            $join .= ' LEFT JOIN ?:product_options as p_options ON p_options.product_id > 0 AND products.product_id=p_options.product_id';
            $join .= ' LEFT JOIN ?:product_global_option_links as g_options ON products.product_id=g_options.product_id';
        }
        if ($ls_settings['search_on_features'] == 'Y' && !empty($params['q']) && !$ls_settings['clss_status']) {
            $ftr_cnd = '';
            if (!empty($ls_settings['search_by_features'])) {
                $ftr_cnd = db_quote(' AND pf_values.feature_id IN (?a)', $ls_settings['search_by_features']);
            }
            $join .= db_quote(" LEFT JOIN ?:product_features_values as pf_values  ON products.product_id=pf_values.product_id {$ftr_cnd}");
            if ($ls_settings['ignore_lang_code'] != 'Y') {
                $join .= db_quote(' AND pf_values.lang_code=?s', $params['lang_code']);
            }

            $join .= db_quote(' LEFT JOIN ?:product_feature_variant_descriptions as pf_variants  ON pf_variants.variant_id=pf_values.variant_id');
        }

        if ($ls_settings['search_on_tags'] == 'Y' && !empty($params['q']) && !$ls_settings['clss_status']) {
            $join .= db_quote(' LEFT JOIN ?:tag_links as tgl  ON products.product_id=tgl.object_id AND tgl.object_type=?s', 'P');
            $join .= db_quote(' LEFT JOIN ?:tags as tg  ON tgl.tag_id=tg.tag_id AND tg.status=?s', 'A');
        }

        // MASTER PRODUCTS
        if (AREA == 'CLS' && in_array('master_products', $addons)) {
            if (empty($params['runtime_company_id'])) {
                $join .= db_quote(' LEFT JOIN ?:master_products_storefront_offers_count AS master_products_storefront_offers_count '
                 . ' ON master_products_storefront_offers_count.product_id = products.product_id');
                if (!empty($params['runtime_storefront_id'])) {
                    $join .= db_quote(' AND master_products_storefront_offers_count.storefront_id=?i', $params['runtime_storefront_id']);
                }
            }
        }
        // WAREHOUSES
        if (strpos($join, ' warehouses_destination_products_amount') === false) {
            if (in_array('warehouses', $addons) && (!empty($params['warehouses_destination_id']) && ($settings['show_out_of_stock_products'] == 'N' && $settings['inventory_tracking'] == 'Y') || ($ls_settings['out_stock_end'] == 'Y' && strpos($join, 'warehouses_destination_products_amount') === false))) {
                if (PRODUCT_EDITION == 'MULTIVENDOR') {
                    $params['runtime_storefront_id'] = 0;
                }
                $join .= db_quote(' LEFT JOIN ?:warehouses_destination_products_amount AS warehouses_destination_products_amount'
                    . ' ON warehouses_destination_products_amount.product_id = products.product_id'
                    . ' AND warehouses_destination_products_amount.destination_id = ?i', $params['warehouses_destination_id']);
                if (!empty($params['runtime_storefront_id'])) {
                    $join .= db_quote(' AND warehouses_destination_products_amount.storefront_id = ?i', $params['runtime_storefront_id']);
                }
            }
        }
        if ((!$ls_settings['clss_status'] || $ls_settings['speedup_level'] == 'light') && in_array('product_variations', $addons) && !empty($ls_settings['search_variation']) && $ls_settings['search_variation'] == 'Y') {
            $join .= db_quote(' LEFT JOIN ?:products as variation_products ON products.product_id = variation_products.parent_product_id');
            if ($ls_settings['clss_status'] && strpos($join, ' cssi_variations ') === false) {
                $join .= db_quote(' LEFT JOIN ?:csc_search_speedup_index as cssi_variations ON variation_products.product_id=cssi_variations.product_id');
                if ($ls_settings['ignore_lang_code'] != 'Y') {
                    $join .= db_quote(' AND cssi_variations.lang_code=?s', $params['lang_code']);
                }
            }

            if ($ls_settings['search_on_features'] == 'Y' && !empty($params['q'])) {
                $ftr_cnd = '';
                if (!empty($ls_settings['search_by_features'])) {
                    $ftr_cnd = db_quote(' AND pf_variations_values.feature_id IN (?a)', $ls_settings['search_by_features']);
                }

                $join .= db_quote(" LEFT JOIN ?:product_features_values as pf_variations_values  ON variation_products.product_id=pf_variations_values.product_id {$ftr_cnd} ");
                if ($ls_settings['ignore_lang_code'] != 'Y') {
                    $join .= db_quote(' AND pf_variations_values.lang_code=?s', $params['lang_code']);
                }

                $join .= db_quote(' LEFT JOIN ?:product_feature_variant_descriptions as pf_variations_variants  ON pf_variations_variants.variant_id=pf_variations_values.variant_id');
            }
        }
        return $join;
        fn_cls_hook_function('hooks_get_joins', $ls_settings, $params, $join);
        return $join;
    }

    public static function _get_conditions($params, $ls_settings, $condition = '')
    {
        $addons = fn_cls_get_active_addons();
        if (AREA == 'CLS') {
            $condition .= " AND products.status='A'";
            $settings = fn_cls_get_store_settings();
            $hide_out_of_stock_products = $settings['inventory_tracking'] == 'Y' && $settings['show_out_of_stock_products'] != 'Y';

            if ($hide_out_of_stock_products) {
                // WAREHOUSES
                if (in_array('warehouses', $addons) && !empty($params['warehouses_destination_id'])) {
                    $condition .= db_quote(
                        ' AND ((CASE products.is_stock_split_by_warehouses WHEN ?s'
                        . ' THEN warehouses_destination_products_amount.amount'
                        . ' ELSE products.amount END) > 0 ',
                        'Y'
                    );
                } else {
                    $condition .= db_quote(' AND (products.amount > 0');
                }
                if ($settings['global_tracking'] === 'B') {
                } elseif ($settings['default_tracking'] === 'B') {
                    $condition .= db_quote(' OR products.tracking = ?s', 'D');
                } else {
                    $condition .= db_quote(' OR products.tracking = ?s OR products.tracking IS NULL', 'D');
                }
                $condition .= ')';
            }
            $condition .= fn_cls_get_usergroups_conditions($params, 'products');
            if (version_compare(PRODUCT_VERSION, '4.14.1', '>=') && PRODUCT_EDITION == 'MULTIVENDOR' && $params['runtime_storefront_id']) {
                $condition .= db_quote(' AND (?:categories.storefront_id=?i OR ?:categories.storefront_id=?i)', $params['runtime_storefront_id'], 0);
            }
        }

        if (AREA == 'CLS' && PRODUCT_EDITION == 'MULTIVENDOR') {
            // VENDOR DEBT payout
            $company_condition = db_quote(' companies.status=?s ', 'A');
            if (in_array('vendor_debt_payout', $addons)) {
                $state = db_get_field('SELECT ?:settings_objects.value FROM ?:settings_objects LEFT JOIN ?:settings_sections ON ?:settings_objects.section_id=?:settings_sections.section_id WHERE ?:settings_sections.name=?s AND ?:settings_objects.name=?s', 'vendor_debt_payout', 'hide_products');
                if ($state != 'Y') {
                    $company_condition = db_quote(' companies.status IN (?a) ', ['A', 'S']);
                }
            }
            if (in_array('master_products', $addons)) {
                $company_condition = db_quote('(' . $company_condition . ' OR products.company_id = ?i)', 0);
            }

            $condition .= ' AND ' . $company_condition;
            if (!empty($params['company_id'])) {
                $condition .= db_quote(' AND companies.company_id =?i', $params['company_id']);
            }
            if (version_compare(PRODUCT_VERSION, '4.9.3', '>')) {
                $company_ids = fn_cls_get_storefront_company_ids($params['runtime_storefront_id']);
                if ($company_ids) {
                    $condition .= db_quote(' AND (companies.company_id IN (?a) OR products.company_id=0)', $company_ids);
                }
            }
        }

        if (!empty($params['pids'])) {
            $condition .= db_quote(' AND products.product_id IN (?a)', $params['pids']);
        }
        if (empty($params['q'])) {
            return $condition;
        }
        $q = self::_prepare_query($params['q'], $ls_settings);

        $condition .= ClsStopWords::_search_get_conditions($ls_settings, $params, $q);
        $q = explode(' ', $q);
        if (AREA != 'A' && !empty($params['cid'])) {
            $cids = explode(',', $params['cid']);
            $condition .= db_quote(' AND ?:categories.category_id IN (?a)', $cids);
        }
        $tmp = [];
        foreach ($q as $k => $part) {
            if (!trim($part)) {
                continue;
            }
            $tmp[$k] = self::_get_part_phrase_conditions($part, $ls_settings, $params);
            $tmp[$k] = self::_get_synonym_conditions($part, $ls_settings, $params, $tmp[$k]);
        }
        if ($tmp) {
            $count = count($tmp);
            $tmp = implode(' AND ', $tmp);
            if ($count > 1) {
                $tmp = self::_get_synonym_conditions($params['q'], $ls_settings, $params, $tmp);
            }
            if ($count == 1) {
                $tmp = db_quote(" ({$tmp} OR products.product_code LIKE ?l)", "%{$params['q']}%");
            }

            $condition .= ' AND ' . $tmp;
        }
        if (AREA == 'CLS') {
            // MASTER PRODUCTS
            if (in_array('master_products', $addons)) {
                if (empty($params['runtime_company_id']) && empty($params['company_id'])) {
                    $condition .= db_quote(' AND products.master_product_status =?s', 'A');
                    $condition .= db_quote(' AND products.master_product_id = 0'
                        . ' AND (products.company_id > 0 
						OR master_products_storefront_offers_count.count > 0)');
                }
            }
            // VARIATIONS
            if (in_array('product_variations', $addons) && (empty($ls_settings['search_variation']) || $ls_settings['search_variation'] != 'A')) {
                $condition .= db_quote(' AND products.parent_product_id = ?i', 0);
            }
            // AGE verification
            if (in_array('age_verification', $addons) && isset($params['age_verification'])) {
                if ($params['age_verification'] == -1) {
                    $condition .= " AND products.age_verification = 'N' AND ?:categories.age_verification = 'N'";
                } else {
                    $condition .= db_quote(" AND (products.age_verification = 'N' OR (products.age_verification = 'Y' AND products.age_limit <= ?i)) AND (?:categories.age_verification = 'N' OR (?:categories.age_verification = 'Y' AND ?:categories.age_limit <= ?i)) AND (?:categories.parent_age_verification = 'N' OR (?:categories.parent_age_verification = 'Y' AND ?:categories.parent_age_limit <= ?i))", $params['age_verification'], $params['age_verification'], $params['age_verification']);
                }
            }
        } else {
            if (in_array('product_variations', $addons) && (!empty($ls_settings['search_variation']) && $ls_settings['search_variation'] == 'A')) {
                $condition = str_replace('products.parent_product_id', '0', $condition);
            }
        }
        fn_cls_hook_function('hooks_get_conditions', $ls_settings, $params, $condition);
        return $condition;
    }

    public static function _prepare_query($q, $ls_settings)
    {
        if ($ls_settings['clss_status'] && !empty($ls_settings['skip_chars'])) {
            $chars = explode(' ', $ls_settings['skip_chars']);
            $q = str_replace($chars, '', $q);
        }
        if (trim($ls_settings['replace_with_break'])) {
            $chars = explode(' ', $ls_settings['replace_with_break']);
            $q = str_replace($chars, ' ', $q);
        }
        $q = preg_replace('/\s+/', ' ', $q);
        return trim($q);
    }

    public static function _get_synonym_conditions($q, $ls_settings, $params, $tmp)
    {
        $synonyms = ClsSynonyms::_get_search_synonyms($q, $ls_settings, $params);
        $syn_cond = [];
        foreach ($synonyms as $synonym) {
            $syn_cond[] = self::_get_part_phrase_conditions($synonym, $ls_settings, $params);
        }
        if ($syn_cond) {
            $syn_cond = implode(' OR ', $syn_cond);
            $tmp = "({$tmp} OR {$syn_cond})";
        }
        return $tmp;
    }

    private static function _get_part_phrase_conditions($part, $ls_settings, $params)
    {
        if (!empty($ls_settings['search_by_features'])) {
            $ls_settings['search_by_features'] = array_filter($ls_settings['search_by_features']);
        }

        if (strlen($part) == 0) {
            return false;
        }
        $addons = fn_cls_get_active_addons();
        $tmp = [];
        if (AREA == 'A' && $ls_settings['clss_admin_status']) {
            $ls_settings['clss_status'] = true;
        }

        if ($ls_settings['clss_status']) {
            $tmp[] = '(';
            $tmp[] = db_quote(' cssi.description LIKE ?l', "%{$part}%");
            if ($ls_settings['speedup_level'] == 'light' && in_array('product_variations', $addons) && !empty($ls_settings['search_variation']) && $ls_settings['search_variation'] == 'Y') {
                $tmp[] = db_quote(' OR cssi_variations.description LIKE ?l', "%{$part}%");
            }
        } else {
            $tmp[] = '(0';
            if ($ls_settings['search_on_name'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.product LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_options'] == 'Y') {
                $opt_cond = db_quote(' variant_name LIKE ?l', "%{$part}%");
                if ($ls_settings['ignore_lang_code'] != 'Y') {
                    $opt_cond .= db_quote(' AND lang_code=?s', $params['lang_code']);
                }
                $option_ids = db_get_fields("SELECT ?:product_option_variants.option_id FROM ?:product_option_variants 
		LEFT JOIN ?:product_option_variants_descriptions ON ?:product_option_variants_descriptions.variant_id=?:product_option_variants.variant_id 
		WHERE {$opt_cond}
		GROUP BY ?:product_option_variants.option_id");
                if ($option_ids) {
                    $tmp[] = ' OR p_options.option_id IN (' . implode(',', $option_ids) . ') OR g_options.option_id IN (' . implode(',', $option_ids) . ')';
                }
            }
            if ($ls_settings['search_on_keywords'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.search_words LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_description'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.full_description LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_short_description'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.short_description LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_metakeywords'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.meta_keywords LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_metatitle'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.page_title LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_metadesc'] == 'Y') {
                $tmp[] = db_quote(' OR descr1.meta_description LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_pcode'] == 'Y') {
                $tmp[] = db_quote(' OR products.product_code LIKE ?l', '%' . $part . '%');
                if (in_array('product_variations', $addons) && !empty($ls_settings['search_variation']) && $ls_settings['search_variation'] == 'Y') {
                    $tmp[] = db_quote(' OR variation_products.product_code LIKE ?l', '%' . $part . '%');
                }
            }
            if ($ls_settings['search_on_product_id'] == 'Y') {
                $tmp[] = db_quote(' OR products.product_id LIKE ?l', "%{$part}%");
            }
            if ($ls_settings['search_on_features'] == 'Y') {
                $extra_ftr_cond = '';
                if (!empty($ls_settings['search_products_on_ab__custom_h1']) && $ls_settings['search_products_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
                    $extra_ftr_cond = db_quote(' OR pf_variants.ab__custom_feature_variant_h1 LIKE ?l', "%{$part}%");
                }
                $tmp[] = db_quote(" OR pf_variants.variant LIKE ?l OR pf_values.value LIKE ?l {$extra_ftr_cond}", "%{$part}%", "%{$part}%");
                if (in_array('product_variations', $addons) && !empty($ls_settings['search_variation']) && $ls_settings['search_variation'] == 'Y') {
                    $extra_ftr_cond = '';
                    if ($ls_settings['search_products_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
                        $extra_ftr_cond = db_quote(' OR pf_variations_variants.ab__custom_feature_variant_h1 LIKE ?l', "%{$part}%");
                    }
                    $tmp[] = db_quote(" OR pf_variations_variants.variant LIKE ?l OR pf_variations_values.value LIKE ?l  {$extra_ftr_cond}", "%{$part}%", "%{$part}%");
                }
            }
            if (!empty($ls_settings['search_on_tags']) && $ls_settings['search_on_tags'] == 'Y') {
                $tmp[] = db_quote('OR tg.tag LIKE ?l', '%' . $part . '%');
            }

            if (!empty($ls_settings['search_products_on_ab__custom_h1']) && $ls_settings['search_products_on_ab__custom_h1'] == 'Y' && in_array('ab__custom_h1', $addons)) {
                $tmp[] = db_quote('OR descr1.ab__custom_product_h1 LIKE ?l', '%' . $part . '%');
            }

            fn_cls_hook_function('hooks_get_product_phrase_condition', $ls_settings, $part, $tmp);
        }

        $tmp[] = ')';
        return implode('', $tmp);
    }

    public static function _get_sortings($params)
    {
        $company_id = fn_cls_get_current_company_id($params);
        $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        $addons = fn_cls_get_active_addons();
        $sortings = [
            'code' => 'products.product_code',
            'status' => 'products.status',
            'product' => 'product',
            'position' => 'products_categories.position',
            'price' => 'price',
            'list_price' => 'products.list_price',
            'weight' => 'products.weight',
            'amount' => 'products.amount',
            'timestamp' => 'products.timestamp',
            'updated_timestamp' => 'products.updated_timestamp',
            'popularity' => 'popularity.total',
            'company' => 'company_name',
            'null' => null,
        ];

        $when1 = $when2 = $when3 = $when4 = '';
        if ($ls_settings['search_on_product_id'] == 'Y') {
            $when1 = db_quote(' WHEN products.product_id LIKE ?l THEN 490', "{$params['q']}%");
        }
        if ($ls_settings['search_on_pcode'] == 'Y') {
            $when2 = db_quote(' WHEN products.product_code LIKE ?l THEN 480', "{$params['q']}%");
        }
        if ($ls_settings['search_on_keywords'] == 'Y') {
            $when3 = db_quote(' WHEN descr1.search_words LIKE ?l THEN 440', "%{$params['q']}%");
        }
        $stock_order = '';

        if ($ls_settings['out_stock_end'] == 'Y') {
            if (
                !empty($params['warehouses_destination_id'])
                && in_array('warehouses', $addons)
                  && (
                      (AREA == 'CLS' && !empty($params['warehouses_destination_id']))
                      || AREA == 'C'
                  )
            ) {
                $stock_order = db_quote(
                    ' CASE WHEN (CASE products.is_stock_split_by_warehouses WHEN ?s'
                     . ' THEN warehouses_destination_products_amount.amount'
                     . ' ELSE products.amount END) < 1 THEN 0 ELSE 1 END DESC, ',
                    'Y'
                );
            } else {
                $stock_order = ' CASE WHEN products.amount < 1 THEN 0 ELSE 1 END DESC, ';
            }
        }
        $parts = explode(' ', $params['q']);
        if (count($parts) > 1 && trim($parts[0])) {
            $when4 = db_quote(' WHEN descr1.product like ?l THEN 380', trim($parts[0]) . '%');
        }
        $product_sort_weight = 360;
        if (count($parts) > 1) {
            $product_sort_weight = 450;
        }
        $sortings['cls_rel'] = db_quote(
            "
		   CASE
		   	  WHEN descr1.product like ?l THEN 600
			  WHEN descr1.product like ?l THEN 500
			  {$when1}
			  {$when2}
			  WHEN descr1.product like ?l THEN 460	
			  {$when3}		  			 
			  WHEN descr1.product like ?l THEN 420
			  WHEN descr1.product like ?l THEN 400				  
			  {$when4}			
			  WHEN descr1.product like ?l THEN {$product_sort_weight}		   
				  ELSE 0
			  END DESC, products.product_id ",
            $params['q'],
            "{$params['q']} %",
            "% {$params['q']} %",
            "{$params['q']}%",
            "% {$params['q']}",
            "%{$params['q']}%"
        );
        if (!empty($params['qid'])) {
            $sortings['cls_rel_pop'] = ' lsp.popularity DESC, ' . $sortings['cls_rel'];
        } else {
            $sortings['cls_rel_pop'] = $sortings['cls_rel'];
        }
        if (!empty($sortings[$params['sort_by']])) {
            $sortings[$params['sort_by']] = $stock_order . $sortings[$params['sort_by']];
        }
        return $sortings;
    }

    public static function _get_thumbnail($img, $folder = 0, $object_id = 0, $width = 75, $height = 75, $quality = 90)
    {
        $name = md5($img . '-' . $width . '-' . $height);
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $new_path = DIR_ROOT . '/images/thumbnails/cls/' . $folder . '/' . $name . '.jpg';
        if (is_file($new_path)) {
            return str_replace(DIR_ROOT, '', $new_path);
        }
        if (is_file(DIR_ROOT . '/' . $img)) {
            $oldmask = umask(0);
            if (!file_exists(DIR_ROOT . '/images/thumbnails')) {
                mkdir(DIR_ROOT . '/images/thumbnails', 0777, true);
            }
            if (!file_exists(DIR_ROOT . '/images/thumbnails/cls')) {
                mkdir(DIR_ROOT . '/images/thumbnails/cls', 0777, true);
            }
            if (!file_exists(DIR_ROOT . '/images/thumbnails/cls/' . $folder)) {
                mkdir(DIR_ROOT . '/images/thumbnails/cls/' . $folder, 0777, true);
            }
            umask($oldmask);
            $info = getimagesize($img);
            if (in_array($info['mime'], ['image/png', 'image/jpeg', 'image/gif', 'image/webp', 'image/bmp'])) {
                try {
                    $image = new SimpleImage();
                    $image
                        ->fromFile(realpath($img))                     // load image
                        ->bestFit($width, $height)                     // resize
                        ->toFile($new_path, 'image/jpeg')              // convert to jpeg and save
                    ;
                } catch (Exception $err) {
                    $new_path = $img;
                }
            } else {
                $new_path = $img;
            }
        } else {
            $new_path = 'images/no_image.png';
        }
        return str_replace(DIR_ROOT, '', $new_path);
    }

    public static function _save_search_statistic($params, $company_id = 0, $ls_settings = [])
    {
        if (!$ls_settings['enable_history']) {
            return [0, 0];
        }
        static $data;
        if (!empty($data)) {
            return $data;
        }
        $ip = self::_get_user_ip();
        $rid = $qid = false;
        $params['q'] = trim($params['q']);
        $company_condition = db_quote(' AND ?:csc_live_search_q_base.company_id=?i', $company_id);
        $qid = db_get_field("SELECT qid FROM ?:csc_live_search_q_base WHERE 1 {$company_condition} AND q LIKE ?l AND lang_code=?s", $params['q'], $params['lang_code']);
        if (!$qid) {
            $qid = db_query('INSERT INTO ?:csc_live_search_q_base ?e', [
                'q' => $params['q'],
                'company_id' => $company_id,
                'lang_code' => $params['lang_code'],
            ]);
        }
        $time = time();
        $skip_rid = false;
        if (
            $params['page'] != 1
            || !empty($params['cls_ignore_rid'])
            || !empty($params['get_conditions'])
            || (isset($params['items_per_page']) && !$params['items_per_page'])
        ) {
            $skip_rid = true;
        }

        if (!$skip_rid) {
            $company_condition = db_quote(' AND ?:csc_live_search_q_requests.company_id=?i', $company_id);
            $request = db_get_row("SELECT ?:csc_live_search_q_requests.*, ?:csc_live_search_q_base.q FROM ?:csc_live_search_q_requests
			 LEFT JOIN ?:csc_live_search_q_products ON ?:csc_live_search_q_products.rid=?:csc_live_search_q_requests.rid
			 LEFT JOIN ?:csc_live_search_q_base ON ?:csc_live_search_q_base.qid=?:csc_live_search_q_requests.qid AND ?:csc_live_search_q_base.lang_code=?s
			 WHERE 1 {$company_condition} AND user_ip=?s AND timestamp > ?i AND ?:csc_live_search_q_products.rid IS NULL ORDER BY ?:csc_live_search_q_requests.timestamp DESC LIMIT 1", $params['lang_code'], $ip, $time - 5);
            if (!empty($request) && substr_count($params['q'], ' ') != substr_count($request['q'], ' ')) {
                $request = [];
            }
            if (!empty($request) && $request['found_products'] > 0 && strlen($params['q']) < strlen($request['q'])) {
                $request = [];
            }

            $rid = !empty($request['rid']) ? $request['rid'] : 0;
            $qrid = !empty($request['qid']) ? $request['qid'] : 0;
            $data = [
                'company_id' => $company_id,
                'user_ip' => $ip,
                'qid' => $qid,
                'timestamp' => $time,
                'user_id' => $params['runtime_uid'],
                'lang_code' => $params['lang_code'],
                'clsuid' => !empty($_COOKIE['clsuid']) ? $_COOKIE['clsuid'] : 0,
            ];
            $update_query = db_quote('timestamp = ?i, qid=?i', $time, $qid);
            if ($rid) {
                db_query('UPDATE ?:csc_live_search_q_requests SET ?u WHERE rid=?i', ['qid' => $qid, 'timestamp' => $time], $rid);
            } else {
                $rid = db_query('INSERT INTO ?:csc_live_search_q_requests ?e ON DUPLICATE KEY UPDATE ?p', $data, $update_query);
            }
        }
        $data = [$rid, $qid];
        return $data;
    }

    public static function _save_requests_found_products($params, $ls_settings)
    {
        if ($ls_settings['enable_history'] && !empty($params['rid'])) {
            $data = [];
            if (isset($params['total_items'])) {
                $data['found_products'] = $params['total_items'];
            }
            if (!empty($params['is_turbo'])) {
                $data['is_turbo'] = 1;
            }
            if ($data) {
                db_query('UPDATE ?:csc_live_search_q_requests SET ?u WHERE rid=?i', $data, $params['rid']);
            }
        }
    }

    private static function _get_user_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public static function _get_keyboard_layout($str = '')
    {
        if (preg_match('/^[А-Яа-яЁё]+$/u', $str)) {
            return 'ru';
        }
        return 'en';
    }

    public static function _switch_text($text, $from = 'en', $to = '')
    {
        $layouts = ['ru' => 'en', 'en' => 'ru'];
        if (!$to) {
            $to = $layouts[$from];
        }
        $langs = [
            'ru' => [
                'й', 'ц', 'у', 'к', 'е', 'н', 'г', 'ш', 'щ', 'з', 'х', 'ъ',
                'ф', 'ы', 'в', 'а', 'п', 'р', 'о', 'л', 'д', 'ж', 'э',
                'я', 'ч', 'с', 'м', 'и', 'т', 'ь', 'б', 'ю',
            ],
            'en' => [
                'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', '[', ']',
                'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', ';', "'",
                'z', 'x', 'c', 'v', 'b', 'n', 'm', ',', '.',
            ],
        ];
        return str_replace($langs[$from], $langs[$to], $text);
    }

    public static function _format_prices(&$product, $currency)
    {
        foreach (['price', 'list_price'] as $field) {
            if (!isset($product[$field])) {
                continue;
            }
            $product[$field] = self::_format_price($product[$field], $currency);
        }
    }

    public static function _format_price($price, $currency)
    {
        $currencies = self::_get_currencies();
        if (!empty($currencies[$currency])) {
            $params = $currencies[$currency];
        } else {
            foreach ($currencies as $curr) {
                if ($curr['is_primary'] == 'Y') {
                    $params = $curr;
                    break;
                }
            }
        }
        if ($params['is_primary'] == 'Y') {
            $params['coefficient'] = 1;
        }
        $price = $price / $params['coefficient'];
        $price = sprintf('%.' . $params['decimals'] . 'f', round((float) $price + 0.00000000001, $params['decimals']));
        $price = number_format($price, $params['decimals'], $params['decimals_separator'], $params['thousands_separator']);
        if ($params['after'] == 'Y') {
            $price .= ' ' . $params['symbol'];
        } else {
            $price = $params['symbol'] . $price;
        }
        return $price;
    }

    private static function _get_currencies()
    {
        static $currencies;
        if (!$currencies) {
            $currencies = db_get_hash_array('SELECT * FROM ?:currencies', 'currency_code');
        }
        return $currencies;
    }

    private static function _get_ccategory_name($category_id, $lang_code)
    {
        static $names;
        if (!isset($names[$category_id])) {
            $names[$category_id] = db_get_field('SELECT category FROM ?:category_descriptions
				WHERE category_id=?i AND lang_code=?s', $category_id, $lang_code);
        }
        return $names[$category_id];
    }

    public static function _get_product_language_names($products, $lang_code)
    {
        $pids = [];
        foreach ($products as $k => $p) {
            $pids[] = $p['product_id'];
        }
        $names = db_get_hash_single_array('SELECT product_id, product FROM ?:product_descriptions WHERE product_id IN (?a) AND lang_code=?s', ['product_id', 'product'], $pids, $lang_code);
        foreach ($products as $k => &$p) {
            if (!empty($names[$p['product_id']])) {
                $p['product'] = $names[$p['product_id']];
            }
        }
        return $products;
    }
}
