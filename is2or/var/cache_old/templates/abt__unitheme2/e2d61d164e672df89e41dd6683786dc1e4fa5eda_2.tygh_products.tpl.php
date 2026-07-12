<?php
/* Smarty version 5.4.3, created on 2026-03-08 22:18:39
  from 'tygh:blocks/products/products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adcb8fe874d3_00595732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d61d164e672df89e41dd6683786dc1e4fa5eda' => 
    array (
      0 => 'blocks/products/products.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/products_list.tpl' => 2,
  ),
))) {
function content_69adcb8fe874d3_00595732 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('block')['properties']['hide_options'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_product_options', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_product_options', true, false, NULL);
}?>

<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "logo",'show_product_options'=>$_smarty_tpl->getValue('_show_product_options'),'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/products/products.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('block')['properties']['hide_add_to_cart_button'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_add_to_cart', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('block')['properties']['hide_options'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('_show_product_options', false, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('_show_product_options', true, false, NULL);
}?>

<?php $_smarty_tpl->renderSubTemplate("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->getValue('items'),'no_sorting'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'obj_prefix'=>((string)$_smarty_tpl->getValue('block')['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_rating_num'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_brand_name'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "name",'show_brand_logo'=>$_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_without_options']['show_brand'][$_smarty_tpl->getValue('settings')['ab__device']] == "logo",'show_product_options'=>$_smarty_tpl->getValue('_show_product_options'),'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->getValue('_show_add_to_cart'),'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->getValue('block')['properties']['item_number']), (int) 0, $_smarty_current_dir);
}
}
}
