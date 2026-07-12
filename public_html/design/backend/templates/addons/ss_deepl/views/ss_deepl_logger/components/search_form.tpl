{if $in_popup}
    <div class="adv-search">
    <div class="group">
{else}
    <div class="sidebar-row">
    <h6>{__("search")}</h6>
{/if}
<form name="{$addon_id}_search_form" action="{""|fn_url}" method="get" class="{$form_meta}">

{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}

{if $selected_section != ""}
<input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
{/if}

{capture name="simple_search"}
{$extra nofilter}

<div class="sidebar-field">
    <label for="elm_name">{__("action")}</label>
    <div class="break">
        {assign var="var_action" value="`$addon_id`_action"}
        {assign var="action" value=$smarty.request.$var_action}
        <select name="{$addon_id}_action" id="{$addon_id}_action" class="input-text">
            <option value="">{__("select")}</option>
            <option {if $action == "REQUEST"}selected="selected"{/if} value="REQUEST">REQUEST</option>
            <option {if $action == "RESPONSE"}selected="selected"{/if} value="RESPONSE">RESPONSE</option>
            <option {if $action == "INFO"}selected="selected"{/if} value="INFO">INFO</option>
            <option {if $action == "ERROR"}selected="selected"{/if} value="ERROR">ERROR</option>
            <option {if $action == "NOTICE"}selected="selected"{/if} value="NOTICE">NOTICE</option>
            <option {if $action == "ALERT"}selected="selected"{/if} value="ALERT">ALERT</option>
            <option {if $action == "DEBUG"}selected="selected"{/if} value="DEBUG">DEBUG</option>
            <option {if $action == "EMERGENCY"}selected="selected"{/if} value="EMERGENCY">EMERGENCY</option>
            <option {if $action == "WARNING"}selected="selected"{/if} value="WARNING">WARNING</option>
        </select>
    </div>
</div>
<div class="sidebar-field">
    <label for="elm_name">{__("find_results_with")}</label>
    <div class="break">
        {assign var="search_string" value="`$addon_id`_search_string"}
        <input type="text" name="{$addon_id}_search_string" class="input-text" id="{$addon_id}_search_string" value="{$smarty.request.$search_string}">
    </div>
</div>
<div class="sidebar-field">
    <div class="control-group">
        <div class="controls">
            {include file="addons/`$addon_id`/views/`$addon_id`_logger/components/period_selector.tpl" period=$search.period form_name="`$addon_id`_search_form"}
        </div>
    </div>
</div>

{/capture}

{include file="common/advanced_search.tpl" no_adv_link=true simple_search=$smarty.capture.simple_search dispatch=$dispatch view_type="{$addon_id}"}

</form>

{if $in_popup}
</div></div>
{else}
</div><hr>
{/if}