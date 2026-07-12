{if ($runtime.company_id && "ULTIMATE"|fn_allowed_for || "MULTIVENDOR"|fn_allowed_for || $runtime.simple_ultimate)}
    {if 1|fn_ss_deepl_check_access}
        {$ss_deepl_field = "full_description"}
        <div class="control-group">
            <label for="elm_ss_deepl_auto_translate_{$ss_deepl_field}_{$id}" class="control-label"></label>
            <div class="controls">
                {include file="common/popupbox.tpl" act="link" link_text=__('ss_deepl_translate_with_deepl') id="ss_deepl_`$ss_deepl_field`_`$product_data.product_id`"
                text=__('ss_deepl_translate_popup') link_class="btn cm-dialog-auto-size" href="ss_deepl.translate?object_id=`$product_data.product_id`&type=P&field=`$ss_deepl_field`"}
            </div>
        </div>
    {/if}
{/if}