<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/amazon_payment_services/hooks/products/add_to_cart.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa95aa2c2_36721267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3ddfd6a5339f12dda547bceff158eeb575face' => 
    array (
      0 => 'addons/amazon_payment_services/hooks/products/add_to_cart.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa95aa2c2_36721267 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/amazon_payment_services/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('apple_button', $_smarty_tpl->getSmarty()->getModifierCallback('fn_amazon_payment_services_check_applypay_button')("product"), false, NULL);
if ($_smarty_tpl->getValue('apple_button') && $_smarty_tpl->getValue('product')['product_type'] == 'P' && !( !true || empty($_smarty_tpl->getValue('apple_button')['processor_params']['apple_button_type']))) {?>
	<button type="button" class="btn_aps_applypay_checkout hidden b_product <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('apple_button')['processor_params']['apple_button_type'] ?? null)===null||$tmp==='' ? 'apple-pay-buy' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" 
		data-display_name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['processor_params']['apple_display_name']), ENT_QUOTES, 'UTF-8');?>
" 
		data-page="product" 
		data-payment_id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" 
		data-mi="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['merchant_identifier']), ENT_QUOTES, 'UTF-8');?>
"> </button>
	<input type="hidden" name="payment_data[aps][gateway]" value="apple" />
	<input type="hidden" name="payment_data[aps][apple][request_data]" class="inp_applepay_request_data" value="" />
	<input type="hidden" name="contact_data" class="inp_applepay_contact_data" value="" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/amazon_payment_services/hooks/products/add_to_cart.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/amazon_payment_services/hooks/products/add_to_cart.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('apple_button', $_smarty_tpl->getSmarty()->getModifierCallback('fn_amazon_payment_services_check_applypay_button')("product"), false, NULL);
if ($_smarty_tpl->getValue('apple_button') && $_smarty_tpl->getValue('product')['product_type'] == 'P' && !( !true || empty($_smarty_tpl->getValue('apple_button')['processor_params']['apple_button_type']))) {?>
	<button type="button" class="btn_aps_applypay_checkout hidden b_product <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('apple_button')['processor_params']['apple_button_type'] ?? null)===null||$tmp==='' ? 'apple-pay-buy' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" 
		data-display_name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['processor_params']['apple_display_name']), ENT_QUOTES, 'UTF-8');?>
" 
		data-page="product" 
		data-payment_id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" 
		data-mi="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('apple_button')['merchant_identifier']), ENT_QUOTES, 'UTF-8');?>
"> </button>
	<input type="hidden" name="payment_data[aps][gateway]" value="apple" />
	<input type="hidden" name="payment_data[aps][apple][request_data]" class="inp_applepay_request_data" value="" />
	<input type="hidden" name="contact_data" class="inp_applepay_contact_data" value="" />
<?php }
}
}
}
