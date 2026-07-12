<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04d0d96c8_35271675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f97e3368549f9da041ab46ab8debe58ad5ef6e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/styles.post.tpl',
      1 => 1736834968,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe04d0d96c8_35271675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/ab__addons_manager/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__addons_manager/icons.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__addons_manager/upgrade_center.less"),$_smarty_tpl);
}
}
