{$default_minimal_qty = 1}

{capture name="cartbox"}
    {if $runtime.mode == "checkout"}
        {if $cart.coupons|floatval}<input type="hidden" name="c_id" value="" />{/if}
        {hook name="checkout:form_data"}
        {/hook}
    {/if}

    {assign var="is_main_cart" value=($runtime.mode == "cart" && ($runtime.controller == "checkout" || $runtime.controller == "separate_checkout"))}

    <div id="cart_items">
        <div class="ut2-cart-content{if $is_main_cart} is-main-cart{/if}">

            {assign var="prods" value=false}

            {if $cart_products}
                {foreach from=$cart_products item="product" key="key" name="cart_products"}
                    {assign var="obj_id" value=$product.object_id|default:$key}
                    {hook name="checkout:items_list"}

                    {if !$cart.products.$key.extra.parent}

                        {assign var="cart_product_icon_width" value=($settings.Thumbnails.product_cart_thumbnail_width|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_width : 80)}
                        {assign var="cart_product_icon_height" value=($settings.Thumbnails.product_cart_thumbnail_height|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_height : 80)}

                        <div class="ut2-cart-products__item{if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together} ut2-bt_set-main-product{/if}"
                             style="--cart-product-icon-width:{$cart_product_icon_width}px;--cart-product-icon-height:{$cart_product_icon_height}px;">

                            <div class="ut2-cart-product-base">

                                <div class="product-pict">
                                    <div class="pict-underlay">
                                        {if $runtime.mode == "cart" || $show_images}
                                            <div class="cm-reload-{$obj_id}"
                                                 id="product_image_update_{$obj_id}">
                                                {hook name="checkout:product_icon"}
                                                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                                        {include file="common/image.tpl" images=$product.main_pair lazy_load=false obj_id=$key
                                                        image_width=$cart_product_icon_width
                                                        image_height=$cart_product_icon_height}
                                                    </a>
                                                {/hook}
                                            <!--product_image_update_{$obj_id}--></div>
                                        {/if}
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
                                            <div class="ty-control-group ty-sku-item cm-hidden-wrapper"
                                                 id="sku_{$key}">
                                                <div class="ty-control-group__label">{__("sku")}:</div>
                                                <div class="cm-reload-{$obj_prefix}{$obj_id} ut2_copy"
                                                     title="{__("copy")}"
                                                     id="product_code_{$obj_prefix}{$obj_id}">
                                                    <i class="ut2-icon-copy"></i>
                                                    <span class="ut2--sku-text">{$product.product_code}</span>
                                                <!--product_code_{$obj_prefix}{$obj_id}--></div>
                                            </div>
                                        {/if}

                                        {include file="views/companies/components/product_company_data.tpl" company_name=$product.company_name company_id=$product.company_id}

                                        <div class="options-variations-configurable">
                                            <div class="options-variations-configurable__cart-add-in{if !empty($product.product_options) && !empty($product.variation_features)} has-both{/if}">
                                                {hook name="checkout:product_options"}
                                                {if $product.product_options}
                                                    <div class="cm-reload-{$obj_id}"
                                                         id="options_update_{$obj_id}">
                                                        <input type="hidden" name="no_cache" value="no_cache"/>
                                                        {include file="views/products/components/product_options.tpl" product_options=$product.product_options product=$product name="cart_products" id=$key location="cart" disable_ids=$disable_ids form_name="checkout_form"}
                                                        <!--options_update_{$obj_id}--></div>
                                                {/if}
                                                {/hook}
                                            </div>
                                        </div>
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

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-price cm-reload-{$obj_id}"
                                         id="price_display_update_{$obj_id}">
                                        <div class="ut2-cart-product-exinfo-header">
                                            {if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together}
                                                {__("abt__ut2.price_per_set")}
                                            {else}
                                                {__("unit_price")}
                                            {/if}
                                        </div>
                                        <div class="ut2-cart-product-exinfo-body">
                                            {include file="common/price.tpl" value=$product.display_price span_id="product_price_`$key`"}

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
                                    <!--price_display_update_{$obj_id}--></div>

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-amount{if $product.is_edp == "Y" || $product.exclude_from_calculate} quantity-disabled{/if}">
                                        <div class="ut2-cart-product-exinfo-body ty-cart-content__qty">
                                            {if $use_ajax == true && $cart.amount != 1}
                                                {assign var="ajax_class" value="cm-ajax"}
                                            {/if}

                                            <div class="quantity cm-reload-{$obj_id}{if $settings.Appearance.quantity_changer == "Y"} changer{/if}"
                                                 id="quantity_update_{$obj_id}">
                                                <input type="hidden" name="cart_products[{$key}][product_id]" value="{$product.product_id}" />
                                                {if $product.exclude_from_calculate}<input type="hidden" name="cart_products[{$key}][extra][exclude_from_calculate]" value="{$product.exclude_from_calculate}" />{/if}

                                                <label for="amount_{$key}"></label>
                                                {if $product.is_edp == "Y" || $product.exclude_from_calculate}
                                                    {$product.amount}
                                                {else}
                                                    {if $settings.Appearance.quantity_changer == "Y"}
                                                        <div class="ty-center ty-value-changer cm-value-changer">
                                                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                    {/if}
                                                    <input type="text" size="3" id="amount_{$key}" name="cart_products[{$key}][amount]" value="{$product.amount}" class="ty-value-changer__input cm-amount cm-value-decimal"{if $product.qty_step > 1} data-ca-step="{$product.qty_step}"{/if} data-ca-min-qty="{if !$product.min_qty}{$default_minimal_qty}{else}{$product.min_qty}{/if}" />
                                                    {if $settings.Appearance.quantity_changer == "Y"}
                                                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                                {if $product.is_edp == "Y" || $product.exclude_from_calculate}
                                                    <input type="hidden" name="cart_products[{$key}][amount]" value="{$product.amount}" />
                                                {/if}
                                                {if $product.is_edp == "Y"}
                                                    <input type="hidden" name="cart_products[{$key}][is_edp]" value="Y" />
                                                {/if}
                                            <!--quantity_update_{$obj_id}--></div>
                                        </div>
                                    </div>

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total cm-reload-{$obj_id}"
                                         id="price_subtotal_update_{$obj_id}">
                                        <div class="ut2-cart-product-exinfo-header">{__("total_price")}</div>
                                        <div class="ut2-cart-product-exinfo-body">
                                            {include file="common/price.tpl" value=$product.display_subtotal span_id="product_subtotal_`$key`"}
                                            {if $product.zero_price_action == "A"}
                                                <input type="hidden" name="cart_products[{$key}][price]" value="{$product.base_price}" />
                                            {/if}
                                        </div>
                                    <!--price_subtotal_update_{$obj_id}--></div>

                                    {strip}
                                        {if !$product.exclude_from_calculate}
                                            <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-remove">
                                                <a class="{$ajax_class} ut2-cart-item-delete"
                                                   href="{"checkout.delete?cart_id=`$key`&redirect_mode=`$runtime.mode`"|fn_url}"
                                                   data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart"
                                                   title="{__("remove")}">
                                                    <span class="ut2-icon-delete"></span>
                                                    {if $cart.products.$key.extra.buy_together && !$cart.products.$key.extra.parent.buy_together}
                                                        <span class="text">{__("abt__ut2.delete_set")}</span>
                                                    {/if}
                                                </a>
                                            </div>
                                        {/if}
                                    {/strip}

                                </div>

                                {hook name="checkout:product_info"}{/hook}

                            </div>

                        </div>
                    {/if}

                    {/hook}
                {/foreach}
            {/if}

            {hook name="checkout:extra_list"}
            {/hook}

        </div>
    <!--cart_items--></div>

{/capture}
{include file="common/mainbox_cart.tpl" title=__("cart_items") content=$smarty.capture.cartbox}
