{* tech_pages *}
{if $runtime.controller|in_array:["profiles", "auth", "checkout", "orders", "wishlist", "reward_points"] || $smarty.request.dispatch == "product_features.compare"}
    <meta name="robots" content="noindex, nofollow" />

{* noindex pages *}
{elseif $smarty.server.REQUEST_URI|strpos:"/index.php?dispatch" !== false ||
    ($addons.ab__so_noindex_tech_pages.noindex_empty_categories == "Y" && $runtime.controller == "categories" && $runtime.mode == "view" && $products|sizeof == 0 && !$ab__lc_landing_categories) ||
    ($addons.ab__so_noindex_tech_pages.noindex_for_pages_gt_1 == "Y"  && $search.page > 1) ||
    ($addons.ab__so_noindex_tech_pages.noindex_for_product_reviews_pagination === "Y"  && $runtime.controller == "products" && $runtime.mode == "view" && $smarty.request.selected_section|in_array:["product_reviews","discussion"]) ||
    ""|fn_ab__so_ntp_deny_indexation}
    <meta name="robots" content="noindex, follow" />
    {if $search.page > 1 && $addons.ab__so_noindex_tech_pages.canonical_for_pages_gt_1 === "Y"}
        {$canonical = $ab__so_ntp_base_url|default:$seo_canonical.current}
        {if $ab__sf_seo_canonical}
            {$canonical = $ab__sf_seo_canonical.base_url}
        {/if}
        <link rel="canonical" href="{$canonical}" />
    {/if}

{* seo-filters *}
{elseif $ab__sf_seo_canonical}

    {if $ab__sf_seo_canonical.noindex_nofollow == "Y"}
        <meta name="robots" content="noindex,nofollow" />
    {else}
        {if $addons.ab__so_noindex_tech_pages.add_page_referer_to_canonical_link != "N"}
            {if $ab__sf_seo_canonical.current}<link rel="canonical" href="{$ab__sf_seo_canonical.current}" />{/if}
        {else}
            {if $ab__sf_seo_canonical.base_url}<link rel="canonical" href="{$ab__sf_seo_canonical.base_url}" />{/if}
        {/if}

        {if $addons.ab__so_noindex_tech_pages.exclude_next_prev_links != "Y"}
            {if $ab__sf_seo_canonical.prev}<link rel="prev" href="{$ab__sf_seo_canonical.prev}" />{/if}
            {if $ab__sf_seo_canonical.next}<link rel="next" href="{$ab__sf_seo_canonical.next}" />{/if}
        {/if}
    {/if}

{* core noindex *}
{elseif !$smarty.request|fn_seo_is_indexed_page}
    <meta name="robots" content="noindex{if $settings.Security.secure_storefront == "partial" && "HTTPS"|defined},nofollow{/if}" />

{* index pages *}
{else}
    {if $addons.ab__so_noindex_tech_pages.add_page_referer_to_canonical_link != "N"}
        {if $seo_canonical.current}<link rel="canonical" href="{$seo_canonical.current}" />{/if}
    {else}
        {if $ab__so_ntp_base_url}<link rel="canonical" href="{$ab__so_ntp_base_url}" />{/if}
    {/if}

    {if $addons.ab__so_noindex_tech_pages.exclude_next_prev_links != "Y"}
        {if $seo_canonical.prev}<link rel="prev" href="{$seo_canonical.prev}" />{/if}
        {if $seo_canonical.next}<link rel="next" href="{$seo_canonical.next}" />{/if}
    {/if}
{/if}