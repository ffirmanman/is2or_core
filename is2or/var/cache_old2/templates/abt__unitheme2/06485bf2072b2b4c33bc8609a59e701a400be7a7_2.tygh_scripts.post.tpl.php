<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/amazon_payment_services/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9762327_47883504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06485bf2072b2b4c33bc8609a59e701a400be7a7' => 
    array (
      0 => 'addons/amazon_payment_services/hooks/index/scripts.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa9762327_47883504 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/amazon_payment_services/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['controller'] == 'checkout') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/credit-card-validator.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/visa-checkout.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/slick.min.js"), $_smarty_tpl);?>

	<?php if ($_smarty_tpl->getValue('runtime')['mode'] == 'checkout') {?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/checkout.js"), $_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->getValue('runtime')['mode'] == 'cart') {?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/cart.js"), $_smarty_tpl);?>

	<?php }
}
if ($_smarty_tpl->getValue('runtime')['controller'] == 'products') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/product.js"), $_smarty_tpl);?>

<?php }
if ($_smarty_tpl->getValue('runtime')['controller'] == 'checkout') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/core.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/amazon_payment_services/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/amazon_payment_services/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['controller'] == 'checkout') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/credit-card-validator.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/visa-checkout.js"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/slick.min.js"), $_smarty_tpl);?>

	<?php if ($_smarty_tpl->getValue('runtime')['mode'] == 'checkout') {?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/checkout.js"), $_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->getValue('runtime')['mode'] == 'cart') {?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/cart.js"), $_smarty_tpl);?>

	<?php }
}
if ($_smarty_tpl->getValue('runtime')['controller'] == 'products') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/apple-pay/product.js"), $_smarty_tpl);?>

<?php }
if ($_smarty_tpl->getValue('runtime')['controller'] == 'checkout') {?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/amazon_payment_services/core.js"), $_smarty_tpl);?>

<?php }
}
}
}
