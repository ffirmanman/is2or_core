{if $field.autocomplete_type === "city"}
    {$country_field_value = $profile_data["`$section|lower`_country"]|default:$settings.Company.company_country}
    <div class="cm-abt--ut2-select-city-profile">
        {if $abt_ut2__checkout_cities.$country_field_value}
            {foreach $abt_ut2__checkout_cities.$country_field_value as $predefined_city}
                <span data-ca-select-city="{$predefined_city.city}" data-ca-state-code="{$predefined_city.state_code}" data-ca-state="{$predefined_city.state}" class="city">{$predefined_city.city}</span>
            {/foreach}
        {/if}
    </div>
{/if}
