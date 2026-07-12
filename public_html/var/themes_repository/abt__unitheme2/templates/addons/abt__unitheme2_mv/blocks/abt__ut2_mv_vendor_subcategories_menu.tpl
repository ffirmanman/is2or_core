{* block-description:abt__ut2_advanced_subcategories_menu *}

{if isset($abt__ut2_subcategories) && $abt__ut2_subcategories|@count > 0}
{*    {$abt__ut2_subcategories|fn_print_r}*}

    <div class="ut2-categories">

        {if !empty($block.properties.abt__ut2_show_parents) && $block.properties.abt__ut2_show_parents === 'YesNo::YES'|enum}
            {if isset($abt__ut2_subcategories.parents) && $abt__ut2_subcategories.parents|@count > 0}
                <div class="ut2-categories__list parents-list">
                    {foreach from=$abt__ut2_subcategories.parents key=$id item=$category name=parents_loop}
                        <div class="ut2-categories__item parent-item">
                            <a class="ut2-categories__item__link" href="{"companies.products?company_id=`$company_id`&category_id=`$category.category_id`"|fn_url}">
                                <i class="ut2-icon-arrow_back_black"></i>
                                <span class="ut2-categories__item__name" {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span>
                            </a>
                        </div>
                    {/foreach}
                </div>
            {/if}
        {/if}

        {capture name="children_categories"}
            {if !empty($block.properties.abt__ut2_show_children) && $block.properties.abt__ut2_show_children === 'YesNo::YES'|enum}
                {if isset($abt__ut2_subcategories.subcategories) && $abt__ut2_subcategories.subcategories|@count > 0}
                    <div class="ut2-categories__list children-list">
                        {foreach from=$abt__ut2_subcategories.subcategories key=$id item=$category name=subcategories_loop}
                            <div class="ut2-categories__item child-item">
                                <a class="ut2-categories__item__link" href="{"companies.products?company_id=`$company_id`&category_id=`$category.category_id`"|fn_url}">
                                    <span class="ut2-categories__item__name" {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span>
                                </a>
                            </div>
                        {/foreach}
                    </div>
                {/if}
            {/if}
        {/capture}

        {if isset($abt__ut2_subcategories.siblings) && $abt__ut2_subcategories.siblings|@count > 0}
            {foreach from=$abt__ut2_subcategories.siblings key=$id item=$category name=siblings_current_loop}
                {if $category.category_id == $_REQUEST.category_id}
                    {assign var="current_ctg" value=$category}
                    {break}
                {/if}
            {/foreach}
        {elseif isset($abt__ut2_subcategories.current_category) && $abt__ut2_subcategories.current_category|@count > 0}
            {assign var="current_ctg" value=$abt__ut2_subcategories.current_category}
        {/if}

        <div class="ut2-categories__list siblings-list">
            {if !empty($current_ctg)}
                <div class="ut2-categories__item sibling-item current">
                    <div class="ut2-categories__item__link">
                        <span class="ut2-categories__item__name" {live_edit name="category:category:{$current_ctg.category_id}"}>{$current_ctg.category}</span>
                    </div>
                    {$smarty.capture.children_categories nofilter}
                </div>
            {/if}

            {if !empty($block.properties.abt__ut2_show_siblings) && $block.properties.abt__ut2_show_siblings === 'YesNo::YES'|enum}
                {if isset($abt__ut2_subcategories.siblings) && $abt__ut2_subcategories.siblings|@count > 0}
                    {foreach from=$abt__ut2_subcategories.siblings key=$id item=$category name=siblings_loop}
                        {if $category.category_id == $_REQUEST.category_id}
                            {continue}
                        {/if}
                        <div class="ut2-categories__item sibling-item">
                            <a class="ut2-categories__item__link" href="{"companies.products?company_id=`$company_id`&category_id=`$category.category_id`"|fn_url}">
                                <span class="ut2-categories__item__name" {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span>
                            </a>
                        </div>
                    {/foreach}
                {/if}
            {/if}
        </div>

    </div>
{/if}