<script>
(function (_, $) {
$.ceEvent('on', 'ce.object_picker.inited', function (params) {
if (params.$elem.hasClass('ab--sf-picker')) {
let ajaxUrl = $.attachToUrl(params.options.ajaxUrl, 'ab__sf_picker=1');
params.options.ajaxUrl = ajaxUrl;
params.$elem.attr('data-ca-object-picker-ajax-url',ajaxUrl);
params.$elem.on('select2:select', function(e){
var id = e.params.data.id;
var option = $(e.target).children('[value='+id+']');
option.detach();
$(e.target).append(option).change();
}).on('change', function(e){
$("#sequence_features").val($(e.target).val().join(','));
});
var select2Options = params.$elem.data('select2').options.options
select2Options.ajax.url=ajaxUrl;
params.$elem.select2(select2Options);
}
})
$('.cm-reset-link').on('click', function(){
setTimeout(()=>{
$('.ab--sf-picker-reset').val(null).trigger("change");
}),0})
})(Tygh, Tygh.$);
</script>
