{$show_icon = true}
{if $addons.vendor_rating.bronze_rating_lower_limit === $addons.vendor_rating.silver_rating_lower_limit
&& $addons.vendor_rating.silver_rating_lower_limit === $addons.vendor_rating.gold_rating_lower_limit
&& $addons.vendor_rating.gold_rating_lower_limit === "0"}
    {$show_icon = false}
{/if}

{if $show_icon}
    {strip}
        {if $rating >= $addons.vendor_rating.bronze_rating_lower_limit && $rating < $addons.vendor_rating.silver_rating_lower_limit}
        <div class="ut2__vendor-info--rating cm-tooltip" {if $settings.ab__device !=="mobile"}title="{__('vendor_rating.vendor_rating')}: {__('abt__ut2_mv.vendor_rating_bronze')}"{/if}><span class="ut2-icon-workspace_premium vr-bronze"></span>{$rating}%</div>
        {elseif $rating >= $addons.vendor_rating.silver_rating_lower_limit && $rating < $addons.vendor_rating.gold_rating_lower_limit}
        <div class="ut2__vendor-info--rating cm-tooltip" {if $settings.ab__device !=="mobile"}title="{__('vendor_rating.vendor_rating')}: {__('abt__ut2_mv.vendor_rating_silver')}"{/if}><span class="ut2-icon-workspace_premium vr-silver"></span>{$rating}%</div>
        {elseif $rating >= $addons.vendor_rating.gold_rating_lower_limit}
        <div class="ut2__vendor-info--rating cm-tooltip" {if $settings.ab__device !=="mobile"}title="{__('vendor_rating.vendor_rating')}: {__('abt__ut2_mv.vendor_rating_gold')}"{/if}><span class="ut2-icon-workspace_premium vr-gold"></span>{$rating}%</div>
        {/if}
    {/strip}
{/if}
