<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/master_products/hooks/products/product_data_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff3a5af7_07491210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60da51bce65302f686df3426acdc039408e8994e' => 
    array (
      0 => 'addons/master_products/hooks/products/product_data_content.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ff3a5af7_07491210 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
        <?php $_smarty_tpl->assign('show_view_offers_btn', true, false, 2);?>
    <?php }?>

    <?php $_smarty_tpl->assign('is_allow_add_common_products_to_cart_list', $_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);?>

    <?php $_smarty_tpl->assign('show_master_product_discount_label', $_smarty_tpl->getValue('show_discount_label'), false, 2);?>
    <?php $_smarty_tpl->assign('show_discount_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_shipping_label', false, false, 2);?>

    <?php if ($_smarty_tpl->getValue('show_product_amount') !== false) {?>
        <?php $_smarty_tpl->assign('show_product_amount', true, false, 2);?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list')) {?>
        <?php $_smarty_tpl->assign('show_out_of_stock_block', false, false, 2);?>
        <?php $_smarty_tpl->assign('show_add_to_cart_block', false, false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_data_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/product_data_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
        <?php $_smarty_tpl->assign('show_view_offers_btn', true, false, 2);?>
    <?php }?>

    <?php $_smarty_tpl->assign('is_allow_add_common_products_to_cart_list', $_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);?>

    <?php $_smarty_tpl->assign('show_master_product_discount_label', $_smarty_tpl->getValue('show_discount_label'), false, 2);?>
    <?php $_smarty_tpl->assign('show_discount_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_shipping_label', false, false, 2);?>

    <?php if ($_smarty_tpl->getValue('show_product_amount') !== false) {?>
        <?php $_smarty_tpl->assign('show_product_amount', true, false, 2);?>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list')) {?>
        <?php $_smarty_tpl->assign('show_out_of_stock_block', false, false, 2);?>
        <?php $_smarty_tpl->assign('show_add_to_cart_block', false, false, 2);?>
    <?php }
}
}
}
}
