<!--
MyFatoorah version {$mfVersion}
-->
<div class="litecheckout__container" id="mf-div" data-mfVersion="{$mfVersion}">
    {if isset($mfError)}
        <div class="litecheckout__group help-inline">
            <p class="help-inline">{$mfError}</p>
        </div>
    {else}
        <script>
            var fc = '#litecheckout_payments_form'; //form tag
            var pl = '#litecheckout_place_order'; //submit button
        </script>

        
        <!--Multi Gateway Section-->
        {if (is_array($mfPaymentMethods['all']) && count($mfPaymentMethods['all']) > 0)}
            <div class="mf-payment-methods-container ">
                <p class="mf-grey-text">{__('text_how_to_pay')}</p>

                
                <!--Start ApplePay Section-->
                {if $isApVisible}
                    <div id="ap-card-element" style="height: 50px; margin-top: 5px;"></div>
                    <script>
                        $(document).ready(function () {
                            var mfApConfig = {
                                sessionId: "{$session->SessionId}",
                                countryCode: "{$session->CountryCode}",
                                currencyCode: "{$mfPaymentMethods['ap']->GatewayData['GatewayCurrency']}",
                                amount: "{$mfPaymentMethods['ap']->GatewayData['GatewayTotalAmount']}",
                                cardViewId: "ap-card-element",
                                callback: mfApPayment
                            };

                            myFatoorahAP.init(mfApConfig);

                            //ap button clicked
                            function mfApPayment(response) {
                                //In case of success
                                $(fc).append('<input type="hidden" name="mfFormData" value="' + response.sessionId + '">');
                                $(fc).submit();
                            }
                        });
                    </script>
                {/if}
                <!--End ApplePay Section-->

                
                <!--Start Card Section-->
                {if $isCardsVisible}

                    <div class="mf-divider">
                        <span>{__('text_pay_with')}</span>
                    </div>

                    {foreach from=$mfPaymentMethods['cards'] item="mfCard" }
                        {assign var="mfPaymentTitle" value=(($language == 'ar') ? ($mfCard->PaymentMethodAr) : ($mfCard->PaymentMethodEn))}
                        <div class="mf-card-container" onclick="submitmfcard('{$mfCard->PaymentMethodId}');">
                            <div class="mf-row-container">
                                <img class="mf-payment-logo" src="{$mfCard->ImageUrl}" title="{$mfPaymentTitle}" alt="{$mfPaymentTitle}"/>
                                <h5 class="mf-payment-text mf-card-title">{$mfPaymentTitle}</h5>
                            </div>
                            <h5 class="mf-payment-text mf-payment-amount">
                                {$mfCard->GatewayData['GatewayTotalAmount']} {$mfCard->GatewayData['GatewayCurrency']}
                            </h5>
                        </div>
                    {/foreach}
                    <script>
                        function submitmfcard(mfCardId) {
                            $('#myfatoorah_error_message').html('');
                            $(fc).append('<input type="hidden" name="mfCardData" value="' + mfCardId + '">');
                            $(fc).submit();
                        }
                    </script>
                {/if}
                <!--End Card Section-->

                
                <!--Start Form Section-->
                {if $isFormVisible}
                    <div class="mf-divider">
                        <span>
                            {if $isCardsVisible}{__('text_or')}&nbsp;{/if}
                            {__('text_insert_card')}
                        </span>
                    </div>
                        
                    <div class="litecheckout__group help-inline" id="myfatoorah_error_message"></div>
                    <div id="mf-card-element"></div>

                    <script>
                        $(document).ready(function () {

                            var mfConfig = {
                                countryCode: "{$session->CountryCode}",
                                sessionId: "{$session->SessionId}",
                                cardViewId: "mf-card-element",
                                // The following style is optional.
                                style: {
                                    cardHeight: "{$height}",
                                    direction: "{$direction}",
                                    input: {
                                        color: "black",
                                        fontSize: "13px",
                                        fontFamily: "sans-serif",
                                        inputHeight: "32px",
                                        inputMargin: "-1px",
                                        borderColor: "c7c7c7",
                                        borderWidth: "1px",
                                        borderRadius: "0px",
                                        boxShadow: "",
                                        placeHolder: {
                                            holderName: "{__('text_holder_name')}",
                                            cardNumber: "{__('text_card_number')}",
                                            expiryDate: "{__('text_expire_date')}",
                                            securityCode: "{__('text_cvv')}"
                                        }
                                    },
                                    label: {
                                        display: false,
                                        color: "black",
                                        fontSize: "13px",
                                        fontFamily: "sans-serif",
                                        text: {
                                            holderName: "Card Holder Name",
                                            cardNumber: "Card Number",
                                            expiryDate: "ExpiryDate",
                                            securityCode: "Security Code"
                                        }
                                    },
                                    error: {
                                        borderColor: "red",
                                        borderRadius: "8px",
                                        boxShadow: "0px"
                                    }
                                }
                            };

                            myFatoorah.init(mfConfig);

                            //form button clicked
                            $(pl).on('click', function (e) {
                                e.preventDefault();

                                $('#myfatoorah_error_message').html('');

                                myFatoorah.submit().then(
                                    function (response) {
                                        //In case of success
                                        $(fc).append('<input type="hidden" name="mfFormData" value="' + response.sessionId + '">');
                                        $(fc).submit();

                                    }, function (error) {
                                        //In case of errors
                                        $('#myfatoorah_error_message').html('<p class="help-inline">' + error + '<p>');
                                    }
                                );
                            });
                        });
                    </script>
                {/if}
            </div>
        {/if}
    {/if}
</div>