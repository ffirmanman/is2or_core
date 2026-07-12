{if $block.properties.abt__ut2_mv_vendor_rating === "Y"}
    {include file="addons/vendor_rating/components/relative_vendor_rating.tpl"
    rating=$vendor_info.relative_vendor_rating
    }
{/if}