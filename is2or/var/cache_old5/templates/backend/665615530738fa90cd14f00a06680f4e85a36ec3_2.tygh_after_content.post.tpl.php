<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/vendor_panel_configurator/hooks/index/after_content.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2ceb0f0_79582234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665615530738fa90cd14f00a06680f4e85a36ec3' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/index/after_content.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/theme_editor.tpl' => 1,
  ),
))) {
function content_6a133ed2ceb0f0_79582234 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
