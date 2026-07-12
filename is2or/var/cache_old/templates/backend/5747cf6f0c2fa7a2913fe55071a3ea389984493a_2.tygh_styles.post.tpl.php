<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:addons/ss_deepl/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f614d71_10674359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5747cf6f0c2fa7a2913fe55071a3ea389984493a' => 
    array (
      0 => 'addons/ss_deepl/hooks/index/styles.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f614d71_10674359 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ss_deepl/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ss_deepl/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ss_deepl/use.fontawesome.css"), $_smarty_tpl);
}
}
