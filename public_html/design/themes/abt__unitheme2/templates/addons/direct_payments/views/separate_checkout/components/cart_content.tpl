{$suffix_key="_`$vendor_id`"}
{$result_ids="cart_items`$suffix_key`,checkout_totals`$suffix_key`,checkout_steps`$suffix_key`,cart_status*,checkout_totals_header* ,checkout_cart`$suffix_key`"}

<div class="ut2-mv-dp_vendor-cart">
    <div class="ut2-mv-dp_vendor-cart__header cm-combination open" id="sw_cart-body{$suffix_key}">
        {if $vendor}

            <div class="header-main">
                <div class="ut2-icon-outline-expand_more"></div>
                <div class="order-number">{__("order")} #{$vendor_carts_loop_property_iteration}</div>
                <div class="order-vendor">
                    {include file="views/companies/components/product_company_data.tpl" company_name=$vendor.company company_id=$vendor.company_id}
                </div>
            </div>

            <div class="header-totals"
                 id="checkout_totals_header{$suffix_key}">

                <div class="header-totals__cost">
                    <span class="header-totals__caption">
                        {__("total_cost")}
                        <span class="header-totals__products-count">({__("n_products", [$cart_products|count])})</span>:
                    </span>
                    <span class="header-totals__price">{include file="common/price.tpl" value=$cart.total}</span>
                </div>

                {if $payment_methods}
                    {include file="buttons/proceed_to_checkout.tpl"
                    but_href="checkout.checkout&vendor_id=`$vendor_id`"
                    but_meta="ty-btn__primary js_stop-click-propagation"
                    }
                {/if}
                <!--checkout_totals_header{$suffix_key}--></div>

        {/if}
    </div>

    <div class="ut2-mv-dp_vendor-cart__container" id="cart-body{$suffix_key}">

        <form name="cart_form{$suffix_key}"
              id="cart_form{$suffix_key}"
              class="ut2-mv-dp_vendor-cart__items cm-check-changes cm-ajax cm-ajax-full-render"
              action="{""|fn_url}"
              method="post"
              enctype="multipart/form-data"
        >
            <input type="hidden" name="redirect_mode" value="cart"/>
            <input type="hidden" name="vendor_id" value="{$vendor_id}"/>
            <input type="hidden" name="result_ids" value="{$result_ids}"/>
            <input type="submit" class="ty-btn--recalculate-cart hidden" name="dispatch[checkout.update]" />

            {include file="addons/direct_payments/views/separate_checkout/components/cart_items.tpl" disable_ids="button_cart"}
        </form>

        <div class="ut2-mv-dp_vendor-cart__totals ut2-cart-checkout_totals">
            <div class="heading">
                {__("abt__ut2.total_for_order")}&nbsp;#{$vendor_carts_loop_property_iteration}
                <span class="mix-vendor-parentheses">(<span class="vendor">{$vendor.company}</span>)</span>
            </div>

            {include file="addons/direct_payments/views/separate_checkout/components/checkout_totals.tpl" location="cart"}

            {hook name="checkout:cart_content_bottom_right_buttons"}
                <div class="ut2-cart_checkout_totals_buttons">
                    <div class="ut2-buttons-list">
                        {include file="buttons/clear_cart.tpl"
                        but_href="checkout.clear&vendor_id=`$vendor_id`"
                        but_role="text"
                        but_meta="ty-btn__tertiary"
                        }

                        {if $payment_methods}
                            {assign var="link_href" value="checkout.checkout&vendor_id=`$vendor_id`"}
                            {include file="buttons/proceed_to_checkout.tpl" but_href=$link_href}
                        {/if}
                    </div>

                    {if !$payment_methods}
                        <div class="ty-cart-content__payments-warning">
                            <p class="ty-cart-content__payments-warning__text"
                            >{__("cannot_proccess_checkout_without_payment_methods")}</p>
                        </div>
                    {/if}
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
    </div>
</div>
