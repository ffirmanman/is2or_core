{if !$product.company_id && !$product.master_product_id}
{strip}
    {if $product.price|floatval || $product.zero_price_action == "P" || ($hide_add_to_cart_button == "Y" && $product.zero_price_action == "A")}
        {$show_other_offers_link = $show_other_offers_link|default:true}
        {capture name="master_product_price_{$obj_prefix}{$obj_id}"}
            <span class="ty-master-products-products-prices-block__price ty-price{if !$product.price|floatval && !$product.zero_price_action} hidden{/if}" {""}
                  id="line_discounted_price_{$obj_prefix}{$obj_id}"
            >
                {include file="common/price.tpl"
                    value=$product.price
                    span_id="discounted_price_`$obj_prefix``$obj_id`"
                    class="ty-price-num"
                    live_editor_name="product:price:{$product.product_id}"
                    live_editor_phrase=$product.base_price
                }
            </span>
        {/capture}
        {if $addons.master_products.allow_buy_default_common_product === "YesNo::YES"|enum && $details_page && !$quick_view}
            {$smarty.capture["master_product_price_{$obj_prefix}{$obj_id}"] nofilter}
        {else}
            {$other_offers_link = "products.view&product_id=`$product.product_id`#tabs_content"|fn_url}
            {$smarty.capture["master_product_price_{$obj_prefix}{$obj_id}"] nofilter}
        {/if}

        {if $show_other_offers_link && $details_page && $settings.Appearance.product_details_in_tab == "N"}
            {$other_offers_link = "products.view&product_id=`$product.product_id`"|fn_url|cat:"#tabs_content"}
            {$other_offers_href = (!$details_page || $quick_view) ? "href=\"`$other_offers_link`\"" : ""}

            <span class="ty-master-products-products-prices-block__other-offers">
                <i class="ut2-icon-outline-local_offer"></i>
                <a class="cm-scroll" data-ca-scroll="{$settings.Appearance.product_details_in_tab == "Y"?'#tabs_content':'.ut2-pr-sellers'}" {$other_offers_href nofilter}>{__("master_products.and_other_offers")}</a>
            </span>
        {/if}
    {/if}
{/strip}
{/if}
