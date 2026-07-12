<?php

defined('AREA') or die('Access denied');
defined('BOOTSTRAP') or die('Access denied');

define('MYFATOORAH_PATH', dirname(__FILE__));

use Tygh\Enum\ObjectStatuses;

require_once MYFATOORAH_PATH . '/library/MyfatoorahLoader.php';
require_once MYFATOORAH_PATH . '/library/MyfatoorahLibrary.php';
require_once MYFATOORAH_PATH . '/myfatoorah.php';

//-----------------------------------------------------------------------------------------------------------------------------------------
// Cs-Cart Functions
//-----------------------------------------------------------------------------------------------------------------------------------------
function fn_settings_actions_addons_myfatoorah(&$new_status, $old_status, $on_install) {
    if ($new_status == ObjectStatuses::ACTIVE && !mf_update_settings()) {
        $new_status = ObjectStatuses::DISABLED;
    }

    mf_updatePaymentStatus($new_status);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function fn_settings_variants_addons_myfatoorah_countryMode() {
    $result = [];

    $countries = MyfatoorahApiV2::getMyFatoorahCountries();
    if (is_array($countries)) {
        $lang      = (ucfirst(CART_LANGUAGE) == 'Ar') ? 'Ar' : 'En';
        $nameIndex = 'countryName' . $lang;
        foreach ($countries as $key => $obj) {
            $result[$key] = $obj[$nameIndex];
        }
    }
    return $result;
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function fn_settings_variants_addons_myfatoorah_listOptions() {
    return [
        'multigateways' => __('text_variants_listOptions_multigateways'),
        'myfatoorah'    => __('text_variants_listOptions_myfatoorah')
    ];
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function fn_settings_variants_addons_myfatoorah_orderStatus() {
    return [
        'P' => __('text_variants_orderStatus_P'),
        'C' => __('text_variants_orderStatus_C')
    ];
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function fn_myfatoorah_place_order(&$order_id, &$action, &$order_status) {

    $dispatch = mf_getRequestData('dispatch');
    if ($dispatch != 'order_management.place_order.save') {
        return;
    }

    $mfPaymentId = mf_getRequestData('payment_id');
    if (empty($mfPaymentId)) {
        return;
    }

    $payment = fn_get_payment_method_data((int) $mfPaymentId);
    if ($payment['processor'] == 'MyFatoorah') {
        $action = '';
    }
}

//-----------------------------------------------------------------------------------------------------------------------------------------