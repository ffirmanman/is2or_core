{if !empty($current_plan) && $current_plan.abt__ut2_mv_allow_vendor_metadata == 'Y'}
{include file="common/subheader.tpl" title=__("abt__ut2_mv.addon.name") meta="" target="#acc_abt__ut2_mv"}
<div id="acc_abt__ut2_mv" class="collapsed in">
{foreach ['about', 'products','reviews','store'] as $page}
{if $current_plan["abt__ut2_mv_vendor_metadata_{$page}"] == 'Y'}
<h5>{__("abt__ut2.settings.vendor.vendor_{$page}_page_metadata_group")}</h5>
<p>{__("abt__ut2.settings.vendor.vendor_{$page}_page_metadata_group_description")}</p>
<div class="control-group">
<label class="control-label" for="elm_vendor_{$page}_page_title">{__('title')}</label>
<div class="controls">
<div class="input-prepend input-prepend--mobile-fullwidth">
<textarea
name="abt__ut2_mv_metadata[{$page}][title]"
id="elm_vendor_{$page}_page_title"
class="cm-trim span10"
>{$company_data.custom_metadata[$page].title}</textarea>
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_vendor_{$page}_page_description">{__('description')}</label>
<div class="controls">
<div class="input-prepend input-prepend--mobile-fullwidth">
<textarea
name="abt__ut2_mv_metadata[{$page}][description]"
id="elm_vendor_{$page}_page_description"
class="cm-trim span10"
>{$company_data.custom_metadata[$page].description}</textarea>
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_vendor_{$page}_page_keywords">{__('keywords')}</label>
<div class="controls">
<div class="input-prepend input-prepend--mobile-fullwidth">
<textarea
name="abt__ut2_mv_metadata[{$page}][keywords]"
id="elm_vendor_{$page}_page_keywords"
class="cm-trim span10"
>{$company_data.custom_metadata[$page].keywords}</textarea>
</div>
</div>
</div>
{/if}
{/foreach}
</div>
{/if}