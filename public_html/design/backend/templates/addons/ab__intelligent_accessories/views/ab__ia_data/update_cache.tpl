{capture name="mainbox"}
{$cron_cmd = "*/10 * * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__ia_data.cron_update_cache --limit=5"}
{$cron_company_id=fn_get_runtime_company_id()}
{if $cron_company_id}
{$cron_cmd = $cron_cmd|cat:" --switch_company_id=`$cron_company_id`"}
{/if}
{include file="common/widget_copy.tpl" widget_copy_title=__("ab__ia.cron.title") widget_copy_text=__("ab__ia.cron.text") widget_copy_code_text=$cron_cmd}
<hr>
<p>{__("ab__ia_update_cache_info")}</b></p>
<hr>
<form action="{""|fn_url}" method="post" name="update_cache_ab__ia_data" id="update_cache_ab__ia_data">
<input type="hidden" name="redirect_url" value="{$smarty.request.return_url|default:$config.current_url}" />
<div class="buttons-container">
<div class="buttons-container">
{include file="buttons/button.tpl" but_text=__("ab__ia_update_cache") but_name="dispatch[ab__ia_data.update_cache]" but_role="submit-link" but_target_form="update_cache_ab__ia_data" but_meta="cm-tab-tools"}
</div>
</div>
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__intelligent_accessories"}
{include file="common/mainbox.tpl" title_start=__("ab__intelligent_accessories")|truncate:40 title_end=__("ab__ia_update_cache") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
