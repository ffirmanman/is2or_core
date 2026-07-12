{** block-description:tmpl_scroller_ab__ia **}
{strip}
<div id="join_list_{$block.block_id}" class="ty-ab__ia_joins-list">
    <ul>
        {foreach from=$items item='j'}
            {if $j.tab_url == "custom_url"}
                {$but_href=$j.custom_url|fn_url}
                {$but_onclick="return $(this).parent().hasClass('active');"}
                {elseif $j.tab_url =="use_joined_category"}
                {$but_href="categories.view&category_id=`$j.joined_category_id`"|fn_url}
                {$but_onclick="return $(this).parent().hasClass('active');"}
                {else}
                {$but_href=false}
                {$but_onclick=false}
            {/if}
            <li data-b="{$block.block_id}" data-j="{$j.join_id}" data-p="{$product_id|default:$smarty.request.product_id}" class="btn-ab__ia_join">{include file="buttons/button.tpl" allow_href=true but_role="action" but_text=$j.name}</li>
        {/foreach}
    </ul>
</div>

<div id="join_list_products_{$block.block_id}" class="ty-ab__ia_joins-list-products"></div>
{/strip}