{assign var="dropdown_id" value=$block.snapping_id}
{assign var="r_url" value=$config.current_url|escape:url}

{hook name="checkout:cart_content"}
    <div class="ty-dropdown-box cm-abt--ut2-move-bottom rt-position ut2-top-cart-content" id="aside_cart_status_{$dropdown_id}">
        <div id="sw_dropdown_{$dropdown_id}" class="ty-dropdown-box__title cm-combination ut2-dropdown-no_tip">
            <a href="{"checkout.cart"|fn_url}" class="ty-hand" id="cart_status_icon_{$dropdown_id}">
                {hook name="checkout:dropdown_title"}
                {if $smarty.session.cart.amount}
                    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count">{$smarty.session.cart.amount}</span></i><span>{__("cart")}</span>
                {else}
                    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span>{__("cart")}</span>
                {/if}
                {/hook}
                <!--cart_status_icon_{$dropdown_id}--></a>
        </div>
        <div id="dropdown_{$dropdown_id}" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            {$cart_content = $smarty.session.cart}
            {hook name="checkout:minicart"}
                <div class="cm-cart-content {if $block.properties.products_links_type == "thumb"}cm-cart-content-thumb{/if} {if $block.properties.display_delete_icons == "YesNo::YES"|enum}cm-cart-content-delete{/if}" id="cart_status_content_{$dropdown_id}">
                    <div class="ut2-popup-box-title">{__("cart_items")}
                        {if $cart_content.amount > 0}({$cart_content.amount}){/if} <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_{$dropdown_id}"><i class="ut2-icon-baseline-close"></i></div>
                    </div>

                    <div class="ut2-minicart{if $block.properties.display_bottom_buttons == "YesNo::YES"|enum} has-bottom-buttons{else} no-bottom-buttons{/if}{if $block.properties.display_delete_icons == "YesNo::YES"|enum && (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate} has-rm-btn{/if}">
                        {if $cart_content.amount}

                            {assign var="cart_product_icon_width" value=($settings.Thumbnails.product_cart_thumbnail_width|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_width : 80)}
                            {assign var="cart_product_icon_height" value=($settings.Thumbnails.product_cart_thumbnail_height|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_height : 80)}

                            <div class="ut2-added-products"
                                style="--cart-product-icon-width:{$cart_product_icon_width}px;--cart-product-icon-height:{$cart_product_icon_height}px;">
                                {hook name="index:cart_status"}
                                    {assign var="_cart_products" value=$cart_content.products|array_reverse:true}
                                    {$_cart_products = fn_abt__ut2_get_products_options($_cart_products)}
                                    {foreach from=$_cart_products key="key" item="product" name="cart_products"}
                                        {hook name="checkout:minicart_product"}
                                            {if !$product.extra.parent}

                                                <div class="ut2-added-products__item{if $product.extra.buy_together} ut2-bt_added-set-main-product{/if}">
                                                    {hook name="checkout:minicart_product_info"}

                                                        {capture name="added_product_mix_quantity_x_price"}
                                                            {strip}
                                                                <div class="mix-quantity-x-price">
                                                                    <bdi class="bdi-add-wrapper">
                                                                        <span class="mix-quantity-x">
                                                                            <span class="unit-quantity">{$product.amount}</span>
                                                                            <span class="white-space">&nbsp;</span>x
                                                                        </span>
                                                                        <span class="unit-price">
                                                                            {include file="common/price.tpl" value=$product.display_price span_id="price_`$key`_`$dropdown_id`" class="none"}
                                                                        </span>
                                                                    </bdi>
                                                                </div>
                                                            {/strip}
                                                        {/capture}

                                                        <div class="ut2-added-products__itself-item">
                                                            {if $block.properties.products_links_type == "thumb"}
                                                                <div class="product-pict">
                                                                    <div class="pict-underlay">
                                                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                                                            {include file="common/image.tpl" images=$product.main_pair no_ids=true lazy_load=false
                                                                            image_width=$cart_product_icon_width
                                                                            image_height=$cart_product_icon_height}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            {/if}

                                                            <div class="desc">
                                                                <div class="base">

                                                                    <div class="product-name">
                                                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                                                            {$product.product|default:fn_get_product_name($product.product_id) nofilter}
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

                                                                    {if $product.product_options}
                                                                        <div class="options-variations-readonly">
                                                                            {include file="common/options_info.tpl" product_options=$product.product_options no_block=true}
                                                                        </div>
                                                                    {/if}

                                                                </div>

                                                                {if !$product.extra.buy_together}
                                                                    {$smarty.capture.added_product_mix_quantity_x_price nofilter}
                                                                {/if}

                                                            </div>

                                                            {if $block.properties.display_delete_icons == "YesNo::YES"|enum}
                                                                {if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate}
                                                                    <div class="ut2-minicart__rm-btn">
                                                                        <a class="cm-ajax cm-ajax-full-render ut2-cart-item-delete" data-ca-dispatch="delete_cart_item" href="{"checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`"|fn_url}" data-ca-target-id="cart_status*"><i class="ut2-icon-delete"></i></a>
                                                                    </div>
                                                                {/if}
                                                            {/if}
                                                        </div>

                                                        {hook name="checkout:minicart_product_info_extra"}{/hook}

                                                        {if $product.extra.buy_together}
                                                            {$smarty.capture.added_product_mix_quantity_x_price nofilter}
                                                        {/if}

                                                    {/hook}
                                                </div>

                                            {/if}
                                        {/hook}
                                    {/foreach}
                                {/hook}
                            </div>
                        {else}
                            <div class="ut2-minicart__empty">{__("cart_is_empty")}</div>
                        {/if}
                    </div>

                    {if $block.properties.display_bottom_buttons == "YesNo::YES"|enum}
                        <div class="cm-cart-buttons buttons-container {if $cart_content.amount} full-cart{else} hidden{/if}">
                            {hook name="checkout:cart_subtotal"}
                            {if $cart_content.amount > 1 || $product.extra.buy_together}
                                <div class="cart_subtotal">
                                    <div class="ut2-cart_subtotal__caption">{__("total_items")}:</div>
                                    <div class="ut2-cart_subtotal__data">{$cart_content.amount}&nbsp;{__("items")} {__("for")}&nbsp;&nbsp;<strong>{include file="common/price.tpl" value=$cart_content.display_subtotal}</strong></div></div>
                            {/if}
                            {/hook}
                            <div class="cart_buttons">
                                <a href="{"checkout.cart"|fn_url}" rel="nofollow" class="ty-btn ty-btn__outline">{__("view_cart")}</a>
                                {if $settings.Checkout.checkout_redirect != "YesNo::YES"|enum}
                                    {include file="buttons/proceed_to_checkout.tpl" but_text=__("checkout")}
                                {/if}
                            </div>
                        </div>
                    {/if}
                    <!--cart_status_content_{$dropdown_id}--></div>
            {/hook}
        </div>
        <div class="cm-external-click ui-widget-overlay hidden" data-ca-external-click-id="sw_dropdown_{$dropdown_id}"></div>
        <!--aside_cart_status_{$dropdown_id}--></div>
{/hook}