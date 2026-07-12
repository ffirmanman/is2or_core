{capture name="mainbox"}
{if $ab__ia_groups}
<table class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<th width="90%">{__("ab__ia.groups.name")}</th>
<th width="10%"></th>
</tr>
</thead>
<tbody>
{foreach $ab__ia_groups as $group}
<tr>
<th><a class="row-status cm-external-click"
data-ca-external-click-id="{"opener_group`$group.group_id`"}">{$group.name}</a></th>
{capture name="tools_list"}
{hook name="usergroups:list_extra_links"}
<li>
{include file= "common/popupbox.tpl"
id= "group`$group.group_id`"
text= __("edit")
link_text= __("edit")
act= "link"
href= "ab__ia_groups.update?group_id=`$group.group_id`"
link_class= "cm-dialog-auto-size"
}
</li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__ia_groups.delete?group_id=`$group.group_id`" method="POST"}</li>
{/hook}
{/capture}
<th>
<div class="hidden-tools cm-hide-with-inputs">
{dropdown content=$smarty.capture.tools_list}
</div>
</th>
</tr>
{/foreach}
</tbody>
</table>
{else}
<p class="no-items">{__("ab__ia_no_data")}</p>
{/if}
{/capture}
{capture name="adv_buttons"}
{include file= "common/popupbox.tpl"
id= "ab__ia_group_`$smarty.now`"
text= __("ab__ia.popup.add_group")
act= "general"
link_text= ''
icon= 'icon-plus'
href= "ab__ia_groups.update"
link_class= "cm-dialog-auto-size"
}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__intelligent_accessories"}
{include file= "common/mainbox.tpl"
title_start= __("ab__intelligent_accessories")|truncate:40
title_end= __("ab__ia.groups_list")
adv_buttons= $smarty.capture.adv_buttons
content= $smarty.capture.mainbox
buttons= $smarty.capture.buttons
select_languages= true
}