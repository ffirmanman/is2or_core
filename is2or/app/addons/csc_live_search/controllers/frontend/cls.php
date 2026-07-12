<?php

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = !empty($_REQUEST['product_id']) ? $_REQUEST['product_id'] : 0;
    $product_data = fn_get_product_data($product_id, $auth, CART_LANGUAGE, '', false, false, false, false, false, false);
    $ls_settings = fn_cls_get_settings();
    $_REQUEST['redirect_url'] = '';
    if ($product_data) {
        if ($mode == 'cartAdd' && $product_id) {
            if (Registry::get('addons.master_products.status') == 'A' && !$product_data['company_id']) {
                list($products, $search) = fn_get_products(['vendor_products_by_product_id' => $product_id, 'sort_by' => 'price'], 1);
                if ($products) {
                    $pids = array_keys($products);
                    $pid = reset($pids);
                    $product_data = fn_get_product_data($pid, $auth, CART_LANGUAGE, '', false, false, false, false, false, false);
                }
            }

            if (Registry::get('addons.direct_payments') && Registry::get('addons.direct_payments.status') == 'A') {
                $cart_service = Tygh::$app['addons.direct_payments.cart.service'];
                $cart_service->setCurrentVendorId((int) $product_data['company_id']);
                $cart_service->loadSessionCart();
            }

            $cart = &Tygh::$app['session']['cart'];
            $data = [
                $product_data['product_id'] => [
                    'product_id' => $product_data['product_id'],
                    'amount' => !empty($_REQUEST['amount']) ? $_REQUEST['amount'] : 1,
                    'product_options' => [],
                ],
            ];
            if (fn_add_product_to_cart($data, $cart, $auth)) {
                $previous_state = md5(serialize($cart['products']));
                $cart['change_cart_products'] = true;
                fn_calculate_cart_content($cart, $auth, 'S', true, 'F', true);
                fn_set_notification('N', __('notice'), __('cls.added_to_cart'));
                fn_save_cart_content($cart, $auth['user_id']);
            }
        }
        if ($mode == 'wishAdd' && $product_id) {
            Tygh::$app['session']['wishlist'] = Tygh::$app['session']['wishlist'] ?? [];
            $wishlist = &Tygh::$app['session']['wishlist'];
            $auth = &Tygh::$app['session']['auth'];

            $allready_added = false;
            if (!empty($wishlist['products'])) {
                foreach ($wishlist['products'] as $_id => $_product) {
                    if ($_product['product_id'] == $product_id) {
                        $allready_added = true;
                        break;
                    }
                }
            }
            if ($allready_added) {
                unset($wishlist['products'][$_id]);
            // fn_set_notification('N', __('notice'), __('cls.deleted_from_wish'));
            } else {
                $_id = fn_generate_cart_id($product_id, []);
                $wishlist['products'][$_id]['product_id'] = $product_id;
                $wishlist['products'][$_id]['product_options'] = [];
                $wishlist['products'][$_id]['extra'] = [];
                $wishlist['products'][$_id]['amount'] = 1;
                fn_set_notification('N', __('notice'), __('cls.added_to_wish', [
                    '[product]' => $product_data['product'],
                    '[url]' => fn_url('wishlist.view'),
                ]));
            }
            fn_save_cart_content($wishlist, $auth['user_id'], 'W');
            if (empty($ls_settings['custom_result_ids'])) {
                exit;
            }
        }
        if ($mode == 'compAdd') {
            $auth = &Tygh::$app['session']['auth'];
            Tygh::$app['session']['comparison_list'] = Tygh::$app['session']['comparison_list'] ?? [];
            $comparison_list = &Tygh::$app['session']['comparison_list'];
            if (($key = array_search($product_id, $comparison_list)) !== false) {
                unset($comparison_list[$key]);
            // fn_set_notification('N', __('notice'), __('cls.deleted_from_comparison'));
            } else {
                fn_set_notification('N', __('notice'), __('cls.added_to_comparison', [
                    '[product]' => $product_data['product'],
                    '[url]' => fn_url('product_features.compare'),
                ]));
                $comparison_list[] = $product_id;
            }
            if (empty($ls_settings['custom_result_ids'])) {
                exit;
            }
        }
    } else {
        fn_set_notification('W', __('warning'), __('cls.product_is_not_available'));
        exit;
    }
    return [CONTROLLER_STATUS_REDIRECT, 'checkout.cart'];
}

if ($mode == 'extra_settings') {
    $ls_settings = fn_cls_get_settings();
    header('Content-Type: application/json; charset=utf-8');
    header('X-Robots-Tag: noindex, nofollow', true);
    header('Cache-Control:max-age=1');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s \\G\\M\\T', time()));
    // User CLSUID
    if (empty($_COOKIE['clsuid'])) {
        $clsuid = number_format(microtime(true) * 1000000000 + rand(0, 999), 0, '', '');
    } else {
        $clsuid = $_COOKIE['clsuid'];
    }
    setcookie('clsuid', $clsuid, TIME + 3600 * 24 * 60, '/');
    // expire in 60 days
    // security hash
    $runtime_storefront_id = $_REQUEST['runtime_storefront_id'] ?? 0;
    $runtime_company_id = $_REQUEST['runtime_company_id'] ?? 0;

    $cname = 'cls' . $runtime_storefront_id . $runtime_company_id;

    if (empty($_COOKIE[$cname])) {
        $hash = md5(microtime());
    } else {
        $hash = $_COOKIE[$cname];
    }
    setcookie($cname, $hash, TIME + SESSION_ALIVE_TIME, '/');
    $cls_hash = md5($hash . $_SERVER['HTTP_HOST'] . (SESSION_ALIVE_TIME * 2));
    // end security hash

    $settings = [
        'hash' => $cls_hash,
        'runtime_uid' => $auth['user_id'],
        'user_history' => $ls_settings['show_user_history'] == 'Y' ? fn_cls_get_user_history($ls_settings) : [],
        'cls_cart' => fn_csc_ls_get_cart_products(),
        'cls_wishlist' => fn_csc_ls_get_wishlist_products(),
        'cls_comp_list' => fn_csc_ls_get_comparison_list(),
    ];
    echo json_encode($settings);
    exit;
}

if ($mode == 'get_warehouses_destination_id') {
    echo fn_cls_get_destination_id_by_product_params([]);
    exit;
}

if ($mode == 'apply_discounts') {
    $pids = explode(',', $_REQUEST['pids']);
    list($products, $s) = fn_get_products([
        'pid' => $pids,
        'limit' => count($pids),
        'total' => count($pids),
        'load_products_extra_data' => true,
        'extend' => ['prices', 'categories'],
    ], count($pids));
    $_products = [];
    if ($products) {
        fn_gather_additional_products_data($products, [
            'get_icon' => false,
            'get_detailed' => false,
            'get_additional' => false,
            'get_options' => true,
            'get_discounts' => true,
            'get_features' => false,
            'detailed_params' => false,
            'get_taxed_prices' => true,
        ]);

        foreach ($products as $product) {
            if (Registry::get('settings.Appearance.show_prices_taxed_clean') == 'Y' && !empty($product['taxed_price'])) {
                $product['price'] = $product['taxed_price'];
            }
            $_products[$product['product_id']]['product_id'] = $product['product_id'];
            $_products[$product['product_id']]['price'] = $product['price'];
            $_products[$product['product_id']]['atc'] = fn_cls_check_add_to_cart($product, $auth);

            if (!empty($product['discount'])) {
                $_products[$product['product_id']]['list_price'] = !empty($product['original_price']) ? $product['original_price'] : $product['base_price'];
            } elseif (!empty($product['list_discount'])) {
                $_products[$product['product_id']]['list_price'] = $product['list_price'];
            }
            if (isset($_products[$product['product_id']]['list_price']) && $_products[$product['product_id']]['list_price'] <= $_products[$product['product_id']]['price']) {
                unset($_products[$product['product_id']]['list_price']);
            }
            ClsSearchProducts::_format_prices($_products[$product['product_id']], CART_SECONDARY_CURRENCY);
            if ($product['price'] == 0 && $product['zero_price_action'] == 'R') {
                $_products[$product['product_id']]['price'] = '<span class="clsPerRequest">' . __('contact_us_for_price') . '</span>';
                unset($_products[$product['product_id']]['list_price']);
            }
            if (Registry::get('settings.Checkout.allow_anonymous_shopping') == 'hide_price_and_add_to_cart' && !$auth['user_id']) {
                // $_products[$product['product_id']]['price'] = '<span class="clsPerRequest">' . __("sign_in_to_view_price") . '</span>';
                $_products[$product['product_id']]['price'] = '';
            }
        }
    }

    fn_set_hook('cls_apply_discounts_post', $products, $_products);
    echo json_encode($_products);
    exit;
}
