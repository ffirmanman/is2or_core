<div class="adv-search">
<div class="group">
<form action="{""|fn_url}" name="variants_search_form" method="get" class="{$form_meta}">
{if $put_request_vars}
{array_to_fields data=$smarty.request skip=["callback"]}
{/if}
{capture name="simple_search"}
{$extra nofilter}
<div class="sidebar-field">
<label for="elm_feature_name">{__("feature")}:</label>
<div class="break">
<input type="text" name="feature_name" id="elm_feature_name" value="{$search.feature_name}" size="30" class="search-input-text" />
</div>
</div>
<div class="sidebar-field">
<label for="elm_variant_name">{__("variant")}:</label>
<div class="break">
<input type="text" name="variant_name" id="elm_variant_name" value="{$search.variant_name}" size="30" class="search-input-text" />
</div>
</div>
{/capture}
{capture name="advanced_search"}
{hook name="product_filters:search_form"}
{/hook}
{/capture}
{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search advanced_search=$smarty.capture.advanced_search dispatch=$dispatch view_type="feature_variants" in_popup=$in_popup}
</form>
</div>
</div>