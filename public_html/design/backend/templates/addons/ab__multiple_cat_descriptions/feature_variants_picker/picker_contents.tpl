{if !$smarty.request.extra}
<script type="text/javascript">
(function(_, $) {
_.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');
var display_type = '{$smarty.request.display|escape:javascript nofilter}';
$.ceEvent('on', 'ce.formpost_companies_form', function(frm, elm) {
var companies = {};
if ($('input.cm-item:checked', frm).length > 0) {
$('input.cm-item:checked', frm).each( function() {
var id = $(this).val();
companies[id] = {
'%text' : $('#feature_variant_' + id).html()
};
});
{literal}
$.cePicker('add_js_item', frm.data('caResultId'), companies, 'm', {
'{variant_id}': '%id',
'{variant}': '%text'
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
<div class="adv-search">
<form action="{""|fn_url}" name="feature_variants_search_form" class="group" method="get">
<input type="hidden" name="result_ids" value="{"pagination_$data_id"}">
<input type="hidden" name="data_id" value="{"$data_id"}">
<div class="sidebar-field ">
<label for="elm_value">{__("ab__mcd.feature_variant")}</label>
<input type="text" name="q" id="elm_value" value="{$search.value}" size="30"/>
</div>
<div class="sidebar-field ">
<label for="ab__mcd_feature_id">{__("ab__mcd.feature")}</label>
<select name="feature_id" id="ab__mcd_feature_id">
<option value="">{__("all")}</option>
{foreach $product_features as $feature}
<option value="{$feature.feature_id}">{$feature.description}</option>
{/foreach}
</select>
</div>
<div class="sidebar-field in-popup">
<input class="btn cm-ajax" type="submit" name="dispatch[product_features.picker]" value="{__("search")}">
</div>
</form>
</div>
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
<th>{__("ab__mcd.feature_variant")}</th>
<th>{__("id")}</th>
</tr>
</thead>
{foreach from=$feature_variants item="variant"}
<tr>
<td class="center" data-th="">
{if $smarty.request.display == "radio"}
<input type="radio" name="{$smarty.request.checkbox_name|default:"variant_ids"}" value="{$variant.id}" class="radio" />
{else}
<input type="checkbox" name="{$smarty.request.checkbox_name|default:"variant_ids"}[{$variant.id}]" value="{$variant.id}" class="cm-item" />
{/if}
</td>
<td data-th="{__("ab__mcd.feature_variant")}" id="feature_variant_{$variant.id}">{$variant.text}&nbsp;<span class="muted"><span class="small">{$variant.feature}</span></span></td>
<td data-th="{__("id")}">&nbsp;<span>{$variant.id}</span>&nbsp</td>
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
{assign var="but_close_text" value=__("ab__mcd.add_feature_variants_and_close")}
{assign var="but_text" value=__("ab__mcd.add_feature_variants")}
{/if}
{include file="buttons/add_close.tpl" is_js=$smarty.request.extra|fn_is_empty}
</div>
</form>
