<?php

//refete to /var/www/cscart-v4.13.2/app/addons/stripe/controllers/frontend/checkout.post.php
////use Tygh\Addons\Stripe\ServiceProvider;
//
// Preventing direct access to the script, because it must be included by the "include" directive. The "BOOTSTRAP" constant is declared during system initialization.
defined('BOOTSTRAP') or die('Access denied');

use Tygh\Tygh;
use Tygh\Registry;

if ($mode === 'checkout') {

    $cart        = Tygh::$app['session']['cart'];
    $processor   = $cart['payment_method_data']['processor'] ?? null;
    $listOptions = Registry::get('addons.myfatoorah.listOptions');

    if ($processor == 'MyFatoorah' && $listOptions == 'multigateways') {

        $view = Tygh::$app['view'];
        $view->assign('mfVersion', fn_get_addon_version('myfatoorah'));
        try {

            $isApRegistered = Registry::get('addons.myfatoorah.isApplePayRegistered') == 'Y';

            $mfObj            = mf_getPaymentObj();
            $mfPaymentMethods = $mfObj->getPaymentMethodsForDisplay(
                    $cart['total'],
                    CART_PRIMARY_CURRENCY,
                    $isApRegistered
            );
            $view->assign('mfPaymentMethods', $mfPaymentMethods);

            $isApVisible    = !empty($mfPaymentMethods['ap']);
            $isCardsVisible = !empty($mfPaymentMethods['cards']);
            $isFormVisible  = !empty($mfPaymentMethods['form']);

            $view->assign('isApVisible', $isApVisible);
            $view->assign('isCardsVisible', $isCardsVisible);
            $view->assign('isFormVisible', $isFormVisible);

            //$lang = $cart['payment_method_data']['lang_code'];  //CART_LANGUAGE
            if ($isCardsVisible) {
                $view->assign('language', CART_LANGUAGE);
            }

            if ($isApVisible || $isFormVisible) {

                $isSaveCard       = Registry::get('addons.myfatoorah.saveCard') == 'Y';
                $userDefinedField = ($isSaveCard && $auth['user_id']) ? 'CK-' . $auth['user_id'] : '';

                $session = $mfObj->getEmbeddedSession($userDefinedField);
                $view->assign('session', $session);

                $isTest      = Registry::get('addons.myfatoorah.testMode') == 'Y';
                $countryCode = Registry::get('addons.myfatoorah.countryMode') ?? 'KWT';

                $countries = MyfatoorahApiV2::getMyFatoorahCountries();
                $domain    = ($isTest) ? $countries[$countryCode]['testPortal'] : $countries[$countryCode]['portal'];

                if ($isApVisible) {
                    $apScriptURL = "$domain/applepay/v2/applepay.js";
                    $view->assign('apScriptURL', $apScriptURL);
                }

                if ($isFormVisible) {
                    $cvScriptURL = "$domain/cardview/v2/session.js";
                    $view->assign('cvScriptURL', $cvScriptURL);

                    $height = $userDefinedField ? '180' : '130';
                    $view->assign('height', $height);

                    $direction = ((CART_LANGUAGE == 'ar') ? ('rtl') : ('ltr'));
                    $view->assign('direction', $direction);
                }
            }
        } catch (Exception $ex) {
            $view->assign('mfError', $ex->getMessage());
        }
    }
}

return [CONTROLLER_STATUS_OK];
