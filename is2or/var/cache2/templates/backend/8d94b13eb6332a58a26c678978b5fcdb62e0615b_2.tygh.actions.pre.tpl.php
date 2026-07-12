<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04d6dade0_77108668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d94b13eb6332a58a26c678978b5fcdb62e0615b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl',
      1 => 1736834968,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl' => 2,
  ),
),false)) {
function content_682fe04d6dade0_77108668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),));
if (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']) == 'addons.update' && $_REQUEST['addon'] && preg_match('/^ab[t]?__/',$_REQUEST['addon'])) {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_REQUEST['addon']), 0, false);
$_smarty_tpl->_assignInScope('adv_buttons', smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')) ,false ,2);
} elseif (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']) == 'addons.manage' && $_REQUEST['supplier'] && $_REQUEST['supplier'] == 'AlexBranding') {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>'ab__addons_manager'), 0, true);
$_smarty_tpl->_assignInScope('adv_buttons', smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')) ,false ,2);
}
}
}
