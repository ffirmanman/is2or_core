<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/addons/action_buttons.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc403ce921_90245339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8caff1f3cfe7c42c79d499d848749017433c862' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/addons/action_buttons.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6835bc403ce921_90245339 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.download_config'));
if ($_smarty_tpl->tpl_vars['_addon']->value == "mobile_app") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_form",'but_meta'=>"cm-submit hidden cm-addons-save-changeable-settings"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_meta'=>"cm-post cm-ajax cm-comet cm-addons-download-config hidden btn-primary",'but_href'=>"mobile_app.download_config?storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value),'but_text'=>$_smarty_tpl->__("mobile_app.download_config")), 0, false);
}
}
}
