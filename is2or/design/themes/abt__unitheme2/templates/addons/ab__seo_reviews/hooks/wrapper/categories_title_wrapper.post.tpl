{if $reviews_page.posts_count}
    <span class="ab-sr__pp">
    {$integer_rating = $reviews_page.average_rating|floor}
    {$accurate_rating = $reviews_page.average_rating|round:1}
    {$is_half_rating = (($reviews_page.average_rating - $integer_rating) >= 0.25 && ($reviews_page.average_rating - $integer_rating) < 0.75)}
    {$integer_rating_math = $reviews_page.average_rating|round:0}
    {$full_stars_count = ($is_half_rating) ? $integer_rating : $integer_rating_math}

    {if $reviews_page.average_rating}
        <span class="ty-product-review-reviews-stars"
            data-ca-product-review-reviews-stars-rating="{$reviews_page.average_rating|round}"
            data-ca-product-review-reviews-stars-full="{$full_stars_count}"
            data-ca-product-review-reviews-stars-is-half="{$is_half_rating}">
        </span>
    {else}
        <span class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></span>
    {/if}

    <a href="{fn_url("ab__seo_reviews.view_category?category_id=`$reviews_page.object_id`")}" title="" class="ab-sr__link"><i class="ut2-icon-outline-chat"></i> {$reviews_page.posts_count} {__("reviews", [$reviews_page.posts_count])}</a>
    </span>
{/if}