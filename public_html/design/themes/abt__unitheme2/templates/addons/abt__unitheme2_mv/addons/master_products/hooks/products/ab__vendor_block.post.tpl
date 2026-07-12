{if $abt__ut2_mv__vendor_products}
    {foreach $tabs as  $tab}
        {if $tab.properties|strpos:"vendor_products.tpl" && $tab.status == 'A'}
            {$vendor_products_tab = $tab}
            {break}
        {/if}
    {/foreach}
    <div class="ut2-pb__other-vendors" id="vendors_{$block.snapping_id}">
        <div class="ut2-pb__other-vendors_title ty-strong ty-mtb-s">
            {$vp_first=current($abt__ut2_mv__vendor_products)}
            <span>{__("abt__ut2_mv.vendor_products.other_vendors_from")}
                {include file="common/price.tpl" value=$min_vendor_price|default:0 class="ty-price-num"}</span>
            {if $vendor_products_tab}
            <a class="cm-external-click" data-ca-scroll="discussion" data-ca-external-click-id="discussion">
                <a data-ca-external-click-id="product_tab_{$vendor_products_tab.tab_id}"
                   class="ut2-pb__other-vendors_count cm-external-click"
                   data-ca-scroll=".tab-list-title:has(+ #sellers_list_{$vp_first.master_product_id})">

                    <span>{__("view")} ({$abt__ut2_mv__vendor_products|count})</span> <i
                            class="ut2-icon-outline-arrow_forward ty-muted"></i>
                </a>
                {/if}
        </div>

        <div class="ut2-gl__simple-scroller ut2-scroll-container">
            <button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
            <ul class="ut2-gl__simple-scroller-wrap ut2-scroll-content">
                {foreach $abt__ut2_mv__vendor_products as $vendor_product}
                    {if !empty($smarty.request.vendor_id) && $vendor_product.company_id == $smarty.request.vendor_id}
                        {continue}
                    {/if}
                    <li class="ut2-scroll-item">
                        {$company_id = $vendor_product.company_id}
                        {$product_id = $vendor_product.product_id}
                        {$obj_prefix = "`$company_id`-"}

                        <a class="ty-overflow-hidden" href="{"products.view?product_id={$product_id}"|fn_url}">
                            {if !empty($vendor_product.min_qty)}
                                {$amount=$vendor_product.min_qty}
                            {elseif !empty($vendor_product.qty_step)}
                                {$amount=$vendor_product.qty_step}
                            {else}
                                {$amount="1"}
                            {/if}

                            {$show_logo = $vendor_product.company.logos}

                            {include file="common/company_data.tpl"
                            company=$vendor_product.company
                            show_name=true
                            show_links=true
                            show_logo=$show_logo
                            show_city=true
                            show_country=true
                            show_rating=true
                            show_posts_count=false
                            show_location=true
                            }

                            <div class="ut2-pr-sellers__product__photo">
                                {include file="common/image.tpl" image_width="{$settings.Thumbnails.product_variant_mini_icon_width|default:65}" image_height="{$settings.Thumbnails.product_variant_mini_icon_height|default:65}" images=$product.main_pair no_ids=true lazy_load=false}
                            </div>
                            <div>
                                <div class="ut2-pr-sellers__product__pricing">
                                    {if $settings.Checkout.allow_anonymous_shopping === "hide_price_and_add_to_cart" && !$auth.user_id}
                                        <span class="ty-price">{__("sign_in_to_view_price")}</span>
                                    {else}
                                        {include file="common/price.tpl" value=$vendor_product.price class="ty-price-num"}

                                        {if $vendor_product.original_price && $vendor_product.original_price != $vendor_product.price}
                                            <span class="ty-list-price ty-nowrap">
                                        <span class="ty-strike">
                                            {include file="common/price.tpl"
                                            value=$vendor_product.original_price
                                            class="ty-list-price ty-nowrap"
                                            }
                                        </span>
                                    </span>
                                        {/if}
                                    {/if}
                                </div>
                                <p class="ut2-pr-sellers__seller-name ty-valign"><span class="ty-muted">{__("vendor")}: </span> {$vendor_product.company_name}</p>
                                <div>
                                    <div class="ut2-rating-stars">
                                        <div class="ut2-rating-stars-empty">
                                            {if $vendor_product.company.average_rating }
                                                <span class="ty-icon ty-icon-star ty-stars__icon"></span>
                                            {else}
                                                <div class="ty-product-review-reviews-stars ty-product-review-reviews-stars-one"
                                                     data-ca-product-review-reviews-stars-full="{$vendor_product.company.average_rating|intval}">
                                                </div>
                                            {/if}
                                            <span class="ut2-company-rating-stars-num"><strong>{($vendor_product.company.average_rating?:0)|number_format:1}</strong><span style="opacity: 0.6">/</span><small style="opacity: 0.6">5</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                {/foreach}
            </ul>
            <button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
        </div>
    </div>
    {include file="common/simple_scroller_init.tpl" block_id="vendors_{$block.snapping_id}" elements_to_scroll="1"}
{/if}