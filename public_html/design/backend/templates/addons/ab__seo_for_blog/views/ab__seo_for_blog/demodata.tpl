{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__sfb_demo_data_form" id="ab__sfb_demo_data_form">
<p>{__("ab__sfb.demodata_description")}</p>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="60%">{__("ab__sfb.demodata.table.description")}</th>
<th width="20%">{__("ab__sfb.demodata.table.action")}</th>
</tr>
</thead>
<tbody>
<tr>
<td data-th="{__("ab__sfb.demodata.table.description")}">{__("ab__sfb.demodata.table.add_authors_and_blogs")}</td>
<td data-th="{__("ab__sfb.demodata.table.action")}">
{btn type="list" class="cm-ajax cm-post btn btn-primary" text=__("add") dispatch="dispatch[ab__seo_for_blog.install_demodata]"}
</td>
</tr>
</tbody>
</table>
</div>
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_for_blog" }
{include
file="common/mainbox.tpl"
title_start=__("ab__seo_for_blog")|truncate:40
title_end=__("ab__sfb.demodata")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
content_id="ab__sfb_demo_data_form"
}