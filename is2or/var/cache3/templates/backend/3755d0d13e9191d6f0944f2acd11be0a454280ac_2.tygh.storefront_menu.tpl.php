<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:26
  from '/srv/projects/is2or.com/public_html/design/backend/templates/components/menu/storefront_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd4a772846_90867589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3755d0d13e9191d6f0944f2acd11be0a454280ac' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/components/menu/storefront_menu.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd4a772846_90867589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
$_smarty_tpl->_assignInScope('storefront_status_icon', '');
$_smarty_tpl->_assignInScope('storefront_url', '');
if (fn_allowed_for("ULTIMATE")) {
if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");
}
$_smarty_tpl->_assignInScope('storefront_url', "companies.manage");
}
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {
if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");
}
$_smarty_tpl->_assignInScope('storefront_url', "storefronts.manage");
}
if ($_smarty_tpl->tpl_vars['storefront_status_icon']->value && fn_check_view_permissions($_smarty_tpl->tpl_vars['storefront_url']->value,"GET")) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['storefront_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="top-bar__btn mobile-hidden"><span class="top-bar__btn-inner storefront-menu__btn-inner"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['storefront_status_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>
</span></a><?php }
}
}
