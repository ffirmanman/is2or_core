<td>
{if $i.settings.ab__seo_filters.status == 'A'}{__("yes")}{else}{__("no")}{/if}
{* {if $i.count_ab__seo_filters}
{include file="common/popupbox.tpl"
id="item_ab__seo_filters_`$i.mdi_id`"
act="edit"
link_text=$i.count_ab__seo_filters
text=__("ab__sf.popup.linked_ab__seo_filters_list")
href="ab__mcd_items.linked_objects?mdi_id={$i.mdi_id}&object_type=ab__seo_filters"
}
{else}
0
{/if}*}
</td>