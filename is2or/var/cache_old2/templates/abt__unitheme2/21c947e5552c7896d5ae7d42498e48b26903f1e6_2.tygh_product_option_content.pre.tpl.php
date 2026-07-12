<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__product_sets/hooks/products/product_option_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa97eb618_13600450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c947e5552c7896d5ae7d42498e48b26903f1e6' => 
    array (
      0 => 'addons/ab__product_sets/hooks/products/product_option_content.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__product_sets/components/sets_block.tpl' => 2,
  ),
))) {
function content_69afafa97eb618_13600450 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__product_sets/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart')),"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]") !== false) {?>

    <?php if ($_smarty_tpl->getValue('product')['ab__product_sets'] && $_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__product_sets/components/sets_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__product_sets/hooks/products/product_option_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__product_sets/hooks/products/product_option_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart')),"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('product')['product_id'])."]") !== false) {?>

    <?php if ($_smarty_tpl->getValue('product')['ab__product_sets'] && $_smarty_tpl->getValue('details_page') && !$_smarty_tpl->getValue('quick_view') && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__product_sets/components/sets_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

<?php }
}
}
}
