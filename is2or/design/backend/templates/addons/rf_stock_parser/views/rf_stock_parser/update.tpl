{style src="addons/rf_stock_parser/style.css"}
{script src="js/addons/rf_stock_parser/parser.js"}

{if $supplier}
    {assign var="id" value=$supplier.my_supplier_id}
{else}
    {assign var="id" value=0}
{/if}

<input type="hidden" id="processing_last_change" value="{$processing.last_change|default:0}">
{capture name="mainbox"}
    <div class="rf-error" {if !$processing.error_message}style="display: none;"{/if}>
        {__('error')}: <span class="rf-error-text">{$processing.error_message}</span>
    </div>

    {capture name="tabsbox"}
        <div id="edit_supplier">
            <form class="form-horizontal form-edit {$form_class}" action="{""|fn_url}" method="post" id="supplier_update_form" enctype="multipart/form-data" name="form_edit_supplier">
                <input type="hidden" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
                <input type="hidden" name="my_supplier_id" value="{$id}" />
                <input type="hidden" name="result_ids" value="edit_supplier" />

                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_general.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_amount_synonyms.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_price_synonyms.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_features_synonyms.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_availability_strategy.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_pricing_strategy.tpl"}
                {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_schedule.tpl"}
            </form>
            <!--edit_supplier--></div>

        {hook name="suppliers:tabs_extra"}{/hook}

        {include file="common/comet.tpl"}
    {/capture}
    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox group_name="suppliers" active_tab=$smarty.request.selected_section track=true}

{/capture}

{** Form submit section **}
{capture name="buttons"}
    {if $supplier.my_supplier_id}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[rf_stock_parser.copy]" but_target_form="supplier_update_form" but_meta="supplier_copy_button" save=$id but_text=__('copy')}
    {/if}
    {include file="buttons/button.tpl" but_role="submit-button" but_meta="rf_stock_parser_save" but_text="{__('save')}"}
{/capture}
{** /Form submit section **}

{if $supplier}
    {$title_start = __("my_supplier_edit_supplier")}
    {$title_end = $supplier.supplier_name}
{else}
    {$_title=__("add_supplier")}
{/if}

{include file="common/mainbox.tpl" title_start=$title_start title_end=$title_end title=$_title content=$smarty.capture.mainbox select_languages=false buttons=$smarty.capture.buttons}
