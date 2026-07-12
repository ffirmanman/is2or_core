{if $join_id|intval}
{$join_data=["join_id"=>$join_id]|fn_ab__ia_get_joins}
{$base_category_id=$join_data[0][$join_id].base_category_id}
{$base_category=$base_category_id|fn_get_category_name}
{$name="<a href={"ab__ia_joins.update&separate=Y&join_id=$join_id"|fn_url} target='_blank'>{$join_data[0][$join_id].name}</a><a class='hidden' href='{"categories.update?category_id=`$base_category_id`"|fn_url}' target='_blank'>{$base_category}</a>" }
{else}
{$name = "`$ldelim`name`$rdelim`"}
{$base_category = "`$ldelim`base_category`$rdelim`"}
{/if}
{if $multiple}
<tr {if !$clone}id="{$holder}_{$join_id}" {/if}class="cm-js-item {if $clone} cm-clone hidden{/if}">
{if $position_field}<td><input type="text" name="{$input_name}[{$join_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} /></td>{/if}
<td>{if $hidden_field}<input type="hidden" name="{$input_name}[]" value="{$join_id}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} />{/if}{$name nofilter}</td>
{* <td>{$base_category}</td>*}
<td class="nowrap right">
{if !$hide_delete_button && !$view_only}
{capture name="tools_list"}
<li>
<a onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$join_id}', 'm'); return false;">{__("remove")}</a>
</li>
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
{/if}
</td>
</tr>
{else}
<{if $single_line}span{else}p{/if} {if !$clone}id="{$holder}_{$company_id}" {/if}class="cm-js-item no-margin{if $clone} cm-clone hidden{/if}">
{if !$first_item && $single_line}<span class="cm-comma{if $clone} hidden{/if}">,&nbsp;&nbsp;</span>{/if}
<input class="input-text-medium cm-picker-value-description{$extra_class}" type="text" value="{$company}" {if $display_input_id}id="{$display_input_id}"{/if} size="10" name="company_name" readonly="readonly" {$extra} />
</{if $single_line}span{else}p{/if}>
{/if}