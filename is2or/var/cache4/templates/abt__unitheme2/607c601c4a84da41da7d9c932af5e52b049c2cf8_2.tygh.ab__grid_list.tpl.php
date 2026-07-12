<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:51:37
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/products/ab__grid_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683455c9596382_87102331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607c601c4a84da41da7d9c932af5e52b049c2cf8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/products/ab__grid_list.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
  ),
),false)) {
function content_683455c9596382_87102331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>

<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable43 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable44 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable45 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable46 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>smarty_modifier_enum("YesNo::YES"),'no_pagination'=>smarty_modifier_enum("YesNo::YES"),'no_ids'=>smarty_modifier_enum("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable43 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable44 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable45 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_brand_logo'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable46 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'ab__add_ajax_loading_button'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/ab__grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/ab__grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_assignInScope('tmpl', 'products_multicolumns');?>

<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable47 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable48 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable49 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable50 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>smarty_modifier_enum("YesNo::YES"),'no_pagination'=>smarty_modifier_enum("YesNo::YES"),'no_ids'=>smarty_modifier_enum("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_amount'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable47 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable48 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable49 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_features'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_description" || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "features_and_variations",'show_brand_logo'=>(($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable50 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"),'show_list_buttons'=>false,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'ab__add_ajax_loading_button'=>true), 0, true);
?>

<?php }
}
}
