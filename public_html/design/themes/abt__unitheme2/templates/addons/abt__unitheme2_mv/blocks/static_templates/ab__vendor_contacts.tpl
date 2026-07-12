{$obj_id=$company_data.company_id}
{capture name = "profile_fields_{$obj_id}"}
    {foreach $profile_fields["ProfileFieldSections::CONTACT_INFORMATION"|enum] as $field_id => $field_data}
        {$data_source = $company_data.fields}
        {if $field_data.is_default === "YesNo::YES"|enum}
            {$field_id = $field_data.field_name}
            {$data_source = $company_data}
        {/if}
        {if !$data_source[$field_id]}
            {continue}
        {/if}
        {$field_value = $data_source[$field_id]}
        <div class="ty-company-detail__control-group">
            {hook name="companies:profile_field_value"}
                <label class="ty-company-detail__control-label">{$field_data.description}:</label><br>
            {if $field_data.field_type === "ProfileFieldTypes::EMAIL"|enum}
                <span><a href="mailto:{$field_value}">{$field_value}</a></span>
            {elseif $field_data.field_type === "ProfileFieldTypes::CHECKBOX"|enum}
                <span>{if $field_value === "YesNo::YES"|enum}{__("yes")}{else}{__("no")}{/if}</span>
            {elseif $field_data.field_type === "ProfileFieldTypes::DATE"|enum}
                <span>{$field_value|date_format:"`$settings.Appearance.date_format`"}</span>
            {elseif $field_data.field_type === "ProfileFieldTypes::RADIO"|enum
            || $field_data.field_type === "ProfileFieldTypes::SELECT_BOX"|enum
            }
                <span>{$field_data.values.$field_value}</span>
            {elseif $field_data.field_type === "ProfileFieldTypes::FILE"|enum && $field_value.file_name}
                <span><a href="{$field_value.link|default:""}">{$field_value.file_name}</a></span>
            {elseif $field_id === "url"} {* FIXME: URL display is hardcoded *}
                <span><a href="{$field_value|normalize_url}">{$field_value}</a></span>
            {elseif $field_data.field_type === "ProfileFieldTypes::PHONE"|enum || ($field_data.autocomplete_type === "phone-full")}
                <span><bdi>{$field_value}</bdi></span>
            {elseif $field_data.field_type === "ProfileFieldTypes::COUNTRY"|enum}
                <span><bdi>{$field_value|fn_get_country_name}</bdi></span>
            {elseif $field_data.field_type === "ProfileFieldTypes::STATE"|enum}
                <span><bdi>{$field_value|fn_get_state_name:$company_data.country}</bdi></span>
            {else}
                <span>{$field_value}</span>
            {/if}
            {/hook}
        </div>
    {/foreach}
{/capture}

{if $smarty.capture["profile_fields_{$obj_id}"]|trim}
    <div class="ut2__vendor-companies-contacts" id="vendor-companies-contacts">
        {$smarty.capture["profile_fields_{$obj_id}"] nofilter}
    </div>
{/if}

{capture name="vendor_social_links"}
    {foreach $company_data.social_links as $type => $link}
        {if $link}
            <a href="{$link}"><i class="ut2-icon-{$type}"></i></a>
        {/if}
    {/foreach}
{/capture}

{if $smarty.capture.vendor_social_links|trim}
    <div class="ut2__vendor-social-links">
        <label>{__("abt__ut2_mv.vendor_social", ["[vendor]" => $company_data.company])}</label>
        <div class="ut2__vendor-social-links--item">
            {$smarty.capture.vendor_social_links nofilter}
        </div>
    </div>
{/if}
