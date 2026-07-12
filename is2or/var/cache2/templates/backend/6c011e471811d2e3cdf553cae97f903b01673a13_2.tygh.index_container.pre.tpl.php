<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04d0b6674_28254567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c011e471811d2e3cdf553cae97f903b01673a13' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe04d0b6674_28254567 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('html_class', ((string)$_smarty_tpl->tpl_vars['html_class']->value)." te-theme-editor-active" ,false ,2);
}
}
}
