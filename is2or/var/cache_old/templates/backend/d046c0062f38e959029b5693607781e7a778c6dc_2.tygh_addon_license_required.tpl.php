<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/components/addons/addon_license_required.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cca1c2b8_86888216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd046c0062f38e959029b5693607781e7a778c6dc' => 
    array (
      0 => 'views/addons/components/addons/addon_license_required.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/licensing/upgrade_popup.tpl' => 1,
  ),
))) {
function content_69aed9cca1c2b8_86888216 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons/components/addons';
$_smarty_tpl->assign('addon', (($tmp = $_smarty_tpl->getValue('addon') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('key') ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:components/licensing/upgrade_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_id'=>$_smarty_tpl->getValue('popup_id'),'upgrade_feature'=>$_smarty_tpl->getValue('addon'),'auto_open'=>false), (int) 0, $_smarty_current_dir);
}
}
