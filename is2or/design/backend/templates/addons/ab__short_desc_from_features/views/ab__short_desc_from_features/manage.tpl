{capture name="mainbox"}
{$cron_company_id = fn_get_runtime_company_id()}
{if $cron_company_id}
{$cron_cmd = "0 1 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__short_desc_from_features.cron --s_storefront=`$app["storefront"]->storefront_id` --company_id=`$cron_company_id`"}
{else}
{$cron_cmd = "0 1 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__short_desc_from_features.cron --s_storefront=`$app["storefront"]->storefront_id`"}
{/if}
<div>{__('ab__sdff.generate_link', ['[cron_cmd]' => $cron_cmd])}</div>
<div><a class="cm-ajax btn btn-primary" href="{"ab__short_desc_from_features.generate_descriptions"|fn_url}">{__('ab__sdff.generate_button')}</a></div>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__short_desc_from_features"}
{include file="common/mainbox.tpl"
title_start=__("ab__short_desc_from_features")|truncate:40
title_end=__("ab__sdff.generate")
content=$smarty.capture.mainbox
adv_buttons=$smarty.capture.adv_buttons
select_storefront=true
content_id="manage_ab__short_desc_from_features"}