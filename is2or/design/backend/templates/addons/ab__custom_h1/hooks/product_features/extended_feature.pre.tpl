{if "ab__ch1"|fn_check_view_permissions}
<div class="control-group{if !"ab__ch1.manage"|fn_check_view_permissions} cm-hide-inputs{/if}">
<label class="control-label cm-trim" for="elm_ab__custom_feature_variant_h1_{$id}_{$num}">{__("ab__ch1.feature_variant")}</label>
<div class="controls" style="margin-top: 13px;">
<input type="text" name="feature_data[variants][{$num}][ab__custom_feature_variant_h1]" id="elm_ab__custom_feature_variant_h1_{$id}_{$num}" value="{$var.ab__custom_feature_variant_h1}" class="input-large" />
</div>
</div>
{/if}