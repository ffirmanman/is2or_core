{if 'ab__mcd_descs.manage'|fn_check_view_permissions:'GET' && $category_data.category_id}
<div id="content_ab__mcd_tab" class="hidden{if !'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'} cm-hide-inputs{/if}">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/object_picker.tpl" prefix="category_data" preview_url="categories.view&category_id=`$category_data.category_id`" ab__mcd_object_id=$category_data.category_id}
</div>
{/if}