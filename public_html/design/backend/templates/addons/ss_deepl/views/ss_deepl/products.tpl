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
                        <input type="hidden" name="ss_deepl_sections[product]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[product]" id="ss_deepl_sections_product" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.product == "Y"}checked="checked"{/if}/> {__("product_name")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[full_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[full_description]" id="ss_deepl_sections_full_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.full_description == "Y"}checked="checked"{/if}/> {__("description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[short_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[short_description]" id="ss_deepl_sections_short_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.short_description == "Y"}checked="checked"{/if}/> {__("short_description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[search_words]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[search_words]" id="ss_deepl_sections_search_words" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.search_words == "Y"}checked="checked"{/if}/> {__("search_words")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[promo_text]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[promo_text]" id="ss_deepl_sections_promo_text" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.promo_text == "Y"}checked="checked"{/if}/> {__("promo_text")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[page_title]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[page_title]" id="ss_deepl_sections_page_title" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.page_title == "Y"}checked="checked"{/if}/> {__("page_title")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_keywords]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_keywords]" id="ss_deepl_sections_meta_keywords" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.meta_keywords == "Y"}checked="checked"{/if}/> {__("meta_keywords")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_description]" id="ss_deepl_sections_meta_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.meta_description == "Y"}checked="checked"{/if}/> {__("meta_description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[ab__custom_product_h1]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[ab__custom_product_h1]" id="ss_deepl_sections_ab__custom_product_h1" value="Y" {if $addons.ss_deepl.ss_deepl_sections_products.ab__custom_product_h1 == "Y"}checked="checked"{/if}/> H1
                    </label>
                </div>
            </div>
            {include file="addons/ss_deepl/components/languages.tpl"}
        </div>
    </form>
    {capture name="buttons"}
        {include file="buttons/button.tpl" but_text=__("ss_deepl_button_products") but_name="dispatch[ss_deepl.mass_translate_products]" but_role="submit-link" but_target_form="ss_deepl_form"}
        {dropdown content=$smarty.capture.tools_list}
    {/capture}
{/capture}
{include file="common/mainbox.tpl" title={__("ss_deepl_products_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}