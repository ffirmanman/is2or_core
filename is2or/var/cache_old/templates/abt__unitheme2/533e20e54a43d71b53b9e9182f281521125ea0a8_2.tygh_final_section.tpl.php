<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:12
  from 'tygh:views/checkout/components/final_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29c0a7223_94039905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533e20e54a43d71b53b9e9182f281521125ea0a8' => 
    array (
      0 => 'views/checkout/components/final_section.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/place_order.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
))) {
function content_69aea29c0a7223_94039905 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_place_order', false, false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allow_place_order')($_smarty_tpl->getValue('cart'),$_smarty_tpl->getValue('auth'))) {?>
    <?php $_smarty_tpl->assign('show_place_order', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('recalculate') && !$_smarty_tpl->getValue('cart')['amount_failed']) {?>
    <?php $_smarty_tpl->assign('show_place_order', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_place_order')) {?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "checkout_final_section_customer_notes", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:final_section_customer_notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'checkout_final_section_customer_notes'))) {?>
        <div class="clearfix <?php if (!$_smarty_tpl->getValue('is_payment_step')) {?> checkout__block ty-checkout-block-terms<?php }?>">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'checkout_final_section_customer_notes');?>

        </div>
    <?php }?>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->getValue('iframe_mode')) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order litecheckout__submit-order-inner">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order litecheckout__submit-order-inner">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"action"), (int) 0, $_smarty_current_dir);
?>
    </div>
    
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/final_section.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/final_section.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_place_order', false, false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allow_place_order')($_smarty_tpl->getValue('cart'),$_smarty_tpl->getValue('auth'))) {?>
    <?php $_smarty_tpl->assign('show_place_order', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('recalculate') && !$_smarty_tpl->getValue('cart')['amount_failed']) {?>
    <?php $_smarty_tpl->assign('show_place_order', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_place_order')) {?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "checkout_final_section_customer_notes", null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:final_section_customer_notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'checkout_final_section_customer_notes'))) {?>
        <div class="clearfix <?php if (!$_smarty_tpl->getValue('is_payment_step')) {?> checkout__block ty-checkout-block-terms<?php }?>">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'checkout_final_section_customer_notes');?>

        </div>
    <?php }?>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->getValue('iframe_mode')) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order litecheckout__submit-order-inner">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order litecheckout__submit-order-inner">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('continue_url')),'but_role'=>"action"), (int) 0, $_smarty_current_dir);
?>
    </div>
    
<?php }
}
}
}
