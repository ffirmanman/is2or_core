<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:26
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd4a256da4_22516857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7896d5f89eb5c543c53b4b8d014397e0507854a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1736835084,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd4a256da4_22516857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/responsive_icons.less"),$_smarty_tpl);?>

<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'],array('abt__youpitheme'))) {
echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'])."_icons.less"),$_smarty_tpl);?>

<?php }
}
}
