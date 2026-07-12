{** block-description:block_vendor_logo_pro **}

{if $smarty.request.company_id}
    <div class="logo-container">
        {$company_data = $smarty.request.company_id|fn_get_company_data}
        {$company_data.logos = $smarty.request.company_id|fn_get_logos}
        <a href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}"><span>{include file="common/image.tpl" images=$company_data.logos.theme.image image_width=$addons.cr_vendor_page_pro.vendor_logo_width image_height=$addons.cr_vendor_page_pro.vendor_logo_height}</span></a>
    </div>
{/if}