{if $category_banner_data}
{assign var="id" value=$category_banner_data.category_banner_id}
{else}
{assign var="id" value=0}
{/if}
{$company_id=$category_banner_data.company_id}
{if !$company_id}
{$company_id=""|fn_get_runtime_company_id}
{/if}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit {if ""|fn_check_form_permissions} cm-hide-inputs{/if}" name="category_banner_form" id="category_banner_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="category_banner_id" value="{$id}" />
<input type="hidden" class="cm-no-hide-input" name="category_banner_data[company_id]" value="{$company_id}" />
{include file="common/subheader.tpl" title="{__('ab__cb.form.content_general')}" target="#content_general"}
<div id="content_general" class="in collapse">
<div class="control-group">
<label for="elm_category_banner" class="control-label cm-required">{__("name")}</label>
<div class="controls">
<input type="text" name="category_banner_data[category_banner]" id="elm_category_banner" value="{$category_banner_data.category_banner}" size="25" class="input-large" />
</div>
</div>
<div class="control-group" id="category_banner_categories">
{$rnd=rand()}
<label for="categories_{$rnd}_ids" class="control-label cm-required">{__("categories")}</label>
<div class="controls">
{include file="pickers/categories/picker.tpl" hide_input="Y" rnd=$rnd data_id="categories" input_name="category_banner_data[category_ids]" item_ids=$category_banner_data.category_ids hide_link=true hide_delete_button=true display_input_id="category_ids" disable_no_item_text=true view_mode="list" but_meta="btn" show_active_path=true}
</div>
<!--category_banner_categories--></div>
<div class="control-group">
<label for="elm_include_subcategories" class="control-label">{__("ab__cb.form.include_subcategories")}</label>
<div class="controls">
<input type="hidden" name="category_banner_data[include_subcategories]" value="N" />
<input type="checkbox" name="category_banner_data[include_subcategories]" id="elm_include_subcategories" value="Y" {if $category_banner_data.include_subcategories == "Y"}checked="checked"{/if} />
</div>
</div>
{$list_types = [
"products_multicolumns" => [
"image_name" => "main",
"image_pair_name" => "main",
"allow_full_width" => true
],
"products_without_options" => [
"image_name" => "list_image",
"image_type" => "L",
"image_pair_name" => "list"
],
"short_list" => [
"image_name" => "short_list_image",
"image_type" => "S",
"image_pair_name" => "short_list"
]
]}
{foreach $list_types as $l_name => $l_data}
{$layout_name_type = "`$l_name`_type"}
{$layout_name_block_id = "`$l_name`_block_id"}
{$layout_name_wrapper = "`$l_name`_wrapper"}
{$layout_name_user_class = "`$l_name`_user_class"}
{$layout_name_full_width = "`$l_name`_full_width"}
<hr/>
<div class="control-group">
<p class="clearfix"><b class="control-label">{__("ab__cb.form.list_view_{$l_name}")}</b></p>
<label class="control-label">{__("ab__cb.form.content_type")}</label>
<div class="controls cm-ab--cb-type-switcher">
<label for="image_{$l_name}" class="radio inline">
{__("ab__cb.form.image_type")}
<input id="image_{$l_name}" type="radio" name="category_banner_data[layout_data][{$layout_name_type}]" value="I"
{if $category_banner_data.$layout_name_type === "I" || empty($category_banner_data.$layout_name_type)} checked{/if}>
</label>
<label for="block_{$l_name}" class="radio inline">
{__("ab__cb.form.block_type")}
<input id="block_{$l_name}" type="radio" name="category_banner_data[layout_data][{$layout_name_type}]" value="B"
{if $category_banner_data.$layout_name_type === "B"} checked{/if}>
</label>
</div>
</br>
<div class="controls-B{if $category_banner_data.$layout_name_type !== "B"} hidden{/if}">
<label for="elm_block_{$l_name}" class="control-label">{__("ab__cb.form.block_type")}:</label>
<div class="controls clearfix help-inline-wrap">
{include file="common/popupbox.tpl"
act="general"
id="select_block_{$l_name}"
text=__("select_block")
link_text=__("select_block")
href="block_manager.block_selection?extra_id={$l_name}&selected_location={$categories_selected_location}&ab__cb_is_cb=1"
action="block_manager.block_selection"
opener_ajax_class="cm-ajax cm-ajax-force"
content=""
meta="pull-left"
}
<br><br>
<input type="hidden" name="category_banner_data[layout_data][{$layout_name_block_id}]" id="elm_block_{$l_name}" value="{$category_banner_data.$layout_name_block_id|default:''}" />
<div id="ajax_update_block_{$l_name}" class="clearfix">
{if $category_banner_data.$layout_name_block_id > 0}
{include file="views/block_manager/render/block.tpl" block_data=$blocks[$category_banner_data.$layout_name_block_id] external_render=true}
{/if}
<!--ajax_update_block_{$l_name}--></div>
</div>
{if $l_data.allow_full_width}
<div class="control-group">
<label for="elm_full_width_block_{$l_name}" class="control-label">{__("ab__cb.form.full_width")}</label>
<div class="controls">
<input type="hidden" name="category_banner_data[layout_data][{$layout_name_full_width}]" value="N" />
<input type="checkbox" name="category_banner_data[layout_data][{$layout_name_full_width}]" id="elm_full_width_block_{$l_name}" value="Y" {if $category_banner_data.$layout_name_full_width == "Y"}checked="checked"{/if} />
</div>
</div>
{/if}
<div id="ajax_update_block_wrapper_{$l_name}">
{include
file="addons/ab__category_banners/views/ab__category_banners/components/wrapper.tpl"
suffix=$l_name
wrappers=$blocks[$category_banner_data.$layout_name_block_id]["wrappers"]
selected=$category_banner_data.$layout_name_wrapper
}
<!--ajax_update_block_wrapper_{$l_name}--></div>
<div class="control-group">
<label for="elm_category_banner_{$layout_name_user_class}" class="control-label">{__("user_class")}</label>
<div class="controls">
<input type="text"
name="category_banner_data[layout_data][{$layout_name_user_class}]"
id="elm_category_banner_{$layout_name_user_class}"
value="{$category_banner_data.$layout_name_user_class}"
class="input-large"/>
<p class="muted description">
<span style="opacity: 0.7">{__("ab__cb.user_class_presets")}:</span><br>
{assign var="banner_presets" value=[
__("ab__cb.user_class.with_border") => 'cb-border-box',
__("ab__cb.user_class.color_background") => 'cb-color-box',
__("ab__cb.user_class.gray_background") => 'cb-gray-box',
__("ab__cb.user_class.dark_background") => 'cb-dark-box'
]}
{assign var="preset_index" value=0}
{foreach from=$banner_presets key=label item=value}
<input type="checkbox"
id="{$layout_name_user_class}_preset_{$preset_index}"
{if $category_banner_data.$layout_name_user_class|strpos:$value !== false}checked="checked"{/if}
class="cm-text-toggle btn-group-checkbox__checkbox"
data-ca-toggle-text="{$value}"
data-ca-toggle-text-target-elem-id="elm_category_banner_{$layout_name_user_class}" />
<label class="btn btn-group-checkbox__label" for="{$layout_name_user_class}_preset_{$preset_index}">
{$label}
</label>
{assign var="preset_index" value=$preset_index+1}
{/foreach}
</p>
</div>
</div>
</div>
<div class="controls-I{if $category_banner_data.$layout_name_type === "B"} hidden{/if}">
{$image_pair_key = "{$l_data.image_pair_name}_pair"}
<label class="control-label">{__("ab__cb.form.image_type")}:</label>
<div class="controls">
{include file="common/attach_images.tpl"
image_name="category_banners_{$l_data.image_name}"
image_object_type="category_banner"
image_pair=$category_banner_data.$image_pair_key
no_detailed=true
hide_titles=true
image_type=$l_data.image_type
}
</div>
</div>
</div>
{/foreach}
<hr/>
<div class="control-group">
<label for="elm_position" class="control-label">{__("ab__cb.form.position")}</label>
<div class="controls">
<input type="text" name="category_banner_data[position]" id="elm_position" value="{$category_banner_data.position}" size="25" class="input-large" />
</div>
</div>
{include file="common/select_status.tpl" input_name="category_banner_data[status]" id="elm_category_banner_status" obj_id=$id obj=$category_banner_data hidden=false}
</div>
{include file="common/subheader.tpl" title="{__('ab__cb.form.content_link')}" target="#content_link"}
<div id="content_link" class="in collapse">
<div class="control-group">
<label for="elm_url" class="control-label">{__("ab__cb.form.url")}</label>
<div class="controls">
<input type="text" name="category_banner_data[url]" id="elm_url" value="{$category_banner_data.url}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label for="elm_target_blank" class="control-label">{__("ab__cb.form.target_blank")}</label>
<div class="controls">
<input type="hidden" name="category_banner_data[target_blank]" value="N" />
<input type="checkbox" name="category_banner_data[target_blank]" id="elm_target_blank" value="Y" {if $category_banner_data.target_blank == "Y"}checked="checked"{/if} />
</div>
</div>
<div class="control-group">
<label for="elm_nofollow" class="control-label">{__("ab__cb.form.nofollow")}</label>
<div class="controls">
<input type="hidden" name="category_banner_data[nofollow]" value="N" />
<input type="checkbox" name="category_banner_data[nofollow]" id="elm_nofollow" value="Y" {if $category_banner_data.nofollow == "Y"}checked="checked"{/if} />
</div>
</div>
</div>
{include file="common/subheader.tpl" title="{__('ab__cb.form.content_schedule')}" target="#content_schedule"}
<div id="content_schedule" class="in collapse">
<div class="control-group">
<label class="control-label" for="elm_from_date_{$id}">{__("ab__cb.form.from_date")}</label>
<div class="controls">
{include file="common/calendar.tpl" date_id="elm_from_date_`$id`" date_name="category_banner_data[from_date]" date_val=$category_banner_data.from_date start_year=$settings.Company.company_start_year}
{include file="addons/ab__category_banners/views/ab__category_banners/components/time.tpl"
input_name="category_banner_data[from_time]"
id="from_time"
time=$category_banner_data.from_date
}
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_to_date_{$id}">{__("ab__cb.form.to_date")}</label>
<div class="controls">
{include file="common/calendar.tpl" date_id="elm_to_date_`$id`" date_name="category_banner_data[to_date]" date_val=$category_banner_data.to_date start_year=$settings.Company.company_start_year}
{include file="addons/ab__category_banners/views/ab__category_banners/components/time.tpl"
input_name="category_banner_data[to_time]"
id="to_time"
time=$category_banner_data.to_date
}
</div>
</div>
{$days =[1=>__("ab__cb.form.monday"),
2=>__("ab__cb.form.tuesday"),
3=>__("ab__cb.form.wednesday"),
4=>__("ab__cb.form.thursday"),
5=>__("ab__cb.form.friday"),
6=>__("ab__cb.form.saturday"),
7=>__("ab__cb.form.sunday")
]}
{foreach $days as $index => $day_name}
<div class="control-group"{if $category_banner_data.repeat[$index].active == "Y" || !$category_banner_data.repeat[$index].active} style="background-color: var(--cs-table-background-hover);"{/if}>
<label class="control-label" for="elm_repeat_{$index}">{$day_name}</label>
<div class="controls">
<input type="hidden" name="category_banner_data[repeat][{$index}][active]" value="N" />
<input class="ab__cb-form-checkbox" type="checkbox" name="category_banner_data[repeat][{$index}][active]" id="elm_repeat_{$index}" value="Y" {if $category_banner_data.repeat[$index].active == "Y" || !$category_banner_data.repeat[{$index}].active}checked="checked"{/if} />
{include file="addons/ab__category_banners/views/ab__category_banners/components/time.tpl"
input_name="category_banner_data[repeat][{$index}][time_from]"
time=$category_banner_data.repeat[{$index}].time_from
grinvich=true
no_failed_msg=true
}
-
{include file="addons/ab__category_banners/views/ab__category_banners/components/time.tpl"
input_name="category_banner_data[repeat][{$index}][time_to]"
time=$category_banner_data.repeat[{$index}].time_to
grinvich=true
}
</div>
</div>
{/foreach}
</div>
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="category_banner_form" but_name="dispatch[ab__category_banners.update]" save=$id}
{/capture}
</form>
<script>
(function (_, $) {
var current_block_id = '';
$(_.doc).on('click', '#category_banner_form .cm-dialog-opener[id^="opener_select_block"]', function(e) {
current_block_id = this.id.substr('opener_select_block_'.length);
});
$(_.doc).on('click', '.cm-add-block', function(e) {
var $this = $(this);

var action = $this.prop('class').match(/bm-action-([a-zA-Z0-9-_]+)/)[1];
if (action === 'existing-block') {
var block_id = $this.find('input[name="block_id"]').val();
var type = $this.find('input[name="type"]').val();
data = {
block_data: {
block_id: block_id,
type: type,
},
assign_to: 'ajax_update_block_'+current_block_id ,
force_close: '1'
};
$.ceAjax('request', fn_url('block_manager.update_block'), {
data: data,
method: 'post',
callback: function(data) {
if (data.id !== undefined) {
$('#elm_block_' + current_block_id).val(block_id);
}
if(data.block_data.type !== undefined){
$.ceAjax('request', fn_url('block_manager.ab__cb_get_wrappers'), {
data: {
type: data.block_data.type,
block_data: data.block_data,
assign_to: 'ajax_update_block_wrapper_'+current_block_id ,
suffix: current_block_id
},
method: 'get',
callback: function(data) {
console.log(data)
}
});
}
}
});
}
$.ceDialog('get_last').ceDialog('close');
});
$('.cm-ab--cb-type-switcher').on('change', function(e){
const val = e.target.value;
$(this).closest('.control-group').find('.controls-B').toggleClass('hidden', val !== 'B')
$(this).closest('.control-group').find('.controls-I').toggleClass('hidden', val === 'B')
})
$('input[id^=elm_repeat_]').change(function() {
if ($(this).is(":checked")) {
$(this).closest('.control-group').css('background-color', 'var(--cs-table-background-hover)');
} else {
$(this).closest('.control-group').css('background-color', 'transparent');
}
});
})(Tygh, Tygh.$);
</script>
{/capture}
{if $id}
{$title_end = $category_banner_data.category_banner}
{else}
{$title_end = __("ab__category_banners.adding")}
{/if}
<style>
li[id^="create_new_blocks"] {
display: none;
}
</style>
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__category_banners"}
{include
file="common/mainbox.tpl"
title_start = __("ab__category_banners")|truncate:40
title_end = $title_end
content = $smarty.capture.mainbox
buttons = $smarty.capture.buttons
adv_buttons = $smarty.capture.adv_buttons
select_languages = true
show_all_storefront = false
}