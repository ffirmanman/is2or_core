{if !$smarty.request.extra}
<script type="text/javascript">
(function (_, $) {
_.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');
var display_type = '{$smarty.request.display|escape:javascript nofilter}';
$.ceEvent('on', 'ce.formpost_ab__sf_names_form', function (frm, elm) {
var sf_names = {};
if ($('input.cm-item:checked', frm).length > 0) {
$('input.cm-item:checked', frm).each(function () {
var id = $(this).val();
if (display_type === "radio"){
sf_names[id] = id +' ' + $('#ab__sf_name_category_' + id).text() + ' #' + $('#ab__sf_name_features_hash_' + id + ' a').text();
}else{
sf_names[id] = {
'%cat_name': $('#ab__sf_name_category_' + id).text(),
'%features_hash': $('#ab__sf_name_features_hash_' + id).html(),
};
}
});
{literal}
$.cePicker('add_js_item', frm.data('caResultId'), sf_names, 'sfn_', {
'{sf_id}': '%id',
'{category}': '%cat_name',
'{features_hash}': '%features_hash',
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
<div class="group">
{include file="addons/ab__seo_filters/views/ab__sf_names/components/ab__sf_names_search_form.tpl" dispatch="ab__sf_names.picker" extra="<input type=\"hidden\" name=\"data_id\" value=\"`$smarty.request.data_id`\"><input type=\"hidden\" name=\"result_ids\" value=\"pagination_`$smarty.request.data_id`\"><input type=\"hidden\" name=\"get_tree\" value=\"\"><input type=\"hidden\" name=\"root\" value=\"\">" put_request_vars=true form_meta="cm-ajax" in_popup=true}
</div>
</div>
<form action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post"
name="ab__sf_names_form">
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
<div class="table-responsive-wrapper">
<table width="100%" class="table table-middle table--relative table-responsive">
<thead>
<tr>
<th width="1%" class="center">
{if $smarty.request.display != "radio"}
{include file="common/check_items.tpl"}</th>
{/if}
<th>{__("id")}</th>
<th>{__("ab__sf.name.category_id")}</th>
<th>{__("ab__sf.name.features_hash")}</th>
</tr>
</thead>
{if $ab__sf_names|is_bool}{$ab__sf_names=[]}{/if}
{foreach from=$ab__sf_names item="ab__sf_name"}
<tr>
<td class="center" data-th="">
{if $smarty.request.display == "radio"}
<input type="radio" name="{$smarty.request.checkbox_name|default:"variant_ids"}"
value="{$ab__sf_name.sf_id}" class="radio cm-item"/>
{else}
<input type="checkbox"
name="{$smarty.request.checkbox_name|default:"variant_ids"}[{$variant.id}]"
value="{$ab__sf_name.sf_id}" class="cm-item"/>
{/if}
</td>
<td data-th="{__("id")}">&nbsp;<span>{$ab__sf_name.sf_id}</span>&nbsp</td>
<td data-th="{__("ab__sf.name.category_id")}"
id="ab__sf_name_category_{$ab__sf_name.sf_id}">{$ab__sf_name.category_id|fn_get_category_name}</td>
<td data-th="{__("ab__sf.name.features_hash")}"
id="ab__sf_name_features_hash_{$ab__sf_name.sf_id}"><a
href="{"ab__sf_names.update&sf_id={$ab__sf_name.sf_id}"|fn_url}" target="_blank">{$ab__sf_name.features_hash}</a>
<p style="font-size:12px; color:#333;">{strip}
{if !empty($ab__sf_name.tooltip)}
{foreach from=$ab__sf_name.tooltip key="f" item="v" name="t"}
<b>{$f}</b>: {', '|implode:$v}{if !$smarty.foreach.t.last}; {/if}
{/foreach}
{/if}
{/strip}
</p>
</td>
</tr>
{foreachelse}
<tr class="no-items">
<td colspan="4"><p>{__("no_data")}</p></td>
</tr>
{/foreach}
</table>
</div>
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
<div class="buttons-container">
{if $smarty.request.display == "radio"}
{assign var="but_close_text" value=__("choose")}
{else}
{assign var="but_close_text" value=__("ab__sf.name.picker.add_ab__sf_names_and_close")}
{assign var="but_text" value=__("ab__sf.name.picker.add_ab__sf_names")}
{/if}
{include file="buttons/add_close.tpl" is_js=$smarty.request.extra|fn_is_empty}
</div>
</form>
