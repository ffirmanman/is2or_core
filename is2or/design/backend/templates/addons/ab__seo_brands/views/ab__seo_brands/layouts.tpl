{capture name="mainbox"}
<div style="padding:15px;background:#eee;">{__("ab__sb.layouts.header")}</div>
<form action="{""|fn_url}" method="post" name="ab__sb_layouts_form" id="ab__sb_layouts_form">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="25%">{__("ab__sb.layouts.table.dispatch_description")}</th>
<th width="20%">{__("ab__sb.layouts.table.dispatch")}</th>
<th class="center" width="25%">{__("ab__sb.layouts.table.layouts")}</th>
<th class="center" width="10%">{__("ab__sb.layouts.table.action")}</th>
<th width="20%">{__("ab__sb.layouts.table.get_file")}</th>
</tr>
</thead>
<tbody>
{foreach $ab__sb_layouts as $dispatch => $ab__sb_layout_data}
{$key = $ab__sb_layout_data@iteration}
<tr>
<td data-th="{__("ab__sb.layouts.table.dispatch_description")}">{__($dispatch_descriptions.$dispatch|default:"custom")}</td>
<td data-th="{__("ab__sb.layouts.table.dispatch")}">{$dispatch}</td>
<td class="center" data-th="{__("ab__sb.layouts.table.layouts")}">
<input type="hidden" name="layouts[{$key}][dispatch]" value="{$dispatch}">
<select name="layouts[{$key}][location]">
<option value=""> --- </option>
{foreach $ab__sb_layout_data.layouts as $layout}
<optgroup label="{$layout.theme_name} - {$layout.name}">
{foreach $layout.locations as $location}
<option value="{$layout.layout_id}.{$location.location_id}">{$location.name}</option>
{foreachelse}
<option value="{$layout.layout_id}.0">{__("ab__sb.layouts.table.create_new_location")}</option>
{/foreach}
</optgroup>
{/foreach}
</select>
</td>
<td class="center" data-th="{__("ab__sb.layouts.table.action")}">
{btn type="list" class="cm-post btn btn-primary" text=__("reset") dispatch="dispatch[ab__seo_brands.reset_layout..`$key`]"}
</td>
<td data-th="{__("ab__sb.layouts.table.get_file")}">
{if $ab__sb_layout_data.files_full_paths}
<ul>
{foreach $ab__sb_layout_data.files_full_paths as $theme_name => $path}
<li><a target="_blank" href="{$path}">{$theme_name}</a></li>
{/foreach}
</ul>
{/if}
</td>
</tr>
{/foreach}
</tbody>
</table>
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_brands"}
{include
file="common/mainbox.tpl"
title_start=__("ab__seo_brands")|truncate:40
title_end=__("ab__sb.layouts")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
}