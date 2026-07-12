{if $abt_blocks}
    {$app.session.is_render_vendor_block = true}
    {foreach $abt_blocks as $block}
        {render_block block_id=$block.block_id dispatch="companies.view" use_cache=false parse_js=false}
    {/foreach}
    {$app.session.is_render_vendor_block = false}
{/if}
