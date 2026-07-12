<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:components/icons/get_fallback_source.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae8fd398_57025991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8614054f1af2dd83a1a7225f117c3a73ed092609' => 
    array (
      0 => 'components/icons/get_fallback_source.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae8fd398_57025991 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/icons';
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "get_fallback_source", null, null);
$_smarty_tpl->assign('icon_prefix', "icon-", false, NULL);
$_smarty_tpl->assign('icon_prefix_length', strlen((string) $_smarty_tpl->getValue('icon_prefix')), false, NULL);
$_smarty_tpl->assign('config', \Tygh\Registry::get('config'), false, NULL);
$_smarty_tpl->assign('design_backend', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_rel_dir')($_smarty_tpl->getValue('config')['dir']['design_backend']), false, NULL);
if ($_smarty_tpl->getValue('class')) {
$_smarty_tpl->assign('class_array', $_smarty_tpl->getSmarty()->getModifierCallback('explode')(" ",$_smarty_tpl->getValue('class')), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('class_array'), 'class_item', true, 'class_index');
$_smarty_tpl->getVariable('class_item')->iteration = 0;
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('class_index')->value => $_smarty_tpl->getVariable('class_item')->value) {
$foreach10DoElse = false;
$_smarty_tpl->getVariable('class_item')->iteration++;
$_smarty_tpl->getVariable('class_item')->last = $_smarty_tpl->getVariable('class_item')->iteration === $_smarty_tpl->getVariable('class_item')->total;
$foreach10Backup = clone $_smarty_tpl->getVariable('class_item');
$_smarty_tpl->assign('icon_path', "icons/icon-".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('class_item'),'_','-'))).".svg", false, NULL);
if (substr((string) $_smarty_tpl->getValue('class_item'), (int) 0, (int) $_smarty_tpl->getValue('icon_prefix_length')) === $_smarty_tpl->getValue('icon_prefix')) {
$_smarty_tpl->assign('class_array', $_smarty_tpl->getSmarty()->getModifierCallback('unset_key')($_smarty_tpl->getValue('class_array'),$_smarty_tpl->getValue('class_index')), false, NULL);
$_smarty_tpl->assign('source', $_smarty_tpl->getSmarty()->getModifierCallback('replace')(substr((string) $_smarty_tpl->getValue('class_item'), (int) $_smarty_tpl->getValue('icon_prefix_length')),"-","_"), false, NULL);
} elseif (!$_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('class_item'),"-") && $_smarty_tpl->getSmarty()->getModifierCallback('file_exists')(((string)$_smarty_tpl->getValue('design_backend'))."templates/".((string)$_smarty_tpl->getValue('icon_path')))) {
$_smarty_tpl->assign('class_array', $_smarty_tpl->getSmarty()->getModifierCallback('unset_key')($_smarty_tpl->getValue('class_array'),$_smarty_tpl->getValue('class_index')), false, NULL);
$_smarty_tpl->assign('source', $_smarty_tpl->getValue('class_item'), false, NULL);
}
if ($_smarty_tpl->getVariable('class_item')->last) {
$_smarty_tpl->assign('class', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(" ",($_smarty_tpl->getValue('class_array'))), false, NULL);
}
$_smarty_tpl->setVariable('class_item', $foreach10Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('source') && (substr((string) $_smarty_tpl->getValue('source'), (int) 0, (int) $_smarty_tpl->getValue('icon_prefix_length'))) === $_smarty_tpl->getValue('icon_prefix')) {
$_smarty_tpl->assign('source', substr((string) $_smarty_tpl->getValue('source'), (int) $_smarty_tpl->getValue('icon_prefix_length')), false, NULL);
}
$_smarty_tpl->assign('source', $_smarty_tpl->getValue('source'), false, 2);
$_smarty_tpl->assign('class', $_smarty_tpl->getValue('class'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
