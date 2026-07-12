<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/grid_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21b981530_03800821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ae5eb9d7dd2e41e904f72166e86bd7b373067b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/list_templates/grid_list.tpl',
      1 => 1747370623,
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
),false)) {
function content_682fe21b981530_03800821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),7=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('empty','empty'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');
$_smarty_tpl->_assignInScope('show_labels_in_title', false);
if ($_smarty_tpl->tpl_vars['products_scroller']->value || $_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "grid_items") {
$_smarty_tpl->_assignInScope('show_gallery', false);
} else {
$_smarty_tpl->_assignInScope('show_gallery', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== smarty_modifier_enum("YesNo::NO"));
}
$_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);
} else {
$_smarty_tpl->_assignInScope('tbw', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_width'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp));
}
if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']);
} else {
$_smarty_tpl->_assignInScope('tbh', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp));
}
if (!($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value && (defined('AJAX_REQUEST') ? constant('AJAX_REQUEST') : null))) {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);
}
if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if (!$_smarty_tpl->tpl_vars['show_empty']->value && !$_smarty_tpl->tpl_vars['products_scroller']->value) {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);
} else {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);
}
echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('cur_number', 1);
}
echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {
$_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"));
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?><div class="grid-list <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {?>ut2-gl__simple-scroller<?php }?> ut2-scroll-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['columns']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->tpl_vars['tbh']->value) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['tbw']->value) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbw']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php } else { ?><div class="grid-list ut2-gl<?php if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {?> ut2-load-more-wrap<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['columns']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->tpl_vars['tbh']->value) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['tbw']->value) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbw']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'position'=>"top",'object'=>"products"), 0, false);
} else { ?><div class="<?php if (!($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value)) {
if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?>ut2-gl__wrap<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {?>ut2-gl__simple-scroller-wrap ut2-scroll-content<?php } else { ?>ut2-scroll-content<?php }
}
if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {?> grid-list__load-more<?php }?>"><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_products']->value, 'sproducts', false, NULL, 'sprod', array (
  'first' => true,
  'last' => true,
  'iteration' => true,
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['sproducts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sproducts']->value) {
$_smarty_tpl->tpl_vars['sproducts']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sproducts']->value, 'product', false, NULL, 'sproducts', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index'];
?><div class="ty-column<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value && $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-item<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['products_scroller']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] : null)) {?> data-ut2-grid="first-item"<?php }
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] : null)) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['settings']->value['ab__device']));
$_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top",'show_labels_in_title'=>false), 0, true);
?><div class="ut2-gl__item <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?> content-on-hover<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['amount'] <= 0) {?> out-of-stock<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['amount'] < 1 && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] != smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_width'=>$_smarty_tpl->tpl_vars['tbw']->value,'image_height'=>$_smarty_tpl->tpl_vars['tbh']->value,'thumbnails_size'=>$_smarty_tpl->tpl_vars['thumbnails_size']->value,'show_gallery'=>$_smarty_tpl->tpl_vars['show_gallery']->value), 0, true);
$_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['is_wishlist']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, true);
} elseif ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['is_wishlist']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/remove_from_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, true);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['feature_comparison'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0, true);
}?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->_assignInScope('b_feature', $_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0, true);
?></div><?php }
}?></div><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value !== 'none') {
$_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><div class="ut2-gl__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);
if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable58 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable58 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div><?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
}
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') {?></div><?php }
}?><div class="ut2-gl__content<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> content-on-hover<?php }?>"><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</div><?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {
$_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);
}
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-gl__amount"><?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {
if (empty($_smarty_tpl->tpl_vars['block']->value['properties']) && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?><div class="ut2-gl__bottom"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_before"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['short_description'] && ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description")) {
$_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'] && !$_smarty_tpl->tpl_vars['hide_features']->value) {?><div class="ut2-gl__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }
}?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button')) {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO")) {?><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?> ut2-sld-short<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div><?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text') || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button')) {?></div><?php }?></div></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__mv_vendor_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?><div class="ut2-gl__bottom"><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text')) {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_before"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['short_description'] && ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description")) {
$_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'] && !$_smarty_tpl->tpl_vars['hide_features']->value) {?><div class="ut2-gl__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_after"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_after"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_after"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['show_empty']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] : null)) {
$_smarty_tpl->_assignInScope('iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] : null));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ut2-product-empty" style="aspect-ratio: var(--gl-item-width) / var(--gl-item-height)"><div class="ut2-gl__body"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span><div class="ut2-gl__image" style="min-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div><div class="ut2-gl__content"></div></div></div></div><?php
}
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'position'=>"bottom",'object'=>"products"), 0, true);
} else { ?></div><?php }
if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {
$_smarty_tpl->_assignInScope('page', (($tmp = $_smarty_tpl->tpl_vars['block']->value['content']['items']['page'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('id', "ut2_load_more_block_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']));
$_smarty_tpl->_assignInScope('load_more_total', $_smarty_tpl->tpl_vars['ut2_total_products_block_'.($_smarty_tpl->tpl_vars['block']->value['block_id'])]->value);
if ($_smarty_tpl->tpl_vars['block']->value['content']['items']['limit'] && $_smarty_tpl->tpl_vars['block']->value['content']['items']['limit'] < $_smarty_tpl->tpl_vars['load_more_total']->value) {
$_smarty_tpl->_assignInScope('load_more_total', $_smarty_tpl->tpl_vars['block']->value['content']['items']['limit']);
}
$_smarty_tpl->_assignInScope('products_left', $_smarty_tpl->tpl_vars['load_more_total']->value-$_smarty_tpl->tpl_vars['page']->value*$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2_load_more_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2_load_more_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['products_left']->value > 0) {
if ($_smarty_tpl->tpl_vars['products_left']->value > $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'] == "onclick") {
$_smarty_tpl->_assignInScope('show_more_num', $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
} else {
$_smarty_tpl->_assignInScope('show_more_num', $_smarty_tpl->tpl_vars['products_left']->value);
}
$_smarty_tpl->_assignInScope('show_more_button', 'abt__ut2.load_more.show_more.products');
if ($_smarty_tpl->tpl_vars['block']->value['type'] != 'main') {
$_smarty_tpl->_assignInScope('show_more_button', 'abt__ut2.load_more.show_more');
}?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value+1, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'] == "onclick_and_scroll") {?>class="hidden"<?php }?>><span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_button" class="ty-btn ty-btn__outline load-more-btn" data-ca-snapping="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-block-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-current-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-load-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'], ENT_QUOTES, 'UTF-8');?>
" data-ca-request-params="<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_REQUEST)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['show_more_button']->value,array($_smarty_tpl->tpl_vars['show_more_num']->value));?>
</span><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_'.($_smarty_tpl->tpl_vars['page']->value+1)]->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2_load_more_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button><?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>(($tmp = $_smarty_tpl->tpl_vars['elements_to_scroll']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), 0, false);
}?></div><?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');
$_smarty_tpl->_assignInScope('show_labels_in_title', false);
if ($_smarty_tpl->tpl_vars['products_scroller']->value || $_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "grid_items") {
$_smarty_tpl->_assignInScope('show_gallery', false);
} else {
$_smarty_tpl->_assignInScope('show_gallery', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_gallery'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== smarty_modifier_enum("YesNo::NO"));
}
$_smarty_tpl->_assignInScope('button_type_add_to_cart', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_button_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']]);
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/grid_list_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/show_features_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);
} else {
$_smarty_tpl->_assignInScope('tbw', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_width'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp));
}
if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']) && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height']);
} else {
$_smarty_tpl->_assignInScope('tbh', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp));
}
if (!($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value && (defined('AJAX_REQUEST') ? constant('AJAX_REQUEST') : null))) {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);
}
if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!$_smarty_tpl->tpl_vars['show_empty']->value && !$_smarty_tpl->tpl_vars['products_scroller']->value) {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);
} else {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);
}
echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('cur_number', 1);
}
echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {
$_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"));
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {
$_smarty_tpl->_assignInScope('id', "simple_products_scroller_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?><div class="grid-list <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {?>ut2-gl__simple-scroller<?php }?> ut2-scroll-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['columns']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->tpl_vars['tbh']->value) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['tbw']->value) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbw']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button><?php } else { ?><div class="grid-list ut2-gl<?php if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {?> ut2-load-more-wrap<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_custom_class']->value, ENT_QUOTES, 'UTF-8');?>
"style="--gl-lines-in-name-product: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['lines_number_in_name_product'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
;--gl-cols: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['columns']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;--gl-item-default-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_item_height');?>
;--gl-item-content-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_gl_content_height');?>
px;<?php if ($_smarty_tpl->tpl_vars['tbh']->value) {?>--gl-thumbs-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['tbw']->value) {?>--gl-thumbs-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbw']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'position'=>"top",'object'=>"products"), 0, true);
} else { ?><div class="<?php if (!($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value)) {
if (!$_smarty_tpl->tpl_vars['products_scroller']->value) {?>ut2-gl__wrap<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {?>ut2-gl__simple-scroller-wrap ut2-scroll-content<?php } else { ?>ut2-scroll-content<?php }
}
if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {?> grid-list__load-more<?php }?>"><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_products']->value, 'sproducts', false, NULL, 'sprod', array (
  'first' => true,
  'last' => true,
  'iteration' => true,
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['sproducts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sproducts']->value) {
$_smarty_tpl->tpl_vars['sproducts']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sproducts']->value, 'product', false, NULL, 'sproducts', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['index'];
?><div class="ty-column<?php if ($_smarty_tpl->tpl_vars['products_scroller']->value && $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity']) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?> ut2-scroll-item<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['products_scroller']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] : null)) {?> data-ut2-grid="first-item"<?php }
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['first'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['first'] : null)) {?> data-ut2-load-more="first-item"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).((string)$_smarty_tpl->tpl_vars['settings']->value['ab__device']));
$_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_labels_position'=>"left-top",'show_labels_in_title'=>false), 0, true);
?><div class="ut2-gl__item <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?> content-on-hover<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['amount'] <= 0) {?> out-of-stock<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>
<div class="ut2-gl__body<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['amount'] < 1 && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] != smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE")) {?> decolorize<?php }?>"><div class="ut2-gl__image"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_width'=>$_smarty_tpl->tpl_vars['tbw']->value,'image_height'=>$_smarty_tpl->tpl_vars['tbh']->value,'thumbnails_size'=>$_smarty_tpl->tpl_vars['thumbnails_size']->value,'show_gallery'=>$_smarty_tpl->tpl_vars['show_gallery']->value), 0, true);
$_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>
<div class="ut2-w-c-q__buttons <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['hover_buttons_w_c_q'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>w_c_q-hover<?php }?>" <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id')) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['is_wishlist']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, true);
} elseif ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE") && !$_smarty_tpl->tpl_vars['hide_wishlist_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_wish_list_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['is_wishlist']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/remove_from_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0, true);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['hide_compare_list_button']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['feature_comparison'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['button_compare_view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0, true);
}?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__service_buttons_id'), ENT_QUOTES, 'UTF-8');?>
--></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] > 0) {
$_smarty_tpl->_assignInScope('b_feature', $_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0, true);
?></div><?php }
}?></div><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value && $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value !== 'none') {
$_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><div class="ut2-gl__control <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {?> ut2-view-qty<?php }
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value != 'none') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);
if ($_smarty_tpl->tpl_vars['show_qty']->value && strlen((string) smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value)),"&nbsp;",'')))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable59 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] ?? null)===null||$tmp==='' ? $_prefixVariable59 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>"><?php }?><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }?>" style="min-height: <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_pr_block_height');?>
px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div><?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value == 'icon_button') {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
}
if ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') {?></div><?php }
}?><div class="ut2-gl__content<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> content-on-hover<?php }?>"><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value == smarty_modifier_enum("YesNo::YES")) {?><span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</div><?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {
$_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);
}
$_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-gl__amount"><?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {
if (empty($_smarty_tpl->tpl_vars['block']->value['properties']) && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?><div class="ut2-gl__bottom"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_before"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['short_description'] && ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description")) {
$_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'] && !$_smarty_tpl->tpl_vars['hide_features']->value) {?><div class="ut2-gl__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }
}?><div class="ut2-gl__price-wrap"><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button')) {?><div class="ut2-gl__mix-price-and-button <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>qty-wrap<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO")) {?><div class="ut2-gl__price<?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?> ut2-gl__no-price<?php }?>	pr-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_display_format'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['list_discount'] || $_smarty_tpl->tpl_vars['product']->value['discount']) {?> pr-color<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?> ut2-sld-short<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div><?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?><span><?php }
$_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "short") {?></span><?php }?></div><?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text') || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button') || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['price_position_top'] === smarty_modifier_enum("YesNo::NO") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_button')) {?></div><?php }?></div></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__mv_vendor_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__mv_vendor_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__mv_vendor_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_content_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" && !$_smarty_tpl->tpl_vars['products_scroller']->value) {?><div class="ut2-gl__bottom"><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons_on_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'text' || $_smarty_tpl->tpl_vars['button_type_add_to_cart']->value === 'icon_and_text')) {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_before"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_before"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['product']->value['short_description'] && ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description")) {
$_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['show_features']->value && $_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'] && !$_smarty_tpl->tpl_vars['hide_features']->value) {?><div class="ut2-gl__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:additional_info_after"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:additional_info_after"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:additional_info_after"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['show_empty']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] : null)) {
$_smarty_tpl->_assignInScope('iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] : null));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:".((string)$_smarty_tpl->tpl_vars['tmpl_extra']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
$__section_empty_rows_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_1_total = $__section_empty_rows_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_1_total !== 0) {
for ($__section_empty_rows_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_1_iteration <= $__section_empty_rows_1_total; $__section_empty_rows_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-gl__item ut2-product-empty" style="aspect-ratio: var(--gl-item-width) / var(--gl-item-height)"><div class="ut2-gl__body"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span><div class="ut2-gl__image" style="min-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div><div class="ut2-gl__content"></div></div></div></div><?php
}
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'position'=>"bottom",'object'=>"products"), 0, true);
} else { ?></div><?php }
if ($_smarty_tpl->tpl_vars['ab__add_ajax_loading_button']->value) {
$_smarty_tpl->_assignInScope('page', (($tmp = $_smarty_tpl->tpl_vars['block']->value['content']['items']['page'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('id', "ut2_load_more_block_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']));
$_smarty_tpl->_assignInScope('load_more_total', $_smarty_tpl->tpl_vars['ut2_total_products_block_'.($_smarty_tpl->tpl_vars['block']->value['block_id'])]->value);
if ($_smarty_tpl->tpl_vars['block']->value['content']['items']['limit'] && $_smarty_tpl->tpl_vars['block']->value['content']['items']['limit'] < $_smarty_tpl->tpl_vars['load_more_total']->value) {
$_smarty_tpl->_assignInScope('load_more_total', $_smarty_tpl->tpl_vars['block']->value['content']['items']['limit']);
}
$_smarty_tpl->_assignInScope('products_left', $_smarty_tpl->tpl_vars['load_more_total']->value-$_smarty_tpl->tpl_vars['page']->value*$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2_load_more_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2_load_more_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['products_left']->value > 0) {
if ($_smarty_tpl->tpl_vars['products_left']->value > $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'] && $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'] == "onclick") {
$_smarty_tpl->_assignInScope('show_more_num', $_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns']);
} else {
$_smarty_tpl->_assignInScope('show_more_num', $_smarty_tpl->tpl_vars['products_left']->value);
}
$_smarty_tpl->_assignInScope('show_more_button', 'abt__ut2.load_more.show_more.products');
if ($_smarty_tpl->tpl_vars['block']->value['type'] != 'main') {
$_smarty_tpl->_assignInScope('show_more_button', 'abt__ut2.load_more.show_more');
}?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value+1, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'] == "onclick_and_scroll") {?>class="hidden"<?php }?>><span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_button" class="ty-btn ty-btn__outline load-more-btn" data-ca-snapping="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-block-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-current-page="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-load-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_loading_type'], ENT_QUOTES, 'UTF-8');?>
" data-ca-request-params="<?php echo htmlspecialchars((string) fn_abt__ut2_urlsafe_text_encrypt(json_encode($_REQUEST)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['show_more_button']->value,array($_smarty_tpl->tpl_vars['show_more_num']->value));?>
</span><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_'.($_smarty_tpl->tpl_vars['page']->value+1)]->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2_load_more_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['products_scroller']->value) {?><button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button><?php $_smarty_tpl->_subTemplateRender("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->tpl_vars['id']->value,'elements_to_scroll'=>(($tmp = $_smarty_tpl->tpl_vars['elements_to_scroll']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)), 0, true);
}?></div><?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
