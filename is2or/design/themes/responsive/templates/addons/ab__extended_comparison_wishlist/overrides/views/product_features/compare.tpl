{strip}
{if !$comparison_data}
    <p class="ty-no-items ty-compare__no-items">{__("no_products_selected")}</p>
    <div class="buttons-container ty-compare__button-empty">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url but_role="text"}
    </div>
{else}
    {capture name="mainbox_title"}
        {if $ab__ecw_active_comparison_list}
            {__("ab__ecw.compare.title", ["[title]" => $ab__ecw_active_comparison_list->getTitle()])}
        {else}
            {__("compare")}
        {/if}
    {/capture}

    <div class="ab-ec-comparison-list">
        {if $ab__ecw_compare_lists|count > 1}
            <ul>
                {hook name="ab__extended_comparison_wishlist:top_lists"}
                {foreach $ab__ecw_compare_lists as $comparison_list}
                    <li>
                        {$tag = "a"}
                        {if $comparison_list->isActive()}
                            {$tag = "span"}
                        {/if}

                        <{$tag}{if !$comparison_list->isActive()} href="{$comparison_list->getHref()|fn_url}"{/if} class="cm-ab-ec-reinited ab-ec-comparison-list__item">{$comparison_list->getTitle()}<span class="ab-ec-comparison-list__count">{$comparison_list->getProductList()|count}</span></{$tag}>
                    </li>
                {/foreach}
                {/hook}
            </ul>
        {/if}

        <div class="ab-ec-comparison__buttons">
            {hook name="ab__extended_comparison_wishlist:top_buttons"}
                {$features_filter_behavior = $addons.ab__extended_comparison_wishlist.features_filter_behavior}

                {capture name="ab__ecw_features_filter"}
                    {hook name="ab__extended_comparison_wishlist:features_filter"}
                        {if $features_filter_behavior == "reload_page"}
                            {if $runtime.action == "different_only"}
                                {$text = "different_only"}
                                {$action = "show_all"}
                            {else}
                                {$text = "all_features"}
                                {$action = "different_only"}
                            {/if}

                            
                            {$additional = ""}
                            {if $smarty.request.category_id}
                                {$additional = "?category_id=`$smarty.request.category_id`"}
                            {/if}

                            <a class="ab-ec-filter-features reload ab-ec-{$text} cm-ab-ec-reinited" href="{"product_features.compare.`$action``$additional`"|fn_url}">
                                <i class="ty-icon-target"></i>
                                {__($text)}
                            </a>
                        {elseif $features_filter_behavior == "highlight_differences"}
                            {$text = "all_features"}

                            <a href="javascript:void(0)" class="ab-ec-filter-features highlight ab-ec-{$text} cm-ab-ec-reinited">
                                <i class="ty-icon-eye-open"></i>
                                <i class="ty-icon-eye-close"></i>
                                <span>{__($text)}</span>
                            </a>
                        {/if}
                    {/hook}
                {/capture}

                {$smarty.capture.ab__ecw_features_filter nofilter}

                {if $ab__ecw_active_comparison_list}
                    <a{if $comparison_data.products|count == 1} class="highlighted"{/if} href="{$ab__ecw_active_comparison_list->getViewMoreHref()|fn_url}">
                        <i class="ty-icon-plus"></i>
                        {__("ab__ecw.add_more_products", ["[title]" => $ab__ecw_active_comparison_list->getTitle()|fn_strtolower])}
                    </a>
                {/if}

                {$products = []}
                {foreach $comparison_data.products as $product}
                    {$products[] = $product.product_id}
                {/foreach}

                {$imloded_products = ","|implode:$products}

                <a href="{"ab__extended_comparison_wishlist.compare?add_to_compare=`$imloded_products`"|fn_url}" rel="nofollow" data-cm-ab-ec-copy-from="href" class="cm-ab-ec-copy-to-clipboard cm-ab-ec-reinited">
                    <i class="ty-icon-popup"></i>
                    {__("ab__ecw.copy_link_to_compare_list")}
                </a>

                {$redirect_url = $config.current_url|fn_query_remove:"category_id"}
                <a href="{"ab__extended_comparison_wishlist.clear_list?product_ids={$imloded_products}&redirect_url={$redirect_url|urlencode}"|fn_url}">
                    <i class="ty-icon-trashcan"></i>
                    {__("clear_list")}
                </a>
            {/hook}
        </div>
    </div>

    {if $comparison_data.products|count == 1}
        <div class="notification-content alert alert-warning">
            <strong>{__("attention")}</strong>
            {__("ab__ecw.not_enough_to_compare")}
        </div>
    {/if}

    {$block = [
        "block_id" => "ab__ecw_main_compare",
        "properties" => [
            "show_company_name" => "YesNo::YES"|enum,
            "ab__ecw_enable_add_to_compare" => "YesNo::NO"|enum,
            "enable_quick_view" => "YesNo::YES"|enum,
            "outside_navigation" => "YesNo::NO"|enum,
            "thumbnail_width" => 100,
            "show_price" => "YesNo::YES"|enum,
            "item_quantity" => 4,
            "ab__ecw_enable_add_more" => "YesNo::NO"|enum,
            "ab__ecw_enable_scroller" => "YesNo::YES"|enum,
            "hide_add_to_cart_button" => "YesNo::NO"|enum
        ]
    ]}

    {include file="addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl" block=$block items=$comparison_data.products force_display=true}
{/if}
{/strip}