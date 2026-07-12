{capture name="mainbox"}
{__("ab__as_help.docs")}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__advanced_sitemap"}
{include
file="common/mainbox.tpl"
title_start=__("ab__advanced_sitemap")|truncate:40
title_end=__("ab__advanced_sitemap.help")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
}