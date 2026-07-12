{if fn_check_view_permissions("ab__emd.view", "GET")}
{include file="common/subheader.tpl" title=__("ab__extended_metadata") target="#ab__extended_metadata"}
<div id="ab__extended_metadata" class="collapse in{if !fn_check_view_permissions("ab__emd.update", "POST")} cm-hide-inputs{/if}">
<div class="control-group">
<label class="control-label" for="elm_ab__emd_alternative_name_{$id}_{$num}">{__("ab__emd_alternative_name")}</label>
<div class="controls">
<textarea name="feature_data[variants][{$num}][ab__emd_alternative_name]" id="elm_ab__emd_alternative_name_{$id}_{$num}" cols="55" rows="2" class="input-textarea-long">{$var.ab__emd_alternative_name}</textarea>
</div>
</div>
</div>
{/if}