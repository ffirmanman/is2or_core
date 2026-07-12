<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6b2a3c95_84509528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f13654ae1a8b33b74a491d423611069d5e307bea' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:blocks/list_templates/small_items.tpl' => 2,
    'tygh:blocks/list_templates/links_thumb.tpl' => 2,
  ),
),false)) {
function content_682fdd6b2a3c95_84509528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['banner']->value['banner_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_");?>

<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "grid_items") {?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable22 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable23 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable24 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable25 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_grid_columns'],'no_sorting'=>smarty_modifier_enum("YesNo::YES"),'no_pagination'=>smarty_modifier_enum("YesNo::YES"),'no_ids'=>smarty_modifier_enum("YesNo::YES"),'products_scroller'=>true,'elements_to_scroll'=>1,'show_gallery'=>false,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable22 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable23 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable24 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_brand_logo'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable25 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_add_to_cart'=>true,'but_role'=>"action"), 0, false);
} elseif ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "small_items") {?>

    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable26 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_small_items_columns'],'rows'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_small_items_rows'],'products_scroller'=>true,'elements_to_scroll'=>1,'show_name'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['small_items']['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable26 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_discount_label'=>false,'show_add_to_cart'=>true), 0, false);
} elseif ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "links_thumb") {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/links_thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_links_thumb_columns'],'rows'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_links_thumb_rows'],'hide_links'=>true,'products_scroller'=>true,'elements_to_scroll'=>1,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'show_name'=>false,'show_trunc_name'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_add_to_cart'=>false), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['banner']->value['banner_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_");?>

<?php if ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "grid_items") {?>
    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable27 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable28 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable29 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable30 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_grid_columns'],'no_sorting'=>smarty_modifier_enum("YesNo::YES"),'no_pagination'=>smarty_modifier_enum("YesNo::YES"),'no_ids'=>smarty_modifier_enum("YesNo::YES"),'products_scroller'=>true,'elements_to_scroll'=>1,'show_gallery'=>false,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable27 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable28 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable29 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_brand_logo'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['products_multicolumns']['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable30 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_add_to_cart'=>true,'but_role'=>"action"), 0, true);
} elseif ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "small_items") {?>

    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable31 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_small_items_columns'],'rows'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_small_items_rows'],'products_scroller'=>true,'elements_to_scroll'=>1,'show_name'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['small_items']['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable31 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_discount_label'=>false,'show_add_to_cart'=>true), 0, true);
} elseif ($_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_template'] === "links_thumb") {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/links_thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['banner']->value['products'],'columns'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_links_thumb_columns'],'rows'=>$_smarty_tpl->tpl_vars['banner']->value['abt__ut2_products_links_thumb_rows'],'hide_links'=>true,'products_scroller'=>true,'elements_to_scroll'=>1,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'show_name'=>false,'show_trunc_name'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_add_to_cart'=>false), 0, true);
}
}
}
}
