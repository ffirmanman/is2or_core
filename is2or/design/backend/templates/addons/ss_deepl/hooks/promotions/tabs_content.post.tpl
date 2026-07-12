{if 1|fn_ss_deepl_check_access}
     <form id="promotion_ss_deepl_translate_form" action="{""|fn_url}" method="post" name="promotion_ss_deepl_translate_form" class="form-horizontal form-edit" enctype="multipart/form-data">
     <input type="hidden" class="{$no_hide_input_if_shared_product}" name="promotion_id" value="{$id}" />
     <div id="content_ss_deepl" class="hidden">
         {include file="common/subheader.tpl" title=__("ss_deepl_translate_promotions") target="#ss_deepl_promotions"}
         <div id="ss_deepl_promotions" class="collapse in">
             <div class="control-group">
                 <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                 <div class="controls">
                     <label class="checkbox">
                         <input type="hidden" name="promotion_data[ss_deepl_sections][name]" value="N" />
                         <input type="checkbox" name="promotion_data[ss_deepl_sections][name]" id="ss_deepl_sections_name" value="Y" {if $addons.ss_deepl.ss_deepl_sections_promotions.name == "Y"}checked="checked"{/if}/> {__("name")}
                     </label>
                     <label class="checkbox">
                         <input type="hidden" name="promotion_data[ss_deepl_sections][short_description]" value="N" />
                         <input type="checkbox" name="promotion_data[ss_deepl_sections][short_description]" id="ss_deepl_sections_short_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_promotions.short_description == "Y"}checked="checked"{/if}/> {__("short_description")}
                     </label>
                     <label class="checkbox">
                         <input type="hidden" name="promotion_data[ss_deepl_sections][detailed_description]" value="N" />
                         <input type="checkbox" name="promotion_data[ss_deepl_sections][detailed_description]" id="ss_deepl_sections_detailed_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_promotions.detailed_description == "Y"}checked="checked"{/if}/> {__("detailed_description")}
                     </label>
                 </div>
             </div>
             {assign var="languages_list" value=1|fn_ss_deepl_get_languages}
             {assign var="storefronts_list" value=1|fn_ss_deepl_get_storefronts}
             <div class="control-group" id="ss_deepl_from_language">
                 <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}:</label>
                 <div class="controls">
                     <select class="span3" name="promotion_data[ss_deepl_from_language]" id="ss_deepl_from_language">
                         {foreach from=$languages_list key=lang_code item=lang_data}
                             <option value="{$lang_code}" {if $addons.ss_deepl.ss_deepl_from_language == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                         {/foreach}
                     </select>
                 </div>
             </div>
             <div class="control-group" id="ss_deepl_to_language">
                 <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}:</label>
                 <div class="controls">
                     <select class="span3" name="promotion_data[ss_deepl_to_language]" id="ss_deepl_to_language">
                         {foreach from=$languages_list key=lang_code item=lang_data}
                             <option value="{$lang_code}" {if $addons.ss_deepl.ss_deepl_to_language == $lang_code}selected="selected"{/if}>{$lang_data.name}</option>
                         {/foreach}
                     </select>
                 </div>
             </div>
         </div>
         {include file="buttons/button.tpl" but_text=__("ss_deepl_save_conf") but_meta="cm-product-save-buttons cm-confirm" but_role="submit-link" but_name="dispatch[promotions.ss_deepl]" but_target_form="promotion_ss_deepl_translate_form"}
     </div>
     </form>
{/if}