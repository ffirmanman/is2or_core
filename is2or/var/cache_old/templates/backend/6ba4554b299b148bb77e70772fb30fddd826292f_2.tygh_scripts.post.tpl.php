<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/ab__fast_navigation/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9461188179_98259956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ba4554b299b148bb77e70772fb30fddd826292f' => 
    array (
      0 => 'addons/ab__fast_navigation/hooks/index/scripts.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9461188179_98259956 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__fast_navigation/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__fast_navigation/ab__fn_admin.js"), $_smarty_tpl);
}
}
