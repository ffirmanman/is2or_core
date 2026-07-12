{$product_id=$product.product_id}

{if $addons.ab__intelligent_accessories.exclude_product_variations == 'Y'
    && $addons.product_variations.status == 'A'
    && $product.variation_parent_product_id|intval > 0
}
    {$product_id=$product.variation_parent_product_id}
{/if}

{$ab__ia_ps=fn_ab__ia_get_join_list_by_product(['product_id' => $product_id])}

{if $ab__ia_ps and is_array($ab__ia_ps)}
    <div class="ypi-ab__ia_joins-list">
        <div class="ty-subheader">{__("ab__ia.title_block")}</div>
        {$block=['block_id' => "ab__ia_`$product_id`"]}
        {include file="addons/ab__intelligent_accessories/blocks/ab__ia_products_scroller.tpl" block=$block items=$ab__ia_ps|array_shift product_id=$product_id}
    </div>
{/if}
