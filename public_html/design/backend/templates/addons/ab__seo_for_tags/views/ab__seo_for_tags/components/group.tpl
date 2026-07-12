<script>
function fn_ab__sft_add_condition(id, skip_select, type)
{
var new_group = false,
new_id = $('#container_' + id).cloneNode(0, true, true).str_replace('container_', ''),
$new_container = $('#container_' + new_id),
$input = null;
skip_select = skip_select || false;
$new_container.prevAll('[id^="container_"]').each(function() {
var $this = $(this);
$input = $('input[name^=tag_data]:first', $this).clone();
if ($input.length !== 0) {
if ($input.val() !== "undefined" && $input.val() !== '') {
$input.val('');
}
return false;
}
});
if ($input === null || !$input.get(0)) {
$input = $('input[name^=tag_data]:first', $new_container.parents('li:first')).clone();
$('.no-node.no-items', $new_container.parents('ul:first')).hide();
if (!$input.get(0)) {
$input = $('<input type="hidden" name="tag_data[ab__sft_conditions][conditions][0][condition]" value="" />');
} else {
new_group = true;
}
}
var _name = $input.prop('name').length > 0 ? $input.prop('name') : $input.data('caInputName');
var val = parseInt(_name.match(/(.*)\[(\d+)\]/)[2]);
var name = new_group ? _name : _name.replace(/(.*)\[(\d+)\]/, '$1[' + (val + 1) +']');
$input.attr('name', name);
$new_container.append($input);
name = name.replace(/\[(\w+)\]$/, '');
if (new_group) {
name += '[conditions][1]';
}
$new_container.prev().removeClass('cm-last-item');
$new_container.addClass('cm-last-item').show();
if (skip_select == false) {
$('#container_' + new_id + ' select').prop('id', new_id).prop('name', name);
} else {
$new_container.empty();
return {
new_id: new_id,
name: name
};
}
}
</script>
{assign var="prefix_md5" value=$prefix|md5}
<input type="hidden" name="{$prefix}[fake]" value="" disabled="disabled" />
<ul class="conditions-tree-group cm-row-item">
<li class="no-node{if $root}-root{/if} clearfix">
{include file="addons/ab__seo_for_tags/views/ab__seo_for_tags/components/group_header.tpl" hide_add_buttons=$hide_inputs}
</li>
{foreach $group.conditions as $condition_data}
<li id="container_condition_{$prefix_md5}_{$condition_data@key}" class="cm-row-item{if $condition_data@last} cm-last-item{/if}">
{include file="addons/ab__seo_for_tags/views/ab__seo_for_tags/components/condition.tpl" prefix="`$prefix`[conditions][`$condition_data@key`]" elm_id="condition_`$prefix_md5`_`$condition_data@key`" condition_data=$condition_data}
</li>
{foreachelse}
<li class="no-node no-items">
<p class="no-items">{__('no_items')}</p>
</li>
{/foreach}
<li id="container_add_condition_{$prefix_md5}" class="hidden cm-row-item">
<div class="conditions-tree-node">
<select onchange="Tygh.$.ceAjax('request', fn_url('ab__seo_for_tags.dynamic?prefix=' + encodeURIComponent(this.name) + '&condition=' + this.value + '&elm_id=' + this.id), {$ldelim}result_ids: 'container_' + this.id{$rdelim})" id="add_condition_{$prefix_md5}">
<option value=""> -- </option>
{foreach $schema as $condition}
<option value="{$condition@key}">{__("ab__seo_for_tags.conditions.names.`$condition@key`")}</option>
{/foreach}
</select>
</div>
</li>
</ul>