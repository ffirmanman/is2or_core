<div class="table-wrapper">
    <table class="table table-middle" width="100%" id="communication_categories_table">
        <thead class="cm-first-sibling">
        <tr>
            <th width="5%">{__("value")}</th>
            <th width="20%">{__("rf_stock_parser_renewable")}</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$updatedColumns item="field"}
                <tr>
                    <td>{$columnTranslates[$field]}</td>
                    <td>
                        <input type="checkbox" name="supplier_data[column_settings][renewable][]" value="{$field}" {if $field|in_array:$supplier.column_settings.renewable}checked{/if}>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
