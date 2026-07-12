{if $field.field_type == 'J'}
    {$disabled = $shipping_flag && !$ship_to_another}

    <div class="ty-control-group">
        <label class="ty-control-group__title {if $required == "Y"}cm-required{/if}" for="{$element_id}">{$field.description}:</label>
        <input type="text" id="{$element_id}" value="{$value}" name="{$data_name}[{$data_id}]" class="input-medium" {$disabled_param nofilter} />
        <button data-ca-element-id="{$element_id}" data-ca-element-type="{$section}" type="button" class="ty-btn ty-btn__primary is2or-vendor-communication-generate-address" {if $disabled}disabled="disabled"{/if}>{__('is2or_vendor_communication.generate_address')}</button>
    </div>
{/if}