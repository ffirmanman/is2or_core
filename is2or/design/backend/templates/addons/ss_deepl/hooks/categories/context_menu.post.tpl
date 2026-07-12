{capture name="ss_deepl_translate"}

    <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_sections")}:</label>
    <label class="checkbox">
        <input type="hidden" name="category_data[ss_deepl_sections][category]" value="N" />
        <input type="checkbox" name="category_data[ss_deepl_sections][category]" id="ss_deepl_sections_category" value="Y"/> {__("category_name")}
    </label>
    <label class="checkbox">
        <input type="hidden" name="category_data[ss_deepl_sections][description]" value="N" />
        <input type="checkbox" name="category_data[ss_deepl_sections][description]" id="ss_deepl_sections_description" value="Y"/> {__("description")}
    </label>
    </br>
    {assign var="languages_list" value=1|fn_ss_deepl_get_languages}
    {assign var="storefronts_list" value=1|fn_ss_deepl_get_storefronts}
    <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}:</label>
    <div class="controls">
        <select class="span3" name="category_data[ss_deepl_from_language]" id="ss_deepl_from_language">
            {foreach from=$languages_list key=lang_code item=lang_data}
                <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_from_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
            {/foreach}
        </select>
    </div>
    </br>
    <label class="control-label" for="ss_deepl_from_storefront">{__("ss_deepl_from_storefront")}:</label>
    <div class="controls">
        <select class="span3" name="category_data[ss_deepl_from_storefront]" id="ss_deepl_from_storefront">
            {foreach from=$storefronts_list item=storefront_data}
                <option value="{$storefront_data.storefront_id}" {if $addons.ss_deepl.ss_deepl_from_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
            {/foreach}
        </select>
    </div>
    </br>
    <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}:</label>
    <div class="controls">
        <select class="span3" name="category_data[ss_deepl_to_language]" id="ss_deepl_to_language">
            {foreach from=$languages_list key=lang_code item=lang_data}
                <option value="{$lang_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_to_language" == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
            {/foreach}
        </select>
    </div>
    </br>
    <div class="control-group" id="ss_deepl_to_storefront">
        <label class="control-label" for="ss_deepl_to_storefront">{__("ss_deepl_to_storefront")}:</label>
        <div class="controls">
            <select class="span3" name="category_data[ss_deepl_to_storefront]" id="ss_deepl_to_storefront">
                {foreach from=$storefronts_list item=storefront_data}
                    <option value="{$storefront_data.storefront_id}" {if $addons.ss_deepl.ss_deepl_to_storefront == $storefront_data.storefront_id}selected="selected"{/if}>{$storefront_data.name}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="buttons-container">
        <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged">{__("cancel")}</a>
        {include file="buttons/button.tpl"
            but_text=__("modify_selected")
            but_name="dispatch[ss_deepl.mass_translate_categories]"
            but_role="submit-button"
            but_disabled=true
            but_meta="bulkedit-disable-edit-button"
            but_target_form="category_tree_form"
        }
    </div>
{/capture}

{include file="common/popupbox.tpl" id="ss_deepl_translate" text=__("ss_deepl_translate_categories") content=$smarty.capture.ss_deepl_translate}