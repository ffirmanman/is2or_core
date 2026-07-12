<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:components/menu/storefront_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af7f4fe4_24041791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906345aa50ef140672412fcf1f379ab823ec94d4' => 
    array (
      0 => 'components/menu/storefront_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1af7f4fe4_24041791 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
$_smarty_tpl->assign('storefront_status_icon', '', false, NULL);
$_smarty_tpl->assign('storefront_url', '', false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {
if ($_smarty_tpl->getValue('runtime')['is_current_storefront_closed'] || $_smarty_tpl->getValue('runtime')['are_all_storefronts_closed']) {
$_smarty_tpl->assign('storefront_status_icon', "icon-lock", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['have_closed_storefronts']) {
$_smarty_tpl->assign('storefront_status_icon', "icon-unlock-alt", false, NULL);
}
$_smarty_tpl->assign('storefront_url', "companies.manage", false, NULL);
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && !$_smarty_tpl->getValue('runtime')['simple_ultimate']) {
if ($_smarty_tpl->getValue('runtime')['are_all_storefronts_closed']) {
$_smarty_tpl->assign('storefront_status_icon', "icon-lock", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['have_closed_storefronts']) {
$_smarty_tpl->assign('storefront_status_icon', "icon-unlock-alt", false, NULL);
}
$_smarty_tpl->assign('storefront_url', "storefronts.manage", false, NULL);
}
if ($_smarty_tpl->getValue('storefront_status_icon') && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('storefront_url'),"GET")) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('storefront_url'))), ENT_QUOTES, 'UTF-8');?>
" class="top-bar__btn mobile-hidden"><span class="top-bar__btn-inner storefront-menu__btn-inner"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->getValue('storefront_status_icon'))." dropdown-menu__icon"), $_smarty_tpl);?>
</span></a><?php }
}
}
