{assign var='product_details_in_tab' value=$product_details_in_tab|default:$settings.Appearance.product_details_in_tab}

{capture name="tabsbox"}
    {foreach from=$tabs item="tab" key="tab_id"}
        {if $tab.show_in_popup !== 'YesNo::YES'|enum && $tab.status === 'ObjectStatuses::ACTIVE'|enum}
            {assign var="tab_content_capture" value="tab_content_capture_`$tab_id`"}

            {capture name=$tab_content_capture}
                {include file="addons/ab__seo_product_tabs/views/components/tabs_content.tpl" tabs=$tabs tab_id=$tab.tab_id render_tabs=true}
            {/capture}

            {if $smarty.capture.$tab_content_capture|trim}
                {hook name="tabs:ab__product_tabs_header"}
                    {if $product_details_in_tab === 'YesNo::NO'|enum}
                        <h3 class="tab-list-title" id="{$tab.html_id}">{$tab.name}</h3>
                    {/if}
                {/hook}
            {/if}

            {hook name="tabs:ab__product_tabs_content"}
                <div id="content_{$tab.html_id}" class="ty-wysiwyg-content content-{$tab.html_id}">
                    {$smarty.capture.$tab_content_capture nofilter}
                </div>
            {/hook}
        {/if}
    {/foreach}
{/capture}

{hook name="tabs:ab__tabs"}
    {capture name="tabsbox_content"}
        {if $product_details_in_tab === 'YesNo::YES'|enum}
            {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox}
        {else}
            {$smarty.capture.tabsbox nofilter}
        {/if}
    {/capture}
{/hook}