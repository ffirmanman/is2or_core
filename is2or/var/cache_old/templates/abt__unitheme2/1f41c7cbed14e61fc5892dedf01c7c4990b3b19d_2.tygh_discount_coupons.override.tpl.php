<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29bd66829_91323123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f41c7cbed14e61fc5892dedf01c7c4990b3b19d' => 
    array (
      0 => 'addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
  ),
))) {
function content_69aea29bd66829_91323123 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/gift_certificates/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('promo_code_or_certificate','apply','apply','promo_code_or_certificate','apply','apply'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" class="cm-hint"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code_or_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="25" value="" />
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" class="cm-hint"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("promo_code_or_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('position')), ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="25" value="" />
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
</div><?php }
}
}
