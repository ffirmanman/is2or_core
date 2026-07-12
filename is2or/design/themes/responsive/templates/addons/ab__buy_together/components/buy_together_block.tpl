{if $chains}
    {$show_scroll = $show_scroll|default:true && $addons.ab__buy_together.combinations_list_view == 'scroller' && $chains|count>1}
    {$behavior_of_similar_products = $addons.ab__buy_together.behavior_of_similar_products}

    {if $settings.ab__device == "mobile"}
        {$behavior_of_similar_products = "popup"}
    {/if}

    {script src="js/tygh/exceptions.js"}
    {script src="js/addons/ab__buy_together/func.js"}
    {strip}
        <div class="ab__buy-together" id="ab__buy-together">
            {if !$config.tweaks.disable_dhtml && !$no_ajax}
                {assign var="is_ajax" value=true}
            {/if}

            {foreach from=$chains key="key" item="chain" name="chains"}
                {$rand = rand()}
                {if $smarty.request.force_chain_id}
                    {assign var="obj_prefix" value="bt_`$smarty.request.force_chain_id`"}
                {else}
                    {assign var="obj_prefix" value="bt_`$chain.chain_id`"}
                {/if}
{*                {assign var="obj_prefix" value="bt_`$chain.chain_id`"}*}
                <form class="ab__bt_chain_form {if $is_ajax}cm-ajax cm-ajax-full-render{/if}{if !$smarty.foreach.chains.first && $show_scroll} hidden{/if}"
                      action="{""|fn_url}" method="post" name="chain_form_{$chain.chain_id}"
                      data-ca-chain-id="{$chain.chain_id}"
                      enctype="multipart/form-data">
                    {if $chain.generator_id}
                        <input type="hidden" name="generator_id" value="{$chain.generator_id}"/>
                        <input type="hidden" name="base_product_id" value="{$chain.product_id}"/>
                    {/if}
                    <input type="hidden" name="redirect_url" value="{$config.current_url}"/>
                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*"/>
                    {if !$stay_in_cart || $is_ajax}
                        <input type="hidden" name="redirect_url" value="{$config.current_url}"/>
                    {/if}
                    <input type="hidden" class="ab__chain_id"
                           name="product_data[{$chain.product_id}_{$chain.chain_id}][chain]"
                           value="{$chain.chain_id}"/>
                    <input type="hidden" class="ab__product_id"
                           name="product_data[{$chain.product_id}_{$chain.chain_id}][product_id]"
                           value="{$chain.product_id}"/>


                    {assign var="buy_together_options_class" value="cm-reload-{$obj_prefix}{$chain.product_id}"}

                    {if $chain.products}
                        {foreach from=$chain.products key="_id" item="_product"}
                            {assign var="buy_together_options_class" value="{$buy_together_options_class} cm-reload-{$obj_prefix}{$_product.product_id}"}
                        {/foreach}
                    {/if}

                    <div class="ab__bt {if $chain.products|count > 3}scroll{/if} clearfix">

                        <div class="subheader">{$chain.name}</div>

                        {if $chain.description}
                            <div class="ab__bt_description">
                                {$chain.description nofilter}
                            </div>
                        {/if}

                        <div class="ab__bt_box">
                            <div class="ab__bt_products ty-scroll-x">

                                {if $chain.products}
                                
                                    <div class="ab__bt_product {if $behavior_of_similar_products == "popup"} ab__bt_popup{/if}">
                                        <div class="ab__bt_product-image cm-reload-{$obj_prefix}{$chain.product_id}"
                                             id="bt_product_image_{$obj_prefix}{$chain.product_id}_main">
                                            <a href="{"products.view?product_id=`$chain.product_id`"|fn_url}">{include file="common/image.tpl" image_width="150" image_height="150" obj_id="`$chain.chain_id`_`$chain.product_id`" images=$chain.main_pair class="ab__bt_product-image" lazy_load=false}</a>
                                            <!--bt_product_image_{$obj_prefix}{$chain.product_id}_main-->
                                        </div>

                                        <div class="ab__bt_product-wrap">

                                    	<div class="ab__bt_rating-stars">
                                            {if $addons.product_reviews.status == "ObjectStatuses::ACTIVE"|enum}
                                                {if $product.product_reviews_count}<div class="cn-reviews">({$product.product_reviews_count})</div>{/if}
                                                {if $product.average_rating}
                                                    {include file="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"
                                                        rating=$product.average_rating
                                                        link=false
                                                        product=$product
                                                    }
                                                {else}
                                                    <div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div>
                                                {/if}
                                            {else}
                                                {assign var="rating" value="rating_$obj_id"}
                                                {if $smarty.capture.$rating|strlen > 40 && $product.discussion_type && $product.discussion_type != "D"}
                                                    {$smarty.capture.$rating nofilter}
                                                {elseif $addons.discussion.status == "ObjectStatuses::ACTIVE"|enum}
                                                     <span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                                                {/if}
                                            {/if}
                                        </div>

                                        <div class="ab__bt_product-name">
                                            <a href="{"products.view?product_id=`$chain.product_id`"|fn_url}">{$chain.product_name|truncate:66:"...":true}</a>
                                        </div>

                                        {if $chain.product_options}
                                            {capture name="buy_together_product_options"}
                                                <div id="buy_together_options_{$chain.chain_id}_{$key}_main" class="ab__bt-box">
                                                    <div class="{$buy_together_options_class}"
                                                         id="buy_together_options_update_{$chain.chain_id}_{$chain.product_id}_main">
                                                        <input type="hidden" name="appearance[show_product_options]"
                                                               value="1"/>
                                                        <input type="hidden" name="appearance[bt_chain]"
                                                               value="{$chain.chain_id}"/>
                                                        <input type="hidden" name="appearance[bt_id]" value="{$key}"/>

                                                        {include file="views/products/components/product_options.tpl" product=$chain id="`$chain.product_id`_`$chain.chain_id`" product_options=$chain.product_options name="product_data" no_script=true extra_id="`$chain.product_id`_`$chain.chain_id`_main"}
                                                        <!--buy_together_options_update_{$chain.chain_id}_{$chain.product_id}_main-->
                                                    </div>
                                                    {include file="buttons/button.tpl" but_id="add_item_close" but_name="" but_text=__("save_and_close") but_role="action" but_meta="cm-dialog-closer"}
                                                </div>
                                            {/capture}
                                            <div class="ab__bt_product-options">
                                                {include file="common/popupbox.tpl" id="buy_together_options_`$chain.chain_id`_`$chain.product_id`_main" link_meta="ty-btn ty-btn__tertiary cm-dialog-keep-in-place" text=__("specify_options") content=$smarty.capture.buy_together_product_options link_text=__("specify_options") act="general"}
                                            </div>
                                        {/if}

                                        <div class="ab__bt_product-price cm-reload-{$obj_prefix}{$chain.product_id}"
                                             id="bt_product_price_{$obj_prefix}{$chain.product_id}_main">
                                            {if $chain.min_qty > 1}<span class="count">{$chain.min_qty}x</span>{/if}
                                            {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                                                <span class="price">{include file="common/price.tpl" value=$chain.discounted_price}</span>
                                                <input type="hidden" name="discounted_price[]"
                                                       value="{$chain.discounted_price}">
                                                <input type="hidden" name="total_price[]"
                                                       value="{$chain.price}">
                                                {if $chain.price != $chain.discounted_price}
                                                    <input type="hidden" name="total_price[]"
                                                           value="{$chain.price}">
                                                    <span class="ty-strike">{include file="common/price.tpl" value=$chain.price}</span>
                                                {/if}
                                            {/if}
                                            <!--bt_product_price_{$obj_prefix}{$chain.product_id}_main-->
                                        </div>
                                        </div>
                                    </div>
                                {/if}

                                {foreach $chain.products as $_id => $_product}

                                    {if $_product.translates[$smarty.const.CART_LANGUAGE].title}
                                        {$title_string = $_product.translates[$smarty.const.CART_LANGUAGE].title}
                                    {else}
                                        {$title_string = $_product.product_data.main_category|fn_get_category_name}
                                    {/if}

                                    <div class="ab__bt_plus chain-plus">+</div>
                                    {capture name="additional_products"}
                                        {if $chain.generator_id && $products_positions[$chain.generator_id][$_product@index] &&  count($products_positions[$chain.generator_id][$_product@index])}
                                            {foreach $products_positions[$chain.generator_id][$_product@index] as $id => $product}
                                                {include file="addons/ab__buy_together/components/slide_product.tpl" _product=$product _id=$id}
                                            {/foreach}
                                        {/if}
                                    {/capture}
                                    
                                    <div id="ab__bt_{$chain.chain_id}_{$_id}" class="products_container{if $behavior_of_similar_products == "popup"} ab__bt_popup{/if}{if $smarty.capture.additional_products|trim && $behavior_of_similar_products == "scroller"} splide{/if}">
                                        
                                        {if $_product.unrequired}
                                            <a href="javascript:void(0);" onclick="Tygh.$.togglePositionAvailability(this);" class="ab__bt_requared_pr_check"><i class="ty-icon-ok"></i>{$title_string}</a>
                                        {else}
                                            <span class="ab__bt_requared_pr_check">{$title_string}</span>
                                        {/if}
                                    
                                        {if $smarty.capture.additional_products|trim && $behavior_of_similar_products == "scroller"}
                                        <div class="splide__track">
                                            <div class="splide__list">{/if}

                                                <input type="hidden" name="product_ids[]"
                                                       value="{$_product.product_id}">
                                                <input type="hidden" name="total_price[]"
                                                       value="{$_product.price}">
                                                <input type="hidden" name="discounted_price[]"
                                                       value="{$_product.discounted_price}">
                                                {capture name="chain_popup"}
                                                    {include file="addons/ab__buy_together/components/slide_product.tpl" class="active"}
                                                    {$smarty.capture.additional_products nofilter}
                                                {/capture}

                                                {$smarty.capture.chain_popup nofilter}
                                                {if $smarty.capture.additional_products|trim}
                                                    {if $behavior_of_similar_products == "scroller"}
                                                    </div>
                                                    </div>
                                                    {/if}
                                                {/if}

                                                {if $smarty.capture.additional_products|trim}
                                                {if $behavior_of_similar_products == "popup"}
                                                    <a href=""
                                                       data-ca-target-id="content_buy_together_additional_{$chain.chain_id}_{$_id}_{$rand}"
                                                       class="cm-dialog-opener cm-dialog-auto-size cm-dialog-keep-in-place ab__bt_link-sp"
                                                       data-ca-dialog-title="{$_product.translates[$smarty.const.CART_LANGUAGE].title|trim|default:__("select_product")}">
                                                        <i class="ty-icon-refresh"></i> <span class="">{__("select_product")}</span>
                                                    </a>
                                                    <div id="content_buy_together_additional_{$chain.chain_id}_{$_id}_{$rand}" class="hidden">
                                                        <div  class='ab__bt_products_popup' data-ca-parent-container='ab__bt_{$chain.chain_id}_{$_id}'>{$smarty.capture.chain_popup|replace:["content_buy_together_options","cm-reload","buy_together_options_update"]:["content_buy_together_options_fake","fake","buy_together_options_update_fake"] nofilter}</div>
                                                    </div>
                                                {/if}
                                                {/if}
                                    </div>
                                {/foreach}
                            </div>

                            <div class="ab__bt_price-block">
                                <div class="ab__bt_plus chain-equally"></div>
                                <div class="ab__bt_price-wrap">
                                    {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                                        <div class="ab__bt_price {$buy_together_options_class}" id="bt_total_price_{$obj_prefix}{$chain.product_id}">
                                            <div class="ab__bt_price__old">
                                                <span class="ab__bt_price__title">{__("total_list_price")}</span>
                                                <span class="chain-old-line ty-strike">{include file="common/price.tpl" value=$chain.total_price}</span>
                                            </div>
                                            <div class="ab__bt_price__new">
                                                <span class="ab__bt_price__title">{__("price_for_all")}</span>
                                                <span class="price">{include file="common/price.tpl" value=$chain.chain_price}</span>
                                            </div>
                                            <!--bt_total_price_{$obj_prefix}{$chain.product_id}-->
                                        </div>
                                        {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_add_to_cart_button")}
                                            <div class="cm-ab__bt-submit" id="wrap_chain_button_{$chain.chain_id}">
                                                {include file="buttons/button.tpl" but_text=__("add_all_to_cart") but_id="chain_button_`$chain.chain_id`" but_meta="ty-btn__primary" but_name="dispatch[checkout.add]" but_role="action" obj_id=$obj_id}
                                            </div>
                                        {/if}
                                    {else}
                                        <p>{__("sign_in_to_view_price")}</p>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            {/foreach}
        </div>

        {if $behavior_of_similar_products == "scroller"}
            {script src="js/addons/ab__buy_together/lib/splidejs/splide.min.js"}
            {style src="../../responsive/css/addons/ab__buy_together/splide.min.css"}
        {/if}

            <script>

                (function (_, $) {




                    let _setInputs = (container, productId, productPrice, discountedPrice) => {
                        container.querySelector('input[name^=product_ids]').value = productId;
                        container.querySelector('input[name^=total_price]').value = productPrice;
                        container.querySelector('input[name^=discounted_price]').value = discountedPrice;
                    };

                    $.ceEvent('on', 'ce.commoninit', function (context) {

                        var elm = context.find('#ab__buy-together');
                        var desktop = [1230, 1],
                            desktopSmall = [1024, 1],
                            tablet = [768, 1],
                            mobile = [479, 1];

                        if (elm.length) {
                            {if $show_scroll}
                                elm.owlCarousel({
                                    direction: '{$language_direction}',
                                    items: 1,
                                    itemsDesktop: desktop,
                                    itemsDesktopSmall: desktopSmall,
                                    itemsTablet: tablet,
                                    itemsMobile: mobile,
                                    scrollPerPage: true,
                                    autoPlay: true,
                                    lazyLoad: true,
                                    stopOnHover: true,
                                    pagination: true,
                                    paginationNumbers: false,
                                    navigation: true,
                                    navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],
                                    afterInit: function (item) {
                                        $('.ab__bt_chain_form.hidden').removeClass('hidden');
                                    }
                                });
                            {/if}

                        {if $behavior_of_similar_products == "scroller"}
                            var elms = document.getElementsByClassName("splide");
                            let old_el = {

                            };
                            for (var i = 0; i < elms.length; i++) {

                                new Splide(elms[i],
                                    {
                                        direction: 'ttb',
                                        autoHeight: false,
                                        autoWidth: false,
                                        fixedWidth: '210px',
                                        fixedHeight: '300px',
                                        height: '300px',
                                        heightRatio: 1.15,
                                        pagination: false,
                                        updateOnMove: true,
                                        perMove: 1,
                                        arrowPath: 'M615.2,5.9c-7.8-7.8-20.5-7.8-28.3,0L324.1,212.1c-9.8,7.3-18.8,7.3-28.3,0L34.1,5.8C26.3-2,13.6-1.9,5.8,5.9
			c-7.8,7.8-7.8,20.5,0,28.3l261.7,206.3C281.9,251,294.6,258,310,258c15.4,0,27.9-6.8,42.4-17.5L615.1,34.2
			C622.9,26.4,623,13.7,615.2,5.9z',
                                        breakpoints: {

                                            768: {
                                                heightRatio: .39,
                                                drag: false,
                                            },
                                            320: {
                                                heightRatio: .45,
                                                drag: false,
                                            },
                                        }
                                    })
                                    .mount()
                                    .on('active', function (el) {
                                        if(old_el.i !== undefined && old_el.i === el){
                                            return;
                                        }
                                        old_el.i = el;
                                        let container =  el.slide.closest('.products_container');
                                        let ab__bt_product_prices_container = el.slide.getElementsByClassName('ab__bt_product_prices_container')[0];
                                        _setInputs(container,ab__bt_product_prices_container.dataset.caProductId,ab__bt_product_prices_container.dataset.caProductPrice,ab__bt_product_prices_container.dataset.caDiscountedPrice);
                                        getCombination(el.slide.closest('form'));
                                    });
                            }
                            {/if}
                        }
                    });
                    {if $behavior_of_similar_products == "popup"}
                        $('.ab__bt_products_popup').on('click','.ab__bt_product',(e)=>{
                            e.preventDefault();
                           let parentContainer = document.getElementById(e.currentTarget.parentNode.dataset.caParentContainer);

                            $(e.currentTarget).parent().find('.ab__bt_product').removeClass('active');
                                    e.currentTarget.classList.add('active');
                                   $(parentContainer).find('.ab__bt_product').removeClass('active');
                                   let data = e.currentTarget.dataset;
                                   parentContainer.querySelector('[data-ca-product-id="'+data.caProductId+'"]').classList.add('active');
                                   _setInputs(parentContainer,data.caProductId,data.caProductPrice,data.caDiscountedPrice);
                                   getCombination(parentContainer.closest('form'));
                        });
                    {/if}
                }(Tygh, Tygh.$));

            </script>

    {/strip}
{/if}