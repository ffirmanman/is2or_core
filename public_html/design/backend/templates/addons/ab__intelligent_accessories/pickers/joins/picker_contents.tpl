{if !$smarty.request.extra}
<script type="text/javascript">
(function(_, $) {
_.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');
var display_type = '{$smarty.request.display|escape:javascript nofilter}';
$.ceEvent('on', 'ce.formpost_companies_form', function(frm, elm) {
var joins = {
};
if ($('input.cm-item:checked', frm).length > 0) {
$('input.cm-item:checked', frm).each( function() {
var id = $(this).val();
joins[id] = {
'%name' : "<a href='"+fn_url("ab__ia_joins.update&separate=Y&join_id="+id)+"' target='_blank'>"+$('#ab__ia_join_' + id).html()+"</a>",
'%base_category' : $('#ab__ia_base_category_' + id).html(),
};
});
{literal}
$.cePicker('add_js_item', frm.data('caResultId'), joins, 'm', {
'{join_id}': '%id',
'{name}': '%name',
'{base_category}': '%base_category'
});
{/literal}
if (display_type != 'radio') {
$.ceNotification('show', {
type: 'N',
title: _.tr('notice'),
message: _.tr('text_items_added'),
message_state: 'I'
});
}
}
return false;
});
}(Tygh, Tygh.$));
</script>
{/if}
<form action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post" name="companies_form">
{include file="common/pagination.tpl" div_id="pagination_`$data_id`"}
<div class="table-responsive-wrapper">
<table width="100%" class="table table-middle table--relative table-responsive">
<thead>
<tr>
<th width="1%" class="center">
{if $smarty.request.display != "radio"}
{include file="common/check_items.tpl"}</th>
{/if}
<th>{__("ab__ia_name")}</th>
<th>{__("ab__ia_base_category")}</th>
</tr>
</thead>
{foreach $ab__ia_joins as $join}
<tr>
<td class="center" data-th="">
{if $smarty.request.display == "radio"}
<input type="radio" name="{$smarty.request.checkbox_name|default:"variant_ids"}" value="{$join.join_id}" class="radio" />
{else}
<input type="checkbox" name="{$smarty.request.checkbox_name|default:"variant_ids"}[{$join.join_id}]" value="{$join.join_id}" class="cm-item" />
{/if}
</td>
<td data-th="{__("ab__ia_name")}" id="ab__ia_join_{$join.join_id}">{$join.name}{*<span class="muted"><span class="small">{$variant.feature}</span></span>*}</td>
<td data-th="{__("ab__ia_base_category")}" id="ab__ia_base_category_{$join.join_id}">{$join.base_category_id|fn_get_category_name}</td>
</tr>
{foreachelse}
<tr class="no-items">
<td colspan="3"><p>{__("no_data")}</p></td>
</tr>
{/foreach}
</table>
</div>
{include file="common/pagination.tpl" div_id="pagination_`$data_id`"}
<div class="buttons-container">
{if $smarty.request.display == "radio"}
{assign var="but_close_text" value=__("choose")}
{else}
{assign var="but_close_text" value=__("ab__ia.add_joins_and_close")}
{assign var="but_text" value=__("ab__ia.add_joins")}
{/if}
{include file="buttons/add_close.tpl" is_js=$smarty.request.extra|fn_is_empty}
</div>
</form>
