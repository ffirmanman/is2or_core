{capture name="mainbox"}
<p>{__('ab__pcc.help.doc')}</p>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__protection_content_copying"}
{include file="common/mainbox.tpl"
title_start=__("ab__protection_content_copying")|truncate:40
title_end=__("ab__pcc.help")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}
