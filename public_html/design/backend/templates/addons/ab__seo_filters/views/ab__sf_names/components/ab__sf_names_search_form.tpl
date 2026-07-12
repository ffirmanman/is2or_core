<div class="sidebar-row">
<h6>{__("search")}</h6>
<form action="{""|fn_url}" name="ab__sf_names_search_form" method="get" class="{$form_meta}">
{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{$extra nofilter}
{capture name="simple_search"}
<div class="sidebar-field">
<label for="name">{__("ab__sf.names.search_form.name")} [{$smarty.const.DESCR_SL}]:</label>
<input type="text" name="name" id="name" value="{$search.name}" size="20">
</div>
<div class="sidebar-field">
<label for="name">{__("ab__sf.names.search_form.features_hash")}:</label>
<input type="text" name="features_hash" id="features_hash" value="{$search.features_hash}" size="20">
</div>
<div class="sidebar-field">
<label>{__("ab__sf.names.search_form.by_features")}:</label>
<input type="hidden" name="feature_id" value="" />
{include file="addons/ab__seo_filters/views/components/features_picker.tpl"
input_name="feature_id[]"
item_ids=$search.feature_id
}
</div>
<div class="sidebar-field">
<label>{__("ab__sf.names.search_form.by_fixed")}:</label>
<select name="s_fixed">
<option value="">---</option>
<option value="{"ABSFConfigs::PAGE_STATE_FIXED"|enum}" {if $search.s_fixed == "ABSFConfigs::PAGE_STATE_FIXED"|enum}selected="selected"{/if}>{__("ab__sf.names.search_form.fixed")}</option>
<option value="{"ABSFConfigs::PAGE_STATE_UNFIXED"|enum}" {if $search.s_fixed == "ABSFConfigs::PAGE_STATE_UNFIXED"|enum}selected="selected"{/if}>{__("ab__sf.names.search_form.not_fixed")}</option>
<option value="{"ABSFConfigs::PAGE_STATE_HIDDEN"|enum}" {if $search.s_fixed == "ABSFConfigs::PAGE_STATE_HIDDEN"|enum}selected="selected"{/if}>{__("ab__sf.names.search_form.hidden")}</option>
</select>
</div>
<div class="sidebar-field">
<label>{__("ab__sf.names.search_form.show_in_breadcrumbs")}:</label>
<select name="show_in_breadcrumbs">
<option value="ALL">---</option>
<option value="Y" {if $search.show_in_breadcrumbs == "Y"}selected="selected"{/if}>{__("ab__sf.names.search_form.show_in_breadcrumbs.displayed")}</option>
<option value="N" {if $search.show_in_breadcrumbs == "N"}selected="selected"{/if}>{__("ab__sf.names.search_form.show_in_breadcrumbs.not_displayed")}</option>
</select>
</div>
<div class="sidebar-field">
<label>{__("ab__sf_names.search_form.by_categories")}:</label>
{if "categories"|fn_show_picker:$smarty.const.CATEGORY_THRESHOLD}
{if $search.category_id}
{assign var="s_cid" value=$search.category_id}
{else}
{assign var="s_cid" value="0"}
{/if}
{include file="pickers/categories/picker.tpl" company_ids=$picker_selected_companies data_id="location_category" input_name="category_id" item_ids=$s_cid hide_link=true hide_delete_button=true default_name=__("all_categories") extra=""}
{else}
{if $runtime.mode == "picker"}
{assign var="trunc" value="38"}
{else}
{assign var="trunc" value="25"}
{/if}
<select name="category_id">
<option value="0" {if $category_data.parent_id == "0"}selected="selected"{/if}>---</option>
{foreach from=0|fn_get_plain_categories_tree:false:$smarty.const.DESCR_SL:$picker_selected_companies item="search_cat" name=search_cat}
{if $search_cat.store}
{if !$smarty.foreach.search_cat.first}
</optgroup>
{/if}
<optgroup label="{$search_cat.category}">
{assign var="close_optgroup" value=true}
{else}
<option value="{$search_cat.category_id}" {if $search_cat.disabled}disabled="disabled"{/if} {if $search.category_id == $search_cat.category_id}selected="selected"{/if} title="{$search_cat.category}">{$search_cat.category|escape|truncate:$trunc:"...":true|indent:$search_cat.level:"&#166;&nbsp;&nbsp;&nbsp;&nbsp;":"&#166;--&nbsp;" nofilter}</option>
{/if}
{/foreach}
{if $close_optgroup}
</optgroup>
{/if}
</select>
{/if}
</div>
<div class="sidebar-field">
<label for="subcats">{__("ab__sf.rule.subcats")}</label>
<input type="hidden" name="subcats" value="N" />
<input type="checkbox" name="subcats" id="subcats" value="Y" {if $search.subcats == "Y"}checked="checked"{/if} />
</div>
<hr>
<a class="text-button nobg cm-reset-link" style="float: right;">{__("reset")}</a>
{/capture}
{include file="common/advanced_search.tpl"
simple_search=$smarty.capture.simple_search
dispatch=$dispatch
in_popup=false no_adv_link=true}
</form>
</div><hr>