<div id="content_pricing_strategy" class="hidden">
    <div class="control-group">
        <label for="elm_supplier_avail_pricing_strategy" class="control-label">{__("my_supplier_import_price_not_exists")}:</label>
        <div class="controls">
            <select name="supplier_data[pricing_strategy]">
                <option value="0" {if $supplier.pricing_strategy == 0}selected{/if}>{__("my_supplier_pricing_strategy_keep_old_price")}</option>
                <option value="1" {if $supplier.pricing_strategy == 1}selected{/if}>{__("my_supplier_pricing_strategy_use_opt_price")}</option>
            </select>
        </div>
    </div>

    {include file="common/subheader.tpl" title=__('rf_stock_price_rounding')}
    <div class="control-group">
        <label for="elm_supplier_price_round" class="control-label">{__("rf_stock_price_round")}:</label>
        <div class="controls">
            <input type="hidden" name="supplier_data[price_round][enabled]" value="0">
            <input type="checkbox" name="supplier_data[price_round][enabled]" id="elm_supplier_price_round" size="32" value="1" {if $supplier.price_round.enabled}checked{/if} class="checkbox" />
        </div>
    </div>

    <div class="control-group">
        <label for="elm_supplier_price_round_precision" class="control-label">{__("rf_stock_price_round_precision")}:</label>
        <div class="controls">
            <select name="supplier_data[price_round][precision]" id="elm_supplier_price_round_precision">
                <option value="1" {if $supplier.price_round.precision == 1}selected{/if}>1</option>
                <option value="5" {if $supplier.price_round.precision == 5}selected{/if}>5</option>
                <option value="10" {if $supplier.price_round.precision == 10}selected{/if}>10</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label for="elm_supplier_price_round_down" class="control-label">{__("rf_stock_price_round_mode_half_down")}:</label>
        <div class="controls">
            <input type="hidden" name="supplier_data[price_round][down]" value="0">
            <input type="checkbox" name="supplier_data[price_round][down]" id="elm_supplier_price_round_mode" size="32" value="1" {if $supplier.price_round.down}checked{/if} class="checkbox" />
        </div>
    </div>

    {include file="common/subheader.tpl" title=__('rf_stock_parser.pricing_strategy_cat_header')}
    <div class="control-group">
        <label class="control-label" style="padding-top: 2px;">{__("category")}:</label>
        <div class="controls">
            {include
                file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                data_url="rf_stock_parser.get_categories?company_id={$supplier.company_id}"
                text=__('none')
                result_elm="pricing_strategy_categories_field_default"
                id="pricing_strategy__categories_field_selector_default"
            }
            <input type="hidden" id="pricing_strategy_categories_field_default">
            {include file="buttons/button.tpl" but_role="button-icon" but_text="{__('add')}" but_meta="btn btn-primary rf_pricing_strategy_add_tab"}
        </div>
    </div>

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs rf_pricing_strategy_tabs">
            {foreach from=$tabsSubPricing item="item" key="_key"}
                <li id="tabsboxSubPricingStrategy_{$_key}" class="cm-js {if $_key == 'default'}active{/if}"><a>{$item}</a></li>
            {/foreach}
        </ul>
    </div>

    {foreach from=$tabsSubPricing item="item" key="_key"}
        {include file="addons/rf_stock_parser/views/rf_stock_parser/update_tabs/content_sub_pricing_strategy.tpl" priceSubId=$_key}
    {/foreach}
    <div id="pricing_strategy_anchor"></div>
</div>
