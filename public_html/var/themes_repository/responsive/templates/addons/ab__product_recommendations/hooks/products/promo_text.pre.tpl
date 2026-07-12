{if $product.ab__product_recommendations}
    {include file="addons/ab__product_recommendations/views/products/components/recommended_product.tpl" recommended_product=$product.ab__product_recommendations|reset}
{/if}
