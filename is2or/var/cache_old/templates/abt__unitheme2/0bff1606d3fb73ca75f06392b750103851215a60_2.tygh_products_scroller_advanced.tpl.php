<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:13
  from 'tygh:blocks/products/products_scroller_advanced.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9605011023_31333669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bff1606d3fb73ca75f06392b750103851215a60' => 
    array (
      0 => 'blocks/products/products_scroller_advanced.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/components/grid_list_settings.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_icon.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
))) {
function content_69ad9605011023_31333669 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php if ($_smarty_tpl->getValue('block')['properties']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->assign('quick_nav_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fields_from_multi_level')($_smarty_tpl->getValue('items'),"product_id","product_id"), false, NULL);
}
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('show_add_to_cart', false, false, NULL);
} else {
$_smarty_tpl->assign('show_add_to_cart', true, false, NULL);
}
if ($_smarty_tpl->getValue('block')['properties']['show_price'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('show_price', true, false, NULL);
$_smarty_tpl->assign('show_old_price', true, false, NULL);
$_smarty_tpl->assign('show_clean_price', true, false, NULL);
} else {
$_smarty_tpl->assign('show_price', false, false, NULL);
$_smarty_tpl->assign('show_old_price', false, false, NULL);
$_smarty_tpl->assign('show_clean_price', false, false, NULL);
}
$_smarty_tpl->assign('show_name', true, false, NULL);
$_smarty_tpl->assign('show_rating', true, false, NULL);
$_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->assign('show_sku', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->assign('show_qty', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable2 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_brand_name', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "name", false, NULL);
$_smarty_tpl->assign('show_brand_logo', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "logo", false, NULL);
$_smarty_tpl->assign('hide_qty_label', true, false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->assign('show_product_amount', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_amount_label', false, false, NULL);
$_smarty_tpl->assign('show_product_labels', true, false, 2);
$_smarty_tpl->assign('show_discount_label', true, false, 2);
$_smarty_tpl->assign('show_shipping_label', true, false, 2);
$_smarty_tpl->assign('show_list_buttons', false, false, NULL);
$_smarty_tpl->assign('but_role', "action", false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);
$_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['thumbnail_width'])) && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->assign('tbw', $_smarty_tpl->getValue('block')['properties']['thumbnail_width'], false, NULL);
} else {
$_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);
}
if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'])) && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->assign('tbh', $_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'], false, NULL);
} else {
$_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('uniqid')()), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('block')['block_id'])."_".$_prefixVariable4), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
$_tmp_array = $_smarty_tpl->getValue('block') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = $_prefixVariable5;
$_smarty_tpl->assign('block', $_tmp_array, false, 2);
if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="owl-theme ty-owl-controls"><div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="owl-buttons"><div id="owl_prev_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ut2-icon-arrow_back_black"></i></div><div id="owl_next_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ut2-icon-arrow_forward_black"></i></div></div></div></div><?php }?><div id="scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="grid-list ut2-gl owl-carousel ty-scroller-list ty-scroller active-scroll"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'product', false, NULL, 'for_products', array (
));
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach6DoElse = false;
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2-gl__item<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] <= 0) {?> out-of-stock<?php }?>"><?php if ($_smarty_tpl->getValue('product')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>$_smarty_tpl->getValue('show_labels_in_title')), (int) 0, $_smarty_current_dir);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'thumbnails_size'=>$_smarty_tpl->getValue('thumbnails_size'),'show_gallery'=>false), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
}?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></div><?php }
}?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {
$_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?><div class="ut2-gl__control <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));
if ($_smarty_tpl->getValue('show_qty') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable6 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
}
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?></div><?php }
}?><div class="ut2-gl__content"><div class="ut2-gl__name"><?php if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cur_number')), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"num + 1",'num'=>$_smarty_tpl->getValue('cur_number'),'assign'=>"cur_number"), $_smarty_tpl);
}
$_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>
</div><?php if ($_smarty_tpl->getValue('product')['product_code']) {
$_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));
}
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-gl__amount"><?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>
</div><?php }
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable7 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_and_text') {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
} else {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable8 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable9 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}}
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable10 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?></div><?php }?></div><?php }?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_scroller_advanced_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->getValue('obj_prefix')),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->getValue('obj_prefix'))), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller_advanced.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/products/products_scroller_advanced.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php if ($_smarty_tpl->getValue('block')['properties']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->assign('quick_nav_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fields_from_multi_level')($_smarty_tpl->getValue('items'),"product_id","product_id"), false, NULL);
}
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('show_add_to_cart', false, false, NULL);
} else {
$_smarty_tpl->assign('show_add_to_cart', true, false, NULL);
}
if ($_smarty_tpl->getValue('block')['properties']['show_price'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('show_price', true, false, NULL);
$_smarty_tpl->assign('show_old_price', true, false, NULL);
$_smarty_tpl->assign('show_clean_price', true, false, NULL);
} else {
$_smarty_tpl->assign('show_price', false, false, NULL);
$_smarty_tpl->assign('show_old_price', false, false, NULL);
$_smarty_tpl->assign('show_clean_price', false, false, NULL);
}
$_smarty_tpl->assign('show_name', true, false, NULL);
$_smarty_tpl->assign('show_rating', true, false, NULL);
$_smarty_tpl->assign('show_list_discount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->assign('show_sku', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable11 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable12 = ob_get_clean();
$_smarty_tpl->assign('show_qty', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable12 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_brand_name', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "name", false, NULL);
$_smarty_tpl->assign('show_brand_logo', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "logo", false, NULL);
$_smarty_tpl->assign('hide_qty_label', true, false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->assign('show_product_amount', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable13 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('show_amount_label', false, false, NULL);
$_smarty_tpl->assign('show_product_labels', true, false, 2);
$_smarty_tpl->assign('show_discount_label', true, false, 2);
$_smarty_tpl->assign('show_shipping_label', true, false, 2);
$_smarty_tpl->assign('show_list_buttons', false, false, NULL);
$_smarty_tpl->assign('but_role', "action", false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);
$_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['thumbnail_width'])) && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->assign('tbw', $_smarty_tpl->getValue('block')['properties']['thumbnail_width'], false, NULL);
} else {
$_smarty_tpl->assign('tbw', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);
}
if (!( !true || empty($_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'])) && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->assign('tbh', $_smarty_tpl->getValue('block')['properties']['abt__ut2_thumbnail_height'], false, NULL);
} else {
$_smarty_tpl->assign('tbh', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('block')['block_id'])."000", false, NULL);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('uniqid')()), ENT_QUOTES, 'UTF-8');
$_prefixVariable14=ob_get_clean();
ob_start();
echo htmlspecialchars((string) (((string)$_smarty_tpl->getValue('block')['block_id'])."_".$_prefixVariable14), ENT_QUOTES, 'UTF-8');
$_prefixVariable15 = ob_get_clean();
$_tmp_array = $_smarty_tpl->getValue('block') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = $_prefixVariable15;
$_smarty_tpl->assign('block', $_tmp_array, false, 2);
if ($_smarty_tpl->getValue('block')['properties']['outside_navigation'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="owl-theme ty-owl-controls"><div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><div class="owl-buttons"><div id="owl_prev_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ut2-icon-arrow_back_black"></i></div><div id="owl_next_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ut2-icon-arrow_forward_black"></i></div></div></div></div><?php }?><div id="scroll_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="grid-list ut2-gl owl-carousel ty-scroller-list ty-scroller active-scroll"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'product', false, NULL, 'for_products', array (
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach7DoElse = false;
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="ut2-gl__item<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] <= 0) {?> out-of-stock<?php }?>"><?php if ($_smarty_tpl->getValue('product')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>$_smarty_tpl->getValue('show_labels_in_title')), (int) 0, $_smarty_current_dir);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'thumbnails_size'=>$_smarty_tpl->getValue('thumbnails_size'),'show_gallery'=>false), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
}?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></div><?php }
}?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {
$_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?><div class="ut2-gl__control <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') != 'none') {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('button_type_add_to_cart')), ENT_QUOTES, 'UTF-8');
}?>"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));
if ($_smarty_tpl->getValue('show_qty') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'))),"&nbsp;",'')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable16 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable16 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
}
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?></div><?php }
}?><div class="ut2-gl__content"><div class="ut2-gl__name"><?php if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cur_number')), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"num + 1",'num'=>$_smarty_tpl->getValue('cur_number'),'assign'=>"cur_number"), $_smarty_tpl);
}
$_smarty_tpl->assign('name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('name'));?>
</div><?php if ($_smarty_tpl->getValue('product')['product_code']) {
$_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));
}
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>'','show_label_in_title'=>''), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-gl__amount"><?php $_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>
</div><?php }
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable17 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable17 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }?>"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div><?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('price'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('old_price'));
}
$_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_discount'));
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_and_text') {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
} else {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable18 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable19 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable18 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable19 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}}
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');
$_prefixVariable20 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable20 ?? null : $tmp) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') == 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') == 'icon_button') {?></div><?php }?></div><?php }?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_scroller_advanced_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->getValue('obj_prefix')),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->getValue('obj_prefix'))), (int) 0, $_smarty_current_dir);
}
}
}
