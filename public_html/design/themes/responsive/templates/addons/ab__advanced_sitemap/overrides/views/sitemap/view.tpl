{if $language_direction == "rtl"}
    {$direction = "right"}
{else}
    {$direction = "left"}
{/if}

<div class="ty-sitemap">
    <div class="ty-sitemap__section ty-sitemap__categories">
        <h2 class="ty-sitemap__section-title">{__("catalog")}</h2>
        <div class="ty-sitemap__tree">
            {if $sitemap.categories || $sitemap.categories_tree}
                {if $sitemap.categories}
                    <ul class="ty-sitemap__tree-list">
                        {foreach from=$sitemap.categories item=category}
                            <li class="ty-sitemap__tree-list-item"><a class="ty-sitemap__tree-list-a ty-strong" href="{"categories.view?category_id=`$category.category_id`"|fn_url}">{$category.category}</a></li>
                        {/foreach}
                    </ul>
                {/if}
                {if $sitemap.categories_tree}
                    {include file="views/sitemap/components/categories_tree.tpl" all_categories_tree=$sitemap.categories_tree direction=$direction background="white"}
                {/if}
            {/if}
        </div>
    </div>
    <div class="clearfix"></div>

    {if $sitemap.features_variants}
        <div class="ty-sitemap__section ty-sitemap__product_features">
            <h2 class="ty-sitemap__section-title">{__("our_brands")}</h2>
            {foreach  from=$sitemap.features_variants item=section}
                <div class="ty-sitemap__section-wrapper">
                    <ul>
                        {foreach from=$section item=variant}
                            <li><a href="{"product_features.view?variant_id=`$variant.variant_id`"|fn_url}">{$variant.variant}</a></li>
                        {/foreach}
                    </ul>
                </div>
            {/foreach}
        </div>
    {/if}

    {if $sitemap_settings.show_site_info === "YesNo::YES"|enum || $sitemap.custom}
        <div class="clearfix"></div>
        <div class="ty-sitemap__section ty-sitemap__pages">
            <h2 class="ty-sitemap__section-title">{__("cart_info")}</h2>
            <div class="ty-sitemap__section-wrapper">
                {if $sitemap_settings.show_site_info === "YesNo::YES"|enum}
                    <ul>
                        {include file="views/pages/components/pages_tree.tpl" tree=$sitemap.pages_tree direction=$direction root=true no_delim=true}
                    </ul>
                {/if}
            </div>
            <div class="ty-sitemap__section-wrapper ">
                {if $sitemap.custom}
                    {foreach from=$sitemap.custom item=section key=name}
                        <h3 class="ty-sitemap__section-sub-title">{$name}</h3>
                        <ul>
                            {foreach from=$section item=link}
                                <li><a href="{$link.link_href|fn_url}">{$link.link}</a></li>
                            {/foreach}
                        </ul>
                    {/foreach}
                {/if}
            </div>
        </div>
    {/if}

    {if $sitemap.blog_tree}
        <div class="clearfix"></div>
        <div class="ty-sitemap__section ty-sitemap__pages">
            <h2 class="ty-sitemap__section-title">{__("blog")}</h2>
            {foreach from=$sitemap.blog_tree item=section}
                <div class="ty-sitemap__section-wrapper">
                    <ul>
                        {include file="views/pages/components/pages_tree.tpl" direction=$direction tree=$section root=true no_delim=true}
                    </ul>
                </div>
            {/foreach}
        </div>
    {/if}
</div>
{capture name="mainbox_title"}{__("sitemap")}{/capture}