<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:16:47
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/theme_editor/title.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bb3fc7dd93_59069529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f517e8011ec1f5d8805952c57cad0fcd21d2ff40' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/theme_editor/title.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bb3fc7dd93_59069529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><input type="hidden" name="style[abt__ut2_parent_style]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php echo htmlspecialchars((string) fn_abt__ut2_get_empty_core_color_variables(true), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/theme_editor/title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/theme_editor/title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><input type="hidden" name="style[abt__ut2_parent_style]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php echo htmlspecialchars((string) fn_abt__ut2_get_empty_core_color_variables(true), ENT_QUOTES, 'UTF-8');
}
}
}
