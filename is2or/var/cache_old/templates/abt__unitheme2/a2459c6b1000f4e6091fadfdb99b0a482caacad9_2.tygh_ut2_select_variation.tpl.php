<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:53:43
  from 'tygh:views/products/ut2_select_variation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adc5b757e2b9_88430223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2459c6b1000f4e6091fadfdb99b0a482caacad9' => 
    array (
      0 => 'views/products/ut2_select_variation.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_icon.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
  ),
))) {
function content_69adc5b757e2b9_88430223 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products';
\Tygh\Languages\Helper::preloadLangVars(array('select_options','abt__ut2_extra_link_full_product_information','select_options','abt__ut2_extra_link_full_product_information'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_prefix', "svw", false, NULL);
$_smarty_tpl->assign('quick_view', false, false, NULL);
$_smarty_tpl->assign('ut2_select_variation', true, false, NULL);
if ($_smarty_tpl->getValue('redirect_url')) {
$_smarty_tpl->assign('r_url', $_smarty_tpl->getValue('redirect_url'), false, NULL);
} else {
$_smarty_tpl->assign('r_url', false, false, NULL);
}
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><div class="ut2_select_variation__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="ut2-btn-close"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div id="ut2_select_variation_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_add_to_cart'=>true,'show_product_options'=>true,'show_name'=>true,'show_price_values'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'hide_qty_label'=>true,'redirect_url'=>$_smarty_tpl->getValue('r_url'),'show_product_amount'=>true,'show_amount_label'=>false), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2_select_variation__product"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_gallery'=>false,'image_width'=>"80",'image_height'=>"80"), (int) 0, $_smarty_current_dir);
?><div class="ut2_select_variation__product-title list"><?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>"true"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>
</div></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2_select_variation__option"><?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>
</div><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('obj_id')))), ENT_QUOTES, 'UTF-8');?>
" title="" class="ut2_extra-link"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2_extra_link_full_product_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-arrow_forward"></i></a><div class="buttons-container ut2_select_variation__buttons"><div class="ut2_select_variation__price	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>"><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>
</div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ty-inline-block"><?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>
</div><?php }
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>
</div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>
<!--ut2_select_variation_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/ut2_select_variation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/ut2_select_variation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_prefix', "svw", false, NULL);
$_smarty_tpl->assign('quick_view', false, false, NULL);
$_smarty_tpl->assign('ut2_select_variation', true, false, NULL);
if ($_smarty_tpl->getValue('redirect_url')) {
$_smarty_tpl->assign('r_url', $_smarty_tpl->getValue('redirect_url'), false, NULL);
} else {
$_smarty_tpl->assign('r_url', false, false, NULL);
}
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><div class="ut2_select_variation__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_options", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<div class="ut2-btn-close"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div id="ut2_select_variation_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_add_to_cart'=>true,'show_product_options'=>true,'show_name'=>true,'show_price_values'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'hide_qty_label'=>true,'redirect_url'=>$_smarty_tpl->getValue('r_url'),'show_product_amount'=>true,'show_amount_label'=>false), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2_select_variation__product"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_gallery'=>false,'image_width'=>"80",'image_height'=>"80"), (int) 0, $_smarty_current_dir);
?><div class="ut2_select_variation__product-title list"><?php $_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>"true"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>
</div></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2_select_variation__option"><?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>
</div><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('obj_id')))), ENT_QUOTES, 'UTF-8');?>
" title="" class="ut2_extra-link"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2_extra_link_full_product_information", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><i class="ut2-icon-outline-arrow_forward"></i></a><div class="buttons-container ut2_select_variation__buttons"><div class="ut2_select_variation__price	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>"><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>
</div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ty-inline-block"><?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>
</div><?php }
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>
</div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"ut2_select_variation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>
<!--ut2_select_variation_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
