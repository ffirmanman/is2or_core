<?php

namespace Tygh\Addons\StorefrontRestApi\Payments;

use Tygh\Common\OperationResult;
use Tygh\Http;
use Tygh\Registry;

class DineropayPayment implements IRedirectionPayment {
    protected $order_info = [];

    protected $auth_info = [];

    protected $payment_info = [];

    /** @var \Tygh\Addons\StorefrontRestApi\Payments\RedirectionPaymentDetailsBuilder $details_builder */
    protected $details_builder;

    /** @var \Tygh\Common\OperationResult $preparation_result */
    private $preparation_result;

    public function __construct()
    {
        $this->details_builder = new RedirectionPaymentDetailsBuilder();
        $this->preparation_result = new OperationResult();
    }

    /** @inheritdoc */
    public function setOrderInfo(array $order_info)
    {
        $this->order_info = $order_info;
        return $this;
    }

    /** @inheritdoc */
    public function setAuthInfo(array $auth_info)
    {
        $this->auth_info = $auth_info;
        return $this;
    }

    public function setPaymentInfo(array $payment_info)
    {
        $this->payment_info = $payment_info;

        return $this;
    }

    public function getDetails(array $request)
    {
        $merchantKey = Registry::get('addons.dineropay_payment.merchantKey');
        $merchantPassword = Registry::get('addons.dineropay_payment.merchantPassword');
        $order_id = base64_encode($this->order_info['order_id']);
        $success_url = fn_url('index.php?dispatch=dineropay_payment.callback&status=success&orid='.$order_id);
        $cancel_url = fn_url('index.php?dispatch=dineropay_payment.callback&status=cancel&orid='.$order_id);

        $order_info = $this->order_info;
        // Prepare customer data
        $customer_name = $order_info['firstname'].' '.$order_info['lastname'];
        $customer_email = $order_info['email'];

        // Prepare billing address
        $country_code = ! empty($order_info['b_country']) ? $order_info['b_country'] : 'SA';
        $state = '';
        $address = ! empty($order_info['b_address']) ? $order_info['b_address'] : '';
        $city = ! empty($order_info['b_city']) ? $order_info['b_city'] : '';
        $zip = ! empty($order_info['b_zipcode']) ? $order_info['b_zipcode'] : '';
        $phone = ! empty($order_info['b_phone']) ? $order_info['b_phone'] : '';

        // Generate hash based on merchant password and order details
        $hash = sha1(
            md5(strtoupper($order_id.$order_info['total'].CART_PRIMARY_CURRENCY.'Order #'.$order_id.$merchantPassword))
        );

        // Prepare the request data
        $request_data = [
            'merchant_key' => $merchantKey,
            'operation' => 'purchase',
            'methods' => ['card'],
            'success_url' => $success_url,
            'cancel_url' => $cancel_url,
            'url_target' => '',
            'req_token' => true,
            'hash' => $hash,
            'order' => [
                'number' => $order_id,
                'amount' => $order_info['total'],
                'currency' => CART_PRIMARY_CURRENCY,
                'description' => 'Order #'.$order_id
            ],
            'customer' => [
                'name' => $customer_name,
                'email' => $customer_email
            ],
            'billing_address' => [
                'country' => $country_code,
                'address' => $address,
                'city' => $city,
                'zip' => $zip,
                'phone' => $phone
            ]
        ];

        // Convert to JSON for API request
        $request_json = json_encode($request_data);

        // Make the API request to DineroPay
        $response = Http::post(
            'https://checkout.dineropay.com/api/v1/session',
            $request_json,
            [
                'headers' => [
                    'Content-Type: application/json',
                    'Accept: application/json'
                ]
            ]
        );

        // Parse the response
        $response_data = json_decode($response, true);
        $this->preparation_result->setSuccess(true);

        $this->preparation_result->setData(
            $this->details_builder
                ->setMethod(RedirectionPaymentDetailsBuilder::GET)
                ->setPaymentUrl($response_data['redirect_url'])
                ->setReturnUrl($success_url)
                ->setCancelUrl($cancel_url)
                ->asArray()
        );

        return $this->preparation_result;
    }
}
