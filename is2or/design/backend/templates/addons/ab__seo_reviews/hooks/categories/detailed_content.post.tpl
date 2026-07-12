{if $category_data.category_id}
{include file="common/subheader.tpl" title=__("ab__seo_reviews") target="#ab__seo_reviews"}
<div id="ab__seo_reviews" class="in collapse">
<div class="muted">
<p>{__("ab__sr.reviews_form.placeholders.title")}</p>
<p>{__("ab__sr.reviews_form.placeholders.text")}</p>
</div>
<fieldset>
<div class="control-group">
<label for="ab__sr_status" class="control-label">{__("ab__sr.reviews_form.status")}:</label>
<div class="controls">
<input type="hidden" name="ab__sr_reviews_page[status]" value="D" />
<input type="checkbox" name="ab__sr_reviews_page[status]" value="A" {if $ab__sr_reviews_page.status === "A"}checked="checked"{/if} id="ab__sr_status" />
</div>
</div>
<div class="control-group">
<label for="ab__sr_h1" class="control-label">{__("ab__sr.reviews_form.h1")}:</label>
<div class="controls">
<input type="text" name="ab__sr_reviews_page[h1]" id="ab__sr_h1" value="{$ab__sr_reviews_page.h1}" size="25" class="input-large"" />
</div>
</div>
<div class="control-group">
<label for="ab__sr_description" class="control-label">{__("ab__sr.reviews_form.description")}:</label>
<div class="controls">
<textarea id="ab__sr_description" name="ab__sr_reviews_page[description]" cols="55" rows="8" class="input-large cm-wysiwyg input-textarea-long">{$ab__sr_reviews_page.description}</textarea>
</div>
</div>
<div class="control-group">
<label for="ab__sr_page_title" class="control-label">{__("ab__sr.reviews_form.page_title")}:</label>
<div class="controls">
<input type="text" name="ab__sr_reviews_page[page_title]" id="ab__sr_page_title" value="{$ab__sr_reviews_page.page_title}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label for="ab__sr_meta_description" class="control-label">{__("ab__sr.reviews_form.meta_description")}:</label>
<div class="controls">
<input type="text" name="ab__sr_reviews_page[meta_description]" id="ab__sr_meta_description" value="{$ab__sr_reviews_page.meta_description}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label for="ab__sr_meta_keywords" class="control-label">{__("ab__sr.reviews_form.meta_keywords")}:</label>
<div class="controls">
<input type="text" name="ab__sr_reviews_page[meta_keywords]" id="ab__sr_meta_keywords" value="{$ab__sr_reviews_page.meta_keywords}" size="25" class="input-large" />
</div>
</div>
{if $addons.seo.status === "A" && $ab__sr_reviews_page.seo_name}
{include file="addons/seo/common/seo_name_field.tpl" object_data=$ab__sr_reviews_page object_name="ab__sr_reviews_page" object_id=$category_data.category_id object_type="y"}
{/if}
</fieldset>
</div>
{/if}