<div class="ab-ec-product-item__tn">
    <div class="ab-ec-product-item__body">
        {$smarty.capture.ecw_item_buttons nofilter}
    </div>

    {assign var="name" value="name_`$obj_id`"}
    {$smarty.capture.$name nofilter}

    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
        {include file="common/image.tpl" images=$product.main_pair image_width=$block.properties.thumbnail_width image_height=$block.properties.thumbnail_width no_ids=true}
    </a>

    {include file="addons/ab__extended_comparison_wishlist/blocks/products/components/ecw_rating.tpl"}

    <div class="ab-ec-product-item__tn-prices">
        {assign var="old_price" value="old_price_`$obj_id`"}
        {assign var="price" value="price_`$obj_id`"}
        {assign var="clean_price" value="clean_price_`$obj_id`"}
        {assign var="list_discount" value="list_discount_`$obj_id`"}

        {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
            {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
        {/if}

        {if $smarty.capture.$price|trim}
            <div class="ut2-pb__price-actual">
                {$smarty.capture.$price nofilter}
            </div>
        {/if}

        {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
            {$smarty.capture.$clean_price nofilter}
            {$smarty.capture.$list_discount nofilter}
        {/if}
    </div>

    {assign var="name" value="add_to_cart_`$obj_id`"}
    {$smarty.capture.$name nofilter}
</div>