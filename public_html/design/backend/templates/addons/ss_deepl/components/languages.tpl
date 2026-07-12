{assign var="lang_list" value=fn_ss_deepl_ss_deepl_get_lang()}
{assign var="storefronts_list" value=fn_ss_deepl_get_storefronts()}
<div class="control-group">
    <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_from_language_tooltip)}:</label>
    <div class="controls">
        <select name="ss_deepl_from_language" id="ss_deepl_from_language">
        {foreach from=$lang_list item="fl_lang" key="fl_code"}
            <option value="{$fl_code}" {if $addons.ss_deepl.ss_deepl_from_language == $fl_code}selected="selected"{/if}>{$fl_lang}</option>
        {/foreach}
        </select>
    </div>
</div>
{if "ULTIMATE"|fn_allowed_for}
     <div class="control-group" id="ss_deepl_from_storefront">
         <label class="control-label" for="ss_deepl_from_storefront">{__("ss_deepl_from_storefront")}:</label>
         <div class="controls">
             <select name="ss_deepl_from_storefront" id="ss_deepl_from_storefront">
                 {foreach from=$storefronts_list item=storefront_data}
                     <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_from_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                 {/foreach}
             </select>
         </div>
     </div>
{/if}
<div class="control-group">
    <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_to_language_tooltip)}:</label>
    <div class="controls">
        <select name="ss_deepl_to_language[]" id="ss_deepl_to_language" multiple="multiple" size={$lang_list|count}>
        {foreach from=$lang_list item="tl_lang" key="tl_code"}
            {if $tl_code != $addons.ss_deepl.ss_deepl_from_language}
                <option value="{$tl_code}" {if $addons.ss_deepl.ss_deepl_to_language.$tl_code eq "Y"}selected="selected"{/if}>{$tl_lang}</option>
            {/if}
        {/foreach}
        </select>
    </div>
</div>
{if "ULTIMATE"|fn_allowed_for}
     <div class="control-group" id="ss_deepl_to_storefront">
         <label class="control-label" for="ss_deepl_to_storefront">{__("ss_deepl_to_storefront")}:</label>
         <div class="controls">
             <select name="ss_deepl_to_storefront" id="ss_deepl_to_storefront">
                 {foreach from=$storefronts_list item=storefront_data}
                     <option value="{$storefront_data.storefront_id}" {if $runtime.company_id == $storefront_data.storefront_id || $addons.ss_deepl.ss_deepl_to_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                 {/foreach}
             </select>
         </div>
     </div>
{/if}
