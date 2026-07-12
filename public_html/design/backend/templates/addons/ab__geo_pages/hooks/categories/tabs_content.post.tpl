{if 'ab__gp.data.manage'|fn_check_view_permissions:'GET' && $category_data.category_id}
<div id="content_ab__gp_tab" class="hidden">
{include file="addons/ab__geo_pages/components/object_location_settings.tpl" prefix="category_data" preview_prefix="categories.view?category_id=`$category_data.category_id`"}
</div>
{/if}