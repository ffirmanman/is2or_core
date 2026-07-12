<div class="sidebar-row">
<h6>{__("search")}</h6>
<form action="{""|fn_url}" name="items_search_form" method="get">
<input type="hidden" name="item_type" value="{$item_type}">
<div class="sidebar-field ">
<label for="elm_title">{__("ab__mcd.search.title")}</label>
<input type="text" name="title" id="elm_title" value="{$search.title}" size="30"/>
</div>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<div class="sidebar-field ">
<label for="elm_description">{__("ab__mcd.search.description")}</label>
<input type="text" name="description" id="elm_description" value="{$search.description}" size="30"/>
</div>
{/if}
<div class="sidebar-field">
<label>{__("ab__mcd.search.category")}</label>
{if "categories"|fn_show_picker:$smarty.const.CATEGORY_THRESHOLD}
{if $search.cid}
{assign var="s_cid" value=$search.cid}
{else}
{assign var="s_cid" value="0"}
{/if}
<div class="controls">
{include file="pickers/categories/picker.tpl" company_ids=$picker_selected_companies data_id="location_category" input_name="cid" item_ids=$s_cid hide_link=true hide_delete_button=true default_name=__("all_categories") extra=""}
</div>
{else}
{if $runtime.mode == "picker"}
{assign var="trunc" value="38"}
{else}
{assign var="trunc" value="25"}
{/if}
<select name="cid">
<option value="0" {if $category_data.parent_id == "0"}selected="selected"{/if}>- {__("all_categories")} -</option>
{foreach from=0|fn_get_plain_categories_tree:false:$smarty.const.CART_LANGUAGE:$picker_selected_companies item="search_cat" name=search_cat}
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
<label for="elm_type">{__("ab__mcd.search.status")}</label>
{assign var="items_status" value=""|fn_get_default_statuses:false}
<div class="controls">
<select name="status" id="elm_type">
<option value="">{__("all")}</option>
{foreach from=$items_status key=key item=status}
<option value="{$key}" {if $search.status == $key}selected="selected"{/if}>{$status}</option>
{/foreach}
</select>
</div>
</div>
{hook name="ab__mcd_items:search_form"}{/hook}
<div class="sidebar-field">
<input class="btn" type="submit" name="dispatch[ab__mcd_items.manage]" value="{__("search")}">
</div>
</form>
</div>