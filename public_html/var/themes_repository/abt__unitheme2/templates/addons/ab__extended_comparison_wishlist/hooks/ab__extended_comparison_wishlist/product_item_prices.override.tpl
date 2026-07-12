{hook name="ab__extended_comparison_wishlist:product_item_prices"}
    <div class="ab-ec-product-item__bottom-prices ut2-gl__price pr-{$settings.abt__ut2.product_list.price_display_format}{if $product.list_discount || $product.discount} pr-color{/if}">
        <div>
            {assign var="old_price" value="old_price_`$obj_id`"}
            {$smarty.capture.$old_price nofilter}

            {assign var="price" value="price_`$obj_id`"}
            {$smarty.capture.$price nofilter}
        </div>
    </div>
{/hook}