{** block-description:block_product_tabs **}
{assign var="obj_id" value=$product.product_id}
{include file="views/tabs/components/product_tabs.tpl"}

{if $blocks.$tabs_block_id.properties.wrapper}
    {include file=$blocks.$tabs_block_id.properties.wrapper content=$smarty.capture.tabsbox_content title=$blocks.$tabs_block_id.description}
{else}
    {$smarty.capture.tabsbox_content nofilter}
{/if}