<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:addons/advanced_import/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f628350_83256032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db340af39c948a24567cba4e0a77f4bd4f24c901' => 
    array (
      0 => 'addons/advanced_import/hooks/index/styles.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f628350_83256032 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/advanced_import/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/advanced_import/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/advanced_import/read_more.less"), $_smarty_tpl);
}
}
