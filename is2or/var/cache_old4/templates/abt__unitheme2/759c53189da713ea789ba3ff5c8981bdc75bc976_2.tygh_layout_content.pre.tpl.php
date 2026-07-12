<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:38
  from 'tygh:addons/master_products/hooks/products/layout_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fed547c2_93430630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759c53189da713ea789ba3ff5c8981bdc75bc976' => 
    array (
      0 => 'addons/master_products/hooks/products/layout_content.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fed547c2_93430630 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('show_old_price', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_list_discount', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_product_labels', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_discount_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_shipping_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_product_tabs', true, false, 2);?>
    <?php $_smarty_tpl->assign('dont_show_points', !$_smarty_tpl->getValue('product')['company_id'], false, 2);?>

    <?php if (!$_smarty_tpl->getValue('product')['company_id']) {?>
        <?php $_smarty_tpl->assign('show_product_amount', false, false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/layout_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/layout_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('show_old_price', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_list_discount', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_product_labels', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_discount_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_shipping_label', false, false, 2);?>
    <?php $_smarty_tpl->assign('show_product_tabs', true, false, 2);?>
    <?php $_smarty_tpl->assign('dont_show_points', !$_smarty_tpl->getValue('product')['company_id'], false, 2);?>

    <?php if (!$_smarty_tpl->getValue('product')['company_id']) {?>
        <?php $_smarty_tpl->assign('show_product_amount', false, false, 2);?>
    <?php }
}
}
}
}
