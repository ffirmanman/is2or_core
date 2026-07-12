{if $settings.abt__ut2.products.vendor.show_vendor_rating[$settings.abt__device] == "Y"}
    {include file="addons/vendor_rating/components/relative_vendor_rating.tpl"
        rating=$product.relative_vendor_rating
    }
{/if}