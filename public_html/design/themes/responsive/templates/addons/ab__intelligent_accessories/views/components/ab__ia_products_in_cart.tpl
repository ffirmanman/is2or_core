<div class="ty-ab__ia_joins">
    {$exclude_pid=array_keys(fn_array_value_to_key($smarty.session.cart.products, 'product_id'))}
    {$ab__ia_p = ['product_id'=>$product.product_id,'join_ids'=>$d[0]|array_keys, 'exclude_pid' => $exclude_pid]|fn_ab__ia_get_products_by_joins:$addons.ab__intelligent_accessories.max_ia_products_in_cart|default:2}
    <span id="sw_ab__ia_{$key}{$product.product_id}" class="cm-combination ty-hand">{__("ab__ia.products_in_cart")}&nbsp;({$ab__ia_p|count})</span>&nbsp;<i id="on_ab__ia_{$key}{$product.product_id}" class="ty-icon-down-open cm-combination"></i><i id="off_ab__ia_{$key}{$product.product_id}" class="ty-icon-up-open cm-combination hidden"></i>
    <div id="ab__ia_{$key}{$product.product_id}" class="hidden">
        {include file="addons/ab__intelligent_accessories/views/components/product_list_templates/in_cart.tpl" no_pagination=true no_sorting=true products=$ab__ia_p}
    </div>
</div>
