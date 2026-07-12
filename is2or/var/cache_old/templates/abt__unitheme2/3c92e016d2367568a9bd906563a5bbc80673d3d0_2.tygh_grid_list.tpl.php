<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:14
  from 'tygh:blocks/list_templates/grid_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96061429b1_49520810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c92e016d2367568a9bd906563a5bbc80673d3d0' => 
    array (
      0 => 'blocks/list_templates/grid_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/components/grid_list_settings.tpl' => 2,
    'tygh:blocks/product_list_templates/components/show_features_conditions.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/products/components/sorting.tpl' => 2,
    'tygh:common/abt__ut2_pagination.tpl' => 4,
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_icon.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
    'tygh:addons/wishlist/views/wishlist/components/remove_from_wishlist.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/product_list_templates/components/average_rating.tpl' => 2,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
))) {
function content_69ad96061429b1_49520810 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/list_templates';
\Tygh\Languages\Helper::preloadLangVars(array('empty','empty'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('products')) {
$_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);
if ($_smarty_tpl->getValue('products_scroller') || $_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "grid_items") {
$_smarty_tpl->assign('show_gallery', false, false, NULL);
} else {
$_smarty_tpl->assign('show_gallery', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_gallery'][$_smarty_tpl->getValue('settings')['ab__device']] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);
}
$_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
if (!($_smarty_tpl->getValue('ab__add_ajax_loading_button') && (defined('AJAX_REQUEST') ? constant('AJAX_REQUEST') : null))) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);
}
if (!$_smarty_tpl->getValue('no_pagination')) {
$_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('no_sorting')) {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('show_empty') && !$_smarty_tpl->getValue('products_scroller')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('products'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('products'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true), $_smarty_tpl);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);
if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('cur_number', 1, false, NULL);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);
if ($_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->assign('quick_nav_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fields_from_multi_level')($_smarty_tpl->getValue('products'),"product_id","product_id"), false, NULL);
}
if ($_smarty_tpl->getValue('products_scroller')) {
$_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?><div class="grid-list <?php if ($_smarty_tpl->getValue('block')['properties']['item_quantity']) {?>ut2-gl__simple-scroller<?php }?> ut2-scroll-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_custom_class')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('columns') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php } else { ?><div class="grid-list ut2-gl<?php if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {?> ut2-load-more-wrap<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_custom_class')), ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-features-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_features_height');?>
px;--gl-cols: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('columns') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php }
if ($_smarty_tpl->getValue('ut2_load_more')) {
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode']),'position'=>"top",'object'=>"products"), (int) 0, $_smarty_current_dir);
} else { ?><div class="<?php if (!($_smarty_tpl->getValue('ab__add_ajax_loading_button'))) {
if (!$_smarty_tpl->getValue('products_scroller')) {?>ut2-gl__wrap<?php } elseif ($_smarty_tpl->getValue('block')['properties']['item_quantity']) {?>ut2-gl__simple-scroller-wrap ut2-scroll-content<?php } else { ?>ut2-scroll-content<?php }
}
if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {?> grid-list__load-more<?php }?>"><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_products'), 'sproducts', false, NULL, 'sprod', array (
  'first' => true,
  'last' => true,
  'iteration' => true,
  'index' => true,
  'total' => true,
));
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sproducts')->value) {
$foreach12DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sproducts'), 'product', false, NULL, 'sproducts', array (
  'first' => true,
  'index' => true,
));
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach13DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index'];
?><div class="ty-column<?php if ($_smarty_tpl->getValue('products_scroller') && $_smarty_tpl->getValue('block')['properties']['item_quantity']) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-item<?php }?>"<?php if (!$_smarty_tpl->getValue('products_scroller') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['first'] ?? null) && ($_smarty_tpl->getValue('__smarty_foreach_sproducts')['first'] ?? null)) {?> data-ut2-grid="first-item"<?php }
if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['first'] ?? null) && ($_smarty_tpl->getValue('__smarty_foreach_sproducts')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->getValue('product')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']).((string)$_smarty_tpl->getValue('settings')['ab__device']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?><div class="ut2-gl__item<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {?> content-on-hover<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] <= 0) {?> out-of-stock<?php }?>"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'thumbnails_size'=>$_smarty_tpl->getValue('thumbnails_size'),'show_gallery'=>$_smarty_tpl->getValue('show_gallery')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('is_wishlist')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('is_wishlist')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/remove_from_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
}?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></div><?php }
}?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') !== 'none') {
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
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable29 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable29 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
if ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') {?></div><?php }
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
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
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && !$_smarty_tpl->getValue('products_scroller')) {?><div class="ut2-gl__bottom"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['short_description'] && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description")) {
$_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['abt__ut2_features'] && !$_smarty_tpl->getValue('hide_features')) {?><div class="ut2-features-list"><?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>
</div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button')) {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?> ut2-sld-short<?php }?>"><?php $_block_repeat=true;
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
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text') || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button')) {?></div><?php }?></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile" && !$_smarty_tpl->getValue('products_scroller')) {?><div class="ut2-gl__bottom"><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text')) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['short_description'] && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description")) {
$_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['abt__ut2_features'] && !$_smarty_tpl->getValue('hide_features')) {?><div class="ut2-features-list"><?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>
</div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_after"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_after"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?></div><?php $_block_repeat=true;
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
?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('show_empty') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['last'] ?? null)) {
$_smarty_tpl->assign('iteration', ($_smarty_tpl->getValue('__smarty_foreach_sprod')['iteration'] ?? null), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:".((string)$_smarty_tpl->getValue('tmpl_extra'))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:".((string)$_smarty_tpl->getValue('tmpl_extra'))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('iteration', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'iteration'), false, NULL);
if ($_smarty_tpl->getValue('iteration')%$_smarty_tpl->getValue('columns') != 0) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->getValue('iteration'),'c'=>$_smarty_tpl->getValue('columns')), $_smarty_tpl);
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('empty_count')) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new \Smarty\Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ut2-product-empty" style="aspect-ratio: var(--gl-item-width) / var(--gl-item-height)"><div class="ut2-gl__body"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><div class="ut2-gl__image" style="min-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
px;"></div><div class="ut2-gl__content"></div></div></div></div><?php
}
}
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('ut2_load_more')) {
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode']),'position'=>"bottom",'object'=>"products"), (int) 0, $_smarty_current_dir);
} else { ?></div><?php }
if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {
$_smarty_tpl->assign('page', (($tmp = $_smarty_tpl->getValue('block')['content']['items']['page'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('id', "ut2_load_more_block_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id']), false, NULL);
$_smarty_tpl->assign('load_more_total', $_smarty_tpl->getValue('ut2_total_products_block_'.($_smarty_tpl->getValue('block')['block_id'])), false, NULL);
if ($_smarty_tpl->getValue('block')['content']['items']['limit'] && $_smarty_tpl->getValue('block')['content']['items']['limit'] < $_smarty_tpl->getValue('load_more_total')) {
$_smarty_tpl->assign('load_more_total', $_smarty_tpl->getValue('block')['content']['items']['limit'], false, NULL);
}
$_smarty_tpl->assign('products_left', $_smarty_tpl->getValue('load_more_total')-$_smarty_tpl->getValue('page')*$_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_load_more_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('products_left') > 0) {
if ($_smarty_tpl->getValue('products_left') > $_smarty_tpl->getValue('block')['properties']['number_of_columns'] && $_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type'] == "onclick") {
$_smarty_tpl->assign('show_more_num', $_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
} else {
$_smarty_tpl->assign('show_more_num', $_smarty_tpl->getValue('products_left'), false, NULL);
}
$_smarty_tpl->assign('show_more_button', 'abt__ut2.load_more.show_more.products', false, NULL);
if ($_smarty_tpl->getValue('block')['type'] != 'main') {
$_smarty_tpl->assign('show_more_button', 'abt__ut2.load_more.show_more', false, NULL);
}?><div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')+1), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('page') > 1 && $_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type'] == "onclick_and_scroll") {?>class="hidden"<?php }?>><span id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_button" class="ty-btn ty-btn__outline load-more-btn" data-ca-snapping="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-grid-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['grid_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-block-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-current-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')), ENT_QUOTES, 'UTF-8');?>
" data-ca-load-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type']), ENT_QUOTES, 'UTF-8');?>
" data-ca-request-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_REQUEST))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('show_more_button'), array($_smarty_tpl->getValue('show_more_num')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_'.($_smarty_tpl->getValue('page')+1))), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_load_more_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('products_scroller')) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button><?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}?></div><?php if (!$_smarty_tpl->getValue('no_pagination')) {
$_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/list_templates/grid_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('products')) {
$_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);
$_smarty_tpl->assign('show_labels_in_title', false, false, NULL);
if ($_smarty_tpl->getValue('products_scroller') || $_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "grid_items") {
$_smarty_tpl->assign('show_gallery', false, false, NULL);
} else {
$_smarty_tpl->assign('show_gallery', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_gallery'][$_smarty_tpl->getValue('settings')['ab__device']] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);
}
$_smarty_tpl->assign('button_type_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']], false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
if (!($_smarty_tpl->getValue('ab__add_ajax_loading_button') && (defined('AJAX_REQUEST') ? constant('AJAX_REQUEST') : null))) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);
}
if (!$_smarty_tpl->getValue('no_pagination')) {
$_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('no_sorting')) {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('show_empty') && !$_smarty_tpl->getValue('products_scroller')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('products'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('split')->handle(array('data'=>$_smarty_tpl->getValue('products'),'size'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true), $_smarty_tpl);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->getValue('columns') ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"), $_smarty_tpl);
if ($_smarty_tpl->getValue('item_number') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('cur_number', 1, false, NULL);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);
if ($_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {
$_smarty_tpl->assign('quick_nav_ids', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fields_from_multi_level')($_smarty_tpl->getValue('products'),"product_id","product_id"), false, NULL);
}
if ($_smarty_tpl->getValue('products_scroller')) {
$_smarty_tpl->assign('id', "simple_products_scroller_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?><div class="grid-list <?php if ($_smarty_tpl->getValue('block')['properties']['item_quantity']) {?>ut2-gl__simple-scroller<?php }?> ut2-scroll-container <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_custom_class')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('columns') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php } else { ?><div class="grid-list ut2-gl<?php if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {?> ut2-load-more-wrap<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_custom_class')), ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['lines_number_in_name_product'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
;--gl-features-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_features_height');?>
px;--gl-cols: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('columns') ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->getValue('tbh')) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('tbw')) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbw')), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php }
if ($_smarty_tpl->getValue('ut2_load_more')) {
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode']),'position'=>"top",'object'=>"products"), (int) 0, $_smarty_current_dir);
} else { ?><div class="<?php if (!($_smarty_tpl->getValue('ab__add_ajax_loading_button'))) {
if (!$_smarty_tpl->getValue('products_scroller')) {?>ut2-gl__wrap<?php } elseif ($_smarty_tpl->getValue('block')['properties']['item_quantity']) {?>ut2-gl__simple-scroller-wrap ut2-scroll-content<?php } else { ?>ut2-scroll-content<?php }
}
if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {?> grid-list__load-more<?php }?>"><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('splitted_products'), 'sproducts', false, NULL, 'sprod', array (
  'first' => true,
  'last' => true,
  'iteration' => true,
  'index' => true,
  'total' => true,
));
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sproducts')->value) {
$foreach14DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sproducts'), 'product', false, NULL, 'sproducts', array (
  'first' => true,
  'index' => true,
));
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach15DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index'];
?><div class="ty-column<?php if ($_smarty_tpl->getValue('products_scroller') && $_smarty_tpl->getValue('block')['properties']['item_quantity']) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('products_scroller')) {?> ut2-scroll-item<?php }?>"<?php if (!$_smarty_tpl->getValue('products_scroller') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['first'] ?? null) && ($_smarty_tpl->getValue('__smarty_foreach_sproducts')['first'] ?? null)) {?> data-ut2-grid="first-item"<?php }
if ($_smarty_tpl->getValue('ut2_load_more') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['first'] ?? null) && ($_smarty_tpl->getValue('__smarty_foreach_sproducts')['first'] ?? null)) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->getValue('product')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('obj_id_prefix', ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']).((string)$_smarty_tpl->getValue('settings')['ab__device']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_labels_position'=>"left-top",'show_labels_in_title'=>false), (int) 0, $_smarty_current_dir);
?><div class="ut2-gl__item<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {?> content-on-hover<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] <= 0) {?> out-of-stock<?php }?>"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['amount'] < 1 && $_smarty_tpl->getValue('product')['out_of_stock_actions'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'image_width'=>$_smarty_tpl->getValue('tbw'),'image_height'=>$_smarty_tpl->getValue('tbh'),'thumbnails_size'=>$_smarty_tpl->getValue('thumbnails_size'),'show_gallery'=>$_smarty_tpl->getValue('show_gallery')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getValue('settings')['Appearance']['enable_quick_view'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->getValue('quick_nav_ids')), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('is_wishlist')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('addons')['wishlist']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && !$_smarty_tpl->getValue('hide_wishlist_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('is_wishlist')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/wishlist/views/wishlist/components/remove_from_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]",'but_role'=>"text"), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('hide_compare_list_button') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['feature_comparison'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
}?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__service_buttons_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->getValue('show_brand_logo') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
?></div><?php }
}?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->getValue('show_add_to_cart') && $_smarty_tpl->getValue('button_type_add_to_cart') !== 'none') {
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
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable30 = ob_get_clean();
if ((($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable30 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
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
if ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') {?></div><?php }
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
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
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && !$_smarty_tpl->getValue('products_scroller')) {?><div class="ut2-gl__bottom"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['short_description'] && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description")) {
$_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['abt__ut2_features'] && !$_smarty_tpl->getValue('hide_features')) {?><div class="ut2-features-list"><?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>
</div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button')) {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->getValue('show_qty')) {?>qty-wrap<?php }?>"><?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-gl__price<?php if ($_smarty_tpl->getValue('product')['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_display_format']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('product')['list_discount'] || $_smarty_tpl->getValue('product')['discount']) {?> pr-color<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?> ut2-sld-short<?php }?>"><?php $_block_repeat=true;
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
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text') || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button') || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'icon' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_button')) {?></div><?php }?></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('products_scroller')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:color_variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?></div><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_content_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== "mobile" && !$_smarty_tpl->getValue('products_scroller')) {?><div class="ut2-gl__bottom"><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_buttons_on_hover'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('button_type_add_to_cart') === 'text' || $_smarty_tpl->getValue('button_type_add_to_cart') === 'icon_and_text')) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('product')['short_description'] && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description")) {
$_smarty_tpl->assign('prod_descr', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('prod_descr'));
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['abt__ut2_features'] && !$_smarty_tpl->getValue('hide_features')) {?><div class="ut2-features-list"><?php $_smarty_tpl->assign('product_features', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_features'));?>
</div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_after"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:additional_info_after"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div><?php }?></div><?php $_block_repeat=true;
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
?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('show_empty') && ($_smarty_tpl->getValue('__smarty_foreach_sprod')['last'] ?? null)) {
$_smarty_tpl->assign('iteration', ($_smarty_tpl->getValue('__smarty_foreach_sprod')['iteration'] ?? null), false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('iteration')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:".((string)$_smarty_tpl->getValue('tmpl_extra'))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:".((string)$_smarty_tpl->getValue('tmpl_extra'))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->assign('iteration', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'iteration'), false, NULL);
if ($_smarty_tpl->getValue('iteration')%$_smarty_tpl->getValue('columns') != 0) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->getValue('iteration'),'c'=>$_smarty_tpl->getValue('columns')), $_smarty_tpl);
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('empty_count')) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new \Smarty\Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columns')), ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ut2-product-empty" style="aspect-ratio: var(--gl-item-width) / var(--gl-item-height)"><div class="ut2-gl__body"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><div class="ut2-gl__image" style="min-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tbh')), ENT_QUOTES, 'UTF-8');?>
px;"></div><div class="ut2-gl__content"></div></div></div></div><?php
}
}
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('ut2_load_more')) {
$_smarty_tpl->renderSubTemplate("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->getValue('runtime')['controller'])."_".((string)$_smarty_tpl->getValue('runtime')['mode']),'position'=>"bottom",'object'=>"products"), (int) 0, $_smarty_current_dir);
} else { ?></div><?php }
if ($_smarty_tpl->getValue('ab__add_ajax_loading_button')) {
$_smarty_tpl->assign('page', (($tmp = $_smarty_tpl->getValue('block')['content']['items']['page'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('id', "ut2_load_more_block_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id']), false, NULL);
$_smarty_tpl->assign('load_more_total', $_smarty_tpl->getValue('ut2_total_products_block_'.($_smarty_tpl->getValue('block')['block_id'])), false, NULL);
if ($_smarty_tpl->getValue('block')['content']['items']['limit'] && $_smarty_tpl->getValue('block')['content']['items']['limit'] < $_smarty_tpl->getValue('load_more_total')) {
$_smarty_tpl->assign('load_more_total', $_smarty_tpl->getValue('block')['content']['items']['limit'], false, NULL);
}
$_smarty_tpl->assign('products_left', $_smarty_tpl->getValue('load_more_total')-$_smarty_tpl->getValue('page')*$_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_load_more_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('products_left') > 0) {
if ($_smarty_tpl->getValue('products_left') > $_smarty_tpl->getValue('block')['properties']['number_of_columns'] && $_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type'] == "onclick") {
$_smarty_tpl->assign('show_more_num', $_smarty_tpl->getValue('block')['properties']['number_of_columns'], false, NULL);
} else {
$_smarty_tpl->assign('show_more_num', $_smarty_tpl->getValue('products_left'), false, NULL);
}
$_smarty_tpl->assign('show_more_button', 'abt__ut2.load_more.show_more.products', false, NULL);
if ($_smarty_tpl->getValue('block')['type'] != 'main') {
$_smarty_tpl->assign('show_more_button', 'abt__ut2.load_more.show_more', false, NULL);
}?><div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')+1), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('page') > 1 && $_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type'] == "onclick_and_scroll") {?>class="hidden"<?php }?>><span id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_button" class="ty-btn ty-btn__outline load-more-btn" data-ca-snapping="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-grid-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['grid_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-block-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-current-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')), ENT_QUOTES, 'UTF-8');?>
" data-ca-load-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['abt__ut2_loading_type']), ENT_QUOTES, 'UTF-8');?>
" data-ca-request-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_urlsafe_text_encrypt')(json_encode($_REQUEST))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('show_more_button'), array($_smarty_tpl->getValue('show_more_num')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_'.($_smarty_tpl->getValue('page')+1))), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_load_more_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('products_scroller')) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button><?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}?></div><?php if (!$_smarty_tpl->getValue('no_pagination')) {
$_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
