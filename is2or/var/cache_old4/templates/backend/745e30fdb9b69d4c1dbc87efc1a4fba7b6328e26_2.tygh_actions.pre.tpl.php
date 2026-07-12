<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/ab__addons_manager/hooks/index/actions.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb073677_99617592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '745e30fdb9b69d4c1dbc87efc1a4fba7b6328e26' => 
    array (
      0 => 'addons/ab__addons_manager/hooks/index/actions.pre.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl' => 2,
  ),
))) {
function content_69fb49fb073677_99617592 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__addons_manager/hooks/index';
if (((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']) == 'addons.update' && $_REQUEST['addon'] && $_smarty_tpl->getSmarty()->getModifierCallback('preg_match')('/^ab[t]?__/',$_REQUEST['addon'])) {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_REQUEST['addon']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('adv_buttons', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons')), false, 2);
} elseif (((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']) == 'addons.manage' && $_REQUEST['supplier'] && $_REQUEST['supplier'] == 'AlexBranding') {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>'ab__addons_manager'), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('adv_buttons', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'adv_buttons')), false, 2);
}
}
}
