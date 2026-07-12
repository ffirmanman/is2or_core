{capture name="mainbox"}
{$id=$group_data.group_id|default:0}
<form action="{""|fn_url}" method="post" id="update_ab__ia_groups_form_{$id}" name="update_ab__ia_groups_form_{$id}" class="form-horizontal form-edit cm-disable-empty-files cm-form-dialog-closer" enctype="multipart/form-data">
<input type="hidden" value="{$id}" name="group_id">
<div class="control-group">
<label class="control-label" for="elm_group_name_{$id}">{__("ab__ia.groups.name")}:</label>
<div class="controls">
<input type="text" name="group_data[name]" value="{$group_data.name}" class="" id="elm_group_name_{$id}" />
</div>
</div>
<div class="buttons-container">
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__ia_groups.update]" but_meta='cm-reset-link' cancel_action="close" extra="" save=$id}
</div>
</form>
{/capture}
{$smarty.capture.mainbox nofilter}