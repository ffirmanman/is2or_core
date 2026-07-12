<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:45
  from 'tygh:addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ad170d81_59369028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04239985af2e286c6b81d38250233899d4a2c3e0' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ad170d81_59369028 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->assign('html_class', ((string)$_smarty_tpl->getValue('html_class'))." te-theme-editor-active", false, 2);
}
}
}
