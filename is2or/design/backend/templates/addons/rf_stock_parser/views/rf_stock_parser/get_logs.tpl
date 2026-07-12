<div id="content_logs">
    {include file="common/pagination.tpl" disable_history=true div_id="pagination_logs"}
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{__('date')}</th>
            <th>{__('user')}</th>
            <th>{__('general')}</th>
            <th>{__('rf_additional')}</th>
            <th>{__('file')}</th>
        </tr>
        {foreach from=$logs item="log" key="key"}
            <tr>
                <td>{$log.id}</td>
                <td>{$log.date|date_format:"`$settings.Appearance.date_format` `$settings.Appearance.time_format`"}</td>
                <td>
                    {if $log.user_id == 0}
                        cron
                    {else}
                        {$log.user}
                    {/if}
                </td>
                <td>
                    {if $log.general && $log.general|is_array}
                        {foreach from=$log.general item="value" key="name"}
                            <div>{__("my_supplier_log_`$name`")}: {$value}</div>
                        {/foreach}
                    {/if}
                </td>
                <td>
                    {if $log.detailed}
                        <div><a href="{"rf_stock_parser.show_log_detailed?my_supplier_id=`$supplierId`&log_id=`$log.id`"|fn_url}" target="_blank">{__("my_suppliers_logs_type_detailed")}</a></div>
                    {/if}
                    {if $log.duplicates}
                        <div><a href="{"rf_stock_parser.show_log?my_supplier_id=`$supplierId`&type=duplicates&log_id=`$log.id`"|fn_url}" target="_blank">{__("my_suppliers_logs_type_duplicates")}</a></div>
                    {/if}
                    {if $log.categories}
                        <div><a href="{"rf_stock_parser.show_log?my_supplier_id=`$supplierId`&type=categories&log_id=`$log.id`"|fn_url}" target="_blank">{__("my_suppliers_logs_type_categories")}</a></div>
                    {/if}
                    {if $log.large_percentage}
                        <div><a href="{"rf_stock_parser.show_log_detailed?my_supplier_id=`$supplierId`&large_percentage=true&log_id=`$log.id`"|fn_url}" target="_blank">{__("my_suppliers_logs_type_large_percentage")}</a></div>
                    {/if}
                    {if !$log.duplicates && !$log.not_found && !$log.detailed && !$log.large_percentage}
                        нет изменений
                    {/if}
                </td>
                <th>
                    {if $log.attach_id}
                        <a href="{"attachments.getfile&attachment_id=`$log.attach_id`&object_type=rf_stock_parser&object_id=`$supplierId`"|fn_url}">Скачать</a>
                    {/if}
                </th>
            </tr>
        {/foreach}
    </table>
    {include file="common/pagination.tpl" disable_history=true div_id="pagination_logs"}
<!--content_logs--></div>
