{capture name="mainbox"}
{include file="common/pagination.tpl"}
{assign var="r_url" value=$config.current_url|escape:url}
<form action="{""|fn_url}" method="post" name="manage_locations" id="manage_locations_form">
<input type="hidden" name="return_url" value="{$config.current_url}">
<div class="items-container" id="update_locations">
{if $locations_list}
<div class="table-responsive-wrapper">
<table class="table table-middle table-objects table-responsive">
<thead>
<tr>
<th width="50%">{__("ab__gp.location")}</th>
<th width="20%">{__("ab__gp.seo_name")}</th>
<th class="mobile-hide" width="5%">&nbsp;</th>
<th width="10%" class="right">{__("status")}</th>
</tr>
</thead>
<tbody>
{foreach $locations_list as $location}
<tr class="cm-row-item cm-row-status-{$location.status|lower}">
<td data-th="{__("description")}">
<div class="object-group-link-wrap">
<a href="{"ab__gp.update?location_id=`$location.location_id`"|fn_url}" class="row-status cm-external-click">{$location.location}</a>
</div>
</td>
<td class="mobile-hide" data-th="{__("ab__gp.seo_name")}">
<div class="row-status object-group-details">
{$location.seo_name}
</div>
</td>
<td class="nowrap mobile-hide">
<div class="hidden-tools">
{capture name="tools_list"}
<li>{btn type="list" text=__("edit") href="ab__gp.update?location_id=`$location.location_id`"}</li>
<li>{btn type="text" text=__("delete") href={"ab__gp.delete?location_id=`$location.location_id`"|fn_url} class="cm-confirm cm-tooltip cm-ajax cm-ajax-force cm-ajax-full-render cm-delete-row" data=["data-ca-target-id" => "pagination_contents"] method="POST"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td class="right nowrap" data-th="{__("status")}">
{include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$location.location_id status=$location.status object_id_name="location_id" table="ab__gp_locations" update_controller="ab__gp"}
</td>
</tr>
{/foreach}
</tbody>
</table>
</div>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
<!--update_locations--></div>
</form>
{include file="common/pagination.tpl"}
{capture name="adv_buttons"}
{capture name="add_location"}
{include file="addons/ab__geo_pages/views/ab__gp/update.tpl" location=[] in_popup=true return_url=$config.current_url}
{/capture}
{include file="common/popupbox.tpl" id="add_new_location" text=__("ab__gp.new_location") title=__("ab__gp.new_location") content=$smarty.capture.add_location act="general" icon="icon-plus"}
{/capture}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__geo_pages"}
{include file="common/mainbox.tpl"
title_start=__("ab__geo_pages")|truncate:40
title_end=__("ab__gp.manage")
content=$smarty.capture.mainbox
select_languages=true
adv_buttons=$smarty.capture.adv_buttons
}
