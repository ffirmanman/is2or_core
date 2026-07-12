{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="template_form" class="form-horizontal form-edit" enctype="multipart/form-data">
{include file="addons/ab__geo_pages/views/ab__gp_templates/components/category_templates.tpl" template_data=$template_data}
</form>
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[ab__gp_templates.update]" but_target_form="template_form" save=$template_data.template_id}
{/capture}
{/capture}
{capture name="sidebar"}
<div class="sidebar-row">
<div class="control-group">
<h6>{__("ab__gp.template.placeholders")}</h6>
{__("ab__gp.template.placeholders_list")}
<hr>
</div>
{if $ab__emd_placeholders}
{capture name="placeholders"}
{include file="addons/ab__extended_metadata/views/ab__emd/components/placeholders_list.tpl" placeholders=$ab__emd_placeholders['categories.view']}
{/capture}
<h5>
{__("ab__gp.template.placeholders.addon_placeholders")} {__("ab__extended_metadata")}:
</h5>
{include file="common/popupbox.tpl"
text=__("ab__gp.template.placeholders")
id="ab__emd"
link_text=__("ab__extended_metadata")
content=$smarty.capture.placeholders
act="link"
}
{else}
<p>
{__("ab__gp.template.placeholders.addon_ab__emd_integration_available")}
</p>
{/if}
</div>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__geo_pages"}
{if $template_data.template_name}
{$title_end = __("ab__gp.template.update",["[template_name]"=>$template_data.template_name])}
{else}
{$title_end = __("ab__gp.template.new")}
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
