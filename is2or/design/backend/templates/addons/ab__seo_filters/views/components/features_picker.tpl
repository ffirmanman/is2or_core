{$input_name = $input_name|default:"feature_id[]"}
{if !$item_ids || $item_ids === 0}
{$item_ids = []}
{/if}
{$select_class="ab--sf-picker-reset $select_class"}
{include file="views/product_features/components/picker/picker.tpl"
input_name=$input_name
item_ids=$item_ids
empty_variant_text=__("ab__sf.optionlist.searchplaceholder")
multiple=true
close_on_select=false
meta="control-toolbar__select"
select_class=$select_class
}
{include file="addons/ab__seo_filters/views/components/searchable_option_list.tpl"}