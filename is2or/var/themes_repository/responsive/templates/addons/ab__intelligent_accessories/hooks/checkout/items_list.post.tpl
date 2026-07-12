{if !$cart.products.$key.extra.parent
    and ($addons.ab__intelligent_accessories.show_ia_in_cart == 'for_all'
        or
        $addons.ab__intelligent_accessories.show_ia_in_cart == 'for_the_most_expensive_product' and $key == $ab__ia_key_mep)}
    {$d=fn_ab__ia_get_join_list_by_product(['product_id' => $product.product_id], "in_cart")}
    {if $d[0] and $d[0]|is_array}
        <tr>
            <td class="ty-table-disable-convertation hidden">&nbsp;</td>
            <td colspan="4" class="ty-table-disable-convertation">
                {include file="addons/ab__intelligent_accessories/views/components/ab__ia_products_in_cart.tpl"}
            </td>
        </tr>
    {/if}
{/if}