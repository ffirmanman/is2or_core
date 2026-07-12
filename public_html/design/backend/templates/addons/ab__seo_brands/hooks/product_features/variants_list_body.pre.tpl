{if $feature_type === "ProductFeatures::EXTENDED"|enum && fn_check_view_permissions("block_manager.block_selection", "GET")}
<td width="2%">
{capture name="tools_list"}
{hook name="feature_variants:list_extra_links"}
<li>{btn type="list" text=__("ab__sb.edit_blocks_link") href="ab__sb_feature_variants.update?variant_id=`$var.variant_id`" class="cm-new-window"}</li>
{/hook}
{/capture}
{dropdown content=$smarty.capture.tools_list}
</td>
{/if}