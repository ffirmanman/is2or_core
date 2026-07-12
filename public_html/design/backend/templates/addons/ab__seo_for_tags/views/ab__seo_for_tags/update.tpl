{capture name="mainbox"}
{if $tag_id}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="tag_data_form">
<input type="hidden" class="cm-no-hide-input" name="tag_id" value="{$tag_id}" />
<input type="hidden" class="cm-no-hide-input" name="selected_section" value="{$smarty.request.selected_section}" />
{capture name="tabsbox"}
<div id="content_seo_data">
<div class="control-group">
<label for="elm_h1" class="control-label">{__("ab__seo_for_tags.h1")}:</label>
<div class="controls">
<input type="text" name="tag_data[h1]" id="elm_h1" value="{$tag_data.h1}" size="25" class="input-large" placeholder="%tag%" />
</div>
</div>
<div class="control-group">
<label for="elm_description" class="control-label">{__("ab__seo_for_tags.description")}:</label>
<div class="controls">
<textarea id="elm_description" name="tag_data[description]" cols="55" rows="8" class="input-large cm-wysiwyg input-textarea-long">{$tag_data.description}</textarea>
</div>
</div>
<div class="control-group">
<label for="elm_page_title" class="control-label">{__("ab__seo_for_tags.page_title")}:</label>
<div class="controls">
<input type="text" name="tag_data[page_title]" id="elm_page_title" value="{$tag_data.page_title}" size="25" class="input-large" placeholder="%tag%" />
</div>
</div>
<div class="control-group">
<label for="elm_meta_description" class="control-label">{__("ab__seo_for_tags.meta_description")}:</label>
<div class="controls">
<input type="text" name="tag_data[meta_description]" id="elm_meta_description" value="{$tag_data.meta_description}" size="25" class="input-large" placeholder="%tag%" />
</div>
</div>
<div class="control-group">
<label for="elm_meta_keywords" class="control-label">{__("ab__seo_for_tags.meta_keywords")}:</label>
<div class="controls">
<input type="text" name="tag_data[meta_keywords]" id="elm_meta_keywords" value="{$tag_data.meta_keywords}" size="25" class="input-large" placeholder="%tag%" />
</div>
</div>
{if $addons.seo.status == 'A'}
{include file="addons/seo/common/seo_name_field.tpl" object_data=$tag_data object_name="tag_data" object_id=$tag_id object_type="t" hide_title=true}
{/if}
{hook name='ab__seo_for_tags:detailed_content'}{/hook}
<!--content_seo_data--></div>
<div id="content_links_generating">
<div class="alert alert-warning">{__("ab__sft.form.links_generating.description")}</div>
{* enable *}
<div class="control-group">
<label for="elm_ab__sft_generate_by_cron" class="control-label">{__("ab__sft.form.generate_by_cron")}{include file="common/tooltip.tpl" tooltip=__("ab__sft.form.generate_by_cron.tooltip")}:</label>
<div class="controls">
<input type="hidden" name="tag_data[ab__sft_generate_by_cron]" value="N">
<input type="checkbox" name="tag_data[ab__sft_generate_by_cron]" value="Y" id="elm_ab__sft_generate_by_cron" {if $tag_data.ab__sft_generate_by_cron === "Y"}checked="checked"{/if}>
</div>
</div>
{* rules of generating *}
{include file="common/subheader.tpl" title=__("ab__sft.form.links_generating_rules") target="#ab__sft_links_generating_rules"}
<div class="conditions-tree" id="ab__sft_links_generating_rules">
{include file="addons/ab__seo_for_tags/views/ab__seo_for_tags/components/group.tpl" group=$tag_data.ab__sft_conditions prefix="tag_data[ab__sft_conditions]" root=true}
{script src="js/tygh/backend/promotion_update.js"}
{script src="js/tygh/node_cloning.js"}
<!--ab__sft_links_generating_rules--></div>
<!--content_links_generating--></div>
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="tag_data_form" but_name="dispatch[ab__seo_for_tags.update]" save=$tag_data.tag_id}
{capture name="tools_list"}
{$view_uri = "tags.view?tag_id=`$tag_id`"|fn_get_preview_url:$tag_data:$auth.user_id}
<li>{btn type="list" target="_blank" text=__("preview") href=$view_uri}</li>
<li class="divider"></li>
<li>{btn type="list" text=__("view_products") href="products.manage?tag=`$tag_data.tag`"}</li>
{* Generate links link *}
{if $tag_data.ab__sft_conditions.conditions}
<li>{btn type="list" text=__("ab__sft.generate_button") class="cm-post cm-ajax cm-confirm" href="ab__seo_for_tags.generate?tag_id=`$tag_data.tag_id`"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/capture}
</form>
{else}
<p>{__('ab__seo_for_tags.unknown_tag')}</p>
{/if}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_tags"}
{include
file="common/mainbox.tpl"
title_start=__("ab__seo_for_tags")|truncate:40
title_end=$tag_data.tag
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons = $smarty.capture.adv_buttons
select_languages=true
}