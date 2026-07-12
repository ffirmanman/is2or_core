<section class="ty-product-review-product-stars-details">
    {section name=stat_item start=5 loop=6 max=5 step=-1}
        {$stars_count = $smarty.section.stat_item.index}
        {$percent = $statistic[$stars_count]|default:0}

        <div class="ty-product-review-product-star-line">
            <div class="ty-product-review-product-star-line__quantity">{__("n_stars", [$stars_count])}</div>
            <progress class="ty-product-review-product-star-line__line" max="100" value="{$percent}"></progress>
            <div class="ty-product-review-product-star-line__percentage">{$percent}%</div>
        </div>
    {/section}
</section>