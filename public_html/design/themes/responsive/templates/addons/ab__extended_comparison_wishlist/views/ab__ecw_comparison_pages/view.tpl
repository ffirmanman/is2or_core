{strip}
{capture name="mainbox_title"}{$page.name}{/capture}

<div class="ab-ecw-page">
    {hook name="ab__extended_comparison_wishlist:comparison_page_date"}
        <span class="ab-ecw-page__date">{$page.timestamp|date_format:$settings.Appearance.date_format}</span>
    {/hook}

    {if $page.main_pair}
        {hook name="ab__extended_comparison_wishlist:comparison_page_image"}
            <div class="ab-ecw-page__image">
                {include file="common/image.tpl" images=$page.main_pair}
            </div>
        {/hook}
    {/if}

    <script>
        (function(_, $){
            $.ceEvent('on', 'ce.commoninit', function(context) {
                var table = context.find('#comparison_table_{$page.page_id}');

                if (table.length) {
                    $.getScript('js/lib/tablesorter/jquery.tablesorter.combined.min.js', function () {
                        table.tablesorter({
                            sortList: [[0, 0], [1, 0]],
                            headers: {
                                2: { sorter: 'digit' }
                            },
                        });
                    });
                }
            });
        })(Tygh, Tygh.$);
    </script>

    {hook name="ab__extended_comparison_wishlist:comparison_page_table"}
        <table id="comparison_table_{$page.page_id}" class="ty-table ty-table--sorter">
            <thead>
            <tr>
                {hook name="ab__extended_comparison_wishlist:comparison_page_table_head"}
                    {if $settings.ab__device !== "mobile"}
                        <th class="hidden-phone">{__("ab__ecw.comparison_pages.table_title")}</th>
                    {/if}
                    <th>{__("name")}</th>
                    <th>{__("price")}</th>
                {/hook}
            </tr>
            </thead>
            <tbody>
                {foreach $products as $product}
                    <tr>
                        {hook name="ab__extended_comparison_wishlist:comparison_page_table_row"}
                            {if $settings.ab__device !== "mobile"}
                                <td class="hidden-phone">{$product@iteration}</td>
                            {/if}
                            <td><a href="{"products.view?product_id=`$product.product_id`"|fn_url}" target="_blank" {live_edit name="product:product:{$product.product_id}"}>{$product.product}</a></td>
                            <td><b>{include file="common/price.tpl" value=$product.price live_editor_name="product:price:{$product.product_id}"}</b></td>
                        {/hook}
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {/hook}


    {if $page.short_description}
        <div class="ab-ecw-page__short-description ty-wysiwyg-content">
            {$page.short_description nofilter}
        </div>
    {/if}

    {$item_qty = $products|count}

    {$thumbnail_width = 300}
    {if $item_qty > 3}
        {$thumbnail_width = 200}
    {elseif $item_qty > 2}
        {$thumbnail_width = 250}
    {/if}

    {$block = [
    "block_id" => "ab__ecw_main_compare",
    "properties" => [
        "show_company_name" => "YesNo::YES"|enum,
        "ab__ecw_enable_add_to_compare" => "YesNo::NO"|enum,
        "enable_quick_view" => "YesNo::YES"|enum,
        "outside_navigation" => "YesNo::NO"|enum,
        "thumbnail_width" => $thumbnail_width,
        "show_price" => "YesNo::YES"|enum,
        "item_quantity" => min($item_qty, 4),
        "ab__ecw_enable_add_more" => "YesNo::NO"|enum,
        "ab__ecw_enable_scroller" => "YesNo::YES"|enum,
        "hide_add_to_cart_button" => "YesNo::NO"|enum
        ]
    ]}

    {include file="addons/ab__extended_comparison_wishlist/blocks/products/ab__ecw_list_with_features.tpl" dots=true block=$block items=$products _template="top_name"}

    {if $page.description}
        <div class="ab-ecw-page__description ty-wysiwyg-content">
            {$page.description nofilter}
        </div>
    {/if}
</div>
{/strip}