{if
    !$hidden_homepage
    && !$hide_vendor_store
    && !(strpos($smarty.request.dispatch, 'companies.home') === 0)
    && fn_abt__ut2_mv_is_vendor_store_available($vendor_info.company_id)
    && fn__abt__ut2_mv_get_company_microstore_homepage_blocks(null, ['status' => 'A'])
}
    <div class="ut2__buyer-motivation--item">
        <i class="ut2-icon-home_page"></i>
        <div class="ut2__buyer-motivation--items-wrap">
            <label>{__("home_page")}</label>
            <span>
                <a href="{"companies.home?company_id=`$vendor_info.company_id`"|fn_url}">
                    {__("abt__ut2_mv.view_vendor_home_page")}
                </a>
            </span>
        </div>
    </div>
{/if}

<div class="ut2__buyer-motivation--item">
    <i class="ut2-icon-outline-archive"></i>
    <div class="ut2__buyer-motivation--items-wrap">
        <label>{__("abt__ut2_mv.total_products")}</label>
        <span>
            {if $vendor_info.total_products < 1000}
                {$vendor_info.total_products}
            {else}
                {round($vendor_info.total_products/1000,1)}K
            {/if}

            {hook name="companies:top_links"}
                {if !(strpos($smarty.request.dispatch, 'companies.products') === 0)}
                    <a href="{"companies.products?company_id=`$vendor_info.company_id`"|fn_url}">{__("view")}</a>
                {/if}
            {/hook}
        </span>
    </div>
</div>

<div class="ut2__buyer-motivation--item">
    <i class="ut2-icon-timelapse"></i>
    <div class="ut2__buyer-motivation--items-wrap">
        <label>{__("abt__ut2_mv.sell_on", ["[marketplace]" => $settings.Company.company_name])}</label>
        <span>
            {foreach $vendor_info.duration as $period_type => $duration}
                {if $duration}
                    {__("abt__ut2_mv.n_`$period_type`", [$duration])}
                {/if}
            {/foreach}
        </span>
    </div>
</div>

{if $vendor_info.city || $vendor_info.country}
    <div class="ut2__buyer-motivation--item">
        <i class="ut2-icon-location"></i>
        <div class="ut2__buyer-motivation--items-wrap">
            <label>{__("abt__ut2_mv.vendor_location")}</label>
            <span>{if $vendor_info.city}{$vendor_info.city}, {/if}{$vendor_info.country}</span>
        </div>
    </div>
{/if}