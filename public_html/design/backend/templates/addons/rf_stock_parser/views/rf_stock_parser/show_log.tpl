{capture name="mainbox"}
    <a href="{"rf_stock_parser.show_log&type=`$type`&my_supplier_id=`$supplier.my_supplier_id`&log_id=`$log_id`&csv=true"|fn_url}">Выгрузить в CSV</a>
{if $type == 'duplicates'}
    <table class="table table-bordered">
        <tr>
            <th>Название</th>
            <th>Артукул</th>
            <th>Цена</th>
            <th>Статус</th>
        </tr>
        {foreach from=$items item="product"}
            <tr>
                <td><a href="{"products.update?product_id=`$product.product_id`"|fn_url}" target="_blank">{$product.product}</a></td>
                <td>{$product.product_code}</td>
                <td>{$product.price}</td>
                <td>{$product.status}</td>
            </tr>
        {/foreach}
    </table>
{elseif $type == 'categories'}
    <table class="table table-bordered">
        <tr>
            <th>Название категории</th>
        </tr>
        {foreach from=$items item="category"}
            <tr>
                <td style="white-space: pre;">{$category}</td>
            </tr>
        {/foreach}
    </table>
{/if}
{/capture}

{$title=__("my_suppliers_logs_type_`$type`")}
{assign var="date" value=$date|date_format:"`$settings.Appearance.date_format` `$settings.Appearance.time_format`"}
{include file="common/mainbox.tpl" title="{$supplier.supplier_name}. {$title} {$date}" content=$smarty.capture.mainbox}
