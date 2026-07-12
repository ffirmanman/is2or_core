<div>
    <input type="hidden" id="columnsWithModifiers" value="{','|implode:$columnsWithModifiers}">
    <input type="hidden" id="columnsWithFeatures" value="{','|implode:$columnsWithFeatures}">
    <input type="hidden" id="not_selected_lang_var" value="{__('none')}">
    {append var="features" value=__('none') index=""}
    {assign var="name" value="additional"}
    <div class="table-wrapper" id="additional_fields_table">
        <table class="table table-middle" width="100%">
            <thead class="cm-first-sibling">
            <tr>
                <th>{__('name')}</th>
                <th>{__('rf_column')}</th>
                {if $supplier.type == 'xml' || $action == 'xml'}
                    <th>{__('type')}</th>
                {/if}
                <th>{__('rf_value')}</th>
                <th>{__('rf_modifier')}</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$supplier.column_settings.additional item="item" key="_key"}
                <tr class="cm-row-item">
                    <td>
                        <div class="notFoundDataDiv">
                            <input type="checkbox" name="supplier_data[column_settings][{$name}][{$_key}][in_name]" {if $item.in_name}checked{/if}>
                        </div>
                        <div class="notFoundDataDiv">
                            <input type="number" name="supplier_data[column_settings][{$name}][{$_key}][order]" value="{$item.order}" style="width: 50px;">
                        </div>
                    </td>
                    <td style="width: 45%;vertical-align: top;">
                        {if $supplier.type == 'xml' || $action == 'xml'}
                            <span class="additional_columns_select" data-fixed="true">
                                {include
                                    file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                    data_url="rf_stock_parser.get_xml_nodes?constructor_id={$constructor_id}"
                                    text={$item.from|replace:"[not(@*)]":"" nofilter}
                                    result_elm="xml_additional_column_field_{$_key}"
                                    id="xml_additional_column_field_selector_{$_key}"
                                }
                                </span>
                            <input type="hidden" name="supplier_data[column_settings][{$name}][{$_key}][from]"
                                   id="xml_additional_column_field_{$_key}" value="{$item.from}" class="node_name">
                        {else}
                            <select name="supplier_data[column_settings][{$name}][{$_key}][from]" style="width: 100%;" {if $supplier.type == 'xml' || $action == 'xml'}class="xml_get_attr"{/if}>
                                <option value="">--</option>
                                {foreach from=$alphabet item="char"}
                                    {if $char != ''}
                                        <option value="{$char}"{if $char == $item.from} selected{/if}>{$char}{if $supplier.type != 'csv' && $action != 'csv'} - {$char@index + 1}{/if}</option>
                                    {/if}
                                {/foreach}
                            </select>
                        {/if}
                    </td>
                    {if $supplier.type == 'xml' || $action == 'xml'}
                        <td style="width: 15%;">
                            <select name="supplier_data[column_settings][{$name}][{$_key}][attr]" class="select_for_xml_attrs">
                                {foreach from=$xml_nodes_attrs[$item.from] item="attr"}
                                    <option value="{$attr}" {if $item.attr == $attr}selected{/if}>
                                        {if $attr_translates[$attr]}{$attr_translates[$attr]}{else}{$attr}{/if}
                                    </option>
                                {/foreach}
                            </select>
                        </td>
                    {/if}
                    <td style="width: 65%">
                        <select name="supplier_data[column_settings][{$name}][{$_key}][type]" style="margin-right: 20px;" class="additional_columns_select" data-fixed="true">
                            <option value="0">{__('none')}</option>
                            {foreach from=$additionalFields item="group" key="optgroup"}
                                {if $optgroup != ''}<optgroup label="{$optgroup}">{/if}
                                {foreach from=$group key="field" item="field_translate"}
                                    <option value="{$field}" {if $item.type == $field}selected{/if}>{$field_translate}</option>
                                {/foreach}
                                {if $optgroup != ''}</optgroup>{/if}
                            {/foreach}
                        </select>
                        <span data-url="{'rf_stock_parser.get_features'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature1 {if !$item.type|in_array:$columnsWithFeatures}hidden{/if}">
                            {if !$item.type|in_array:$columnsWithFeatures}
                                {assign var="feature_title" value=__('none')}
                            {else}
                                {assign var="feature_title" value=$features[$item.value]}
                            {/if}
                            {include
                                file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                data_url="rf_stock_parser.get_features{if 'group' == $item.type}&onlyGroup{/if}"
                                text=$feature_title
                                result_elm="additional_feature_field_{$_key}"
                                id="additional_feature_field_selector_{$_key}"
                            }
                        </span>
                        <input type="hidden" name="supplier_data[column_settings][{$name}][{$_key}][value]" id="additional_feature_field_{$_key}" value="{$item.value}">

                        <span data-url="{'rf_stock_parser.get_features'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature2 {if 'group' != $item.type}hidden{/if}">
                            {if !$item.type|in_array:$columnsWithFeatures}
                                {assign var="feature_title" value=__('none')}
                            {else}
                                {assign var="feature_title" value=$features[$item.value2]}
                            {/if}
                            {include
                                file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                data_url="rf_stock_parser.get_features{if 'group' == $item.type}&onlyGroup{/if}"
                                text=$feature_title
                                result_elm="additional_feature_field_{$_key}_2"
                                id="additional_feature_field_selector_{$_key}_2"
                            }
                        </span>
                        <input type="hidden" name="supplier_data[column_settings][{$name}][{$_key}][value2]" id="additional_feature_field_{$_key}_2" value="{$item.value2}">

                        <span data-url="{'rf_stock_parser.get_fields'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature3 {if 'product_field' != $item.type}hidden{/if}">
                            {include
                                file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                data_url="rf_stock_parser.get_fields"
                                text=$item.value3
                                result_elm="additional_feature_field_{$_key}_3"
                                id="additional_feature_field_selector_{$_key}_3"
                            }
                        </span>
                        <input type="hidden" name="supplier_data[column_settings][{$name}][{$_key}][value3]" id="additional_feature_field_{$_key}_3" value="{$item.value3}">
                    </td>
                    <td>
                        <input type="text" name="supplier_data[column_settings][{$name}][{$_key}][modifier]" value="{$item.modifier}" class="input-large additional_columns_modifier {if !$item.type|in_array:$columnsWithModifiers}hidden{/if}">
                    </td>
                    <td class="nowrap right">
                        {include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
                    </td>
                </tr>
            {/foreach}

            {if $supplier.column_settings.additional}
                {assign var="_key" value=$supplier.column_settings.additional|array_keys|max}
            {/if}

            {math equation="x+1" x=$_key|default:0 assign="new_key"}
            <tr class="{cycle values="table-row , " reset=1}" id="box_add_{$name}_{$new_key}">
                <td>
                    <div class="notFoundDataDiv">
                        <input type="checkbox" name="supplier_data[column_settings][{$name}][{$new_key}][in_name]">
                    </div>
                    <div class="notFoundDataDiv">
                        <input type="number" name="supplier_data[column_settings][{$name}][{$new_key}][order]" style="width: 50px;">
                    </div>
                </td>
                <td style="width: 45%;vertical-align: top;">
                    {if $supplier.type == 'xml' || $action == 'xml'}
                        {if $supplier.column_settings.column_map.from.$index}
                            {assign var='nodeName' value=$supplier.column_settings.column_map.from.$index}
                        {else}
                            {assign var='nodeName' value=__('none')}
                        {/if}
                        <span class="additional_columns_select">
                            {include
                                file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                data_url="rf_stock_parser.get_xml_nodes?constructor_id={$constructor_id}"
                                text={$nodeName}
                                result_elm="xml_additional_column_field_{$new_key}"
                                id="xml_additional_column_field_selector_{$new_key}"
                            }
                        </span>
                        <input type="hidden" name="supplier_data[column_settings][{$name}][{$new_key}][from]"
                               id="xml_additional_column_field_{$new_key}" class="node_name">
                    {else}
                        <select name="supplier_data[column_settings][{$name}][{$new_key}][from]" style="width: 100%;">
                            <option value="">--</option>
                            {foreach from=$alphabet item="char"}
                                {if $char != ''}
                                    <option value="{$char}">{$char}{if $supplier.type != 'csv' && $action != 'csv'} - {$char@index + 1}{/if}</option>
                                {/if}
                            {/foreach}
                        </select>
                    {/if}
                </td>
                {if $supplier.type == 'xml' || $action == 'xml'}
                    <td style="width: 15%;">
                        <select name="supplier_data[column_settings][{$name}][{$new_key}][attr]"
                                class="select_for_xml_attrs">
                        </select>
                    </td>
                {/if}
                <td style="width: 65%;vertical-align: top;">
                    <select name="supplier_data[column_settings][{$name}][{$new_key}][type]" style="margin-right: 20px;" class="additional_columns_select">
                        <option value="0">{__('none')}</option>
                        {foreach from=$additionalFields item="group" key="optgroup"}
                            {if $optgroup != ''}<optgroup label="{$optgroup}">{/if}
                                {foreach from=$group key="field" item="field_translate"}
                                    <option value="{$field}">{$field_translate}</option>
                                {/foreach}
                            {if $optgroup != ''}</optgroup>{/if}
                        {/foreach}
                    </select>
                    <span data-url="{'rf_stock_parser.get_features'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature1 hidden">
                        {include
                            file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                            data_url="rf_stock_parser.get_features"
                            text="{__('none')}"
                            result_elm="additional_feature_field_{$new_key}"
                            id="additional_feature_field_selector_{$new_key}"
                        }
                    </span>
                    <input type="hidden" name="supplier_data[column_settings][{$name}][{$new_key}][value]" id="additional_feature_field_{$new_key}">

                    <span data-url="{'rf_stock_parser.get_features'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature2 hidden">
                        {include
                            file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                            data_url="rf_stock_parser.get_features"
                            text="{__('none')}"
                            result_elm="additional_feature_field_{$new_key}_2"
                            id="additional_feature_field_selector_{$new_key}_2"
                        }
                    </span>
                    <input type="hidden" name="supplier_data[column_settings][{$name}][{$new_key}][value2]" id="additional_feature_field_{$new_key}_2">

                    <span data-url="{'rf_stock_parser.get_fields'|fn_url}" class="text-type-value ajax-select-wrap additional_columns_select_feature additional_columns_select_feature3 hidden">
                        {include
                            file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                            data_url="rf_stock_parser.get_fields"
                            text="{__('none')}"
                            result_elm="additional_feature_field_{$new_key}_3"
                            id="additional_feature_field_selector_{$new_key}_3"
                        }
                    </span>
                    <input type="hidden" name="supplier_data[column_settings][{$name}][{$new_key}][value3]" id="additional_feature_field_{$new_key}_3">
                </td>
                <td style="vertical-align: top;">
                    <input type="text" name="supplier_data[column_settings][{$name}][{$new_key}][modifier]" value="" class="input-large additional_columns_modifier hidden">
                </td>
                <td class="nowrap right">
                    {include file="buttons/multiple_buttons.tpl" item_id="add_{$name}_{$new_key}"}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
