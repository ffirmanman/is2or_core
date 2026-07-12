<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bff611d549_37776383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b5f422f729ce8d577064579dada22adeeffe01' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/companies.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/companies/picker.tpl' => 1,
  ),
),false)) {
function content_6835bff611d549_37776383 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>

<?php $_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[company_ids]" ?? null : $tmp));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0, false);
?>

<?php }
}
