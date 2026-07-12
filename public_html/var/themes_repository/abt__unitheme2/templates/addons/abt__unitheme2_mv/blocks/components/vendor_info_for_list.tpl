{if $settings.abt__device === "mobile"}
    {assign var="lg_image_size" value=40}
{else}
    {assign var="lg_image_size" value=60}
{/if}

{capture name="abt__vendor_info"}
    {if !(strpos($smarty.request.dispatch,'companies') === 0) && (empty($smarty.request.redirect_url) || !str_contains($smarty.request.redirect_url,'companies'))}
        {if !($addons.master_products.status == "A" && !$product.company_id)}
            {hook name="abt__ut2_mv:vendor_info_for_list"}
                {if $vendor_block_settings.show_vendor_logo[$settings.abt__device] == "YesNo::YES"|enum}
                <div class="ut2__vendor-info--logo">
                    {include file="common/image.tpl" images=$product.abt__ut2_mv_company_logos.compact.image image_width="{$lg_image_size}" image_height="{$lg_image_size}" class="ty-company-image"}
                </div>
                {/if}
                <div class="ut2__vendor-info--wrap">
                    <div class="ut2__vendor-info--name">

                        {$vendor_href = "companies.view?company_id=`$product.company_id`"|fn_url}

                        {if $product.vendor_store_available}
                            {$vendor_href = "companies.products?company_id=`$product.company_id`"|fn_url}
                        {/if}

                        <a href="{$vendor_href}" title="">{$product.company_name}</a>

                    </div>
                    {if $vendor_block_settings.show_vendor_address[$settings.abt__device] == "YesNo::YES"|enum && $product.abt__ut2_mv_company_city}
                        <div class="ut2__vendor-info--location">
                            {$product.abt__ut2_mv_company_city}, {$product.abt__ut2_mv_company_country}
                        </div>
                    {/if}
                </div>
                {hook name="abt__ut2_mv:vendor_info_for_list_name"}{/hook}

            {/hook}
        {else}
            {if $vendor_block_settings.show_vendor_logo[$settings.abt__device] == "YesNo::YES"|enum}
                <div class="ut2__vendor-info--logo">
                    <i class="ut2-icon-local_offer"></i>
                </div>
            {/if}
            <div class="ut2__vendor-info--wrap">
                <p class="ty-muted">{__("abt__ut2_mv.sold_by")}: </p>
                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}"> {__('abt__ut2_mv.master_vendors',[$product.master_product_offers_count])}</a>
            </div>
        {/if}
    {/if}
{/capture}

{if $smarty.capture.abt__vendor_info|trim && $vendor_block_settings.show_vendor_info[$settings.abt__device] == "show"}
    {ab__hide_content bot_type="ALL"}
    <div class="ut2__vendor-info--list-product {if $vendor_block_settings.show_vendor_logo[$settings.abt__device] == "YesNo::YES"|enum}-lg{/if}{if $vendor_block_settings.show_vendor_rating[$settings.abt__device] == "YesNo::YES"|enum}-rt{/if}{if $vendor_block_settings.show_vendor_address[$settings.abt__device] == "YesNo::YES"|enum}-lc{/if}">
        {$smarty.capture.abt__vendor_info nofilter}
    </div>
    {/ab__hide_content}
{/if}
