{** just add this hook in design/backend/templates/addons/product_variations/views/product_variations/components/product_item.tpl **}
{** to enable custom_h1 managment from variations lists **}
<div{if !"ab__ch1.manage"|fn_check_view_permissions} class="cm-hide-inputs"{/if}>
<input placeholder="{__('ab__ch1.product')}" class="input-full input-hidden product-variations__ab__ch1" type="text" name="products_data[{$product.product_id}][ab__custom_product_h1]" id="elm_ab__custom_product_h1_{$product.product_id}" size="30" value="{$product.ab__custom_product_h1}"/>
</div>