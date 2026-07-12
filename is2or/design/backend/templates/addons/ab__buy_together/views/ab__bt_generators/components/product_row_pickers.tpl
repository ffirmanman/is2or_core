{$name_prefix = $name_prefix|default:"item_data[base_products]"}
{$data_id = rand()}
{if $company_id}
{$picker_selected_company = $company_id}
{/if}
<tr class="ab-bt-picker-container products{if !$data.products} hidden{/if}">
<td class="no-border-td">
</td>
<td >
<div>
<h5>{__("ab__bt.products_picker")}</h5>
{include file="pickers/products/picker.tpl"
data_id="products_`$data_id`"
input_name="`$name_prefix`[products]"
type="table"
colspan="7"
item_ids=$data.products
placement="left"
amount_input="text"
aoc=true
ab__bt_generator=true
}
</div>
</td>
<td class="right" width="5%" style="vertical-align: top">
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/remove_button.tpl"
attrs=["data-ca-type"=>"products"]
but_onclick="toggleVisibility(this)"
}
</td>
</tr>
<tr class="ab-bt-picker-container saved_search{if !$data.saved_search} hidden{/if}">
<td class="no-border-td"></td>
<td >
<h5>{__("ab__bt.saved_search_picker")}</h5>
{include file="addons/ab__buy_together/views/ab__bt_generators/components/modifiers.tpl" collapse=true modifier_data=$data.modifiers.saved_search input_name="`$name_prefix`[modifiers][saved_search]"}
<div class="saved_search_picker" id="{"saved_search_`$data_id`"}">
<div class="clearfix">
<input type="hidden" value="{$data_id}" name="result_ids">
<input type="hidden" value="{$data.saved_search}" name="{"`$name_prefix`[saved_search]"}">
{include file="buttons/button.tpl"
but_role="button-icon"
but_meta="cm-ab-bt-get-search-form btn"
but_icon="icon-search"
but_text=__("ab__bt.select_by_params")
}
<div class="saved_search_picker_selected{if !$data.saved_search} hidden{/if}">
<div>
<span>{__("ab__bt.parameters_are_set")}</span> <a href="#" class="pull-right" onclick="removeSavedSearch(this);return false;">{__("ab__bt.clear_search_conditions")}</a><br/>
</div>
<small class="muted">{__("ab__bt.parameters_are_set.tooltip")}</small>
</div>
</div>
</div>
</td>
<td class="right" width="5%">
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/remove_button.tpl"
attrs=["data-ca-type"=>"saved_search"]
but_onclick="toggleVisibility(this)"
}
</td>
</tr>
{if $addons.ab__intelligent_accessories.status == 'A'}
<tr class="ab-bt-picker-container ab__ia_joins{if !$data.ab__ia_joins} hidden{/if}">
<td class="no-border-td">
</td>
<td>
<div class="">
<h5>{__("ab__bt.ab__ia_joins_picker")}</h5>
{include file="addons/ab__buy_together/views/ab__bt_generators/components/modifiers.tpl" collapse=true modifier_data=$data.modifiers.ab__ia_joins input_name="`$name_prefix`[modifiers][ab__ia_joins]"}
<div class="clearfix"></div>
{include file="addons/ab__intelligent_accessories/pickers/joins/picker.tpl"
show_add_button=true
show_delete_all=true
multiple=true
item_ids=$data.ab__ia_joins
view_mode="list"
data_id="ab__ia_joins_`$data_id`"
input_name="`$name_prefix`[ab__ia_joins]"
no_item_text=__("no_data")
delete_all_lang_var=__("ab__bt.delete_all_joins")
delete_all_pos="right"
}
</div>
</td>
<td class="right" width="5%">
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/remove_button.tpl"
attrs=["data-ca-type"=>"ab__ia_joins"]
but_onclick="toggleVisibility(this)"
}
</td>
</tr>
{/if}