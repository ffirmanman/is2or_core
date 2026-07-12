<?php

defined('BOOTSTRAP') or die('Access denied');

if ($mode == 'callback') {
    $paymentId = mf_getInputData('paymentId', INPUT_GET);
    $orid      = mf_getInputData('orid', INPUT_GET);
    if (empty($paymentId) || empty($orid)) {
        return; //it will return 404 Error
    }

    print_r('
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Processing MyFatoorah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: sans-serif;
            }
            .loader {
              border: 13px solid #f3f3f3;
              border-radius: 50%;
              border-top: 13px solid #3498db;
              width: 50px;
              height: 50px;
              -webkit-animation: spin 2s linear infinite; /* Safari */
              animation: spin 2s linear infinite;
            }

            /* Safari */
            @-webkit-keyframes spin {
              0% { -webkit-transform: rotate(0deg);}
              100% { -webkit-transform: rotate(360deg);}
            }

            @keyframes spin {
              0% { transform: rotate(0deg);}
              100% { transform: rotate(360deg);}
            }
        </style>
    </head>
    <body>
        <center style="margin:10%">
            Please wait while your transaction <b>' . $paymentId . '</b> is processing...
            <br/><br/>Please do not refresh or close the window
            <br/><br/>
            <div class="loader"></div>
        </center>
        <script>window.location = "index.php?dispatch=payment_notification&payment=myfatoorah_payment_processor&orid=' . $orid . '&paymentId=' . $paymentId . '";</script>
    </body>
</html>');
    die;
}
//-----------------------------------------------------------------------------------------------------------------------------------------
else if ($mode == 'webhook') {
    $secretKey = trim(\Tygh\Registry::get('addons.myfatoorah.webhookSecretKey')) or die;

    $apache      = apache_request_headers();
    $headers     = array_change_key_case($apache);
    $mfSignature = empty($headers['myfatoorah-signature']) ? die : $headers['myfatoorah-signature'];

    $body    = file_get_contents("php://input");
    $webhook = json_decode($body, true);

    $eventType = (isset($webhook['EventType']) && $webhook['EventType'] == 1) ? $webhook['EventType'] : die;
    $data      = (empty($webhook['Data'])) ? die : $webhook['Data'];

    require_once MYFATOORAH_PATH . '/library/MyfatoorahLoader.php';
    require_once MYFATOORAH_PATH . '/library/MyfatoorahLibrary.php';
    MyfatoorahApiV2::isSignatureValid($data, $secretKey, $mfSignature, $eventType) ? $webhook['Event']($data) : die;
    die;
}

//------------------------------------------------------------------------------
function TransactionsStatusChanged($data) {
    //to allow the callback code run 1st
    sleep(30);

    $orderId = $data['CustomerReference'];
    error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- WebHook - TransactionsStatusChanged", 3, 'var/myfatoorah.log');

    $order_info = fn_get_order_info($orderId);
    if (!$order_info) {
        die;
    }

    if (!fn_check_payment_script('myfatoorah_payment_processor.php', $orderId)) {
        die;
    }

    if (isset($order_info['payment_info']['transaction_id']) && $order_info['payment_info']['transaction_id'] == $data['PaymentId']) {
        die;
    }

    //Don't continue if order is not Failed, canceled, or incomplete
    error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- WebHook - status " . $order_info['status'], 3, 'var/myfatoorah.log');
    if ($order_info['status'] != 'F' && $order_info['status'] != STATUS_CANCELED_ORDER && $order_info['status'] != STATUS_INCOMPLETED_ORDER) {
        die;
    }

    try {
        require_once MYFATOORAH_PATH . '/payments/MyfatoorahController.php';
        $mfObj       = mf_getPaymentObj();
        $info        = $mfObj->getPaymentStatus($data['PaymentId'], 'PaymentId', $orderId);
        $pp_response = mf_getPPResponse($orderId, $info);
    } catch (Exception $ex) {
        $pp_response['reason_text'] = $ex->getMessage();
        error_log(PHP_EOL . date('d.m.Y h:i:s') . " - Order #$orderId ----- WebHook - CallBack Exception is " . $pp_response['reason_text'], 3, '/home/myfatoor/www/cscart/var/myfatoorah.log');
    }

    $pp_response['text_webhook_update'] = 'Yes';
    fn_update_order_payment_info($orderId, $pp_response);
}

//-----------------------------------------------------------------------------------------------------------------------------------------