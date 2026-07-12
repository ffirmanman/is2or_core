{strip}
<ul class="ab-ecw-pages" id="product_features_ab_ecw_comparison_{$block.block_id}_simple">
    {foreach $pages as $page}
        {$names = fn_get_product_name($page.product_ids, $smarty.const.CART_LANGUAGE, true)}

        <li>
            <a href="{fn_url("ab__ecw_comparison_pages.view?page_id=`$page.page_id`")}">{$page.name}</a>&nbsp;
            (
                {foreach $page.product_ids as $pid}
                    <a href="{fn_url("products.view?product_id=`$pid`")}">{$names.$pid}</a>{if !$pid@last} / {/if}
                {/foreach}
            )
        </li>
    {/foreach}
<!--product_features_ab_ecw_comparison_{$block.block_id}_simple--></ul>
{/strip}