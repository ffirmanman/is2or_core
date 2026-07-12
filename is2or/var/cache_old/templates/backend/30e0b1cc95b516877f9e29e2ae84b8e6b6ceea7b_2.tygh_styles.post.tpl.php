<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:addons/ab__scroll_to_top/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f64d794_53327534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e0b1cc95b516877f9e29e2ae84b8e6b6ceea7b' => 
    array (
      0 => 'addons/ab__scroll_to_top/hooks/index/styles.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad945f64d794_53327534 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__scroll_to_top/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__scroll_to_top/jquery.minicolors.css"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__scroll_to_top/styles.less"), $_smarty_tpl);?>

<?php }
}
