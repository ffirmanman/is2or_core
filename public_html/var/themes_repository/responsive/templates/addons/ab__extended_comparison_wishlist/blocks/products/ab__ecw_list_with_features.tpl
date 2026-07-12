{** block-description:ab__ecw_list_with_features **}
{strip}
{if $items|count > 1 || $force_display}
    {$_template = $_template|default:"default"}

    {$items = fn_ab__ecw_gather_additional_data($items)}

    {$block.properties.scroll_per_page = "YesNo::NO"|enum}
    {$block.properties.not_scroll_automatically = "YesNo::YES"|enum}

    {$block.block_id = {"`$block.block_id`_{uniqid()}"}}
    {assign var="obj_prefix" value="`$block.block_id`000"}

    {$settings.abt__device = $settings.abt__device|default:"desktop"}

    {$vendor_ids = []}
    {$product_ids = []}
    {capture name="products_content"}
        {math equation="100 / x" x=$columns|default:$block.properties.item_quantity assign="column_w"}

        {if $dots}
            <div id="{$block.block_id}_dots" class="ab-ec-dots">
            {foreach $items as $product}
                <div class="ab-ec-dots__item"></div>
            {/foreach}
            </div>
        {/if}

        {hook name="ab__extended_comparison_wishlist:products"}
            <div id="scroll_list_{$block.block_id}" class="owl-carousel">
            {foreach $items as $product}
                {$_tmp = array_push($product_ids, $product.product_id)}
                {$vendor_ids[] = $product.company_id}

                {assign var="obj_id" value=$product.product_id}
                {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id``$settings.abt__device`"}
                {include file="common/product_data.tpl"
                show_add_to_cart=$block.properties.hide_add_to_cart_button == "YesNo::NO"|enum
                show_buy_now=false
                show_qty=false
                show_name=true
                show_product_amount=false 
                show_amount_label=false 
                show_price_values=true
                show_price=true
                show_old_price=true
                show_rating=true
                add_to_cart_class="ab-ec-product-item__add-to-cart-`$_template`"
                but_role="action"
                }

                {capture name="ecw_item_buttons"}
                    {hook name="ab__extended_comparison_wishlist:product_item_buttons"}
                        <div class="ab-ec-product-item__body-buttons">
                            <i class="cm-combination" id="sw_ab__ecw_product-item_{$block.block_id}_{$obj_id}">●●●</i>
                            <div id="ab__ecw_product-item_{$block.block_id}_{$obj_id}" class="cm-popup-box ty-dropdown-box__content hidden">
                                {hook name="ab__extended_comparison_wishlist:product_item_expand_buttons"}
                                {$current_url = $config.current_url|urlencode}
                                {if $settings.Appearance.enable_quick_view == "YesNo::YES"|enum && $block.properties.enable_quick_view == "YesNo::YES"|enum && $settings.ab__device != "mobile"}
                                    {capture name="quick_view_url"}
                                        {** Sets quick view link *}
                                        {hook name="products:product_quick_view_url"}
                                        {"products.quick_view?product_id=`$product.product_id`&prev_url=`$current_url`"}
                                        {/hook}
                                    {/capture}
                                    {$quick_view_url = $smarty.capture.quick_view_url|trim}
                                    {$quick_view_url = $quick_view_url|fn_link_attach:"n_plain=Y"}
                                    {if $quick_nav_ids}
                                        {$quick_nav_ids = ","|implode:$quick_nav_ids}
                                        {$quick_view_url = $quick_view_url|fn_link_attach:"n_items=`$quick_nav_ids`"}
                                    {/if}
                                    <a class="ab-ec__quick-view cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="{$product.product_id}" data-ca-target-id="product_quick_view" href="{$quick_view_url|fn_url}" data-ca-dialog-title="{__("quick_product_viewer")}" rel="nofollow">{__("quick_view")}</a>
                                {/if}
                                {if $addons.wishlist.status == "ObjectStatuses::ACTIVE"|enum && !$hide_wishlist_button}
                                    <a class="cm-submit ab-ec__wishlist" data-ca-dispatch="dispatch[wishlist.add..{$product.product_id}]">
                                        {__("add_to_wishlist")}
                                    </a>
                                {/if}
                                {if $settings.General.enable_compare_products == "YesNo::YES"|enum}
                                    {if ($runtime.controller == "product_features" && $runtime.mode == "compare")}
                                        <a class="ab-ec__delete" href="{"product_features.delete_product?product_id=`$product.product_id`&redirect_url=`$current_url`"|fn_url}">
                                            {__("remove")}
                                        </a>
                                    {else}
                                        <a class="cm-ajax cm-ajax-full-render ab-ec__compare cm-ab-ec-reinited" data-ca-target-id="comparison_list,account_info*,abt__ut2_compared_products" rel="nofollow" href="{"product_features.add_product?product_id=`$product.product_id`&redirect_url=`$config.current_url|urlencode`"|fn_url}">
                                            {__("compare")}
                                        </a>
                                    {/if}
                                {/if}
                                {/hook}
                            </div>
                        </div>
                    {/hook}
                {/capture}

                <div class="ab-ec-product-item{if $product.product_id == $smarty.request.product_id && !($runtime.controller == "product_features" && $runtime.mode == "compare")} highlighted{/if}" style="flex:1 {$column_w}%;min-width:{$column_w}%">
                    {assign var="form_open" value="form_open_`$obj_id`"}
                    {$smarty.capture.$form_open nofilter}
                        {include file="addons/ab__extended_comparison_wishlist/blocks/products/components/`$_template`_ecw_item.tpl"}
                    {assign var="form_close" value="form_close_`$obj_id`"}
                    {$smarty.capture.$form_close nofilter}
                </div>
            {/foreach}
        </div>
        {/hook}
    {/capture}

    <div class="ab-ec-comparison {$settings.abt__device}">
        <div class="ab-ec-comparison__header">
            {if $block.properties.ab__ecw_enable_add_more == "YesNo::YES"|enum ||
                ($block.properties.ab__ecw_enable_add_to_compare == "YesNo::YES"|enum && $settings.General.enable_compare_products == "YesNo::YES"|enum)}
                <div class="ab-ec-comparison__buttons{if $block.properties.outside_navigation == "YesNo::YES"|enum} outside-nav{/if}">
                    {hook name="ab__extended_comparison_wishlist:block_buttons"}
                        {if $block.properties.ab__ecw_enable_add_more == "YesNo::YES"|enum}
                            {$lists = Tygh::$app["addons.ab__extended_comparison_wishlist.service"]->getGrouper()->groupComparison($product_ids)}
                            {$list = array_shift($lists)}

                            <a href="{$list->getViewMoreHref()|fn_url}"><i class="ty-icon-eye-open"></i>{__("ab__ecw.view_more_products", ["[title]" => $list->getTitle()])}</a>
                        {/if}
                        {if $block.properties.ab__ecw_enable_add_to_compare == "YesNo::YES"|enum && $settings.General.enable_compare_products == "YesNo::YES"|enum}
                            {$product_ids = ","|implode:$product_ids}

                            {$r_url=""|fn_url}
                            {$current_url = $config.current_url|urlencode}
                            <a href="{"ab__extended_comparison_wishlist.compare?add_to_compare=`$product_ids`&redirect_url=`$r_url`&show_notice"|fn_url}" rel="nofollow" data-ca-target-id="abt__ut2_compared_products,account_info*" class="cm-ajax cm-ajax-force cm-ajax-full-render cm-ab-ec-reinited"><i class="ty-icon-plus"></i>{__("add_to_comparison_list")}</a>
                        {/if}
                    {/hook}
                </div>
            {/if}

            {if $block.properties.outside_navigation == "YesNo::YES"|enum && $items|count > 1}
                {hook name="ab__extended_comparison_wishlist:outside_navigation"}
                    <div class="owl-theme ty-owl-controls">
                        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_{$block.block_id}">
                            <div class="owl-buttons">
                                <div id="owl_prev_{$obj_prefix}" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                                <div id="owl_next_{$obj_prefix}" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
                            </div>
                        </div>
                    </div>
                {/hook}
            {/if}

            {include file="common/scroller_init.tpl" prev_selector="#owl_prev_`$obj_prefix`" next_selector="#owl_next_`$obj_prefix`"}
            {include file="addons/ab__extended_comparison_wishlist/blocks/products/components/features_scroller_init.tpl"}

            {$smarty.capture.products_content nofilter}
        </div>

        {if $runtime.action == "different_only"}
            {$vendor_ids = array_unique($vendor_ids)}
        {/if}

        {$ab_features = fn_ab__ecw_get_products_features_list_to_display($items)}
        {if $ab_features}
            {function name="ab__ecw_feature_value"}
                {capture name="feature_value"}
                    {strip}
                        {if $feature.features_hash && $feature.feature_type == "ProductFeatures::EXTENDED"|enum}
                            <a href="{"categories.view?category_id=`$product.main_category`&features_hash=`$feature.features_hash`"|fn_url}">
                        {/if}
                        {if $feature.prefix}<span class="ty-features-list__item-prefix">{$feature.prefix}</span>{/if}
                        {if $feature.feature_type == "ProductFeatures::DATE"|enum}
                            {$feature.value_int|date_format:"`$settings.Appearance.date_format`"}
                        {elseif $feature.feature_type == "ProductFeatures::MULTIPLE_CHECKBOX"|enum}
                            {foreach from=$feature.variants item="fvariant" name="ffev"}
                                {$fvariant.variant|default:$fvariant.value}{if !$smarty.foreach.ffev.last}, {/if}
                            {/foreach}
                        {elseif $feature.feature_type == "ProductFeatures::TEXT_SELECTBOX"|enum || $feature.feature_type == "ProductFeatures::NUMBER_SELECTBOX"|enum || $feature.feature_type == "ProductFeatures::EXTENDED"|enum}
                            {$feature.variant|default:$feature.value}
                        {elseif $feature.feature_type == "ProductFeatures::SINGLE_CHECKBOX"|enum}
                            {$feature.description}
                        {elseif $feature.feature_type == "ProductFeatures::NUMBER_FIELD"|enum}
                            {$feature.value_int|floatval}
                        {else}
                            {$feature.value}
                        {/if}
                        {if $feature.suffix}<span class="ty-features-list__item-suffix">{$feature.suffix}</span>{/if}
                        {if $feature.feature_type == "ProductFeatures::EXTENDED"|enum && $feature.features_hash}
                            </a>
                        {/if}
                    {/strip}
                {/capture}
            {/function}

            {function name="print_feature_item"}
                <div class="ab-ec-comparison-features__item">
                    <div class="ab-ec-comparison-features__item-name">
                        <span class="cm-combination-tab {if !$smarty.cookies.{"ab__ecw_feature_{$block.block_id}_content_{$feature_id}"}} open{/if}" id="sw_ab__ecw_feature_{$block.block_id}_content_{$feature_id}">
                            {$feature.description}
                            <i class="ty-icon-down-open{if !$smarty.cookies.{"ab__ecw_feature_{$block.block_id}_content_{$feature_id}"}} hidden{/if}" id="on_ab__ecw_feature_{$block.block_id}_content_{$feature_id}"></i>
                            <i class="ty-icon-up-open{if $smarty.cookies.{"ab__ecw_feature_{$block.block_id}_content_{$feature_id}"}} hidden{/if}" id="off_ab__ecw_feature_{$block.block_id}_content_{$feature_id}"></i>
                        </span>

                        {if $feature.full_description|strip_tags|trim}
                            {include file="common/help.tpl" title=$feature.description text=$feature.description content=trim($feature.full_description) id=$feature_id show_brackets=false link_text="<span class=\"ty-tooltip-block\"><i class=\"ty-icon-help-circle\"></i></span>" wysiwyg=true}
                        {/if}
                    </div>

                    <div class="ab-ec-comparison-features__item-content{if $smarty.cookies.{"ab__ecw_feature_{$block.block_id}_content_{$feature_id}"}} hidden{/if} scrollable" id="ab__ecw_feature_{$block.block_id}_content_{$feature_id}">
                        <div class="ab-ec-comparison-features__variants">
                            {foreach $items as $product}
                                <div class="ab-ec-comparison-features__variant{if $product.product_id == $smarty.request.product_id && !($runtime.controller == "product_features" && $runtime.mode == "compare")} highlighted{/if}" style="width:{math equation="100 / x" x=$columns|default:$block.properties.item_quantity}%">
                                    {if $addons.ab__extended_comparison_wishlist.show_product_names == "YesNo::YES"|enum}
                                        <div class="ab-ec-comparison-features__variant-product">{$product.product}</div>
                                    {/if}

                                    {$value = $product.product_features.$feature_id}
                                    {if $vendor_info}
                                        {$value = ["feature_type" => "ProductFeatures::SINGLE_CHECKBOX"|enum, "description" => $product.company_name]}
                                    {/if}

                                    <span class="ab-ec-comparison-features__value">
                                        {ab__ecw_feature_value feature=$value}
                                        {if $smarty.capture.feature_value|trim}
                                            {$smarty.capture.feature_value nofilter}
                                        {else}
                                            {__("ab__ecw.empty_feature_value")}
                                        {/if}
                                    </span>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            {/function}

            <div class="ab-ec-comparison-features__wrapper">
                {foreach $ab_features as $feature_group}
                    {$group_id = $feature_group@key}

                    <div class="ab-ec-comparison-features__group">
                        {if $group_id != 0}
                            <div class="ab-ec-comparison-features__group-name">
                                <span class="cm-combination-tab {if !$smarty.cookies.{"ab__ecw_feature_{$block.block_id}_content_{$group_id}"}} open{/if}"  id="sw_ab__ecw_feature_{$block.block_id}_groups_{$group_id}">
                                    {$feature_group.description}
                                    <i class="ty-icon-down-open{if !$smarty.cookies.{"ab__ecw_feature_{$block.block_id}_groups_{$group_id}"}} hidden{/if}" id="on_ab__ecw_feature_{$block.block_id}_groups_{$group_id}"></i>
                                    <i class="ty-icon-up-open{if $smarty.cookies.{"ab__ecw_feature_{$block.block_id}_groups_{$group_id}"}} hidden{/if}" id="off_ab__ecw_feature_{$block.block_id}_groups_{$group_id}"></i>
                                </span>
                                {if $feature_group.full_description|strip_tags|trim}
                                    {include file="common/help.tpl" title=$feature_group.description text=$feature_group.description content=trim($feature_group.full_description) id=$feature_id show_brackets=false link_text="<span class=\"ty-tooltip-block\"><i class=\"ty-icon-help-circle\"></i></span>" wysiwyg=true}
                                {/if}
                            </div>
                        {/if}

                        <div class="ab-ec-comparison-features__group-content{if $smarty.cookies.{"ab__ecw_feature_{$block.block_id}_groups_{$group_id}"}} hidden{/if}" id="ab__ecw_feature_{$block.block_id}_groups_{$group_id}">
                            {if "MULTIVENDOR"|fn_allowed_for
                                    && $addons.ab__extended_comparison_wishlist.show_company_name == "YesNo::YES"|enum
                                    && $group_id == 0
                                    && (($runtime.action == "different_only" && count($vendor_ids) > 1) || $runtime.action != "different_only")
                            }
                                {print_feature_item feature_id="vendor" feature=["description" => __("vendor")] vendor_info=true}
                            {/if}

                            {foreach $feature_group.features as $feature}
                                {if !$comparison_data.product_features || $comparison_data.product_features[0][$feature@key]}
                                    {print_feature_item feature_id=$feature@key feature=$feature}
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                {/foreach}
            </div>
        {else}
            <p class="ty-no-items">{__("no_data")}</p>
        {/if}
    </div>
{/if}
{/strip}