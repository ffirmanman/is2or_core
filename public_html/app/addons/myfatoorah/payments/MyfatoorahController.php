<?php

use Tygh\Registry;

require_once dirname(__FILE__) . '/../library/MyfatoorahLoader.php';
require_once dirname(__FILE__) . '/../library/MyfatoorahLibrary.php';

/**
 * MyFatoorah V2 Payment Gateway class.
 *
 * used by individual payment gateways to handle payments.
 *
 * @class       MyfatoorahController
 */
class MyfatoorahController {

//-----------------------------------------------------------------------------------------------------------------------------------------
    function getPayLoadData($order_info, $dispatch = '') {

        $name     = $order_info['firstname'] . ' ' . $order_info['lastname'];
        $phoneArr = MyfatoorahApiV2::getPhone($order_info['phone']);

        $userDefinedField = (Registry::get('addons.myfatoorah.saveCard') == 'Y' && $order_info['user_id']) ? 'CK-' . $order_info['user_id'] : '';

        //set callback URL for loged in or loged out users but there is no webhook secret key. 
        $secretKey   = trim(Registry::get('addons.myfatoorah.webhookSecretKey'));
        $callBackURL = null;

        if ($dispatch == 'checkout.place_order' || !$secretKey) {
            $callBackURL = fn_url('index.php?dispatch=myfatoorah.callback&orid=' . base64_encode($order_info['order_id']));
        }

        $address         = $order_info['s_address'] . ' ' . $order_info['s_address_2'];
        $customerAddress = array(
            'Block'               => '',
            'Street'              => '',
            'HouseBuildingNo'     => '',
            'Address'             => $address,
            'AddressInstructions' => ''
        );

//    $shippingConsignee = array(
//        'PersonName'   => $name,
//        'Mobile'       => $phoneArr[1],
//        'EmailAddress' => $order_info['email'],
//        'LineAddress'  => $address,
//        'CityName'     => $order_info['s_city'],
//        'PostalCode'   => $order_info['s_zipcode'],
//        'CountryCode'  => $order_info['s_country']
//    );


        $amount       = round(fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, $order_info['secondary_currency']), 3);
//        $amount       = (fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, $order_info['secondary_currency']));
        $invoiceItems = null; //[['ItemName' => 'Total Amount of Order #' . $order_info['order_id'], 'Quantity' => 1, 'UnitPrice' => "$amount"]];
//    $amount       = 0;
//    $invoiceItems  = getInvoiceItems();
//todo see if there is an default expiretime
//todo 'CustomerCivilId'    => $civilId
//todo diff bet $order_info['secondary_currency']  CART_PRIMARY_CURRENCY   CART_SECONDARY_CURRENCY if thr total not the current convert use fn_format_price_by_currency($price
//todo $phoneArr[1] in the $shippingConsignee
//echo CART_PRIMARY_CURRENCY. '<pre>';print_r( $order_info);die;


        return [
            'CustomerName'       => $name,
            'DisplayCurrencyIso' => $order_info['secondary_currency'],
            'MobileCountryCode'  => $phoneArr[0],
            'CustomerMobile'     => $phoneArr[1],
            'CustomerEmail'      => !empty($order_info['email']) ? $order_info['email'] : null,
            'InvoiceValue'       => "$amount",
            'CallBackUrl'        => $callBackURL,
            'ErrorUrl'           => $callBackURL,
            'Language'           => $order_info['lang_code'], //CART_LANGUAGE
            'CustomerReference'  => $order_info['order_id'],
            'CustomerCivilId'    => $order_info['order_id'],
            'UserDefinedField'   => $userDefinedField,
            'ExpiryDate'         => '',
            'SourceInfo'         => 'CS-Cart ' . PRODUCT_VERSION . ' - ' . 'Myfatoorah ' . fn_get_addon_version('myfatoorah'),
            'CustomerAddress'    => $customerAddress,
//            'ShippingConsignee'  => ($shipingMethod) ? $shippingConsignee : null,
//            'ShippingMethod'     => $shipingMethod,
            'InvoiceItems'       => $invoiceItems,
        ];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
//function getInvoiceItems($order, &$amount, $shipingMethod) {
    function getInvoiceItems($order_info) {
        $items           = array();
        $product_options = array();

        $auth = \Tygh::$app['session']['auth'];

        $description_mode = Registry::get('addons.myfatoorah.description_mode');
        foreach ($order_info['products'] as $product) {

            if ($description_mode == "short_description") {
                $product_data = fn_get_product_data($product['product_id'], $auth, CART_LANGUAGE, '', true, true, true, false, false, true, false, true);
            } else {
                if (!empty($product['product_options'])) {

                    foreach ($product['product_options'] as $opt) {
                        array_push($product_options, $opt['option_name'] . ": " . $opt['variant_name']);
                    }
                } else {
                    $product_options = array();
                }
            }

            if (!empty($product_options)) {
                $attributes = implode(", ", $product_options);
            } else {
                $attributes = "";
            }

            if (!empty($product_data['short_description'])) {
                $short_description = $product_data['short_description'];
            } else {
                $short_description = "";
            }
            array_push($items, $product['price'] . "|" .
                    $product['amount'] . "|" .
                    $product['product'] . "|" . $short_description . "|" . $attributes);
        }

        $order_name        = "";
        $order_description = "";

        $taxes = 0;

        foreach ($order_info['taxes'] as $v) {
            foreach ($v['applies']['items']['P'] as $k1 => $v1) {
                $taxes += $v['tax_subtotal'];
            }
        }
        $shipping = 0;
        foreach ($order_info['shipping'] as $v) {
            $shipping += $v['rate'];
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
}
