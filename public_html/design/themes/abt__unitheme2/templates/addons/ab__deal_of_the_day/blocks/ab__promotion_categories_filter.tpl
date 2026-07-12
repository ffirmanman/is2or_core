{** block-description:ab__promotion_categories_filter **}
{if $categories}
    {assign var="category_pict_width" value=24}

    <div class="ab-dotd_cat-filter" style="--pict-width:{$category_pict_width}">
        <ul class="list">
            {foreach $categories as $category}
                {include file="addons/ab__deal_of_the_day/components/category_filter_item.tpl" category=$category}
            {/foreach}
        </ul>
    </div>
{/if}
