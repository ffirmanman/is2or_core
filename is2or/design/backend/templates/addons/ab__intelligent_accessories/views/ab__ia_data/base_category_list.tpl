{capture name="mainbox"}
<hr>
{if is_array($base_category_list) and !empty($base_category_list)}
<table class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<th width="20%">{__("ab__ia_base_category")}{include file="common/tooltip.tpl" tooltip=__("ab__ia_base_category__tooltip")}</th>
<th width="80%">{__("ab__ia_joined_category")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.joined_category.tooltip")}</th>
</tr>
</thead>
<tbody>
{foreach from=$base_category_list item="c" key="k"}
<tr class="cm-row-item">
<td><a target="_blank" href="{"categories.update&category_id=`$k`&selected_section=ab__ia_tab"|fn_url}">{$c.name}</a></td>
<td>{implode("; ",$c.items)}</td>
</tr>
{/foreach}
</tbody>
</table>
{else}
<p class="no-items">{__("ab__ia_no_data")}</p>
{/if}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__intelligent_accessories"}
{include file="common/mainbox.tpl" title_start=__("ab__intelligent_accessories")|truncate:40 title_end=__("ab__ia_base_category_list") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
