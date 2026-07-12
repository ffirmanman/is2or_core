<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:32
  from 'tygh:addons/master_products/hooks/products/product_labels.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb218719b48_53822130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '222e493e6a04b388d1b1df3383a37d0ecb44a332' => 
    array (
      0 => 'addons/master_products/hooks/products/product_labels.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_label.tpl' => 2,
  ),
))) {
function content_69afb218719b48_53822130 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/master_products/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('master_products.save_up_to','master_products.save_up_to','master_products.save_up_to','master_products.save_up_to'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_master_product_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
    <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.save_up_to", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable23=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable23." <bdi>".((string)$_smarty_tpl->getValue('product')['discount_prc'])."%</bdi>", false, NULL);?>
    <?php } else { ?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.save_up_to", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable24." <bdi>".((string)$_smarty_tpl->getValue('product')['list_discount_prc'])."%</bdi>", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->getValue('label_text'),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_labels.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/master_products/hooks/products/product_labels.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('product')['company_id'] && $_smarty_tpl->getValue('show_master_product_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
    <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.save_up_to", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable25=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable25." <bdi>".((string)$_smarty_tpl->getValue('product')['discount_prc'])."%</bdi>", false, NULL);?>
    <?php } else { ?>
        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("master_products.save_up_to", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable26=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable26." <bdi>".((string)$_smarty_tpl->getValue('product')['list_discount_prc'])."%</bdi>", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->getValue('label_text'),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
}
}
}
}
