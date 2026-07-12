{capture name="mainbox"}
{$addons.ab__advanced_sitemap = fn_ab__as_get_storefront_settings($app["storefront"])}
{$storefront_id = $app["storefront"]->storefront_id}
{$location_url = "{fn_get_storefront_protocol()}://{$app["storefront"]->url}`$addons.ab__advanced_sitemap.xml_sitemap_directory`"}
{if fn_allowed_for('MULTIVENDOR')}
{$company_param = "--storefront_id=`$storefront_id` --s_storefront=`$storefront_id`"}
{$company_param_url = "storefront_id=`$storefront_id`&s_storefront=`$storefront_id`"}
{else}
{$company_id = fn_get_runtime_company_id()}
{$company_param = "--switch_company_id=`$company_id`"}
{$company_param_url = "switch_company_id=`$company_id`"}
{/if}
{$seconds = 7 * ($app['storefront']->storefront_id % 12)}
{$cron_cmd = "$seconds 23 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__advanced_sitemap.cron `$company_param`"}
{include file="common/widget_copy.tpl" widget_copy_title=__("ab__advanced_sitemap.manage") widget_copy_text=__("ab__as.generate_link") widget_copy_code_text=$cron_cmd}
<div>
{btn class="cm-ajax cm-comet btn btn-primary" type="list" text=__("ab__as.generate_sitemap_button") href="ab__advanced_sitemap.generate_sitemap?`$company_param_url`"|fn_url method="POST"}
</div>
<div style="margin-top: 40px">{__("ab__as.view_sitemap", ["[url]" => {fn_url("ab__advanced_sitemap.sitemap?storefront_id=`$storefront_id`", "C")}, "[location]" => {$location_url}])}</div>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__advanced_sitemap"}
{include
file="common/mainbox.tpl"
title_start=__("ab__advanced_sitemap")|truncate:40
title_end=__("ab__advanced_sitemap.manage")
content=$smarty.capture.mainbox
content_id="manage_ab__advanced_sitemap"
select_storefront=true
show_all_storefront=false
adv_buttons=$smarty.capture.adv_buttons
}