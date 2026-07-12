{if fn_check_view_permissions("ab__emd.view", "GET")}
{include file="common/subheader.tpl" title=__("ab__extended_metadata") target="#ab__extended_metadata"}
<div id="ab__extended_metadata" class="collapse in{if !fn_check_view_permissions("ab__emd.update", "POST")} cm-hide-inputs{/if}">
<div class="control-group">
<label for="product_ab__emd_alternative_name" class="control-label">{__("ab__emd_alternative_name")}</label>
<div class="controls">
<input class="input-large" type="text" name="product_data[ab__emd_alternative_name]" id="product_ab__emd_alternative_name" size="55" value="{$product_data.ab__emd_alternative_name}" />
</div>
</div>
</div>
{/if}