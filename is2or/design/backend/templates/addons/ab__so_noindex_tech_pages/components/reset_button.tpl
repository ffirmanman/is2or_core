<script>
let reset_canonical_object = () => {
let pickerId = $('[id^="ab__canonical_id_"]:not(.cm-js-item)').attr('id');
$.cePicker('add_js_item', pickerId,
{
{$object_id}: ""
},
'{$prefix}'
);
}
</script>
<a onclick="reset_canonical_object(); return false;">
{__("ab__so_ntp.form.reset")}
</a>
