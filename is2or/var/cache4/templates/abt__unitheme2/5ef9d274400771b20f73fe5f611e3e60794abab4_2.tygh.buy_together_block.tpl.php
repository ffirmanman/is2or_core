<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__buy_together/components/buy_together_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c9acaa3_81362127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef9d274400771b20f73fe5f611e3e60794abab4' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__buy_together/components/buy_together_block.tpl',
      1 => 1747376510,
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
),false)) {
function content_6834571c9acaa3_81362127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),7=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('save_and_close','specify_options','specify_options','select_product','select_product','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price','save_and_close','specify_options','specify_options','select_product','select_product','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['chains']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_scroll', (($tmp = $_smarty_tpl->tpl_vars['show_scroll']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) && $_smarty_tpl->tpl_vars['addons']->value['ab__buy_together']['combinations_list_view'] == 'scroller' && smarty_modifier_count($_smarty_tpl->tpl_vars['chains']->value) > 1);?>
    <?php $_smarty_tpl->_assignInScope('behavior_of_similar_products', $_smarty_tpl->tpl_vars['addons']->value['ab__buy_together']['behavior_of_similar_products']);?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] == "mobile") {?>
        <?php $_smarty_tpl->_assignInScope('behavior_of_similar_products', "popup");?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/ab__buy_together/func.js"),$_smarty_tpl);?>

    <div class="ab__buy-together" id="ab__buy-together"><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value) {
$_smarty_tpl->_assignInScope('is_ajax', true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chains']->value, 'chain', false, 'key', 'chains', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['chain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['chain']->value) {
$_smarty_tpl->tpl_vars['chain']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index'];
$_smarty_tpl->_assignInScope('rand', rand());
if ($_REQUEST['force_chain_id']) {
$_smarty_tpl->_assignInScope('obj_prefix', "bt_".((string)$_REQUEST['force_chain_id']));
} else {
$_smarty_tpl->_assignInScope('obj_prefix', "bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']));
}?><form class="ab__bt_chain_form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>cm-ajax cm-ajax-full-render<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] : null) && $_smarty_tpl->tpl_vars['show_scroll']->value) {?> hidden<?php }?>"action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-chain-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"enctype="multipart/form-data"><?php if ($_smarty_tpl->tpl_vars['chain']->value['generator_id']) {?><input type="hidden" name="generator_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['generator_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="base_product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="result_ids" value="cart_status*,wish_list*"/><?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value || $_smarty_tpl->tpl_vars['is_ajax']->value) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" class="ab__chain_id" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" class="ab__product_id" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->_assignInScope('buy_together_options_class', "cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']));
if ($_smarty_tpl->tpl_vars['chain']->value['products']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chain']->value['products'], '_product', false, '_id');
$_smarty_tpl->tpl_vars['_product']->index = -1;
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
$_smarty_tpl->tpl_vars['_product']->index++;
$__foreach__product_53_saved = $_smarty_tpl->tpl_vars['_product'];
$_smarty_tpl->_assignInScope('buy_together_options_class', ((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']));
$_smarty_tpl->tpl_vars['_product'] = $__foreach__product_53_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="ab__bt <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['chain']->value['products']) > 3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?><div class="ab__bt_description"><?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>
</div><?php }?><div class="ab__bt_box"><div class="ab__bt_products ty-scroll-x"><?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?><div class="ab__bt_product <?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?> ab__bt_popup<?php }?>"><div class="ab__bt_product-image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"id="bt_product_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ab__bt_product-image",'lazy_load'=>false), 0, true);
?></a><!--bt_product_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ab__bt_product-wrap"><div class="ab__bt_rating-stars"><?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_reviews_count'], ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>false,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (strlen((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value)) > 40 && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != "D") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><div class="ab__bt_product-name"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buy_together_product_options", null, null);?><div id="buy_together_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_main" class="ab__bt-box"><div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
"id="buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1"/><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0, true);
?><!--buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0, true);
?></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><div class="ab__bt_product-options"><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary cm-dialog-keep-in-place",'text'=>$_smarty_tpl->__("specify_options"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buy_together_product_options'),'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0, true);
?></div><?php }?><div class="ab__bt_product-price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"id="bt_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty'] > 1) {?><span class="count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><span class="price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0, true);
?></span><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['chain']->value['price'] != $_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0, true);
?></span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div></div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chain']->value['products'], '_product', false, '_id');
$_smarty_tpl->tpl_vars['_product']->index = -1;
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
$_smarty_tpl->tpl_vars['_product']->index++;
$__foreach__product_54_saved = $_smarty_tpl->tpl_vars['_product'];
if ($_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) {
$_smarty_tpl->_assignInScope('title_string', $_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']);
} else {
$_smarty_tpl->_assignInScope('title_string', fn_get_category_name($_smarty_tpl->tpl_vars['_product']->value['product_data']['main_category']));
}?><div class="ab__bt_plus chain-plus">+</div><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "additional_products", null, null);
if ($_smarty_tpl->tpl_vars['chain']->value['generator_id'] && $_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index] && count($_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index], 'product', false, 'id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_product'=>$_smarty_tpl->tpl_vars['product']->value,'_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><div id="ab__bt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="products_container<?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?> ab__bt_popup<?php }
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?> splide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['_product']->value['unrequired']) {?><a href="javascript:void(0);" onclick="Tygh.$.togglePositionAvailability(this);" class="ab__bt_requared_pr_check"><i class="ty-icon-ok"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_string']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span class="ab__bt_requared_pr_check"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_string']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?><div class="splide__track"><div class="splide__list"><?php }?><input type="hidden" name="product_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "chain_popup", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"active"), 0, true);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chain_popup');
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?></div></div><?php }
}
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?><a href="" data-ca-target-id="content_buy_together_additional_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rand']->value, ENT_QUOTES, 'UTF-8');?>
"class="cm-dialog-opener cm-dialog-auto-size cm-dialog-keep-in-place ab__bt_link-sp"data-ca-dialog-title="<?php echo htmlspecialchars((string) (($tmp = smarty_modifier_trim($_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("select_product") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-refresh"></i> <span class=""><?php echo $_smarty_tpl->__("select_product");?>
</span></a><div id="content_buy_together_additional_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rand']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"><div class='ab__bt_products_popup' data-ca-parent-container='ab__bt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
'><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chain_popup'),array("content_buy_together_options","cm-reload","buy_together_options_update"),array("content_buy_together_options_fake","fake","buy_together_options_update_fake"));?>
</div></div><?php }
}?></div><?php
$_smarty_tpl->tpl_vars['_product'] = $__foreach__product_54_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="ab__bt_price-block"><div class="ab__bt_plus chain-equally"></div><div class="ab__bt_price-wrap"><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><div class="ab__bt_price <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ab__bt_price__old"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span><span class="chain-old-line ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0, true);
?></span></div><div class="ab__bt_price__new"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span><span class="price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0, true);
?></span></div><!--bt_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_add_to_cart_button")) {?><div class="cm-ab__bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?></div><?php }
} else { ?><p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p><?php }?></div></div></div></div></form><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {
echo smarty_function_script(array('src'=>"js/addons/ab__buy_together/lib/splidejs/splide.min.js"),$_smarty_tpl);
echo smarty_function_style(array('src'=>"../../responsive/css/addons/ab__buy_together/splide.min.css"),$_smarty_tpl);
}
echo '<script'; ?>
>(function (_, $) {let _setInputs = (container, productId, productPrice, discountedPrice) => {container.querySelector('input[name^=product_ids]').value = productId;container.querySelector('input[name^=total_price]').value = productPrice;container.querySelector('input[name^=discounted_price]').value = discountedPrice;};$.ceEvent('on', 'ce.commoninit', function (context) {var elm = context.find('#ab__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {<?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {?>elm.owlCarousel({direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function (item) {$('.ab__bt_chain_form.hidden').removeClass('hidden');}});<?php }
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?>var elms = document.getElementsByClassName("splide");let old_el = {};for (var i = 0; i < elms.length; i++) {new Splide(elms[i],{direction: 'ttb',autoHeight: false,autoWidth: false,fixedWidth: '210px',fixedHeight: '300px',height: '300px',heightRatio: 1.15,pagination: false,updateOnMove: true,perMove: 1,arrowPath: 'M615.2,5.9c-7.8-7.8-20.5-7.8-28.3,0L324.1,212.1c-9.8,7.3-18.8,7.3-28.3,0L34.1,5.8C26.3-2,13.6-1.9,5.8,5.9c-7.8,7.8-7.8,20.5,0,28.3l261.7,206.3C281.9,251,294.6,258,310,258c15.4,0,27.9-6.8,42.4-17.5L615.1,34.2C622.9,26.4,623,13.7,615.2,5.9z',breakpoints: {768: {heightRatio: .39,drag: false,},320: {heightRatio: .45,drag: false,},}}).mount().on('active', function (el) {if(old_el.i !== undefined && old_el.i === el){return;}old_el.i = el;let container =  el.slide.closest('.products_container');let ab__bt_product_prices_container = el.slide.getElementsByClassName('ab__bt_product_prices_container')[0];_setInputs(container,ab__bt_product_prices_container.dataset.caProductId,ab__bt_product_prices_container.dataset.caProductPrice,ab__bt_product_prices_container.dataset.caDiscountedPrice);getCombination(el.slide.closest('form'));});}<?php }?>}});<?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?>$('.ab__bt_products_popup').on('click','.ab__bt_product',(e)=>{e.preventDefault();let parentContainer = document.getElementById(e.currentTarget.parentNode.dataset.caParentContainer);$(e.currentTarget).parent().find('.ab__bt_product').removeClass('active');e.currentTarget.classList.add('active');$(parentContainer).find('.ab__bt_product').removeClass('active');let data = e.currentTarget.dataset;parentContainer.querySelector('[data-ca-product-id="'+data.caProductId+'"]').classList.add('active');_setInputs(parentContainer,data.caProductId,data.caProductPrice,data.caDiscountedPrice);getCombination(parentContainer.closest('form'));});<?php }?>}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__buy_together/components/buy_together_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__buy_together/components/buy_together_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['chains']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_scroll', (($tmp = $_smarty_tpl->tpl_vars['show_scroll']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) && $_smarty_tpl->tpl_vars['addons']->value['ab__buy_together']['combinations_list_view'] == 'scroller' && smarty_modifier_count($_smarty_tpl->tpl_vars['chains']->value) > 1);?>
    <?php $_smarty_tpl->_assignInScope('behavior_of_similar_products', $_smarty_tpl->tpl_vars['addons']->value['ab__buy_together']['behavior_of_similar_products']);?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] == "mobile") {?>
        <?php $_smarty_tpl->_assignInScope('behavior_of_similar_products', "popup");?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/ab__buy_together/func.js"),$_smarty_tpl);?>

    <div class="ab__buy-together" id="ab__buy-together"><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value) {
$_smarty_tpl->_assignInScope('is_ajax', true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chains']->value, 'chain', false, 'key', 'chains', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['chain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['chain']->value) {
$_smarty_tpl->tpl_vars['chain']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['index'];
$_smarty_tpl->_assignInScope('rand', rand());
if ($_REQUEST['force_chain_id']) {
$_smarty_tpl->_assignInScope('obj_prefix', "bt_".((string)$_REQUEST['force_chain_id']));
} else {
$_smarty_tpl->_assignInScope('obj_prefix', "bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']));
}?><form class="ab__bt_chain_form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>cm-ajax cm-ajax-full-render<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chains']->value['first'] : null) && $_smarty_tpl->tpl_vars['show_scroll']->value) {?> hidden<?php }?>"action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-chain-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"enctype="multipart/form-data"><?php if ($_smarty_tpl->tpl_vars['chain']->value['generator_id']) {?><input type="hidden" name="generator_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['generator_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="base_product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="result_ids" value="cart_status*,wish_list*"/><?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value || $_smarty_tpl->tpl_vars['is_ajax']->value) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?><input type="hidden" class="ab__chain_id" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" class="ab__product_id" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->_assignInScope('buy_together_options_class', "cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']));
if ($_smarty_tpl->tpl_vars['chain']->value['products']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chain']->value['products'], '_product', false, '_id');
$_smarty_tpl->tpl_vars['_product']->index = -1;
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
$_smarty_tpl->tpl_vars['_product']->index++;
$__foreach__product_57_saved = $_smarty_tpl->tpl_vars['_product'];
$_smarty_tpl->_assignInScope('buy_together_options_class', ((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']));
$_smarty_tpl->tpl_vars['_product'] = $__foreach__product_57_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="ab__bt <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['chain']->value['products']) > 3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?><div class="ab__bt_description"><?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>
</div><?php }?><div class="ab__bt_box"><div class="ab__bt_products ty-scroll-x"><?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?><div class="ab__bt_product <?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?> ab__bt_popup<?php }?>"><div class="ab__bt_product-image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"id="bt_product_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ab__bt_product-image",'lazy_load'=>false), 0, true);
?></a><!--bt_product_image_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ab__bt_product-wrap"><div class="ab__bt_rating-stars"><?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count']) {?><div class="cn-reviews">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_reviews_count'], ENT_QUOTES, 'UTF-8');?>
)</div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>false,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
} else { ?><div class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></div><?php }
} else {
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (strlen((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value)) > 40 && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != "D") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><div class="ab__bt_product-name"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buy_together_product_options", null, null);?><div id="buy_together_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_main" class="ab__bt-box"><div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
"id="buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1"/><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"/><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0, true);
?><!--buy_together_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0, true);
?></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><div class="ab__bt_product-options"><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary cm-dialog-keep-in-place",'text'=>$_smarty_tpl->__("specify_options"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buy_together_product_options'),'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0, true);
?></div><?php }?><div class="ab__bt_product-price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"id="bt_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty'] > 1) {?><span class="count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><span class="price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0, true);
?></span><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['chain']->value['price'] != $_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0, true);
?></span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div></div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chain']->value['products'], '_product', false, '_id');
$_smarty_tpl->tpl_vars['_product']->index = -1;
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
$_smarty_tpl->tpl_vars['_product']->index++;
$__foreach__product_58_saved = $_smarty_tpl->tpl_vars['_product'];
if ($_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) {
$_smarty_tpl->_assignInScope('title_string', $_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']);
} else {
$_smarty_tpl->_assignInScope('title_string', fn_get_category_name($_smarty_tpl->tpl_vars['_product']->value['product_data']['main_category']));
}?><div class="ab__bt_plus chain-plus">+</div><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "additional_products", null, null);
if ($_smarty_tpl->tpl_vars['chain']->value['generator_id'] && $_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index] && count($_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_positions']->value[$_smarty_tpl->tpl_vars['chain']->value['generator_id']][$_smarty_tpl->tpl_vars['_product']->index], 'product', false, 'id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_product'=>$_smarty_tpl->tpl_vars['product']->value,'_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><div id="ab__bt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="products_container<?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?> ab__bt_popup<?php }
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?> splide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['_product']->value['unrequired']) {?><a href="javascript:void(0);" onclick="Tygh.$.togglePositionAvailability(this);" class="ab__bt_requared_pr_check"><i class="ty-icon-ok"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_string']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span class="ab__bt_requared_pr_check"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_string']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products')) && $_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?><div class="splide__track"><div class="splide__list"><?php }?><input type="hidden" name="product_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="total_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['price'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="discounted_price[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "chain_popup", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__buy_together/components/slide_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"active"), 0, true);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chain_popup');
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?></div></div><?php }
}
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'additional_products'))) {
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?><a href="" data-ca-target-id="content_buy_together_additional_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rand']->value, ENT_QUOTES, 'UTF-8');?>
"class="cm-dialog-opener cm-dialog-auto-size cm-dialog-keep-in-place ab__bt_link-sp"data-ca-dialog-title="<?php echo htmlspecialchars((string) (($tmp = smarty_modifier_trim($_smarty_tpl->tpl_vars['_product']->value['translates'][(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['title']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("select_product") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-refresh"></i> <span class=""><?php echo $_smarty_tpl->__("select_product");?>
</span></a><div id="content_buy_together_additional_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rand']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"><div class='ab__bt_products_popup' data-ca-parent-container='ab__bt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
'><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'chain_popup'),array("content_buy_together_options","cm-reload","buy_together_options_update"),array("content_buy_together_options_fake","fake","buy_together_options_update_fake"));?>
</div></div><?php }
}?></div><?php
$_smarty_tpl->tpl_vars['_product'] = $__foreach__product_58_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="ab__bt_price-block"><div class="ab__bt_plus chain-equally"></div><div class="ab__bt_price-wrap"><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart")) {?><div class="ab__bt_price <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ab__bt_price__old"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span><span class="chain-old-line ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0, true);
?></span></div><div class="ab__bt_price__new"><span class="ab__bt_price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span><span class="price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0, true);
?></span></div><!--bt_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping'] == "hide_add_to_cart_button")) {?><div class="cm-ab__bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?></div><?php }
} else { ?><p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p><?php }?></div></div></div></div></form><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {
echo smarty_function_script(array('src'=>"js/addons/ab__buy_together/lib/splidejs/splide.min.js"),$_smarty_tpl);
echo smarty_function_style(array('src'=>"../../responsive/css/addons/ab__buy_together/splide.min.css"),$_smarty_tpl);
}
echo '<script'; ?>
>(function (_, $) {let _setInputs = (container, productId, productPrice, discountedPrice) => {container.querySelector('input[name^=product_ids]').value = productId;container.querySelector('input[name^=total_price]').value = productPrice;container.querySelector('input[name^=discounted_price]').value = discountedPrice;};$.ceEvent('on', 'ce.commoninit', function (context) {var elm = context.find('#ab__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {<?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {?>elm.owlCarousel({direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function (item) {$('.ab__bt_chain_form.hidden').removeClass('hidden');}});<?php }
if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "scroller") {?>var elms = document.getElementsByClassName("splide");let old_el = {};for (var i = 0; i < elms.length; i++) {new Splide(elms[i],{direction: 'ttb',autoHeight: false,autoWidth: false,fixedWidth: '210px',fixedHeight: '300px',height: '300px',heightRatio: 1.15,pagination: false,updateOnMove: true,perMove: 1,arrowPath: 'M615.2,5.9c-7.8-7.8-20.5-7.8-28.3,0L324.1,212.1c-9.8,7.3-18.8,7.3-28.3,0L34.1,5.8C26.3-2,13.6-1.9,5.8,5.9c-7.8,7.8-7.8,20.5,0,28.3l261.7,206.3C281.9,251,294.6,258,310,258c15.4,0,27.9-6.8,42.4-17.5L615.1,34.2C622.9,26.4,623,13.7,615.2,5.9z',breakpoints: {768: {heightRatio: .39,drag: false,},320: {heightRatio: .45,drag: false,},}}).mount().on('active', function (el) {if(old_el.i !== undefined && old_el.i === el){return;}old_el.i = el;let container =  el.slide.closest('.products_container');let ab__bt_product_prices_container = el.slide.getElementsByClassName('ab__bt_product_prices_container')[0];_setInputs(container,ab__bt_product_prices_container.dataset.caProductId,ab__bt_product_prices_container.dataset.caProductPrice,ab__bt_product_prices_container.dataset.caDiscountedPrice);getCombination(el.slide.closest('form'));});}<?php }?>}});<?php if ($_smarty_tpl->tpl_vars['behavior_of_similar_products']->value == "popup") {?>$('.ab__bt_products_popup').on('click','.ab__bt_product',(e)=>{e.preventDefault();let parentContainer = document.getElementById(e.currentTarget.parentNode.dataset.caParentContainer);$(e.currentTarget).parent().find('.ab__bt_product').removeClass('active');e.currentTarget.classList.add('active');$(parentContainer).find('.ab__bt_product').removeClass('active');let data = e.currentTarget.dataset;parentContainer.querySelector('[data-ca-product-id="'+data.caProductId+'"]').classList.add('active');_setInputs(parentContainer,data.caProductId,data.caProductPrice,data.caDiscountedPrice);getCombination(parentContainer.closest('form'));});<?php }?>}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php }
}
}
}
