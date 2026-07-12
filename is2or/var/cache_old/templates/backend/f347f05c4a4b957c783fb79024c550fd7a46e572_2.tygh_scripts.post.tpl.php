<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/vendor_communication/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94610e30a7_68656677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f347f05c4a4b957c783fb79024c550fd7a46e572' => 
    array (
      0 => 'addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94610e30a7_68656677 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_communication/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"), $_smarty_tpl);
}
}
