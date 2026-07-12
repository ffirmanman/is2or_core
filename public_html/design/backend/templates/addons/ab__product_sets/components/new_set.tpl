<tbody id="box_add_ab__ps_set">
<tr class="table-row {$no_hide_input_if_shared_product}">
<td width="2%">
<span id="on_ab__ps_set_extra_{$key}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination"><span class="exicon-expand"></span></span>
<span id="off_ab__ps_set_extra_{$key}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination"><span class="exicon-collapse"></span></span>
</td>
<td>
<input type="hidden" name="product_data[ab__product_sets][{$key}][set_id]" value=""/>
<input type="text" name="product_data[ab__product_sets][{$key}][pos]" value="" class="input-micro" />
</td>
<td><input type="text" name="product_data[ab__product_sets][{$key}][set]" value="" class="input-large" /></td>
<td></td>
<td class="right">
{*include file="buttons/multiple_buttons.tpl" item_id="add_ab__ps_set"*}
</td>
</tr>
<tr class="cr-table-detail" id="ab__ps_set_extra_{$key}">
<td colspan="5">
{include file="pickers/products/picker.tpl" input_name="product_data[ab__product_sets][`$key`][products]" data_id="ab__ps_set_`$new_key`_products" type="links"}
</td>
</tr>
</tbody>
