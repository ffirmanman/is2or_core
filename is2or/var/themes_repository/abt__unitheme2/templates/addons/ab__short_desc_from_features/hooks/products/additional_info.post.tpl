{if $addons.ab__short_desc_from_features.show_descr_in_multicolumn == 'Y'
    && $product.short_description
    && $settings.abt__ut2.product_list.products_multicolumns.grid_item_bottom_content[$settings.abt__device] !== 'description'}
<div class="product-description">
    <div>{$product.short_description nofilter}</div>
</div>
{/if}