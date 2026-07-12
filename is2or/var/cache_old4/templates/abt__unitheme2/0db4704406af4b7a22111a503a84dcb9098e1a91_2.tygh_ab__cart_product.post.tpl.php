<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/abt__unitheme2_mv/hooks/block_checkout/ab__cart_product.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5204478c03_43057992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db4704406af4b7a22111a503a84dcb9098e1a91' => 
    array (
      0 => 'addons/abt__unitheme2_mv/hooks/block_checkout/ab__cart_product.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5204478c03_43057992 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/block_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('vendor','vendor'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ab-checkout-vendor"><i></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['company_name']), ENT_QUOTES, 'UTF-8');?>
</b></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2_mv/hooks/block_checkout/ab__cart_product.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2_mv/hooks/block_checkout/ab__cart_product.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ab-checkout-vendor"><i></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['company_name']), ENT_QUOTES, 'UTF-8');?>
</b></div><?php }
}
}
