{strip}{if !empty($ab__lc_landing_categories)}

    
    {capture name="title"}
        <span {live_edit name="category:category:{$category_data.category_id}"}>
            {if $category_data.ab__custom_category_h1|trim}
                {$category_data.ab__custom_category_h1|trim}
            {else}
                {$category_data.category|trim}
            {/if}
        </span>
    {/capture}

    {$show_max_item=$category_data.ab__lc_subsubcategories|default:0}

    {assign var="number_of_columns" value=$settings.Appearance.columns_in_products_list|intval}
    {if $number_of_columns <= 0}
        {assign var="number_of_columns" value=4}
    {/if}

    <div class="ab-lc-wrap" style="--number-of-columns:{$number_of_columns}">
        {foreach from=$ab__lc_landing_categories item="item1" name="item1"}
            {hook name="ab__landing_categories:category"}{/hook}
            {if $item1.param_id}
                <div class="ab-lc-landing">
                    <div class="head">
                        <a href="{$item1.href|fn_url}">
                            {if $item1.main_pair}
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
                            <div class="cat-title">
                                <span class="cat-name">{$item1.item}</span>
                            </div>
                        </a>
                    </div>

                    
                    {if intval($category_data.ab__lc_subsubcategories) > 0 and !empty($item1.subitems)}
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
                                        <li>
                                            <a href="{$item2.href|fn_url}">
                                                <span class="cat-name">{$item2.item}</span>
                                            </a>
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

    {hook name="categories:view_description"}
    {if $category_data.description || $runtime.customization_mode.live_editor}
        <div class="ab-category-description ty-wysiwyg-content ty-mt-l" {live_edit name="category:description:{$category_data.category_id}"}>{$category_data.description nofilter}</div>
    {/if}
    {/hook}
{/if}{/strip}