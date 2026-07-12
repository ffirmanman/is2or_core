{* formatka do tłumaczenia opcji *}
{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="option_ids" value="{$smarty.request.option_ids}" />
        <input type="hidden" name="action" value="{$smarty.request.action}" />
        <div id="ss_deepl_categories" class="collapse in">
            <div class="control-group">
                <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[internal_option_name]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[internal_option_name]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_product_options.internal_option_name == "Y"}checked="checked"{/if}/> {__("name")}
                    </label>
                </div>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[option_name]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[option_name]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_product_options.option_name == "Y"}checked="checked"{/if}/> {__("storefront_name")}
                    </label>
                </div>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[description]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_product_options.description == "Y"}checked="checked"{/if}/> {__("description")}
                    </label>
                </div>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[comment]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[comment]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_product_options.comment == "Y"}checked="checked"{/if}/> {__("comment")}
                    </label>
                </div>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[variant]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[variant]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_product_options.variant == "Y"}checked="checked"{/if}/> {__("variant")}
                    </label>
                </div>
            </div>
            {include file="addons/ss_deepl/components/languages.tpl"}
        </div>
    </form>
    {capture name="buttons"}
        {include file="buttons/button.tpl" but_text=__("ss_deepl_button_product_options") but_name="dispatch[ss_deepl.mass_translate_product_options]" but_role="submit-link" but_target_form="ss_deepl_form"}
        {dropdown content=$smarty.capture.tools_list}
    {/capture}
{/capture}
{include file="common/mainbox.tpl" title={__("ss_deepl_product_options_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}