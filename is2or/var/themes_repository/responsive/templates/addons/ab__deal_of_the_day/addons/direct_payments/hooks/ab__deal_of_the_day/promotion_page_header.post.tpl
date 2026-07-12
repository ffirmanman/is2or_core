{if $promotion.company_id}
    <div class="ab__dotd_promotion-vendor">
        <span class="ty-muted">{__("vendor")}:</span>
        <span class="ab__dotd_promotion-vendor-name">
            <a href="{fn_url("companies.products?company_id=`$promotion.company_id`")}">{fn_get_company_name($promotion.company_id)}</a>
        </span>
    </div>
{/if}