{if $product.extra.buy_together}
    <div class="ut2-bt_added-set-related-products">
        {assign var="added_bt_set_count" value=0}
        {foreach from=$_cart_products item="_product" key="_key"}
            {if $_product.extra.parent.buy_together == $key}
                {assign var="added_bt_set_count" value=$added_bt_set_count + 1}
                <div class="ut2-added-products__item">
                    <div class="ut2-added-products__itself-item">

                        {if $block.properties.products_links_type == "thumb"}
                            <div class="product-pict">
                                {if $added_bt_set_count === 1}<div class="plus"></div>{/if}
                                <div class="pict-underlay">
                                    <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">
                                        {include file="common/image.tpl" images=$_product.main_pair no_ids=true lazy_load=false
                                        image_width=$cart_product_icon_width
                                        image_height=$cart_product_icon_height}
                                    </a>
                                </div>
                            </div>
                        {/if}

                        <div class="desc">
                            <div class="base">

                                <div class="product-name">
                                    <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">
                                        {$_product.product|default:fn_get_product_name($_product.product_id) nofilter}
                                    </a>
                                </div>

                                {if $_product.variation_features}
                                    <div class="options-variations-readonly">
                                        {strip}
                                            {foreach from=$_product.variation_features item="v_feature"}
                                                <div class="ty-product-options">
                                                    <div class="ty-product-options-name">{$v_feature.description}:<span class="white-space">&nbsp;</span></div>
                                                    <div class="ty-product-options-content">{$v_feature.variant}</div>
                                                </div>
                                            {/foreach}
                                        {/strip}
                                    </div>
                                {/if}

                                {if $_product.product_option_data}
                                    <div class="options-variations-readonly">
                                        {include file="common/options_info.tpl" product_options=$_product.product_option_data}
                                    </div>
                                {/if}

                            </div>

                            {strip}
                                <div class="mix-quantity-x-price">
                                    <bdi class="bdi-add-wrapper">
                                        <span class="mix-quantity-x">
                                            <span class="unit-quantity">{$_product.amount}</span>
                                            <span class="white-space">&nbsp;</span>x
                                        </span>
                                        <span class="unit-price">
                                            {include file="common/price.tpl" value=$_product.display_price span_id="price_`$key`_`$dropdown_id`" class="none"}
                                        </span>
                                    </bdi>
                                </div>
                            {/strip}

                        </div>

                    </div>
                </div>
            {/if}
        {/foreach}
    </div>
{/if}