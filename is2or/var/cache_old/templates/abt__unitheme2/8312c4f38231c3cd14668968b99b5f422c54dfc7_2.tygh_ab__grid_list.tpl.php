<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:13
  from 'tygh:blocks/products/ab__grid_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9605e340a7_13336161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8312c4f38231c3cd14668968b99b5f422c54dfc7' => 
    array (
      0 => 'blocks/products/ab__grid_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
  ),
))) {
function content_69ad9605e340a7_13336161 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable23 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable24 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable25 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'columns'=>$_smarty_tpl->getValue('block')['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_pagination'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_ids'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable23 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable24 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable25 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'but_role'=>"action",'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'ab__add_ajax_loading_button'=>true), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/ab__grid_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/products/ab__grid_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php $_smarty_tpl->assign('tmpl', 'products_multicolumns', false, NULL);?>

<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable26 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable27 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable28 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'columns'=>$_smarty_tpl->getValue('block')['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_pagination'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_ids'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable26 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable27 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable28 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'but_role'=>"action",'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'ab__add_ajax_loading_button'=>true), (int) 0, $_smarty_current_dir);
?>

<?php }
}
}
