<form action="{""|fn_url}" method="POST" name="update_ab__mcd_links_{$object_id}">
<input type="hidden" name="object_type" value="{$object_type}">
<input type="hidden" name="object_id" value="{$object_id}">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/object_picker.tpl" preview_url=$preview_url prefix="update_links" ab__mcd_object_id=$object_id ab__mcd_object_type=$object_type}
<div class="buttons-container">
{if 'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__mcd_items.update_links]" but_meta='cm-ajax cm-dialog-closer' cancel_action="close" extra="" hide_first_button=$hide_first_button save=true}
{/if}
</div>
</form>
