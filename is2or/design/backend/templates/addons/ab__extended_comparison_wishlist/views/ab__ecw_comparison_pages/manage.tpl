{** stickers section **}
{strip}
{capture name="mainbox"}
{$hide_inputs = !"ab__ecw.edit"|fn_check_view_permissions}
<form action="{""|fn_url}" method="post" name="ab__ecw_comparison_pages_form" enctype="multipart/form-data"{if $hide_inputs} class="cm-hide-inputs"{/if}>
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="storefront_id" value="{$app['storefront']->storefront_id}" />
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_ab__ecw_comparison_pages"}
{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents_ab__ecw_comparison_pages"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
{capture name="sidebar"}
{*{include file="common/saved_search.tpl" dispatch="ab__stickers.manage" view_type="ab__stickers"}*}
{*{include file="addons/ab__stickers/views/ab__stickers/components/stickers_search_form.tpl" dispatch="ab__stickers.manage"}*}
{/capture}
{if $comparison_pages}
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="1%" class="left">
{include file="common/check_items.tpl"}
</th>
{*<th width="10%" class="mobile-hide"><a class="cm-ajax" href="{"`$c_url`&sort_by=position&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents_ab__ecw_comparison_pages">{__("position_short")}{if $search.sort_by == "position"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>*}
{*<th width="15%" class="mobile-hide"></th>*}
<th width="80%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name_for_admin&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents_ab__ecw_comparison_pages">{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th width="6%" class="right mobile-hide">&nbsp;</th>
<th width="13%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents_ab__ecw_comparison_pages">{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
</tr>
</thead>
<tbody>
{foreach $comparison_pages as $comparison_page}
<tr class="cm-row-status-{$comparison_page.status|lower}">
<td class="left mobile-hide">
<input type="checkbox" name="page_ids[]" value="{$comparison_page.page_id}" class="cm-item" title="" />
</td>
<td data-th="{__('name')}">
<a class="row-status" href="{"ab__ecw_comparison_pages.update?page_id=`$comparison_page.page_id`"|fn_url}">{$comparison_page.name}</a>
</td>
<td class="mobile-hide">
{capture name="tools_list"}
<li>{btn type="list" text=__("preview") href=fn_get_preview_url("ab__ecw_comparison_pages.view?page_id=`$comparison_page.page_id`&sl=`$smarty.const.DESCR_SL`&storefront_id=`$comparison_page.storefront_id`", $comparison_page|default:[], $auth.user_id) method="GET" target="_blank"}</li>
<li class="divider"></li>
<li>{btn type="list" text=__("edit") href="ab__ecw_comparison_pages.update?page_id=`$comparison_page.page_id`"}</li>
{if !$hide_inputs}
<li>{btn type="list" class="cm-post" text=__("clone") href="ab__ecw_comparison_pages.clone?page_ids[]=`$comparison_page.page_id`"}</li>
<li class="divider"></li>
<li>{btn type="list" class="cm-confirm" text=__("delete") href="ab__ecw_comparison_pages.delete?page_ids[]=`$comparison_page.page_id`" method="POST"}</li>
{/if}
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td class="right nowrap" data-th="{__("status")}">
{include file="common/select_popup.tpl" id=$comparison_page.page_id status=$comparison_page.status hidden=false object_id_name="page_id" table="ab__ecw_comparison_pages" popup_additional_class="cm-no-hide-input dropleft" non_editable=$hide_inputs}
</td>
</tr>
{/foreach}
</tbody>
</table>
</div>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
{include file="common/pagination.tpl" div_id="pagination_contents_ab__ecw_comparison_pages"}
{capture name="buttons"}
{if $comparison_pages && !$hide_inputs}
{capture name="tools_list"}
<li>{btn type="list" class="cm-post" text=__('clone_selected') dispatch="dispatch[ab__ecw_comparison_pages.m_clone]" form="ab__ecw_comparison_pages_form"}</li>
{*<li>{btn type="list" class="cm-post" text=__('activate_selected') dispatch="dispatch[ab__stickers.m_change_status.A]" form="ab__stickers_form"}</li>*}
{*<li>{btn type="list" class="cm-post" text=__('disable_selected') dispatch="dispatch[ab__stickers.m_change_status.D]" form="ab__stickers_form"}</li>*}
<li>{btn type="delete_selected" dispatch="dispatch[ab__ecw_comparison_pages.m_delete]" form="ab__ecw_comparison_pages_form"}</li>
{*{if "DEVELOPMENT"|defined && $smarty.const.DEVELOPMENT == true}*}
{*<li class="divider"></li>*}
{*<li><a class="cm-submit cm-confirm" data-ca-target-form="ab__stickers_form" data-ca-dispatch="dispatch[ab__stickers.m_delete.all]">{__('ab__stickers.delete_all')}</a></li>*}
{*{/if}*}
{/capture}
{dropdown content=$smarty.capture.tools_list}
{*{include file="buttons/save.tpl" but_name="dispatch[ab__ecw_comparison_pages.m_update]" but_role="action" but_target_form="ab__ecw_comparison_pages_form" but_meta="cm-submit"}*}
{/if}
{/capture}
{capture name="adv_buttons"}
{hook name="ab__ecw_comparison_pages:manage_tools"}
{include file="common/tools.tpl" tool_href="ab__ecw_comparison_pages.add" prefix="top" title=__("ab__ecw_comparison_pages.add_page") hide_tools=true icon="icon-plus"}
{/hook}
{/capture}
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__extended_comparison_wishlist"}
{include file="common/mainbox.tpl"
title_start=__("ab__extended_comparison_wishlist")|truncate:40
title_end=__("ab__ecw_comparison_pages.manage")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
select_languages=true
select_storefront=true
show_all_storefront=false
sidebar=$smarty.capture.sidebar}
{/strip}