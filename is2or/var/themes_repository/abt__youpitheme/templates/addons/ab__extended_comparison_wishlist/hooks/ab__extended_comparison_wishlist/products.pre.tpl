{if $settings.abt__yt.product_list.show_sku == "YesNo::YES"|enum}
    {assign var="show_sku" value=true scope=parent}
    {assign var="show_sku_label" value=true scope=parent}
{/if}