{* formatka do tłumaczenia produktów *}
{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="product_ids" value="{$smarty.request.product_ids}" />
<input type="hidden" name="action" value="{$smarty.request.action}" />

<div id="ss_deepl_products" class="collapse in">
    <div class="control-group">
        <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
        <div class="controls">
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][product]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][product]" id="ss_deepl_sections_product" value="Y" {if $addons.ss_deepl.ss_deepl_sections.product == "Y"}checked="checked"{/if}/> {__("product_name")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][full_description]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][full_description]" id="ss_deepl_sections_full_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections.full_description == "Y"}checked="checked"{/if}/> {__("description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][short_description]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][short_description]" id="ss_deepl_sections_short_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections.short_description == "Y"}checked="checked"{/if}/> {__("short_description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][search_words]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][search_words]" id="ss_deepl_sections_search_words" value="Y" {if $addons.ss_deepl.ss_deepl_sections.search_words == "Y"}checked="checked"{/if}/> {__("search_words")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][promo_text]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][promo_text]" id="ss_deepl_sections_promo_text" value="Y" {if $addons.ss_deepl.ss_deepl_sections.promo_text == "Y"}checked="checked"{/if}/> {__("promo_text")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][page_title]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][page_title]" id="ss_deepl_sections_page_title" value="Y" {if $addons.ss_deepl.ss_deepl_sections.page_title == "Y"}checked="checked"{/if}/> {__("page_title")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][meta_keywords]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][meta_keywords]" id="ss_deepl_sections_meta_keywords" value="Y" {if $addons.ss_deepl.ss_deepl_sections.meta_keywords == "Y"}checked="checked"{/if}/> {__("meta_keywords")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][meta_description]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][meta_description]" id="ss_deepl_sections_meta_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections.meta_description == "Y"}checked="checked"{/if}/> {__("meta_description")}
            </label>
            <label class="checkbox">
                <input type="hidden" name="product_data[ss_deepl_sections][ab__custom_product_h1]" value="N" />
                <input type="checkbox" name="product_data[ss_deepl_sections][ab__custom_product_h1]" id="ss_deepl_sections_ab__custom_product_h1" value="Y" {if $addons.ss_deepl.ss_deepl_sections.ab__custom_product_h1 == "Y"}checked="checked"{/if}/> H1
            </label>
        </div>
    </div>
    {assign var="languages_list" value=1|fn_ss_deepl_get_languages}
    {assign var="storefronts_list" value=1|fn_ss_deepl_get_storefronts}
    <div class="control-group" id="ss_deepl_from_language">
        <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}:</label>
        <div class="controls">
            <select class="span3" name="product_data[ss_deepl_from_language]" id="ss_deepl_from_language">
                {foreach from=$languages_list key=lang_code item=lang_data}
                    <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_from_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    {if "ULTIMATE"|fn_allowed_for}
         <div class="control-group" id="ss_deepl_from_storefront">
             <label class="control-label" for="ss_deepl_from_storefront">{__("ss_deepl_from_storefront")}:</label>
             <div class="controls">
                 <select class="span3" name="product_data[ss_deepl_from_storefront]" id="ss_deepl_from_storefront">
                     {foreach from=$storefronts_list item=storefront_data}
                         <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_from_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                     {/foreach}
                 </select>
             </div>
         </div>
    {/if}
    <div class="control-group" id="ss_deepl_to_language">
        <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}:</label>
        <div class="controls">
            <select class="span3" name="product_data[ss_deepl_to_language]" id="ss_deepl_to_language">
                {foreach from=$languages_list key=lang_code item=lang_data}
                    <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_to_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    {if "ULTIMATE"|fn_allowed_for}
         <div class="control-group" id="ss_deepl_to_storefront">
             <label class="control-label" for="ss_deepl_to_storefront">{__("ss_deepl_to_storefront")}:</label>
             <div class="controls">
                 <select class="span3" name="product_data[ss_deepl_to_storefront]" id="ss_deepl_to_storefront">
                     {foreach from=$storefronts_list item=storefront_data}
                         <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_to_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                     {/foreach}
                 </select>
             </div>
         </div>
    {/if}
</div>

</form>

{capture name="buttons"}
    {include file="buttons/button.tpl" but_text=__("ss_deepl_button") but_name="dispatch[ss_deepl.mass_translate]" but_role="submit-link" but_target_form="ss_deepl_form"}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{/capture}

{include file="common/mainbox.tpl" title={__("ss_deepl_menu")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}
