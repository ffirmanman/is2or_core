{if $reviews_page.posts_count}
    {$integer_rating = $reviews_page.average_rating|floor}
    {$accurate_rating = $reviews_page.average_rating|round:1}
    {$is_half_rating = (($reviews_page.average_rating - $integer_rating) >= 0.25 && ($reviews_page.average_rating - $integer_rating) < 0.75)}
    {$integer_rating_math = $reviews_page.average_rating|round:0}
    {$full_stars_count = ($is_half_rating) ? $integer_rating : $integer_rating_math}

    <a href="{fn_url("ab__seo_reviews.view_category?category_id=`$reviews_page.object_id`")}">
        <span class="ty-product-review-reviews-stars"
              data-ca-product-review-reviews-stars-rating="{$reviews_page.average_rating|round}"
              data-ca-product-review-reviews-stars-full="{$full_stars_count}"
              data-ca-product-review-reviews-stars-is-half="{$is_half_rating}"
        ></span>
        {$reviews_page.posts_count} {__("reviews", [$reviews_page.posts_count])}
    </a>
{/if}