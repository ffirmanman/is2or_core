{if "MULTIVENDOR"|fn_allowed_for}
     {include file="common/subheader.tpl" title=__("ss_deepl_settings_vendor") target="#ss_deepl_settings_vendor" meta="collapsed"}
          <div id="ss_deepl_settings_vendor" class="collapse">
            {if $smarty.session.auth.user_type == "A"}
            <div class="control-group">
                <label class="control-label" for="ss_deepl_api_allow">{__("ss_deepl_api_allow")}:</label>
                <div class="controls">
                    <input type="hidden" name="company_data[ss_deepl_api_allow]" value="N"/>
                    <input type="checkbox" name="company_data[ss_deepl_api_allow]" id="ss_deepl_api_allow" value="Y" {if $company_data.ss_deepl_api_allow == "Y"}checked="checked"{/if} class="checkbox" />
                </div>
            </div>
            {/if}
             {if $company_data.plan_id|fn_ss_deepl_vendor_plan_allowed || $company_data.ss_deepl_api_allow == "Y"}
                   <div class="control-group">
                       <label for="ss_deepl_api_key" class="control-label">{__("ss_deepl_api_key")}:</label>
                       <div class="controls">
                           <input type="text" style="width:320px" value="{$company_data.ss_deepl.ss_deepl_api_key}" name="company_data[ss_deepl][ss_deepl_api_key]" id="ss_deepl_api_key" class="input-medium">
                       </div>
                   </div>
                  <div class="control-group">
                     <label class="control-label" for="ss_deepl_service">{__("ss_deepl_service")}:</label>
                     <div class="controls">
                         <select name="company_data[ss_deepl][ss_deepl_service]" id="ss_deepl_service">
                              <option value="free" {if $company_data.ss_deepl.ss_deepl_service == "free"}selected="selected"{/if}>{__("ss_deepl_service_free")}</option>
                              <option value="pro" {if $company_data.ss_deepl.ss_deepl_service == "pro"}selected="selected"{/if}>{__("ss_deepl_service_pro")}</option>
                         </select>
                     </div>
                  </div>
                  <div class="control-group">
                     <label class="control-label" for="ss_deepl_auto_translate">{__("ss_deepl_auto_translate")}:</label>
                     <div class="controls">
                         <select name="company_data[ss_deepl][ss_deepl_auto_translate]" id="ss_deepl_auto_translate">
                             <option value="none" {if $company_data.ss_deepl.ss_deepl_auto_translate == "none"}selected="selected"{/if}>{__("ss_deepl_auto_translate_none")}</option>
                             <option value="manual" {if $company_data.ss_deepl.ss_deepl_auto_translate == "manual"}selected="selected"{/if}>{__("ss_deepl_auto_translate_manual")}</option>
                             <option value="auto" {if $company_data.ss_deepl.ss_deepl_auto_translate == "auto"}selected="selected"{/if}>{__("ss_deepl_auto_translate_auto")}</option>
                         </select>
                     </div>
                  </div>
                  <div class="control-group">
                     <label class="control-label">{__("ss_deepl_auto_translate_items")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_auto_translate_items_tooltip)}:</label>
                     <div class="controls">
                         <input type="hidden" name="company_data[ss_deepl][ss_deepl_auto_translate_items]" value="" />
                         <label class="checkbox" for="elm_items_product"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][product]" id="elm_items_product" value="product" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.product == "Y")}checked="checked"{/if}/>{__("product_name")}</label>
                         <label class="checkbox" for="elm_items_full_description"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][full_description]" id="elm_items_full_description" value="full_description" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.full_description == "Y")}checked="checked"{/if}/>{__("full_description")}</label>
                         <label class="checkbox" for="elm_items_short_description"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][short_description]" id="elm_items_short_description" value="short_description" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.short_description == "Y")}checked="checked"{/if}/>{__("short_description")}</label>
                         <label class="checkbox" for="elm_items_ab__custom_product_h1"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][ab__custom_product_h1]" id="elm_items_ab__custom_product_h1" value="ab__custom_product_h1" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.ab__custom_product_h1 == "Y")}checked="checked"{/if}/>{__("ss_deepl_auto_translate_items_ab__custom_product_h1")}</label>
                         <label class="checkbox" for="elm_items_search_words"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][search_words]" id="elm_items_search_words" value="search_words" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.search_words == "Y")}checked="checked"{/if}/>{__("search_words")}</label>
                         <label class="checkbox" for="elm_items_promo_text"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][promo_text]" id="elm_items_promo_text" value="promo_text" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.promo_text == "Y")}checked="checked"{/if}/>{__("promo_text")}</label>
                         <label class="checkbox" for="elm_items_page_title"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][page_title]" id="elm_items_page_title" value="page_title" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.page_title == "Y")}checked="checked"{/if}/>{__("page_title")}</label>
                         <label class="checkbox" for="elm_items_meta_keywords"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][meta_keywords]" id="elm_items_meta_keywords" value="meta_keywords" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.meta_keywords == "Y")}checked="checked"{/if}/>{__("meta_keywords")}</label>
                         <label class="checkbox" for="elm_items_meta_description"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="company_data[ss_deepl][ss_deepl_auto_translate_items][meta_description]" id="elm_items_meta_description" value="meta_description" {if ($company_data.ss_deepl.ss_deepl_auto_translate_items.meta_description == "Y")}checked="checked"{/if}/>{__("meta_description")}</label>
                     </div>
                  </div>
                            <div class="control-group">
                                <label class="control-label" for="ss_deepl_redirect_target_lang">{__("ss_deepl_redirect_target_lang")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_redirect_target_lang_tooltip)}:</label>
                                <div class="controls">
                                    <input type="hidden" name="company_data[ss_deepl][ss_deepl_redirect_target_lang]" value="N"/>
                                    <input type="checkbox" name="company_data[ss_deepl][ss_deepl_redirect_target_lang]" id="ss_deepl_redirect_target_lang" value="Y" {if $company_data.ss_deepl.ss_deepl_redirect_target_lang == "Y"}checked="checked"{/if} class="checkbox" />
                                </div>
                            </div>
                  {* <div class="control-group">
                     <label class="control-label" for="ss_deepl_translate_method">{__("ss_deepl_translate_method")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_translate_method_tooltip)}:</label>
                     <div class="controls">
                         <select name="company_data[ss_deepl][ss_deepl_translate_method]" id="ss_deepl_translate_method">
                             <option value="fast" {if $company_data.ss_deepl.ss_deepl_translate_method == "fast"}selected="selected"{/if}>{__("ss_deepl_translate_method_fast")}</option>
                             <option value="optimal" {if $company_data.ss_deepl.ss_deepl_translate_method == "optimal"}selected="selected"{/if}>{__("ss_deepl_translate_method_optimal")}</option>
                         </select>
                     </div>
                  </div> *}
                {assign var="from_language" value=1|fn_ss_deepl_ss_deepl_get_lang}
                <div class="control-group">
                   <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_from_language_tooltip)}:</label>
                   <div class="controls">
                       <select name="company_data[ss_deepl][ss_deepl_from_language]" id="ss_deepl_from_language">
                        {foreach from=$from_language item="fl_lang" key="fl_code"}
                           <option value="{$fl_code}" {if $company_data.ss_deepl.ss_deepl_from_language == $fl_code}selected="selected"{/if}>{$fl_lang}</option>
                        {/foreach}
                       </select>
                   </div>
                </div>
                <div class="control-group">
                   <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_to_language_tooltip)}:</label>
                   <div class="controls">
                       <select name="company_data[ss_deepl][ss_deepl_to_language]" id="ss_deepl_to_language">
                        {foreach from=$from_language item="tl_lang" key="tl_code"}
                           <option value="{$tl_code}" {if $company_data.ss_deepl.ss_deepl_to_language == $tl_code}selected="selected"{/if}>{$tl_lang}</option>
                        {/foreach}
                       </select>
                   </div>
                </div>
              {else}
                 {__("ss_deepl_no_access")}
              {/if}
          </div>
{/if}