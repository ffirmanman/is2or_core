{if !$rnd}{$rnd=rand()}{/if}
{$prefix = $prefix|default:"category_data"}
{$ab__mcd_object_type = $ab__mcd_object_type|default:"category"}
{$ab__mcd_object_id = $ab__mcd_object_id|default:0}
{$ab__mcd_elements = $ab__mcd_elements|default:[]|array_keys}
{if $preview_url}
<div class="clearfix">
<p class="pull-right"><a href="{$preview_url|fn_url:"C"}" target="_blank">{__('ab__mcd.preview')}</a></p>
</div>
{/if}
{if ""|fn_ab__mcd_need_old_picker}
{$params = ['group_by_type'=>true]}
{$ab__mcd_items_all = $params|fn_ab__mcd_get_items:$smarty.const.DESCR_SL:''}
{$ab__mcd_elements_all = $ab__mcd_items_all[0]}
{$ab__mcd_headers_all = $ab__mcd_items_all[1]}
{$selected_elements = $ab__mcd_elements}
{$selected_headers = $ab__mcd_headers|default:[]|array_keys}
<div class="control-group">
<label id="" for="ab__mcd_items_headers" class="control-label">{__('ab__mcd_items.headers')}:</label>
<div class="controls">
<select name="{$prefix}[ab__mcd_items][headers][]" id="ab__mcd_items_headers">
<option value="0">{__("ab__mcd.not_use")}</option>
{foreach $ab__mcd_headers_all as $header}
<option value="{$header.mdi_id}" {if $header.mdi_id|in_array:$selected_headers}selected{/if}>{$header.title nofilter}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label id="" for="" class="control-label">{__('ab__mcd_items.elements')}:</label>
<div class="controls">
{foreach $ab__mcd_elements_all as $element}
<label style="border-bottom: solid 1px rgba(0,0,0,0.2);padding-bottom: 14px;" class="checkbox" for="ab__mcd_items_elements_{$element.mdi_id}"><input type="checkbox" id="ab__mcd_items_elements_{$element.mdi_id}" name="{$prefix}[ab__mcd_items][elements][]" value="{$element.mdi_id}" {if $element.mdi_id|in_array:$selected_elements}checked{/if}>{$element.title nofilter}</br>{$element.description nofilter}</label>
{/foreach}
</div>
</div>
{else}
<div class="control-group">
<label id="" for="ab__mcd_items_headers_{$rnd}" class="control-label">{__('ab__mcd_items.headers')}:</label>
<div class="controls">
{include file="addons/ab__multiple_cat_descriptions/picker/picker.tpl"
show_empty_variant=true
select_group_class="btn-toolbar"
input_name="`$prefix`[ab__mcd_items][headers][]"
id="ab__mcd_items_headers_`$rnd`"
ajax_url="ab__mcd_items.picker&item_type=headers&ab__mcd_object_type=`$ab__mcd_object_type`"|fn_url
show_advanced=false
item_ids=$ab__mcd_headers|default:[]|array_keys
}
</div>
</div>
<div class="control-group">
<label id="" for="ab__mcd_items_elements_{$rnd}" class="control-label">{__('ab__mcd_items.elements')}:</label>
<div class="controls">
{include file="addons/ab__multiple_cat_descriptions/picker/picker.tpl"
multiple=true
view_mode="external"
select_group_class="btn-toolbar"
input_name="`$prefix`[ab__mcd_items][elements][]"
id="ab__mcd_items_elements_{$rnd}"
ajax_url="ab__mcd_items.picker&item_type=elements&ab__mcd_object_type=`$ab__mcd_object_type`"|fn_url
item_ids=$ab__mcd_elements
show_advanced=false
}
</div>
</div>
{/if}
{$params = [
'group_by_type' => true,
'object_id' => $ab__mcd_object_id,
'object_type' => $ab__mcd_object_type,
'ignore_excluded' => true
]}
{$ab__mcd_items_all = $params|fn_ab__mcd_get_items:$smarty.const.DESCR_SL:''}
{$ab__mcd_elements_all = $ab__mcd_items_all[0]}
{capture name="global_elements"}
{foreach $ab__mcd_elements_all as $item}
{if !$item.mdi_id|in_array:$ab__mcd_elements}
<tr>
<td>
<div><b>{$item.title nofilter}</b></div>
<div class="object-picker__ab__mcd-main">{$item.description nofilter}</div>
</td>
<td><a href="{"ab__mcd_items.update?mdi_id={$item.mdi_id}"|fn_url}">{__("edit")}</a></td>
<td>{if $item.status == 'A'}{__("active")}{else}{__("disabled")}{/if}</td>
</tr>
{/if}
{/foreach}
{/capture}
{if $smarty.capture.global_elements|trim}
{include file="common/subheader.tpl" title=__("ab__mcd.global_elements") target="#ab__mcd_global_elements"}
<div class="control-group table-responsive-wrapper" id="ab__mcd_global_elements">
<div class="controls">
<table class="table table-middle">
{$smarty.capture.global_elements nofilter}
</table>
</div>
</div>
{/if}