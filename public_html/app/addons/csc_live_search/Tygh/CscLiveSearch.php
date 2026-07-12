<?php
/*
 *                                                                            *
 *          All rights reserved! CS-Commerce Software Solutions               *
 *             http://www.cs-commerce.com/license-agreement.html                  *
 *                                                                            *
 */

namespace Tygh;

use Tygh\Registry;

class CscLiveSearch
{
    public static $base_name = 'csc_live_search';
    public static $lang_prefix = 'cls';

    public static function _allow_separate_storefronts()
    {
        if (AREA == 'A') {
            if (fn_allowed_for('ULTIMATE') && !Registry::get('runtime.simple_ultimate')) {
                return true;
            }
            if (fn_allowed_for('MULTIVENDOR')) {
                return false;
            }
        } else {
            return true;
        }
        return false;
    }

    public static function _update_option_values($settings, $company_id = null)
    {
        $class_name = self::$base_name;
        $update_all_vendors = !empty($_REQUEST['update_all_vendors']) ? $_REQUEST['update_all_vendors'] : [];
        if (!empty($update_all_vendors)) {
            $companies = db_get_fields('SELECT company_id FROM ?:companies');
            $companies[] = 0;
        }
        $company_id = self::_get_company_id($company_id);
        foreach ($settings as $f => $v) {
            if (is_array($v)) {
                $v = 'array()' . json_encode($v);
            }
            if (!empty($update_all_vendors[$f])) {
                foreach ($companies as $cid) {
                    $m[] = [
                        'name' => $f,
                        'company_id' => $cid,
                        'value' => $v,
                    ];
                }
            } else {
                $m[] = [
                    'name' => $f,
                    'company_id' => $company_id,
                    'value' => $v,
                ];
            }
        }
        if (!empty($m)) {
            db_query('REPLACE INTO ?:?f ?m', self::$base_name, $m);
        }
    }

    public static function _get_option_values($skip_functions = false, $company_id = null)
    {
        $company_id = self::_get_company_id($company_id);
        return self::_format_options(['settings', 'hooks', 'search_motivation', 'speedup', 'styles'], $company_id, $skip_functions);
    }

    public static function _get_company_id($company_id = null)
    {
        static $company_ids;
        $key = $company_id;
        if (isset($company_ids[$key])) {
            $company_id = $company_ids[$key];
        } else {
            if (!isset($company_id)) {
                if (\fn_allowed_for('ULTIMATE') && Registry::get('runtime.simple_ultimate')) {
                    $company_id = fn_get_default_company_id();
                } elseif (self::_allow_separate_storefronts() && isset($_REQUEST['runtime_company_id'])) {
                    $company_id = $_REQUEST['runtime_company_id'];
                } elseif (self::_allow_separate_storefronts() && Registry::get('runtime.company_id')) {
                    $company_id = Registry::get('runtime.company_id');
                } else {
                    $company_id = 0;
                }
            }
            $company_ids[$key] = $company_id;
        }
        return $company_id;
    }

    public static function _view()
    {
        if (version_compare(PRODUCT_VERSION, '4.3.2', '<')) {
            $_view = Registry::get('view');
        } else {
            $_view = Tygh::$app['view'];
        }
        return $_view;
    }

    public static function _get_brands()
    {
        $condition = '';
        if (Registry::get('runtime.company_id')) {
            $condition .= db_quote(' AND ?:product_features.company_id=?i', Registry::get('runtime.company_id'));
        }
        return db_get_hash_single_array("SELECT ?:product_features_descriptions.feature_id, ?:product_features_descriptions.description FROM ?:product_features_descriptions LEFT JOIN ?:product_features ON ?:product_features.feature_id= ?:product_features_descriptions.feature_id WHERE lang_code=?s AND feature_type IN (?a) {$condition} ORDER BY ?:product_features_descriptions.description ASC", ['feature_id', 'description'], CART_LANGUAGE, ['E']);
    }

    public static function _get_features()
    {
        $condition = '';
        if (Registry::get('runtime.company_id')) {
            $condition .= db_quote(' AND ?:product_features.company_id=?i', Registry::get('runtime.company_id'));
        }
        return db_get_hash_single_array("SELECT ?:product_features_descriptions.feature_id, ?:product_features_descriptions.description FROM ?:product_features_descriptions LEFT JOIN ?:product_features ON ?:product_features.feature_id= ?:product_features_descriptions.feature_id WHERE lang_code=?s AND feature_type IN (?a) {$condition} ORDER BY ?:product_features_descriptions.description ASC", ['feature_id', 'description'], CART_LANGUAGE, ['E', 'S', 'M', 'T']);
    }

    public static function _get_storefronts()
    {
        if (PRODUCT_EDITION == 'MULTIVENDOR') {
            return [];
        }
        $condition = '';
        if (AREA == 'A' && Registry::get('runtime.company_id')) {
            $condition = db_quote(' AND company_id !=?i', Registry::get('runtime.company_id'));
        }
        $storefronts = db_get_hash_array("SELECT * FROM ?:companies WHERE 1 {$condition}", 'company_id');

        $_storefronts = [];
        foreach ($storefronts as $k => $storefront) {
            $_storefronts[$k] = $storefront['company'];
        }
        return $_storefronts;
    }

    public static function _get_bg_color($category_id, $ls_settings)
    {
        if ($ls_settings['color_type'] == 'M') {
            $colors = ['#595154', '#50AFD6', '#47ADA5', '#5A59C4', '#b9032f', '#fd5461', '#d81f83', '#7C94C0', '#8DE0C6', '#FC918B'];
            $color = $colors[substr($category_id, -1)];
        } elseif ($ls_settings['color_type'] == 'E') {
            $color = $ls_settings['category_e'];
        } else {
            $color = '#' . substr(md5($category_id), 0, 6);
        }
        if ($ls_settings['show_category_gradient'] == 'Y') {
            $color = 'linear-gradient(to top, ' . $color . ', #fff 200%)';
        }
        return $color;
    }

    public static function _get_sort_by()
    {
        $sortings = fn_get_products_sorting();
        $orders = fn_get_products_sorting_orders();
        unset($sortings['null'], $sortings['position']);
        $_sortings = [
            'cls_rel|asc' => __('sort_by_cls_rel_asc'),
            'cls_rel_pop|asc' => __('sort_by_cls_rel_pop_asc'),
        ];
        foreach ($orders as $order) {
            foreach ($sortings as $sort_by => $data) {
                if (in_array($sort_by, ['price', 'timestamp', 'product', 'popularity'])) {
                    $_sortings[$sort_by . '|' . $order] = __('sort_by_' . $sort_by . '_' . $order);
                }
            }
        }

        return $_sortings;
    }

    public static function _format_options($setting_files = [], $company_id, $skip_functions)
    {
        static $options;
        $key = md5($skip_functions . '-' . $company_id);
        if (!empty($options[$key])) {
            return $options[$key];
        }
        $fields = [];
        foreach ($setting_files as $file) {
            $_fields = fn_get_schema('csc_live_search', $file);
            foreach ($_fields as $k => $flds) {
                if (!empty($fields[$k])) {
                    $fields[$k] = array_merge($fields[$k], $flds);
                } else {
                    $fields[$k] = $flds;
                }
            }
        }
        $condition = db_quote(' AND ?:csc_live_search.company_id=?i', $company_id);
        $_options = db_get_hash_single_array("SELECT * FROM  ?:csc_live_search WHERE 1 {$condition}", ['name', 'value']);
        foreach ($_options as $o => $v) {
            if (strpos($v, 'array()') !== false) {
                $v = str_replace('array()', '', $v);
                $_options[$o] = json_decode($v, true);
            }
        }
        foreach ($fields as $tab => $_fields) {
            foreach ($_fields as $k => $field) {
                if (!isset($_options[$k])) {
                    if (!empty($field['default'])) {
                        $_options[$k] = $field['default'];
                    } else {
                        $_options[$k] = '';
                    }
                }
                if (!$skip_functions) {
                    if ($field['type'] == 'func_info') {
                        $_options[$k] = $field['value']();
                    }
                }
            }
        }
        $options[$key] = $_options;
        return $_options;
    }

    public static function _ar($to)
    {
        if (defined('AJAX_REQUEST')) {
            if (version_compare(PRODUCT_VERSION, '4.3.2', '<')) {
                Tygh\Registry::get('ajax')->assign('force_redirection', fn_url($to));
            } else {
                Tygh::$app['ajax']->assign('force_redirection', fn_url($to));
            }
            exit;
        }
    }
}
