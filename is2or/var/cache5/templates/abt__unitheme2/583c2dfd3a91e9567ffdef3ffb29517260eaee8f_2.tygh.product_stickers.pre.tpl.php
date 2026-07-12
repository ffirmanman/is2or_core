<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:14:19
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835baabcbfa44_60880681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583c2dfd3a91e9567ffdef3ffb29517260eaee8f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835baabcbfa44_60880681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><input type="hidden" name="ab__stickers_output_side" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/ab__stickers/product_stickers.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><input type="hidden" name="ab__stickers_output_side" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
