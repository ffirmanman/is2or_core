{if $company_data.company_id && !$hide_vendor_store}
    <a class="ty-btn ty-btn__primary ty-btn__outline ut2__button-all-vendor-products" href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}">{__("view_vendor_products")}</a>
{/if}