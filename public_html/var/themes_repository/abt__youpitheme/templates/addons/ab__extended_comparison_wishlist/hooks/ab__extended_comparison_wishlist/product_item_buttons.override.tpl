{if $settings.abt__yt.product_list.show_buttons == "YesNo::NO"|enum}
    {hook name="ab__extended_comparison_wishlist:product_item_buttons"}
        {literal}<!-- Buttons was moved because of {$settings.abt__yt.product_list.show_buttons} setting  -->{/literal}
    {/hook}
{/if}
