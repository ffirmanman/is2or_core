<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_rating/hooks/companies/company_full_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7af3909_71973060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'becdfb6cf8afe6cb03409527aba0c2b5ded8afad' => 
    array (
      0 => 'addons/vendor_rating/hooks/companies/company_full_info.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7af3909_71973060 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_rating/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating'));
$_smarty_tpl->assign('company_full_description_items', $_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('company_full_description_items'),array('vendor_rating'=>array('id'=>"vendor_rating",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_rating.absolute_vendor_rating", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>(($tmp = $_smarty_tpl->getValue('company')['absolute_vendor_rating'] ?? null)===null||$tmp==='' ? "–" ?? null : $tmp)))), false, NULL);
$_smarty_tpl->assign('company_full_description_items', $_smarty_tpl->getValue('company_full_description_items'), false, 2);
}
}
