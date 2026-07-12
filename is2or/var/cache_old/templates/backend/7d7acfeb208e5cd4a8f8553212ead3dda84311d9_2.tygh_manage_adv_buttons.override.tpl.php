<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:16
  from 'tygh:addons/upsell/hooks/companies/manage_adv_buttons.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f800dd16_27678189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7acfeb208e5cd4a8f8553212ead3dda84311d9' => 
    array (
      0 => 'addons/upsell/hooks/companies/manage_adv_buttons.override.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 2,
    'tygh:addons/upsell/components/popup.tpl' => 1,
  ),
))) {
function content_69ae86f800dd16_27678189 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/upsell/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('add_storefront','add_storefront'));
$_smarty_tpl->assign('feature', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Licensing\Features::ADD_STOREFRONT"), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && !$_smarty_tpl->getSmarty()->getModifierCallback('fn_is_allowed')($_smarty_tpl->getValue('feature')) && $_smarty_tpl->getValue('settings')['Upgrade_center']['license_number']) {?>
    <?php $_smarty_tpl->assign('popup_id', "upsell_help_block_popup_".((string)$_smarty_tpl->getValue('feature')), false, NULL);?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-height",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_storefront", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_storefront", [], $_smarty_tpl->getSmarty()->getLanguage()),'icon'=>"icon-plus",'meta_data'=>"data-ca-target-id='".((string)$_smarty_tpl->getValue('popup_id'))."'"), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/upsell/components/popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_id'=>$_smarty_tpl->getValue('popup_id'),'feature'=>$_smarty_tpl->getValue('feature')), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"companies.add",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->getValue('add_vendor_text'),'link_text'=>$_smarty_tpl->getValue('add_vendor_text'),'icon'=>"icon-plus"), (int) 0, $_smarty_current_dir);
}
}
}
