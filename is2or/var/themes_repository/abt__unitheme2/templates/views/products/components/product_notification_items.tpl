{hook name="products:notification_items"}
    {if $added_products}

        {assign var="cart_product_icon_width" value=($settings.Thumbnails.product_cart_thumbnail_width|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_width : 80)}
        {assign var="cart_product_icon_height" value=($settings.Thumbnails.product_cart_thumbnail_height|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_height : 80)}

        <div class="ut2-added-products"
             style="--cart-product-icon-width:{$cart_product_icon_width}px;--cart-product-icon-height:{$cart_product_icon_height}px;">

            {foreach from=$added_products item=product key="key"}
                {hook name="products:notification_product"}
                    <div class="ut2-added-products__item">
                        <div class="ut2-added-products__itself-item">

                            <div class="product-pict">
                                <div class="pict-underlay">
                                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                        {include file="common/image.tpl" images=$product.main_pair no_ids=true
                                        image_width=$cart_product_icon_width
                                        image_height=$cart_product_icon_height}
                                    </a>
                                </div>
                            </div>

                            <div class="desc">
                                <div class="base">

                                    <div class="product-name">
                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                            {$product.product_id|fn_get_product_name nofilter}
                                        </a>
                                    </div>

                                    {if $product.variation_features}
                                        <div class="options-variations-readonly">
                                            {strip}
                                                {foreach from=$product.variation_features item="v_feature"}
                                                    <div class="ty-product-options">
                                                        <div class="ty-product-options-name">{$v_feature.description}:<span class="white-space">&nbsp;</span></div>
                                                        <div class="ty-product-options-content">{$v_feature.variant}</div>
                                                    </div>
                                                {/foreach}
                                            {/strip}
                                        </div>
                                    {/if}

                                    {if $product.product_option_data}
                                        <div class="options-variations-readonly">
                                            {include file="common/options_info.tpl" product_options=$product.product_option_data}
                                        </div>
                                    {/if}

                                </div>

                                {if !($settings.Checkout.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id)}
                                    {if !$hide_amount}
                                        {strip}
                                            <div class="mix-quantity-x-price">
                                                <bdi class="bdi-add-wrapper">
                                                    <span class="mix-quantity-x">
                                                        <span class="unit-quantity">{$product.amount}</span>
                                                        <span class="white-space">&nbsp;</span>x
                                                    </span>
                                                    <span class="unit-price">
                                                        {include file="common/price.tpl" value=$product.display_price span_id="price_`$key`" class="none"}
                                                    </span>
                                                </bdi>
                                            </div>
                                        {/strip}
                                    {/if}
                                {/if}

                            </div>

                        </div>
                    </div>
                {/hook}
            {/foreach}

        </div>
    {else}
        {$empty_text}
    {/if}
{/hook}
