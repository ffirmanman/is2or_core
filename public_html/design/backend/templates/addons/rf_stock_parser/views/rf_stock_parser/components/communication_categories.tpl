{$category_ids = []}
{if $supplier.column_settings.categories}
    {assign var="moreCategories" value=$supplier.column_settings.categories|array_column:'more'|fn_rf_stock_parser_flat_array}
    {assign var="category_ids" value=$supplier.column_settings.categories|array_column:'value'|array_merge:$moreCategories}
{/if}

{if $supplier.column_settings.default_category}
    {append var="category_ids" value=$supplier.column_settings.default_category}
{/if}

{if $category_ids}
    {assign var="categories" value=$category_ids|fn_rf_stock_parser_get_full_name_categories}
    {append var="categories" value=__('none') index="0"}
{/if}

<div class="control-group">
    <label class="control-label">{__('rf_stock_parser_default_category')}</label>
    <div class="controls rf_category_suggest">
        {include
            file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
            data_url="rf_stock_parser.get_categories?company_id={$supplier.company_id}"
            text="{$categories[$supplier.column_settings.default_category]|default:__('none')}"
            result_elm="communication_categories_field_default"
            id="communication_categories_field_selector_default"
        }
        <input type="hidden" name="supplier_data[column_settings][default_category]" id="communication_categories_field_default" value="{$supplier.column_settings.default_category}">
    </div>
</div>

<p class="muted description">{__("rf_stock_parser_categories_default_description")}</p>

<div class="control-group" style="margin-bottom: 0;">
    <label class="control-label">{__('rf_stock_parser_use_price_category_id')}</label>
    <div class="controls">
        <input type="hidden" name="supplier_data[column_settings][use_price_category_id]" value="0">
        <input type="checkbox" name="supplier_data[column_settings][use_price_category_id]" {if $supplier.column_settings.use_price_category_id}checked{/if} value="1" class="checkbox">
    </div>
</div>

<div class="table-wrapper">
    <p class="muted description">{__("rf_stock_parser_categories_mapping_description")}</p>
    <table class="table table-middle" width="100%" id="communication_categories_table">
        <thead class="cm-first-sibling">
        <tr>
            <th width="5%">{__("name")}</th>
            <th width="20%">{__("category")}</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$supplier.column_settings.categories item="item" key="_key"}
            <tr class="cm-row-item">
                <td style="width: 30%;vertical-align: top;">
                    <input type="text" name="supplier_data[column_settings][categories][{$_key}][name]" value="{$item.name}" class="input-large" />
                </td>
                <td style="width: 65%;">
                        <span class="text-type-value ajax-select-wrap communication_categories_select" data-fixed="true">
                        {include
                        file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                        data_url="rf_stock_parser.get_categories?company_id={$supplier.company_id}"
                        text=$categories[$item.value]
                        result_elm="communication_categories_field_{$_key}"
                        id="communication_categories_field_selector_{$_key}"
                        }
                        </span>
                    <input type="hidden" name="supplier_data[column_settings][categories][{$_key}][value]" id="communication_categories_field_{$_key}" value="{$item.value}">

                    {if $importToMultipleStores}
                        {foreach from=$importToMultipleStores item="store" key="storeId"}
                            <div>
                                <span>{__('storefront')} <b>{$store}</b>: </span>
                                <span class="text-type-value ajax-select-wrap communication_categories_select" data-fixed="true">
                                    {include
                                    file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                    data_url="rf_stock_parser.get_categories?company_id={$storeId}"
                                    text=$categories[$item.more[$storeId]]
                                    result_elm="communication_categories_field_{$_key}_{$storeId}"
                                    id="communication_categories_field_selector_{$_key}_{$storeId}"
                                    }
                                    </span>
                                <input type="hidden" name="supplier_data[column_settings][categories][{$_key}][more][{$storeId}]" id="communication_categories_field_{$_key}_{$storeId}" value="{$item.more[$storeId]}">
                            </div>
                        {/foreach}
                    {else}
                    {/if}
                </td>
                <td class="nowrap right">
                    {include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
                </td>
            </tr>
        {/foreach}

        {if $supplier.column_settings.categories}
            {assign var="_key" value=$supplier.column_settings.categories|array_keys|max}
        {/if}

        {math equation="x+1" x=$_key|default:0 assign="new_key"}
        <tr class="{cycle values="table-row , " reset=1}" id="box_add_communication_categories">
            <td style="width: 30%">
                <input type="text" name="supplier_data[column_settings][categories][{$new_key}][name]" value="" class="input-large" />
            </td>
            <td style="width: 65%">
                    <span class="text-type-value ajax-select-wrap communication_categories_select">
                        {include
                        file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                        data_url="rf_stock_parser.get_categories?company_id={$supplier.company_id}"
                        text="{__('none')}"
                        result_elm="communication_categories_field_{$new_key}"
                        id="communication_categories_field_selector_{$new_key}"
                        }
                    </span>
                <input type="hidden" name="supplier_data[column_settings][categories][{$new_key}][value]" id="communication_categories_field_{$new_key}">

                {if $importToMultipleStores}
                    {foreach from=$importToMultipleStores item="store" key="storeId"}
                        <div>
                            <span>{__('storefront')} <b>{$store}</b>: </span>
                            <span class="text-type-value ajax-select-wrap communication_categories_select">
                                    {include
                                    file="addons/rf_stock_parser/views/rf_stock_parser/components/ajax_select_object.tpl"
                                    data_url="rf_stock_parser.get_categories?company_id={$storeId}"
                                    text="{__('none')}"
                                    result_elm="communication_categories_field_{$new_key}_{$storeId}"
                                    id="communication_categories_field_selector_{$new_key}_{$storeId}"
                                    }
                                </span>
                            <input type="hidden" name="supplier_data[column_settings][categories][{$new_key}][more][{$storeId}]" id="communication_categories_field_{$new_key}_{$storeId}">
                        </div>
                    {/foreach}
                {/if}
            </td>
            <td class="nowrap right">
                {include file="buttons/multiple_buttons.tpl" item_id="add_communication_categories"}
            </td>
        </tr>
        </tbody>
    </table>
</div>
