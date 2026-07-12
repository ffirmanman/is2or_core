{** block-description:tmpl_scroller_ab__ia **}
{strip}
<div id="join_list_{$block.block_id}" class="ty-tabs cm-j-tabs-disable-convertation ut2-ab__ia_joins-elements-list ut2-scroll-container">
    <button class="ut2-scroll-left" type="button"><span class="ty-icon ty-icon-left-open-thin"></span></button>
    <ul class="ty-tabs__list ut2-scroll-content">
        {foreach from=$items item='j'}
            {capture name="ab__ai_join_name"}
            {if $j.tab_url == "custom_url"}
                <a class="ty-tabs__a" href="{$j.custom_url|fn_url}" onclick="return $(this).parent().hasClass('active');"><span>{$j.name nofilter}</span></a>
            {elseif $j.tab_url =="use_joined_category"}
                <a class="ty-tabs__a" href="{"categories.view&category_id=`$j.joined_category_id`"|fn_url}" onclick="return $(this).parent().hasClass('active');"><span>{$j.name nofilter}</span></a>
            {else}
                <span class="ty-tabs__a">{$j.name nofilter}</span>
            {/if}
            {/capture}
            <li data-b="{$block.block_id}" data-j="{$j.join_id}" data-p="{$product_id|default:$smarty.request.product_id}" class="abt__ut2_grid_tabs ty-tabs__item btn-ab__ia_join">{$smarty.capture.ab__ai_join_name nofilter}</li>
        {/foreach}
    </ul>
</div>

<div id="join_list_products_{$block.block_id}" class="ty-ab__ia_joins-list-products"></div>
{/strip}
