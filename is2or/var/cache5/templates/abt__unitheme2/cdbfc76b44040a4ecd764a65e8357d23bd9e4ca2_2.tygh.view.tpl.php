<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5854734_82501598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdbfc76b44040a4ecd764a65e8357d23bd9e4ca2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/view.tpl',
      1 => 1736836655,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f5854734_82501598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:layout_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>


<?php $_smarty_tpl->_assignInScope('file', fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_tmp_array = isset($_smarty_tpl->tpl_vars['settings']) ? $_smarty_tpl->tpl_vars['settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['abt__details_layout'] = rtrim(smarty_modifier_trim(end(smarty_modifier_explode('/',$_smarty_tpl->tpl_vars['file']->value))),'.tpl');
$_smarty_tpl->_assignInScope('settings', $_tmp_array);?>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_product_options'=>true,'hide_form'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'),'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_short_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_short_description'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'min_qty'=>true,'show_edp'=>true,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_separate_buttons'),'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'show_list_buttons'=>true,'but_role'=>"action",'block_width'=>true,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_product_tabs'=>true), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:layout_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_hide_form", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_capture_buttons", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "val_no_ajax", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:layout_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>


<?php $_smarty_tpl->_assignInScope('file', fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_tmp_array = isset($_smarty_tpl->tpl_vars['settings']) ? $_smarty_tpl->tpl_vars['settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['abt__details_layout'] = rtrim(smarty_modifier_trim(end(smarty_modifier_explode('/',$_smarty_tpl->tpl_vars['file']->value))),'.tpl');
$_smarty_tpl->_assignInScope('settings', $_tmp_array);?>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_rating'=>true,'show_rating_num'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_product_options'=>true,'hide_form'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_hide_form'),'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'show_short_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_short_description'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES"),'min_qty'=>true,'show_edp'=>true,'capture_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_buttons'),'capture_options_vs_qty'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_capture_options_vs_qty'),'separate_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_separate_buttons'),'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'show_list_buttons'=>true,'but_role'=>"action",'block_width'=>true,'no_ajax'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'val_no_ajax'),'show_product_tabs'=>true), 0, true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:layout_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
