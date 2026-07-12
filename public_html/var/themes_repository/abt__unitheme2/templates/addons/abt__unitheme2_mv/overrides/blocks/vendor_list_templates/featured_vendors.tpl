{** block-description:vendor_logos_and_product_count **}

{$show_location = $block.properties.show_location|default:"N" == "Y"}
{$show_rating = $block.properties.show_rating|default:"N" == "Y"}
{$show_vendor_rating = $block.properties.show_vendor_rating|default:"N" == "Y"}
{$show_products_count = $block.properties.show_products_count|default:"N" == "Y"}

{$columns=$block.properties.number_of_columns}
{$obj_prefix="`$block.block_id`000"}

{if $items}
    {split data=$items size=$columns|default:"5" assign="splitted_companies"}
    {math equation="100 / x" x=$columns|default:"5" assign="cell_width"}

    <div class="grid-list ut2-grid-vendors" style="--ut2-columns:{$columns}">
        {strip}
            {foreach from=$splitted_companies item="scompanies" name="scomp"}
                {foreach from=$scompanies item="company" name="scompanies"}
                    <div class="ty-column{$columns}">
                        {if $company}
                            {if $company.logos}
                                {$show_logo = true}
                            {else}
                                {$show_logo = false}
                            {/if}

                            {$obj_id=$company.company_id}
                            {$obj_id_prefix="`$obj_prefix``$company.company_id`"}
                            {include file="common/company_data.tpl" company=$company show_links=true show_logo=$show_logo show_location=$show_location}

                            <div class="ut2-grid-vendors__item">
                                {hook name="companies:featured_vendors"}
                                    <div class="ut2-grid-vendors__company-logo">
                                        {if $show_logo}
                                            {if $show_links}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" title="{$smarty.capture.$capture_name nofilter}">{/if}
                                            {include file="common/image.tpl" image_width="100px" image_height="60px" images=$company.logos.theme.image}
                                            {if $show_links}</a>{/if}
                                        {/if}
                                    </div>
                                    <div class="ut2-grid-vendors__company-info">
                                        {$location="location_`$obj_id`"}
                                        {if $show_location && $smarty.capture.$location|trim}
                                            <div class="ut2-grid-vendors__item-location">
                                                <a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="company-location">{$smarty.capture.$location nofilter}</a>
                                            </div>
                                        {/if}

                                        {$rating="rating_`$obj_id`"}
                                        {if $smarty.capture.$rating && $show_rating}
                                            <div class="ut2-grid-vendors__rating">
                                                {$smarty.capture.$rating nofilter}
                                            </div>
                                        {/if}

                                        <div class="ut2-grid-vendors__group">
                                            {$vendor_rating="vendor_rating_`$obj_id`"}
                                            {if $smarty.capture.$vendor_rating && $show_vendor_rating}
                                                <div class="ut2-grid-vendors__vendor_rating">
                                                    {$smarty.capture.$vendor_rating nofilter}
                                                </div>
                                            {/if}

                                            <div class="ut2-grid-vendors__total-products">
                                                {$products_count="products_count_`$obj_id`"}
                                                {if $smarty.capture.$products_count && $show_products_count}
                                                    {$smarty.capture.$products_count nofilter}
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                {/hook}
                            </div>
                        {/if}
                    </div>
                {/foreach}
            {/foreach}
        {/strip}
    </div>
{/if}