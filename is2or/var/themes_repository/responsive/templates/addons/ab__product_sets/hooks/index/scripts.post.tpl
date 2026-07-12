{script src="js/addons/ab__product_sets/sol.min.js"}
<script>
    (function (_, $) {
        var additional_params = [];
        var selected = [];

        function ab_init(elem) {
            var product_id = elem.data('caProductId');

            elem.searchableOptionList({
                showSelectAll: true,
                allowNullSelection: true,
                texts: {
                    noItemsAvailable: '{__('ab__ps.multiselect.noItemsAvailable')}',
                    selectAll: '{__('ab__ps.multiselect.selectAll')}',
                    selectNone: '{__('ab__ps.multiselect.selectNone')}',
                    searchplaceholder: '{__('ab__ps.multiselect.searchplaceholder')}',
                    close: '{__('close')}'

                },
                events: {
                    onInitialized: function (sol) {
                        $('#results_ab__product_sets').on('click', '.ab__ps-item_quick-delete', function () {
                            var p_id = $(this).data('caProductid');
                            if (sol !== null && p_id !== undefined) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', false).trigger('change');

                            }
                        });

                        if (selected.length) {
                            sol.$originalElement.val(selected);
                            $.each(selected, function (k,p_id) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', true);
                            });
                            sol.config.events.onChange(sol);
                        }
                    },
                    onRendered: function (sol) {
                        sol.$showSelectionContainer.hide();
                    },
                    onChange: function (sol){
                        selected = sol.$originalElement.val();
                        $.ceAjax('request', fn_url('ab__product_sets.calculate'), {
                            method: 'post',
                            data: {
                                selected_products: selected,
                                product_id: product_id,
                                params: additional_params[product_id] || []
                            },
                            callback: function (data) {
                                $('#results_ab__product_sets').html(data.text);
                            }
                        });
                    }
                }
            });
        }

        $(document).ready(function () {
            var elem = $('#ab__product_sets');
            elem.length && ab_init(elem);

            $.ceEvent('on', 'ce.commoninit', function(context) {
                var elem = $('#ab__product_sets', context);
                elem.each(function () {
                    ab_init($(this));
                });
            });

            $.ceEvent('on', 'ce.product_option_changed', function(obj_id, id, option_id, update_ids, params) {
                additional_params[id] = params;
            });

            $.ceEvent('on', 'dispatch_event_pre', function (e, jelm, processed) {
                var wrapper = $(e.target).closest('.sol-container.sol-active');
                if (wrapper.length) {
                    processed.status = true;
                }
            });
        });
    })(Tygh, Tygh.$);
</script>