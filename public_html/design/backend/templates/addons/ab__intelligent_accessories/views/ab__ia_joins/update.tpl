{if $ab__ia_join}
{assign var="id" value=$ab__ia_join.join_id}
{assign var="return_url" value=$smarty.request.return_url}
{assign var="base_category_id" value=$smarty.request.base_category_id}
{else}
{assign var="id" value=0}
{/if}
{assign var="allow_save" value=true}
{if $separate}
{script src="js/tygh/tabs.js"}
{/if}
{if $separate}{capture name="mainbox"}{/if}
<div id="content_group{$id}">
<div class="tabs cm-j-tabs{if $separate} cm-track{/if}">
<ul class="nav nav-tabs">
<li id="tab_join_{$id}" class="cm-js {if $smarty.request.selected_section == "tab_join_`$id`"}active{/if}"><a>{__("ab__ia_popup_tab_join")}</a></li>
{if $id}
<li id="tab_rules_{$id}" class="cm-js {if $smarty.request.selected_section == "tab_rules_`$id`"}active{/if}"><a>{__("ab__ia_popup_tab_rules")}</a></li>
{/if}
</ul>
</div>
<form action="{""|fn_url}" method="post" id="update_ab__ia_joins_form_{$id}" name="update_ab__ia_joins_form_{$id}" class="form-horizontal form-edit cm-disable-empty-files" enctype="multipart/form-data">
<input type="hidden" name="redirect_url" value="{$return_url}{if !$separate}&selected_section=ab__ia_tab{/if}" />
<input type="hidden" name="join_id" value="{$id}" />
<input type="hidden" name="category_id" value="{$base_category_id}" />
<input type="hidden" name="selected_section" value="{$smarty.request.selected_section}" >
{if $separate}
<input type="hidden" name="separate" value="Y" >
{/if}
<input type="hidden" name="join_data[base_category_id]" value="{$base_category_id}" />
<div class="cm-tabs-content" id="tabs_content_{$id}">
<div id="content_tab_join_{$id}">
<fieldset>
{hook name="ab__ia_joins:join_name"}
<div class="control-group">
<label class="control-label" for="elm_join_name_{$id}">{__("ab__ia_name")}</label>
<div class="controls">
<input class="span8" type="text" name="join_data[name]" value="{$ab__ia_join.name}" id="elm_join_name_{$id}" />
</div>
</div>
{/hook}
<div class="control-group">
<label class="control-label cm-required" for="elm_join_joined_category_id_{$id}">{__("ab__ia_joined_category")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.joined_category.tooltip")}:</label>
<div class="controls">
{if $ab__ia_join.joined_category_id > 0}
<input class="input-large" disabled="disabled" type="text" value="{$ab__ia_join.joined_category_id|fn_get_category_name}" />
<input type="hidden" id="elm_join_joined_category_id_{$id}" name="join_data[joined_category_id]" value="{$ab__ia_join.joined_category_id}" />
{__('ab__ia.joined_category.info')}
{else}
{include file="pickers/categories/picker.tpl" data_id="elm_join_joined_category_id_`$id`" input_name="join_data[joined_category_id]" item_ids=$ab__ia_join.joined_category_id|default:"0" hide_link=true hide_delete_button=true }
{/if}
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_shuffle_products_{$id}">{__("ab__ia_shuffle_products")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.shuffle_products.tooltip")}</label>
<div class="controls">
<input type="hidden" name="join_data[shuffle_products]" value="N" />
<input type="checkbox" name="join_data[shuffle_products]" value="Y" {if ($ab__ia_join.shuffle_products == "Y" or (!$id and $addons.ab__intelligent_accessories.shuffle_products_default == 'Y'))}checked="checked"{/if} id="elm_join_shuffle_products_{$id}" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_only_in_stock_{$id}">{__("ab__ia_only_in_stock")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.only_in_stock.tooltip")}</label>
<div class="controls">
<input type="hidden" name="join_data[only_in_stock]" value="N" />
<input type="checkbox" name="join_data[only_in_stock]" value="Y" {if ($ab__ia_join.only_in_stock == "Y" or (!$id and $addons.ab__intelligent_accessories.only_in_stock_default == 'Y'))}checked="checked"{/if} id="elm_join_only_in_stock_{$id}" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_show_in_add_to_cart_{$id}">{__("ab__ia_show_in_add_to_cart")}</label>
<div class="controls">
<input type="hidden" name="join_data[show_in_add_to_cart]" value="N" />
<input type="checkbox" name="join_data[show_in_add_to_cart]" value="Y" {if ($ab__ia_join.show_in_add_to_cart == "Y" or (!$id and $addons.ab__intelligent_accessories.show_in_add_to_cart_default == 'Y'))}checked="checked"{/if} id="elm_join_show_in_add_to_cart_{$id}" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_show_in_cart_{$id}">{__("ab__ia_show_in_cart")}</label>
<div class="controls">
<input type="hidden" name="join_data[show_in_cart]" value="N" />
<input type="checkbox" name="join_data[show_in_cart]" value="Y" {if ($ab__ia_join.show_in_cart == "Y" or (!$id and $addons.ab__intelligent_accessories.show_in_cart_default == 'Y'))}checked="checked"{/if} id="elm_join_show_in_cart_{$id}" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_price_{$id}">{__("ab__ia_prices")}{include file="common/tooltip.tpl" tooltip=__("ab__ia_prices__tooltip")}</label>
<div class="controls">
<input class="input-small" type="text" value="{$ab__ia_join.price_from|default:$addons.ab__intelligent_accessories.price_from_default}" size="1" name="join_data[price_from]">
-
<input class="input-small" type="text" value="{$ab__ia_join.price_to|default:$addons.ab__intelligent_accessories.price_to_default}" size="1" name="join_data[price_to]">
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_links_group_{$id}">{__("ab__ia_links_group")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.groups.tooltip")}</label>
<div class="controls">
<select id="elm_join_links_group_{$id}" name="join_data[group_id]" class="span8">
<option value="0">{__("ab__ia.groups.without_group")}</option>
{foreach from=$links_groups key=k item=v}
<option value="{$k}" {if $ab__ia_join.group_id == $k}selected="selected"{/if}>{$v.name}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_join_tab_url_{$id}">{__("ab__ia.tab_url")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.tab_url.tooltip")}</label>
<div class="controls">
<select id="elm_join_tab_url_{$id}" name="join_data[tab_url]" class="span8" onchange="Tygh.$('.elm_join_custom_url_{$id}').toggleClass('hidden',this.value != 'custom_url');">
{foreach ['not_use','use_joined_category','custom_url'] as $tab_url}
<option value="{$tab_url}" {if $ab__ia_join.tab_url == $tab_url}selected="selected"{/if}>{__("ab__ia.tab_url.`$tab_url`")}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group elm_join_custom_url_{$id} {if $ab__ia_join.tab_url != "custom_url"}hidden{/if}">
<label class="control-label" for="elm_join_custom_url_{$id}">{__("ab__ia.tab_url.custom_url")}</label>
<div class="controls">
<input class="span8" type="text" name="join_data[custom_url]" value="{$ab__ia_join.custom_url}" id="elm_join_custom_url_{$id}" />
</div>
</div>
<div class="control-group">
<label class="control-label cm-required" for="elm_join_products_sorting_{$id}">{__("ab__ia_products_sorting")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.products_sorting.tooltip")}</label>
<div class="controls">
<select id="elm_join_products_sorting_{$id}" name="join_data[products_sorting]" class="span8">
<option value="">---</option>
{foreach from=$list_products_sorting key=k item=v}
<option value="{$k}" {if ($ab__ia_join.products_sorting == $k or (!$id and $k == $addons.ab__intelligent_accessories.products_sorting_default))}selected="selected"{/if}>{$v}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label cm-required" for="elm_join_max_view_products_{$id}">{__("ab__ia_max_view_products")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.max_view_products.tooltip")}</label>
<div class="controls">
<select name="join_data[max_view_products]" class="input-small" id="elm_join_max_view_products_{$id}">
{foreach from=1|range:$smarty.const.AB__IA_JOIN_MAX_VIEW_PRODUCTS item='i'}
<option value="{$i}" {if $ab__ia_join.max_view_products == $i or (!$id and $i == $addons.ab__intelligent_accessories.join_max_view_products_default)} selected="selected"{/if}>{$i}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label cm-required" for="elm_join_position_{$id}">{__("ab__ia_position")}</label>
<div class="controls">
<input type="text" name="join_data[position]" value="{$ab__ia_join.position|default:0}" class="input-micro" id="elm_join_position_{$id}" />
</div>
</div>
{include file="common/select_status.tpl" input_name="join_data[status]" id="elm_join_status_{$id}" obj_id=$id obj=$ab__ia_join hidden=true}
</fieldset>
</div>
{if $id}
<div class="hidden" id="content_tab_rules_{$id}">
{include file="addons/ab__intelligent_accessories/views/ab__ia_joins/components/rules.tpl" join_id=$id rules=$ab__ia_join.rules}
{hook name="ab__ia_joins:rules_list"}{/hook}
</div>
{/if}
</div>
<div class="buttons-container">
{if $id}
{if !$allow_save && $shared_product != "Y"}
{assign var="hide_first_button" value=true}
{/if}
{/if}
{if $separate}
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__ia_joins.update]" but_target_form="update_ab__ia_joins_form_`$id`" hide_second_button=true save=true}
{/capture}
{else}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__ia_joins.update]" cancel_action="close" extra="" hide_first_button=$hide_first_button save=$id}
{/if}
</div>
</form>
</div>
{if $separate}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__intelligent_accessories"}
{include file="common/mainbox.tpl" title_start=__("ab__intelligent_accessories")|truncate:40 title_end=__("ab__ia_popup_edit", ["[name]" => $ab__ia_join.name]) content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons}
{/if}
