{* formatka do tłumaczenia kategorii *}
{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="category_ids" value="{$smarty.request.category_ids}" />
        <input type="hidden" name="action" value="{$smarty.request.action}" />
        <div id="ss_deepl_categories" class="collapse in">
            <div class="control-group">
                <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[category]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[category]" id="ss_deepl_sections_category" value="Y" {if $addons.ss_deepl.ss_deepl_sections_categories.category == "Y"}checked="checked"{/if}/> {__("category_name")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[description]" id="ss_deepl_sections_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_categories.description == "Y"}checked="checked"{/if}/> {__("description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[page_title]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[page_title]" id="ss_deepl_sections_page_title" value="Y" {if $addons.ss_deepl.ss_deepl_sections_categories.page_title == "Y"}checked="checked"{/if}/> {__("page_title")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_keywords]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_keywords]" id="ss_deepl_sections_meta_keywords" value="Y" {if $addons.ss_deepl.ss_deepl_sections_categories.meta_keywords == "Y"}checked="checked"{/if}/> {__("meta_keywords")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[meta_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[meta_description]" id="ss_deepl_sections_meta_description" value="Y" {if $addons.ss_deepl.ss_deepl_sections_categories.meta_description == "Y"}checked="checked"{/if}/> {__("meta_description")}
                    </label>
                </div>
            </div>
            {include file="addons/ss_deepl/components/languages.tpl"}
        </div>
    </form>
    {capture name="buttons"}
        {include file="buttons/button.tpl" but_text=__("ss_deepl_button_categories") but_name="dispatch[ss_deepl.mass_translate_categories]" but_role="submit-link" but_target_form="ss_deepl_form"}
        {dropdown content=$smarty.capture.tools_list}
    {/capture}
{/capture}
{include file="common/mainbox.tpl" title={__("ss_deepl_categories_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}