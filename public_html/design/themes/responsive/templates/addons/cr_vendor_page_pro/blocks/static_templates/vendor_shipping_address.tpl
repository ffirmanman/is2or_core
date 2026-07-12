{** block-description:block_vendor_shipping_address **}

<div class="ty-company-detail__info-list">
    <h5 class="ty-company-detail__info-title">{__("shipping_address")}</h5>

    <div class="ty-company-detail__control-group">
        <span>{$company_data.address}</span>
    </div>
    <div class="ty-company-detail__control-group">
                            <span>{$company_data.city}
                                , {$company_data.state|fn_get_state_name:$company_data.country} {$company_data.zipcode}</span>
    </div>
    <div class="ty-company-detail__control-group">
        <span>{$company_data.country|fn_get_country_name}</span>
    </div>
</div>