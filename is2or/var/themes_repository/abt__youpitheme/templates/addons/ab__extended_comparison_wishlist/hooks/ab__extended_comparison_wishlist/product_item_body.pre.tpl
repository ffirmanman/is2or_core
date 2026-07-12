{if $settings.abt__yt.product_list.show_sku == "YesNo::YES"|enum}
    {$sku = "sku_`$obj_id`"}
    {$smarty.capture.$sku nofilter}
{/if}
