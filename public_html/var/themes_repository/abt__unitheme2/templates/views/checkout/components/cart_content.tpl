{assign var="result_ids" value="cart*,checkout*"}

<h1 class="ty-mainbox-title">{__("cart_contents")}</h1>

<div id="checkout_form_wrapper">
<form name="checkout_form" class="cm-check-changes cm-ajax cm-ajax-full-render" action="{""|fn_url}" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="{$result_ids}" />

{include file="views/checkout/components/cart_items.tpl" disable_ids="button_cart"}

<div class="ut2-cart-content__bottom-buttons">
    {hook name="checkout:cart_content_bottom_left_buttons"}
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url}
        {include file="buttons/clear_cart.tpl" but_href="checkout.clear" but_role="text" but_meta="ty-btn__tertiary cm-confirm"}
        {include file="buttons/update_cart.tpl"
        but_id="button_cart"
        but_meta="ty-btn--recalculate-cart hidden hidden-phone hidden-tablet"
        but_name="dispatch[checkout.update]"
        }
    {/hook}
</div>

</form>
<!--checkout_form_wrapper--></div>

<div class="ut2-cart-checkout_totals">
    <h4>{__("template_document_order_summary")}</h4>
    {include file="views/checkout/components/checkout_totals.tpl" location="cart"}

    {hook name="checkout:cart_content_bottom_right_buttons"}
        <div class="ut2-cart_checkout_totals_buttons">
            <div class="ut2-buttons-list">
                {if $payment_methods}
                    {assign var="link_href" value="checkout.checkout"}
                    {include file="buttons/proceed_to_checkout.tpl"}
                {/if}
            </div>
        </div>
    {/hook}

    {if $checkout_add_buttons}
        <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
            <span class="ty-cart-content__payment-methods-title payment-metgods-or">{__("or_use")}</span>
            <table class="ty-cart-content__payment-methods-block">
                <tr>
                    {foreach from=$checkout_add_buttons item="checkout_add_button"}
                        <td class="ty-cart-content__payment-methods-item">{$checkout_add_button nofilter}</td>
                    {/foreach}
                </tr>
            </table>
            <!--payment-methods--></div>
    {/if}
</div>
