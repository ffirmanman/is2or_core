{if $smarty.const.AJAX_REQUEST}
<div class="{if $selected_section !== "ab__extended_comparison_wishlist"} hidden{/if}" id="content_ab__extended_comparison_wishlist">
<p class="muted">{__("ab__ecw.added_by_addon")}</p>
<script>
(function(_, $){
$.ceEvent('on', 'ce.formpost_product_update_form', function ($form, $submitBtn) {
var ec_table = $('#ab__ecw_often_compared_{$object_id}');
var ec_inputs = ec_table.find('select, input, textarea');
ec_inputs.css('display', 'none');
ec_inputs.appendTo($form);
});
})(Tygh, Tygh.$);
</script>
{/if}
{capture name="mainbox"}
{$hide_inputs = !"ab__extended_comparison_wishlist.update"|fn_check_view_permissions}
<form action="{""|fn_url}" method="post" id="ab__ecw_form_{$object_id}" name="ab__ecw_form_{$object_id}" enctype="multipart/form-data"{if $hide_inputs} class="cm-hide-inputs"{/if}>
{if !$smarty.const.AJAX_REQUEST}
<input type="hidden" name="product_id" value="{$object_id}">
{/if}
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_ab__ecw_often_compared_{$object_id}"}
{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents_ab__ecw_often_compared_{$object_id}"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
<div class="items-container">
<div id="ab__ecw_often_compared_{$object_id}" class="table-responsive-wrapper">
<table width="100%" class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
<thead>
<tr>
{hook name="ab__extended_comparison_wishlist:often_compared_table_header"}
{if !$smarty.const.AJAX_REQUEST}
<th width="1%" class="left">
{include file="common/check_items.tpl"}
</th>
{/if}
<th width="8%"><a class="cm-ajax" href="{"`$c_url`&sort_by=compared_product_id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents_ab__ecw_often_compared_{$object_id}">{__("id")}{if $search.sort_by == "compared_product_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th width="52%">{__("name")}</th>
{*<th width="20%">{__("ab__ecw.group_by")}</th>*}
<th width="9%" class="right mobile-hide">&nbsp;</th>
<th width="30%"><a class="cm-ajax" href="{"`$c_url`&sort_by=count&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents_ab__ecw_often_compared_{$object_id}">{__("ab__ecw.compares_qty")}{if $search.sort_by == "count"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
{/hook}
</tr>
</thead>
<tbody>
{foreach $products as $product}
<tr{if !$product.product} class="cm-hide-inputs"{/if}>
{hook name="ab__extended_comparison_wishlist:often_compared_table_row"}
{if !$smarty.const.AJAX_REQUEST}
<td class="left mobile-hide">
<input type="checkbox" name="ab__ecw[ids][]" value="{$product.compared_product_id}" class="cm-item" />
</td>
{/if}
<td data-th="{__("id")}" class="muted">#{$product.compared_product_id}</td>
<td data-th="{__("name")}">
<input type="hidden" name="ab__ecw[comparison_info][{$product.compared_product_id}][product_id]" value="{$product.product_id}">
<input type="hidden" name="ab__ecw[comparison_info][{$product.compared_product_id}][compared_product_id]" value="{$product.compared_product_id}">
<input type="hidden" name="ab__ecw[comparison_info][{$product.compared_product_id}][list_id]" value="{$product.list_id}">
<input type="hidden" name="ab__ecw[comparison_info][{$product.compared_product_id}][group_by]" value="{$product.group_by}">
{if $product.product}
<a href="{"products.update?product_id=`$product.compared_product_id`"|fn_url}" target="_blank">{$product.product}</a>
{else}
<div style="padding:5px;text-align:left" class="no-items">{fn_get_product_name($product.compared_product_id)}</div>
{/if}
</td>
{*<td data-th="{__("ab__ecw.group_by")}">*}
{*{__("ab__ecw.group_by.`$product.group_by`")}*}
{*</td>*}
<td class="mobile-hide">
{capture name="tools_list"}
{if !$hide_inputs}
<li>{btn type="list" class="cm-confirm" text=__("delete") href="ab__extended_comparison_wishlist.delete?product_id=`$product.product_id`&compared_product_id=`$product.compared_product_id`&group_by=`$product.group_by`" method="POST"}</li>
{/if}
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td data-th="{__("ab__ecw.compares_qty")}">
<input title="{__("ab__ecw.compares_qty")}: {$product.product}" name="ab__ecw[comparison_info][{$product.compared_product_id}][count]" type="text" class="cm-value-integer" value="{$product.count}">
</td>
{/hook}
</tr>
{foreachelse}
{$colspan = 4}
{if !$smarty.const.AJAX_REQUEST}
{$colspan = $colspan + 1}
{/if}
<tr><td class="no-items" colspan="{$colspan}">{__("no_data")}</td></tr>
{/foreach}
</tbody>
</table>
</div>
</div>
{include file="common/pagination.tpl" div_id="pagination_contents_ab__ecw_often_compared_{$object_id}"}
</form>
{/capture}
{capture name="buttons"}
{if $products && !$hide_inputs}
{include file="buttons/save.tpl" but_name="dispatch[ab__extended_comparison_wishlist.m_update]" but_role="action" but_target_form="ab__ecw_form_{$object_id}" but_meta="cm-submit"}
{/if}
{/capture}
{if $smarty.const.AJAX_REQUEST}
{$smarty.capture.mainbox nofilter}
<!--content_ab__extended_comparison_wishlist--></div>
{else}
{$title_end = fn_get_product_name($object_id)}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__extended_comparison_wishlist"}
{include file="common/mainbox.tpl"
title_start=__("ab__extended_comparison_wishlist")|truncate:40
title_end=$title_end
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}
{/if}