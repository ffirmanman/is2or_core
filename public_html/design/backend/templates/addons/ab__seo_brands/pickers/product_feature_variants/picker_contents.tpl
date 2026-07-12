{if !$smarty.request.extra}
<script>
(function(_, $) {
_.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');
var display_type = '{$smarty.request.display|escape:javascript nofilter}';
$.ceEvent('on', 'ce.formpost_variants_form', function(frm, elm) {
var variants = {};
if ($('input.cm-item:checked', frm).length > 0) {
$('input.cm-item:checked', frm).each( function() {
var id = $(this).val();
variants[id] = $('#variant_title_' + id).text();
});
{literal}
$.cePicker('add_js_item', frm.data('caResultId'), variants, 'v', {
'{variant_id}': '%id',
'{variant}': '%item'
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
{include file="addons/ab__seo_brands/views/ab__sb_feature_variants/components/variants_search_form.tpl" dispatch="ab__sb_feature_variants.feature_variants_picker" extra="<input type=\"hidden\" name=\"result_ids\" value=\"pagination_`$smarty.request.data_id`\">" put_request_vars=true form_meta="cm-ajax" in_popup=true}
<form action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post" name="variants_form">
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
{if $variants}
<div class="table-responsive-wrapper">
<table width="100%" class="table table-middle table--relative table-responsive">
<thead>
<tr>
<th width="1%" class="center">
{if $smarty.request.display == "checkbox"}
{include file="common/check_items.tpl"}
{/if}
</th>
<th>{__("name")}</th>
<th>{__("feature")}</th>
<th>{__("status")}</th>
</tr>
</thead>
{foreach $variants as $variant}
<tr>
<td class="left" data-th="">
{if $smarty.request.display == "checkbox"}
<input type="checkbox" name="add_variants[]" value="{$variant.variant_id}" class="cm-item" />
{elseif $smarty.request.display == "radio"}
<input type="radio" name="selected_variant_id" value="{$variant.variant_id}" />
{/if}
</td>
<td id="variant_title_{$variant.variant_id}" data-th="{__("name")}">{$variant.variant}</td>
<td data-th="{__("feature")}">{$variant.description nofilter}</td>
<td class="center" data-th="{__("status")}">
{if $variant.status == "A"}
{__("active")}
{else}
{__("disabled")}
{/if}
</td>
</tr>
{/foreach}
</table>
</div>
{else}
<div class="items-container"><p class="no-items">{__("no_data")}</p></div>
{/if}
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
{if $variants}
<div class="buttons-container">
{if $smarty.request.display == "radio"}
{assign var="but_close_text" value=__("choose")}
{else}
{assign var="but_close_text" value=$button_names.but_close_text|default:__("ab__sb.add_variants_and_close")}
{assign var="but_text" value=$button_names.but_text|default:__("ab__sb.add_variants")}
{/if}
{include file="buttons/add_close.tpl" is_js=$smarty.request.extra|fn_is_empty}
</div>
{/if}
</form>
