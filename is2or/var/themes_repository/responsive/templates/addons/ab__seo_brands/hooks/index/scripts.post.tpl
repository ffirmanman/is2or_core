<script>
    (function (_,$) {
        function _attachToUrl(url, param, value) {
            var pattern = new RegExp(param + '=[^&$]+');
            return url.search(pattern) > 0 ? url.replace(pattern, param + '=' + value) : $.attachToUrl(url, param + '=' + value);
        }
        $('.ab_sb_filter-wrapper').on('click', '.ab_sb_filter-item', function () {
            var self = $(this);
            var parent = self.closest('.ab_sb_filter');
            var result_ids = parent.data('ca-target-id');
            var base_url = parent.find('input[name="base_url"]');

            if (base_url.length) {
                var url = _attachToUrl(base_url.val(), 'cid', self.data('ca-category-id'));

                $.ceAjax('request', url, {
                    result_ids: result_ids,
                    full_render: true,
                    save_history: true,
                    caching: false,
                    scroll: '.ty-mainbox-title',
                    callback: function (response) {
                        /* workaround for filters base_url */
                        var filter = $('.cm-product-filters');
                        if (filter.length && filter.data('caBaseUrl')) {
                            filter.data('caBaseUrl', _attachToUrl(filter.data('caBaseUrl'), 'cid', self.data('ca-category-id')));
                            $.ceEvent('trigger', 'ce.commoninit', [filter.parent()]);
                        }
                    }
                });
            }

            return false;
        });
    })(Tygh, Tygh.$);
</script>