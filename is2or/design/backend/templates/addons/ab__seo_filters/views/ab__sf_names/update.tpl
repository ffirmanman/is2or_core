{assign var="id" value=$n.sf_id|default:0}
{capture name="mainbox"}
<div class="control-group">
<a href="{"ab__sf_names.manage"|fn_url}">{__("ab__sf.all_combinations")}</a>
{if $id}
<a target="_blank" style="display: block; float: right; " href="{"categories.view&category_id=`$n.category_id`&features_hash=`$n.features_hash`"|fn_url:"C":"current":$smarty.const.DESCR_SL}">{__("ab__sf.name.preview")} [{$smarty.const.DESCR_SL}]</a>
{/if}
</div>
{capture name="tabsbox"}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="ab__sf_name_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="sf_id" value="{$id}" />
<input type="hidden" name="selected_section" value="{$smarty.request.selected_section}" />
<div id="content_general">
{assign var="elm" value="category_id"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
{if "categories"|fn_show_picker:$smarty.const.CATEGORY_THRESHOLD}
{if $n.$elm}
{assign var="s_cid" value=$n.$elm}
{else}
{assign var="s_cid" value="0"}
{/if}
{include file="pickers/categories/picker.tpl" company_ids=$picker_selected_companies data_id="{$elm_id}" input_id="{$elm_id}" input_name="`$elm_name`" item_ids=$s_cid hide_link=true hide_delete_button=true default_name=__("all_categories") extra=""}
{else}
{if $runtime.mode == "picker"}
{assign var="trunc" value="38"}
{else}
{assign var="trunc" value="25"}
{/if}
<select name="{$elm_name}" id="{$elm_id}" class="input-large">
<option value="" {if $category_data.parent_id == "0"}selected="selected"{/if}>---</option>
{foreach from=0|fn_get_plain_categories_tree:false:$smarty.const.DESCR_SL:$picker_selected_companies item="search_cat" name=search_cat}
{if $search_cat.store}
{if !$smarty.foreach.search_cat.first}
</optgroup>
{/if}
<optgroup label="{$search_cat.category}">
{assign var="close_optgroup" value=true}
{else}
<option value="{$search_cat.category_id}" {if $search_cat.disabled}disabled="disabled"{/if} {if $n.$elm == $search_cat.category_id}selected="selected"{/if} title="{$search_cat.category}">{$search_cat.category|escape|truncate:$trunc:"...":true|indent:$search_cat.level:"&#166;&nbsp;&nbsp;&nbsp;&nbsp;":"&#166;--&nbsp;" nofilter}</option>
{/if}
{/foreach}
{if $close_optgroup}
</optgroup>
{/if}
</select>
{/if}
</div>
</div>
{assign var="elm" value="features_hash"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
<p style="font-size:12px; color:#333;">{strip}
{if !empty($n.tooltip)}
{foreach from=$n.tooltip key="f" item="v" name="t"}
<b>{$f}</b>: {', '|implode:$v}{if !$smarty.foreach.t.last}; {/if}
{/foreach}
{/if}
{/strip}</p>
</div>
</div>
{assign var="elm" value="name"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large cm-seo-check-changed" />
<div class="hidden cm-seo-check-changed-block">
<input type="hidden" name="ab__sf_name_data[seo_create_redirect]" value="N" />
<label class="checkbox inline">
<input type="checkbox" name="ab__sf_name_data[seo_create_redirect]" value="Y" checked="checked"/>{__("seo.create_redirect")}
</label>
</div>
</div>
</div>
{assign var="elm" value="fixed"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<label class="radio inline" for="{$elm_id}_{"ABSFConfigs::PAGE_STATE_FIXED"|enum}">
<input type="radio" name="{$elm_name}" id="{$elm_id}_{"ABSFConfigs::PAGE_STATE_FIXED"|enum}" value="{"ABSFConfigs::PAGE_STATE_FIXED"|enum}" {if $n.$elm == "ABSFConfigs::PAGE_STATE_FIXED"|enum or !$id}checked="checked"{/if}>{__("ab__sf.page_state.fixed")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.page_state.fixed.tooltip")}
</label>
<label class="radio inline" for="{$elm_id}_{"ABSFConfigs::PAGE_STATE_UNFIXED"|enum}">
<input type="radio" name="{$elm_name}" id="{$elm_id}_{"ABSFConfigs::PAGE_STATE_UNFIXED"|enum}" value="{"ABSFConfigs::PAGE_STATE_UNFIXED"|enum}" {if $n.$elm == "ABSFConfigs::PAGE_STATE_UNFIXED"|enum}checked="checked"{/if}>{__("ab__sf.page_state.unfixed")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.page_state.unfixed.tooltip")}
</label>
<label class="radio inline" for="{$elm_id}_{"ABSFConfigs::PAGE_STATE_HIDDEN"|enum}">
<input type="radio" name="{$elm_name}" id="{$elm_id}_{"ABSFConfigs::PAGE_STATE_HIDDEN"|enum}" value="{"ABSFConfigs::PAGE_STATE_HIDDEN"|enum}" {if $n.$elm == "ABSFConfigs::PAGE_STATE_HIDDEN"|enum}checked="checked"{/if}>{__("ab__sf.page_state.hidden")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.page_state.hidden.tooltip")}
</label>
</div>
</div>
{assign var="elm" value="tag_h1"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="page_title"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="description"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<textarea placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" class="input-large cm-wysiwyg">{$n.$elm}</textarea>
</div>
</div>
{assign var="elm" value="short_description"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<textarea placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" class="input-large cm-wysiwyg">{$n.$elm}</textarea>
</div>
</div>
{assign var="elm" value="meta_description"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<textarea placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" class="input-large">{$n.$elm}</textarea>
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="meta_keywords"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<textarea placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" class="input-large">{$n.$elm}</textarea>
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="breadcrumb"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="show_in_breadcrumbs"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label">{__("ab__sf.name.`$elm`")}</label>
<div class="controls">
<input type="hidden" name="{$elm_name}" value="N" />
<input type="checkbox" name="{$elm_name}" id="{$elm_id}" value="Y" {if $n.$elm == "Y" or !$id}checked="checked"{/if} />
</div>
</div>
{assign var="elm" value="product_breadcrumb"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-required cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
{if !empty($patterns.$elm.value)}<br><code pattern-id="{$elm_id}" class="hand" title="{__("ab__sf.pattern.copy")}">»</code><code>{$patterns.$elm.value}</code>{/if}
</div>
</div>
{assign var="elm" value="is_noindex"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label">{__("ab__sf.name.`$elm`")}{include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="hidden" name="{$elm_name}" value="N" />
<input type="checkbox" name="{$elm_name}" id="{$elm_id}" value="Y" {if $n.$elm == "Y"}checked="checked"{/if} />
</div>
</div>
{assign var="elm" value="canonical_id"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
{include file="addons/ab__seo_filters/pickers/ab__sf_names_picker/picker.tpl"
show_add_button=true
data_id=$data_id
multiple=false
display="radio"
item_ids=[$n.$elm]
input_name=$elm_name
checkbox_name=$elm_name
no_item_text=__("no_data")
extra_url="&get_all_companies=0"
}
</div>
</div>
</div>
<div id="content_category_view">
{assign var="elm" value="show_in_subcategory_block"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="hidden" name="{$elm_name}" value="N" />
<input type="checkbox" name="{$elm_name}" id="{$elm_id}" value="Y" {if $n.$elm == "Y" or !$id}checked="checked"{/if} />
</div>
</div>
{assign var="elm" value="name_in_subcategory_block"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm}" size="25" class="input-large" />
</div>
</div>
{assign var="elm" value="position_in_subcategory_block"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_name_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-trim">{__("ab__sf.name.`$elm`")} {include file="common/tooltip.tpl" tooltip=__("ab__sf.name.`$elm`.tooltip")}</label>
<div class="controls">
<input type="text" name="{$elm_name}" id="{$elm_id}" value="{$n.$elm|default:0}" size="25" class="input-mini" />
</div>
</div>
<div class="control-group">
<label class="control-label">{__("ab__sf.name.icon")}:</label>
<div class="controls">
{include file="common/attach_images.tpl"
image_name="ab__sf_icon"
image_object_type="ab__sf_icon"
image_key=$id
hide_titles=true
no_detailed=true
hide_alt=true
image_pair=$n.ab__sf_icon}
</div>
</div>
</div>
{if $addons.ab__multiple_cat_descriptions.status == 'A' && 'ab__mcd_descs.manage'|fn_check_view_permissions:'GET'}
<div id="content_ab__mcd_tab" class="hidden{if !'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'} cm-hide-inputs{/if}">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/object_picker.tpl" prefix="ab__sf_name_data" ab__mcd_object_id=$id ab__mcd_object_type="ab__seo_filters"}
</div>
{/if}
{hook name="ab__sf_names:tabs_content"}{/hook}
</form>
{if $id}
{hook name="ab__sf_names:tabs_extra"}{/hook}
{/if}
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox group_name=$runtime.controller active_tab=$selected_section track=true}
{/capture}
{capture name="buttons"}
{if !$id}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="ab__sf_name_form" but_name="dispatch[ab__sf_names.update]"}
{else}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__sf_names.update]" but_role="submit-link" but_target_form="ab__sf_name_form" hide_first_button=false hide_second_button=false save=$id}
{capture name="tools_list"}
{if $id}
{assign var="preview" value=__("ab__sf.name.preview")}
<li>{btn type="list" target="_blank" text="`$preview` [`$smarty.const.DESCR_SL`]" class="" href="{"categories.view&category_id=`$n.category_id`&features_hash=`$n.features_hash`"|fn_url:"C":"current":$smarty.const.DESCR_SL}"}</li>
<li class="divider"></li>
{/if}
<li>{btn type="list" text=__("delete") class="cm-confirm cm-post" href="ab__sf_names.delete?sf_id=`$id`"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
{/capture}
{notes}
{__("ab__sf.rule.notes")}
{/notes}
{if !$id}
{assign var="title" value=__("ab__sf.name.add")}
{else}
{assign var="title" value="{__("ab__sf.name.edit")} ID: `$id`"}
{/if}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_filters" active_href="ab__sf_names.manage"}
{include file="common/mainbox.tpl" title_start=__("ab__seo_filters")|truncate:40 title_end=$title content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons select_languages=true}