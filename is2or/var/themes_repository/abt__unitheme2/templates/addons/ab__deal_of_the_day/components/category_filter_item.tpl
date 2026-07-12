{$is_active = $category.category_id == $selected_category_id}

{$url_pattern = "promotions.view?promotion_id=`$promotion.promotion_id`"}
{if $category.category_id}
    {$url_pattern = "`$url_pattern`&cid=`$category.category_id`"}
{/if}

{strip}
    <li class="item{if $category.icon} has-pic{/if}{if $is_active} active{/if}{if $category.level} level-{$category.level}{/if}{if $category.all_categories} all-categories{/if}">

        {assign var="this_cat_tag" value=$is_active ? "div" : "a"}

        <{$this_cat_tag} {if !$is_active}href="{$url_pattern|fn_url}"{/if} class="category">
            {if $category.icon}
                <span class="category-pict">{include file="common/image.tpl" images=$category.icon image_width=$category_pict_width}</span>
            {/if}
            <span class="category-name">{$category.category}</span>
            {if $category.total_products}
                <em class="category-count">{$category.total_products}</em>
            {/if}
        </{$this_cat_tag}>

        {if $category.subcategories}
            <ul class="list">
                {foreach $category.subcategories as $_category}
                    {include file="addons/ab__deal_of_the_day/components/category_filter_item.tpl" category=$_category}
                {/foreach}
            </ul>
        {/if}

    </li>
{/strip}