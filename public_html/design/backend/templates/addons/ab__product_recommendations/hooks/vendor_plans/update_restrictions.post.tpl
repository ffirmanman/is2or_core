<div class="control-group">
<label class="control-label" for="elm_ab__pr_allow_recommendations_{$id}">{__("ab__pr.ab__pr_allow_recommendations")}:</label>
<div class="controls">
<input type="hidden" name="plan_data[ab__pr_allow_recommendations]" value="0" />
<input type="checkbox" id="elm_ab__pr_allow_recommendations_{$id}" name="plan_data[ab__pr_allow_recommendations]" size="10" value="1"{if $plan.ab__pr_allow_recommendations} checked="checked"{/if} />
<p class="muted description">{__("ab__pr.ab__pr_allow_recommendations.tooltip") nofilter}</p>
</div>
</div>
