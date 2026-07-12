{if $ab__mcd_products}
    <table class="ty-table">
        <thead>
            <tr>
                <th>{__("product")}</th>
                <th>{__("price")}</th>
            </tr>
        </thead>
        <tbody>
        {foreach $ab__mcd_products as $product}
            <tr>
                <td><a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product}</a></td>
                <td>{include file="common/price.tpl" value=$product.price}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/if}