{if $isApVisible}
    {script src=$apScriptURL}
{/if}

{if $isFormVisible}
    {script src=$cvScriptURL}
{elseif !empty($mfPaymentMethods['all'])}
    {$mfPaymentId = ''}
    {foreach $payment_methods as $payment}
        {if $payment.payment == 'MyFatoorah'}{$mfPaymentId = $payment.payment_id}{/if}
    {/foreach}    
    <script>
        (function (_, $) {
            function mf_hidePlaceOrder(){
                if($('#radio_{$mfPaymentId}').is(':checked')){
                    $('#litecheckout_place_order').hide();
                }
            }
            $.ceEvent('on', 'ce.loaderhide', function () {
                mf_hidePlaceOrder();
            });
            mf_hidePlaceOrder();
        })(Tygh, Tygh.$);
    </script>
{/if}