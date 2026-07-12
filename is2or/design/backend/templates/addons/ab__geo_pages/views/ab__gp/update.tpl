{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="location_form" class="form-horizontal form-edit" enctype="multipart/form-data">
<input type="hidden" name="location[location_id]" value="{$location.location_id}" />
<div class="control-group">
<label class="control-label cm-required" for="location_name">{__("ab__gp.location")}:</label>
<div class="controls">
<input type="text" name="location[location]" id="location_name" value="{$location.location}" class="span9" />
</div>
</div>
{$additional_forms_class = "additional_location_forms"}
<span class="more hand">
<a id="on_{$additional_forms_class}" class="collapsed cm-combination cm-save-state {if $smarty.cookies.$additional_forms_class}hidden{/if}">
{__("ab__gp.location_forms")}{include_ext file="common/icon.tpl" class="icon-caret-down"}
</a>
<a id="off_{$additional_forms_class}" class="cm-combination cm-save-state {if !$smarty.cookies.$additional_forms_class}hidden{/if}">
{__("ab__gp.location_forms")}{include_ext file="common/icon.tpl" class="icon-caret-up"}
</a>
</span>
<div class="{if !$smarty.cookies.$additional_forms_class}hidden{/if}" id="additional_location_forms">
{for $form_id = 1 to 7}
<div class="control-group">
<label class="control-label" for="location_form_{$form_id}">{__("ab__gp.location_form",['[form]' => $form_id])}:</label>
<div class="controls">
{$location_name = "location_form_`$form_id`"}
<input type="text" name="location[{$location_name}]" id="location_form_{$form_id}" value="{$location.$location_name|default:$location.location}" class="span9" />
</div>
</div>
{/for}
</div>
<div class="control-group">
<label class="control-label" for="location_link_type">
{__("ab__gp.location.link_type")}:
</label>
<div class="controls">
<select name="location[link_type]" id="location_link_type">
<option value="A"{if $location.link_type === "A"} selected{/if}>{__("ab__gp.location.link_type.all")}</option>
<option value="S"{if $location.link_type === "S"} selected{/if}>{__("ab__gp.location.link_type.selected")}</option>
</select>
</div>
</div>
{include file="common/select_status.tpl" input_name="location[status]" id="elm_location_status" obj=$location hidden=false}
<div class="control-group">
<label class="control-label disabled" for="seo_name">{__("ab__gp.seo_name")}:</label>
<div class="controls">
<input type="text" name="location[seo_name]" id="seo_name" value="{$location.seo_name}" class="span9"/>
</div>
</div>
</form>
{capture name="buttons"}
{if $location.location_id}
{capture name="tools_list"}
<li>{btn type="list" text=__("delete") class="cm-confirm cm-post" href="ab__gp.delete?location_id=`$location.location_id`"|fn_url}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[ab__gp.update]" but_target_form="location_form" save=$location.location_id}
{/capture}
{if $in_popup}
<div class="buttons-container">
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[ab__gp.update]" but_target_form="location_form" save=$location.location_id}
</div>
{/if}
{/capture}
{if $location.location_id}
{capture name="mainbox_title"}
{"{__("editing_location")}: `$location.description`"|strip_tags}
{/capture}
{else}
{capture name="mainbox_title"}
{__("ab__gp.new_location")}
{/capture}
{/if}
{if $in_popup}
{$smarty.capture.mainbox nofilter}
{else}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__geo_pages"}
{if $location.location_id}
{$title_end = $location.location}
{else}
{$title_end = __("ab__gp.new_location")}
{/if}
{include
file="common/mainbox.tpl"
title_start=__("ab__geo_pages")|truncate:40
title_end=$title_end
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
select_languages=true
}
{/if}