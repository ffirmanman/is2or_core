{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__extended_metadata_settings_form" id="ab__extended_metadata_settings_form" class="{if ""|fn_check_form_permissions} cm-hide-inputs{/if}">
<input type="hidden" name="company_id" value="{fn_ab__emd_get_active_company_id()}">
{capture name="tabsbox"}
{foreach $ab__emd_settings as $dispatch => $items}
{* avoid dots in html *}
{$tab_name = str_replace(".", "_", $dispatch)}
<div id="content_{$tab_name}">
{* Placeholders list *}
{capture name="placeholders"}
{if $ab__emd_placeholders.$dispatch}
{include file="addons/ab__extended_metadata/views/ab__emd/components/placeholders_list.tpl" placeholders=$ab__emd_placeholders.$dispatch}
{/if}
{/capture}
{* Pattern settings *}
{include file="common/subheader.tpl" title=__("ab__emd.setting.header.`$dispatch`") target="#ab__emd-setting_`$tab_name`" notes=$smarty.capture.placeholders notes_id=$tab_name}
<div id="ab__emd-setting_{$tab_name}" class="table-responsive-wrapper collapse in">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th>{__("name")}</th>
<th>{__("value")}</th>
<th>{__("enable")}</th>
</tr>
</thead>
<tbody>
{foreach $items as $item_name => $item}
<tr>
<td data-th="{__("name")}">{__("ab__emd.setting.`$dispatch`.`$item_name`")}{if $item.tooltip}{include file="common/tooltip.tpl" tooltip=$item.tooltip}{/if}</td>
<td data-th="{__("value")}">
{$field_name = "ab__extended_metadata_data[`$dispatch`][`$item_name`]"}
{hook name="ab__extended_metadata:setting_value"}
{if $item.type === "checkbox"}
<input type="hidden" value="N" name="{$field_name}">
<input type="checkbox" value="Y" name="{$field_name}" {if $item.value === "Y"}checked="checked"{/if}>
{elseif $item.type === "selectbox"}
<select name="{$field_name}" class="{if $item.class}{$item.class}{else}span3{/if}">
{foreach $item.variants as $v}
<option value="{$v}" {if $v === $item.value}selected="selected"{/if}>{__({"ab__emd.setting.`$dispatch`.`$item_name`.`$v`"})}</option>
{/foreach}
</select>
{elseif $item.type === "input"}
<input type="text" name="{$field_name}" value="{$item.value}" class="{if $item.class}{$item.class}{else}span3{/if}">
{elseif $item.type === "textarea"}
<textarea name="{$field_name}" class="{if $item.class}{$item.class}{else}span3{/if}">{$item.value}</textarea>
{/if}
{/hook}
</td>
<td>
{if $item.has_status}
<input type="hidden" value="N" name="{"ab__extended_metadata_data[`$dispatch`][`$item_name`_status]"}">
<input type="checkbox" value="Y" name="{"ab__extended_metadata_data[`$dispatch`][`$item_name`_status]"}" {if $item.status === "Y"}checked="checked"{/if}>
{/if}
</td>
</tr>
{/foreach}
</tbody>
</table>
</div>
{if $dispatch === "categories.view"}
{include file="addons/ab__extended_metadata/views/ab__emd/components/additional_patterns.tpl" object="category"}
{/if}
{if $dispatch === "products.view"}
{include file="addons/ab__extended_metadata/views/ab__emd/components/additional_patterns.tpl" object="product"}
{/if}
{hook name="ab__extended_metadata:settings_tab_extra"}{/hook}
<!--content_{$tab_name}--></div>
{/foreach}
{/capture}
<input type="hidden" name="selected_section" value="{$smarty.request.selected_section}" />
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}
</form>
{/capture}
{capture name="buttons"}
{include file="buttons/button.tpl" but_text=__("save") but_role="submit-link" but_name="dispatch[ab__emd.update_settings]" but_meta="btn-primary" but_target_form="ab__extended_metadata_settings_form"}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__extended_metadata"}
{include
file="common/mainbox.tpl"
title_start=__("ab__extended_metadata")|truncate:40
title_end=__("ab__emd.settings")
select_languages=true
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons = $smarty.capture.adv_buttons
select_storefront=true
show_all_storefront=false
}
