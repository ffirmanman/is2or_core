<div class="table-wrapper">
    <table class="table table-middle" width="100%">
        <thead class="cm-first-sibling">
            <tr>
                <th width="5%">{__("from")}</th>
                <th width="5%"></th>
                <th width="20%">{__("my_supplier_extra_charge")}</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$supplier[$name][$priceSubId]['custom'] item="item" key="_key"}
                <tr class="cm-row-item">
                    <td style="width: 50%">
                        <input type="number" name="supplier_data[{$name}][{$priceSubId}][custom][{$_key}][name]" value="{$item.name}" class="input-large" />
                    </td>
                    <td>
                        <select name="supplier_data[{$name}][{$priceSubId}][custom][{$_key}][type]">
                            <option value="0" {if $item.type == 0}selected{/if}>{__("rf_stock_parser_extra_charge_type_percent")}</option>
                            <option value="1" {if $item.type == 1}selected{/if}>{__("rf_stock_parser_extra_charge_type_absolute")}</option>
                        </select>
                    </td>
                    <td style="width: 45%">
                        <input type="text" name="supplier_data[{$name}][{$priceSubId}][custom][{$_key}][value]" value="{$item.value}" class="input-large" />
                    </td>
                    <td class="nowrap right">
                        {include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
                    </td>
                </tr>
            {/foreach}

            {assign var="_key" value=0}
            {if $supplier[$name][$priceSubId]['custom']}
                {assign var="_key" value=$supplier[$name][$priceSubId]['custom']|array_keys|max}
            {/if}

            {math equation="x+1" x=$_key|default:0 assign="new_key"}
            <tr class="{cycle values="table-row , " reset=1}" id="box_add_{$name}_{$priceSubId}">
                <td style="width: 50%">
                    <input type="number" name="supplier_data[{$name}][{$priceSubId}][custom][{$new_key}][name]" value="" class="input-large" />
                </td>
                <td>
                    <select name="supplier_data[{$name}][{$priceSubId}][custom][{$new_key}][type]">
                        <option value="0">{__("rf_stock_parser_extra_charge_type_percent")}</option>
                        <option value="1">{__("rf_stock_parser_extra_charge_type_absolute")}</option>
                    </select>
                </td>
                <td style="width: 45%">
                    <input type="text" name="supplier_data[{$name}][{$priceSubId}][custom][{$new_key}][value]" value="0" class="input-large" />
                </td>
                <td class="nowrap right">
                    {include file="buttons/multiple_buttons.tpl" item_id="add_{$name}_{$priceSubId}" tag_level=4}
                </td>
            </tr>
        </tbody>
    </table>
</div>
