{if !$hide_header}
{include file="common/subheader.tpl" title=__("ab__custom_h1") target="#ab__custom_h1"}
{/if}
<div id="ab__custom_h1" class="in collapse{if !"ab__ch1.manage"|fn_check_view_permissions} cm-hide-inputs{/if}">
<div class="control-group">
<label class="control-label cm-trim" for="elm_ab__custom_{$object_type}_h1">{if !$lang_var}{__("ab__ch1.{$object_type}")}{else}{__("ab__ch1.{$lang_var}")}{/if}:</label>
<div class="controls">
<div class="input-group {$input_append_if_shared_product}">
<input type="text" name="{$object_type}_data[ab__custom_{$object_type}_h1]" id="elm_ab__custom_{$object_type}_h1" size="30" value="{${$object_type}_data.{"ab__custom_`$object_type`_h1"}}" class="input-large" />
{include file="buttons/update_for_all.tpl"
display=$show_update_for_all
object_id="ab__custom_product_h1"
name="update_all_vendors[ab__custom_product_h1]"
component="products.ab__custom_product_h1"
hide_inputs=$hide_inputs_if_shared_product
append=true
}
</div>
</div>
</div>
</div>