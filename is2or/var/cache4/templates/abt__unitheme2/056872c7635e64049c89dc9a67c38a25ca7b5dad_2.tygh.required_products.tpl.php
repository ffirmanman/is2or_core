<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/required_products/blocks/product_tabs/required_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571d5dc461_01769369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056872c7635e64049c89dc9a67c38a25ca7b5dad' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/required_products/blocks/product_tabs/required_products.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:blocks/list_templates/products_list.tpl' => 2,
    'tygh:blocks/list_templates/compact_list.tpl' => 2,
  ),
),false)) {
function content_6834571d5dc461_01769369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "grid_list") {?>
	
		<?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>
		<?php $_smarty_tpl->_assignInScope('columns', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'columns'=>$_smarty_tpl->tpl_vars['columns']->value,'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description",'show_brand_logo'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, false);
?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "product_list") {?>
		<?php $_smarty_tpl->_assignInScope('tmpl', 'products_without_options');?>
		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_product_options'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, false);
?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "compact_list") {?>
		<?php $_smarty_tpl->_assignInScope('tmpl', 'short_list');?>
		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, false);
?>	
	<?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/blocks/product_tabs/required_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/blocks/product_tabs/required_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "grid_list") {?>
	
		<?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>
		<?php $_smarty_tpl->_assignInScope('columns', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);?>

		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'columns'=>$_smarty_tpl->tpl_vars['columns']->value,'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description",'show_brand_logo'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, true);
?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "product_list") {?>
		<?php $_smarty_tpl->_assignInScope('tmpl', 'products_without_options');?>
		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_product_options'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_options'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, true);
?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "compact_list") {?>
		<?php $_smarty_tpl->_assignInScope('tmpl', 'short_list');?>
		<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>smarty_modifier_enum("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, true);
?>	
	<?php }
}
}
}
}
