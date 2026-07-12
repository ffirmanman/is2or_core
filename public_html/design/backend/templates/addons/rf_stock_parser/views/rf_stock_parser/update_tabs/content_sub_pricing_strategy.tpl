<div id="content_tabsboxSubPricingStrategy_{$priceSubId}" class="hidden">
    {if $priceSubId !== 'default'}
        <div class="rf_pricing_strategy_tab_delete_div">
            {include file="buttons/button.tpl" but_role="button-icon" but_text="{__('delete')}" but_meta="btn rf_pricing_strategy_tab_delete" but_target_id=$priceSubId}
        </div>
    {/if}
    <div class="control-group">
        <label for="elm_supplier_extra_charge_{$priceSubId}" class="control-label cm-required">{__("my_supplier_extra_charge")}:</label>
        <div class="controls">
            <select name="supplier_data[extra_charge_custom][{$priceSubId}][type]">
                <option value="0" {if $supplier.extra_charge_custom[$priceSubId].type == 0}selected{/if}>{__("rf_stock_parser_extra_charge_type_percent")}</option>
                <option value="1" {if $supplier.extra_charge_custom[$priceSubId].type == 1}selected{/if}>{__("rf_stock_parser_extra_charge_type_absolute")}</option>
            </select>
            <input type="text" name="supplier_data[extra_charge_custom][{$priceSubId}][charge]" id="elm_supplier_extra_charge" size="32" value="{$supplier.extra_charge_custom[$priceSubId].charge|default:'0'}" class="input-small" />
        </div>
    </div>

    {include file="common/subheader.tpl" title=__('my_supplier_custom_extra_charge')}
    {include file="addons/rf_stock_parser/views/rf_stock_parser/components/trs_price.tpl" name="extra_charge_custom" priceSubId=$priceSubId}
</div>
