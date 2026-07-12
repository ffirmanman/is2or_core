<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b57f537_08154160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e5cc4841f2535de55f2569254eb1a3f4169431' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/product_data.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/sticky_add_to_cart.tpl' => 2,
  ),
),false)) {
function content_682fe21b57f537_08154160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__service_buttons_id", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();
echo htmlspecialchars((string) str_replace("/","_",substr((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['template'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),0,-4)), ENT_QUOTES, 'UTF-8');
$_prefixVariable44 = ob_get_clean();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected_layout']->value ?? null)===null||$tmp==='' ? $_prefixVariable44 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_smarty_tpl->_assignInScope('sticky_add_to_cart_position', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
if ($_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value !== "none" && $_smarty_tpl->tpl_vars['details_page']->value && strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['c_name']->value),'checkout.add..') && $_REQUEST['dispatch'] == 'products.view') {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/sticky_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sticky_add_to_cart_position'=>$_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__service_buttons_id", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']) {?>ut2_list_buttons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php ob_start();
echo htmlspecialchars((string) str_replace("/","_",substr((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['template'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),0,-4)), ENT_QUOTES, 'UTF-8');
$_prefixVariable45 = ob_get_clean();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected_layout']->value ?? null)===null||$tmp==='' ? $_prefixVariable45 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_smarty_tpl->_assignInScope('sticky_add_to_cart_position', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
if ($_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value !== "none" && $_smarty_tpl->tpl_vars['details_page']->value && strpos($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['c_name']->value),'checkout.add..') && $_REQUEST['dispatch'] == 'products.view') {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/sticky_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sticky_add_to_cart_position'=>$_smarty_tpl->tpl_vars['sticky_add_to_cart_position']->value), 0, true);
}
}
}
}
