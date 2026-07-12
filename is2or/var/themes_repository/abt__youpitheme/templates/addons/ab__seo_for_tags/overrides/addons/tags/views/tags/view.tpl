{include file="common/breadcrumbs.tpl"}

{if $addons.ab__seo_for_tags.description_location == "top" && $tag_data.description && $search.page == 1}
    <div class="compact ty-wysiwyg-content ty-mb-l">{$tag_data.description nofilter}</div>
{/if}

{if $addons.tags.tags_for_products == "Y"}
    <div id="selected_filters_ypi">{$smarty.capture.abt__selected_filters nofilter}<!--selected_filters_ypi--></div>

    {if $products}
        <div class="ypi-filters-container">
            <a class="ypi-white-vfbt"><i class="material-icons">&#xE16D;</i></a>
            <span class="f-title hidden">{__("filters")}</span>
        </div>
    {/if}

    <div class="cat-view-grid" id="category_products_{$block.block_id}">
        {if $products}
            {assign var="layouts" value=""|fn_get_products_views:false:0}

            {if $layouts.$selected_layout.template}
                {include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
            {/if}
        {/if}
        <!--category_products_{$block.block_id}--></div>
{/if}

{if $addons.tags.tags_for_pages == "Y" && $pages}
    <ul>
        {foreach $pages as $page}
            <li><a href="{"pages.view?page_id=`$page.page_id`"|fn_url}">{$page.page}</a></li>
        {/foreach}
    </ul>
{/if}

{if $addons.ab__seo_for_tags.description_location == "bottom" && $tag_data.description && $search.page == 1}
    <div class="compact ty-wysiwyg-content ty-mb-l">{$tag_data.description nofilter}</div>
{/if}

{hook name="tags:view"}{/hook}

{capture name="mainbox_title"}{$tag_data.h1|default:$tag_data.tag}{/capture}