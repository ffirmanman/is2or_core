{if ($runtime.company_id && "ULTIMATE"|fn_allowed_for || "MULTIVENDOR"|fn_allowed_for || $runtime.simple_ultimate)}
    {if 1|fn_ss_deepl_check_access}
        {$ss_deepl_field = "description"}
        {include file="common/popupbox.tpl" act="link" link_text=__('ss_deepl_translate_with_deepl') id="ss_deepl_`$ss_deepl_field`_`{$id}`"
        text=__('ss_deepl_translate_popup') link_class="btn cm-dialog-auto-size" href="ss_deepl.translate?object_id=`$id`&type=A&field=`$ss_deepl_field`"}
    {/if}
{/if}
