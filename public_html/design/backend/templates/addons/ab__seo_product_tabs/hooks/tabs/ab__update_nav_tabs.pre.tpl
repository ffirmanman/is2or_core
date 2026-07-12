{if fn_check_view_permissions("ab__seo_product_tabs.view", "GET")}
<li id="ab__spt_{$html_id}" class="cm-js{if $active_tab == "block_ab__spt_`$html_id`"} active{/if}">
<a>{__("ab__seo_product_tabs")}</a>
</li>
{/if}