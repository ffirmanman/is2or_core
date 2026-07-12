{if $runtime.company_id && "ULTIMATE"|fn_allowed_for || !"ULTIMATE"|fn_allowed_for}
{capture name="join_add"}
{include file="addons/ab__intelligent_accessories/views/ab__ia_joins/update.tpl"
return_url=$config.current_url
base_category_id=$category_data.category_id
}
{/capture}
<div class="btn-toolbar clearfix cm-toggle-button">
{if is_array($ab__ia_joins) and !empty($ab__ia_joins)}
<div class="pull-left shift-left">
{include file="buttons/button.tpl" but_text=__("ab__ia_update_cache_category") but_role="action" but_onclick="fn_ab__ia_update_cache(`$category_data.category_id`);" but_meta="btn-primary"}
</div>
{/if}
<div class="pull-right shift-left">
{include file="common/popupbox.tpl"
id="join_add"
content=$smarty.capture.join_add
text=__("ab__ia_popup_add")
act="create"
but_text=__("ab__ia_popup_add")
icon='icon-plus'
}
</div>
</div>
{if is_array($ab__ia_joins) and !empty($ab__ia_joins)}
{hook name="ab__ia_joins:list"}{/hook}
{foreach from=$ab__ia_joins item="i" key="k" name="ab__ia_items"}
{$groups[$i.group_id] = true}
{$capture_name="group_`$i.group_id`"}
{capture name=$capture_name}
{$smarty.capture.$capture_name nofilter}
<tr class="cm-row-item">
{hook name="ab__ia_joins:list_item"}{/hook}
<td>{$i.name}</td>
<td>{$i.joined_category_id|fn_get_category_name}</td>
<td>{$i.amount_of_rules|default:"-"}</td>
<td>{$i.price_from|default:0}-{$i.price_to|default:0}</td>
<td>{$i.shuffle_products}</td>
<td>{$i.only_in_stock}</td>
<td>
{assign var="products_sorting" value=$list_products_sorting[$i.products_sorting]}
{include file="common/tooltip.tpl" tooltip=$products_sorting}{$i.products_sorting}
</td>
<td>{$i.max_view_products}</td>
<td>{$i.position}</td>
<td>{if !$i.start_update}-{else}
{$i.start_update|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</br>
{$i.end_update - $i.start_update} sec
{/if}
</td>
<td class="right nowrap">
<div class="hidden-tools">
{capture name="tools_list"}
<li>{include file="common/popupbox.tpl"
id="join_`$k`"
text=__("ab__ia_popup_edit", ["[name]" => $i.name])
act="edit"
href="ab__ia_joins.update?join_id=`$k`&base_category_id=`$category_data.category_id`&return_url=`$config.current_url|escape:url`"
}
</li>
<li>{btn type="list" text=__("ab__ia_update_on_page") href="ab__ia_joins.update?separate=Y&join_id=`$k`&base_category_id=`$category_data.category_id`"}</li>
<li>{btn type="list" text=__("ab__ia_update_join_cache") class="cm-post" href="ab__ia_data.update_join_cache?join_id=`$k`&redirect_url={"`$config.current_url`&selected_section=ab__ia_tab"|escape:url}"}</li>
<li>{btn type="list" text=__("ab__ia_clone") class="cm-post" href="ab__ia_joins.clone?join_id=`$k`&return_url=`$config.current_url|escape:url`"}</li>
<li>{btn type="list" text=__("ab__ia_delete") class="cm-confirm" href="ab__ia_joins.delete?join_id=`$k`&return_url=`$config.current_url|escape:url`"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td class="right nowrap">
{include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$k status=$i.status hidden=true object_id_name="join_id" table="ab__ia_joins" hidden=false non_editable=!fn_check_permissions("tools", "update_status", "admin", "GET", ["table" => "ab__ia_joins"]) hidden=true}
</td>
</tr>
{/capture}
{/foreach}
{foreach $groups as $group_id =>$dummy}
{$capture_name="group_`$group_id`"}
{include file="common/subheader.tpl" title=$links_groups.$group_id.name|default:__("ab__ia.groups.without_group") target="#ab__ia_group_`$group_id`"}
<div class="collapsed in" id="{"ab__ia_group_`$group_id`"}">
<table class="table table-middle cm-progressbar-status" width="100%">
<thead class="cm-first-sibling">
<tr>
{hook name="ab__ia_joins:list_header"}{/hook}
<th width="15%">{__("ab__ia_name")}</th>
<th width="15%">{__("ab__ia_joined_category")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.joined_category.tooltip")}</th>
<th width="5%">{__("ab__ia_amount_of_rules")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.amount_of_rules.tooltip")}</th>
<th width="5%">{__("ab__ia_prices")}{include file="common/tooltip.tpl" tooltip=__("ab__ia_prices__tooltip")}</th>
<th width="5%">{__("ab__ia_shuffle_products")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.shuffle_products.tooltip")}</th>
<th width="5%">{__("ab__ia_only_in_stock")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.only_in_stock.tooltip")}</th>
<th width="5%">{__("ab__ia_products_sorting")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.products_sorting.tooltip")}</th>
<th width="5%">{__("ab__ia_max_view_products")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.max_view_products.tooltip")}</th>
<th width="5%">{__("ab__ia_position_short")}</th>
<th width="10%">{__("ab__ia_update_cache_time")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.update_cache_time.tooltip")}</th>
<th width="5%">&nbsp;</th>
<th width="5%">&nbsp;</th>
</tr>
</thead>
<tbody>
{$smarty.capture.$capture_name nofilter}
</tbody>
</table>
</div>
{/foreach}
{else}
<p class="no-items">{__("ab__ia_no_data")}</p>
{/if}
{else}
<p>{__("ab__ia.category.select_store")}</p>
{/if}
