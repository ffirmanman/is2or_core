{strip}
{if $addons.ab__extended_comparison_wishlist.group_comparison_lists === "YesNo::YES"|enum}
{*{ab__hide_content bot_type="ALL"}*}
    {$comparison_lists = fn_ab__extended_comparison_wishlist_get_comparison_lists()}
    <div class="hidden" id="account_info_ab__extended_comparison_wishlist_groups">
        <ul class="ab-ec-comparison-modal{if $comparison_lists|count <= 1} cm-ab-ec-empty-comparison_list{/if}">
            <li class="ab-ec-comparison-modal__item">
                <a href="{"product_features.compare"|fn_url}" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow">{__("ab__ecw.all_lists")}{*<span>({$app["session"]["comparison_list"]|count})</span>*}</a>

                {if $app["session"]["comparison_list"]}
                    {$products = implode(",", $app["session"]["comparison_list"])}
                    <a href="{"ab__extended_comparison_wishlist.clear_list?product_ids=`$products`&redirect_url={$config.current_url|escape:"url"}"|fn_url}" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="{__("clear_list")}"></a>
                {/if}
            </li>

            {foreach $comparison_lists as $comparison_list}
                {$products_arr = $comparison_list->getProductList()}
                {$products = implode(",", $products_arr)}
                <li class="ab-ec-comparison-modal__item">
                    <a href="{$comparison_list->getHref()|fn_url}" class="ab-ec-comparison-modal__link cm-ab-ec-reinited" rel="nofollow">{$comparison_list->getTitle()}<span>({$products_arr|count})</span></a>
                    <a href="{"ab__extended_comparison_wishlist.clear_list?product_ids=`$products`&redirect_url={$config.current_url|escape:"url"}"|fn_url}" rel="nofollow" class="ab-ec-comparison-modal__icon cm-confirm cm-dialog-closer ty-icon-trashcan cm-tooltip" title="{__("clear_list")}"></a>
                </li>
            {/foreach}
        </ul>
    <!--account_info_ab__extended_comparison_wishlist_groups--></div>
{*{/ab__hide_content}*}
{/if}
{/strip}