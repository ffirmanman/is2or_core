<div class="landing-page-categories">
<h1 class="ty-mainbox-title"><span>{$location_data.name}</span></h1>
{strip}

    {assign var="number_of_columns" value=$settings.Appearance.columns_in_products_list|intval}
    {if $number_of_columns <= 0}
        {assign var="number_of_columns" value=4}
    {/if}

<div class="ab-lc-wrap" style="--number-of-columns:{$number_of_columns}">
    {$show_max_item=$addons.ab__landing_categories.maximum_number_of_displayed_items|default:5}
    {foreach from=$items item="item1" name="item1"}
        {if $item1.param_id}
            <div class="ab-lc-group {if $item1.ab__lc_catalog_image_control == 'left' and $item1.ab__lc_catalog_icon}left-mini-icon{/if}">
                <div class="head">
                    
                    <a href="{$item1.href|fn_url}">
                    {if $item1.ab__lc_catalog_image_control == 'top' and $item1.main_pair}
                        <div class="image">
                            <div class="cat-pict-underlay">
                                {include file="common/image.tpl"
                                    show_detailed_link=false
                                    images=$item1.main_pair
                                    image_width=$settings.Thumbnails.category_lists_thumbnail_width
                                    image_height=$settings.Thumbnails.category_lists_thumbnail_height
                                    ab__is_object_name=$item1.item
                                }
                            </div>
                        </div>
                    {/if}


                    
                    {if $item1.ab__lc_catalog_image_control == 'left' and $item1.ab__lc_catalog_icon}
                        {include file="common/image.tpl"
                            show_detailed_link=false
                            images=$item1.ab__lc_catalog_icon
                            image_width=32
                            image_height=32
                        }
                    {/if}
                    <div class="cat-title">
                        <span class="cat-name">{$item1.item}</span>
                    </div>
                    </a>
                </div>

                {if !empty($item1.subitems)}
                    <ul class="items-level-2">
                        {foreach from=$item1.subitems item="item2" name="item2"}
                            {if $item2.param_id}
                                
                                {if $smarty.foreach.item2.iteration > $show_max_item}{break}{/if}
                                <li data-subcategories="{if !empty($item2.subitems)}Y{else}N{/if}">
                                <a href="{$item2.href|fn_url}">
                                    <span class="cat-name">{$item2.item}</span>
                                    {if !empty($item2.subitems)}<i class="icon-subitems"></i>{/if}
                                </a>
                                    {if !empty($item2.subitems)}
                                        <ul class="items-level-3">
                                            {foreach from=$item2.subitems item="item3"}
                                                <li>
                                                    <a href="{$item3.href|fn_url}">
                                                        <span class="cat-name">{$item3.item}</span>
                                                    </a>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                            {/if}
                        {/foreach}
                    </ul>

                    {if count($item1.subitems) > $show_max_item}
                        <ul class="hidden-items-level-2">
                            {foreach from=$item1.subitems item="item2" name="item2"}
                                {if $item2.param_id}
                                    
                                    {if $smarty.foreach.item2.iteration <= $show_max_item}{continue}{/if}
                                    <li data-subcategories="{if !empty($item2.subitems)}Y{else}N{/if}">
                                        <a href="{$item2.href|fn_url}" data-subcategories="{if !empty($item2.subitems)}Y{else}N{/if}">
                                            <span class="cat-name">{$item2.item}</span>
                                            {if !empty($item2.subitems)}<i class="icon-subitems"></i>{/if}
                                        </a>
                                        {if !empty($item2.subitems)}
                                            <ul class="items-level-3">
                                                {foreach from=$item2.subitems item="item3"}
                                                    <li>
                                                        <a href="{$item3.href|fn_url}">
                                                            <span class="cat-name">{$item3.item}</span>
                                                        </a>
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        {/if}
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                        <span class="show-hidden-items-level-2">
                            <bdi>{__("ab__lc.catalog.show_more")}<i class="icon-more"></i></bdi>
                        </span>
                    {/if}
                {/if}
            </div>
        {/if}
    {/foreach}
</div>
{/strip}
</div>