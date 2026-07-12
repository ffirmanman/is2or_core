<?php

// Preventing direct access to the script, because it must be included by the "include" directive. The "BOOTSTRAP" constant is declared during system initialization.
defined('BOOTSTRAP') or die('Access denied');

require_once 'MyfatoorahController.php';
$controller = new MyfatoorahController();
$mfObj      = mf_getPaymentObj();

$dispatch = mf_getInputData('dispatch');
//-----------------------------------------------------------------------------------------------------------------------------------------
// Here are two different contexts for running the script.

if (defined('PAYMENT_NOTIFICATION')) {

    /**
     * Receiving and processing the answer
     * from third-party services and payment systems.
     *
     * Available variables:
     * @var string $mode The purpose of the request
     */
    $paymentId = mf_getInputData('paymentId', INPUT_GET);
    $orid      = mf_getInputData('orid', INPUT_GET);
    if (empty($paymentId) || empty($orid)) {
        return; //it will return 404 Error
    }

    $orderId    = base64_decode($orid);
    $order_info = fn_get_order_info($orderId);
    if (!$order_info) {
        return;
    }

    if (!fn_check_payment_script('myfatoorah_payment_processor.php', $orderId)) {
        die('Access denied');
    }

    //redirect to success page if Paid or Complete
    if ($order_info['status'] == 'P' || $order_info['status'] == 'C') {
        fn_set_notification('N', __('congratulations'), __('text_order_saved_successfully'));
        fn_redirect('index.php?dispatch=checkout.complete&order_id=' . $orderId);
    }

    try {

        $data        = $mfObj->getPaymentStatus($paymentId, 'PaymentId', $orderId);
        $pp_response = mf_getPPResponse($orderId, $data);
    } catch (Exception $ex) {
        $pp_response['reason_text'] = $ex->getMessage();
        fn_set_notification('E', __('Error'), $pp_response['reason_text']);
        error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- CallBack Exception is " . $pp_response['reason_text'], 3, 'var/myfatoorah.log');
    }

    if (isset($order_info['payment_info']['text_webhook_update'])) {
        $pp_response['text_webhook_update'] = 'No';
    }

    fn_update_order_payment_info($orderId, $pp_response);
    fn_order_placement_routines('route', $orderId, true);
}
//-----------------------------------------------------------------------------------------------------------------------------------------
else {

    /**
     * Running the necessary logic for payment acceptance
     * after the customer presses the "Submit my order" button.
     *
     * available variables:
     *
     * @var array $order_info     Full information about the order
     * @var array $processor_data Information about the payment processor
     */
    try {

        $gatewayId = mf_getInputData('mfCardData');
        $sessionId = mf_getInputData('mfFormData');

        $orderId  = $order_info['order_id'];
        $curlData = $controller->getPayLoadData($order_info, $dispatch);
        $data     = $mfObj->getInvoiceURL($curlData, $gatewayId, $orderId, $sessionId);

        //save invoice data;
        $pp_response['invoice_id'] = $data['invoiceId'];
        if (empty($sessionId)) {
            $pp_response['link'] = $data['invoiceURL'];
        }

        //to remove any exception error if exists
        $pp_response['reason_text'] = '';

        fn_update_order_payment_info($orderId, $pp_response);

        if ($dispatch == 'checkout.place_order') {
            fn_redirect($data['invoiceURL'], true);
        }
    } catch (Exception $ex) {
        $pp_response['reason_text'] = $ex->getMessage();
        error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- Checkout Exception is " . $pp_response['reason_text'], 3, 'var/myfatoorah.log');

        if ($dispatch == 'checkout.place_order') {
            fn_set_notification('E', __('Error'), $pp_response['reason_text']);
        }

        fn_update_order_payment_info($orderId, $pp_response);
        fn_order_placement_routines('route', $orderId);
    }
}

//-----------------------------------------------------------------------------------------------------------------------------------------

//function mfSetError($orderId, $err, $dispatch) {
//    //reason_text
//    $pp_response['reason_text'] = $err;
//    fn_update_order_payment_info($orderId, $pp_response);
//
//    fn_set_notification('E', __('Error'), $err);
//    if ($dispatch == 'checkout.place_order') {
//        fn_redirect('index.php?dispatch=checkout.checkout');
//    }
//}
