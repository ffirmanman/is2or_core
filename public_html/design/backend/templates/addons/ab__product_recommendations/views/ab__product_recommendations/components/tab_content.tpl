<div class="{if $selected_section !== "ab__product_recommendations"}hidden{/if}{if !"ab__product_recommendations.update"|fn_check_view_permissions} cm-hide-inputs{/if}" id="content_ab__product_recommendations">
{$inherit_all = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::ALL"|constant}
{$inherit_category = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::CATEGORY"|constant}
{$inherit_intelligent = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::INTELLIGENT"|constant}
{$inherit_none = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::NONE"|constant}
{$category_has_recommendations = $product_data.ab__product_recommendations.category_has_recommendations}
{$category_url = "categories.update?category_id=`$product_data.main_category`&selected_section=ab__product_recommendations"|fn_url}
{if $auth.user_type !== "UserTypes::VENDOR"|enum}
<div class="alert {if $category_has_recommendations}alert-info{else}alert-warning{/if}">
{if $category_has_recommendations}
{__("ab__pr.category_has_recommendations")}&nbsp;<a href="{$category_url}" target="_blank">{__("view")}</a>
{else}
{__("ab__pr.category_has_no_recommendations")}&nbsp;<a href="{$category_url}" target="_blank">{__("add")}</a>
{/if}
</div>
<div class="control-group">
<label class="control-label" for="ab__product_recommendations_inherit">
{__("ab__pr.inherit")}
{include file="common/tooltip.tpl" tooltip=__("ab__pr.inherit.tooltip")}:
</label>
<div class="controls">
<select id="ab__product_recommendations_inherit" name="product_data[ab__product_recommendations][inherit]">
<option value="{$inherit_all}" {if $product_data.ab__product_recommendations.inherit === $inherit_all}selected{/if}> {__("ab__pr.inherit.all")}</option>
<option value="{$inherit_category}" {if $product_data.ab__product_recommendations.inherit === $inherit_category}selected{/if}> {__("ab__pr.inherit.category")}</option>
<option {if $addons.ab__intelligent_accessories.status != "A"}disabled title="{__("ab__pr.install_ab_intelligent_accessories_to_automate")|escape:"quotes"}" {/if} value="{$inherit_intelligent}" {if $product_data.ab__product_recommendations.inherit === $inherit_intelligent}selected{/if}> {__("ab__pr.inherit.intelligent")}</option>
<option value="{$inherit_none}" {if $product_data.ab__product_recommendations.inherit === $inherit_none}selected{/if}> {__("ab__pr.inherit.none")}</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__product_recommendations_inherit_if_not_available">
{__("ab__pr.inherit_if_not_available")}
{include file="common/tooltip.tpl" tooltip=__("ab__pr.inherit_if_not_available.tooltip")}:
</label>
<div class="controls">
<input type="hidden" name="product_data[ab__product_recommendations][inherit_if_not_available]" value="N">
<input type="checkbox" id="ab__product_recommendations_inherit_if_not_available" name="product_data[ab__product_recommendations][inherit_if_not_available]" value="Y" {if $product_data.ab__product_recommendations.inherit_if_not_available === "YesNo::YES"|enum}checked{/if}>
</div>
</div>
{/if}
{include
file="addons/ab__product_recommendations/views/ab__product_recommendations/components/products_control_group.tpl"
input_name="product_data[ab__product_recommendations][object_data]"
item_ids=$product_data.ab__product_recommendations.object_data
}
<!--content_ab__product_recommendations--></div>
