{if $page_type == $smarty.const.PAGE_TYPE_BLOG}
{include file="common/subheader.tpl" title=__("ab__seo_for_blog") target="#ab__sfb_author"}
<div id="ab__sfb_author" class="in collapse">
<fieldset>
{include
file="addons/ab__seo_for_blog/views/ab__sfb_authors/components/author_selector.tpl"
title=__("ab__sfb.author")
id="author_id"
input_name="page_data[author_id]"
selected_author=$page_data.author_id
}
</fieldset>
<div class="control-group ">
<label class="control-label" for="ab__sfb_schema_type">{__("ab__sfb.microdata.schema_type")}</label>
<div class="controls">
<select name="page_data[ab__sfb_microdata_schema_type]" id="ab__sfb_schema_type" class="user-success">
<option value="" {if !$page_data.ab__sfb_microdata_schema_type} selected{/if}>{__("ab__sfb.microdata.schema_type.none")}</option>
{foreach ["Article","NewsArticle","BlogPosting"] as $type}
<option value="{$type}"{if $type == $page_data.ab__sfb_microdata_schema_type} selected{/if}>{__("ab__sfb.microdata.schema_type.`$type`")}</option>
{/foreach}
</select>
</div>
</div>
</div>
{/if}
