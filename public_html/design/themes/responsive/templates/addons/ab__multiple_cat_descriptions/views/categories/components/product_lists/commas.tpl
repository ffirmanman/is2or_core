{foreach $ab__mcd_products as $product}
<a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product}</a>{if !$product@last}, {/if}
{/foreach}