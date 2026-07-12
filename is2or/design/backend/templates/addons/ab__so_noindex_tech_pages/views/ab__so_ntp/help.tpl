{capture name="mainbox"}
<p>{__('ab__so_ntp_help.docs')}</p>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__so_noindex_tech_pages"}
{include
file="common/mainbox.tpl"
title_start=__("ab__so_noindex_tech_pages")|truncate:40
title_end=__("ab__so_ntp.help")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
}