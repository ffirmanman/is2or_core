{** block-description:block_vendor_rating **}

{if $company_data.discussion && $company_data.discussion.type != "D"}
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
            <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion">{$company_data.discussion.search.total_items} {__("reviews", [$company_data.discussion.search.total_items])}</a>
        {/if}
        <!--average_rating_company_{$company_data.company_id}--></span>
{/if}