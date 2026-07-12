{$obj_id = "`$recommended_product.product_id`_rec_product"}
{include file="common/product_data.tpl" product=$recommended_product obj_id=$obj_id show_add_to_cart_block=false}

<div class="ab__product_recommendations">
    <a href="{"products.view?product_id=`$recommended_product.product_id`"|fn_url}">
        <div class="ab__pr-image">
            {include file="common/image.tpl" images=$recommended_product.main_pair.detailed image_height=$image_height|default:80  image_width=$image_width|default:80}
        </div>
        <div>
            <div class="ab__pr-header">{__("ab__pr.we_recommend")}</div>
            <div class="ab__pr-title">{$recommended_product.product}</div>
            <div class="ab__pr-price">{include file="common/price.tpl" value=$recommended_product.price}</div>
            {*                {$smarty.capture["price_`$obj_id`"] nofilter}*}
            {if $recommended_product.list_price > $recommended_product.price}
                <div class=" ty-product-prices pr-{$settings.abt__ut2.product_list.price_display_format}{if $product.list_discount || $product.discount} pr-color{/if}">
                    {$smarty.capture["old_price_`$obj_id`"] nofilter}
                </div>
            {/if}
        </div>
    </a>
</div>
