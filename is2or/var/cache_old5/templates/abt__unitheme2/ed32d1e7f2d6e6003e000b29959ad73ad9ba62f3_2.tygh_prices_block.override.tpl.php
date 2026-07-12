<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:58
  from 'tygh:addons/master_products/hooks/products/prices_block.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6e691883_18575908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed32d1e7f2d6e6003e000b29959ad73ad9ba62f3' => 
    array (
      0 => 'addons/master_products/hooks/products/prices_block.override.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_6a133f6e691883_18575908 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('master_products.best_price','master_products.vendor_products_filling','master_products.best_price','master_products.vendor_products_filling'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('product')['company_id'] && !$_smarty_tpl->getValue('product')['master_product_id']) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || ($_smarty_tpl->getValue('hide_add_to_cart_button') == "Y" && $_smarty_tpl->getValue('product')['zero_price_action'] == "A")) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?><span class="ty-master-products-products-prices-block__price ty-price<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="line_discounted_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->getValue('product')['product_id']),'live_editor_phrase'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('quick_view')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.best_price", array("[formatted_price]"=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))),"[link_class]"=>"cm-scroll","[data_scroll]"=>"#tabs_content"), $_smarty_tpl->getSmarty()->getLanguage());
} else {
$_smarty_tpl->assign('other_offers_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view&product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."#tabs_content"), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')));?>
<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('other_offers_link')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.vendor_products_filling", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="go_to_other_offers cm-tooltip"><i class="ut2-icon-local_offer"></i></a><?php }
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/prices_block.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/prices_block.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('product')['company_id'] && !$_smarty_tpl->getValue('product')['master_product_id']) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || ($_smarty_tpl->getValue('hide_add_to_cart_button') == "Y" && $_smarty_tpl->getValue('product')['zero_price_action'] == "A")) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?><span class="ty-master-products-products-prices-block__price ty-price<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="line_discounted_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->getValue('product')['product_id']),'live_editor_phrase'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('quick_view')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.best_price", array("[formatted_price]"=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))),"[link_class]"=>"cm-scroll","[data_scroll]"=>"#tabs_content"), $_smarty_tpl->getSmarty()->getLanguage());
} else {
$_smarty_tpl->assign('other_offers_link', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view&product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."#tabs_content"), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, "master_product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')));?>
<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('other_offers_link')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.vendor_products_filling", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="go_to_other_offers cm-tooltip"><i class="ut2-icon-local_offer"></i></a><?php }
}
}
}
}
}
