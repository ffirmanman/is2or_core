{if 'ab__gp.data.manage'|fn_check_view_permissions:'GET' && $n.sf_id}
<div id="content_ab__gp_tab">
{include file="addons/ab__geo_pages/components/object_location_settings.tpl" prefix="ab__sf_name_data" preview_prefix="categories.view?category_id=`$n.category_id`&features_hash=`$n.features_hash`"}
</div>
{/if}