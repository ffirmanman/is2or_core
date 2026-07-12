<ol>
    {foreach $ab__mcd_products as $product}
        <li><a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product}</a></li>
    {/foreach}
</ol>