{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="manage_chains_form" id="manage_chains_form">
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}
{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
{if $chains}
{script src="js/tygh/tabs.js"}
<table width="100%" class="table table-middle table-objects">
<thead>
<tr>
<th width="1%" class="left">
{include file="common/check_items.tpl" check_statuses=''|fn_get_default_status_filters:false}
</th>
<th width="45%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th width="35%"><a class="cm-ajax" href="{"`$c_url`&sort_by=generator&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("ab__bt.generator")}{if $search.sort_by == "generator"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</th>
<th width="5%">&nbsp;</th>
<th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
</tr>
</thead>
{foreach from=$chains item=chain}
<tr class="cm-row-status-{$chain.status|lower}">
<td class="left"><input type="checkbox" name="chain_ids[]" value="{$chain.chain_id}" class="checkbox cm-item cm-item-status-{$chain.status|lower}" {if $chain.generator_id}disabled{/if}/></td>
<td>
<a class="row-status cm-external-click" data-ca-external-click-id="opener_abt_group_bt_{$chain.chain_id}">{$chain.name nofilter}</a>
</td>
<td>
{if $chain.generator_id}
<a href="{"ab__bt_generators.update?generator_id={$chain.generator_id}"|fn_url}" target="_blank">
{__("open_action")}
</a>
{/if}
</td>
<td class="nowrap">
<div class="hidden-tools">
{capture name="tools_list"}
{if $chain.generator_id}
<li>{include file="common/popupbox.tpl" id="abt_group_bt_`$chain.chain_id`" act="edit" link_text=__("view") href="buy_together.update?chain_id=`$chain.chain_id`" no_icon_link=true link_class="abt__yt_bt-edit_form"}</li>
{else}
<li>{include file="common/popupbox.tpl" id="abt_group_bt_`$chain.chain_id`" act="edit" link_text=__("edit") href="buy_together.update?chain_id=`$chain.chain_id`" no_icon_link=true link_class="abt__yt_bt-edit_form"}</li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__buy_together.delete?chain_id=`$chain.chain_id`" method="POST"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td class="right nowrap">
{if !$chain.generator_id}
{include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$chain.chain_id status=$chain.status hidden=false object_id_name="chain_id" table="buy_together"}
{/if}
</td>
</tr>
{/foreach}
</table>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
{capture name="buttons"}
{capture name="tools_list"}
{if $chains}
<li>{btn type="delete_selected" dispatch="dispatch[ab__buy_together.m_delete]" form="manage_chains_form"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/capture}
<div class="clearfix">
{include file="common/pagination.tpl" div_id=$smarty.request.content_id}
</div>
<!--manage_chains_form--></form>
{/capture}
{capture name="sidebar"}
{include file="addons/ab__buy_together/views/ab__buy_together/components/chains_search_form.tpl" dispatch="ab__buy_together.manage"}
{/capture}
<script>
(function(_, $) {
$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
if (elms.length) {
var elem = elms[0];
var form = elem.find("form");
var input_html = "<input type='hidden' name='return_url' value='" + _.current_url + "'>";
form.append(input_html);
}
});
})(Tygh, Tygh.$);
</script>
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__buy_together"}
{include file="common/mainbox.tpl" title_start=__("ab__buy_together")|truncate:40 title_end=__("ab__buy_together.manage") content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar select_languages=true content_id="manage_chains"}