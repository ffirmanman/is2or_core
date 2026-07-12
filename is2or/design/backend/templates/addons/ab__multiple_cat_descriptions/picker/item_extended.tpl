<div class="object-picker__products-main object-picker__ab__mcd-main">
<div class="object-picker__ab__mcd-header">
{if $type == "result"}
<div class="object-picker__name-content">{$title_pre} {literal}${data.title}{/literal} {$title_post}</div>
{else}
{* <a href="{literal}${data.url}{/literal}" class="object-picker__products-name-content object-picker__products-name-content--link">*}
{$title_pre} {literal}${data.title}{/literal} {$title_post}
{* </a>*}
{/if}
</div>
<div class="object-picker__products-labels">
<div class="object-picker__products-product-code">
<span class="object-picker__products-product-code-label">{literal}${data.description}{/literal}</span>
</div>
</div>
</div>
{if $type == "selection"}
<div class="object-picker__ab__mcd-edit">
<a href="{literal}${fn_url('ab__mcd_items.update&mdi_id='+data.mdi_id)}{/literal}" target="_blank">{literal}${Tygh.tr('edit')}{/literal}</a>
</div>
{/if}
<div class="object-picker__products-price">
{literal}${data.is_available ? Tygh.tr('status_'+data.is_available) : ''}{/literal}
</div>
