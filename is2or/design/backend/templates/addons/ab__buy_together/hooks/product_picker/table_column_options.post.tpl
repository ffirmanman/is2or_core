{if $ab__bt_generator}
{if $clone}
{$price = "`$ldelim`price`$rdelim`"}
{$price_value = ""}
{$modifier_type=""}
{$modifier=0}
{else}
{$price = $product_data.price}
{$price_value = $product_data.price}
{$modifier_type=$product_info.modifier_type}
{$modifier=$product_info.modifier}
{/if}
<td>
<input type="text" class="hidden" id="item_price_bt_ab__bt_generator_{$ldelim}bt_id{$rdelim}" value="{$price}">
{include file="common/price.tpl" span_id="item_display_price_bt_ab__bt_generator_`$ldelim`bt_id`$rdelim`" value=$price_value}
</td>
<td>
<select name="{$input_name}[modifier_type]" class="input-slarge" id="item_modifier_type_bt_ab__bt_generator_{$ldelim}bt_id{$rdelim}">
{foreach ["by_fixed","to_fixed","by_percentage","to_percentage"] as $mod_type}
<option value="{$mod_type}" {if $modifier_type == $mod_type}selected{/if}>{__($mod_type)}</option>
{/foreach}
{* <option value="by_fixed">{__("by_fixed")}</option>
<option value="to_fixed">{__("to_fixed")}</option>
<option value="by_percentage">{__("by_percentage")}</option>
<option value="to_percentage">{__("to_percentage")}</option>*}
</select>
</td>
<td>
<input type="text" class="cm-chain-ab__bt_generator hidden" value="{$ldelim}bt_id{$rdelim}" />
<input type="text" class="hidden" id="{$ldelim}bt_id{$rdelim}" value="ab__bt_generator" />
<input type="text" name="{$input_name}[modifier]" id="item_modifier_bt_ab__bt_generator_{$ldelim}bt_id{$rdelim}" size="4" value="{$modifier}" class="input-mini cm-numeric" data-a-sep>
</td>
{* <td>
{include file="common/price.tpl" span_id="item_discounted_price_bt_ab__bt_generator_`$ldelim`bt_id`$rdelim`_"}
</td>*}
{/if}