{if $variant_id}
{assign var="variant" value=$variant_id|fn_ab__sb_get_variant_name|default:"`$ldelim`variant`$rdelim`"}
{else}
{assign var="variant" value=$default_name}
{/if}
{if $multiple}
<tr {if !$clone}id="{$holder}_{$variant_id}" {/if}class="cm-js-item{if $clone} cm-clone hidden{/if}">
{if $position_field}<td><input type="text" name="{$input_name}[{$variant_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} /></td>{/if}
<td><a target="_blank" href="{"ab__sb_feature_variants.update?variant_id=`$variant_id`"|fn_url}">{$variant}</a></td>
<td>
<div class="hidden-tools">
{if !$hide_delete_button && !$view_only}
{capture name="tools_list"}
<li>{btn type="list" text=__("remove") onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$variant_id}', 'f'); return false;"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
</div>
</td>
{if !$hide_input}
<input {if $input_id}id="{$input_id}"{/if} type="hidden" name="{$input_name}" value="{$variant_id}" />
{/if}
</tr>
{else}
<span {if !$clone}id="{$holder}_{$variant_id}" {/if}class="cm-js-item no-margin{if $clone} cm-clone hidden{/if}">
{if !$first_item && $single_line}<span class="cm-comma{if $clone} hidden{/if}">,&nbsp;&nbsp;</span>{/if}
<input class="cm-picker-value-description {$extra_class}" type="text" value="{$filter}" {if $display_input_id}id="{$display_input_id}"{/if} size="10" name="filter_name" readonly="readonly" {$extra}>&nbsp;
</span>
{/if}