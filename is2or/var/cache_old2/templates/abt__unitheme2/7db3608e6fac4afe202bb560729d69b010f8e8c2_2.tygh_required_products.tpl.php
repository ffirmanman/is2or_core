<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/required_products/blocks/product_tabs/required_products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaad78e95_12998523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3608e6fac4afe202bb560729d69b010f8e8c2' => 
    array (
      0 => 'addons/required_products/blocks/product_tabs/required_products.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:blocks/list_templates/products_list.tpl' => 2,
    'tygh:blocks/list_templates/compact_list.tpl' => 2,
  ),
))) {
function content_69afafaad78e95_12998523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/required_products/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['required_products']) {?>

	<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "grid_list") {?>
	
		<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>
		<?php $_smarty_tpl->assign('columns', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'columns'=>$_smarty_tpl->getValue('columns'),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "product_list") {?>
		<?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>
		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'show_product_status'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_product_options'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_options'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_options'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "compact_list") {?>
		<?php $_smarty_tpl->assign('tmpl', 'short_list', false, NULL);?>
		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'show_product_status'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>	
	<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/blocks/product_tabs/required_products.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/required_products/blocks/product_tabs/required_products.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['required_products']) {?>

	<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "grid_list") {?>
	
		<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>
		<?php $_smarty_tpl->assign('columns', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['item_quantity'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);?>

		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'columns'=>$_smarty_tpl->getValue('columns'),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>false,'show_product_options'=>false,'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'hide_qty_label'=>true,'show_min_qty'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__grid",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "product_list") {?>
		<?php $_smarty_tpl->assign('tmpl', 'products_without_options', false, NULL);?>
		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'show_product_status'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_discount_label'=>true,'show_shipping_label'=>false,'show_product_amount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_product_options'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_options'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_options'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'show_custom_class'=>"ut2-rp__products",'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_required_products']['list_type'][$_smarty_tpl->getValue('settings')['ab__device']] === "compact_list") {?>
		<?php $_smarty_tpl->assign('tmpl', 'short_list', false, NULL);?>
		<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('product')['required_products'],'show_product_status'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'details_page'=>false,'show_name'=>true,'show_sku'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_rating'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_qty'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'hide_qty_label'=>true,'show_shipping_label'=>false,'show_product_options'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_list_buttons'=>false,'but_role'=>"action",'hide_form'=>true,'show_custom_class'=>"ut2-rp__compact",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), (int) 0, $_smarty_current_dir);
?>	
	<?php }
}
}
}
}
