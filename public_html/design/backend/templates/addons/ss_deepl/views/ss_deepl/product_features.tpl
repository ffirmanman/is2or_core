{* formatka do tłumaczenia cech i wariantów cech *}
{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="feature_ids" value="{$smarty.request.feature_ids}" />
<input type="hidden" name="action" value="{$smarty.request.action}" />

<div id="ss_deepl_features" class="collapse in">
    <div class="control-group">
        <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
        <div class="controls">
            <label class="checkbox">
                <input type="hidden" name="ss_deepl_sections[internal_name]" value="N" />
                <input type="checkbox" name="ss_deepl_sections[internal_name]" value="Y" 
                {if $addons.ss_deepl.ss_deepl_sections_product_features.internal_name == "Y"}checked="checked"{/if}/> {__("name")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="ss_deepl_sections[description]" value="N" />
                <input type="checkbox" name="ss_deepl_sections[description]" value="Y" 
                {if $addons.ss_deepl.ss_deepl_sections_product_features.description == "Y"}checked="checked"{/if}/> {__("storefront_name")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="ss_deepl_sections[full_description]" value="N" />
                <input type="checkbox" name="ss_deepl_sections[full_description]" value="Y" 
                {if $addons.ss_deepl.ss_deepl_sections_product_features.full_description == "Y"}checked="checked"{/if}/> {__("description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="ss_deepl_sections[variants]" value="N" />
                <input type="checkbox" name="ss_deepl_sections[variant]" value="Y" 
                {if $addons.ss_deepl.ss_deepl_sections_product_features.variant == "Y"}checked="checked"{/if}/> {__("variants")}
            </label>
        </div>
    </div>
    {include file="addons/ss_deepl/components/languages.tpl"}
</div>

</form>

{capture name="buttons"}
    {include file="buttons/button.tpl" but_text=__("ss_deepl_button_product_features") but_name="dispatch[ss_deepl.mass_translate_product_features]" but_role="submit-link" but_target_form="ss_deepl_form"}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{/capture}

{include file="common/mainbox.tpl" title={__("ss_deepl_product_features_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}