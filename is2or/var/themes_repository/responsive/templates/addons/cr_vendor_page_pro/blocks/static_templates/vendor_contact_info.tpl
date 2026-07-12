{** block-description:block_vendor_contact_info **}
<div class="ty-company-detail__info-list ty-company-detail_info-first">
    <h5 class="ty-company-detail__info-title">{__("contact_information")}</h5>
    {if $company_data.email}
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable">{__("email")}:</label>
            <span><a href="mailto:{$company_data.email}">{$company_data.email}</a></span>
        </div>
    {/if}
    {if $company_data.phone}
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable">{__("phone")}:</label>
            <span>{$company_data.phone}</span>
        </div>
    {/if}
    {if $company_data.fax}
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable">{__("fax")}:</label>
            <span>{$company_data.fax}</span>
        </div>
    {/if}
    {if $company_data.url}
        <div class="ty-company-detail__control-group">
            <label class="ty-company-detail__control-lable">{__("website")}:</label>
            <span><a href="{$company_data.url}">{$company_data.url}</a></span>
        </div>
    {/if}
</div>