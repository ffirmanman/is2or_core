<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee37ebfe1_38508151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2851bd5903080d11d7ec323f6b26a4fd6ca14c9' => 
    array (
      0 => 'addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_form.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
    'tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' => 1,
  ),
))) {
function content_6a133ee37ebfe1_38508151 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard.analytics_card.enter_an_amount','vendor_debt_payout.dashboard.analytics_card.refill_balance'));
?>
<form id="vendor_debt_payout_refill_balance" name="refill_balance" method="post" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("debt.refill_balance")), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php $_smarty_tpl->assign('amount', '', false, NULL);?>
    <?php if ($_smarty_tpl->getValue('current_balance') < 0) {?>
        <?php $_smarty_tpl->assign('amount', $_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('current_balance')), false, NULL);?>
    <?php }?>
    <div id="vendor_debt_payout_refill_amount" class="control-group hidden cm-refill-balance-block">
        <label class="control-label cm-refill-balance-label" for="elm_vendor_debt_payout_refill_balance">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_debt_payout.dashboard.analytics_card.enter_an_amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
        </label>
        <div class="controls">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_id'=>"elm_vendor_debt_payout_refill_balance",'input_name'=>"refill_amount",'view'=>"input",'class'=>"input-full cm-refill-balance-amount",'value'=>$_smarty_tpl->getValue('amount')), (int) 0, $_smarty_current_dir);
?>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <a id="on_vendor_debt_payout_refill_amount" class="btn btn-primary cm-combination">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_debt_payout.dashboard.analytics_card.refill_balance", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </a>
</form><?php }
}
