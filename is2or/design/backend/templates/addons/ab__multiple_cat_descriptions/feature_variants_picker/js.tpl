{if $variant_id|intval}
{$variant_data = $variant_id|fn_get_product_feature_variant}
{$variant = $variant_data.variant}
{$feature_name = $variant_data.feature_id|fn_get_feature_name}
{else}
{$variant = "`$ldelim`variant`$rdelim`"}
{$feature_name = false}
{/if}
{if $multiple}
<tr {if !$clone}id="{$holder}_{$variant_id}" {/if}class="cm-js-item {if $clone} cm-clone hidden{/if}">
{if $position_field}<td><input type="text" name="{$input_name}[{$variant_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} /></td>{/if}
<td>{if $hidden_field}<input type="hidden" name="{$input_name}[]" value="{$variant_id}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} />{/if}{$variant}{if $feature_name}<span class="muted"><span class="small">&nbsp;{$feature_name}</span></span>{/if}</td>
<td class="nowrap">
{if !$hide_delete_button && !$view_only}
{capture name="tools_list"}
<li>
<a onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$variant_id}', 'm'); return false;">{__("remove")}</a>
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