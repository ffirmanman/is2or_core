<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:41
  from 'tygh:addons/mobile_app/hooks/addons/action_buttons.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cd61feb0_38006612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed1890c9ef1793e3ff285e65a3e85fe0c39c4ea' => 
    array (
      0 => 'addons/mobile_app/hooks/addons/action_buttons.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69aed9cd61feb0_38006612 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/mobile_app/hooks/addons';
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.download_config'));
if ($_smarty_tpl->getValue('_addon') == "mobile_app") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->getValue('_addon'))."_form",'but_meta'=>"cm-submit hidden cm-addons-save-changeable-settings"), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_meta'=>"cm-post cm-ajax cm-comet cm-addons-download-config hidden btn-primary",'but_href'=>"mobile_app.download_config?storefront_id=".((string)$_smarty_tpl->getValue('selected_storefront_id')),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.download_config", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
}
}
}
