{capture name="mainbox"}
{$storefront_id = $app["storefront"]->storefront_id}
{$cron_cmd = "0 23 * * * php `$config.dir.root`/`$config.admin_index` --dispatch=ab__seo_for_tags.cron --s_storefront=`$storefront_id`"}
{include
file="common/widget_copy.tpl"
widget_copy_title=__("ab__sft.generating_manage")
widget_copy_text=__("ab__sft.cron_links")
widget_copy_code_text=$cron_cmd
}
<div>
{btn class="cm-ajax cm-comet btn btn-primary" type="list" text=__("ab__sft.generate_button") href="ab__seo_for_tags.generate_all"|fn_url method="POST"}
</div>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_tags"}
{include
file="common/mainbox.tpl"
title_start=__("ab__seo_for_tags")|truncate:40
title_end=__("ab__sft.generating_manage")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
select_storefront=true
show_all_storefront=false
}