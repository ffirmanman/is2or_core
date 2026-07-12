<input type="hidden" name="{$input_name}" value="">
{include file="views/products/components/picker/picker.tpl"
input_name=$input_name
item_ids=","|explode:$item_ids
multiple=true
show_positions=true
view_mode="external"
select_group_class="btn-toolbar"
additional_query_params="{if $product_company_id}company_id=`$product_company_id`{/if}"
}
