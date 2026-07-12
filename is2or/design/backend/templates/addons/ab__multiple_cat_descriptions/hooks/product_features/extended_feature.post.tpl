{if !$hide_inputs_class}
<div class="control-group">
<label class="control-label" for="elm_ab__multiple_cat_descriptions_{$id}_{$num}">{__("ab__multiple_cat_descriptions")}</label>
<div class="controls bulk-edit-inner__body">
{include file="common/popupbox.tpl"
id="ab__mcd_update_links_`$var.variant_id`"
act="edit"
link_class="cm-dialog-destroy-on-close"
link_text=__("edit")
text=__("ab__mcd.popup.update_feature_variant_links")
href="ab__mcd_items.update_links?object_id={$var.variant_id}&object_type=feature_variant"
}
</div>
</div>
{/if}