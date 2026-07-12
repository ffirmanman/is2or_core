{assign var="data_id" value=$data_id|default:"ab__ia_joins"}
{if !$rnd}{$rnd=rand()}{/if}
{assign var="data_id" value="`$data_id`_`$rnd`"}
{assign var="view_mode" value=$view_mode|default:"mixed"}
{assign var="start_pos" value=$start_pos|default:0}
{if $placement == 'left'}
{$button_pos = "left"}
{$delete_all_pos = "right"}
{elseif $placement == 'right'}
{$button_pos = "right"}
{$delete_all_pos = "left"}
{/if}
{script src="js/tygh/picker.js"}
{if $item_ids == ""}
{assign var="item_ids" value=null}
{/if}
{if $item_ids && $multiple && !$item_ids|is_array}
{assign var="item_ids" value=","|explode:$item_ids}
{/if}
{if $show_add_button}
{if $multiple}
{assign var="_but_text" value=$but_text|default:__("ab__ia.add_joins")}
{assign var="_but_role" value="add"}
{else}
{assign var="lang_choose" value=__("choose")}
{assign var="_but_text" value="<i class=\"icon-\" title=\"`$lang_choose`\"></i>"}
{assign var="_but_role" value="icon"}
{/if}
<div class="{if $button_pos}pull-{$button_pos}{/if}">
{include file="buttons/button.tpl" but_id="opener_picker_`$data_id`" but_href="ab__ia_joins.picker?display=`$display`&picker_for=`$picker_for`&extra=`$extra_var`&checkbox_name=`$checkbox_name`&root=`$default_name`&except_id=`$except_id`&data_id=`$data_id``$extra_url`"|fn_url but_text=$_but_text but_role=$_but_role but_target_id="content_`$data_id`" but_meta="cm-dialog-opener btn" but_icon="icon-plus"}
</div>
{if $show_delete_all}
<div class="{if $delete_all_pos}pull-{$delete_all_pos}{/if}">
<a onclick="Tygh.$.cePicker('delete_js_item', '{$data_id}', 'delete_all', 'm'); return false;">{$delete_all_lang_var|default:__("ab__ia.remove_all")}</a>
</div>
{/if}
{/if}
{assign var="display" value="checkbox"}
{if !$extra_url}
{assign var="extra_url" value="&get_tree=multi_level"}
{/if}
{if $extra_var}
{assign var="extra_var" value=$extra_var|escape:url}
{/if}
<div class="hidden" id="content_{$data_id}" title="{$but_text|default:__("ab__ia_popup_tab_rules")}">
</div>
{if !$extra_var && $view_mode != "button"}
{if $multiple}
<div class="table-wrapper">
<table width="100%" class="table table-middle table--relative">
<thead>
<tr>
{if $positions}<th>{__("position_short")}</th>{/if}
<th width="50%">{__("ab__ia_name")}</th>
{* <th width="50%">{__("ab__ia_base_category")}</th>*}
<th>&nbsp;</th>
</tr>
</thead>
<tbody id="{$data_id}"{if !$item_ids} class="hidden"{/if}>
{else}
<div id="{$data_id}" class="{if $multiple && !$item_ids}hidden{elseif !$multiple}{if $view_mode != "list"}cm-display-radio{/if}{/if} choose-category">
{/if}
{if $multiple}
<tr class="hidden">
<td colspan="{if $positions}2{else}1{/if}">
{/if}
<input id="{if $input_id}{$input_id}{else}m{$data_id}_ids{/if}" type="hidden" class="cm-picker-value" name="{$input_name}" value="{if $item_ids|is_array}{assign var="_item_ids" value=$item_ids}{","|implode:$_item_ids}{else}{$item_ids}{/if}" {$extra} />
{if $multiple}
</td>
</tr>
{/if}
{if $item_ids}
{foreach from=$item_ids item="c_id" name="items"}
{include file="addons/ab__intelligent_accessories/pickers/joins/js.tpl" join_id=$c_id holder=$data_id input_name=$input_name clone=false hide_link=$hide_link first_item=$smarty.foreach.items.first position_field=$positions position=$smarty.foreach.items.iteration+$start_pos}
{foreachelse}
{include file="addons/ab__intelligent_accessories/pickers/joins/js.tpl" join_id="" holder=$data_id input_name=$input_name clone=true hide_link=$hide_link}
{/foreach}
{/if}
{if $multiple}
{include file="addons/ab__intelligent_accessories/pickers/joins/js.tpl" join_id="`$ldelim`join_id`$rdelim`" holder=$data_id input_name=$input_name radio_input_name=$radio_input_name clone=true hide_link=$hide_link hide_delete_button=$hide_delete_button position_field=$positions position="0"}
{/if}
{if $multiple}
</tbody>
<tbody id="{$data_id}_no_item"{if $item_ids} class="hidden"{/if}>
<tr class="no-items">
<td colspan="{if $positions}3{else}2{/if}"><p>{$no_item_text|default:__("no_items") nofilter}</p></td>
</tr>
</tbody>
</table>
</div>
{else}</div>{/if}
{/if}
