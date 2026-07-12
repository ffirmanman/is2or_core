<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:addons/master_products/hooks/companies/company_name.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46791bf993_10919341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f5bd75dcd5190f354848d29a41472d63d40d4b' => 
    array (
      0 => 'addons/master_products/hooks/companies/company_name.pre.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46791bf993_10919341 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/master_products/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('master_products.all_vendors_master_product'));
if (!$_smarty_tpl->getValue('runtime')['company_id'] && !$_smarty_tpl->getValue('object')['company_id'] && $_smarty_tpl->getValue('object')['product_id'] && !$_smarty_tpl->getValue('clone')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('object') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['company_name'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.all_vendors_master_product", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('object', $_tmp_array, false, 2);
}
}
}
