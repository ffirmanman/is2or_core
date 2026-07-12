{include file="common/subheader.tpl" title="Сохранение новых позиций"}

{assign var="new_pos_fields" value=","|explode:"first_line,file_name,file_path,prefix,postfix"}

{foreach from=$new_pos_fields item="new_pos_key"}
    <div class="control-group">
        <label for="elm_supplier_new_pos_{$new_pos_key}" class="control-label">
            {__("rf_stock_parser_new_pos_{$new_pos_key}")} {if $new_pos_key == 'file_path'}{$smarty.const.DIR_ROOT}/{/if}:
        </label>
        <div class="controls">
            <input type="text" name="supplier_data[new_pos][{$new_pos_key}]" id="elm_supplier_new_pos_{$new_pos_key}" size="32"
                   value="{$supplier.new_pos.$new_pos_key}" class="input-large" />
        </div>
    </div>
{/foreach}
