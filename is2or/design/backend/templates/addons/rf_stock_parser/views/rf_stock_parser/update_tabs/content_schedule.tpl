<div id="content_schedule" class="hidden">
    {if !$vendorId}
        <div class="parser_info">{rf_stock_parser_cron_info() nofilter}</div>
    {/if}
    <div class="control-group">
        <label class="control-label">{__("type")}</label>
        <div class="controls">
            <select id="rf_stock_parser_cron_select" name="supplier_data[cron][mode]">
                <option value="http" {if $supplier.cron.mode == 'http'}selected{/if}>http</option>
                <option value="ftp" {if $supplier.cron.mode == 'ftp'}selected{/if}>ftp</option>
            </select>
        </div>
    </div>
    <div id="rf_stock_parser_cron_http" class="rf_stock_parser_cron{if $supplier.cron.mode && $supplier.cron.mode != 'http'} hidden{/if}">
        <div class="control-group">
            <label for="elm_supplier_http_url" class="control-label">{__("my_supplier_file_price_link")}:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][http][url]" id="elm_supplier_http_url" size="32" value="{$supplier.cron.http.url}" class="input-large" />
            </div>
        </div>
    </div>
    <div id="rf_stock_parser_cron_ftp" class="rf_stock_parser_cron{if $supplier.cron.mode != 'ftp'} hidden{/if}">
        <div class="control-group">
            <label for="elm_supplier_ftp_server" class="control-label">Server:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][ftp][server]" id="elm_supplier_ftp_server" size="32" value="{$supplier.cron.ftp.server}" class="input-large" />
            </div>
        </div>
        <div class="control-group">
            <label for="elm_supplier_ftp_login" class="control-label">Login:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][ftp][login]" id="elm_supplier_ftp_login" size="32" value="{$supplier.cron.ftp.login}" class="input-large" />
            </div>
        </div>
        <div class="control-group">
            <label for="elm_supplier_ftp_password" class="control-label">Password:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][ftp][password]" id="elm_supplier_ftp_password" size="32" value="{$supplier.cron.ftp.password}" class="input-large" />
            </div>
        </div>
        <div class="control-group">
            <label for="elm_supplier_ftp_port" class="control-label">Port:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][ftp][port]" id="elm_supplier_ftp_port" size="32" value="{$supplier.cron.ftp.port|default:21}" class="input-large" />
            </div>
        </div>
        <div class="control-group">
            <label for="elm_supplier_ftp_url" class="control-label">File path:</label>
            <div class="controls">
                <input type="text" name="supplier_data[cron][ftp][url]" id="elm_supplier_ftp_url" size="32" value="{$supplier.cron.ftp.url}" class="input-large" />
            </div>
        </div>
    </div>
    <div class="control-group">
        <label for="elm_supplier_price_download_time" class="control-label">{__("my_supplier_file_price_time")}:</label>
        <div class="controls">
            <input type="text" name="supplier_data[cron][time]" id="elm_supplier_price_download_time" size="5" value="{$supplier.cron.time}" class="input-small" />
        </div>
    </div>
    <div class="control-group{if !$supplier.cron.mode || $supplier.cron.mode == 'http'} hidden{/if}" id="rf_stock_parser_check_cron">
        <label class="control-label"></label>
        <div class="controls">
            {include file="buttons/save_cancel.tpl" but_name="dispatch[rf_stock_parser.check_cron]" but_text="Check" but_target_form="supplier_update_form" save=$id but_meta="cm-ajax"}
        </div>
    </div>
</div>
