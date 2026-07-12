{$ab__gp_name_prefix = $ab__gp_original_name|default:$category_data.category}
{if $ab__gp_name_prefix}
    {capture name="title"}
        {$ab__gp_name_prefix} {$title}
    {/capture}
{/if}