<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/default_params/products_multicolumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c1b9392_10603277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee269b9ade538e8ff33f97e2db38cbcf5a7e68d2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/default_params/products_multicolumns.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc7c1b9392_10603277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_trunc_name', true ,false ,2);
$_smarty_tpl->_assignInScope('show_rating', true ,false ,2);
$_smarty_tpl->_assignInScope('show_old_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_clean_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none" ,false ,2);
$_smarty_tpl->_assignInScope('hide_qty_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_sku_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_amount_label', false ,false ,2);
$_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none" ,false ,2);
$_smarty_tpl->_assignInScope('show_sku', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_features', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations" ,false ,2);
$_smarty_tpl->_assignInScope('show_descr', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations" ,false ,2);
$_smarty_tpl->_assignInScope('show_brand_logo', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_list_buttons', false ,false ,2);
$_smarty_tpl->_assignInScope('but_role', "action" ,false ,2);
$_smarty_tpl->_assignInScope('is_category', true ,false ,2);
$_smarty_tpl->_assignInScope('show_product_labels', true ,false ,2);
$_smarty_tpl->_assignInScope('show_discount_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_shipping_label', true ,false ,2);
$_smarty_tpl->_assignInScope('ut2_load_more', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['product_list'] == smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/default_params/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/default_params/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_trunc_name', true ,false ,2);
$_smarty_tpl->_assignInScope('show_rating', true ,false ,2);
$_smarty_tpl->_assignInScope('show_old_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_clean_price', true ,false ,2);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none" ,false ,2);
$_smarty_tpl->_assignInScope('hide_qty_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_sku_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_amount_label', false ,false ,2);
$_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none" ,false ,2);
$_smarty_tpl->_assignInScope('show_sku', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_qty', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_features', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations" ,false ,2);
$_smarty_tpl->_assignInScope('show_descr', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations" ,false ,2);
$_smarty_tpl->_assignInScope('show_brand_logo', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") ,false ,2);
$_smarty_tpl->_assignInScope('show_list_buttons', false ,false ,2);
$_smarty_tpl->_assignInScope('but_role', "action" ,false ,2);
$_smarty_tpl->_assignInScope('is_category', true ,false ,2);
$_smarty_tpl->_assignInScope('show_product_labels', true ,false ,2);
$_smarty_tpl->_assignInScope('show_discount_label', true ,false ,2);
$_smarty_tpl->_assignInScope('show_shipping_label', true ,false ,2);
$_smarty_tpl->_assignInScope('ut2_load_more', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['product_list'] == smarty_modifier_enum("YesNo::YES") ,false ,2);
}
}
}
