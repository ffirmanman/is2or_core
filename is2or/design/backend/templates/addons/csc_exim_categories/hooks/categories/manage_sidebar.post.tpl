{if fn_check_permissions('categories', 'update', 'admin')}
<script>
	var ceca_link = '<li class=""><a class="cm-process-items cm-submit " data-ca-target-form="category_tree_form"  data-ca-dispatch="dispatch[categories.export_range]">{__("export_selected")}</a></li> <li class=""><a class="cm-process-items cm-submit " data-ca-target-form="category_tree_form"  data-ca-dispatch="dispatch[categories.export_range_products]">{__("ceca.export_selected_products")}</a></li>';
	$('.btn-toolbar .btn-group .dropdown-menu').append(ceca_link);

</script>

{/if}
