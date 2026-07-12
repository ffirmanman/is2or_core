{if $block.properties.abt__ut2_mv_ask_question === "Y"}
{$title = __("vendor_communication.ask_a_question")}
{include file="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" object_id=$vendor_info.company_id show_form=true}

{include
    file="addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl"
    object_type=$smarty.const.VC_OBJECT_TYPE_COMPANY
    object_id=$vendor_info.company_id
    company_id=$vendor_info.company_id
    vendor_name=$vendor_info.company
}
{/if}