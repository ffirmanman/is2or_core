<script>
    (function (_, $) {
        {$productColumns = $settings.Appearance.columns_in_products_list}
        {if $category_data.product_columns}
            {$productColumns = $category_data.product_columns}
        {/if}
        const productColumns = {$productColumns};

        const getNumberPerRow = () => {
            let MIN_WIDTH_BREAKPOINT = 218;
            const container = document.querySelector("#pagination_contents .grid-list > #categories_view_pagination_contents") || document.querySelector("#pagination_contents .grid-list > .ut2-gl__wrap") || document.querySelector('#pagination_contents .grid-list');
            const minElems = container.querySelectorAll(':scope > :not(.full-width)')
            if (minElems) {
                MIN_WIDTH_BREAKPOINT = Math.min(...(Array.from(minElems).slice(0, 10).map(e => parseInt(window.getComputedStyle(e).width)).filter(i => i)))
            }
            const calculatedPerRow = Math.floor((container.clientWidth || container.parentElement.clientWidth) / MIN_WIDTH_BREAKPOINT);
            return Math.min(productColumns, calculatedPerRow);
        }


        const findInitialIndex = (items, node) => {
            let initialIndex = 1
            for (const item of items) {
                if (!item.classList.contains('full-width') && item !== node) {
                    initialIndex++
                } else if (item === node) {
                    return initialIndex
                }
            }
        }

        const moveBanners = $.debounce(() => {
            const $allItems = $('.category-banner-block.full-width').parent().children(':not(:empty)')
            const $banners = $allItems.filter('.category-banner-block.full-width')

            if (!$allItems.length || !$banners.length) return

            const $items = $allItems.filter(':not(.category-banner-block.full-width)')
            const itemsInRow = getNumberPerRow()

            $banners.each((index, banner) => {
                const $banner = $(banner)
                const initialIndex = $banner.data('ca-position') || findInitialIndex($allItems.get(), banner)

                if (!$(banner).data('ca-position')) $banner.data('ca-position', initialIndex)

                const targetRow = Math.ceil(initialIndex / itemsInRow)
                const insertIndex = (targetRow - 1) * itemsInRow

                if ($banner.data('ca-current-position') !== insertIndex) {
                    $(banner).insertBefore($items[insertIndex]).data('ca-current-position', insertIndex)
                }
            })
        })

        $(document).ready(function (e) {
            moveBanners();
            $(window).on('resize', moveBanners);
        })

    })(Tygh, Tygh.$);
</script>
