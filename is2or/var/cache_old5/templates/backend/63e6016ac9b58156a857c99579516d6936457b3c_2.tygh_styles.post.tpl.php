<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:addons/ab__addons_manager/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed15ca100_74947952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63e6016ac9b58156a857c99579516d6936457b3c' => 
    array (
      0 => 'addons/ab__addons_manager/hooks/index/styles.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed15ca100_74947952 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__addons_manager/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__addons_manager/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__addons_manager/icons.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__addons_manager/upgrade_center.less"), $_smarty_tpl);
}
}
