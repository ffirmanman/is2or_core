{if $cart.products.$key.extra.buy_together}
    {foreach from=$cart_products item="_product" key="key_conf"}
        {if $cart.products.$key_conf.extra.parent.buy_together == $key}
            {capture name="is_conf_prod"}1{/capture}
        {/if}
    {/foreach}

    {if $smarty.capture.is_conf_prod}
        <div class="ut2-bt_set-related-products" id="buy_together_{$key}">
            {foreach from=$cart_products item="_product" key="key_conf"}
                {$product = $_product}
                {if $cart.products.$key_conf.extra.parent.buy_together == $key}

                    <div class="ut2-cart-products__item">

                        <div class="ut2-cart-product-base">

                            <div class="product-pict">
                                <div class="pict-underlay">
                                    <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">
                                        {include file="common/image.tpl" images=$_product.main_pair no_ids=true lazy_load=false
                                        image_width=$cart_product_icon_width
                                        image_height=$cart_product_icon_height}
                                    </a>
                                </div>
                            </div>


                            <div class="ut2-cart-product-desc">

                                <div class="product-name">
                                    <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">
                                        {$_product.product nofilter}
                                    </a>
                                </div>


                                {if $_product.product_code|trim}
                                    <div class="ty-control-group ty-sku-item">
                                        <div class="ty-control-group__label">{__("sku")}:</div>
                                        <div class="ut2_copy"
                                             title="{__("copy")}">
                                            <i class="ut2-icon-copy"></i>
                                            <span class="ut2--sku-text">{$_product.product_code}</span>
                                        </div>
                                    </div>
                                {/if}


                                {if empty($addons.direct_payments) || $addons.direct_payments.status != "A" || $runtime.controller == "checkout"}
                                    {include file="views/companies/components/product_company_data.tpl" company_name=$_product.company_name company_id=$_product.company_id}
                                {/if}


                                {if $runtime.controller != "checkout"}
                                    {hook name="products:product_additional_info"}{/hook}
                                {/if}


                                {if $_product.product_options}
                                    <div class="options-variations-readonly is-bt-set">
                                        {strip}
                                            {foreach from=$_product.product_options item="option"}
                                                <div class="ty-product-options">
                                                    <div class="ty-product-options-name">{$option.option_name}:<span class="white-space">&nbsp;</span></div>
                                                    <div class="ty-product-options-content">
                                                        {if $option.option_type == "ProductOptionTypes::FILE"|enum}
                                                            {if $_product.extra.custom_files[$option.option_id]}
                                                                {foreach from=$_product.extra.custom_files[$option.option_id] key="file_id" item="file" name="po_files"}
                                                                    <a class="cm-no-ajax"
                                                                       href="{"checkout.get_custom_file?cart_id=`$key_conf`&file=`$file_id`&option_id=`$option.option_id`"|fn_url}">
                                                                        {$file.name}
                                                                    </a>
                                                                    {if !$smarty.foreach.po_files.last},&nbsp;{/if}
                                                                {/foreach}
                                                            {/if}
                                                        {else}
                                                            {$option.variants[$option.value].variant_name|default:$option.value}
                                                        {/if}
                                                        {if $runtime.controller != "checkout"}
                                                            <input type="hidden" name="cart_products[{$key_conf}][product_options][{$option.option_id}]" value="{$option.value}">
                                                        {/if}
                                                    </div>
                                                </div>
                                            {/foreach}
                                        {/strip}
                                    </div>
                                {/if}

                            </div>

                        </div>


                        <div class="ut2-cart-product-price-info is-bt-set">
                            <div class="ut2-cart-product-exinfo">
                                <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                    <div class="ut2-cart-product-exinfo-header">{__("unit_price")}</div>
                                    <div class="ut2-cart-product-exinfo-body">
                                        {strip}
                                            <div class="mix-quantity-x-price">
                                                <bdi class="bdi-add-wrapper">
                                                    <span class="mix-quantity-x">
                                                        <span class="unit-quantity">{$_product.amount}</span>
                                                        <span class="white-space">&nbsp;</span>x
                                                    </span>
                                                    <span class="unit-price">
                                                        {include file="common/price.tpl" value=$_product.price}
                                                    </span>
                                                </bdi>
                                            </div>
                                        {/strip}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                {/if}
            {/foreach}
        </div>
    {/if}
{/if}