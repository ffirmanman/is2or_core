{capture name="mainbox"}
<form action="{""|fn_url}" method="POST" name="update_ab__mcd_items_{$item_type}">
<input type="hidden" name="item_type" value="{$item_type}">
{include file="common/pagination.tpl"}
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/items.tpl" item_type=$item_type}
{include file="common/pagination.tpl"}
</form>
{capture name="sidebar"}
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/items_search_form.tpl" }
{/capture}
{/capture}
{capture name="adv_buttons"}
{if 'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'}
{include file="common/popupbox.tpl"
id="desc_`$smarty.now`"
text=__("ab__mcd.popup.add")
act="general"
link_text=''
icon='icon-plus'
href="ab__mcd_items.update?item_type=`$item_type`"
}
{/if}
{/capture}
{capture name="buttons"}
{capture name="tools_list"}
{if $ab__mcd_items}
<li>{btn type="delete_selected" dispatch="dispatch[ab__mcd_items.m_delete]" form="update_ab__mcd_items_{$item_type}"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{include file="buttons/save.tpl" but_name="dispatch[ab__mcd_items.m_update]" but_role="action" but_target_form="update_ab__mcd_items_{$item_type}" but_meta="cm-submit btn-primary"}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__multiple_cat_descriptions" active_href="ab__mcd_items.manage{if $item_type}?item_type={$item_type}{/if}"}
{include file="common/mainbox.tpl"
title_start=__("ab__multiple_cat_descriptions")|truncate:40
title_end = __("ab__mcd_items.`$item_type`")
content=$smarty.capture.mainbox
adv_buttons=$smarty.capture.adv_buttons
buttons=$smarty.capture.buttons
sidebar=$smarty.capture.sidebar
select_languages=true
content_id="ab__mcd_items.`$item_type`"
}
