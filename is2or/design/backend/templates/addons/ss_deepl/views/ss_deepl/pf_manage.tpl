{* formatka do tłumaczenia cech i wariantów cech *}
{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="feature_ids" value="{$smarty.request.feature_ids}" />
<input type="hidden" name="action" value="{$smarty.request.action}" />

<div id="ss_deepl_products" class="collapse in">
    <div class="control-group">
        <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
        <div class="controls">
            <label class="checkbox">
                <input type="hidden" name="feature_data[ss_deepl_sections][internal_name]" value="N" />
                <input type="checkbox" name="feature_data[ss_deepl_sections][internal_name]" id="ss_deepl_pf_internal_name" value="Y" {if $addons.ss_deepl.ss_deepl_pf.internal_name == "Y"}checked="checked"{/if}/> {__("ss_deepl_pf_internal_name")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="feature_data[ss_deepl_sections][description]" value="N" />
                <input type="checkbox" name="feature_data[ss_deepl_sections][description]" id="ss_deepl_pf_description" value="Y" {if $addons.ss_deepl.ss_deepl_pf.description == "Y"}checked="checked"{/if}/> {__("ss_deepl_pf_description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="feature_data[ss_deepl_sections][full_description]" value="N" />
                <input type="checkbox" name="feature_data[ss_deepl_sections][full_description]" id="ss_deepl_pf_full_description" value="Y" {if $addons.ss_deepl.ss_deepl_pf.full_description == "Y"}checked="checked"{/if}/> {__("ss_deepl_pf_full_description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="feature_data[ss_deepl_sections][variants]" value="N" />
                <input type="checkbox" name="feature_data[ss_deepl_sections][variants]" id="ss_deepl_pf_variants" value="Y" {if $addons.ss_deepl.ss_deepl_pf.variants == "Y"}checked="checked"{/if}/> {__("ss_deepl_pf_variants")}
            </label>
        </div>
    </div>
    {assign var="languages_list" value=1|fn_ss_deepl_get_languages}
    {assign var="storefronts_list" value=1|fn_ss_deepl_get_storefronts}
    <div class="control-group" id="ss_deepl_from_language">
        <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}:</label>
        <div class="controls">
            <select class="span3" name="feature_data[ss_deepl_from_language]" id="ss_deepl_from_language">
                {foreach from=$languages_list key=lang_code item=lang_data}
                    <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_from_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    {*{if "ULTIMATE"|fn_allowed_for}
         <div class="control-group" id="ss_deepl_from_storefront">
             <label class="control-label" for="ss_deepl_from_storefront">{__("ss_deepl_from_storefront")}:</label>
             <div class="controls">
                 <select class="span3" name="feature_data[ss_deepl_from_storefront]" id="ss_deepl_from_storefront">
                     {foreach from=$storefronts_list item=storefront_data}
                         <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_from_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                     {/foreach}
                 </select>
             </div>
         </div>
    {/if}*}
    <div class="control-group" id="ss_deepl_to_language">
        <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}:</label>
        <div class="controls">
            <select class="span3" name="feature_data[ss_deepl_to_language]" id="ss_deepl_to_language">
                {foreach from=$languages_list key=lang_code item=lang_data}
                    <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_to_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    {*{if "ULTIMATE"|fn_allowed_for}
         <div class="control-group" id="ss_deepl_to_storefront">
             <label class="control-label" for="ss_deepl_to_storefront">{__("ss_deepl_to_storefront")}:</label>
             <div class="controls">
                 <select class="span3" name="feature_data[ss_deepl_to_storefront]" id="ss_deepl_to_storefront">
                     {foreach from=$storefronts_list item=storefront_data}
                         <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_to_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                     {/foreach}
                 </select>
             </div>
         </div>
    {/if}*}
</div>

</form>

{capture name="buttons"}
    {include file="buttons/button.tpl" but_text=__("ss_deepl_pf_translate") but_name="dispatch[ss_deepl.mass_translate_features]" but_role="submit-link" but_target_form="ss_deepl_form"}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{/capture}

{include file="common/mainbox.tpl" title={__("ss_deepl_pf_translate_title")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}
