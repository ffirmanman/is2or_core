<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:58
  from 'tygh:addons/is2or_buy_now/hooks/products/add_to_cart.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6e3d9979_29777658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6106e05685a88e3d5991aaae7292d1c9016f3bf9' => 
    array (
      0 => 'addons/is2or_buy_now/hooks/products/add_to_cart.post.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6e3d9979_29777658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_buy_now/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('selected_layout') == 'products_without_options') {?>
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.buy_now?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('buy_now', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_buy_now/hooks/products/add_to_cart.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_buy_now/hooks/products/add_to_cart.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('details_page') || $_smarty_tpl->getValue('selected_layout') == 'products_without_options') {?>
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.buy_now?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('buy_now', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
<?php }
}
}
}
