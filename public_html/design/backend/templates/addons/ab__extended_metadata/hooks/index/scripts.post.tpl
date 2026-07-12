<script>
(function (_,$) {
var tooltips = {fn_get_schema("ab__extended_metadata", "tooltips")|json_encode nofilter};
var text = "{__("ab__emd.placeholders.tooltip_link")}";
var header = "{__("ab__extended_metadata")}";
var url = "{fn_url("ab__emd.placeholders_list")}";
$.each(tooltips, function (selector, dispatch) {
var input = $(selector);
var link = $('<a></a>').attr({
href: url + '&frontend_dispatch=' + dispatch,
class: 'ab-emd-placeholders_link cm-ajax cm-dialog-opener',
'data-ca-dialog-title': header,
}).html(text);
if (input.length) {
input.after(link);
}
});
})(Tygh, Tygh.$);
</script>