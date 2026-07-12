<script language="javascript">
    (function(_,$){
        $(document).on("click", ".cp-fq-generate-anchor", function(){
            var q_id = $(this).attr('data-cp-id');
            var name_id = $(this).attr('data-cp-name-id');
            var anchor_id = $(this).attr('data-cp-anchor-id');
            if (name_id) {
                var q_name = $('#' + name_id).val();
            }
            if (q_name) {
                $.ceAjax('request', fn_url('cp_faq_addon.generate_anchor'), {
                    hidden: true,
                    full_render: false,
                    data: {
                        'q_name': q_name,
                        'id': q_id
                    },
                    callback: function (data) {
                        if (data && data.anchor) {
                            if (anchor_id) {
                                $('#' + anchor_id).val(data.anchor);
                            }
                        }
                    }
                });
            }
        });
    })(Tygh,Tygh.$);
</script>