{hook name="ab__extended_comparison_wishlist:product_item_rating"}
    {strip}
	<div class="ab-ec-product-item__rating yt-rating-stars">
        {hook name="products:dotd_product_label"}{/hook}
        {hook name="products:video_gallery"}{/hook}
        {if $addons.product_reviews.status == "ObjectStatuses::ACTIVE"|enum}
            {if $product.average_rating}
                {include file="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"
                    rating=$product.average_rating
                    link=true
                    product=$product
                }
            {else}
                <div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div>
            {/if}
            {if $product.product_reviews_count}<div class="cn-reviews">({$product.product_reviews_count})</div>{/if}
        {else}
            {assign var="rating" value="rating_$obj_id"}
            {if $smarty.capture.$rating|strlen > 40 && $product.discussion_type && $product.discussion_type != "D"}
                {$smarty.capture.$rating nofilter}
            {elseif $addons.discussion.status == "ObjectStatuses::ACTIVE"|enum}
                 <span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
            {/if}
        {/if}
    </div>
    {/strip}
{/hook}