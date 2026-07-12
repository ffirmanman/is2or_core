<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/moyasar_payment/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa96493f7_09202740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0893cb5b3d4bd921454a4817d6a14a06ec3e2d1e' => 
    array (
      0 => 'addons/moyasar_payment/hooks/index/scripts.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa96493f7_09202740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/moyasar_payment/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('mfPaymentId', '', false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach12DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('payment')['payment'] == 'moyasar') {
$_smarty_tpl->assign('mfPaymentId', $_smarty_tpl->getValue('payment')['payment_id'], false, NULL);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
echo '<script'; ?>
>
  (function (_, $) {
    function moyasar_hidePlaceOrder() {
      if ($('#radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mfPaymentId')), ENT_QUOTES, 'UTF-8');?>
').is(':checked')) {
        $('#litecheckout_place_order').hide();
      }
    }

    $.ceEvent('on', 'ce.loaderhide', function () {
      moyasar_hidePlaceOrder();
    });
    moyasar_hidePlaceOrder();
  })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/moyasar_payment/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/moyasar_payment/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('mfPaymentId', '', false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach13DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('payment')['payment'] == 'moyasar') {
$_smarty_tpl->assign('mfPaymentId', $_smarty_tpl->getValue('payment')['payment_id'], false, NULL);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
echo '<script'; ?>
>
  (function (_, $) {
    function moyasar_hidePlaceOrder() {
      if ($('#radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mfPaymentId')), ENT_QUOTES, 'UTF-8');?>
').is(':checked')) {
        $('#litecheckout_place_order').hide();
      }
    }

    $.ceEvent('on', 'ce.loaderhide', function () {
      moyasar_hidePlaceOrder();
    });
    moyasar_hidePlaceOrder();
  })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
