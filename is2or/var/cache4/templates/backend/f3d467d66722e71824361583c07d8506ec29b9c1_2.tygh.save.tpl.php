<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:15:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/buttons/save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345b480b04b2_25443705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d467d66722e71824361583c07d8506ec29b9c1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/buttons/save.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_68345b480b04b2_25443705 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true,'is_btn_primary'=>$_smarty_tpl->tpl_vars['is_btn_primary']->value), 0, false);
}
}
