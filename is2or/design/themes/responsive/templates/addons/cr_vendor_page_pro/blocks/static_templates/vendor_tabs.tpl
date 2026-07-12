{** block-description:block_vendor_tabs **}

{capture name="tabsbox"}
    <div id="content_description"
         class="{if $selected_section && $selected_section != "description"}hidden{/if}">
        {if $company_data.company_description}
            <div class="ty-wysiwyg-content">
                {$company_data.company_description nofilter}
            </div>
        {/if}
    </div>
    {assign var="title" value=""}
    {hook name="companies:tabs"}
    {/hook}

{/capture}

{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section}