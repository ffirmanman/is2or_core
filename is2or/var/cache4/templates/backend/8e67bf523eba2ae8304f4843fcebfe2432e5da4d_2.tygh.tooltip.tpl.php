<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:55:21
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683456a96b1fa7_94733398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e67bf523eba2ae8304f4843fcebfe2432e5da4d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/tooltip.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683456a96b1fa7_94733398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip flex-inline link--monochrome <?php if ($_smarty_tpl->tpl_vars['position']->value === "middle") {?>vertical-align-middle<?php } else { ?>top<?php }
if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question_sign",'class'=>"cs-tooltip__icon"),$_smarty_tpl);?>
</a><?php }
}
}
