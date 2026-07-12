{$close_link = false scope=parent}
{$seo_pf=$product_features|fn_ab__sf_check_product_features:$product.main_category}
{if $addons.ab__seo_filters.feature_as_seo_page != 'disallow' and !empty($seo_pf)}
{$in_new=($addons.ab__seo_filters.feature_as_seo_page == 'allow_in_new_window') ? true : false}
    {if $feature.feature_type == "ProductFeatures::SINGLE_CHECKBOX"|enum}
        {if $seo_pf["{$feature.feature_id}_Y"]}<a {if $in_new}target="_blank" {/if}href="{$seo_pf["{$feature.feature_id}_Y"]|fn_url}">{$close_link=true scope=parent}{/if}
    {elseif $feature.feature_type == "ProductFeatures::MULTIPLE_CHECKBOX"|enum && $feature.variants}
        
        {$var=$var|default:$variant}
        {if $seo_pf["{$feature.feature_id}_{$var.variant_id}"]}<a {if $in_new}target="_blank" {/if}href="{$seo_pf["{$feature.feature_id}_{$var.variant_id}"]|fn_url}">{$close_link=true scope=parent}{/if}
    {elseif in_array($feature.feature_type, ["ProductFeatures::TEXT_SELECTBOX"|enum, "ProductFeatures::EXTENDED"|enum, "ProductFeatures::NUMBER_SELECTBOX"|enum])}
        
        {$var=$var|default:$variant}
        {if $seo_pf["{$feature.feature_id}_{$var.variant_id}"]}<a {if $in_new}target="_blank" {/if}href="{$seo_pf["{$feature.feature_id}_{$var.variant_id}"]|fn_url}">{$close_link=true scope=parent}{/if}
    {/if}
{/if}