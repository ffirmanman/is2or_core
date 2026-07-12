{if !$product_type->isFieldAvailable("tabs_content")}
{if 'ab__product_sets.view'|fn_check_view_permissions}
{if !'ab__product_sets.manage'|fn_check_view_permissions}{assign var="hide_delete_button" value="true"}{/if}
<div class="hidden {if !'ab__product_sets.manage'|fn_check_view_permissions}cm-hide-inputs{/if}" id="content_ab__product_sets">
<table id="table_ab__product_sets" class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<th width="2%"></th>
<th width="5%">{__("ab__ps.form.pos")}</th>
<th width="50%">{__("ab__ps.form.title")}</th>
<th class="right" width="25%">{__("ab__ps.form.status")}</th>
<th width="15%">&nbsp;</th>
</tr>
</thead>
{foreach from=$product_data.ab__product_sets item="ab__ps_set" key="_key"}
<tbody id="box_ab__ps_{$key}" class="cm-row-status-{$ab__ps_set.status|lower}">
<tr>
<td width="2%">
<span id="on_ab__ps_set_extra_{$_key}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination"><span class="exicon-expand"></span></span>
<span id="off_ab__ps_set_extra_{$_key}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination"><span class="exicon-collapse"></span></span>
</td>
<td>
<input type="hidden" name="product_data[ab__product_sets][{$_key}][set_id]" value="{$ab__ps_set.set_id}" />
<input type="text" name="product_data[ab__product_sets][{$_key}][pos]" value="{$ab__ps_set.pos}" class="input-micro" />
</td>
<td>
<input type="text" name="product_data[ab__product_sets][{$_key}][set]" value="{$ab__ps_set.set}" class="input-large" />
</td>
<td class="right">
{include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$ab__ps_set.set_id status=$ab__ps_set.status hidden=true object_id_name="set_id" table="ab__product_sets"}
</td>
<td class="nowrap right">
{include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
</td>
</tr>
<tr class="cr-table-detail" id="ab__ps_set_extra_{$_key}">
<td colspan="5">
{include file="pickers/products/picker.tpl" input_name="product_data[ab__product_sets][`$_key`][products]" data_id="ab__ps_set_`$_key`_products" item_ids=$ab__ps_set.products type="links"}
</td>
</tr>
</tbody>
{/foreach}
{if 'ab__product_sets.manage'|fn_check_view_permissions && !$is_shared_product}
{math equation="x+1" x=$_key|default:0 assign="new_key"}
<div id="add_condition" class="btn-toolbar pull-right">
{include file="common/tools.tpl" hide_tools=true tool_onclick="fn_ab__ps_add_set('`$new_key`')" prefix="simple" link_text=__("ab__ps.form.add_set")}
</div>
<script>
function fn_ab__ps_add_set(key)
{
if (typeof fn_ab__ps_add_set.key == 'undefined') {
fn_ab__ps_add_set.key = key;
} else {
fn_ab__ps_add_set.key++;
}
$.ceAjax('request', fn_url('ab__product_sets.add_set?key=' + fn_ab__ps_add_set.key), {
callback: function (data) {
$('#table_ab__product_sets').append(data.text);
}
});
}
</script>
{/if}
<!--table_ab__product_sets--></table>
</div>
{/if}
{/if}