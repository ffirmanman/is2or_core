<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_plans/hooks/companies/company_full_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7b00d79_21193424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9398979e8b287b2a0ca82cf40590d96df307d5' => 
    array (
      0 => 'addons/vendor_plans/hooks/companies/company_full_info.post.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7b00d79_21193424 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_plans/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan'));
$_smarty_tpl->assign('company_full_description_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('company_full_description_items'),array('vendor_plans'=>array('id'=>"vendor_plans",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_plans.plan", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>(($tmp = $_smarty_tpl->getValue('company')['plan'] ?? null)===null||$tmp==='' ? "–" ?? null : $tmp)))), false, NULL);
$_smarty_tpl->assign('company_full_description_items', $_smarty_tpl->getValue('company_full_description_items'), false, 2);
}
}
