<div id="checkout_info_products_{$block.snapping_id}">

    {assign var="is_checkout" value=($runtime.controller == "checkout" && $runtime.mode == "checkout")}

    <div class="ut2-cart-content{if $is_checkout} is-checkout{/if}">
        {hook name="block_checkout:cart_items"}
            {foreach from=$cart_products key="key" item="product" name="cart_products"}
                {hook name="block_checkout:cart_products"}
                    {if !$cart.products.$key.extra.parent}

                        {assign var="cart_product_icon_width" value=($settings.Thumbnails.product_cart_thumbnail_width|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_width : 80)}
                        {assign var="cart_product_icon_height" value=($settings.Thumbnails.product_cart_thumbnail_height|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_height : 80)}

                        <div class="ut2-cart-products__item{if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together} ut2-bt_set-main-product{/if}">

                            <div class="ut2-cart-product-base">

                                <div class="product-pict">
                                    <div class="pict-underlay">
                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                            {include file="common/image.tpl" images=$product.main_pair lazy_load=false obj_id=$product.product_id
                                            image_width=$cart_product_icon_width
                                            image_height=$cart_product_icon_height}
                                        </a>
                                    </div>
                                </div>

                                <div class="ut2-cart-product-desc">

                                    <div class="product-name">
                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                            {$product.product nofilter}
                                        </a>
                                    </div>

                                    {hook name="products:product_additional_info"}

                                        {if $product.product_code|trim}
                                            <div class="ty-control-group ty-sku-item">
                                                <div class="ty-control-group__label">{__("sku")}:</div>
                                                <div class="ut2_copy"
                                                     title="{__("copy")}">
                                                    <i class="ut2-icon-copy"></i>
                                                    <span class="ut2--sku-text">{$product.product_code}</span>
                                                </div>
                                            </div>
                                        {/if}

                                        {include file="views/companies/components/product_company_data.tpl" company_name=$product.company_name company_id=$product.company_id}

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

                                        {if $product.product_options}
                                            <div class="options-variations-readonly">
                                                {include file="common/options_info.tpl" product_options=$product.product_options no_block=true}
                                            </div>
                                        {/if}

                                    {/hook}

                                </div>

                            </div>

                            {if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together}
                                <div class="ut2-cart-product-price-info is-bt-set">
                                    <div class="ut2-cart-product-exinfo">
                                        <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                            <div class="ut2-cart-product-exinfo-header">{__("unit_price")}</div>
                                            <div class="ut2-cart-product-exinfo-body">
                                                {strip}
                                                    <div class="mix-quantity-x-price">
                                                        <bdi class="bdi-add-wrapper">
                                                            <span class="mix-quantity-x">
                                                                <span class="unit-quantity">{$product.amount}</span>
                                                                <span class="white-space">&nbsp;</span>x
                                                            </span>
                                                            <span class="unit-price">
                                                                {include file="common/price.tpl" value=$product.base_price}
                                                            </span>
                                                        </bdi>
                                                    </div>
                                                {/strip}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if}

                            <div class="ut2-cart-product-price-info">
                                <div class="ut2-cart-product-exinfo">

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-price">
                                        <div class="ut2-cart-product-exinfo-header">
                                            {if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together}
                                                {__("abt__ut2.price_per_set")}
                                            {else}
                                                {__("unit_price")}
                                            {/if}
                                        </div>
                                        <div class="ut2-cart-product-exinfo-body">
                                                {include file="common/price.tpl" value=$product.display_price class="ty-sub-price"}

                                                {$full_price = 0}

                                                {if $product.promotions}
                                                    {$full_price=$product.base_price}
                                                {else}
                                                    {$pd = fn_get_product_data($product.product_id, $auth,$smarty.const.CART_LANGUAGE,"", false, false, false, false, false, false)}
                                                    {$full_price = $pd.price}
                                                    {if $pd.list_price > 0}
                                                        {$full_price = $pd.list_price}
                                                    {/if}
                                                {/if}

                                                {foreach $product.product_options as $lp_product_option}
                                                    {if empty($lp_product_option.variants)}{continue}{/if}
                                                    {$lp_option = $lp_product_option.variants[$lp_product_option.value]}

                                                    {if $lp_option.modifier_type == 'A'}
                                                        {$full_price = $full_price + $lp_option.modifier}
                                                    {elseif $lp_option.modifier_type == 'P'}
                                                        {$full_price = $full_price + $full_price*$lp_option.modifier/100}
                                                    {/if}
                                                {/foreach}

                                                {if $full_price > 0 && $full_price > $product.display_price}
                                                    <div class="ty-strike">
                                                        {include file="common/price.tpl" value=$full_price}
                                                    </div>
                                                {/if}
                                        </div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-amount">
                                        <div class="ut2-cart-product-exinfo-header">{__('qty')}</div>
                                        <div class="ut2-cart-product-exinfo-body">{$product.amount}</div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                        <div class="ut2-cart-product-exinfo-header">{__("total_price")}</div>
                                        <div class="ut2-cart-product-exinfo-body">
                                            {include file="common/price.tpl" value=$product.display_subtotal}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {hook name="block_checkout:product_extra"}{/hook}

                        </div>
                    {/if}
                {/hook}
            {/foreach}
        {/hook}
    </div>
<!--checkout_info_products_{$block.snapping_id}--></div>
