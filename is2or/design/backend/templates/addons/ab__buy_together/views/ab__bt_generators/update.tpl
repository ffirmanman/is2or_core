{$id=$item_data.generator_id|default:0}
{if !$company_id}
{$company_id=""|fn_get_default_company_id}
{/if}
{script src="js/tygh/node_cloning.js"}
{script src="js/tygh/picker.js"}
{$c_url = $config.current_url|escape:url}
{capture name="mainbox"}
<form id='form' action="{""|fn_url}" method="post" name="generator_form" class="form-horizontal form-edit cm-disable-empty-files">
{capture name="tabsbox"}
<input type="hidden" name="generator_id" value="{$id}">
<div id="content_general">
{include file="common/subheader.tpl" title=__("ab__bt.form.header.general") target="#ab__bt-general"}
<div id="ab__bt-general" class="in collapse">
{if "MULTIVENDOR"|fn_allowed_for}
{include file="views/companies/components/company_field.tpl"
name="item_data[company_id]"
id="elm_company_id"
selected=$company_id
required=true
disable_company_picker = $company_id && $id
zero_company_id_name_lang_var="none"
}
{/if}
<div class="control-group">
<label for="elm_buy_together_name" class="control-label cm-required">{__("name")}{include file="common/tooltip.tpl" tooltip=__('ab__bt.placeholder_tooltip')}:</label>
<div class="controls">
<input type="text" name="item_data[name]" id="elm_buy_together_name" size="55" value="{$item_data.name}" class="input-large">
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_description">{__("description")}{include file="common/tooltip.tpl" tooltip=__('ab__bt.placeholder_tooltip')}:</label>
<div class="controls">
<textarea id="elm_buy_together_description" name="item_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long">{$item_data.description}</textarea>
</div>
</div>
{include file="common/select_status.tpl" input_name="item_data[status]" obj=$item_data hidden=false}
<div class="control-group">
<label class="control-label" for="elm_buy_together_type">{__("ab__bt.type")}:</label>
<div class="controls">
<select class="" name="item_data[type]" id="elm_buy_together_type" {if $item_data.type} disabled{/if}>
<option value="general" {if $item_data.type == "general"}selected{/if}>{__("ab__bt.general")}</option>
{if $addons.ab__intelligent_accessories.status == 'A'}
<option value="ia" {if $item_data.type == "ia"}selected{/if}>{__("block_ab__intelligent_accessories")}</option>
{/if}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_description">{__("ab__bt.updated")}:</label>
<div class="controls">
<div class="controls-text">
{$item_data.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_description">{__("ab__bt.last_generation")}:</label>
<div class="controls">
<div class="controls-text">
{if $item_data.last_generation_timestamp}
{$item_data.last_generation_timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
{else}
{__("ab__bt.no_generated_chains")}
{/if}
</div>
</div>
</div>
{if $item_data.last_generation_timestamp && $id}
<div class="control-group">
<label class="control-label" for="elm_buy_together_description">{__("ab__bt.list_of_base_products")}:</label>
<div class="controls">
<div class="controls-text">
<a href="{"products.manage?ab__bt_generator={$id}"|fn_url}" target="_blank">{__("show")}</a>
</div>
</div>
</div>
{/if}
</div>
{if $id > 0}
{$cron_company_id=fn_get_runtime_company_id()}
{if $cron_company_id}
{assign var="cron_cmd" value="20 10 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__bt_generators.generate --generator_id=`$id` --company_id=`$cron_company_id` --p"}
{else}
{assign var="cron_cmd" value="20 10 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__bt_generators.generate --generator_id=`$id` --p"}
{/if}
{include file="common/widget_copy.tpl" widget_copy_title=__("ab__bt.generate_link") widget_copy_code_text=$cron_cmd}
{/if}
<hr>
{capture name="additional_langs"}
{strip}
{foreach $languages as $item}
{if $smarty.const.CART_LANGUAGE == $item.lang_code}
{continue}
{/if}
<div class="control-group">
<label for="elm_buy_together_name_{$item.lang_code}" class="control-label">{__("name")}[{$item.name}]:</label>
<div class="controls">
<input type="text" name="item_data[translates][{$item.lang_code}][name]" id="elm_buy_together_name_{$item.lang_code}" size="55" value="{$item_data.translates[$item.lang_code].name}" class="input-large">
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_description_{$item.lang_code}">{__("description")}[{$item.name}]:</label>
<div class="controls">
<textarea id="elm_buy_together_description_{$item.lang_code}" name="item_data[translates][{$item.lang_code}][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long">{$item_data.translates[$item.lang_code].description nofilter}</textarea>
</div>
</div>
{/foreach}
{/strip}
{/capture}
{if $smarty.capture.additional_langs|trim}
{include file="common/subheader.tpl" title=__("ab__bt.form.header.additional_langs") target="#ab__bt-additional_langs" meta="collapsed"}
<div id="ab__bt-additional_langs" class="collapse">
{$smarty.capture.additional_langs nofilter}
</div>
<hr>
{/if}
{if $company_id && $id}
{include file="common/subheader.tpl" title=__("ab__bt.form.header.combination_products") target="#ab__bt-combination_products"}
<div id="ab__bt-combination_products">
<div class="items-container">
<table class="table" id="ab__bt_additional_products">
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/product_row.tpl"
pickers_data=$item_data.base_products
name_prefix="item_data[base_products]"
hide_delete=true
base_product=true
type=$item_data.type
}
<tr class="td-no-bg">
<td></td>
<td class="ab-bt-combination-title" colspan="2">{__("ab__bt.additional_products_list")}:</td>
</tr>
<tr>
<th width="2%"></th>
<th width="18%"></th>
<th width="70%">{__("title")}{include file="common/tooltip.tpl" tooltip=__("ab__bt.dialog_title.tooltip")}</th>
<th width="8%" class=nowrap>{__("required")}{include file="common/tooltip.tpl" tooltip=__("ab__bt.required.tooltip")}</th>
<th width="2%"></th>
</tr>
{$ab__bt_last_id = 0}
{$ab__bt_last_lang_id = 0}
{foreach $item_data.products as $index => $item}
{$ab__bt_last_lang_id = $ab__bt_last_lang_id + 1}
{if $index > $ab__bt_last_id}{$ab__bt_last_id = $index}{/if}
{include file="addons/ab__buy_together/views/ab__bt_generators/components/product_row.tpl"
pickers_data=$item_data.products[$index]
name_prefix="item_data[products][`$index`]"
title=__("ab__bt.form.header.additional_products",["[product_number]"=>$item@iteration])
section_id="ab__bt-additional_products_{$index}"
type=$item_data.type
}
{/foreach}
<tbody>
<tr>
<td colspan="5">
<div class="ab-bt-picker-container" id="box_ab__bt-additional_products_{$index}">
<div class="ab-bt-add-product btn btn-primary" onclick="getPickers(this.closest('tbody'));">
<i class="icon-plus"></i> {__("add_products")}
</div>
<!--box_ab__bt-additional_products_{$index}--></div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
{/if}
<!--content_general--></div>
<div id="content_settings" class="hidden">
{if !$item_data.date_from && !$item_data.date_to}
{$date_disabled = 'disabled="disabled"'}
{else}
{$date_disabled = false}
{/if}
<div class="control-group">
<label class="control-label" for="elm_use_avail_period">{__("use_avail_period")}:</label>
<div class="controls">
<input type="checkbox" name="avail_period" class="use_avail_period" data-id="abt__ut2" {if !$date_disabled} checked="checked"{/if} value="Y" id="elm_use_avail_period" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_avail_from">{__("avail_from")}:</label>
<div class="controls">
<input type="hidden" name="item_data[date_from]" value="0" />
{include file="common/calendar.tpl" date_id="elm_buy_together_avail_from_abt__ut2" date_name="item_data[date_from]" date_val=$item_data.date_from start_year=$settings.Company.company_start_year extra=$date_disabled}
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_buy_together_avail_till">{__("avail_till")}:</label>
<div class="controls">
<input type="hidden" name="item_data[date_to]" value="0" />
{include file="common/calendar.tpl" date_id="elm_buy_together_avail_till_abt__ut2" date_name="item_data[date_to]" date_val=$item_data.date_to start_year=$settings.Company.company_start_year extra=$date_disabled}
</div>
</div>
<div class="control-group hidden">
<label class="control-label" for="elm_buy_together_promotions">{__("display_in_promotions")}:</label>
<div class="controls">
<input type="hidden" name="item_data[display_in_promotions]" value="N">
<input type="checkbox" name="item_data[display_in_promotions]" id="elm_buy_together_promotions" value="Y" {if $item_data.display_in_promotions == "Y"}checked="checked"{/if}>
</div>
</div>
<!--content_settings--></div>
<script>
var ab__bt_last_id = {$ab__bt_last_id},
ab__bt_last_lang_id = {$ab__bt_last_lang_id};
</script>
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$selected_section}
{capture name="buttons"}
{if $id}
{capture name="tools_list"}
<li>{btn type="list" text=__("ab__bt.form.generate") class="cm-confirm cm-post cm-ajax cm-comet" href="ab__bt_generators.generate?generator_id=`$id`&redirect_url=`$c_url`"}</li>
<li>{btn type="list" text=__("ab__bt.form.calculate_combinations") class="cm-confirm cm-post cm-ajax" href="ab__bt_generators.calculate_combinations?generator_id=`$id`&redirect_url=`$c_url`"}</li>
<li>{btn type="list" class="cm-confirm" text=__("delete") data=["data-ca-confirm-text" => "{__("ab__bt.delete_generator_and_combinations")}"] href="ab__bt_generators.delete?generator_id=`$id`" method="POST"}</li>
{if $item_data.last_generation_timestamp && $id}
<li>{btn type="list" text=__("ab__bt.form.delete_generated") class="cm-confirm cm-post" href="ab__bt_generators.delete_generated?generator_id=`$id`&redirect_url=`$c_url`"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="generator_form" but_name="dispatch[ab__bt_generators.update]" save=$id}
{/capture}
</form>
<script>
let removeSavedSearch = (container) => {
let parentContainer = container.closest('.saved_search_picker');
parentContainer.querySelector('input[name*=saved_search]').value = '';
parentContainer.getElementsByClassName('saved_search_picker_selected')[0].classList.add('hidden');
}
function toggleVisibility (elem) {
if(elem.parentNode.classList.contains('disabled')){
return false;
}
let objectType = elem.dataset.caType;
const container = elem.closest('tbody');
container.getElementsByClassName('add_picker_container')[0].querySelector('[data-ca-type='+objectType+']').parentNode.classList.toggle('disabled');
let pickerContainer = container.querySelector('tr.'+objectType);
if (pickerContainer.classList.contains('hidden')) {
$(':input', pickerContainer).each(function() {
$(this).prop('name', $(this).data('caInputName'));
});
} else {
$(':input[name]', pickerContainer).each(function() {
var $this = $(this),
name = $this.prop('name');
$this.data('caInputName', name)
.attr('data-ca-input-name', name)
.prop('name', '');
});
}
pickerContainer.classList.toggle('hidden');
}
let getPickers = (container)=> {
ab__bt_last_id = typeof ab__bt_last_id === 'undefined' ? 1 : ++ab__bt_last_id;
ab__bt_last_lang_id = typeof ab__bt_last_lang_id === 'undefined' ? 1 : ++ab__bt_last_lang_id;
$.ceAjax('request',
'{"ab__bt_generators.get_pickers"|fn_url nofilter}', {
data:{
name_prefix: "item_data[products]["+ab__bt_last_id+"]",
index: ab__bt_last_lang_id,
company_id: {$company_id},
type:"{$item_data.type}"
},
callback: function(data) {
if(data.pickers !== undefined){
Tygh.$(container).cloneNode(1);
container.innerHTML = data.pickers;
container.classList.add('sortable');
$('#ab__bt_additional_products').sortable( "refresh" );
}
}
}
)
}
(function(_, $) {
_.tr({
ab__bt_from_category: '{__("ab__bt.from_category")|escape:"javascript"}',
ab__bt_ia_used_joins: '{__("ab__bt.ia_used_joins")|escape:"javascript"}'
});
let getIaLinks = () => {
let links = document.querySelectorAll('.ab__ia_joins:not(.hidden) .cm-js-item>td>a:not(.hidden)');
let container = document.getElementsByClassName('ab__bt_ia_joins_list')[0];
container.innerHTML = '';
if(links.length){
let content = '';
links.forEach((el, idx, array)=>{
let linkContent = '';
linkContent += el.cloneNode(true).outerHTML;
let nextEl = el.nextSibling;
if(nextEl && nextEl.classList.contains('hidden')){
let clonedCategory = nextEl.cloneNode(true);
clonedCategory.classList.remove('hidden');
linkContent += ' '+_.tr('ab__bt_from_category') + ' ' + clonedCategory.outerHTML;
}
content += ('<li>'+linkContent+'</li>');
})
container.innerHTML = _.tr('ab__bt_ia_used_joins') + ': <ul>' + content + '</ul>';
}
};
{if $item_data.type == 'ia'}
$(_.doc).on('ce:combination:switch', function (event, container, flag) {
if($(container).is('#ab__bt-base_products')){
getIaLinks();
}
}
)
{/if}
$('#ab__bt_additional_products').sortable({
tolerance: 'pointer',
axis: 'y',
handle: '.handler',
items:'> tbody.sortable',
sort: function(event, ui) {
var $target = $(event.target);
if (!/html|body/i.test($target.offsetParent()[0].tagName)) {
var top = event.pageY - $target.offsetParent().offset().top - (ui.helper.outerHeight(true) / 2);
ui.helper.css({
'top':top+'px'
});
}
}
})
$.ceEvent('on', 'dispatch_event_pre', function (e, jelm) {
if (e.type === 'click') {
if (jelm.hasClass('cm-ab-bt-get-search-form')) {
let savedSearchDataInput = jelm.parent().find('input');
let resultIds = $('[name=result_ids]',jelm.parent()).val();
let savedSearch = $('[name*=saved_search]',jelm.parent()).val();;
var url = fn_url('ab__bt_generators.get_search_form');
Tygh.$.ceAjax('request', url, {
cache:false,
data:{
saved_search:savedSearch,
company_id:{$company_id}
},
callback: (data) =>{
$('<div id="content_saved_search_'+resultIds+'" title="'+jelm.attr('title')+'"></div>').appendTo('body')
$('#content_saved_search_'+resultIds).html(data.search_form).ceDialog('open',{
destroyOnClose:true
})
$.commonInit($('#content_saved_search_'+resultIds));
}
});
}
}
});
{literal}
$.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data) {
if (data && data.saved_search) {
let dialog = $.ceDialog('get_last');
let containerId = dialog.attr('id').replace('content_','');
let container = $('#'+containerId);
$('[name*=saved_search]',container).val(data.saved_search);
$('.saved_search_picker_selected',container).removeClass('hidden');
dialog.ceDialog('destroy');
dialog.remove();
}
});
$.ceEvent('on', 'ce.formpre_generator_form', function (form, elm) {
$('.cm-js-item.cm-clone.hidden',form).remove();
$('input[type="hidden"][name^="item_data[products]"][value=""]',form).remove();
})
}(Tygh, Tygh.$));
{/literal}
</script>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__buy_together"}
{if $id}
{$title_end = $item_data.name}
{else}
{$title_end = __("ab__bt.new_generator")}
{/if}
{include file="common/mainbox.tpl" title_start=__("ab__buy_together")|truncate:40 title_end=$title_end content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
