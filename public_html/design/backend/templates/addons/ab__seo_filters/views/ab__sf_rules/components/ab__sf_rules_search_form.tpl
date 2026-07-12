<div class="sidebar-row">
<h6>{__("search")}</h6>
<form action="{""|fn_url}" name="ab__sf_rules_search_form" method="get" class="">
{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{capture name="simple_search"}
<div class="sidebar-field">
<label>{__("ab__sf.rules.search_form.by_features")}</label>
<input type="hidden" name="feature_id" value="" />
{include file="addons/ab__seo_filters/views/components/features_picker.tpl"
input_name="feature_id[]"
item_ids=$search.feature_id
}
</div>
<div class="sidebar-field">
<label>{__("ab__sf.rules.search_form.by_categories")}</label>
{if "categories"|fn_show_picker:$smarty.const.CATEGORY_THRESHOLD}
{if $search.cid}
{assign var="s_cid" value=$search.cid}
{else}
{assign var="s_cid" value="0"}
{/if}
{include file="pickers/categories/picker.tpl" company_ids=$picker_selected_companies data_id="location_category" input_name="cid" item_ids=$s_cid hide_link=true hide_delete_button=true default_name=__("all_categories") extra=""}
{else}
{if $runtime.mode == "picker"}
{assign var="trunc" value="38"}
{else}
{assign var="trunc" value="25"}
{/if}
<select name="cid">
<option value="0" {if $category_data.parent_id == "0"}selected="selected"{/if}>---</option>
{foreach from=0|fn_get_plain_categories_tree:false:$smarty.const.DESCR_SL:$picker_selected_companies item="search_cat" name=search_cat}
{if $search_cat.store}
{if !$smarty.foreach.search_cat.first}
</optgroup>
{/if}
<optgroup label="{$search_cat.category}">
{assign var="close_optgroup" value=true}
{else}
<option value="{$search_cat.category_id}" {if $search_cat.disabled}disabled="disabled"{/if} {if $search.cid == $search_cat.category_id}selected="selected"{/if} title="{$search_cat.category}">{$search_cat.category|escape|truncate:$trunc:"...":true|indent:$search_cat.level:"&#166;&nbsp;&nbsp;&nbsp;&nbsp;":"&#166;--&nbsp;" nofilter}</option>
{/if}
{/foreach}
{if $close_optgroup}
</optgroup>
{/if}
</select>
{/if}
</div>
<div class="sidebar-field">
<label for="autogenerate">{__("ab__sf.rule.autogenerate")}</label>
<input type="hidden" name="autogenerate" value="N" />
<input type="checkbox" name="autogenerate" id="autogenerate" value="Y" {if $search.autogenerate == "Y"}checked="checked"{/if} />
</div>
<a class="text-button nobg cm-reset-link" style="float: right;">{__("reset")}</a>
{/capture}
{include file="common/advanced_search.tpl"
simple_search=$smarty.capture.simple_search
dispatch=$dispatch
in_popup=false no_adv_link=true}
</form>
</div><hr>