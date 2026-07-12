<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:37
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/show_features_conditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c91c45d9_60630229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78690bb5fd2fabe2f757cfceab034d3f332621bb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/show_features_conditions.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683455c91c45d9_60630229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ((($tmp = $_smarty_tpl->tpl_vars['show_features']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>
	
		<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit'] > 0 && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "variations") {?>
		<?php $_smarty_tpl->_assignInScope('show_features', true ,false ,2);?>
		<?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations") {?>
		<?php $_smarty_tpl->_assignInScope('show_features', true ,false ,2);?>
		<?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>

		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] > 0) {?>
        <?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],true));
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/show_features_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/components/show_features_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((($tmp = $_smarty_tpl->tpl_vars['show_features']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>
	
		<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['limit'] > 0 && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "variations") {?>
		<?php $_smarty_tpl->_assignInScope('show_features', true ,false ,2);?>
		<?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>

	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations") {?>
		<?php $_smarty_tpl->_assignInScope('show_features', true ,false ,2);?>
		<?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,0,true));?>

		
	<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] > 0) {?>
        <?php $_smarty_tpl->_assignInScope('products', fn_abt__ut2_add_products_features_list($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],true));
}
}
}
}
