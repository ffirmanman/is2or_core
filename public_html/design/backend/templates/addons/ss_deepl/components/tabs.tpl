{if 1|fn_ss_deepl_check_access}
    <form id="`$section`_ss_deepl_translate_form" action="{""|fn_url}" method="post" name="`$section`_ss_deepl_translate_form" class="form-horizontal form-edit" enctype="multipart/form-data">
    <input type="hidden" class="{$no_hide_input_if_shared_product}" name="product_id" value="{$id}" />
    <div id="content_ss_deepl_product_tab" class="hidden">
        {include file="common/subheader.tpl" title=__("ss_deepl_translate_`$section`") target="#ss_deepl_`$section`"}
        <div id="ss_deepl_{$section}" class="collapse in">
            <div class="control-group">
                <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="{$struct}[ss_deepl_sections][product]" value="N" />
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
            {assign var="lang_list" value=fn_ss_deepl_ss_deepl_get_lang()}
            <div class="control-group" id="ss_deepl_from_language">
                <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}:</label>
                <div class="controls">
                    <select class="span3" name="product_data[ss_deepl_from_language]" id="ss_deepl_from_language">
			            {foreach from=$lang_list item="fl_lang" key="fl_code"}
			                <option value="{$fl_code}" {if $addons.ss_deepl.ss_deepl_from_language == $fl_code}selected="selected"{/if}>{$fl_lang}</option>
			            {/foreach}
                    </select>
                </div>
            </div>
            <div class="control-group" id="ss_deepl_to_language">
                <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}:</label>
                <div class="controls">
                    <select name="product_data[ss_deepl_to_language][]" id="ss_deepl_to_language" multiple="multiple" size={$lang_list|count}>
			            {foreach from=$lang_list item="tl_lang" key="tl_code"}
			                {if $tl_code != $addons.ss_deepl.ss_deepl_from_language}
			                    <option value="{$tl_code}" {if $addons.ss_deepl.ss_deepl_to_language.$tl_code eq "Y"}selected="selected"{/if}>{$tl_lang}</option>
			                {/if}
			            {/foreach}
                    </select>
                </div>
            </div>
        </div>
        {include file="buttons/button.tpl" but_text=__("ss_deepl_save_conf") but_meta="cm-product-save-buttons cm-confirm" but_role="submit-link" but_name="dispatch[`$section`.ss_deepl]" but_target_form="`$section`_ss_deepl_translate_form"}
    </div>
    </form>
{/if}