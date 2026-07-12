{$modifier_id = rand()}
{$collapse = false}
{if $collapse}
<span class="more hand">
<a id="on_modifier_{$modifier_id}" class="cm-combination">{__("discounts")}<i class="icon-caret-right"></i></a>
<a id="off_modifier_{$modifier_id}" class="hidden cm-combination">{__("discounts")}<i class="icon-caret-down"></i></a>
</span>
{/if}
<table id="modifier_{$modifier_id}" class="ab-bt-modifiers{if $collapse} hidden{/if}">
<thead>
{* <tr>
<th>{__("qty")}</th>
<th>{__("discount")}</th>
<th>{__("value")}</th>
</tr>*}
</thead>
<tbody>
<tr>
<td class="no-border-td">
{__("qty")}: <input type="text" name="{$input_name}[amount]" id="item_amount_{$data_id}" size="4" value="{$modifier_data.amount|default:1}"
class="input-mini">
</td>
<td class="no-border-td">
{__("discount")}: <select name="{$input_name}[modifier_type]" class="input-slarge" id="item_modifier_type_{$data_id}">
{foreach ["by_fixed","to_fixed","by_percentage","to_percentage"] as $mod_type}
<option value="{$mod_type}" {if $modifier_data.modifier_type == $mod_type}selected{/if}>{__($mod_type)}</option>
{/foreach}
</select>
</td>
<td class="no-border-td">
{__("value")}: <input type="text" name="{$input_name}[modifier]" id="item_modifier_{$data_id}" size="4" value="{$modifier_data.modifier|default:0}"
class="input-mini">
</td>
</tr>
</tbody>
</table>
