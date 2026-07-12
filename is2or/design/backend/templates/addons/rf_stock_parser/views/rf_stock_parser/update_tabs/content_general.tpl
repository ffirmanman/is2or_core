{if $supplier.my_supplier_id}
    <input type="hidden" name="supplier_data[type]" value="{$supplier.type}" />
{elseif $add_xml}
    <input type="hidden" name="supplier_data[type]" value="xml" />
{elseif $action}
    <input type="hidden" name="supplier_data[type]" value="{$action}" />
{/if}

<div id="content_general" class="hidden">
    {include file="common/subheader.tpl" title=__("general_info")}
    <div class="control-group">
        <label for="elm_supplier_name" class="control-label {if ($add_xml && $constructor_id) || !$add_xml}cm-required{/if}">{__("name")}:</label>
        <div class="controls">
            <input type="text" name="supplier_data[supplier_name]" id="elm_supplier_name" size="32" value="{$supplier.supplier_name}" class="input-large" />
        </div>
    </div>

    <div class="control-group">
        <label for="elm_supplier_link_to_products" class="control-label">{__("rf_stock_parser_link_to_products")}:</label>
        <div class="controls">
            <select name="supplier_data[link_to_products]" id="elm_supplier_link_to_products" class="user-success">
                {foreach from=$linkToProducts item="link_name" key="link_key"}
                    <option value="{$link_key}" {if $supplier.link_to_products == $link_key}selected{/if}>{$link_name}</option>
                {/foreach}
            </select>
        </div>
    </div>


    <div class="control-group">
        <label for="elm_supplier_manufacturer_field" class="control-label">{__("manufacturer_field")}:</label>
        <div class="controls">
            <select name="supplier_data[manufacturer_field]" id="elm_supplier_manufacturer_field" class="user-success">
                {foreach from=$manufacturerFieldOptions item="fields" key="group"}
                    <optgroup label="{__($group)}">
                        {foreach from=$fields item="field"}
                            <option value="{$field}" {if $supplier.manufacturer_field == $field || !$supplier.manufacturer_field && $field == 'manufacturer_code'}selected{/if}>{$field}</option>
                        {/foreach}
                    </optgroup>
                {/foreach}
            </select>
        </div>
    </div>

    <div id="div_for_brands">
        {if $brands}
            <div class="control-group">
                <label for="elm_supplier_brands" class="control-label">{__("block_our_brands")}:</label>
                <div class="controls">
                    <select name="supplier_data[brands][]" id="elm_supplier_brands" size="15" class="input-large cm-object-selector"
                            multiple="multiple" data-ca-placeholder="{__('search')}"
                            data-ca-close-on-select="false" data-ca-allow-clear="true">
                        {foreach from=$brands item="brand" key="brand_id"}
                            <option value="{$brand_id}" {if $brand_id|in_array:$supplier.brands}selected{/if}>{$brand}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        {/if}
        <!--div_for_brands--></div>

    {include file="views/companies/components/company_field.tpl"
        name="supplier_data[company_id]"
        selected=$supplier.company_id
        js_action="fn_rf_stock_parser_change_vendor(elm);"
        zero_company_id_name_lang_var=$zero_company_id_name_lang_var
    }

    {if !$add_xml && $supplier.type != 'xml'}
        {include file="common/subheader.tpl" title=__("my_supplier_column_settings")}

        <div class="control-group">
            <label for="elm_supplier_column_settings_first_row" class="control-label">{__("my_supplier_settings_first_row")}:</label>
            <div class="controls">
                {if $supplier.type == 'csv' || $smarty.request.dispatch == 'rf_stock_parser.add.csv'}{$firstRow = 0}{else}{$firstRow = 1}{/if}
                <input type="number" name="supplier_data[column_settings][first_row]" id="elm_supplier_settings_first_row" size="32" value="{$supplier.column_settings.first_row|default:$firstRow}" class="input-small" />
            </div>
        </div>

        <div class="control-group">
            <label for="elm_supplier_column_settings_labels_row" class="control-label">{__("rf_stock_settings_labels_row")}:</label>
            <div class="controls">
                <input type="number" name="supplier_data[column_settings][labels_row]" id="elm_supplier_settings_labels_row" size="32" value="{$supplier.column_settings.labels_row|default:'-1'}" class="input-small" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">{__('rf_stock_parser_labels_row_stop_update')}</label>
            <div class="controls">
                <input type="hidden" name="supplier_data[column_settings][labels_row_stop_update]" value="0">
                <input type="checkbox" name="supplier_data[column_settings][labels_row_stop_update]" {if $supplier.column_settings.labels_row_stop_update}checked{/if} value="1" class="checkbox">
            </div>
        </div>

        {if $supplier.type == 'csv' || $action == 'csv'}
            <div class="control-group">
                <label for="elm_supplier_column_settings_encoding" class="control-label">{__("rf_stock_parser_encoding")}:</label>
                <div class="controls">
                    <select name="supplier_data[column_settings][encoding]" id="elm_supplier_settings_encoding">
                        <option value="0">auto</option>
                        {foreach from=$encodings item="encoding"}
                            <option value="{$encoding}" {if $supplier.column_settings.encoding == $encoding}selected{/if}>{$encoding}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label for="elm_supplier_column_settings_csv_delimiter" class="control-label">{__("my_supplier_settings_csv_delimiter")}:</label>
                <div class="controls">
                    <input type="text" name="supplier_data[column_settings][csv_delimiter]" id="elm_supplier_settings_csv_delimiter" size="32" placeholder="," value="{$supplier.column_settings.csv_delimiter}" class="input-small" />
                </div>
            </div>
            <div class="control-group">
                <label for="elm_supplier_column_settings_csv_enclosure" class="control-label">{__("my_supplier_settings_csv_enclosure")}:</label>
                <div class="controls">
                    <input type="text" name="supplier_data[column_settings][csv_enclosure]" id="elm_supplier_settings_csv_enclosure" size="32" placeholder='"' value="{$supplier.column_settings.csv_enclosure}" class="input-small" />
                </div>
            </div>
            <div class="control-group">
                <label for="elm_supplier_column_settings_csv_escape" class="control-label">{__("my_supplier_settings_csv_escape")}:</label>
                <div class="controls">
                    <input type="text" name="supplier_data[column_settings][csv_escape]" id="elm_supplier_settings_csv_escape" size="32" placeholder="\" value='{$supplier.column_settings.csv_escape}' class="input-small" />
                </div>
            </div>
        {/if}
    {/if}

    {include file="common/subheader.tpl" title=__("rf_keep_logs")}
    <div class="control-group">
        <label class="control-label">{__('rf_days')}:</label>
        <div class="controls">
            <input type="number" name="supplier_data[keep_logs_days]" size="32" value="{$supplier.keep_logs_days|default:'30'}" class="input-small" />
        </div>
    </div>

    {capture name="xml_fix_wrong_encode"}
        {if $supplier.type == 'xml' || $action == 'xml'}
            <div class="control-group">
                <label class="control-label">{__('rf_stock_parser_xml_fix_wrong_encode')}</label>
                <div class="controls">
                    <input type="hidden" name="supplier_data[xml_fix_wrong_encode]" value="0">
                    <input type="checkbox" name="supplier_data[xml_fix_wrong_encode]" {if $supplier.xml_fix_wrong_encode}checked{/if} value="1" class="checkbox">
                </div>
            </div>
        {/if}
    {/capture}

    <div id="schema">
        {if $smarty.request.reset}
            <input type="hidden" name="reset" value="true">
            <input type="hidden" name="result_ids" value="schema">
        {/if}
        {if $smarty.request.soft_reset}
            <input type="hidden" name="soft_reset" value="true">
        {/if}

        {if $custom_node_name}
            <input type="hidden" name="supplier_data[custom_node_name]" value="{$custom_node_name}">
        {elseif $supplier.custom_node_name}
            <input type="hidden" name="supplier_data[custom_node_name]" value="{$supplier.custom_node_name}">
        {/if}

        {if $filter_attributes}
            <input type="hidden" name="supplier_data[filter_attributes]" value="{$filter_attributes}">
        {elseif $supplier.filter_attributes}
            <input type="hidden" name="supplier_data[filter_attributes]" value="{','|implode:$supplier.filter_attributes}">
        {/if}

        {if $add_xml && !$constructor_id && !$xml_structure}
            {include file="common/subheader.tpl" title=__('rf_get_xml_scheme')}

            <div class="control-group">
                <label class="control-label">{__('rf_xml_file')}</label>
                <div class="controls">
                    {include file="common/fileuploader.tpl" var_name="preview_files[]" allowed_ext="xml"}
                </div>
            </div>
            {if $supplier.my_supplier_id}
                <div class="control-group">
                    <label class="control-label">{__('rf_stock_parser_without_resetting_stored_fields')}</label>
                    <div class="controls">
                        <input type="checkbox" name="soft_reset" value="1" class="checkbox">
                    </div>
                </div>
            {/if}
            <div class="control-group">
                <div class="controls">
                    {include file="buttons/button.tpl" but_role="submit" but_name="dispatch[rf_stock_parser.parse_xml]" but_text="Выполнить"}
                </div>
            </div>
        {elseif $xml_structure}
            {include file="common/subheader.tpl" title=__('rf_get_xml_scheme')}
            <div class="control-group">
                <label class="control-label">{__('rf_product_node')}</label>
                <div class="controls">
                    <table class="table">
                        <tr>
                            <th>Xpath</th>
                            <th>Root</th>
                            <th>Xpath without attributes</th>
                        </tr>
                        {foreach from=$xml_structure item="node"}
                            {assign var="index" value=$node@index}
                            <tr>
                                <td style="width: 100%;"><input type="text" disabled value="{$node}" style="width: 100%;max-width: 100%"></td>
                                <td><input type="radio" name="rootNode" value="{$node}"></td>
                                <td><input type="checkbox" name="withoutAttr[]" value="{$node}"></td>
                            </tr>
                        {/foreach}
                    </table>
                    <input type="hidden" name="xml_path" value="{$xml_path}">
                </div>
                <div class="control-group">
                    <div class="controls">
                        {include file="buttons/button.tpl" but_role="submit" but_name="dispatch[rf_stock_parser.parse_xml]" but_text=__('rf_execute')}
                    </div>
                </div>
            </div>
            {assign var="show_xml_fix_wrong_encode" value="true"}
            {$smarty.capture.xml_fix_wrong_encode nofilter}
        {else}
            {if !$constructor_id && $supplier.constructor_id}
                {assign var="constructor_id" value=$supplier.constructor_id}
            {/if}
            <input type="hidden" name="supplier_data[constructor_id]" value="{$constructor_id}" id="constructor_id">

            {include file="common/subheader.tpl" title=__('rf_columns_definition')}

            <div class="control-group">
                <label for="elm_supplier_column_settings_first_row" class="control-label">
                    {__("my_supplier_settings_columns")}:
                    {if $supplier.type == 'xml' || $action == 'xml'}
                        <div>
                            {include file="buttons/button.tpl" but_href="rf_stock_parser.update?my_supplier_id=`$supplier.my_supplier_id`&reset=true" but_target_id="schema" but_text=__('rf_reset') but_role="icon" but_meta="cm-ajax"}
                        </div>
                    {/if}
                </label>
                <div class="controls">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 90px;">{__('name')}</th>
                            <th>{__('rf_column')}</th>
                            {if $supplier.type == 'xml' || $action == 'xml'}
                                <th>{__('type')}</th>
                            {/if}
                            <th>{__('rf_value')}</th>
                        </tr>

                        <input type="hidden" id="xml_node_value_lang" value="{__('value')}">

                        {foreach from=$column_mapping key="column" item="to" name='columns'}
                            {assign var="index" value=$to@index}
                            <tr>
                                <td>
                                    <div class="notFoundDataDiv">
                                        <input type="checkbox" name="supplier_data[column_settings][column_map][in_name][{$index}]" {if $supplier.column_settings.column_map.in_name.$index}checked{/if}>
                                    </div>
                                    <div class="notFoundDataDiv">
                                        <input type="number" name="supplier_data[column_settings][column_map][order][{$index}]" value="{$supplier.column_settings.column_map.order.$index}" style="width: 50px;">
                                    </div>
                                </td>
                                <td style="width: 50%;">
                                    {if $supplier.type == 'xml' || $action == 'xml'}
                                        {if $supplier.column_settings.column_map.from.$index}
                                            {assign var='nodeName' value=$supplier.column_settings.column_map.from.$index}
                                        {else}
                                            {assign var='nodeName' value=__('none')}
                                        {/if}
                                        {include
                                        file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                        data_url="rf_stock_parser.get_xml_nodes?constructor_id={$constructor_id}"
                                        text={$nodeName|replace:"[not(@*)]":"" nofilter}
                                        result_elm="xml_column_field_{$index}"
                                    id="xml_column_field_selector_{$index}"
                                    }

                                        <input type="hidden" name="supplier_data[column_settings][column_map][from][{$index}]"
                                               id="xml_column_field_{$index}" value="{$supplier.column_settings.column_map.from.$index}" class="node_name">
                                    {else}
                                        <select name="supplier_data[column_settings][column_map][from][{$index}]" style="width: 100%;">
                                            <option value="">--</option>
                                            {foreach from=$alphabet item="char"}
                                                {if $char != ''}
                                                    <option value="{$char}"
                                                            {if $char == $supplier.column_settings.column_map.from.$index} selected{/if}>
                                                        {$char}{if $supplier.type != 'csv' && $action != 'csv'} - {$char@index + 1}{/if}
                                                    </option>
                                                {/if}
                                            {/foreach}
                                        </select>
                                    {/if}
                                </td>
                                {if $supplier.type == 'xml' || $action == 'xml'}
                                    <td>
                                        <select name="supplier_data[column_settings][column_map][attr][{$index}]"
                                                class="select_for_xml_attrs">
                                            {foreach from=$xml_nodes_attrs[$supplier.column_settings.column_map.from.$index] item="attr"}
                                                <option value="{$attr}"
                                                        {if $supplier.column_settings.column_map.attr.$index == $attr}selected{/if}>
                                                    {if $attr_translates[$attr]}{$attr_translates[$attr]}{else}{$attr}{/if}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </td>
                                {/if}
                                <td>
                                    <select name="supplier_data[column_settings][column_map][to][{$index}]" style="width: 100%;">
                                        <option value="">--</option>
                                        {foreach from=$columnTranslates key="name" item="desc"}
                                            {if $name|in_array:$additionalFieldsFlat === false}
                                                <option value="{$name}"{if $name === $supplier.column_settings.column_map.to.$index} selected{/if}>{$desc}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>

            {if $supplier.type == 'xml' && 'available'|in_array:$supplier.filter_attributes}
                <div class="control-group">
                    <label class="control-label">{__('rf_filter_by_availability')}</label>
                    <div class="controls">
                        <input type="hidden" name="supplier_data[column_settings][filter_available]" value="0" class="checkbox">
                        <input type="checkbox" name="supplier_data[column_settings][filter_available]" {if $supplier.column_settings.filter_available}checked{/if} value="1" class="checkbox">
                    </div>
                </div>
            {/if}

            {include file="common/subheader.tpl" title=__('rf_additional_columns_definition')}
            <div class="control-group">
                <label class="control-label">{__('rf_stock_parser_autoimport')}</label>
                <div class="controls">
                    <input type="hidden" name="supplier_data[autoimport]" value="0">
                    <input type="checkbox" name="supplier_data[autoimport]" {if $supplier.autoimport}checked{/if} value="1" class="checkbox">
                    <p class="muted description">{__("rf_stock_parser_autoimport_description")}</p>
                </div>
            </div>
            {if $zero_company_id_name_lang_var}
                <div class="control-group">
                    <label class="control-label">{__('rf_stock_parser_attach_to_master')}</label>
                    <div class="controls">
                        <input type="hidden" name="supplier_data[attach_to_master]" value="0">
                        <input type="checkbox" name="supplier_data[attach_to_master]" {if $supplier.attach_to_master}checked{/if} value="1" class="checkbox">
                        <p class="muted description">{__("rf_stock_parser_attach_to_master_description")}</p>
                    </div>
                </div>
            {/if}

            <div class="cm-j-tabs cm-track tabs ">
                <ul class="nav nav-tabs">
                    <li id="additional_columns_general" class="cm-js active">
                        <a>{__('my_supplier_settings_columns')}</a>
                    </li>
                    <li id="additional_columns_categories" class="cm-js">
                        <a>{__('rf_stock_parser_communication_category')}</a>
                    </li>
                    <li id="additional_columns_renewable" class="cm-js">
                        <a>{__('rf_stock_parser_additional_update_settings')}</a>
                    </li>
                </ul>
            </div>

            <div id="content_additional_columns_general" class="hidden">
                {include file="addons/rf_stock_parser/views/rf_stock_parser/components/additional_columns_trs.tpl"}
            </div>
            <div id="content_additional_columns_categories" class="hidden">
                {include file="addons/rf_stock_parser/views/rf_stock_parser/components/communication_categories.tpl"}
            </div>
            <div id="content_additional_columns_renewable" class="hidden">
                {include file="addons/rf_stock_parser/views/rf_stock_parser/components/additional_columns_renewable.tpl"}
            </div>
        {/if}

        {*
            {include file="addons/rf_stock_parser/views/rf_stock_parser/components/new_pos_to_file.tpl"}
        *}

        {if !$show_xml_fix_wrong_encode}
            {$smarty.capture.xml_fix_wrong_encode nofilter}
        {/if}

        {if $supplier.my_supplier_id && !$smarty.request.reset}
            <div class="control-group">
                <label for="elm_supplier_column_settings_first_row" class="control-label">{__("my_supplier_price_upload")}:</label>
                <div class="controls">
                    {include file="common/fileuploader.tpl" var_name="attachment_files[]" allowed_ext="xls,xlsx,csv,xml"}
                </div>
            </div>
            <div class="control-group" id="upload_price_div">
                <div class="controls">
                    {include file="buttons/button.tpl" but_role="submit" but_name="dispatch[rf_stock_parser.download_price]" but_text=__('rf_execute') but_meta="cm-ajax" but_target_id="upload_price_div"}
                </div>
                <!--upload_price_div--></div>
        {/if}
        <!--schema--></div>
</div>
