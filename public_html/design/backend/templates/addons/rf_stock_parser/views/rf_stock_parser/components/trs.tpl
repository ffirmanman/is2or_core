<div class="table-wrapper">
    <table class="table table-middle" width="100%">
        <thead class="cm-first-sibling">
            <tr>
                <th width="5%">{__("name")}</th>
                <th width="20%">{__("value")}</th>
                {if $partial}
                    <th width="15%">{__("rf_partial")}</th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$supplier[$name] item="item" key="_key"}
                <tr class="cm-row-item">
                    <td style="width: 50%">
                        <input type="text" name="supplier_data[{$name}][{$_key}][name]" value="{$item.name}" class="input-large" />
                    </td>
                    <td style="width: 45%">
                        <input type="text" name="supplier_data[{$name}][{$_key}][value]" value="{$item.value}" class="input-large" />
                    </td>
                    {if $partial}
                        <td>
                            <input type="checkbox" name="supplier_data[{$name}][{$_key}][partial]" value="1" class="checkbox" {if $item.partial}checked{/if}>
                        </td>
                    {/if}
                    <td class="nowrap right">
                        {include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
                    </td>
                </tr>
            {/foreach}

            {math equation="x+1" x=$_key|default:0 assign="new_key"}
            <tr class="{cycle values="table-row , " reset=1}" id="box_add_{$name}">
                <td style="width: 50%">
                    <input type="text" name="supplier_data[{$name}][{$new_key}][name]" value="" class="input-large" />
                </td>
                <td style="width: 45%">
                    <input type="text" name="supplier_data[{$name}][{$new_key}][value]" value="{if $name != 'features_synonyms'}100{/if}" class="input-large" />
                </td>
                {if $partial}
                    <td>
                        <input type="checkbox" name="supplier_data[{$name}][{$new_key}][partial]" value="1" class="checkbox">
                    </td>
                {/if}
                <td class="nowrap right">
                    {include file="buttons/multiple_buttons.tpl" item_id="add_{$name}"}
                </td>
            </tr>
        </tbody>
    </table>
</div>
