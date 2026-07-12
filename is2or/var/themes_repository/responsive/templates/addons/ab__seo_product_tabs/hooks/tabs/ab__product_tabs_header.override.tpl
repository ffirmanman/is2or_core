{if $tab.ab__spt_activate_settings === 'YesNo::YES'|enum}
    {hook name="tabs:ab__product_tabs_header"}
        {if $product_details_in_tab === 'YesNo::NO'|enum}
            <{$tab.ab__spt_tab_header_tag} class="tab-list-title ab-spt-title" id="{$tab.html_id}">{fn_ab__spt_generate_tab_name(['tab' => $tab, 'product' => $product]) nofilter}</{$tab.ab__spt_tab_header_tag}>
        {/if}
    {/hook}
{/if}