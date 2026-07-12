<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/ab__buy_together/components/buy_together_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ee6a7a94_29426245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c159b370c4f6ac55ea36cf29aba48a4beb69ac' => 
    array (
      0 => 'addons/ab__buy_together/components/buy_together_block.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:views/products/components/product_options.tpl' => 2,
    'tygh:buttons/button.tpl' => 4,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/price.tpl' => 8,
    'tygh:addons/ab__buy_together/components/slide_product.tpl' => 4,
  ),
))) {
function content_69ada1ee6a7a94_29426245 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__buy_together/components';
\Tygh\Languages\Helper::preloadLangVars(array('save_and_close','specify_options','specify_options','select_product','select_product','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price','save_and_close','specify_options','specify_options','select_product','select_product','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('chains')) {?>
    <?php $_smarty_tpl->assign('show_scroll', (($tmp = $_smarty_tpl->getValue('show_scroll') ?? null)===null||$tmp==='' ? true ?? null : $tmp) && $_smarty_tpl->getValue('addons')['ab__buy_together']['combinations_list_view'] == 'scroller' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('chains')) > 1, false, NULL);?>
    <?php $_smarty_tpl->assign('behavior_of_similar_products', $_smarty_tpl->getValue('addons')['ab__buy_together']['behavior_of_similar_products'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {?>
        <?php $_smarty_tpl->assign('behavior_of_similar_products', "popup", false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__buy_together/func.js"), $_smarty_tpl);?>

    <div class="ab__buy-together" id="ab__buy-together"><?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] && !$_smarty_tpl->getValue('no_ajax')) {
$_smarty_tpl->assign('is_ajax', true, false, NULL);
}
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chains'), 'chain', false, 'key', 'chains', array (
  'first' => true,
  'index' => true,
));
$foreach50DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('chain')->value) {
$foreach50DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index'];
$_smarty_tpl->assign('rand', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
if ($_REQUEST['force_chain_id']) {
$_smarty_tpl->assign('obj_prefix', "bt_".((string)$_REQUEST['force_chain_id']), false, NULL);
} else {
$_smarty_tpl->assign('obj_prefix', "bt_".((string)$_smarty_tpl->getValue('chain')['chain_id']), false, NULL);
}?><form class="ab__bt_chain_form <?php if ($_smarty_tpl->getValue('is_ajax')) {?>cm-ajax cm-ajax-full-render<?php }
if (!($_smarty_tpl->getValue('__smarty_foreach_chains')['first'] ?? null) && $_smarty_tpl->getValue('show_scroll')) {?> hidden<?php }?>"action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"data-ca-chain-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"enctype="multipart/form-data"><?php if ($_smarty_tpl->getValue('chain')['generator_id']) {?><input type="hidden" name="generator_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['generator_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="base_product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="result_ids" value="cart_status*,wish_list*"/><?php if (!$_smarty_tpl->getValue('stay_in_cart') || $_smarty_tpl->getValue('is_ajax')) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" class="ab__chain_id" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
][chain]"value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" class="ab__product_id" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
][product_id]"value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->assign('buy_together_options_class', "cm-reload-".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('chain')['product_id']), false, NULL);
if ($_smarty_tpl->getValue('chain')['products']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chain')['products'], '_product', false, '_id');
$_smarty_tpl->getVariable('_product')->index = -1;
$foreach51DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_id')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach51DoElse = false;
$_smarty_tpl->getVariable('_product')->index++;
$foreach51Backup = clone $_smarty_tpl->getVariable('_product');
$_smarty_tpl->assign('buy_together_options_class', ((string)$_smarty_tpl->getValue('buy_together_options_class'))." cm-reload-".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('_product')['product_id']), false, NULL);
$_smarty_tpl->setVariable('_product', $foreach51Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?><div class="ab__bt <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('chain')['products']) > 3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['name']), ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->getValue('chain')['description']) {?><div class="ab__bt_description"><?php echo $_smarty_tpl->getValue('chain')['description'];?>
</div><?php }?><div class="ab__bt_box"><div class="ab__bt_products ty-scroll-x"><?php if ($_smarty_tpl->getValue('chain')['products']) {?><div class="ab__bt_product <?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?> ab__bt_popup<?php }?>"><div class="ab__bt_product-image cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"id="bt_product_image_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('chain')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->getValue('chain')['chain_id'])."_".((string)$_smarty_tpl->getValue('chain')['product_id']),'images'=>$_smarty_tpl->getValue('chain')['main_pair'],'class'=>"ab__bt_product-image",'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></a><!--bt_product_image_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ab__bt_product-wrap"><div class="ab__bt_rating-stars"><?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->getValue('product')['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_reviews_count']), ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>false,'product'=>$_smarty_tpl->getValue('product')), (int) 0, $_smarty_current_dir);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if (strlen((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'))) > 40 && $_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != "D") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'));
} elseif ($_smarty_tpl->getValue('addons')['discussion']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><div class="ab__bt_product-name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('chain')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('chain')['product_name'],66,"...",true)), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->getValue('chain')['product_options']) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buy_together_product_options", null, null);?><div id="buy_together_options_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
_main" class="ab__bt-box"><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('buy_together_options_class')), ENT_QUOTES, 'UTF-8');?>
"id="buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1"/><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('chain'),'id'=>((string)$_smarty_tpl->getValue('chain')['product_id'])."_".((string)$_smarty_tpl->getValue('chain')['chain_id']),'product_options'=>$_smarty_tpl->getValue('chain')['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->getValue('chain')['product_id'])."_".((string)$_smarty_tpl->getValue('chain')['chain_id'])."_main"), (int) 0, $_smarty_current_dir);
?><!--buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("save_and_close", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), (int) 0, $_smarty_current_dir);
?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div class="ab__bt_product-options"><?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"buy_together_options_".((string)$_smarty_tpl->getValue('chain')['chain_id'])."_".((string)$_smarty_tpl->getValue('chain')['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary cm-dialog-keep-in-place",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("specify_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buy_together_product_options'),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("specify_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'act'=>"general"), (int) 0, $_smarty_current_dir);
?></div><?php }?><div class="ab__bt_product-price cm-reload-<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"id="bt_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->getValue('chain')['min_qty'] > 1) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['min_qty']), ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><span class="price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['discounted_price']), (int) 0, $_smarty_current_dir);
?></span><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['discounted_price']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['price']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('chain')['price'] != $_smarty_tpl->getValue('chain')['discounted_price']) {?><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['price']), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['price']), (int) 0, $_smarty_current_dir);
?></span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div></div></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chain')['products'], '_product', false, '_id');
$_smarty_tpl->getVariable('_product')->index = -1;
$foreach52DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_id')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach52DoElse = false;
$_smarty_tpl->getVariable('_product')->index++;
$foreach52Backup = clone $_smarty_tpl->getVariable('_product');
if ($_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) {
$_smarty_tpl->assign('title_string', $_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title'], false, NULL);
} else {
$_smarty_tpl->assign('title_string', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_category_name')($_smarty_tpl->getValue('_product')['product_data']['main_category']), false, NULL);
}?><div class="ab__bt_plus chain-plus">+</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "additional_products", null, null);
if ($_smarty_tpl->getValue('chain')['generator_id'] && $_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index])) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index], 'product', false, 'id');
$foreach53DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach53DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_product'=>$_smarty_tpl->getValue('product'),'_id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div id="ab__bt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
" class="products_container<?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?> ab__bt_popup<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?> splide<?php }?>"><?php if ($_smarty_tpl->getValue('_product')['unrequired']) {?><a href="javascript:void(0);" onclick="Tygh.$.togglePositionAvailability(this);" class="ab__bt_requared_pr_check"><i class="ty-icon-ok"></i><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_string')), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span class="ab__bt_requared_pr_check"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_string')), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?><div class="splide__track"><div class="splide__list"><?php }?><input type="hidden" name="product_ids[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['price']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['discounted_price']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "chain_popup", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"active"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'chain_popup');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?></div></div><?php }
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?><a href="" data-ca-target-id="content_buy_together_additional_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rand')), ENT_QUOTES, 'UTF-8');?>
"class="cm-dialog-opener cm-dialog-auto-size cm-dialog-keep-in-place ab__bt_link-sp"data-ca-dialog-title="<?php echo (($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_product", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"><i class="ty-icon-refresh"></i> <span class=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><div id="content_buy_together_additional_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rand')), ENT_QUOTES, 'UTF-8');?>
" class="hidden"><div class='ab__bt_products_popup' data-ca-parent-container='ab__bt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'chain_popup'),array("content_buy_together_options","cm-reload","buy_together_options_update"),array("content_buy_together_options_fake","fake","buy_together_options_update_fake"));?>
</div></div><?php }
}?></div><?php
$_smarty_tpl->setVariable('_product', $foreach52Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><div class="ab__bt_price-block"><div class="ab__bt_plus chain-equally"></div><div class="ab__bt_price-wrap"><?php if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><div class="ab__bt_price <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('buy_together_options_class')), ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="ab__bt_price__old"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_list_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="chain-old-line ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['total_price']), (int) 0, $_smarty_current_dir);
?></span></div><div class="ab__bt_price__new"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_for_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['chain_price']), (int) 0, $_smarty_current_dir);
?></span></div><!--bt_total_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_add_to_cart_button")) {?><div class="cm-ab__bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_all_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_id'=>"chain_button_".((string)$_smarty_tpl->getValue('chain')['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?></div><?php }
} else { ?><p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_view_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p><?php }?></div></div></div></div></form><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__buy_together/lib/splidejs/splide.min.js"), $_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../responsive/css/addons/ab__buy_together/splide.min.css"), $_smarty_tpl);
}
echo '<script'; ?>
>(function (_, $) {let _setInputs = (container, productId, productPrice, discountedPrice) => {container.querySelector('input[name^=product_ids]').value = productId;container.querySelector('input[name^=total_price]').value = productPrice;container.querySelector('input[name^=discounted_price]').value = discountedPrice;};$.ceEvent('on', 'ce.commoninit', function (context) {var elm = context.find('#ab__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {<?php if ($_smarty_tpl->getValue('show_scroll')) {?>elm.owlCarousel({direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function (item) {$('.ab__bt_chain_form.hidden').removeClass('hidden');}});<?php }
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?>var elms = document.getElementsByClassName("splide");let old_el = {};for (var i = 0; i < elms.length; i++) {new Splide(elms[i],{direction: 'ttb',autoHeight: false,autoWidth: false,fixedWidth: '210px',fixedHeight: '300px',height: '300px',heightRatio: 1.15,pagination: false,updateOnMove: true,perMove: 1,arrowPath: 'M615.2,5.9c-7.8-7.8-20.5-7.8-28.3,0L324.1,212.1c-9.8,7.3-18.8,7.3-28.3,0L34.1,5.8C26.3-2,13.6-1.9,5.8,5.9c-7.8,7.8-7.8,20.5,0,28.3l261.7,206.3C281.9,251,294.6,258,310,258c15.4,0,27.9-6.8,42.4-17.5L615.1,34.2C622.9,26.4,623,13.7,615.2,5.9z',breakpoints: {768: {heightRatio: .39,drag: false,},320: {heightRatio: .45,drag: false,},}}).mount().on('active', function (el) {if(old_el.i !== undefined && old_el.i === el){return;}old_el.i = el;let container =  el.slide.closest('.products_container');let ab__bt_product_prices_container = el.slide.getElementsByClassName('ab__bt_product_prices_container')[0];_setInputs(container,ab__bt_product_prices_container.dataset.caProductId,ab__bt_product_prices_container.dataset.caProductPrice,ab__bt_product_prices_container.dataset.caDiscountedPrice);getCombination(el.slide.closest('form'));});}<?php }?>}});<?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?>$('.ab__bt_products_popup').on('click','.ab__bt_product',(e)=>{e.preventDefault();let parentContainer = document.getElementById(e.currentTarget.parentNode.dataset.caParentContainer);$(e.currentTarget).parent().find('.ab__bt_product').removeClass('active');e.currentTarget.classList.add('active');$(parentContainer).find('.ab__bt_product').removeClass('active');let data = e.currentTarget.dataset;parentContainer.querySelector('[data-ca-product-id="'+data.caProductId+'"]').classList.add('active');_setInputs(parentContainer,data.caProductId,data.caProductPrice,data.caDiscountedPrice);getCombination(parentContainer.closest('form'));});<?php }?>}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__buy_together/components/buy_together_block.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__buy_together/components/buy_together_block.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('chains')) {?>
    <?php $_smarty_tpl->assign('show_scroll', (($tmp = $_smarty_tpl->getValue('show_scroll') ?? null)===null||$tmp==='' ? true ?? null : $tmp) && $_smarty_tpl->getValue('addons')['ab__buy_together']['combinations_list_view'] == 'scroller' && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('chains')) > 1, false, NULL);?>
    <?php $_smarty_tpl->assign('behavior_of_similar_products', $_smarty_tpl->getValue('addons')['ab__buy_together']['behavior_of_similar_products'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {?>
        <?php $_smarty_tpl->assign('behavior_of_similar_products', "popup", false, NULL);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__buy_together/func.js"), $_smarty_tpl);?>

    <div class="ab__buy-together" id="ab__buy-together"><?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] && !$_smarty_tpl->getValue('no_ajax')) {
$_smarty_tpl->assign('is_ajax', true, false, NULL);
}
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chains'), 'chain', false, 'key', 'chains', array (
  'first' => true,
  'index' => true,
));
$foreach54DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('chain')->value) {
$foreach54DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index'];
$_smarty_tpl->assign('rand', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
if ($_REQUEST['force_chain_id']) {
$_smarty_tpl->assign('obj_prefix', "bt_".((string)$_REQUEST['force_chain_id']), false, NULL);
} else {
$_smarty_tpl->assign('obj_prefix', "bt_".((string)$_smarty_tpl->getValue('chain')['chain_id']), false, NULL);
}?><form class="ab__bt_chain_form <?php if ($_smarty_tpl->getValue('is_ajax')) {?>cm-ajax cm-ajax-full-render<?php }
if (!($_smarty_tpl->getValue('__smarty_foreach_chains')['first'] ?? null) && $_smarty_tpl->getValue('show_scroll')) {?> hidden<?php }?>"action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"data-ca-chain-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"enctype="multipart/form-data"><?php if ($_smarty_tpl->getValue('chain')['generator_id']) {?><input type="hidden" name="generator_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['generator_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="base_product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="result_ids" value="cart_status*,wish_list*"/><?php if (!$_smarty_tpl->getValue('stay_in_cart') || $_smarty_tpl->getValue('is_ajax')) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" class="ab__chain_id" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
][chain]"value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" class="ab__product_id" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
][product_id]"value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->assign('buy_together_options_class', "cm-reload-".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('chain')['product_id']), false, NULL);
if ($_smarty_tpl->getValue('chain')['products']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chain')['products'], '_product', false, '_id');
$_smarty_tpl->getVariable('_product')->index = -1;
$foreach55DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_id')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach55DoElse = false;
$_smarty_tpl->getVariable('_product')->index++;
$foreach55Backup = clone $_smarty_tpl->getVariable('_product');
$_smarty_tpl->assign('buy_together_options_class', ((string)$_smarty_tpl->getValue('buy_together_options_class'))." cm-reload-".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('_product')['product_id']), false, NULL);
$_smarty_tpl->setVariable('_product', $foreach55Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?><div class="ab__bt <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('chain')['products']) > 3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['name']), ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->getValue('chain')['description']) {?><div class="ab__bt_description"><?php echo $_smarty_tpl->getValue('chain')['description'];?>
</div><?php }?><div class="ab__bt_box"><div class="ab__bt_products ty-scroll-x"><?php if ($_smarty_tpl->getValue('chain')['products']) {?><div class="ab__bt_product <?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?> ab__bt_popup<?php }?>"><div class="ab__bt_product-image cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"id="bt_product_image_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('chain')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->getValue('chain')['chain_id'])."_".((string)$_smarty_tpl->getValue('chain')['product_id']),'images'=>$_smarty_tpl->getValue('chain')['main_pair'],'class'=>"ab__bt_product-image",'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></a><!--bt_product_image_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ab__bt_product-wrap"><div class="ab__bt_rating-stars"><?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->getValue('product')['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_reviews_count']), ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>false,'product'=>$_smarty_tpl->getValue('product')), (int) 0, $_smarty_current_dir);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if (strlen((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'))) > 40 && $_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != "D") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'));
} elseif ($_smarty_tpl->getValue('addons')['discussion']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><div class="ab__bt_product-name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('chain')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('chain')['product_name'],66,"...",true)), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->getValue('chain')['product_options']) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buy_together_product_options", null, null);?><div id="buy_together_options_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
_main" class="ab__bt-box"><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('buy_together_options_class')), ENT_QUOTES, 'UTF-8');?>
"id="buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1"/><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('chain'),'id'=>((string)$_smarty_tpl->getValue('chain')['product_id'])."_".((string)$_smarty_tpl->getValue('chain')['chain_id']),'product_options'=>$_smarty_tpl->getValue('chain')['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->getValue('chain')['product_id'])."_".((string)$_smarty_tpl->getValue('chain')['chain_id'])."_main"), (int) 0, $_smarty_current_dir);
?><!--buy_together_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("save_and_close", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), (int) 0, $_smarty_current_dir);
?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div class="ab__bt_product-options"><?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"buy_together_options_".((string)$_smarty_tpl->getValue('chain')['chain_id'])."_".((string)$_smarty_tpl->getValue('chain')['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary cm-dialog-keep-in-place",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("specify_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buy_together_product_options'),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("specify_options", [], $_smarty_tpl->getSmarty()->getLanguage()),'act'=>"general"), (int) 0, $_smarty_current_dir);
?></div><?php }?><div class="ab__bt_product-price cm-reload-<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"id="bt_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->getValue('chain')['min_qty'] > 1) {?><span class="count"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['min_qty']), ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><span class="price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['discounted_price']), (int) 0, $_smarty_current_dir);
?></span><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['discounted_price']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['price']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('chain')['price'] != $_smarty_tpl->getValue('chain')['discounted_price']) {?><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['price']), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['price']), (int) 0, $_smarty_current_dir);
?></span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
_main--></div></div></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('chain')['products'], '_product', false, '_id');
$_smarty_tpl->getVariable('_product')->index = -1;
$foreach56DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_id')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach56DoElse = false;
$_smarty_tpl->getVariable('_product')->index++;
$foreach56Backup = clone $_smarty_tpl->getVariable('_product');
if ($_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) {
$_smarty_tpl->assign('title_string', $_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title'], false, NULL);
} else {
$_smarty_tpl->assign('title_string', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_category_name')($_smarty_tpl->getValue('_product')['product_data']['main_category']), false, NULL);
}?><div class="ab__bt_plus chain-plus">+</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "additional_products", null, null);
if ($_smarty_tpl->getValue('chain')['generator_id'] && $_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index])) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products_positions')[$_smarty_tpl->getValue('chain')['generator_id']][$_smarty_tpl->getVariable('_product')->index], 'product', false, 'id');
$foreach57DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach57DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_product'=>$_smarty_tpl->getValue('product'),'_id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?><div id="ab__bt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
" class="products_container<?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?> ab__bt_popup<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?> splide<?php }?>"><?php if ($_smarty_tpl->getValue('_product')['unrequired']) {?><a href="javascript:void(0);" onclick="Tygh.$.togglePositionAvailability(this);" class="ab__bt_requared_pr_check"><i class="ty-icon-ok"></i><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_string')), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span class="ab__bt_requared_pr_check"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_string')), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?><div class="splide__track"><div class="splide__list"><?php }?><input type="hidden" name="product_ids[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['price']), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['discounted_price']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "chain_popup", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"active"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'chain_popup');
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?></div></div><?php }
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?><a href="" data-ca-target-id="content_buy_together_additional_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rand')), ENT_QUOTES, 'UTF-8');?>
"class="cm-dialog-opener cm-dialog-auto-size cm-dialog-keep-in-place ab__bt_link-sp"data-ca-dialog-title="<?php echo (($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('_product')['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_product", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
"><i class="ty-icon-refresh"></i> <span class=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><div id="content_buy_together_additional_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rand')), ENT_QUOTES, 'UTF-8');?>
" class="hidden"><div class='ab__bt_products_popup' data-ca-parent-container='ab__bt_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_id')), ENT_QUOTES, 'UTF-8');?>
'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'chain_popup'),array("content_buy_together_options","cm-reload","buy_together_options_update"),array("content_buy_together_options_fake","fake","buy_together_options_update_fake"));?>
</div></div><?php }
}?></div><?php
$_smarty_tpl->setVariable('_product', $foreach56Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><div class="ab__bt_price-block"><div class="ab__bt_plus chain-equally"></div><div class="ab__bt_price-wrap"><?php if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><div class="ab__bt_price <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('buy_together_options_class')), ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="ab__bt_price__old"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_list_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="chain-old-line ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['total_price']), (int) 0, $_smarty_current_dir);
?></span></div><div class="ab__bt_price__new"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("price_for_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('chain')['chain_price']), (int) 0, $_smarty_current_dir);
?></span></div><!--bt_total_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['product_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['General']['allow_anonymous_shopping'] == "hide_add_to_cart_button")) {?><div class="cm-ab__bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('chain')['chain_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_all_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_id'=>"chain_button_".((string)$_smarty_tpl->getValue('chain')['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->getValue('obj_id')), (int) 0, $_smarty_current_dir);
?></div><?php }
} else { ?><p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_view_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p><?php }?></div></div></div></div></form><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__buy_together/lib/splidejs/splide.min.js"), $_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../responsive/css/addons/ab__buy_together/splide.min.css"), $_smarty_tpl);
}
echo '<script'; ?>
>(function (_, $) {let _setInputs = (container, productId, productPrice, discountedPrice) => {container.querySelector('input[name^=product_ids]').value = productId;container.querySelector('input[name^=total_price]').value = productPrice;container.querySelector('input[name^=discounted_price]').value = discountedPrice;};$.ceEvent('on', 'ce.commoninit', function (context) {var elm = context.find('#ab__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {<?php if ($_smarty_tpl->getValue('show_scroll')) {?>elm.owlCarousel({direction: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function (item) {$('.ab__bt_chain_form.hidden').removeClass('hidden');}});<?php }
if ($_smarty_tpl->getValue('behavior_of_similar_products') == "scroller") {?>var elms = document.getElementsByClassName("splide");let old_el = {};for (var i = 0; i < elms.length; i++) {new Splide(elms[i],{direction: 'ttb',autoHeight: false,autoWidth: false,fixedWidth: '210px',fixedHeight: '300px',height: '300px',heightRatio: 1.15,pagination: false,updateOnMove: true,perMove: 1,arrowPath: 'M615.2,5.9c-7.8-7.8-20.5-7.8-28.3,0L324.1,212.1c-9.8,7.3-18.8,7.3-28.3,0L34.1,5.8C26.3-2,13.6-1.9,5.8,5.9c-7.8,7.8-7.8,20.5,0,28.3l261.7,206.3C281.9,251,294.6,258,310,258c15.4,0,27.9-6.8,42.4-17.5L615.1,34.2C622.9,26.4,623,13.7,615.2,5.9z',breakpoints: {768: {heightRatio: .39,drag: false,},320: {heightRatio: .45,drag: false,},}}).mount().on('active', function (el) {if(old_el.i !== undefined && old_el.i === el){return;}old_el.i = el;let container =  el.slide.closest('.products_container');let ab__bt_product_prices_container = el.slide.getElementsByClassName('ab__bt_product_prices_container')[0];_setInputs(container,ab__bt_product_prices_container.dataset.caProductId,ab__bt_product_prices_container.dataset.caProductPrice,ab__bt_product_prices_container.dataset.caDiscountedPrice);getCombination(el.slide.closest('form'));});}<?php }?>}});<?php if ($_smarty_tpl->getValue('behavior_of_similar_products') == "popup") {?>$('.ab__bt_products_popup').on('click','.ab__bt_product',(e)=>{e.preventDefault();let parentContainer = document.getElementById(e.currentTarget.parentNode.dataset.caParentContainer);$(e.currentTarget).parent().find('.ab__bt_product').removeClass('active');e.currentTarget.classList.add('active');$(parentContainer).find('.ab__bt_product').removeClass('active');let data = e.currentTarget.dataset;parentContainer.querySelector('[data-ca-product-id="'+data.caProductId+'"]').classList.add('active');_setInputs(parentContainer,data.caProductId,data.caProductPrice,data.caDiscountedPrice);getCombination(parentContainer.closest('form'));});<?php }?>}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
}
}
}
