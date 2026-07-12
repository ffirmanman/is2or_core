{* formatka do tłumaczenia promocji *}
{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" name="ss_deepl_form" id="ss_deepl_form">
        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="promotion_ids" value="{$smarty.request.promotion_ids}" />
        <input type="hidden" name="action" value="{$smarty.request.action}" />
        <div id="ss_deepl_promotions" class="collapse in">
            <div class="control-group">
                <label class="control-label" for="ss_deepl_sections">{__("ss_deepl_sections")}{include file="common/tooltip.tpl" tooltip=__("ss_deepl_sections_tooltip")}:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[name]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[name]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_promotions.name == "Y"}checked="checked"{/if}/> {__("name")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[short_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[short_description]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_promotions.short_description == "Y"}checked="checked"{/if}/> {__("short_description")}
                    </label>
                    <label class="checkbox">
                        <input type="hidden" name="ss_deepl_sections[detailed_description]" value="N" />
                        <input type="checkbox" name="ss_deepl_sections[detailed_description]" value="Y" 
                        {if $addons.ss_deepl.ss_deepl_sections_promotions.detailed_description == "Y"}checked="checked"{/if}/> {__("detailed_description")}
                    </label>
                </div>
            </div>
            {include file="addons/ss_deepl/components/languages.tpl"}
        </div>
    </form>
    {capture name="buttons"}
        {include file="buttons/button.tpl" but_text=__("ss_deepl_button_promotions") but_name="dispatch[ss_deepl.mass_translate_promotions]" but_role="submit-link" but_target_form="ss_deepl_form"}
        {dropdown content=$smarty.capture.tools_list}
    {/capture}
{/capture}
{include file="common/mainbox.tpl" title={__("ss_deepl_promotions_translate")} content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}