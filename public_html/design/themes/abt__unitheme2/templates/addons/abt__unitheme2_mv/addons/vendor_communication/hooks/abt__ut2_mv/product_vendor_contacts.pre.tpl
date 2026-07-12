{if $settings.abt__ut2.products.vendor.show_ask_question_link[$settings.abt__device] == "Y" && !empty($product_id)}
    {include file="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" object_id=$product_id}
{/if}