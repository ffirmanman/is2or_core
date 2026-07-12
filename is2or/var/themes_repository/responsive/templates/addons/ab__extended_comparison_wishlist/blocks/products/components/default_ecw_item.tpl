<div class="ab-ec-product-item__img-block" style="min-width:{$block.properties.thumbnail_width}px;min-height:{$block.properties.thumbnail_width}px">
    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
        {include file="common/image.tpl" images=$product.main_pair image_width=$block.properties.thumbnail_width image_height=$block.properties.thumbnail_width no_ids=true}
    </a>
</div>
<div class="ab-ec-product-item__body">
    {hook name="ab__extended_comparison_wishlist:product_item_body"}

        <div class="ab-ec-product-item__name">
            {assign var="product_name" value="name_`$obj_id`"}
            {$smarty.capture.$product_name nofilter}
        </div>

        {include file="addons/ab__extended_comparison_wishlist/blocks/products/components/ecw_rating.tpl"}

        <div class="ab-ec-product-item__amount">
            {assign var="product_amount" value="product_amount_`$obj_id`"}
            {$smarty.capture.$product_amount nofilter}
        </div>

        {$smarty.capture.ecw_item_buttons nofilter}
    {/hook}
</div>
<div class="ab-ec-product-item__bottom">
    {hook name="ab__extended_comparison_wishlist:product_item_prices"}
        <div class="ab-ec-product-item__bottom-prices">
            {assign var="old_price" value="old_price_`$obj_id`"}
            {$smarty.capture.$old_price nofilter}

            {assign var="price" value="price_`$obj_id`"}
            {$smarty.capture.$price nofilter}
        </div>
    {/hook}

    {if $block.properties.hide_add_to_cart_button == "YesNo::NO"|enum}
        {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
        {$smarty.capture.$add_to_cart nofilter}
    {/if}
</div>