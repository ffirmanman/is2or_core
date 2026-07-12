{if $runtime.company_id && !$company_id}
    {$company_id = $runtime.company_id}
{/if}

{$result_ids = "content_detailed" scope="root"}

{$supplier = fn_if_get_my_supplier($selected, $company_id)}

{if $supplier !== false}
    {capture name="s_body"}
        <input type="hidden" name="{$name}" id="{$id|default:"my_supplier_id"}" value="{$supplier.my_supplier_id}" />
        {if $read_only}
            {$supplier.supplier_name}
        {else}
            <div class="text-type-value ajax-select-wrap">
                {include
                    file="common/ajax_select_object.tpl"
                    data_url="rf_stock_parser.get_my_suppliers_list?company_id=`$company_id`"
                    text=$supplier.supplier_name
                    result_elm=$id|default:"my_supplier_id"
                    id="`$id`_selector"
                }
            </div>
        {/if}
    {/capture}


    {if $product_data.product_type == 'P' || !$product_data.product_type}
        <div class="control-group" id="suppliers_selector">
            <label class="control-label" for="{$id|default:"my_supplier_id"}">{__("my_supplier")}{if $tooltip} {capture name="tooltip"}{$tooltip}{/capture}{include file="common/tooltip.tpl" tooltip=$smarty.capture.tooltip}{/if}</label>
            <div class="controls">
                {$smarty.capture.s_body nofilter}
            </div>
            <!--suppliers_selector--></div>
    {/if}
{/if}

<div class="control-group">
    <label class="control-label" for="elm_min_qty">{__("manufacturer_code")}:</label>
    <div class="controls">
        <input type="text" name="product_data[manufacturer_code]" size="10" id="elm_min_qty" value="{$product_data.manufacturer_code|default:""}" class="input-medium" />
    </div>
</div>

<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_price")}:</label>
    <div class="controls">
        <input type="hidden" name="product_data[rf_stop_update_price]" value="N">
        <input type="checkbox" name="product_data[rf_stop_update_price]" value="Y" class="checkbox" {if $product_data.rf_stop_update_price == 'Y'}checked{/if}>
    </div>
</div>
<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_amount")}:</label>
    <div class="controls">
        <input type="hidden" name="product_data[rf_stop_update_amount]" value="N">
        <input type="checkbox" name="product_data[rf_stop_update_amount]" value="Y" class="checkbox" {if $product_data.rf_stop_update_amount == 'Y'}checked{/if}>
    </div>
</div>
<div class="control-group">
    <label class="control-label">{__("rf_stock_parser_stop_update_status")}:</label>
    <div class="controls">
        <input type="hidden" name="product_data[rf_stop_update_status]" value="N">
        <input type="checkbox" name="product_data[rf_stop_update_status]" value="Y" class="checkbox" {if $product_data.rf_stop_update_status == 'Y'}checked{/if}>
    </div>
</div>

