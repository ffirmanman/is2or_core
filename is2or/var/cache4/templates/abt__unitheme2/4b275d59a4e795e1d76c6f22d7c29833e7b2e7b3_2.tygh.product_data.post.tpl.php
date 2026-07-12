<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c8a77534_00476604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b275d59a4e795e1d76c6f22d7c29833e7b2e7b3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_data.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683455c8a77534_00476604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('c_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->tpl_vars['details_page']->value && strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['c_name']->value),'checkout.add..')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__ip_cart_button_id", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('c_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if ($_smarty_tpl->tpl_vars['details_page']->value && strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['c_name']->value),'checkout.add..')) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ab__ip_cart_button_id", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
