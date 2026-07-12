{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__mcd_export_form" id="ab__mcd_export_form">
<p>{__("ab__mcd.export_description")}</p>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="40%">{__("ab__mcd.export.table.description")}</th>
<th width="40%">{__("ab__mcd.export.table.data")}</th>
<th width="20%">{__("ab__mcd.export.table.action")}</th>
</tr>
</thead>
<tbody>
<tr>
<td data-th="{__("ab__mcd.export.table.description")}">{__("ab__mcd.export.actions.categories")}</td>
<td data-th="{__("ab__mcd.export.table.data")}"><input type="text" id="category-ids" class="input-text-medium" placeholder="{__("ab__mcd.export.actions.categories.placeholder")}"></td>
<td data-th="{__("ab__mcd.export.table.action")}">
<a style="pointer-events: none;" class="cm-process-items cm-submit cm-ajax cm-post btn btn-primary export-category" data-ca-dispatch="dispatch[ab__mcd_descs.export.category]">
{__("add")}
</a>
</td>
</tr>
</tbody>
</table>
</div>
</form>
<script>
$(document).ready(function(){
var btn = $(".export-category");
var not_active = {
"background-color": "#aaa",
"border": "1px solid #aaa"
};
btn.css(not_active);
$("#category-ids").on('keyup', function() {
var dispatch = btn.attr("data-ca-dispatch").substr(0, 38);
$str = $(this).val().replace(/[^,0-9]/gim,'');
$(this).val($str);
if($(this).val() !== '') {
btn.css({
"pointer-events": "all",
"background-color": "#0388cc",
"border": "1px solid #0388cc"
});
}
else {
btn.css(not_active);
}
btn.attr("data-ca-dispatch", dispatch + "." + $str + ']');
});
});
</script>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__multiple_cat_descriptions"}
{include file="common/mainbox.tpl"
title_start=__("ab__multiple_cat_descriptions")|truncate:40
title_end = __("ab__mcd_descs.export")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
content_id="ab__mcd_export_form"}