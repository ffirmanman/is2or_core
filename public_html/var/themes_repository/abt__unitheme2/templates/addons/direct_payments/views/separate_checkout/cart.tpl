{script src="js/tygh/exceptions.js"}
{script src="js/tygh/checkout.js"}
{script src="js/tygh/cart_content.js"}

{if $carts}
    <h1 class="ty-mainbox-title {if $carts|count > 1}ty-mve-title{/if}">
        <span class="heading">{$cart_content_title|default:__("cart_contents")}</span>
        {if $carts|count > 1}
            <span class="ty-mve-total" id="checkout_totals_header_general">
                <span class="caption">{__("total_cost")}:</span>
                {include file="common/price.tpl" value=$carts_total class="ty-price"}
            <!--checkout_totals_header_general--></span>
        {/if}
    </h1>

    <div class="ut2-mv-dp_cart-hint" id="cart-hint">
        <div class="ut2-icon-outline-info"></div>
        <div class="text">{__("abt__ut2_mv.direct_payments_cart_hint")}</div>
        <div class="cm-combination open btn-toggle" id="sw_cart-hint">
            <div class="ut2-icon-baseline-close"></div>
        </div>
    </div>

    {foreach $carts as $vendor_id => $cart name=vendor_carts_loop}{*IDE may detect false error because of name*}
        {include file="addons/direct_payments/views/separate_checkout/components/cart_content.tpl"
        vendor_id=$vendor_id
        vendor=$vendors.$vendor_id
        cart=$cart
        cart_products=$group_cart_products.$vendor_id
        product_groups=$group_product_groups.$vendor_id
        checkout_add_buttons=$group_checkout_add_buttons.$vendor_id
        take_surcharge_from_vendor=$group_take_surcharge_from_vendor.$vendor_id
        payment_methods=$group_payment_methods.$vendor_id
        vendor_carts_loop_property_iteration=$smarty.foreach.vendor_carts_loop.iteration
        }
    {/foreach}

    {include file="views/checkout/components/cart_bottom_fixed.tpl"}
{else}
    <p class="ty-no-items">{__("text_cart_empty")}</p>

    <div class="buttons-container wrap">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url but_role="submit"}
    </div>
{/if}
