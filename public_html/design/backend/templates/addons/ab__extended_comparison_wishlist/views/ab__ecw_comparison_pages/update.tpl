{strip}
{if $comparison_page}
{assign var="id" value = $comparison_page.page_id}
{else}
{assign var="id" value = 0}
{/if}
{$hide_inputs = !"ab__ecw.edit"|fn_check_view_permissions}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit{if $hide_inputs} cm-hide-inputs{/if}" name="ab__ecw_comparison_page_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="comparison_page[page_id]" value="{$id}" />
<input type="hidden" name="comparison_page[storefront_id]" value="{$app["storefront"]->storefront_id}" />
<input type="hidden" name="selected_section" id="selected_section" value="{$selected_section}" />
{capture name="tabsbox"}
{hook name="ab__ecw_comparison_pages:page_tabsbox_content"}
<div id="content_general">
{hook name="ab__ecw_comparison_pages:page_tabsbox_general"}
<div class="control-group">
<label class="control-label cm-required" for="comparison_page_name">{__("name")}:</label>
<div class="controls">
<input type="text" name="comparison_page[name]" id="comparison_page_name" value="{$comparison_page.name}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="comparison_page_short_description">{__("short_description")}:</label>
<div class="controls">
<textarea name="comparison_page[short_description]" id="comparison_page_short_description" class="cm-wysiwyg input-large" cols="55" rows="10">{$comparison_page.short_description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="comparison_page_descr">{__("description")}:</label>
<div class="controls">
<textarea name="comparison_page[description]" id="comparison_page_descr" class="cm-wysiwyg input-large" cols="55" rows="10">{$comparison_page.description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__stickers_detailed_img">{__("ab__ecw.comparison_pages.detailed_image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="ab__ecw_detailed_page" image_object_type="ab__ecw_detailed_page" image_pair=$comparison_page.main_pair no_detailed=true hide_titles=true}
<p class="muted description">{__("ab__ecw.detailed_image_update.description")}</p>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__stickers_img">{__("image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="ab__ecw_page" image_object_type="ab__ecw_page" image_pair=$comparison_page.icon no_detailed=true hide_titles=true}
<p class="muted description">{__("ab__ecw.image_update.description")}</p>
</div>
</div>
<div class="control-group">
<label class="control-label cm-required">{__("products")}:</label>
<div class="controls">
{include file="views/products/components/picker/block_manager_picker.tpl"
multiple = true
input_name = "comparison_page[product_ids][]"
show_positions = false
item_ids = $comparison_page.product_ids
no_item_text = __("no_data")
view_mode = "external"
}
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_page_timestamp">{__("creation_date")}</label>
<div class="controls">
{include file="common/calendar.tpl" date_id="elm_page_timestamp" date_name="comparison_page[timestamp]" date_val=$comparison_page.timestamp|default:$smarty.const.TIME}
</div>
</div>
{include file="common/select_status.tpl" input_name="comparison_page[status]" id="comparison_page_status" obj=$comparison_page hidden=true}
{/hook}
<!--content_general--></div>
<div class="hidden" id="content_seo">
{hook name="ab__ecw_comparison_pages:page_tabsbox_seo"}
{if $addons.seo.status == "ObjectStatuses::ACTIVE"|enum}
{include file="addons/seo/common/seo_name_field.tpl" object_data=$comparison_page object_name="comparison_page" object_id=$comparison_page.page_id object_type="~"}
{/if}
{include file="common/subheader.tpl" title=__("seo_meta_data") target="#acc_seo_meta"}
<div id="acc_seo_meta" class="collapse in">
<div class="control-group">
<label class="control-label" for="comparison_page_page_title">{__("page_title")}:</label>
<div class="controls">
<input type="text" name="comparison_page[page_title]" id="comparison_page_page_title" value="{$comparison_page.page_title}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="comparison_page_meta_description">{__("meta_description")}:</label>
<div class="controls">
<textarea name="comparison_page[meta_description]" id="comparison_page_meta_description" class="input-large" cols="55" rows="2">{$comparison_page.meta_description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="comparison_page_meta_keywords">{__("meta_keywords")}:</label>
<div class="controls">
<textarea name="comparison_page[meta_keywords]" id="comparison_page_meta_keywords" class="input-large" cols="55" rows="2">{$comparison_page.meta_keywords}</textarea>
</div>
</div>
</div>
{/hook}
<!--content_seo--></div>
{/hook}
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}
{capture name="buttons"}
{if $id}
{capture name="tools_list"}
<li>{btn type="list" text=__("preview") href=fn_get_preview_url("ab__ecw_comparison_pages.view?page_id=`$id`&sl=`$smarty.const.DESCR_SL`&storefront_id=`$comparison_page.storefront_id`", $comparison_page|default:[], $auth.user_id) method="GET" target="_blank"}</li>
<li>{btn type="list" text=__("clone") href="ab__ecw_comparison_pages.clone?page_ids[]=`$id`" method="POST"}</li>
<li class="divider"></li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__ecw_comparison_pages.delete?page_ids[]=`$id`" method="POST"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="ab__ecw_comparison_page_form" but_name="dispatch[ab__ecw_comparison_pages.update]" save=$id}
{/capture}
</form>
<script>
(function(_, $){
$.ceEvent('on', 'ce.formpre_ab__ecw_comparison_page_form', function (form, elm) {
var input = form.find('[name="comparison_page[product_ids]"]');
var val = input.val();
if (val.length < 2) {
$.ceNotification('show', {
type: 'E',
title: _.tr('error'),
message: _.tr('ab__ecw.add_products'),
});
return false;
}
});
})(Tygh, Tygh.$);
</script>
{/capture}
{if !$id}
{$title_end = __("ab__ecw_comparison_pages.new_page")}
{else}
{$title_end = $comparison_page.name}
{/if}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__extended_comparison_wishlist"}
{include file="common/mainbox.tpl"
title_start=__("ab__extended_comparison_wishlist")|truncate:40
title_end=$title_end
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
sidebar=$smarty.capture.sidebar
adv_buttons=$smarty.capture.adv_buttons
show_all_storefront=false
select_storefront=false
select_languages=true}
{/strip}