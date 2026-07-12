{if
    ($settings.ab__device|default:$settings.abt__device) !== 'mobile' &&
    $addons.ab__seo_product_tabs.tabs_fixed_panel_position === 'after_h1' &&
    $addons.ab__seo_product_tabs.add_tabs_fixed_panel === 'YesNo::YES'|enum
}
    {if $ab__spt_tabs}
        {include file="addons/ab__seo_product_tabs/views/components/tabs_content.tpl" tabs=$ab__spt_tabs}
    {/if}
{/if}
