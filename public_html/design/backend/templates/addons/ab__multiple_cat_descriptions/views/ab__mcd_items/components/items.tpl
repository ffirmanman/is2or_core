{$c_icon = "<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{$c_dummy = "<i class=\"icon-dummy\"></i>"}
{$c_url = $config.current_url|fn_query_remove:"sort_by":"sort_order"}
{$rev = $smarty.request.content_id|default:"pagination_contents"}
<div id="ab__md_{$ab__md_object.object_type}_{$ab__md_object.object_id}_items">
{if !empty($ab__mcd_items) and is_array($ab__mcd_items)}
<table class="table table-middle cm-progressbar-status" width="100%">
<thead class="cm-first-sibling">
<tr>
<th class="left">
{include file="common/check_items.tpl" check_statuses=""|fn_get_default_status_filters:false}
</th>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<th width="5%">{__("ab__mcd.position")}</th>
{/if}
<th width="5%">{__("ab__mcd.tag")}</th>
<th width="35%">{__("ab__mcd.title")}</th>
<th colspan="3">{__("ab__mcd.category_status")} / {__("ab__mcd.feature_variant_status_short")} / {__("ab__mcd.page_status_short")}</th>
{* <th>{__("ab__mcd.feature_variant_status")}</th>
<th>{__("ab__mcd.page_status")}</th>*}
{* <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=count_category&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="{$rev}">{__("ab__mcd.linked_categories")}{if $search.sort_by == "count_category"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>*}
{* <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=count_feature_variant&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="{$rev}">{__("ab__mcd.linked_feature_variants")}{if $search.sort_by == "count_feature_variant"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>*}
{hook name="ab__mcd_items:manage_head"}{/hook}
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<th width="5%">{__("ab__mcd.is_faq")} {include file="common/tooltip.tpl" tooltip=__("ab__mcd.is_faq.tooltip")}</th>
<th width="5%">{__("ab__mcd.is_open")}</th>
{/if}
<th width="5%">&nbsp;</th>
<th width="5%">{__("ab__mcd.status")}</th>
</tr>
</thead>
<tbody>
{foreach $ab__mcd_items as $i}
<tr class="cm-row-item cm-row-status-{$i.status|lower}">
<input type="hidden" name="ab__md[{$i.mdi_id}][mdi_id]" value="{$i.mdi_id}">
<td class="left" data-th="&nbsp;">
<input type="checkbox" name="mdi_ids[]" value="{$i.mdi_id}" class="cm-item cm-item-status-{$i.status|lower}" />
</td>
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<td>
<input type="text" class="cm-integer cm-trim input-micro" name="ab__md[{$i.mdi_id}][position]" value="{$i.position|default:0}">
</td>
{/if}
<td class="nowrap">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/select_popup.tpl"
items=['div' => __('ab__mcd.tag.variants.div'), 'h2' => __('ab__mcd.tag.variants.h2'), 'h3' => __('ab__mcd.tag.variants.h3'), 'h4' => __('ab__mcd.tag.variants.h4'), 'h5' => __('ab__mcd.tag.variants.h5')]
value=$i.tag
id="tag_`$i.mdi_id`"
object_table="ab__md_items"
object_id=$i.mdi_id
object_id_name="mdi_id"
object_field_name="tag"
update_controller="ab__mcd_items"
update_mode="update_field"
non_editable=!'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'
}
</td>
<td><input type="text" class="cm-trim input-full" name="ab__md[{$i.mdi_id}][title]" value="{$i.title|default:0}"></td>
<td>
{if $i.settings.category.status == 'A'}{__("yes")}{else}{__("no")}{/if}
</td>
<td>
{if $i.settings.feature_variant.status == 'A'}{__("yes")}{else}{__("no")}{/if}
</td>
<td>{if $i.settings.page.status == 'A'}{__("yes")}{else}{__("no")}{/if}</td>
{hook name="ab__mcd_items:manage_body"}{/hook}
{if $item_type == "Addons\\Ab_multipleCatDescriptions\\ItemTypes::ELEMENTS"|enum}
<td class="nowrap">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/select_popup.tpl"
items=['Y' => __('ab__mcd.is_faq.variants.y'), 'N' => __('ab__mcd.is_faq.variants.n')]
id="is_faq_`$i.mdi_id`"
value=$i.is_faq
object_table="ab__md_items"
object_id=$i.mdi_id
object_id_name="mdi_id"
object_field_name="is_faq"
update_controller="ab__mcd_items"
update_mode="update_field"
non_editable=!'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'
}
</td>
<td class="nowrap">
{include file="addons/ab__multiple_cat_descriptions/views/ab__mcd_items/components/select_popup.tpl"
items=['Y' => __('ab__mcd.is_open.variants.y'), 'N' => __('ab__mcd.is_open.variants.n')]
id="is_open_`$i.mdi_id`"
value=$i.is_open
object_table="ab__md_items"
object_id=$i.mdi_id
object_id_name="mdi_id"
object_field_name="is_open"
update_controller="ab__mcd_items"
update_mode="update_field"
non_editable=!'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'
}
</td>
{/if}
<td class="right nowrap">
{if 'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'}
<div class="hidden-tools">
{capture name="tools_list"}
<li>
<a href="{"ab__mcd_items.update?mdi_id=`$i@key`&item_type=`$i.item_type`"|fn_url}">{__("edit")}</a>
</li>
<li>{btn type="list" text=__("ab__mcd.delete") class="cm-post" href="ab__mcd_items.delete?mdi_id=`$i@key|escape:url`&item_type=`$item_type`"}</li>
{/capture}
{dropdown content=$smarty.capture.tools_list}
</div>
{/if}
</td>
<td class="right nowrap">
{include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$i@key status=$i.status hidden=true object_id_name="mdi_id" table="ab__md_items" hidden=false non_editable=!'ab__mcd_descs.manage'|fn_check_view_permissions:'POST'}
</td>
</tr>
{/foreach}
</tbody>
</table>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
</div>
