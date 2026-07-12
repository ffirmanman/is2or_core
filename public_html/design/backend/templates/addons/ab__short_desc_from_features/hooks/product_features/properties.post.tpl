{if 'ab__short_desc_from_features.view_features'|fn_check_view_permissions}
<div class="control-group {if !'ab__short_desc_from_features.manage_features'|fn_check_view_permissions}cm-hide-inputs{/if}">
<label class="control-label" for="elm_ab__short_desc_from_features_{$id}">{__("ab__sdff.form.use_for_desc")}</label>
<div class="controls">
<input type="hidden" name="feature_data[ab__sdff__use_for_desc]" value="N" />
<input id="elm_ab__short_desc_from_features_{$id}" type="checkbox" name="feature_data[ab__sdff__use_for_desc]" value="Y" {if $feature.ab__sdff__use_for_desc == "Y"}checked="checked"{/if} />
</div>
</div>
{/if}