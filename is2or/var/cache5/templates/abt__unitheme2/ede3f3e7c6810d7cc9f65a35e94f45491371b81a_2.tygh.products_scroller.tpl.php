<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:09
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/products/products_scroller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba29caf268_82093229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede3f3e7c6810d7cc9f65a35e94f45491371b81a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/products/products_scroller.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:blocks/list_templates/simple_list.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_6835ba29caf268_82093229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('tmpl', 'products_scroller');?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_quick_view_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_hide_price', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_hide_price', true);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])) {?>
    <?php $_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);?>
    <?php $_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']);?>
    <?php $_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']);
}?>

<?php $_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none");
$_smarty_tpl->_assignInScope('show_labels_in_title', false);?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable25=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable25;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_sm_desktop', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_sm_desktop'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_tablet', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet'] < 5) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_sm_tablet', $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_sm_tablet', 3);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_mobile'] < 4) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_mobile', $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_mobile']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_mobile', 2);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
    <?php $_smarty_tpl->_assignInScope('hide_quick_view_button', $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] === smarty_modifier_enum("YesNo::NO"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('hide_quick_view_button', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-arrow_back_black"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-arrow_forward_black"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller active-scroll">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-scroller-list__item ty-scroller__item">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('obj_id', "scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                    <div class="ty-scroller-list__img-block">
                        <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['tbw']->value,'image_height'=>$_smarty_tpl->tpl_vars['tbh']->value,'no_ids'=>true), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                    </div>
                    <div class="ty-scroller-list__description" style="--scroller-list-img-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
px">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'hide_quick_view_button'=>$_smarty_tpl->tpl_vars['hide_quick_view_button']->value), 0, true);
?>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'itemsDesktopSmall'=>$_smarty_tpl->tpl_vars['item_quantity_sm_desktop']->value,'itemsTablet'=>$_smarty_tpl->tpl_vars['item_quantity_tablet']->value,'itemsTabletSmall'=>$_smarty_tpl->tpl_vars['item_quantity_sm_tablet']->value,'itemsMobile'=>$_smarty_tpl->tpl_vars['item_quantity_mobile']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('tmpl', 'products_scroller');?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile" || $_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_quick_view_button'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_hide_price', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_hide_price', true);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])) {?>
    <?php $_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);?>
    <?php $_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('tbw', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']);?>
    <?php $_smarty_tpl->_assignInScope('tbh', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']);
}?>

<?php $_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none");
$_smarty_tpl->_assignInScope('show_labels_in_title', false);?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable26=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable26;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_sm_desktop', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_sm_desktop'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_tablet', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet'] ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet'] < 5) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_sm_tablet', $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_tablet']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_sm_tablet', 3);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_mobile'] < 4) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_mobile', $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity_mobile']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_mobile', 2);
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
    <?php $_smarty_tpl->_assignInScope('hide_quick_view_button', $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] === smarty_modifier_enum("YesNo::NO"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('hide_quick_view_button', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-arrow_back_black"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ut2-icon-arrow_forward_black"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller active-scroll">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ty-scroller-list__item ty-scroller__item">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_assignInScope('obj_id', "scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                    <div class="ty-scroller-list__img-block">
                        <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['tbw']->value,'image_height'=>$_smarty_tpl->tpl_vars['tbh']->value,'no_ids'=>true), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                    </div>
                    <div class="ty-scroller-list__description" style="--scroller-list-img-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbh']->value, ENT_QUOTES, 'UTF-8');?>
px">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'hide_quick_view_button'=>$_smarty_tpl->tpl_vars['hide_quick_view_button']->value), 0, true);
?>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'itemsDesktopSmall'=>$_smarty_tpl->tpl_vars['item_quantity_sm_desktop']->value,'itemsTablet'=>$_smarty_tpl->tpl_vars['item_quantity_tablet']->value,'itemsTabletSmall'=>$_smarty_tpl->tpl_vars['item_quantity_sm_tablet']->value,'itemsMobile'=>$_smarty_tpl->tpl_vars['item_quantity_mobile']->value), 0, true);
}
}
}
