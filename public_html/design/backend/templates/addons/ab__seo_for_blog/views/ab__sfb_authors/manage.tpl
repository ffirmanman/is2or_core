{capture name="mainbox"}
{$hide_inputs = ""|fn_check_form_permissions}
<form action="{""|fn_url}" method="post" id="authors_form" name="authors_form" class="{if $hide_inputs} cm-hide-inputs{/if}">
{$authors_statuses=""|fn_get_default_statuses:false}
{$has_permission = fn_check_permissions("ab__sfb_authors", "update", "admin", "POST")}
{hook name="ab__sfb_authors:manage"}
{if $authors}
{include file="common/pagination.tpl"}
{capture name="authors_table"}
<div class="table-responsive-wrapper longtap-selection">
<table class="table table-middle table--relative table-responsive table--overflow-hidden">
<thead
data-ca-bulkedit-default-object="true"
data-ca-bulkedit-component="defaultObject"
>
<tr>
<th class="mobile-hide table__check-items-column">
{include file="common/check_items.tpl"
check_statuses=($has_permission) ? $authors_statuses : ''
meta="table__check-items"
}
<input type="checkbox"
class="bulkedit-toggler hide"
data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
/>
</th>
<th width="56%">
{include file="common/table_col_head.tpl" text=__("ab__sfb.author.name")}
</th>
<th width="26%">
{include file="common/table_col_head.tpl" text=__("ab__sfb.author.rank")}
</th>
{hook name="ab__sfb_authors:manage_header"}{/hook}
<th width="8%" class="mobile-hide">
{include file="common/table_col_head.tpl" text="&nbsp;"}
</th>
<th width="10%" class="right">
{include file="common/table_col_head.tpl" text=__("status")}
</th>
</tr>
</thead>
{foreach $authors as $author}
<tr class="cm-row-status-{$author.status|lower} cm-longtap-target"
{if $has_permission}
data-ca-longtap-action="setCheckBox"
data-ca-longtap-target="input.cm-item"
data-ca-id="{$author.author_id}"
{/if}
>
<td class="mobile-hide table__check-items-cell">
<input type="checkbox" name="author_ids[]" value="{$author.author_id}" class="cm-item cm-item-status-{$author.status|lower} hide" />
</td>
<td width="56%" class="row-status" data-th="{__("ab__sfb.author.name")}">
{if $hide_inputs}
{$author.name}
{else}
<a href="{"ab__sfb_authors.update?author_id=`$author.author_id`"|fn_url}">{$author.name}</a>
{/if}
</td>
<td width="26%" class="row-status" data-th="{__("ab__sfb.author.rank")}">
{$author.author_rank|default:"--"}
</td>
{hook name="ab__sfb_authors:manage_data"}{/hook}
<td width="8%" class="row-status mobile-hide">
{capture name="tools_list"}
{hook name="usergroups:list_extra_links"}
<li><a href="{"ab__sfb_authors.update?author_id=`$author.author_id`"|fn_url}">{__("edit")}</a></li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__sfb_authors.delete?author_id=`$author.author_id`" method="POST"}</li>
{/hook}
{/capture}
<div class="hidden-tools cm-hide-with-inputs">
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td width="10%" class="nowrap right" data-th="{__("status")}">
{assign var="hide_for_vendor" value=false}
{if !"ab__sfb_authors.manage"|fn_check_view_permissions:"POST"}
{assign var="hide_for_vendor" value=true}
{/if}
{include file="common/select_popup.tpl" id=$author.author_id status=$author.status hidden=true object_id_name="author_id" table="ab__sfb_authors" hide_for_vendor=$hide_for_vendor}
</td>
</tr>
{/foreach}
</table>
</div>
{/capture}
{include file="common/context_menu_wrapper.tpl"
form="authors_form"
object="ab__sfb_authors"
items=$smarty.capture.authors_table
has_permissions=$has_permission
}
{include file="common/pagination.tpl"}
{else}
<p class="no-items">{__("no_items")}</p>
{/if}
{/hook}
</form>
{capture name="adv_buttons"}
{if "ab__sfb_authors.update"|fn_check_view_permissions}
<a class="btn cm-tooltip" href="{"ab__sfb_authors.add"|fn_url}" title="{__("ab__sfb.author.add")}">
{include_ext file="common/icon.tpl" class="icon-plus"}
</a>
{/if}
{/capture}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_blog"}
{include file="common/mainbox.tpl"
title_start=__("ab__seo_for_blog")|truncate:40
title_end=__("ab__sfb.authors.manage")
select_languages=true
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar}
