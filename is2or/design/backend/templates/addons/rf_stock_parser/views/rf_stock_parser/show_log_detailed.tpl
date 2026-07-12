<style>
    .show_logs_detailed td > div{
        max-width: 100px;
        overflow-x: auto;
    }
</style>

{capture name="mainbox"}
<div id="content_show_log_detailed">
    <form class="form-horizontal form-edit cm-ajax cm-ajax-full-render {$form_class}" action="{""|fn_url}" method="post" id="show_log_detailed_form" name="form_show_log_detailed">
        {include file="common/pagination.tpl" disable_history=true div_id="pagination_show_log_detailed"}
        <input type="hidden" name="my_supplier_id" value="{$supplierId}">
        <table class="table table-bordered show_logs_detailed">
            <tr>
                <th>Название</th>
                <th>Артикул</th>
                <th>Manufacturer code</th>
                <th>Новая цена</th>
                <th>Цена в прайсе</th>
                <th>Старая цена</th>
                <th>% изменения цены</th>
                <th>List Price</th>
                <th>Старая List Price</th>
                <th>% изменения List Price</th>
                <th>Новое кол-во</th>
                <th>Старое кол-во</th>
                <th>Статус</th>
                <th>Изменения</th>
            </tr>
            {capture name="changes"}
                {foreach from=$items item="product"}
                    <tr>
                        <td>
                            <div>
                                <a href="{"products.update?product_id=`$product.product_id`"|fn_url}" target="_blank">{$product.value.name}</a>
                            </div>
                        </td>
                        <td>
                            <div>{$product.value.product_code}</div>
                        </td>
                        <td>
                            <div>{$product.value.m_code}</div>
                        </td>
                        <td>{$product.value.price}</td>
                        <td>{$product.value.from_price}</td>
                        <td>{$product.value.old_price}</td>
                        <td>{if $product.p_price > 0}+{/if}{$product.p_price}{if $product.p_price}%{/if}</td>
                        <td>{$product.value.list_price}</td>
                        <td>{$product.value.old_list_price}</td>
                        <td>{if $product.value.p_list_price > 0}+{/if}{$product.value.p_list_price}{if $product.value.p_list_price}%{/if}</td>
                        <td>{$product.value.amount|@intval}</td>
                        <td>{$product.value.old_amount}</td>
                        <td>{$product.value.status}</td>
                        <td>{$product.type|fn_my_suppliers_get_human_types}</td>
                    </tr>
                {/foreach}
            {/capture}
            {if $smarty.capture.changes|trim}
                {$smarty.capture.changes nofilter}
            {else}
                <tr>
                    <td colspan="14"><strong>Изменений не было</strong></td>
                </tr>
            {/if}
        </table>

        {include file="common/pagination.tpl" disable_history=true div_id="pagination_show_log_detailed"}
    </form>
<!--content_show_log_detailed--></div>
{/capture}

{$title=__("my_suppliers_logs_type_`$type`")}
{assign var="date" value=$date|date_format:"`$settings.Appearance.date_format` `$settings.Appearance.time_format`"}
{include file="common/mainbox.tpl" title="{$supplier.supplier_name} {$title} {$date}" content=$smarty.capture.mainbox}
