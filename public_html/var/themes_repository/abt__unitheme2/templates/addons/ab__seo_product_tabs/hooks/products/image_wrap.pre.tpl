{if
    ($settings.ab__device|default:$settings.abt__device) !== 'mobile' &&
    $addons.ab__seo_product_tabs.tabs_fixed_panel_position === 'after_h1' &&
    fn_ab__spt_is_allowed_tabs_panel_for_hook($product_id, 'products:image_wrap.pre')
}
    {include file="addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl"}
{/if}