{$ids=explode(',',trim($addons.ab__seo_filters.block_id))}
{if $ab__sf_seo_page == 'Y' and $products|count == 0 and $ids}
    {$temp_mainbox_title=$smarty.capture.mainbox_title}
    {foreach from=$ids item="id"}{render_block block_id=$id dispatch="categories.view" use_cache=true parse_js=false}{/foreach}
    {capture name="mainbox_title"}{$temp_mainbox_title nofilter}{/capture}
{/if}
