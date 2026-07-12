{assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
{if $smarty.capture.$add_to_cart|strpos:"dispatch[checkout.add..`$product.product_id`]" !== false}

    {if $product.ab__product_sets && $details_page && !$quick_view && $smarty.capture.buttons_product|trim != '&nbsp;'}
        {include file="addons/ab__product_sets/components/sets_block.tpl"}
    {/if}

{/if}