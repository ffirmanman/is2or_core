{if $addons.ab__short_desc_from_features.show_descr_in_multicolumn == 'Y' && $product.short_description}
<div class="ty-product-list__description">
    <div>{$product.short_description nofilter}</div>
</div>
{/if}