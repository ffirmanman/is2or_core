{strip}
    {if $addons.ab__seo_product_tabs.add_tabs_fixed_panel === 'YesNo::YES'|enum &&
        $settings.Appearance.product_details_in_tab === 'YesNo::NO'|enum &&
        $runtime.controller === 'products' && $runtime.mode === 'view'
    }
        <script>
            (function (_, $) {
                const extend_obj = {
                    ab__spt: {
                        params: {
                            top_offset: 0,
                            theme_name: "{$runtime.layout.theme_name}",
                            product_id: {$product.product_id}
                        }
                    }
                };

                if (_?.ab__spt?.functions) {
                    extend_obj.ab__spt.functions = _.ab__spt.functions;
                }

                $.extend(_, extend_obj);
            })(Tygh, Tygh.$);
        </script>

        {script src="js/addons/ab__seo_product_tabs/func.js"}
    {/if}
{/strip}