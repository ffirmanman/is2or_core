{assign var="id" value=$id|default:"my_supplier_id"}
{assign var="name" value=$name|default:"my_supplier_id"}

<div class="{$class|default:"control-group"}">
    <input type="hidden" name="{$name}" id="{$id}" value="{$search.my_supplier_id|default:''}" />
    <label class="control-label">{__("my_search_by_supplier")}</label>
    <div class="controls">
        {include
            file="common/ajax_select_object.tpl"
            data_url="rf_stock_parser.get_my_suppliers_list?show_all=Y&search=Y"
            text=$search.my_supplier_id|fn_get_my_supplier_name
            result_elm=$id
            id="`$id`_selector"
        }
    </div>
</div>