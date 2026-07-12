<fieldset>
<legend>{__("ab__intelligent_accessories")}</legend>
<div class="control-group">
<label for="ab__product_recommendations_ia" class="control-label">
{__("ab__pr.select_join")}
</label>
<div class="controls">
{if $ab__ia_joins}
<select name="category_data[ab__product_recommendations_ia][object_data]" id="ab__product_recommendations_ia">
<option value="">--</option>
{foreach $ab__ia_joins as $join}
<option value="{$join.join_id}"{if $join.join_id == $category_data.ab__product_recommendations_ia.object_data} selected{/if}>{$join.name}</option>
{/foreach}
</select>
{else}
{__("ab__pr.no_joins_presented")}
{/if}
</div>
</div>
</fieldset>
