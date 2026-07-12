<?php

//-----------------------------------------------------------------------------------------------------------------------------------------
// MyFatoorah Functions
//-----------------------------------------------------------------------------------------------------------------------------------------
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Enum\ObjectStatuses;

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_install() {
    fn_clear_cache();
    fn_set_notification('W', __('warning'), __('text_installation_warning'));
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_uninstall() {
    mf_updatePaymentStatus(ObjectStatuses::DISABLED);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_updatePaymentStatus($new_status) {
    //disable payments
    $processor   = fn_get_processor_data_by_name('myfatoorah_payment_processor.php');
    $processorId = $processor['processor_id'] ?? null;
    if (!$processorId) {
        return;
    }

    $payemnts = fn_get_payment_by_processor($processorId);
    foreach ($payemnts as $key => $value) {
        $params = [
            'id'                => $key,
            'status'            => $new_status,
            'table'             => 'payments',
            'id_name'           => 'payment_id',
            'show_error_notice' => false
        ];
        fn_tools_update_status($params);
    }
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_update_settings() {
    fn_clear_cache();

    $settings = fn_get_addon_settings_values('myfatoorah');

    try {
        $apiKey      = $settings['apiKey'];
        $istest      = $settings['testMode'] === 'Y';
        $countryCode = $settings['countryMode'];

        $mfObj          = new PaymentMyfatoorahApiV2($apiKey, $countryCode, $istest, 'var/myfatoorah.log');
        $paymentMethods = $mfObj->getVendorGateways();
    } catch (\Exception $ex) {
        return mf_disableWithError($ex->getMessage());
    }

    if (empty($paymentMethods)) {
        $err = 'Contact your account manager to activate at least one of the available payment methods in your account.';
        return mf_disableWithError($err);
    }

    return mf_updateIsApplePayRegistered($settings, $mfObj);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_updateIsApplePayRegistered($settings, $mfObj) {

    if ($settings['isApplePayRegistered'] == 'N') {
        return true;
    }

    if ($settings['listOptions'] == 'myfatoorah') {
        $msg = __('text_ap_with_list_option');
        return mf_disableAppleWithWarning($msg);
    }

    try {
        $data = $mfObj->registerApplePayDomain(fn_get_storefront_url());
        if ($data->Message == 'OK') {
            return true;
        }
        $err = $data->Message;
    } catch (Exception $ex) {
        $err = $ex->getMessage();
    }

    return mf_disableAppleWithWarning($err);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_disableWithError($err) {
    fn_set_notification('E', __('Error'), __('text_myfatoorah_disabled'));
    fn_set_notification('E', __('Error'), $err);

    fn_update_addon_status('myfatoorah', ObjectStatuses::DISABLED, false);

    return false;
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_disableAppleWithWarning($err) {
    fn_set_notification('W', __('warning'), __('text_ap_disabled'));
    fn_set_notification('W', __('warning'), $err);

    Settings::instance()->updateValue('isApplePayRegistered', 'N', 'myfatoorah');

    return true;
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_getPPResponse($orderId, $data, $isWebHook = false) {
    $status = [
        'Paid'    => Registry::get('addons.myfatoorah.orderStatus'),
        'Failed'  => 'F',
        'Expired' => STATUS_CANCELED_ORDER,
        'Pending' => STATUS_INCOMPLETED_ORDER,
    ];
    fn_change_order_status($orderId, $status[$data->InvoiceStatus]);

    $pp_response['invoice_id']  = $data->InvoiceId;
    $pp_response['reason_text'] = $data->InvoiceError;
    if ($data->focusTransaction) {
        $pp_response ['transaction_id'] = $data->focusTransaction->PaymentId;
        $pp_response ['gateway']        = $data->focusTransaction->PaymentGateway;
    }

    return $pp_response;
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_getInputData($name, $type = INPUT_POST) {
    $value = filter_input($type, $name, FILTER_UNSAFE_RAW);
    return htmlspecialchars($value);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_getRequestData($name) {
    $value = $_REQUEST[$name] ?? null;
    return htmlspecialchars($value);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
function mf_getPaymentObj() {
    $apiKey      = Registry::get('addons.myfatoorah.apiKey');
    $istest      = Registry::get('addons.myfatoorah.testMode') === 'Y';
    $countryCode = Registry::get('addons.myfatoorah.countryMode');

    $debugMode = Registry::get('addons.myfatoorah.debugMode');
    $debugFile = ($debugMode === 'Y') ? 'var/myfatoorah.log' : '';

    return new PaymentMyfatoorahApiV2($apiKey, $countryCode, $istest, $debugFile);
}

//-----------------------------------------------------------------------------------------------------------------------------------------
