{strip}
{if "ab__ch1.view"|fn_check_view_permissions}
<div class="row-fluid">
{if $object_type|in_array:['product']}
<div class="group span6 form-horizontal">
{/if}
<div class="control-group">
{$content_arr = ["should_be_filled", "{$object_type}"]}
<a href="#" id="sw_custom_h1_{$object_type}_filter" class="search-link cm-combination cm-save-state">
<span id="on_custom_h1_{$object_type}_filter" class="icon-caret-right cm-save-state{if $smarty.cookies.{"custom_h1_`$object_type`_filter"}} hidden{/if}"></span>
<span id="off_custom_h1_{$object_type}_filter" class="icon-caret-down cm-save-state{if !$smarty.cookies.{"custom_h1_`$object_type`_filter"}} hidden{/if}"></span>
{__('ab__ch1.short')}
</a>
<div id="custom_h1_{$object_type}_filter"{if !$smarty.cookies.{"custom_h1_`$object_type`_filter"}} class="hidden"{/if}>
<div style="margin-top: 15px;">
{foreach $content_arr as $content_item}
<div class="control-group">
<label class="control-label" for="ab__ch1_search_{$content_item}">{__("ab__ch1.`$content_item`")}{include file="common/tooltip.tpl" tooltip=__("ab__ch1.`$content_item`.tooltip")}</label>
<div class="controls">
{if $content_item == 'should_be_filled'}
<input type="hidden" name="ab__ch1[is_{$object_type}_filled]" value="ignore">
<input data-ch1-toggle-elem="#ab__ch1_search_{$object_type}_name" type="checkbox" name="ab__ch1[is_{$object_type}_filled]" id="ab__ch1_search_{$content_item}" value="filled"{if $search.ab__ch1.{"is_{$object_type}_filled"} == 'filled'} checked{/if}>
{else}
<input type="text" name="ab__ch1[{$object_type}_name]" id="ab__ch1_search_{$object_type}_name" placeholder="{__("`$object_type`_name")}"
{if $search.ab__ch1.{"{$object_type}_name"}} value="{$search.ab__ch1.{"{$object_type}_name"}}"{/if}
{if $search.ab__ch1.{"is_{$object_type}_filled"} != 'filled'} disabled{/if}
>
{/if}
</div>
</div>
{/foreach}
</div>
</div>
</div>
{if $object_type|in_array:['product']}
</div>
{/if}
</div>
{/if}
{/strip}