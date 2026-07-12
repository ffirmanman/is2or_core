<script>
    (function(_, $){
        _.tr({
            'ab__ecw.comparison_lists': '{__("ab__ecw.comparison_lists")|escape:"javascript"}',
            'ab__ecw.link_was_copied': '{__("ab__ecw.link_was_copied")|escape:"javascript"}',

            {if $addons.ab__extended_comparison_wishlist.features_filter_behavior == "highlight_differences"}
                'ab__ecw.different_only': '{__("different_only")|escape:"javascript"}',
                'ab__ecw.all_features': '{__("all_features")|escape:"javascript"}',
            {/if}
        });

        $.extend(_, {
            ab__ecw: {
                settings: {
                    group_comparison_lists: Boolean({$addons.ab__extended_comparison_wishlist.group_comparison_lists === "YesNo::YES"|enum}),
                    open_compare_page_with_add_button: Boolean({$addons.ab__extended_comparison_wishlist.open_compare_page_with_add_to_compare_button === "YesNo::YES"|enum})
                },
                runtime: {
                    theme: '{$app["storefront"]->theme_name}',
                    features_compare_url: '{"product_features.compare"|fn_url}',
                    device: '{$settings.abt__device}',
                },
                comparison_list: Object.values({json_encode($app["session"]["comparison_list"]|default:[]) nofilter}),
            },
        });
    })(Tygh, Tygh.$);
</script>
{script src="js/addons/ab__extended_comparison_wishlist/func.js"}