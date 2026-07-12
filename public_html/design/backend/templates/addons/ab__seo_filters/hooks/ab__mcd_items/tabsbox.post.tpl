<div id="content_ab__seo_filters" class="hidden">
<div class="control-group">
<label class="control-label" for="ab__md_category_status">{__("ab__sf.ab__seo_filters_status")}</label>
<div class="controls">
<input type="hidden" name="ab__md[settings][ab__seo_filters][status]" value="D"/>
<input type="checkbox" id="ab__md_category_status" name="ab__md[settings][ab__seo_filters][status]" value="A" {if $ab__mcd_desc.settings.ab__seo_filters.status == "A"}checked="checked"{/if}/>
<p class="muted">{__("ab__sf.ab__seo_filters_status.tooltip")}</p>
</div>
</div>
{include file="common/subheader.tpl" title=__("ab__sf.include_pages")}
{$data_id = "ab__sf_names_list_incude"}
{include file="addons/ab__seo_filters/pickers/ab__sf_names_picker/picker.tpl"
show_add_button=true
data_id=$data_id
multiple=true
item_ids=implode(',', $ab__mcd_desc.links.ab__seo_filters.$include|default:[]|array_keys)
view_mode="list"
input_name="ab__md[links][ab__seo_filters][`$include`]"
checkbox_name="ab__md[links][ab__seo_filters][`$include`]"
no_item_text=__("no_data")
}
{include file="common/subheader.tpl" title=__("ab__sf.exclude_pages")}
{$data_id = "ab__sf_names_list_exclude"}
{include file="addons/ab__seo_filters/pickers/ab__sf_names_picker/picker.tpl"
show_add_button=true
data_id=$data_id
multiple=true
item_ids=implode(',', $ab__mcd_desc.links.ab__seo_filters.$exclude|default:[]|array_keys)
view_mode="list"
input_name="ab__md[links][ab__seo_filters][`$exclude`]"
checkbox_name="ab__md[links][ab__seo_filters][`$exclude`]"
no_item_text=__("no_data")
}
</div>