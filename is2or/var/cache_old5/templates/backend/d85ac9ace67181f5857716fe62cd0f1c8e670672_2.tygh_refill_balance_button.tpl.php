<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee37f72d6_89119669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85ac9ace67181f5857716fe62cd0f1c8e670672' => 
    array (
      0 => 'addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee37f72d6_89119669 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_debt_payout.refill_balance", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_prefixVariable4), true);
}
}
