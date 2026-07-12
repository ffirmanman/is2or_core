<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/hybrid_auth/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2f19cb5_08789570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303aa46938e56c22303238bc4100c99826fcf0d4' => 
    array (
      0 => 'addons/hybrid_auth/hooks/index/scripts.post.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2f19cb5_08789570 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/hybrid_auth/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/hybrid_auth/func.js"), $_smarty_tpl);
}
}
