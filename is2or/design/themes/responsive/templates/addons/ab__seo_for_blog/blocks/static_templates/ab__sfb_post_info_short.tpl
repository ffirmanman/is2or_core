{if !$subpages}
<div class="ab--sfb-post-info">
    {if $page.author_data}
        <a
                href="{"ab__sfb_authors.view?author_id={$page.author_data.author_id}"|fn_url}"
                class="ab--sfb-author-link"
        >{$page.author_data.name}</a>
        <span>&nbsp;&bullet;&nbsp;</span>
    {/if}
    <span class="ab--sfb-acticle-posted">{$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
</div>
{/if}