<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/master_products/hooks/products/view_main_info.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9125343_67522031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64085d265f7195910c141e6b5995d4f2fa7aee7' => 
    array (
      0 => 'addons/master_products/hooks/products/view_main_info.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa9125343_67522031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['master_product_offers_count'] && $_smarty_tpl->getValue('product')['master_product_id'] === "0" && !($_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
    <?php $_smarty_tpl->assign('show_shipping_estimation', false, false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/view_main_info.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/view_main_info.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['master_product_offers_count'] && $_smarty_tpl->getValue('product')['master_product_id'] === "0" && !($_smarty_tpl->getValue('addons')['master_products']['allow_buy_default_common_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
    <?php $_smarty_tpl->assign('show_shipping_estimation', false, false, 2);
}
}
}
}
