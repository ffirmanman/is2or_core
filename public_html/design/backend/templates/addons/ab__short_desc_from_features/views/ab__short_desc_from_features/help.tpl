{capture name="mainbox"}
{__('ab__sdff_help.docs')}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__short_desc_from_features"}
{include file="common/mainbox.tpl"
title_start=__("ab__short_desc_from_features")|truncate:40
title_end=__("ab__sdff.help")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}