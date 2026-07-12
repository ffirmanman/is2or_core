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

                {if $block.properties.template == 'blocks/abt__ut2_cart_content_aside.tpl'}

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

                {/if}

            </div>

            {if !$product.extra.buy_together}
                {$smarty.capture.added_product_mix_quantity_x_price nofilter}
            {/if}

        </div>

        {capture name="delete_minicart_product_button"}
            <div class="ut2-minicart__rm-btn">
                <a class="cm-ajax cm-ajax-full-render ut2-cart-item-delete" data-ca-dispatch="delete_cart_item" href="{"checkout.delete.from_status?vendor_id=`$product.company_id`&cart_id=`$key`&redirect_url=`$r_url`"|fn_url}" data-ca-target-id="cart_status*"><i class="ut2-icon-delete"></i></a>
            </div>
        {/capture}

        {if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate}
            {if isset($block.properties.display_delete_icons)}
                {if $block.properties.display_delete_icons == "YesNo::YES"|enum}
                    {$smarty.capture.delete_minicart_product_button nofilter}
                {/if}
            {else}
                {$smarty.capture.delete_minicart_product_button nofilter}
            {/if}
        {/if}

    </div>

    {hook name="checkout:minicart_product_info_extra"}{/hook}

    {if $product.extra.buy_together}
        {$smarty.capture.added_product_mix_quantity_x_price nofilter}
    {/if}

{/hook}