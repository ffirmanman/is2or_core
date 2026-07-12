{if $addons.ab__short_desc_from_features.show_descr_in_multicolumn == 'Y'
    && $product.short_description
    && $settings.abt__yt.product_list.grid_list_descr !== 'description'}
<div class="product-description">
    <div>{$product.short_description nofilter}</div>
</div>
{/if}