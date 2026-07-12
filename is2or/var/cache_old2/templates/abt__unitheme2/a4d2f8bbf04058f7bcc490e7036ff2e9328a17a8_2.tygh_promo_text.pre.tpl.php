<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__product_recommendations/hooks/products/promo_text.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa3761d8_45337769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4d2f8bbf04058f7bcc490e7036ff2e9328a17a8' => 
    array (
      0 => 'addons/ab__product_recommendations/hooks/products/promo_text.pre.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__product_recommendations/views/products/components/recommended_product.tpl' => 2,
  ),
))) {
function content_69afafaa3761d8_45337769 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__product_recommendations/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['ab__product_recommendations']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__product_recommendations/views/products/components/recommended_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('recommended_product'=>$_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['ab__product_recommendations'])), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__product_recommendations/hooks/products/promo_text.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__product_recommendations/hooks/products/promo_text.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['ab__product_recommendations']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__product_recommendations/views/products/components/recommended_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('recommended_product'=>$_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['ab__product_recommendations'])), (int) 0, $_smarty_current_dir);
}
}
}
}
