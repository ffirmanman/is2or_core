{if $id && $filter.feature_type === "ProductFeatures::EXTENDED"|enum}
{capture name="tools_list"}
{$view_uri = "product_features.view_all?filter_id=`$id`"|fn_get_preview_url:$filter:$auth.user_id}
<li>{btn type="list" target="_blank" text=__("preview") href=$view_uri}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
{/if}