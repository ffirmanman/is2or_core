<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:addons/ab__motivation_block/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f6746a9_38457743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9eb52c67ca2742cf97dbea4fbcc46c2b0ffbcc' => 
    array (
      0 => 'addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f6746a9_38457743 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__motivation_block/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__motivation_block/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__motivation_block/responsive_icons.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('runtime')['layout']['theme_name'],array('abt__youpitheme'))) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->getValue('runtime')['layout']['theme_name'])."_icons.less"), $_smarty_tpl);?>

<?php }
}
}
