{script src="js/addons/rf_stock_parser/parser.js"}
{include file="views/profiles/components/profiles_scripts.tpl"}
{style src="addons/rf_stock_parser/style.css"}

{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" name="suppliers_list_form" id="suppliers_list_form">
        <input type="hidden" name="fake" value="1" />

        {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
        {assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
        {assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

        {include file="common/pagination.tpl" save_current_page=true save_current_url=true}

        {if $suppliers}
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table-responsive">
                    <thead>
                        <tr>
                            <th width="1%" class="left mobile-hide">
                                {include file="common/check_items.tpl"}
                            </th>
                            <th width="5%"><a class="cm-ajax" href="{"`$c_url`&sort_by=id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("id")}{if $search.sort_by == "id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="25%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=last_run&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__('rf_stock_parser_last_run')}{if $search.sort_by == "last_run"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=date&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("rf_stock_parser_log_status_updated")|rf_stock_parser_mb_ucfirst}{if $search.sort_by == "date"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th>{__("type")}</th>

                            {hook name="suppliers:manage_header"}{/hook}

                            <th></th>
                            <th width="50px" class="">&nbsp;</th>
                            <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        </tr>
                    </thead>

                    {foreach from=$suppliers item=supplier}

                        {assign var="allow_save" value=$supplier|fn_allow_save_object:"suppliers"}
                        {if !$allow_save && !"RESTRICTED_ADMIN"|defined && $auth.is_root != 'Y'}
                            {assign var="link_text" value=__("view")}
                            {assign var="popup_additional_class" value=""}
                        {elseif $allow_save || "RESTRICTED_ADMIN"|defined || $auth.is_root == 'Y'}
                            {assign var="link_text" value="edit"}
                            {assign var="popup_additional_class" value="cm-no-hide-input"}
                        {else}
                            {assign var="popup_additional_class" value=""}
                            {assign var="link_text" value="edit"}
                        {/if}

                        <tr class="cm-row-status-{$supplier.status|lower}">
                            <td class="center {$no_hide_input} mobile-hide">
                                <input type="checkbox" name="my_supplier_ids[]" value="{$supplier.my_supplier_id}" class="checkbox cm-item" />
                            </td>
                            <td data-th="{__("id")}"><a class="row-status" href="{"rf_stock_parser.update?my_supplier_id=`$supplier.my_supplier_id`"|fn_url}">{$supplier.my_supplier_id}</a></td>
                            <td class="row-status" data-th="{__("name")}">{if $supplier.supplier_name}<a href="{"rf_stock_parser.update?my_supplier_id=`$supplier.my_supplier_id`"|fn_url}">{$supplier.supplier_name}</a>{else}-{/if}
                                {if $supplier.company_id}
                                    {include file="views/companies/components/company_name.tpl" object=$supplier}
                                {else}
                                    <p class="muted">{__("rf_stock_parser.all_vendors_master_product")}</p>
                                {/if}
                            </td>
                            <td>{$supplier.last_run|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
                            <td class="row-status" data-th="{__("registered")}">{$supplier.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
                            <td>{$supplier.type}</td>

                            {hook name="suppliers:manage_data"}{/hook}

                            <td style="width: 15%;">
                                {if $processing[$supplier.my_supplier_id].error_message}
                                    {include_ext file="addons/rf_stock_parser/views/rf_stock_parser/components/icon.tpl"
                                        class="icon-warning-sign cm-tooltip"
                                        title=$processing[$supplier.my_supplier_id].error_message
                                    }
                                {/if}
                                <div class="rf-progress" data-id="{$supplier.my_supplier_id}" {if !$processing[$supplier.my_supplier_id].running}style="display: none;" {/if}>
                                    <span class="rf-progress-bar" style="width: {$processing[$supplier.my_supplier_id].percent}%;"></span>
                                </div>
                            </td>
                            <td class="center" data-th="{__("tools")}">
                                <div class="hidden-tools">
                                {capture name="tools_list"}
                                    {hook name="companies:list_extra_links"}
                                        {assign var="return_current_url" value=$config.current_url|escape:url}
                                        <li>{btn type="list" text=__($link_text) href="rf_stock_parser.update?my_supplier_id=`$supplier.my_supplier_id`"}</li>
                                        {assign var="return_current_url" value=$config.current_url|escape:url}
                                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="rf_stock_parser.delete?my_supplier_id=`$supplier.my_supplier_id`&redirect_url=`$return_current_url`" method="POST"}</li>
                                    {/hook}
                                {/capture}
                                {dropdown content=$smarty.capture.tools_list}
                                </div>
                            </td>
                            <td class="right" data-th="{__("status")}">
                                {include file="common/select_popup.tpl" id=$supplier.my_supplier_id status=$supplier.status hidden="" update_controller="rf_stock_parser" popup_additional_class="`$popup_additional_class` dropleft"}
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}

        {include file="common/pagination.tpl"}

        <script>
            my_supplier_switch_parser_status();
        </script>

        {capture name="buttons"}
            <span class="mobile-hide shift-right">
            {capture name="tools_items"}
                {if $suppliers}
                    <li>{btn type="delete_selected" dispatch="dispatch[rf_stock_parser.m_delete]" form="suppliers_list_form"}</li>
                {/if}
            {/capture}
            {dropdown content=$smarty.capture.tools_items}
            </span>
        {/capture}
    </form>
{/capture}

{capture name="adv_buttons"}
    {btn type="text" title=__("add_my_supplier") class="btn btn-primary" href="rf_stock_parser.add.xls" icon="icon-plus icon-white" icon_first=true text="XLS/XLSX"}
    <span style="padding-left: 10px;">
        {btn type="text" text="XML" class="btn btn-primary" icon="icon-plus icon-white" icon_first=true href="rf_stock_parser.add.xml"}
    </span>
    <span style="padding-left: 10px;">
        {btn type="text" text="CSV" class="btn btn-primary" icon="icon-plus icon-white" icon_first=true href="rf_stock_parser.add.csv"}
    </span>
{/capture}

{include file="common/mainbox.tpl" title=__("rf_stock_parser") content=$smarty.capture.mainbox sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons}
