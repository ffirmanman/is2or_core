<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:addons/vendor_panel_configurator/hooks/bottom_panel/bottom_panel_main.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae7c59f2_14459858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e961e326b35fb6a5071a7ef7730da2444958051' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/bottom_panel/bottom_panel_main.pre.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae7c59f2_14459858 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/bottom_panel';
$_smarty_tpl->assign('is_demo_mode', (($tmp = $_smarty_tpl->getValue('config')['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_theme_editor', ((defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL") && $_smarty_tpl->getValue('auth')['act_as_area'] && $_smarty_tpl->getValue('auth')['act_as_area'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getValue('is_demo_mode')), false, 2);?>

<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
    <?php if ($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo_dark']) {?>
        <?php $_smarty_tpl->assign('bottom_panel_open_logo', $_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo_dark'], false, 2);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo']) {?>
        <?php $_smarty_tpl->assign('bottom_panel_close_logo', $_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo'], false, 2);?>
    <?php }
}
}
}
