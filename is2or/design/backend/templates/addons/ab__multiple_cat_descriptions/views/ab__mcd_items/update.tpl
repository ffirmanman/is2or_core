{capture name="mainbox"}
{$id=$ab__mcd_desc.mdi_id|default:0}
{if $id}
{capture name="tabsbox"}
{/if}
{$allow_save=true}
{if !$rnd}{$rnd=rand()}{/if}
{$content_id="ab__md_{$item_type}_{$id}"}
{$include = "Addons\\Ab_multipleCatDescriptions\\LinkTypes::INCLUDE_SELECTED"|enum}
{$exclude = "Addons\\Ab_multipleCatDescriptions\\LinkTypes::EXCLUDE_SELECTED"|enum}
<form action="{""|fn_url}" method="post" id="update_ab__mcd_items_form_{$id}" name="update_ab__mcd_items_form_{$id}" class="form-horizontal form-edit cm-disable-empty-files cm-form-dialog-closer" enctype="multipart/form-data">
<input type="hidden" name="return_url" value="{$return_url}" />
<input type="hidden" name="item_type" value="{$item_type}" />
<input type="hidden" name="mdi_id" value="{$id}" />
<input type="hidden" name="result_ids" value="{$content_id}" />
<input type="hidden" name="ab__md[mdi_id]" value="{$ab__mcd_desc.mdi_id|default:0}" />
<input type="hidden" name="ab__md[item_type]" value="{$item_type}" />
<input type="hidden" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
<div class="cm-tabs-content" id="tabs_content_{$id}">
<div id="content_general">
<fieldset>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<div class="control-group">
<label class="control-label" for="elm_desc_position_{$id}">{__("ab__mcd.position")}:</label>
<div class="controls">
<input type="text" name="ab__md[position]" value="{$ab__mcd_desc.position|default:0}" class="input-micro cm-integer cm-value-integer" id="elm_desc_position_{$id}" />
</div>
</div>
{/if}
<div class="control-group">
<label class="control-label" for="elm_desc_tag_{$id}">{__("ab__mcd.tag")}:</label>
<div class="controls">
<select name="ab__md[tag]" id="elm_desc_tag_{$id}" class="span2">
{foreach ['div', 'h2', 'h3', 'h4', 'h5'] as $t}
<option value="{$t}"{if $t == $ab__mcd_desc.tag} selected="selected"{/if}>{__("ab__mcd.tag.variants.`$t`")}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label cm-required" for="elm_desc_title_{$id}">{__("ab__mcd.title")}:</label>
<div class="controls">
<input class="span8 cm-trim" type="text" name="ab__md[title]" value="{$ab__mcd_desc.title}" id="elm_desc_title_{$id}" />
</div>
</div>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<div class="control-group">
<label class="control-label cm-required" for="elm_desc_description_{$id}">{__("ab__mcd.description")}:</label>
<div class="controls">
<textarea class="input-large cm-wysiwyg" type="text" name="ab__md[description]" id="elm_desc_description_{$id}">{$ab__mcd_desc.description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_desc_is_faq_{$id}">{__("ab__mcd.is_faq")} {include file="common/tooltip.tpl" tooltip=__("ab__mcd.is_faq.tooltip")}:</label>
<div class="controls">
<select name="ab__md[is_faq]" id="elm_desc_is_open_{$id}" class="span2">
{foreach ['Y', 'N'] as $t}
<option value="{$t}"{if $t == $ab__mcd_desc.is_faq} selected="selected"{/if}>{__("ab__mcd.is_faq.variants.`$t|lower`")}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_desc_position_on_page_{$id}">{__("ab__mcd.position_on_page")} {include file="common/tooltip.tpl" tooltip=__("ab__mcd.position_on_page.tooltip")}:</label>
<div class="controls">
<select name="ab__md[position_on_page]" id="elm_desc_position_on_page_{$id}" class="span2" onchange="Tygh.$('.elm_desc_is_open').toggleClass('hidden',this.value === 'U');">
{foreach ["Addons\\Ab_multipleCatDescriptions\\PagePositions::INSIDE"|enum, "Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER"|enum] as $t}
<option value="{$t}"{if $t == $ab__mcd_desc.position_on_page} selected="selected"{/if}>{__("ab__mcd.position_on_page.variants.`$t|lower`")}</option>
{/foreach}
</select>
</div>
</div>
<div class="elm_desc_is_open control-group {if $ab__mcd_desc.position_on_page == "Addons\\Ab_multipleCatDescriptions\\PagePositions::UNDER"|enum}hidden{/if}">
<label class="control-label" for="elm_desc_is_open_{$id}">{__("ab__mcd.is_open")}:</label>
<div class="controls">
<select name="ab__md[is_open]" id="elm_desc_is_open_{$id}" class="span2">
{foreach ['Y', 'N'] as $t}
<option value="{$t}"{if $t == $ab__mcd_desc.is_open} selected="selected"{/if}>{__("ab__mcd.is_open.variants.`$t|lower`")}</option>
{/foreach}
</select>
</div>
</div>
{/if}
{include file="common/select_status.tpl" input_name="ab__md[status]" id="elm_desc_status_{$id}" obj_id=$id obj=$ab__mcd_desc}
<div style="padding: 20px;">
<table class="table">
<thead>
<tr>
<td colspan="2">{__('ab__mcd.additional_features') nofilter}</td>
</tr>
<tr>
<td width="30%"><b>{__('ab__mcd.additional_features.emoji.title') nofilter}</b></td>
<td><b>{__('ab__mcd.additional_features.placeholders.title') nofilter}</b></td>
</tr>
</thead>
<tbody>
<tr>
<td>{__('ab__mcd.additional_features.emoji.text') nofilter}</td>
<td>{__('ab__mcd.additional_features.placeholders.text') nofilter}{if $object_type == "ab__seo_filter"}<br>{__('ab__mcd.additional_features.placeholders.text.ab__seo_filter') nofilter}{/if}</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
</div>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum && $id}
<div id="content_fillings">
<div class="control-group">
<label for="elm_filling_type_{$id}" class="control-label">{__("ab__mcd.filling_type")}:</label>
<div class="controls">
<select name="ab__md[filling_type]" id="elm_filling_type_{$id}" class="cm-reload-form">
<option value="0">{__("ab__mcd.not_use")}</option>
{foreach $filling_data as $filling_type => $filling_type_data}
<option value="{$filling_type}" {if $ab__mcd_desc.filling_type == $filling_type}selected{/if}>{__($filling_type)}</option>
{/foreach}
</select>
</div>
</div>
{if $ab__mcd_desc.filling_type}
<p>{__("ab__mcd.additional_features.placeholders.text.products")}</p>
{if $ab__mcd_desc.filling_type == "manually"}
{$picker_id="manual_products_picker_{$rnd}"}
<div class="pull-right">
<a onclick="$('[data-object-picker=object_picker_{$picker_id}]').find('select.cm-object-picker').ceObjectPicker('setSelectedObjectIds',''); return false;">{__("ab__mcd.remove_all")}</a>
</div>
<div class="clear"></div>
<div class="control-group">
{include_ext
file=$filling_data["manually"]["picker"]
checkbox_name="block_items"
data_id="objects_`$id`_"
input_name="ab__md[filling_data][manually][item_ids]"
item_ids=$ab__mcd_desc.filling_data.manually.item_ids
params_array=$filling_data["manually"].picker_params
picker_id=$picker_id
}
</div>
{/if}
{if $filling_data[$ab__mcd_desc.filling_type].settings|is_array}
{foreach $filling_data[$ab__mcd_desc.filling_type].settings as $key => $setting}
<div class="control-group">
<label for="filling_data[{$ab__mcd_desc.filling_type}][{$key}]" class="control-label">{__($key)}:</label>
<div class="controls">
{if $setting.type == "selectbox"}
<select name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][{$key}]" id="filling_data[{$ab__mcd_desc.filling_type}][{$key}]">
{foreach $setting.values as $value_id => $value}
<option value="{$value_id}" {if $ab__mcd_desc.filling_data[$ab__mcd_desc.filling_type].$key == $value_id}selected{/if}>{__($value)}</option>
{/foreach}
</select>
{elseif $setting.type == "input"}
<input type="text" name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][{$key}]" id="filling_data[{$ab__mcd_desc.filling_type}][{$key}]" value="{$ab__mcd_desc.filling_data[$ab__mcd_desc.filling_type].$key|default:$setting.default_value}">
{/if}
</div>
</div>
{/foreach}
{/if}
<div class="control-group">
<label for="filling_data[{$ab__mcd_desc.filling_type}][display_without_amount]" class="control-label">{__("ab__mcd.display_without_amount")}:</label>
<div class="controls">
<input type="hidden" name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][display_without_amount]" value="N"/>
<input type="checkbox" id="filling_data[{$ab__mcd_desc.filling_type}][display_without_amount]" name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][display_without_amount]" value="Y" {if $ab__mcd_desc.filling_data[$ab__mcd_desc.filling_type].display_without_amount == "Y"}checked="checked"{/if}/>
</div>
</div>
{if $ab__mcd_desc.filling_type != "manually"}
<div class="control-group">
<label for="filling_data[{$ab__mcd_desc.filling_type}][products_number]" class="control-label">{__("ab__mcd.products_number")}:</label>
<div class="controls">
<select type="text" name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][products_number]" id="ab__md[filling_data][{$ab__mcd_desc.filling_type}][products_number]">
{foreach from=1|range:$addons.ab__multiple_cat_descriptions.max_product_number item="item"}
<option value="{$item}" {if $item == $ab__mcd_desc.filling_data[$ab__mcd_desc.filling_type].products_number}selected{/if}>{$item}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label for="ab__md[filling_data][{$ab__mcd_desc.filling_type}][sorting]" class="control-label ">{__("ab__mcd.products_sorting")}:</label>
<div class="controls">
<select name="ab__md[filling_data][{$ab__mcd_desc.filling_type}][sorting]" id="ab__md[filling_data][{$ab__mcd_desc.filling_type}][sorting]">
{foreach $sortings as $sorting => $s_data}
{foreach $sorting_orders as $sorting_order}
{if $s_data.$sorting_order !== false}
<option value="{$sorting}-{$sorting_order}" {if $ab__mcd_desc.filling_data[$ab__mcd_desc.filling_type].sorting == "{$sorting}-{$sorting_order}"}selected{/if}>{__("sort_by_`$sorting`_`$sorting_order`")}</option>
{/if}
{/foreach}
{/foreach}
</select>
</div>
</div>
{/if}
<div class="control-group">
<label for="ab__md[filling_data][template]" class="control-label">{__("ab__mcd.products_template")}:</label>
<div class="controls">
<select name="ab__md[filling_data][template]" id="ab__md[filling_data][template]">
{foreach ['commas', 'unordered_list', 'ordered_list', 'table_with_prices'] as $t}
<option value="{$t}"{if $ab__mcd_desc.filling_data.template == $t}selected{/if}>{__("ab__mcd.products_template.variants.`$t|lower`")}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label for="ab__md_filling_data_min_products_on_page" class="control-label cm-integer cm-value-integer">{__("ab__mcd.min_products_on_page")}:</label>
<div class="controls">
<input type="text" class="" name="ab__md[filling_data][min_products_on_page]" id="ab__md_filling_data_min_products_on_page" value="{$ab__mcd_desc.filling_data.min_products_on_page|default:0}">
</div>
</div>
{/if}
<input type="hidden" name="result_ids" value="content_fillings">
<input type="submit" class="hidden" name="dispatch[ab__mcd_items.update]">
<!--content_fillings--></div>
{/if}
<div id="content_category" class="hidden">
<div class="control-group">
<label class="control-label" for="ab__md_category_status">{__("ab__mcd.category_status")}</label>
<div class="controls">
<input type="hidden" name="ab__md[settings][category][status]" value="D"/>
<input type="checkbox" id="ab__md_category_status" name="ab__md[settings][category][status]" value="A" {if $ab__mcd_desc.settings.category.status == "A"}checked="checked"{/if}/>
<p class="muted">{__("ab__mcd.category_status.tooltip")}</p>
</div>
</div>
<div class="include_categories {if $ab__mcd_desc.settings.show_on_category == "Y"}hidden{/if} ">
{include file="common/subheader.tpl" title=__("ab__mcd.include_categories")}
{$picker_id = "categories_include_list_`$rnd`"}
<div class="pull-right">
<a onclick="Tygh.$.cePicker('delete_js_item', '{$picker_id}', 'delete_all', 'c'); return false;">{__("ab__mcd.remove_all")}</a>
</div>
{if "ULTIMATE"|fn_allowed_for}
{$ab__mcd_show_company=true}
{/if}
{include file="pickers/categories/picker.tpl"
picker_id=$picker_id
input_name="ab__md[links][category][`$include`]"
display_input_id="ab__md[links][category][`$include`]"
item_ids=implode(',',$ab__mcd_desc.links.category.$include|default:[]|array_keys)
multiple=true
ab__mcd_show_company=$ab__mcd_show_company
}
</div>
<div class="exclude_categories">
{include file="common/subheader.tpl" title=__("ab__mcd.exclude_categories")}
{$picker_id = "categories_exclude_list_`$rnd`"}
<div class="pull-right">
<a onclick="Tygh.$.cePicker('delete_js_item', '{$picker_id}', 'delete_all', 'c'); return false;">{__("ab__mcd.remove_all")}</a>
</div>
{if "ULTIMATE"|fn_allowed_for}
{$ab__mcd_show_company=true}
{/if}
{include file="pickers/categories/picker.tpl"
picker_id=$picker_id
input_name="ab__md[links][category][`$exclude`]"
display_input_id="ab__md[links][category][`$exclude`]"
item_ids=implode(',',$ab__mcd_desc.links.category.$exclude|default:[]|array_keys)
multiple=true
ab__mcd_show_company=$ab__mcd_show_company
}
</div>
</div>
<div id="content_feature_variant" class="hidden">
<div class="control-group">
<label class="control-label" for="ab__md_feature_variant_status">{__("ab__mcd.feature_variant_status")}</label>
<div class="controls">
<input type="hidden" name="ab__md[settings][feature_variant][status]" value="D"/>
<input type="checkbox" id="ab__md_feature_variant_status" name="ab__md[settings][feature_variant][status]" value="A" {if $ab__mcd_desc.settings.feature_variant.status == "A"}checked="checked"{/if}/>
<p class="muted">{__("ab__mcd.feature_variant_status.tooltip")}</p>
</div>
</div>
<div class="include_feature_variant">
{include file="common/subheader.tpl" title=__("ab__mcd.include_feature_variant")}
{include file="addons/ab__multiple_cat_descriptions/feature_variants_picker/picker.tpl"
show_add_button=true
multiple=true
item_ids=implode(',',$ab__mcd_desc.links.feature_variant.$include|default:[]|array_keys)
view_mode="list"
data_id="include"
input_name="ab__md[links][feature_variant][`$include`]"
checkbox_name="ab__md[links][feature_variant][`$include`]"
no_item_text=__("no_data")
}
</div>
<div class="exclude_feature_variant">
{include file="common/subheader.tpl" title=__("ab__mcd.exclude_feature_variant")}
{include file="addons/ab__multiple_cat_descriptions/feature_variants_picker/picker.tpl"
show_add_button=true
multiple=true
item_ids=implode(',',$ab__mcd_desc.links.feature_variant.$exclude|default:[]|array_keys)
view_mode="list"
data_id="exclude"
input_name="ab__md[links][feature_variant][`$exclude`]"
checkbox_name="ab__md[links][feature_variant][`$exclude`]"
no_item_text=__("no_data")
}
</div>
</div>
<div id="content_page" class="hidden">
<div class="control-group">
<label class="control-label" for="ab__md_page_status">{__("ab__mcd.page_status")}</label>
<div class="controls">
<input type="hidden" name="ab__md[settings][page][status]" value="D"/>
<input type="checkbox" id="ab__md_page_status" name="ab__md[settings][page][status]" value="A" {if $ab__mcd_desc.settings.page.status == "A"}checked="checked"{/if}/>
<p class="muted">{__("ab__mcd.page_status.tooltip")}</p>
</div>
</div>
<div class="include_page">
{include file="common/subheader.tpl" title=__("ab__mcd.include_page")}
{include file="pickers/pages/picker.tpl"
show_add_button=true
multiple=true
item_ids=implode(',',$ab__mcd_desc.links.page.$include|default:[]|array_keys)
data_id="include"
input_name="ab__md[links][page][`$include`]"
checkbox_name="ab__md[links][page][`$include`]"
no_item_text=__("no_data")
extra_url="&get_tree=multi_level&page_type[]=B&page_type[]=T"
}
</div>
<div class="exclude_page">
{include file="common/subheader.tpl" title=__("ab__mcd.exclude_page")}
{include file="pickers/pages/picker.tpl"
show_add_button=true
multiple=true
item_ids=implode(',',$ab__mcd_desc.links.page.$exclude|default:[]|array_keys)
data_id="exclude"
input_name="ab__md[links][page][`$exclude`]"
checkbox_name="ab__md[links][page][`$exclude`]"
no_item_text=__("no_data")
extra_url="&get_tree=multi_level&page_type[]=B&page_type[]=T"
}
</div>
</div>
{if fn_allowed_for("MULTIVENDOR:ULTIMATE")}
<div class="hidden" id="content_storefronts">
{include file="pickers/storefronts/picker.tpl"
multiple=true
input_name="ab__md[storefront_ids]"
item_ids=$ab__mcd_desc.storefront_ids
data_id="storefront_ids"
but_meta="pull-right"
no_item_text=__("all_storefronts")
but_text=__("add_storefronts")
}
<!--content_tab_storefronts--></div>
{/if}
{hook name="ab__mcd_items:tabsbox"}{/hook}
</div>
{if $id}
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__mcd_items.update]" but_role="action" but_target_form="update_ab__mcd_items_form_{$id}" but_meta="cm-submit" save=$id}
{/capture}
{else}
<div class="buttons-container">
{if !$allow_save && $shared_product != "Y"}
{assign var="hide_first_button" value=true}
{/if}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__mcd_items.update]" but_meta='cm-reset-link' cancel_action="close" extra="" hide_first_button=$hide_first_button save=$id}
</div>
{/if}
</form>
{if $id}
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox track=true}
{/if}
{/capture}
{if $id}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__multiple_cat_descriptions" active_href="ab__mcd_items.manage{if $item_type}?item_type={$item_type}{/if}"}
{include file="common/mainbox.tpl"
title_start=__("ab__multiple_cat_descriptions")|truncate:40
title_end = __("ab__mcd_items.`$item_type`")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
sidebar=$smarty.capture.sidebar
adv_buttons=$smarty.capture.adv_buttons
select_languages=true
content_id=$content_id}
{else}
{$smarty.capture.mainbox nofilter}
{/if}
