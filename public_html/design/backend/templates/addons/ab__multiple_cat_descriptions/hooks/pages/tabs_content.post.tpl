{if 'ab__mcd_descs.manage'|fn_check_view_permissions:'GET' && $page_data.page_id}
<div id="content_ab__mcd_tab" class="hidden{if !'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'} cm-hide-inputs{/if}">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/object_picker.tpl" prefix="page_data" preview_url="pages.view&page_id=`$page_data.page_id`" ab__mcd_object_id=$page_data.page_id ab__mcd_object_type="page"}
</div>
{/if}