<?php

use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
header('X-Robots-Tag: noindex, nofollow', true);

require_once DIR_ROOT . '/app/addons/csc_live_search/core/config.php';
$params = $_REQUEST;
$addons = fn_cls_get_active_addons();
$params['q'] = trim($params['q']);
$company_id = fn_cls_get_current_company_id($params);
define('CLS_RUNTIME_COMPANY_ID', $company_id);
define('CLS_RUNTIME_STOREFRONT_ID', !empty($params['runtime_storefront_id']) ? $params['runtime_storefront_id'] : 0);
$ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
if (!fn_cls_validate_request($params, $ls_settings)) {
    header('HTTP/1.0 403 Forbidden');
    echo json_encode(['error' => 'CSRF Attack detected! Please make sure you have enabled cookies on your internet browser in order to stop receiving error.']);
    exit;
}
if (!in_array('csc_live_search', $addons)) {
    header('HTTP/1.0 403 Forbidden');
    echo json_encode(['error' => 'Live search addon is disabled']);
    exit;
}
if (!empty($_REQUEST['mode'])) {
    if ($_REQUEST['mode'] == 'delete_user_query') {
        if (!empty($_REQUEST['qid']) && !empty($_COOKIE['clsuid'])) {
            $qids = explode(',', $_REQUEST['qid']);
            db_query('UPDATE ?:csc_live_search_q_requests SET user_hidden=?i WHERE qid IN (?a) AND clsuid=?i', 1, $qids, $_COOKIE['clsuid']);
            $user_search_queries = fn_cls_get_user_history($ls_settings);
            $response = [
                'user_history' => !empty($user_search_queries) ? $user_search_queries : [],
            ];
            echo json_encode($response);
        }
        exit;
    }
}
if (!empty($ls_settings['use_turbo_cache']) && fn_cls_redis_available()) {
    $iRedis = new ClsRedis($params);
    if ($data = $iRedis->get()) {
        list($params['rid'], $params['qid']) = ClsSearchProducts::_save_search_statistic($params, $company_id, $ls_settings);
        $data['search']['rid'] = $params['rid'];
        $data['turbo'] = true;
        $params['total_items'] = $data['search']['total_items'];
        $params['is_turbo'] = true;
        ClsSearchProducts::_save_requests_found_products($params, $ls_settings);

        if ($ls_settings['show_user_history'] == 'Y') {
            $user_search_queries = fn_cls_get_user_history($ls_settings);
            $data['user_history'] = $user_search_queries;
        }
        echo json_encode($data);
        exit;
    }
}
// fn_print_r($data);

$def_settings = [
    'page' => 1,
    'cid' => 0,
];
$params = array_merge($def_settings, $params);
$products = $products_categories = $categories = $storefront_categories = $brands = $vendors = $blogs = $pages = $corrections = $phrases = $featured_products = [];
if (PRODUCT_EDITION == 'MULTIVENDOR' && !empty($params['company_id'])) {
    $is_vendor_search = true;
} else {
    $is_vendor_search = false;
}
if (!empty($params['q']) && mb_strlen($params['q']) >= $ls_settings['characters_limit']) {
    if ($ls_settings['search_products'] == 'Y') {
        list($products, $search) = ClsSearchProducts::_get_products($params, $ls_settings['products_per_page']);
    } else {
        list($products, $search) = ClsSearchProducts::_get_products($params, 0);
    }
    if ($products && $params['page'] == 1 && empty($params['category_id'])) {
        if ($ls_settings['show_user_history'] == 'Y') {
            $user_search_queries = fn_cls_get_user_history($ls_settings);
        }

        if ($ls_settings['suggest_products_categories'] == 'Y') {
            $_params = $params;
            $_params['group_by'] = 'categories';
            $_params['current_cid'] = 0;
            if (!empty($_params['cid'])) {
                $_params['current_cid'] = $_params['cid'];
                unset($_params['cid']);
            }
            list($products_categories) = ClsSearchProducts::_get_products($_params, $ls_settings['products_per_page']);
        }
    }
    if (!$products && $ls_settings['suggest_corrections'] == 'Y') {
        $corrections = ClsYandexSpeller::_get($params['q'], CART_LANGUAGE);
    }
    if (empty($params['cid']) && $params['page'] == 1 && !$is_vendor_search) {
        if ($ls_settings['search_categories'] == 'Y') {
            $categories = ClsSearchCategories::_get_categories($params);
        }
        if ($company_id && $ls_settings['search_storefront_categories'] == 'Y') {
            $storefront_categories = ClsSearchCategories::_get_storefront_categories($params);
        }
        if ($ls_settings['search_brands'] == 'Y' && $ls_settings['brands_feature_id']) {
            $brands = ClsSearchBrands::_get_brands($params);
        }
        if ($ls_settings['search_vendors'] == 'Y' && !$company_id) {
            $vendors = ClsSearchVendors::_get_vendors($params);
        }
        if ($ls_settings['search_blog'] == 'Y' || $ls_settings['search_pages'] == 'Y') {
            $types = [];
            if ($ls_settings['search_blog'] == 'Y') {
                $types[] = 'B';
            }
            if ($ls_settings['search_pages'] == 'Y') {
                $types[] = 'T';
                $types[] = 'F';
                $types[] = 'l';
            }
            $pages = ClsSearchPages::_get_pages($params, $types);
        }
    }
} else {
    $search = $params;
}
if (!empty($params['q']) && $ls_settings['suggest_phrases'] && empty($params['cid'])) {
    $phrases = ClsSearchPhrases::_get_phrases_for_search($params, $ls_settings, $params['lang_code']);
}
if (!empty($params['q']) && $ls_settings['show_phrases_rec_products'] && !$is_vendor_search && empty($params['cid'])) {
    $pids = ClsSearchPhrases::_get_featured_products($params, $ls_settings, $params['lang_code']);
    if (!empty($pids)) {
        $_params = $params;
        unset($_params['q']);
        $_params['pids'] = $pids;
        list($featured_products, $_search) = ClsSearchProducts::_get_products($_params, 10);
    }
}
if ($ls_settings['show_price'] == 'A' && !empty($search['runtime_uid'])) {
    $ls_settings['show_price'] = 'Y';
}
if ($ls_settings['show_cart'] == 'A' && !empty($search['runtime_uid'])) {
    $ls_settings['show_cart'] = 'Y';
}
$response = [
    'items' => $products,
    'products_categories' => $products_categories,
    'categories' => $categories,
    'search' => !empty($search) ? $search : [],
    'storefront_categories' => $storefront_categories,
    'brands' => $brands,
    'vendors' => $vendors,
    'pages' => $pages,
    'settings' => $ls_settings,
    'corrections' => $corrections,
    'phrases' => $phrases,
    'featured_products' => $featured_products,
    'user_history' => !empty($user_search_queries) ? $user_search_queries : [],
];
fn_cls_hook_function('hooks_before_response', $ls_settings, $company_id, $params, $response);
if (!empty($ls_settings['use_turbo_cache']) && fn_cls_redis_available()) {
    $iRedis->set($response);
}

echo json_encode($response);
exit;
