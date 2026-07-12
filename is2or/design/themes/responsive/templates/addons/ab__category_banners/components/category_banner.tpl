{if $category_banner}
    {hook name="ab__category_banner:banner"}{/hook}

    {if $category_banner.block_id}
        <div class="{$item_class} category-banner-block{if $layout == "products_multicolumns" && $category_banner.products_multicolumns_full_width === "Y"} full-width{/if}">
            {render_block block_id=$category_banner.block_id dispatch="categories.view" use_cache=true parse_js=false}
        </div>
    {else}
        <div class="{$item_class} category-banner">
            {if $category_banner.url}
                <a{if $category_banner.target_blank == 'Y'} target="_blank"{/if} href="{$category_banner.url|fn_url}"{if $category_banner.nofollow === "Y"} rel="nofollow"{/if}>
                {/if}
                {if $layout == 'products_multicolumns'}
                    {include file="common/image.tpl" images=$category_banner.main_pair}
                {elseif $layout == 'products_without_options'}
                    {include file="common/image.tpl" images=$category_banner.list_pair}
                {elseif $layout == 'short_list'}
                    {include file="common/image.tpl" images=$category_banner.short_list_pair}
                {/if}
                {if $category_banner.url}
                </a>
            {/if}
        </div>
    {/if}
{/if}