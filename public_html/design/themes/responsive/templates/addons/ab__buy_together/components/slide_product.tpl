<div class="ab__bt_product splide__slide cm-dialog-closer {$class}" data-ca-product-id="{$_product.product_id}">
    {if $smarty.request.force_chain_id}
        {$identifier = "`$smarty.request.force_chain_id`_`$_product.product_id`"}
    {else}
        {$identifier = "`$chain.chain_id`_`$_product.product_id`"}
    {/if}
    <div class="cm-reload-{$obj_prefix}{$_product.product_id}"  id="bt_product_prices_container_{$identifier}">
    <div class="ab__bt_product_prices_container" data-ca-product-id="{$_product.product_id}" data-ca-product-price="{$_product.price}" data-ca-discounted-price="{$_product.discounted_price}">
        <!--CONTENT-->
    </div>
    <!--bt_product_prices_container_{$identifier}--></div>
    <input type="hidden" name="product_data[{$_product.product_id}][product_id]" value="{$_product.product_id}" />

    <div class="ab__bt_product-image cm-reload-{$obj_prefix}{$_product.product_id}" >
        <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">{include file="common/image.tpl" image_width="150" image_height="150"  obj_id="`$chain.chain_id`_`$_product.product_id`" images=$_product.main_pair class="ab__bt_product-image" lazy_load=false}</a>
        <!--bt_product_image_{$identifier}--></div>

        {if $_product.price != $_product.discounted_price }
        {$discount_prc = round((1-$_product.discounted_price/$_product.price)*100)}
        {if $discount_prc > 0}
            <div class="ty-product-labels ty-product-labels--left-top">
                <div class="ty-product-labels__item ty-product-labels__item--discount"><span class="ty-product-labels__content">-{$discount_prc|string_format:"%d"}%{*{include file="common/price.tpl" value=$_product.discount|string_format:"%d"}*}</span></div>
            </div>
        {/if}
        {/if}
        
        <div class="ab__bt_product-wrap">

    	<div class="ab__bt_rating-stars">
            {if $addons.product_reviews.status == "ObjectStatuses::ACTIVE"|enum}
                {if $_product.product_reviews_count}<div class="cn-reviews">({$_product.product_reviews_count})</div>{/if}
                {if $_product.average_rating}
                    {include file="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"
                        rating=$_product.average_rating
                        link=false
                        product=$_product
                    }
                {else}
                    <div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div>
                {/if}
            {else}
                {assign var="rating" value="rating_$obj_id"}
                {if $smarty.capture.$rating|strlen > 40 && $_product.discussion_type && $product.discussion_type != "D"}
                    {$smarty.capture.$rating nofilter}
                {elseif $addons.discussion.status == "ObjectStatuses::ACTIVE"|enum}
                     <span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                {/if}
            {/if}
        </div>
		
        <div class="ab__bt_product-name">
            <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">{$_product.product_name|truncate:66:"...":true}</a>

            {if $_product.product_options}
                
                <a href="javascript:void(0);" title="{foreach from=$_product.product_options item="option"}<p>{$option.option_name}: {$option.variants[$option.value].variant_name|default:$option.variant_name}</p>{/foreach}" class="ab__bt-option cm-tooltip"><i class="ty-icon-help-circle"></i> <span>{__("options")}</span></a>
                    
                {if $behavior_of_similar_products == "popup"} 
                    <div class="ab__bt-option ab__bt-option-mobile">{foreach from=$_product.product_options item="option"}<p>{$option.option_name}: {$option.variants[$option.value].variant_name|default:$option.variant_name}</p>{/foreach}</div>
                {/if}
            {elseif $_product.aoc}
                {capture name="buy_together_product_options"}
                    <div id="buy_together_options_{$identifier}" class="ab__bt-box cm-reload-{$obj_prefix}{$_product.product_id}">
                        <div class="{$buy_together_options_class}" id="buy_together_options_update_{$identifier}">
                            <input type="hidden" name="appearance[show_product_options]" value="1" />
                            <input type="hidden" name="appearance[bt_chain]" value="{$chain.chain_id}" />
                            <input type="hidden" name="appearance[bt_id]" value="{$_id}" />
                            {include file="views/products/components/product_options.tpl" product=$_product obj_id=$_product.product_id id=$_product.product_id  product_options=$_product.options name="product_data" no_script=true extra_id="`$_product.product_id`_`$chain.chain_id`"}
                            <!--buy_together_options_update_{$identifier}--></div>
        
                        {include file="buttons/button.tpl" but_id="add_item_close" but_name="" but_text=__("save_and_close") but_role="action" but_meta="ty-btn__primary cm-dialog-closer"}
                    </div>
                {/capture}
                
                <div class="ab__bt_product-options{if $behavior_of_similar_products != "popup"} ab__bt_optopns-bt-icon{/if}">
                    {capture name="options_popup"}
                    {include file="common/popupbox.tpl" id="buy_together_options_`$chain.chain_id`_`$_product.product_id`_`$rand`" content=$smarty.capture.buy_together_product_options link_meta="ty-btn ab__bt_settings-icon" link_icon_first=true link_icon="ty-icon-cog" text=__("specify_options") act="general"}
                    {/capture}
                    {$smarty.capture.options_popup|replace:'href="#"':"" nofilter}
                </div>
            {/if}
        </div>

        <div class="ab__bt_product-price {if $_product.price != $_product.discounted_price}discounted{/if} cm-reload-{$obj_prefix}{$_product.product_id}" id="bt_product_price_{$identifier}">
            {if $_product.amount > 1}<span class="count">{$_product.amount}x</span>{/if}
            {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                <span class="price">{include file="common/price.tpl" value=$_product.discounted_price}</span>
                {if $_product.price != $_product.discounted_price}
                    <span class="ty-strike">{include file="common/price.tpl" value=$_product.price}</span>
                {/if}
            {/if}
            <!--bt_product_price_{$identifier}--></div>
            {if $behavior_of_similar_products == "popup"}<div class="ab__bt_select-product-label hidden"><input type="checkbox"><input type="checkbox" checked="checked"><span class="select">{__("select_product")}</span><span class="selected">{__("selected")}</span></div>{/if}
    </div>
</div>