{** block-description:ab__gp.block.comma_separated **}
{include file="addons/ab__geo_pages/components/block_name.tpl"}

{$url_base = $items.url_base}
{$locations = $items.locations}
{foreach $locations as $location}
{if $location.location_id}
{$suffix = "?ab__gp_location_id=`$location.location_id`"}
{else}
{$suffix = "?ab__gp_location_id=0"}
{/if}
<a href="{"`$url_base``$suffix`"|fn_url}">{$location.location}</a>{if !$location@last}, {/if}
{/foreach}
