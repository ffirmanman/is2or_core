{strip}
{if fn_check_view_permissions("ab__seo_product_tabs.view", "GET")}
{$hide_inputs = !(fn_check_view_permissions("ab__seo_product_tabs.manage", "POST"))}
{include file="common/subheader.tpl" title=__("ab__seo_product_tabs") target="#ab__spt"}
<div id="ab__spt" class="in collapse{if $hide_inputs} cm-hide-inputs{/if}">
<div class="control-group">
<label class="control-label cm-trim" for="elm_ab__spt_short_name">{__('ab__spt.product.short_name')}{include file="common/tooltip.tpl" tooltip=__('ab__spt.product.short_name.tooltip')}:</label>
<div class="controls">
<input type="text" id="elm_ab__spt_short_name" name="product_data[ab__spt_short_name]" size="30" value="{$product_data.ab__spt_short_name}" class="cm-toggle-element" placeholder="{__('name')}">
</div>
</div>
</div>
{/if}
{/strip}