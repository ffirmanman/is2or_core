<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:35
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834527fc327d1_42272009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e123058801822ea4d3c8e47784dbbf3d93c834a1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834527fc327d1_42272009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/common.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".less"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/common.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".less"),$_smarty_tpl);?>

<?php }
}
}
}
