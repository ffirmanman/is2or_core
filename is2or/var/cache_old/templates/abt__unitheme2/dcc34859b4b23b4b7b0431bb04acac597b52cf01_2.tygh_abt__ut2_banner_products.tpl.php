<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:26:56
  from 'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada3503bb7f4_18925937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc34859b4b23b4b7b0431bb04acac597b52cf01' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:blocks/list_templates/small_items.tpl' => 2,
    'tygh:blocks/list_templates/links_thumb.tpl' => 2,
  ),
))) {
function content_69ada3503bb7f4_18925937 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('banner')['banner_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_", false, NULL);?>

<?php if ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "grid_items") {?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_grid_columns'],'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_pagination'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_ids'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'products_scroller'=>true,'elements_to_scroll'=>1,'show_gallery'=>false,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable2 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_add_to_cart'=>true,'but_role'=>"action"), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "small_items") {?>

    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_small_items_columns'],'rows'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_small_items_rows'],'products_scroller'=>true,'elements_to_scroll'=>1,'show_name'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['small_items']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable4 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_discount_label'=>false,'show_add_to_cart'=>true), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "links_thumb") {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/links_thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_links_thumb_columns'],'rows'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_links_thumb_rows'],'hide_links'=>true,'products_scroller'=>true,'elements_to_scroll'=>1,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'show_name'=>false,'show_trunc_name'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_add_to_cart'=>false), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('obj_prefix', ((string)$_smarty_tpl->getValue('banner')['banner_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_", false, NULL);?>

<?php if ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "grid_items") {?>
    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_grid_columns'],'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_pagination'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'no_ids'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'products_scroller'=>true,'elements_to_scroll'=>1,'show_gallery'=>false,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_clean_price'=>true,'show_list_discount'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none",'hide_qty_label'=>true,'show_sku_label'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable5 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_sku'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable6 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_qty'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable7 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_features'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_descr'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_description" || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['ab__device']] === "features_and_variations",'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo",'show_list_buttons'=>false,'show_add_to_cart'=>true,'but_role'=>"action"), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "small_items") {?>

    <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_small_items_columns'],'rows'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_small_items_rows'],'products_scroller'=>true,'elements_to_scroll'=>1,'show_name'=>true,'show_product_amount'=>(($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['small_items']['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_prefixVariable8 ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'show_amount_label'=>false,'show_discount_label'=>false,'show_add_to_cart'=>true), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('banner')['abt__ut2_products_template'] === "links_thumb") {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/links_thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('banner')['products'],'columns'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_links_thumb_columns'],'rows'=>$_smarty_tpl->getValue('banner')['abt__ut2_products_links_thumb_rows'],'hide_links'=>true,'products_scroller'=>true,'elements_to_scroll'=>1,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>false,'show_list_discount'=>false,'show_name'=>false,'show_trunc_name'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_add_to_cart'=>false), (int) 0, $_smarty_current_dir);
}
}
}
}
