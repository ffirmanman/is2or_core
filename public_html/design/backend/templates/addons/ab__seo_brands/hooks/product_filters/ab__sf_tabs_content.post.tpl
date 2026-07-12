{if $filter.feature_type === "ProductFeatures::EXTENDED"|enum}
{if 'ab__seo_brands.view'|fn_check_view_permissions}
<div id="content_tab_ab__seo_brands_{$id}" class="hidden{if !'ab__seo_brands.manage'|fn_check_view_permissions} cm-hide-inputs{/if}">
<div class="control-group">
<label class="control-label" for="elm_ab__sb_h1">{__("ab__sb.form.h1")}</label>
<div class="controls">
<input type="text" name="filter_data[ab__sb_h1]" id="elm_ab__sb_h1" value="{$filter.ab__sb_h1}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_breadcrumb">{__("ab__sb.form.breadcrumb")}</label>
<div class="controls">
<input type="text" name="filter_data[ab__sb_breadcrumb]" id="elm_ab__sb_breadcrumb" value="{$filter.ab__sb_breadcrumb}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_description">{__("ab__sb.form.description")}</label>
<div class="controls">
<textarea id="elm_ab__sb_description"
name="filter_data[ab__sb_description]"
cols="55"
rows="8"
class="cm-wysiwyg input-large"
>{$filter.ab__sb_description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_descr_position">{__("ab__sb.form.descr_position")}</label>
<div class="controls">
<select id="elm_ab__sb_descr_position" name="filter_data[ab__sb_descr_position]">
<option value="top"{if $filter.ab__sb_descr_position === "top"} selected{/if}>{__("ab__sb.form.descr_position.top")}</option>
<option value="bottom"{if $filter.ab__sb_descr_position === "bottom"} selected{/if}>{__("ab__sb.form.descr_position.bottom")}</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_variants_template">{__("ab__sb.form.variants_template")}</label>
<div class="controls">
<select id="elm_ab__sb_variants_template" name="filter_data[ab__sb_variants_template]">
<option value="grid"{if $filter.ab__sb_variants_template === "grid"} selected{/if}>{__("ab__sb.form.variants_template.grid")}</option>
<option value="table"{if $filter.ab__sb_variants_template === "table"} selected{/if}>{__("ab__sb.form.variants_template.table")}</option>
<option value="grid_with_images"{if $filter.ab__sb_variants_template === "grid_with_images"} selected{/if}>{__("ab__sb.form.variants_template.grid_with_images")}</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_page_title">{__("ab__sb.form.page_title")}</label>
<div class="controls">
<input type="text" name="filter_data[ab__sb_page_title]" id="elm_ab__sb_page_title" value="{$filter.ab__sb_page_title}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_meta_description">{__("ab__sb.form.meta_description")}</label>
<div class="controls">
<input type="text" name="filter_data[ab__sb_meta_description]" id="elm_ab__sb_meta_description" value="{$filter.ab__sb_meta_description}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__sb_meta_keywords">{__("ab__sb.form.meta_keywords")}</label>
<div class="controls">
<input type="text" name="filter_data[ab__sb_meta_keywords]" id="elm_ab__sb_meta_keywords" value="{$filter.ab__sb_meta_keywords}" size="25" class="input-large" />
</div>
</div>
{if $addons.seo.status == 'A'}
{include file="addons/seo/common/seo_name_field.tpl" object_data=$filter object_name="filter_data" object_id=$filter.filter_id object_type="f"}
{/if}
<!--content_ab__seo_brands--></div>
{/if}
{/if}