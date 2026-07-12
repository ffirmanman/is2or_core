<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:12
  from 'tygh:buttons/save.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55241eeef2_28742275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dac5d8442c238b31db1a4007f762fd44b4cd481' => 
    array (
      0 => 'buttons/save.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69fb55241eeef2_28742275 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('save'));
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_name'=>$_smarty_tpl->getValue('but_name'),'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'allow_href'=>true,'is_btn_primary'=>$_smarty_tpl->getValue('is_btn_primary')), (int) 0, $_smarty_current_dir);
}
}
