<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:views/companies/components/status_on_manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7c8fba9_90387279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c2dfda1b78ff9046467d00a1c3cf90fb1f05b7' => 
    array (
      0 => 'views/companies/components/status_on_manage.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/approve_disapprove.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:views/companies/components/company_status_switcher.tpl' => 1,
  ),
))) {
function content_69ae86f7c8fba9_90387279 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components';
\Tygh\Languages\Helper::preloadLangVars(array('notify_vendor'));
?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('company')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('id'),'dispatch'=>"companies.update_status"), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('company')['status'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"companies",'id'=>$_smarty_tpl->getValue('id'),'status'=>$_smarty_tpl->getValue('status'),'items_status'=>$_smarty_tpl->getValue('items_status'),'object_id_name'=>"company_id",'hide_for_vendor'=>$_smarty_tpl->getValue('runtime')['company_id'],'update_controller'=>"companies",'notify'=>true,'notify_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("notify_vendor", [], $_smarty_tpl->getSmarty()->getLanguage()),'status_target_id'=>"pagination_contents",'extra'=>"&return_url=".((string)$_smarty_tpl->getValue('return_url')),'popup_additional_class'=>"dropleft"), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/company_status_switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->getValue('company')), (int) 0, $_smarty_current_dir);
}
}
}
