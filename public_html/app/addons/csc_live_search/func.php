<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           http://www.cs-commerce.com/license-agreement.html                *
*                                                                            *
*/

use Tygh\Registry;
use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

function fn_cls_get_index_fields()
{
    return [
        'variant' => 'product_feature_variant_descriptions',
        'variant_name' => 'product_option_variants_descriptions',
        'product_code' => 'products',
        'product' => 'product_descriptions',
        // 'search_words'=>'product_descriptions',
        'meta_keywords' => 'product_descriptions',
    ];
}
function fn_cls_install()
{
    $indexes_fields = fn_cls_get_index_fields();
    foreach ($indexes_fields as $field => $table) {
        $indexes = db_get_hash_array("SHOW INDEX FROM ?:{$table}", 'Column_name');
        if (empty($indexes[$field])) {
            db_query("ALTER TABLE ?:{$table} ADD INDEX `cls_{$field}` (`{$field}`);");
        }
    }
    // Speed-UP
    for ($i = 0; $i < 10; $i++) {
        db_query("CREATE TABLE IF NOT EXISTS `?:csc_search_speedup_products_clusters_{$i}` (
			  `product_id` bigint(8) NOT NULL,
			  `cluster_id` mediumint(8) NOT NULL,
			  UNIQUE KEY `product_id_cluster_id` (`product_id`,`cluster_id`),
			  KEY `product_id` (`product_id`),
			  KEY `cluster_id` (`cluster_id`)
			) DEFAULT CHARSET=utf8");
    }
    if (!fn_cls_copy_init_file()) {
        fn_set_notification('W', __('warning'), __('cls.installation_warning', ['[url]' => fn_url('csc_live_search.settings')]));
    }
    // Privilages
    if (version_compare(PRODUCT_VERSION, '4.10.1', '<')) {
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('manage_csc_live_search', 'N', 'addons')");
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('view_csc_live_search', 'N', 'addons')");
    } else {
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('manage_csc_live_search', 'N', 'addons', 'csc_live_search', 'N')");
        db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id, group_id, is_view) VALUES ('view_csc_live_search', 'N', 'addons', 'csc_live_search', 'Y')");
    }
    fn_rm(DIR_ROOT . '/var/cache');
}

function fn_cls_uninstall()
{
    $indexes_fields = fn_cls_get_index_fields();
    foreach ($indexes_fields as $field => $table) {
        $indexes = db_get_hash_array("SHOW INDEX FROM ?:{$table}", 'Key_name');
        $indexes = array_keys($indexes);
        foreach ($indexes as $index_name) {
            if (strpos($index_name, 'cls_') !== false) {
                db_query("ALTER TABLE ?:{$table} DROP INDEX {$index_name}");
            }
        }
    }
    // Speed-UP
    for ($i = 0; $i < 10; $i++) {
        db_query("DROP TABLE IF EXISTS `?:csc_search_speedup_products_clusters_{$i}`");
    }

    // Privilages
    db_query("DELETE FROM ?:privileges WHERE privilege IN ('manage_csc_live_search', 'view_csc_live_search')");
}

function fn_cls_copy_init_file()
{
    $result = fn_copy(DIR_ROOT . '/app/addons/csc_live_search/core/install/cls.php', DIR_ROOT . '/cls.php');
    @chmod(DIR_ROOT . '/cls.php', 0755);
    return $result;
}

function fn_cls_get_init_file()
{
    $file = DIR_ROOT . '/app/addons/csc_live_search/core/install/cls.php';
    if (file_exists($file)) {
        if (ob_get_level()) {
            ob_end_clean();
        }
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}

function fn_cls_check_installation()
{
    if (!file_exists(DIR_ROOT . '/cls.php')) {
        return false;
    }
    return true;
}
function fn_csc_live_search_get_route(&$req, $result, $area, $is_allowed_url)
{
    if (!empty($req['rid'])) {
        if (!empty($req['product_id'])) {
            $qid = db_get_field('SELECT qid FROM ?:csc_live_search_q_requests WHERE rid=?i', $req['rid']);
            db_query('REPLACE INTO ?:csc_live_search_q_products ?e', ['rid' => $req['rid'], 'pid' => $req['product_id']]);
            if ($qid) {
                $increase_popularity = db_get_field('SELECT value FROM ?:csc_live_search WHERE name=?s', 'increase_popularity');
                if ($increase_popularity == 'Y') {
                    $popularity = ['product_id' => $req['product_id'], 'qid' => $qid, 'popularity' => 1];
                    $update_query = db_quote('popularity = popularity + ?i', 1);
                    db_query('INSERT INTO ?:csc_live_search_popularity ?e ON DUPLICATE KEY UPDATE ?p', $popularity, $update_query);
                }
            }
        }
        unset($req['rid']);
    }
}
function fn_cls_get_setting_value($key)
{
    $settings = CscLiveSearch::_get_option_values();
    return !empty($settings[$key]) ? $settings[$key] : false;
}
function fn_cls_get_settings()
{
    return CscLiveSearch::_get_option_values();
}
function fn_csc_live_search_get_products_pre(&$params, $items_per_page, $lang_code)
{
    $addon = CscLiveSearch::_get_option_values();
    if (AREA == 'A' && !empty($params['q']) && $addon['clss_admin_status'] && fn_search_is_numeric($params['q']) && !empty($params['pid'])) {
        unset($params['pid']);
    }
    if (AREA == 'A' && (!empty($params['pname']) || !empty($params['pshort']) || !empty($params['pfull']) || !empty($params['pkeywords']))) {
        return;
    }

    if (isset($params['q'])) {
        $params['q'] = trim($params['q']);
    }

    if (!empty($params['q']) && (AREA == 'C' || $addon['clss_admin_status'])) {
        $params['cls_q'] = $params['q'];
        unset($params['q']);
        if (empty($_REQUEST['sort_by'])) {
            list($params['sort_by'], $params['sort_order']) = explode('|', $addon['sort_by']);
        }
        if (!empty($params['sort_order'])) {
            $params['sort_order'] = str_replace(['descasc', 'ascdesc'], ['desc', 'asc'], $params['sort_order']);
        }
        $params['ls_sort_order'] = $params['sort_order'];
    }
}

function fn_csc_live_search_get_products_before_select($params, &$join, &$condition, $u_condition, $inventory_join_cond, $sortings, $total, $items_per_page, $lang_code, $having) {}

function fn_csc_live_search_get_products(&$params, &$fields, &$sortings, &$condition, &$join, &$sorting, $group_by, $lang_code, $having)
{

    $sortings['ls_popularity'] = '?:csc_live_search_popularity.popularity';
    $sortings['clicks'] = 'clsClicks';
    $sortings['phrases'] = 'clsPhrases';

    if (!empty($params['ls_sort_order'])) {
        $params['sort_order'] = $params['ls_sort_order'];
    }
    if ($params['sort_by'] == 'ls_popularity') {
        $join .= db_quote(' LEFT JOIN ?:csc_live_search_popularity ON ?:csc_live_search_popularity.product_id=products.product_id ');
    }
    if (!empty($params['cls_clicked_products'])) {
        $join_cond = '';
        if (!empty($params['lang_code'])) {
            $join_cond = db_quote(' AND clsqr.lang_code=?s', $params['lang_code']);
        }
        $join .= db_quote(" INNER JOIN ?:csc_live_search_q_products as clsqp ON products.product_id=clsqp.pid
			LEFT JOIN ?:csc_live_search_q_requests as clsqr ON clsqr.rid=clsqp.rid {$join_cond} 			
		");
        if (!empty($params['qid'])) {
            $condition .= db_quote(' AND clsqr.qid=?i', $params['qid']);
        }
        if (!empty($params['cls_uid'])) {
            $condition .= db_quote(' AND clsqr.user_id=?i', $params['cls_uid']);
        }
        $fields[] = 'COUNT(DISTINCT(clsqp.rid)) as clsClicks';
        $fields[] = 'COUNT(DISTINCT(clsqr.qid)) as clsPhrases';
    }

    $ls_settings = CscLiveSearch::_get_option_values();
    if (AREA == 'C') {
        if (isset($params['q']) && empty($params['cls_q']) && !empty($ls_settings['min_chars_limit'])) {
            $condition .= db_quote(' AND 0');
        }
    }
    if (!empty($params['cls_q'])) {
        if (mb_strlen($params['cls_q']) < $ls_settings['min_chars_limit']) {
            $condition .= db_quote(' AND 0');
        }

        $runtime_company_id = !empty($params['runtime_company_id']) ? $params['runtime_company_id'] : Registry::get('runtime.company_id');
        $params['q'] = $params['cls_q'];
        $params['lang_code'] = $lang_code;
        $params['runtime_uid'] = !empty($_SESSION['auth']['user_id']) ? $_SESSION['auth']['user_id'] : 0;

        if (defined('AJAX_REQUEST') || !empty($_REQUEST['features_hash'])) {
            $params['cls_ignore_rid'] = true;
        }
        list($params['rid'], $params['qid']) = ClsSearchProducts::_save_search_statistic($params, $runtime_company_id, $ls_settings);

        if (Registry::get('addons.warehouses.status') == 'A') {
            $params['warehouses_destination_id'] = fn_cls_get_destination_id_by_product_params([]);
        }

        $ls_sortings = ClsSearchProducts::_get_sortings($params);
        $sortings = array_merge($sortings, $ls_sortings);

        if (($params['sort_by'] == 'cls_rel_pop' || $params['sort_by'] == 'cls_rel') && !empty($params['qid'])) {
            $fields[] = 'lsp.popularity';
        }

        if (AREA == 'A' && $ls_settings['clss_admin_status']) {
            $ls_settings['clss_status'] = true;
        }

        // Fix issue with a lot of joins
        if (substr_count($params['q'], ' ') > 5) {
            $ls_settings['speedup_level'] = 'light';
        }

        if ($ls_settings['clss_status'] && $ls_settings['speedup_level'] == 'hard') {
            list($_join, $_condition) = ClsSearchSpeedup::_get_search_conditions($params['q'], $ls_settings['speedup_cluster_size'], $ls_settings);
            $join .= $_join;
            $condition .= $_condition;
        }

        $join = ClsSearchProducts::_get_joins($params, $ls_settings, $runtime_company_id, $join);
        $condition = ClsSearchProducts::_get_conditions($params, $ls_settings, $condition);

        if ($ls_settings['ignore_lang_code'] == 'Y') {
            $join = str_replace(" AND descr1.lang_code = '" . $lang_code . "'", '', $join);
        }
    }
}

function fn_csc_live_search_get_products_post(&$products, $params, $lang_code)
{
    $ls_settings = CscLiveSearch::_get_option_values();
    if (!empty($params['cls_q']) && $ls_settings['ignore_lang_code'] == 'Y' && $products) {
        $products = ClsSearchProducts::_get_product_language_names($products, $lang_code);
    }
    ClsSearchProducts::_save_requests_found_products($params, $ls_settings);
}

function fn_csc_live_search_get_users($params, &$fields, &$sortings, &$condition, &$join, $auth)
{
    if (!empty($params['cls_clicks'])) {
        $fields[] = 'COUNT(DISTINCT(clsqp.rid)) as clsClicks';
        $fields[] = 'COUNT(DISTINCT(clsqr.qid)) as clsPhrases';
        $fields[] = 'clsqr.timestamp as lastActivity';

        $sortings['clicks'] = 'clsClicks';
        $sortings['phrases'] = 'clsPhrases';
        $sortings['lastActivity'] = 'lastActivity';
        $join .= db_quote(' INNER JOIN ?:csc_live_search_q_requests as clsqr ON clsqr.user_id=?:users.user_id
			LEFT JOIN ?:csc_live_search_q_products as clsqp ON clsqr.rid=clsqp.rid			
		');

        $data = [];
        if (!empty($params['period']) && $params['period'] != 'A') {
            list($data['time_from'], $data['time_to']) = fn_create_periods($params);
        } else {
            $data['time_from'] = $data['time_to'] = 0;
        }

        if (!empty($data['time_from'])) {
            $condition[] = db_quote(' AND clsqr.timestamp > ?i', $data['time_from']);
        }
        if (!empty($data['time_to'])) {
            $condition[] = db_quote(' AND clsqr.timestamp < ?i', $data['time_to']);
        }

        if (!empty($params['q'])) {
            $join .= db_quote(' LEFT JOIN ?:csc_live_search_q_base as clsqb ON clsqr.qid=clsqb.qid');
            $condition[] = db_quote(' AND clsqb.q LIKE ?l', "%{$params['q']}%");
        }
    }
}

function fn_csc_live_search_login_user_post($user_id, $cu_id, $udata, $auth, $condition, $result)
{
    if ($result == LOGIN_STATUS_OK && !empty($auth['user_id']) && !empty($_COOKIE['clsuid']) && empty($auth['act_as_user'])) {
        db_query(
            'UPDATE ?:csc_live_search_q_requests SET user_id=?i WHERE user_id=0 AND clsuid=?i',
            $auth['user_id'],
            $_COOKIE['clsuid']
        );
    }
}

function fn_csc_ls_get_wishlist_products()
{
    $products = [];
    if (!empty($_SESSION['wishlist']['products'])) {
        foreach ($_SESSION['wishlist']['products'] as $product) {
            $products[$product['product_id']] = 1;
        }
    }

    return $products;
}
function fn_csc_ls_get_cart_products()
{
    $products = [];
    if (!empty($_SESSION['cart']['products'])) {
        foreach ($_SESSION['cart']['products'] as $product) {
            $products[$product['product_id']] = 1;
        }
    }
    return $products;
}

function fn_csc_ls_get_comparison_list()
{
    $products = [];
    if (!empty($_SESSION['comparison_list'])) {
        foreach ($_SESSION['comparison_list'] as $pid) {
            $products[$pid] = 1;
        }
    }
    return $products;
}
function fn_cls_speedup_exim_by_product_id($ids)
{
    if (!defined('CSS_SKIP_INDEXATION')) {
        foreach ($ids as $product) {
            if (!empty($product['product_id'])) {
                ClsSearchSpeedup::_scan_single_product($product['product_id']);
            }
        }
    }
}

function fn_csc_live_search_delete_product_pre($product_id, $status)
{
    if (fn_cls_get_setting_value('use_turbo_cache') && fn_cls_get_setting_value('clear_turbo_cache_when') != 'disabled') {
        fn_cls_redis_clear_by_product_id($product_id);
    }
}

function fn_cls_redis_clear_by_product_id($product_id)
{
    $ls_settings = fn_cls_get_settings();
    if (!empty($ls_settings['use_turbo_cache']) && $ls_settings['use_turbo_cache']) {
        $iRedis = new ClsRedis([], $ls_settings);
        $iRedis->clear_by_pid($product_id);
    }
}

function fn_cls_clear_turbo_cache()
{
    $ls_settings = fn_cls_get_settings();
    if (!empty($ls_settings['use_turbo_cache']) && $ls_settings['use_turbo_cache']) {
        $iRedis = new ClsRedis([], $ls_settings);
        $iRedis->clear();
    }
    return true;
}

function fn_csc_live_search_update_product_post($product_data, $product_id, $lang_code, $create)
{
    if (!defined('CSS_SKIP_INDEXATION')) {
        if (fn_cls_get_setting_value('use_turbo_cache') && !$create && in_array(fn_cls_get_setting_value('clear_turbo_cache_when'), ['on_create_and_update'])) {
            fn_cls_redis_clear_by_product_id($product_id);
        }
        ClsSearchSpeedup::_scan_single_product($product_id);

        if (
            fn_cls_get_setting_value('use_turbo_cache') && (
                ($create && fn_cls_get_setting_value('clear_turbo_cache_when') == 'on_create_product')
                || fn_cls_get_setting_value('clear_turbo_cache_when') == 'on_create_and_update'
            )
        ) {
            fn_cls_redis_clear_by_product_id($product_id);
        }
    }
}
function fn_get_cls_url()
{
    if (defined('HTTPS')) {
        $http = fn_csc_check_http_location(Registry::get('config.https_host'), Registry::get('config.https_path'), 'https');
    } else {
        $http = fn_csc_check_http_location(Registry::get('config.http_host'), Registry::get('config.http_path'), 'http');
    }
    return $http . '/cls.php';
}

function fn_csc_check_http_location($host, $path = '', $http = 'http')
{
    if (!empty(Registry::get("config.origin_{$http}_location"))) {
        $http_location = Registry::get("config.origin_{$http}_location");
        $http_location = str_replace($http . '://', '', $http_location);
        $host = $host . strstr($http_location, '/');
        $path = '';
    }
    return $http . '://' . $host . $path;
}

function fn_cls_get_destination_id_by_product_params($params = [])
{
    $destination_id = 0;
    if (version_compare(PRODUCT_VERSION, '4.11.3', '>')) {
        $destination_id = fn_warehouses_get_destination_id_by_product_params($params);
    }
    return $destination_id;
}

function fn_cls_is_active_promotions()
{
    return 'Y';
    $ls_settings = fn_cls_get_settings();
    if (!empty($ls_settings['force_reload_prices']) && $ls_settings['force_reload_prices'] == 'Y') {
        return 'Y';
    }
    if (Registry::get('addons.csc_product_currency.status') == 'A') {
        return 'Y';
    }
    if (Registry::get('settings.Appearance.show_prices_taxed_clean') == 'Y') {
        if (db_get_field('SELECT a.tax_id FROM ?:taxes as a WHERE a.price_includes_tax=?s', 'N')) {
            return 'Y';
        }
    }
    list($promotions) = fn_get_promotions([
        'get_hidden' => true,
        'active' => true,
        'zone' => 'catalog',
    ], 1);
    if ($promotions) {
        return 'Y';
    }
    return 'N';
}

function fn_cls_check_add_to_cart($product, $auth)
{
    /**
     * 0 - Out of stock or is zero price
     * 1 - In stock and add to cart is available
     * 2 - Product have selectable options or variations
     * 3 - Available for signed in only.
     */
    $ls_settings = fn_cls_get_settings();
    if (Registry::get('settings.Checkout.allow_anonymous_shopping') == 'hide_price_and_add_to_cart' && !$auth['user_id']) {
        return 3;
    }
    if (!empty($product['product_options']) && count($product['product_options']) > 1) {
        return 2;
    }
    if (Registry::get('addons.product_variations.status') == 'A' && @$ls_settings['search_variation'] != 'A' && !empty($product['has_child_variations'])) {
        return 2;
    }
    if ($product['price'] == 0) {
        return 0;
    }
    if ($product['amount'] < 1 && Registry::get('settings.General.allow_negative_amount') != 'Y') {
        if ($product['tracking'] == 'B') {
            return 0;
        }
        if ($product['tracking'] == '__default__' && Registry::get('settings.General.default_tracking') == 'Y') {
            return 0;
        }
    }
    return 1;
}

function fn_csc_live_search_delete_product_post($product_id, $product_deleted)
{
    if ($product_id && $product_deleted) {
        db_query('DELETE FROM ?:csc_live_search_popularity WHERE product_id=?i', $product_id);
        db_query('DELETE FROM ?:csc_live_search_q_products WHERE pid=?i', $product_id);
        db_query('DELETE FROM ?:csc_search_speedup_index WHERE product_id=?i', $product_id);
        for ($i = 0; $i < 10; $i++) {
            db_query("DELETE FROM `?:csc_search_speedup_products_clusters_{$i}` WHERE product_id=?i", $product_id);
        }
    }
}

function fn_csc_live_search_get_storefront_motivation()
{
    $ls_settings = fn_cls_get_settings();
    $clsm_motivation = [];
    if ($ls_settings['clsm_status']) {
        if (!empty($ls_settings['clsm_motivation_text_' . CART_LANGUAGE . '_' . Registry::get('runtime.storefront_id')])) {
            $clsm_motivation = $ls_settings['clsm_motivation_text_' . CART_LANGUAGE . '_' . Registry::get('runtime.storefront_id')];
        } elseif (!empty($ls_settings['clsm_motivation_text_' . CART_LANGUAGE])) {
            $clsm_motivation = $ls_settings['clsm_motivation_text_' . CART_LANGUAGE];
        }
    }
    return json_encode($clsm_motivation);
}
