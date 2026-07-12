{hook name="index:sticky_panel"}
    <div class="ut2-sticky-panel">
        {* Home *}
        {if $settings.abt__ut2.general.sticky_panel.link_home[$settings.ab__device] === "YesNo::YES"|enum}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.link_home.position}style="order:{$settings.abt__ut2.general.sticky_panel.link_home.position}"{/if}>
                {$url=""}
                {if $use_vendor_url && (isset($smarty.request.company_id) || isset($object_id))}
                    {if $smarty.request.company_id}
                        {$url="companies.view&company_id=`$smarty.request.company_id`"}
                    {else}
                        {$url="companies.view&company_id=`$object_id`"}
                    {/if}
                {/if}

                <a href="{$url|fn_url}" class="ut2-sticky-panel__link{if $smarty.request.dispatch=="index.index"} active{/if}"><i class="ut2-icon-home_page"></i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("home")}</span>{/if}</a>
            </div>
        {/if}

        {* Menu *}
        {if $settings.abt__ut2.general.sticky_panel.catalog[$settings.ab__device] === "YesNo::YES"|enum}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.catalog.position}style="order:{$settings.abt__ut2.general.sticky_panel.catalog.position}"{/if}>

                <a class="ut2-sticky-panel__link cm-external-trigger"><i class="ut2-icon-outline-menu"></i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("menu")}</span>{/if}</a>
            </div>
        {/if}

        {* Search *}
        {if $settings.abt__ut2.general.sticky_panel.search[$settings.ab__device] === "YesNo::YES"|enum}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.search.position}style="order:{$settings.abt__ut2.general.sticky_panel.search.position}"{/if}>
                <a id="on_dropdown_{$block_snapping_id_replacement}_search" href="javascript:void(0);" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination"><i class="ut2-icon-search"></i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("search")}</span>{/if}</a>

                <div id="dropdown_{$block_snapping_id_replacement}_search" class=" ty-search-block hidden">
                    <form action="{""|fn_url}" name="search_form" method="get">
                        <input type="hidden" name="match" value="all" />
                        <input type="hidden" name="subcats" value="Y" />
                        <input type="hidden" name="pcode_from_q" value="Y" />
                        <input type="hidden" name="pshort" value="Y" />
                        <input type="hidden" name="pfull" value="Y" />
                        <input type="hidden" name="pname" value="Y" />
                        <input type="hidden" name="pkeywords" value="Y" />
                        <input type="hidden" name="search_performed" value="Y" />

                        {hook name="search:additional_fields"}{/hook}

                        {strip}
                            {if $settings.General.search_objects}
                                {assign var="search_title" value=__("search")}
                            {else}
                                {assign var="search_title" value=__("search_products")}
                            {/if}
                            <input type="text" name="q" value="{$search.q}" autocomplete="off" id="search_input{$smarty.capture.search_input_id}" title="{$search_title}" class="ty-search-block__input cm-hint" />
                            {if $settings.General.search_objects}
                                {include file="buttons/magnifier.tpl" but_name="search.results" alt=__("search")}
                            {else}
                                {include file="buttons/magnifier.tpl" but_name="products.search" alt=__("search")}
                            {/if}
                        {/strip}

                        {capture name="search_input_id"}{$block_snapping_id_replacement}{/capture}

                    </form>

                    <a id="off_dropdown_{$block_snapping_id_replacement}_search" href="javascript:void(0);" rel="nofollow" class="ut2-btn-search ut2-sticky-panel__link cm-combination" style="display:none;"><i class="ut2-icon-baseline-close"></i></a>

                </div>
                <div class="ut2-sticky-panel__item__overlay"></div>
            </div>
        {/if}

        {* Cart mini *}
        {if $settings.abt__ut2.general.sticky_panel.cart[$settings.ab__device] === "YesNo::YES"|enum}
            {$cart = fn_direct_payments_get_mini_cart()}
            {$block.properties.products_links_type = "thumb"}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.cart.position}style="order:{$settings.abt__ut2.general.sticky_panel.cart.position}"{/if}>
                <div class="ty-dropdown-box" id="cart_status_{$dropdown_id}">
                    <div id="sw_dropdown_{$dropdown_id}" class="ty-dropdown-box__title cm-combination">
                        <a href="{"checkout.cart"|fn_url}" class="ut2-sticky-panel__link" id="cart_icon_{$dropdown_id}">
                            <i class="ut2-icon-use_icon_cart filled">{if $cart.amount}<em class="count">{$cart.amount}</em>{/if}</i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("cart")}</span>{/if}
                            <!--cart_icon_{$dropdown_id}--></a>
                    </div>
                    <div id="dropdown_{$dropdown_id}" class="ty-dropdown-box__content ty-dropdown-box__content--cart hidden">

                        <div class="ty-dropdown-box__title">
                            {__("cart")}
                            <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-combination" id="off_dropdown_{$dropdown_id}"><i class="ut2-icon-baseline-close"></i></a>
                        </div>

                        {hook name="checkout:minicart"}
                            <div class="cm-cart-content cm-cart-content-thumb" id="cart_content_{$dropdown_id}">

                                <div class="ut2-minicart{if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate} has-rm-btn{/if}">
                                    {if $cart.amount}

                                        {assign var="cart_product_icon_width" value=($settings.Thumbnails.product_cart_thumbnail_width|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_width : 80)}
                                        {assign var="cart_product_icon_height" value=($settings.Thumbnails.product_cart_thumbnail_height|intval > 0 ? $settings.Thumbnails.product_cart_thumbnail_height : 80)}

                                        <div class="ut2-added-products"
                                             style="--cart-product-icon-width:{$cart_product_icon_width}px;--cart-product-icon-height:{$cart_product_icon_height}px;">
                                            {hook name="index:cart_status"}
                                                {assign var="_cart_products" value=$cart.products|array_reverse:true}
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
                                                                        <div class="product-pict">
                                                                            <div class="pict-underlay">
                                                                                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                                                                    {include file="common/image.tpl" images=$product.main_pair no_ids=true lazy_load=false
                                                                                    image_width=$cart_product_icon_width
                                                                                    image_height=$cart_product_icon_height}
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="desc">
                                                                            <div class="base">
                                                                                <div class="product-name">
                                                                                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                                                                        {$product.product|default:fn_get_product_name($product.product_id) nofilter}
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                            {if !$product.extra.buy_together}
                                                                                {$smarty.capture.added_product_mix_quantity_x_price nofilter}
                                                                            {/if}
                                                                        </div>

                                                                        {if (!$runtime.checkout || $force_items_deletion) && !$product.extra.exclude_from_calculate}
                                                                            <div class="ut2-minicart__rm-btn">
                                                                                {*{include file="buttons/button.tpl" but_href="checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`" but_meta="cm-ajax cm-ajax-full-render ut2-cart-item-delete" but_target_id="cart_status*" but_role="delete" but_name="delete_cart_item"}*}
                                                                                <a class="cm-ajax cm-ajax-full-render ut2-cart-item-delete" data-ca-dispatch="delete_cart_item" href="{"checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`"|fn_url}" data-ca-target-id="cart_content*,cart_icon*"><i class="ut2-icon-delete"></i></a>
                                                                            </div>
                                                                        {/if}
                                                                    </div>

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

                                <div class="cm-cart-buttons ty-cart-content__buttons buttons-container{if $cart.amount} full-cart{else} hidden{/if}">
                                    {hook name="checkout:cart_subtotal"}
                                    {if $cart.amount > 1 || $product.extra.buy_together}
                                        <div class="ut2-mini-cart__subtotal b-top">{__("total_items")}:&nbsp;<span class="ty-float-right">{$cart.amount}&nbsp;{__("items")} {__("for")}<br><strong>{include file="common/price.tpl" value=$cart.display_subtotal}</strong></span><br>&nbsp;</div>
                                    {/if}
                                    {/hook}

                                    <a href="{"checkout.cart"|fn_url}" rel="nofollow" class="ty-btn ty-btn__secondary">{__("view_cart")}</a>
                                    {if $settings.Checkout.checkout_redirect != "YesNo::YES"|enum}
                                        {include file="buttons/proceed_to_checkout.tpl" but_text=__("checkout")}
                                    {/if}
                                </div>
                                <!--cart_content_{$dropdown_id}--></div>
                        {/hook}
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                    <!--cart_status_{$dropdown_id}--></div>
            </div>
        {/if}

        {* Wishlist *}
        {if $settings.abt__ut2.general.sticky_panel.wishlist[$settings.ab__device] === "YesNo::YES"|enum}
            {if $addons.wishlist.status == "A" && !$hide_wishlist_button}
                <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.wishlist.position}style="order:{$settings.abt__ut2.general.sticky_panel.wishlist.position}"{/if}>
                    {$wishlist_count = fn_abt__ut2_polyfill_fn_wishlist_get_count()}
                    <div id="abt__ut2_wishlist_count">
                        <a class="ut2-sticky-panel__link{if $smarty.request.dispatch=="wishlist.view"} active{/if}" href="{"wishlist.view"|fn_url}" rel="nofollow"><i class="ut2-icon-baseline-favorite-border">{if $wishlist_count > 0}<em class="count">{$wishlist_count}</em>{/if}</i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("wishlist")}</span>{/if}</a>
                        <!--abt__ut2_wishlist_count--></div>
                </div>
            {/if}
        {/if}

        {* Compare *}
        {if $settings.abt__ut2.general.sticky_panel.comparison[$settings.ab__device] === "YesNo::YES"|enum}
            {if $settings.General.enable_compare_products == "YesNo::YES"|enum && !$hide_compare_list_button || $product.feature_comparison == "YesNo::YES"|enum}
                <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.comparison.position}style="order:{$settings.abt__ut2.general.sticky_panel.comparison.position}"{/if}>
                    {assign var="compared_products" value=""|fn_get_comparison_products}
                    <div id="abt__ut2_compared_products">
                        <a class="ut2-sticky-panel__link{if $smarty.request.dispatch=="product_features.compare"} active{/if}" href="{"product_features.compare"|fn_url}" rel="nofollow"><i class="ut2-icon-addchart">{if $compared_products}<em class="count">{$compared_products|count}</em>{/if}</i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("compare")}</span>{/if}</a>
                        <!--abt__ut2_compared_products--></div>
                </div>
            {/if}
        {/if}

        {* Account *}
        {if $settings.abt__ut2.general.sticky_panel.account[$settings.ab__device] === "YesNo::YES"|enum}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.account.position}style="order:{$settings.abt__ut2.general.sticky_panel.account.position}"{/if}>
                <div class="ty-dropdown-box" id="account_info_{$block_snapping_id_replacement}_acc">
                    <div id="sw_dropdown_{$block_snapping_id_replacement}_acc" class="ty-dropdown-box__title cm-combination">
                        {if $auth.user_id && ($user_info.firstname || $user_info.lastname)}

                            <a href="{"profiles.update"|fn_url}" class="ut2-sticky-panel__link ut2-account-info__avatar" title="{$user_info.firstname}&nbsp;{$user_info.lastname}">
                                <i>{if $user_info.firstname}{fn_substr($user_info.firstname, 0, 1)}{else}{fn_substr($user_info.lastname, 0, 1)}{/if}</i>
                                {if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}
                                    <span>{__("abt__ut2.settings.general.sticky_panel.account")}</span>
                                {/if}
                            </a>

                        {else}
                            <a class="ut2-sticky-panel__link" href="{"profiles.update"|fn_url}">
                                <i class="ut2-icon-outline-account-circle"></i>
                                {if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}
                                    <span>{__("abt__ut2.settings.general.sticky_panel.account")}</span>
                                {/if}
                            </a>
                        {/if}
                    </div>
                    <div id="dropdown_{$block_snapping_id_replacement}_acc" class="ty-dropdown-box__content hidden">

                        <div class="ty-dropdown-box__title">
                            {__("account")}
                            <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-combination" id="off_dropdown_{$block_snapping_id_replacement}_acc"><i class="ut2-icon-baseline-close"></i></a>
                        </div>

                        {assign var="return_current_url" value=$config.current_url|escape:url}
                        <ul class="ty-account-info">
                            {hook name="profiles:my_account_menu"}
                            {if $auth.user_id}
                                {if $user_info.firstname || $user_info.lastname}
                                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item">{$user_info.firstname} {$user_info.lastname}</li>
                                {else}
                                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">{$user_info.email}</li>
                                {/if}
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"profiles.update"|fn_url}" rel="nofollow" >{__("profile_details")}</a></li>
                                {if $settings.General.enable_edp == "YesNo::YES"|enum}
                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"orders.downloads"|fn_url}" rel="nofollow">{__("downloads")}</a></li>
                                {/if}
                            {elseif $user_data.firstname || $user_data.lastname}
                                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name">{$user_data.firstname} {$user_data.lastname}</li>
                            {elseif $user_data.email}
                                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name">{$user_data.email}</li>
                            {/if}
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"orders.search"|fn_url}" rel="nofollow">{__("orders")}</a></li>
                            {if $settings.General.enable_compare_products == 'Y'}
                                {assign var="compared_products" value=""|fn_get_comparison_products}
                                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"product_features.compare"|fn_url}" rel="nofollow">{__("view_comparison_list")}{if $compared_products} ({$compared_products|count}){/if}</a></li>
                            {/if}
                            {/hook}
                        </ul>

                        {if $settings.Appearance.display_track_orders == 'Y'}
                            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_{$block_snapping_id_replacement}">
                                <form action="{""|fn_url}" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                                    <input type="hidden" name="return_url" value="{$smarty.request.return_url|default:$config.current_url}" />

                                    <div class="ty-account-info__orders-txt">{__("track_my_order")}</div>

                                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                                        <label for="track_order_item{$block_snapping_id_replacement}" class="cm-required hidden">{__("track_my_order")}</label>
                                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item{$block_snapping_id_replacement}" name="track_data" value="{__("order_id")}{if !$auth.user_id}/{__("email")}{/if}" />
                                        {include file="buttons/go.tpl" but_name="orders.track_request" alt=__("go")}
                                        {include file="common/image_verification.tpl" option="track_orders" align="left" sidebox=true}
                                    </div>
                                </form>
                                <!--track_orders_block_{$block_snapping_id_replacement}--></div>
                        {/if}

                        <div class="ty-account-info__buttons buttons-container">
                            {if $auth.user_id}
                                {$is_vendor_with_active_company="MULTIVENDOR"|fn_allowed_for && ($auth.user_type == "V") && ($auth.company_status == "A")}
                                {if $is_vendor_with_active_company}
                                    <a href="{$config.vendor_index|fn_url}" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank">{__("go_to_admin_panel")}</a>
                                {/if}
                                <a href="{"auth.logout?redirect_url=`$return_current_url`"|fn_url}" rel="nofollow" class="ty-btn {if $is_vendor_with_active_company}ty-btn__tertiary{else}ty-btn__primary{/if}">{__("sign_out")}</a>
                            {else}
                                <a href="{if $runtime.controller == "auth" && $runtime.mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" data-ca-target-id="login_block{$block_snapping_id_replacement}" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow">{__("sign_in")}</a><a href="{"profiles.add"|fn_url}" rel="nofollow" class="ty-btn ty-btn__primary">{__("register")}</a>
                                <div  id="login_block{$block_snapping_id_replacement}" class="hidden" title="{__("sign_in")}">
                                    <div class="ty-login-popup">
                                        {include file="views/auth/login_form.tpl" style="popup" id="popup`$block_snapping_id_replacement`"}
                                    </div>
                                </div>
                            {/if}
                        </div>
                        <!--account_info_{$block_snapping_id_replacement}--></div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        {/if}

        {* Phones *}
        {if $settings.abt__ut2.general.sticky_panel.phones[$settings.ab__device] === "YesNo::YES"|enum}
            <div class="ut2-sticky-panel__item" {if $settings.abt__ut2.general.sticky_panel.phones.position}style="order:{$settings.abt__ut2.general.sticky_panel.phones.position}"{/if}>
                <div class="ty-dropdown-box{if strlen(trim($settings.abt__ut2.general.sticky_panel.sticky_panel_contacts_block_id))} conf--manual{else} conf--automatic{/if}" id="phones_info_acc">
                    <div id="sw_dropdown_phones_info_{$block_snapping_id_replacement}_acc" class="ty-dropdown-box__title cm-combination">
                        <a class="ut2-sticky-panel__link" href="javascript:void(0);" rel="nofollow"><i class="ut2-icon-local_phone"></i>{if $settings.abt__ut2.general.sticky_panel.enable_sticky_panel_labels[$settings.ab__device] === "YesNo::YES"|enum}<span>{__("abt__ut2.settings.general.sticky_panel.phones")}</span>{/if}</a>
                    </div>
                    <div id="dropdown_phones_info_{$block_snapping_id_replacement}_acc" class="ty-dropdown-box__content hidden">
                        <div class="ty-dropdown-box__title">
                            {__("abt__ut2.settings.general.sticky_panel.phones")}
                            <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-combination" id="off_dropdown_phones_info_{$block_snapping_id_replacement}_acc"><i class="ut2-icon-baseline-close"></i></a>
                        </div>

                        {if strlen(trim($settings.abt__ut2.general.sticky_panel.sticky_panel_contacts_block_id))}
                            <div class="ut2-pn__contacts_block">
                                {capture name="sticky_bp_contacts_block_manual"}
                                    {render_block block_id=$settings.abt__ut2.general.sticky_panel.sticky_panel_contacts_block_id|intval use_cache=false parse_js=true}
                                {/capture}
                                {*{$smarty.capture.sticky_bp_contacts_block_manual
                                |replace:"cm-popup-box ":""
                                |replace:" cm-popup-box":""
                                |replace:"cm-popup-box":""
                                nofilter}*}
                                {$smarty.capture.sticky_bp_contacts_block_manual|regex_replace:"/\b(cm-popup-box|ut2-right-panel|cm-abt--ut2-move-bottom|rt-position|lt-position)\b/":"" nofilter}
                            </div>
                        {else}
                            <div class="ut2-pn__items">
                                {hook name="abt__ut2_sticky_panel:phones"}
                                    <div class="ut2-pn__phones">
                                        {if $settings.Company.company_phone|trim}
                                            <div class="ut2-pn__phones__item">
                                                <bdi><a href="tel:{$settings.Company.company_phone}">{$settings.Company.company_phone}</a></bdi>
                                            </div>
                                        {/if}
                                        {if $settings.Company.company_phone_2|trim}
                                            <div class="ut2-pn__phones__item">
                                                <bdi><a href="tel:{$settings.Company.company_phone_2}">{$settings.Company.company_phone_2}</a></bdi>
                                            </div>
                                        {/if}
                                        <div class="ut2-pn__phones__item call-request-schedule">
                                            <bdi><small>{__('call_request.work_time')}</small></bdi>
                                        </div>
                                    </div>
                                {/hook}

                                <hr>

                                <div class="ut2-social-links">
                                    {__('abt__ut2__block_contacts.social_links')}
                                </div>

                                {if $settings.Company.company_orders_department|trim || $settings.Company.company_country|fn_get_country_name || $settings.Company.company_city || $settings.Company.company_address}
                                    <div class="ut2-pn__other-contacts">
                                        {if $settings.Company.company_orders_department|trim}
                                            <div class="ut2-pn__other-contacts__item">
                                                <small>Email</small>
                                                <div>
                                                    <bdi><a href="mailto:{$settings.Company.company_orders_department|trim}">{$settings.Company.company_orders_department}</a></bdi>
                                                </div>
                                            </div>
                                        {/if}

                                        {if $settings.Company.company_country|fn_get_country_name || $settings.Company.company_city || $settings.Company.company_address}
                                            <div class="ut2-pn__other-contacts__item">
                                                <small>{__("address")}</small>
                                                <div>
                                                    <bdi>{$settings.Company.company_country|fn_get_country_name}, {$settings.Company.company_city}, {$settings.Company.company_address}</bdi>
                                                </div>
                                            </div>
                                        {/if}
                                    </div>
                                {/if}
                            </div>
                        {/if}
                    </div>
                    <div class="ut2-sticky-panel__item__overlay"></div>
                </div>
            </div>
        {/if}
    </div>
{/hook}