{if "ULTIMATE"|fn_allowed_for && !$runtime.company_id}
    {$readonly = true}
{else}
    {$readonly = false}
{/if}

{include file="addons/rf_stock_parser/views/rf_stock_parser/components/supplier_field.tpl" title=__("supplier") name="product_data[my_supplier_id]" id="product_data_my_supplier_id" selected=$product_data.my_supplier_id company_id=$product_data.company_id read_only=$readonly}

