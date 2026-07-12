{capture name="mainbox"}
{*{if fn_allowed_for("MULTIVENDOR")}*}
{$query_params = [
"s_storefront" => $app["storefront"]->storefront_id
]}
{*{else}*}
{*{/if}*}
{$query_params = http_build_query($query_params)}
<form action="{""|fn_url}" method="post" name="ab__ecw_demo_data_form" id="ab__ecw_demo_data_form">
<p>{__("ab__ecw.demo_data.description")}</p>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="80%">{__("ab__ecw.demo_data.table.description")}</th>
<th width="20%" style="text-align: center">{__("action")}</th>
</tr>
</thead>
<tbody>
{hook name="ab__ecw:demo_table"}
<tr>
<td data-th="{__("ab__ecw.demo_data.table.description")}">{__("ab__ecw_comparison_pages.demo_data.add_pages")}</td>
<td data-th="{__("action")}" style="text-align: center">
<a class="cm-ajax cm-comet cm-post btn btn-primary" href="{"ab__ecw_comparison_pages.demo_data.add?$query_params"|fn_url}">{__("add")}</a>
</td>
</tr>
{/hook}
</tbody>
</table>
</div>
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__extended_comparison_wishlist"}
{include file="common/mainbox.tpl"
title_start = __("ab__extended_comparison_wishlist")|truncate:40
title_end = __("ab__ecw_comparison_pages.demo_data")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
select_storefront=true
show_all_storefront=false
adv_buttons=$smarty.capture.adv_buttons
content_id="ab__ecw_demo_data_form"}