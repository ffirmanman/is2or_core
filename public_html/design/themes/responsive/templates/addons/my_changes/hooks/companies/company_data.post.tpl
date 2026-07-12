
{strip}
    {if !$no_capture && $smarty.request.dispatch == "companies.catalog"}

        {capture name="name_`$obj_id`"}
            {$capture_name="name_`$obj_id`"}
            {$smarty.capture.$capture_name nofilter}

            <div class="mc-company-address">
                
                {if $companies.0.city}
                    <span class="mc-company-city">{$company.city},</span>
                {/if}

                {if $companies.0.state}
                    <span class="mc-company-state mc-company-state__code">&nbsp;({$company.state})</span>
                {/if}
            </div>
        {/capture}
    {/if}
{/strip}