{** block-description:block_vendor_box_on_product_page **}

{if $addons.cr_vendor_page_pro.pd_show_vendor_logo == 'Y'}
<div class="logo-container">
    <a href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}"><span>{include file="common/image.tpl" images=$company_data.logos.theme.image image_width=$addons.cr_vendor_page_pro.pd_vendor_logo_width image_height=$addons.cr_vendor_page_pro.pd_vendor_logo_height}</span></a>
</div>
{/if}

<a class="store-lnk" href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}">{$company_data.company}</a>

{if $addons.discussion.status == 'A' && $company_data.discussion && $company_data.discussion.type != "D"}
    <span class="ty-discussion__rating-wrapper" id="average_rating_company_{$company_data.company_id}">
        {if $company_data.average_rating}
            {$average_rating = $company_data.average_rating}
        {elseif $company_data.discussion.average_rating}
            {$average_rating = $company_data.discussion.average_rating}
        {/if}

        {if $average_rating}
            {include file="addons/cr_vendor_page_pro/components/stars.tpl" stars=$average_rating|fn_get_discussion_rating is_link=true}
        {/if}
        {if $company_data.discussion.search.total_items}
            <a class="ty-discussion__review-a" href="{"companies.products?company_id=`$company_data.company_id`&selected_section=discussion#discussion"|fn_url}">{$company_data.discussion.search.total_items} {__("reviews", [$company_data.discussion.search.total_items])}</a>
        {/if}
    <!--average_rating_company_{$company_data.company_id}--></span>
{/if}

<a class="ty-btn" href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}">{__("cr_visit_store")}</a>