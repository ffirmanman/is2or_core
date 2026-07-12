<ol>
{foreach $ab__mcd_links as $link}
{if !$link.object_exists}
<li>
{__("deleted")}
</li>
{continue}
{/if}
<li>
{if $admin_url || $link.admin_url}
{$backend_url = $link.admin_url|default:"`$admin_url``$link.object_id`"}
<a href="{$backend_url|fn_url}" target="_blank">{$link.description}</a> ---
{/if}
{if $storefront_url || $link.storefront_url}
{$frontend_url = $link.storefront_url|default:"`$storefront_url``$link.object_id`"}
<a href="{$frontend_url|fn_url:'C'}" target="_blank">{__("preview")}</a>
{/if}
</li>
{foreachelse}
<p class="no-items">{__("no_data")}</p>
{/foreach}
</ol>