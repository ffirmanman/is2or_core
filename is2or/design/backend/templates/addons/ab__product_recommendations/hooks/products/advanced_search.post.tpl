{$inherit_all = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::ALL"|constant}
{$inherit_category = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::CATEGORY"|constant}
{$inherit_intelligent = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::INTELLIGENT"|constant}
{$inherit_none = "Tygh\Enum\Addons\Ab_productRecommendations\InheritTypes::NONE"|constant}
<div class="row-fluid">
<div class="group span6 ">
<a href="javascript:void(0)" id="sw_ab__pr_products_search" class="search-link cm-combination cm-save-state">
<span id="on_ab__pr_products_search" class="icon-caret-right{if $smarty.cookies.ab__pr_products_search} hidden{/if}"></span>
<span id="off_ab__pr_products_search" class="icon-caret-down{if !$smarty.cookies.ab__pr_products_search} hidden{/if}"></span>
{__('ab__product_recommendations')}
</a>
<div class="form-horizontal{if !$smarty.cookies.ab__pr_products_search} hidden{/if}" id="ab__pr_products_search">
<div class="control-group" style="margin-top: 15px;">
<label for="ab__pr_products_with_personal_recommendations" class="control-label">{__("ab__pr.products_search.with_personal_recommendations")}</label>
<div class="controls">
<input type="hidden" name="ab__pr_products_with_personal_recommendations" value="N" />
<input type="checkbox" value="Y"{if $search.ab__pr_products_with_personal_recommendations == "Y"} checked="checked"{/if} name="ab__pr_products_with_personal_recommendations" id="ab__pr_products_with_personal_recommendations" />
</div>
</div>
<div class="control-group" style="margin-top: 15px;">
<label for="ab__pr_products_with_category_recommendations" class="control-label">{__("ab__pr.products_search.with_category_recommendations")}</label>
<div class="controls">
<input type="hidden" name="ab__pr_products_with_category_recommendations" value="N" />
<input type="checkbox" value="Y"{if $search.ab__pr_products_with_category_recommendations == "Y"} checked="checked"{/if} name="ab__pr_products_with_category_recommendations" id="ab__pr_products_with_category_recommendations" />
</div>
</div>
<div class="control-group" style="margin-top: 15px;">
<label for="ab__pr_inherit" class="control-label">{__("ab__pr.inherit")}</label>
<div class="controls">
<select id="ab__pr_inherit" name="ab__pr_inherit">
<option value="">--</option>
<option value="{$inherit_all}" {if $search.ab__pr_inherit === $inherit_all}selected{/if}> {__("ab__pr.inherit.all")}</option>
<option value="{$inherit_category}" {if $search.ab__pr_inherit === $inherit_category}selected{/if}> {__("ab__pr.inherit.category")}</option>
<option {if $addons.ab__intelligent_accessories.status != "A"}disabled title="{__("ab__pr.install_ab_intelligent_accessories_to_automate")|escape:"quotes"}" {/if} value="{$inherit_intelligent}" {if $search.ab__pr_inherit === $inherit_intelligent}selected{/if}> {__("ab__pr.inherit.intelligent")}</option>
<option value="{$inherit_none}" {if $search.ab__pr_inherit === $inherit_none}selected{/if}> {__("ab__pr.inherit.none")}</option>
</select>
</div>
</div>
<div class="control-group" style="margin-top: 15px;">
<label class="control-label" for="ab__pr_inherit_if_not_available">
{__("ab__pr.inherit_if_not_available")}
</label>
<div class="controls">
<input type="hidden" name="ab__pr_inherit_if_not_available" value="N">
<input type="checkbox" id="ab__pr_inherit_if_not_available" name="ab__pr_inherit_if_not_available" value="Y" {if $search.ab__pr_inherit_if_not_available === "YesNo::YES"|enum}checked{/if}>
</div>
</div>
</div>
</div>
</div>
