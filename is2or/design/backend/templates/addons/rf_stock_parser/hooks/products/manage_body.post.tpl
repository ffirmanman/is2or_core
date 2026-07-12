{if fn_rf_stock_parser_get_options($runtime.company_id, 'add_fields_products_list') == 'Y'}
    <td>
        <input type="hidden" name="products_data[{$product.product_id}][rf_stop_update_price]" value="N">
        <input type="checkbox" name="products_data[{$product.product_id}][rf_stop_update_price]" value="Y" {if $product.rf_stop_update_price == 'Y'}checked{/if}>
    </td>
    <td>
        <input type="hidden" name="products_data[{$product.product_id}][rf_stop_update_amount]" value="N">
        <input type="checkbox" name="products_data[{$product.product_id}][rf_stop_update_amount]" value="Y" {if $product.rf_stop_update_amount == 'Y'}checked{/if}>
    </td>
    <td>
        <input type="hidden" name="products_data[{$product.product_id}][rf_stop_update_status]" value="N">
        <input type="checkbox" name="products_data[{$product.product_id}][rf_stop_update_status]" value="Y" {if $product.rf_stop_update_status == 'Y'}checked{/if}>
    </td>
{/if}
