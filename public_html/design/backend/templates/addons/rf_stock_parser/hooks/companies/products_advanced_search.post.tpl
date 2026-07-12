{include file="addons/rf_stock_parser/views/rf_stock_parser/components/select_supplier.tpl"}
<div class="control-group">
    <label class="control-label">{__("manufacturer_code")}:</label>
    <div class="controls">
        <input type="input" name="manufacturer_code" value="{$search.manufacturer_code}">
    </div>
</div>
<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_price")}:</label>
    <div class="controls">
        <input type="checkbox" name="rf_stop_update_price" value="Y" {if $search.rf_stop_update_price == 'Y'}checked{/if}>
    </div>
</div>
<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_amount")}:</label>
    <div class="controls">
        <input type="checkbox" name="rf_stop_update_amount" value="Y" {if $search.rf_stop_update_amount == 'Y'}checked{/if}>
    </div>
</div>
<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_status")}:</label>
    <div class="controls">
        <input type="checkbox" name="rf_stop_update_status" value="Y" {if $search.rf_stop_update_status == 'Y'}checked{/if}>
    </div>
</div>
