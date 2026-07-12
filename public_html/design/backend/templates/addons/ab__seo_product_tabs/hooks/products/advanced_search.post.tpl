{strip}
{if fn_check_view_permissions("ab__seo_product_tabs.view", "GET")}
<div class="row-fluid">
<div class="group span6 form-horizontal">
<div class="control-group">
<a href="#" id="sw_ab__spt_short_name_filter" class="search-link cm-combination cm-save-state">
<span id="on_ab__spt_short_name_filter" class="icon-caret-right cm-save-state{if $smarty.cookies.{"ab__spt_short_name_filter"}} hidden{/if}"></span>
<span id="off_ab__spt_short_name_filter" class="icon-caret-down cm-save-state{if !$smarty.cookies.{"ab__spt_short_name_filter"}} hidden{/if}"></span>
{__('ab__seo_product_tabs')}
</a>
<div id="ab__spt_short_name_filter"{if !$smarty.cookies.{"ab__spt_short_name_filter"}} class="hidden"{/if}>
<div style="margin-top: 15px;">
<div class="control-group">
<label for="search_ab__spt_short_name" class="control-label">{__('ab__spt.product.short_name')}:</label>
<input id="search_ab__spt_short_name" type="text" name="ab__spt_short_name" value="{$search.ab__spt_short_name}" placeholder="{__('name')}">
</div>
</div>
</div>
</div>
</div>
</div>
{/if}
{/strip}