<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/myfatoorah/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01bd6e45_30801265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b2b80eb3b2440820e5bcff82c25f95d19cca7f' => 
    array (
      0 => 'addons/myfatoorah/hooks/index/scripts.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01bd6e45_30801265 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/myfatoorah/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('isApVisible')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>$_smarty_tpl->getValue('apScriptURL')), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('isFormVisible')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>$_smarty_tpl->getValue('cvScriptURL')), $_smarty_tpl);?>

<?php } elseif (!( !true || empty($_smarty_tpl->getValue('mfPaymentMethods')['all']))) {?>
    <?php $_smarty_tpl->assign('mfPaymentId', '', false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach190DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach190DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('payment')['payment'] == 'MyFatoorah') {
$_smarty_tpl->assign('mfPaymentId', $_smarty_tpl->getValue('payment')['payment_id'], false, NULL);
}?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>    
    <?php echo '<script'; ?>
>
        (function (_, $) {
            function mf_hidePlaceOrder(){
                if($('#radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mfPaymentId')), ENT_QUOTES, 'UTF-8');?>
').is(':checked')){
                    $('#litecheckout_place_order').hide();
                }
            }
            $.ceEvent('on', 'ce.loaderhide', function () {
                mf_hidePlaceOrder();
            });
            mf_hidePlaceOrder();
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/myfatoorah/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/myfatoorah/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('isApVisible')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>$_smarty_tpl->getValue('apScriptURL')), $_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->getValue('isFormVisible')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>$_smarty_tpl->getValue('cvScriptURL')), $_smarty_tpl);?>

<?php } elseif (!( !true || empty($_smarty_tpl->getValue('mfPaymentMethods')['all']))) {?>
    <?php $_smarty_tpl->assign('mfPaymentId', '', false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach191DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach191DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('payment')['payment'] == 'MyFatoorah') {
$_smarty_tpl->assign('mfPaymentId', $_smarty_tpl->getValue('payment')['payment_id'], false, NULL);
}?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>    
    <?php echo '<script'; ?>
>
        (function (_, $) {
            function mf_hidePlaceOrder(){
                if($('#radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mfPaymentId')), ENT_QUOTES, 'UTF-8');?>
').is(':checked')){
                    $('#litecheckout_place_order').hide();
                }
            }
            $.ceEvent('on', 'ce.loaderhide', function () {
                mf_hidePlaceOrder();
            });
            mf_hidePlaceOrder();
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
>
<?php }
}
}
}
