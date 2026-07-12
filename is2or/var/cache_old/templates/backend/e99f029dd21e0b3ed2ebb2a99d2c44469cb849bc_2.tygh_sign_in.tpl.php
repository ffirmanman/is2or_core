<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:01:42
  from 'tygh:buttons/sign_in.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4626ebd084_86597270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99f029dd21e0b3ed2ebb2a99d2c44469cb849bc' => 
    array (
      0 => 'buttons/sign_in.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69ae4626ebd084_86597270 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_arrow'=>"on",'but_role'=>$_smarty_tpl->getValue('but_role')), (int) 0, $_smarty_current_dir);
}
}
