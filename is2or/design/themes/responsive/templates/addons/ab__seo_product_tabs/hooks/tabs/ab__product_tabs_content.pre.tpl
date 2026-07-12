{strip}
    {if
        $smarty.capture.$tab_content_capture|trim &&
        $tab.ab__spt_activate_settings === 'YesNo::YES'|enum &&
        $settings.Appearance.product_details_in_tab === 'YesNo::YES'|enum
    }
        {capture name=$tab_content_capture}
            <{$tab.ab__spt_tab_header_tag} class="tab-list-title ab-spt-title">{fn_ab__spt_generate_tab_name(['tab' => $tab, 'product' => $product]) nofilter}</{$tab.ab__spt_tab_header_tag}>
            {$smarty.capture.$tab_content_capture nofilter}
        {/capture}
    {/if}
{/strip}