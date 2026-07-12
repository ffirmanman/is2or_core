<div class="control-group">
    <label class="control-label" for="elm_ss_deepl_api_allow_{$id}">{__("ss_deepl_api_allow")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_api_allow_tooltip)}:</label>
    <div class="controls">
        <input type="hidden" name="plan_data[ss_deepl_api_allow]" value="N"/>
        <input type="checkbox" name="plan_data[ss_deepl_api_allow]" id="elm_ss_deepl_api_allow" value="Y" {if $plan.ss_deepl_api_allow == "Y"}checked="checked"{/if} class="checkbox" />
    </div>
</div>
