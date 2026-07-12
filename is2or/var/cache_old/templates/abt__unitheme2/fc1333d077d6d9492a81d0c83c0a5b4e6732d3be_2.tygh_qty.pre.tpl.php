<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:51
  from 'tygh:addons/master_products/hooks/products/qty.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94ffd56378_84253850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1333d077d6d9492a81d0c83c0a5b4e6732d3be' => 
    array (
      0 => 'addons/master_products/hooks/products/qty.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94ffd56378_84253850 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) && $_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list')) {?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, 2);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/qty.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/qty.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) && $_smarty_tpl->getValue('is_allow_add_common_products_to_cart_list')) {?>
    <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['best_product_offer_id'], false, 2);
}
}
}
}
