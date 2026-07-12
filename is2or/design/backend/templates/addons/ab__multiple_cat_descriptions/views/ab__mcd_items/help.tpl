{capture name="mainbox_title"}
{__("ab__mcd.help")} {__("ab__multiple_cat_descriptions")}
{/capture}
{capture name="mainbox"}
<p>{__('ab__mcd.help.doc')}</p>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__multiple_cat_descriptions"}
{include file="common/mainbox.tpl" title_start=__("ab__multiple_cat_descriptions")|truncate:40 title_end=__("ab__mcd.help") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
