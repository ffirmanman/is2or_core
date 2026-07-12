{if $product.variation_features_variants}
    {script src="js/addons/product_variations/picker_features.js"}
    <div class="variations-pre-options">{* additional wrapper is required for unified structure with options *}
        <div class="variations-pre-options__add-in">{* additional wrapper is required for unified structure with options *}
            <div class="cm-picker-cart-product-variation-features ty-product-options">
                {foreach $product.variation_features_variants as $feature}
                    <div class="ty-control-group ty-product-options__item clearfix">
                        <label class="ty-control-group__label ty-product-options__item-label">{$feature.description}:</label>
                        <div class="ty-product-options__item-select-bdi">
                            {if $feature.prefix}
                                <span>{$feature.prefix}</span>
                            {/if}
                            <select class="ty-product-options__item-select cm-ajax"
                                    data-ca-target-id="checkout*,cart*"
                                    dir="{$language_direction}">
                                {foreach $feature.variants as $variant}
                                    {if $variant.product}
                                        <option data-ca-variant-id="{$variant.variant_id}"
                                                data-ca-product-id="{$variant.product.product_id}"
                                                data-ca-change-url="{"checkout.change_variation?cart_item_id={$key}&product_id={$variant.product.product_id}"|fn_url}"
                                                {if $feature.variant_id == $variant.variant_id}selected="selected"{/if}
                                        >
                                            <bdi>{$variant.variant}</bdi>
                                        </option>
                                    {elseif $addons.product_variations.variations_show_all_possible_feature_variants === "YesNo::YES"|enum}
                                        <option disabled><bdi>{$variant.variant}</bdi></option>
                                    {/if}
                                {/foreach}
                            </select>
                            {if $feature.suffix}
                                <span>{$feature.suffix}</span>
                            {/if}
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
{/if}