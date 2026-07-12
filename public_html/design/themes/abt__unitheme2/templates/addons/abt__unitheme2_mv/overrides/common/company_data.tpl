{$obj_id=$obj_id|default:$company.company_id}

{if (isset($hide_links) && !isset($show_links))}
    {$show_links=!$hide_links}
{elseif (isset($show_links) && !isset($hide_links))}
    {$hide_links=!$show_links}
{/if}

{capture name="name_`$obj_id`"}

    {$company_name = $company.i18n_company|default:$company.company}

    {if $show_name}
        {if !$show_links}<strong>{else}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="ty-company-title">{/if}{$company_name nofilter}{if !$show_links}</strong>{else}</a>{/if}
    {elseif $show_trunc_name}
        {if !$show_links}<strong>{else}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="ty-company-title" title="{$company_name|strip_tags}">{/if}{$company_name|truncate:45:"...":true nofilter}{if !$show_links}</strong>{else}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="name_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="vendor_rating_`$obj_id`"}
    {hook name="companies:vendor_rating"}
    {/hook}
{/capture}
{if $no_capture}
    {$capture_name="vendor_rating_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="rating_`$obj_id`"}
    {hook name="companies:data_block"}
    {/hook}
{/capture}
{if $no_capture}
    {$capture_name="rating_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="company_descr_`$obj_id`"}
    {if $show_descr}
        {$company.company_description|strip_tags|truncate:1024 nofilter}{if $show_links && $company.company_description|fn_strlen > 1024} <a href="{"companies.products?company_id=`$company.company_id`"|fn_url}">{__("more")}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="company_descr_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="products_count_`$obj_id`"}
    {if $show_products_count}
        {if !$show_links}<strong>{else}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="ty-company-total-products">{/if}{$company.products_count nofilter}  {__("product_s")}{if !$show_links}</strong>{else}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="products_count_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="address_`$obj_id`"}
    {if $show_address}
        {$company.address nofilter}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="address_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="city_`$obj_id`"}
    {if $show_city}
        {$company.city nofilter}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="city_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="country_`$obj_id`"}
    {if $show_country}
        {$company.country nofilter}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="country_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="location_`$obj_id`"}
    {if $show_location}
        {$company.city|trim nofilter}{if $company.city|trim && $company.country|trim}, {/if}{$company.country|trim nofilter}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="location_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="location_full_`$obj_id`"}
    {if $show_location_full}
        {$company.city|trim nofilter}{if $company.city|trim && $company.state|trim}, {/if} {$company.state|fn_get_state_name:$company.country} {$company.zipcode|trim nofilter}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="location_full_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="logo_`$obj_id`"}
    {if $show_logo}
        {if $show_links}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" title="">{/if}
        {if !(strpos($smarty.request.dispatch,'companies.catalog')===0) && !(strpos($smarty.request.dispatch,'companies.view')===0)}
            {assign var="lg_image_size" value=80}
            {include file="common/image.tpl" image_width="{$lg_image_size}" image_height="{$lg_image_size}" images=$company.logos.compact.image?:$company.logos.theme.image}
        {else}
            {include file="common/image.tpl" image_width="200px" image_height="100px" images=$company.logos.theme.image?:$company.logos.theme.image}
        {/if}
        {if $show_links}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {$capture_name="logo_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{hook name="companies:company_data"}{/hook}