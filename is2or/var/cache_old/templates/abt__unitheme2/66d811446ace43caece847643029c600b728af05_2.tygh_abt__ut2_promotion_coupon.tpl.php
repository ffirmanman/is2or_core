<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:blocks/checkout/abt__ut2_promotion_coupon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29bcee0b7_33525550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d811446ace43caece847643029c600b728af05' => 
    array (
      0 => 'blocks/checkout/abt__ut2_promotion_coupon.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
  ),
))) {
function content_69aea29bcee0b7_33525550 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('promo_code','promo_code','apply','apply','promo_code','promo_code','apply','apply'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_display_promotion_input_field')($_smarty_tpl->getValue('cart'))) {?>
<div>
    <form class="cm-ajax cm-ajax-force cm-ajax-full-render" name="coupon_code_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" id="coupon_code_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-discount-coupon__control-group ty-input-append">
                <label for="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" />
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </form>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/abt__ut2_promotion_coupon.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/checkout/abt__ut2_promotion_coupon.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_display_promotion_input_field')($_smarty_tpl->getValue('cart'))) {?>
<div>
    <form class="cm-ajax cm-ajax-force cm-ajax-full-render" name="coupon_code_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" id="coupon_code_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_coupons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-discount-coupon__control-group ty-input-append">
                <label for="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" />
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:discount_coupons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </form>
</div>
<?php }
}
}
}
