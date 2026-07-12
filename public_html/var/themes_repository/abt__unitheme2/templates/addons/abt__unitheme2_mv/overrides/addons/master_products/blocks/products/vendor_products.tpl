{if $items|default:[]}

    {$show_add_to_wishlist=$_show_add_to_wishlist|default:true}
    {$first_vendor_product = reset($items)}

    <div class="ut2-pr-sellers js-sellers-list" data-ca-seller-list-request-product-id="{$smarty.request.product_id}" id="sellers_list_{$first_vendor_product.master_product_id}">

        {foreach $items as $vendor_product}
            {$company_id = $vendor_product.company_id}
            {$product_id = $vendor_product.product_id}
            {$obj_prefix = "`$company_id`-"}
            {if !empty($vendor_product.min_qty)}
                {$amount=$vendor_product.min_qty}
            {elseif !empty($vendor_product.qty_step)}
                {$amount=$vendor_product.qty_step}
            {else}
                {$amount="1"}
            {/if}

            <form action="{""|fn_url}"
                  method="post"
                  name="vendor_products_form_{$company_id}"
                  enctype="multipart/form-data"
                  class="ut2-pr-sellers__item cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle"
                  data-ca-master-products-element="product_form"
                  data-ca-master-products-master-product-id="{$vendor_product.master_product_id}"
                  data-ca-master-products-product-id="{$vendor_product.product_id}"
            >
                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,average_rating*"/>
                <input type="hidden" name="redirect_url" value="{$redirect_url|default:$config.current_url}" />
                <input type="hidden" name="product_data[{$product_id}][product_id]" value="{$product_id}" />
                <input type="hidden" name="product_data[{$product_id}][amount]" value="{$amount}" />
                {foreach from=$product.selected_options key=option_id item=option_value}
                    <input type="hidden" name="product_data[{$product.product_id}][product_options][{$option_id}]" value="{$option_value}" />
                {/foreach}

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

                {hook name="companies:vendor_products"}
                    <div class="ut2-pr-sellers__product">
                        <div class="ut2-pr-sellers__vendor">
                            <div class="ut2-pr-sellers__vendor__company-logo">
                                {$logo="logo_`$company_id`"}
                                {$smarty.capture.$logo nofilter}
                            </div>

                            <div class="ut2-pr-sellers__vendor__company">
                                <div class="ut2-pr-sellers__vendor__company__name">
                                    {$name="name_`$company_id`"}
                                    {$smarty.capture.$name nofilter}
                                </div>

                                <div class="ut2-pr-sellers__vendor__company__rating">
                                    {$vendor_info = $vendor_product.company}
                                    {if $vendor_info.discussion.posts_count > 0}
                                        <span class="ty-nowrap ty-stars">
                                            <span class="ty-icon ty-icon-star ty-stars__icon"></span>
                                        </span>
                                        <strong>{$vendor_info.average_rating|number_format:1}</strong>
                                        {if $vendor_info.discussion.posts_count}
                                            <span class="ty-muted">({$vendor_info.discussion.posts_count})</span>
                                        {/if}
                                    {else}
                                        <span class="ty-nowrap ty-stars">
                                            <span class="ut2-rating-stars-empty ">
                                                <span class="ty-stars__icon ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></span>
                                                <span class="ty-muted">0.0</span>
                                            </span>
                                        </span>
                                    {/if}

                                    {if $settings.abt__ut2.products.vendor.show_vendor_rating[$settings.abt__device] == "Y"}
                                        {include file="addons/vendor_rating/components/relative_vendor_rating.tpl"
                                        rating=$vendor_product.company.relative_vendor_rating
                                        }
                                    {/if}
                                </div>

                                {$location="location_`$company_id`"}
                                {if $smarty.capture.$location|trim}
                                    <span class="ut2-pr-sellers__vendor__location ty-muted">{$smarty.capture.$location nofilter}</span>
                                {/if}
                            </div>
                        </div>
                        <div class="ut2-pr-sellers__product-content">
                            <div class="ut2-pr-sellers__product__photo">
                                <a href="{"products.view?product_id={$product_id}"|fn_url}">
                                    {include file="common/image.tpl" image_width="80px" image_height="" images=$product.main_pair no_ids=true lazy_load=false}
                                </a>
                            </div>
                            <div class="ut2-pr-sellers__product__info">
                                <div class="ut2-pr-sellers__product__title">
                                    <a href="{"products.view?product_id={$product_id}"|fn_url}">
                                        {$product.product|default:fn_get_product_name($product.product_id) nofilter}
                                    </a>
                                </div>

                                {include file="common/product_data.tpl"
                                product=$vendor_product
                                obj_prefix="vendor_product"
                                show_add_to_cart=true
                                show_amount_label=false
                                show_product_amount=true
                                show_add_to_wishlist=true
                                show_buy_now=false
                                show_product_options=true
                                hide_compare_list_button=true
                                show_list_buttons=false
                                show_add_to_compare=true
                                hide_compare_list_button=false

                                show_old_price=true
                                show_price=true
                                show_clean_price=true
                                show_list_discount=true
                                }

                                <div class="ut2-pr-sellers__product__footer__except-button">
                                    <div class="ut2-pr-sellers__product__pricing">
                                        <div class="ut2-pr-sellers__product__availability">
                                            {$product_amount = "product_amount_`$product_id`"}
                                            {$smarty.capture.$product_amount nofilter}
                                        </div>

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

                                        {if $addons.reward_points.status == "A"}
                                            {include file="addons/reward_points/views/products/components/product_representation.tpl"
                                            product=$vendor_product
                                            }
                                        {/if}
                                    </div>
                                    <div class="ut2-pr-sellers__product__footer__button">
                                        {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$vendor_product.product_id`" but_name="dispatch[wishlist.add..`$vendor_product.product_id`]" but_role="text" hidden_label=true hidden_but_label=true but_title=false but_tooltip=true}

                                        {hook name="vendor_products:list_buttons"}
                                        {$add_to_cart = "add_to_cart_`$product_id`"}
                                        {$smarty.capture.$add_to_cart nofilter}

                                        {$list_buttons = "list_buttons_`$product_id`"}
                                        {$smarty.capture.$list_buttons nofilter}
                                        {/hook}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ut2-pr-sellers__product__footer">

                            <input class="ut2-pr-seller--toggle" type="checkbox" name="ab_sdp_{$vendor_product.product_id}" id="ab_sdp_{$vendor_product.product_id}">
                            <label for="ab_sdp_{$vendor_product.product_id}"><span>{__("abt__ut2_mv.block_shipping_and_payments_methods")}</span><i class="ut2-icon-outline-expand_more"></i></label>

                            <div class="ut2-pr-sellers__product__footer-content">
                                <div class="ut2-pr-sellers__product__delivery">
                                    <div>
                                        <div class="ty-strong">{__("block_shipping_methods")}</div>
                                        <div class="ty-muted">
                                            {foreach $vendor_product.company_data.shippings as $vendor_shipping}
                                                {$vendor_shipping.shipping}{if !$vendor_shipping@last }, {/if}
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                                <div class="ut2-pr-sellers__product__payment">
                                    <div>
                                        <div class="ty-strong">{__("block_payment_methods")}</div>
                                        <div class="ty-muted">
                                            {foreach $vendor_product.company_data.payments as $vendor_payment}
                                                {$vendor_payment.payment}{if !$vendor_payment@last }, {/if}
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/hook}

            </form>
        {/foreach}
    <!--sellers_list_{$first_vendor_product.master_product_id}--></div>
{/if}
