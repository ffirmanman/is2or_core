{capture name="mainbox"}
<p>{__('ab__seo_for_blog.help.docs')}</p>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_blog"}
{include file="common/mainbox.tpl"
title_start=__("ab__seo_for_blog")|truncate:40
title_end=__("ab__seo_for_blog.help")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}