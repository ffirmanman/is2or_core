{* formatka do tłumaczenia stron statycznych *}
{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="page_ids" value="{$smarty.request.page_ids}" />
        <input type="hidden" name="action" value="{$smarty.request.action}" />
        <input type="hidden" name="page_type" value="{$smarty.request.page_type}" />
        <div id="ss_deepl_products" class="collapse in">
            <div class="control-group">
                <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[page]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[page]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_pages.page == "Y"}checked="checked"{/if}/> {__("name")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[description]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_pages.description == "Y"}checked="checked"{/if}/> {__("description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[page_title]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[page_title]"value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_pages.page_title == "Y"}checked="checked"{/if}/> {__("page_title")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_keywords]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_keywords]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_products.meta_keywords == "Y"}checked="checked"{/if}/> {__("meta_keywords")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_description]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_products.meta_description == "Y"}checked="checked"{/if}/> {__("meta_description")}
                    </label>
                </div>
            </div>
            {include file="addons/ss_deepl/components/languages.tpl"}
        </div>
    </form>
    {capture name="buttons"}
        {include file="buttons/button.tpl" but_text=__("ss_deepl_button_pages") but_name="dispatch[ss_deepl.mass_translate_pages]" but_role="submit-link" but_target_form="ss_deepl_form"}
        {dropdown content=$smarty.capture.tools_list}
    {/capture}
{/capture}
{include file="common/mainbox.tpl" title={__("ss_deepl_pages_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}