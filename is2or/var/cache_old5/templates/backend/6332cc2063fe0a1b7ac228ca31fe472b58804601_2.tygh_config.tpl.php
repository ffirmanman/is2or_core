<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:31
  from 'tygh:addons/vendor_panel_configurator/config.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133edb250348_01205826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6332cc2063fe0a1b7ac228ca31fe472b58804601' => 
    array (
      0 => 'addons/vendor_panel_configurator/config.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133edb250348_01205826 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator';
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>

            <?php if ($_smarty_tpl->getValue('runtime')['vendor_panel_style']['element_color']) {?>
        <?php $_smarty_tpl->assign('mainColor', (($tmp = $_smarty_tpl->getValue('dashboard_element_color') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('runtime')['vendor_panel_style']['element_color'] ?? null : $tmp), false, 2);?>
    <?php } elseif ($_smarty_tpl->getValue('config')["vendor_panel_style"]["main_color"]) {?>
        <?php $_smarty_tpl->assign('mainColor', $_smarty_tpl->getValue('config')["vendor_panel_style"]["main_color"], false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('mainColor', "#024567", false, 2);?>     <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['vendor_panel_style']['sidebar_color']) {?>
        <?php $_smarty_tpl->assign('menuSidebarColor', (($tmp = $_smarty_tpl->getValue('dashboard_sidebar_color') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('runtime')['vendor_panel_style']['sidebar_color'] ?? null : $tmp), false, 2);?>
    <?php } elseif ($_smarty_tpl->getValue('config')["vendor_panel_style"]["menu_sidebar_color"]) {?>
        <?php $_smarty_tpl->assign('menuSidebarColor', $_smarty_tpl->getValue('config')["vendor_panel_style"]["menu_sidebar_color"], false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('menuSidebarColor', "#fff", false, 2);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('runtime')['vendor_panel_style']['main_pair']['icon']['image_path']) {?>
        <?php $_smarty_tpl->assign('menuSidebarBg', "url(".((string)$_smarty_tpl->getValue('runtime')['vendor_panel_style']['main_pair']['icon']['image_path']).")", false, 2);?>
    <?php } elseif ($_smarty_tpl->getValue('config')["vendor_panel_style"]["menu_sidebar_bg"]) {?>
        <?php $_smarty_tpl->assign('menuSidebarBg', "url(".((string)$_smarty_tpl->getValue('config')['vendor_panel_style']['menu_sidebar_bg']).")", false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('menuSidebarBg', "none", false, 2);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('is_gray_main_color')) {?>
        <?php $_smarty_tpl->assign('isGrayMainColor', (($tmp = $_smarty_tpl->getValue('is_gray_main_color') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, 2);?>
    <?php }
}
}
}
