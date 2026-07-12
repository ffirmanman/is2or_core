<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
function fn_cls_get_current_company_id($params)
{

    if (!defined('PRODUCT_EDITION')) {
        $config = fn_get_config_data();
    }
    if (PRODUCT_EDITION == 'MULTIVENDOR') {
        $company_id = 0;
    } else {
        if (AREA == 'CLS') {
            $company_id = !empty($params['runtime_company_id']) ? $params['runtime_company_id'] : 0;
        } else {
            $company_id = Registry::get('runtime.company_id');
        }
    }
    return $company_id;
}

function fn_cls_redis_available()
{

    return class_exists('Redis');
}

function fn_cls_speedup_run_scan_info()
{

    return '<p>' . __('cls.speedup_scaner_instruction') . '</p>';
}
function fn_cls_speedup_speedup_general_info()
{

    return '<p>' . __('cls.speedup_general_info') . '</p>';
}

function fn_cls_get_active_addons()
{

    static $addons;
    if (!$addons) {
        $addons = db_get_fields('SELECT addon FROM ?:addons WHERE status=?s', 'A');
        if (version_compare(PRODUCT_VERSION, '4.11.4', '<')) {
            if (($key = array_search('warehouses', $addons)) !== false) {
                unset($addons[$key]);
            }
        }
    }
    return $addons;
}

function fn_cls_hook_function($hook_name = null, &...$args)
{

    if ($hook_name) {
        $ls_settings = $args[0];
        if (!empty($ls_settings[$hook_name])) {
            foreach ($ls_settings[$hook_name] as $dir) {
                if (!empty($dir) && file_exists(DIR_ROOT . $dir)) {
                    $file = pathinfo($dir);
                    require_once DIR_ROOT . $dir;
                    if (function_exists($file['filename'])) {
                        $file['filename'](...$args);
                    }
                }
            }
        }
    }
}
function fn_cls_get_storefront_company_ids($storefront_id)
{

    static $companies;
    if (!$companies) {
        $companies = db_get_fields('SELECT ?:storefronts_companies.company_id FROM ?:storefronts_companies INNER JOIN ?:companies ON ?:companies.company_id=?:storefronts_companies.company_id WHERE ?:storefronts_companies.storefront_id=?i', $storefront_id);
    }
    return $companies;
}

function fn_cls_get_usergroups_conditions($params, $table = 'products')
{

    if (!empty($params['runtime_uid'])) {
        $usergroups_ids = db_get_fields(
            'SELECT lnk.usergroup_id FROM ?:usergroup_links as lnk'
            . ' INNER JOIN ?:usergroups ON ?:usergroups.usergroup_id = lnk.usergroup_id'
                . ' AND ?:usergroups.status != ?s AND ?:usergroups.type IN (?a)'
            . ' WHERE lnk.user_id = ?i AND lnk.status = ?s',
            'D',
            ['C'],
            $params['runtime_uid'],
            'A'
        );
        $usergroups_ids[] = USERGROUP_ALL;
        $usergroups_ids[] = USERGROUP_REGISTERED;
    } else {
        $usergroups_ids = [
            USERGROUP_ALL,
            USERGROUP_GUEST,
        ];
    }
    $ug_cond = [];
    foreach ($usergroups_ids as $uid) {
        $ug_cond[] = db_quote('FIND_IN_SET(?s, ' . $table . '.usergroup_ids)', $uid);
    }
    return ' AND (' . implode(' OR ', $ug_cond) . ')';
}
function fn_cls_get_store_settings()
{

    static $settings;
    if (!$settings) {
        if (AREA == 'CLS') {
            $join_condition = '';
            if (CLS_RUNTIME_STOREFRONT_ID) {
                $join_condition .= db_quote(' AND ?:settings_vendor_values.storefront_id=?i', CLS_RUNTIME_STOREFRONT_ID);
            }
            if (CLS_RUNTIME_COMPANY_ID) {
                $join_condition .= db_quote(' AND ?:settings_vendor_values.company_id=?i', CLS_RUNTIME_COMPANY_ID);
            }
            $settings = db_get_hash_single_array(
                "SELECT IF(?:settings_vendor_values.value IS NULL, ?:settings_objects.value, ?:settings_vendor_values.value) as value, name 
				FROM ?:settings_objects 
				LEFT JOIN ?:settings_vendor_values 
					ON ?:settings_objects.object_id=?:settings_vendor_values.object_id {$join_condition}
				WHERE name IN (?a)",
                ['name', 'value'],
                ['show_out_of_stock_products', 'allow_negative_amount', 'inventory_tracking', 'global_tracking', 'default_tracking']
            );
        } else {
            $settings = Registry::get('settings.General');
        }
    }
    return $settings;
}

function fn_cls_get_user_history($ls_settings)
{
    $display_requests = [];
    $history = [];
    if ($ls_settings['history_limit'] > 0 && !empty($_COOKIE['clsuid'])) {
        $clsuid = $_COOKIE['clsuid'];
        $requests = \db_get_array('SELECT qb.qid as qid, qb.q FROM ?:csc_live_search_q_base AS qb 
				LEFT JOIN ?:csc_live_search_q_requests AS qr ON qr.qid=qb.qid 
				WHERE qb.lang_code=?s 
				AND qr.clsuid=?i 			
				AND qr.found_products > 0
				AND qr.user_hidden=0
				AND qr.timestamp > ?i
				AND LENGTH(qb.q) >= ?i				
				ORDER BY qr.timestamp DESC LIMIT ?i', CART_LANGUAGE, $clsuid, TIME - 3600 * 24 * 60, $ls_settings['characters_limit'], $ls_settings['history_limit'] * 10);
        $allready_in = [];
        foreach ($requests as $k => $req) {
            if (in_array($req['qid'], $allready_in)) {
                continue;
            }
            $q = trim($req['q']);
            $history[] = [
                'qid' => $req['qid'],
                'q' => $q,
            ];
            $allready_in[] = $req['qid'];
        }
        foreach ($history as $k => $req) {
            foreach ($history as $_k => $_req) {
                if ($_k == $k) {
                    continue;
                }
                if ($_k > $k && $req['q'] != $_req['q'] && strpos($_req['q'], $req['q']) !== false && substr_count($req['q'], ' ') == substr_count($_req['q'], ' ')) {
                    if (!empty($history[$k])) {
                        $history[$k]['q'] = $_req['q'];
                        $history[$k]['qid'] .= ',' . $_req['qid'];
                        unset($history[$_k]);
                    }
                } elseif ($_k > $k && $req['q'] != $_req['q'] && strpos($req['q'], $_req['q']) !== false && substr_count($req['q'], ' ') == substr_count($_req['q'], ' ')) {
                    if (!empty($history[$k])) {
                        $history[$k]['qid'] .= ',' . $_req['qid'];
                    } else {
                        $history[$k] = $_req;
                    }

                    unset($history[$_k]);
                }
            }
        }
        $history = array_slice($history, 0, $ls_settings['history_limit']);
    }
    return $history;
}

if (!function_exists('__')) {
    function __($str)
    {
        $val = db_get_field('SELECT value FROM ?:language_values WHERE name=?s AND lang_code=?s', $str, DESCR_SL);
        if (!$val) {
            return '_' . $str;
        }
    }

}

if (!function_exists('mb_strtolower')) {
    function mb_strtolower()
    {
        list($arg1) = func_get_args();
        return strtolower($arg1);
    }

}

if (!function_exists('mb_strlen')) {
    function mb_strlen()
    {
        list($arg1) = func_get_args();
        return strlen($arg1);
    }

}

if (!function_exists('mb_substr')) {
    function mb_substr()
    {
        list($arg1, $arg2, $arg3) = func_get_args();
        return substr($arg1, $arg2, $arg3);
    }

}
