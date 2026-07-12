<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:32
  from 'tygh:addons/price_per_unit/hooks/products/product_data.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2188a0538_83586605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c37f72ebb02f2a35f5e4845e5ff7508ab9070c2c' => 
    array (
      0 => 'addons/price_per_unit/hooks/products/product_data.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69afb2188a0538_83586605 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/price_per_unit/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('shipping_per','shipping_per'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "price_per_unit_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->getValue('hide_add_to_cart_button') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['zero_price_action'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->getValue('product')['units_in_product'] !== "0.000" && $_smarty_tpl->getValue('product')['unit_name'] && ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->getValue('auth')['user_id'])) {
$_smarty_tpl->assign('price_per_unit', $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price'])/$_smarty_tpl->getValue('product')['units_in_product']*$_smarty_tpl->getValue('product')['show_price_per_x_units'], false, NULL);?><div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ty-price-per-unit <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?> price-wrap" id="price_per_unit_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getValue('product')['units_in_product'],"0"),".")), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['unit_name']), ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('price_per_unit')), (int) 0, $_smarty_current_dir);
?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_per", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php if ($_smarty_tpl->getValue('product')['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getValue('product')['show_price_per_x_units'],"0"),".")), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['unit_name']), ENT_QUOTES, 'UTF-8');?>
)<!--price_per_unit_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "price_per_unit_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/price_per_unit/hooks/products/product_data.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/price_per_unit/hooks/products/product_data.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "price_per_unit_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->getValue('hide_add_to_cart_button') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['zero_price_action'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->getValue('product')['units_in_product'] !== "0.000" && $_smarty_tpl->getValue('product')['unit_name'] && ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->getValue('auth')['user_id'])) {
$_smarty_tpl->assign('price_per_unit', $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price'])/$_smarty_tpl->getValue('product')['units_in_product']*$_smarty_tpl->getValue('product')['show_price_per_x_units'], false, NULL);?><div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ty-price-per-unit <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?> price-wrap" id="price_per_unit_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getValue('product')['units_in_product'],"0"),".")), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['unit_name']), ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('price_per_unit')), (int) 0, $_smarty_current_dir);
?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_per", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php if ($_smarty_tpl->getValue('product')['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getSmarty()->getModifierCallback('rtrim')($_smarty_tpl->getValue('product')['show_price_per_x_units'],"0"),".")), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['unit_name']), ENT_QUOTES, 'UTF-8');?>
)<!--price_per_unit_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "price_per_unit_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }
}
}
}
