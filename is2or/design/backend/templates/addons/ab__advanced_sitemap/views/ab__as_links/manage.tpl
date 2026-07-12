{if fn_allowed_for("MULTIVENDOR")}
{$company_id = $app["storefront"]->storefront_id}
{else}
{$company_id = fn_get_runtime_company_id()}
{/if}
{capture name="ab__as_add_link"}
<form action="{""|fn_url}" method="post" name="ab__as_add_link" class="form-horizontal form-edit">
<input type="hidden" name="page" value="{$smarty.request.page}" />
<input type="hidden" name="link_data[company_id]" value="{$company_id}" />
<div class="control-group">
<label class="control-label cm-required" for="elm_link">{__("ab__as.form.link")}:</label>
<div class="controls">
<input type="text" name="link_data[link]" id="elm_link" value="" class="span9" />
</div>
</div>
<div class="buttons-container">
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__as_links.update]" cancel_action="close"}
</div>
</form>
{/capture}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__as_links_form" class="form-horizontal form-edit">
{include file="common/pagination.tpl" save_current_page=true save_current_url=true}
{if $ab__as_links}
<div class="table-responsive-wrapper longtap-selection">
<table width="100%" class="table table-middle table--relative table-responsive">
<thead>
<tr>
<th width="1%">{include file="common/check_items.tpl"}</th>
<th>{__("url")}</th>
<th>{__("preview")}</th>
<th>&nbsp;</th>
</tr>
</thead>
{foreach $ab__as_links as $key => $link}
<tr>
<td><input id="ab-as-link-{$key}" type="checkbox" name="links[]" value="{$link.link}" class="cm-item" /></td>
<td data-th="{__("url")}"><label for="ab-as-link-{$key}">{$link.link}</td>
<td data-th="{__("preview")}"><a href="{fn_ab__as_get_full_url($link.link, $link.company_id)}" target="_blank">{fn_ab__as_get_full_url($link.link, $link.company_id)}</a></td>
<td class="nowrap">
<div class="hidden-tools">
{capture name="tools_list"}
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__as_links.delete?link=`$link.link|escape:url`" method="POST"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
</tr>
{/foreach}
</table>
</div>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
{include file="common/pagination.tpl"}
</form>
{/capture}
{capture name="buttons"}
{capture name="tools_list"}
{if $ab__as_links}
<li>{btn type="delete_selected" dispatch="dispatch[ab__as_links.m_delete]" form="ab__as_links_form"}</li>
{/if}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/capture}
{capture name="adv_buttons"}
{if fn_check_view_permissions("ab__as_links.manage", "POST")}
{include file="common/popupbox.tpl" id="ab__as_add_link" text=__("ab__as.new_link") title=__("add_new") content=$smarty.capture.ab__as_add_link act="general" icon="icon-plus"}
{/if}
{/capture}
{capture name="sidebar"}
{include file="addons/ab__advanced_sitemap/views/ab__as_links/components/search_form.tpl" dispatch="ab__as_links.manage"}
{/capture}
{capture name="mainbox_title"}
{$title_start} {$title_end}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__advanced_sitemap"}
{include
file="common/mainbox.tpl"
title_start=__("ab__advanced_sitemap")|truncate:40
title_end = __("ab__as_links.manage")
content=$smarty.capture.mainbox
title_extra=$smarty.capture.title_extra
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
select_storefront=true
show_all_storefront=false
}