<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive ab-mb-table" width="100%">
<thead>
<tr>
<th width="20%">{__('ab__spt.placeholder')}</th>
<th width="20%">{__("copy")}</th>
<th width="60%">{__('description')}</th>
</tr>
</thead>
<tbody>
{foreach $default_replaces as $replace}
{if $replace.description}
<tr>
<td data-th="{__('ab__spt.placeholder')}"><code>{$replace@key}</code></td>
<td data-th="{__("copy")}"><a class="ab-spt-copy btn btn-primary">{__("copy")}</a></td>
<td data-th="{__('description')}">{__($replace.description) nofilter}</td>
</tr>
{/if}
{/foreach}
</tbody>
</table>
</div>