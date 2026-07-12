<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:buttons/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46792615c6_48084448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556f06f25f32eece412d956de769fd99c2a282d7' => 
    array (
      0 => 'buttons/search.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69ae46792615c6_48084448 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_button'));
?>

<?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_button", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_name'=>$_smarty_tpl->getValue('but_name'),'but_meta'=>$_smarty_tpl->getValue('but_meta')), (int) 0, $_smarty_current_dir);
}
}
