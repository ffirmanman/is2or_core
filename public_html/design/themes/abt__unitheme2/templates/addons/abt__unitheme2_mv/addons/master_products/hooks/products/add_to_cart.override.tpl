{if $product.master_product_id || !$product.company_id}
    {hook name="products:add_to_cart"}
        {*{$obj_id = $product.best_product_offer_id}*}
        {if $product.best_product_offer_id}
            {$obj_id = $product.best_product_offer_id}
        {else}
            {$obj_id = $product.product_id}
        {/if}
        {if $product.has_options && !$show_product_options && !$details_page}

            {$preselected_options = $product.combination}

            {if $settings.ab__device === "mobile"}
                <span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content"
                      data-ca-product-id="{$product.product_id}"
                      {if $preselected_options}data-ca-combination="{$preselected_options}"{/if}>
                    <span class="ty-icon ut2-icon-use_icon_cart"></span>
                    <bdi>{__("add_to_cart")}</bdi>
                </span>
            {else}
                {$href="products.ut2_select_variation?product_id={$product.product_id}&prev_url={$config.current_url|urlencode}"}

                {if $preselected_options}
                    {$href="`$href`&combination=`$preselected_options`"}
                {/if}

                {include file="common/popupbox.tpl"
                href=$href
                text=__("add_to_cart")
                id="ut2_select_options_{$obj_prefix}{$product.product_id}"
                link_text=__("add_to_cart")
                link_icon="ut2-icon-use_icon_cart"
                link_icon_first=true
                title=__("add_to_cart")
                link_meta="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close"
                content=""
                dialog_additional_attrs=[
                "data-ca-product-id" => $product.product_id,
                "data-ca-dialog-purpose" => "ut2_select_options"
                ]
                }
            {/if}

            {assign var="cart_button_exists" value=true}

            {*<a href="{"products.view?product_id=`$product.product_id`"|fn_url}"
               class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart {$add_to_cart_meta}">
                <span class="ut2-icon-use_icon_cart"></span>
                <span>{__("add_to_cart")}</span>
            </a>*}

        {else}
            {hook name="products:add_to_cart_but_id"}
                {$_but_id="button_cart_`$obj_prefix``$obj_id`"}
            {/hook}

            {if $extra_button}{$extra_button nofilter}&nbsp;{/if}
            {include file="buttons/add_to_cart.tpl" but_id=$_but_id but_name="dispatch[checkout.add..`$obj_id`]" but_role=$but_role block_width=$block_width obj_id=$obj_id product=$product but_meta=$add_to_cart_meta}

            {capture name="add_to_cart_button_secondary_temp_`$obj_id`" assign="add_to_cart_button_secondary_temp_`$obj_id`"}
                <div class="cm-reload-{$obj_prefix}{$obj_id}" id="add_to_cart_update_secondary_{$obj_prefix}{$obj_id}">
                    {include file="buttons/add_to_cart.tpl"
                        but_id="`$_but_id`_secondary"
                        but_name="dispatch[checkout.add..`$obj_id`]"
                        but_role=$but_role
                        block_width=$block_width
                        obj_id=$obj_id
                        product=$product
                        add_to_cart_meta="`$add_to_cart_meta` ty-btn__add-to-cart--secondary"
                        but_text=__("add_to_cart_short")
                    }
                <!--add_to_cart_update_secondary_{$obj_prefix}{$obj_id}--></div>
            {/capture}
            {* Unset temp capture *}
            {capture name="add_to_cart_button_secondary_temp_`$obj_id`"}{/capture}

            {* Export *}
            {$add_to_cart_button_secondary_temp_override_{$obj_id} = $add_to_cart_button_secondary_temp_{$obj_id} scope=parent}
            {$obj_id_override = $obj_id scope=parent}
            {* /Export *}

            {assign var="cart_button_exists" value=true}
        {/if}

        {if $product.best_product_offer_id}
            <input type="hidden" name="product_data[{$product.product_id}][product_id]" value="{$product.best_product_offer_id}" />
        {/if}
    {/hook}
{/if}