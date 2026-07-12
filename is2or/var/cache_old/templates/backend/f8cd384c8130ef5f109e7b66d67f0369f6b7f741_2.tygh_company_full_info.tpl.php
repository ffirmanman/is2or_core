<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:views/companies/components/company_full_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7a946c0_02349753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cd384c8130ef5f109e7b66d67f0369f6b7f741' => 
    array (
      0 => 'views/companies/components/company_full_info.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7a946c0_02349753 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components';
\Tygh\Languages\Helper::preloadLangVars(array('name','id','email','storefront_url','registered','status','stores_status'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "companies_company_full_info", null, null);?>

<?php $_smarty_tpl->assign('company_statuses', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_predefined_statuses')("companies",$_smarty_tpl->getValue('company')['status']), false, NULL);?>

<?php $_smarty_tpl->assign('company_full_description_items', array('company'=>array('id'=>"company",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("name", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>$_smarty_tpl->getValue('company')['company']),'company_id'=>array('id'=>"company_id",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("id", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>$_smarty_tpl->getValue('company')['company_id']),'email'=>array('id'=>"email",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>$_smarty_tpl->getValue('company')['email']),'storefront'=>array('id'=>"storefront",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_url", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>$_smarty_tpl->getSmarty()->getModifierCallback('puny_decode')($_smarty_tpl->getValue('company')['storefront']),'editions'=>"ULTIMATE"),'timestamp'=>array('id'=>"timestamp",'label'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("registered", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>$_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('company')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))),'status'=>array('id'=>"status",'label'=>($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage()) : $_smarty_tpl->getSmarty()->getModifierCallback("__")("stores_status", [], $_smarty_tpl->getSmarty()->getLanguage()),'value'=>($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) ? $_smarty_tpl->getValue('company_statuses')[$_smarty_tpl->getValue('company')['status']] : (($_smarty_tpl->getValue('company')['storefront_status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("StorefrontStatuses::OPEN")) ? "ON" : "OFF")),'status_divider'=>array('id'=>"status_divider",'type'=>"divider")), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_full_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:company_full_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_smarty_tpl->assign('company_full_description', '', false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('company_full_description_items'), 'company_full_description_items_item');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company_full_description_items_item')->value) {
$foreach2DoElse = false;
?>
        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('company_full_description_items_item')['editions'] ?? null))) && !$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')($_smarty_tpl->getValue('company_full_description_items_item')['editions'])) {?>
        <?php continue 1;?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('company_full_description') !== '') {?>
        <?php $_smarty_tpl->assign('company_full_description', ((string)$_smarty_tpl->getValue('company_full_description'))."\n", false, NULL);?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('company_full_description_items_item')['type'] === "divider") {?>
        <?php continue 1;?>
    <?php }?>

        <?php $_smarty_tpl->assign('company_full_description', ((string)$_smarty_tpl->getValue('company_full_description')).((string)$_smarty_tpl->getValue('company_full_description_items_item')['label']).": ".((string)$_smarty_tpl->getValue('company_full_description_items_item')['value']), false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->assign('company_full_description', $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('company_full_description')), false, NULL);?>

<?php $_smarty_tpl->assign('company_full_description', $_smarty_tpl->getValue('company_full_description'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
