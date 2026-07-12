<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:59
  from 'tygh:addons/master_products/hooks/products/product_list_form_close_tag.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6f332584_73886072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8045241ac4e7d90ca38e10d94c85041ef677982f' => 
    array (
      0 => 'addons/master_products/hooks/products/product_list_form_close_tag.override.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6f332584_73886072 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/master_products/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('product')['best_product_offer_id']), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_list_form_close_tag.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/product_list_form_close_tag.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id']) {?>
    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('product')['best_product_offer_id']), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));
}
}
}
