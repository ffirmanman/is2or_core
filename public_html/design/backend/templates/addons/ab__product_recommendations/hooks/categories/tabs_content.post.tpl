<div class="{if $selected_section !== "ab__product_recommendations"}hidden{/if}" id="content_ab__product_recommendations">
{include
file="addons/ab__product_recommendations/views/ab__product_recommendations/components/products_control_group.tpl"
input_name="category_data[ab__product_recommendations][object_data]"
item_ids=$category_data.ab__product_recommendations.object_data
}
{hook name="ab__pr:update_category"}
<div class="alert alert-info">
{__("ab__pr.install_ab_intelligent_accessories_to_automate")}
</div>
{/hook}
<!--content_ab__product_recommendations--></div>
