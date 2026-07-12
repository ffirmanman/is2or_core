<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:blocks/checkout/abt__ut2_summary.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204de44a0_06900385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6440bf40f35014fdd4192a10822c129b026b23e' => 
    array (
      0 => 'blocks/checkout/abt__ut2_summary.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 14,
    'tygh:common/modifier.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:views/checkout/components/applied_promotions.tpl' => 2,
  ),
))) {
function content_69fb5204de44a0_06900385 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('products_amount','items','amount','shipping','including_discount','order_discount','payment_surcharge','included','order_total','points_lowercase','coupon','products_amount','items','amount','shipping','including_discount','order_discount','payment_surcharge','included','order_total','points_lowercase','coupon'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-checkout-summary" id="checkout_info_summary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">

    <table class="ty-checkout-summary__block">
        <tbody>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['amount']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </td>
            </tr>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></span>
                </td>
            </tr>

            <?php if (!$_smarty_tpl->getValue('cart')['shipping_failed'] && $_smarty_tpl->getValue('cart')['chosen_shipping'] && $_smarty_tpl->getValue('cart')['shipping_required'] && $_smarty_tpl->getValue('cart')['display_shipping_cost']) {?>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="shipping">
                    <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_shipping_cost']), (int) 0, $_smarty_current_dir);
?></span>
                </td>
            </tr>
            <?php }?>

            <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("including_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('cart')['discount'])), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
            <?php }?>

            <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['subtotal_discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                    <td class="ty-checkout-summary__item ty-right discount-price" data-ct-checkout-summary="order-discount">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('cart')['subtotal_discount'])), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                <tr>
                    <td class="ty-checkout-summary__item"><?php echo (($tmp = $_smarty_tpl->getValue('cart')['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("payment_surcharge", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="payment-surcharge">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['payment_surcharge']), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"x+y",'x'=>$_smarty_tpl->getValue('cart')['total'],'y'=>$_smarty_tpl->getValue('cart')['payment_surcharge'],'assign'=>"_total"), $_smarty_tpl);?>

            <?php }?>

            <?php if ($_smarty_tpl->getValue('cart')['taxes']) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['taxes'], 'tax');
$foreach54DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tax')->value) {
$foreach54DoElse = false;
?>
                    <tr>
                        <td class="ty-checkout-summary__item" data-ct-checkout-summary="tax-name <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>
">
                            <span class="ty-checkout-summary__taxes-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>
 <bdi>(<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->getValue('tax')['rate_value'],'mod_type'=>$_smarty_tpl->getValue('tax')['rate_type']), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('tax')['price_includes_tax'] == "Y" && ($_smarty_tpl->getValue('settings')['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->getValue('settings')['Checkout']['tax_calculation'] == "subtotal")) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("included", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi><?php }?>)</span>
                        </td>
                        <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="taxes">
                            <span class="ty-checkout-summary__taxes-amount"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('tax')['tax_subtotal']), (int) 0, $_smarty_current_dir);
?></span>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </tbody>
        <tbody>
            <tr>
                <th class="ty-checkout-summary__total" colspan="2" data-ct-checkout-summary="order-total">
                    <div>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_total", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <span class="ty-checkout-summary__total-sum"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('_total') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['total'] ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<!--checkout_info_summary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->getValue('cart')['points_info']['reward']) {?>
    <div class="ty-reward-points__info clearfix">
        <span class="ty-float-right">+<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['reward']), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "promotion_info", null, null);?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_coupons_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['coupons'], 'coupon', false, 'coupon_code');
$foreach55DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('coupon_code')->value => $_smarty_tpl->getVariable('coupon')->value) {
$foreach55DoElse = false;
?>
            <li class="ty-coupons__item">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("coupon", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('coupon_code')), ENT_QUOTES, 'UTF-8');?>
"
                <?php $_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                <?php $_smarty_tpl->assign('coupon_code', rawurlencode((string)$_smarty_tpl->getValue('coupon_code')), false, NULL);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_coupon?coupon_code=".((string)$_smarty_tpl->getValue('coupon_code'))."&redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url')),'but_role'=>"delete",'but_meta'=>"ty-coupons__item-delete cm-ajax cm-ajax-full-render",'but_target_id'=>"checkout*,cart_status*,cart_items,litecheckout_form"), (int) 0, $_smarty_current_dir);
?>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->getValue('cart')['applied_promotions']) {?>
                <li class="ty-coupons__item">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/applied_promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </li>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_coupons_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <div id="checkout_promotions_info_<?php echo $_smarty_tpl->getValue('block')['snapping_id'];?>
">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info'))) {?>
            <ul class="ty-coupons__list ty-discount-info">
                <?php if ($_smarty_tpl->getValue('cart')['has_coupons']) {?>
                    <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
                <?php }?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info');?>

            </ul>
        <?php }?>
    <!--checkout_promotions_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/abt__ut2_summary.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/checkout/abt__ut2_summary.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-checkout-summary" id="checkout_info_summary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">

    <table class="ty-checkout-summary__block">
        <tbody>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("products_amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['amount']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </td>
            </tr>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                    <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></span>
                </td>
            </tr>

            <?php if (!$_smarty_tpl->getValue('cart')['shipping_failed'] && $_smarty_tpl->getValue('cart')['chosen_shipping'] && $_smarty_tpl->getValue('cart')['shipping_required'] && $_smarty_tpl->getValue('cart')['display_shipping_cost']) {?>
            <tr>
                <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="shipping">
                    <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_shipping_cost']), (int) 0, $_smarty_current_dir);
?></span>
                </td>
            </tr>
            <?php }?>

            <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("including_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</td>
                    <td class="ty-checkout-summary__item ty-right discount-price">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('cart')['discount'])), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
            <?php }?>

            <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['subtotal_discount']))) {?>
                <tr class="ty-checkout-summary__order_discount">
                    <td class="ty-checkout-summary__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</td>
                    <td class="ty-checkout-summary__item ty-right discount-price" data-ct-checkout-summary="order-discount">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->getValue('cart')['subtotal_discount'])), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                <tr>
                    <td class="ty-checkout-summary__item"><?php echo (($tmp = $_smarty_tpl->getValue('cart')['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("payment_surcharge", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="payment-surcharge">
                        <span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['payment_surcharge']), (int) 0, $_smarty_current_dir);
?></span>
                    </td>
                </tr>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"x+y",'x'=>$_smarty_tpl->getValue('cart')['total'],'y'=>$_smarty_tpl->getValue('cart')['payment_surcharge'],'assign'=>"_total"), $_smarty_tpl);?>

            <?php }?>

            <?php if ($_smarty_tpl->getValue('cart')['taxes']) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['taxes'], 'tax');
$foreach56DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tax')->value) {
$foreach56DoElse = false;
?>
                    <tr>
                        <td class="ty-checkout-summary__item" data-ct-checkout-summary="tax-name <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>
">
                            <span class="ty-checkout-summary__taxes-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>
 <bdi>(<?php $_smarty_tpl->renderSubTemplate("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->getValue('tax')['rate_value'],'mod_type'=>$_smarty_tpl->getValue('tax')['rate_type']), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('tax')['price_includes_tax'] == "Y" && ($_smarty_tpl->getValue('settings')['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->getValue('settings')['Checkout']['tax_calculation'] == "subtotal")) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("included", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi><?php }?>)</span>
                        </td>
                        <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="taxes">
                            <span class="ty-checkout-summary__taxes-amount"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('tax')['tax_subtotal']), (int) 0, $_smarty_current_dir);
?></span>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </tbody>
        <tbody>
            <tr>
                <th class="ty-checkout-summary__total" colspan="2" data-ct-checkout-summary="order-total">
                    <div>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_total", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <span class="ty-checkout-summary__total-sum"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('_total') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['total'] ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?></span>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<!--checkout_info_summary_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->getValue('cart')['points_info']['reward']) {?>
    <div class="ty-reward-points__info clearfix">
        <span class="ty-float-right">+<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("points_lowercase", array($_smarty_tpl->getValue('cart')['points_info']['reward']), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
    </div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "promotion_info", null, null);?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_coupons_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['coupons'], 'coupon', false, 'coupon_code');
$foreach57DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('coupon_code')->value => $_smarty_tpl->getVariable('coupon')->value) {
$foreach57DoElse = false;
?>
            <li class="ty-coupons__item">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("coupon", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('coupon_code')), ENT_QUOTES, 'UTF-8');?>
"
                <?php $_smarty_tpl->assign('_redirect_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                <?php $_smarty_tpl->assign('coupon_code', rawurlencode((string)$_smarty_tpl->getValue('coupon_code')), false, NULL);?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_coupon?coupon_code=".((string)$_smarty_tpl->getValue('coupon_code'))."&redirect_url=".((string)$_smarty_tpl->getValue('_redirect_url')),'but_role'=>"delete",'but_meta'=>"ty-coupons__item-delete cm-ajax cm-ajax-full-render",'but_target_id'=>"checkout*,cart_status*,cart_items,litecheckout_form"), (int) 0, $_smarty_current_dir);
?>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->getValue('cart')['applied_promotions']) {?>
                <li class="ty-coupons__item">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/applied_promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </li>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_coupons_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <div id="checkout_promotions_info_<?php echo $_smarty_tpl->getValue('block')['snapping_id'];?>
">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info'))) {?>
            <ul class="ty-coupons__list ty-discount-info">
                <?php if ($_smarty_tpl->getValue('cart')['has_coupons']) {?>
                    <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
                <?php }?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'promotion_info');?>

            </ul>
        <?php }?>
    <!--checkout_promotions_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:applied_discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
