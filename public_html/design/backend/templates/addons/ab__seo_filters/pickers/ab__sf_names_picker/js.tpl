{if $sf_id|intval}
{$category = $ab__sf_names.$sf_id.category_id|fn_get_category_name}
{$features_hash = $ab__sf_names.$sf_id.features_hash}
{if empty($category)}
{$category=__("deleted")}
{/if}
{$update_url = "ab__sf_names.update&sf_id={$sf_id}"|fn_url}
{$value = "`$sf_id` `$category` #`$features_hash`"}
{else}
{$category = "`$ldelim`category`$rdelim`"}
{$features_hash = "`$ldelim`features_hash`$rdelim`"}
{/if}
{if $multiple}
<tr {if !$clone}id="{$holder}_{$sf_id}" {/if}class="cm-js-item {if $clone} cm-clone hidden{/if}">
{if $position_field}<td><input type="text" name="{$input_name}[{$sf_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} /></td>{/if}
<td>{if $hidden_field}<input type="hidden" name="{$input_name}[]" value="{$sf_id}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} />{/if}{$sf_id|default:"`$ldelim`sf_id`$rdelim`"}</td>
<td>{$category}</td>
<td>
{if $update_url}<a href="{$update_url}" target="_blank">{/if}{$features_hash}{if $update_url}</a>{/if}
<p style="font-size:12px; color:#333;">{strip}
{if !empty($ab__sf_names.$sf_id.tooltip)}
{foreach from=$ab__sf_names.$sf_id.tooltip key="f" item="v" name="t"}
<b>{$f}</b>: {', '|implode:$v}{if !$smarty.foreach.t.last}; {/if}
{/foreach}
{/if}
{/strip}
</p>
</td>
<td class="nowrap">
{if !$hide_delete_button && !$view_only}
{capture name="tools_list"}
<li>
<a onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$sf_id}', 'sfn_'); return false;">{__("remove")}</a>
</li>
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
{/if}
</td>
</tr>
{else}
<div class="input-append">
<{if $single_line}span{else}p{/if} {if !$clone}id="{$holder}_{$sf_id}" {/if}class="cm-js-item no-margin{if $clone} cm-clone hidden{/if}">
{if !$first_item && $single_line}<span class="cm-comma{if $clone} hidden{/if}">,&nbsp;&nbsp;</span>{/if}
<input class="input-text-medium cm-picker-value-description{$extra_class}" type="text" value="{$value}" {if $display_input_id}id="{$display_input_id}"{/if} size="10" name="company_name" readonly="readonly" {$extra} />
</{if $single_line}span{else}p{/if}>
{include file="buttons/button.tpl" but_id="opener_picker_`$data_id`" but_href="ab__sf_names.picker?display=`$display`&picker_for=`$picker_for`&extra=`$extra_var`&checkbox_name=`$checkbox_name`&root=`$default_name`&except_id=`$except_id`&data_id=`$data_id``$extra_url`"|fn_url but_text=$_but_text but_role=$_but_role but_target_id="content_`$data_id`" but_meta="cm-dialog-opener btn" but_icon="icon-plus"}
</div>
{/if}