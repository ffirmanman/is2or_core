{if
    $settings.Appearance.product_details_in_tab === 'YesNo::NO'|enum &&
    $addons.ab__seo_product_tabs.add_tabs_fixed_panel === 'YesNo::YES'|enum
}
    {strip}
        {$tabs = $tabs|default:$ab__spt_tabs}

        {if $tabs}
            {$tabs_counter = 0}

            {capture name="ab__spt_tabs_panel_items"}
                {foreach $tabs as $tab}
                    {if
                        $tab.show_in_popup !== 'YesNo::YES'|enum && $tab.status === 'ObjectStatuses::ACTIVE'|enum &&
                        $tab.ab__spt_add_tab_to_floating_panel === 'YesNo::YES'|enum
                    }
                        {$capture_name = "ab__tab_content`$tab.tab_id`"}

                        {include file="addons/ab__seo_product_tabs/views/components/tabs_content.tpl" tabs=$tabs tab_id=$tab.tab_id}

                        {if $smarty.capture.$capture_name|trim}
                            {$tabs_counter = $tabs_counter + 1}

                            <li class="ab-spt-anchors__item">
                                <span data-ab-spt-target="{$tab.html_id}">{$tab.name}
                                    {hook name="ab__seo_product_tabs:anchors__item_post"}
                                        {strip}
                                            {if in_array($tab.html_id, ['discussion', 'product_reviews'])}
                                                {$reviews_count = $product.discussion.search.total_items|default:$product.product_reviews_count}

                                                {if $reviews_count > 0}
                                                    &nbsp;({$reviews_count})
                                                {/if}
                                            {/if}
                                        {/strip}
                                    {/hook}
                                </span>
                            </li>
                        {/if}
                    {/if}
                {/foreach}
            {/capture}

            {capture name="ab__spt_tabs_anchors"}
                {if $tabs_counter > 1}
                    <ul class="ab-spt-anchors__wrap">
                        <li class="ab-spt-anchors__item">
                            <span class="active cm-external-click" data-ab-spt-target="tygh_main_container">{__('ab__spt.all_about_product')}</span>
                        </li>
                        {$smarty.capture.ab__spt_tabs_panel_items nofilter}
                    </ul>
                {/if}
            {/capture}

            {if $smarty.capture.ab__spt_tabs_anchors|trim}
                {capture name="floating_panel_classes"}
                    {hook name="ab__seo_product_tabs:panel_wrapper_classes"}
                        ab-spt-floating-panel ab-spt-floating-position-{$addons.ab__seo_product_tabs.tabs_fixed_panel_position}
                    {/hook}
                {/capture}

                {if $addons.ab__seo_product_tabs.tabs_fixed_panel_position === 'after_h1'}
                <div id="ab-spt-heading-navigation-tab" class="{$addons.ab__seo_product_tabs.tabs_fixed_panel_position}">
                {/if}
                    <div id="ab-spt-floating-placeholder"></div>

                    <div class="{$smarty.capture.floating_panel_classes|strip}">
                        {hook name="ab__seo_product_tabs:floating_panel"}
                            <div class="container-fluid{if $runtime.layout.theme_name|strpos:'abt__' !== false}-row{/if}">
                                <div class="row-fluid">
                                    {$smarty.capture.ab__spt_tabs_anchors nofilter}
                                </div>
                            </div>
                        {/hook}
                    </div>
                {if $addons.ab__seo_product_tabs.tabs_fixed_panel_position === 'after_h1'}
                </div>
                {/if}
            {/if}
        {/if}
    {/strip}
{/if}
