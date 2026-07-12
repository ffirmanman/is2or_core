{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="author_form" class="form-horizontal form-edit" enctype="multipart/form-data">
{hook name="ab__sfb_author:author_data"}
<input type="hidden" name="author_id" value="{$author_data.author_id}" />
<div class="control-group">
<label class="control-label cm-required" for="author_name">{__("ab__sfb.author.name")}:</label>
<div class="controls">
<input type="text" name="author_data[name]" id="author_name" value="{$author_data.name}" class="span9" />
</div>
</div>
{include file="common/select_status.tpl" input_name="author_data[status]" id="elm_lauthor_status" obj=$author_data hidden=false}
<div class="control-group">
<label class="control-label" for="author_rank">{__("ab__sfb.author.rank")}:</label>
<div class="controls">
<input type="text" name="author_data[author_rank]" id="author_rank" value="{$author_data.author_rank}" class="span9" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="author_appointment">{__("ab__sfb.author.appointment")}:</label>
<div class="controls">
<input type="text" name="author_data[appointment]" id="author_appointment" value="{$author_data.appointment}" class="span9" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="author_short_description">{__("ab__sfb.author.short_description")}:</label>
<div class="controls">
<input type="text" name="author_data[short_description]" id="author_short_description" value="{$author_data.short_description}" class="span9" />
</div>
</div>
<div class="control-group ">
<label class="control-label" for="author_full_description">{__("ab__sfb.author.full_description")}:</label>
<div class="controls">
<textarea id="author_full_description" name="author_data[full_description]"
cols="55" rows="8"
class="cm-wysiwyg input-textarea-long">{$author_data.full_description}</textarea>
</div>
</div>
<div class="control-group ">
<label class="control-label" for="author_url">{__("ab__sfb.author.url")}:</label>
<div class="controls">
<input type="text" name="author_data[author_url]" id="author_url" value="{$author_data.author_url}" class="span9" />
</div>
</div>
<div class="control-group ">
<label class="control-label" >{__("ab__sfb.author.image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl"
image_key=$author_data.author_id
image_name="author_image"
image_object_type="ab__sfb_author"
image_pair=$author_data.main_pair
image_object_id=$author_data.author_id
no_thumbnail=true}
</div>
</div>
{/hook}
{include file="common/subheader.tpl" title=__("seo") target="#acc_ab__sfb_seo"}
<div id="acc_ab__sfb_seo" class="collapsed in">
{hook name="ab__sfb_author:author_data_seo"}
<div class="control-group ">
<label class="control-label" for="author_title">{__("page_title")}:</label>
<div class="controls">
<input type="text" name="author_data[title]" id="author_title" value="{$author_data.title}" class="span9" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="author_meta_description">{__("meta_description")}:</label>
<div class="controls">
<textarea name="author_data[meta_description]" id="author_meta_description" cols="55" rows="4" class="input-large">{$author_data.meta_description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="author_meta_keywords">{__("meta_keywords")}:</label>
<div class="controls">
<textarea name="author_data[meta_keywords]" id="author_meta_keywords" cols="55" rows="4" class="input-large">{$author_data.meta_keywords}</textarea>
</div>
</div>
{/hook}
</div>
</form>
{capture name="buttons"}
{if $author_data.author_id}
{$view_uri = "ab__sfb_authors.view?author_id=`$author_data.author_id`"|fn_get_preview_url:$author_data:$auth.user_id}
{capture name="tools_list"}
{if $view_uri}
<li>{btn type="list" target="_blank" text=__("preview") href=$view_uri}</li>
{/if}
<li>{btn type="list" text=__("delete") class="cm-confirm cm-post" href="ab__sfb_authors.delete?author_id=`$author_data.author_id`"|fn_url}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[ab__sfb_authors.update]" but_target_form="author_form" save=$author_data.author_id}
{/capture}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_blog"}
{if $author_data.author_id}
{$title_end = $author_data.name}
{else}
{$title_end = __("ab__sfb.new_author")}
{/if}
{include file="common/mainbox.tpl"
title_start=__("ab__seo_for_blog")|truncate:40
title_end=$title_end
select_languages=true
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}
