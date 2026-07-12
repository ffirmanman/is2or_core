<div id="content_not_found">
    {assign var="categories" value=$category_ids|fn_rf_stock_parser_get_full_name_categories}

    <form class="form-horizontal form-edit cm-ajax cm-ajax-full-render {$form_class}" action="{""|fn_url}" method="post" id="not_found_form" name="form_not_found">
        <input type="hidden" name="result_ids" value="content_not_found" />
        <fieldset style="margin-bottom: 20px;">
            <table class="not_found_search_form">
                <tr>
                    <td>
                        <label>{$columnTranslates['manufacturer_code']}:</label>
                        <input type="text" name="nf_search[manufacturer_code]" value="{$nf_search.manufacturer_code}">
                    </td>
                    <td>
                        <label>{__('brand')}:</label>
                        <input type="text" name="nf_search[brand]" value="{$nf_search.brand}">
                    </td>
                    <td>
                        <label>{__('category')}:</label>
                        <input type="text" name="nf_search[category]" value="{$nf_search.category}">
                    </td>
                    <td style="vertical-align: bottom;">
                        {include file="buttons/save_cancel.tpl" but_name="dispatch[rf_stock_parser.get_not_found]" but_text="{__('search')}" but_target_form="form_not_found" save=$id}
                    </td>
                </tr>
            </table>
        </fieldset>

        {include file="common/pagination.tpl" disable_history=true div_id="pagination_not_found"}
        <input type="hidden" name="nf_search[my_supplier_id]" value="{$nf_search.my_supplier_id}">

        <table class="table table-bordered">
            <tr>
                <th width="1%" class="center">
                    {include file="common/check_items.tpl"}
                </th>
                <th style="width: 25%;">{__('general_info')}</th>
                <th>{__('product_fields')}</th>
            </tr>
            {foreach from=$data item="values" key="key"}
                <tr class="{if $data[$key].added}added{/if}">
                    <td class="center">
                        {if !$data[$key].added}
                            <input type="checkbox" name="not_found_ids[]" id="not_found_checkbox{$key}" value="{$key}" class="cm-item">
                        {/if}
                    </td>
                    <td style="width: 25%;">
                        <div><b>{$columnTranslates['manufacturer_code']}: </b>{$values.manufacturer_code}</div>
                        <div><b>{__('brand')}: </b>{$values.brand}</div>
                        <div><b>{__('category')}: </b>
                            {if $values.category_id}
                                {$categories[$values.category_id]}
                            {elseif $parser.column_settings.default_category}
                                {$categories[$parser.column_settings.default_category]}
                            {else}
                                RETAILFACTORY_STOCK_PARSER
                            {/if}
                        </div>
                    </td>
                    <td class="notFoundCell">
                        {foreach from=$values.value item="value" key="data_key"}
                            {if !$data_key|in_array:$notShow}
                                {if $value|is_array && $data_key != 'group' && $data_key != 'product_field'}
                                    {foreach from=$value item="multipleValue" key="multipleKey"}
                                        <div>
                                            {if $multipleKey|strstr:'m' !== false}
                                                {assign var="mKey" value=$multipleKey|substr:1}
                                                {assign var="modifier" value=$values['value']['modifiers'][$mKey]}
                                                {$features[$mKey]}: <span class="notFoundDataValue">{$multipleValue}</span> {if $modifier}(modifier = {$modifier}){/if}
                                            {elseif $multipleValue}
                                                {$columnTranslates[$data_key]}:
                                                <span class="notFoundDataValue">
                                                    {if $data_key == 'image'}
                                                        <a href="{$multipleValue}" target="_blank">{$multipleValue}</a>
                                                    {elseif $data_key == 'category'}
                                                        {$categories[$multipleValue]}
                                                    {else}
                                                        {$multipleValue}
                                                    {/if}
                                                </span>
                                            {/if}
                                        </div>
                                    {/foreach}
                                {elseif $data_key == 'group'}
                                    {$columnTranslates[$data_key]}: {$value.value} ({__('feature')}: {$features[$value.eq]} {$features[$value.eq2]})
                                {elseif $data_key == 'product_field'}
                                    {foreach from=$value item="vv"}
                                        <div>
                                            {$columnTranslates[$data_key]}: {$vv.value} ({$vv.eq})
                                        </div>
                                    {/foreach}
                                {elseif $data_key == 'avail_since'}
                                    {$columnTranslates[$data_key]}:
                                    {if $value}
                                        {$value|intval|fn_date_format:$settings.Appearance.date_format}
                                    {/if}
                                {else}
                                    <div>
                                        {if $data_key|strpos:'price_usergroup' !== false}
                                            {$pricesUserGroups[$data_key]}:
                                        {else}
                                            {$columnTranslates[$data_key]}:
                                        {/if}
                                        <span class="notFoundDataValue">
                                            {$value}
                                        </span>
                                    </div>
                                {/if}
                            {/if}
                        {/foreach}
                    </td>
                </tr>
            {/foreach}
        </table>

        {include file="common/pagination.tpl" disable_history=true div_id="pagination_not_found"}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[rf_stock_parser.import_not_found]" but_text="Import" but_target_form="form_not_found" save=$id}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[rf_stock_parser.start_export_not_found]" but_text="Export" but_target_form="form_not_found" save=$id}
    </form>
<!--content_not_found--></div>
