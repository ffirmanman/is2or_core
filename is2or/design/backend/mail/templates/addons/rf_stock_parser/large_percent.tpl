{include file="common/letter_header.tpl"}

Парсер - <a href="{"rf_stock_parser.update?my_supplier_id=`$id`"|fn_url:'A':'http'}">{$name}</a>

{foreach from=$items item="item"}
<div>
    <a href="{"products.update?product_id=`$item.product_id`"|fn_url:'A':'http'}">{$item.product}</a> {$item.p_price}%
</div>
{/foreach}

{include file="common/letter_footer.tpl"}
