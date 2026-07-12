<div id="content_availability_strategy" class="hidden">
    <div class="control-group">
        <label class="control-label" style="white-space: nowrap;">{__('rf_amount_will_save')}</label>
        <div class="controls">
            <select name="supplier_data[amount_field]">
                <option value="amount" {if !$supplier.amount_field || $supplier.amount_field == 'amount'}selected{/if}>amount</option>
                <option value="supplier_amount" {if $supplier.amount_field == 'supplier_amount'}selected{/if}>supplier_amount</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label for="elm_supplier_avail_strategy_in" class="control-label">{__("my_supplier_goods_in_price_list")}:</label>
        <div class="controls">
            <select name="supplier_data[avail_strategy_in]">
                <option value="0" {if $supplier.avail_strategy_in == 0}selected{/if}>{__("my_supplier_avail_strategy_in_turn_on")}</option>
                <option value="1" {if $supplier.avail_strategy_in == 1}selected{/if}>{__("my_supplier_avail_strategy_leave_status")}</option>
                <option value="2" {if $supplier.avail_strategy_in == 2}selected{/if}>{__('rf_suppliers_enable_and_disable_tracking')}</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label for="elm_supplier_avail_strategy_not_in" class="control-label">{__("my_supplier_goods_not_in_price_list")}:</label>
        <div class="controls">
            <select name="supplier_data[avail_strategy_not_in]" id="js-avail_strategy_not_in">
                <option value="0" {if $supplier.avail_strategy_not_in == 0}selected{/if}>{__("my_supplier_avail_strategy_in_turn_off")}</option>
                <option value="1" {if $supplier.avail_strategy_not_in == 1}selected{/if}>{__("my_supplier_avail_strategy_leave_status")}</option>
                <option value="2" {if $supplier.avail_strategy_not_in == 2}selected{/if}>{__("my_supplier_avail_strategy_set_zero")}</option>
            </select>
        </div>
    </div>

    {if $warehouses}
        <div class="control-group" id="js-wh_div">
            <label for="elm_supplier_wh_clear" class="control-label">{__("rf_stock_parser_reset_warehouses")}</label>
            <div class="controls">
                <select name="supplier_data[wh_clear][]" multiple size="5">
                    <option value="all" {if all|in_array:$supplier.wh_clear}selected{/if}>{__("all")}</option>
                {foreach from=$warehouses item="wh" key="wh_key"}
                    <option value="{$wh_key}" {if $wh_key|in_array:$supplier.wh_clear}selected{/if}>{$wh}</option>
                {/foreach}
                </select>
            </div>
        </div>
    {/if}

    <div class="control-group">
        <label class="control-label">{__('rf_update_price_is_out_of_stock')}</label>
        <div class="controls">
            <select name="supplier_data[update_price_is_out_of_stock]">
                <option value="update" {if !$supplier.update_price_is_out_of_stock || $supplier.update_price_is_out_of_stock == 'update'}selected{/if}>
                    {__("rf_update_price_is_out_of_stock_update")}
                </option>
                <option value="set_zero" {if $supplier.update_price_is_out_of_stock == 'set_zero'}selected{/if}>
                    {__("rf_update_price_is_out_of_stock_set_zero")}
                </option>
                <option value="keep" {if $supplier.update_price_is_out_of_stock == 'keep'}selected{/if}>
                    {__("rf_update_price_is_out_of_stock_keep")}
                </option>
            </select>
        </div>
    </div>

    {include file="common/subheader.tpl" title=__("rf_stock_parser_amount_not_in_schema")}
    <div class="control-group">
        <label class="control-label" style="white-space: nowrap;">{__('rf_stock_parser_amount_not_in_schema_value')}</label>
        <div class="controls">
            <input type="text" name="supplier_data[amount_field_not_in_schema_value]" value="{$supplier.amount_field_not_in_schema_value}">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" style="white-space: nowrap;">{__('rf_amount_will_save')}</label>
        <div class="controls">
            <select name="supplier_data[amount_field_not_in_schema]">
                <option></option>
                <option value="amount" {if !$supplier.amount_field_not_in_schema || $supplier.amount_field_not_in_schema == 'amount'}selected{/if}>amount</option>
                <option value="supplier_amount" {if $supplier.amount_field_not_in_schema == 'supplier_amount'}selected{/if}>supplier_amount</option>
                {foreach from=$warehouses item="warehouse" key="key"}
                    <option value="{$key}" {if $supplier.amount_field_not_in_schema == $key}selected{/if}>{$warehouse}</option>
                {/foreach}
            </select>
        </div>
    </div>
</div>
