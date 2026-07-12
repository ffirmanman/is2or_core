<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:addons/vendor_panel_configurator/hooks/index/body_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460194036_06812853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81574e17b772d75889a1b84f1600a21c4c9c070f' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/index/body_content.pre.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9460194036_06812853 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->assign('main_container_class', ((string)$_smarty_tpl->getValue('main_container_class'))." te-mode", false, 2);
}
}
}
