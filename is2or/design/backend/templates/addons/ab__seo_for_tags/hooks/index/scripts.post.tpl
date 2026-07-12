{if $runtime.controller == 'tags' && $runtime.mode == 'manage' && 'ab__seo_for_tags.update'|fn_check_view_permissions:'GET'}
<script>
(function (_, $) {
$.ceEvent('on', 'ce.commoninit', function (context) {
$('input[name^=tag_ids]', context).each(function() {
var input = $(this);
if (!input.data('ab__sft_inited')) {
var url = fn_url('ab__seo_for_tags.update?tag_id=' + this.value);
$(this).closest('tr').find('.hidden-tools .dropdown-menu').prepend('<li><a href="' + url + '">{__('ab__seo_for_tags.edit_seo_data')}</a></li>');
input.data('ab__sft_inited', true);
}
});
});
})(Tygh, Tygh.$);
</script>
{/if}
