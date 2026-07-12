{capture name="mainbox_title"}{$title}{/capture}

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}


{$curl=$config.current_url|fn_query_remove:"sort_by":"sort_order":"result_ids":"layout"}
{hook name="ab__extended_comparison_wishlist:comparison_pages_list_sorting"}
    <div class="ty-sort-container">
        {include file="common/sorting.tpl"}
    </div>
{/hook}

{include file="addons/ab__extended_comparison_wishlist/blocks/ab__ecw_comparison_pages/ab__ecw_pages_extended.tpl"}

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}