{if $in_popup}
<div class="adv-search">
<div class="group">
{else}
<div class="sidebar-row">
<h6>{__("search")}</h6>
{/if}
<form name="generators_search_form" action="{""|fn_url}" method="get" class="{$form_meta}">
{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{if $selected_section != ""}
<input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
{/if}
{if $put_request_vars}
{array_to_fields data=$smarty.request skip=["callback"] escape=["data_id"]}
{/if}
{capture name="simple_search"}
{$extra nofilter}
<div class="sidebar-field">
<label for="elm_name">{__("name")}</label>
<div class="break">
<input type="text" name="name" id="elm_name" value="{$search.name}" />
</div>
</div>
{/capture}
{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search advanced_search=$smarty.capture.advanced_search dispatch=$dispatch view_type="users" in_popup=$in_popup}
</form>
{if $in_popup}
</div></div>
{else}
</div><hr>
{/if}
