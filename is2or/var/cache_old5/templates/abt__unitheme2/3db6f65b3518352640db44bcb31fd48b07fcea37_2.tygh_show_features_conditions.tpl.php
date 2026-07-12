<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:57
  from 'tygh:blocks/product_list_templates/components/show_features_conditions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6dacd268_00754229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db6f65b3518352640db44bcb31fd48b07fcea37' => 
    array (
      0 => 'blocks/product_list_templates/components/show_features_conditions.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6dacd268_00754229 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ((($tmp = $_smarty_tpl->getValue('show_features') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>
	
		<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'] > 0 && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations") {?>
		<?php $_smarty_tpl->assign('show_features', true, false, 2);?>
		<?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
		<?php $_smarty_tpl->assign('show_features', true, false, 2);?>
		<?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>

		
	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
        <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'],true), false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/show_features_conditions.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_list_templates/components/show_features_conditions.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((($tmp = $_smarty_tpl->getValue('show_features') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>
	
		<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'] > 0 && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "variations") {?>
		<?php $_smarty_tpl->assign('show_features', true, false, 2);?>
		<?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>

	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations") {?>
		<?php $_smarty_tpl->assign('show_features', true, false, 2);?>
		<?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),0,true), false, 2);?>

		
	<?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
        <?php $_smarty_tpl->assign('products', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_add_products_features_list')($_smarty_tpl->getValue('products'),$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'],true), false, 2);
}
}
}
}
