{if fn_check_view_permissions("ab__emd.view", "GET")}
{include file="common/subheader.tpl" title=__("ab__extended_metadata") target="#ab__extended_metadata"}
<div id="ab__extended_metadata" class="collapse in{if !fn_check_view_permissions("ab__emd.update", "POST")} cm-hide-inputs{/if}">
<div class="control-group">
<label class="control-label" for="ab__emd__category_pattern_id">{__("ab__emd.form.category_pattern_id")}:</label>
<div class="controls">
<select id="ab__emd__category_pattern_id" name="category_data[ab__emd__category_pattern_id]">
<option {if !$category_data.ab__emd__category_pattern_id}selected="selected"{/if} value="">{__('ab__emd.form.empty_pattern')}</option>
{foreach from=['object' => 'category']|fn_ab__emd_get_patterns key="pattern_id" item="pattern"}
<option {if $category_data.ab__emd__category_pattern_id == $pattern_id}selected="selected"{/if} value="{$pattern_id}">{$pattern.name}</option>
{/foreach}
</select>
<a href="{"ab__emd.settings&selected_section=category"|fn_url}" class="btn" target="_blank" title="{__('ab__emd.link.edit_categories_patterns')}"><i class="icon-cog"></i></a>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__emd__products_pattern_id">{__("ab__emd.form.products_pattern_id")}:</label>
<div class="controls">
<select id="ab__emd__products_pattern_id" name="category_data[ab__emd__products_pattern_id]">
<option {if !$category_data.ab__emd__products_pattern_id}selected="selected"{/if} value="">{__('ab__emd.form.empty_pattern')}</option>
{foreach from=['object' => 'product']|fn_ab__emd_get_patterns key="pattern_id" item="pattern"}
<option {if $category_data.ab__emd__products_pattern_id == $pattern_id}selected="selected"{/if} value="{$pattern_id}">{$pattern.name}</option>
{/foreach}
</select>
<a href="{"ab__emd.settings&selected_section=product"|fn_url}" class="btn" target="_blank" title="{__('ab__emd.link.edit_products_patterns')}"><i class="icon-cog"></i></a>
</div>
</div>
<div class="control-group">
<label for="category_ab__emd_alternative_name" class="control-label">{__("ab__emd_alternative_name")}</label>
<div class="controls">
<input class="input-large" type="text" name="category_data[ab__emd_alternative_name]" id="category_ab__emd_alternative_name" size="55" value="{$category_data.ab__emd_alternative_name}" />
</div>
</div>
</div>
{/if}
